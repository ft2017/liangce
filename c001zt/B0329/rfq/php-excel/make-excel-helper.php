<?php

/** Error reporting */
error_reporting(E_ALL);

$tool = new MarkTool();

//发件人: "jason.hsu" <jason.hsu@skyrock-casting.com>
// 收件人: "'陈炳陵'" <mark.chen@fulltech-metal.com>
// 抄送: "'吴文清'" <wq.wu@skyrockcasting.com>, "'wwy.wu'" <wwy.wu@fulltech-metal.com>, "'孙永飞'" <yf.sun@skyrockcasting.com>, "RJ/工程/袁伟" <yw.yuan@fulltech-metal.com>, "'vicky'" <vicky.li@skyrock-casting.com>, "FC/K/Cherry 陈" <cherry.chen@skyrock-casting.com>, "FT/K/周云玲" <ranee@fulltech-metal.com>, "F C/汪静 FC/K/汪静" <amy.wang@skyrock-casting.com>, "'Echo.Xiang'" <echo.xiang@skyrock-casting.com>, "SK/鲁工 SK/鲁建兵" <jb.lu@skyrockdiecasting.com>, "'jm.chen'" <jm.chen@skyrockdiecasting.com>, "'David'" <david.hsu@skyrock-casting.com>
// 主题: 报价公式上的汇率计算基准，請更改為 USD1.00 = RMB6.65
// 日期: 2017/03/28 19:57:21 (Tue)

//B0329
$USD2RMB="6.65";



echo '&lt;?php <br>';
echo '<br>// reviewed by Mark, 2017-03-30 08:10 ';
echo '<br>// 這是由 B0329/rfq/php-excel/make-excel-helper.php 生成的檔案 ';
echo '<br>// 應該存放到檔案 B0329/rfq/php-excel/make-excel-to-include.php';
echo "<br>// B0329 啟用 \$USD2RMB=$USD2RMB";
echo "<br>//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@";
echo "<br>//FIX ROW 50， 栏位C起 ";
echo "<br>//FIX 栏位C起，各小計的金額符號 ";
echo "<br>//FIX 栏位C起，黄色格子下移一格 ";
echo "<br>//FIX 栏位B 小計開始 下移一格 ";
echo "<br>//FIX 栏位B  小計結束 下移一格 ";
echo "<br>//FIX ROW 53=>54  公式 ";
echo "<br>//FIX ROW 57=>58 公式 ";
echo "<br>//FIX ROW 60=>61, 公式 ";
echo "<br>//FIX ROW 64=>65, 65=>66, 公式 ";
echo "<br>//FIX ROW 往下所有公式 ";
echo "<br>//FIX 斜体 下拉 ";
echo "<br>//FIX 几个大型加总 ";
echo "<br>//FIX 美金符号 ";

$tool->makePercentFormat();
$tool->makeSum(); //

//
//
//
//$tool->makeRmbStyle(); //makeRmbStyle
echo "<br> // RMB<br> ";
//$moneyArrRMB = '[{"items":[19, 20, 21, 22, 23,24, 31, 33, 36, 37, 38, 39, 42, 45, 46, 47, 49, 52, 53, 56, 57, 60, 63, 64, 65, 68, 70, 72, 73, 76, 77, 81, 83, 87, 88, 91, 94, 95, 98, 99, 102, 103, 104, 105, 107, 108, 109, 110, 111]}]';
// to 70

//B0329 TODO
// $moneyArrRMB = '[{"items":[19, 20, 21, 22, 23,24, 31, 33, 36, 37, 38, 39, 42, 45, 46, 47, 49, 52, 53, 56, 57, 60, 63, 64, 65, 68, 70,  73,74,77,78,82,84,88,89,90,91,92,95,98,99,102,103,106,107,108,109,111,112,113,114,115,117,118]}]';
//                         19, 20, 21, 22, 23,24, 31, 33, 36, 37, 38, 39, 42, 45, 46, 47, 49, 52, 53, 56, 57, 60, 63, 64, 65, 68, 70,73,74,77,78,82,84,88,89,90,91,92,95,98, 99,102,103,106,107,108,109,111,112,113,114,115,117,118]}]';
$moneyArrRMB = '[{"items":[19, 20, 21, 22, 23,24, 31, 33, 36, 37, 38, 39, 42, 45, 46, 47, 50, 53, 54, 57, 58, 61, 64, 65, 66, 69, 71,74,75,78,79,83,85,89,90,91,92,93,96,99,100,103,104,107,108,109,110,112,113,114,115,116,118,119]}]';

