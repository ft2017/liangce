/**
 * Enterprise Spreadsheet Solutions
 * Copyright(c) FeyaSoft Inc. All right reserved.
 * info@enterpriseSheet.com
 * http://www.enterpriseSheet.com
 * 
 * Licensed under the EnterpriseSheet Commercial License.
 * http://enterprisesheet.com/license.jsp
 * 
 * You need to have a valid license key to access this file.
 */
Ext.onReady(function () {

    Ext.QuickTips.init();
    /**
     * Define those 2 methods as global variable
     */
    SHEET_API = Ext.create('EnterpriseSheet.api.SheetAPI', {
        openFileByOnlyLoadDataFlag: true
    });

    //DOING LAYOUT
    SHEET_API_HD = SHEET_API.createSheetApp({
//        withoutTitlebar: false,
        withoutTitlebar: true,
        withoutSheetbar: false,
//        withoutToolbar: false,
        withoutToolbar: true,
        withoutContentbar: false,
//        withoutContentbar: true,
//        withoutSidebar: false
        withoutSidebar: true

    });
    // this is tab panel include main and details 
    var centralPanel = Ext.create('enterpriseSheet.templates.CenterPanel', {
    });
    Ext.create('Ext.Viewport', {
        layout: 'border',
        items: [centralPanel],
        listeners: {
            afterlayout: function (v, layout, eOpts) {
                // westPanel.selectNode();
            }
        }
    });
    //  NOTE:
    //  
    var colorStep = "#A9BCF5";
    var colorStepEnd = "#E6E6E6";
    var colorSect = "#837E7C"; //bgc: colorSect, fm: "money|¥|2|none", dsd: "ed", cal: true
    var colorDdl = "#F9E79F"; //#82E0AA  
    var colorInput = "#F4D03F"; // 
    var colorVersion = "#98AFC7"; // 

//
    //
    //
    //
//        var ddlMaterial = {data: "xxx", drop: Ext.encode({data: "xxx,yyy,zzz"})};
    var ddlMaterial = {bgc: colorDdl, ta: "center", data: "===材质规格===", drop: Ext.encode({data: "一。铝合金,AlSi10Mg,AlSi9Cu3,ADC12,A380,A413,A360,A356,二。锌合金 ,ZINC-2,ZINC-3,ZINC-5,ZINC-7,ZAMAK-8,三。镁合金 ,AZ91D,AM60,THX-AZ91D,THX-AM60"})};


    //挂镀铬，挂镀镍，挂镀沙丁镍，挂镀沙丁铬，
//拉丝镀铬，拉丝镀镍，
//挂镀黑铬，挂镀化学镍，
//挂镀枪黑，镀PVD
//滚镀镍
//滚镀化学镍，挂镀锌，滚镀锌
//    var ddlSurface = {bgc: colorDdl, ta: "center", data: "===表面要求===", drop: Ext.encode({data: "单清洗,烤漆前皮膜（含清洗）,铝合金一般皮膜（48H）,锌合金一般皮膜（48H),镁合金一般皮膜（24H),铝合金-特殊皮膜（   H）,锌合金-特殊皮膜（   H) ,特殊导电皮膜(  欧姆) ,粉體烤漆-A+級,粉體烤漆-A級 ,粉體烤漆-B級 ,液體烤漆-A+級 ,液體烤漆-A級 ,液體烤漆-B級 ,阳极氧化-A级 , 阳极氧化-B级 ,电泳-A级,电泳-B级 ,掛鍍-A級,掛鍍-B 級,滾鍍-A級,滾鍍-B級 ,高清洁度清洗（600um）,高清洁度清洗（400um）,高清洁度清洗（200um）,清洗鉻酸"})};

    var ddlSurface_data = "单清洗,烤漆前皮膜（含清洗）,铝合金一般皮膜（48H）,锌合金一般皮膜（48H),镁合金一般皮膜（24H),铝合金-特殊皮膜（   H）,锌合金-特殊皮膜（   H) ,特殊导电皮膜(  欧姆) ,粉體烤漆-A+級,粉體烤漆-A級 ,粉體烤漆-B級 ,液體烤漆-A+級 ,液體烤漆-A級 ,液體烤漆-B級 ,阳极氧化-A级 , 阳极氧化-B级 ,电泳-A级,电泳-B级 ,掛鍍-A級,掛鍍-B 級,滾鍍-A級,滾鍍-B級 ,高清洁度清洗（600um）,高清洁度清洗（400um）,高清洁度清洗（200um）,清洗鉻酸";



    var A0602_ddlSurface_data = ",挂镀铬,挂镀镍,挂镀沙丁镍,挂镀沙丁铬,拉丝镀铬,拉丝镀镍,挂镀黑铬,挂镀化学镍,挂镀枪黑,镀PVD,滚镀镍,滚镀化学镍,挂镀锌,滚镀锌";

    var ddlSurface = {bgc: colorDdl, ta: "center", data: "===表面要求===", drop: Ext.encode({data: ddlSurface_data + A0602_ddlSurface_data})};

    var ddlMachine = {bgc: colorDdl, ta: "center", data: "===适用机型===", drop: Ext.encode({data: "一。铝合金压铸合模费：,铝-125T,鋁-150T/160T/200T,鋁-250T/280T,鋁-350T/340T/400T,鋁-550T/530T/500T,鋁-630T/650T,鋁-800T/900T,鋁-1250T,鋁-1600T,鋁-2000T,鋁-2500T,鋁-3000T,二。锌合金压铸合模费：,鋅-快速机/4轴机,鋅-10T/5T,鋅-15T/20T,鋅-25T/30T/40T,鋅-50T/60T,鋅-80T/100T/125,鋅-150T,鋅-185/200T,鋅-250T,鋅-300T,三。镁合金压铸合模费：,鎂-150T,鎂-340T/400T,鎂-530T/660T,THX-鎂280T,THX-鎂650T"})};
//DOING...喷沙sand blasting 抛丸.震动研磨
    var ddlSand = {bgc: colorDdl, ta: "center", data: "===喷砂,抛丸,震动研磨===", drop: Ext.encode({data: "喷砂,抛丸,震动研磨"})};
    var ddlCold = {bgc: colorDdl, ta: "center", data: "===冷喷.热烧===", drop: Ext.encode({data: "冷冻去除毛刺,热能去除毛刺"})};
    var ddlStep9 = {bgc: colorDdl, ta: "center", data: "===皮膜处理===", drop: Ext.encode({data: "烤漆前清洗皮膜,一般清洗加皮膜,特殊要求皮膜,清洗,特殊清洗"})};
    var ddlMaching = {bgc: colorDdl, ta: "center", data: "===机加工===", drop: Ext.encode({data: "CNC机加工,传统机加工"})};
    var ddl079 = {bgc: colorDdl, ta: "center", data: "===皮膜处理===", drop: Ext.encode({data: "清洗,一般皮膜(48H),鎂合金一般皮膜(24H),高清洁度清洗(600um),高清洁度清洗(400um),高清洁度清洗(200um),特殊皮膜"})};

    //[[A0602]]
//    var ddl086Data = "粉體烤漆-A+級,粉體烤漆-A級 ,粉體烤漆-B級 ,液體烤漆-A+級 ,液體烤漆-A級 ,液體烤漆-B級 ,阳极氧化-A级 , 阳极氧化-B级 ,电泳-A级,电泳-B级 ,掛鍍-A級,掛鍍-B 級,滾鍍-A級,滾鍍-B級 ,高清洁度清洗（600um）,高清洁度清洗（400um）,高清洁度清洗（200um）,清洗鉻酸";

    //[[A0603]]
    var ddl086Data = "粉體烤漆-A+級,粉體烤漆-A級 ,粉體烤漆-B級 ,液體烤漆-A+級 ,液體烤漆-A級 ,液體烤漆-B級 ,阳极氧化-A级 , 阳极氧化-B级 ,电泳-A级,电泳-B级 ,掛鍍-A級,掛鍍-B 級,滾鍍-A級,滾鍍-B級";
    var ddl086 = {bgc: colorDdl, ta: "center", data: "===表面要求(2)===", drop: Ext.encode({data: ddl086Data})};

    //[[A0606]] 其它特殊处理”一栏需细化，除了会议中提及的渗补、时效
    var ddlSpecialData = "　,渗补,时效";//全形空白
    var ddlSpecial = {bgc: colorDdl, ta: "center", data: "===其它特殊处理===", drop: Ext.encode({data: ddlSpecialData})};

//var colorStep="#E6E6E6";
//var colorStepEnd="#A9BCF5";


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



    var json = {
        fileName: "RFQ",
        sheets: [{id: 1, name: "RFQ", actived: true, color: "orange"},
            {id: 2, name: "LOOKUP", actived: true, color: "blue"},
            //            
//            [[A0629]]
//            {id: 3, name: "LOOKUP2", actived: true, color: "blue"},
            {id: 3, name: "LOOKUP2", actived: true, color: "blue"},
            {id: 5, name: "LOOKUP04", actived: true, color: "blue"},
            {id: 11, name: "DDL079", actived: true, color: "blue"},
            {id: 13, name: "MOQ", actived: true, color: "blue"},
//            {id: 9, name: "Remark", actived: true, color: "green"},
        ],
//        floatings: [
//            {sheet: 1, name: "colGroups", ftype: "colgroup", json: "[{level:1, span:[2,3]}, {level:1, span:[4,6]}]"},
//        ],
        cells: [
            {sheet: 13, row: 0, col: 0, json: {ta: "center", height: 20, va: "middle"}},
            {sheet: 13, row: 0, col: 1, json: {ta: "center", data: "A", width: 200}},
            {sheet: 13, row: 0, col: 2, json: {fm: "number", ta: "center", data: "B", width: 100}},
            {sheet: 13, row: 1, col: 1, json: {ta: 'center', data: '压铸合模费：'}},
            {sheet: 13, row: 2, col: 1, json: {ta: 'center', data: '一。铝合金压铸合模费：'}},
            {sheet: 13, row: 3, col: 1, json: {ta: 'center', data: '铝-125T'}},
            {sheet: 13, row: 4, col: 1, json: {ta: 'center', data: '鋁-150T/160T/200T'}},
            {sheet: 13, row: 5, col: 1, json: {ta: 'center', data: '鋁-250T/280T'}},
            {sheet: 13, row: 6, col: 1, json: {ta: 'center', data: '鋁-350T/340T/400T'}},
            {sheet: 13, row: 7, col: 1, json: {ta: 'center', data: '鋁-550T/530T/500T'}},
            {sheet: 13, row: 8, col: 1, json: {ta: 'center', data: '鋁-630T/650T'}},
            {sheet: 13, row: 9, col: 1, json: {ta: 'center', data: '鋁-800T/900T'}},
            {sheet: 13, row: 10, col: 1, json: {ta: 'center', data: '鋁-1250T'}},
            {sheet: 13, row: 11, col: 1, json: {ta: 'center', data: '鋁-1600T'}},
            {sheet: 13, row: 12, col: 1, json: {ta: 'center', data: '鋁-2000T'}},
            {sheet: 13, row: 13, col: 1, json: {ta: 'center', data: '鋁-2500T'}},
            {sheet: 13, row: 14, col: 1, json: {ta: 'center', data: '鋁-3000T'}},
            {sheet: 13, row: 15, col: 1, json: {ta: 'center', data: '二。锌合金压铸合模费：'}},
            {sheet: 13, row: 16, col: 1, json: {ta: 'center', data: '鋅-快速机/4轴机'}},
            {sheet: 13, row: 17, col: 1, json: {ta: 'center', data: '鋅-10T/5T'}},
            {sheet: 13, row: 18, col: 1, json: {ta: 'center', data: '鋅-15T/20T'}},
            {sheet: 13, row: 19, col: 1, json: {ta: 'center', data: '鋅-25T/30T/40T'}},
            {sheet: 13, row: 20, col: 1, json: {ta: 'center', data: '鋅-50T/60T'}},
            {sheet: 13, row: 21, col: 1, json: {ta: 'center', data: '鋅-80T/100T/125'}},
            {sheet: 13, row: 22, col: 1, json: {ta: 'center', data: '鋅-150T'}},
            {sheet: 13, row: 23, col: 1, json: {ta: 'center', data: '鋅-185/200T'}},
            {sheet: 13, row: 24, col: 1, json: {ta: 'center', data: '鋅-250T'}},
            {sheet: 13, row: 25, col: 1, json: {ta: 'center', data: '鋅-300T'}},
            {sheet: 13, row: 26, col: 1, json: {ta: 'center', data: '三。镁合金压铸合模费：'}},
            {sheet: 13, row: 27, col: 1, json: {ta: 'center', data: '鎂-150T'}},
            {sheet: 13, row: 28, col: 1, json: {ta: 'center', data: '鎂-340T/400T'}},
            {sheet: 13, row: 29, col: 1, json: {ta: 'center', data: '鎂-530T/660T'}},
            {sheet: 13, row: 30, col: 1, json: {ta: 'center', data: 'THX-鎂280T'}},
            {sheet: 13, row: 31, col: 1, json: {ta: 'center', data: 'THX-鎂650T'}},
            {sheet: 13, row: 1, col: 2, json: {ta: 'center', data: 'MOQ'}},
            {sheet: 13, row: 2, col: 2, json: {ta: 'center', data: ''}},
            {sheet: 13, row: 3, col: 2, json: {ta: 'center', data: '2000'}},
            {sheet: 13, row: 4, col: 2, json: {ta: 'center', data: '2000'}},
            {sheet: 13, row: 5, col: 2, json: {ta: 'center', data: '2000'}},
            {sheet: 13, row: 6, col: 2, json: {ta: 'center', data: '1500'}},
            {sheet: 13, row: 7, col: 2, json: {ta: 'center', data: '1200'}},
            {sheet: 13, row: 8, col: 2, json: {ta: 'center', data: '1200'}},
            {sheet: 13, row: 9, col: 2, json: {ta: 'center', data: '1000'}},
            {sheet: 13, row: 10, col: 2, json: {ta: 'center', data: '800'}},
            {sheet: 13, row: 11, col: 2, json: {ta: 'center', data: '600'}},
            {sheet: 13, row: 12, col: 2, json: {ta: 'center', data: '600'}},
            {sheet: 13, row: 13, col: 2, json: {ta: 'center', data: '500'}},
            {sheet: 13, row: 14, col: 2, json: {ta: 'center', data: '500'}},
            {sheet: 13, row: 15, col: 2, json: {ta: 'center', data: ''}},
            {sheet: 13, row: 16, col: 2, json: {ta: 'center', data: '15000'}},
            {sheet: 13, row: 17, col: 2, json: {ta: 'center', data: '10000'}},
            {sheet: 13, row: 18, col: 2, json: {ta: 'center', data: '10000'}},
            {sheet: 13, row: 19, col: 2, json: {ta: 'center', data: '8000'}},
            {sheet: 13, row: 20, col: 2, json: {ta: 'center', data: '5000'}},
            {sheet: 13, row: 21, col: 2, json: {ta: 'center', data: '5000'}},
            {sheet: 13, row: 22, col: 2, json: {ta: 'center', data: '3000'}},
            {sheet: 13, row: 23, col: 2, json: {ta: 'center', data: '2500'}},
            {sheet: 13, row: 24, col: 2, json: {ta: 'center', data: '2000'}},
            {sheet: 13, row: 25, col: 2, json: {ta: 'center', data: '1500'}},
            {sheet: 13, row: 26, col: 2, json: {ta: 'center', data: ''}},
            {sheet: 13, row: 27, col: 2, json: {ta: 'center', data: '3500'}},
            {sheet: 13, row: 28, col: 2, json: {ta: 'center', data: '1500'}},
            {sheet: 13, row: 29, col: 2, json: {ta: 'center', data: '1000'}},
            {sheet: 13, row: 30, col: 2, json: {ta: 'center', data: '2500'}},
            {sheet: 13, row: 31, col: 2, json: {ta: 'center', data: '1000'}},
            // [[A0603]]  MOQ --- end




            // A0530 (start)

            {sheet: 11, row: 0, col: 0, json: {dsd: "", height: 20, va: "middle"}},
            {sheet: 11, row: 0, col: 1, json: {ta: "center", data: "A", width: 200}},
            {sheet: 11, row: 0, col: 2, json: {fm: "money|¥|2|none", ta: "center", data: "B", width: 100}},
            {sheet: 11, row: 1, col: 1, json: {data: '皮膜處理'}},
            {sheet: 11, row: 1, col: 2, json: {data: '費率'}},
            {sheet: 11, row: 2, col: 1, json: {data: '清洗'}},
            {sheet: 11, row: 2, col: 2, json: {data: '0.08'}},
            {sheet: 11, row: 3, col: 1, json: {data: '一般皮膜(48H)'}},
            {sheet: 11, row: 3, col: 2, json: {data: '0.2'}},
            {sheet: 11, row: 4, col: 1, json: {data: '鎂合金一般皮膜(24H)'}},
            {sheet: 11, row: 4, col: 2, json: {data: '0.2'}},
            {sheet: 11, row: 5, col: 1, json: {data: '高清洁度清洗(600um)'}},
            {sheet: 11, row: 5, col: 2, json: {data: '0.2'}},
            {sheet: 11, row: 6, col: 1, json: {data: '高清洁度清洗(400um)'}},
            {sheet: 11, row: 6, col: 2, json: {data: '0.3'}},
            {sheet: 11, row: 7, col: 1, json: {data: '高清洁度清洗(200um)'}},
            {sheet: 11, row: 7, col: 2, json: {data: '0.4'}},
            {sheet: 11, row: 8, col: 1, json: {data: '特殊皮膜'}},
            {sheet: 11, row: 8, col: 2, json: {data: '0.4'}},
            // A0530 (end)
            //------------------------
            {sheet: 9, row: 0, col: 0, json: {height: 20, va: "middle"}},
            {sheet: 9, row: 0, col: 1, json: {ta: "center", data: "A", width: 50}},
            {sheet: 9, row: 0, col: 2, json: {width: 450}},
//            {sheet: 9, row: 0, col: 3, json: {width: 450}},
            {sheet: 9, row: 1, col: 1, json: {ta: 'center', data: 'Item'}},
            {sheet: 9, row: 1, col: 2, json: {ta: 'center', data: 'Description'}},
            {sheet: 9, row: 2, col: 1, json: {ta: 'center', data: '1'}},
            {sheet: 9, row: 2, col: 2, json: {data: '標示出報價人員需要輸入的部份'}},
            {sheet: 9, row: 3, col: 2, json: {ti: "32px", data: '先實施下拉部份'}},
            {sheet: 9, row: 4, col: 2, json: {ti: "32px", data: '實施填入數值的部份'}},
            {sheet: 9, row: 5, col: 1, json: {ta: 'center', data: '2'}},
            {sheet: 9, row: 5, col: 2, json: {ti: "0px", data: '讓小計默認值為0'}}, //气密性测试 ： 
            {sheet: 9, row: 6, col: 1, json: {ta: 'center', data: '3'}},
            {sheet: 9, row: 6, col: 2, json: {ti: "0px", data: '計算气密性测试，採用LOOKUP04查表取率費'}}, //气密性测试 ： 
            {sheet: 9, row: 7, col: 1, json: {ta: 'center', data: '4'}},
            {sheet: 9, row: 7, col: 2, json: {ti: "0px", data: '計算筛选包装，採用LOOKUP04查表取率費。注意︰&改為中文'}}, //气密性测试 ： 
            {sheet: 9, row: 8, col: 1, json: {ta: 'center', data: ''}},
            {sheet: 9, row: 8, col: 2, json: {ti: "0px", data: '--- temp001c ---'}}, //气密性测试 ： 
            {sheet: 9, row: 9, col: 1, json: {ta: 'center', data: '1'}},
            {sheet: 9, row: 9, col: 2, json: {ti: "0px", data: 'meeting 5月9日(周一)下午，压铸人工费率/H '}}, //气密性测试 ： 
            {sheet: 9, row: 10, col: 2, json: {ti: "0px", data: '--- temp001d 5/11 18:39 ---'}}, //气密性测试 ： 
            {sheet: 9, row: 11, col: 1, json: {ta: 'center', data: '1'}},
            {sheet: 9, row: 11, col: 2, json: {ti: "0px", data: '導出含基本格式及方格底色 '}}, //气密性测试 ： 
            {sheet: 9, row: 12, col: 2, json: {ti: "0px", data: '--- to make real Excel file 5/19 11:44 ---'}}, //气密性测试 ： 
            {sheet: 9, row: 13, col: 1, json: {ta: 'center', data: '1'}},
            {sheet: 9, row: 13, col: 2, json: {ti: "0px", data: '用戶要求要有EXCEL公式'}}, //气密性测试 ： 
            //
            //
            //筛选&包装
            {sheet: 3, row: 0, col: 0, json: {ta: "center", height: 20, va: "middle"}},
            {sheet: 3, row: 0, col: 1, json: {ta: "center", data: "A", width: 200}},
            {sheet: 3, row: 0, col: 2, json: {fm: "money|¥|2|none", ta: "center", data: "B", width: 100}},
            {sheet: 3, row: 0, col: 3, json: {fm: "money|¥|2|none", ta: "center", data: "C", width: 100}},
            //[[A0603]] 無效
            {sheet: 3, row: 0, col: 4, json: {fm: "money||2|none", ta: "center", data: "D", width: 100}},
            //[[A0603]]
            {sheet: 3, row: 1, col: 1, json: {ta: 'center', data: '压铸合模费：'}},
            {sheet: 3, row: 2, col: 1, json: {ta: 'center', data: '一。铝合金压铸合模费：'}},
            {sheet: 3, row: 3, col: 1, json: {ta: 'center', data: '铝-125T'}},
            {sheet: 3, row: 4, col: 1, json: {ta: 'center', data: '鋁-150T/160T/200T'}},
            {sheet: 3, row: 5, col: 1, json: {ta: 'center', data: '鋁-250T/280T'}},
            {sheet: 3, row: 6, col: 1, json: {ta: 'center', data: '鋁-350T/340T/400T'}},
            {sheet: 3, row: 7, col: 1, json: {ta: 'center', data: '鋁-550T/530T/500T'}},
            {sheet: 3, row: 8, col: 1, json: {ta: 'center', data: '鋁-630T/650T'}},
            {sheet: 3, row: 9, col: 1, json: {ta: 'center', data: '鋁-800T/900T'}},
            {sheet: 3, row: 10, col: 1, json: {ta: 'center', data: '鋁-1250T'}},
            {sheet: 3, row: 11, col: 1, json: {ta: 'center', data: '鋁-1600T'}},
            {sheet: 3, row: 12, col: 1, json: {ta: 'center', data: '鋁-2000T'}},
            {sheet: 3, row: 13, col: 1, json: {ta: 'center', data: '鋁-2500T'}},
            {sheet: 3, row: 14, col: 1, json: {ta: 'center', data: '鋁-3000T'}},
            {sheet: 3, row: 15, col: 1, json: {ta: 'center', data: '二。锌合金压铸合模费：'}},
            {sheet: 3, row: 16, col: 1, json: {ta: 'center', data: '鋅-快速机/4轴机'}},
            {sheet: 3, row: 17, col: 1, json: {ta: 'center', data: '鋅-10T/5T'}},
            {sheet: 3, row: 18, col: 1, json: {ta: 'center', data: '鋅-15T/20T'}},
            {sheet: 3, row: 19, col: 1, json: {ta: 'center', data: '鋅-25T/30T/40T'}},
            {sheet: 3, row: 20, col: 1, json: {ta: 'center', data: '鋅-50T/60T'}},
            {sheet: 3, row: 21, col: 1, json: {ta: 'center', data: '鋅-80T/100T/125'}},
            {sheet: 3, row: 22, col: 1, json: {ta: 'center', data: '鋅-150T'}},
            {sheet: 3, row: 23, col: 1, json: {ta: 'center', data: '鋅-185/200T'}},
            {sheet: 3, row: 24, col: 1, json: {ta: 'center', data: '鋅-250T'}},
            {sheet: 3, row: 25, col: 1, json: {ta: 'center', data: '鋅-300T'}},
            {sheet: 3, row: 26, col: 1, json: {ta: 'center', data: '三。镁合金压铸合模费：'}},
            {sheet: 3, row: 27, col: 1, json: {ta: 'center', data: '鎂-150T'}},
            {sheet: 3, row: 28, col: 1, json: {ta: 'center', data: '鎂-340T/400T'}},
            {sheet: 3, row: 29, col: 1, json: {ta: 'center', data: '鎂-530T/660T'}},
            {sheet: 3, row: 30, col: 1, json: {ta: 'center', data: 'THX-鎂280T'}},
            {sheet: 3, row: 31, col: 1, json: {ta: 'center', data: 'THX-鎂650T'}},
            {sheet: 3, row: 1, col: 2, json: {ta: 'center', data: '壓鑄機台費率/H'}},
            {sheet: 3, row: 2, col: 2, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 3, col: 2, json: {ta: 'center', data: '150'}},
            {sheet: 3, row: 4, col: 2, json: {ta: 'center', data: '165'}},
            {sheet: 3, row: 5, col: 2, json: {ta: 'center', data: '185'}},
            {sheet: 3, row: 6, col: 2, json: {ta: 'center', data: '210'}},
            {sheet: 3, row: 7, col: 2, json: {ta: 'center', data: '260'}},
            {sheet: 3, row: 8, col: 2, json: {ta: 'center', data: '320'}},
            {sheet: 3, row: 9, col: 2, json: {ta: 'center', data: '430'}},
            {sheet: 3, row: 10, col: 2, json: {ta: 'center', data: '500'}},
            {sheet: 3, row: 11, col: 2, json: {ta: 'center', data: '715'}},
            {sheet: 3, row: 12, col: 2, json: {ta: 'center', data: '915'}},
            {sheet: 3, row: 13, col: 2, json: {ta: 'center', data: '990'}},
            {sheet: 3, row: 14, col: 2, json: {ta: 'center', data: '1110'}},
            {sheet: 3, row: 15, col: 2, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 16, col: 2, json: {ta: 'center', data: '85'}},
            {sheet: 3, row: 17, col: 2, json: {ta: 'center', data: '60'}},
            {sheet: 3, row: 18, col: 2, json: {ta: 'center', data: '80'}},
            {sheet: 3, row: 19, col: 2, json: {ta: 'center', data: '120'}},
            {sheet: 3, row: 20, col: 2, json: {ta: 'center', data: '135'}},
            {sheet: 3, row: 21, col: 2, json: {ta: 'center', data: '160'}},
            {sheet: 3, row: 22, col: 2, json: {ta: 'center', data: '170'}},
            {sheet: 3, row: 23, col: 2, json: {ta: 'center', data: '185'}},
            {sheet: 3, row: 24, col: 2, json: {ta: 'center', data: '200'}},
            {sheet: 3, row: 25, col: 2, json: {ta: 'center', data: '215'}},
            {sheet: 3, row: 26, col: 2, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 27, col: 2, json: {ta: 'center', data: '275'}},
            {sheet: 3, row: 28, col: 2, json: {ta: 'center', data: '350'}},
            {sheet: 3, row: 29, col: 2, json: {ta: 'center', data: '430'}},
            {sheet: 3, row: 30, col: 2, json: {ta: 'center', data: '320'}},
            {sheet: 3, row: 31, col: 2, json: {ta: 'center', data: '430'}},
            {sheet: 3, row: 1, col: 3, json: {ta: 'center', data: '人工費率/H'}},
            {sheet: 3, row: 2, col: 3, json: {ta: 'center', data: ''}},
//            {sheet: 3, row: 3, col: 3, json: {ta: 'center', data: '45.00'}},
//            {sheet: 3, row: 4, col: 3, json: {ta: 'center', data: '45.00'}},
//            {sheet: 3, row: 5, col: 3, json: {ta: 'center', data: '67.50'}},
//            {sheet: 3, row: 6, col: 3, json: {ta: 'center', data: '90.00'}},
//            {sheet: 3, row: 7, col: 3, json: {ta: 'center', data: '90.00'}},
//            {sheet: 3, row: 8, col: 3, json: {ta: 'center', data: '90.00'}},
//            {sheet: 3, row: 9, col: 3, json: {ta: 'center', data: '112.50'}},
//            {sheet: 3, row: 10, col: 3, json: {ta: 'center', data: '112.50'}},
//            {sheet: 3, row: 11, col: 3, json: {ta: 'center', data: '135'}},
//            {sheet: 3, row: 12, col: 3, json: {ta: 'center', data: '135'}},
//            {sheet: 3, row: 13, col: 3, json: {ta: 'center', data: '180'}},
//            {sheet: 3, row: 14, col: 3, json: {ta: 'center', data: '180'}},
//            {sheet: 3, row: 15, col: 3, json: {ta: 'center', data: ''}},
//            {sheet: 3, row: 16, col: 3, json: {ta: 'center', data: '22.5'}},
//            {sheet: 3, row: 17, col: 3, json: {ta: 'center', data: '22.5'}},
//            {sheet: 3, row: 18, col: 3, json: {ta: 'center', data: '22.5'}},
//            {sheet: 3, row: 19, col: 3, json: {ta: 'center', data: '45'}},
//            {sheet: 3, row: 20, col: 3, json: {ta: 'center', data: '45'}},
//            {sheet: 3, row: 21, col: 3, json: {ta: 'center', data: '67.5'}},
//            {sheet: 3, row: 22, col: 3, json: {ta: 'center', data: '67.5'}},
//            {sheet: 3, row: 23, col: 3, json: {ta: 'center', data: '90'}},
//            {sheet: 3, row: 24, col: 3, json: {ta: 'center', data: '90'}},
//            {sheet: 3, row: 25, col: 3, json: {ta: 'center', data: '90'}},
//            {sheet: 3, row: 26, col: 3, json: {ta: 'center', data: ''}},
//            {sheet: 3, row: 27, col: 3, json: {ta: 'center', data: '90'}},
//            {sheet: 3, row: 28, col: 3, json: {ta: 'center', data: '112.5'}},
//            {sheet: 3, row: 29, col: 3, json: {ta: 'center', data: '135'}},
//            {sheet: 3, row: 30, col: 3, json: {ta: 'center', data: '135'}},
//            {sheet: 3, row: 31, col: 3, json: {ta: 'center', data: '135'}},
            {sheet: 3, row: 3, col: 3, json: {ta: 'center', data: '=D3*25', cal: true}},
            {sheet: 3, row: 4, col: 3, json: {ta: 'center', data: '=D4*25', cal: true}},
            {sheet: 3, row: 5, col: 3, json: {ta: 'center', data: '=D5*25', cal: true}},
            {sheet: 3, row: 6, col: 3, json: {ta: 'center', data: '=D6*25', cal: true}},
            {sheet: 3, row: 7, col: 3, json: {ta: 'center', data: '=D7*25', cal: true}},
            {sheet: 3, row: 8, col: 3, json: {ta: 'center', data: '=D8*25', cal: true}},
            {sheet: 3, row: 9, col: 3, json: {ta: 'center', data: '=D9*25', cal: true}},
            {sheet: 3, row: 10, col: 3, json: {ta: 'center', data: '=D10*25', cal: true}},
            {sheet: 3, row: 11, col: 3, json: {ta: 'center', data: '=D11*25', cal: true}},
            {sheet: 3, row: 12, col: 3, json: {ta: 'center', data: '=D12*25', cal: true}},
            {sheet: 3, row: 13, col: 3, json: {ta: 'center', data: '=D13*25', cal: true}},
            {sheet: 3, row: 14, col: 3, json: {ta: 'center', data: '=D14*25', cal: true}},
            {sheet: 3, row: 15, col: 3, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 16, col: 3, json: {ta: 'center', data: '=D16*25', cal: true}},
            {sheet: 3, row: 17, col: 3, json: {ta: 'center', data: '=D17*25', cal: true}},
            {sheet: 3, row: 18, col: 3, json: {ta: 'center', data: '=D18*25', cal: true}},
            {sheet: 3, row: 19, col: 3, json: {ta: 'center', data: '=D19*25', cal: true}},
            {sheet: 3, row: 20, col: 3, json: {ta: 'center', data: '=D20*25', cal: true}},
            {sheet: 3, row: 21, col: 3, json: {ta: 'center', data: '=D21*25', cal: true}},
            {sheet: 3, row: 22, col: 3, json: {ta: 'center', data: '=D22*25', cal: true}},
            {sheet: 3, row: 23, col: 3, json: {ta: 'center', data: '=D23*25', cal: true}},
            {sheet: 3, row: 24, col: 3, json: {ta: 'center', data: '=D24*25', cal: true}},
            {sheet: 3, row: 25, col: 3, json: {ta: 'center', data: '=D25*25', cal: true}},
            {sheet: 3, row: 26, col: 3, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 27, col: 3, json: {ta: 'center', data: '=D27*25', cal: true}},
            {sheet: 3, row: 28, col: 3, json: {ta: 'center', data: '=D28*25', cal: true}},
            {sheet: 3, row: 29, col: 3, json: {ta: 'center', data: '=D29*25', cal: true}},
            {sheet: 3, row: 30, col: 3, json: {ta: 'center', data: '=D30*25', cal: true}},
            {sheet: 3, row: 31, col: 3, json: {ta: 'center', data: '=D31*25', cal: true}},
            //
//
            //
            //
            // [[A0628]]
            //
            {sheet: 3, row: 1, col: 4, json: {ta: 'center', data: '用工数/机'}},
            {sheet: 3, row: 2, col: 4, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 3, col: 4, json: {ta: 'center', data: '1.5'}}, //
            {sheet: 3, row: 4, col: 4, json: {ta: 'center', data: '1.75'}},
            {sheet: 3, row: 5, col: 4, json: {ta: 'center', data: '2.0'}},
            {sheet: 3, row: 6, col: 4, json: {ta: 'center', data: '2.25'}},
            {sheet: 3, row: 7, col: 4, json: {ta: 'center', data: '2.5'}},
            {sheet: 3, row: 8, col: 4, json: {ta: 'center', data: '2.5'}},
            {sheet: 3, row: 9, col: 4, json: {ta: 'center', data: '2.5'}},
            {sheet: 3, row: 10, col: 4, json: {ta: 'center', data: '3'}},
            {sheet: 3, row: 11, col: 4, json: {ta: 'center', data: '3'}},
            {sheet: 3, row: 12, col: 4, json: {ta: 'center', data: '3'}},
            {sheet: 3, row: 13, col: 4, json: {ta: 'center', data: '3.5'}},
            {sheet: 3, row: 14, col: 4, json: {ta: 'center', data: '3.5'}},
            {sheet: 3, row: 15, col: 4, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 16, col: 4, json: {ta: 'center', data: '0.5'}},
            {sheet: 3, row: 17, col: 4, json: {ta: 'center', data: '0.5'}},
            {sheet: 3, row: 18, col: 4, json: {ta: 'center', data: '0.75'}},
            {sheet: 3, row: 19, col: 4, json: {ta: 'center', data: '1.0'}},
            {sheet: 3, row: 20, col: 4, json: {ta: 'center', data: '1.0'}},
            {sheet: 3, row: 21, col: 4, json: {ta: 'center', data: '1.5'}},
            {sheet: 3, row: 22, col: 4, json: {ta: 'center', data: '1.75'}},
            {sheet: 3, row: 23, col: 4, json: {ta: 'center', data: '2.0'}},
            {sheet: 3, row: 24, col: 4, json: {ta: 'center', data: '2.0'}},
            {sheet: 3, row: 25, col: 4, json: {ta: 'center', data: '2.5'}},
            {sheet: 3, row: 26, col: 4, json: {ta: 'center', data: ''}},
            {sheet: 3, row: 27, col: 4, json: {ta: 'center', data: '2.0'}},
            {sheet: 3, row: 28, col: 4, json: {ta: 'center', data: '3.0'}},
            {sheet: 3, row: 29, col: 4, json: {ta: 'center', data: '3.0'}},
            {sheet: 3, row: 30, col: 4, json: {ta: 'center', data: '2.0'}},
            {sheet: 3, row: 31, col: 4, json: {ta: 'center', data: '3.0'}},
            // [[A0603]] MOQ --- start
//            {sheet: 3, row: 1, col: 4, json: {ta: 'center', data: 'MOQ'}},
//            {sheet: 3, row: 2, col: 4, json: {ta: 'center', data: ''}},
//            {sheet: 3, row: 3, col: 4, json: {ta: 'center', data: '2000'}},
//            {sheet: 3, row: 4, col: 4, json: {ta: 'center', data: '2000'}},
//            {sheet: 3, row: 5, col: 4, json: {ta: 'center', data: '2000'}},
//            {sheet: 3, row: 6, col: 4, json: {ta: 'center', data: '1500'}},
//            {sheet: 3, row: 7, col: 4, json: {ta: 'center', data: '1200'}},
//            {sheet: 3, row: 8, col: 4, json: {ta: 'center', data: '1200'}},
//            {sheet: 3, row: 9, col: 4, json: {ta: 'center', data: '1000'}},
//            {sheet: 3, row: 10, col: 4, json: {ta: 'center', data: '800'}},
//            {sheet: 3, row: 11, col: 4, json: {ta: 'center', data: '600'}},
//            {sheet: 3, row: 12, col: 4, json: {ta: 'center', data: '600'}},
//            {sheet: 3, row: 13, col: 4, json: {ta: 'center', data: '500'}},
//            {sheet: 3, row: 14, col: 4, json: {ta: 'center', data: '500'}},
//            {sheet: 3, row: 15, col: 4, json: {ta: 'center', data: ''}},
//            {sheet: 3, row: 16, col: 4, json: {ta: 'center', data: '15000'}},
//            {sheet: 3, row: 17, col: 4, json: {ta: 'center', data: '10000'}},
//            {sheet: 3, row: 18, col: 4, json: {ta: 'center', data: '10000'}},
//            {sheet: 3, row: 19, col: 4, json: {ta: 'center', data: '8000'}},
//            {sheet: 3, row: 20, col: 4, json: {ta: 'center', data: '5000'}},
//            {sheet: 3, row: 21, col: 4, json: {ta: 'center', data: '5000'}},
//            {sheet: 3, row: 22, col: 4, json: {ta: 'center', data: '3000'}},
//            {sheet: 3, row: 23, col: 4, json: {ta: 'center', data: '2500'}},
//            {sheet: 3, row: 24, col: 4, json: {ta: 'center', data: '2000'}},
//            {sheet: 3, row: 25, col: 4, json: {ta: 'center', data: '1500'}},
//            {sheet: 3, row: 26, col: 4, json: {ta: 'center', data: ''}},
//            {sheet: 3, row: 27, col: 4, json: {ta: 'center', data: '3500'}},
//            {sheet: 3, row: 28, col: 4, json: {ta: 'center', data: '1500'}},
//            {sheet: 3, row: 29, col: 4, json: {ta: 'center', data: '1000'}},
//            {sheet: 3, row: 30, col: 4, json: {ta: 'center', data: '2500'}},
//            {sheet: 3, row: 31, col: 4, json: {ta: 'center', data: '1000'}},
            // [[A0603]]  MOQ --- end




            {sheet: 5, row: 0, col: 0, json: {dsd: "ed", height: 20, va: "middle"}},
            {sheet: 5, row: 0, col: 1, json: {ta: "center", data: "A", width: 200}},
            {sheet: 5, row: 0, col: 2, json: {fm: "money|¥|2|none", ta: "center", data: "B", width: 100}},
            {sheet: 5, row: 1, col: 1, json: {data: '後段加工 工时费率：'}},
            {sheet: 5, row: 2, col: 1, json: {data: ''}},
            {sheet: 5, row: 3, col: 1, json: {data: 'CNC机加工'}},
            {sheet: 5, row: 4, col: 1, json: {data: '传统机加工'}},
            {sheet: 5, row: 5, col: 1, json: {data: '毛刺处理费（含粗磨） '}},
            {sheet: 5, row: 6, col: 1, json: {data: '打磨'}},
            {sheet: 5, row: 7, col: 1, json: {data: ' 整形'}},
            {sheet: 5, row: 8, col: 1, json: {data: '毛刺處理'}},
            {sheet: 5, row: 9, col: 1, json: {data: '镜面抛光'}},
            {sheet: 5, row: 10, col: 1, json: {data: '震动研磨'}},
            {sheet: 5, row: 11, col: 1, json: {data: '抛丸'}},
            {sheet: 5, row: 12, col: 1, json: {data: '喷砂'}},
            {sheet: 5, row: 13, col: 1, json: {data: '热能去除毛刺'}},
            {sheet: 5, row: 14, col: 1, json: {data: '冷冻去除毛刺'}},
            {sheet: 5, row: 15, col: 1, json: {data: '气密性测试'}},
            {sheet: 5, row: 16, col: 1, json: {data: '丝印/网印'}},
            {sheet: 5, row: 17, col: 1, json: {data: '筛选和包装'}},
            {sheet: 5, row: 1, col: 1, json: {data: '費率/H '}},
            {sheet: 5, row: 1, col: 2, json: {data: '費率/H '}},
            {sheet: 5, row: 2, col: 2, json: {data: ''}},
            {sheet: 5, row: 3, col: 2, json: {data: '66'}},
            {sheet: 5, row: 4, col: 2, json: {data: '45'}},
            {sheet: 5, row: 5, col: 2, json: {data: '35'}},
            {sheet: 5, row: 6, col: 2, json: {data: '45'}},
            {sheet: 5, row: 7, col: 2, json: {data: '45'}},
            {sheet: 5, row: 8, col: 2, json: {data: '35'}},
            {sheet: 5, row: 9, col: 2, json: {data: '60'}},
            {sheet: 5, row: 10, col: 2, json: {data: '120'}},
            {sheet: 5, row: 11, col: 2, json: {data: '85'}},
            {sheet: 5, row: 12, col: 2, json: {data: '125'}},
            {sheet: 5, row: 13, col: 2, json: {data: '206'}},
            {sheet: 5, row: 14, col: 2, json: {data: '115'}},
            {sheet: 5, row: 15, col: 2, json: {data: '45'}},
            {sheet: 5, row: 16, col: 2, json: {data: '222'}},
            {sheet: 5, row: 17, col: 2, json: {data: '35'}},
       
            // A1121 - START
            // 牌號順序不變，只改價格
            
       		{sheet: 2, row: 0, col: 0, json: {ta: "center", height: 20, va: "middle"}},
            {sheet: 2, row: 0, col: 1, json: {data: "A", width: 200}},
            {sheet: 2, row: 0, col: 2, json: {fm: "money|¥|2|none", data: "B", width: 100}},
            {sheet: 2, row: 0, col: 3, json: {fm: "money|¥|2|none", data: "C", width: 100}},
            {sheet: 2, row: 0, col: 4, json: {data: "D", width: 200}},
            {sheet: 2, row: 0, col: 5, json: {data: "E", width: 100}},
            {sheet: 2, row: 1, col: 1, json: {dsd: "ed", data: "材料規格"}},
            {sheet: 2, row: 1, col: 2, json: {dsd: "ed", data: "材料價格/kg"}},
            {sheet: 2, row: 1, col: 3, json: {dsd: "ed", data: "廢料價格/kg"}},
            {sheet: 2, row: 2, col: 1, json: {dsd: "ed", data: "一。铝合金"}},
            {sheet: 2, row: 2, col: 2, json: {dsd: "ed", data: ""}},
            {sheet: 2, row: 2, col: 3, json: {dsd: "ed", data: ""}},
            {sheet: 2, row: 3, col: 1, json: {dsd: "ed", data: "AlSi10Mg"}},
            {sheet: 2, row: 3, col: 2, json: {dsd: "ed", data: "15.60"}},
            {sheet: 2, row: 3, col: 3, json: {dsd: "ed", data: "13.60"}},
            {sheet: 2, row: 4, col: 1, json: {dsd: "ed", data: "AlSi9Cu3"}},
            {sheet: 2, row: 4, col: 2, json: {dsd: "ed", data: "15.60"}},
            {sheet: 2, row: 4, col: 3, json: {dsd: "ed", data: "13.60"}},
            {sheet: 2, row: 5, col: 1, json: {dsd: "ed", data: "ADC12"}},
            {sheet: 2, row: 5, col: 2, json: {dsd: "ed", data: "15.60"}},
            {sheet: 2, row: 5, col: 3, json: {dsd: "ed", data: "13.60"}},
            {sheet: 2, row: 6, col: 1, json: {dsd: "ed", data: "A380"}},
            {sheet: 2, row: 6, col: 2, json: {dsd: "ed", data: "15.60"}},
            {sheet: 2, row: 6, col: 3, json: {dsd: "ed", data: "13.60"}},
            {sheet: 2, row: 7, col: 1, json: {dsd: "ed", data: "A413"}},
            {sheet: 2, row: 7, col: 2, json: {dsd: "ed", data: "15.60"}},
            {sheet: 2, row: 7, col: 3, json: {dsd: "ed", data: "13.60"}},
            {sheet: 2, row: 8, col: 1, json: {dsd: "ed", data: "A360"}},
            {sheet: 2, row: 8, col: 2, json: {dsd: "ed", data: "15.60"}},
            {sheet: 2, row: 8, col: 3, json: {dsd: "ed", data: "13.60"}},
            {sheet: 2, row: 9, col: 1, json: {dsd: "ed", data: "A356"}},
            {sheet: 2, row: 9, col: 2, json: {dsd: "ed", data: "15.60"}},
            {sheet: 2, row: 9, col: 3, json: {dsd: "ed", data: "13.60"}},
            {sheet: 2, row: 10, col: 1, json: {dsd: "ed", data: " 二。锌合金"}},
            {sheet: 2, row: 10, col: 2, json: {dsd: "ed", data: ""}},
            {sheet: 2, row: 10, col: 3, json: {dsd: "ed", data: ""}},
            {sheet: 2, row: 11, col: 1, json: {dsd: "ed", data: "ZINC-2"}},
            {sheet: 2, row: 11, col: 2, json: {dsd: "ed", data: "22.50"}},            
            {sheet: 2, row: 11, col: 3, json: {dsd: "ed", data: "17.50"}},
            {sheet: 2, row: 12, col: 1, json: {dsd: "ed", data: "ZINC-3"}},
            {sheet: 2, row: 12, col: 2, json: {dsd: "ed", data: "23.00"}},
            {sheet: 2, row: 12, col: 3, json: {dsd: "ed", data: "18.00"}},
            {sheet: 2, row: 13, col: 1, json: {dsd: "ed", data: "ZINC-5"}},
            {sheet: 2, row: 13, col: 2, json: {dsd: "ed", data: "23.00"}},            
            {sheet: 2, row: 13, col: 3, json: {dsd: "ed", data: "18.00"}},
            {sheet: 2, row: 14, col: 1, json: {dsd: "ed", data: "ZINC-7"}},
            {sheet: 2, row: 14, col: 2, json: {dsd: "ed", data: "23.50"}},            
            {sheet: 2, row: 14, col: 3, json: {dsd: "ed", data: "18.50"}},
            {sheet: 2, row: 15, col: 1, json: {dsd: "ed", data: "ZAMAK-8"}},
            {sheet: 2, row: 15, col: 2, json: {dsd: "ed", data: "24.50"}},
            {sheet: 2, row: 15, col: 3, json: {dsd: "ed", data: "19.50"}},
            {sheet: 2, row: 16, col: 1, json: {dsd: "ed", data: " 三。镁合金"}},
            {sheet: 2, row: 16, col: 2, json: {dsd: "ed", data: ""}},
            {sheet: 2, row: 16, col: 3, json: {dsd: "ed", data: ""}},
            {sheet: 2, row: 17, col: 1, json: {dsd: "ed", data: "AZ91D"}},
            {sheet: 2, row: 17, col: 2, json: {dsd: "ed", data: "18.00"}},
            {sheet: 2, row: 17, col: 3, json: {dsd: "ed", data: "15.00"}},
            {sheet: 2, row: 18, col: 1, json: {dsd: "ed", data: "AM60"}},
            {sheet: 2, row: 18, col: 2, json: {dsd: "ed", data: "19.00"}},
            {sheet: 2, row: 18, col: 3, json: {dsd: "ed", data: "16.00"}},
            {sheet: 2, row: 19, col: 1, json: {dsd: "ed", data: "THX-AZ91D"}},
            {sheet: 2, row: 19, col: 2, json: {dsd: "ed", data: "23.50"}},
            {sheet: 2, row: 19, col: 3, json: {dsd: "ed", data: "15.00"}},
            {sheet: 2, row: 20, col: 1, json: {dsd: "ed", data: "THX-AM60"}},
            {sheet: 2, row: 20, col: 2, json: {dsd: "ed", data: "24.50"}},
            {sheet: 2, row: 20, col: 3, json: {dsd: "ed", data: "16.00"}},
       
       
            // A1121 - END
            
       
            {sheet: 1, row: 0, col: 0, json: {fz: 10, ww: 'break-word', ws: 'normal', dsd: "", height: 20, va: "middle"}},
            {sheet: 1, row: 0, col: 1, json: {ta: "center", dsd: "", data: "A", width: 60}},
            {sheet: 1, row: 0, col: 2, json: {ta: "center", data: "B", width: 160}},
            {sheet: 1, row: 0, col: 3, json: {dsd: "", width: 120}},
            {sheet: 1, row: 0, col: 4, json: {dsd: "", width: 120}},
            {sheet: 1, row: 0, col: 5, json: {dsd: "", width: 120}},
            {sheet: 1, row: 0, col: 6, json: {dsd: "", width: 120}},
            {sheet: 1, row: 0, col: 7, json: {dsd: "", width: 120}},
            {sheet: 1, row: 0, col: 8, json: {dsd: "", width: 120}},
            {sheet: 1, row: 1, col: 0, json: {hidden: true}},
            {sheet: 1, row: 2, col: 0, json: {hidden: true}},
//            {sheet: 1, row: 1, col: 1, json: {data: ""}},
//            {sheet: 1, row: 1, col: 2, json: {data: ""}},
//            {sheet: 1, row: 1, col: 3, json: {data: ""}},
//            {sheet: 1, row: 2, col: 1, json: {data: ""}},
//            {sheet: 1, row: 2, col: 2, json: {data: ""}},
//                    {sheet: 1, row: 2, col: 3, json: {data: "0"}},
//            {sheet: 1, row: 2, col: 3, json: {data: "TODO 保存數據", it: "button", btnStyle: "color: #900; font-weight: bold;", onBtnClickFn: "CUSTOM_BUTTON_CLICK_CALLBACK_FN"}},
//   {sheet: 1, row: 2, col: 3, json: {data: "TODO 保存數據", it: "button", btnStyle: "color: #900; font-weight: bold;", onBtnClickFn: "CUSTOM_BUTTON_CLICK_CALLBACK_FN"}},

//           {sheet: 1, row: 3, col: 1, json: {data: "EXP1", it: "button", btnStyle: "color: #900; font-weight: bold;", onBtnClickFn: "CUSTOM_BUTTON_CLICK_CALLBACK_FN"}},
            {sheet: 1, row: 3, col: 2, json: {data: "接受询价日期："}},
            //  {sheet: 1, row: 2, col: 3, json:{ data: "TODO 保存數據", it: "button", btnStyle: "color: #900; font-weight: bold;", onBtnClickFn: "CUSTOM_BUTTON_CLICK_CALLBACK_FN" } },
            {sheet: 1, row: 3, col: 1, json: {data: "生成", it: "button", btnStyle: "color: blue; font-weight: bold;", onBtnClickFn: "CUSTOM_BUTTON_CLICK___MAKE_EXCEL"}},
            {sheet: 1, row: 4, col: 2, json: {data: "业务担当："}},
            {sheet: 1, row: 4, col: 3, json: {data: ""}},
            {sheet: 1, row: 5, col: 1, json: {data: ""}},
            {sheet: 1, row: 5, col: 2, json: {data: ""}},
            {sheet: 1, row: 5, col: 3, json: {data: ""}},
            {sheet: 1, row: 6, col: 1, json: {data: ""}},
            {sheet: 1, row: 6, col: 2, json: {data: "产品简图 "}},
            {sheet: 1, row: 6, col: 3, json: {data: ""}},
            {sheet: 1, row: 7, col: 1, json: {data: ""}},
            {sheet: 1, row: 7, col: 2, json: {data: "项目 料号 "}},
            {sheet: 1, row: 7, col: 3, json: {ta: "center", data: "AAAAA"}},
//            {sheet: 1, row: 7, col: 4, json: {ta: "center", data: "BBBBB"}},
            {sheet: 1, row: 8, col: 1, json: {data: ""}},
            {sheet: 1, row: 8, col: 2, json: {data: "品名 / 图纸版本号："}},
            {sheet: 1, row: 8, col: 3, json: {ta: "center", data: ""}},
            {sheet: 1, row: 9, col: 1, json: {data: ""}},
            {sheet: 1, row: 9, col: 2, json: {data: "产品外形尺寸"}},
            {sheet: 1, row: 9, col: 3, json: {ta: "center", data: ""}},
            {sheet: 1, row: 10, col: 1, json: {data: ""}},
            {sheet: 1, row: 10, col: 2, json: {data: "材质规格： "}},
            {sheet: 1, row: 10, col: 3, json: ddlMaterial},
            {sheet: 1, row: 11, col: 1, json: {data: ""}},
            {sheet: 1, row: 11, col: 2, json: {data: "产品单重（g）："}},
            {sheet: 1, row: 11, col: 3, json: styleInput({fm: "number", data: "13"})},
            {sheet: 1, row: 12, col: 1, json: {data: ""}},
            {sheet: 1, row: 12, col: 2, json: {data: "表面要求： "}},
            {sheet: 1, row: 12, col: 3, json: ddlSurface},
            {sheet: 1, row: 13, col: 1, json: {data: ""}},
            {sheet: 1, row: 13, col: 2, json: {data: "年需求量："}},
            {sheet: 1, row: 13, col: 3, json: {ta: "center", data: ""}},
            {sheet: 1, row: 14, col: 1, json: {data: ""}},
            {sheet: 1, row: 14, col: 2, json: {data: ""}},
            {sheet: 1, row: 14, col: 3, json: {data: ""}},
            {sheet: 1, row: 15, col: 1, json: {data: ""}},
            {sheet: 1, row: 15, col: 2, json: {bgc: colorStep, data: "模具费用： "}},
            {sheet: 1, row: 15, col: 3, json: {data: ""}},
            {sheet: 1, row: 16, col: 1, json: {data: ""}},
            {sheet: 1, row: 16, col: 2, json: {data: "模穴数 "}},
            {sheet: 1, row: 16, col: 3, json: styleInput({fm: "number", data: "1"})},
            {sheet: 1, row: 17, col: 1, json: {data: ""}},
            {sheet: 1, row: 17, col: 2, json: {data: "侧滑模数/油压抽芯数 "}},
            {sheet: 1, row: 17, col: 3, json: {ta: "center", data: ""}},
            {sheet: 1, row: 18, col: 1, json: {data: ""}},
            {sheet: 1, row: 18, col: 2, json: {data: "模具寿命："}},
            {sheet: 1, row: 18, col: 3, json: {ta: "center", data: ""}},
            {sheet: 1, row: 19, col: 1, json: {data: ""}},
            {sheet: 1, row: 19, col: 2, json: {data: "压铸模费用： "}},
            {sheet: 1, row: 19, col: 3, json: styleInput({fm: "money|¥|2|none", data: "71500"})},
            {sheet: 1, row: 20, col: 1, json: {data: ""}},
            {sheet: 1, row: 20, col: 2, json: {data: "切边模费用： "}},
            {sheet: 1, row: 20, col: 3, json: styleInput({fm: "money|¥|2|none", data: "12000"})},
            {sheet: 1, row: 21, col: 1, json: {data: ""}},
            {sheet: 1, row: 21, col: 2, json: {data: "加工夹治具费用： "}},
            {sheet: 1, row: 21, col: 3, json: styleInput({fm: "money|¥|2|none", data: "8000"})},
            {sheet: 1, row: 22, col: 1, json: {data: ""}},
            {sheet: 1, row: 22, col: 2, json: {data: "烤漆夹治具费用： "}},
            {sheet: 1, row: 22, col: 3, json: styleInput({fm: "money|¥|2|none", data: "8000"})},
            {sheet: 1, row: 23, col: 1, json: {data: ""}},
            {sheet: 1, row: 23, col: 2, json: {bgc: colorStepEnd, data: "模具总价（人民币）： "}},
            {sheet: 1, row: 23, col: 3, json: styleSubTotal({data: "=(C19+C20+C21+C22)"})},
            {sheet: 1, row: 24, col: 1, json: {data: ""}},
            {sheet: 1, row: 24, col: 2, json: {data: "模具总价（USD）： "}},
            {sheet: 1, row: 24, col: 3, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(C23/6.35)"}},
            {sheet: 1, row: 25, col: 0, json: {hidden: true}},
            {sheet: 1, row: 26, col: 0, json: {hidden: true}},
//          
//            {sheet: 1, row: 25, col: 1, json: {data: ""}},
//            {sheet: 1, row: 25, col: 2, json: {data: ""}},
//            {sheet: 1, row: 25, col: 3, json: {data: ""}},
//            {sheet: 1, row: 26, col: 1, json: {data: ""}},
//            {sheet: 1, row: 26, col: 2, json: {data: ""}},
//            {sheet: 1, row: 26, col: 3, json: {data: ""}},
//            
            {sheet: 1, row: 27, col: 1, json: {data: ""}},
            {sheet: 1, row: 27, col: 2, json: {data: "产品单价： "}},
            {sheet: 1, row: 27, col: 3, json: {data: ""}},
            {sheet: 1, row: 28, col: 1, json: {data: "* "}},
            {sheet: 1, row: 28, col: 2, json: {bgc: colorStep, data: "1)材料费 ： "}},
            {sheet: 1, row: 28, col: 3, json: {data: ""}},
            {sheet: 1, row: 29, col: 1, json: {data: "1-1）"}},
            {sheet: 1, row: 29, col: 2, json: {data: "材质规格："}},
            {sheet: 1, row: 29, col: 3, json: {ta: "center", dsd: "ed", data: "=C10", cal: true}},
            {sheet: 1, row: 30, col: 1, json: {data: "1-2）"}},
            {sheet: 1, row: 30, col: 2, json: {data: "材料单价/KG :"}},
            {sheet: 1, row: 30, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C10,LOOKUP!$A$3:$C$20,2,0)"}},
            {sheet: 1, row: 31, col: 1, json: {data: "1-3）"}},
            {sheet: 1, row: 31, col: 2, json: {data: "单重（g）："}},
            {sheet: 1, row: 31, col: 3, json: {dsd: "ed", data: "=C11", cal: true}},
            {sheet: 1, row: 32, col: 1, json: {data: "1-4）"}},
            {sheet: 1, row: 32, col: 2, json: {data: "产品材料费（净重价格）： "}},
            {sheet: 1, row: 32, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", data: "=C30*C31/1000", cal: true}},
            {sheet: 1, row: 33, col: 1, json: {data: "1-5）"}},
            {sheet: 1, row: 33, col: 2, json: {data: "料柄流道渣包等废料重量(g)： "}},
            {sheet: 1, row: 33, col: 3, json: styleInput({fm: "number", data: "350"})},
            {sheet: 1, row: 34, col: 1, json: {data: "1-6）"}},
            {sheet: 1, row: 34, col: 2, json: {data: "料柄流道渣包比率 ： "}},
            {sheet: 1, row: 34, col: 3, json: {fm: "number", dfm: "0%", dsd: "ed", cal: true, data: "=100*C31*C16/(C31*C16+C33)"}},
            {sheet: 1, row: 35, col: 1, json: {data: "1-7）"}},
            {sheet: 1, row: 35, col: 2, json: {data: "料柄流道渣包等废料价格/Kg： "}},
            {sheet: 1, row: 35, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C10,LOOKUP!$A$3:$C$20,3,0)"}},
            {sheet: 1, row: 36, col: 1, json: {data: "1-8）"}},
            {sheet: 1, row: 36, col: 2, json: {data: "料柄流道渣包回收价差损失额 ： "}},
            {sheet: 1, row: 36, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=(C30-C35)*C33/1000/C16"}},
            {sheet: 1, row: 37, col: 1, json: {data: "1-9）"}},
            {sheet: 1, row: 37, col: 2, json: {data: "压铸熔炼材料氧化损耗(量）2% "}},
            {sheet: 1, row: 37, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=(C31+C33)*C30*0.02/1000/C16"}},
            {sheet: 1, row: 38, col: 1, json: {data: ""}},
            {sheet: 1, row: 38, col: 2, json: {bgc: colorStepEnd, data: "材料费　小计： "}},
            {sheet: 1, row: 38, col: 3, json: styleSubTotal({data: "=IF(ISNA(C32+C36+C37),0,(C32+C36+C37))"})},
            {sheet: 1, row: 39, col: 1, json: {data: "* "}},
            {sheet: 1, row: 39, col: 2, json: {bgc: colorStep, data: "2)压铸费(含切边）： "}},
            {sheet: 1, row: 39, col: 3, json: {ta: 'center', data: ""}},
            {sheet: 1, row: 40, col: 1, json: {data: "2-1）"}},
            {sheet: 1, row: 40, col: 2, json: {data: "适用机型： "}},
            {sheet: 1, row: 40, col: 3, json: ddlMachine},
            {sheet: 1, row: 41, col: 1, json: {data: "2-2）"}},
            {sheet: 1, row: 41, col: 2, json: {data: "设备费率/H： "}},
            {sheet: 1, row: 41, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C40,LOOKUP2!$A$1:$C$100,2,0)"}},
            {sheet: 1, row: 42, col: 1, json: {data: "2-3）"}},
            {sheet: 1, row: 42, col: 2, json: {data: "工时（秒）/只 ："}},
            {sheet: 1, row: 42, col: 3, json: styleInput({fm: "number", data: "30"})},
            {sheet: 1, row: 43, col: 1, json: {data: "2-4）"}},
            {sheet: 1, row: 43, col: 2, json: {data: "产能 只/H ："}},
            {sheet: 1, row: 43, col: 3, json: {fm: "number", dfm: "0", dsd: "ed", cal: true, data: "=3600/C42"}},
            {sheet: 1, row: 44, col: 1, json: {data: "2-5）"}},
            {sheet: 1, row: 44, col: 2, json: {data: "设备费/只： "}},
            {sheet: 1, row: 44, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=C41/C43"}},
            {sheet: 1, row: 45, col: 1, json: {data: "2-6）"}},
            {sheet: 1, row: 45, col: 2, json: {data: "人工费/只 ： "}},
            {sheet: 1, row: 45, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)/C43"}},
//            {sheet: 1, row: 46, col: 1, json: {data: ""}},
//            {sheet: 1, row: 46, col: 2, json: {data: ""}},
//            {sheet: 1, row: 46, col: 3, json: {data: ""}},
            {sheet: 1, row: 46, col: 1, json: {data: "2-7）"}},
            {sheet: 1, row: 46, col: 2, json: {data: "人工费率/H： "}},
            {sheet: 1, row: 46, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)"}},
            {sheet: 1, row: 47, col: 1, json: {data: "2-8）"}},
            {sheet: 1, row: 47, col: 2, json: {data: "良品率： "}},
            {sheet: 1, row: 47, col: 3, json: styleInput({fm: "number", dfm: "0%", data: "95"})},
            {sheet: 1, row: 48, col: 1, json: {data: ""}},
            {sheet: 1, row: 48, col: 2, json: {bgc: colorStepEnd, data: "压铸费　小计： "}},
            //  {sheet: 1, row: 48, col: 3, json: styleSubTotal({data: "=(C44+C45)*(1+(1-C47/100))/C16"})},
            {sheet: 1, row: 48, col: 3, json: styleSubTotal({data: setNaToZero("(C44+C45)*(1+(1-C47/100))/C16")})},
//            {sheet: 1, row: 48, col: 3, json: styleSubTotal({data: setNaToZero("(C44 + C45) * (1 + (1 - C47 / 100)) / C16)")})},
            {sheet: 1, row: 49, col: 1, json: {data: "* "}},
            {sheet: 1, row: 49, col: 2, json: {bgc: colorStep, data: "3)毛刺处理费（含粗磨）"}},
            {sheet: 1, row: 49, col: 3, json: {data: ""}},
            {sheet: 1, row: 50, col: 1, json: {data: "3-1）"}},
            {sheet: 1, row: 50, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 50, col: 3, json: styleInput({fm: "number", data: "82"})},
            {sheet: 1, row: 51, col: 1, json: {data: "3-2）"}},
            {sheet: 1, row: 51, col: 2, json: {data: "人工费率/H： "}},
            {sheet: 1, row: 51, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", data: "35"}},
            {sheet: 1, row: 52, col: 1, json: {data: ""}},
            {sheet: 1, row: 52, col: 2, json: {bgc: colorStepEnd, data: "毛刺处理费　小计： "}},
            {sheet: 1, row: 52, col: 3, json: styleSubTotal({data: "=(C50/3600)*C51"})},
            {sheet: 1, row: 53, col: 1, json: {data: "* "}},
            {sheet: 1, row: 53, col: 2, json: {bgc: colorStep, data: "4)外观打磨费（入/溢料口, 分模线及一般外观瑕疵等部位做打磨）"}},
            {sheet: 1, row: 53, col: 3, json: {data: ""}},
            {sheet: 1, row: 54, col: 1, json: {data: "4-1）"}},
            {sheet: 1, row: 54, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 54, col: 3, json: styleInput({fm: "number", data: "150"})},
            {sheet: 1, row: 55, col: 1, json: {data: "4-2）"}},
            {sheet: 1, row: 55, col: 2, json: {data: "人工费率/H： "}},
            {sheet: 1, row: 55, col: 3, json: {dsd: true, data: "45"}},
            {sheet: 1, row: 56, col: 1, json: {data: "4-3）"}},
            {sheet: 1, row: 56, col: 2, json: {data: "打磨费： "}},
            {sheet: 1, row: 56, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=(C54/3600)*C55"}},
            {sheet: 1, row: 57, col: 1, json: {data: "4-4）"}},
            {sheet: 1, row: 57, col: 2, json: {data: "良品率： "}},
            {sheet: 1, row: 57, col: 3, json: styleInput({fm: "number", dfm: "0%", data: "99"})},
            {sheet: 1, row: 58, col: 0, json: {hidden: true}},
//            {sheet: 1, row: 58, col: 2, json: {data: ""}},
//            {sheet: 1, row: 58, col: 3, json: {data: ""}},
            {sheet: 1, row: 59, col: 1, json: {data: ""}},
            {sheet: 1, row: 59, col: 2, json: {bgc: colorStepEnd, data: "外观打磨费　小计："}},
            {sheet: 1, row: 59, col: 3, json: styleSubTotal({data: "=C56*(1+(1-C57/100))"})},
            {sheet: 1, row: 60, col: 1, json: {data: "* "}},
            {sheet: 1, row: 60, col: 2, json: {bgc: colorStep, data: "5)平整度整形费 "}},
            {sheet: 1, row: 60, col: 3, json: {data: ""}},
            {sheet: 1, row: 61, col: 1, json: {data: "5-1）"}},
            {sheet: 1, row: 61, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 61, col: 3, json: styleInput({fm: "number", data: "60"})},
            {sheet: 1, row: 62, col: 1, json: {data: "5-2）"}},
            {sheet: 1, row: 62, col: 2, json: {data: "人工费率/H： "}},
            {sheet: 1, row: 62, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", data: "45"}},
            {sheet: 1, row: 63, col: 1, json: {data: "5-3）"}},
            {sheet: 1, row: 63, col: 2, json: {data: "人工费/只 "}},
            {sheet: 1, row: 63, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=(C61/3600)*C62"}},
            {sheet: 1, row: 64, col: 1, json: {data: ""}},
            {sheet: 1, row: 64, col: 2, json: {bgc: colorStepEnd, data: "平整度整形费　小计： "}},
            {sheet: 1, row: 64, col: 3, json: styleSubTotal({data: "=(C61/3600)*C62"})},
            {sheet: 1, row: 65, col: 1, json: {data: "* "}},
            {sheet: 1, row: 65, col: 2, json: {bgc: colorStep, data: "6)机加工 "}},
            {sheet: 1, row: 65, col: 3, json: ddlMaching},
            {sheet: 1, row: 66, col: 1, json: {data: "6-1）"}},
            {sheet: 1, row: 66, col: 2, json: {data: "机加工工时（秒）/只 ： "}},
            {sheet: 1, row: 66, col: 3, json: styleInput({fm: "number", data: "30"})},
            {sheet: 1, row: 67, col: 1, json: {data: "6-2）"}},
            {sheet: 1, row: 67, col: 2, json: {data: "机加工费率/H： "}},
            {sheet: 1, row: 67, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C65,LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 68, col: 1, json: {data: "6-3）"}},
            {sheet: 1, row: 68, col: 2, json: {data: "机加工良品率： "}},
            {sheet: 1, row: 68, col: 3, json: styleInput({fm: "number", dfm: "0%", data: "95"})},
            {sheet: 1, row: 69, col: 1, json: {data: ""}},
            {sheet: 1, row: 69, col: 2, json: {bgc: colorStepEnd, data: "机加工　小计： "}},
//            {sheet: 1, row: 69, col: 3, json: styleSubTotal({data: "=(C66/3600)*C67 * (1 + (1 - C68 / 100))"})},
//            {sheet: 1, row: 69, col: 3, json: styleSubTotal({data: "=IF(ISNA((C66/3600)*C67 * (1 + (1 - C68 / 100))),0,(C66/3600)*C67 * (1 + (1 - C68 / 100)))"})},
            {sheet: 1, row: 69, col: 3, json: styleSubTotal({data: setNaToZero("(C66/3600)*C67 * (1 + (1 - C68 / 100))")})},
            {sheet: 1, row: 70, col: 1, json: {data: "* "}},
            {sheet: 1, row: 70, col: 2, json: {bgc: colorStep, data: "7)冷喷.热烧毛刺 费率/分： "}},
            {sheet: 1, row: 70, col: 3, json: ddlCold},
            {sheet: 1, row: 71, col: 1, json: {data: "7-1）"}},
            {sheet: 1, row: 71, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 71, col: 3, json: styleInput({fm: "number", dfm: "0", data: "60"})},
            {sheet: 1, row: 72, col: 1, json: {data: "7-2）"}},
            {sheet: 1, row: 72, col: 2, json: {data: "加工费率/H： "}},
            {sheet: 1, row: 72, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C70,LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 73, col: 1, json: {data: ""}},
            {sheet: 1, row: 73, col: 2, json: {bgc: colorStepEnd, data: "冷喷热烧毛刺　小计："}},
            {sheet: 1, row: 73, col: 3, json: styleSubTotal({data: setNaToZero("(C71/3600)*C72")})},
            {sheet: 1, row: 74, col: 1, json: {data: "* "}},
            {sheet: 1, row: 74, col: 2, json: {bgc: colorStep, data: "8)喷沙.抛丸.震动研磨 费率 "}},
            {sheet: 1, row: 74, col: 3, json: ddlSand},
            {sheet: 1, row: 75, col: 1, json: {data: "8-1）"}},
            {sheet: 1, row: 75, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 75, col: 3, json: styleInput({fm: "number", dfm: "0", data: "60"})},
            {sheet: 1, row: 76, col: 1, json: {data: "8-2）"}},
            {sheet: 1, row: 76, col: 2, json: {data: "加工费率/H： "}},
            {sheet: 1, row: 76, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP(C74,LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 77, col: 1, json: {data: ""}},
            {sheet: 1, row: 77, col: 2, json: {bgc: colorStepEnd, data: "喷沙抛丸震动研磨　小计： "}},
//            {sheet: 1, row: 77, col: 3, json: {bgc: colorStepEnd, fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=(C75/3600)*C76"}},
            {sheet: 1, row: 77, col: 3, json: styleSubTotal({data: "=IF(ISNA(C76),0,(C75/3600)*C76)"})},
            {sheet: 1, row: 78, col: 1, json: {data: "* "}},
            {sheet: 1, row: 78, col: 2, json: {bgc: colorStep, data: "9)皮膜处理 费率 "}},
            {sheet: 1, row: 78, col: 3, json: {data: ""}},
            {sheet: 1, row: 79, col: 1, json: {data: "9-1）"}},
            {sheet: 1, row: 79, col: 2, json: {data: "皮膜处理： "}},
            {sheet: 1, row: 79, col: 3, json: ddlStep9},
            {sheet: 1, row: 80, col: 1, json: {data: "9-2）"}},
            {sheet: 1, row: 80, col: 2, json: {data: "工件表面面积 (算单面）DM2： "}},
            {sheet: 1, row: 80, col: 3, json: styleInput({fm: "number", dfm: "0.00", data: "0.99"})},
            {sheet: 1, row: 81, col: 1, json: {data: "9-3）"}},
            {sheet: 1, row: 81, col: 2, json: {data: "加工费率/DM2： "}},
            {sheet: 1, row: 81, col: 3, json: styleInput({fm: "money|¥|2|none", cal: true, data: "0.88"})},
            {sheet: 1, row: 82, col: 1, json: {data: ""}},
            {sheet: 1, row: 82, col: 2, json: {data: "難度係數 "}},
            {sheet: 1, row: 82, col: 3, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 83, col: 1, json: {data: ""}},
            {sheet: 1, row: 83, col: 2, json: {bgc: colorStepEnd, data: "皮膜处理　小计： "}},
            {sheet: 1, row: 83, col: 3, json: styleSubTotal({data: "=C80*C81*C82"})},
            {sheet: 1, row: 84, col: 1, json: {data: "* "}},
            {sheet: 1, row: 84, col: 2, json: {bgc: colorStep, data: "10)粉体烤漆.液体烤漆： "}},
            {sheet: 1, row: 84, col: 3, json: {data: ""}},
            {sheet: 1, row: 85, col: 1, json: {data: "10-1）"}},
            {sheet: 1, row: 85, col: 2, json: {data: "表面要求"}},
            {sheet: 1, row: 85, col: 3, json: {dsd: "ed", ta: "center", cal: true, data: "=C12"}},
            {sheet: 1, row: 86, col: 1, json: {data: "10-2）"}},
            {sheet: 1, row: 86, col: 2, json: {data: "工件表面积(算需喷漆面积）DM2： "}},
            {sheet: 1, row: 86, col: 3, json: styleInput({fm: "number", data: "6"})},
            {sheet: 1, row: 87, col: 1, json: {data: "10-3）"}},
            {sheet: 1, row: 87, col: 2, json: {data: "漆材料费/dm： "}},
            {sheet: 1, row: 87, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0.1"})},
            {sheet: 1, row: 88, col: 1, json: {data: "10-4）"}},
            {sheet: 1, row: 88, col: 2, json: {data: "烤漆设备+人工費率/dm： "}},
            {sheet: 1, row: 88, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0.6"})},
            {sheet: 1, row: 89, col: 1, json: {data: "10-5）"}},
            {sheet: 1, row: 89, col: 2, json: {data: "良品率： "}},
            {sheet: 1, row: 89, col: 3, json: styleInput({fm: "number", dfm: "0%", data: "95"})},
            {sheet: 1, row: 90, col: 1, json: {data: "10-6）"}},
            {sheet: 1, row: 90, col: 2, json: {data: "产品难度系数 K 值：K = 0.8-1.5 "}},
            {sheet: 1, row: 90, col: 3, json: styleInput({fm: "number", dfm: "0.0", data: "1"})},
            {sheet: 1, row: 91, col: 1, json: {data: ""}},
            {sheet: 1, row: 91, col: 2, json: {bgc: colorStepEnd, data: "粉体液体烤漆　小计： "}},
            {sheet: 1, row: 91, col: 3, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})},
            {sheet: 1, row: 92, col: 1, json: {data: "* "}},
            {sheet: 1, row: 92, col: 2, json: {bgc: colorStep, data: "11)其它特殊处理： "}},
            {sheet: 1, row: 92, col: 3, json: {ta: "center", data: ""}},
            {sheet: 1, row: 93, col: 1, json: {data: "11-1）"}},
            {sheet: 1, row: 93, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 93, col: 3, json: styleInput({data: "12"})},
            {sheet: 1, row: 94, col: 1, json: {data: "11-2）"}},
            {sheet: 1, row: 94, col: 2, json: {data: "费用/只 "}},
            {sheet: 1, row: 94, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0.34"})},
            {sheet: 1, row: 95, col: 1, json: {data: ""}},
            {sheet: 1, row: 95, col: 2, json: {bgc: colorStepEnd, data: "其它特殊处理　小计： "}},
            {sheet: 1, row: 95, col: 3, json: styleSubTotal({data: "=C94"})},
            {sheet: 1, row: 96, col: 1, json: {data: "* "}},
            {sheet: 1, row: 96, col: 2, json: {bgc: colorStep, data: "12)气密性测试 ： "}},
            {sheet: 1, row: 96, col: 3, json: {data: ""}},
            {sheet: 1, row: 97, col: 1, json: {data: "12-1）"}},
            {sheet: 1, row: 97, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 97, col: 3, json: styleInput({data: "56"})},
            {sheet: 1, row: 98, col: 1, json: {data: "12-2）"}},
            {sheet: 1, row: 98, col: 2, json: {data: "气测费率/H "}}, //气密性测试
            {sheet: 1, row: 98, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 99, col: 1, json: {data: ""}},
            {sheet: 1, row: 99, col: 2, json: {bgc: colorStepEnd, data: "气密性测试　小计： "}},
            {sheet: 1, row: 99, col: 3, json: styleSubTotal({data: "=C97/3600*C98"})},
            {sheet: 1, row: 100, col: 1, json: {data: "* "}},
            {sheet: 1, row: 100, col: 2, json: {bgc: colorStep, data: "13)筛选包装 费率 /H： "}},
            {sheet: 1, row: 100, col: 3, json: {data: ""}},
            {sheet: 1, row: 101, col: 1, json: {data: "13-1）"}},
            {sheet: 1, row: 101, col: 2, json: {data: "工时（秒）/只 ： "}},
            {sheet: 1, row: 101, col: 3, json: styleInput({fm: "number", dfm: "0", data: "21"})},
            {sheet: 1, row: 102, col: 1, json: {data: "13-2）"}},
            {sheet: 1, row: 102, col: 2, json: {data: "人工费率/H： "}},
            {sheet: 1, row: 102, col: 3, json: styleSubTotal({data: "=C101/3600*VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})},
            {sheet: 1, row: 103, col: 1, json: {data: "13-3）"}},
            {sheet: 1, row: 103, col: 2, json: {data: "包材费： "}},
            {sheet: 1, row: 103, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0.35"})},
            {sheet: 1, row: 104, col: 1, json: {data: ""}},
            {sheet: 1, row: 104, col: 2, json: {bgc: colorStepEnd, data: "筛选包装　小计："}},
            {sheet: 1, row: 104, col: 3, json: styleSubTotal({data: "=C102+C103"})},
            {sheet: 1, row: 105, col: 1, json: {data: ""}},
            {sheet: 1, row: 105, col: 2, json: {bgc: colorSect, data: "各工序费用　合计："}},
            {sheet: 1, row: 105, col: 3, json: {bgc: colorSect, fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=C38+C48+C52+C59+C64+C69+C73+C77+C83+C91+C95+C99+C104"}},
            //{fm: "number", dfm: "0%",
            {sheet: 1, row: 106, col: 1, json: {data: "* "}},
            {sheet: 1, row: 106, col: 2, json: {data: "管销加利润%"}},
            {sheet: 1, row: 106, col: 3, json: {fm: "number", dfm: "0%", data: "20"}},
            {sheet: 1, row: 107, col: 1, json: {data: "* "}},
            {sheet: 1, row: 107, col: 2, json: {data: "管销加利润"}},
            {sheet: 1, row: 107, col: 3, json: styleSubTotal({data: "=C105*C106/100"})},
            {sheet: 1, row: 108, col: 1, json: {data: "* "}},
            {sheet: 1, row: 108, col: 2, json: {data: "其他五金配件： "}},
            {sheet: 1, row: 108, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0"})},
            {sheet: 1, row: 109, col: 1, json: {data: "* "}},
            {sheet: 1, row: 109, col: 2, json: {data: "组装费： "}},
            {sheet: 1, row: 109, col: 3, json: styleInput({fm: "money|¥|2|none", data: "0"})},
            {sheet: 1, row: 110, col: 1, json: {data: ""}},
            {sheet: 1, row: 110, col: 2, json: {data: "组装 小计： "}},
            {sheet: 1, row: 110, col: 3, json: styleSubTotal({data: "=C108+C109"})},
            {sheet: 1, row: 111, col: 1, json: {data: ""}},
            {sheet: 1, row: 111, col: 2, json: {data: "合計（未稅）："}},
            {sheet: 1, row: 111, col: 3, json: styleSubTotal({data: "=C105+C107+C110"})},
            {sheet: 1, row: 112, col: 1, json: {data: ""}},
            {sheet: 1, row: 112, col: 2, json: {data: "总计（美金）： "}},
            {sheet: 1, row: 112, col: 3, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(C111/6.35)"}},
            {sheet: 1, row: 113, col: 1, json: {data: "生成", it: "button", btnStyle: "color: blue; font-weight: bold;", onBtnClickFn: "CUSTOM_BUTTON_CLICK___MAKE_EXCEL"}},
            //json: { data: "www.google.com", link: "www.google.com"} },
//                    {sheet: 1, row: 113, col: 2, json: { data: "www.google.com", link: "http://www.google.com"} },
//
            /*
             ** generated by script, /project-rfq/A0530/rfq/php-excel/make-js-mainjs-helper.php -----(start)
             ** version A0530: add ddl079
             */
            /*
             ** generated by script, /project-rfq/A0602/rfq/php-excel/make-js-mainjs-helper.php -----(start)
             ** version A0530: add ddl079
             */
            /*
             ** generated by script, /project-rfq/A0602/rfq/php-excel/make-js-mainjs-helper.php -----(start)
             ** version A0530: add ddl079
             */
            {sheet: 1, row: 12, col: 3, json: ddlSurface},
            {sheet: 1, row: 10, col: 3, json: ddlMaterial},
            {sheet: 1, row: 40, col: 3, json: ddlMachine},
            {sheet: 1, row: 65, col: 3, json: ddlMaching},
            {sheet: 1, row: 70, col: 3, json: ddlCold},
            {sheet: 1, row: 74, col: 3, json: ddlSand},
            {sheet: 1, row: 79, col: 3, json: ddl079}, // [[A0530]] 皮膜處理
            {sheet: 1, row: 12, col: 4, json: ddlSurface},
            {sheet: 1, row: 10, col: 4, json: ddlMaterial},
            {sheet: 1, row: 40, col: 4, json: ddlMachine},
            {sheet: 1, row: 65, col: 4, json: ddlMaching},
            {sheet: 1, row: 70, col: 4, json: ddlCold},
            {sheet: 1, row: 74, col: 4, json: ddlSand},
            {sheet: 1, row: 79, col: 4, json: ddl079}, // [[A0530]] 皮膜處理
            {sheet: 1, row: 12, col: 5, json: ddlSurface},
            {sheet: 1, row: 10, col: 5, json: ddlMaterial},
            {sheet: 1, row: 40, col: 5, json: ddlMachine},
            {sheet: 1, row: 65, col: 5, json: ddlMaching},
            {sheet: 1, row: 70, col: 5, json: ddlCold},
            {sheet: 1, row: 74, col: 5, json: ddlSand},
            {sheet: 1, row: 79, col: 5, json: ddl079}, // [[A0530]] 皮膜處理
            {sheet: 1, row: 12, col: 6, json: ddlSurface},
            {sheet: 1, row: 10, col: 6, json: ddlMaterial},
            {sheet: 1, row: 40, col: 6, json: ddlMachine},
            {sheet: 1, row: 65, col: 6, json: ddlMaching},
            {sheet: 1, row: 70, col: 6, json: ddlCold},
            {sheet: 1, row: 74, col: 6, json: ddlSand},
            {sheet: 1, row: 79, col: 6, json: ddl079}, // [[A0530]] 皮膜處理
            {sheet: 1, row: 12, col: 7, json: ddlSurface},
            {sheet: 1, row: 10, col: 7, json: ddlMaterial},
            {sheet: 1, row: 40, col: 7, json: ddlMachine},
            {sheet: 1, row: 65, col: 7, json: ddlMaching},
            {sheet: 1, row: 70, col: 7, json: ddlCold},
            {sheet: 1, row: 74, col: 7, json: ddlSand},
            {sheet: 1, row: 79, col: 7, json: ddl079}, // [[A0530]] 皮膜處理
            {sheet: 1, row: 12, col: 8, json: ddlSurface},
            {sheet: 1, row: 10, col: 8, json: ddlMaterial},
            {sheet: 1, row: 40, col: 8, json: ddlMachine},
            {sheet: 1, row: 65, col: 8, json: ddlMaching},
            {sheet: 1, row: 70, col: 8, json: ddlCold},
            {sheet: 1, row: 74, col: 8, json: ddlSand},
            {sheet: 1, row: 79, col: 8, json: ddl079}, // [[A0530]] 皮膜處理
            {sheet: 1, row: 23, col: 3, json: styleSubTotal({data: '=(C19+C20+C21+C22)'})},
            {sheet: 1, row: 23, col: 4, json: styleSubTotal({data: '=(D19+D20+D21+D22)'})},
            {sheet: 1, row: 23, col: 5, json: styleSubTotal({data: '=(E19+E20+E21+E22)'})},
            {sheet: 1, row: 23, col: 6, json: styleSubTotal({data: '=(F19+F20+F21+F22)'})},
            {sheet: 1, row: 23, col: 7, json: styleSubTotal({data: '=(G19+G20+G21+G22)'})},
            {sheet: 1, row: 23, col: 8, json: styleSubTotal({data: '=(H19+H20+H21+H22)'})},
            {sheet: 1, row: 24, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C23/6.35)'}},
            {sheet: 1, row: 24, col: 4, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(D23/6.35)'}},
            {sheet: 1, row: 24, col: 5, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(E23/6.35)'}},
            {sheet: 1, row: 24, col: 6, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(F23/6.35)'}},
            {sheet: 1, row: 24, col: 7, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(G23/6.35)'}},
            {sheet: 1, row: 24, col: 8, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(H23/6.35)'}},
            {sheet: 1, row: 29, col: 3, json: {ta: 'center', dsd: 'ed', data: '=C10', cal: true}},
            {sheet: 1, row: 29, col: 4, json: {ta: 'center', dsd: 'ed', data: '=D10', cal: true}},
            {sheet: 1, row: 29, col: 5, json: {ta: 'center', dsd: 'ed', data: '=E10', cal: true}},
            {sheet: 1, row: 29, col: 6, json: {ta: 'center', dsd: 'ed', data: '=F10', cal: true}},
            {sheet: 1, row: 29, col: 7, json: {ta: 'center', dsd: 'ed', data: '=G10', cal: true}},
            {sheet: 1, row: 29, col: 8, json: {ta: 'center', dsd: 'ed', data: '=H10', cal: true}},
            {sheet: 1, row: 31, col: 3, json: {dsd: 'ed', data: '=C11', cal: true}},
            {sheet: 1, row: 31, col: 4, json: {dsd: 'ed', data: '=D11', cal: true}},
            {sheet: 1, row: 31, col: 5, json: {dsd: 'ed', data: '=E11', cal: true}},
            {sheet: 1, row: 31, col: 6, json: {dsd: 'ed', data: '=F11', cal: true}},
            {sheet: 1, row: 31, col: 7, json: {dsd: 'ed', data: '=G11', cal: true}},
            {sheet: 1, row: 31, col: 8, json: {dsd: 'ed', data: '=H11', cal: true}},
            {sheet: 1, row: 32, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '=C30*C31/1000', cal: true}},
            {sheet: 1, row: 32, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '=D30*D31/1000', cal: true}},
            {sheet: 1, row: 32, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '=E30*E31/1000', cal: true}},
            {sheet: 1, row: 32, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '=F30*F31/1000', cal: true}},
            {sheet: 1, row: 32, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '=G30*G31/1000', cal: true}},
            {sheet: 1, row: 32, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '=H30*H31/1000', cal: true}},
//
// file:D:\xampp\htdocs\project-rfq\A0602\rfq\php-excel\make-js-mainjs-helper.php line:376 function: makeFormula34 --- start ---
//
            {sheet: 1, row: 34, col: 3, json: {fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '=IF(ISNA (100*C31*C16/(C31*C16+C33)),0, 100*C31*C16/(C31*C16+C33) )'}},
            {sheet: 1, row: 34, col: 4, json: {fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '=IF(ISNA (100*D31*D16/(D31*D16+D33)),0, 100*D31*D16/(D31*D16+D33) )'}},
            {sheet: 1, row: 34, col: 5, json: {fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '=IF(ISNA (100*E31*E16/(E31*E16+E33)),0, 100*E31*E16/(E31*E16+E33) )'}},
            {sheet: 1, row: 34, col: 6, json: {fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '=IF(ISNA (100*F31*F16/(F31*F16+F33)),0, 100*F31*F16/(F31*F16+F33) )'}},
            {sheet: 1, row: 34, col: 7, json: {fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '=IF(ISNA (100*G31*G16/(G31*G16+G33)),0, 100*G31*G16/(G31*G16+G33) )'}},
            {sheet: 1, row: 34, col: 8, json: {fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '=IF(ISNA (100*H31*H16/(H31*H16+H33)),0, 100*H31*H16/(H31*H16+H33) )'}},
//
// file:D:\xampp\htdocs\project-rfq\A0602\rfq\php-excel\make-js-mainjs-helper.php line:388 function: makeFormula34 --- end ---
//

            {sheet: 1, row: 36, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C30-C35)*C33/1000/C16'}},
            {sheet: 1, row: 36, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(D30-D35)*D33/1000/D16'}},
            {sheet: 1, row: 36, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(E30-E35)*E33/1000/E16'}},
            {sheet: 1, row: 36, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(F30-F35)*F33/1000/F16'}},
            {sheet: 1, row: 36, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(G30-G35)*G33/1000/G16'}},
            {sheet: 1, row: 36, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(H30-H35)*H33/1000/H16'}},
            {sheet: 1, row: 37, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C31+C33)*C30*0.02/1000/C16'}},
            {sheet: 1, row: 37, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(D31+D33)*D30*0.02/1000/D16'}},
            {sheet: 1, row: 37, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(E31+E33)*E30*0.02/1000/E16'}},
            {sheet: 1, row: 37, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(F31+F33)*F30*0.02/1000/F16'}},
            {sheet: 1, row: 37, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(G31+G33)*G30*0.02/1000/G16'}},
            {sheet: 1, row: 37, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(H31+H33)*H30*0.02/1000/H16'}},
            {sheet: 1, row: 38, col: 3, json: styleSubTotal({data: '=IF(ISNA(C32+C36+C37),0,(C32+C36+C37))'})},
            {sheet: 1, row: 38, col: 4, json: styleSubTotal({data: '=IF(ISNA(D32+D36+D37),0,(D32+D36+D37))'})},
            {sheet: 1, row: 38, col: 5, json: styleSubTotal({data: '=IF(ISNA(E32+E36+E37),0,(E32+E36+E37))'})},
            {sheet: 1, row: 38, col: 6, json: styleSubTotal({data: '=IF(ISNA(F32+F36+F37),0,(F32+F36+F37))'})},
            {sheet: 1, row: 38, col: 7, json: styleSubTotal({data: '=IF(ISNA(G32+G36+G37),0,(G32+G36+G37))'})},
            {sheet: 1, row: 38, col: 8, json: styleSubTotal({data: '=IF(ISNA(H32+H36+H37),0,(H32+H36+H37))'})},
//
// file:D:\xampp\htdocs\project-rfq\A0602\rfq\php-excel\make-js-mainjs-helper.php line:449 function: makeFormula43 --- start ---
//
            {sheet: 1, row: 43, col: 3, json: {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '=IF(C42==0,0,3600/C42 )'}},
            {sheet: 1, row: 43, col: 4, json: {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '=IF(D42==0,0,3600/D42 )'}},
            {sheet: 1, row: 43, col: 5, json: {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '=IF(E42==0,0,3600/E42 )'}},
            {sheet: 1, row: 43, col: 6, json: {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '=IF(F42==0,0,3600/F42 )'}},
            {sheet: 1, row: 43, col: 7, json: {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '=IF(G42==0,0,3600/G42 )'}},
            {sheet: 1, row: 43, col: 8, json: {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '=IF(H42==0,0,3600/H42 )'}},
//
// file:D:\xampp\htdocs\project-rfq\A0602\rfq\php-excel\make-js-mainjs-helper.php line:465 function: makeFormula43 --- end ---
//


//
// file:D:\xampp\htdocs\project-rfq\A0602\rfq\php-excel\make-js-mainjs-helper.php line:469 function: makeFormula44 --- start ---
//
            {sheet: 1, row: 44, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=IF(C43==0 ,0,C41/C43 )'}},
            {sheet: 1, row: 44, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=IF(D43==0 ,0,D41/D43 )'}},
            {sheet: 1, row: 44, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=IF(E43==0 ,0,E41/E43 )'}},
            {sheet: 1, row: 44, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=IF(F43==0 ,0,F41/F43 )'}},
            {sheet: 1, row: 44, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=IF(G43==0 ,0,G41/G43 )'}},
            {sheet: 1, row: 44, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=IF(H43==0 ,0,H41/H43 )'}},
//
// file:D:\xampp\htdocs\project-rfq\A0602\rfq\php-excel\make-js-mainjs-helper.php line:488 function: makeFormula44 --- end ---
//
            {sheet: 1, row: 45, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)/C43'}},
            {sheet: 1, row: 45, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(D40,LOOKUP2!$A$1:$C$100,3,0)/D43'}},
            {sheet: 1, row: 45, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(E40,LOOKUP2!$A$1:$C$100,3,0)/E43'}},
            {sheet: 1, row: 45, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(F40,LOOKUP2!$A$1:$C$100,3,0)/F43'}},
            {sheet: 1, row: 45, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(G40,LOOKUP2!$A$1:$C$100,3,0)/G43'}},
            {sheet: 1, row: 45, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(H40,LOOKUP2!$A$1:$C$100,3,0)/H43'}},
            {sheet: 1, row: 46, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)'}},
            {sheet: 1, row: 46, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(D40,LOOKUP2!$A$1:$C$100,3,0)'}},
            {sheet: 1, row: 46, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(E40,LOOKUP2!$A$1:$C$100,3,0)'}},
            {sheet: 1, row: 46, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(F40,LOOKUP2!$A$1:$C$100,3,0)'}},
            {sheet: 1, row: 46, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(G40,LOOKUP2!$A$1:$C$100,3,0)'}},
            {sheet: 1, row: 46, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(H40,LOOKUP2!$A$1:$C$100,3,0)'}},
            {sheet: 1, row: 48, col: 3, json: styleSubTotal({data: setNaToZero('(C44+C45)*(1+(1-C47/100))/C16')})},
            {sheet: 1, row: 48, col: 4, json: styleSubTotal({data: setNaToZero('(D44+D45)*(1+(1-D47/100))/D16')})},
            {sheet: 1, row: 48, col: 5, json: styleSubTotal({data: setNaToZero('(E44+E45)*(1+(1-E47/100))/E16')})},
            {sheet: 1, row: 48, col: 6, json: styleSubTotal({data: setNaToZero('(F44+F45)*(1+(1-F47/100))/F16')})},
            {sheet: 1, row: 48, col: 7, json: styleSubTotal({data: setNaToZero('(G44+G45)*(1+(1-G47/100))/G16')})},
            {sheet: 1, row: 48, col: 8, json: styleSubTotal({data: setNaToZero('(H44+H45)*(1+(1-H47/100))/H16')})},
            {sheet: 1, row: 51, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '35'}},
            {sheet: 1, row: 51, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '35'}},
            {sheet: 1, row: 51, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '35'}},
            {sheet: 1, row: 51, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '35'}},
            {sheet: 1, row: 51, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '35'}},
            {sheet: 1, row: 51, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '35'}},
            {sheet: 1, row: 52, col: 3, json: styleSubTotal({data: '=(C50/3600)*C51'})},
            {sheet: 1, row: 52, col: 4, json: styleSubTotal({data: '=(D50/3600)*D51'})},
            {sheet: 1, row: 52, col: 5, json: styleSubTotal({data: '=(E50/3600)*E51'})},
            {sheet: 1, row: 52, col: 6, json: styleSubTotal({data: '=(F50/3600)*F51'})},
            {sheet: 1, row: 52, col: 7, json: styleSubTotal({data: '=(G50/3600)*G51'})},
            {sheet: 1, row: 52, col: 8, json: styleSubTotal({data: '=(H50/3600)*H51'})},
            {sheet: 1, row: 55, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 55, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 55, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 55, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 55, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 55, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 56, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C54/3600)*C55'}},
            {sheet: 1, row: 56, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(D54/3600)*D55'}},
            {sheet: 1, row: 56, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(E54/3600)*E55'}},
            {sheet: 1, row: 56, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(F54/3600)*F55'}},
            {sheet: 1, row: 56, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(G54/3600)*G55'}},
            {sheet: 1, row: 56, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(H54/3600)*H55'}},
            {sheet: 1, row: 57, col: 3, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 57, col: 4, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 57, col: 5, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 57, col: 6, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 57, col: 7, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 57, col: 8, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 47, col: 3, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 47, col: 4, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 47, col: 5, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 47, col: 6, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 47, col: 7, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 47, col: 8, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 68, col: 3, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 68, col: 4, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 68, col: 5, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 68, col: 6, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 68, col: 7, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 68, col: 8, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 89, col: 3, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 89, col: 4, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 89, col: 5, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 89, col: 6, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 89, col: 7, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 89, col: 8, json: styleInput({fm: 'number', dfm: '0%', data: '95'})},
            {sheet: 1, row: 59, col: 3, json: styleSubTotal({data: '=C56*(1+(1-C57/100))'})},
            {sheet: 1, row: 59, col: 4, json: styleSubTotal({data: '=D56*(1+(1-D57/100))'})},
            {sheet: 1, row: 59, col: 5, json: styleSubTotal({data: '=E56*(1+(1-E57/100))'})},
            {sheet: 1, row: 59, col: 6, json: styleSubTotal({data: '=F56*(1+(1-F57/100))'})},
            {sheet: 1, row: 59, col: 7, json: styleSubTotal({data: '=G56*(1+(1-G57/100))'})},
            {sheet: 1, row: 59, col: 8, json: styleSubTotal({data: '=H56*(1+(1-H57/100))'})},
            {sheet: 1, row: 62, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 62, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 62, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 62, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 62, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 62, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},
            {sheet: 1, row: 63, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C61/3600)*C62'}},
            {sheet: 1, row: 63, col: 4, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(D61/3600)*D62'}},
            {sheet: 1, row: 63, col: 5, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(E61/3600)*E62'}},
            {sheet: 1, row: 63, col: 6, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(F61/3600)*F62'}},
            {sheet: 1, row: 63, col: 7, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(G61/3600)*G62'}},
            {sheet: 1, row: 63, col: 8, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(H61/3600)*H62'}},
            {sheet: 1, row: 64, col: 3, json: styleSubTotal({data: '=(C61/3600)*C62'})},
            {sheet: 1, row: 64, col: 4, json: styleSubTotal({data: '=(D61/3600)*D62'})},
            {sheet: 1, row: 64, col: 5, json: styleSubTotal({data: '=(E61/3600)*E62'})},
            {sheet: 1, row: 64, col: 6, json: styleSubTotal({data: '=(F61/3600)*F62'})},
            {sheet: 1, row: 64, col: 7, json: styleSubTotal({data: '=(G61/3600)*G62'})},
            {sheet: 1, row: 64, col: 8, json: styleSubTotal({data: '=(H61/3600)*H62'})},
            {sheet: 1, row: 105, col: 3, json: {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=C38+C48+C52+C59+C64+C69+C73+C77+C83+C91+C95+C99+C104'}},
            {sheet: 1, row: 105, col: 4, json: {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=D38+D48+D52+D59+D64+D69+D73+D77+D83+D91+D95+D99+D104'}},
            {sheet: 1, row: 105, col: 5, json: {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=E38+E48+E52+E59+E64+E69+E73+E77+E83+E91+E95+E99+E104'}},
            {sheet: 1, row: 105, col: 6, json: {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=F38+F48+F52+F59+F64+F69+F73+F77+F83+F91+F95+F99+F104'}},
            {sheet: 1, row: 105, col: 7, json: {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=G38+G48+G52+G59+G64+G69+G73+G77+G83+G91+G95+G99+G104'}},
            {sheet: 1, row: 105, col: 8, json: {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=H38+H48+H52+H59+H64+H69+H73+H77+H83+H91+H95+H99+H104'}},
            {sheet: 1, row: 106, col: 3, json: styleInput({fm: 'number', dfm: '0%', data: '20'})},
            {sheet: 1, row: 106, col: 4, json: styleInput({fm: 'number', dfm: '0%', data: '20'})},
            {sheet: 1, row: 106, col: 5, json: styleInput({fm: 'number', dfm: '0%', data: '20'})},
            {sheet: 1, row: 106, col: 6, json: styleInput({fm: 'number', dfm: '0%', data: '20'})},
            {sheet: 1, row: 106, col: 7, json: styleInput({fm: 'number', dfm: '0%', data: '20'})},
            {sheet: 1, row: 106, col: 8, json: styleInput({fm: 'number', dfm: '0%', data: '20'})},
            {sheet: 1, row: 86, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 86, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 86, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 86, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 86, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 86, col: 8, json: styleInput({fm: 'number', data: '0'})},
//makeInputNumberZero ---start


            {sheet: 1, row: 11, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 11, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 11, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 11, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 11, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 11, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 16, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 16, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 16, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 16, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 16, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 16, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 33, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 33, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 33, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 33, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 33, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 33, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 42, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 42, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 42, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 42, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 42, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 42, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 50, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 50, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 50, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 50, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 50, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 50, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 54, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 54, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 54, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 54, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 54, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 54, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 61, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 61, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 61, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 61, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 61, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 61, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 66, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 66, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 66, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 66, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 66, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 66, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 71, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 71, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 71, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 71, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 71, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 71, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 75, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 75, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 75, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 75, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 75, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 75, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 80, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 80, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 80, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 80, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 80, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 80, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 82, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 82, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 82, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 82, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 82, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 82, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 90, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 90, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 90, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 90, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 90, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 90, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 93, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 93, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 93, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 93, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 93, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 93, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 97, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 97, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 97, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 97, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 97, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 97, col: 8, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 101, col: 3, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 101, col: 4, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 101, col: 5, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 101, col: 6, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 101, col: 7, json: styleInput({fm: 'number', data: '0'})},
            {sheet: 1, row: 101, col: 8, json: styleInput({fm: 'number', data: '0'})},
//makeInputNumberZero ---end





//makeInputRmbZero ---start


            {sheet: 1, row: 19, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 19, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 19, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 19, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 19, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 19, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 20, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 20, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 20, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 20, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 20, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 20, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 21, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 21, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 21, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 21, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 21, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 21, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 22, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 22, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 22, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 22, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 22, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 22, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 81, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 81, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 81, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 81, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 81, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 81, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 87, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 87, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 87, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 87, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 87, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 87, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 88, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 88, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 88, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 88, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 88, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 88, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 94, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 94, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 94, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 94, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 94, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 94, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 103, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 103, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 103, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 103, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 103, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 103, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 108, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 108, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 108, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 108, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 108, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 108, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 109, col: 3, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 109, col: 4, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 109, col: 5, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 109, col: 6, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 109, col: 7, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
            {sheet: 1, row: 109, col: 8, json: styleInput({fm: 'money|¥|2|none', data: '0'})},
//makeInputRmbZero ---end


            {sheet: 1, row: 85, col: 3, json: {dsd: 'ed', ta: 'center', cal: true, data: '=C12'}},
            {sheet: 1, row: 85, col: 4, json: {dsd: 'ed', ta: 'center', cal: true, data: '=D12'}},
            {sheet: 1, row: 85, col: 5, json: {dsd: 'ed', ta: 'center', cal: true, data: '=E12'}},
            {sheet: 1, row: 85, col: 6, json: {dsd: 'ed', ta: 'center', cal: true, data: '=F12'}},
            {sheet: 1, row: 85, col: 7, json: {dsd: 'ed', ta: 'center', cal: true, data: '=G12'}},
            {sheet: 1, row: 85, col: 8, json: {dsd: 'ed', ta: 'center', cal: true, data: '=H12'}},
// --- extend69() ---
            {sheet: 1, row: 69, col: 3, json: styleSubTotal({data: setNaToZero("(C66/3600)*C67 * (1 + (1 - C68 / 100))")})},
            {sheet: 1, row: 69, col: 4, json: styleSubTotal({data: setNaToZero("(D66/3600)*D67 * (1 + (1 - D68 / 100))")})},
            {sheet: 1, row: 69, col: 5, json: styleSubTotal({data: setNaToZero("(E66/3600)*E67 * (1 + (1 - E68 / 100))")})},
            {sheet: 1, row: 69, col: 6, json: styleSubTotal({data: setNaToZero("(F66/3600)*F67 * (1 + (1 - F68 / 100))")})},
            {sheet: 1, row: 69, col: 7, json: styleSubTotal({data: setNaToZero("(G66/3600)*G67 * (1 + (1 - G68 / 100))")})},
            {sheet: 1, row: 69, col: 8, json: styleSubTotal({data: setNaToZero("(H66/3600)*H67 * (1 + (1 - H68 / 100))")})},
// --- extend73X(41, {sheet: 1, row: 41, col: 3, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(C40,LOOKUP2!$A$1:$C$100,2,0)),0,VLOOKUP(C40,LOOKUP2!$A$1:$C$100,2,0))"})}, ) ---
            {sheet: 1, row: 41, col: 3, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(C40,LOOKUP2!$A$1:$C$100,2,0)),0,VLOOKUP(C40,LOOKUP2!$A$1:$C$100,2,0))"})},
            {sheet: 1, row: 41, col: 4, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(D40,LOOKUP2!$A$1:$C$100,2,0)),0,VLOOKUP(D40,LOOKUP2!$A$1:$C$100,2,0))"})},
            {sheet: 1, row: 41, col: 5, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(E40,LOOKUP2!$A$1:$C$100,2,0)),0,VLOOKUP(E40,LOOKUP2!$A$1:$C$100,2,0))"})},
            {sheet: 1, row: 41, col: 6, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(F40,LOOKUP2!$A$1:$C$100,2,0)),0,VLOOKUP(F40,LOOKUP2!$A$1:$C$100,2,0))"})},
            {sheet: 1, row: 41, col: 7, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(G40,LOOKUP2!$A$1:$C$100,2,0)),0,VLOOKUP(G40,LOOKUP2!$A$1:$C$100,2,0))"})},
            {sheet: 1, row: 41, col: 8, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(H40,LOOKUP2!$A$1:$C$100,2,0)),0,VLOOKUP(H40,LOOKUP2!$A$1:$C$100,2,0))"})},
// --- extend73X(73, {sheet: 1, row: 73, col: 3, json: styleSubTotal({data: setNaToZero("(C71/3600)*C72")})},) ---
            {sheet: 1, row: 73, col: 3, json: styleSubTotal({data: setNaToZero("(C71/3600)*C72")})},
            {sheet: 1, row: 73, col: 4, json: styleSubTotal({data: setNaToZero("(D71/3600)*D72")})},
            {sheet: 1, row: 73, col: 5, json: styleSubTotal({data: setNaToZero("(E71/3600)*E72")})},
            {sheet: 1, row: 73, col: 6, json: styleSubTotal({data: setNaToZero("(F71/3600)*F72")})},
            {sheet: 1, row: 73, col: 7, json: styleSubTotal({data: setNaToZero("(G71/3600)*G72")})},
            {sheet: 1, row: 73, col: 8, json: styleSubTotal({data: setNaToZero("(H71/3600)*H72")})},
// --- extend73X(77, {sheet: 1, row: 77, col: 3, json: styleSubTotal({data: "=IF(ISNA(C76),0,(C75/3600)*C76)"})}, ) ---
            {sheet: 1, row: 77, col: 3, json: styleSubTotal({data: "=IF(ISNA(C76),0,(C75/3600)*C76)"})},
            {sheet: 1, row: 77, col: 4, json: styleSubTotal({data: "=IF(ISNA(D76),0,(D75/3600)*D76)"})},
            {sheet: 1, row: 77, col: 5, json: styleSubTotal({data: "=IF(ISNA(E76),0,(E75/3600)*E76)"})},
            {sheet: 1, row: 77, col: 6, json: styleSubTotal({data: "=IF(ISNA(F76),0,(F75/3600)*F76)"})},
            {sheet: 1, row: 77, col: 7, json: styleSubTotal({data: "=IF(ISNA(G76),0,(G75/3600)*G76)"})},
            {sheet: 1, row: 77, col: 8, json: styleSubTotal({data: "=IF(ISNA(H76),0,(H75/3600)*H76)"})},
// --- extend73X(83, {sheet: 1, row: 83, col: 3, json: styleSubTotal({data: "=C80*C81*C82"})}, ) ---
            {sheet: 1, row: 83, col: 3, json: styleSubTotal({data: "=C80*C81*C82"})},
            {sheet: 1, row: 83, col: 4, json: styleSubTotal({data: "=D80*D81*D82"})},
            {sheet: 1, row: 83, col: 5, json: styleSubTotal({data: "=E80*E81*E82"})},
            {sheet: 1, row: 83, col: 6, json: styleSubTotal({data: "=F80*F81*F82"})},
            {sheet: 1, row: 83, col: 7, json: styleSubTotal({data: "=G80*G81*G82"})},
            {sheet: 1, row: 83, col: 8, json: styleSubTotal({data: "=H80*H81*H82"})},
// --- extend73X(91, {sheet: 1, row: 91, col: 3, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})}, ) ---
            {sheet: 1, row: 91, col: 3, json: styleSubTotal({data: "=C86*(C87+C88)*(1+(1-C89/100))*C90"})},
            {sheet: 1, row: 91, col: 4, json: styleSubTotal({data: "=D86*(D87+D88)*(1+(1-D89/100))*D90"})},
            {sheet: 1, row: 91, col: 5, json: styleSubTotal({data: "=E86*(E87+E88)*(1+(1-E89/100))*E90"})},
            {sheet: 1, row: 91, col: 6, json: styleSubTotal({data: "=F86*(F87+F88)*(1+(1-F89/100))*F90"})},
            {sheet: 1, row: 91, col: 7, json: styleSubTotal({data: "=G86*(G87+G88)*(1+(1-G89/100))*G90"})},
            {sheet: 1, row: 91, col: 8, json: styleSubTotal({data: "=H86*(H87+H88)*(1+(1-H89/100))*H90"})},
// --- extend73X(95, {sheet: 1, row: 95, col: 3, json: styleSubTotal({data: "=C94"})}, ) ---
            {sheet: 1, row: 95, col: 3, json: styleSubTotal({data: "=C94"})},
            {sheet: 1, row: 95, col: 4, json: styleSubTotal({data: "=D94"})},
            {sheet: 1, row: 95, col: 5, json: styleSubTotal({data: "=E94"})},
            {sheet: 1, row: 95, col: 6, json: styleSubTotal({data: "=F94"})},
            {sheet: 1, row: 95, col: 7, json: styleSubTotal({data: "=G94"})},
            {sheet: 1, row: 95, col: 8, json: styleSubTotal({data: "=H94"})},
// --- extend73X(98, {sheet: 1, row: 98, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}}, ) ---
            {sheet: 1, row: 98, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 98, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 98, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 98, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 98, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}},
            {sheet: 1, row: 98, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=VLOOKUP('气密性测试',LOOKUP04!$A$2:$B$17,2,0)"}},
// --- extend73X(99, {sheet: 1, row: 99, col: 3, json: styleSubTotal({data: "=C97/3600*C98"})}, ) ---
            {sheet: 1, row: 99, col: 3, json: styleSubTotal({data: "=C97/3600*C98"})},
            {sheet: 1, row: 99, col: 4, json: styleSubTotal({data: "=D97/3600*D98"})},
            {sheet: 1, row: 99, col: 5, json: styleSubTotal({data: "=E97/3600*E98"})},
            {sheet: 1, row: 99, col: 6, json: styleSubTotal({data: "=F97/3600*F98"})},
            {sheet: 1, row: 99, col: 7, json: styleSubTotal({data: "=G97/3600*G98"})},
            {sheet: 1, row: 99, col: 8, json: styleSubTotal({data: "=H97/3600*H98"})},
// --- extend73X(102, {sheet: 1, row: 102, col: 3, json: styleSubTotal({data: "=VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})}, ) ---
            {sheet: 1, row: 102, col: 3, json: styleSubTotal({data: "=VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})},
            {sheet: 1, row: 102, col: 4, json: styleSubTotal({data: "=VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})},
            {sheet: 1, row: 102, col: 5, json: styleSubTotal({data: "=VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})},
            {sheet: 1, row: 102, col: 6, json: styleSubTotal({data: "=VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})},
            {sheet: 1, row: 102, col: 7, json: styleSubTotal({data: "=VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})},
            {sheet: 1, row: 102, col: 8, json: styleSubTotal({data: "=VLOOKUP('筛选和包装',LOOKUP04!$A$2:$B$17,2,0)"})},
// --- extend73X(104, {sheet: 1, row: 104, col: 3, json: styleSubTotal({data: "=C101/3600*C102+C103"})}, ) ---
            {sheet: 1, row: 104, col: 3, json: styleSubTotal({data: "=C101/3600*C102+C103"})},
            {sheet: 1, row: 104, col: 4, json: styleSubTotal({data: "=D101/3600*D102+D103"})},
            {sheet: 1, row: 104, col: 5, json: styleSubTotal({data: "=E101/3600*E102+E103"})},
            {sheet: 1, row: 104, col: 6, json: styleSubTotal({data: "=F101/3600*F102+F103"})},
            {sheet: 1, row: 104, col: 7, json: styleSubTotal({data: "=G101/3600*G102+G103"})},
            {sheet: 1, row: 104, col: 8, json: styleSubTotal({data: "=H101/3600*H102+H103"})},
// [[A0530]]

// --- extend73X(81, {sheet: 1, row: 81, col: 3, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(C79,DDL079!$A$1:$B$99,2,0)),0,VLOOKUP(C79,DDL079!$A$1:$B$99,2,0))"})}, ) ---
            {sheet: 1, row: 81, col: 3, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(C79,DDL079!$A$1:$B$99,2,0)),0,VLOOKUP(C79,DDL079!$A$1:$B$99,2,0))"})},
            {sheet: 1, row: 81, col: 4, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(D79,DDL079!$A$1:$B$99,2,0)),0,VLOOKUP(D79,DDL079!$A$1:$B$99,2,0))"})},
            {sheet: 1, row: 81, col: 5, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(E79,DDL079!$A$1:$B$99,2,0)),0,VLOOKUP(E79,DDL079!$A$1:$B$99,2,0))"})},
            {sheet: 1, row: 81, col: 6, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(F79,DDL079!$A$1:$B$99,2,0)),0,VLOOKUP(F79,DDL079!$A$1:$B$99,2,0))"})},
            {sheet: 1, row: 81, col: 7, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(G79,DDL079!$A$1:$B$99,2,0)),0,VLOOKUP(G79,DDL079!$A$1:$B$99,2,0))"})},
            {sheet: 1, row: 81, col: 8, json: styleSubTotal({data: "=IF(ISNA(VLOOKUP(H79,DDL079!$A$1:$B$99,2,0)),0,VLOOKUP(H79,DDL079!$A$1:$B$99,2,0))"})},
// --- extend73X(107, {sheet: 1, row: 107, col: 3, json: styleSubTotal({data: "=C105*C106/100"})}, ) ---
            {sheet: 1, row: 107, col: 3, json: styleSubTotal({data: "=C105*C106/100"})},
            {sheet: 1, row: 107, col: 4, json: styleSubTotal({data: "=D105*D106/100"})},
            {sheet: 1, row: 107, col: 5, json: styleSubTotal({data: "=E105*E106/100"})},
            {sheet: 1, row: 107, col: 6, json: styleSubTotal({data: "=F105*F106/100"})},
            {sheet: 1, row: 107, col: 7, json: styleSubTotal({data: "=G105*G106/100"})},
            {sheet: 1, row: 107, col: 8, json: styleSubTotal({data: "=H105*H106/100"})},
// --- extend73X(110, {sheet: 1, row: 110, col: 3, json: styleSubTotal({data: "=C108+C109"})}, ) ---
            {sheet: 1, row: 110, col: 3, json: styleSubTotal({data: "=C108+C109"})},
            {sheet: 1, row: 110, col: 4, json: styleSubTotal({data: "=D108+D109"})},
            {sheet: 1, row: 110, col: 5, json: styleSubTotal({data: "=E108+E109"})},
            {sheet: 1, row: 110, col: 6, json: styleSubTotal({data: "=F108+F109"})},
            {sheet: 1, row: 110, col: 7, json: styleSubTotal({data: "=G108+G109"})},
            {sheet: 1, row: 110, col: 8, json: styleSubTotal({data: "=H108+H109"})},
// --- extend73X(111, {sheet: 1, row: 111, col: 3, json: styleSubTotal({data: "=C105+C107+C110"})}, ) ---
            {sheet: 1, row: 111, col: 3, json: styleSubTotal({data: "=C105+C107+C110"})},
            {sheet: 1, row: 111, col: 4, json: styleSubTotal({data: "=D105+D107+D110"})},
            {sheet: 1, row: 111, col: 5, json: styleSubTotal({data: "=E105+E107+E110"})},
            {sheet: 1, row: 111, col: 6, json: styleSubTotal({data: "=F105+F107+F110"})},
            {sheet: 1, row: 111, col: 7, json: styleSubTotal({data: "=G105+G107+G110"})},
            {sheet: 1, row: 111, col: 8, json: styleSubTotal({data: "=H105+H107+H110"})},

// --- extend73X(112, {sheet: 1, row: 112, col: 3, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(C111/6.35)"}}, ) ---
            {sheet: 1, row: 112, col: 3, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(C111/6.35)"}},
            {sheet: 1, row: 112, col: 4, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(D111/6.35)"}},
            {sheet: 1, row: 112, col: 5, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(E111/6.35)"}},
            {sheet: 1, row: 112, col: 6, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(F111/6.35)"}},
            {sheet: 1, row: 112, col: 7, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(G111/6.35)"}},
            {sheet: 1, row: 112, col: 8, json: {fm: "money|$|2|none", dsd: "ed", cal: true, data: "=(H111/6.35)"}},
// --- extend73X(30, {sheet: 1, row: 30, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C10,LOOKUP!$A$3:$C$20,2,0)),'',VLOOKUP(C10,LOOKUP!$A$3:$C$20,2,0))"}},) ---
            {sheet: 1, row: 30, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C10,LOOKUP!$A$3:$C$20,2,0)),'',VLOOKUP(C10,LOOKUP!$A$3:$C$20,2,0))"}},
            {sheet: 1, row: 30, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(D10,LOOKUP!$A$3:$C$20,2,0)),'',VLOOKUP(D10,LOOKUP!$A$3:$C$20,2,0))"}},
            {sheet: 1, row: 30, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(E10,LOOKUP!$A$3:$C$20,2,0)),'',VLOOKUP(E10,LOOKUP!$A$3:$C$20,2,0))"}},
            {sheet: 1, row: 30, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(F10,LOOKUP!$A$3:$C$20,2,0)),'',VLOOKUP(F10,LOOKUP!$A$3:$C$20,2,0))"}},
            {sheet: 1, row: 30, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(G10,LOOKUP!$A$3:$C$20,2,0)),'',VLOOKUP(G10,LOOKUP!$A$3:$C$20,2,0))"}},
            {sheet: 1, row: 30, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(H10,LOOKUP!$A$3:$C$20,2,0)),'',VLOOKUP(H10,LOOKUP!$A$3:$C$20,2,0))"}},
// --- extend73X(35,{sheet: 1, row: 35, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C10,LOOKUP!$A$3:$C$20,3,0)),'' ,VLOOKUP(C10,LOOKUP!$A$3:$C$20,3,0))"}},) ---
            {sheet: 1, row: 35, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C10,LOOKUP!$A$3:$C$20,3,0)),'' ,VLOOKUP(C10,LOOKUP!$A$3:$C$20,3,0))"}},
            {sheet: 1, row: 35, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(D10,LOOKUP!$A$3:$C$20,3,0)),'' ,VLOOKUP(D10,LOOKUP!$A$3:$C$20,3,0))"}},
            {sheet: 1, row: 35, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(E10,LOOKUP!$A$3:$C$20,3,0)),'' ,VLOOKUP(E10,LOOKUP!$A$3:$C$20,3,0))"}},
            {sheet: 1, row: 35, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(F10,LOOKUP!$A$3:$C$20,3,0)),'' ,VLOOKUP(F10,LOOKUP!$A$3:$C$20,3,0))"}},
            {sheet: 1, row: 35, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(G10,LOOKUP!$A$3:$C$20,3,0)),'' ,VLOOKUP(G10,LOOKUP!$A$3:$C$20,3,0))"}},
            {sheet: 1, row: 35, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(H10,LOOKUP!$A$3:$C$20,3,0)),'' ,VLOOKUP(H10,LOOKUP!$A$3:$C$20,3,0))"}},
// --- extend73X(45, {sheet: 1, row: 45, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)/C43), '' ,VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)/C43)"}},) ---
            {sheet: 1, row: 45, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)/C43), '' ,VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)/C43)"}},
            {sheet: 1, row: 45, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(D40,LOOKUP2!$A$1:$C$100,3,0)/D43), '' ,VLOOKUP(D40,LOOKUP2!$A$1:$C$100,3,0)/D43)"}},
            {sheet: 1, row: 45, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(E40,LOOKUP2!$A$1:$C$100,3,0)/E43), '' ,VLOOKUP(E40,LOOKUP2!$A$1:$C$100,3,0)/E43)"}},
            {sheet: 1, row: 45, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(F40,LOOKUP2!$A$1:$C$100,3,0)/F43), '' ,VLOOKUP(F40,LOOKUP2!$A$1:$C$100,3,0)/F43)"}},
            {sheet: 1, row: 45, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(G40,LOOKUP2!$A$1:$C$100,3,0)/G43), '' ,VLOOKUP(G40,LOOKUP2!$A$1:$C$100,3,0)/G43)"}},
            {sheet: 1, row: 45, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(H40,LOOKUP2!$A$1:$C$100,3,0)/H43), '' ,VLOOKUP(H40,LOOKUP2!$A$1:$C$100,3,0)/H43)"}},
// --- extend73X(46, {sheet: 1, row: 46, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)), '' , VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0))"}},) ---
            {sheet: 1, row: 46, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)), '' , VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0))"}},
            {sheet: 1, row: 46, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(D40,LOOKUP2!$A$1:$C$100,3,0)), '' , VLOOKUP(D40,LOOKUP2!$A$1:$C$100,3,0))"}},
            {sheet: 1, row: 46, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(E40,LOOKUP2!$A$1:$C$100,3,0)), '' , VLOOKUP(E40,LOOKUP2!$A$1:$C$100,3,0))"}},
            {sheet: 1, row: 46, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(F40,LOOKUP2!$A$1:$C$100,3,0)), '' , VLOOKUP(F40,LOOKUP2!$A$1:$C$100,3,0))"}},
            {sheet: 1, row: 46, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(G40,LOOKUP2!$A$1:$C$100,3,0)), '' , VLOOKUP(G40,LOOKUP2!$A$1:$C$100,3,0))"}},
            {sheet: 1, row: 46, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(H40,LOOKUP2!$A$1:$C$100,3,0)), '' , VLOOKUP(H40,LOOKUP2!$A$1:$C$100,3,0))"}},
// --- extend73X(67, {sheet: 1, row: 67, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C65,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(C65,LOOKUP04!$A$2:$B$17,2,0))"}},) ---
            {sheet: 1, row: 67, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C65,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(C65,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 67, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(D65,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(D65,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 67, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(E65,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(E65,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 67, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(F65,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(F65,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 67, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(G65,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(G65,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 67, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(H65,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(H65,LOOKUP04!$A$2:$B$17,2,0))"}},
// --- extend73X(72, {sheet: 1, row: 72, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C70,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(C70,LOOKUP04!$A$2:$B$17,2,0))"}},) ---
            {sheet: 1, row: 72, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C70,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(C70,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 72, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(D70,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(D70,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 72, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(E70,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(E70,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 72, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(F70,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(F70,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 72, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(G70,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(G70,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 72, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(H70,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(H70,LOOKUP04!$A$2:$B$17,2,0))"}},
// --- extend73X(76, {sheet: 1, row: 76, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C74,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(C74,LOOKUP04!$A$2:$B$17,2,0))"}}, ) ---
            {sheet: 1, row: 76, col: 3, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(C74,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(C74,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 76, col: 4, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(D74,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(D74,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 76, col: 5, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(E74,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(E74,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 76, col: 6, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(F74,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(F74,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 76, col: 7, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(G74,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(G74,LOOKUP04!$A$2:$B$17,2,0))"}},
            {sheet: 1, row: 76, col: 8, json: {fm: "money|¥|2|none", dsd: "ed", cal: true, data: "=IF(ISNA(VLOOKUP(H74,LOOKUP04!$A$2:$B$17,2,0)), '' ,VLOOKUP(H74,LOOKUP04!$A$2:$B$17,2,0))"}},
            /*
             **
             ** generated by script, /project-rfq/A0602/rfq/php-excel/make-js-mainjs-helper.php ----- (end)
             **
             */



            /*
             ** 
             ** generated by script, /project-rfq/A0601/rfq/php-excel/make-js-mainjs-helper.php ----- (end) 
             ** 
             */    /*
              ** 
              ** generated by script, /project-rfq/A0601/rfq/php-excel/make-js-mainjs-helper.php ----- (end) 
              ** 
              */
            /*
             **
             ** generated by script, /project-rfq/A0530/rfq/php-excel/make-js-mainjs-helper.php ----- (end)
             **
             */



//
//          // 只是做成最後一行
            {sheet: 1, row: 7, col: 1, json: {bgc: colorVersion, data: 'RFQ'}},
            
            // B0329
            // by Mark, 2017-03-29
            // {sheet: 1, row: 8, col: 1, json: {bgc: colorVersion, data: 'A1121'}}, // VERSION
            {sheet: 1, row: 8, col: 1, json: {bgc: colorVersion, data: 'B0329'}}, // VERSION
    
            {sheet: 1, row: 9, col: 1, json: {bgc: colorVersion, data: '公版'}},
        ]
    };
   


    // [[A0601]]
    // NOTE: use system function to insert row
    //SHEET_API.loadData(SHEET_API_HD, json, null, this);
    var MAX_ROW_NUMBER = 120;
    var MAX_COL_NUMBER = 9;

    SHEET_API.loadData(SHEET_API_HD, json, function () {
        SHEET_API.setMaxRowNumber(MAX_ROW_NUMBER);
//        SHEET_API.setMaxColNumber(8);//col H is NOT working well when copy/paste col
        SHEET_API.setMaxColNumber(MAX_COL_NUMBER);

    }, this);

//http://www.enterprisesheet.com/api/docs/manageDataAPIs/sheetAPI.html#insertRow
//insertRow( hd, sheetId, row, rowSpan )


//    SHEET_API.insertRow(SHEET_API_HD, 1, 11,1);
//    SHEET_API.insertRow(SHEET_API_HD, 1, 11,1);

    /**
     * [[A0601]]-insert row and assign data (end)
     * 
     */


    /*
     * 1.10-5)插入 遮蔽費用
     2.10-6)插入 印刷費用
     3.10-7)插入 镭雕費用
     4.10)步驟和小計加入"印刷镭雕"字樣,調整小計公式
     5.最後加 合計(含稅),公式 X1.17
     6.最後加 運費,預設值空白
     7.模具寿命, 預設值空白
     8.年需求量下一行, 加MOQ,預設值空白
     9.加工夾治具費用後加, 專用測試設備費用,同時調整模具總價公式
     10.建兵將提供︰表面要求,電鍍部份細化
     11.文清將整理︰其它特殊處理項目和費率
     */

    // [[A0601]] 
    //   5.最後加 合計(含稅),公式 X1.17
    //   6.最後加 運費,預設值空白
    SHEET_API.updateCells(SHEET_API_HD, getPatchCellA001(1));
    console.log("PATCH#1 after SHEET_API.updateCells(SHEET_API_HD,  getPatchCellA001(1));---合計(含稅), 運費");

    /**
     * [[A0601]]
     1.10-5)插入 遮蔽費用
     2.10-6)插入 印刷費用
     3.10-7)插入 镭雕費用
     4.10)步驟和小計加入"印刷镭雕"字樣,調整小計公式
     */
    SHEET_API.insertRow(SHEET_API_HD, 1, 89, 1);
    SHEET_API.insertRow(SHEET_API_HD, 1, 89, 1);
    SHEET_API.insertRow(SHEET_API_HD, 1, 89, 1);
    SHEET_API.updateCells(SHEET_API_HD, getPatchCellA001(2));
    console.log("PATCH#2 after SHEET_API.updateCells(SHEET_API_HD,  getPatchCellA001(2));---遮蔽,印刷,镭雕");


    SHEET_API.insertRow(SHEET_API_HD, 1, 22, 1);
    SHEET_API.updateCells(SHEET_API_HD, getPatchCellA001(3));
    console.log("PATCH#3 after SHEET_API.updateCells(SHEET_API_HD,  getPatchCellA001(3));---专用测试设备费用");
//    console.log(getPatchCellA001(3));

//                                      getPatchCellA0602
    // B0329
    // 2017-03-39, by Mark
    // 仿上打補丁, 在row 49插入
    // 2-9) 难易系数
    // 计算公式為：旧版压铸費總额* “难易系数” = 新版的压铸費
    // SHEET_API.insertRow(SHEET_API_HD, 1, 49, 1);
    // SHEET_API.updateCells(SHEET_API_HD, getPatchCellA001(5)); // 之前有4,但不使用. 
    // console.log("PATCH#3 after SHEET_API.updateCells(SHEET_API_HD,  getPatchCellA001(5));---B0329难易系数");
    // 往下雖然還有代碼, 基本上不影響到今天所做的
    // 曾有想要再單獨加上 patch-B0329.js
    // 現在先決定直接在 patch-A0601.js的基礎上,搭便車 
    // --------- 原始邮件信息 ---------
    // 发件人: "jason.hsu" <jason.hsu@skyrock-casting.com>
    // 收件人: "'陈炳陵'" <mark.chen@fulltech-metal.com>
    // 抄送: "'吴文清'" <wq.wu@skyrockcasting.com>, "'wwy.wu'" <wwy.wu@fulltech-metal.com>, "'孙永飞'" <yf.sun@skyrockcasting.com>, "RJ/工程/袁伟" <yw.yuan@fulltech-metal.com>, "'vicky'" <vicky.li@skyrock-casting.com>, "FC/K/Cherry 陈" <cherry.chen@skyrock-casting.com>, "FT/K/周云玲" <ranee@fulltech-metal.com>, "F C/汪静 FC/K/汪静" <amy.wang@skyrock-casting.com>, "'Echo.Xiang'" <echo.xiang@skyrock-casting.com>, "SK/鲁工 SK/鲁建兵" <jb.lu@skyrockdiecasting.com>, "'jm.chen'" <jm.chen@skyrockdiecasting.com>, "'David'" <david.hsu@skyrock-casting.com>
    // 主题: 报价公式上的汇率计算基准，請更改為 USD1.00 = RMB6.65
    // 日期: 2017/03/28 19:57:21 (Tue)
    // Dear Mark，
    // 从现在起报价公式上的汇率计算基准，請更改為 USD1.00 = RMB6.65
    // 
    // 採用新的汇率也可以直接在getPatchCellA001(5)實現
    //
    // 14:33 造成86,87,88附近錯位, 補丁要按順序打


    function getTemp1() {

//        var ddl086Data = "粉體烤漆-A+級,粉體烤漆-A級 ,粉體烤漆-B級 ,液體烤漆-A+級 ,液體烤漆-A級 ,液體烤漆-B級 ,阳极氧化-A级 , 阳极氧化-B级 ,电泳-A级,电泳-B级 ,掛鍍-A級,掛鍍-B 級,滾鍍-A級,滾鍍-B級 ,高清洁度清洗（600um）,高清洁度清洗（400um）,高清洁度清洗（200um）,清洗鉻酸";
//        var ddl086 = {bgc: colorDdl, ta: "center", data: "===表面要求(2)===", drop: Ext.encode({data: ddl086Data})};

        var cells = [];
        cells.push(
                {sheet: 1, row: 85, col: 2, json: {bgc: colorStep, data: "10)粉体烤漆.液体烤漆...： "}},
                {sheet: 1, row: 86, col: 3, json: ddl086}, // 
                {sheet: 1, row: 86, col: 4, json: ddl086}, // 
                {sheet: 1, row: 86, col: 5, json: ddl086}, // 
                {sheet: 1, row: 86, col: 6, json: ddl086}, // 
                {sheet: 1, row: 86, col: 7, json: ddl086}, // 
                {sheet: 1, row: 86, col: 8, json: ddl086}, // 
        //
        //
        // LAST ONE ============================================================================================
                {sheet: 1, row: 1, col: 1, json: {data: ""}}
        );
        return cells;
    }

    console.log("PATCH#4 ---");
    SHEET_API.updateCells(SHEET_API_HD, getTemp1());
    console.log("PATCH#4 after SHEET_API.updateCells(SHEET_API_HD,  getPatchCellA001(4));--- 086 單獨下拉");
    // console.log(getPatchCellsA0602_1());

    console.log("PATCH A0602");
    SHEET_API.updateCells(SHEET_API_HD, getPatchA0602(1));

    //[[A0603]]
    console.log("PATCH A0603");
    SHEET_API.updateCells(SHEET_API_HD, getPatchA0603(1));

    //WARNING NOT WORKING 查表取2,3 ok, 4不行!!!???
    //
    //[[A0603]] ROW14, MOQ, LOOKUP
    SHEET_API.updateCells(SHEET_API_HD, getPatchA0603(2));



    function getPatchA0606InMain() {
        var cells = [];
        cells.push(
                {sheet: 1, row: 96, col: 3, json: ddlSpecial}, // 
                {sheet: 1, row: 96, col: 4, json: ddlSpecial}, // 
                {sheet: 1, row: 96, col: 5, json: ddlSpecial}, // 
                {sheet: 1, row: 96, col: 6, json: ddlSpecial}, // 
                {sheet: 1, row: 96, col: 7, json: ddlSpecial}, // 
                {sheet: 1, row: 96, col: 8, json: ddlSpecial} // 
        );
        return cells;
    }
    //[[A0606]]  吴文清 根据2016.5.30号讨论“其它特殊处理”一栏需细化，除了会议中提及的渗补、时效外，一时想不起来，还有哪些？
    SHEET_API.updateCells(SHEET_API_HD, getPatchA0606InMain());
    //
    //文清發現 #95 公式錯誤
    //SHEET_API.updateCells(SHEET_API_HD, getPatchA0606(1));
    //


    //B0329, second try
    // 2017-03-29 14:38 by WuNan and Mark 
    SHEET_API.insertRow(SHEET_API_HD, 1, 49, 1);
    console.log("xxxxx 插入 row 49");
    SHEET_API.updateCells(SHEET_API_HD, getPatchCellB0329(1)); // 之前有4,但不使用. 
    console.log("xxxxxPATCH#3 after SHEET_API.updateCells(SHEET_API_HD,  getPatchCellB0329(1));---B0329难易系数");
    
    // 
    //  === 所有補丁要放在這裡之前
    //  NOTE

    SHEET_API.setFocus(SHEET_API_HD, 3, 1);



//
//

// add event listener - this shows the code to add customer function 
    var sheet = SHEET_API_HD.sheet;
    var editor = sheet.getEditor();
    editor.on('quit', function (editor, sheetId, row, col) {
        if (col === 1) {
            // this is the method to query customer existing backend and auto fill data
            // 
            // NOTE, GOOD EXAMPLE, MAYBE IMPLEMENT IT LATER 05/06 15:32
//            var employeeId = SHEET_API.getCellValue(SHEET_API_HD, sheetId, row, col).data;
//            if (employeeId)
//                AUTO_FILL_CUSTOMER_DATA_BY_EMPLOYEEID(employeeId, sheetId, row, col);
        }
    }, this);
    // add cell on select event ...
    /**
     var sm = sheet.getSelectionModel();
     sm.on('selectionchange', function(startPos, endPos, region, sm) {
     if (startPos.row == endPos.row && startPos.col == endPos.col && startPos.col == 8) {
     this.customEditor = Ext.create('customer.CellEditor', {
     sheetId: region.sheetId,
     row: startPos.row,
     col: startPos.col
     });
     this.customEditor.popup();
     }
     }, this);
     **/

    sheet.on('_beforeeditcell_', function (sheetId, row, col, cellData, sheet) {
        var contactWin = Ext.create('customer.CellEditor', {
            sheetId: sheetId,
            row: row,
            col: col,
            cellData: cellData,
            sheet: sheet
        });
        contactWin.popup();
        return false;
    }, this);
});
	