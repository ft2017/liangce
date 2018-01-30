<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery-1.10.2.js"></script>

        <script type="text/javascript">

            document.getElementById("div0").style.visibility = "hidden";//隐藏
            document.getElementById("div1").style.visibility = "hidden";//隐藏
            document.getElementById("div2").style.visibility = "hidden";//隐藏

            var init = self.setInterval("clock()", 1)
            function clock()
            {
                FillForm();
                window.clearInterval(init);
            }
            function FillForm() {
                form1.ZAZFingerActivex.OcxWidth = 128;
                form1.ZAZFingerActivex.OcxHeight = 144;
                form1.ZAZFingerActivex.width = form1.ZAZFingerActivex.OcxWidth;
                form1.ZAZFingerActivex.height = form1.ZAZFingerActivex.OcxHeight;
                return true;
            }


            function displaymessage1()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;
                var spCharLen = form1.CharLen.value;
                var spTimeOut = 5;
                form1.fingerCode1.value = "";
                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;
                form1.ZAZFingerActivex.CharLen = spCharLen;
                form1.ZAZFingerActivex.FingerCode = "";
                form1.ZAZFingerActivex.TimeOut = spTimeOut;

                var mesg = form1.ZAZFingerActivex.ZAZGetImgCode();
                if (mesg == "0")
                {
                    form1.fingerCode1.value = form1.ZAZFingerActivex.FingerCode;

                } else
                {
                    form1.fingerCode1.value = "";
                }
            }

            function displaymessage2()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;
                var spCharLen = form1.CharLen.value;
                var spTimeOut = 5;
                form1.fingerCode2.value = "";
                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;
                form1.ZAZFingerActivex.CharLen = spCharLen;
                form1.ZAZFingerActivex.FingerCode = "";
                form1.ZAZFingerActivex.TimeOut = spTimeOut;
                var mesg = form1.ZAZFingerActivex.ZAZGetImgCode();
                if (mesg == "0")
                {
                    form1.fingerCode2.value = form1.ZAZFingerActivex.FingerCode;
                } else
                {
                    form1.fingerCode2.value = "";
                }

            }

            function displaymessage3()
            {//13418710770 李
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;
                var spCharLen = form1.CharLen.value;
                var spTimeOut = 5;
                form1.fingerCode3.value = "";
                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;
                form1.ZAZFingerActivex.CharLen = spCharLen;
                form1.ZAZFingerActivex.FingerCode = "";
                form1.ZAZFingerActivex.TimeOut = spTimeOut;
                var mesg = form1.ZAZFingerActivex.ZAZRegFinger();
                if (mesg == "0")
                {
                    form1.fingerCode3.value = form1.ZAZFingerActivex.FingerCode;
                } else
                {
                    form1.fingerCode3.value = "";
                    alert(mesg);
                }

            }


            function Match()
            {
                var spSrc = "";
                var spDst = "";
                var spResult = 0;
                spSrc = form1.fingerCode1.value;
                spDst = form1.fingerCode2.value;
                spResult = form1.ZAZFingerActivex.ZAZMatch(spSrc, spDst);
                form1.getResult.value = spResult;
            }

            function SaveToFile()
            {
                var spFileName;
                spFileName = form1.FileName.value;
                form1.ZAZFingerActivex.ZAZSaveImg(spFileName);
                alert(spFileName);
            }

            function SaveToFilecolor()
            {

                var spFileName, spFileNamec, bmpcolor;
                var spFileName = form1.FileName.value;
                var spFileNamec = form1.FileNamec.value;
                var bmpcolor = form1.FileNamect;

                var spResult = form1.ZAZFingerActivex.ZAZCRATEBMP(spFileName, spFileNamec, 0);
                alert(spResult);
            }


            function WriteNote()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;

                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;

                var spNotePage, spContent, spResult;
                spNotePage = form1.eNotePage.value;
                spContent = form1.eWriteContent.value;

                spResult = form1.ZAZFingerActivex.ZAZWriteInfo(spNotePage, spContent);
                if (spResult !== 0)
                {
                    alert("写入事本失败");
                } else
                {
                    alert("写入事本成功");
                }
            }

            function ReadNote()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;

                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;

                var spNotePage, spContent;
                spNotePage = form1.eNotePage.value;
                spContent = '';

                spContent = form1.ZAZFingerActivex.ZAZReadInfo(spNotePage);
                form1.eReadContent.value = spContent;

            }

            function Addfp()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;
                var spfpno = form1.FPno.value;
                var spfpchar = form1.fingerCode1.value;

                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;

                var spResult = "";
                spResult = form1.ZAZFingerActivex.ZAZADDFinger(spfpno, spfpchar);
                alert(spResult);
            }
            function Delfp()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;
                var spfpno = form1.FPdel.value;


                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;

                var spResult = "";
                spResult = form1.ZAZFingerActivex.ZAZDelFinger(spfpno);
                alert(spResult);
            }

            function Delallfp()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;



                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;

                var spResult = "";
                spResult = form1.ZAZFingerActivex.ZAZEmptyFinger();
                alert(spResult);
            }

            function GotoPortal()
            {

            }
            function pasuser(form) {
                location = "../project-rfq/portal.php";
//                $.post("loginCheck.php", {name: form.id.value, pass: form.pass.value})
//                        .done(function (data) {
//                            console.log("xxx");
//                            alert("Data Loaded: " + data);
//                        });

//                if (form.id.value == "JavaScript") {
//                    if (form.pass.value == "Kit") {
//                        location = "page2.html"
//                    } else {
//                        alert("Invalid Password")
//                    }
//                } else {
//                    alert("Invalid UserID")
//                }
            }
            function SearchFp()
            {

                var x = document.getElementById("showResult");


                //var spDeviceType = form1.DeviceType.value;
                var spDeviceType = 2;

                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;
                var spTimeOut = 5;

                var spfpstart = form1.FPstart.value;
                var spfpend = form1.FPend.value;

                form1.ZAZFingerActivex.spDeviceType = spDeviceType;
                form1.ZAZFingerActivex.spComPort = spComPort;
                form1.ZAZFingerActivex.spBaudRate = spBaudRate;
                form1.ZAZFingerActivex.TimeOut = spTimeOut;

                var spResult = "";

                spResult = form1.ZAZFingerActivex.ZAZSearchFinger(spfpstart, spfpend);



                $("#TOGO").hide(500);
                if (spResult == "0")
                {
                    var fpidd = form1.ZAZFingerActivex.SearchID;
                    //     alert("搜索到相同指纹ID：" + fpidd);
//                    x.innerHTML = "<h1>" +Date()+ "<br>Got ID=" + fpidd + "</h1>";
                    // x.innerHTML = fpidd;
                    $.post("finger-login-checker-v2.php", {finger_id: form1.ZAZFingerActivex.SearchID,device_id:"abc987"})
                            .done(function (data) {
                                if (data === "ok999") {
                                    x.innerHTML = "";
                                    $("#TOGO").show(500);
                                    //   alert("msg: " + data);
                                } else {
                                    $("#TOGO").hide(500);
                                   //       alert("DEBUG: "+data);
                                    x.innerHTML = "<h1>(finger-login-checker)指紋機或指紋ID未註冊到本應用，請回饋給應用管理人員。</h1>" + "<h3>" + Date() + "</h3>";
                                }                              
                            });

                } else
                {
                    $("#TOGO").hide(500);
                    //      alert("搜索失败");
                    x.innerHTML = "<h1>(finger-login-checker)指紋輸入不成功，請點擊 [ 輸入指纹 ] 再試一次</h1>" + "<h3>" + Date() + "</h3>";

                }

            }




            function Setsoundled()
            {
                var spDeviceType = form1.DeviceType.value;
                var spComPort = form1.ComPort.value;
                var spBaudRate = form1.BaudRate.value;
                var spledsound = form1.ledsound.value;
                var spcontrol = form1.control.value;
                var spResult = "";

                spResult = form1.ZAZFingerActivex.ZAZLEDSound(spledsound, spcontrol);
                if (spResult == "0")
                {
                    alert("成功");
                } else
                {
                    alert("失败");
                }
            }

        </script>
    </head>
    <body>
        <center>

            <h1><u>指紋登錄</u></h1>

            <form action="" method="post" name="form1" id="form1"> 

                <table style="display: none" width="600" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#01077A" height="30">
                    <tr>
                        <td width="100%">
                            <div align="center"><font size="+2" color="red">Test Fingerprint Reading</font></div>
                        </td>        
                    </tr>
                </table>  

                <object
                    id="ZAZFingerActivex"
                    TYPE="application/x-itst-activex"
                    WIDTH="0" HEIGHT="0"
                    clsid="{87772C8D-3C8C-4E55-A886-5BA5DA384424}">
                </object>

                <div style="display: none">
                    <p>
                        <label>连接设置：</label>  
                        <br></br>
                        <label for="DeviceType">设备类型：</label>
                        <input name="DeviceType" width="75px" type="text" id="DeviceType" value="2" />(0：有驱动USB设备，1：串口设备，2：无驱UDISK设备)
                        <br></br>
                        <label for="ComPort">串口端口：</label>
                        <input name="ComPort" width="75px" type="text" id="ComPort" value="1" />(1-16)
                        <br></br>
                        <label for="BaudRate">波特率   ：</label>
                        <input name="BaudRate" width="75px" type="text" id="BaudRate" value="6" />(1:9600/9600,2:19200/9600,4:38400/9600,6:57600/9600,12:115200/9600)
                    </p>
                    <p>
                        <label for="CharLen">特征长度：</label>
                        <input name="CharLen" width="75px" type="text" id="CharLen" value="512" />(默认:512 (512/1024))
                        <input type="button" name="SetCharLen" id="SetCharLen" value="设置特征长度" onclick="SetCharLenFun()"/>
                    </p>
                </div>


                <div style="display: none">
                    <label>校验测试：</label><br></br>

                    <label for="fingerCode1">指纹特征码1：</label>
                    <input name="fingerCode1" width="300px" type="text" id="fingerCode1" value="" />
                    <input type="button" name="btnGetFinger1" id="btnGetFinger1" value="取指纹1" onclick="displaymessage1()"/>
                    <br></br>
                    <label for="fingerCode2">指纹特征码2：</label>
                    <input name="fingerCode2" width="300px" type="text" id="fingerCode2" value="" />
                    <input type="button" name="btnGetFinger2" id="btnGetFinger2" value="取指纹2" onclick="displaymessage2()"/>
                    <br></br>
                    <label for="fingerCode3">指纹模板：</label>
                    <input name="fingerCode3" width="300px" type="text" id="fingerCode3" value="" />
                    <input type="button" name="btnGetFinger3" id="btnGetFinger3" value="取指纹模板" onclick="displaymessage3()"/>
                    <br></br>
                    <label for="getResult">验证结果：</label>
                    <input name="getResult" width="300px" type="text" id="getResult" value="" />
                    <input type="button" name="btnGetMatchResult" id="btnGetMatchResult" value="验证两特征码" onclick="Match()"/>
                    <label for="getResult2">（50以下为不通过）</label>
                    <br></br>
                    <label for="FileName">保存文件名：</label>
                    <input name="FileName" width="300px" type="text" id="FileName" value="c:\fingerimg.bmp" />
                    <input type="button" name="btnFileName" id="btnFileName" value="保存到文件" onclick="SaveToFile()"/>

                    <br></br>
                    <label for="FileNamec">保存彩色图片：</label>
                    <input name="FileNamec" width="300px" type="text" id="FileNamec" value="c:\fingerimgclosr.bmp" />
                    <label for="FileNamect">颜色：</label>
                    <input name="FileNamect" width="300px" type="text" id="FileNamect" value="0" />
                    <label for="FileNamect">(0:红色 1:蓝色 2:绿色)</label>
                    <input type="button" name="btnFileNamec" id="btnFileNamec" value="保存到文件" onclick="SaveToFilecolor()"/>

                </div>
                <br></br>
                <div style="display: none">
                    <br>
                    <label>注册指纹：</label><br></br>
                    <label for="FPno">指纹ID：</label>
                    <input name="FPno" width="1px" type="text" id="FPno" value="0" /> 
                    <input type="button" name="btnAddFp" id="btnAddFp" value="注册指纹" onclick="Addfp()"/>
                    </br>
                    <br>
                    <label>删除指纹：</label><br></br>
                    <label for="FPdel">指纹ID：</label>
                    <input name="FPdel" width="1px" type="text" id="FPdel" value="0" /> 
                    <input type="button" name="btnFPdel" id="btnFPdel" value="删除指纹" onclick="Delfp()"/>
                    <input type="button" name="btnFPEmpty" id="btnFPEmpty" value="清空指纹库" onclick="Delallfp()"/>
                    </br>
                    <br>
                </div>
                <div style="font-size: 32pt;display: none">
                    <label>搜索指纹：</label><br></br>
                    <label for="FPstart">开始ID：</label>
                    <input name="FPstart" width="1px" type="text" id="FPstart" value="0" /> 
                    <label for="FPend">结束ID：</label>
                    <input name="FPend" width="1px" type="text" id="FPend" value="1000" /> 
                </div>

                <div style="font-size: 32pt">
                    <input style="font-size: 32pt" type="button" name="btnSearchFp" id="btnSearchFp" value="輸入指纹" onclick="SearchFp()"/>
                </div>
                <div id="TOGO" style="display: none">
                    <input style="font-size: 32pt" type="button" value="進入應用" onClick="pasuser(this.form)">
                </div>
                </br>





                <br></br>
                <div style="display: none">
                    <label>读写记事本：</label><br></br>
                    <label for="eNotePage">读写页码：</label>
                    <input name="eNotePage" width="75px" type="text" id="eNotePage" value="0" />
                    <label for="btnReadNote">（从0开始，最多可存16页，每页最大32个字节）</label>
                    <br />
                    </br>
                    <label for="eWriteContent">写入内容：</label>
                    <input name="eWriteContent" width="300px" type="text" id="eWriteContent" value="" />
                    <input type="button" name="btnWriteNote" id="btnWriteNote" value="写记录本" onclick="WriteNote()"/>
                    <br />
                    </br>
                    <label for="eReadContent">读出内容：</label>
                    <input name="eReadContent" width="300px" type="text" id="eReadContent" value="" />
                    <input type="button" name="btnReadNote" id="btnReadNote" value="读记事本" onclick="ReadNote()"/>

                    <br></br>
                    <div>
                        <label for="soundled">灯声控制</label>
                        <input name="ledsound" width="75px" type="text" id="ledsound" value="3" />
                        <label for="ledsound">（红灯3，绿灯4，声音5）</label>
                        <input name="control" width="75px" type="text" id="control" value="0" />
                        <label for="control">（开0，关1）</label>
                        <br></br>
                        <input type="button" name="btnsoundled" id="btnsoundled" value="设置" onclick="Setsoundled()"/>

                    </div>
                    <br></br>

                </div>
                <div id="showResult">
                </div>
            </form>
        </center>
    </body>
</html>
