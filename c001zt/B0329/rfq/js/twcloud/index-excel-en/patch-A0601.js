
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

}

function getPatchCellsA0601_1() {

//    function styleSubTotal(source2) {
//        var subtotal = {bgc: colorStepEnd, fm: "money|¥|2|none", dsd: "ed", cal: true};
//        return    mergeJSON(subtotal, source2);
//    }
    var cells = [];
    cells.push(
            {sheet: 1, row: 113, col: 2, json: {data: 'Total Cost per part (RMB with VAT) :|合計（含稅）：'}},
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
//            {sheet: 1, row: 113, col: 2, json: {data: '合計（含稅）：'}},
//            {sheet: 1, row: 113, col: 3, json: styleSubTotal({data: '=C111*1.17'})},
//            {sheet: 1, row: 113, col: 4, json: styleSubTotal({data: '=D111*1.17'})},
//            {sheet: 1, row: 113, col: 5, json: styleSubTotal({data: '=E111*1.17'})},
//            {sheet: 1, row: 113, col: 6, json: styleSubTotal({data: '=F111*1.17'})},
//            {sheet: 1, row: 113, col: 7, json: styleSubTotal({data: '=G111*1.17'})},
//            {sheet: 1, row: 113, col: 8, json: styleSubTotal({data: '=H111*1.17'})},
            {sheet: 1, row: 114, col: 2, json: {data: 'Freight|運費：'}},
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