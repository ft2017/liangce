<?php

class EXCEL011_WIP_ERR_ADV {

    static public function getSheetInfo($num) {

        if ($num == 0) {

            $zip['sql'] = "SELECT PROD, ITEM_NAME,PC,to_char(sysdate,'yyyy-mm-dd hh24:mi:ss') 查询时间 FROM TLKP_HOT_PROD_ALL A, DEV_ITEM B WHERE A.PROD=B.ITEM AND A.GRP=3";
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔("產品,    產品名稱,生管人员,查询时间");
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔("CLCC");
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, "1.5,2,1,2");
            return $zip;
        }
        if ($num == 1) {
//            $zip['sql'] = "SELECT A.DEPT, DEPT_NAME, A.PROD, A.PROD_NAME, OP, STN, STN_TIMER, STN_NAME, QTY1, QYT2, QTY3, QYT4 FROM ADV_WIP_PROD_ROW_NAME_1234 A
//JOIN TLKP_HOT_PROD B
//ON A.PROD = B.PROD
//ORDER BY A.PROD,A.OP,A.STN";
            $zip['sql'] = "SELECT GRP,PROD, PROD_NAME,DEPT, DEPT_NAME,  OP, STN, STN_TIMER, STN_NAME, QTY1, QYT2, QTY3, QYT4,QTY5
FROM ADV_WIP_PROD_ROW_BY_GRP WHERE GRP=3
ORDER BY PROD,OP,STN,STN_TIMER";
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔("组别,產品,    產品名稱,部门,部门名称,项次,工序,次,工序名称,在制良品数,报废数,在制返工数,瑕疵品待判定数,合计");
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔("CCLCLCCCLNNNNN");
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, "0.5,1.5,1.5,1,1,0.5,1,0.5,1,1,1,1,1");
            return $zip;
        }
        if ($num == 2) {
            $zip['sql'] = "
SELECT TERM,TERM_DESC FROM TLKP_TERM WHERE CAT='关注产品'";
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔("栏位,说明");
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔("LL");
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, "1.5,5,1,1,0.5,1,0.5,1,1,1,1");
//            EXCEL007_WIP_ERR::getHEADER2(), EXCEL007_WIP_ERR::getArrAlign3(), EXCEL007_WIP_ERR::getArrWidth3()
            return $zip;
        }
        if ($num == 3) {
            $zip['sql'] = "
SELECT * FROM ADV_WIP_PROD_ROW_BY_GRP_SUM WHERE GRP = 3";
//    JOIN TLKP_HOT_PROD B
//ON A.PROD = B.PROD
//ORDER BY A.PROD,A.OP,A.STN
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔("组别,產品,    產品名稱,部门,部门名称,在制良品数,报废数,在制返工数,瑕疵品待判定数");
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔("CCLCLNNNNN");
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, "0.5,1.5,1.5,1,1,1,1,1,1,1");
//            EXCEL007_WIP_ERR::getHEADER2(), EXCEL007_WIP_ERR::getArrAlign3(), EXCEL007_WIP_ERR::getArrWidth3()
            return $zip;
        }
        return array();
    }

    static public function getSheetInfoByGrpSheet($grp, $sheet) {
//        echo "<h1>arr[$grp][$sheet]  is calling...</h1>";

        $zip = array();
        if ($sheet == 0) {
            $zip['sql'] = E011::getGroupSheetSQL($grp, $sheet);
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔(E011::$SHEET_0_表头);
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔(E011::$SHEET_0_左中右);
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, E011::$SHEET_0_栏宽);
//            return $zip;
        }
        if ($sheet == 1) {
            $zip['sql'] = E011::getGroupSheetSQL($grp, $sheet);
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔(E011::$SHEET_1_表头);
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔(E011::$SHEET_1_左中右);
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, E011::$SHEET_1_栏宽);
//            return $zip;
        }
        if ($sheet == 2) {
            $zip['sql'] = E011::getGroupSheetSQL($grp, $sheet);
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔(E011::$SHEET_2_表头);
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔(E011::$SHEET_2_左中右);
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, E011::$SHEET_2_栏宽);
//            return $zip;
        }
        if ($sheet == 3) {
            $zip['sql'] = E011::getGroupSheetSQL($grp, $sheet);
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔(E011::$SHEET_3_表头);
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔(E011::$SHEET_3_左中右);
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, E011::$SHEET_3_栏宽);
//            return $zip;
        }
        if ($sheet == 4) {
            $zip['sql'] = E011::getGroupSheetSQL($grp, $sheet);
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔(E011::$SHEET_4_表头);
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔(E011::$SHEET_4_左中右);
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, E011::$SHEET_4_栏宽);
//            return $zip;
        }
        if ($sheet == 5) {
            $zip['sql'] = E011::getGroupSheetSQL($grp, $sheet);
            $zip['header'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔(E011::$SHEET_5_表头);
            $zip['align'] = EXCEL011_WIP_ERR_ADV::getArrByStr沒任何分隔(E011::$SHEET_5_左中右);
            $zip['width'] = EXCEL011_WIP_ERR_ADV::getArrByStr逗號分隔_欄位寬(12, E011::$SHEET_5_栏宽);
//            return $zip;
        }
        return $zip;
    }

    static public function getSQL1() {
        $sql = "SELECT 
WO,STN,在制數,良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數  CHK_在制数,良品轉入, 良品轉出, 當站報廢, 委外加工數, 委外完成數, 待轉入, 待開工, 待完工, 待轉出,分割转出, 待PQC數 
FROM FT_SFCB_T_MORE
WHERE 在制數<>良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數
";
        return $sql;
    }

    static public function getSQL2() {
        $sql = "select B.DEPT,B.DEPT_NAME, A.STN,B.STN_NAME,A.WO, WO_STATUS||':'||C.NAME WO_STATUS_NAME, RCARD, 當站報廢, 准报废数 from RAW_ASFT301_验算当站报废 A
LEFT JOIN DEV_STN_DEPT B
ON A.STN = B.STN
LEFT JOIN TLKP_DECODE C
ON A.WO_STATUS = C.CODE
where 
C.CAT = 'WO_STATUS' AND
當站報廢!=准报废数 
";
        return $sql;
    }

    static public function getSQL3() {
        $sql = "SELECT * FROM ADV_ASFT301_DEPT_待轉入
";
        return $sql;
    }

    static public function getHEADER0() {
        $arrHeader = array('在制数不平', '报废数不平', '转出转入不平', '查询时间');
        return $arrHeader;
    }

    static public function getHEADER1() {
        $arrHeader = array('WO', 'STN', '在制數', 'CHK_在制数', '良品轉入', '良品轉出', '當站報廢', '委外加工數', '委外完成數', '待轉入', '待開工', '待完工', '待轉出', '分割转出', '待PQC數');
        return $arrHeader;
    }

    static public function getArrByStr沒任何分隔($str) {
//       $arr= explode(",", $str);
        for ($i = 0; $i < strlen($str); $i++) {
            $arr2[] = $str[$i];
        }
        return $arr2;
    }

    static public function getArrByStr逗號分隔($str) {
        $arr = explode(",", $str);
        foreach ($arr as $val) {
            $arr2[] = trim($val);
        }
        return $arr2;
    }

    static public function getArrByStr逗號分隔_欄位寬($unit, $str) {
        $arr = explode(",", $str);
        foreach ($arr as $val) {
            $arr2[] = $unit * $val;
        }
        return $arr2;
    }

    static public function getHEADER2() {
        $arrHeader = array('部门', '部门名称', '工序', '工序名称', '工单', '工单状态', 'R', '當站報廢', '准报废数');
        return $arrHeader;
    }

    static public function getHEADER3() {
        $arrHeader = array('部门', '部门名称', '工序', '工序名称', '工单', '待转入数');
        return $arrHeader;
    }

    static public function getArrWidth0() {
        $unit = 12;
        $arrHeader = array($unit, $unit, $unit, 2 * $unit,);
        return $arrHeader;
    }

    static public function getArrWidth1() {
        $unit = 12;
        $arrHeader = array(2 * $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit,);
        return $arrHeader;
    }

    static public function getArrWidth2() {
        $unit = 12;
        $arrHeader = array($unit, $unit, $unit, 1.5 * $unit, 2 * $unit, $unit, 0.5 * $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit,);
        return $arrHeader;
    }

    static public function getArrWidth3() {
        $unit = 12;
        $arrHeader = array($unit, $unit, $unit, 1.5 * $unit, 2 * $unit, $unit, 0.5 * $unit, $unit, $unit, $unit, $unit, $unit, $unit, $unit,);
        return $arrHeader;
    }

    static public function getArrAlign0() {
        $str = "CCCC";
        for ($i = 0; $i < strlen($str); $i++) {
            $arr[] = $str[$i];
        }


        return $arr;
    }

    static public function getArrAlign1() {
        $str = "CCNNNNNNNNNNNNNNNN";
        for ($i = 0; $i < strlen($str); $i++) {
            $arr[] = $str[$i];
        }


        return $arr;
    }

    static public function getArrAlign2() {
        $str = "CLCLLCCNN";
        for ($i = 0; $i < strlen($str); $i++) {
            $arr[] = $str[$i];
        }


        return $arr;
    }

    static public function getArrAlign3() {
        $str = "CLCLLN";
        for ($i = 0; $i < strlen($str); $i++) {
            $arr[] = $str[$i];
        }


        return $arr;
    }

}

