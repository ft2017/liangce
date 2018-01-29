
function getPatchCellA001(k) {
    if (k === 1) {
        return getPatchCellsA0601_1();
    }
    if (k === 2) {
        return getPatchCellsA0601_2();
    }
    if (k === 3) {
        return getPatchCellsA0601_3();
    }
    if (k === 4) {
        //   return getPatchCellsA0601_4();
    }
    
    //B0329
    if (k === 5) {
        return getPatchCellsA0601_5();
    }
  
}

function getPatchCellsA0601_1() {

//    function styleSubTotal(source2) {
//        var subtotal = {bgc: colorStepEnd, fm: "money|¥|2|none", dsd: "ed", cal: true};
//        return    mergeJSON(subtotal, source2);
//    }
    var cells = [];
    cells.push(
            {sheet: 1, row: 113, col: 2, json: {data: '合計（含稅）：'}},
            {sheet: 1, row: 113, col: 3, json: styleSubTotal({data: '=C111*1.17'})},
            {sheet: 1, row: 113, col: 4, json: styleSubTotal({data: '=D111*1.17'})},
            {sheet: 1, row: 113, col: 5, json: styleSubTotal({data: '=E111*1.17'})},
            {sheet: 1, row: 113, col: 6, json: styleSubTotal({data: '=F111*1.17'})},
            {sheet: 1, row: 113, col: 7, json: styleSubTotal({data: '=G111*1.17'})},
            {sheet: 1, row: 113, col: 8, json: styleSubTotal({data: '=H111*1.17'})},
    //
            {sheet: 1, row: 112, col: 3, json: styleSubTotalMoney("$", {data: '=C111/6.35'})},
            {sheet: 1, row: 112, col: 4, json: styleSubTotalMoney("$", {data: '=D111/6.35'})},
            {sheet: 1, row: 112, col: 5, json: styleSubTotalMoney("$", {data: '=E111/6.35'})},
            {sheet: 1, row: 112, col: 6, json: styleSubTotalMoney("$", {data: '=FC111/6.35'})},
            {sheet: 1, row: 112, col: 7, json: styleSubTotalMoney("$", {data: '=G111/6.35'})},
            {sheet: 1, row: 112, col: 8, json: styleSubTotalMoney("$", {data: '=H111/6.35'})},
    //
            {sheet: 1, row: 113, col: 2, json: {data: '合計（含稅）：'}},
            {sheet: 1, row: 113, col: 3, json: styleSubTotal({data: '=C111*1.17'})},
            {sheet: 1, row: 113, col: 4, json: styleSubTotal({data: '=D111*1.17'})},
            {sheet: 1, row: 113, col: 5, json: styleSubTotal({data: '=E111*1.17'})},
            {sheet: 1, row: 113, col: 6, json: styleSubTotal({data: '=F111*1.17'})},
            {sheet: 1, row: 113, col: 7, json: styleSubTotal({data: '=G111*1.17'})},
            {sheet: 1, row: 113, col: 8, json: styleSubTotal({data: '=H111*1.17'})},
            {sheet: 1, row: 114, col: 2, json: {data: '運費：'}},
    // LAST ONE ============================================================================================
            {sheet: 1, row: 1, col: 1, json: {data: ""}}
    );
    return cells;
}

