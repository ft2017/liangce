<?php
require 'CaseClass_A25.php'; // 由此帶入必要的功能
A25X::startPage();
//require 'CaseClass.php'; // 由此帶入必要的功能
//HTML::startPage();

// ***** 每頁程式 START *****

function getTr($tdStr, $tdArr) {
    $str = "<td class='dev_dept'>$tdStr</td>";
    $str .= "<td>";
    foreach ($tdArr as $key => $val) {
        $str .= "$val&nbsp;";
    }
    $str .= "</td>";
    return $str;
}

A25X::showH1("【app001】FT2018 量测");
A25X::showH4有灰底色("在这里我们要做一些事情，例如上传基本数据的excel和做一些运算。");
A25X::showBtn新的頁面("app001_excel001.php?app=app001", 'btn btn-success', '导出Excel');

// ***** 每頁程式 END *****
A25X::endPage();
