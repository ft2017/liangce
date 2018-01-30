<?php

$arrEnv['VER'] = '1.0';
require 'CaseLogClass.php'; // by Mark, 2017-09-27, 要注意情緒控制!
T100PRODLOG::log();

//class TR{
//    $str=0;
//    public function addTd($td){
//        
//    }
//}

class A23X {

    static public function showT100數據庫_基本款有流水号_自动栏位($sql) {
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位($arr);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_是否顯示SQL_是否顯示原欄位_EXT($sql, $toShowSQL = false, $toShowField = false) {
        if ($toShowSQL) {
            echo "<HR>$sql";
        }
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位_是否仍顯示原欄位_EXT($arr, $toShowField);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_是否顯示SQL_是否顯示原欄位($sql, $toShowSQL = false, $toShowField = false) {

        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位_是否仍顯示原欄位($arr, $toShowField);
        if ($toShowSQL) {
            echo "$sql";
        }
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_是否顯示SQL($sql, $toShowSQL = false) {
        if ($toShowSQL) {
            echo "<HR>$sql";
        }
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位_是否仍顯示原欄位($arr, $toShowSQL);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN($sql, $btn) {
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位__加立即查看BTN($arr, $btn);
    }

//    static public function showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多個($sql, $btn) {
//        $arr = T100PROD::getArray($sql);
//        echo X::getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多個($arr, $btn);
//    }

    static public function showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多參數($sql, $btn) {
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數($arr, $btn);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多參數_多BTN($sql, $btn) {
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數_多BTN($arr, $btn);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多參數_多BTN_允許沒有BTN($title, $sql, $btn = null) {
//        echo  $title ;
        echo "<br><span class='badge badge-default'>" . $title . "</span>";
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數_多BTN_允許沒有BTN($arr, $btn);
    }

    static public function showPageTitleAndEachTables($app, $page) {
        // （一）show Page Title
        A23X::showPageTitle($app, $page);
//        HTML::showDEBUG("剛顯示 showPageTitle");
//        
        // （二）show Each Tables
        $sql = "SELECT* FROM FT000 WHERE APP='$app' AND PAGE='$page' AND SEQ>0 ORDER BY SEQ";
        $arr = T100PROD::getArray($sql);
        foreach ($arr as $key => $val) {
            $seq = $val['SEQ'];
//            if (A23X::isDevGroup()) {
//                A23HTML::show有灰底色("$sql<br>");
//            }
            A23X::showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多參數_多BTN_允許沒有BTN_BTNS用JSON字串_取FT000($app, $page, $seq);
        }
    }

    static public function showPageTitle($app, $page) {
        $sql = "SELECT* FROM FT000 WHERE APP='$app' AND PAGE='$page' AND SEQ='0'";
        $arr = T100PROD::getArray($sql);
//$data=X::getUrlData();
//        $sql = X::getParsedSQL($arr[0]['SQL']);
        if (!isset($arr[0]['TITLE'])) {
            A23HTML::showH4有淡红底色("沒有設定 TITLE!");
            $sql = "SELECT* FROM FT000 WHERE APP='$app' AND PAGE='$page' ORDER BY SEQ ";
            A23X::showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多參數_多BTN_允許沒有BTN("FT000", $sql);
        } else {
            $title = $arr[0]['TITLE'];
            A23HTML::showH3("≡≡≡ " . $title . "≡≡≡");
        }
    }

    static public function isDevGroup() {
        global $arrEnv;
        $result = $arrEnv[V::$USER_GROUP] == 'DEV' ? true : false;
        return $result;
    }

    /**
     * 只顯示第N個TABLE, 基本上, SEQ=0不會調用
     */
    static public function showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多參數_多BTN_允許沒有BTN_BTNS用JSON字串_取FT000($app, $page, $seq) {
        $sql = "SELECT* FROM FT000 WHERE APP='$app' AND PAGE='$page' AND SEQ='$seq'";
        $arr = T100PROD::getArray($sql);

        // 2017-11-23 處理BPM, NEED TO CONNECT TO BPM DATABASE
        $isBPM = false;
        $BPM = '【BPM】';
        $sql = A23X::getParsedSQL($arr[0]['SQL']);
        if (strpos($sql, $BPM) !== false) {
            if (A23X::isDevGroup()) {
                echo "*** 【BPM】 is found *** ";
            }
            $sql = str_replace($BPM, ' ', $sql);
            $isBPM = true;
        } else {
            
        }





        $title = $arr[0]['TITLE'];
        $jsonStr = $arr[0]['BTNS']; // 2017-11-23, 基底的 a22.php 不必在數據庫 FT000裡定義, 需要在PHP直接實現.
//        var_dump($jsonStr);…
//        HTML::show有灰底色("<br>=== " . $title . " ===");
        if ($seq > 1) {
            echo "<br>";
        }
//        echo "<span class='label  label-default'>$title</span>";
//        echo "<span class='badge badge-default'>$title</span>";
         A23HTML::showH4有灰底色("$title");
        
        if (A23X::isDevGroup()) {
            A23HTML::show有灰底色("$sql<br>");
        }
        if ($isBPM) {

            $arr = BPMPROD::getArray($sql);
        } else {
            $arr = T100PROD::getArray($sql);
        }

        $btns = json_decode($jsonStr, true);
        echo A23X::getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數_多BTN_允許沒有BTN($arr, $btns);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_加立即查看BTN_多參數_多BTN_允許沒有BTN_BTNS用JSON字串($title, $sql, $jsonStr = null) {
        A23HTML::show有灰底色("<br>---" . $title . "---");
        $arr = T100PROD::getArray($sql);
        $btns = json_decode($jsonStr, true);
        echo A23X::getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數_多BTN_允許沒有BTN($arr, $btns);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_客制思科組產品BTN($sql) {
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位_客制思科組產品BTN($arr);
    }

    static public function showT100數據庫_基本款有流水号_自动栏位_客制視圖BTN($sql) {
        $arr = T100PROD::getArray($sql);
        echo A23X::getHtmlTable基本款有流水号_自动栏位_客制視圖BTN($arr);
    }

//    static public function showBPM數據庫_基本款有流水号_自动栏位($sql) {
//        $arr = BPMPROD::getArray($sql);
//        echo X::getHtmlTable基本款有流水号_自动栏位($arr);
//    }
//    
    static public function getHtmlTable基本款有流水号_自动栏位_客制思科組產品BTN($arr) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";


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
            $strTable .= "<th>立即查看</th></tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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
            $p1 = $val['PROD'];
            $x = "<a class='btn btn-default' href='a12_prod.php?prod=$p1'>單一產品主頁</a> ";
            $strTable .= "<td>$x</td>";


            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }
   static public function getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數_多BTN_允許沒有BTN($arr, $btns) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";


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
            if ($btns == null) {
                
            } else {
                $strTable .= "<th>立即查看</th></tr>";
            }
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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

//            2017-11-13 10:10
            $x = '';
//            var_dump($btns);
            if ($btns == null) {
                // 如果按鈕沒定義，就不顯示
//                HTML::showDEBUG();
            } else {
                // 如果按鈕有定義，就一個一個顯示
                foreach ($btns as $btn) {
                    // 沒有參數時
                    if (!isset($btn['para']) || $btn['para'] == null) {
                        $url = $btn['url']; // 2017-11-23 
                        // http://10.10.0.100/cust001/case/a21.php?app=case&page=a12_prod_list
                        // $url=a21

                        $display = $btn['display'];
                        $strPara = "";

                        $x .= "<a class='btn btn-default' href='a23.php?app=case&page=$url'>$display</a> ";

                        // 有參數時   
                    } else if (isset($btn['para'])) {
                        $para = $btn['para'];
                        $url = $btn['url'];
//                        HTML::showDEBUG("有設定時...url=$url");

                        $display = $btn['display'];
//                        $strPara = "&";
                          $strPara = "";
                        foreach ($para as $key3 => $val3) {
                            if ($key3 == 'batch') {
                                $batchUrlFixed = str_replace("%", "%25", $val[$val3]);
//                            str_replace("world","Shanghai","Hello world!");

                                $strPara .= "&$key3=" . $batchUrlFixed . "";
                            } else {
                                $strPara .= "&$key3=" . $val[$val3] . "";
                            }
                        }
                        $x .= "<a class='btn btn-default btn-sm' href='a23.php?app=case&page=$url$strPara'>$display</a> ";
//                        $x .= "<a class='' href='a23.php?app=case&page=$url$strPara'>$display</a> ";
                    } else {
                        $url = $btn['url'];
                        $display = $btn['display'];
                        $strPara = "";

                        $x .= "<a class='btn btn-default' href='$url$strPara'>$display</a> ";
                    }
                }
                $strTable .= "<td>$x</td>";
            }




            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數_多BTN_允許沒有BTN_有TITLE($title,$arr, $btns) {
        
        if (A23X::isDevGroup()){
            A23HTML::showH4有淡红底色("col cnt =".sizeof($arr) );
        }
        
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";


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
            if ($btns == null) {
                
            } else {
                $strTable .= "<th>立即查看</th></tr>";
            }
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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

//            2017-11-13 10:10
            $x = '';
//            var_dump($btns);
            if ($btns == null) {
                // 如果按鈕沒定義，就不顯示
//                HTML::showDEBUG();
            } else {
                // 如果按鈕有定義，就一個一個顯示
                foreach ($btns as $btn) {
                    // 沒有參數時
                    if (!isset($btn['para']) || $btn['para'] == null) {
                        $url = $btn['url']; // 2017-11-23 
                        // http://10.10.0.100/cust001/case/a21.php?app=case&page=a12_prod_list
                        // $url=a21

                        $display = $btn['display'];
                        $strPara = "";

                        $x .= "<a class='btn btn-default' href='a23.php?app=case&page=$url'>$display</a> ";

                        // 有參數時   
                    } else if (isset($btn['para'])) {
                        $para = $btn['para'];
                        $url = $btn['url'];
//                        HTML::showDEBUG("有設定時...url=$url");

                        $display = $btn['display'];
//                        $strPara = "&";
                          $strPara = "";
                        foreach ($para as $key3 => $val3) {
                            if ($key3 == 'batch') {
                                $batchUrlFixed = str_replace("%", "%25", $val[$val3]);
//                            str_replace("world","Shanghai","Hello world!");

                                $strPara .= "&$key3=" . $batchUrlFixed . "";
                            } else {
                                $strPara .= "&$key3=" . $val[$val3] . "";
                            }
                        }
                        $x .= "<a class='btn btn-default btn-sm' href='a23.php?app=case&page=$url$strPara'>$display</a> ";
//                        $x .= "<a class='' href='a23.php?app=case&page=$url$strPara'>$display</a> ";
                    } else {
                        $url = $btn['url'];
                        $display = $btn['display'];
                        $strPara = "";

                        $x .= "<a class='btn btn-default' href='$url$strPara'>$display</a> ";
                    }
                }
                $strTable .= "<td>$x</td>";
            }




            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數_多BTN($arr, $btns) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";


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
            $strTable .= "<th>立即查看</th></tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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

//            2017-11-13 10:10
            $x = '';
//            var_dump($btns);
            foreach ($btns as $btn) {
//                echo "???".$btn['para'];
                if (!isset($btn['para']) || $btn['para'] == null) {
                    $url = $btn['url'];
                    $display = $btn['display'];
                    $strPara = "";

                    $x .= "<a class='btn btn-default' href='$url$strPara'>$display</a> ";
                } else if (isset($btn['para'])) {
                    $para = $btn['para'];
                    $url = $btn['url'];
                    $display = $btn['display'];
                    $strPara = "?";
                    foreach ($para as $key3 => $val3) {
                        if ($key3 == 'batch') {
                            $batchUrlFixed = str_replace("%", "%25", $val[$val3]);
//                            str_replace("world","Shanghai","Hello world!");

                            $strPara .= "$key3=" . $batchUrlFixed . "&";
                        } else {
                            $strPara .= "$key3=" . $val[$val3] . "&";
                        }
                    }
                    $x .= "<a class='btn btn-default' href='$url$strPara'>$display</a> ";
                } else {
                    $url = $btn['url'];
                    $display = $btn['display'];
                    $strPara = "";

                    $x .= "<a class='btn btn-default' href='$url$strPara'>$display</a> ";
                }
            }



            $strTable .= "<td>$x</td>";


            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多參數($arr, $btn) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";


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
            $strTable .= "<th>立即查看</th></tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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
//            $p1= $val['PROD'];
            $para = $btn['para'];
            $url = $btn['url'];
            $display = $btn['display'];
            $strPara = "?";
            foreach ($para as $key3 => $val3) {
                $strPara .= "$key3=" . $val[$val3] . "&";
            }
//            $x ="<a class='btn btn-default' href='a12_prod.php?prod=$p1'>立即查看</a> ";
            $x = "<a class='btn btn-default' href='$url$strPara'>$display</a> ";
            $strTable .= "<td>$x</td>";


            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位__加立即查看BTN_多個($arr, $btns) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";


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
            $strTable .= "<th>立即查看</th></tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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
//            $p1= $val['PROD'];
            $p1 = $val[$btn['p1']];
            $url = $btn['url'];
            $display = $btn['display'];

//            $x ="<a class='btn btn-default' href='a12_prod.php?prod=$p1'>立即查看</a> ";
            $x = "<a class='btn btn-default' href='$url$p1'>$display</a> ";
            $strTable .= "<td>$x</td>";


            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位__加立即查看BTN($arr, $btn) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        var_dump($auto);
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";


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
            $strTable .= "<th>立即查看</th></tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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
//            $p1= $val['PROD'];
            $p1 = $val[$btn['p1']];
            $url = $btn['url'];
            $display = $btn['display'];

//            $x ="<a class='btn btn-default' href='a12_prod.php?prod=$p1'>立即查看</a> ";
            $x = "<a class='btn btn-default' href='$url$p1'>$display</a> ";
            $strTable .= "<td>$x</td>";


            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位_客制視圖BTN($arr) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
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
            $strTable .= "<th>立即查看</th></tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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
            $viewSeq = $val['VIEW_SEQ'];
            $x = "<a class='btn btn-default' href='show_view_seq.php?view_seq=$viewSeq'>立即查看</a> ";
            $strTable .= "<td>$x</td>";


            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getParsedSQL($sql) {
//        echo ""
        $data = A23X::getUrlData();
        $sqlParsed = preg_replace_callback('/\$(\w+)/', function($key) use ($data) {
            return isset($data[$key[1]]) ? $data[$key[1]] : $key[1];
        }, $sql);

        return $sqlParsed;
    }

    static public function getUrlData() {
        $urlQuery = $_SERVER['QUERY_STRING'];

        $urlQueryExplod = explode('&', $urlQuery);
        $data['err'] = "網址沒有給參數";
        foreach ($urlQueryExplod as $key => $val) {
            $oneSet = explode('=', $val);
            if (isset($oneSet[0]) && isset($oneSet[1])) {



                $p = $oneSet[0];
                $q = $oneSet[1];

                // 2017-11-23
                if ($p == 'batch') {
                    $q = str_replace("%25", "%", $q);
                }


                $data[$p] = $q;
                $data['err'] = '';
//        echo "<BR>['$p']=>$q";
                // 2017-11-23
            }
        }


        return $data;
    }

    static public function getAlignTd($alignX, $val2) {
        $strTable = '';
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
            case 'Y'://小數點一位, 2017-11-15 23:00,Mark
                $strTable .= "<td class='text_align_right'>";
                $strTable .= number_format($val2, 2);
                $strTable .= "</td>";
                break;
            case 'Z'://小數點一位, 2017-11-15 23:00,Mark
                $strTable .= "<td class='text_align_right'>";
                $strTable .= number_format($val2, 4);
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
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位_是否仍顯示原欄位_EXT($arr, $toShowField) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
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

        if ($toShowField) {
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
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
//                $alignX = substr($align, $align_index, 1);
//            echo $alignX."  $align<hr>";
                if (isset($auto[$key2][1])) {
                    $alignX = $auto[$key2][1];
                } else {
                    $alignX = 'L';
                }
                $strTable .= A23X::getAlignTd($alignX, $val2);
//                switch ($alignX) {
//                    case 'L':
//
//                        $strTable .= "<td>";
//                        $strTable .= $val2;
//                        $strTable .= "</td>";
//                        break;
//                    case 'N':
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2);
//                        $strTable .= "</td>";
//                        break;
//                    case 'X'://小數點一位, 2017-11-07,Mark, 一哥
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2, 1);
//                        $strTable .= "</td>";
//                        break;
//                    case 'Y'://小數點一位, 2017-11-15 23:00,Mark
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2, 2);
//                        $strTable .= "</td>";
//                        break;
//                    case 'Z'://小數點一位, 2017-11-15 23:00,Mark
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2, 4);
//                        $strTable .= "</td>";
//                        break;
//                    case 'C':
//
//                        $strTable .= "<td class='text_align_center'>";
//                        $strTable .= $val2;
//                        $strTable .= "</td>";
//                        break;
//                    case 'R':
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2);
//                        $strTable .= "</td>";
//                        break;
//                    default:
//                        $strTable .= "<td>";
//                        $strTable .= $val2;
//                        $strTable .= "</td>";
//                }
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位_是否仍顯示原欄位_EXT_客製星NY($arr, $toShowField) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
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

        if ($toShowField) {
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
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
//                $alignX = substr($align, $align_index, 1);
//            echo $alignX."  $align<hr>";
                if (isset($auto[$key2][1])) {
                    $alignX = $auto[$key2][1];
                } else {
                    $alignX = 'L';
                }
                if ($val2 == '*N') {
                    $val2 = "<span class='dev003'>N</span>";
                }
                if ($val2 == '*Y') {
                    $val2 = "<span class='dev004'>Y</span>";
                }

                $strTable .= A23X::getAlignTd($alignX, $val2);
//                switch ($alignX) {
//                    case 'L':
//
//                        $strTable .= "<td>";
//                        $strTable .= $val2;
//                        $strTable .= "</td>";
//                        break;
//                    case 'N':
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2);
//                        $strTable .= "</td>";
//                        break;
//                    case 'X'://小數點一位, 2017-11-07,Mark, 一哥
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2, 1);
//                        $strTable .= "</td>";
//                        break;
//                    case 'Y'://小數點一位, 2017-11-15 23:00,Mark
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2, 2);
//                        $strTable .= "</td>";
//                        break;
//                    case 'Z'://小數點一位, 2017-11-15 23:00,Mark
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2, 4);
//                        $strTable .= "</td>";
//                        break;
//                    case 'C':
//
//                        $strTable .= "<td class='text_align_center'>";
//                        $strTable .= $val2;
//                        $strTable .= "</td>";
//                        break;
//                    case 'R':
//                        $strTable .= "<td class='text_align_right'>";
//                        $strTable .= number_format($val2);
//                        $strTable .= "</td>";
//                        break;
//                    default:
//                        $strTable .= "<td>";
//                        $strTable .= $val2;
//                        $strTable .= "</td>";
//                }
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_自动栏位_是否仍顯示原欄位($arr, $toShowField) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
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

        if ($toShowField) {
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
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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
                    case 'Y'://小數點一位, 2017-11-15 23:00,Mark
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2, 2);
                        $strTable .= "</td>";
                        break;
                    case 'Z'://小數點一位, 2017-11-15 23:00,Mark
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2, 4);
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

    static public function getHtmlTable基本款有流水号_自动栏位($arr) {
        $isDebug = true;
        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
//            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1);

//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
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
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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

}

class B {

    static public function showLinkBtn查询结果($vSeq) {
        echo " <a href='qry.php?seq=$vSeq' class='btn btn-default'>返回重新查询</a> ";
    }

    static public function showLinkBtn生成Excel调试($seq) {
        echo "<a href='excel.php?seq=$seq' class='btn btn-info'>导出Excel（调试用，最多100笔）</a> ";
    }

    static public function showLinkBtn生成Excel正式($seq) {
        echo "<a href='excel.php?max=3000&seq=$seq' class='btn btn-primary'>正式Excel（3000笔）</a> ";
    }

    static public function getLinkBtn生成Excel调试($seq) {
        return "<a href='excel.php?seq=$seq' class='btn btn-info'>调</a> ";
    }

    static public function getLinkBtn页面查看($seq) {
        return "<a href='qry.php?seq=$seq' class='btn btn-default'>页</a> ";
    }

    static public function getLinkBtn生成Excel正式($seq) {
        return "<a href='excel.php?max=6000&seq=$seq' class='btn btn-primary'>正</a> ";
    }

    static public function showLinkBtn回到调试SQL语句() {
        echo "<a href='qry_builder.php' class='btn btn-danger'>回到调试SQL语句</a> ";
    }

    static public function showLinkBtn回到调试SQL语句_有SEQ($seq) {
        echo "<a href='qry_builder.php?seq=$seq' class='btn btn-danger'>回到调试SQL语句有SEQ</a> ";
    }

    static public function showLinkBtn查看自动栏位显示() {
        echo "<a href='qry_auto.php' class='btn btn-info'>查看自动栏位显示</a> ";
    }

    static public function showLinkBtn返回自主开发报表() {
        echo "<a href='qry_list.php' class='btn btn-danger'>返回自主开发报表</a> ";
    }

    static public function showLinkBtn取消session值() {
        echo "<a href='qry_builder_unset.php' class='btn btn-info'>取消session值</a> ";
    }

    static public function showLinkBtn自主开发报表() {
        echo "<a href='qry_list.php' class='btn btn-info'>自主开发报表</a> ";
    }

    static public function showLinkBtn回到显示结果() {
        echo "<a href='qry_builder_result.php' class='btn btn-primary'>回到显示结果</a>";
    }

}

class S {// SESSIO

    static public $SEQ沒有的預設值 = "sdsadhsj123878asfdZXXd&&**";
    static public $VIEQ_SEQ沒有的預設值 = "sdsadhsj12387456dsfgsdfgh8asfdZXXd&&**";
    static public $SQL要保存 = "SQL要保存";
    static public $SEQ要保存 = "SEQ要保存";
    static public $Passcode要保存 = "Passcode";
    static public $ERR查不到視圖名稱 = "查不到視圖名稱";
    static public $Title要保存 = "Title";

//    if (isset($_SESSION[S::$Passcode要保存])) {
//        $vPasscode = S::getSession(S::$Passcode要保存);
//    } else {
//        $vPasscode = "123456789";
//    }

    static public function getSession有預設值($sessionName, $default) {

        if (isset($_SESSION[$sessionName])) {
            return S::getSession($sessionName);
        } else {
            return $default;
        }
//        return $_SESSION[$sessionName];
    }

    static public function setSession($sessionName, $var) {
//     $_SESSION["sessionV0"] = $Passcode;
        $_SESSION[$sessionName] = $var;
    }

    static public function getSession($sessionName) {
//     $_SESSION["sessionV0"] = $Passcode;
        return $_SESSION[$sessionName];
    }

}

class GEN {

    static public function getOutputFile($currentPage, $outputFile) {
        $f = explode("/", $currentPage);
        $str = "";
        for ($i = 0; $i < sizeof($f) - 1; $i++) {
            $str .= $f[$i] . "/";
        }
        $str .= "gen/";
//echo $f[sizeof($f)-1];
        $str .= $outputFile;
        return $str;
    }

}

class DEBUG {

    static public $show_sql = 0;

    static public function initVarWithDefaultVal($var, $value) {
        if (isset($_GET[$var])) {
            return $_GET[$var];
        }
        return $value;
    }

    static public function showH4有灰底色($text) {
        echo "<h4><span class='dev001'>$text</span></h4>";
    }

    public static function start() {
//        $show_sql 
        DEBUG::$show_sql = DEBUG::initVarWithDefaultVal('show_sql', 0); //  
    }

    public static function showSQL($sqlToShow) {
        if (DEBUG::$show_sql > 0) {
            DEBUG::showH4有灰底色($sqlToShow);
        }
    }

}

class 查询页面 {

//    <form action="qry001_batch.php" method="post">
// <p>批号: <input type="text" name="name"  size="52" /><input type="submit" value="按批次查报工"/>范例:10303-000017%20170831%0443</p>
//
//</form>
    public static function showForm($postUrl, $textLabel, $textSize, $btnText, $sample) {
        echo "<form action='$postUrl.php' method='post'>"
        . "<p>$textLabel: <input type='text' name='p1'  size='$textSize' /><input type='submit' value='$btnText'/>&nbsp;&nbsp;范例:&nbsp;$sample</p>"
        . "</form>";
    }

    public static function showFormV2($postUrl, $textLabel, $textSize, $btnText, $sample) {
        echo "<form action='$postUrl' method='post'><input  type='hidden' type='text' name='p2' value='0' "
        . "<p>$textLabel: <input type='text' name='p1'  size='$textSize' /><input type='submit' value='$btnText'/>&nbsp;&nbsp;范例:&nbsp;$sample</p>"
        . "</form>";
    }

    public static function showFormV3($postUrl, $textLabel, $val, $textSize, $btnText, $sample) {
        echo "<form action='$postUrl' method='post'>"
        . "<p> <input  type='hidden' type='text' name='p1' value='$val'  size='$textSize' /><input class='btn btn-info' type='submit' value='$btnText'/></p>"
        . "</form>";
    }

    // v4 , del anything you don't need on v3
    public static function showFormV4($postUrl, $val, $btnText) {
        echo "<form action='$postUrl' method='post'>"
        . "<p> <input  type='hidden' type='text' name='p1' value='$val'   /><input class='btn btn-info' type='submit' value='$btnText'/></p>"
        . "</form>";
    }

    // v4 , del anything you don't need on v3
    public static function showFormV5($postUrl, $valP1, $valP2, $btnText) {
        echo "<form action='$postUrl' method='post'>"
        . " <input  type='hidden' type='text' name='p1' value='$valP1'   />"
        . "<input  type='hidden' type='text' name='p2' value='$valP2'   />"
        . "<input class='btn btn-info' type='submit' value='$btnText'/>"
        . "</form>";
    }

}

class 每日产出 {

    public static function showBtns() {
        A23HTML::showBtn("day_dept_stn_out.php?show_type=0&out_date=" . DEV::getToday(), " btn-primary", "【1】报工单");
        A23HTML::showBtn("day_dept_stn_batch.php?show_type=0&out_date=" . DEV::getToday(), " btn-primary", "【2】批号");
        A23HTML::showBtn("day_dept_stn_wo.php?show_type=0&out_date=" . DEV::getToday(), "  btn-primary", "【3】工单");
        A23HTML::showBtn("day_dept_stn_prod.php?show_type=0&out_date=" . DEV::getToday(), " btn-primary", "【4】产品");
        echo '&nbsp';
        A23HTML::showBtn("day_dept_stn_out.php?show_type=1&out_date=" . DEV::getToday(), "btn-success ", "【1】报工单+");
        A23HTML::showBtn("day_dept_stn_batch.php?show_type=1&out_date=" . DEV::getToday(), "btn-success ", "【2】批号+");
        A23HTML::showBtn("day_dept_stn_wo.php?show_type=1&out_date=" . DEV::getToday(), "btn-success ", "【3】工单+");
        A23HTML::showBtn("day_dept_stn_prod.php?show_type=1&out_date=" . DEV::getToday(), "btn-success ", "【4】产品+");
    }

}

class 工单不良 {

    public static function showBtns() {
//        echo HTML::getColorBtn(1, HTML::get全制程查询Url(), TITLE::$全制程查询);
        A23HTML::showBtn(A23HTML::get全制程查询Url(), " btn-primary", TITLE::$全制程查询);

        A23HTML::showBtn("qry001_wo_rej.php?show_type=0 ", " btn-info", "（1）基础信息");
        A23HTML::showBtn("qry001_wo_rej.php?show_type=1 ", " btn-info", "（2）显示单据");
        A23HTML::showBtn("qry001_wo_rej.php?show_type=2 ", "  btn-info", "（3）工站不良说明");
    }

    public static function showBtnsV2($batch) {
        echo "<table><tr>";
        echo "<td>";

        A23HTML::showBtn(A23HTML::get全制程查询Url(), " btn-primary", TITLE::$全制程查询);
        echo "</td><td>";
        查询页面::showFormV5('qry001_wo_rej.php', $batch, 0, '（1）基础信息');
        echo "</td><td>";
        查询页面::showFormV5('qry001_wo_rej.php', $batch, 1, '（2）显示单据');
        echo "</td><td>";
        查询页面::showFormV5('qry001_wo_rej.php', $batch, 2, '（3）工站不良说明');
        echo "</td></tr></table>";
    }

}

class 批次不良 {

    public static function showBtns() {
        A23HTML::showBtn(A23HTML::get全制程查询Url(), " btn-primary", TITLE::$全制程查询);
        A23HTML::showBtn("qry001_batch_rej.php?show_type=0 ", " btn-info", "（1）基础信息");
        A23HTML::showBtn("qry001_batch_rej.php?show_type=1 ", " btn-info", "（2）显示单据");
        A23HTML::showBtn("qry001_batch_rej.php?show_type=2 ", "  btn-info", "（3）工站不良说明");
    }

    public static function showBtnsV2($batch) {
        echo "<table><tr>";
        echo "<td>";

        A23HTML::showBtn(A23HTML::get全制程查询Url(), " btn-primary", TITLE::$全制程查询);
        echo "</td><td>";
        查询页面::showFormV5('qry001_batch_rej.php', $batch, 0, '（1）基础信息');
        echo "</td><td>";
        查询页面::showFormV5('qry001_batch_rej.php', $batch, 1, '（2）显示单据');
        echo "</td><td>";
        查询页面::showFormV5('qry001_batch_rej.php', $batch, 2, '（3）工站不良说明');
        echo "</td></tr></table>";
    }

}

class 图片开关 {

    public static function showBtns() {
        A23HTML::showBtn("helpdesk002.php?show_type=0 ", " btn-info", "（1）只显示文字");
        A23HTML::showBtn("helpdesk002.php?show_type=1 ", " btn-info", "（2）显示文字和图片");
    }

}

class 不合格品处理单 {

    public static function showBtns() {
        A23HTML::showBtn(A23HTML::get不合格品处理单161Url(), " btn-primary", "【161】SF161不合格品处理单");
        A23HTML::showBtn(A23HTML::get不合格品处理单162Url(), "btn-success ", "【162】SF162数量差异调整--不走签核");
    }

}

class H {

    public static function get批次Link($batch, $url) {
//            网址上的%要用%25替代，否则无法识别！
//        return "case_batch_out.php?batch=10301-000037%2520170924%250001";
        $batchFixed = str_replace("%", "%25", $batch);
//        $url = HTML::get批次Url($batchFixed);
        $urlFixed = "$url?batch=$batchFixed";
        return "<a href='$urlFixed'>$batch</a>";
//        return "case_batch_out.php?batch=$batch";
    }

    public static function get资源锁定工单Link($wo, $url) {
//            网址上的%要用%25替代，否则无法识别！
//        return "case_batch_out.php?batch=10301-000037%2520170924%250001";
//        $batchFixed = str_replace("%", "%25", $batch);
//        $url = HTML::get批次Url($batchFixed);
        $urlFixed = "$url?wo=$wo";
        return "<a href='$urlFixed'>$wo</a>";
//        return "case_batch_out.php?batch=$batch";
    }

    public static function get资源锁定部門Link($dept, $url) {
//            网址上的%要用%25替代，否则无法识别！
//        return "case_batch_out.php?batch=10301-000037%2520170924%250001";
//        $batchFixed = str_replace("%", "%25", $batch);
//        $url = HTML::get批次Url($batchFixed);
        $urlFixed = "$url?dept=$dept";
        return "<a href='$urlFixed'>$dept</a>";
//        return "case_batch_out.php?batch=$batch";
    }

    public static function get资源锁定部門超時Link($dept, $hrs, $url) {
//            网址上的%要用%25替代，否则无法识别！
//        return "case_batch_out.php?batch=10301-000037%2520170924%250001";
//        $batchFixed = str_replace("%", "%25", $batch);
//        $url = HTML::get批次Url($batchFixed);
        $urlFixed = "$url?dept=$dept";
        return "<a href='$urlFixed'>$hrs</a>";
//        return "case_batch_out.php?batch=$batch";
    }

    public static function get资源锁定部門超時RedLink($dept, $hrs, $url) {
//            网址上的%要用%25替代，否则无法识别！
//        return "case_batch_out.php?batch=10301-000037%2520170924%250001";
//        $batchFixed = str_replace("%", "%25", $batch);
//        $url = HTML::get批次Url($batchFixed);
        $urlFixed = "$url?dept=$dept";
        return "<a class='btn btn-danger' href='$urlFixed'>$hrs</a>";
//        return "case_batch_out.php?batch=$batch";
    }

    static public function getTableTrTh欄位($fieldName) {
        $fields = explode(",", $fieldName);
//        var_dump($fields);
//        $strTable .= "<tr><th colspan='4' style='background-color:white;border-style:none'><th colspan='5'>2017</th><th colspan='7'>2018</th></tr>";
//        $strTable .= "<tr><th></th><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th></tr>";


        $str = "<tr>";

        foreach ($fields as $val) {

            $str .= "<th>";
            $str .= $val;
            $str .= "</th>";
        }
        $str .= "</tr>";
        return $str;
    }

    static public function td短式日期时间($text) {
        // 2017-12-23 12:34:56
        // 01234567890123456789
        // 12/23 12：34
        $str = substr($text, 5, 2) . '/' . substr($text, 8, 2) . ' ' . substr($text, 11, 2) . ':' . substr($text, 14, 2);

        return "<td>$str</td>";
    }

    static public function td($str) {
        // 2017-12-23 12:34:56
        // 01234567890123456789
        // 12/23 12：34
//        $str=substr($text,5,2).'/'.substr($text,8,2).' '.substr($text,11,2).':'.substr($text,14,2);

        return "<td>$str</td>";
    }

    static public function td空() {
        return "<td></td>";
    }

    static public function td隐藏几格($x) {
        return "<td  colspan = '$x' style='border-style:none'></td>";
//        return "<td  colspan = '$x' style='background-color:white;border-style:none'></td>";
    }

    static public function td居中($str) {
        return "<td class='text_align_center'>$str</td>";
    }

    static public function td工单Link($str) {
        // 2017-12-23 12:34:56
        // 01234567890123456789
        // 12/23 12：34
//        $str=substr($text,5,2).'/'.substr($text,8,2).' '.substr($text,11,2).':'.substr($text,14,2);
        $link = "<a href='case_asft301.php?wo=$str'>$str</a>";
        return "<td>$link</td>";
    }

    public static function get基础数据Link客制显示Text($url, $wo, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get基础数据Url($url, $wo);
        return "<a href='$url'>$text</a>";
    }

    static public function td工单委外加工數Link($wo, $qty) {
        $qtyV2 = number_format($qty);
        $url = "case_apmt501.php?wo=$wo";
        $link = "<a href='$url'>$qtyV2</a>";
        $str = "<td class='text_align_right'>$link</td>";
        return $str;
    }

    static public function td工单委外完成數Link($wo, $qty) {
        $qtyV2 = number_format($qty);
        $url = "case_apmt571.php?wo=$wo";
        $link = "<a href='$url'>$qtyV2</a>";
        $str = "<td class='text_align_right'>$link</td>";
        return $str;
    }

    static public function td外协Link($str) {
        // 2017-12-23 12:34:56
        // 01234567890123456789
        // 12/23 12：34
//        $str=substr($text,5,2).'/'.substr($text,8,2).' '.substr($text,11,2).':'.substr($text,14,2);
        $link = "<a href='case_outsource_list.php?outsource=$str'>$str</a>";
        return "<td>$link</td>";
    }

    static public function tdText($text) {
        return "$text<br>";
    }

    static public function th($text) {
        return "<th>$text</th>";
    }

    static public function thText($text) {
        return "$text<br>";
    }

//    static public function td数字($text) {
//        return "<td class='text_align_right'>" . number_format($text) . "</td>";
//    }
    static public function td数字($text) {
        return "<td class='text_align_right'>" . number_format($text) . "</td>";
    }

    static public function td数字零不显示($text) {
        if ($text == 0) {
            return "<td class='text_align_right'></td>";
        }
        return "<td class='text_align_right'>" . number_format($text) . "</td>";
    }

    static public function td数字Text($text) {
        return number_format($text) . "<br>";
    }

}

class DEV {

    public static function getToday() {
        date_default_timezone_set('Asia/Shanghai');
        $today = date("Y-m-d");
//        echo $today;
        return $today;
    }

//echo date("Y-m-d",strtotime("yesterday"));
    public static function getYesterday() {
        date_default_timezone_set('Asia/Shanghai');
//        $today = date("Y-m-d");
//        echo $today;

        return date("Y-m-d", strtotime("yesterday"));
//        return $today;
    }

    public static function get现在时间() {
        date_default_timezone_set('Asia/Shanghai');
        $today = date("Y-m-d H:i:s");
//        echo $today;
        return $today;
    }

    public static function show查询时间() {
        echo "<hr>查询时间：";
        echo DEV::get现在时间();
//        return $today;
    }

//    echo "查询时间：";
//echo DEV::get现在时间();
// echo $showtime=date("Y-m-d H:i:s");
}

class VISIT {

    public static function getInfo() {

        $client_ip = $_SERVER['REMOTE_ADDR'];
        $client_agent = $_SERVER['HTTP_USER_AGENT'];
        $server_ip = $_SERVER['SERVER_NAME'];
        $server_page = $_SERVER['PHP_SELF'];
        $server_query = $_SERVER["QUERY_STRING"];
        // LOG_VISIT
        // C_IP, C_AGENT, S_IP, S_PAGE, S_QRY
        //         200             100   100
        $info['client_ip'] = $client_ip;
        $info['client_agent'] = $client_agent;
        $info['server_ip'] = $server_ip;
        $info['server_page'] = $server_page;
        $info['server_query'] = $server_query;
        return $info;
    }

}

class SAMPLE {

    public static $批次号百分比二十五 = '10301-000037%2520170924%250001';
    public static $库位 = 'WH104';
    public static $产品 = '30204-000452';
    public static $工号 = 'W1108002';
    public static $角色 = 'YX0001';
    public static $年月 = '2017-09';
    public static $客户 = 'S000036'; //美蓓亚
    public static $全製程開發狀態統計表_日期 = '2017-09-30';
    public static $全製程開發狀態統計表_项次 = '12';

}

class MSG {

    public static $查無資料 = '<BR>（查無資料，無記錄顯示，表格整個不顯示。） ';

}

class TITLE {

    public static $T100_asft301_工單工藝維護作業_工艺路线 = '（asft301）工單工藝維護作業_工艺路线 ';
    public static $T100_asft301_工單工藝維護作業 = '（asft301）工單工藝維護作業 ';
    public static $工單狀態統計表 = '工單狀態統計表';
    public static $工單有當站報廢列表 = '工單有當站報廢列表';
    public static $有報工記錄的所有產品 = '有報工記錄的所有產品';
    public static $生管人员关注的產品 = '生管人员关注的產品';
    public static $生管人員列表含HOT = '生管人員列表,HOT产品（样式）';
    public static $按工单查报工列表 = '（asft335）按工单查报工列表';
    public static $按工单查报工列表只限转出和转入 = '报工列表,只限转出和转入';
    public static $工單有待轉入列表 = '工單有待轉入列表';
    public static $全製程開發SOP = '全製程開發SOP';
    public static $DEV工作命令 = 'DEV工作命令';
    public static $全製程開發狀態統計表_按年月_项次 = '全製程開發狀態統計表_按年月_项次';
    public static $T100_asft340_工单完工入库作业 = '（asft340）工单完工入库作业 ';
    public static $工单入库明细 = '工单入库明细';
    public static $部门程式 = '部门程式（样式）';
    public static $部门列表 = '部门列表';
    public static $asft336不合格品处理单 = '（asft336）不合格品处理单';
    public static $asft336不合格品处理单_100SF161 = '（asft336）不合格品处理单-SF161不合格品处理单';
    public static $asft336不合格品处理单_100SF162 = '（asft336）不合格品处理单-SF162数量差异调整--不走签核';
    public static $客户订单未满足统计表 = '客户订单未满足统计表';
    public static $客户订单未满足列表 = '客户订单未满足列表';
    public static $客户订单查询 = '（axmt500）客户订单查询';
    public static $客户订单查询v2 = '（axmt500）客户订单查询v2';
    public static $客户订单每月笔数 = '客户订单每月笔数';
    public static $每月客户订单笔数 = '每月客户订单笔数';
    public static $客户每月订单笔数 = '客户每月订单笔数';
    public static $客户每月订单列表 = '客户每月订单列表';
    public static $按批次查报工 = '按批次查报工';
    public static $全制程查询 = '全制程查询';
    public static $库存明细查询作业_按库位产品 = '库存明细查询作业,按库位和产品';
    public static $富钛库位列表 = '富钛库位列表';
    public static $按库位查产品总数 = '按库位查产品总数';
    public static $BPM流程 = 'BPM流程总览';
    public static $单个BPM详细备注 = '单个BPM详细备注';
    public static $BPM流程审批 = 'BPM流程审批';
    public static $VISIT_LOG = 'VISIT_LOG';
    public static $FIELD = 'FIELD';
    public static $用户数据设置作业_按角色 = '（azzi800）用户数据设置作业_按角色';
    public static $用户数据设置作业_按工号 = '（azzi800）用户数据设置作业_按工号';
    public static $角色列表 = '角色列表';
    public static $角色权限 = '角色权限';
    public static $工单状态 = '工单状态';
    public static $客户有自己的订购单号统计表 = '客户有自己的订购单号统计表';
    public static $客户有自己的订购单号列表 = '客户有自己的订购单号列表';
    public static $对账单 = 'T100使用客户对账单（axmr007）';
    public static $asfr007看报工明细报表 = '（asfr007）看报工明细报表';
    public static $BPM流程审批至个人 = 'BPM流程审批至个人';
    public static $BPM流程审批个人需要签核的统计表 = 'BPM流程审批个人需要签核的统计表';
    public static $BPM流程审批按流程至关卡 = 'BPM流程审批按流程至关卡';
    public static $BPM流程审批按流程至个人 = 'BPM流程审批按流程至个人';
    public static $BPM个人待办事项 = 'BPM个人待办事项';
    public static $RFQ001 = 'RFQ001';
    public static $RFQ001Action = 'RFQ001Action';
    public static $RFQ001Helper = 'RFQ001Helper';
    public static $中国移动互联网专线 = '中国移动互联网专线';
    public static $页面设计原则 = '页面设计原则';
    public static $NOTE001返工SOP = '返工SOP';
    public static $如何在T100NOTE002查看产品净重 = '如何在T100查看产品净重';
    public static $NOTE003查看产品BOM表 = '查看产品BOM表';
    public static $NOTE004全制程查询对照 = '全制程查询对照';
    public static $客户每月订单笔数统计表 = '客户每月订单笔数统计表';
//    按產品查工單
    public static $按產品查工單 = '按產品查工單';
    public static $每月工單狀態統計表 = '每月工單狀態統計表';
    public static $产品净重列表 = '产品净重列表';
    public static $BOM查询 = 'BOM查询';
    public static $BPM001 = 'BPM001';
    public static $NOTE005全制程状况处置 = '全制程状况处置';
    public static $DATE_171011 = '2017-10-11';
    public static $DATE_171018 = '2017-10-18资材外协';
    public static $DATE_171106 = '2017-11-06资材（aqct290）仓库检验申请单维护作业---夏俊虎';
    public static $DATE_171027 = '2017-10-27全制程资材作业困难点';
    public static $DATE_171020 = '2017-10-20资源锁定';
    public static $DATE_171010 = '2017-10-10';
    public static $富钛产品全制程可追踪系统定义 = '富钛产品全制程可追踪系统定义';
    public static $不合格品统计分析 = '不合格品统计分析';
    public static $按工单查工序的不良品 = '按工单查工序的不良品';
    public static $按工序查看不良品汇总 = '按工序查看不良品汇总';
    public static $所有产品的工序的不良种类 = '所有产品的工序的不良种类';
    public static $按产品查看工序的不良种类 = '按产品查看工序的不良种类';
    public static $锁定资源_设备_刀具 = '锁定资源_设备_刀具';
    public static $T100数据表查询 = 'T100数据表查询';
    public static $T100报工资源解锁作业 = 'T100报工资源解锁作业';
    public static $锁定资源_人员 = '锁定资源_人员';
    public static $锁定资源_人员_以批号查看 = '锁定资源_人员_以批号查看';
    public static $锁定资源_设备刀具人员_以批号查看 = '以批号查看锁定资源';
    public static $锁定资源_设备刀具人员_以批号查看_显示 = '显示以批号查看锁定资源：设备刀具人员';
    public static $锁定资源_人员_以批号查看_显示 = '锁定资源_人员_以批号查看_显示';
    public static $锁定资源_人员_以工单查看 = '锁定资源_人员_以工单查看';
    public static $锁定资源_以工单查看 = '以工单查看锁定资源';
    public static $锁定资源_设备刀具人员_以工单查看_显示 = '显示以工单查看锁定资源：设备刀具人员';
    public static $锁定资源_以部门查看 = '以部门查看锁定资源';
    public static $锁定资源_小時數查看 = '以小時數查看锁定资源';
    public static $锁定资源組合_小時數查看 = '文本顯示锁定资源超過小時';
    public static $各部门每日批号产出 = '（2）各部门每工序每日批号产出';
    public static $各部门每日工单产出 = '（3）各部门每工序每日工单产出';
    public static $各部门每日产品产出 = '（4）各部门每工序每日产品产出';
    public static $各部门每日报工 = '（1）各部门每工序每日报工';
    public static $各部门关键用户 = '各部门关键用户';
    public static $批次产生节点及流转流程 = '批次产生节点及流转流程';
    public static $note007 = 'note007';
    public static $在制数异常工单截图和文字说明 = '在制数异常工单截图和文字说明';
    public static $报工单维护作业截图 = '报工单维护作业截图';
    public static $bom = 'BOM';
    public static $HELPDESK = 'HELPDESK';
    public static $按工单查看不合格品处理单信息 = '按工单查看不合格品处理单信息';
    public static $按批号查看不合格品处理单信息 = '按批号查看不合格品处理单信息';
    public static $H001PDA报工异常处置 = 'PDA报工异常处置';
    public static $H002PDA资源解锁 = 'H002PDA资源解锁';
    public static $H003PDA资源解锁 = 'H003PDA资源解锁';
    public static $显示各部门所有锁定设备和刀具 = '显示各部门所有锁定设备和刀具';
    public static $显示各部门所有锁定设备和刀具文本 = '显示各部门所有锁定设备和刀具（文本）';
    public static $工单工艺中委外发料作业 = '（asft315）工单工艺中委外发料作业';
    public static $单据别设置作业 = '（aooi199）单据别设置作业';
    public static $委外采购收货作业 = '（apmt521）委外采购收货作业';
    public static $apmt571委外采购入库作业 = '（apmt571）委外采购入库作业';
    public static $委外厂商 = '委外厂商';
    public static $委外厂商统计表 = '委外厂商统计表';
    public static $apmt501委外采购单维护作业 = '（apmt501）委外采购单维护作业	';
    public static $委外四部曲 = '委外四部曲';
    public static $委外四部曲_按产品 = '委外四部曲按产品';
    public static $FT_OUTOURCE_RPT001 = 'FT-仓库-在制品库存统计汇总表-1-依厂内及外协别统计';
    public static $期初工单工艺路线 = '期初工单工艺路线';
    public static $ppt = 'PowerPoint';
    public static $CASE_PROD_OUT = 'CASE_PROD_OUT';
    public static $产品按工单项次工序良品转出统计表 = '产品按工单项次工序良品转出的统计表';
    public static $产品按工单项次工序良品转出统计表_含批次 = '产品按工单项次工序良品转出的统计表，含批次';
    public static $工单按批号项次工序良品转出统计表 = '工单按批号项次工序良品转出的统计表';
    public static $工单项次工序检查 = '工单项次工序检查';
    public static $产品按工单项次工序WIP统计表 = '产品按工单项次工序WIP统计表';
    public static $单一部门WIP = '单一部门WIP';
    public static $工单工序的工时机时 = '工单工序的工时机时';
    public static $单一工序WIP = '单一工序WIP';
    public static $部门工序名称 = '按部门查询WIP，良品转出及不良报废';
    public static $单一工序良品转出 = '单一工序良品转出';
    public static $单一部门良品转出 = '单一部门良品转出';
    public static $单一部门指定日期良品转出 = '单一部门指定日期良品转出';
    public static $部门工序查相关信息 = '部门工序查相关信息';
    public static $全制程术语 = '全制程术语';
    public static $快照20171030 = '快照20171030 ';
    public static $qry_list = '自主开发查询';
    public static $rpt_list = '自主开发报表';
    public static $login = 'login';
    public static $在制数不吻合列表 = '在制数不吻合列表';
    public static $工单工序的项次不是十的倍数 = '工单工序的项次不是十的倍数';
    public static $单据类别列表 = '单据类别列表';
    public static $工单状态等统计表 = '工单状态等统计表';
    public static $已發出返工工單按RUNCARD统计表 = '已發出 REWORK WO 返工工單 按 RUN CARD统计表';
//    已發出 REWORK WO 返工工單 按 RUN CARD统计表
//    产品的工单数量统计表
    public static $产品的工单数量统计表 = '产品的工单数量统计表';
    public static $asft338工单工艺返工转出作业统计表 = '（asft338）工单工艺返工转出作业统计表';
    public static $apmt501委外采购单维护作业_单据类别统计表 = '（apmt501）委外采购单维护作业_单据类别统计表';
    public static $WIP相关 = 'WIP相关';
    public static $PDA统计表 = 'PDA统计表';
    public static $验算asft301报废数 = '验算asft301报废数';
    public static $报工单所有数据 = '报工单所有数据';
    public static $物料分类统计表 = '物料分类统计表';
    public static $备注_基础数据同T100的_asft301工单工艺维护作业 = '备注：基础数据同T100的（asft301）工单工艺维护作业。';

//
}

class ENV {

    public static $URL_PRODNAME_FIND = '<a class="btn btn-default" href="case_prodname_find.php">產品名稱</a>';

}

class REGEX {

//$result = array_merge($array1, $array2);

    public static function getEnglishNumberAndChineseWords($str) {

        $arr1 = REGEX::getEngWordArr($str);
        $arr2 = REGEX::getChineseWordsArr($str);
        $arr = array_merge($arr1, $arr2);
//        $arrSort=asort($arr);
        return $arr;
    }

    public static function getChineseWords($str) {
        $result = $str;
        $nonChineseArr = REGEX::getEngWordArr($str);
        foreach ($nonChineseArr as $k1 => $v1) {
            $result = str_replace($v1, "", $result);
        }
        return $result;
    }

//    DF180上壳A（灰色）
    public static function getChineseWordsArr($str) {
        $result = $str;
        //取得英文和數字的ARR
        $nonChineseArr = REGEX::getEngWordArr($str);

        //將前述的轉為空, 只留下中文
        foreach ($nonChineseArr as $k1 => $v1) {
            $result = str_replace($v1, "", $result);
        }
//        return $result;
        //發現 （ ）等不必要為中文KEYWORD, 因此要再清理，視同可斷開中文

        $arr2 = explode("（", $result);
        foreach ($arr2 as $k2 => $v2) {
            $arr3[] = $v2;
        }
//        var_dump($arr3);

        foreach ($arr3 as $k3 => $v3) {
            $arr4 = explode("）", $v3);
            foreach ($arr4 as $k4 => $v4) {
                $arr5[] = $v4;
            }
        }
        //又發現, 半形的>-()等不必要為中文KEYWORD, 因此要再清理，視同可斷開中文, 寫一個function
        $arrxxx = REGEX::getCleanedArr($arr5, ">");
        $arrxxx = REGEX::getCleanedArr($arrxxx, "+");
        $arrxxx = REGEX::getCleanedArr($arrxxx, "-");

        $arrxxx = REGEX::getCleanedArr($arrxxx, ")");
        $arrxxx = REGEX::getCleanedArr($arrxxx, "(");

        //還發現有些 空的 
//        var_dump($arrxxx);
//        echo "<hr>";
//         foreach ($arrxxx as $kxxx => $vxxx) {
//            if (strlen($vxxx)==0){
//                
//            }else{
//                $arryyy[]=$vxxx;
//            }
//        }

        return $arrxxx;
    }

    public static function getCleanedArr($arr7, $toCleanUp) {
        $arr9 = array();
//        if(sizeof($arr7==0)){
//            return $arr9;
//        }
        foreach ($arr7 as $k7 => $v7) {
            $arr8 = explode($toCleanUp, $v7);
            foreach ($arr8 as $k8 => $v8) {
                if (strlen($v8) > 0) {
                    $arr9[] = $v8;
                }
            }
        }
        return $arr9;
    }

    public static function getNumArr($str) {
        $result = [];
//         $str = 'DF180底座999';
        $matches = '';
        preg_match_all('!\d+!', $str, $matches);
//print_r($matches);
//echo "<hr>";
        foreach ($matches as $k1 => $v1) {
//    echo $k1 . " =>";
//    var_dump($v1);
//    echo "<hr>";
            foreach ($v1 as $k2 => $v2) {
//        echo $k2 . " =>";
//        var_dump($v2);
//        echo ($v2);
                $result[] = $v2;

//        echo "<hr>";
            }
            return $result;
        }
        preg_match_all('!\d+!', $str, $matches);
//print_r($matches);
//echo "<hr>";
        foreach ($matches as $k1 => $v1) {
//    echo $k1 . " =>";
//    var_dump($v1);
//    echo "<hr>";
            foreach ($v1 as $k2 => $v2) {
//        echo $k2 . " =>";
//        var_dump($v2);
                echo ($v2);

                echo "<hr>";
            }
        }
    }

//    https://stackoverflow.com/questions/14942255/php-regular-expression-to-match-words……
//    public static function getEngWordArrByArr($arr) {
//
//        foreach ($arr as $k1 => $v1) {
//            $arr2 = REGEX::getNumArr($v1);
//            foreach ($arr2 as $k2 => $v2) {
//                $arr3[] = $v2;
//            }
//        }
//        return $arr3;
//    }

    public static function getEngWordArr($str) {
        $result = Array();
//         $str = 'DF180底座999';
        $matches = '';
        preg_match_all('/(\w+)/', $str, $matches);
//print_r($matches);
//echo "<hr>";
        foreach ($matches as $k1 => $v1) {
//    echo $k1 . " =>";
//    var_dump($v1);
//    echo "<hr>";
            foreach ($v1 as $k2 => $v2) {
//        echo $k2 . " =>";
//        var_dump($v2);
//        echo ($v2);
                $result[] = $v2;

//        echo "<hr>";
            }
            return $result;
        }
//        preg_match_all('!\d+!', $str, $matches);
////print_r($matches);
////echo "<hr>";
//        foreach ($matches as $k1 => $v1) {
////    echo $k1 . " =>";
////    var_dump($v1);
////    echo "<hr>";
//            foreach ($v1 as $k2 => $v2) {
////        echo $k2 . " =>";
////        var_dump($v2);
//                echo ($v2);
//
//                echo "<hr>";
//            }
//        }
    }

}

class LAYOUT {

    public static function showType01($str01, $str02, $str03) {
        $str = "<table><tr><td>$str01</td><td>&nbsp;</td><td>$str02</td></tr></table>";
        $str .= "<br>";
        $str .= $str03;
        echo $str;
    }

    public static function showIndex($tr1, $tr2, $tr3, $tr4, $tr5, $tr6, $tr7, $tr8, $tr9, $tr10, $tr11, $tr12, $tr13) {
        $str = "<table class='gridtable'>"
                . "<tr>$tr1</tr>"
                . "<tr>$tr2</tr>"
                . "<tr>$tr3</tr>"
                . "<tr>$tr4</tr>"
                . "<tr>$tr5</tr>"
                . "<tr>$tr6</tr>"
                . "<tr>$tr7</tr>"
                . "<tr>$tr8</tr>"
                . "<tr>$tr9</tr>"
                . "<tr>$tr10</tr>"
                . "<tr>$tr11</tr>"
                . "<tr>$tr12</tr>"
                . "<tr>$tr13</tr>"
                . "</table>";

        echo $str;
    }

}

class A23HTML {

    public static function getHiddenTdWithColspan($num) {
        return " <th colspan='$num' style='background-color:white;border-style:none'></th>";
    }

    public static function table開始($class) {
        echo "<table class='$class'>";
    }

    public static function table結束() {
        echo "</table>";
    }

    public static function tr開始() {
        echo "<tr>";
    }

    public static function tr結束() {
        echo "</tr>";
    }

    public static function td開始() {
        echo "<td>";
    }

    public static function tdText($text, $class) {
        echo "<td class='$class'>$text</td>";
    }

    public static function getTdWithClass($text, $class) {
        return "<td class='$class'>$text</td>";
    }

    public static function getTd($text) {
        return "<td >$text</td>";
    }

    public static function td結束() {
        echo "</td>";
    }

    public static function showBtn($url, $btnClass, $displayText) {
        $btnClassV2 = " class='btn $btnClass '";

        echo "<span style='margin-left:4px'><a $btnClassV2 href='$url'>$displayText</a><span>";
    }

    public static function getBtn($url, $btnClass, $displayText) {
        $btnClassV2 = " class='btn $btnClass '";

        return "<a $btnClassV2 href='$url'>$displayText</a>";
    }

    public static function getColorBtn($color, $url, $displayText) {
        switch ($color) {
            case $color == 1:
                $btnClass = "btn-primary";
                break;
            case $color == 2:
                $btnClass = "btn-danger";
                break;
            case $color == 3:
                $btnClass = "btn-success";
                break;
            case $color == 4:
                $btnClass = "btn-warning";
                break;
            case $color == 5:
                $btnClass = "btn-info";
                break;
            default:
                $btnClass = "btn-default";
        }
        $btnClassV2 = " class='btn $btnClass zzzz'";

        return "<a $btnClassV2 href='$url'>$displayText</a>";
    }

    public static function get產品Link($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
//        $url = "case_prod.php?PROD=$prod";
        $url = A23HTML::get產品Url($prod);

        return "<a href='$url'>$prod</a>";
    }

    public static function get產品V2工单有带RcardLink($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
//        $url = "case_prod.php?PROD=$prod";
        $url = A23HTML::get產品V2工单有带RcardUrl($prod);

        return "<a href='$url'>$prod</a>";
    }

    public static function get產品Url($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_prod.php?prod=$prod";
//        return "<a href='$url'>$prod</a>";
    }

    public static function get產品V2工单有带RcardUrl($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_prod_v2.php?prod=$prod";
//        return "<a href='$url'>$prod</a>";
    }

    public static function get按工单查报工列表Link($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get按工单查报工列表Url($wo);
        return "<a href='$url'>$wo</a>";
    }

    public static function get按产品查良品转出Link($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = "adv_prod_out_batch_rcard.php?prod=$prod";
        return "<a href='$url'>...按产品查良品转出</a>";
    }

    public static function getAsft301Link($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
//        $url = "case_asft301.php?wo=$wo";
        $url = A23HTML::getAsft301Url($wo);
        return "<a href='$url'>$wo</a>";
    }

    public static function getAsft301RcardLink($wo, $rcard) {
//        $btnClassV2 = " class='btn $btnClass '";
//        $url = "case_asft301.php?wo=$wo";
        $url = A23HTML::getAsft301RcardUrl($wo, $rcard);
        return "<a href='$url'>$rcard</a>";
    }

    public static function getAsft301Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_asft301.php?wo=$wo";
//        return $url;
    }

    public static function getAsft301RcardUrl($wo, $rcard) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "raw_asft301_rcard.php?wo=$wo&rcard=$rcard";
//        return $url;
    }

