<?php

// Mark
//http://php.net/manual/en/function.oci-commit.php
class T100PRODLOG {

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

    public static function log() {



// Insert into several tables, rolling back the changes if an error occurs
//        $conn = oci_connect('hr', 'welcome', 'localhost/XE');
        $conn = oci_connect('dsdata', 'dsdata', '10.10.0.31/topprd', 'AL32UTF8');
        $client_ip = $_SERVER['REMOTE_ADDR'];
        $client_agent = $_SERVER['HTTP_USER_AGENT'];
        $server_ip = $_SERVER['SERVER_NAME'];
        $server_page = $_SERVER['PHP_SELF'];
        $server_query = $_SERVER["QUERY_STRING"];
//        $sql = "insert into LOG_VISIT (C_IP, C_AGENT, S_IP, S_PAGE, S_QRY,LOG_DT) values('AAA','BBB','CCC','DDD','EEE',sysdate )";
        $sql = "insert into LOG_VISIT (C_IP, C_AGENT, S_IP, S_PAGE, S_QRY,LOG_DT)"
                . " values('$client_ip','$client_agent','$server_ip','$server_page','$server_query',sysdate )";
        $stid = oci_parse($conn, $sql);



        oci_execute($stid); // The row is commit
    }

}
