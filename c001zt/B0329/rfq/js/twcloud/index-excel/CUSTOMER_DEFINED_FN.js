

function getCellsInfo() {
    function getSegmentFormat(i, data) {
        var arrA = [4, 113];
        if (isItemInArr(i, arrA)) {
//            return  "<td></td>"
            return  "";

        }
//        return  "<td align='center'>" + data + "</td>";
        return   data;

    }
//    var colorStep = "#A9BCF5";
//    var colorStepEnd = "#E6E6E6";
//    var colorSect = "#837E7C"; //bgc: colorSect, fm: "money|¥|2|none", dsd: "ed", cal: true
//    var colorDdl = "#F9E79F"; //#82E0AA  
//    var colorInput = "#F4D03F"; // 

    var arrStepEnd = [23, 24, 38, 48, 52, 59, 64, 69, 73, 77, 83, 91, 95, 99, 104, 105, 110, 111, 112];


    function getTitleFormat(i, data) {
        var arrA = [15, 28, 39, 49, 53, 60, 65, 70, 74, 78, 84, 92, 96, 100];
        if (isItemInArr(i, arrA)) {
//            return  "<td align='center' style='background:#A9BCF5'>" + data + "</td>";
            return   data;
        } else if (isItemInArr(i, arrStepEnd)) {
//            return  "<td align='center' style='background:#E6E6E6'>" + data + "</td>";
            return   data;
        }
//        return  "<td align='center'>" + data + "</td>";
        return   data;

    }

    var str = "getCellsInfo==>";
    var cellDataA, cellDataB
    var cellDataX = new Array(6);
    for (var i = 1; i < 113; i++) {
        cellDataA = SHEET_API.getCell(SHEET_API_HD, 1, i, 1);
        cellDataB = SHEET_API.getCell(SHEET_API_HD, 1, i, 2);
//        cellDataC = SHEET_API.getCell(SHEET_API_HD, 1, i, 3);
//        cellDataD = SHEET_API.getCell(SHEET_API_HD, 1, i, 4);
        for (var arrIndex = 0; arrIndex < 6; arrIndex++) {
            cellDataX[arrIndex] = SHEET_API.getCell(SHEET_API_HD, 1, i, 3 + arrIndex);
        }


        str += getSegmentFormat(i, cellDataA.data);//不顯示導出字樣

//        str += "<td>" + cellDataB.data + "</td>";
        str += getTitleFormat(i, cellDataB.data);//不顯示導出字樣




//        str += "<td>" + cellDataC.data + "</td>";
//        str += "<td>" + cellDataD.data + "</td>";
        for (var arrIndex = 0; arrIndex < 6; arrIndex++) {

//             str += "<td>" + cellDataX[arrIndex].data + "</td>";
            str += getDataFormat(i, cellDataX[arrIndex].data);
        }
    }
//    console.log(str);
}