    public static function getAsft301SeqUrl($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_asft301_seq.php?wo=$wo";
//        return $url;
    }

    public static function getFT_OUTOURCE_RPT001Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "FT_OUTOURCE_RPT001.php";
//        return $url;
    }

    public static function get部门工序查相关信息Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "adv_dept_stn.php";
//        return $url;
    }

    public static function get全制程术语Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "adv_tlkp_term.php";
//        return $url;
    }

    public static function getQry_ListUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "qry_only_list.php"; //只在页面查询不准备生成Excel
//        return $url;
    }

    public static function getRpt_ListUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "qry_list.php"; //先在页面查询，再生成Excel
//        return $url;
    }

//http://10.10.0.100/cust001/login/
    public static function LOGINUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "http://10.10.0.100/cust001/login/"; //先在页面查询，再生成Excel
//        return $url;
    }

    public static function get快照20171030Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "adv_20171030.php";
//        return $url;
    }

    public static function get库存明细查询作业_按库位和产品Url($wh, $prod) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_ainq120.php?wh=$wh&prod=$prod";
//        return $url;
    }

    public static function get富钛库位列表Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_wh_active.php";
//        return $url;
    }

    public static function get按库位查产品总数Url($wh) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_wh_prod.php?wh=$wh";
//        return $url;
    }

    public static function getAsft340Link($wh) {
//        $btnClassV2 = " class='btn $btnClass '";
//        $url = "case_asft301.php?wo=$wo";
        $url = A23HTML::getAsft340Url($wh);
        return "<a href='$url'>$wh</a>";
    }

    public static function getAsft340Url($wh) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_asft340.php?wh=$wh";