//require 'CaseClass.php'; // 由此帶入必要的功能
require 'CaseClass_E011.php'; // 由此帶入必要的功能
require 'CaseClass_A25.php'; // 由此帶入必要的功能
A25X::startPage();
//A25X::showNav();

$data = A25X::getUrlData();

/*
  $app = $data['app'];
  $page = $data['page'];
  if (true) {
  $grp = A25X::getFT000Grp($app, $page);
  //    A25X::showDEBUG("grp is $grp");
  if ($grp=='保密等級' && !A25X::isDevGroup()){
  A25X::showDEBUG("這是具有保密等級文件，必需登入有權限的帳號才能訪問!");
  die();
  }
  }
  if ($grp == '保密等級'){
  A25X::showDEBUG("<HR>這是具有保密等級文件，請妥善處理!<HR>");
  }

 */



$data = A25X::getUrlData();
if (true) {
//    var_dump($data);
}
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php'; //使用自己所在目錄的上一層所看到的 Classes
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Asia/Shanghai');
define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

$TITLE_FONT = 24;
$TITLE_HEIGHT = 40;
$BODY_FONT = 14;
$grp = MARK::initVarWithDefaultVal('grp', '11');
//$grp = 1;
$fileNameCore = E011::getGroupFileNameCore($grp);
//$fileNameCore = "抽查三个_PROD";

