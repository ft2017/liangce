 <?php
 require 'Class.php';
ZTHTML::startpage();
// require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php'; //使用自己所在目錄的上一層所看到的 Classes
 ini_set('date.timezone','Asia/Shanghai');
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

    set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
include 'PHPExcel/IOFactory.php';
$reader = PHPExcel_IOFactory::createReader('Excel2007'); // 读取 excel 文档
$PHPExcel = $reader->load("upload/" . $_FILES["file"]["name"]); // 文档名称
$sheet = $PHPExcel->getSheet(0); // 读取第一个工作表(编号从 0 开始)
$highestRow = $sheet->getHighestRow(); // 取得总行数
$highestColumn = $sheet->getHighestColumn(); // 取得总列数
$arr = array(1 => 'A', 2 => 'B', 3 => 'C', 4 => 'D', 5 => 'E', 6 => 'F', 7 => 'G', 8 => 'H', 9 => 'I', 10 => 'J', 11 => 'K', 12 => 'L', 13 => 'M', 14 => 'N', 15 => 'O', 16 => 'P', 17 => 'Q', 18 => 'R', 19 => 'S', 20 => 'T', 21 => 'U', 22 => 'V', 23 => 'W', 24 => 'X', 25 => 'Y', 26 => 'Z');
//echo $highestRow.$highestColumn;
// 一次读取一列
for ($row = 5; $row <= $highestRow; $row++) {
    for ($column = 1; $arr[$column] != 'T'; $column++) {
        $val = $sheet->getCellByColumnAndRow($column, $row)->getValue();
//        echo $val;
        var_dump($val);
    }
    
}



// $objPHPExcelReader = PHPExcel_IOFactory::load('upload/'.$_FILES["file"]["name"]);  //加载excel文件
////$str=arry();
// foreach($objPHPExcelReader->getWorksheetIterator() as $sheet)  //循环读取sheet
// {echo '<table class="gridtable">';
//     foreach($sheet->getRowIterator() as $row)  //逐行处理
//     {
//         if($row->getRowIndex()<2)  //确定从哪一行开始读取
//         {
//             continue;
//         }
//          echo '<tr>';
//         foreach($row->getCellIterator() as $cell)  //逐列读取
//         {echo '<td>';
//             $data = $cell->getValue(); //获取cell中数据
////             $str .=$data;
////             var_dump($str);
//             echo $data;  
//             
//             echo '</td>';
//         }
//         
//         echo '</tr>';
//     }
//     echo '</table>';
// } 
 
 
//   $arr= $data;
//   foreach($arr as $key=> $val ){
//       echo '$key;
//       
//   }
ZTHTML::endpage();
    
?>