function getPatchCellsA0601_2() {
    var cells = [];
    cells.push(
            {sheet: 1, row: 89, col: 1, json: {data: "10-5）"}},
            {sheet: 1, row: 89, col: 2, json: {data: '遮蔽費用：'}},
            {sheet: 1, row: 89, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 89, col: 4, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 89, col: 5, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 89, col: 6, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 89, col: 7, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 89, col: 8, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 90, col: 1, json: {data: "10-6）"}},
            {sheet: 1, row: 90, col: 2, json: {data: ' 印刷費用：'}},
            {sheet: 1, row: 90, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 90, col: 4, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 90, col: 5, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 90, col: 6, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 90, col: 7, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 90, col: 8, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 91, col: 1, json: {data: "10-7）"}},
            {sheet: 1, row: 91, col: 2, json: {data: '镭雕費用：'}},
            {sheet: 1, row: 91, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 91, col: 4, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 91, col: 5, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 91, col: 6, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 91, col: 7, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 91, col: 8, json: styleInput({fm: "money|¥|2|none", data: "0.00"})},
            {sheet: 1, row: 92, col: 1, json: {data: "10-8）"}},
            {sheet: 1, row: 93, col: 1, json: {data: "10-9）"}},
    //[[A0606]]
//            {sheet: 1, row: 94, col: 3, json: styleSubTotal({data: "=C86*(SUM(C87:C91))*(1+(1-C92/100))*C93"})},
//            {sheet: 1, row: 94, col: 4, json: styleSubTotal({data: "=D86*(SUM(D87:D91))*(1+(1-D92/100))*D93"})},
//            {sheet: 1, row: 94, col: 5, json: styleSubTotal({data: "=E86*(SUM(E87:E91))*(1+(1-E92/100))*E93"})},
//            {sheet: 1, row: 94, col: 6, json: styleSubTotal({data: "=F86*(SUM(F87:F91))*(1+(1-F92/100))*F93"})},
//            {sheet: 1, row: 94, col: 7, json: styleSubTotal({data: "=G86*(SUM(G87:G91))*(1+(1-G92/100))*G93"})},
//            {sheet: 1, row: 94, col: 8, json: styleSubTotal({data: "=H86*(SUM(H87:H91))*(1+(1-H92/100))*H93"})},
            {sheet: 1, row: 94, col: 3, json: styleSubTotal({data: "=(C86*(SUM(C87:C88))+SUM(C89:C91))*(1+(1-C92/100))*C93"})},
            {sheet: 1, row: 94, col: 4, json: styleSubTotal({data: "=(D86*(SUM(D87:D88))+SUM(D89:D91))*(1+(1-D92/100))*D93"})},
            {sheet: 1, row: 94, col: 5, json: styleSubTotal({data: "=(E86*(SUM(E87:E88))+SUM(E89:E91))*(1+(1-E92/100))*E93"})},
            {sheet: 1, row: 94, col: 6, json: styleSubTotal({data: "=(F86*(SUM(F87:F88))+SUM(F89:F91))*(1+(1-F92/100))*F93"})},
            {sheet: 1, row: 94, col: 7, json: styleSubTotal({data: "=(G86*(SUM(G87:G88))+SUM(G89:G91))*(1+(1-G92/100))*G93"})},
            {sheet: 1, row: 94, col: 8, json: styleSubTotal({data: "=(H86*(SUM(H87:H88))+SUM(H89:H91))*(1+(1-H92/100))*H93"})},
//            {sheet: 1, row: 94, col: 4, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})},
//            {sheet: 1, row: 94, col: 5, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})},
//            {sheet: 1, row: 94, col: 6, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})},
//            {sheet: 1, row: 94, col: 7, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})},
//            {sheet: 1, row: 94, col: 8, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})},
    // LAST ONE ============================================================================================
            {sheet: 1, row: 1, col: 1, json: {data: ""}}
    );
    return cells;
}


