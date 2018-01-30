<?php

$data = $_POST['data']; // 傳過來的是string
$isDataInCol = $_POST['isDataInCol'];
$json_array = json_decode($data, true); // json_decode and json_encode not 100% converted for utf-8, WHY?

/*
  $isDataInCol
  ABC.....  只有第一個產品
  ABCD.... 有2個產品




 */

// FOR DEBUG
/*
  $myfile1 = fopen("make-excel-debug.txt", "w") or die("Unable to open file!");
  fwrite($myfile1, $isDataInCol);
  fwrite($myfile1, "is it working?");
  fclose($myfile1);
 */


//$json_array_string = json_encode($json_array);
//$arr_rmb = [19, 20, 21, 22];
//
//function isRmb($row) {
//    for ($i = 0; $i < count($arr_rmb); $i++) {
//        if ($arr_rmb[$i] == $row) {
//            return true;
//        }
//    }
//    return false;
//}


//B0329
//加點程式, 去掉用戶在頁用格內有換行時造成的<br/>

function getDesiredData($obj) {
    $colName =  substr($obj["pos"],0, 1);
    $rowNum = (int) substr($obj["pos"], 1);
    
 //    {"pos":"C34","data":"4%"}
 //  {"pos":"C47","data":"91%"}
    //
    // NOTE: 
    // [[A0601]] 位移重新定位百分比欄位 
    //if (in_array($rowNum, array(47,57,68,89,106))){
    
    // NOTE
    // B0329, insert row 49
    // if (in_array($rowNum, array(48,58,69,93,110))){
    // 是否小數要2位??? TODO
    if (in_array($rowNum, array(48,59,70,94,111))){
        if ($colName>="C" && $colName<="H" ){
            $p1=str_replace("%","",$obj["data"]);
            $p2=  doubleval(str_replace(",","",$p1));
            $p3=$p2/100;
            return $p3;
        }
    }


    $temp1 = $obj["data"];
    //   $temp3=$temp1;
    //if (substr($temp1, 0, 1) == '¥') {
    $temp2 = str_replace('¥', '', $temp1);
    $temp3 = str_replace(',', '', $temp2);




    //}


    $temp4 = str_replace('<span style="padding-left:20px;font-size:0px;">&nbsp;</span>', '', $temp3);
    $temp5 = str_replace('===', '≡≡≡', $temp4);
    $temp6 = str_replace('#N/A', '', $temp5);
    
    //B0329
    $temp6 = str_replace('<br/>', '', $temp6);


    return $temp6;
}

function fix01($row, $str) {





    $str2 = str_replace('<span style="padding-left:20px;font-size:0px;">&nbsp;</span>', '', $str);
    $str3 = str_replace('===', '≡≡≡', $str2);


//    if (isRmb($row)){
//         $str3=str_replace('¥','',$str3);
//         $str3=str_replace(',','',$str3);
//         
//    }

    return $str3;
}

//$json_by_user = $_POST['json_by_user']; // 傳過來的是string
//$json_by_user_obj = json_decode($json_by_user, true);
$debug003 = fopen("results/debug003.txt", "w") or die("Unable to open file!");
fwrite($debug003, $data);
fclose($debug003);

// reviewed by Mark, 2017-03-29
// to 吳楠
// 先宣告變量,指向檔案results/debug004.txt, 可以寫入
$debug004 = fopen("results/debug004.txt", "w") or die("Unable to open file!");
//$debug005 = fopen("results/debug005.txt",  "rw, ccs=UTF-8") or die("Unable to open file!");
$debug005 = fopen("results/debug005.txt", "w") or die("Unable to open file!");


$obj = $json_array;

$obj2[] = array('pos' => "A0", 'data' => "xxx");


// code reviewed by Mark, 2017-03-29
// to 吳楠
// results/debug004.txt, data 寫入的地方
for ($i = 0; $i < count($obj); $i++) {
    fwrite($debug004, $i);
    fwrite($debug004, ",");
    fwrite($debug004, $obj[$i]["pos"]);
    fwrite($debug004, ",");
    $data = $obj[$i]["data"];

    fwrite($debug004, $obj[$i]["data"]);
    fwrite($debug004, ",");
    $rowNum = (int) substr($obj[$i]["pos"], 1);
    fwrite($debug004, $rowNum);

//    if ($rowNum>=19 && $rowNum<=22){//isRmb
    if (in_array($rowNum, [19, 20, 21, 22])) {
        $fix_data = str_replace(',', '', $data); //¥
        $fix_data = str_replace('¥', '', $fix_data); //
    } else {
        $fix_data = $data;
    }
    $obj2[] = array('pos' => $obj[$i]["pos"], 'data' => $fix_data);

    fwrite($debug004, ",");
    fwrite($debug004, $fix_data);
    fwrite($debug004, "\n");
}
fwrite($debug005, json_encode($obj2));
fclose($debug005);

