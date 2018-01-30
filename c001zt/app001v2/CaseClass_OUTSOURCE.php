<?php

class OUTSOURCE {

    static public function getHtmlTable客制有加总模板($arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( 無記錄 )";
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

            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['STN']);
//            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td外协Link($val['OUTSOURCE']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC']);
            $strTable .= H::td数字($val['PLAN_QTY']);

//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['CNT_REC'];
            $sum2 += $val['PLAN_QTY'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function showAsft315委外发料_合计($wo) {
        $sql = " SELECT WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY FROM FT_ASFT315_V2_STN_OUTSOURCE 
 WHERE WO = '$wo'";
//        $sqlToShow .= '<hr>' . $sql;
        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_ASFT301_ASFT315::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable客制有加总模板($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function getHtmlTable客制有加总模板_委外收货($arr, $fields) {
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
//WO, STN, 采购供应商, OUTSOURCE_NAME, CNT_REC, 已入库数量
            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['采购供应商']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC']);
            $strTable .= H::td数字($val['已入库数量']);

//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['CNT_REC'];
            $sum2 += $val['已入库数量'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable委外四部曲($arr, $fields) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th colspan='5' style='background-color:white;border-style:none'></th><th  colspan='2'>委外加工數</th><th  colspan='4' style='background-color:white;border-style:none'></th><th   colspan='2'>委外完成數</th></tr>";
        $strTable .= "<tr><th rowspan='2'></th><th rowspan='2'>工單</th><th rowspan='2'> 工序</th><th rowspan='2'> 外協</th><th rowspan='2'> 外協名稱</th><th  colspan='2'>	委外采购维护作业<br>（apmt501）</th><th  colspan='2'>委外发料作业<br>（asft315）</th><th  colspan='2'>委外采购收货作业<br>（apmt521）</th><th   colspan='2'>委外采购入库作业<br>（apmt571）</th></tr>";

        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sumACnt = 0;
        $sumASum = 0;
        $sumBCnt = 0;
        $sumBSum = 0;
        $sumCCnt = 0;
        $sumCSum = 0;
        $sumDCnt = 0;
        $sumDSum = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);

//WO, STN, STN_NAME, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量
//, CNT_REC03, 已入库数量, CNT_REC04, 入库数量
            $strTable .= H::td($val['WO']);
//            $strTable .= H::td($val['R']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['供应商编号']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC01']);
            $strTable .= H::td数字($val['折合采购量']);
            $strTable .= H::td数字($val['CNT_REC02']);
            $strTable .= H::td数字($val['委外发料数量']);
            $strTable .= H::td数字($val['CNT_REC03']);
            $strTable .= H::td数字($val['已入库数量']);
            $strTable .= H::td数字($val['CNT_REC04']);
            $strTable .= H::td数字($val['入库数量']);

//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_REC'];
//            $sum2 += $val['需求数量和'];


            $sumACnt += $val['CNT_REC01'];
            $sumASum += $val['折合采购量'];
            $sumBCnt += $val['CNT_REC02'];
            $sumBSum += $val['委外发料数量'];
            $sumCCnt += $val['CNT_REC03'];
            $sumCSum += $val['已入库数量'];
            $sumDCnt += $val['CNT_REC04'];
            $sumDSum += $val['入库数量'];

            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);



        $sumACntTd = H::td数字($sumACnt);
        $sumASumTd = H::td数字($sumASum);
        $sumBCntTd = H::td数字($sumBCnt);
        $sumBSumTd = H::td数字($sumBSum);
        $sumCCntTd = H::td数字($sumCCnt);
        $sumCSumTd = H::td数字($sumCSum);
        $sumDCntTd = H::td数字($sumDCnt);
        $sumDSumTd = H::td数字($sumDSum);

        $strTable .= "<tr>$hidden $sumACntTd $sumASumTd $sumBCntTd $sumBSumTd $sumCCntTd $sumCSumTd $sumDCntTd $sumDSumTd</tr>";

        $strTable .= "</table>";
        return $strTable;
    }
  static public function getHtmlTable委外四部曲_按产品_特徵($arr, $fields) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th colspan='6' style='background-color:white;border-style:none'></th><th  colspan='2'>委外加工數</th><th  colspan='4' style='background-color:white;border-style:none'></th><th   colspan='2'>委外完成數</th></tr>";
        $strTable .= "<tr><th rowspan='2'></th><th rowspan='2'>工單</th><th rowspan='2'>R</th><th rowspan='2'> 工序</th><th rowspan='2'> 外協</th><th rowspan='2'> 外協名稱</th><th  colspan='2'>	委外采购维护作业<br>（apmt501）</th><th  colspan='2'>委外发料作业<br>（asft315）</th><th  colspan='2'>委外采购收货作业<br>（apmt521）</th><th   colspan='2'>委外采购入库作业<br>（apmt571）</th></tr>";

        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sumACnt = 0;
        $sumASum = 0;
        $sumBCnt = 0;
        $sumBSum = 0;
        $sumCCnt = 0;
        $sumCSum = 0;
        $sumDCnt = 0;
        $sumDSum = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);

//WO, STN, STN_NAME, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量
// WO,ITEM PROD, STN, STN_NAME, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量, CNT_REC03, 已入库数量, CNT_REC04, 入库数量 
            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['R']);
//            $strTable .= H::td($val['ITEM']);
            $strTable .= H::td($val['STN']);
//            $strTable .= H::td($val['STN_NAME']);
            $strTable .= H::td($val['供应商编号']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC01']);
            $strTable .= H::td数字($val['折合采购量']);
            $strTable .= H::td数字($val['CNT_REC02']);
            $strTable .= H::td数字($val['委外发料数量']);
            $strTable .= H::td数字($val['CNT_REC03']);
            $strTable .= H::td数字($val['已入库数量']);
            $strTable .= H::td数字($val['CNT_REC04']);
            $strTable .= H::td数字($val['入库数量']);

//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_REC'];
//            $sum2 += $val['需求数量和'];


            $sumACnt += $val['CNT_REC01'];
            $sumASum += $val['折合采购量'];
            $sumBCnt += $val['CNT_REC02'];
            $sumBSum += $val['委外发料数量'];
            $sumCCnt += $val['CNT_REC03'];
            $sumCSum += $val['已入库数量'];
            $sumDCnt += $val['CNT_REC04'];
            $sumDSum += $val['入库数量'];

            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(6);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);