$tool->makeMoneyStyle("¥", $moneyArrRMB);
echo "<br> // USD<br> ";

//B0329
//$moneyArrUSD = '[{"items":[25,116]}]';
$moneyArrUSD = '[{"items":[25,117]}]';
$tool->makeMoneyStyle("$", $moneyArrUSD);

echo "<br> // USD 公式計算<br> ";

//B0329
// $tool->extendColToCDEFGH(25,"=C24/6.35");
// $tool->extendColToCDEFGH(116,"=C115/6.35");
$tool->extendColToCDEFGH(25,"=C24/$USD2RMB");
$tool->extendColToCDEFGH(117,"=C116/$USD2RMB");



//32,=C11
$tool->extendColToCDEFGH(32,"=C11");
//33,=C31*C32/1000
$tool->extendColToCDEFGH(33,"=C31*C32/1000");

//35,=100*C32*C16/(C32*C16+C34)
//使用 Excel 百分比 --- 35,=C32*C16/(C32*C16+C34)
$tool->extendColToCDEFGH(35,"=C32*C16/(C32*C16+C34)");

//37,                        =(C31-C36)*C34/1000/C16
$tool->extendColToCDEFGH(37,"=(C31-C36)*C34/1000/C16");

//38,                        =(C32+C34)*C31*0.02/1000/C16
$tool->extendColToCDEFGH(38,"=(C32+C34)*C31*0.02/1000/C16");

//39,                        =IF(ISNA(C33+C37+C38),0,(C33+C37+C38))
$tool->extendColToCDEFGH(39,"=IF(ISNA(C33+C37+C38),0,(C33+C37+C38))");

//44,                        =3600/C43
$tool->extendColToCDEFGH(44,"=3600/C43");

//45,                       =C42/C44
$tool->extendColToCDEFGH(45,"=C42/C44");

//49, => 50
// fix percent              =IF(ISNA((C45+C46)*(1+(1-C48))/C16),0,((C45+C46)*(1+(1-C48))/C16))
// $tool->extendColToCDEFGH(49,"=IF(ISNA((C45+C46)*(1+(1-C48))/C16),0,((C45+C46)*(1+(1-C48))/C16))");

//B0329
$tool->extendColToCDEFGH(50,"=C49*IF(ISNA((C45+C46)*(1+(1-C48))/C16),0,((C45+C46)*(1+(1-C48))/C16))");



//53,=>54                        =(C51/3600)*C52
//B0329
// $tool->extendColToCDEFGH(53,"=(C51/3600)*C52");
$tool->extendColToCDEFGH(54,"=(C52/3600)*C53");


//57=>58,                        =(C55/3600)*C56
//B0329
// $tool->extendColToCDEFGH(57,"=(C55/3600)*C56");
$tool->extendColToCDEFGH(58,"=(C56/3600)*C57");

//60=>61,                        
// fix percent               =C57*(1+(1-C58))
// B0329
// $tool->extendColToCDEFGH(60,"=C57*(1+(1-C58))");
$tool->extendColToCDEFGH(61,"=C58*(1+(1-C59))");

//64,  65                    =(C62/3600)*C63
// $tool->extendColToCDEFGH(64,"=(C62/3600)*C63");
// $tool->extendColToCDEFGH(65,"=(C62/3600)*C63");

//B0329
// 64=>65, 65=>66
$tool->extendColToCDEFGH(65,"=(C63/3600)*C64");
$tool->extendColToCDEFGH(66,"=(C63/3600)*C64");


// 70, 
//$tool->extendColToCDEFGH(70,"=IF(ISNA((C67/3600)*C68 * (1 + (1 - C69 ))),0,((C67/3600)*C68 * (1 + (1 - C69 ))))");
//B0329
// 70=>71, 
$tool->extendColToCDEFGH(71,"=IF(ISNA((C68/3600)*C69 * (1 + (1 - C70 ))),0,((C68/3600)*C69 * (1 + (1 - C70 ))))");


// 74                       
//$tool->extendColToCDEFGH(74,"=IF(ISNA((C72/3600)*C73),0,((C72/3600)*C73))");

//B0329
// 74 =>75                      
$tool->extendColToCDEFGH(75,"=IF(ISNA((C73/3600)*C74),0,((C73/3600)*C74))");


