<?php
Session_Start();
$IS_DEBUG = false;
$_SESSION["current_page"] = "portal/index.php";
$finger_id = "";
$active_user = "";
$active_user_zh = "";
if (isset($_SESSION["finger_id"])) {
    $finger_id = $_SESSION["finger_id"];
}
if (isset($_SESSION["active_user"])) {
    $active_user = $_SESSION["active_user"];
}
if (isset($_SESSION["active_user_zh"])) {
    $active_user_zh = $_SESSION["active_user_zh"];
}
if ($IS_DEBUG) {
    print_r($_SESSION);
}

if (strlen($active_user) == 0) {
    ?>
    <html> 
        <head> 
            <meta http-equiv="refresh" content="1;url=.." /> 
        </head> 
    </html> 

    <?php
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery-1.10.2.js"></script>
        <title>RFQ</title>

    </head>
    <body>
        <center>

            <h1>--- RFQ 應用入口 ---</h1>
            <div style="font-size: 16pt">


                <?php
                if (strlen($active_user_zh) > 0) {
                    echo "登入用戶︰ $active_user_zh ($active_user)";
                    echo '&nbsp;&nbsp;<a href="../../fingerprint/logout.php">[登出]</a>';
                }
                ?>

            </div>
            <div style="font-size: 32pt">
                <mark><i>  版本︰2017-03-29, (1)汇率计算改為 USD1.00 = RMB6.65(2)新增压铸件难易系数, 新版的压铸費=旧版压铸費總额* “难易系数”</i></mark> 
                <ul>
                    <li>
                        <a target="_blank" href="index-zh.php">RFQ 報價自動化 ( 公版 )</a>
                    </li>
                    <li>
                        <a  target="_blank" href="index-en.php">(MEX) RFQ 報價自動化 ( 中英文版 )  </a>
                    </li>
                </ul>


            </div>

        </center>
    </body>
</html>