        $sumACntTd = H::td数字($sumACnt);
        $sumASumTd = H::td数字($sumASum);
        $sumBCntTd = H::td数字($sumBCnt);
        $sumBSumTd = H::td数字($sumBSum);
        $sumCCntTd = H::td数字($sumCCnt);
        $sumCSumTd = H::td数字($sumCSum);
        $sumDCntTd = H::td数字($sumDCnt);
        $sumDSumTd = H::td数字($sumDSum);

        $strTable .= "<tr>$hidden $sumACntTd $sumASumTd $sumBCntTd $sumBSumTd $sumCCntTd $sumCSumTd $sumDCntTd $sumDSumTd</tr>";

        $strTable .= "</table>";
        return $strTable;
    }
 static public function getHtmlTable委外四部曲_按产品($arr, $fields) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th colspan='6' style='background-color:white;border-style:none'></th><th  colspan='2'>委外加工數</th><th  colspan='4' style='background-color:white;border-style:none'></th><th   colspan='2'>委外完成數</th></tr>";
        $strTable .= "<tr><th rowspan='2'></th><th rowspan='2'>工單</th><th rowspan='2'>R</th><th rowspan='2'> 工序</th><th rowspan='2'> 外協</th><th rowspan='2'> 外協名稱</th><th  colspan='2'>	委外采购维护作业<br>（apmt501）</th><th  colspan='2'>委外发料作业<br>（asft315）</th><th  colspan='2'>委外采购收货作业<br>（apmt521）</th><th   colspan='2'>委外采购入库作业<br>（apmt571）</th></tr>";

        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sumACnt = 0;
        $sumASum = 0;
        $sumBCnt = 0;
        $sumBSum = 0;
        $sumCCnt = 0;
        $sumCSum = 0;
        $sumDCnt = 0;
        $sumDSum = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);

//WO, STN, STN_NAME, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量
// WO,ITEM PROD, STN, STN_NAME, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量, CNT_REC03, 已入库数量, CNT_REC04, 入库数量 
            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['R']);
//            $strTable .= H::td($val['ITEM']);
            $strTable .= H::td($val['STN']);
//            $strTable .= H::td($val['STN_NAME']);
            $strTable .= H::td($val['供应商编号']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC01']);
            $strTable .= H::td数字($val['折合采购量']);
            $strTable .= H::td数字($val['CNT_REC02']);
            $strTable .= H::td数字($val['委外发料数量']);
            $strTable .= H::td数字($val['CNT_REC03']);
            $strTable .= H::td数字($val['已入库数量']);
            $strTable .= H::td数字($val['CNT_REC04']);
            $strTable .= H::td数字($val['入库数量']);

//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_REC'];
//            $sum2 += $val['需求数量和'];


            $sumACnt += $val['CNT_REC01'];
            $sumASum += $val['折合采购量'];
            $sumBCnt += $val['CNT_REC02'];
            $sumBSum += $val['委外发料数量'];
            $sumCCnt += $val['CNT_REC03'];
            $sumCSum += $val['已入库数量'];
            $sumDCnt += $val['CNT_REC04'];
            $sumDSum += $val['入库数量'];

            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(6);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);



        $sumACntTd = H::td数字($sumACnt);
        $sumASumTd = H::td数字($sumASum);
        $sumBCntTd = H::td数字($sumBCnt);
        $sumBSumTd = H::td数字($sumBSum);
        $sumCCntTd = H::td数字($sumCCnt);
        $sumCSumTd = H::td数字($sumCSum);
        $sumDCntTd = H::td数字($sumDCnt);
        $sumDSumTd = H::td数字($sumDSum);

        $strTable .= "<tr>$hidden $sumACntTd $sumASumTd $sumBCntTd $sumBSumTd $sumCCntTd $sumCSumTd $sumDCntTd $sumDSumTd</tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable委外四部曲按产品($arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th colspan='7' style='background-color:white;border-style:none'></th><th  colspan='2'>委外加工數</th><th  colspan='4' style='background-color:white;border-style:none'></th><th   colspan='2'>委外完成數</th></tr>";
        $strTable .= "<tr><th rowspan='2'></th><th rowspan='2'>产品</th><th rowspan='2'> 产品名称</th><th rowspan='2'> 工序</th><th rowspan='2'> 工序名称</th><th rowspan='2'> 外協</th><th rowspan='2'> 外協名稱</th><th  colspan='2'>	委外采购维护作业<br>（apmt501）</th><th  colspan='2'>委外发料作业<br>（asft315）</th><th  colspan='2'>委外采购收货作业<br>（apmt521）</th><th   colspan='2'>委外采购入库作业<br>（apmt571）</th></tr>";

        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sumACnt = 0;
        $sumASum = 0;
        $sumBCnt = 0;
        $sumBSum = 0;
        $sumCCnt = 0;
        $sumCSum = 0;
        $sumDCnt = 0;
        $sumDSum = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);
//            PROD, PROD_NAME, STN, STN_NAME, OUTSOURCE, OUTSOURCE_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
            $strTable .= H::td($val['PROD']);
            $strTable .= H::td($val['PROD_NAME']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['STN_NAME']);
            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
