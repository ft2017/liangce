<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 require 'Class.php';
 require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php'; //使用自己所在目錄的上一層所看到的 Classes
header("content-type:text/html;charset=utf-8");
if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
echo "<pre>";
print_r($_FILES);
echo "</pre>";

$count = count($_FILES['file']['name']);
ini_set('date.timezone', 'Asia/Shanghai');
//set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
//include 'PHPExcel/IOFactory.php';
//include '';
$reader = PHPExcel_IOFactory::createReader('Excel2007'); // 读取 excel 文档


    $v2 = '';

for ($i = 0; $i < $count; $i++) {
    $tmpfile = $_FILES['file']['tmp_name'][$i];
    $filefix = array_pop(explode(".", $_FILES['file']['name'][$i]));
    $dstfile = "upload/" . time() . "_" . mt_rand() . "." . $filefix;

//    $PHPExcel = PHPExcel_IOFactory::load('upload/' . $_FILES['file']['name'][$i]); // 文档名称
    $PHPExcel =$reader->load('upload/' . $_FILES['file']['name'][$i]);
    $sheet = $PHPExcel->getSheet(0); // 读取第一个工作表(编号从 0 开始)
    $highestRow = $sheet->getHighestRow(); // 取得总行数
    $highestColumn = $sheet->getHighestColumn(); // 取得总列数
    $arr = array(1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D', 5 => 'E', 6 => 'F', 7 => 'G', 8 => 'H', 9 => 'I', 10 => 'J', 11 => 'K', 12 => 'L', 13 => 'M', 14 => 'N', 15 => 'O', 16 => 'P', 17 => 'Q', 18 => 'R', 19 => 'S', 20 => 'T', 21 => 'U', 22 => 'V', 23 => 'W', 24 => 'X', 25 => 'Y', 26 => 'Z');
//echo $highestRow.$highestColumn;
// 一次读取一列
    for ($row = 5; $row <= $highestRow; $row++) {
        $v2 .= "<tr>";
        for ($column = 1; $arr[$column] != $highestColumn; $column++) {
            $val = $sheet->getCellByColumnAndRow($column, $row)->getValue();
//        echo $val;
            $v2 .= "<td>" . $val . "</td>";
        }
        $v2 .= "</tr>";
    }
    ?>
<?php
    if (move_uploaded_file($tmpfile, $dstfile)) {
        echo'succeed!';
//                    echo "<script>alert('succeed!');window.location.href = 'index_uploads.php';</script>";
    } else {
        echo'fail!';
//                    echo "<script>alert('fail!');window.location.href = 'index_uploads.php';</script>";
    }
}
?>
    <!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />

            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>量測 10.10.0.106张一翔</title>
            <link rel="stylesheet" type="text/css" href="style.css" />
        </head>
        <body>
            <?php
            echo "<table class = 'gridtable'><tr>" . $v2 . "</tr></table>";
            ?>
        </body>
    </html>