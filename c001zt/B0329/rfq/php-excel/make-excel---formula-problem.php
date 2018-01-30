<?php

$data = $_POST['data']; // 傳過來的是string
$json_array = json_decode($data, true);

$json_array_string = json_encode($json_array);

$arr_rmb = [19, 20, 21, 22];

function isRmb($row) {
    for ($i = 0; $i < count($arr_rmb); $i++) {
        if ($arr_rmb[$i] == $row) {
            return true;
        }
    }
    return false;
}

function getDesiredData($obj) {
    $pos = (int) substr($obj["pos"], 1);
    $cdefgh = substr($obj["pos"], 0, 1);
    $colName = strtoupper($cdefgh);
    if (strtoupper($cdefgh) >= "C" && strtoupper($cdefgh) >= "H") {
        if ($pos == 23) {
//            return "=SUM(" . $colName . "19:" . $colName . "22)";
            return "=" . $colName . "19 + " . $colName . "22)";
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

$debug004 = fopen("results/debug004.txt", "w") or die("Unable to open file!");
//$debug005 = fopen("results/debug005.txt",  "rw, ccs=UTF-8") or die("Unable to open file!");
$debug005 = fopen("results/debug005.txt", "w") or die("Unable to open file!");


$obj = $json_array;

$obj2[] = array('pos' => "A0", 'data' => "xxx");

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
    $stamp = time();

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
date_default_timezone_set("Asia/Taipei");


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

$data_width = 26;
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
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(36);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth($data_width);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth($data_width);


for ($i = 0; $i < count($json_array); $i++) {
    //    $posAbc=$pos.substr(0, 1);
//    $pos = $json_array[$i]['pos'];
//    $pos123 = $pos . substr(1);

//    $objPHPExcel->setActiveSheetIndex(0)
    $objPHPExcel->getActiveSheet()
            
            //        ->setCellValue($json_array[$i]['pos'], $json_array[$i]['data']);
            ->setCellValue($json_array[$i]['pos'], getDesiredData($json_array[$i]));
}

// B欄自動換行
//$objPHPExcel->getActiveSheet()->getStyle('A1:H125')->getAlignment()
//        ->setWrapText(true);
//
//$objPHPExcel->getActiveSheet()->getStyle('A1:H125')->getAlignment()
//        ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
//$objPHPExcel->setActiveSheetIndex(0)
//        ->setCellValue('A1', $data)
//        ->setCellValue('A2', "座標轉換的問題");
// Rename worksheet
//echo date('H:i:s') , " Rename worksheet" , EOL;
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

$conditionalStyles = $objPHPExcel->getActiveSheet()->getStyle('B2')->getConditionalStyles();
array_push($conditionalStyles, $objConditional1);
array_push($conditionalStyles, $objConditional2);
array_push($conditionalStyles, $objConditional3);
//$objPHPExcel->getActiveSheet()->getStyle('B19')->setConditionalStyles($conditionalStyles);



// 
//$objPHPExcel->getActiveSheet()->duplicateConditionalStyle(
//        $objPHPExcel->getActiveSheet()->getStyle('B19')->getConditionalStyles(), 'B19:H22'
//);













// Save Excel 2007 file
//echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

//http://stackoverflow.com/questions/11189145/formula-error-in-phpexcel
$objWriter->setPreCalculateFormulas(false);

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