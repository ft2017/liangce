
//console.log("---patch-A0602.js---");
function getPatchA0606(k) {
    function get1() {
        var cells = [];
        cells.push(
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

