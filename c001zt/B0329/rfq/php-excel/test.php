<?php

$go=getHttpToDownload(1234567);
function getHttpToDownload($stamp){
$stamp = time();

echo "<h1>$stamp</h1>";
$host = $_SERVER['HTTP_HOST'];
echo "<h1>$host</h1>";
$script = $_SERVER['REQUEST_URI'];
echo "<h1>$script</h1>";

//$paths =  explode('"'+DIRECTORY_SEPARATOR+'"',$script );
//$paths =  explode(DIRECTORY_SEPARATOR,$script );
$paths =  explode('/',$script );

$cnt=count($paths);


$result_path=$host;
for ($i = 0; $i < $cnt-1 ; $i++) {
    $result_path.=$paths[$i]."/";
//    echo "<h1>$result_path</h1>";
}
$result_path.="php-excel/results/RFQ_".$stamp.".xlsx";
    echo "<h1>$result_path</h1>";
return $result_path;
}