//        return $url;
    }

    public static function get工单入库明细Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_wo_wh.php?wo=$wo";
    }

    public static function get工单工艺中委外发料作业Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_asft315.php?wo=$wo";
    }

//$委外采购收货作业
    public static function get委外采购收货作业Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_apmt521.php?wo=$wo";
    }

    public static function get委外采购入库作业Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_apmt571.php?wo=$wo";
    }

    public static function get委外厂商Url($outsource) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_outsource_list.php?outsource=$outsource";
    }

    public static function getApmt501委外采购单维护作业Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_apmt501.php?wo=$wo";
    }

    public static function getDATE_171106_ACTIONUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "date_171106_action.php";
    }

    public static function getFiledUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_tlkp_field.php";
    }

    public static function getBPM流程审批Url($bpm) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_bpm_list.php?bpm=$bpm";
    }

    public static function get中国移动互联网专线Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "china_mobile.php";
    }

    public static function getT100数据表查询Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "t100_dic.php";
    }

//T100报工资源解锁作业
    public static function getT100报工资源解锁作业Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "t100_lock.php";
    }

//单据别设置作业

    public static function get单据别设置作业Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "t100_aooi199.php";
    }

    public static function get期初工单工艺路线Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_1023.php";
    }

    public static function getPowerPointUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "it_ppt.php";
    }

    public static function get页面设计原则Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "adv_dev.php";
    }