function CUSTOM_BUTTON_CLICK_CALLBACK_FN003(value, row, column, sheetId, cellObj, store) {
    alert("CUSTOM_BUTTON_CLICK_CALLBACK_FN003");
    //NOTE: 5/19 11:54 end user asking to export as real Excel with functions on cells
    var download_url = "";

    var datav2 = getCellsInfo();


    $.post("php-excel/generate-excel.php", {
// 
//    $.post("php-excel/01sample.php", {
        name: "Mark",
        city: "昆山"
    },
            function (data, status) {
                if (status === "success") {
                    console.log(data);
                    download_url = data;
                    var cells = [];
                    cells.push({
                        sheet: 1,
                        row: 5,
                        col: 1,
//                        json: { data: "下載", link:data} 
                        json: {data: data}
                    }, {
                        sheet: 1,
                        row: 114,
                        col: 1,
//                        json: { data: "下載", link:data} 
                        json: {data: data}
                    });
                    SHEET_API.updateCells(SHEET_API_HD, cells);

                } else {
                    console.log("CUSTOM_BUTTON_CLICK_CALLBACK_FN002 failed");
                }
            });

    return;

//    var dataVal = "CUSTOM_BUTTON_CLICK_CALLBACK_FN is called and cell button is clicked @ Row: " + row + "; Colum: " + column;
//    var cells = [{sheet: sheetId, row: 12, col: 2, json: {data: dataVal}}];
//	SHEET_API.updateCells(SHEET_API_HD, cells);}
//    console.log("=== dump sheets info ===");
//    var json = SHEET_API.getSheetTabData(SHEET_API_HD);
//    console.log(Ext.encode(json));


    //http://www.enterprisesheet.com/api/docs/manageDataAPIs/getJsonData.html
    var json = SHEET_API.getJsonData(SHEET_API_HD);
//alert(Ext.encode(json));
//    console.log(Ext.encode(json));
//    console.log("=== JSON.stringify(json) ===");
//    console.log(JSON.stringify(json))
    function visitJson(json) {
        for (var key in json) {
            console.log("Key:" + key + " Val:" + json[key]);
        }
    }

    function visitJsonCells(json) {

//        for (var key in json["cells"]) { // 畫面上會一直往右邊的col跑
//            console.log("Key:" + key + " Val:" + json["cells"][key]);
//        }

        for (var key = 0; key < 6; key++) {//
            console.log("Key:" + key + " Val:" + json["cells"][key]);
            for (var key2 in json["cells"][key]) {
                console.log("Key2:" + key + " Val2:" + json["cells"][key][key2]);
            }
        }
    }

//  visitJsonCells(json);
//    console.log("=== >>> temp001c <<< CUSTOM_BUTTON_CLICK_CALLBACK_FN ===");
    //   var htmlArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 166, 167, 168, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 131, 106, 107, 108, 109, 110, 111, 112, 113, 114];

//<META HTTP-EQUIV="REFRESH" CONTENT="10.0;URL=download.php">



//----------------------
    OpenWindow = window.open("", "newwin", "height=640, width=800,toolbar=no,scrollbars=yes,menubar=no");
//写成一行
    OpenWindow.document.write(" <head>");
    OpenWindow.document.write("<TITLE>A001</TITLE>");
    OpenWindow.document.write(" <head>");
    OpenWindow.document.write('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />');
    OpenWindow.document.write('<script  type="text/javascript" src="./js/jquery/jquery-1.12.3.min.js"></script>');
    OpenWindow.document.write('<script  type="text/javascript" src="./js/jquery/html-table-to-excel.js"></script>');
    OpenWindow.document.write(" </head>");
    OpenWindow.document.write("<BODY BGCOLOR=#ffffff>");
// OpenWindow.document.write("<h1>Hello!中文</h1>");
// OpenWindow.document.write("New window opened!");
// width: 200px;
    var strCss = '<style type="text/css"> \
        table \
        { \
            border-collapse: collapse; \
            border: none; \
            \
        } \
        td \
        { \
            border: solid #000 1px; \
        } \
    </style> \
    ';
    OpenWindow.document.write(strCss);
//     OpenWindow.document.write('<h1>ver2</h1><a href="#" id="test" onClick="fnExcelReport2();">含基本加總</a>');
    OpenWindow.document.write('<h1>ver3 <a href="#" id="test" onClick="fnExcelReport();">下載 Excel 檔案</a></h1>');
//    OpenWindow.document.write('<h1>ver3 <a href="#" id="test" onClick="fnExcelReport2( "abcde");">下載 Excel 檔案</a></h1>');

//    OpenWindow.document.write('<h1>ver4 <a href="#" id="test2" onClick="fnExcelReport2("abc");">v4下載 Excel 檔案</a></h1>');
    var str = "<table  id='myTable'>";
    var row = 0;
//   for (var i = 0; i < htmlArr.length; i++) {
//        row = htmlArr[i];
//        str += "<tr>";
//        str += '<td style="width:100px">' + row + '</td>';
//        str += '<td style="width:160px">' + strSeg[row] + '</td>';
//        str += '<td style="width:800px">' + getRowText(row) + '</td>';
//        for (var col = 0; col < submitCnt; col++) {
//            str += '<td style="width:400px">' + dataGrp[col][row] + '</td>';
//        }
//        str += "</tr>";
//    }

    function isItemInArr(val, arr) {
        // var arrA=[0,1,1,1,2,2,2];
        for (var i = 0; i < arr.length; i++) {
            if (val === arr[i]) {
                return true;
            }
        }
        return false;


    }
    function getSegmentFormat(i, data) {
        var arrA = [4, 113];
        if (isItemInArr(i, arrA)) {
            return  "<td></td>"
        }
        return  "<td align='center'>" + data + "</td>";

    }
//    var colorStep = "#A9BCF5";
//    var colorStepEnd = "#E6E6E6";
//    var colorSect = "#837E7C"; //bgc: colorSect, fm: "money|¥|2|none", dsd: "ed", cal: true
//    var colorDdl = "#F9E79F"; //#82E0AA  
//    var colorInput = "#F4D03F"; // 

    var arrStepEnd = [23, 24, 38, 48, 52, 59, 64, 69, 73, 77, 83, 91, 95, 99, 104, 105, 110, 111, 112];


    function getTitleFormat(i, data) {
        var arrA = [15, 28, 39, 49, 53, 60, 65, 70, 74, 78, 84, 92, 96, 100];
        if (isItemInArr(i, arrA)) {
            return  "<td align='center' style='background:#A9BCF5'>" + data + "</td>";
        } else if (isItemInArr(i, arrStepEnd)) {
            return  "<td align='center' style='background:#E6E6E6'>" + data + "</td>";
        }
        return  "<td align='center'>" + data + "</td>";

    }
    function getDataAlign(i) {
        var arrDataCenter = [7, 8, 9, 10, 12, 17, 18, 29, 40, 65, 70, 74, 79, 85, ];
        if (isItemInArr(i, arrDataCenter)) {
            return  " align='center' ";//#F9E79F
        }
        return " align='right' ";
    }
    function getDataFormat(i, data) {
        var arrDdl = [10, 12, 40, 65, 70, 74, 79];
        var arrInput = [11, 16, 19, 20, 21, 22, 33, 42, 47, 50, 54, 57, 61, 68, 71, 75, 80, 81, 82, 86, 87, 88, 89, 90, 93, 94, 97, 101, 103, 108, 109];

        var strAlign = getDataAlign(i);


        //      var colorStepEnd = "#E6E6E6";
        if (isItemInArr(i, arrInput)) {
            return  "<td " + strAlign + " style='background:#F4D03F'>" + data + "</td>";//#F9E79F
        } else if (isItemInArr(i, arrDdl)) {
            return  "<td " + strAlign + "  style='background:#F9E79F'>" + data + "</td>";//#F9E79F
        } else if (isItemInArr(i, arrStepEnd)) {
            return  "<td " + strAlign + "  style='background:#E6E6E6'>" + data + "</td>";//#F9E79F
        }
        return  "<td " + strAlign + ">" + data + "</td>";

    }



    var cellDataB, cellDataC, cellDataD;
    var cellDataX = new Array(6);
    for (var i = 1; i < 113; i++) {
        cellDataA = SHEET_API.getCell(SHEET_API_HD, 1, i, 1);
        cellDataB = SHEET_API.getCell(SHEET_API_HD, 1, i, 2);
//        cellDataC = SHEET_API.getCell(SHEET_API_HD, 1, i, 3);
//        cellDataD = SHEET_API.getCell(SHEET_API_HD, 1, i, 4);
        for (var arrIndex = 0; arrIndex < 6; arrIndex++) {
            cellDataX[arrIndex] = SHEET_API.getCell(SHEET_API_HD, 1, i, 3 + arrIndex);
        }


        str += "<tr>";
//        str += "<td>" + i + "</td>";

        str += getSegmentFormat(i, cellDataA.data);//不顯示導出字樣

//        str += "<td>" + cellDataB.data + "</td>";
        str += getTitleFormat(i, cellDataB.data);//不顯示導出字樣




//        str += "<td>" + cellDataC.data + "</td>";
//        str += "<td>" + cellDataD.data + "</td>";
        for (var arrIndex = 0; arrIndex < 6; arrIndex++) {

//             str += "<td>" + cellDataX[arrIndex].data + "</td>";
            str += getDataFormat(i, cellDataX[arrIndex].data);
        }

        str += "</tr>";
    }
    str += "</table>";
//    alert(str);
    OpenWindow.document.write(str);
    //fnExcelReport();
//     OpenWindow.document.write("<script>alert('Can we?');fnExcelReport();alert('Did it work?')</script>");
    OpenWindow.document.write("</BODY>");
    OpenWindow.document.write("</HTML>");
    OpenWindow.document.close();




}


