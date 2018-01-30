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


    </head>
    <body>
        <center>

            <h1>--- 應用入口 ---</h1>
            <div style="font-size: 16pt">


                <?php
                if (strlen($active_user_zh) > 0) {
                    echo "登入用戶︰ $active_user_zh ($active_user)";
                    echo '&nbsp;&nbsp;<a href="../fingerprint/logout.php">[登出]</a>';
                }
                ?>

            </div>
            <div style="font-size: 32pt">
                <ul>
                    <!--<li>-->
                    <!--    <a href="../A0707/">RFQ 報價自動化 </a> <span style="font-size: 12pt"> <i> 版本︰2016-07-07</i></span>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <a href="../A1006/">RFQ 報價自動化 </a> <span style="font-size: 12pt"> <mark><i>  版本︰2016-10-06 修改材料價格</i></mark> </span>-->
                    <!--</li>-->
                    <!-- <li> -->
                        <!-- <a href="../A1121/">RFQ 報價自動化 </a> <span style="font-size: 12pt"> <mark><i>  版本︰2016-11-21 修改材料價格</i></mark> </span> -->
                    <!-- </li> -->
                    <li>
                        <a href="../B0329/">RFQ 報價自動化 </a> <span style="font-size: 12pt"> <mark><i> version 版本︰2017-03-29 </i></mark> </span>
                    </li>
         
                </ul>


            </div>

        </center>
    </body>
</html>