//在制数异常工单截图和文字说明
    public static function get工单工序的工时机时Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "per_wo_stn_day_hrs.php?wo=$wo";
    }

//    工单工序的工时机时

    public static function get在制数异常工单截图和文字说明Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "checking005_doc.php";
    }

    public static function getNote001返工SOPUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "note001.php";
    }

//各部门每日批号产出

    public static function get各部门每日批号产出Url($out_date) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "day_dept_stn_batch.php?out_date=$out_date";
    }

    public static function get各部门每日工单产出Url($out_date) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "day_dept_stn_wo.php?out_date=$out_date";
    }

    public static function get各部门每日产品产出Url($out_date) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "day_dept_stn_prod.php?out_date=$out_date";
    }

    public static function get报工单维护作业截图Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "adv_out_info_doc.php";
    }

//    报工单所有数据
    public static function get报工单所有数据Url($out) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "adv_out_info.php?out=$out";
    }

    public static function get各部门每日报工单产出Url($out_date) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "day_dept_stn_out.php?out_date=$out_date";
    }

    public static function get全制程查询Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "qry001.php";
    }

    public static function getNOTE005全制程状况处置Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "note005.php";
    }

    public static function getNote004全制程查询对照Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "note004.php";
    }

    public static function getNote002产品净重Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "note002.php";
    }

    public static function getDATE_171011Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "date_171011.php";
    }

    public static function getDATE_171018Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "date_171018.php";
    }

    public static function getDATE_171020Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "date_171020.php";
    }

    public static function get锁定资源_设备_刀具Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_resource.php";
    }

