<?php
echo '<h1>需求说明</h1>';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>量測 10.10.0.106张一翔</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="container-fluid">
            ITEM:量测人员手动维护好在要上传的excel里，一般都会放在最右边的栏位,ITEM具有唯一性,量测人员最终决定这个值放在上传文档的H位。<br>
            DIMENSION / SPECIFICATION：图纸值上下差异值。(上下不一样的时候该如何处理)<br>
            SC/CC：导出excel之后由量测人员填入，只需要空出这个栏位即可。  <br>
            CONTROL METHOD：根据源文档的类型判断CMM或是OMM测量工具。其他的由量测人员手动维护。  <br>
            OMM :Optical Measuring Machine (投影仪),
            CMM:(三次元)
            Parts Numbers：导出excel之后由量测人员填入，只需要空出这个栏位即可。  <br>
            SUPPLIER MEASUREMENT RESULTS：就是上传的excel里的测量值，如果有一份excel的数据和另一份excel里数据，除了测量值都一样，那就是第二次测量，数据填到‘2’里，最多会有五次测量值。  <br>
            Judgement：SUPPLIER MEASUREMENT RESULTS的所有的值都在上下差异值之内那就是ok，如有任何一次不符那就是NOT OK，并用红色标示出SUPPLIER MEASUREMENT RESULTS的哪个。  <br>
        </ul>
    </div>
</body>
</html>