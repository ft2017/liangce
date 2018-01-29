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
            <meta http-equiv="refresh" content="1;url=../.." /> 
        </head> 
    </html> 

    <?php
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>RFQ</title>
        <meta charset="utf-8"></meta>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
        <meta name="keywords" content="online SpreadSheet, online Excel, enterprise spreadsheet solution, integration" />
        <meta name="description" content="EnterpriseSheet provides an enterprise solution to integrate and build your business spreadsheet. It is an online spreadsheet running on your server and you contol all of your data." />
        <meta http-equiv="Cache-Control" content="no-store"/>
        <meta http-equiv="Cache-Control" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>
        <meta http-equiv="Pragma" content="no-cache, must-revalidate, no-store"/>
        <meta name="robots" content="none" />

        <script src="php-excel/jquery-1.11.3.js"></script>

        <link rel="shortcut icon" href="resource/images/favicon.png" type="image/x-icon"></link>

        <link rel="stylesheet" type="text/css" href="js/extjs4.2.1/packages/ext-theme-gray/build/resources/ext-theme-gray-all.css"></link>

        // 載入 framework(1)
        <link rel="stylesheet" type="text/css" href="js/twcloud/resources/css/common.css"></link>
        <link rel="stylesheet" type="text/css" href="js/twcloud/resources/css/sheet.css"></link>
        <link rel="stylesheet" type="text/css" href="js/twcloud/resources/css/toolbar.css"></link>
        <link rel="stylesheet" type="text/css" href="js/twcloud/resources/css/icon.css"></link>
        <link rel="stylesheet" type="text/css" href="js/twcloud/example/resources/css/example.css"></link>


        <script type="text/javascript" src="js/extjs4.2.1/ext-all.js"></script>
        <script type="text/javascript" src="js/extjs4.2.1/locale/ext-lang-en.js"></script>

        // 載入 framework(2)
        <script type="text/javascript" src="js/twcloud/src/EnterpriseSheet/Config.js"></script>
        <script type="text/javascript" src="js/twcloud/src/language/en.js"></script>

        <script type="text/javascript" src="js/twcloud/enterprisesheet.js"></script>



        // 載入自主開發程式
        <!--"{"data":"CNC\u673a\u52a0\u5de5"}"-->
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/patch-init.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/patch-A0601.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/patch-A0602.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/patch-A0603.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/patch-A0606.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/patch-B0329.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/CUSTOMER_CELL_EDITOR.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/CUSTOMER_DEFINED_FN.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/CenterPanel.js"></script>
        <script  charset="utf-8" type="text/javascript" src="js/twcloud/index-excel/Main.js"></script>	
        <!--<script type="text/javascript" src="js/jquery/jquery-1.12.3.js"></script>-->	
        // ...請稍候 [[公版]]
        // B0329 

    </head>

    <body scroll="no">
        <div id="editFileId" value=""></div>
    </body>
</html>