//锁定资源_人员

    public static function get锁定资源_人员Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_p.php";
    }

//锁定资源_人员_以批号查看
    public static function get锁定资源_设备刀具人员_以批号查看Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_batch.php";
    }

//    锁定资源_人员_以工单查看
    public static function get锁定资源_以工单查看Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_wo.php";
    }

//    锁定资源_以部门查看
    public static function get锁定资源_以部门查看Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_dept.php";
    }

    public static function get锁定资源_以時數查看Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_hrs.php";
    }

    public static function get锁定资源組合_小時數查看Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_combo.php";
    }

//工单工序的项次不是十的倍数
    public static function get工单工序的项次不是十的倍数Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "adv_wo_op_not_std.php";
    }

//    各部门关键用户
    public static function get各部门关键用户Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "case_dept_keyperson.php";
    }

//批次产生节点及流转流程
    public static function getNOTE006批次产生节点及流转流程户Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "note006.php";
    }

    public static function getHelpdeskUrl($help_date) {
//       $btnClassV2 = " class='btn $btnClass '";
        return " ft_helpdesk.php?help_date=$help_date ";
    }

    public static function getHelpdesk001Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "helpdesk001.php";
    }

//    H002PDA资源解锁
    public static function getH002PDA资源解锁Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "helpdesk002.php";
    }

//显示个部门所有锁定设备和刀具

    public static function get显示个部门所有锁定设备和刀具Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_dept_show_all.php";
    }

    public static function get显示个部门所有锁定设备和刀具文本Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_dept_show_all_text.php";
    }

    public static function get在制数不吻合列表Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "adv_checking001.php";
    }

//CASE_PROD_OUT
    public static function getADV_PROD_OUTUrl($prod) {
//       $btnClassV2 = " class='btn $btnClass '";
        return "adv_prod_out.php?prod=$prod";
    }

    public static function get单一部门WIPUrl($dept) {
//       $btnClassV2 = " class='btn $btnClass '";
        return "adv_dept_prod_wo_wip_rpt.php?dept=$dept";
    }

    public static function get产品按工单项次工序WIP统计表Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "adv_stn_prod_wip_rpt.php";
    }

    public static function get产品按工单项次工序良品转出统计表_含批次Url($prod) {
//       $btnClassV2 = " class='btn $btnClass '";
        return "adv_prod_out_batch.php?prod=$prod";
    }

    public static function getADV_WO_OUTUrl($wo) {
//       $btnClassV2 = " class='btn $btnClass '";
        return "adv_wo_out.php?wo=$wo";
    }

    public static function getH003PDA资源解锁Url() {
//       $btnClassV2 = " class='btn $btnClass '";
        return "helpdesk003.php";
    }

//    锁定资源_人员_以批号查看_显示
    public static function get锁定资源_人员_以批号查看_显示Url($batch) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_resource_p_batch_show.php?batch=$batch";
    }

    public static function getDATE_171010Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "date_171010.php";
    }

    public static function get富钛产品全制程可追踪系统定义Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_def.php";
    }

    public static function getNote003产品BOM表Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "note003.php";
    }

    public static function getBOM查询Url($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_bom.php?prod=$prod";
    }

    public static function get查看产品净重列表Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_prod_weight_list.php";
    }

    public static function getVISIT_LOGUrl() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_log_visit.php";
    }

    public static function get用户数据设置作业_按角色Url($role) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_azzi800_by_role.php?role=$role";
    }

    public static function get用户数据设置作业_按工号Url($empe) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_azzi800_by_empe.php?empe=$empe";
    }

    public static function get角色列表Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_role.php";
    }

    public static function get角色权限Url($role) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_role_prog.php?role=$role";
    }

    public static function get工单状态Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "env_wo_status.php";
    }

    public static function getBPM流程Url() {
        return "case_bpm_v2.php";
    }

//    public static function getBPM流程Link($text) {
//        $url = HTML::getBPM流程Url()
////        return "<a href='$url'>$text</a>";
//        return "xxx";
//        
//    }

    public static function getBPM流程Link($text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getBPM流程Url($text);
        return "<a href='$url'>$text</a>";
    }

    public static function get不合格品处理单Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_asft336_v2_ext.php";
    }

    public static function get不合格品处理单161Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_asft336_v2_ext.php?doc_type=SF161";
    }

    public static function get不合格品处理单162Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_asft336_v2_ext.php?doc_type=SF162";
    }

//不合格品统计分析
    public static function get不合格品统计分析Url($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_reject.php?wo=$wo";
    }

//    按工序查看不良品汇总
    public static function get按工序查看不良品汇总Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_reject_stn.php";
    }

    public static function get所有产品的工序的不良种类Url($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_reject_prod.php?prod=$prod";
    }

    //    按产品查看工序的不良种类
    public static function get按产品查看工序的不良种类Url() {
//        $btnClassV2 = " class='btn $btnClass '";
        return "case_reject_prod_sum.php";
    }

    public static function get工单入库明细Link($wo, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get工单入库明细Url($wo);
        return "<a href='$url'>$text</a>";
    }

    public static function get按產品查工單Link($prod, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get按產品查工單Url($prod);
        return "<a href='$url'>$text</a>";
    }

    public static function get工單狀態統計表Url() {
        return "case_wo_status.php";
    }

    public static function get每月工單狀態統計表Url() {
        return "case_wo_status_monthly.php";
    }

    public static function get按產品查工單Url($prod) {
        return "case_prod.php?prod=$prod";
    }

    public static function getADV_CHECKing002Url($wo) {
        return "adv_checking002.php?wo=$wo";
    }

    public static function get客户订单未满足统计表Url() {
        return "case_so_fulfillment_by_cust.php";
    }

    public static function get客户订单未满足列表Url() {
        return "case_so_fulfillment.php";
    }

    public static function get客户订单查询Url($so) {
//        return "case_axmt500.php?so=100XM041-1708000062";
        return "case_axmt500.php?so=$so";
    }

    public static function get客户订单查询V2Url($so, $cust, $so_yyyy_mm) {
//        return "case_axmt500.php?so=100XM041-1708000062";
        return "case_axmt500_v2.php?so=$so&cust=$cust&so_yyyy_mm=$so_yyyy_mm";
    }

    public static function get客户订单查询V2Link($so, $cust, $so_yyyy_mm, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get客户订单查询V2Url($so, $cust, $so_yyyy_mm);
        return "<a href='$url'>$text</a>";
    }

    public static function get基础数据Url($url, $wo) {
//        return "case_axmt500.php?so=100XM041-1708000062";
        return "$url?wo=$wo";
    }

//    工艺路线
    public static function get工艺路线Url($url, $wo) {
//        return "case_axmt500.php?so=100XM041-1708000062";
        return "$url?wo=$wo";
    }

    public static function getADV工单按批号项次工序良品转出的统计表Url($wo) {
//        return "case_axmt500.php?so=100XM041-1708000062";
        $url = 'adv_wo_out.php';
        return "$url?wo=$wo";
    }

    public static function getADV产品按工单项次工序良品转出的统计表Url($prod) {
//        return "case_axmt500.php?so=100XM041-1708000062";
        $url = 'adv_prod_out.php';
        return "$url?prod=$prod";
    }

    public static function get基础数据Link客制显示Text($url, $wo, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get基础数据Url($url, $wo);
        return "<a href='$url'>$text</a>";
    }

    public static function get基础数据Link($url, $wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get基础数据Url($url, $wo);
        return "<a href='$url'>...基础数据</a>";
    }

    public static function get工艺路线Link($url, $wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get工艺路线Url($url, $wo);
        return "<a href='$url'>...工艺路线</a>";
    }

    public static function get工艺路线工单按批号项次工序良品转出的统计表Link($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getADV_WO_OUTUrl($wo);
        return "<a href='$url'>...工艺路线及良品转出统计表</a>";
    }

    public static function get工艺路线工单按批号项次工序良品转出的统计表_实施RCARD_Link($wo, $rcard) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = "adv_wo_out_rcard.php?wo=$wo&rcard=$rcard";
        return "<a href='$url'>...工艺路线及良品转出统计表</a>";
    }

    public static function getADV_CHECKing002Link($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getADV_CHECKing002Url($wo);
        return "<a href='$url'>$wo</a>";
    }

    public static function get期初工单工艺路线Link($url, $wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get工艺路线Url($url, $wo);
        return "<a href='$url'>$wo</a>";
    }

    public static function getADV工单按批号项次工序良品转出的统计表Link($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getADV工单按批号项次工序良品转出的统计表Url($wo);
        return "<a href='$url'>$wo</a>";
    }

    public static function getADV产品按工单项次工序良品转出的统计表Link($prod) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getADV产品按工单项次工序良品转出的统计表Url($prod);
        return "<a href='$url'>$prod</a>";
    }

    public static function get工单Url($wo) {
//        return "case_axmt500.php?so=100XM041-1708000062";
        $url = 'case_asft301.php';
        return "$url?wo=$wo";
    }

    public static function get工单Link($wo) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get工单Url($wo);
        return "<a href='$url'>$wo</a>";
    }

//     public static function get外协厂商统计表Link() {
////        $btnClassV2 = " class='btn $btnClass '";
//        $url = HTML::get工单Url($wo);
//        return "<a href='$url'>$wo</a>";
//    } 



    public static function get客户订单查询Link($so) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get客户订单查询Url($so);
        return "<a href='$url'>$so</a>";
    }

    public static function get每月客户订单笔数Url($so_yyyy_mm) {
        return "case_so_month_cust_cnt.php?so_yyyy_mm=$so_yyyy_mm";
    }

    public static function get客户每月订单笔数Url($cust) {
        return "case_so_cust_month_cnt.php?cust=$cust";
    }

    public static function get客户每月订单笔数统计表Url() {
        return "case_so_cust_monthly.php";
    }

    public static function get客户每月订单列表Url($cust, $so_yyyy_mm) {
        return "case_so_cust_month_list.php?cust=$cust&so_yyyy_mm=$so_yyyy_mm";
    }

    public static function get客户有自己的订购单号统计表Url() {
        return "case_custpo.php";
    }

    public static function get客户有自己的订购单号列表Url($cust) {
        return "case_custpo_list.php?cust=$cust";
    }

    public static function get对账单Url() {
        return "case_1004_001.php";
    }

    public static function get客户有自己的订购单号列表Link($cust, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get客户有自己的订购单号列表Url($cust);
        return "<a href='$url'>$text</a>";
    }

    public static function get客户有自己的订购单号统计表Link($text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get客户有自己的订购单号统计表Url();
        return "<a href='$url'>$text</a>";
    }

    public static function get客户每月订单列表Link($cust, $so_yyyy_mm, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get客户每月订单列表Url($cust, $so_yyyy_mm);
        return "<a href='$url'>$text</a>";
    }

    public static function getBPM流程审批Link($bpm, $cnt) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getBPM流程审批Url($bpm);
        return "<a href='$url'>$cnt</a>";
    }

    public static function getBPM流程审批按流程至关卡Url($bpm) {
        return "case_bpm_by_gate.php?bpm=$bpm";
    }

    public static function getBPM流程审批按流程至关卡Link($bpm, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getBPM流程审批按流程至关卡Url($bpm);
        return "<a class='btn btn-default' href='$url'>$text</a>";
    }

    public static function getBPM流程审批按流程至个人Url($bpm) {
        return "case_bpm_by_empe.php?bpm=$bpm";
    }

    public static function getBPM流程审批按流程至个人Link($bpm, $text) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getBPM流程审批按流程至个人Url($bpm);
        return "<a class='btn btn-default' href='$url'>$text</a>";
    }

    public static function getBPM补充说明Url($bpm) {
        return "case_bpm_remarks_more.php?bpm_short=$bpm";
    }

    public static function getBPM补充说明Link($bpm) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getBPM补充说明Url($bpm);
        $text = '...';
        return "<a href='$url'>$text</a>";
    }

    public static function getBPM补充说明LinkBtn($bpm) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::getBPM补充说明Url($bpm);
        $text = '...';
        return "<a class='btn btn-default' href='$url'>$text</a>";
    }

    public static function getBPM原本说明LinkBtn($bpm) {

//        $btnClassV2 = " class='btn $btnClass '";
        $server = 'http://10.10.1.14/bpmstatus/';
        $bpm2 = strtolower($bpm);
        $bpm2 = substr($bpm2, 0, 3);
        $url = "$server$bpm2.html";
//        $text='...';
//        return "<a class='btn btn-primary' href='$url'>$bpm</a>";
        return "<a class='btn btn-default' href='$url'>$bpm</a>";
    }

    public static function get按库位查产品数量Link($wh) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get按库位查产品总数Url($wh);
        return "<a href='$url'>$wh</a>";
    }

    public static function get库位明细查询_按库位和产品Link($wh, $prod, $qty) {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get库存明细查询作业_按库位和产品Url($wh, $prod);
        return "<a href='$url?wh=$wh&prod=$prod'>$qty</a>";
    }

    public static function get富钛库位列表Link() {
//        $btnClassV2 = " class='btn $btnClass '";
        $url = A23HTML::get富钛库位列表Url();
        return "<a href='$url'>库位</a>";
    }

    public static function get客户订单每月笔数Link($month) {
        return "case_so_info.php?so_yyyy_mm='$month'";
    }

    public static function get工單有當站報廢列表Url() {
        return "case_wo_with_rej_list.php";
    }

    public static function get有報工記錄的所有產品Url() {
        return "case_prodname.php";
    }

    public static function getasfr007看报工明细报表Url() {
        return "case_asfr007.php";
    }

    public static function get生管產品Url($pc) {
        return "case_pc_prod.php?pc=$pc";
    }

    public static function get生管人員列表含HOTUrl() {
        return "case_pc.php";
    }

    public static function get按工单查报工列表Url($wo) {
        return "case_wo_out.php?wo=$wo";
    }

    public static function get按工单查报工列表只限转出和转入Url($wo) {
        return "case_wo_out_v2_moveout_movein.php?wo=$wo";
    }

    public static function get工單有待轉入列表Url() {
        return "case_wo_waiting_movein.php";
    }

    public static function get部门程式Url() {
        return "case_dept_prog.php";
    }

    public static function get批次Url($batch) {
//            网址上的%要用%25替代，否则无法识别！
//        return "case_batch_out.php?batch=10301-000037%2520170924%250001";
        return "case_batch_out.php?batch=$batch";
    }

    public static function get批次Link($batch) {
//            网址上的%要用%25替代，否则无法识别！
//        return "case_batch_out.php?batch=10301-000037%2520170924%250001";
        $batchFixed = str_replace("%", "%25", $batch);
        $url = A23HTML::get批次Url($batchFixed);
        return "<a href='$url'>$batch</a>";
//        return "case_batch_out.php?batch=$batch";
    }

    public static function get部门列表Url() {
        return "case_dept.php";
    }

    public static function get全製程開發SOPUrl() {
        return "case_dev_sop.php";
    }

    public static function getRFQ001Url() {
        return "rfq_001.php";
    }

    public static function getRFQ001ActionUrl() {
        return "rfq_001_action.php";
    }

    public static function getRFQ001HelperUrl() {
        return "rfq_001_helper.php";
    }

    public static function get全製程開發狀態統計表Url($task_date) {
        return "case_dev_tasks.php?task_date=$task_date";
    }

