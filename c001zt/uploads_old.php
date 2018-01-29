<?php

//require 'index.php';
require 'Class.php';
//require 'upload_file.php';
ZTHTML::startpage();
session_start();
//echo '<link rel="stylesheet" type="text/css" href="style.css" />'
// . '<link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
//        <link rel="stylesheet" type="text/cssy" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />';

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
            if(isset($arr[$key][0])){
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

}

ini_set('date.timezone', 'Asia/Shanghai');
set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
include 'PHPExcel/IOFactory.php';
header("content-type:text/html;charset=utf-8");
echo '<a href="http://10.10.0.106/c001zt/" class = "btn btn-primary">返回上传页面</a>';
echo "<pre>";
print_r($_FILES);
echo "</pre>";

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
//echo $dstfile;
//if()
echo '<table class="gridtable">';
$arr[][] = '';
$x = 0;
for ($i = 0; $i < $count; $i++) {
//    echo $arr;
    $objPHPExcelReader = PHPExcel_IOFactory::load('upload/' . session_id() . $_FILES["file"]["name"][$i]);  //加载excel文件
    foreach ($objPHPExcelReader->getWorksheetIterator() as $sheet) {  //循环读取sheet
        foreach ($sheet->getRowIterator() as $row) {  //逐行处理
            if ($row->getRowIndex() < 5) {  //确定从哪一行开始读取
                continue;
            }
            echo '<tr>';
            $y = 0;
            foreach ($row->getCellIterator() as $cell) {  //逐列读取
                echo '<td>';
                $data = $cell->getValue(); //获取cell中数据
                $arr[$x][$y] = $data;//通过赋值产生array
                $y++;
                echo $data;
                echo '</td>';
            }
            $x++;
            echo '</tr>';
        }
    }
}
echo '</table>';




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





//echo $arr[17][8] != '';
//echo (floatval($arr[17][5]) > (floatval($arr[17][1]) - floatval($arr[17][3])));
//echo floatval($arr[17][5])."<br>";
//echo floatval($arr[17][1])."<br>";
//echo number_format(floatval($arr[17][2]),2)."<br>";
//echo floatval($arr[17][5]) > ((floatval($arr[17][1])) - floatval($arr[17][3]));
//echo floatval($arr[17][5]) < ((floatval($arr[17][1])) + floatval($arr[17][2]));
ZTHTML::endpage();