$objPHPExcel = new PHPExcel(); //Excel档案的object
$objPHPExcel_A25 = new PHPExcel(); //Excel档案的object

$strToday = DEV::getToday();
$toDownload = "$fileNameCore" . "_" . "$strToday.xls"; //档案名称

function getABCDE($k) {
    return chr(64 + $k);
}

function getABCDE_from0($k) {
    // A=65
    return chr(65 + $k);
}

function makeExcelSheet模板($sheetIndex, $sheetTitle, $arr) {
    $sql = $arr['sql'];
    $arrHeader = $arr['header'];
    $arrAlign = $arr['align'];
    $arrWidth = $arr['width'];
    global $TITLE_FONT;
    global $TITLE_HEIGHT;
    global $BODY_FONT;
    global $objPHPExcel;
    global $strToday;


//    $cntAlignCode= sizeof($arrHeader);
    $exactABCDE = getABCDE(sizeof($arrHeader));
//
//
//
//    echo "<h1>$alignCode</h1>";
////       echo "<h1>$cntAlignCode</h1>";
//    echo "<h1>$exactABCDE</h1>";
//    echo $ABCDE[$cntAlignCode];
    //整個工作表格內預設全部靠左
    $objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $objPHPExcel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);
//    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setWrapText(true);
    // 2017-11-1, by Mark, FIXED, CANNOT CREATE 0 BECASUE IT EXISTS!
    if ($sheetIndex == 0) {
        
    } else {
        $msgWorkSheet = new PHPExcel_Worksheet($objPHPExcel, 'AAA'); //创建一个工作表
        $objPHPExcel->addSheet($msgWorkSheet); //插入工作表
    }
    $objPHPExcel->setActiveSheetIndex($sheetIndex);
    $objPHPExcel->getActiveSheet()->setTitle($sheetTitle);
    $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize($BODY_FONT);
    //（一）標題
    $objPHPExcel->getActiveSheet()->setCellValue('A1', '   ' . $sheetTitle);
    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight($TITLE_HEIGHT); //    $objPHPExcel->getActiveSheet()->getStyle( 'A1')->getFont()->getColor()->setRGB('D4D4D4' );
