
//console.log("---patch-A0602.js---");
function getPatchA0602(k) {
    function get1() {
        var cells = [];
        cells.push(
                {sheet: 1, row: 106, col: 2, json: {data: "人工费/只 "}}, // 
                {sheet: 1, row: 106, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=C105*35/3600"}}, // 
                {sheet: 1, row: 106, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=D105*35/3600"}}, // 
                {sheet: 1, row: 106, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=E105*35/3600"}}, // 
                {sheet: 1, row: 106, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=F105*35/3600"}}, // 
                {sheet: 1, row: 106, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=G105*35/3600"}}, // 
                {sheet: 1, row: 106, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=H105*35/3600"}}, // 
                {sheet: 1, row: 108, col: 3, json: styleSubTotal({data: "=C106+C107"})}, // 
                {sheet: 1, row: 108, col: 4, json: styleSubTotal({data: "=D106+D107"})}, // 
                // [[A0613]]
                // {sheet: 1, row: 108, col: 5, json: styleSubTotal({data: "=E106+E07"})}, // BUG HERE
                {sheet: 1, row: 108, col: 5, json: styleSubTotal({data: "=E106+E107"})}, // BUG HERE


                {sheet: 1, row: 108, col: 6, json: styleSubTotal({data: "=F106+F107"})}, // 
                {sheet: 1, row: 108, col: 7, json: styleSubTotal({data: "=G106+G107"})}, // 
                {sheet: 1, row: 108, col: 8, json: styleSubTotal({data: "=H106+H107"})}, // 

        //
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
//    if (k === 2) {
//        return getPatchCellsA0601_2();
//    }
//    if (k === 3) {
//        return getPatchCellsA0601_3();
//    }

}