//            $strTable .= H::td数字($val['CNT_WO']);
            $strTable .= H::td数字($val['CNT1']);
            $strTable .= H::td数字($val['SUM1']);
            $strTable .= H::td数字($val['CNT2']);
            $strTable .= H::td数字($val['SUM2']);
            $strTable .= H::td数字($val['CNT3']);
            $strTable .= H::td数字($val['SUM3']);
            $strTable .= H::td数字($val['CNT4']);
            $strTable .= H::td数字($val['SUM4']);

//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_REC'];
//            $sum2 += $val['需求数量和'];
//CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
            $sumACnt += $val['CNT1'];
            $sumASum += $val['SUM1'];
            $sumBCnt += $val['CNT2'];
            $sumBSum += $val['SUM2'];
            $sumCCnt += $val['CNT3'];
            $sumCSum += $val['SUM3'];
            $sumDCnt += $val['CNT4'];
            $sumDSum += $val['SUM4'];

            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(8);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);



        $sumACntTd = H::td数字($sumACnt);
        $sumASumTd = H::td数字($sumASum);
        $sumBCntTd = H::td数字($sumBCnt);
        $sumBSumTd = H::td数字($sumBSum);
        $sumCCntTd = H::td数字($sumCCnt);
        $sumCSumTd = H::td数字($sumCSum);
        $sumDCntTd = H::td数字($sumDCnt);
        $sumDSumTd = H::td数字($sumDSum);

        $strTable .= "<tr>$hidden $sumACntTd $sumASumTd $sumBCntTd $sumBSumTd $sumCCntTd $sumCSumTd $sumDCntTd $sumDSumTd</tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable委外四部曲按产品_不含外协($arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th colspan='5' style='background-color:white;border-style:none'></th><th  colspan='1'>委外加工數</th><th  colspan='2' style='background-color:white;border-style:none'></th><th   colspan='1'>委外完成數</th></tr>";
//        $strTable .= "<tr><th rowspan='2'></th><th rowspan='2'>产品</th><th rowspan='2'> 产品名称</th><th rowspan='2'> 工序</th><th rowspan='2'> 工序名称</th><th  colspan='1'>	委外采购维护作业<br>（apmt501）</th><th  colspan='1'>委外发料作业<br>（asft315）</th><th  colspan='1'>委外采购收货作业<br>（apmt521）</th><th   colspan='1'>委外采购入库作业<br>（apmt571）</th></tr>";
        $strTable .= "<tr><th></th><th >产品</th><th > 产品名称</th><th > 工序</th><th > 工序名称</th><th  colspan='1'>	委外采购维护作业<br>（apmt501）</th><th  colspan='1'>委外发料作业<br>（asft315）</th><th  colspan='1'>委外采购收货作业<br>（apmt521）</th><th   colspan='1'>委外采购入库作业<br>（apmt571）</th></tr>";

//        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sumACnt = 0;
        $sumASum = 0;
        $sumBCnt = 0;
        $sumBSum = 0;
        $sumCCnt = 0;
        $sumCSum = 0;
        $sumDCnt = 0;
        $sumDSum = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);
//            PROD, PROD_NAME, STN, STN_NAME, OUTSOURCE, OUTSOURCE_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
            $strTable .= H::td($val['PROD']);
            $strTable .= H::td($val['PROD_NAME']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['STN_NAME']);
//            $strTable .= H::td($val['OUTSOURCE']);
//            $strTable .= H::td($val['OUTSOURCE_NAME']);
//            $strTable .= H::td数字($val['CNT_WO']);
//            $strTable .= H::td数字($val['CNT1']);
            $strTable .= H::td数字($val['SUM1']);
//            $strTable .= H::td数字($val['CNT2']);
            $strTable .= H::td数字($val['SUM2']);
//            $strTable .= H::td数字($val['CNT3']);
            $strTable .= H::td数字($val['SUM3']);
//            $strTable .= H::td数字($val['CNT4']);
            $strTable .= H::td数字($val['SUM4']);

//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_REC'];
//            $sum2 += $val['需求数量和'];
//CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
//            $sumACnt += $val['CNT1'];
            $sumASum += $val['SUM1'];
//            $sumBCnt += $val['CNT2'];
            $sumBSum += $val['SUM2'];
//            $sumCCnt += $val['CNT3'];
            $sumCSum += $val['SUM3'];
//            $sumDCnt += $val['CNT4'];
            $sumDSum += $val['SUM4'];

            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);



        $sumACntTd = H::td数字($sumACnt);
        $sumASumTd = H::td数字($sumASum);
        $sumBCntTd = H::td数字($sumBCnt);
        $sumBSumTd = H::td数字($sumBSum);
        $sumCCntTd = H::td数字($sumCCnt);
        $sumCSumTd = H::td数字($sumCSum);
        $sumDCntTd = H::td数字($sumDCnt);
        $sumDSumTd = H::td数字($sumDSum);

        $strTable .= "<tr>$hidden $sumASumTd $sumBSumTd $sumCSumTd $sumDSumTd</tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableFT_OUTOURCE_RPT001($arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th colspan='8' style='background-color:white;border-style:none'></th><th  colspan='1'>委外加工數</th><th  colspan='2' style='background-color:white;border-style:none'></th><th   colspan='1'>委外完成數</th></tr>";