//        public static function get全製程開發狀態統計表Url() {
//        return "case_dev_tasks.php";
//    }


    public static function get全製程開發狀態統計表_按年月_项次Url($task_date, $task_date_item) {
        return "case_dev_tasks_item.php?task_date=$task_date&task_date_item=$task_date_item";
    }

    public static function getBPM流程审批至个人Url($empe) {
        return "case_bpm_list_empe.php?empe=$empe";
    }

    public static function getBPM个人待办事项Url($empe) {
        return "case_bpm_empe_todo.php?empe=$empe";
    }

    public static function getBPM个人待办事项Link($empe, $txt) {
        $url = A23HTML::getBPM个人待办事项Url($empe);
        return "<a href='$url'>$txt</a>";
    }

    public static function getBPM流程审批个人需要签核的统计表Url() {
        return "case_bpm_empe.php";
    }

    public static function getBPM001Url() {
        return "bpm001.php";
    }

    public static function getBPM流程审批个人需要签核的统计表Link($txt) {
        $url = A23HTML::getBPM流程审批个人需要签核的统计表Url();
        return "<a href='$url'>$txt</a>";
    }

    public static function getBPM流程审批至个人Link($empe, $txt) {
        $url = A23HTML::getBPM流程审批至个人Url($empe);
        return "<a href='$url'>$txt</a>";
    }

    public static function getBPM流程审批至流程及个人Url($empe) {
        return "case_bpm_list_empe.php?empe=$empe";
    }

    public static function getBPM流程审批至流程及个人Link($bpm, $empe, $txt) {
        $url = A23HTML::getBPM流程审批至流程及个人Url($empe);
        return "<a href='$url'>$txt</a>";
    }

    public static function showSpan($text, $class) {
        echo "<span class='$class'>$text</span>";
    }

    public static function show($text) {
        echo "$text";
    }

    public static function showImg($src, $width) {
        echo " <img src='$src' width='$width' alt='$src' />";
    }

    public static function showImg有开关($show_type, $src, $width) {
        if ($show_type > 0) {
            echo " <img src='$src' width='$width' alt='$src' />"
            . "<hr>";
        }
    }

    public static function showImgV2($src, $width) {
        echo " <div class='image_carousel'><img src='$src' width='$width' alt='$src' /></div>";
    }

    static public function showH1($text) {
        echo "<h1>$text</h1>";
    }

    static public function showPPTLink($dir1, $dir2, $file, $text) {
        echo "<a class='btn btn-default' href='$dir1/$dir2/$file'>$text</a>&nbsp;";
    }

    static public function showH2($text) {
        echo "<h2>$text</h2>";
    }

    static public function showH3($text) {
        echo "<h3>$text</h3>";
    }

    static public function showH4($text) {
        echo "<h4>$text</h4>";
    }

    static public function showH4产品($text) {
//        echo "<h4>$text</h4>";

        A23HTML::showH4("<a href='case_prodname.php'>產品</a>︰$text");
    }

    static public function getProd產品名稱Link() {
//        echo "<h4>$text</h4>";

        return "<a href='case_prodname.php'>產品名稱</a>";
    }

    static public function getA04Prod產品名稱Link() {
//        echo "<h4>$text</h4>";

        return "<a href='a04_prod_search.php'>產品名稱</a>";
    }

//HTML::showH4有灰底色("工单：" . HTML::get工单Link($wo));
    static public function showH4工单和Link有灰底色($wo) {
//        echo "<h4><span class='dev001'>$text</span></h4>";
        A23HTML::showH4有灰底色("工单：" . A23HTML::get工单Link($wo));
    }

    static public function getPost变量x或预设($x, $default) {
////           htmlspecialchars($_POST["p1"])
//        if (isset($_POST["p1"])) {
//            return htmlspecialchars($_POST["p1"]);
//        }
//        return $default;
        $wo = htmlspecialchars($_POST[$x]);
        if ($wo == '') {
            $wo = $default;
        }

        return $wo;
    }

    static public function showH4工单和Link有灰底色_asft301特例无连接($wo) {
        echo "<h4><span class='dev001'>工单：$wo</span></h4>";
//        HTML::showH4有灰底色("工单：" . HTML::get工单Link($wo));
//        HTML::showH4有灰底色("工单：" . HTML::get工单Link($wo));
    }

    static public function showH4外协厂商和Link有灰底色($wo) {
//        echo "<h4><span class='dev001'>$text</span></h4>";
        A23HTML::showH4有灰底色("外协厂商：" . A23HTML::get工单Link($wo));
    }

    static public function showH4有灰底色($text) {
        echo "<h4><span class='dev001'>$text</span></h4>";
    }

    static public function showH4有淡红底色($text) {
        echo "<h4><span class='dev004'>$text</span></h4>";
    }

    static public function showDEBUG($text) {
        echo "<h4><span class='dev004'>$text</span></h4>";
    }

//    static public function show有灰底色($text) {
//        echo "<span class='dev001'>$text</span>";
//    }

    static public function show有淡黄底色($text) {
        echo "<span class='dev003'>$text</span>";
    }

    static public function show在制数公式() {
        echo "<br><span class='dev003'>asft301【在制数】=【良品转入】-【良品转出】-【當站報廢】-【待轉入數】-【待完工數】-【待轉出數】-【分割转出】-【待PQC數】</span>";
    }

//HTML::show有淡黄底色("【在制数】=【良品转入】-【良品转出】-【當站報廢】-【待轉入數】-【待完工數】-【待轉出數】-【分割转出】-【待PQC數】");
    static public function show有灰底色($text) {
        echo "<span class='dev001'>$text</span>";
    }

    static public function show备注_基础数据同T100的_asft301工单工艺维护作业() {
        echo "<BR><span class='dev001'>" . TITLE::$备注_基础数据同T100的_asft301工单工艺维护作业 . "</span>";
        A23HTML::show在制数公式();
    }

//HTML::show有灰底色($备注_基础数据同T100的_asft301工单工艺维护作业);

    static public function get有淡黄底色($text) {
        return "<span class='dev003'>$text</span>";
    }

    static public function show有淡红底色($text) {
        echo "<span class='dev004'>$text</span>";
    }

    static public function get有淡红底色($text) {
        return "<span class='dev004'>$text</span>";
    }

    static public function showH5($text) {
        echo "<h5>$text</h5>";
    }

    static public function showDbTable($text) {
//        echo "<h4>$text</h4>";
        A23HTML::showH4("DB TABLE：" . $text);
    }

    static public function startPage() {
//        $show_sql = MARK::initVarWithDefaultVal('show_sql', 0); //
        session_start(); //2017-11-08, start to implement 
        require 'A23_HTML_START.php';
    }

    static public function endPage() {
        DEV::show查询时间();
//        if ($show_sql == 'y' || $show_sql == 'Y') {
//            HTML::showH4有灰底色($sqlToShow);
//        }

        require 'A23_HTML_END.php';
    }

}

class MARK {

    static public function initVar($var) {
        if (isset($_GET[$var])) {
            return $_GET[$var];
        }
        return "";
    }

    static public function initVarWithDefaultVal($var, $value) {
        if (isset($_GET[$var])) {
            return $_GET[$var];
        }
        return $value;
    }

    static public function getPost变量p1或预设($default) {
////           htmlspecialchars($_POST["p1"])
//        if (isset($_POST["p1"])) {
//            return htmlspecialchars($_POST["p1"]);
//        }
//        return $default;
        $wo = htmlspecialchars($_POST["p1"]);
        if ($wo == '') {
            $wo = $default;
        }

        return $wo;
    }

    static public function getPost变量p2或预设($default) {
////           htmlspecialchars($_POST["p1"])
//        if (isset($_POST["p1"])) {
//            return htmlspecialchars($_POST["p1"]);
//        }
//        return $default;
        $wo = htmlspecialchars($_POST["p2"]);
        if ($wo == '') {
            $wo = $default;
        }

        return $wo;
    }

    static public function showT100HtmlTable($sql) {
        $arr = T100PROD::getArray($sql);
        echo MARK::getHtmlTable($arr);
    }

    static public function getT100HtmlTableBySql($sql) {
        $arr = T100PROD::getArray($sql);
        return MARK::getHtmlTable($arr);
    }

    static public function showT100HtmlTableCust001($sql, $fieldName, $debug) {
        $arr = T100PROD::getArray($sql);
        echo MARK::getHtmlTableCust001($arr, $fieldName, $debug);
    }

    static public function show($str) {
        echo $str;
    }

    static public function getT100HtmlTableCust001BySql($sql, $fieldName, $debug) {
        $arr = T100PROD::getArray($sql);
        return MARK::getHtmlTableCust001($arr, $fieldName, $debug);
    }

    static public function showHtmlTable($arr) {
        echo MARK::getHtmlTable($arr);
    }

