<?php

/** Error reporting */
error_reporting(E_ALL);

$tool = new MarkTool();
echo '&lt;?php <br>';

//$tool->makeRmbStyle(); //makeRmbStyle
echo "<br> // [[A0606]] ";

// {sheet: 1, row: 113, col: 3, json: styleSubTotal({data: '=C111*1.17'})},
$tool->getPatchCellsTo6Col(95, "=(C87*(SUM(C88:C89))+(SUM(C90:C92)))*(1+(1-C93/100))*C94)");

$tool->extendColToCDEFGH(95,"=(C86*(SUM(C87:C88))+SUM(C89:C91))*(1+(1-C92/100))*C93");

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
    //  {sheet: 1, row: 94, col: 3, json: styleSubTotal({data: "=C86*(SUM(C87:C91))*(1+(1-C92/100))*C93"})},
    public function getPatchCellsTo6Col($rowNum, $cellFormula) {
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";

        echo "<br><br>// ---  getPatchCellsTo6Col($rowNum,$cellFormula) ---<br>";
        echo "<br><br>//[[A0606]] 預設為 sheet 1 ---<br>";



        $seq = "0ABCDEFGH";
      //  echo " <br> \$objPHPExcel->getActiveSheet() <br>";
      //  echo "->setCellValue('C$rowNum', '$cellFormula')<br>";
        for ($k = 3; $k <= 8; $k++) {

       //     $template = "{sheet: 1, row: 113, col: $k, json: styleSubTotal({data:";
            //    $strD = str_replace("col: 3", "col: $k", $cellFormula);
            $colName = substr($seq, $k, 1);
            $newCellformula = $cellFormula;
            for ($item = 1; $item < 115; $item++) {
                $oldStr = "C$item";
                $newStr = $colName . $item;
                $data = str_replace($oldStr, $newStr, $newCellformula);
            }
            $cells = "{sheet: 1, row: $rowNum, col: $k, json: styleSubTotal({data: '$data'})},";
            echo "$cells<br>";
        }
        echo ";<br>";
    }

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
        echo "<br><br>//<br>// file:" . __FILE__ . " line:" . __LINE__ . " function: " . __FUNCTION__ . "<br>//<br>";


        $strUsd = '[{"sum":24, "items":[19,20,21,22,23]},{"sum":115, "items":[109,111,114]},{"sum":114, "items":[112,113]},{"sum":109, "items":[39,49,53,60,65,70,74,78,84,95,99,103,108]}]';
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
        $strRmb = '[{"items":[35,48,58,69,93,110]}]';
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
