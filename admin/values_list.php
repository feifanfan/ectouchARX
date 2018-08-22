<?php
/**
 * 活动参数设置
 */

define('IN_ECTOUCH', true);

/* 代码 */
require(dirname(__FILE__) . '/includes/init.php');
if ($GLOBALS['_CFG']['certificate_id']  == '') {
    $certi_id='error';
} else {
    $certi_id=$GLOBALS['_CFG']['certificate_id'];
}

$sess_id = $GLOBALS['sess']->get_session_id();

$auth = time();
$ac = md5($certi_id.'SHOPEX_SMS'.$auth);
$url = 'http://service.ectouch.cn/sms/index.php?certificate_id='.$certi_id.'&sess_id='.$sess_id.'&auth='.$auth.'&ac='.$ac;

if ($_REQUEST['act'] == 'list_edit') {
    /* 检查权限 */
    admin_priv('values_list');
    $smarty->assign('ur_here', "活动参数设置");
    $smarty->assign('group_list', get_settings(null, array('5')));
    assign_query_info();
    $smarty->display('values_list.htm');
}

elseif ($_REQUEST['act'] == 'post') {
    $type = empty($_POST['type']) ? '' : $_POST['type'];

    /* 检查权限 */
    admin_priv('values_list');


    /* 保存变量值 */
    $count = count($_POST['value']);

    $arr = array();
    $sql = 'SELECT id, value FROM ' . $ecs->table('values_list');
    $res= $db->query($sql);
    while ($row = $db->fetchRow($res)) {
        $arr[$row['id']] = $row['value'];
    }
    foreach ($_POST['value'] as $key => $val) {
        if ($arr[$key] != $val) {
            $sql = "UPDATE " . $ecs->table('values_list') . " SET value = '" . trim($val) . "' WHERE id = '" . $key . "'";
            //var_dump($sql)."<br>";
            $db->query($sql);
        }
    }
    admin_log('', 'edit', 'values_list');
    sys_msg("保存成功", 0 );
  }

function get_settings($groups=null, $excludes=null)
{
    global $db, $ecs, $_LANG;

    $config_groups = '';
    $excludes_groups = '';

    if (!empty($groups)) {
        foreach ($groups as $key=>$val) {
            $config_groups .= " AND (id='$val' OR parent_id='$val')";
        }
    }

    if (!empty($excludes)) {
        foreach ($excludes as $key=>$val) {
            $excludes_groups .= " AND (parent_id<>'$val' AND id<>'$val')";
        }
    }

    /* 取出全部数据：分组和变量 */
    $sql = "SELECT * FROM " . $ecs->table('values_list') .
            " WHERE type<>'hidden' $config_groups $excludes_groups ORDER BY parent_id, sort_order, id";
    $item_list = $db->getAll($sql);
    /* 整理数据 */
    $group_list = array();
    foreach ($item_list as $key => $item) {
        $pid = $item['parent_id'];
        $item['name'] = isset($_LANG['values_list'][$item['code']]) ? $_LANG['values_list'][$item['code']] : $item['code'];
        $item['desc'] = isset($_LANG['cfg_desc'][$item['code']]) ? $_LANG['cfg_desc'][$item['code']] : '';

        if ($item['code'] == 'sms_shop_mobile') {
            $item['url'] = 1;
        }
        if ($pid == 0) {
            /* 分组 */
            if ($item['type'] == 'group') {
                $group_list[$item['id']] = $item;
            }
        } else {
            /* 变量 */
            if (isset($group_list[$pid])) {
                if ($item['store_range']) {
                    $item['store_options'] = explode(',', $item['store_range']);

                    foreach ($item['store_options'] as $k => $v) {
                        $item['display_options'][$k] = isset($_LANG['cfg_range'][$item['code']][$v]) ?
                                $_LANG['cfg_range'][$item['code']][$v] : $v;
                    }
                }
                $group_list[$pid]['vars'][] = $item;
            }
        }
    }
    return $group_list;
}
?>