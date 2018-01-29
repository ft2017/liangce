<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Session_Start();
$_SESSION["finger_id"] = "";
$_SESSION["device_id"] = "";
$_SESSION["activle_user"] = "";

$finger_id = $_POST['finger_id'];
$device_id = $_POST['device_id'];

if ($device_id != "abc987") {
    echo "wrong device";
    return;
}




$nameList[611] = "1mark.chen";
$nameList[612] = "2mark.chen";
$nameList[613] = "3mark.chen";
$nameList[614] = "4mark.chen";
$nameList[615] = "5mark.chen";


$active_user = $nameList[$finger_id];
if (strlen($active_user) > 0) {
    $_SESSION["finger_id"] = $finger_id;
    $_SESSION["active_user"] = $active_user;

    echo "ok999";
} else {
    echo "wrong finger";
}

//$pass=$_POST['pass'];
//echo "id=$id, name=$name, active_user=$active_user";

//echo "ok777";