//        $strTable .= "<tr><th rowspan='2'></th><th rowspan='2'>产品</th><th rowspan='2'> 产品名称</th><th rowspan='2'> 工序</th><th rowspan='2'> 工序名称</th><th  colspan='1'>	委外采购维护作业<br>（apmt501）</th><th  colspan='1'>委外发料作业<br>（asft315）</th><th  colspan='1'>委外采购收货作业<br>（apmt521）</th><th   colspan='1'>委外采购入库作业<br>（apmt571）</th></tr>";
        $strTable .= "<tr><th></th><th >产品</th><th > 产品名称</th><th >产品重量</th><th >单位</th><th > 工序</th><th > 工序名称</th><th >报工单维护作业<br>（asft335）</th><th  colspan='1'>	委外采购维护作业<br>（apmt501）</th><th  colspan='1'>委外发料作业<br>（asft315）</th><th  colspan='1'>委外采购收货作业<br>（apmt521）</th><th   colspan='1'>委外采购入库作业<br>（apmt571）</th></tr>";
//        $strTable .= "<tr><th>序号</th><th>料号</th><th>品名/规格</th><th>单重</th><th></th><th></th><th></th><th>在制品仓<br>期初良品库存</th><th>在制品仓<br>不良品期初库存</th><th>厂内在制品<br>已入库总数</th><th></th><th>外协已发料数</th><th></th><th>尚需发外协总数</th><th>外协已回良品库数</th><th>外协已回不良品库数</th><th>外协返回已发厂内产线数量</th><th>外协返回在制仓残留库存数</th><th>在制品仓不良品总数</th><th>Remark</th></tr>";
//        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sumACnt = 0;
        $sumASum = 0;
        $sumBCnt = 0;
        $sumBSum = 0;
        $sumCCnt = 0;
        $sumCSum = 0;
        $sumDCnt = 0;
        $sumDSum = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);
//            PROD, PROD_NAME, STN, STN_NAME, OUTSOURCE, OUTSOURCE_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
//           PROD_WEIGHT, UOM
            $strTable .= H::td($val['PROD']);
            $strTable .= H::td($val['PROD_NAME']);
            $strTable .= H::td数字($val['PROD_WEIGHT']);
            $strTable .= H::td居中($val['UOM']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['STN_NAME']);
//            $strTable .= H::td空();
//            $strTable .= H::td空();
            $strTable .= H::td数字($val['MOVEIN_STORE_QTY']);
//            $strTable .= H::td($val['OUTSOURCE']);
//            $strTable .= H::td($val['OUTSOURCE_NAME']);
//            $strTable .= H::td数字($val['CNT_WO']);
//            $strTable .= H::td数字($val['CNT1']);
            $strTable .= H::td数字($val['SUM1']);
//            $strTable .= H::td数字($val['CNT2']);
            $strTable .= H::td数字($val['SUM2']);
//            $strTable .= H::td数字($val['CNT3']);
            $strTable .= H::td数字($val['SUM3']);
//            $strTable .= H::td空();
//            $strTable .= H::td数字($val['CNT4']);
            $strTable .= H::td数字($val['SUM4']);


//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_REC'];
//            $sum2 += $val['需求数量和'];
//CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
//            $sumACnt += $val['CNT1'];
            $sumASum += $val['SUM1'];
//            $sumBCnt += $val['CNT2'];
            $sumBSum += $val['SUM2'];
//            $sumCCnt += $val['CNT3'];
            $sumCSum += $val['SUM3'];
//            $sumDCnt += $val['CNT4'];
            $sumDSum += $val['SUM4'];

            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(8);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);



        $sumACntTd = H::td数字($sumACnt);
        $sumASumTd = H::td数字($sumASum);
        $sumBCntTd = H::td数字($sumBCnt);
        $sumBSumTd = H::td数字($sumBSum);
        $sumCCntTd = H::td数字($sumCCnt);
        $sumCSumTd = H::td数字($sumCSum);
        $sumDCntTd = H::td数字($sumDCnt);
        $sumDSumTd = H::td数字($sumDSum);

        $strTable .= "<tr>$hidden $sumASumTd $sumBSumTd $sumCSumTd $sumDSumTd</tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableFT_OUTOURCE_RPT001_V2($arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

//        $strTable .= "<tr><th colspan='8' style='background-color:white;border-style:none'></th><th  colspan='1'>委外加工數</th><th  colspan='2' style='background-color:white;border-style:none'></th><th   colspan='1'>委外完成數</th></tr>";
//        $strTable .= "<tr><th rowspan='2'></th><th rowspan='2'>产品</th><th rowspan='2'> 产品名称</th><th rowspan='2'> 工序</th><th rowspan='2'> 工序名称</th><th  colspan='1'>	委外采购维护作业<br>（apmt501）</th><th  colspan='1'>委外发料作业<br>（asft315）</th><th  colspan='1'>委外采购收货作业<br>（apmt521）</th><th   colspan='1'>委外采购入库作业<br>（apmt571）</th></tr>";
        $strTable .= "<tr><th></th><th >产品</th><th > 产品名称</th><th >产品重量</th><th > 工序</th><th >报工单维护作业<br>（asft335）<br>转入库房</th><th  colspan='1'>	委外采购维护作业<br>（apmt501）</th><th  colspan='1'>委外发料作业<br>（asft315）</th><th  colspan='1'>委外采购收货作业<br>（apmt521）</th><th   colspan='1'>委外采购入库作业<br>（apmt571）</th><th >报工单维护作业<br>（asft335）<br>转出库房</th></tr>";
//        $strTable .= "<tr><th>序号</th><th>料号</th><th>品名/规格</th><th>单重</th><th></th><th></th><th></th><th>在制品仓<br>期初良品库存</th><th>在制品仓<br>不良品期初库存</th><th>厂内在制品<br>已入库总数</th><th></th><th>外协已发料数</th><th></th><th>尚需发外协总数</th><th>外协已回良品库数</th><th>外协已回不良品库数</th><th>外协返回已发厂内产线数量</th><th>外协返回在制仓残留库存数</th><th>在制品仓不良品总数</th><th>Remark</th></tr>";
//        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sumACnt = 0;
        $sumASum = 0;
        $sumBCnt = 0;
        $sumBSum = 0;
        $sumCCnt = 0;
        $sumCSum = 0;
        $sumDCnt = 0;
        $sumDSum = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);