// $objPHPExcel->getActiveSheet()->getStyle( 'A2:I2')->getFill()->getStartColor()->setARGB('FFD4D4D4');
    $objPHPExcel->getActiveSheet()->getStyle("A2:$exactABCDE" . "2")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D4D4D4'); //设置第一行背景色为ccffff
    $objPHPExcel->getActiveSheet()->getStyle("A2:$exactABCDE" . "2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $objPHPExcel->getActiveSheet()->mergeCells("A1:$exactABCDE" . "1");
    $objPHPExcel->getActiveSheet()->fromArray($arrHeader, NULL, 'A2'); //TABLE TH
    //（三）table content


    $arr = T100PROD::getArray($sql);
    $objPHPExcel->getActiveSheet()->fromArray($arr, NULL, 'A3');
//    echo date('H:i:s'), " Rename worksheet", EOL;
//    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);…


    $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize($TITLE_FONT);
//    $objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('E2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('F2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('G2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('H2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight($TITLE_HEIGHT);


    // DONE FOR WIDTH
//    var_dump($arrWidth);
//    $k = sizeof($arrWidth);
//    echo "<h1>$k</h1>";
//    for ($i = 0; $i < $k; $i++) {
//        $ABC = getABCDE_from0($i);
//        $objPHPExcel->getActiveSheet()->getColumnDimension($ABC)->setWidth($arrWidth[$i]);
//    }
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(0.9);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(0.9);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(0.9);


//循环  
    $maxRec = sizeof($arr) + 3;
//    $maxRec = 10; // NOTE: for debug
//DOING 調整各col to align LEFT|CENTER|RIGHT
    $k = sizeof($arrAlign);
//    echo "<h1>??? $k</h1>";
    for ($i = 0; $i < sizeof($arrAlign); $i++) {
        $ABC = getABCDE_from0($i);
//        echo $ABC;
//        echo $arrAlign[$i];
//        echo " ";

        $align = $arrAlign[$i];
//        $objPHPExcel->getActiveSheet()->getColumnDimension($ABC)->setWidth($arrWidth[$i]);

        for ($j = 3; $j < $maxRec; $j++) {
            if ($align == 'L') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            }
            if ($align == 'C') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }
            if ($align == 'R') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            }
            if ($align == 'N') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getNumberFormat()->setFormatCode('#,##0');
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            }
        }
    }
    for ($i = 3; $i < $maxRec; $i++) {
//$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $i);  
//        $objPHPExcel->getActiveSheet()->getStyle('A' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//        $objPHPExcel->getActiveSheet()->getStyle('B' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
////$objPHPExcel->getActiveSheet()->setCellValue('B' . $i, 'Test value'); 
//        $objPHPExcel->getActiveSheet()->getStyle('C' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//        $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//        $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//        $objPHPExcel->getActiveSheet()->getStyle('F' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//        $objPHPExcel->getActiveSheet()->getStyle('H' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//        $objPHPExcel->getActiveSheet()->getStyle('G' . $i)->getNumberFormat()->setFormatCode('#,##0');
//        $objPHPExcel->getActiveSheet()->getStyle('I' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    }
//#,##0;-#,##0
// Save Excel 95 file
//echo date('H:i:s'), " Write to Excel5 format", EOL;
//$callStartTime = microtime(true);
}

