//B0329
function getPatchCellB0329(k) {
    if (k === 1) {
        return getPatchCellsB0329_1();
    }
    if (k === 2) {
        // return getPatchCellsA0601_2();
    }
    if (k === 3) {
        // return getPatchCellsA0601_3();
    }
    if (k === 4) {
        //   return getPatchCellsA0601_4();
    }
    
    //B0329
    if (k === 5) {
        // return getPatchCellsA0601_5();
    }
  
}


//B0329
// 2-9) 难易系数
// 计算公式為：旧版压铸費總额* “难易系数” = 新版的压铸費
function getPatchCellsB0329_1() {
    var cells = [];
    cells.push(


            // {sheet: 1, row: 49, col: 1, json: {data: "XXX"}},//for debug
            {sheet: 1, row: 49, col: 1, json: {data: "2-9）"}},//for debug
            {sheet: 1, row: 49, col: 2, json: {data: "難度係數 "}},
            {sheet: 1, row: 49, col: 3, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 4, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 5, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 6, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 7, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 49, col: 8, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            
            // ***IMPORTANT***
            // 之前有補丁插入row22,
            // 我們仍用補丁前的位置計算,
            // 需要調整到...???
            //影響到的計算小計
            // {sheet: 1, row: 50, col: 3, json: styleSubTotal({data: setNaToZero("C49*(C44+C45)*(1+(1-C47/100))/C16")})},
            // {sheet: 1, row: 50, col: 3, json: styleSubTotal({data: setNaToZero("C49*(C44+C45)*(1+(1-C47/100))/C16")})},
            // {sheet: 1, row: 50, col: 4, json: styleSubTotal({data: setNaToZero("D49*(D44+D45)*(1+(1-D47/100))/D16")})},
            // {sheet: 1, row: 50, col: 5, json: styleSubTotal({data: setNaToZero("E49*(E44+E45)*(1+(1-E47/100))/E16")})},
            // {sheet: 1, row: 50, col: 6, json: styleSubTotal({data: setNaToZero("F49*(F44+F45)*(1+(1-F47/100))/F16")})},
            // {sheet: 1, row: 50, col: 7, json: styleSubTotal({data: setNaToZero("G49*(G44+G45)*(1+(1-G47/100))/G16")})},
            // {sheet: 1, row: 50, col: 8, json: styleSubTotal({data: setNaToZero("H49*(H44+H45)*(1+(1-H47/100))/H16")})},
       
            // 16在22之前, 不必動
            //其它要各加1
            {sheet: 1, row: 50, col: 3, json: styleSubTotal({data: setNaToZero("C49*(C45+C46)*(1+(1-C48/100))/C16")})},
            {sheet: 1, row: 50, col: 4, json: styleSubTotal({data: setNaToZero("D49*(D45+D46)*(1+(1-D48/100))/D16")})},
            {sheet: 1, row: 50, col: 5, json: styleSubTotal({data: setNaToZero("E49*(E45+E46)*(1+(1-E48/100))/E16")})},
            {sheet: 1, row: 50, col: 6, json: styleSubTotal({data: setNaToZero("F49*(F45+F46)*(1+(1-F48/100))/F16")})},
            {sheet: 1, row: 50, col: 7, json: styleSubTotal({data: setNaToZero("G49*(G45+G46)*(1+(1-G48/100))/G16")})},
            {sheet: 1, row: 50, col: 8, json: styleSubTotal({data: setNaToZero("H49*(H45+H46)*(1+(1-H48/100))/H16")})},
       


        // USD1.00 = RMB6.65
            // {sheet: 1, row: 25, col: 1, json: {data: "YYY"}},//for debug
           
            {sheet: 1, row: 25, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C24/6.65)'}},
            {sheet: 1, row: 25, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D24/6.65)'}},
            {sheet: 1, row: 25, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E24/6.65)'}},
            {sheet: 1, row: 25, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F24/6.65)'}},
            {sheet: 1, row: 25, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G24/6.65)'}},
            {sheet: 1, row: 25, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H24/6.65)'}},
       //BY wunan
            
            // {sheet: 1, row: 117, col: 1, json: {data: "ZZZ"}},//for debug
           
            {sheet: 1, row: 117, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C116/6.65)'}},
            {sheet: 1, row: 117, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D116/6.65)'}},
            {sheet: 1, row: 117, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E116/6.65)'}},
            {sheet: 1, row: 117, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F116/6.65)'}},
            {sheet: 1, row: 117, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G116/6.65)'}},
            {sheet: 1, row: 117, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H116/6.65)'}},
       
    );
    return cells;
}