//78                  
//$tool->extendColToCDEFGH(78,"=IF(ISNA(C77),0,(C76/3600)*C77)");

//B0329
//78=>79                  
$tool->extendColToCDEFGH(79,"=IF(ISNA(C78),0,(C77/3600)*C78)");



// 84                      
//$tool->extendColToCDEFGH(84,"=C81*C82*C83");

//B0329
// 84 =>85                     
$tool->extendColToCDEFGH(85,"=C82*C83*C84");


// 95                        
//$tool->extendColToCDEFGH(95,"=(C87*(SUM(C88:C89))+SUM(C90:C92))*(1+(1-C93))*C94");
//B0329
// 95 =>96                       
$tool->extendColToCDEFGH(96,"=(C88*(SUM(C89:C90))+SUM(C91:C93))*(1+(1-C94))*C95");




// 99   
//$tool->extendColToCDEFGH(99,"=C98");

//B0329
// 99=>100   
$tool->extendColToCDEFGH(100,"=C99");

// 103                     
//$tool->extendColToCDEFGH(103,"=C101/3600*C102");

//B0329
// 103=>104                     
$tool->extendColToCDEFGH(104,"=C102/3600*C103");



// 106,108                       
//$tool->extendColToCDEFGH(106,"=C105*35/3600");

//$tool->extendColToCDEFGH(108,"=C106+C107");

//B0329
// 106=》107,108 =》109                      
$tool->extendColToCDEFGH(107,"=C106*35/3600");

$tool->extendColToCDEFGH(109,"=C107+C108");

// 111                       
//$tool->extendColToCDEFGH(111,"=C109*C110");

//B0329
// 111 =》112                      
$tool->extendColToCDEFGH(112,"=C110*C111");

// 117                        
//$tool->extendColToCDEFGH(117,"=C115*1.17");

//B0329
// 117=》118                        
$tool->extendColToCDEFGH(118,"=C116*1.17");


//B0329
// revied by Mark, 應該是查表帶出的數據,用斜體表示
//$fontJsonStrItalicTrue = '{"0000A0":[31,36,42,46,47,52,56,63,68,73,77,82,102,106]}'; //直接查表或是立即計算的
$fontJsonStrItalicTrue = '{"0000A0":[31,36,42,46,47,53,57,64,69,74,78,83,103,107]}'; //直接查表或是立即計算的



//B0329
//COL B
// $colorJsonStrStepStart = '{"A9BCF5":[15,28,29,40,50,54,61,66,71,75,79,85,96,100,104,110,112,7]}';
// lorJsonStrStepStart = '{"A9BCF5":[15,28,29,40,50,54,61,66,71,75,79,85,96,100,104,110,112,7]}';
$colorJsonStrStepStart = '{"A9BCF5":[15,28,29,40,51,55,62,67,72,76,80,86,97,101,105,111,113,8]}';


//B0329
//COL B
// $colorJsonStrStepEnd = '{"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]}';
// lorJsonStrStepEnd = '{"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99, 103,108,111,114]}';
$colorJsonStrStepEnd = '{"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]}';

//B0329
//$jsonDdl = '{"F9E79F":[10,12,30,41,66,71,75,80,86]}';
$jsonDdl = '{"F9E79F":[10,12,30,41,67,72,76,81,87]}';


//B0329
//黄色格子下移一格
// $jsonInput = '{"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]}';
// onInput = '{"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]}';
$jsonInput = '{"F4D03F":[11,16,19,20,21,22,23,34,43,48,52,56,59,63,68,70,73,77,82,84,88,89,90,91,92,93,94,95,98,99,102,106,108,111,113,114]}';


//B0329
//$jsonBigTotal = '{"cccccc":[24,25,109,115,116,117]}';
  $jsonBigTotal = '{"cccccc":[24,25,110,116,117,118]}';

//[[A0601]]
//    var colorVersion = "#98AFC7"; // 
$jsonVersion = '{"98AFC7":[7,8,9]}';

//$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
//>getFont()->setItalic(true);  

