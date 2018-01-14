<?
// 设置 header，防止乱码
header("Content-Type: text/html; charset=utf-8");

// 判断是否有请求生成二维码的内容
if (!empty($_GET['qrcode']))
{

    // 引入 phpqrcode 类用于生成 QR Code
    require_once __DIR__ . '/phpqrcode/phpqrcode.php';

    // 使用 phpqrcode 类生成二维码并输出
    QRcode::png($_GET['qrcode'], false, 'L', 10, 1);

    // 结束程序
    die();
}

/**
 * 支付宝 & 微信二维码二合一程序
 *
 * @param string $wechat 传入微信二维码真实地址
 * @param string $alipay 传入支付宝二维码真实地址
 */
function QRCodeMerge($wechat, $alipay)
{
    // 判断 User-Agent 是否微信
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ'))
    {
        // 二维码图片链接
        $image = 'http://qrcode.merge.demo.legendsock.com/index.php?qrcode='.$wechat;

        // 输出提示与 HTML 的换行
        echo '长按识别二维码<br />';

        // 输出 HTML 图片标签以显示图片
        echo "<img src='{$image}' />";
    }
    // 否则判断 User-Agent 是否支付宝
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Ali'))
    {

        // 如果条件成立、跳转地址到支付宝
        header("Location: {$alipay}");
    }
    // 如果不是支付宝与微信则输出提示信息
    else
    {
        // 结束程序并输出提示
        echo '请使用支付宝或微信客户端扫描';
    }

    // 结束程序
    die();
}

// 运行函数
QRCodeMerge(
    'wxp://f2f0vFc70pqBY_8DUOL2Pr8Jp244-w0ja5SI', // 微信二维码真实地址
    'https://QR.ALIPAY.COM/FKX05222IYEWLG6SWUUB68' // 支付宝二维码真实地址
);