function getA25ExcelSheet標題和語句($page) {
    $arr = T100PROD::getArray("SELECT TITLE,SQL,SEQ FROM FT000
WHERE SEQ>0
AND APP = 'case'
AND PAGE = '$page'
ORDER BY SEQ");
    return $arr;
}

function getA25ExcelFile檔案名稱($page) {
    $arr = T100PROD::getArray("SELECT TITLE,SQL,SEQ FROM FT000
WHERE SEQ=0
AND APP = 'case'
AND PAGE = '$page'
ORDER BY SEQ");
    return $arr[0]['TITLE'];
}

function getA25ExcelFile工作表列表SQL($page) {
    $sql = "SELECT SEQ,TITLE EXCEL_TITLE,TO_CHAR(SYSDATE,'YYYY-MM-DD HH24:MI:SS') 查询时间 FROM FT000
WHERE SEQ>0
AND APP = 'case'
AND PAGE = '$page'
ORDER BY SEQ";
    return $sql;
}

function makeExcelSheet模板_A25($sheetIndex, $sheetTitle, $sql) {
//    $sql = $arr['sql'];
//    $arrHeader = $arr['header'];
//    $arrAlign = $arr['align'];
//    $arrWidth = $arr['width'];
    global $TITLE_FONT;
    global $TITLE_HEIGHT;
    global $BODY_FONT;
//    global $objPHPExcel;
    global $objPHPExcel_A25;
    $objPHPExcel = $objPHPExcel_A25;
    global $strToday;
    if (A25X::isDevGroup()) {
//            echo "*** 【BPM】 is found 要用BPM的數據庫****** LINE 454 ";
//        A25X::showDEBUG($sql);
    }


//    $arrX = T100PROD::getArray($sql); 
    // 2017-11-23 處理BPM, NEED TO CONNECT TO BPM DATABASE
    $isBPM = false;
    $BPM = '【BPM】';
    $sql = A25X::getParsedSQL($sql);
//    echo "$sql";
//    A25X::showDEBUG("<br>SQL??? $sql");
    if (strpos($sql, $BPM) !== false) {
        if (A25X::isDevGroup()) {
//            echo "*** 【BPM】 is found 要用BPM的數據庫****** LINE 454 ";
        }
        $sql = str_replace($BPM, ' ', $sql);
        $isBPM = true;
//        A25X::showDEBUG("<br>SQL??? $sql");
        $arrX = BPMPROD::getArray($sql);
    } else {
//        A25X::showDEBUG("<br>SQL??? $sql");
        $arrX = T100PROD::getArray($sql);
    }

    //2017-11-28, by Mark
    //Undefined offset: 0 in /var/www/html/cust001/case/a25_excel_adv.php on line 485
    $isNoRecord = false;
    if (sizeof($arrX) == 0) {
        $isNoRecord = true;
    }



//自动栏位的定义
    $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
    foreach ($arrAuto as $val) {
        $key = $val['FIELD_NAME'];
        $v0 = $val['FIELD_DISPLAY'];
        $v1 = $val['FIELD_ALIGN'];
        $v2 = $val['FIELD_WIDTH'];

        $auto[$key] = array($v0, $v1, $v2);
    }

    if ($isNoRecord) {
        $arrHeader[] = '( 查無記錄 )';
//        $arrHeader[]='   ';
//        $arrHeader[]='   ';
        $arrAlign[] = 'L';
        $arrWidth[] = 12 * 6;
    } else {
        foreach ($arrX[0] as $key2 => $val2) {

//        echo "$key2=>$val2  <br>";
            if (isset($auto[$key2])) {

                $arrHeader[] = $auto[$key2][0];
                $arrAlign[] = $auto[$key2][1];
                $arrWidth[] = 12 * $auto[$key2][2];
            } else {
                $arrHeader[] = $key2;
                $arrAlign[] = "L";
                $arrWidth[] = 12;
            }
        }
    }
    $exactABCDE = getABCDE(sizeof($arrHeader));

    //整個工作表格內預設全部靠左
    $objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $objPHPExcel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getDefaultStyle()->getAlignment()->setWrapText(true);
//    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setWrapText(true);
    // 2017-11-1, by Mark, FIXED, CANNOT CREATE 0 BECASUE IT EXISTS!
    if ($sheetIndex == 0) {
        
    } else {
        $msgWorkSheet = new PHPExcel_Worksheet($objPHPExcel, 'AAA'); //创建一个工作表
        $objPHPExcel->addSheet($msgWorkSheet); //插入工作表
    }
    $objPHPExcel->setActiveSheetIndex($sheetIndex);
    $objPHPExcel->getActiveSheet()->setTitle($sheetTitle);
    $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize($BODY_FONT);
    //（一）標題
    $objPHPExcel->getActiveSheet()->setCellValue('A1', '   ' . $sheetTitle);
    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight($TITLE_HEIGHT); //    $objPHPExcel->getActiveSheet()->getStyle( 'A1')->getFont()->getColor()->setRGB('D4D4D4' );
// $objPHPExcel->getActiveSheet()->getStyle( 'A2:I2')->getFill()->getStartColor()->setARGB('FFD4D4D4');
    $objPHPExcel->getActiveSheet()->getStyle("A2:$exactABCDE" . "2")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('D4D4D4'); //设置第一行背景色为ccffff
    $objPHPExcel->getActiveSheet()->getStyle("A2:$exactABCDE" . "2")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $objPHPExcel->getActiveSheet()->mergeCells("A1:$exactABCDE" . "1");
    $objPHPExcel->getActiveSheet()->fromArray($arrHeader, NULL, 'A2'); //TABLE TH
    //（三）table content
//    $arr = T100PROD::getArray($sql);
    if ($isBPM) {
        if (A25X::isDevGroup()) {
//            echo "*** 【BPM】 is found 要用BPM的數據庫  LINE 551*** ";
        }

        $arr = BPMPROD::getArray($sql);
    } else {

        $arr = T100PROD::getArray($sql);
    }




    $objPHPExcel->getActiveSheet()->fromArray($arr, NULL, 'A3');
//    echo date('H:i:s'), " Rename worksheet", EOL;
//    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);…


    $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize($TITLE_FONT);
//    $objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('C2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('E2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('F2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('G2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getStyle('H2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight($TITLE_HEIGHT);


    // DONE FOR WIDTH
//    var_dump($arrWidth);
    $k = sizeof($arrWidth);
//    echo "<h1>$k</h1>";
    for ($i = 0; $i < $k; $i++) {
        $ABC = getABCDE_from0($i);
        $objPHPExcel->getActiveSheet()->getColumnDimension($ABC)->setWidth($arrWidth[$i]);
    }
//循环  
    $maxRec = sizeof($arr) + 3;
//    $maxRec = 10; // NOTE: for debug
//DOING 調整各col to align LEFT|CENTER|RIGHT
    $k = sizeof($arrAlign);
//    echo "<h1>??? $k</h1>";
    for ($i = 0; $i < sizeof($arrAlign); $i++) {
        $ABC = getABCDE_from0($i);
//        echo $ABC;
//        echo $arrAlign[$i];
//        echo " ";

        $align = $arrAlign[$i];
//        $objPHPExcel->getActiveSheet()->getColumnDimension($ABC)->setWidth($arrWidth[$i]);

        for ($j = 3; $j < $maxRec; $j++) {
            if ($align == 'L') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
            }
            if ($align == 'C') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }
            if ($align == 'R') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            }
            if ($align == 'N') {
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getNumberFormat()->setFormatCode('#,##0');
                $objPHPExcel->getActiveSheet()->getStyle($ABC . $j)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            }
        }
    }
    for ($i = 3; $i < $maxRec; $i++) {
//$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $i);  
//        $objPHPExcel->getActiveSheet()->getStyle('A' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//        $objPHPExcel->getActiveSheet()->getStyle('B' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
////$objPHPExcel->getActiveSheet()->setCellValue('B' . $i, 'Test value'); 
//        $objPHPExcel->getActiveSheet()->getStyle('C' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//        $objPHPExcel->getActiveSheet()->getStyle('D' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//        $objPHPExcel->getActiveSheet()->getStyle('E' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//        $objPHPExcel->getActiveSheet()->getStyle('F' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//        $objPHPExcel->getActiveSheet()->getStyle('H' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//        $objPHPExcel->getActiveSheet()->getStyle('G' . $i)->getNumberFormat()->setFormatCode('#,##0');
//        $objPHPExcel->getActiveSheet()->getStyle('I' . $i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    }
//#,##0;-#,##0
// Save Excel 95 file
//echo date('H:i:s'), " Write to Excel5 format", EOL;
//$callStartTime = microtime(true);
}