function getData(cellData) {
    if (cellData.cal) {
        var formula = cellData.arg;
        var value = cellData.value;
        var result = cellData.data;
        var format = cellData.fm;
        var detailFormat = cellData.dfm;
        return value;
    } else {
        var result = cellData.data;
        var format = cellData.fm;
        var detailFormat = cellData.dfm;
        return result;
    }
}


function CUSTOM_BUTTON_CLICK___MAKE_EXCEL(value, row, column, sheetId, cellObj, store) {
    //NOTE: 5/19 11:54 end user asking to export as real Excel with functions on cells
    var json_by_user = SHEET_API.getJsonData(SHEET_API_HD);
    console.log(Ext.encode(json_by_user));
    var cellData = "";

//    var data_in_json = [{pos: "A1", data: "很有挑戰"}, {pos: "A2", data: "思考"}, {pos: "A3", data: "行動"}];
    var data_in_json = [];


    var sheet = 1;
    var row = 0;
    var col = 0;

    var isDataInColD = false;
    var isDataInColE = false;
    var isDataInColF = false;
    var isDataInColG = false;
    var isDataInColH = false;


    var isDataInCol = "ABC";

    cellData = SHEET_API.getCell(SHEET_API_HD, sheet, 7, 4);
    if (cellData.data.length > 0) {
        isDataInColD = true;
        isDataInCol += "D";
    } else {
        isDataInCol += ".";
    }
    cellData = SHEET_API.getCell(SHEET_API_HD, sheet, 7, 5);
    if (cellData.data.length > 0) {
        isDataInColE = true;
        isDataInCol += "E";
    } else {
        isDataInCol += ".";
    }
    cellData = SHEET_API.getCell(SHEET_API_HD, sheet, 7, 6);
    if (cellData.data.length > 0) {
        isDataInColF = true;
        isDataInCol += "F";
    } else {
        isDataInCol += ".";
    }
    cellData = SHEET_API.getCell(SHEET_API_HD, sheet, 7, 7);
    if (cellData.data.length > 0) {
        isDataInColG = true;
        isDataInCol += "G";
    } else {
        isDataInCol += ".";
    }
    cellData = SHEET_API.getCell(SHEET_API_HD, sheet, 7, 8);
    if (cellData.data.length > 0) {
        isDataInColH = true;
        isDataInCol += "H";
    } else {
        isDataInCol += ".";
    }










    for (var i = 1; i < 120; i++) {

        // to show version info
        //  if (i > 10 && i < 110) {
        if (i > 5 && i < 110) {
            cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 1);
            var one_json = {pos: "A" + i, data: cellData.data};
            data_in_json.push(one_json);
        }
        // col B
        cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 2);
        var one_json = {pos: "B" + i, data: cellData.data};
        data_in_json.push(one_json);

        // col C
        cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 3);
        var one_json = {pos: "C" + i, data: cellData.data};
        data_in_json.push(one_json);

        // col D
        if (isDataInColD) {
            cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 4);
            var one_json = {pos: "D" + i, data: cellData.data};
            data_in_json.push(one_json);
        }
