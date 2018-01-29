var colorStep = "#A9BCF5";
var colorStepEnd = "#E6E6E6";
var colorSect = "#837E7C"; //bgc: colorSect, fm: "money|¥|2|none", dsd: "ed", cal: true
var colorDdl = "#F9E79F"; //#82E0AA  
var colorInput = "#F4D03F"; // 
var colorVersion = "#98AFC7"; // 
function styleSubTotal(source2) {
    var subtotal = {bgc: colorStepEnd, fm: "money|¥|2|none", dsd: "ed", cal: true};
    return    mergeJSON(subtotal, source2);
}
function styleSubTotalMoney(money, source2) {
    var subtotal = {bgc: colorStepEnd, fm: "money|" + money + "|2|none", dsd: "ed", cal: true};
    return    mergeJSON(subtotal, source2);
}
function styleInput(source2) {
    var basic = {bgc: colorInput, ta: "right"};
    return    mergeJSON(basic, source2);
}

function setNaToZero(str) {
    return   "=IF(ISNA(" + str + "),0,(" + str + "))";
}
function setNaToEmpty(str) {
    return   "=IF(ISNA(" + str + "),,(" + str + "))";
}


function mergeJSON(source1, source2) {
    /*
     * Properties from the Souce1 object will be copied to Source2 Object.
     * Note: This method will return a new merged object, Source1 and Source2 original values will not be replaced.
     * */
    var mergedJSON = Object.create(source2); // Copying Source2 to a new Object

    for (var attrname in source1) {
        if (mergedJSON.hasOwnProperty(attrname)) {
            if (source1[attrname] != null && source1[attrname].constructor == Object) {
                /*
                 * Recursive call if the property is an object,
                 * Iterate the object and set all properties of the inner object.
                 */
                mergedJSON[attrname] = mergeJSON(source1[attrname], mergedJSON[attrname]);
            }

        } else {//else copy the property from source1
            mergedJSON[attrname] = source1[attrname];
        }
    }

    return mergedJSON;
}
