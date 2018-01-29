<?php
session_start(); 
require 'Class.php';
//require 'upload_file.php';
ZTHTML::startpage();



//echo '<h1>量測 10.10.0.106张韬</h1>';
ZTHTML::htmlh1('量測 10.10.0.106张韬');
//echo '  <button type="button" class="btn btn-primary">上传</button><br><br>';
//ZTHTML::showbtn('btn btn-primary', '上传', null);
//ZTHTML::showbtn('btn btn-primary', '上传1', null);
//ZTHTML::showbtn('btn btn-primary', '上传2', null);
//echo ' <a class="btn btn-primary" href="模板.xlsx">下载</a>';
//html::showbtn('btn btn-primary','下载','模板.xlsx' );
echo'<br>';
ZTHTML::getColorBtn(2, '模板.xlsx', '下载');
echo'<form action="uploads.php" method="post"  enctype="multipart/form-data">';

echo '<label for="file">Filename:</label>';
//echo ' <input type="file" name="file">';
echo ' <input type="file" name="file[]"  multiple="multiple" >';
//echo ' <input type="file" name="file[]">';
//echo ' <input type="file" name="file"> ';
echo '<br />
<input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
</form>';
echo '<br>';
ZTHTML::showbtn('btn btn-primary', '查看档案','upload');
//if(sizeof($_SESSION['views'])==0){
// echo "无上传文件";     
//}else
echo '已上传文件：';
for ($i = 0; $i < $_SESSION['views']; $i++) {
//    echo '<br>' . $_SESSION['views' . $i];
    
    if(isset($_SESSION['views'.$i])){
     echo '<br>'.$_SESSION['views'.$i]; 
    }else{
       echo "<br>已清除记录";  
    } 
}

//ini_set('session.use_strict_mode', 1);
//    $sid = md5('wuxiancheng.cn');
//    session_id($sid);
//    session_start();
//    var_dump(session_id() === $sid);

//file_name::file_name_arr();
//$session_id=session_id('index.php');
//$_SESSION['session_id']=$session_id;
//if(session_id()==$session_id){
//   mkdir('./xxx'); 
//   chmod('./xxx', 777);
//}
echo '<br><a href="http://10.10.0.106/c001zt/delExcel.php" class="btn btn-primary">删除文件</a>';
//echo '<a href="http://10.10.0.106/c001zt/delExcel.php" class="btn btn-primary">删除文件</a>';
//print_r($_FILES['file']['names']);
//echo htmlspecialchars($_POST);
//echo '';
ZTHTML::endpage();
?>