//        cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 4);
//        var one_json = {pos: "D" + i, data: cellData.data};
//        data_in_json.push(one_json);
        if (isDataInColE) {
            cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 5);
            var one_json = {pos: "E" + i, data: cellData.data};
            data_in_json.push(one_json);
        }
        if (isDataInColF) {
            cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 6);
            var one_json = {pos: "F" + i, data: cellData.data};
            data_in_json.push(one_json);
        }
        if (isDataInColG) {
            cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 7);
            var one_json = {pos: "G" + i, data: cellData.data};
            data_in_json.push(one_json);
        }

        if (isDataInColH) {
            cellData = SHEET_API.getCell(SHEET_API_HD, sheet, i, 8);
            var one_json = {pos: "H" + i, data: cellData.data};
            data_in_json.push(one_json);
        }



    }








    $.post("php-excel/make-excel.php",
            {json_by_user: JSON.stringify(json_by_user), isDataInCol: isDataInCol, data: JSON.stringify(data_in_json)},
            function (data, status) {
                if (status === "success") {
                    // console.log(data);
                    console.log(" ...by php-excel/make-excel.php");
                    var cells = [];
                    cells.push({
                        sheet: 1,
                        row: 4,
                        col: 1,
                        json: {data: "下載", link: "http://" + data}
                    }, {
                        sheet: 1,
                       
                       //B0329
                        // row: 118, 由於新增 row49,by wunan
                         row: 119,
                        col: 1,
                        json: {data: "下載", link: "http://" + data}
                    });
                    SHEET_API.updateCells(SHEET_API_HD, cells);

                } else {
                    console.log("CUSTOM_BUTTON_CLICK____MAKE_EXCEL failed");
                }
            });

    return;

    // B0329, 應該只到這裡.