    static public function getHtmlTable按產品查工單($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";
//         $strTable .= "";
        $strTable .= "<th></th><th>產品</th><th>工單號</th>";
//        $strTable .= "<th>產品</th>";
//        $strTable .= "<th>" . ENV::$URL_PRODNAME_FIND . "</th>";
//        foreach ($arr[0] as $key => $val) {
//
//            $strTable .= "<th>";
//            $strTable .= $key;
//            $strTable .= "</th>";
//        }
        $strTable .= "</tr>";

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= "<th>$rec</th>";
            $strTable .= "<td>";
            $strTable .= $val['PROD'];
            $strTable .= "</td>";
            $strTable .= "<td>";
//            $strTable .= "..." . $val['WO'];
            $wo = $val['WO'];
//            $strTable .= HTML::getBtn("case_asft301.php?WO=$WO", 'btn-primary', $WO);
//            $strTable .= HTML::getBtn(HTML::getAsft301Url($wo), 'btn-primary', $wo);
            $strTable .= A23HTML::getAsft301Link($wo);
            $strTable .= "</td>";


//            $strTable .= "<td>";
//            $strTable .= $val['PROD'];
//            $strTable .= "</td>";
//            $strTable .= "<td>";
//            $strTable .= $val['PROD_NAME'];
//            $strTable .= "</td>";
//          
//            foreach ($val as $key2 => $val2) {
//                $strTable .= "<td>";
//                $strTable .= "...".$val2;
//                $strTable .= "</td>";
//            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable按產品查工單old($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";
        $strTable .= "<th></th><th>工單號</th>";
        $strTable .= "<th>產品</th>";
        $strTable .= "<th>" . ENV::$URL_PRODNAME_FIND . "</th>";

//        foreach ($arr[0] as $key => $val) {
//
//            $strTable .= "<th>";
//            $strTable .= $key;
//            $strTable .= "</th>";
//        }
        $strTable .= "</tr>";

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= "<th>$rec</th>";

            $strTable .= "<td>";
//            $strTable .= "..." . $val['WO'];
            $wo = $val['WO'];
//            $strTable .= HTML::getBtn("case_asft301.php?WO=$WO", 'btn-primary', $WO);
            $strTable .= A23HTML::getBtn(A23HTML::getAsft301Url($wo), 'btn-primary', $wo);
            $strTable .= "</td>";


            $strTable .= "<td>";
            $strTable .= $val['PROD'];
            $strTable .= "</td>";
            $strTable .= "<td>";
            $strTable .= $val['PROD_NAME'];
            $strTable .= "</td>";


//          
//            foreach ($val as $key2 => $val2) {
//                $strTable .= "<td>";
//                $strTable .= "...".$val2;
//                $strTable .= "</td>";
//            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable工單有當站報廢列表($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";
        $strTable .= "<th></th><th>工單號</th>";

//        foreach ($arr[0] as $key => $val) {
//
//            $strTable .= "<th>";
//            $strTable .= $key;
//            $strTable .= "</th>";
//        }
        $strTable .= "</tr>";

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= "<th>$rec</th>";

            $strTable .= "<td>";
//            $strTable .= "..." . $val['WO'];
            $wo = $val['WO'];
//            $strTable .= HTML::getBtn("case_asft301.php?WO=$WO", 'btn-primary', $WO);
            $strTable .= A23HTML::getBtn(A23HTML::getAsft301Url($wo), 'btn-primary', $wo);

            $strTable .= "</td>";
//            foreach ($val as $key2 => $val2) {
//                $strTable .= "<td>";
//                $strTable .= "...".$val2;
//                $strTable .= "</td>";
//            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";

        foreach ($arr[0] as $key => $val) {

            $strTable .= "<th>";
            $strTable .= $key;
            $strTable .= "</th>";
        }
        $strTable .= "</tr>";


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            foreach ($val as $key2 => $val2) {
                $strTable .= "<td>";
                $strTable .= $val2;
                $strTable .= "</td>";
            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableCust001($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//             return "( 查無記錄 )";
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
//            $strTable .= "<th>" . (1 + $key) . "</th>"; //张韬 影响到前面很多先关掉2017-11-01

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

    static public function getHtmlTable有序号($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//             return "( 查無記錄 )";
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
            $strTable .= "<th>" . (1 + $key) . "</th>"; //张韬 影响到前面很多先关掉2017-11-01

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

    static public function getHtmlTable给栏位名称_流水号($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//             return "( 查無記錄 )";
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

    static public function getHtmlTable给栏位名称_流水号_栏位文字居中靠右等($arr, $fieldName, $isDebug, $align) {
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
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款无流水号($arr, $fieldName, $isDebug, $align) {
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
            //2017-10-27 张一翔
            //流水号
//            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_合计CNT栏位_有查詢時間($arr, $fieldName, $isDebug, $align) {
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

        $cntSum = 0;
        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            $x = 0;
            foreach ($val as $key2 => $val2) {
                $x += 1;
                if ($key2 == 'CNT') {
                    $cntSum += $val2;
//                    echo "$cntSum,";
                }

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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $x = $x - 1;
//        echo $x;
        $y = H::td隐藏几格($x);
        $strTable .= "<tr>$y<td class='text_align_right'>" . number_format($cntSum) . "</td></tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_合计CNT栏位($arr, $fieldName, $isDebug, $align) {
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

        $cntSum = 0;
        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            $x = 0;
            foreach ($val as $key2 => $val2) {
                $x += 1;
                if ($key2 == 'CNT') {
                    $cntSum += $val2;
//                    echo "$cntSum,";
                }

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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
//        $x=$x-1;
//        echo $x;
        $y = H::td隐藏几格($x);
        $strTable .= "<tr>$y<td class='text_align_right'>" . number_format($cntSum) . "</td></tr>";

        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号($arr, $fieldName, $isDebug, $align) {
        $isDebug = TRUE;
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

        if ($isDebug) {

            $strTable .= "<tr><th></th>";
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_A01专用($arr, $fieldName, $isDebug, $align) {
        $SMART['ENT10'] = '環境10';
        $SMART['SITE100'] = '據點100';
        $SMART['SF131'] = '报工单单号';
        $SMART['SF131_STATUS'] = '报工单状态';
        $SMART['DOC_TYPE'] = '单据类型';
        $SMART['OUT_TYPE'] = '报工类型';
        $SMART['OUT_TYPE_NAME'] = '报工类型名称';
        $SMART['OUT_BY'] = '报工人员';
        $SMART['OUT_BY_NAME'] = '报工人员姓名';
        $SMART['OUT_DATE'] = '报工日期';
        $SMART['WO'] = '工单';
        $SMART['RCARD'] = 'R';
        $SMART['STN'] = '工序';
        $SMART['STN_NAME'] = '工序名称';
        $SMART['STN_TIMER'] = '次';
        $SMART['PROD'] = '产品';
        $SMART['PROD_NAME'] = '产品名称';
        $SMART['SF131_QTY'] = '报工数量';
        $SMART['BATCH'] = '物料批次号';
        $SMART['DONE_DATE_TIME'] = '完成日期时间';



        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable'>";
//        var_dump($fieldName);
        $fields = explode(",", $fieldName);
//        var_dump($fields);


        $strTable .= "<tr><th></th>";

        foreach ($fields as $val) {

            $strTable .= "<th>";
            $strTable .= $val;
            $strTable .= "</th>";
        }
        $strTable .= "</tr>";

        $strTable .= "<tr><th></th>";
        if ($isDebug) {
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }

        // 2017-11-07
        // SMART FIELD NAME
        $strTable .= "<tr><th></th>";
        if ($isDebug) {
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                if (isset($SMART[$key])) {
                    $strTable .= $SMART[$key];
                } else {
                    $strTable .= $key;
                }

                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                    case 'X':
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable基本款有流水号_A01_QRY004专用($arr, $isDebug, $align) {
        $左中右['L'] = "class='text_align_left'";
        $左中右['C'] = "class='text_align_center'";
        $左中右['R'] = "class='text_align_right'";
        $左中右['N'] = "class='text_align_right'";


        $auto['ENT10'] = array('環境10', 'C', 1);
        $auto['SITE100'] = array('據點100', 'C', 1);
        $auto['SF131'] = array('报工单单号', 'C', 1);
        $auto['SF131_STATUS'] = array('报工单状态', 'C', 1);
        $auto['DOC_TYPE'] = array('单据类型', 'C', 1);
        $auto['OUT_TYPE'] = array('报工类型', 'C', 1);
        $auto['OUT_TYPE_NAME'] = array('报工类型名称', 'C', 1);
        $auto['OUT_BY'] = array('报工人员', 'L', 1);
        $auto['OUT_BY_NAME'] = array('报工人员姓名', 'C', 1);
        $auto['OUT_BY_AND_NAME'] = array('报工人员姓名', 'C', 1);
        $auto['OUT_DEPT'] = array('部门', 'C', 1);
        $auto['OUT_DEPT_NAME'] = array('部门名称', 'C', 1);
        $auto['OUT_DEPT_AND_NAME'] = array('部门名称', 'C', 1);
//        OUT_BY_AND_NAME	OUT_BY_AND_NAME	OUT_DEPT_NAME	OUT_DEPT_AND_NAME
        $auto['OUT_DATE'] = array('报工日期', 'C', 1);
        $auto['WO'] = array('工单', 'C', 2);
        $auto['RCARD'] = array('R', 'C', 0.5);
        $auto['STN'] = array('工序', 'C', 1);
        $auto['STN_NAME'] = array('工序名称', 'C', 1);
        $auto['STN_TIMER'] = array('次', 'C', 1);
        $auto['PROD'] = array('产品', 'C', 1);
        $auto['PROD_NAME'] = array('产品名称', 'C', 1);
        $auto['SF131_QTY'] = array('报工数量', 'N', 1);
        $auto['BATCH'] = array('物料批次号', 'C', 2);
        $auto['DONE_DATE_TIME'] = array('完成日期时间', 'C', 2);


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

        $strTable .= "<tr><th></th>";
        if ($isDebug) {
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }

        // 2017-11-07
        // SMART FIELD NAME
        $strTable .= "<tr><th></th>";
        if ($isDebug) {
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
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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

    static public function getHtmlTable基本款有流水号_A01_QRY005专用($arr, $isDebug, $align) {
        $左中右['L'] = "class='text_align_left'";
        $左中右['C'] = "class='text_align_center'";
        $左中右['R'] = "class='text_align_right'";
        $左中右['N'] = "class='text_align_right'";

        $arrAuto = T100PROD::getArray("SELECT FIELD_NAME, FIELD_DISPLAY, FIELD_ALIGN, FIELD_WIDTH FROM A01_AUTO WHERE A01 = 'A01'");
//    var_dump($arrAuto);
        foreach ($arrAuto as $val) {
            $key = $val['FIELD_NAME'];
            $v0 = $val['FIELD_DISPLAY'];
            $v1 = $val['FIELD_ALIGN'];
            $v2 = $val['FIELD_WIDTH'];

            $auto[$key] = array($v0, $v1, $v2);
//        echo "$key ,$v0 ,$v1 ,$v2<BR>";
        }
//        $auto['ENT10'] = array('環境10', 'C', 1);
//        $auto['SITE100'] = array('據點100', 'C', 1);
//        $auto['SF131'] = array('报工单单号', 'C', 1);
//        $auto['SF131_STATUS'] = array('报工单状态', 'C', 1);
//        $auto['DOC_TYPE'] = array('单据类型', 'C', 1);
//        $auto['OUT_TYPE'] = array('报工类型', 'C', 1);
//        $auto['OUT_TYPE_NAME'] = array('报工类型名称', 'C', 1);
//        $auto['OUT_BY'] = array('报工人员', 'L', 1);
//        $auto['OUT_BY_NAME'] = array('报工人员姓名', 'C', 1);
//        $auto['OUT_BY_AND_NAME'] = array('报工人员姓名', 'C', 1);
//        $auto['OUT_DEPT'] = array('部门', 'C', 1);
//        $auto['OUT_DEPT_NAME'] = array('部门名称', 'C', 1);
//        $auto['OUT_DEPT_AND_NAME'] = array('部门名称', 'C', 1);
////        OUT_BY_AND_NAME	OUT_BY_AND_NAME	OUT_DEPT_NAME	OUT_DEPT_AND_NAME
//        $auto['OUT_DATE'] = array('报工日期', 'C', 1);
//        $auto['WO'] = array('工单', 'C', 2);
//        $auto['RCARD'] = array('R', 'C', 0.5);
//        $auto['STN'] = array('工序', 'C', 1);
//        $auto['STN_NAME'] = array('工序名称', 'C', 1);
//        $auto['STN_TIMER'] = array('次', 'C', 1);
//        $auto['PROD'] = array('产品', 'C', 1);
//        $auto['PROD_NAME'] = array('产品名称', 'C', 1);
//        $auto['SF131_QTY'] = array('报工数量', 'N', 1);
//        $auto['BATCH'] = array('物料批次号', 'C', 2);
//        $auto['DONE_DATE_TIME'] = array('完成日期时间', 'C', 2);


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

        $strTable .= "<tr><th></th>";
        if ($isDebug) {
            foreach ($arr[0] as $key => $val) {

                $strTable .= "<th>";
                $strTable .= $key;
                $strTable .= "</th>";
            }
            $strTable .= "</tr>";
        }

        // 2017-11-07
        // SMART FIELD NAME
        $strTable .= "<tr><th></th>";
        if ($isDebug) {
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
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

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

    static public function getHtmlTable基本款有流水号_全部靠左($arr) {
        if (sizeof($arr) == 0) {
            return "( 查無記錄 )";
        }
        $strTable = "<table class='gridtable '>";
//        var_dump($fieldName);


        $strTable .= "<tr><TH></TH>";
        $isDebug = true;
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
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
                $strTable .= "<td>";
                $strTable .= $val2;
                $strTable .= "</td>";
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
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
                } else if ($key2 == "WO") {
                    $strTable .= "<td>";

                    $strTable .= A23HTML::get按工单查报工列表Link($val2);
//                    $strTable .= HTML::getProdLink($val2);
                    $strTable .= "</td>";
                } else if ($key2 == "PROD") {
                    $strTable .= "<td>";
                    $strTable .= A23HTML::get產品Link($val2);
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

    // for PROD, PROD_NAME, KEYWORDS
    static public function getHtmlTableCust002($arr, $fieldName, $isDebug) {
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                    $strTable .= "<td>";

//                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));

                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
                    foreach ($arr as $k1 => $v1) {
                        $strTable .= A23HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
                    }


                    $strTable .= "</td>";
                } else if ($key2 == "PROD") {
                    $strTable .= "<td>";
//                    $strTable .="xxx". $val2;
//                    $strTable .= HTML::getBtn("case_prod.php?PROD=$val2", "btn-primary", $val2);
                    $strTable .= A23HTML::getBtn(A23HTML::get產品V2工单有带RcardUrl($val2), "btn-primary", $val2);
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

    static public function getHtmlTableCustTextAlign($arr, $fieldName, $isDebug, $align) {
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
            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

//2017-09-25, 是否要顯示REC $isRec
    static public function getHtmlTableCustTextAlignRec($arr, $fieldName, $isDebug, $align, $isRec) {
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

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;

            $strTable .= "<tr>";
            if ($isRec) {
                $strTable .= "<th>$rec</th>";
            }

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                    case 'X':
                        $strTable .= "<td class='text_align_right'>";
                        $strTable .= number_format($val2, 1);
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

//2017-09-25, 是否要顯示REC $isRec
    static public function getHtmlTableCustTextAlignRec订单笔数($arr, $fieldName, $isDebug, $align, $isRec) {
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

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;

            $strTable .= "<tr>";
            if ($isRec) {
                $strTable .= "<th>$rec</th>";
            }

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
                if ($key2 == 'CNT_SO') {
//                    $strTable .= "<td>";
//                    $strTable .= "XXXXXXXXXXXXXXXXXX";
//                    $strTable .= HTML::get客户订单查询Link($val2);
//                    
//                    $cust='UUUUUUUUUUUUUUUUUUUUUUUUUUU';
//                    $so_yyyy_mm="WWWWW";
//                    $cust='S000001';
//                    $so_yyyy_mm="2017-09";
                    $cust = $val['CUST'];
                    $so_yyyy_mm = $val['SO_YYYY_MM'];


                    $strTable .= "<td class='text_align_right'>";
//                            $strTable .= number_format($val2);
                    $strTable .= A23HTML::get客户每月订单列表Link($cust, $so_yyyy_mm, number_format($val2));
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

    //2017-09-25, 是否要顯示REC $isRec
    static public function getHtmlTableCustTextAlignRec订单($arr, $fieldName, $isDebug, $align, $isRec) {
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

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;

            $strTable .= "<tr>";
            if ($isRec) {
                $strTable .= "<th>$rec</th>";
            }

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
                if ($key2 == 'SO') {
                    $strTable .= "<td>";
//                    $strTable .= "XXXXXXXXXXXXXXXXXX";
                    $strTable .= A23HTML::get客户订单查询Link($val2);
//                    $strTable .= "XXXXXXXXXXXXXXXXXX";
//                    $cust=$val2['CUST'];
//                    $so_yyyy_mm=$val2['so_yyyy_mm'];
//                    $strTable .= HTML::get客户订单查询V2Link($val2,$cust,$so_yyyy_mm,$val2);
//                    $strTable .= HTML::get客户每月订单列表Link($cust, $so_yyyy_mm,$val2);
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

    static public function getHtmlTableCust000($arr, $fieldName, $isDebug) {
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
            foreach ($val as $key2 => $val2) {

                if ($val2 == 'NSKLDJFLASDJF') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'YDSKFJASLDJLADGJ') {
                    $strTable .= "<td class='text_align_center'>Y</td>";
                } else if (is_numeric($val2)) {

                    $strTable .= "<td class='text_align_right'>";
                    $strTable .= number_format($val2);
                    $strTable .= "</td>";
//                    }
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

    static public function getJson($sql, $arr) {
        $arr = T100PROD::getArray($sql);
        if (sizeof($arr) == 0) {
            $json1 = '{"data":{"sql":"' . $sql . '"}}';
//            header('Content-Type: application/json');
//            echo $json1;
            return $json1;
        }


        $k = 0;
        $col = '';
        foreach ($arr[0] as $key2 => $value2) {
            $k++;
//    echo "\"c$k\":";
//    echo "\"$key2\",";

            $col .= "\"c$k\":";
            $col .= "\"$key2\",";
        }

        $col2 = substr($col, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string
//echo "<hr>";

        $row = '';
        $recNum = 0;
        foreach ($arr as $key => $val) {
            $rowStr = "{";
            // $arr[3] will be updated with each value from $arr...
//    echo "{$key} => {$value} ";
//    echo "{$key}  ";
//    var_dump($value);
            $recNum++;
            $rowStr .= '"c0"';
            $rowStr .= ':';
            $rowStr .= '"' . $recNum . '",';

            $k = 0;

            foreach ($val as $key2 => $val2) {
                $k++;
                $rowStr .= '"c' . $k . '"';
                $rowStr .= ':';
                $rowStr .= '"' . $val2 . '",';
            }
            $rowStr2 = substr($rowStr, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string

            $row .= $rowStr2 . "},";
        }
        if (sizeof($row) > 0) {
            $row2 = substr($row, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string
        }

//$json1 = '{"data":{"sql":"'.$sql.'"},"col":'.$colx.'}'; //good
        if ($col2 == '') {
            $json1 = '{"data":{"sql":"' . $sql . '"}}';
        } else {
            $json1 = '{"data":{"sql":"' . $sql . '"},"col":{' . $col2 . '},"row":[' . $row2 . ']}';
        }
        return $json1;
    }

}

class MARK_T1 {

    static public function initVar($var) {
        if (isset($_GET[$var])) {
            return $_GET[$var];
        }
        return "";
    }

    static public function initVarWithDefaultVal($var, $value) {
        if (isset($_GET[$var])) {
            return $_GET[$var];
        }
        return $value;
    }

    static public function getPost变量p1或预设($default) {
////           htmlspecialchars($_POST["p1"])
//        if (isset($_POST["p1"])) {
//            return htmlspecialchars($_POST["p1"]);
//        }
//        return $default;
        $wo = htmlspecialchars($_POST["p1"]);
        if ($wo == '') {
            $wo = $default;
        }

        return $wo;
    }

    static public function getPost变量p2或预设($default) {
////           htmlspecialchars($_POST["p1"])
//        if (isset($_POST["p1"])) {
//            return htmlspecialchars($_POST["p1"]);
//        }
//        return $default;
        $wo = htmlspecialchars($_POST["p2"]);
        if ($wo == '') {
            $wo = $default;
        }

        return $wo;
    }

    static public function showT100HtmlTable($sql) {
        $arr = T100PROD::getArray($sql);
        echo MARK::getHtmlTable($arr);
    }

    static public function getT100HtmlTableBySql($sql) {
        $arr = T100PROD::getArray($sql);
        return MARK::getHtmlTable($arr);
    }

    static public function showT100HtmlTableCust001($sql, $fieldName, $debug) {
        $arr = T100PROD::getArray($sql);
        echo MARK::getHtmlTableCust001($arr, $fieldName, $debug);
    }

    static public function showT100HtmlTable有序号($sql, $fieldName, $debug) {
        $arr = T100PROD::getArray($sql);
        echo MARK::getHtmlTable有序号($arr, $fieldName, $debug);
    }

    static public function show($str) {
        echo $str;
    }

    static public function getT100HtmlTableCust001BySql($sql, $fieldName, $debug) {
        $arr = T100PROD::getArray($sql);
        return MARK::getHtmlTableCust001($arr, $fieldName, $debug);
    }

    static public function showHtmlTable($arr) {
        echo MARK::getHtmlTable($arr);
    }

    static public function getHtmlTable按產品查工單($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";
//         $strTable .= "";
        $strTable .= "<th></th><th>產品</th><th>工單號</th>";
//        $strTable .= "<th>產品</th>";
//        $strTable .= "<th>" . ENV::$URL_PRODNAME_FIND . "</th>";
//        foreach ($arr[0] as $key => $val) {
//
//            $strTable .= "<th>";
//            $strTable .= $key;
//            $strTable .= "</th>";
//        }
        $strTable .= "</tr>";

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= "<th>$rec</th>";
            $strTable .= "<td>";
            $strTable .= $val['PROD'];
            $strTable .= "</td>";
            $strTable .= "<td>";
//            $strTable .= "..." . $val['WO'];
            $wo = $val['WO'];
//            $strTable .= HTML::getBtn("case_asft301.php?WO=$WO", 'btn-primary', $WO);
//            $strTable .= HTML::getBtn(HTML::getAsft301Url($wo), 'btn-primary', $wo);
            $strTable .= A23HTML::getAsft301Link($wo);
            $strTable .= "</td>";


//            $strTable .= "<td>";
//            $strTable .= $val['PROD'];
//            $strTable .= "</td>";
//            $strTable .= "<td>";
//            $strTable .= $val['PROD_NAME'];
//            $strTable .= "</td>";
//          
//            foreach ($val as $key2 => $val2) {
//                $strTable .= "<td>";
//                $strTable .= "...".$val2;
//                $strTable .= "</td>";
//            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable按產品查工單old($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";
        $strTable .= "<th></th><th>工單號</th>";
        $strTable .= "<th>產品</th>";
        $strTable .= "<th>" . ENV::$URL_PRODNAME_FIND . "</th>";

//        foreach ($arr[0] as $key => $val) {
//
//            $strTable .= "<th>";
//            $strTable .= $key;
//            $strTable .= "</th>";
//        }
        $strTable .= "</tr>";

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= "<th>$rec</th>";

            $strTable .= "<td>";
//            $strTable .= "..." . $val['WO'];
            $wo = $val['WO'];
//            $strTable .= HTML::getBtn("case_asft301.php?WO=$WO", 'btn-primary', $WO);
            $strTable .= A23HTML::getBtn(A23HTML::getAsft301Url($wo), 'btn-primary', $wo);
            $strTable .= "</td>";


            $strTable .= "<td>";
            $strTable .= $val['PROD'];
            $strTable .= "</td>";
            $strTable .= "<td>";
            $strTable .= $val['PROD_NAME'];
            $strTable .= "</td>";


//          
//            foreach ($val as $key2 => $val2) {
//                $strTable .= "<td>";
//                $strTable .= "...".$val2;
//                $strTable .= "</td>";
//            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable工單有當站報廢列表($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";
        $strTable .= "<th></th><th>工單號</th>";

//        foreach ($arr[0] as $key => $val) {
//
//            $strTable .= "<th>";
//            $strTable .= $key;
//            $strTable .= "</th>";
//        }
        $strTable .= "</tr>";

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;
            $strTable .= "<tr>";
            $strTable .= "<th>$rec</th>";

            $strTable .= "<td>";
//            $strTable .= "..." . $val['WO'];
            $wo = $val['WO'];
//            $strTable .= HTML::getBtn("case_asft301.php?WO=$WO", 'btn-primary', $WO);
            $strTable .= A23HTML::getBtn(A23HTML::getAsft301Url($wo), 'btn-primary', $wo);

            $strTable .= "</td>";
//            foreach ($val as $key2 => $val2) {
//                $strTable .= "<td>";
//                $strTable .= "...".$val2;
//                $strTable .= "</td>";
//            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTable($arr) {
        if (sizeof($arr) == 0) {
            return "( No records! )";
        }
        $strTable = "<table class='gridtable'>";

        $strTable .= "<tr>";

        foreach ($arr[0] as $key => $val) {

            $strTable .= "<th>";
            $strTable .= $key;
            $strTable .= "</th>";
        }
        $strTable .= "</tr>";


        foreach ($arr as $key => $val) {

            $strTable .= "<tr>";
            foreach ($val as $key2 => $val2) {
                $strTable .= "<td>";
                $strTable .= $val2;
                $strTable .= "</td>";
            }
            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

    static public function getHtmlTableCust001($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//             return "( 查無記錄 )";
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
//            $strTable .= "<th>" . (1 + $key) . "</th>"; //张韬 影响到前面很多先关掉2017-11-01

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

    static public function getHtmlTable给栏位名称_流水号($arr, $fieldName, $isDebug) {
        if (sizeof($arr) == 0) {
            return MSG::$查無資料;
//             return "( 查無記錄 )";
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

    static public function getHtmlTable给栏位名称_流水号_栏位文字居中靠右等($arr, $fieldName, $isDebug, $align) {
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
            //2017-10-27 张一翔
            //流水号
            $strTable .= "<th>&nbsp;" . (1 + $key) . "&nbsp;</th>";

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
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
                } else if ($key2 == "WO") {
                    $strTable .= "<td>";

                    $strTable .= A23HTML::get按工单查报工列表Link($val2);
//                    $strTable .= HTML::getProdLink($val2);
                    $strTable .= "</td>";
                } else if ($key2 == "PROD") {
                    $strTable .= "<td>";
                    $strTable .= A23HTML::get產品Link($val2);
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

    // for PROD, PROD_NAME, KEYWORDS
    static public function getHtmlTableCust002($arr, $fieldName, $isDebug) {
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
                } else if ($key2 == "PROD_NAME") {
                    $strTable .= "<td>";
                    $strTable .= $val2;
                    $strTable .= "</td>";
                    $strTable .= "<td>";

//                    $strTable .= implode(", ", REGEX::getEnglishNumberAndChineseWords($val2));

                    $arr = REGEX::getEnglishNumberAndChineseWords($val2);
                    foreach ($arr as $k1 => $v1) {
                        $strTable .= A23HTML::getBtn("case_prodname_find.php?find=$v1", "btn-default", $v1);
                    }


                    $strTable .= "</td>";
                } else if ($key2 == "PROD") {
                    $strTable .= "<td>";
//                    $strTable .="xxx". $val2;
//                    $strTable .= HTML::getBtn("case_prod.php?PROD=$val2", "btn-primary", $val2);
                    $strTable .= A23HTML::getBtn(A23HTML::get產品V2工单有带RcardUrl($val2), "btn-primary", $val2);
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

    static public function getHtmlTableCustTextAlign($arr, $fieldName, $isDebug, $align) {
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
            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

//2017-09-25, 是否要顯示REC $isRec
    static public function getHtmlTableCustTextAlignRec($arr, $fieldName, $isDebug, $align, $isRec) {
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

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;

            $strTable .= "<tr>";
            if ($isRec) {
                $strTable .= "<th>$rec</th>";
            }

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
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
                $align_index++;
            }



            $strTable .= "</tr>";
        }
        $strTable .= "</table>";
        return $strTable;
    }

//2017-09-25, 是否要顯示REC $isRec
    static public function getHtmlTableCustTextAlignRec订单笔数($arr, $fieldName, $isDebug, $align, $isRec) {
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

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;

            $strTable .= "<tr>";
            if ($isRec) {
                $strTable .= "<th>$rec</th>";
            }

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
                if ($key2 == 'CNT_SO') {
//                    $strTable .= "<td>";
//                    $strTable .= "XXXXXXXXXXXXXXXXXX";
//                    $strTable .= HTML::get客户订单查询Link($val2);
//                    
//                    $cust='UUUUUUUUUUUUUUUUUUUUUUUUUUU';
//                    $so_yyyy_mm="WWWWW";
//                    $cust='S000001';
//                    $so_yyyy_mm="2017-09";
                    $cust = $val['CUST'];
                    $so_yyyy_mm = $val['SO_YYYY_MM'];


                    $strTable .= "<td class='text_align_right'>";
//                            $strTable .= number_format($val2);
                    $strTable .= A23HTML::get客户每月订单列表Link($cust, $so_yyyy_mm, number_format($val2));
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

    //2017-09-25, 是否要顯示REC $isRec
    static public function getHtmlTableCustTextAlignRec订单($arr, $fieldName, $isDebug, $align, $isRec) {
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

        $rec = 0;
        foreach ($arr as $key => $val) {
            $rec++;

            $strTable .= "<tr>";
            if ($isRec) {
                $strTable .= "<th>$rec</th>";
            }

            $align_index = 0;
            foreach ($val as $key2 => $val2) {
                if ($key2 == 'SO') {
                    $strTable .= "<td>";
//                    $strTable .= "XXXXXXXXXXXXXXXXXX";
                    $strTable .= A23HTML::get客户订单查询Link($val2);
//                    $strTable .= "XXXXXXXXXXXXXXXXXX";
//                    $cust=$val2['CUST'];
//                    $so_yyyy_mm=$val2['so_yyyy_mm'];
//                    $strTable .= HTML::get客户订单查询V2Link($val2,$cust,$so_yyyy_mm,$val2);
//                    $strTable .= HTML::get客户每月订单列表Link($cust, $so_yyyy_mm,$val2);
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

    static public function getHtmlTableCust000($arr, $fieldName, $isDebug) {
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
            foreach ($val as $key2 => $val2) {

                if ($val2 == 'NSKLDJFLASDJF') {
                    $strTable .= "<td></td>";
                } else if ($val2 == 'YDSKFJASLDJLADGJ') {
                    $strTable .= "<td class='text_align_center'>Y</td>";
                } else if (is_numeric($val2)) {

                    $strTable .= "<td class='text_align_right'>";
                    $strTable .= number_format($val2);
                    $strTable .= "</td>";
//                    }
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

    static public function getJson($sql, $arr) {
        $arr = T100PROD::getArray($sql);
        if (sizeof($arr) == 0) {
            $json1 = '{"data":{"sql":"' . $sql . '"}}';
//            header('Content-Type: application/json');
//            echo $json1;
            return $json1;
        }


        $k = 0;
        $col = '';
        foreach ($arr[0] as $key2 => $value2) {
            $k++;
//    echo "\"c$k\":";
//    echo "\"$key2\",";

            $col .= "\"c$k\":";
            $col .= "\"$key2\",";
        }

        $col2 = substr($col, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string
//echo "<hr>";

        $row = '';
        $recNum = 0;
        foreach ($arr as $key => $val) {
            $rowStr = "{";
            // $arr[3] will be updated with each value from $arr...
//    echo "{$key} => {$value} ";
//    echo "{$key}  ";
//    var_dump($value);
            $recNum++;
            $rowStr .= '"c0"';
            $rowStr .= ':';
            $rowStr .= '"' . $recNum . '",';

            $k = 0;

            foreach ($val as $key2 => $val2) {
                $k++;
                $rowStr .= '"c' . $k . '"';
                $rowStr .= ':';
                $rowStr .= '"' . $val2 . '",';
            }
            $rowStr2 = substr($rowStr, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string

            $row .= $rowStr2 . "},";
        }
        if (sizeof($row) > 0) {
            $row2 = substr($row, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string
        }

//$json1 = '{"data":{"sql":"'.$sql.'"},"col":'.$colx.'}'; //good
        if ($col2 == '') {
            $json1 = '{"data":{"sql":"' . $sql . '"}}';
        } else {
            $json1 = '{"data":{"sql":"' . $sql . '"},"col":{' . $col2 . '},"row":[' . $row2 . ']}';
        }
        return $json1;
    }

}

// Mark
//require 'case01_header.php';
class T100PROD {

//    public $stid;
//    public $sql;
//    public $num_rows;

    static public function getArrayInsertOnly($sql) {
        if (stristr($sql, 'TRUNCATE') == TRUE) {
            return null;
        }
        if (stristr($sql, 'DELETE') == TRUE) {
            return null;
        }
//        if (stristr($sql, 'INSERT') == TRUE) {
//            return null;
//        }
        if (stristr($sql, 'UPDATE') == TRUE) {
            return null;
        }

        $conn = oci_connect('dsdata', 'dsdata', '10.10.0.31/topprd', 'AL32UTF8');
        if (!$conn) {
//            exit(oci_error()['message']);
            echo (oci_error()['message']);
            return -999;
        }

        $stmt = oci_parse($conn, $sql);  // note mismatched quote
        if (!$stmt) {
            $e = oci_error($conn);  // For oci_parse errors pass the connection handle
//            exit($e['message']);
            echo "<h3>" . $e['message'] . "</h3>";
            return -998;
        }
        $r = oci_execute($stmt);
//        http://php.net/manual/en/function.oci-num-rows.php
//        $this->num_rows=oci_num_rows($r);
//        print_r($r);
        if (!$r) {
            $e = oci_error($stmt);
//            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
//            exit($e['message']);
            echo "<h3>" . $e['message'] . "</h3>";
            return -997;
        }

//        $data = array();
//        while ($row = oci_fetch_array($stmt, OCI_ASSOC + OCI_RETURN_NULLS)) {
//            $data[] = $row;
//        }
//        print_r($data);
        return $r;
//        $this->free_statement_and_close_oci();
    }

    static public function getArray($sql) {
        if (stristr($sql, 'DELETE') == TRUE) {
            return null;
        }

        if (stristr($sql, 'INSERT') == TRUE) {
            return null;
        }
        if (stristr($sql, 'UPDATE') == TRUE) {
            return null;
        }

        $conn = oci_connect('dsdata', 'dsdata', '10.10.0.31/topprd', 'AL32UTF8');
        if (!$conn) {
            exit(oci_error()['message']);
        }

        $stmt = oci_parse($conn, $sql);  // note mismatched quote
        if (!$stmt) {
            $e = oci_error($conn);  // For oci_parse errors pass the connection handle
            exit($e['message']);
        }
        $r = oci_execute($stmt);
//        http://php.net/manual/en/function.oci-num-rows.php
//        $this->num_rows=oci_num_rows($r);
//        print_r($r);
        if (!$r) {
            $e = oci_error($stmt);
//            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            exit($e['message']);
        }

        $data = array();
        while ($row = oci_fetch_array($stmt, OCI_ASSOC + OCI_RETURN_NULLS)) {
            $data[] = $row;
        }
//        print_r($data);
        return $data;
//        $this->free_statement_and_close_oci();
    }

//    function free_statement_and_close_oci() {
//        oci_free_statement($this->stid);
//        oci_close($this->conn);
//    }
}

class BPMPROD {

//    public $stid;
//    public $sql;
//    public $num_rows;

    static public function getArray($sql) {
        if (stristr($sql, 'DELETE') == TRUE) {
            return null;
        }

        if (stristr($sql, 'INSERT') == TRUE) {
            return null;
        }
        if (stristr($sql, 'UPDATE') == TRUE) {
            return null;
        }

        $conn = oci_connect('bpm', 'bpm', '10.10.0.31/bpm', 'AL32UTF8');
        if (!$conn) {
            exit(oci_error()['message']);
        }

        $stmt = oci_parse($conn, $sql);  // note mismatched quote
        if (!$stmt) {
            $e = oci_error($conn);  // For oci_parse errors pass the connection handle
            exit($e['message']);
        }
        $r = oci_execute($stmt);
//        http://php.net/manual/en/function.oci-num-rows.php
//        $this->num_rows=oci_num_rows($r);
//        print_r($r);
        if (!$r) {
            $e = oci_error($stmt);
//            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            exit($e['message']);
        }

        $data = array();
        while ($row = oci_fetch_array($stmt, OCI_ASSOC + OCI_RETURN_NULLS)) {
            $data[] = $row;
        }
//        print_r($data);
        return $data;
//        $this->free_statement_and_close_oci();
    }

//    function free_statement_and_close_oci() {
//        oci_free_statement($this->stid);
//        oci_close($this->conn);
//    }
}

//
//$sql = "SELECT * FROM OUT09_TOP01_WO WHERE PROD = '10101-000029'";
//$arr = T100PROD::getArray($sql);
////var_dump($arr);
////echo "<hr>";
////{"data":{"sql":" SELECT * FROM MAIN_QC_CNT02",
////$sql= '"sql":"' . $sql . '"';
////echo "<hr>";
//if (sizeof($arr) == 0) {
//    $json1 = '{"data":{"sql":"' . $sql . '"}}';
//    header('Content-Type: application/json');
//    echo $json1;
//    return;
//}
//
//
//$k = 0;
//$col = '';
//foreach ($arr[0] as $key2 => $value2) {
//    $k++;
////    echo "\"c$k\":";
////    echo "\"$key2\",";
//
//    $col .= "\"c$k\":";
//    $col .= "\"$key2\",";
//}
//
//$col2 = substr($col, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string
////echo "<hr>";
//
//$row = '';
//$recNum = 0;
//foreach ($arr as $key => $val) {
//    $rowStr = "{";
//    // $arr[3] will be updated with each value from $arr...
////    echo "{$key} => {$value} ";
////    echo "{$key}  ";
////    var_dump($value);
//    $recNum++;
//    $rowStr .= '"c0"';
//    $rowStr .= ':';
//    $rowStr .= '"' . $recNum . '",';
//
//    $k = 0;
//
//    foreach ($val as $key2 => $val2) {
//        $k++;
//        $rowStr .= '"c' . $k . '"';
//        $rowStr .= ':';
//        $rowStr .= '"' . $val2 . '",';
//    }
//    $rowStr2 = substr($rowStr, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string
//
//    $row .= $rowStr2 . "},";
//}
//if (sizeof($row) > 0) {
//    $row2 = substr($row, 0, -1); //https://stackoverflow.com/questions/5592994/remove-the-last-character-from-string
//}
//
////$json1 = '{"data":{"sql":"'.$sql.'"},"col":'.$colx.'}'; //good
//if ($col2 == '') {
//    $json1 = '{"data":{"sql":"' . $sql . '"}}';
//} else {
//    $json1 = '{"data":{"sql":"' . $sql . '"},"col":{' . $col2 . '},"row":[' . $row2 . ']}';
//}
//
//
//$response = json_encode($json1);
//header('Content-Type: application/json');
//echo $json1;
////echo json_encode($response);
//
//
////for ($i = 0;sizeof($arr) ; $i++) {
////    echo $i;
////    echo "<hr>";
////}
//
//
////foreach ($arr[0] as $key1 => $onerow) {
////    var_dump($onerow);
////    
////}
////dump_var( DbClass::getArray($sql));
//
