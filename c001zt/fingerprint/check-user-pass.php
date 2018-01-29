<?php
Session_Start();

//echo "...checking user-pass<br>";
$xx_username=$_POST["xx_username"];
//echo $xx_username;



$IS_DEBUG = false;
$_SESSION["current_page"] = "fingerprint/index.php";
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



//http://phppot.com/php/php-login-script-with-session/
$message = "";
if (count($_POST) > 0) {
//    $conn = mysql_connect("localhost", "root", "");
//    mysql_select_db("phppot_examples", $conn);
//    $result = mysql_query("SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");
//    $row = mysql_fetch_array($result);
//    if (is_array($row)) {
    $check_result = FALSE;
    if (($_POST["xx_username"] == "rfq") && ($_POST["xx_password"] == "Rfq@2016")) {
        $check_result = TRUE;
    }

    if ($check_result) {
        $_SESSION["user_id"] = '12345';
        $_SESSION["user_name"] = 'abc';

        $_SESSION["active_user"] = "rfq";
        $_SESSION["active_user_zh"] = "臨時共用帳號";

//        echo "PASS";
        header("Location:../portal");
        exit();
        
    } else {
        $message = "帳號密碼不正確，請重新提交。";
//        echo "failed!";
//        header("Location:index.php");
//        exit();
        ?>

<html>
    <head>
        <title>index</title>
        <meta http-equiv="refresh" content="2;url=index.php" /> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center>
          <div style="margin-top: 60px;  font-size: 32pt">
        帳號密碼不正確，請重新提交。<br>...停留三秒鐘，引導至登入頁面</div>
    </center>
    </body>
</html>

<?php
        
    }
}