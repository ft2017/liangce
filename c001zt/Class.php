<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class ZTHTML {
    
    public static function startpage(){
        echo '<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>量測 10.10.0.106张韬</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div class="container-fluid">';
    }
    
    
     public static function endpage(){
        echo '     </div>
    </body>
    </html>';
    }
    
    public static function htmlh1($text){
      $h1="<h1>".$text."</h1>";
      echo $h1;
        
    }
    
    public static function showbtn($btns,$text,$url){
      $a="<a class='$btns' href='$url'>". $text." </a>";
      echo $a;
        
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
        $btnClassV2 = " class='btn $btnClass '";

        echo  "<a $btnClassV2 href='$url'>$displayText</a>";
    }
}

