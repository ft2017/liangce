
//console.log("---patch-A0602.js---");
function getPatchA0606(k) {
    function get1() {
        var cells = [];
        cells.push(
                {sheet: 1, row: 95, col: 3, json: styleSubTotal({data: '=(C87*(SUM(C88:C89))+(SUM(C90:C92)))*(1+(1-C93/100))*C94)'})},
                {sheet: 1, row: 95, col: 4, json: styleSubTotal({data: '=(C87*(SUM(C88:C89))+(SUM(C90:C92)))*(1+(1-C93/100))*C94)'})},
                {sheet: 1, row: 95, col: 5, json: styleSubTotal({data: '=(C87*(SUM(C88:C89))+(SUM(C90:C92)))*(1+(1-C93/100))*C94)'})},
                {sheet: 1, row: 95, col: 6, json: styleSubTotal({data: '=(C87*(SUM(C88:C89))+(SUM(C90:C92)))*(1+(1-C93/100))*C94)'})},
                {sheet: 1, row: 95, col: 7, json: styleSubTotal({data: '=(C87*(SUM(C88:C89))+(SUM(C90:C92)))*(1+(1-C93/100))*C94)'})},
                {sheet: 1, row: 95, col: 8, json: styleSubTotal({data: '=(C87*(SUM(C88:C89))+(SUM(C90:C92)))*(1+(1-C93/100))*C94)'})}, //
        //
        //
        // LAST ONE ============================================================================================
                {sheet: 1, row: 1, col: 1, json: {data: ""}}
        );
        return cells;
    }

    if (k === 1) {
        return get1();
    }
    if (k === 2) {
        return get2();
    }

}