//A25X::showDEBUG("...start");
//$app = $data['app'];
//$page = $data['page'];
//$title = getA25ExcelFile檔案名稱($page);
$title = "APP001";

$toDownload_A25 = "$title" . "_" . "$strToday.xls"; //档案名称




/*
  makeExcelSheet模板_A25(0, getA25ExcelFile檔案名稱($page), getA25ExcelFile工作表列表SQL($page));
  foreach (getA25ExcelSheet標題和語句($page) as $key => $val) {
  makeExcelSheet模板_A25($val['SEQ'], $val['TITLE'], $val['SQL']); //sheet0
  }
  // actual making Excel file here
  $objWriter_A25 = PHPExcel_IOFactory::createWriter($objPHPExcel_A25, 'Excel5'); //要用PHP生成Excel的object
  $f_A25 = GEN::getOutputFile(__FILE__, $toDownload_A25); //指定要下载的路径和档案名称
  $objWriter_A25->save($f_A25); //PHP生成Excel并保存在上述指定路径

 */

function makeExcelSheetAPP001($sql, $sheetIndex, $sheetTitle) {
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

    $arr01 = array('100', '14.9±0.05', 'SC', 'OMM+height gageOMM+height gage', '617523500G', '14.89', '14.90', '14.89', '14.89');
    $arr[] = $arr01;
    $arr[] = $arr01;
    $arr[] = $arr01;


    var_dump($arr);

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

$sql = "SELECT 
WO,STN,在制數,良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數  CHK_在制数,良品轉入, 良品轉出, 當站報廢, 委外加工數, 委外完成數, 待轉入, 待開工, 待完工, 待轉出,分割转出, 待PQC數 
FROM FT_SFCB_T_MORE
WHERE 在制數<>良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數
";
$objPHPExcel = new PHPExcel(); //Excel档案的object
makeExcelSheetAPP001($sql, 0, "尺寸報告"); //sheet0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); //要用PHP生成Excel的object
$f = GEN::getOutputFile(__FILE__, $toDownload_A25); //指定要下载的路径和档案名称
$objWriter->save($f); //PHP生成Excel并保存在上述指定路径




echo "<h1><br>檔案名稱︰$toDownload_A25 <BR>生成時間︰" . date('Y-m-d H:i:s') . "</h1>";
echo "<BR><a class='btn btn-primary btn-lg' href='gen/$toDownload_A25'>點擊下載 【 $toDownload_A25 】</a>";
echo "<BR><a class='btn btn-success btn-lg' href='http://10.10.0.106/c001zt/app001v2/'>回到【app001】FT2018 量测</a>";


// ***** 每頁程式 END *****
A25X::endPage();