$tool->makeColorFillStyle("A", $colorJsonStrStepStart);
$tool->makeColorFillStyle("B", $colorJsonStrStepStart);
$tool->makeColorFillStyle("B", $colorJsonStrStepEnd);
$tool->makeColorFillStyle("C", $colorJsonStrStepEnd);
$tool->makeColorFillStyle("D", $colorJsonStrStepEnd);
$tool->makeColorFillStyle("E", $colorJsonStrStepEnd);
$tool->makeColorFillStyle("F", $colorJsonStrStepEnd);
$tool->makeColorFillStyle("G", $colorJsonStrStepEnd);
$tool->makeColorFillStyle("H", $colorJsonStrStepEnd);
$tool->makeColorFillStyle("C", $jsonDdl);
$tool->makeColorFillStyle("D", $jsonDdl);
$tool->makeColorFillStyle("E", $jsonDdl);
$tool->makeColorFillStyle("F", $jsonDdl);
$tool->makeColorFillStyle("G", $jsonDdl);
$tool->makeColorFillStyle("H", $jsonDdl);
$tool->makeColorFillStyle("C", $jsonInput);
$tool->makeColorFillStyle("D", $jsonInput);
$tool->makeColorFillStyle("E", $jsonInput);
$tool->makeColorFillStyle("F", $jsonInput);
$tool->makeColorFillStyle("G", $jsonInput);
$tool->makeColorFillStyle("H", $jsonInput);

$tool->makeColorFillStyle("A", $jsonBigTotal);
$tool->makeColorFillStyle("B", $jsonBigTotal);
$tool->makeColorFillStyle("C", $jsonBigTotal);
$tool->makeColorFillStyle("D", $jsonBigTotal);
$tool->makeColorFillStyle("E", $jsonBigTotal);
$tool->makeColorFillStyle("F", $jsonBigTotal);
$tool->makeColorFillStyle("G", $jsonBigTotal);
$tool->makeColorFillStyle("H", $jsonBigTotal);

echo "<br><br>//[[A0601]] 顯示版本信息";
$tool->makeColorFillStyle("A", $jsonVersion);

echo "<br><br>//[[A0601]] 加方格線";
$tool->makeCellsBorderColRowFromTo("ABCEDFGH", 3, 119);


$tool->makeFontItalic("C",$fontJsonStrItalicTrue);
$tool->makeFontItalic("D",$fontJsonStrItalicTrue);
$tool->makeFontItalic("E",$fontJsonStrItalicTrue);
$tool->makeFontItalic("F",$fontJsonStrItalicTrue);
$tool->makeFontItalic("G",$fontJsonStrItalicTrue);
$tool->makeFontItalic("H",$fontJsonStrItalicTrue);


class MarkTool {
    /*
      $objPHPExcel->getActiveSheet()
      ->setCellValue('C23', '=SUM(C19:C22)')
      ->setCellValue('D23', '=SUM(D19:D22)')
      ->setCellValue('E23', '=SUM(E19:E22)')
      ;
     */

    public function makeCell32($row) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        $colNameArr = Array("C", "D", "E", "F", "G", "H");
        $str = " <br> \$objPHPExcel->getActiveSheet() <br>";
        for ($i = 0; $i < 6; $i++) {
            $colName = $colNameArr[$i];
            //=C30*C31/1000
            $colRow = $colName . $row;
            $cell = "=" . $colName . "30*" . $colName . "31/1000";
            $str.="  ->setCellValue('$colRow', '$cell') <br>";
        }
        echo $str . ";";
    }

    //=100*C31*C16/(C31*C16+C33)
