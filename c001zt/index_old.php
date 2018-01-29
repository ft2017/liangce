<?php
Session_Start();
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
if (strlen($active_user) == 0) {
    ?>
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <title>index</title>
            <meta http-equiv="refresh" content="1;url=fingerprint" /> 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>


        <center>
            <div style="margin-top: 60px;  font-size: 32pt">
                ...引導至登入頁面
            </div>
        </center>
    </body>
    </html>





    <?php
    exit();
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>index</title>
        <meta http-equiv="refresh" content="1;url=portal" /> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <center>
        <div style="margin-top: 60px;  font-size: 32pt">
            ...引導至應用入口
        </div>
    </center>
</body>
</html>