//fclose($debug_file_002);
// dropdown list problem
// 1. === might cause err
// 2. when selected, need to remove <span style="padding-left:20px;font-size:0px;">&nbsp;</span>
// A360<span style="padding-left:20px;font-size:0px;">&nbsp;</span>




function getHttpToDownload($stamp) {
    //  $stamp = time(); // GOT THE KILLER ...VERY HAPPY!!!
//    echo "<h1>$stamp</h1>";
    $host = $_SERVER['HTTP_HOST'];
//    echo "<h1>$host</h1>";
    $script = $_SERVER['REQUEST_URI'];
//    echo "<h1>$script</h1>";
//$paths =  explode('"'+DIRECTORY_SEPARATOR+'"',$script );
//$paths =  explode(DIRECTORY_SEPARATOR,$script );
    $paths = explode('/', $script);

    $cnt = count($paths);


    $result_path = $host;
    for ($i = 0; $i < $cnt - 1; $i++) {
        $result_path.=$paths[$i] . "/";
//    echo "<h1>$result_path</h1>";
    }
    $result_path.="results/RFQ" . $stamp . ".xlsx";
//    $result_path="php-excel/results/RFQ" . $stamp . ".xlsx";
//    echo "<h1>$result_path</h1>";
    return $result_path;
//    return '<h1>'.$result_path.'</h1>';
}

//echo "<h1>xxx $name 在 $city </h1>";
date_default_timezone_set("Asia/Taipei");
//echo "The time is " . date("h:i:s a");
// by Mark, 2016/5/13 14:30
//date_default_timezone_set("Asia/Taipei");


/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//date_default_timezone_set('Europe/London');

define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
//require_once '../Build/PHPExcel.phar';
// NOTE by Mark 2016/5/12 3:24, 昆山
// 相信是原作者改版多次但未更新本範例
require_once '../Classes/PHPExcel.php';
//echo "__FILE__===> ".__FILE__ , EOL;
//echo "pathinfo(__FILE__, PATHINFO_BASENAME)===> ". pathinfo(__FILE__, PATHINFO_BASENAME) , EOL;
//echo "pathinfo(__FILE__, PATHINFO_DIRNAME)===> ". pathinfo(__FILE__, PATHINFO_DIRNAME) , EOL;
$stamp = time();
$defaultOutputFile = pathinfo(__FILE__, PATHINFO_DIRNAME) . DIRECTORY_SEPARATOR . "results" . DIRECTORY_SEPARATOR . "RFQ$stamp.xlsx";
//echo "\$defaultOutputFile===> ".$defaultOutputFile , EOL;
// Create new PHPExcel object
//echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();

$data_width = 22;
// Set document properties
//echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("in-house WebApp RFQ")
        ->setLastModifiedBy("in-house WebApp RFQ")
        ->setTitle("RFQ")
        ->setSubject("RFQ")
        ->setDescription("RFQ generated using PHP classes.")
        ->setKeywords("office PHPExcel php")
        ->setCategory("Test result file");

// NOTE BY MARK, TO HAVE FIXED COLUMN WIDTH
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(32);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth($data_width);


// NOTE︰ by Mark, 2016/5/4
// 行數看是少，卻是處理最大量的信息。
for ($i = 0; $i < count($json_array); $i++) {
    $objPHPExcel->getActiveSheet()
            ->setCellValue($json_array[$i]['pos'], getDesiredData($json_array[$i]));
}







// 全部上下左右置中、自動換行
$objPHPExcel->getActiveSheet()->getStyle('A1:H125')->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
        ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER)
        ->setWrapText(true);
//
$objPHPExcel->getActiveSheet()->setTitle('RFQ');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


$objConditional1 = new PHPExcel_Style_Conditional();
$objConditional1->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
        ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_BETWEEN)
        ->addCondition('200')
        ->addCondition('400');
$objConditional1->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_YELLOW);
$objConditional1->getStyle()->getFont()->setBold(true);
$objConditional1->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);
$objConditional2 = new PHPExcel_Style_Conditional();
$objConditional2->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
        ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_LESSTHAN)
        ->addCondition('0');
$objConditional2->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
$objConditional2->getStyle()->getFont()->setItalic(true);
$objConditional2->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);
$objConditional3 = new PHPExcel_Style_Conditional();
$objConditional3->setConditionType(PHPExcel_Style_Conditional::CONDITION_CELLIS)
        ->setOperatorType(PHPExcel_Style_Conditional::OPERATOR_GREATERTHANOREQUAL)
        ->addCondition('0');
$objConditional3->getStyle()->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
$objConditional3->getStyle()->getFont()->setItalic(true);
//$objConditional3->getStyle()->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE);
$objConditional3->getStyle()->getNumberFormat()->setFormatCode("¥#,##0.00");
//$objConditional3->getStyle()->getNumberFormat()->setFormatCode("¥#,##0.00");