function getPatchCellsA0601_3() {
    var cells = [];
    cells.push(
            {sheet: 1, row: 24, col: 3, json: styleSubTotal({data: '=SUM(C19:C23)'})},
            {sheet: 1, row: 24, col: 4, json: styleSubTotal({data: '=SUM(D19:D23)'})},
            {sheet: 1, row: 24, col: 5, json: styleSubTotal({data: '=SUM(E19:E23)'})},
            {sheet: 1, row: 24, col: 6, json: styleSubTotal({data: '=SUM(F19:F23)'})},
            {sheet: 1, row: 24, col: 7, json: styleSubTotal({data: '=SUM(G19:G23)'})},
            {sheet: 1, row: 24, col: 8, json: styleSubTotal({data: '=SUM(H19:H23)'})},
            {sheet: 1, row: 22, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0"})},
            {sheet: 1, row: 22, col: 4, json: styleInput({fm: "money|¥|2|none", data: "0"})},
            {sheet: 1, row: 22, col: 5, json: styleInput({fm: "money|¥|2|none", data: "0"})},
            {sheet: 1, row: 22, col: 6, json: styleInput({fm: "money|¥|2|none", data: "0"})},
            {sheet: 1, row: 22, col: 7, json: styleInput({fm: "money|¥|2|none", data: "0"})},
            {sheet: 1, row: 22, col: 8, json: styleInput({fm: "money|¥|2|none", data: "0"})},
    //MOQ
            {sheet: 1, row: 14, col: 2, json: {data: 'MOQ：'}},
            {sheet: 1, row: 22, col: 2, json: {data: '专用测试设备费用：'}}
    );
    return cells;
}


//B0329
// 2-9) 难易系数
// 计算公式為：旧版压铸費總额* “难易系数” = 新版的压铸費
function XXXgetPatchCellsA0601_5() {
    var cells = [];
    cells.push(


            {sheet: 1, row: 49, col: 1, json: {data: "XXX"}},//for debug
            {sheet: 1, row: 49, col: 2, json: {data: "難度係數 "}},
            {sheet: 1, row: 49, col: 3, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 4, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 5, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 6, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 7, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 8, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            //影響到的計算小計
            // {sheet: 1, row: 50, col: 3, json: styleSubTotal({data: setNaToZero("C49*(C44+C45)*(1+(1-C47/100))/C16")})},
            {sheet: 1, row: 50, col: 3, json: styleSubTotal({data: setNaToZero("C49*(C44+C45)*(1+(1-C47/100))/C16")})},
            {sheet: 1, row: 50, col: 4, json: styleSubTotal({data: setNaToZero("D49*(D44+D45)*(1+(1-D47/100))/D16")})},
            {sheet: 1, row: 50, col: 5, json: styleSubTotal({data: setNaToZero("E49*(E44+E45)*(1+(1-E47/100))/E16")})},
            {sheet: 1, row: 50, col: 6, json: styleSubTotal({data: setNaToZero("F49*(F44+F45)*(1+(1-F47/100))/F16")})},
            {sheet: 1, row: 50, col: 7, json: styleSubTotal({data: setNaToZero("G49*(G44+G45)*(1+(1-G47/100))/G16")})},
            {sheet: 1, row: 50, col: 8, json: styleSubTotal({data: setNaToZero("H49*(H44+H45)*(1+(1-H47/100))/H16")})},
       
        // USD1.00 = RMB6.65
            {sheet: 1, row: 25, col: 1, json: {data: "YYY"}},//for debug
           
            {sheet: 1, row: 25, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C24/6.65)'}},
            {sheet: 1, row: 25, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D24/6.65)'}},
            {sheet: 1, row: 25, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E24/6.65)'}},
            {sheet: 1, row: 25, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F24/6.65)'}},
            {sheet: 1, row: 25, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G24/6.65)'}},
            {sheet: 1, row: 25, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H24/6.65)'}},
       //BY wunan
            // WRONG ROW, SHOULD BE 117
            // {sheet: 1, row: 116, col: 1, json: {data: "ZZZ"}},//for debug
           
            // {sheet: 1, row: 116, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C115/6.65)'}},
            // {sheet: 1, row: 116, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D115/6.65)'}},
            // {sheet: 1, row: 116, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E115/6.65)'}},
            // {sheet: 1, row: 116, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F115/6.65)'}},
            // {sheet: 1, row: 116, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G115/6.65)'}},
            // {sheet: 1, row: 116, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H115/6.65)'}},
       
            {sheet: 1, row: 117, col: 1, json: {data: "ZZZ"}},//for debug
           
            {sheet: 1, row: 117, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C116/6.65)'}},
            {sheet: 1, row: 117, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D116/6.65)'}},
            {sheet: 1, row: 117, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E116/6.65)'}},
            {sheet: 1, row: 117, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F116/6.65)'}},
            {sheet: 1, row: 117, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G116/6.65)'}},
            {sheet: 1, row: 117, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H116/6.65)'}},
       
    );
    return cells;
}



function getPatchCellsA0601_5() {
    var cells = [];
    cells.push(


            {sheet: 1, row: 49, col: 1, json: {data: "XXX"}},//for debug
            {sheet: 1, row: 49, col: 2, json: {data: "難度係數 "}},
            {sheet: 1, row: 49, col: 3, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 4, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 5, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 6, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 7, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 8, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            //影響到的計算小計
            // {sheet: 1, row: 50, col: 3, json: styleSubTotal({data: setNaToZero("C49*(C44+C45)*(1+(1-C47/100))/C16")})},
            {sheet: 1, row: 50, col: 3, json: styleSubTotal({data: setNaToZero("C49*(C44+C45)*(1+(1-C47/100))/C16")})},
            {sheet: 1, row: 50, col: 4, json: styleSubTotal({data: setNaToZero("D49*(D44+D45)*(1+(1-D47/100))/D16")})},
            {sheet: 1, row: 50, col: 5, json: styleSubTotal({data: setNaToZero("E49*(E44+E45)*(1+(1-E47/100))/E16")})},
            {sheet: 1, row: 50, col: 6, json: styleSubTotal({data: setNaToZero("F49*(F44+F45)*(1+(1-F47/100))/F16")})},
            {sheet: 1, row: 50, col: 7, json: styleSubTotal({data: setNaToZero("G49*(G44+G45)*(1+(1-G47/100))/G16")})},
            {sheet: 1, row: 50, col: 8, json: styleSubTotal({data: setNaToZero("H49*(H44+H45)*(1+(1-H47/100))/H16")})},
       
        // USD1.00 = RMB6.65
            {sheet: 1, row: 25, col: 1, json: {data: "YYY"}},//for debug
           
            {sheet: 1, row: 25, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C24/6.65)'}},
            {sheet: 1, row: 25, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D24/6.65)'}},
            {sheet: 1, row: 25, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E24/6.65)'}},
            {sheet: 1, row: 25, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F24/6.65)'}},
            {sheet: 1, row: 25, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G24/6.65)'}},
            {sheet: 1, row: 25, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H24/6.65)'}},
      
            {sheet: 1, row: 117, col: 1, json: {data: "ZZZ"}},//for debug
           
            {sheet: 1, row: 117, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C116/6.65)'}},
            {sheet: 1, row: 117, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D116/6.65)'}},
            {sheet: 1, row: 117, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E116/6.65)'}},
            {sheet: 1, row: 117, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F116/6.65)'}},
            {sheet: 1, row: 117, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G116/6.65)'}},
            {sheet: 1, row: 117, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H116/6.65)'}},
       



    );
    return cells;
}
