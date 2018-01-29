<?php

class WO {
static public function getHtmlTableAsft301Header工單取消連結($arr, $fieldName, $isDebug) {
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
//            $strTable .= "<th>" . (1 + $key) . "</th>";

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
                } else if ($key2 == "xxxxWO") {
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
        $strTable .= "</table>";
        return $strTable;
    }

    static public function show工单单身($wo) {
        $sql = " SELECT OP,STN,STN_NAME,在制數,	良品轉入,良品轉出,當站報廢,委外加工數,委外完成數,待轉入,待開工,待完工,待轉出 FROM FT_ASFT301 WHERE WO = '$wo'";
        $sql .= " ORDER BY OP";
echo $sql;
        $arr = T100PROD::getArray($sql);
        $link1="<a href='case_apmt501_ext.php?wo=$wo'>委外加工數</a>";
        $link2="<a href='case_apmt501_ext.php?wo=$wo'>委外完成數</a>";
        
        $fieldName = ",項次,工序,工序名稱,在制数,良品轉入,良品轉出, 當站報廢,$link1,$link2,待轉入,待開工,待完工,待轉出";
//echo WO::getHtmlTableApmt501委外采购_合计($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo WO::getHtmlTable工单单身($wo,$arr, $fieldName);
    }

    static public function getHtmlTable工单单身($wo,$arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

//        $strTable .= "<tr>";
//        $strTable .= "<th></th><th>部门</th><th>部门名称</th><th>批次号</th><th>工站</th><th>锁定资源</th><th>资源名称</th><th>资源类型</th><th>工号</th><th>锁定时间</th><th>距今小时数</th>";
//        $strTable .= "</tr>";
        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sum1 = 0;
        $sum2 = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);

//   OP,STN,STN_NAME,在制數,	良品轉入,良品轉出,當站報廢,委外加工數,委外完成數,待轉入,待開工,待完工,待轉出
            $strTable .= H::td($val['OP']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['STN_NAME']);
//            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字零不显示($val['在制數']);
            $strTable .= H::td数字零不显示($val['良品轉入']);
            $strTable .= H::td数字零不显示($val['良品轉出']);
            $strTable .= H::td数字零不显示($val['當站報廢']);
            if ($val['委外加工數'] > 0) {
//                $x = HTML::get基础数据Link客制显示Text('case_apmt501.php', $wo,number_format($val['委外加工數']));
////                $strTable .= H::td数字零不显示($val['委外加工數']);
//                $strTable .= H::td($x);
                $strTable .= H::td工单委外加工數Link($wo,$val['委外加工數']);
                
            } else {

                $strTable .= H::td数字零不显示($val['委外加工數']);
            }
            if ($val['委外完成數'] > 0) {
                $strTable .= H::td工单委外完成數Link($wo,$val['委外完成數']);
                
            } else {

                $strTable .= H::td数字零不显示($val['委外完成數']);
            }
//            $strTable .= H::td数字零不显示($val['委外完成數']);
            $strTable .= H::td数字零不显示($val['待轉入']);
            $strTable .= H::td数字零不显示($val['待開工']);
            $strTable .= H::td数字零不显示($val['待完工']);
            $strTable .= H::td数字零不显示($val['待轉出']);
//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['委外加工數'];
            $sum2 += $val['委外完成數'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(8);
        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function showWO和产品($wo) {
        $sql = " SELECT WO,PROD,PROD_NAME FROM FT_WO_PROD_NAME_VIEW  WHERE WO = '$wo'";
//        $sqlToShow .= $sql;
        $arr = T100PROD::getArray($sql);
        echo WO::getHtmlTableAsft301Header($arr, "工單,產品,<a class='xxx' href='case_prodname.php'>產品名稱</a>", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
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
//            $strTable .= "<th>" . (1 + $key) . "</th>";

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

}
