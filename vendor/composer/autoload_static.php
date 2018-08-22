<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97400414cd340293c52e947010a46e12
{
    public static $files = array (
        '261615f98d6e06cd677ee02792318e25' => __DIR__ . '/..' . '/ecmoban/ecmoban.php',
    );

    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'ecmoban\\' => 8,
        ),
        'P' => 
        array (
            'Payment\\' => 8,
        ),
        'O' => 
        array (
            'OSS\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ecmoban\\' => 
        array (
            0 => __DIR__ . '/..' . '/ecmoban',
        ),
        'Payment\\' => 
        array (
            0 => __DIR__ . '/..' . '/riverslei/payment/src',
        ),
        'OSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'Whoops' => 
            array (
                0 => __DIR__ . '/..' . '/filp/whoops/src',
            ),
        ),
    );

    public static $classMap = array (
        'OSS\\Core\\MimeTypes' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/MimeTypes.php',
        'OSS\\Core\\OssException' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssException.php',
        'OSS\\Core\\OssUtil' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssUtil.php',
        'OSS\\Http\\RequestCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore.php',
        'OSS\\Http\\RequestCore_Exception' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore_Exception.php',
        'OSS\\Http\\ResponseCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/ResponseCore.php',
        'OSS\\Model\\BucketInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketInfo.php',
        'OSS\\Model\\BucketListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketListInfo.php',
        'OSS\\Model\\CnameConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CnameConfig.php',
        'OSS\\Model\\CorsConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsConfig.php',
        'OSS\\Model\\CorsRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsRule.php',
        'OSS\\Model\\GetLiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelHistory.php',
        'OSS\\Model\\GetLiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelInfo.php',
        'OSS\\Model\\GetLiveChannelStatus' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelStatus.php',
        'OSS\\Model\\LifecycleAction' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleAction.php',
        'OSS\\Model\\LifecycleConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleConfig.php',
        'OSS\\Model\\LifecycleRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleRule.php',
        'OSS\\Model\\ListMultipartUploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListMultipartUploadInfo.php',
        'OSS\\Model\\ListPartsInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListPartsInfo.php',
        'OSS\\Model\\LiveChannelConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelConfig.php',
        'OSS\\Model\\LiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelHistory.php',
        'OSS\\Model\\LiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelInfo.php',
        'OSS\\Model\\LiveChannelListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelListInfo.php',
        'OSS\\Model\\LoggingConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LoggingConfig.php',
        'OSS\\Model\\ObjectInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectInfo.php',
        'OSS\\Model\\ObjectListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectListInfo.php',
        'OSS\\Model\\PartInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PartInfo.php',
        'OSS\\Model\\PrefixInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PrefixInfo.php',
        'OSS\\Model\\RefererConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/RefererConfig.php',
        'OSS\\Model\\UploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/UploadInfo.php',
        'OSS\\Model\\WebsiteConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/WebsiteConfig.php',
        'OSS\\Model\\XmlConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/XmlConfig.php',
        'OSS\\OssClient' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/OssClient.php',
        'OSS\\Result\\AclResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AclResult.php',
        'OSS\\Result\\AppendResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AppendResult.php',
        'OSS\\Result\\BodyResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/BodyResult.php',
        'OSS\\Result\\CallbackResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CallbackResult.php',
        'OSS\\Result\\CopyObjectResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CopyObjectResult.php',
        'OSS\\Result\\DeleteObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/DeleteObjectsResult.php',
        'OSS\\Result\\ExistResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ExistResult.php',
        'OSS\\Result\\GetCnameResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCnameResult.php',
        'OSS\\Result\\GetCorsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCorsResult.php',
        'OSS\\Result\\GetLifecycleResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLifecycleResult.php',
        'OSS\\Result\\GetLiveChannelHistoryResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelHistoryResult.php',
        'OSS\\Result\\GetLiveChannelInfoResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelInfoResult.php',
        'OSS\\Result\\GetLiveChannelStatusResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelStatusResult.php',
        'OSS\\Result\\GetLoggingResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLoggingResult.php',
        'OSS\\Result\\GetRefererResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetRefererResult.php',
        'OSS\\Result\\GetWebsiteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetWebsiteResult.php',
        'OSS\\Result\\HeaderResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/HeaderResult.php',
        'OSS\\Result\\InitiateMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/InitiateMultipartUploadResult.php',
        'OSS\\Result\\ListBucketsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListBucketsResult.php',
        'OSS\\Result\\ListLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListLiveChannelResult.php',
        'OSS\\Result\\ListMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListMultipartUploadResult.php',
        'OSS\\Result\\ListObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListObjectsResult.php',
        'OSS\\Result\\ListPartsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListPartsResult.php',
        'OSS\\Result\\PutLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutLiveChannelResult.php',
        'OSS\\Result\\PutSetDeleteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutSetDeleteResult.php',
        'OSS\\Result\\Result' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/Result.php',
        'OSS\\Result\\UploadPartResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/UploadPartResult.php',
        'Payment\\ChargeContext' => __DIR__ . '/..' . '/riverslei/payment/src/ChargeContext.php',
        'Payment\\Charge\\Ali\\AliAppCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Ali/AliAppCharge.php',
        'Payment\\Charge\\Ali\\AliBarCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Ali/AliBarCharge.php',
        'Payment\\Charge\\Ali\\AliQrCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Ali/AliQrCharge.php',
        'Payment\\Charge\\Ali\\AliWapCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Ali/AliWapCharge.php',
        'Payment\\Charge\\Ali\\AliWebCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Ali/AliWebCharge.php',
        'Payment\\Charge\\Cmb\\CmbCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Cmb/CmbCharge.php',
        'Payment\\Charge\\Wx\\WxAppCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Wx/WxAppCharge.php',
        'Payment\\Charge\\Wx\\WxBarCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Wx/WxBarCharge.php',
        'Payment\\Charge\\Wx\\WxPubCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Wx/WxPubCharge.php',
        'Payment\\Charge\\Wx\\WxQrCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Wx/WxQrCharge.php',
        'Payment\\Charge\\Wx\\WxWapCharge' => __DIR__ . '/..' . '/riverslei/payment/src/Charge/Wx/WxWapCharge.php',
        'Payment\\Client\\Charge' => __DIR__ . '/..' . '/riverslei/payment/src/Client/Charge.php',
        'Payment\\Client\\Helper' => __DIR__ . '/..' . '/riverslei/payment/src/Client/Helper.php',
        'Payment\\Client\\Notify' => __DIR__ . '/..' . '/riverslei/payment/src/Client/Notify.php',
        'Payment\\Client\\Query' => __DIR__ . '/..' . '/riverslei/payment/src/Client/Query.php',
        'Payment\\Client\\Refund' => __DIR__ . '/..' . '/riverslei/payment/src/Client/Refund.php',
        'Payment\\Client\\Transfer' => __DIR__ . '/..' . '/riverslei/payment/src/Client/Transfer.php',
        'Payment\\Common\\AliConfig' => __DIR__ . '/..' . '/riverslei/payment/src/Common/AliConfig.php',
        'Payment\\Common\\Ali\\AliBaseStrategy' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/AliBaseStrategy.php',
        'Payment\\Common\\Ali\\Data\\AliBaseData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/AliBaseData.php',
        'Payment\\Common\\Ali\\Data\\Charge\\AppChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Charge/AppChargeData.php',
        'Payment\\Common\\Ali\\Data\\Charge\\BarChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Charge/BarChargeData.php',
        'Payment\\Common\\Ali\\Data\\Charge\\ChargeBaseData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Charge/ChargeBaseData.php',
        'Payment\\Common\\Ali\\Data\\Charge\\QrChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Charge/QrChargeData.php',
        'Payment\\Common\\Ali\\Data\\Charge\\WapChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Charge/WapChargeData.php',
        'Payment\\Common\\Ali\\Data\\Charge\\WebChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Charge/WebChargeData.php',
        'Payment\\Common\\Ali\\Data\\Query\\ChargeQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Query/ChargeQueryData.php',
        'Payment\\Common\\Ali\\Data\\Query\\QueryBaseData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Query/QueryBaseData.php',
        'Payment\\Common\\Ali\\Data\\Query\\RefundQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Query/RefundQueryData.php',
        'Payment\\Common\\Ali\\Data\\Query\\TransferQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/Query/TransferQueryData.php',
        'Payment\\Common\\Ali\\Data\\RefundData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/RefundData.php',
        'Payment\\Common\\Ali\\Data\\TransData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Ali/Data/TransData.php',
        'Payment\\Common\\BaseData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/BaseData.php',
        'Payment\\Common\\BaseStrategy' => __DIR__ . '/..' . '/riverslei/payment/src/Common/BaseStrategy.php',
        'Payment\\Common\\CmbConfig' => __DIR__ . '/..' . '/riverslei/payment/src/Common/CmbConfig.php',
        'Payment\\Common\\Cmb\\CmbBaseStrategy' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/CmbBaseStrategy.php',
        'Payment\\Common\\Cmb\\Data\\BindCardData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/Data/BindCardData.php',
        'Payment\\Common\\Cmb\\Data\\Charge\\ChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/Data/Charge/ChargeData.php',
        'Payment\\Common\\Cmb\\Data\\CmbBaseData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/Data/CmbBaseData.php',
        'Payment\\Common\\Cmb\\Data\\PubKeyData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/Data/PubKeyData.php',
        'Payment\\Common\\Cmb\\Data\\Query\\ChargeQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/Data/Query/ChargeQueryData.php',
        'Payment\\Common\\Cmb\\Data\\Query\\RefundQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/Data/Query/RefundQueryData.php',
        'Payment\\Common\\Cmb\\Data\\RefundData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Cmb/Data/RefundData.php',
        'Payment\\Common\\ConfigInterface' => __DIR__ . '/..' . '/riverslei/payment/src/Common/ConfigInterface.php',
        'Payment\\Common\\PayException' => __DIR__ . '/..' . '/riverslei/payment/src/Common/PayException.php',
        'Payment\\Common\\Weixin\\Data\\BackAppChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/BackAppChargeData.php',
        'Payment\\Common\\Weixin\\Data\\BackPubChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/BackPubChargeData.php',
        'Payment\\Common\\Weixin\\Data\\Charge\\AppChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Charge/AppChargeData.php',
        'Payment\\Common\\Weixin\\Data\\Charge\\BarChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Charge/BarChargeData.php',
        'Payment\\Common\\Weixin\\Data\\Charge\\ChargeBaseData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Charge/ChargeBaseData.php',
        'Payment\\Common\\Weixin\\Data\\Charge\\PubChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Charge/PubChargeData.php',
        'Payment\\Common\\Weixin\\Data\\Charge\\QrChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Charge/QrChargeData.php',
        'Payment\\Common\\Weixin\\Data\\Charge\\WapChargeData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Charge/WapChargeData.php',
        'Payment\\Common\\Weixin\\Data\\Query\\ChargeQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Query/ChargeQueryData.php',
        'Payment\\Common\\Weixin\\Data\\Query\\RefundQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Query/RefundQueryData.php',
        'Payment\\Common\\Weixin\\Data\\Query\\TransferQueryData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/Query/TransferQueryData.php',
        'Payment\\Common\\Weixin\\Data\\RefundData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/RefundData.php',
        'Payment\\Common\\Weixin\\Data\\TransferData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/TransferData.php',
        'Payment\\Common\\Weixin\\Data\\WxBaseData' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/Data/WxBaseData.php',
        'Payment\\Common\\Weixin\\WechatHelper' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/WechatHelper.php',
        'Payment\\Common\\Weixin\\WxBaseStrategy' => __DIR__ . '/..' . '/riverslei/payment/src/Common/Weixin/WxBaseStrategy.php',
        'Payment\\Common\\WxConfig' => __DIR__ . '/..' . '/riverslei/payment/src/Common/WxConfig.php',
        'Payment\\Config' => __DIR__ . '/..' . '/riverslei/payment/src/Config.php',
        'Payment\\HelperContext' => __DIR__ . '/..' . '/riverslei/payment/src/HelperContext.php',
        'Payment\\Helper\\Cmb\\BindCardHelper' => __DIR__ . '/..' . '/riverslei/payment/src/Helper/Cmb/BindCardHelper.php',
        'Payment\\Helper\\Cmb\\PubKeyHelper' => __DIR__ . '/..' . '/riverslei/payment/src/Helper/Cmb/PubKeyHelper.php',
        'Payment\\NotifyContext' => __DIR__ . '/..' . '/riverslei/payment/src/NotifyContext.php',
        'Payment\\Notify\\AliNotify' => __DIR__ . '/..' . '/riverslei/payment/src/Notify/AliNotify.php',
        'Payment\\Notify\\CmbNotify' => __DIR__ . '/..' . '/riverslei/payment/src/Notify/CmbNotify.php',
        'Payment\\Notify\\NotifyStrategy' => __DIR__ . '/..' . '/riverslei/payment/src/Notify/NotifyStrategy.php',
        'Payment\\Notify\\PayNotifyInterface' => __DIR__ . '/..' . '/riverslei/payment/src/Notify/PayNotifyInterface.php',
        'Payment\\Notify\\WxNotify' => __DIR__ . '/..' . '/riverslei/payment/src/Notify/WxNotify.php',
        'Payment\\QueryContext' => __DIR__ . '/..' . '/riverslei/payment/src/QueryContext.php',
        'Payment\\Query\\Ali\\AliChargeQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Ali/AliChargeQuery.php',
        'Payment\\Query\\Ali\\AliRefundQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Ali/AliRefundQuery.php',
        'Payment\\Query\\Ali\\AliTransferQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Ali/AliTransferQuery.php',
        'Payment\\Query\\Cmb\\CmbChargeQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Cmb/CmbChargeQuery.php',
        'Payment\\Query\\Cmb\\CmbRefundQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Cmb/CmbRefundQuery.php',
        'Payment\\Query\\Wx\\WxChargeQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Wx/WxChargeQuery.php',
        'Payment\\Query\\Wx\\WxRefundQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Wx/WxRefundQuery.php',
        'Payment\\Query\\Wx\\WxTransferQuery' => __DIR__ . '/..' . '/riverslei/payment/src/Query/Wx/WxTransferQuery.php',
        'Payment\\RefundContext' => __DIR__ . '/..' . '/riverslei/payment/src/RefundContext.php',
        'Payment\\Refund\\AliRefund' => __DIR__ . '/..' . '/riverslei/payment/src/Refund/AliRefund.php',
        'Payment\\Refund\\CmbRefund' => __DIR__ . '/..' . '/riverslei/payment/src/Refund/CmbRefund.php',
        'Payment\\Refund\\WxRefund' => __DIR__ . '/..' . '/riverslei/payment/src/Refund/WxRefund.php',
        'Payment\\Trans\\AliTransfer' => __DIR__ . '/..' . '/riverslei/payment/src/Trans/AliTransfer.php',
        'Payment\\Trans\\WxTransfer' => __DIR__ . '/..' . '/riverslei/payment/src/Trans/WxTransfer.php',
        'Payment\\TransferContext' => __DIR__ . '/..' . '/riverslei/payment/src/TransferContext.php',
        'Payment\\Utils\\ArrayUtil' => __DIR__ . '/..' . '/riverslei/payment/src/Utils/ArrayUtil.php',
        'Payment\\Utils\\Curl' => __DIR__ . '/..' . '/riverslei/payment/src/Utils/Curl.php',
        'Payment\\Utils\\DataParser' => __DIR__ . '/..' . '/riverslei/payment/src/Utils/DataParser.php',
        'Payment\\Utils\\Rc4Encrypt' => __DIR__ . '/..' . '/riverslei/payment/src/Utils/Rc4Encrypt.php',
        'Payment\\Utils\\Rsa2Encrypt' => __DIR__ . '/..' . '/riverslei/payment/src/Utils/Rsa2Encrypt.php',
        'Payment\\Utils\\RsaEncrypt' => __DIR__ . '/..' . '/riverslei/payment/src/Utils/RsaEncrypt.php',
        'Payment\\Utils\\StrUtil' => __DIR__ . '/..' . '/riverslei/payment/src/Utils/StrUtil.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\SoapResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/SoapResponseHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Module' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/Module.php',
        'Whoops\\Provider\\Phalcon\\WhoopsServiceProvider' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Provider/Phalcon/WhoopsServiceProvider.php',
        'Whoops\\Provider\\Silex\\WhoopsServiceProvider' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Provider/Silex/WhoopsServiceProvider.php',
        'Whoops\\Provider\\Zend\\ExceptionStrategy' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
        'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => __DIR__ . '/..' . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
        'ecmoban\\Upload\\Driver\\Alioss' => __DIR__ . '/..' . '/ecmoban/Upload/Driver/Alioss.php',
        'ecmoban\\Upload\\Driver\\Local' => __DIR__ . '/..' . '/ecmoban/Upload/Driver/Local.php',
        'ecmoban\\Upload\\Upload' => __DIR__ . '/..' . '/ecmoban/Upload/Upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97400414cd340293c52e947010a46e12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97400414cd340293c52e947010a46e12::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit97400414cd340293c52e947010a46e12::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit97400414cd340293c52e947010a46e12::$classMap;

        }, null, ClassLoader::class);
    }
}