//    var dataVal = "CUSTOM_BUTTON_CLICK_CALLBACK_FN is called and cell button is clicked @ Row: " + row + "; Colum: " + column;
//    var cells = [{sheet: sheetId, row: 12, col: 2, json: {data: dataVal}}];
//	SHEET_API.updateCells(SHEET_API_HD, cells);}
//    console.log("=== dump sheets info ===");
//    var json = SHEET_API.getSheetTabData(SHEET_API_HD);
//    console.log(Ext.encode(json));


    //http://www.enterprisesheet.com/api/docs/manageDataAPIs/getJsonData.html
    var json = SHEET_API.getJsonData(SHEET_API_HD);
//alert(Ext.encode(json));
//    console.log(Ext.encode(json));
//    console.log("=== JSON.stringify(json) ===");
//    console.log(JSON.stringify(json))
    function visitJson(json) {
        for (var key in json) {
            console.log("Key:" + key + " Val:" + json[key]);
        }
    }

    function visitJsonCells(json) {

//        for (var key in json["cells"]) { // 畫面上會一直往右邊的col跑
//            console.log("Key:" + key + " Val:" + json["cells"][key]);
//        }

        for (var key = 0; key < 6; key++) {//
            console.log("Key:" + key + " Val:" + json["cells"][key]);
            for (var key2 in json["cells"][key]) {
                console.log("Key2:" + key + " Val2:" + json["cells"][key][key2]);
            }
        }
    }

//  visitJsonCells(json);
//    console.log("=== >>> temp001c <<< CUSTOM_BUTTON_CLICK_CALLBACK_FN ===");
    //   var htmlArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 166, 167, 168, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 131, 106, 107, 108, 109, 110, 111, 112, 113, 114];

//<META HTTP-EQUIV="REFRESH" CONTENT="10.0;URL=download.php">



//----------------------
    OpenWindow = window.open("", "newwin", "height=640, width=800,toolbar=no,scrollbars=yes,menubar=no");
//写成一行
    OpenWindow.document.write(" <head>");
    OpenWindow.document.write("<TITLE>A001</TITLE>");
    OpenWindow.document.write(" <head>");
    OpenWindow.document.write('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />');
    OpenWindow.document.write('<script  type="text/javascript" src="./js/jquery/jquery-1.12.3.min.js"></script>');
    OpenWindow.document.write('<script  type="text/javascript" src="./js/jquery/html-table-to-excel.js"></script>');
    OpenWindow.document.write(" </head>");
    OpenWindow.document.write("<BODY BGCOLOR=#ffffff>");
// OpenWindow.document.write("<h1>Hello!中文</h1>");
// OpenWindow.document.write("New window opened!");
// width: 200px;
    var strCss = '<style type="text/css"> \
        table \
        { \
            border-collapse: collapse; \
            border: none; \
            \
        } \
        td \
        { \
            border: solid #000 1px; \
        } \
    </style> \
    ';
    OpenWindow.document.write(strCss);
//     OpenWindow.document.write('<h1>ver2</h1><a href="#" id="test" onClick="fnExcelReport2();">含基本加總</a>');
    OpenWindow.document.write('<h1>ver3 <a href="#" id="test" onClick="fnExcelReport();">下載 Excel 檔案</a></h1>');
//    OpenWindow.document.write('<h1>ver3 <a href="#" id="test" onClick="fnExcelReport2( "abcde");">下載 Excel 檔案</a></h1>');

//    OpenWindow.document.write('<h1>ver4 <a href="#" id="test2" onClick="fnExcelReport2("abc");">v4下載 Excel 檔案</a></h1>');
    var str = "<table  id='myTable'>";
    var row = 0;
//   for (var i = 0; i < htmlArr.length; i++) {
//        row = htmlArr[i];
//        str += "<tr>";
//        str += '<td style="width:100px">' + row + '</td>';
//        str += '<td style="width:160px">' + strSeg[row] + '</td>';
//        str += '<td style="width:800px">' + getRowText(row) + '</td>';
//        for (var col = 0; col < submitCnt; col++) {
//            str += '<td style="width:400px">' + dataGrp[col][row] + '</td>';
//        }
//        str += "</tr>";
//    }

    function isItemInArr(val, arr) {
        // var arrA=[0,1,1,1,2,2,2];
        for (var i = 0; i < arr.length; i++) {
            if (val === arr[i]) {
                return true;
            }
        }
        return false;


    }
    function getSegmentFormat(i, data) {
        var arrA = [4, 113];
        if (isItemInArr(i, arrA)) {
            return  "<td></td>"
        }
        return  "<td align='center'>" + data + "</td>";

    }
