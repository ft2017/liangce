



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="http://10.10.1.80:8080/static/t100/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
 <body>





      <div class="container-fluid">
        <a class='btn btn-primary btn-lg' href='http://portal.fulltech-metal.com/'>企業入口網站</a>&nbsp;
            <a class='btn btn-primary btn-lg' href='http://10.10.0.108'>FT2018 企業內部自主開發</a>&nbsp;
<!-- <h1>FT2018 企業內部自主開發 压铸/模具 開發</h1> -->

<!-- Main jumbotron for a primary marketing message or call to action -->
   <div class="jumbotron">
     <div class="container-fluid">
       <h1 class="display-3">FT2018量测需求说明</h1>
       <!--<p> 關鍵技術底層和開發部署境簡述。</p>-->
       <p><a class="btn btn-primary btn-lg" href="http://10.10.0.100/cust001/app001v3/" role="button">FT2018 量测 &raquo;</a></p>
     </div>
   </div>

   <div class="container-fluid">
     <!-- Example row of columns -->
     <div class="row">
       <div class="col-md-4">
         <h2>ITEM</h2>
         <p>量测人员手动维护好在要上传的excel里，一般都会放在最右边的栏位,ITEM具有唯一性,量测人员最终决定这个值放在上传文档的H位。</p>
         <!--<img src="img/1.png" weiht="100px"/>-->

         <!-- <p>單獨的額外需求，會單獨說明。 </p> -->

          <!-- <p> <a class='btn btn-primary' href='http://10.10.0.111'>直接訪問正在開發的 Web App</a></p>… -->

         <!-- <p><a class="btn btn-secondary" href="http://10.10.0.111" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
       </div>
       <div class="col-md-4">
         <h2>B列的DIMENSION / SPECIFICATION</h2>
         <p>取自提供源文档的图纸值和上下偏差合并为一个栏位。</p>
</pre>


         <!-- <p><a class="btn btn-primary" href="http://10.10.0.112" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
        </div>
       <div class="col-md-4">
         <h2>D列的SC/CC</h2>
         <p>根据不同客户会有不同要求，暂时只需要给出这个列，内容由量测人员手动维护。</p>
         <!-- <p><a class="btn btn-secondary" href="#" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
       </div>
     </div>
     <div class="row">
       <div class="col-md-4">
         <h2>E列的CONTROL METHOD</h2>
         <p>根据源文档的类型判断CMM或是OMM测量工具。其他的由量测人员手动维护。 </p>
         <!-- <p>用戶使用【電腦|平板|手機】的流覽器，連上局網，必要的登入信息，即可訪問。 </p> -->
         <!-- <p>單獨的額外需求，會單獨說明。 </p> -->

          <!-- <p> <a class='btn btn-primary' href='http://10.10.0.111'>直接訪問正在開發的 Web App</a></p>… -->

         <!-- <p><a class="btn btn-secondary" href="http://10.10.0.111" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
       </div>
       <div class="col-md-4">
         <h2>F列的Parts Numbers</h2>
        <p>内容由量测人员手动维护。如和I6的内容相同，可以编写程式自动带出。</p>
     

         <!-- <p><a class="btn btn-primary" href="http://10.10.0.112" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
        </div>
       <div class="col-md-4">
         <h2>G列到K列SUPPLIER MEASUREMENT RESULTS的12345</h2>
         <p>由源文件的测量值带出。 多个源文件的 图纸值和上下偏差一样，同时只有一个测量值。即把源文件测量值补充到2345。</p>
         
         <!-- <p><a class="btn btn-secondary" href="#" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
       </div>
         <div class="col-md-4">
         <h2>M和N列的Judgement</h2>
         <p>根据前面12345是否全部在B列范围内来判断。全部符合则OK，否则为NG。 NG的同时把前面不在范围内的记录和NG的栏位同时红色显示。 “基准参考”暂定由量测人员手动维护。</p>
        
         <!-- <p><a class="btn btn-secondary" href="#" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
       </div>
         <div class="col-md-4">
         <h2>上传按钮</h2>
         <p>希望一个按钮点击之后多选文件上传，一般情况下不会超过25个。同一列可能会由多个文件上下拼接。上传的文件可能是同时需要上下拼接并且按照六项的方式扩展测量值。 并且命名相同的要归属同一列，如：A-1,A-2,A-3，B-1，B-2，B-3六个合并，应为
         A-1 + B-1的量测值
        A-2 + B-2的量测值
        A-3 + B-3的量测值
        已和量测石敏峰约定后缀为-N形式表示一列，前面按照不同样品区分。 </p>
         <!-- <p><a class="btn btn-secondary" href="#" role="button">直接訪問正在開發的 Web App &raquo;</a></p> -->
       </div>
     </div>



   </div> <!-- /container -->


</div>
</body>
</html>