//            PROD, PROD_NAME, STN, STN_NAME, OUTSOURCE, OUTSOURCE_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
//           PROD_WEIGHT, UOM
            $strTable .= H::td($val['PROD']);
            $strTable .= H::td($val['PROD_NAME']);
            $strTable .= H::td数字($val['PROD_WEIGHT']);
//            $strTable .= H::td居中($val['UOM']);
            $strTable .= H::td($val['STN']);
//            $strTable .= H::td($val['STN_NAME']);
//            $strTable .= H::td空();
//            $strTable .= H::td空();
            $strTable .= H::td数字($val['MOVEIN_STORE_QTY']);
//            $strTable .= H::td($val['OUTSOURCE']);
//            $strTable .= H::td($val['OUTSOURCE_NAME']);
//            $strTable .= H::td数字($val['CNT_WO']);
//            $strTable .= H::td数字($val['CNT1']);
            $strTable .= H::td数字($val['SUM1']);
//            $strTable .= H::td数字($val['CNT2']);
            $strTable .= H::td数字($val['SUM2']);
//            $strTable .= H::td数字($val['CNT3']);
            $strTable .= H::td数字($val['SUM3']);
//            $strTable .= H::td空();
//            $strTable .= H::td数字($val['CNT4']);
            $strTable .= H::td数字($val['SUM4']);
            $strTable .= H::td数字($val['MOVEOUT_STORE_QTY']);


//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_REC'];
//            $sum2 += $val['需求数量和'];
//CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4
//            $sumACnt += $val['CNT1'];
            $sumASum += $val['SUM1'];
//            $sumBCnt += $val['CNT2'];
            $sumBSum += $val['SUM2'];
//            $sumCCnt += $val['CNT3'];
            $sumCSum += $val['SUM3'];
//            $sumDCnt += $val['CNT4'];
            $sumDSum += $val['SUM4'];

            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(8);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);



        $sumACntTd = H::td数字($sumACnt);
        $sumASumTd = H::td数字($sumASum);
        $sumBCntTd = H::td数字($sumBCnt);
        $sumBSumTd = H::td数字($sumBSum);
        $sumCCntTd = H::td数字($sumCCnt);
        $sumCSumTd = H::td数字($sumCSum);
        $sumDCntTd = H::td数字($sumDCnt);
        $sumDSumTd = H::td数字($sumDSum);

//        $strTable .= "<tr>$hidden $sumASumTd $sumBSumTd $sumCSumTd $sumDSumTd</tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt501委外采购_合计($arr, $fields) {
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

//            WO, ITEM, STN, OUTSOURCE, CNT_REC, 需求数量和, 折合采购量和, 已收货量和, 已入库量和
            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC']);
            $strTable .= H::td数字($val['需求数量和']);