//      public function makeCell34X($rowNum,$cellFormula) {
//        $colNameArr = Array("C", "D", "E", "F", "G", "H");
//        $str = " <br> \$objPHPExcel->getActiveSheet() <br>";
//        for ($i = 0; $i < 6; $i++) {
//            $colName = $colNameArr[$i];
//            //=C30*C31/1000
//            $colRow = $colName . $row;
//            $cell = "=" . $colName . "30*" . $colName . "31/1000";
//            $str.="  ->setCellValue('$colRow', '$cell') <br>";
//        }
//        echo $str . ";";
//    }


    public function extendColToCDEFGH($rowNum, $cellFormula) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        echo "<br><br>// ---  extendColToCDEFGH($rowNum,$cellFormula) ---<br>";

        $seq = "0ABCDEFGH";
        echo " <br> \$objPHPExcel->getActiveSheet() <br>";
        echo "->setCellValue('C$rowNum', '$cellFormula')<br>";
        for ($k = 4; $k <= 8; $k++) {
            //    $strD = str_replace("col: 3", "col: $k", $cellFormula);
            $colName = substr($seq, $k, 1);
            $newCellformula = $cellFormula;
            for ($item = 1; $item < 115; $item++) {
                $oldStr = "C$item";
                $newStr = $colName . $item;
                $newCellformula = str_replace($oldStr, $newStr, $newCellformula);
            }
            echo "->setCellValue('$colName$rowNum', '$newCellformula')<br>";
        }
        echo ";<br>";
    }

    
    
    public function extendCell34X($rowNum, $cellFormula) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        echo "<br><br>// ---  extendCell34X($rowNum,$cellFormula) ---<br>";

        $seq = "0ABCDEFGH";
        echo " <br> \$objPHPExcel->getActiveSheet() <br>";
        echo "->setCellValue('C$rowNum', '$cellFormula')<br>";
        for ($k = 4; $k <= 8; $k++) {
            //    $strD = str_replace("col: 3", "col: $k", $cellFormula);
            $colName = substr($seq, $k, 1);
            $newCellformula = $cellFormula;
            for ($item = 1; $item < 115; $item++) {
                $oldStr = "C$item";
                $newStr = $colName . $item;
                $newCellformula = str_replace($oldStr, $newStr, $newCellformula);
            }
            echo "->setCellValue('$colName$rowNum', '$newCellformula')<br>";
        }
        echo ";<br>";
    }

    /*
      public function makeUsd() {
      echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

      $strUsd = '[{"usd":24, "rmb":23},{"usd":112, "rmb":111}]';
      $objUsd = json_decode($strUsd);
      //        print_r($objUsd);

      $str = " <br> \$objPHPExcel->getActiveSheet() <br>";
      foreach ($objUsd as $key => $obj) {
      $colNameArr = Array("C", "D", "E", "F", "G", "H");
      for ($i = 0; $i < 6; $i++) {
      $colName = $colNameArr[$i];
      $str.="  ->setCellValue('" . $colName . $obj->usd . "', '=" . $colName . $obj->rmb . "/6.35') <br>";
      }
      }
      echo $str . ";";
      }
     */

    public function makeSum() {
        echo "<br><br>//<br>// reviewed by WuNan and Mark 各工序小計沒出現, 是不是在這裡? 是!";
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        //B0329
        // $strUsd = '[{"sum":24, "items":[19,20,21,22,23]},{"sum":115, "items":[109,111,114]},{"sum":114, "items":[112,113]},{"sum":109, "items":[39,49,53,60,65,70,74,78,84,95,99,103,108]}]';
        
        $strUsd = '[{"sum":24, "items":[19,20,21,22,23]},{"sum":116, "items":[110,112,115]},{"sum":115, "items":[113,114]},{"sum":110, "items":[39,50,54,61,66,71,75,79,85,96,100,104,109]}]';
        



        $objUsd = json_decode($strUsd);
//        print_r($objUsd);
//__LINE__、__FUNCTION__


        $str = " <br> \$objPHPExcel->getActiveSheet() <br>";

        foreach ($objUsd as $key => $obj) {
            $colNameArr = Array("C", "D", "E", "F", "G", "H");
            for ($i = 0; $i < 6; $i++) {
                $colName = $colNameArr[$i];
//                $str.="  ->setCellValue('" . $colName . $obj->sum . "', '=" . $colName . $obj->rmb . "/6.35') <br>";
                $str.="  ->setCellValue('" . $colName . $obj->sum . "', '=";

                $items = $obj->items;
                for ($j = 0; $j < count($items); $j++) {
                    $str.= $colName . $items[$j];
                    if ($j < count($items) - 1) {
                        $str.="+";
                    }
                }
                $str.="')<br>";
            }
        }
        echo $str . ";<br><br>";
    }



    public function makeRmbStyle() {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        $strRmb = '[{"items":[19,20,21,22,23,32, 38, 48, 52, 59, 64, 69, 73, 77, 83, 91, 95, 99, 104, 105, 110, 111]}]';
        $objRmb = json_decode($strRmb);
//        print_r($objRmb);



        foreach ($objRmb as $key => $obj) {

            $items = $obj->items;
            for ($j = 0; $j < count($items); $j++) {
//                $str = " <br> \$objPHPExcel->getActiveSheet()->duplicateConditionalStyle( <br>";
//                $str.= "  \$objPHPExcel->getActiveSheet()->getStyle('C19')->getConditionalStyles(), 'C" . $items[$j] . ":H" . $items[$j];
                $str = "\$objPHPExcel->getActiveSheet()->getStyle('C" . $items[$j] . ":H" . $items[$j] . "')->getNumberFormat()->setFormatCode(\"¥#,##0.00\")";
                echo $str . ";<br>";
            }
        }
    }

    public function makePercentFormat() {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        echo "<br>// makePercentFormat 0.00% ok, FORMAT_PERCENTAGE_00 為什麼不行?<br>";
        //B0329
        // $strRmb = '[{"items":[35,48,58,69,93,110]}]';
           $strRmb = '[{"items":[35,48,59,70,94,111]}]';
        
        $objRmb = json_decode($strRmb);

        foreach ($objRmb as $key => $obj) {

            $items = $obj->items;
            for ($j = 0; $j < count($items); $j++) {
//                $str = " <br> \$objPHPExcel->getActiveSheet()->duplicateConditionalStyle( <br>";
//                $str.= "  \$objPHPExcel->getActiveSheet()->getStyle('C19')->getConditionalStyles(), 'C" . $items[$j] . ":H" . $items[$j];
                $str = "\$objPHPExcel->getActiveSheet()->getStyle('C" . $items[$j] . ":H" . $items[$j] . "')->getNumberFormat()->setFormatCode(\"0.00%\")";
                echo $str . ";<br>";
            }
        }
    }

    public function makeMoneyStyle($money, $moneyArr) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        $objMoney = json_decode($moneyArr);