//    var colorStep = "#A9BCF5";
//    var colorStepEnd = "#E6E6E6";
//    var colorSect = "#837E7C"; //bgc: colorSect, fm: "money|¥|2|none", dsd: "ed", cal: true
//    var colorDdl = "#F9E79F"; //#82E0AA  
//    var colorInput = "#F4D03F"; // 

    var arrStepEnd = [23, 24, 38, 48, 52, 59, 64, 69, 73, 77, 83, 91, 95, 99, 104, 105, 110, 111, 112];


    function getTitleFormat(i, data) {
        var arrA = [15, 28, 39, 49, 53, 60, 65, 70, 74, 78, 84, 92, 96, 100];
        if (isItemInArr(i, arrA)) {
            return  "<td align='center' style='background:#A9BCF5'>" + data + "</td>";
        } else if (isItemInArr(i, arrStepEnd)) {
            return  "<td align='center' style='background:#E6E6E6'>" + data + "</td>";
        }
        return  "<td align='center'>" + data + "</td>";

    }
    function getDataAlign(i) {
        var arrDataCenter = [7, 8, 9, 10, 12, 17, 18, 29, 40, 65, 70, 74, 79, 85, ];
        if (isItemInArr(i, arrDataCenter)) {
            return  " align='center' ";//#F9E79F
        }
        return " align='right' ";
    }
    function getDataFormat(i, data) {
        var arrDdl = [10, 12, 40, 65, 70, 74, 79];
        var arrInput = [11, 16, 19, 20, 21, 22, 33, 42, 47, 50, 54, 57, 61, 68, 71, 75, 80, 81, 82, 86, 87, 88, 89, 90, 93, 94, 97, 101, 103, 108, 109];

        var strAlign = getDataAlign(i);


        //      var colorStepEnd = "#E6E6E6";
        if (isItemInArr(i, arrInput)) {
            return  "<td " + strAlign + " style='background:#F4D03F'>" + data + "</td>";//#F9E79F
        } else if (isItemInArr(i, arrDdl)) {
            return  "<td " + strAlign + "  style='background:#F9E79F'>" + data + "</td>";//#F9E79F
        } else if (isItemInArr(i, arrStepEnd)) {
            return  "<td " + strAlign + "  style='background:#E6E6E6'>" + data + "</td>";//#F9E79F
        }
        return  "<td " + strAlign + ">" + data + "</td>";

    }



    var cellDataB, cellDataC, cellDataD;
    var cellDataX = new Array(6);
    for (var i = 1; i < 113; i++) {
        cellDataA = SHEET_API.getCell(SHEET_API_HD, 1, i, 1);
        cellDataB = SHEET_API.getCell(SHEET_API_HD, 1, i, 2);
//        cellDataC = SHEET_API.getCell(SHEET_API_HD, 1, i, 3);
//        cellDataD = SHEET_API.getCell(SHEET_API_HD, 1, i, 4);
        for (var arrIndex = 0; arrIndex < 6; arrIndex++) {
            cellDataX[arrIndex] = SHEET_API.getCell(SHEET_API_HD, 1, i, 3 + arrIndex);
        }


        str += "<tr>";
//        str += "<td>" + i + "</td>";

        str += getSegmentFormat(i, cellDataA.data);//不顯示導出字樣

//        str += "<td>" + cellDataB.data + "</td>";
        str += getTitleFormat(i, cellDataB.data);//不顯示導出字樣




//        str += "<td>" + cellDataC.data + "</td>";
//        str += "<td>" + cellDataD.data + "</td>";
        for (var arrIndex = 0; arrIndex < 6; arrIndex++) {

//             str += "<td>" + cellDataX[arrIndex].data + "</td>";
            str += getDataFormat(i, cellDataX[arrIndex].data);
        }

        str += "</tr>";
    }
    str += "</table>";
//    alert(str);
    OpenWindow.document.write(str);
    //fnExcelReport();
//     OpenWindow.document.write("<script>alert('Can we?');fnExcelReport();alert('Did it work?')</script>");
    OpenWindow.document.write("</BODY>");
    OpenWindow.document.write("</HTML>");
    OpenWindow.document.close();




}

