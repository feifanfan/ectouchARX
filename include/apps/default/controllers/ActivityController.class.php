<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：ActivityControoller.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：优惠活动控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class ActivityController extends CommonController
{
    private $children = '';
    private $brand = '';
    private $goods = '';
    private $size = 10;
    private $page = 1;
    private $sort = 'last_update';
    private $order = 'ASC';

    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 优惠活动 列表
     */
    public function index()
    {
        $this->parameter();
        $this->assign('page', $this->page);
        $this->assign('size', $this->size);
        $this->assign('sort', $this->sort);
        $this->assign('order', $this->order);
        $count = model('Activity')->get_activity_count();
        $this->pageLimit(url('index'), $this->size);
        $this->assign('pager', $this->pageShow($count));
        
        $list = model('Activity')->get_activity_info($this->size, $this->page);
        $this->assign('list', $list);
        
        $this->display('activity.dwt');
    }

    /**
     * 优惠活动 - 异步加载
     */
    public function asynclist()
    {
        // 开始工作
        $this->parameter();
        $asyn_last = intval(I('post.last')) + 1;
        $this->size = I('post.amount');
        $this->page = ($asyn_last > 0) ? ceil($asyn_last / $this->size) : 1;
        $list = model('Activity')->get_activity_info($this->size, $this->page);
        foreach ($list as $key => $activity) {
            $this->assign('activity', $activity);
            $sayList [] = array(
                'single_item' => ECTouch::view()->fetch('library/asynclist_info.lbi')
            );
        }
        die(json_encode($sayList));
        exit();
    }

    /**
     * 优惠活动 - 活动商品列表
     */
    public function goods_list()
    {
        $this->parameter();
        $id = intval(I('request.id'));
        $this->assign('id', $id);
        $this->assign('page', $this->page);
        $this->assign('size', $this->size);
        $this->assign('sort', $this->sort);
        $this->assign('order', $this->order);
        if (!$id) {
            $this->redirect(url('index'));
        }
        $res = $this->model->table('favourable_activity')->field()->where("act_id = '$id'")->order('sort_order ASC')->find();
        $list = array();

        if ($res['act_range'] != FAR_ALL && !empty($res['act_range_ext'])) {
            if ($res['act_range'] == FAR_CATEGORY) {
                $this->children = " cat_id " . db_create_in(get_children_cat($res['act_range_ext']));
            } elseif ($res['act_range'] == FAR_BRAND) {
                $this->brand = " g.brand_id " . db_create_in($res['act_range_ext']);
            } else {
                $this->goods = " g.goods_id " . db_create_in($res['act_range_ext']);
            }
        }
        $count = model('Activity')->category_get_count($this->children, $this->brand, $this->goods, $this->price_min, $this->price_max, $this->ext);
        $this->pageLimit(url('goods_list', array('id' => $id, 'brand' => $this->brand, 'sort' => $this->sort, 'order' => $this->order)), $this->size);
        $this->assign('pager', $this->pageShow($count));
        $goods_list = model('Activity')->category_get_goods($this->children, $this->brand, $this->goods, $this->size, $this->page, $this->sort, $this->order);
        $this->assign('goods_list', $goods_list);
        $this->display('activity_goods_list.dwt');
    }

    /**
     * 优惠活动 - 活动商品列表 -异步加载
     */
    public function asynclist_list()
    {
        $this->parameter();
        $id = intval(I('request.id'));
        if (!$id) {
            $this->redirect(url('index'));
        }
        $res = $this->model->table('favourable_activity')->field()->where("act_id = '$id'")->order('sort_order ASC')->find();
        $list = array();

        if ($res['act_range'] != FAR_ALL && !empty($res['act_range_ext'])) {
            if ($res['act_range'] == FAR_CATEGORY) {
                $this->children = " cat_id " . db_create_in(get_children_cat($res['act_range_ext']));
            } elseif ($res['act_range'] == FAR_BRAND) {
                $this->brand = "g.brand_id " . db_create_in($res['act_range_ext']);
            } else {
                $this->goods = "g.goods_id " . db_create_in($res['act_range_ext']);
            }
        }
        $this->assign('id', $id);
        $asyn_last = intval(I('post.last')) + 1;
        $this->size = I('post.amount');
        $this->page = ($asyn_last > 0) ? ceil($asyn_last / $this->size) : 1;
        $goodslist = model('Activity')->category_get_goods($this->children, $this->brand, $this->goods, $this->size, $this->page, $this->sort, $this->order);
        foreach ($goodslist as $key => $value) {
            $this->assign('act_goods', $value);
            $sayList [] = array(
                'single_item' => ECTouch::view()->fetch('library/asynclist_info.lbi')
            );
        }
        die(json_encode($sayList));
        exit();
    }

    /**
     * 处理参数便于搜索商品信息
     */
    private function parameter()
    {
        // 如果分类ID为0，则返回总分类页
        $page_size = C('page_size');
        $this->size = intval($page_size) > 0 ? intval($page_size) : 10;
        $this->page = I('request.page')? intval(I('request.page')) : 1;
        /* 排序、显示方式以及类型 */
        $default_display_type = C('show_order_type') == '0' ? 'list' : (C('show_order_type') == '1' ? 'grid' : 'album');
        $default_sort_order_method = C('sort_order_method') == '0' ? 'DESC' : 'ASC';
        $default_sort_order_type = C('sort_order_type') == '0' ? 'goods_id' : (C('sort_order_type') == '1' ? 'shop_price' : 'last_update');

        $this->assign('show_asynclist', C('show_asynclist'));
        $this->sort = (isset($_REQUEST['sort']) && in_array(trim(strtolower($_REQUEST['sort'])), array(
                    'goods_id',
                    'shop_price',
                    'last_update',
                    'sales_volume',
                    'click_count'
                ))) ? trim($_REQUEST['sort']) : $default_sort_order_type; // 增加按人气、按销量排序 by wang
        $this->order = (isset($_REQUEST['order']) && in_array(trim(strtoupper($_REQUEST['order'])), array(
                    'ASC',
                    'DESC'
                ))) ? trim($_REQUEST['order']) : $default_sort_order_method;
        $display = (isset($_REQUEST['display']) && in_array(trim(strtolower($_REQUEST['display'])), array(
                    'list',
                    'grid',
                    'album'
                ))) ? trim($_REQUEST['display']) : (isset($_COOKIE['ECS']['display']) ? $_COOKIE['ECS']['display'] : $default_display_type);
        $this->assign('display', $display);
        setcookie('ECS[display]', $display, gmtime() + 86400 * 7);
    }




    //看广告加余额积分活动首页
    public function adv_index(){

        $activity_delta_time = $this->model->table("values_list")->field("value")->where("id=9")->getOne();
        $this->assign("activity_delta_time",$activity_delta_time*1000);
        $this->display("adv_index.dwt");
    }
    //看完规定时间广告执行算法
    public function adv_ajax(){
        $activity_delta_income = $this->model->table('values_list')->field("value")->where("id=10")->getOne();//每段时间的广告收入
        $activity_up_income = $this->model->table('values_list')->field("value")->where("id=11")->getOne();//每天的封顶收入
        $date_base = date("Ymd");
        $pre_data[] = '';
        $where['date'] = $date_base;
        $where['uid'] = $_SESSION['user_id'];
        if(!$where['uid']){
           die(json_encode("登录已过期，请重新登录")); 
        }
        $data = $this->model->table("user_adv_points")->where($where)->find();
        echo (json_encode($data));
        if($data){
            // die(json_encode($data['id']));
            $data_u['point'] = $activity_delta_income+$data['point'];
            $where_u['id'] = $data['id'];
            if($data_u['point']<=$activity_up_income){
                $this->model->table("user_adv_points")->where($where_u)->data($data_u)->update();
                $sql = "update ecs_users set pay_points=pay_points+".$activity_delta_income." where user_id='$_SESSION[user_id]'";
                M()->query($sql);
            }
        }else {
            $pre_data['uid'] = $_SESSION['user_id'];
            $pre_data['date'] = $date_base;
            $pre_data['point'] = $activity_delta_income;
            $this->model->table("user_adv_points")->data($pre_data)->insert();
            $sql = "update ecs_users set pay_points=pay_points+".$activity_delta_income." where user_id='$_SESSION[user_id]'";
            M()->query($sql);
        }
    }
}
