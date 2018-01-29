<?php require_once 'CaseClass_V.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <script type="text/javascript">
            function display_alert()
            {
//                alert("I am an alert box!! 這個只是示範如何使用JS...by Mark");
                var aaa = <%=session("sessionV1")%>
        $_SESSION["sessionV1"]
        alert("aaa");
        }
        </script>
        <title>case</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <!--<link href="css/django.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container-fluid">
            <a class='btn btn-primary' href='http://portal.fulltech-metal.com'>企業入口網站</a>
   
            
<!--            <a href='a12_prod.php' class='btn btn-lg btn-success'> 全製程產品工單批號超高速查詢</a>
            <a class='btn btn-primary' href='/cust001/case/index.php'>（目录）</a>
            <a class='btn btn-success' href='/cust001/case/qry_only_list.php'>自主开发查询（目录）</a>
            <a class='btn btn-danger' href='/cust001/case/qry_list.php'>自主開發報表（目录）</a>
            <a class='btn btn-info' href='/cust001/case/show.php'>简易查询（目录）</a>
    
            <a class='btn btn-primary' href='/cust001/case/a25.php'>a25</a>-->
            
            <!--<a class='btn btn-success' href='/cust001/case/env.php'>常用单别状态统计表</a>-->
            <a class='btn btn-success' href='http://10.10.0.100/cust001/login/'>登入</a>
            <a class='btn btn-warning' href='http://10.10.0.100/cust001/login/logout.php'>登出</a>
              <a class='btn btn-info' href='http://10.10.0.100/cust001/case/'>舊入口</a>
          
            
            
            
            <?php
            define('IN_HOUSE_LOGIN_USER_ID', 'IN-HOUSE-LOGIN-USER-ID');
            define('IN_HOUSE_LOGIN_USER_NAME', 'IN-HOUSE-LOGIN-USER-NAME');
          
            global $arrEnv;
//            $is_admin = ($user['permissions'] == 'admin') ? true : false;
            $arrEnv[V::$USER_ID] =isset($_SESSION[IN_HOUSE_LOGIN_USER_ID])?$_SESSION[IN_HOUSE_LOGIN_USER_ID]:'guest' ;
            $arrEnv[V::$USER_NAME] =isset($_SESSION[IN_HOUSE_LOGIN_USER_NAME])?$_SESSION[IN_HOUSE_LOGIN_USER_NAME]:'GUEST' ;
//            $arrEnv[V::$USER_NAME] = $_SESSION[IN_HOUSE_LOGIN_USER_NAME];
            
            if ($arrEnv[V::$USER_ID] == 'guest') {
                $arrEnv[V::$USER_GROUP] = "GUEST";
            }
            if ($arrEnv[V::$USER_ID] == 'demo') {
                $arrEnv[V::$USER_GROUP] = "DEMO";
            }
            if ($arrEnv[V::$USER_ID] == 'dev') {
                $arrEnv[V::$USER_GROUP] = "DEV";
                global $show_sql;
                $show_sql=true;
            }
            if ($arrEnv[V::$USER_ID] == 'excel') {
                $arrEnv[V::$USER_GROUP] = "EXCEL";
                global $show_sql;
                $show_sql=false;
            }
            echo "用戶名︰【" . $arrEnv[V::$USER_ID] . "】";
            echo $arrEnv[V::$USER_NAME];
//            echo "---" . $arrEnv[V::$USER_GROUP];
//            var_dump($arrEnv);



            