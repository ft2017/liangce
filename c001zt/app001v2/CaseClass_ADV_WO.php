<?php

class ADV_WO {

    static public function getHtmlTable工单状态统计表($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th></th><th>状态码</th><th>状态说明</th><th>工单笔数</th>";
//        $strTable .= "<tr>";
//
////        foreach ($arr[0] as $key => $val) {
////
////            $strTable .= "<th>";
////            $strTable .= $key;
////            $strTable .= "</th>";
////        }
//        $strTable .= "</tr>";


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            $x = 1 + $key;
            $strTable .= "<th>$x</th>";

            foreach ($val as $key2 => $val2) {
                if ($key2 == 'CNT_WO') {

                    $strTable .= "<td class='text_align_right'>";
                    $strTable .= number_format($val2);
                    $strTable .= "</td>";
                } else if ($key2 == 'WO_STATUS') {

                    $strTable .= "<td class='text_align_center'>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                } else {

                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable产品状态统计表($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr><th></th><th>状态码</th><th>状态说明</th><th>产品笔数</th>";
//        $strTable .= "<tr>";
//
////        foreach ($arr[0] as $key => $val) {
////
////            $strTable .= "<th>";
////            $strTable .= $key;
////            $strTable .= "</th>";
////        }
//        $strTable .= "</tr>";


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            $x = 1 + $key;
            $strTable .= "<th>$x</th>";

            foreach ($val as $key2 => $val2) {
                if ($key2 == 'CNT_PROD') {

                    $strTable .= "<td class='text_align_right'>";
                    $strTable .= number_format($val2);
                    $strTable .= "</td>";
                } else if ($key2 == 'PROD_STATUS') {

                    $strTable .= "<td class='text_align_center'>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                } else {

                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function checking002Core上一站($arr) {

//        var_dump($arr);
        $arrMyPrev = array();
        $myPrev = "INIT";
        $上站錯誤數 = 0;
        $myNext = "";
        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
            $arrMyPrev[$val['OP']] = $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";

            $myNext = $val['STN'];

//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
            $myPrev = $val['STN'];
//            echo '<br>';
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
//           var_dump($arrMyPrev);
        return $arrMyPrev;
    }

    static public function checking002Core上下站_返回錯誤项次和工序($arr) {

        $arrPrevStnErr = array();
        $arrNextStnErr = array();

        $arrPrev = ADV_WO::checking002Core上一站($arr);
        $arrNext = ADV_WO::checking002Core下一站($arr);

        foreach ($arr as $key => $val) {
            $op = $val['OP'];
            $stn = $val['STN'];
            $preStn = $val['PRE_STN'];
            $nextStn = $val['NEXT_STN'];
            $myPreStn = $arrPrev[$op];
            $myNextStn = $arrNext[$op];


            if ($preStn != $myPreStn) {
//                echo "PRE XXX";
//                echo " $op $stn $preStn  *** $myPreStn <br>";
                $arrPrevStnErr[$op] = $stn;
            }
            if ($nextStn != $myNextStn) {
//                echo "NEXT ***";
//                echo " $op $stn $nextStn  *** $myNextStn <br>";
                $arrNextStnErr[$op] = $stn;
            }
        }
//        echo "<h1> end...</h1>";
//        var_dump($arrPrevStnErr);
//        var_dump($arrNextStnErr);
//        
//        echo "<hr>";
        $arrErr['prev'] = $arrPrevStnErr;
        $arrErr['next'] = $arrNextStnErr;

//        var_dump($arrErr);

        return $arrErr;
    }

    static public function checking002Core下一站($arr) {

//        var_dump($arr);
        $arrMyPrev = array();
        $arrMyNext = array(); // HOW TO 
        $arrOp = array();

        $myPrev = "INIT";
        $myNext = "END";
        $op = 0;
        $上站錯誤數 = 0;

        $stn = "";
        $cnt = 0; //大部份項次是10開始, 但是不保証
        foreach ($arr as $key => $val) {//由上而下
            $cnt++;
//            echo "第$cnt 筆, ";
            $op = $val['OP'];
            $stn = $val['STN'];
            $arrOp[$cnt] = $op;
            //當我看到第2工序時,現在的OP是20, 我的工序就是 第1工序 的 下一道工序            //
            //當我看到第3工序時,現在的OP是30, 我的工序就是 第2工序 的 下一道工序
            //當我看到第4工序時,現在的OP是40, 我的工序就是 第3工序 的 下一道工序
            $cnt上一個值 = $cnt - 1;


            $arrMyNext[$op] = "END";
            if ($cnt > 1) {
                $op上一個值 = $arrOp[$cnt - 1];

//                echo "<h3>第$cnt 工序時,現在的OP=$op, 現在工序是$stn ，就是 OP=$op上一個值 的 下一道工序  </h3>   ";
                $arrMyNext[$op上一個值] = $stn;
            }

//            $arrMyPrev[$val['OP']] = $myPrev;
//
//            $arrMyNext[$val['OP']] = $myNext;
//
////            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];

            $myPrev = $val['STN'];
//            echo '<br>';
        }

        return $arrMyNext;
    }

    static public function showT100HtmlTable工艺路线($wo, $stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单的工艺路线($wo);
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,	要開工,要報工,要PQC,要完工,要轉出";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序($wo, $stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单的工艺路线_含上下工序($wo);
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,上站工序,下站工序";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线_含上下工序($stn, $which, $arr, $fieldName, $debug);
    }

    static public function getErrCount($arrErr) {
        $s1 = sizeof($arrErr['prev']);
        $s2 = sizeof($arrErr['next']);
//        echo $s1." ".$s2;

        return $s1 + $s2;
    }

    static public function showT100HtmlTable产品工艺路线_检查上下工序_文本表示($prod, $工艺编号) {
        $sql = "
SELECT PROD, 工艺编号, OP, STN, PRE_STN, NEXT_STN FROM FT_AECM200
WHERE PROD = '$prod'
AND 工艺编号 = '$工艺编号'
ORDER BY OP,STN";
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,本站工序,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        var_dump($arr);
//        return ;
        $arrErr = ADV_WO::checking002Core上下站_返回錯誤项次和工序($arr);
//        var_dump($arrErr);
//echo ADV_WO::getErrCount($arrErr);
//        if ((sizeof($arrErr['prev'])+sizeof($arrErr['next']))>0)) {
        $s1 = sizeof($arrErr['prev']);
        $s2 = sizeof($arrErr['next']);
        if (ADV_WO::getErrCount($arrErr) > 0) {
            echo "<br>产品︰$prod <br>工艺编号：$工艺编号 <br>";
            if ($s1 > 0) {
                echo "&nbsp;&nbsp;&nbsp;pre 上站工序錯誤 <br>";

                foreach ($arrErr['prev'] as $key => $val) {
                    echo "&nbsp;&nbsp;&nbsp【$key" . "】$val <br>";
                }
            }
            if ($s2 > 0) {
                echo "&nbsp;&nbsp;&nbsp;next 下站工序錯誤 <br>";
                foreach ($arrErr['next'] as $key => $val) {
                    echo "&nbsp;&nbsp;&nbsp;【$key" . "】$val <br>";
                }
            }
            return 1;
        }
        return 0;
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
//        echo ADV_WO::getHtmlTable工艺路线_含上下工序_开发格式_文字表述($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序_开发格式_文字表述($wo, $stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单的工艺路线_含上下工序_开发格式($wo);
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,本站工序,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
        $arrErr = ADV_WO::checking002Core上下站_返回錯誤项次和工序($arr);
//        var_dump($arrErr);
//echo ADV_WO::getErrCount($arrErr);
//        if ((sizeof($arrErr['prev'])+sizeof($arrErr['next']))>0)) {
        $s1 = sizeof($arrErr['prev']);
        $s2 = sizeof($arrErr['next']);
        if (ADV_WO::getErrCount($arrErr) > 0) {
            echo "<br>工單︰$wo <br>";
            if ($s1 > 0) {
                echo "&nbsp;&nbsp;&nbsp;pre 上站工序錯誤 <br>";

                foreach ($arrErr['prev'] as $key => $val) {
                    echo "&nbsp;&nbsp;&nbsp【$key" . "】$val <br>";
                }
            }
            if ($s2 > 0) {
                echo "&nbsp;&nbsp;&nbsp;next 下站工序錯誤 <br>";
                foreach ($arrErr['next'] as $key => $val) {
                    echo "&nbsp;&nbsp;&nbsp;【$key" . "】$val <br>";
                }
            }
            return 1;
        }
        return 0;
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
//        echo ADV_WO::getHtmlTable工艺路线_含上下工序_开发格式_文字表述($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序_开发格式($wo, $stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单的工艺路线_含上下工序_开发格式($wo);
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,本站工序,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线_含上下工序_开发格式($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable已发出的工单() {
        $sql = ADV::getSql已发出的工单();
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,本站工序,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo MARK::getHtmlTable($arr);
//        ADV_WO::getHtmlTable已发出的工单($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工单状态统计表() {
        $sql = "SELECT * FROM FT_SFAA_T_V2_WO_STATUS";
//        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,本站工序,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工单状态统计表($arr);
//        ADV_WO::getHtmlTable已发出的工单($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable产品状态统计表() {
        $sql = "SELECT 
PROD_STATUS
,PROD_STATUS_NAME
,COUNT(PROD) CNT_PROD
FROM FT_ECBA_T
GROUP BY PROD_STATUS,PROD_STATUS_NAME";
//        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,本站工序,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable产品状态统计表($arr);
//        ADV_WO::getHtmlTable已发出的工单($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序_正式版本($wo, $stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单的工艺路线_含上下工序_正式版本($wo);
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,T100下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线_含上下工序__正式版本($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序_正式版本_实施RCARD($wo, $rcard, $stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单的工艺路线_含上下工序_正式版本_实施RCARD($wo, $rcard);
        $fieldName = ",工单,R,項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,T100下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线_含上下工序__正式版本_显示流水号($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序_正式版本_V2_含RUNCARD_不顯示七個要都為N($wo, $rcard, $stn, $which, $sql, $fieldName, $debug) {
        $sql = "SELECT WO,RCARD
,OP,STN,STN_NAME
,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,PRE_STN,NEXT_STN 
FROM A01_ASFT301_V2 
WHERE NOT(要委外='N' AND 要轉入='N' AND 要開工='N' AND 要報工='N' AND 要PQC='N' AND 要完工='N' AND 要轉出='N')
AND WO = '$wo'
AND RCARD = $rcard
ORDER BY OP";
        $fieldName = "工单,R,項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线_含上下工序__正式版本_V2($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序_正式版本_V2_含RUNCARD_不顯示七個要都為N_要_簡稱($wo, $rcard, $stn, $which, $sql, $fieldName, $debug) {
        $sql = "SELECT WO,RCARD
,OP,STN,STN_NAME
,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,PRE_STN,NEXT_STN 
FROM A01_ASFT301_V2 
WHERE NOT(要委外='N' AND 要轉入='N' AND 要開工='N' AND 要報工='N' AND 要PQC='N' AND 要完工='N' AND 要轉出='N')
AND WO = '$wo'
AND RCARD = $rcard
ORDER BY OP";
//        $fieldName = "工单,R,項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,T100下站,计算上站,计算下站,验证上站,验证下站";
        $fieldName = "工单,R,項次,工序,工序名稱,外,入,開,報,P,完,出,T100上站,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线_含上下工序__正式版本_V2($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable工艺路线_含上下工序_正式版本_V2_含RUNCARD_不顯示七個要都為N_进度($wo, $rcard, $stn, $which, $sql, $fieldName, $debug) {
        $sql = "SELECT WO,RCARD,OP,STN,STN_NAME,在制數,	良品轉入,良品轉出,當站報廢,委外加工數,委外完成數,待轉入,待開工,待完工,待轉出 FROM A01_ASFT301_V2
WHERE NOT(要委外='N' AND 要轉入='N' AND 要開工='N' AND 要報工='N' AND 要PQC='N' AND 要完工='N' AND 要轉出='N')
AND  WO = '$wo'
AND RCARD = $rcard
ORDER BY OP";
        $fieldName = "工单,R, 项次,工序,工序名称, 在制數, 良品轉入, 良品轉出, 當站報廢, 委外加工數, 委外完成數, 待轉入, 待開工, 待完工, 待轉出";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo MARK::getHtmlTable基本款无流水号($arr, $fieldName, FALSE, 'LLLLLLLLLLLL');
    }

    static public function showT100HtmlTable工艺路线_含上下工序_正式版本_V2($wo, $stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单的工艺路线_含上下工序_正式版本($wo);
        $fieldName = "項次,工序,工序名稱,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,T100上站,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工艺路线_含上下工序__正式版本_V2($stn, $which, $arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable产品的工艺路线($prod, $prod_ver) {
        $sql = "SELECT OP, A.STN,B.STN_NAME,A.工艺编号, PRE_STN, NEXT_STN FROM FT_AECM200 A
LEFT JOIN DEV_STN B
ON A.STN = B.STN
WHERE PROD = '$prod'
AND 工艺编号 = '$prod_ver'
ORDER BY OP,STN";
        $fieldName = "項次,工序,工序名稱,工艺编号,T100上站,T100下站,计算上站,计算下站,验证上站,验证下站";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable产品的工艺路线_含上下工序__正式版本($arr, $fieldName, FALSE);
    }

    static public function showT100HtmlTable工单工序的项次不是十的倍数($stn, $which, $sql, $fieldName, $debug) {
        $sql = ADV::getSql工单工序的项次不是十的倍数();
        $fieldName = ",工单";
        $arr = T100PROD::getArray($sql);
//        echo CASE_ASFT301_SEQ::getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $debug);
        echo ADV_WO::getHtmlTable工单工序的项次不是十的倍数V2($arr, $fieldName, FALSE, NULL, TRUE);
    }

    static public function getHtmlTable工艺路线($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            foreach ($val as $key2 => $val2) {

                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
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

    static public function getHtmlTable工艺路线_含上下工序($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            foreach ($val as $key2 => $val2) {

                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
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

    static public function getHtmlTable工艺路线_含上下工序__正式版本($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        $arr上一站 = ADV_WO::checking002Core上一站($arr);
        $arr下一站 = ADV_WO::checking002Core下一站($arr);

//        $arrErr上一站 = ADV_WO::checking002Core上一站_返回錯誤工序($arr);
//        var_dump($arrErr上一站);
//        var_dump($arr上一站);
//        var_dump($arr下一站);
//        $myPrev = "INIT";
//        $上站錯誤數 = 0;
//        $myNext = "";
//        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";
//
//            $myNext = $val['STN'];
//
//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
//            $myPrev = $val['STN'];
//            echo '<br>';
//            echo $val['STN2']." ";
//            echo $val['PRE_STN']." ";
//            echo $val['NEXT_STN']."<BR> ";
            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            $strTable .= "<tr>";


//          
            foreach ($val as $key2 => $val2) {//由左而右
                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
// DOING...
            $op = $val['OP'];
            $pre = $arr上一站[$op];
            $next = $arr下一站[$op];


//            $strTable .= "<td> $pre</td>";
//            $strTable .= "<td> $next</td>";
            if ($val['PRE_STN'] == $pre) {
                $strTable .= "<td> OK</td>";
            } else {
                $strTable .= "<td> <span class='dev004'>错误</span></td>";
            }
            if ($val['NEXT_STN'] == $next) {
                $strTable .= "<td>OK</td>";
            } else {
                $strTable .= "<td><span class='dev004'>错误</span></td>";
            }

            $strTable .= "</tr>";
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable工艺路线_含上下工序__正式版本_显示流水号($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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

        
        if ($isDebug) {
            $strTable .= "<tr><th></th>";
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        $arr上一站 = ADV_WO::checking002Core上一站($arr);
        $arr下一站 = ADV_WO::checking002Core下一站($arr);

//        $arrErr上一站 = ADV_WO::checking002Core上一站_返回錯誤工序($arr);
//        var_dump($arrErr上一站);
//        var_dump($arr上一站);
//        var_dump($arr下一站);
//        $myPrev = "INIT";
//        $上站錯誤數 = 0;
//        $myNext = "";
//        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";
//
//            $myNext = $val['STN'];
//
//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
//            $myPrev = $val['STN'];
//            echo '<br>';
//            echo $val['STN2']." ";
//            echo $val['PRE_STN']." ";
//            echo $val['NEXT_STN']."<BR> ";
            $strTable .= "<tr>";
            $strTable .= "<th>" . (1 + $key) . "</th>";

//            $strTable .= "<tr>";


//          
            foreach ($val as $key2 => $val2) {//由左而右
                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
// DOING...
            $op = $val['OP'];
            $pre = $arr上一站[$op];
            $next = $arr下一站[$op];


//            $strTable .= "<td> $pre</td>";
//            $strTable .= "<td> $next</td>";
            if ($val['PRE_STN'] == $pre) {
                $strTable .= "<td> OK</td>";
            } else {
                $strTable .= "<td> <span class='dev004'>错误</span></td>";
            }
            if ($val['NEXT_STN'] == $next) {
                $strTable .= "<td>OK</td>";
            } else {
                $strTable .= "<td><span class='dev004'>错误</span></td>";
            }

            $strTable .= "</tr>";
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
        $strTable .= "</table>";
        return $strTable;
    }

//2017-10-26 18点46分 张一翔
//getHtmlTable工艺路线_含上下工序__正式版本_V2，是工单 
//    //getHtmlTable产品的工艺路线_含上下工序__正式版本，是产品
    static public function getHtmlTable产品的工艺路线_含上下工序__正式版本($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        $arr上一站 = ADV_WO::checking002Core上一站($arr);
        $arr下一站 = ADV_WO::checking002Core下一站($arr);

//        $arrErr上一站 = ADV_WO::checking002Core上一站_返回錯誤工序($arr);
//        var_dump($arrErr上一站);
//        var_dump($arr上一站);
//        var_dump($arr下一站);
//        $myPrev = "INIT";
//        $上站錯誤數 = 0;
//        $myNext = "";
//        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";
//
//            $myNext = $val['STN'];
//
//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
//            $myPrev = $val['STN'];
//            echo '<br>';
//            echo $val['STN2']." ";
//            echo $val['PRE_STN']." ";
//            echo $val['NEXT_STN']."<BR> ";
            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            $strTable .= "<tr>";


//          
            foreach ($val as $key2 => $val2) {//由左而右
                if ($key2 == '工艺编号') {
                    $strTable .= "<td class='text_align_center'>$val2</td>";
                } else if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
// DOING...
            $op = $val['OP'];
            $pre = $arr上一站[$op];
            $next = $arr下一站[$op];


            $strTable .= "<td> $pre</td>";
            $strTable .= "<td> $next</td>";
            if ($val['PRE_STN'] == $pre) {
                $strTable .= "<td class='text_align_center'> OK</td>";
            } else {
                $strTable .= "<td class='text_align_center'> <span class='dev004'>错误</span></td>";
            }
            if ($val['NEXT_STN'] == $next) {
                $strTable .= "<td class='text_align_center'>OK</td>";
            } else {
                $strTable .= "<td class='text_align_center'><span class='dev004'>错误</span></td>";
            }

            $strTable .= "</tr>";
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable工艺路线_含上下工序__正式版本_V2($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        $arr上一站 = ADV_WO::checking002Core上一站($arr);
        $arr下一站 = ADV_WO::checking002Core下一站($arr);

//        $arrErr上一站 = ADV_WO::checking002Core上一站_返回錯誤工序($arr);
//        var_dump($arrErr上一站);
//        var_dump($arr上一站);
//        var_dump($arr下一站);
//        $myPrev = "INIT";
//        $上站錯誤數 = 0;
//        $myNext = "";
//        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";
//
//            $myNext = $val['STN'];
//
//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
//            $myPrev = $val['STN'];
//            echo '<br>';
//            echo $val['STN2']." ";
//            echo $val['PRE_STN']." ";
//            echo $val['NEXT_STN']."<BR> ";
            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            $strTable .= "<tr>";


//          
            foreach ($val as $key2 => $val2) {//由左而右
                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
// DOING...
            $op = $val['OP'];
            $pre = $arr上一站[$op];
            $next = $arr下一站[$op];


            $strTable .= "<td> $pre</td>";
            $strTable .= "<td> $next</td>";
            if ($val['PRE_STN'] == $pre) {
                $strTable .= "<td> OK</td>";
            } else {
                $strTable .= "<td> <span class='dev004'>错误</span></td>";
            }
            if ($val['NEXT_STN'] == $next) {
                $strTable .= "<td>OK</td>";
            } else {
                $strTable .= "<td><span class='dev004'>错误</span></td>";
            }

            $strTable .= "</tr>";
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable工艺路线_含上下工序_开发格式($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        $arr上一站 = ADV_WO::checking002Core上一站($arr);
        $arr下一站 = ADV_WO::checking002Core下一站($arr);

        $arrErr上一站 = ADV_WO::checking002Core上下站_返回錯誤项次和工序($arr);
//        var_dump($arrErr上一站);
//        var_dump($arr上一站);
//        var_dump($arr下一站);
//        $myPrev = "INIT";
//        $上站錯誤數 = 0;
//        $myNext = "";
//        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";
//
//            $myNext = $val['STN'];
//
//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
//            $myPrev = $val['STN'];
//            echo '<br>';
//            echo $val['STN2']." ";
//            echo $val['PRE_STN']." ";
//            echo $val['NEXT_STN']."<BR> ";
            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            $strTable .= "<tr>";


//          
            foreach ($val as $key2 => $val2) {//由左而右
                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
// DOING...
            $op = $val['OP'];
            $pre = $arr上一站[$op];
            $next = $arr下一站[$op];


            $strTable .= "<td> $pre</td>";
            $strTable .= "<td> $next</td>";
            if ($val['PRE_STN'] == $pre) {
                $strTable .= "<td> OK</td>";
            } else {
                $strTable .= "<td> <span class='dev004'>错误</span></td>";
            }
            if ($val['NEXT_STN'] == $next) {
                $strTable .= "<td>OK</td>";
            } else {
                $strTable .= "<td><span class='dev004'>错误</span></td>";
            }

            $strTable .= "</tr>";
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable已发出的工单($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        $arr上一站 = ADV_WO::checking002Core上一站($arr);
        $arr下一站 = ADV_WO::checking002Core下一站($arr);

        $arrErr上一站 = ADV_WO::checking002Core上下站_返回錯誤项次和工序($arr);
//        var_dump($arrErr上一站);
//        var_dump($arr上一站);
//        var_dump($arr下一站);
//        $myPrev = "INIT";
//        $上站錯誤數 = 0;
//        $myNext = "";
//        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";
//
//            $myNext = $val['STN'];
//
//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
//            $myPrev = $val['STN'];
//            echo '<br>';
//            echo $val['STN2']." ";
//            echo $val['PRE_STN']." ";
//            echo $val['NEXT_STN']."<BR> ";
            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            $strTable .= "<tr>";


//          
            foreach ($val as $key2 => $val2) {//由左而右
                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
// DOING...
            $op = $val['OP'];
            $pre = $arr上一站[$op];
            $next = $arr下一站[$op];


            $strTable .= "<td> $pre</td>";
            $strTable .= "<td> $next</td>";
            if ($val['PRE_STN'] == $pre) {
                $strTable .= "<td> OK</td>";
            } else {
                $strTable .= "<td> <span class='dev004'>错误</span></td>";
            }
            if ($val['NEXT_STN'] == $next) {
                $strTable .= "<td>OK</td>";
            } else {
                $strTable .= "<td><span class='dev004'>错误</span></td>";
            }

            $strTable .= "</tr>";
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable工艺路线_含上下工序_开发格式_文字表述($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        $arr上一站 = ADV_WO::checking002Core上一站($arr);
        $arr下一站 = ADV_WO::checking002Core下一站($arr);

        $arrErr上一站 = ADV_WO::checking002Core上下站_返回錯誤项次和工序($arr);
//        var_dump($arrErr上一站);
//        var_dump($arr上一站);
//        var_dump($arr下一站);
//        $myPrev = "INIT";
//        $上站錯誤數 = 0;
//        $myNext = "";
//        $stn = "";
        foreach ($arr as $key => $val) {//由上而下
//            echo 'OP:' . $val['OP'] . " ";
//            echo 'STN:' . $val['STN'] . " MY_PRE︰" . $myPrev;
//            echo " T100_PRE︰" . $val['PRE_STN'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//            $stn = $val['STN'];
//            echo 'OP:' . $val['OP'] . " ";
//            echo " STN︰" . $myNext . " " . 'MY_NEXT' . $val['STN'];
//            echo " T100_PRE︰" . $val['NEXT_STN'] . " ";
//
//            $myNext = $val['STN'];
//
//            if ($myPrev == $val['PRE_STN']) {
//                echo ".";
//            } else {
//                echo "!!!報錯";
//                $上站錯誤數++;
//            }
//            $myPrev = $val['STN'];
//            echo '<br>';
//            echo $val['STN2']." ";
//            echo $val['PRE_STN']." ";
//            echo $val['NEXT_STN']."<BR> ";
            $strTable .= "<tr>";
//            $strTable .= "<th>" . (1 + $key) . "</th>";

            $strTable .= "<tr>";


//          
            foreach ($val as $key2 => $val2) {//由左而右
                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
                } else {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                }
            }
// DOING...
            $op = $val['OP'];
            $pre = $arr上一站[$op];
            $next = $arr下一站[$op];


            $strTable .= "<td> $pre</td>";
            $strTable .= "<td> $next</td>";
            if ($val['PRE_STN'] == $pre) {
                $strTable .= "<td> OK</td>";
            } else {
                $strTable .= "<td> <span class='dev004'>错误</span></td>";
            }
            if ($val['NEXT_STN'] == $next) {
                $strTable .= "<td>OK</td>";
            } else {
                $strTable .= "<td><span class='dev004'>错误</span></td>";
            }

            $strTable .= "</tr>";
        }
//        if ($上站錯誤數 > 0) {
//            echo "<h1>這個工單的上站錯誤數為 $上站錯誤數</h1>";
//        } else {
//            echo "<h1>這個工單的上站 檢查OK!</h1>";
//        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable工单工序的项次不是十的倍数($stn, $which, $arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//            return "( 查無記錄 )";
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
//1要委外	2要轉入	3要開工	4要報工	5要PQC	6要完工	7要轉出
        $f[0] = "xxx";
        $f[1] = "要委外";
        $f[2] = "要轉入";
        $f[3] = "要開工";
        $f[4] = "要報工";
        $f[5] = "要PQC";
        $f[6] = "要完工";
        $f[7] = "要轉出";
//        $whichField = $f[$which];
        $whichField = "ZZZZZZZZZZZZZZZZZZZZZZZZZ";

//        HTML::show有淡黄底色("以淡黃底色高亮顯示，正在專注︰工序$stn $whichField 。");
//        echo "<h1>$whichField</h1>";
        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            $strTable .= "<th>" . (1 + $key) . "</th>";

            foreach ($val as $key2 => $val2) {

                if ($val2 == 'N') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'Y') {
//                    mb_internal_encoding("UTF-8");
//                    $testing = mb_substr($key2, 0, 1);
                    $recStn = $val['STN'];
                    if ($stn == $recStn) { // 該筆要客製
//                        echo "<h1>$recStn => $whichField ? $key2 </h1>";
                        if ($key2 == $whichField) {
                            $strTable .= "<td class='text_align_center'><span class='dev003'>Y</span></td>";
                        } else {
                            $strTable .= "<td class='text_align_center'> Y</td>";
                        }
                    } else {
                        $strTable .= "<td class='text_align_center'> Y</td>";
                    }
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
//                    $strTable .= "<td>";
//
////                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));
//
//                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
//                    foreach ($arr as $k1 => $v1) {
//                        $strTable .= HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
//                    }
//
//
//                    $strTable .= "</td>";
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

    static public function getHtmlTable工单工序的项次不是十的倍数V2($arr, $fieldName, $isDebug, $align, $isRec) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
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

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;

            $strTable .= "<tr>";
            if ($isRec) {
                $strTable .= "<th>$rec</th>";
            }

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
                if ($key2 == 'WO') {
                    $strTable .= "<td>";
//                    $strTable .= "XXXXXXXXXXXXXXXXXX";

                    $strTable .= HTML::getADV_CHECKing002Link($val2);
//                    $strTable .= $val2;

                    $strTable .= "</td>";
                } else {


                    $alignX = substr($align, $align_index, 1);
//            echo $alignX."  $align<hr>";
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
                }
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

}
