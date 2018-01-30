<?php
//require 'index.php';
require 'Class.php';
require 'CaseClass_E011.php';
//require 'upload_file.php';
require 'CaseClass_A25.php';
//require 'PHPExcel.php';

ZTHTML::startpage();
session_start();
ini_set('date.timezone', 'Asia/Shanghai');
set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
include 'PHPExcel/IOFactory.php';
header("content-type:text/html;charset=utf-8");
echo '<a href="http://10.10.0.106/c001zt/" class = "btn btn-primary">返回上传页面</a>';
echo "<pre>";
print_r($_FILES);
echo "</pre>";
//echo '<link rel="stylesheet" type="text/css" href="style.css" />'
// . '<link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
//        <link rel="stylesheet" type="text/cssy" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />';

$TITLE_FONT = 24;
$TITLE_HEIGHT = 40;
$BODY_FONT = 14;
//$objPHPExcel = new PHPExcel();
$objPHPExcel = new PHPExcel();

$strToday = DEV::getToday();
CLASS UP {

    static public function getHtmlTable基本款有流水号_自动栏位($arr) {
        $isDebug = true;
//    var_dump($arrAuto);
//        foreach ($arrAuto as $val) {
//            $key = $val['FIELD_NAME'];
//            $v0 = $val['FIELD_DISPLAY'];
//            $v1 = $val['FIELD_ALIGN'];
////            $v2 = $val['FIELD_WIDTH'];
//
//            $auto[$key] = array($v0, $v1);
//
////        echo "$key ,$v0 ,$v1 ,$v2<BR>";
//        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";
//        var_dump($fieldName);
//        $fields = explode(",", $fieldName);
////        var_dump($fields);
//
//
//        $strTable .= "<tr><th></th>";
//
//        foreach ($fields as $val) {
//
//            $strTable .= "<th>";
//            $strTable .= $val;
//            $strTable .= "</th>";
//        }
//        $strTable .= "</tr>";
//echo "<h1>WHY? $isDebug </H1>";

        if (false) {
            $strTable .= "<tr><th></th>";
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }

        // 2017-11-07
        // SMART FIELD NAME

        if ($isDebug) {
            $strTable .= "<tr><th></th>";
            foreach ($arr[0] as $key => $val) {

//                $strTable .= "<th>";
                if (isset($auto[$key])) {
//                     $strTable .= $SMART[$key];
                    $strTable .= "<th>";
                    $strTable .= $auto[$key][0];
                    $strTable .= "</th>";
                } else {
                    $strTable .= "<th>";
                    $strTable .= $key;
                    $strTable .= "</th>";
                }
            }
            $strTable .= "</tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            if (isset($arr[$key][0])) {
                $strTable .= "<th>&nbsp;" . (0 + $key) . "&nbsp;</th>";
            }
            $align_index = 0;
            foreach ($val as $key2 => $val2) {
//                $alignX = substr($align, $align_index, 1);
//            echo $alignX."  $align<hr>";
                if (isset($auto[$key2][1])) {
                    $alignX = $auto[$key2][1];
                } else {
                    $alignX = 'L';
                }
                switch ($alignX) {
                    case 'L':

                        $strTable .= "<td>";
                        $strTable .= $val2;
                        $strTable .= "</td>";
                        break;
                    case 'N':
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2);
                        $strTable .= "</td>";
                        break;
                    case 'X'://小數點一位, 2017-11-07,Mark, 一哥
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2, 1);
                        $strTable .= "</td>";
                        break;
                    case 'Y'://小數點2位, 2017-11-15,Mark, 一哥
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2, 2);
                        $strTable .= "</td>";
                        break;
                    case 'Z'://小數點4位, 2017-11-15,Mark, 一哥
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2, 4);
//                        $strTable .= number_format($val2, 2, '.', ',');
                        $strTable .= "</td>";
                        break;
                    case 'C':

                        $strTable .= "<td class='text_align_center'>";
                        $strTable .= $val2;
                        $strTable .= "</td>";
                        break;
                    case 'R':
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2);
                        $strTable .= "</td>";
                        break;
                    default:
                        $strTable .= "<td>";
                        $strTable .= $val2;
                        $strTable .= "</td>";
                }
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function makeExcelSheetAPP001($arr, $sheetIndex, $sheetTitle) {
        global $TITLE_FONT;
        global $TITLE_HEIGHT;
        global $BODY_FONT;

        global $objPHPExcel;
        global $strToday;

//    $msgWorkSheet = new PHPExcel_Worksheet($objPHPExcel, 'card_message'); //创建一个工作表
//    $objPHPExcel->addSheet($msgWorkSheet); //插入工作表
        $objPHPExcel->setActiveSheetIndex($sheetIndex);

        $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize($BODY_FONT);
        //（一）標題
        $objPHPExcel->getActiveSheet()->setCellValue('A1', "Production Part Approval   Dimensional Results");
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight($TITLE_HEIGHT); //    $objPHPExcel->getActiveSheet()->getStyle( 'A1')->getFont()->getColor()->setRGB('D4D4D4' );
// $objPHPExcel->getActiveSheet()->getStyle( 'A2:I2')->getFill()->getStartColor()->setARGB('FFD4D4D4');
        $objPHPExcel->getActiveSheet()->getStyle('A2:I2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D4D4D4'); //设置第一行背景色为ccffff
        $objPHPExcel->getActiveSheet()->mergeCells('A1:N4');
        $objPHPExcel->getActiveSheet()->mergeCells('A7:B7');
        $objPHPExcel->getActiveSheet()->mergeCells('A5:B5');
        $objPHPExcel->getActiveSheet()->mergeCells('C5:G5');
        $objPHPExcel->getActiveSheet()->mergeCells('C6:G6');
        $objPHPExcel->getActiveSheet()->mergeCells('B12:B13');



        //（二）table col name
//    $objPHPExcel->getActiveSheet()->setCellValue('A2', '部门')
//            ->setCellValue('B2', '部门名称')
//            ->setCellValue('C2', '工序')
//            ->setCellValue('D2', '工序名称')
//            ->setCellValue('E2', '产品')
//            ->setCellValue('F2', '工单')
//            ->setCellValue('G2', '数量')
//            ->setCellValue('H2', '项次')
//            ->setCellValue('I2', '产品名称')
//
//            
//            
//    ;
//    $objPHPExcel->getActiveSheet()->mergeCells('A5:G6');
        $objPHPExcel->getActiveSheet()->mergeCells('A12:A13');
        $objPHPExcel->getActiveSheet()->getStyle('A12')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

        $objPHPExcel->getActiveSheet()->setCellValue('A12', 'ITEM')
                ->setCellValue('B12', 'DIMENSION / SPECIFICATION')
                ->setCellValue('A5', 'SUPPLIER')
                ->setCellValue('C5', '富钛金属科技（昆山）有限公司')
                ->setCellValue('C6', 'FULLTECH INDUSTRY (KUNSHAN)CO.LTD')
                ->setCellValue('H5', 'PART NUMBER')
                ->setCellValue('I6', '617523500G')
                ->setCellValue('A7', 'INSPECTION FACILITY')
                ->setCellValue('H7', 'PART NAME')
                ->setCellValue('I7', '6175235螺纹头')
                ->setCellValue('A9', 'REMARKS')
                ->setCellValue('B10', '6175235_007 6207767_004')
                ->setCellValue('I7', '6175235螺纹头')

        ;
        //（三）table content
//    $arr = T100PROD::getArray($sql);
//    100	14.9±0.05		SC	OMM+height gageOMM+height gage	617523500G	14.89 	14.90 	14.89 	14.89 			OK	
//    $arr01 = array('100', '14.9±0.05', 'SC', 'OMM+height gageOMM+height gage', '617523500G', '14.89', '14.90', '14.89', '14.89');
//    $arr[] = $arr01;
//    $arr[] = $arr01;
//    $arr[] = $arr01;


//        var_dump($arr);

        $objPHPExcel->getActiveSheet()->fromArray($arr, NULL, 'A14');
//    echo date('H:i:s'), " Rename worksheet", EOL;

        $objPHPExcel->getActiveSheet()->setTitle($sheetTitle);
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
//$objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

        $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize($TITLE_FONT);
        $objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('C6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('E2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('F2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('G2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('H2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $objPHPExcel->getActiveSheet()->getStyle('I2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

//    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight($TITLE_HEIGHT);


        $widthBase = 9;
        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth($widthBase * 2.5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(0.1 * $widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth($widthBase);
        $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth($widthBase);
//循环  
        $maxRec = sizeof($arr) + 3;
//    $maxRec = 10; // NOTE: for debug

        for ($i = 3; $i < $maxRec; $i++) {
//$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $i);  

            $objPHPExcel->getActiveSheet()->getStyle('A' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $objPHPExcel->getActiveSheet()->getStyle('B' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//$objPHPExcel->getActiveSheet()->setCellValue('B' . $i, 'Test value'); 
            $objPHPExcel->getActiveSheet()->getStyle('C' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $objPHPExcel->getActiveSheet()->getStyle('F' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            $objPHPExcel->getActiveSheet()->getStyle('H' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->getStyle('G' . $i)->getNumberFormat()->setFormatCode('#,##0');
            $objPHPExcel->getActiveSheet()->getStyle('I' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
        }
//#,##0;-#,##0
// Save Excel 95 file
//echo date('H:i:s'), " Write to Excel5 format", EOL;
//$callStartTime = microtime(true);
    }

}



$count = count($_FILES['file']['name']);
$_SESSION['views'] = $count;
for ($i = 0; $i < $count; $i++) {
    $tmpfile = $_FILES['file']['tmp_name'][$i];
    //看起来没什么用，还会报错，2018-01-22
//    $filefix = array_pop(explode(".", $_FILES['file']['name'][$i]));
    $dstfile = "upload/" . session_id() . $_FILES['file']['name'][$i];
    echo $_FILES['file']['name'][$i] . '<br>';
    $_SESSION['views' . $i] = $_FILES['file']['name'][$i];



    if (move_uploaded_file($tmpfile, $dstfile)) {
        echo'succeed!<br>';
//                    echo "<script>alert('succeed!');window.location.href='index_uploads.php';</script>";
    } else {
        echo'fail!';
//                    echo "<script>alert('fail!');window.location.href='index_uploads.php';</script>";
    }
}


//$subs=substr($dstfile,0,3);
//echo $subs;
//if()
echo '<table class="gridtable">';
$arr[][] = '';
$arr1[][] = '';
$x = 0;
$z = 0;
for ($i = 0; $i < $count; $i++) {
//    echo $arr;
    $filename = $_FILES["file"]["name"][$i];
//    substr($filename,0,3);
    if (substr($filename, 0, 3) == 'omm') {
        $objPHPExcelReader = PHPExcel_IOFactory::load('upload/' . session_id() . $_FILES["file"]["name"][$i]);  //加载excel文件
        foreach ($objPHPExcelReader->getWorksheetIterator() as $sheet) {  //循环读取sheet
            foreach ($sheet->getRowIterator() as $row) {  //逐行处理
                if ($row->getRowIndex() < 2) {  //确定从哪一行开始读取
                    continue;
                }
                echo '<tr>';
                $y = 0;
                foreach ($row->getCellIterator() as $cell) {  //逐列读取
                    echo '<td>';
                    $data = $cell->getValue(); //获取cell中数据
                    $arr1[$x][$y] = $data; //通过赋值产生array
                    $y++;
                    echo $data;
                    echo '</td>';
                }
                $x++;
                echo '</tr>';
            }
        }
    } else {

        $objPHPExcelReader = PHPExcel_IOFactory::load('upload/' . session_id() . $_FILES["file"]["name"][$i]);  //加载excel文件
        foreach ($objPHPExcelReader->getWorksheetIterator() as $sheet) {  //循环读取sheet
            foreach ($sheet->getRowIterator() as $row) {  //逐行处理
                if ($row->getRowIndex() < 5) {  //确定从哪一行开始读取
                    continue;
                }
                echo '<tr>';
                $q = 0;
                foreach ($row->getCellIterator() as $cell) {  //逐列读取
                    echo '<td>';
                    $data = $cell->getValue(); //获取cell中数据
                    $arr[$z][$q] = $data; //通过赋值产生array
                    $q++;
                    echo $data;
                    echo '</td>';
                }
                $z++;
                echo '</tr>';
            }
        }
    }
}
echo '</table>';

//var_dump($arr1);
//echo '<hr>';
//echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
//echo '<hr>';
//
//var_dump($arr);
//die('...');
//print_r($arr1);
$m = count($arr1[0]); //列
$n = count($arr1, 0); //行
//echo $m;
//echo $n;

for ($h = 0; $h < $n; $h++) {
    if (strstr($arr1[$h][1], '±')) {
        $arr11 = explode('±', $arr1[$h][1]);
    } elseif (strstr($arr1[$h][1], '+')) {
        $arr11 = explode('+', $arr1[$h][1]);
        if (strstr($arr11[1], '/')) {
            $arr11[2] = explode('/', $arr11[1]);
        }
    }

//echo $h;
//    print_r($arr11[$h][0]); 
//    unset($arr[$h][0]);
//    var_dump($arr11[2][1);

    @$arr1[$h][1] = @$arr11[0];
    if (strstr($arr11[1], '-')) {
        $arr12 = explode('-', $arr11[1]);
//        var_dump($arr12);
//        strstr ( $email ,  '@' ,  true )
        @$arr1[$h][2] = strstr(@$arr12[0], '/', true);
        @$arr1[$h][3] = @$arr12[1];
//        return $arr12;
    } else {
        @$arr1[$h][2] = @$arr11[1];
        @$arr1[$h][3] = @$arr11[1];
    }
//    if(strstr($arr12[0], '/')) {
//       $arr13= explode( '/',$arr12[0]);
////       @$arr1[$h][2] = @$arr13[];
//    }

    @$arr1[$h][4] = @$arr11[0];
    @$arr1[$h][5] = '';
    @$arr1[$h][6] = '';
    @$arr1[$h][7] = $arr1[$h][0];
    $arr1[$h][0] = $h + 1;
}
//echo UP::getHtmlTable基本款有流水号_自动栏位($arr1);
//die('...');
//var_dump($arr1);
$m = count($arr1[0]); //列
$n = count($arr1, 0); //行
//if (isset($arr)) {
$a = count($arr[0]);
$b = count($arr, 0);
//} else {
//    $arr[][]='';
$a = 0;
$b = 0;
//}
for ($x = 0; $x < $n; $x++) {
//    var_dump($arr);
//   $arr[$b+$x][$a]=$arr1[$x][$m];
    if (isset($arr)) {
        for ($y = 0; $y < $m; $y++) {
            $arr[$b + $x][$y] = $arr1[$x][$y];
        }
    } else {
        $arr = $arr1;
    }
}

//var_dump($arr);
//echo UP::getHtmlTable基本款有流水号_自动栏位($arr);
//die('xxxxxxxxxxxxxxxxx');
//sort($arr);
//echo UP::getHtmlTable基本款有流水号_自动栏位($arr);
//echo '<br>';
//print_r($arr);
//die('...');
//echo '<table class="gridtable">';
//$arr[][] = '';
//$x = 0;
//for ($i = 0; $i < $count; $i++) {
////    echo $arr;
//    $objPHPExcelReader = PHPExcel_IOFactory::load('upload/' . session_id() . $_FILES["file"]["name"][$i]);  //加载excel文件
//    foreach ($objPHPExcelReader->getWorksheetIterator() as $sheet) {  //循环读取sheet
//        foreach ($sheet->getRowIterator() as $row) {  //逐行处理
//            if ($row->getRowIndex() < 5) {  //确定从哪一行开始读取
//                continue;
//            }
//            echo '<tr>';
//            $y = 0;
//            foreach ($row->getCellIterator() as $cell) {  //逐列读取
//                echo '<td>';
//                $data = $cell->getValue(); //获取cell中数据
//                $arr[$x][$y] = $data;//通过赋值产生array
//                $y++;
//                echo $data;
//                echo '</td>';
//            }
//            $x++;
//            echo '</tr>';
//        }
//    }
//}
//echo '</table>';
//var_dump($arr);
//echo UP::getHtmlTable基本款有流水号_自动栏位($arr);
echo count($arr[0]);
echo count($arr, 0);
for ($a = 0; $a < count($arr, 0); $a++) {
    @$arr[$a][0] = $arr[$a][count($arr[0]) - 1];
    $arr[$a][count($arr[0]) - 1] = '';
//    unset($arr[$a][count($arr[0])-1]);
}
//var_dump($arr);
//echo UP::getHtmlTable基本款有流水号_自动栏位($arr);



var_dump($arr[0][0]);
//for($i=0;$i < 10;$i++){
//    $x = 0;
//for($j=$i+1;$j<10;$j++){
//    if($arr[0][$i] == $arr[0][$j]){
//        $arr[8-1+$x][$i] = $arr[4][$j];
//        $x++;
//    }
//}
//}
$m = count($arr[0]);
$n = count($arr, 0);

echo $m, $n;
for ($i = 0; $i < $n; $i++) {
    $x = 0;
    for ($j = $i + 1; $j < $n; $j++) {
        if (@$arr[$i][0] == @$arr[$j][0]) {
            @$arr[$i][$m - 1 + $x] = $arr[$j][4];
            $x++;
            unset($arr[$j]);
        }
    }
    if (@$arr[$i][0] == null) {
        unset($arr[$i]);
    }
}
//$arr[0][7] = $arr[1][4];
//sort($arr);//排序，开发时可先抑制
echo UP::getHtmlTable基本款有流水号_自动栏位($arr);

//$m = count($arr[0]);
//$n = count($arr,0);
echo $m, $n;
for ($i = 0; $i < $n; $i++) {//循环处理每行，i控制第几行，n是总行数即列长度
    @$arr[$i][5] = @$arr[$i][4];
//    $arr[$i][6]=$arr[$i][7];
    $arr[$i][4] = '';
//    $arr[$i][7]='';
    array_splice($arr[$i], 6, 1); //删除第7列
    for ($j = 5; $j < 10; $j++) {//显示789下标的空列
        if (@$arr[$i][$j] == NULL) {
            $arr[$i][$j] = '';
        }
    }
    $arr[$i][12] = $arr[$i][11] = $arr[$i][10] = ''; //新增三列
    for ($j = 5; $j < 10; $j++) {
//        if ($arr[$i][$j] == NULL) {
//            $arr[$i][$j] = '';
//        }
        if ($arr[$i][11] == '') {
            $arr[$i][11] = "OK";
        }
        if ($arr[$i][$j] != '' && ((floatval($arr[$i][$j]) < ((floatval($arr[$i][1])) - floatval($arr[$i][3]))) || (floatval($arr[$i][$j]) > ((floatval($arr[$i][1]) + floatval($arr[$i][2])))))) {
            $arr[$i][$j] = "<font color='#FF0000'>" . $arr[$i][$j] . "</font>";
            $arr[$i][11] = "NG";
        }
    }

    if (@$arr[$i][2] == @$arr[$i][3] && @$arr[$i][2] == 0) {//是否为【0】
    } elseif ($arr[$i][2] == $arr[$i][3] && $arr[$i][2] != 0) {//是否为【相同】上下限按规则改变
        $arr[$i][1] .= "±" . $arr[$i][2];
    } elseif ($arr[$i][2] != $arr[$i][3]) {//是否为【不同】上下限按规则改变
        $arr[$i][1] = $arr[$i][1] . "+" . $arr[$i][2] . "/" . $arr[$i][1] . "-" . $arr[$i][3];
    }

    $arr[$i][2] = ''; //清空上下限的列
    $arr[$i][3] = '';
    if (@$arr[$i][0] == null) {
        unset($arr[$i]);
    }
}


sort($arr);
//    array_splice($arr[1],0); //删除第7列
echo UP::getHtmlTable基本款有流水号_自动栏位($arr);

//die('xxxxxxxxxxxxxxx');

//echo 'xxxxxxxxxxx';

//$sql = "SELECT 
//WO,STN,在制數,良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數  CHK_在制数,良品轉入, 良品轉出, 當站報廢, 委外加工數, 委外完成數, 待轉入, 待開工, 待完工, 待轉出,分割转出, 待PQC數 
//FROM FT_SFCB_T_MORE
//WHERE 在制數<>良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數
//";
$title = "APP001";

$toDownload_A25 = "$title" . "_" . "$strToday.xls"; //档案名称


$objPHPExcel = new PHPExcel(); //Excel档案的object
UP::makeExcelSheetAPP001($arr, 0, "尺寸報告"); //sheet0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); //要用PHP生成Excel的object
$f = GEN::getOutputFile(__FILE__, $toDownload_A25); //指定要下载的路径和档案名称
$objWriter->save($f); //PHP生成Excel并保存在上述指定路径
echo "<BR><a class='btn btn-primary btn-lg' href='gen/$toDownload_A25'>點擊下載 【 $toDownload_A25 】</a>";
//echo $arr[17][8] != '';
//echo (floatval($arr[17][5]) > (floatval($arr[17][1]) - floatval($arr[17][3])));
//echo floatval($arr[17][5])."<br>";
//echo floatval($arr[17][1])."<br>";
//echo number_format(floatval($arr[17][2]),2)."<br>";
//echo floatval($arr[17][5]) > ((floatval($arr[17][1])) - floatval($arr[17][3]));
//echo floatval($arr[17][5]) < ((floatval($arr[17][1])) + floatval($arr[17][2]));

ZTHTML::endpage();