//        print_r($objRmb);



        foreach ($objMoney as $key => $obj) {

            $items = $obj->items;
            for ($j = 0; $j < count($items); $j++) {
//                $str = " <br> \$objPHPExcel->getActiveSheet()->duplicateConditionalStyle( <br>";
//                $str.= "  \$objPHPExcel->getActiveSheet()->getStyle('C19')->getConditionalStyles(), 'C" . $items[$j] . ":H" . $items[$j];
                $str = "\$objPHPExcel->getActiveSheet()->getStyle('C" . $items[$j] . ":H" . $items[$j] . "')->getNumberFormat()->setFormatCode(\"" . $money . "#,##0.00\")";
                echo $str . ";<br>";
            }
        }
    }

    //[[A0601]]
    public function makeCellsBorderColRowFromTo($colName, $rowFrom, $rowTo) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        $str = "<br><br>\$styleArr = array( ";
        $str .="'borders' => array(";
        $str .="    'allborders' => array(";
        $str .="        'style' => 'thin'"; //, //细边框  //   const BORDER_THIN             = 'thin';
        $str .="    )";
        $str .=")";
        $str .=");<br>";
        for ($k = 0; $k < strlen($colName); $k++) {
            for ($i = $rowFrom; $i <= $rowTo; $i++) {
                $cell = substr($colName, $k, 1) . $i;
                $str .= "\$objPHPExcel->getActiveSheet()->getStyle('$cell')->applyFromArray(\$styleArr);<br>"; //这里就是画出从单元格A5到N5的边框，看单元格最右边在哪哪个格就把这个N改
            }
        }
        echo $str;
    }

    // cell format
    // http://www.cnblogs.com/freespider/p/3284828.html
    // for column B only
    public function makeColorFillStyle($col, $str) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        echo "<br><br>// ---  makeColorFillStyle($col, $str)---<br> ";
        $json = json_decode($str);
//        print_r($json);
        //$objPHPExcel->getActiveSheet()->getStyle('A1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
//        ->getStartColor()->setARGB('FFA9BCF5');

        foreach ($json as $key => $val) {
//            echo $key;
//            print_r($val);
            foreach ($val as $item) {
//                 echo $item;
                $str = "\$objPHPExcel->getActiveSheet()->getStyle('$col$item')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)";
                $str.=" ->getStartColor()->setARGB('$key');<br>";
                echo $str;
            }
        }
    }

    
     public function makeFontItalic($col, $str) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        echo "<br><br>// ---  makeFontItalic($col, $str)---<br> ";
        $json = json_decode($str);
//$objPayable->getFont()->setItalic(true);  
//$objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );  


        foreach ($json as $key => $val) {
//            echo $key;
//            print_r($val);
            foreach ($val as $item) {
//                 echo $item;
                $str = "\$objPHPExcel->getActiveSheet()->getStyle('$col$item')->getFont()->setItalic(true)->setBold(true);<br>";
                $str .= "\$objPHPExcel->getActiveSheet()->getStyle('$col$item')->getFont()->setColor( new PHPExcel_Style_Color('$key'));<br>";
                
             //   $str.=" ->getStartColor()->setARGB('$key');<br>";
                echo $str;
            }
        }
    }

}