//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['CNT_REC'];
            $sum2 += $val['需求数量和'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt501委外采购_合计_按产品($arr, $fields) {
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

//            WO, ITEM, STN, OUTSOURCE, CNT_REC, 需求数量和, 折合采购量和, 已收货量和, 已入库量和
            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC']);
            $strTable .= H::td数字($val['需求数量和']);

//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['CNT_REC'];
            $sum2 += $val['需求数量和'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt501委外采购_基础数据V2($arr, $fields) {
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

//            采购单号,采购日期,STN,供应商编号,折合采购量
            $strTable .= H::td($val['采购单号']);
            $strTable .= H::td($val['采购日期']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['供应商编号']);
            $strTable .= H::td数字($val['折合采购量']);
//            $strTable .= H::td数字($val['需求数量和']);
//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['折合采购量'];
//            $sum2 += $val['需求数量和'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt501委外采购_基础数据_按产品($arr, $fields) {
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

//            采购单号,采购日期,STN,供应商编号,折合采购量
            $strTable .= H::td($val['采购单号']);
            $strTable .= H::td($val['采购日期']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['供应商编号']);
            $strTable .= H::td数字($val['折合采购量']);
//            $strTable .= H::td数字($val['需求数量和']);
//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['折合采购量'];
//            $sum2 += $val['需求数量和'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableAsft315委外发料_基础数据($arr, $fields) {
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

//            ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY
            $strTable .= H::td($val['ASFT315_NUM']);
            $strTable .= H::td($val['ASFT315_TRANS_DATE']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td数字($val['PLAN_QTY']);
//            $strTable .= H::td数字($val['需求数量和']);
//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['PLAN_QTY'];
//            $sum2 += $val['需求数量和'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt521委外收货_基础数据($arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";
        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sum1 = 0;
        $sum2 = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);

//            ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY
//            委外采购收货单,DT,STN,采购供应商,已入库数量
            $strTable .= H::td($val['委外采购收货单']);
            $strTable .= H::td($val['DT']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['采购供应商']);
            $strTable .= H::td数字($val['已入库数量']);
//            $strTable .= H::td数字($val['需求数量和']);
//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['已入库数量'];
//            $sum2 += $val['需求数量和'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt571委外采购入库_基础数据V2($arr, $fields) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";
        $strTable .= H::getTableTrTh欄位($fields);

        $rec = 0;
        $sum1 = 0;
        $sum2 = 0;

        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= H::th($rec);

//            ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY
//            委外采购收货单,DT,STN,采购供应商,已入库数量
            $strTable .= H::td($val['委外采购收货单']);
            $strTable .= H::td($val['DT']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['采购供应商']);
            $strTable .= H::td数字($val['已入库数量']);
//            $strTable .= H::td数字($val['需求数量和']);
//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['已入库数量'];
//            $sum2 += $val['需求数量和'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable客制有加总模板_委外入库($arr, $fields) {
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
//WO, STN, 采购供应商, OUTSOURCE_NAME, CNT_REC, 已入库数量
            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_OUTSOURCE']);
            $strTable .= H::td数字($val['入库数量']);

//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['CNT_OUTSOURCE'];
            $sum2 += $val['入库数量'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt571委外采购入库_合计($arr, $fields) {
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
//WO, STN, 采购供应商, OUTSOURCE_NAME, CNT_REC, 已入库数量
            $strTable .= H::td($val['WO']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_OUTSOURCE']);
            $strTable .= H::td数字($val['入库数量']);

//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['CNT_OUTSOURCE'];
            $sum2 += $val['入库数量'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableApmt571委外采购入库_基础数据($arr, $fields) {
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
//WO, STN, 采购供应商, OUTSOURCE_NAME, CNT_REC, 已入库数量
//            委外入库单, DT,  STN,采购供应商, 入库数量,库位, 储位, BATCH
            $strTable .= H::td($val['委外入库单']);
            $strTable .= H::td($val['DT']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['采购供应商']);
//            $strTable .= H::td数字($val['CNT_OUTSOURCE']);
            $strTable .= H::td数字($val['入库数量']);

//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['CNT_OUTSOURCE'];
            $sum2 += $val['入库数量'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
//        $sum1Td = H::td数字($sum1);
        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum2Td </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable委外列表($arr, $fields) {
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

//            PMAAL003, 委外厂商, WO, STN, STN_NAME, 委外数量
            $strTable .= H::td($val['委外厂商']);
            $strTable .= H::td工单Link($val['WO']);
            $strTable .= H::td($val['STN']);
            $strTable .= H::td($val['STN_NAME']);
            $strTable .= H::td数字($val['委外数量']);
//            $strTable .= H::td数字($val['入库数量']);
//            $sum1 += $val['CNT_REC']；
            $sum1 += $val['委外数量'];
//            $sum2 += $val['入库数量'];



            $strTable .= "</tr>";
        }
        $hidden = HTML::getHiddenTdWithColspan(5);
        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);

        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable厂商名称($arr, $fields) {
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

//            CUST,SHORT_NAME,CUST_NAME
            $strTable .= H::td($val['CUST']);
            $strTable .= H::td($val['SHORT_NAME']);
            $strTable .= H::td($val['CUST_NAME']);
//            $strTable .= H::td($val['STN_NAME']);
//            $strTable .= H::td数字($val['委外数量']);
//            $strTable .= H::td数字($val['入库数量']);
//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['委外数量'];
//            $sum2 += $val['入库数量'];



            $strTable .= "</tr>";
        }
//        $hidden = HTML::getHiddenTdWithColspan(5);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);
//        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable外协统计表($arr, $fields) {
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

//            OUTSOURCE, OUTSOURCE_NAME, CNT_REC, CNT_WO, 委外数量合计
            $strTable .= H::td外协Link($val['OUTSOURCE']);
//            $strTable .= H::td($val['OUTSOURCE']);
            $strTable .= H::td($val['OUTSOURCE_NAME']);
            $strTable .= H::td数字($val['CNT_REC']);
//            $strTable .= H::td($val['STN_NAME']);
            $strTable .= H::td数字($val['委外数量合计']);
//            $strTable .= H::td数字($val['入库数量']);
//            $sum1 += $val['CNT_REC']；
//            $sum1 += $val['委外数量'];
//            $sum2 += $val['入库数量'];



            $strTable .= "</tr>";
        }
//        $hidden = HTML::getHiddenTdWithColspan(5);
//        $sum1Td = H::td数字($sum1);
//        $sum2Td = H::td数字($sum2);
//        $strTable .= "<tr>$hidden $sum1Td  </tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function showApmt521委外采购收货_合计($wo) {
        $sql = " SELECT WO, STN, 采购供应商, OUTSOURCE_NAME, CNT_REC, 已入库数量 FROM FT_APMT521_V2_STN_OUTSOURCE 
 WHERE WO = '$wo'";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable客制有加总模板_委外收货($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showApmt501委外采购_合计($wo) {
        $sql = " SELECT * FROM FT_APMT501_WO_STN_OUTSOURCE_V2 
 WHERE WO = '$wo'";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableApmt501委外采购_合计($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showApmt501委外采购_合计_按产品($wo) {
        $sql = " SELECT * FROM FT_APMT501_WO_STN_OUTSOURCE_V2 
 WHERE WO = '$wo'";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableApmt501委外采购_合计_按产品($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function show委外四部曲($wo) {
        $sql = " SELECT WO,R, STN, STN_NAME, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量, CNT_REC03, 已入库数量, CNT_REC04, 入库数量 FROM A12_STN_OUTSOURCE 
 WHERE WO = '$wo'";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable委外四部曲($arr, "筆數, 數量和, 筆數, 數量和, 筆數, 數量和, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

     static public function show委外四部曲_按产品($prod) {
        $sql = "SELECT WO,R,ITEM , STN, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量, CNT_REC03, 已入库数量, CNT_REC04, 入库数量 
            FROM A12_STN_OUTSOURCE 
 WHERE ITEM = '$prod' ORDER BY WO,R, STN, 供应商编号";
//$sqlToShow .= '<hr>' . $sql;
//        echo $sql;
        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable委外四部曲_按产品($arr, "筆數, 數量和, 筆數, 數量和, 筆數, 數量和, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }
    
        static public function show委外四部曲_按产品_特征($prod) {
        $sql = " SELECT PROD,PROD_NAME,A.WO, R, FEATURE, STN, STN_NAME, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY, 计价数量 FROM A27_STN_OUTSOURCE_CSFR008 A 
   LEFT JOIN DEV_WO_PROD_NAME B ON A.WO=B.WO
 WHERE PROD = '$prod' ORDER BY PROD,FEATURE,WO,R, STN, 供";
//$sqlToShow .= '<hr>' . $sql;
//        echo $sql;
        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable委外四部曲_按产品_特徵($arr, "筆數, 數量和, 筆數, 數量和, 筆數, 數量和, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }
    
    
         static public function show委外四部曲_按产品_按工单及Rcard($prod,$wo,$r) {
        $sql = "SELECT WO,R,ITEM , STN, 供应商编号, OUTSOURCE_NAME, CNT_REC01, 折合采购量, CNT_REC02, 委外发料数量, CNT_REC03, 已入库数量, CNT_REC04, 入库数量 
            FROM A12_STN_OUTSOURCE 
 WHERE ITEM = '$prod' AND WO = '$wo' AND R = '$r' ORDER BY WO,R, STN, 供应商编号";
//$sqlToShow .= '<hr>' . $sql;
//        echo $sql;
        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable委外四部曲_按产品($arr, "筆數, 數量和, 筆數, 數量和, 筆數, 數量和, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }
    
    static public function show委外四部曲全部产品_不含外协($wo) {
        $sql = " SELECT PROD, PROD_NAME, STN, STN_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4 FROM FT_STN_OUTOURCE_WH_PROD_RPT2 ORDER BY PROD,STN";

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable委外四部曲按产品_不含外协($arr, " 數量和,  數量和,  數量和, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function show委外四部曲全部产品($wo) {
        $sql = " SELECT PROD, PROD_NAME, STN, STN_NAME, OUTSOURCE, OUTSOURCE_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4 FROM FT_STN_OUTOURCE_WH_PROD_RPT1 ORDER BY PROD,STN";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable委外四部曲按产品($arr, "筆數, 數量和, 筆數, 數量和, 筆數, 數量和, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showApmt501委外收货($wo) {
        $sql = " SELECT WO, STN, 采购供应商, OUTSOURCE_NAME, CNT_REC, 已入库数量 FROM FT_APMT521_V2_STN_OUTSOURCE 
 WHERE WO = '$wo'";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTable客制有加总模板_委外收货($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showFT_OUTOURCE_RPT001() {
        $sql = " SELECT PROD, PROD_NAME, PROD_WEIGHT, UOM, STN, STN_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4,MOVEIN_STORE_QTY FROM FT_OUTOURCE_RPT001_V2 
";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableFT_OUTOURCE_RPT001($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showFT_OUTOURCE_RPT001_V2() {
        $sql = " SELECT PROD, PROD_NAME, PROD_WEIGHT, UOM, STN, STN_NAME, CNT_WO, CNT1, SUM1, CNT2, SUM2, CNT3, SUM3, CNT4, SUM4,MOVEIN_STORE_QTY,MOVEOUT_STORE_QTY
            FROM FT_OUTOURCE_RPT001_V3
            ORDER BY PROD, STN
";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableFT_OUTOURCE_RPT001_V2($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showApmt571委外采购入库_合计($wo) {
        $sql = " select
WO
,STN
,采购供应商 OUTSOURCE
,OUTSOURCE_NAME

,COUNT(采购供应商) CNT_OUTSOURCE

,SUM(入库数量) 入库数量
from FT_APMT571
WHERE WO='$wo'
GROUP BY
WO
,STN
,采购供应商 ,OUTSOURCE_NAME";

//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    WO, STN, OUTSOURCE, CNT_OUTSOURCE, 入库数量
        echo OUTSOURCE::getHtmlTableApmt571委外采购入库_合计($arr, ",工單, 工序, 外協,外協名稱, 筆數, 入库数量"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function show委外统计() {
        $sql = " select
WO
,STN
,采购供应商 OUTSOURCE
,OUTSOURCE_NAME

,COUNT(采购供应商) CNT_OUTSOURCE

,SUM(入库数量) 入库数量
from FT_APMT571
WHERE WO='$wo'
GROUP BY
WO
,STN
,采购供应商 ,OUTSOURCE_NAME";

//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    WO, STN, OUTSOURCE, CNT_OUTSOURCE, 入库数量
        echo OUTSOURCE::getHtmlTable客制有加总模板_委外入库($arr, ",工單, 工序, 外協,外協名稱, 筆數, 入库数量"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function show委外列表($ousource) {
        $sql = "SELECT * FROM FT_ASFT315_OUTSOURCE_STN_WO
WHERE 委外厂商 = '$ousource' AND 委外数量 > 0";

//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    WO, STN, OUTSOURCE, CNT_OUTSOURCE, 入库数量
        echo OUTSOURCE::getHtmlTable委外列表($arr, ", 委外厂商, WO, STN, STN_NAME, 委外数量"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function show厂商名称($ousource) {
        $sql = "select CUST,SHORT_NAME,CUST_NAME from dev_CUST WHERE CUST = '$ousource'
";

//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    WO, STN, OUTSOURCE, CNT_OUTSOURCE, 入库数量
        echo OUTSOURCE::getHtmlTable厂商名称($arr, ", 委外厂商,委外厂商简称,委外厂商全名"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function show外协统计表() {
        $sql = "
SELECT * FROM FT_ASFT315_OUTSOURCE_INDEX WHERE OUTSOURCE IS NOT NULL 
ORDER BY OUTSOURCE
";

//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "WO, STN, OUTSOURCE, OUTSOURCE_NAME, CNT_REC, PLAN_QTY", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//echo CASE_APMT521::getHtmlTable工單工序($arr, ",工單, 工序, 外協, 外協名稱, 筆數, 數量和", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    WO, STN, OUTSOURCE, CNT_OUTSOURCE, 入库数量
        echo OUTSOURCE::getHtmlTable外协统计表($arr, ", 委外厂商,委外厂商,笔数,委外数量合计"); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function getHtmlTable工單工序($arr, $fieldName, $isDebug) {
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
                } else if ($key2 == "WO") {
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

    static public function showAsft315委外发料_基础数据($wo) {
        $sql = "
SELECT 
ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY
FROM FT_ASFT315_V2
 WHERE WO = '$wo' ORDER BY ASFT315_NUM";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY,  OUTOURCE_BY, OUTSOURCE_BY_NAME", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//        echo OUTSOURCE::getHtmlTable工單工序($arr, ",外协发料单,  過帳日期,工序, 外協,  數量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableAsft315委外发料_基础数据($arr, ",外协发料单,  過帳日期,工序, 外協,  數量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function getHtmlTable委外收货基础数据($arr, $fieldName, $isDebug) {
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
                } else if ($key2 == "WO") {
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

    static public function getHtmlTableApmt501委外采购单维护作业($arr, $fieldName, $isDebug) {
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
                } else if ($key2 == "WO") {
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

    static public function showApmt521委外收货_基础数据($wo) {
        $sql = "
select 委外采购收货单,DT,STN,采购供应商,已入库数量 from ft_apmt521 WHERE WO='$wo' ORDER BY 委外采购收货单";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY,  OUTOURCE_BY, OUTSOURCE_BY_NAME", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//        echo OUTSOURCE::getHtmlTable委外收货基础数据($arr, " ,委外采购收货单,日期,工序, 外協,  數量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableApmt521委外收货_基础数据($arr, " ,委外采购收货单,日期,工序, 外協,  數量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showApmt501委外采购单维护作业_有多的栏位待验证($wo) {
        $sql = "
SELECT 采购单号, WO, ITEM, 需求数量, 折合采购量, 已收货量, 已入库量, 来源项次, 来源项序, 来源分批序, STN FROM FT_APMT501 WHERE WO='$wo' ";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY,  OUTOURCE_BY, OUTSOURCE_BY_NAME", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableApmt501委外采购单维护作业($arr, " ,采购单号, WO, ITEM, 需求数量, 折合采购量, 已收货量, 已入库量, 来源项次, 来源项序, 来源分批序, STN", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showApmt501委外采购_基础数据($wo) {
        $sql = "
SELECT 采购单号,采购日期,STN,供应商编号,折合采购量 FROM FT_APMT501 WHERE WO='$wo' ";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY,  OUTOURCE_BY, OUTSOURCE_BY_NAME", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//        echo OUTSOURCE::getHtmlTableApmt501委外采购单维护作业($arr, " ,采购单号,  采购日期,工序,外协, 折合采购量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    

        echo OUTSOURCE::getHtmlTableApmt501委外采购_基础数据V2($arr, " ,采购单号,  采购日期,工序,外协, 折合采购量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

    static public function showApmt501委外采购_基础数据_按产品($prod) {
        $sql = "
SELECT ITEM PROD,采购单号,采购日期,STN,供应商编号,折合采购量 FROM FT_APMT501 WHERE ITEM='$prod' ";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY,  OUTOURCE_BY, OUTSOURCE_BY_NAME", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//        echo OUTSOURCE::getHtmlTableApmt501委外采购单维护作业($arr, " ,采购单号,  采购日期,工序,外协, 折合采购量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    

        echo OUTSOURCE::getHtmlTableApmt501委外采购_基础数据_按产品($arr, " ,采购单号,  采购日期,工序,外协, 折合采购量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

//   static public function showAsft315委外发料_基础数据($wo) {
//        $sql = "
//SELECT 采购单号,采购日期,STN,供应商编号,折合采购量 FROM FT_APMT501 WHERE WO='$wo' ";
////$sqlToShow .= '<hr>' . $sql;
//
//        $arr = T100PROD::getArray($sql);
////echo CASE_ASFT315::getHtmlTable工單工序($arr, "ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY,  OUTOURCE_BY, OUTSOURCE_BY_NAME", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
////        echo OUTSOURCE::getHtmlTableApmt501委外采购单维护作业($arr, " ,采购单号,  采购日期,工序,外协, 折合采购量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
////    
//         echo OUTSOURCE::getHtmlTableApmt501委外采购_基础数据V2($arr, " ,采购单号,  采购日期,工序,外协, 折合采购量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//        echo OUTSOURCE::getHtmlTableApmt501委外采购_基础数据V2($arr, " ,采购单号,  采购日期,工序,外协, 折合采购量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//    }

    static public function showApmt571委外采购入库_基础数据($wo) {
        $sql = "
SELECT 委外入库单, DT,  STN,采购供应商, 入库数量,库位, 储位, BATCH FROM FT_APMT571 WHERE WO = '$wo'";
//$sqlToShow .= '<hr>' . $sql;

        $arr = T100PROD::getArray($sql);
//echo CASE_ASFT315::getHtmlTable工單工序($arr, "ASFT315_NUM,  ASFT315_TRANS_DATE,STN, OUTSOURCE,  PLAN_QTY,  OUTOURCE_BY, OUTSOURCE_BY_NAME", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
//        echo OUTSOURCE::getHtmlTable委外收货基础数据($arr, " ,委外采购收货单,日期,工序, 外協,  入库数量,库位, 储位, 批号", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
        echo OUTSOURCE::getHtmlTableApmt571委外采购入库_基础数据($arr, " ,委外采购收货单,日期,工序, 外協,  入库数量", false); //以SQL，指定T100數據庫，透過Array處理，直接顯示基本的HTML TABLE，含數據庫的欄位名稱。
    }

}