$conditionalStyles = $objPHPExcel->getActiveSheet()->getStyle('C19')->getConditionalStyles();
array_push($conditionalStyles, $objConditional1);
array_push($conditionalStyles, $objConditional2);
array_push($conditionalStyles, $objConditional3);



//$objPHPExcel->getActiveSheet()->getStyle('C19')->setConditionalStyles($conditionalStyles);
//$objPHPExcel->getActiveSheet()->getStyle('C19:H23')->getNumberFormat()->setFormatCode("¥#,##0.00");
//$objPHPExcel->getActiveSheet()->getStyle('C24:H24')->getNumberFormat()->setFormatCode("$#,##0.00");
// 
//$objPHPExcel->getActiveSheet()->duplicateConditionalStyle(
//        $objPHPExcel->getActiveSheet()->getStyle('C19')->getConditionalStyles(), 'C19:H23'
//);
// Save Excel 2007 file
//echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

//
// --- 以下檔案內容由 make-excel-helper.php 生成，現階段先以手工複制粘貼方式
//
// include 'make-excel-genearted-statements.php';
//wrong spelling here
// 2017-03-30 genearted => generated

//B0329, by Mark, 當時Excel的公式是在這裡加進去的.
// 因為在 enterprisesheet 只找到導出數值, 沒找到公式的導出
include 'make-excel-to-include.php';





//[[A0603]] 文清想去掉多的空行，目前的結構會破壞,沒找到隱
// 不能設為0, 0.1 或 1 可行
$objPHPExcel->getActiveSheet()->getRowDimension('5')->setRowHeight(1);
$objPHPExcel->getActiveSheet()->getRowDimension('26')->setRowHeight(1);

//
//$objPHPExcel->getActiveSheet()->getRowDimension('27')->setRowHeight(1);

// B0329
// HIDE ROW
// $objPHPExcel->getActiveSheet()->getRowDimension('59')->setRowHeight(1);
$objPHPExcel->getActiveSheet()->getRowDimension('60')->setRowHeight(1);

$objPHPExcel->getActiveSheet()->getRowDimension('6')->setRowHeight(120);





// 如果沒有項目料號，就不顯示。
// 實際做法是把該Column內容清空，顏色為白。
// ABC....
// ABCDEFGH
if (substr($isDataInCol, 3, 1) == '.') {
    for ($i = 1; $i <= 125; $i++) {
        $objPHPExcel->getActiveSheet()->setCellValue("D$i", '');
        $objPHPExcel->getActiveSheet()->getStyle("D$i")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF');
    }
}
if (substr($isDataInCol, 4, 1) == '.') {
    for ($i = 1; $i <= 125; $i++) {
        $objPHPExcel->getActiveSheet()->setCellValue("E$i", '');
        $objPHPExcel->getActiveSheet()->getStyle("E$i")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF');
    }
}
if (substr($isDataInCol, 5, 1) == '.') {
    for ($i = 1; $i <= 125; $i++) {
        $objPHPExcel->getActiveSheet()->setCellValue("F$i", '');
        $objPHPExcel->getActiveSheet()->getStyle("F$i")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF');
    }
}
if (substr($isDataInCol, 6, 1) == '.') {
    for ($i = 1; $i <= 125; $i++) {
        $objPHPExcel->getActiveSheet()->setCellValue("G$i", '');
        $objPHPExcel->getActiveSheet()->getStyle("G$i")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF');
    }
}
if (substr($isDataInCol, 7, 1) == '.') {
    for ($i = 1; $i <= 125; $i++) {
        $objPHPExcel->getActiveSheet()->setCellValue("H$i", '');
        $objPHPExcel->getActiveSheet()->getStyle("H$i")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('FFFFFF');
    }
}




$objWriter->save($defaultOutputFile);
//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));






$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

//echo date('H:i:s') , " 檔案生成 " , $defaultOutputFile;
//echo $defaultOutputFile;
//echo "|";
//echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
//echo 'Check Excel file NEED TO GET PHP FILE    --- results/result123.xlsx' , EOL;
//curl_get_file_contents(getHttpToDownload($stamp));

echo getHttpToDownload($stamp);
//header("Content-disposition: attachment; filename=huge_document.pdf");
//header("Content-type: application/pdf");
//readfile("huge_document.pdf");

//
//
//echo getHttpToDownload($stamp);
////http://stackoverflow.com/questions/10088932/how-to-download-a-file-from-server-using-php-code/10088979
//function curl_get_file_contents($URL) {
//  $c = curl_init();
//  curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
//  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
//  curl_setopt($c, CURLOPT_URL, $URL);
//  $contents = curl_exec($c);
//  $err  = curl_getinfo($c,CURLINFO_HTTP_CODE);
//  curl_close($c);
//  if ($contents) return $contents;
//  else return FALSE;
//}