function CUSTOM_BUTTON_CLICK_CALLBACK_FN(value, row, column, sheetId, cellObj, store) {

    var dataVal = "CUSTOM_BUTTON_CLICK_CALLBACK_FN is called and cell button is clicked @ Row: " + row + "; Colum: " + column;
    var cells = [{sheet: sheetId, row: 12, col: 2, json: {data: dataVal}}];
//	SHEET_API.updateCells(SHEET_API_HD, cells);}
    console.log("=== dump sheets info ===");
//    var json = SHEET_API.getSheetTabData(SHEET_API_HD);
//    console.log(Ext.encode(json));


    //http://www.enterprisesheet.com/api/docs/manageDataAPIs/getJsonData.html
    var json = SHEET_API.getJsonData(SHEET_API_HD);
//alert(Ext.encode(json));
//    console.log(Ext.encode(json));
//    console.log("=== JSON.stringify(json) ===");
//    console.log(JSON.stringify(json))
    function visitJson(json) {
        for (var key in json) {
            console.log("Key:" + key + " Val:" + json[key]);
        }
    }

    function visitJsonCells(json) {

//        for (var key in json["cells"]) { // 畫面上會一直往右邊的col跑
//            console.log("Key:" + key + " Val:" + json["cells"][key]);
//        }

        for (var key = 0; key < 6; key++) {//
            console.log("Key:" + key + " Val:" + json["cells"][key]);
            for (var key2 in json["cells"][key]) {
                console.log("Key2:" + key + " Val2:" + json["cells"][key][key2]);
            }
        }
    }



//    console.log("=== visitJson(json) === start");
//    visitJson(json);
//    console.log("=== visitJson(json) === end");
//    
//    var step2="=== visitJson(json[\"cells\"]) === ";
//    console.log(step2+"start");
//    visitJson(json["cells"]);
//    console.log(step2+" end");
//    visitJson(json);
    visitJsonCells(json);
    console.log("=== >>> temp001c <<< CUSTOM_BUTTON_CLICK_CALLBACK_FN ===");
    //   var htmlArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 166, 167, 168, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 131, 106, 107, 108, 109, 110, 111, 112, 113, 114];


//----------------------
    OpenWindow = window.open("", "newwin", "height=640, width=800,toolbar=no,scrollbars=yes,menubar=no");
//写成一行
    OpenWindow.document.write("<TITLE>A001</TITLE>");
    OpenWindow.document.write("<BODY BGCOLOR=#ffffff>");
// OpenWindow.document.write("<h1>Hello!中文</h1>");
// OpenWindow.document.write("New window opened!");
// width: 200px;
    var strCss = '<style type="text/css"> \
        table \
        { \
            border-collapse: collapse; \
            border: none; \
            \
        } \
        td \
        { \
            border: solid #000 1px; \
        } \
    </style> \
    ';
    OpenWindow.document.write(strCss);
    var str = "<table>";
    var row = 0;
//   for (var i = 0; i < htmlArr.length; i++) {
//        row = htmlArr[i];
//        str += "<tr>";
//        str += '<td style="width:100px">' + row + '</td>';
//        str += '<td style="width:160px">' + strSeg[row] + '</td>';
//        str += '<td style="width:800px">' + getRowText(row) + '</td>';
//        for (var col = 0; col < submitCnt; col++) {
//            str += '<td style="width:400px">' + dataGrp[col][row] + '</td>';
//        }
//        str += "</tr>";
//    }

    var cellDataB, cellDataC, cellDataD;
    for (var i = 1; i < 115; i++) {
        cellDataA = SHEET_API.getCell(SHEET_API_HD, 1, i, 1);
        cellDataB = SHEET_API.getCell(SHEET_API_HD, 1, i, 2);
        cellDataC = SHEET_API.getCell(SHEET_API_HD, 1, i, 3);
        cellDataD = SHEET_API.getCell(SHEET_API_HD, 1, i, 4);
        str += "<tr>";
        str += "<td>" + i + "</td>";
        str += "<td>" + cellDataA.data + "</td>";
        str += "<td>" + cellDataB.data + "</td>";
        str += "<td>" + cellDataC.data + "</td>";
        str += "<td>" + cellDataD.data + "</td>";
        str += "</tr>";
    }
    str += "</table>";
//    alert(str);
    OpenWindow.document.write(str);
    OpenWindow.document.write("</BODY>");
    OpenWindow.document.write("</HTML>");
    OpenWindow.document.close();
}
