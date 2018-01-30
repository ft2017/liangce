<?php

class OUT {

    static public function showSTN_OUT_TYPE($wo) {
        $sql = " SELECT WO, STN, STN_NAME, OUT_TYPE,OUT_TYPE_NAME, CNT_OUT, QTY FROM main_out_SF131_STN_OUT_TYPE  WHERE WO = '$wo' ORDER BY WO, STN, OUT_TYPE";
//        $sqlToShow .= $sql;
        $arr = T100PROD::getArray($sql);
        echo OUT::getHtmlTable按工序和报工类型合计($arr, ",工單,工序,工序名称,报工类型,报工类型说明,报工笔数,数量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function getHtmlTableAsft301Header($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";
//        var_dump($fieldName);
        $fields = explode(",", $fieldName);
//        var_dump($fields);


        $strTable .= "<tr>";

        foreach ($fields as $val) {

            $strTable .= "<th>";
            $strTable .= $val;
            $strTable .= "</th>";
        }
        $strTable .= "</tr>";

        $strTable .= "<tr>";
        if ($isDebug) {
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            $strTable .= "<th>" . (1 + $key) . "</th>";


            foreach ($val as $key2 => $val2) {

                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
                    $strTable .= "<td class='text_align_center'>Y</td>";
                } else if (is_numeric($val2)) {
                    if ($key2 == "OP") {
                        $strTable .= "<td class='text_align_center'>";
                        $strTable .= ($val2);
                        $strTable .= "</td>";
                    } else {
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2);
                        $strTable .= "</td>";
                    }
                } else if ($key2 == "OUT_TYPE") {
                    $strTable .= "<td class='text_align_center'>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                } else if ($key2 == "xxxWO") {
                    $strTable .= "<td>";

                    $strTable .= HTML::get按工单查报工列表Link($val2);
//                    $strTable .= HTML::getProdLink($val2);
                    $strTable .= "</td>";
                } else if ($key2 == "PROD") {
                    $strTable .= "<td>";
                    $strTable .= HTML::get產品Link($val2);
                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
//

            $strTable .= "</tr>";
        }
        $strTable .= "</table><br>";
        return $strTable;
    }

    static public function getHtmlTable按工序和报工类型合计($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";
//        var_dump($fieldName);
        $fields = explode(",", $fieldName);
//        var_dump($fields);


        $strTable .= "<tr>";

        foreach ($fields as $val) {

            $strTable .= "<th>";
            $strTable .= $val;
            $strTable .= "</th>";
        }
        $strTable .= "</tr>";

        $strTable .= "<tr>";
        if ($isDebug) {
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            $strTable .= "<th>" . (1 + $key) . "</th>";


            foreach ($val as $key2 => $val2) {

                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($key2 == 'OUT_TYPE') {
                    $strTable .= "<td class='text_align_center'>$val2</td>";
                } else if ($val2 == 'Y') {
                    $strTable .= "<td class='text_align_center'>Y</td>";
                } else if (is_numeric($val2)) {
                    if ($key2 == "OP") {
                        $strTable .= "<td class='text_align_center'>";
                        $strTable .= ($val2);
                        $strTable .= "</td>";
                    } else {
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2);
                        $strTable .= "</td>";
                    }
                } else if ($key2 == "OUT_TYPE") {
                    $strTable .= "<td class='text_align_center'>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                } else if ($key2 == "xxxWO") {
                    $strTable .= "<td>";

                    $strTable .= HTML::get按工单查报工列表Link($val2);
//                    $strTable .= HTML::getProdLink($val2);
                    $strTable .= "</td>";
                } else if ($key2 == "PROD") {
                    $strTable .= "<td>";
                    $strTable .= HTML::get產品Link($val2);
                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
//

            $strTable .= "</tr>";
        }
        $strTable .= "</table><br>";
        return $strTable;
    }

    static public function showSTN_OUT_BY($wo) {
        $sql = " SELECT WO, STN, STN_NAME, OUT_BY, OUT_BY_NAME, CNT_OUT, QTY FROM main_out_SF131_STN_OUT_BY  WHERE WO = '$wo' ORDER BY STN,OUT_BY";
//        $sqlToShow .= $sql;
        $arr = T100PROD::getArray($sql);
        echo OUT::getHtmlTableAsft301Header($arr, ",工單,工序,工序名称,报工人员,人员姓名,报工笔数,数量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

}
