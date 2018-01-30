<?php
require 'Class.php';
ZTHTML::startpage();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
//echo '<a href="../c001zt" class="btn btn-primary">返回</a>';
for ($i = 0; $i < $_SESSION['views']; $i++) {
    unlink('upload/'.session_id().$_SESSION['views'.$i]);
    unset($_SESSION['views'.$i]);
   
}

//session_destroy();
ZTHTML::endpage();
?>
<script>
//    alert("删除成功");
window.location.href="../c001zt"
</script>