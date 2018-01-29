<?php

class E008 {

//            $zip['header'] = EXCEL008_HOT_PROD_GRP2::getArrByStr逗號分隔("组别,產品,    產品名稱,部门,部门名称,项次,工序,次,工序名称,在制良品数,报废数,在制返工数,瑕疵品待判定数");
//            $zip['align'] = EXCEL008_HOT_PROD_GRP2::getArrByStr沒任何分隔("CCLCLCCCLNNNN");
//            $zip['width'] = EXCEL008_HOT_PROD_GRP2::getArrByStr逗號分隔_欄位寬(12, "0.5,1.5,1.5,1,1,0.5,1,0.5,1,1,1,1");
    public static $SHEET_0_表头 = '组别,產品,產品名稱,生管人员,查询时间';
    public static $SHEET_1_表头 = '组别,项次,栏位,说明,备注';
    public static $SHEET_2_表头 = '组别,產品,    產品名稱,部门,部门名称,项次,工序,次,工序名称,在制良品数,报废数,在制返工数,瑕疵品待判定数,合计数';
    public static $SHEET_3_表头 = '组别,產品,    產品名稱,部门,部门名称,在制良品数,报废数,在制返工数,瑕疵品待判定数,合计数';
    public static $SHEET_4_表头 = '组别,產品,    產品名稱,部门,部门名称,项次,工序,次,工序名称,在制良品数,报废数,在制返工数,瑕疵品待判定数,合计数';
    public static $SHEET_0_左中右 = 'CCLCC';
    public static $SHEET_1_左中右 = 'CCLLL';
    public static $SHEET_2_左中右 = 'CCLCLCCCLNNNNN';
    public static $SHEET_3_左中右 = 'CCLCLNNNNN';
    public static $SHEET_4_左中右 = 'CCLCLCCCLNNNNN';
    public static $SHEET_0_栏宽 = '0.5,1.5,2,1,2';
    public static $SHEET_1_栏宽 = '0.5,0.5,1.5,4,3';
    public static $SHEET_2_栏宽 = '0.5,1.5,1.5,1,1,0.5,1,0.5,1,1,1,1';
    public static $SHEET_3_栏宽 = '0.5,1.5,1.5,1,1,1,1,1,1,1';
    public static $SHEET_4_栏宽 = '0.5,1.5,1.5,1,1,0.5,1,0.5,1,1,1,1';

    static public function getGroupSubject($grp) {
        $arr[1] = "（组别1） 重点产品20个";
        $arr[2] = "（组别2） 美蓓亚";
        $arr[3] = "（组别3） 抽查三个重点产品";
        return $arr[$grp];
    }

    static public function getGroupFileNameCore($num) {
        $arr[1] = "重点产品20个";
        $arr[2] = "美蓓亚部分";
        $arr[3] = "抽查三个重点产品";
        return $arr[$num];
    }

    static public function getGroupSheetSQL($grp, $sheet) {

        if ($sheet == 0) { //主題
            return "SELECT GRP,PROD, ITEM_NAME,PC,to_char(sysdate,'yyyy-mm-dd hh24:mi:ss') 查询时间 
            FROM TLKP_HOT_PROD_ALL A, DEV_ITEM B WHERE A.PROD=B.ITEM AND A.GRP=$grp ORDER BY PROD";
        }
        if ($sheet == 1) { //說明 TODO
            return "SELECT GRP,SEQ,TERM,TERM_DESC,REMARKS FROM TLKP_TERM WHERE GRP=$grp ORDER BY SEQ";
        }
        if ($sheet == 2) { //WIP
            return "SELECT GRP,PROD, PROD_NAME,DEPT, DEPT_NAME,  OP, STN, STN_TIMER, STN_NAME, QTY1, QTY2, QTY3, QTY4, QTY5
FROM ADV_WIP_PROD_ROW_BY_GRP WHERE GRP=$grp
ORDER BY PROD,OP,STN,STN_TIMER";
        }
        if ($sheet == 3) { //group by 部門
//            echo "<h1>why? SELECT * FROM ADV_WIP_PROD_ROW_BY_GRP_SUM WHERE GRP =$grp</h1>" ;
            return " SELECT * FROM ADV_WIP_PROD_ROW_BY_GRP_SUM WHERE GRP =$grp";
        }
        if ($sheet == 4) { //group by 部門
//            echo "<h1>why? SELECT * FROM ADV_WIP_PROD_ROW_BY_GRP_SUM WHERE GRP =$grp</h1>" ;
            return " SELECT 
OP, STN_NAME, PROD, STN, STN_TIMER, SUM(OUTPUT_QTY - MOVEOUT_QTY) TYZ001
FROM A01_ASFT335_OUT_TYPE_SUM_OP
WHERE STN = 'TYZ001'
AND PROD = '10301-000035'
GROUP BY OP, STN_NAME, PROD, STN, STN_TIMER";
        }
        return null;




        $arr = array();
//           $sheet0SQL="SELECT PROD, ITEM_NAME,PC,to_char(sysdate,'yyyy-mm-dd hh24:mi:ss') 查询时间 FROM TLKP_HOT_PROD_ALL A, DEV_ITEM B WHERE A.PROD=B.ITEM AND A.GRP=$grp";

        $arr[1][0] = "SELECT PROD, ITEM_NAME,PC,to_char(sysdate,'yyyy-mm-dd hh24:mi:ss') 查询时间 FROM TLKP_HOT_PROD_ALL A, DEV_ITEM B WHERE A.PROD=B.ITEM AND A.GRP=1";
        $arr[1][1] = "SELECT TERM,TERM_DESC FROM TLKP_TERM WHERE CAT='xxx'";
        $arr[1][2] = "SELECT GRP,PROD, PROD_NAME,DEPT, DEPT_NAME,  OP, STN, STN_TIMER, STN_NAME, QTY1, QYT2, QTY3, QYT4
FROM ADV_WIP_PROD_ROW_BY_GRP WHERE GRP=1
ORDER BY PROD,OP,STN,STN_TIMER";
        $arr[1][3] = "SELECT * FROM ADV_WIP_PROD_ROW_BY_GRP_SUM WHERE GRP = 1";
        $arr[2][0] = "SELECT PROD, ITEM_NAME,PC,to_char(sysdate,'yyyy-mm-dd hh24:mi:ss') 查询时间 FROM TLKP_HOT_PROD_ALL A, DEV_ITEM B WHERE A.PROD=B.ITEM AND A.GRP=2";
        $arr[2][1] = "SELECT TERM,TERM_DESC FROM TLKP_TERM WHERE CAT='美蓓亚'";
        $arr[2][2] = "SELECT GRP,PROD, PROD_NAME,DEPT, DEPT_NAME,  OP, STN, STN_TIMER, STN_NAME, QTY1, QYT2, QTY3, QYT4
FROM ADV_WIP_PROD_ROW_BY_GRP WHERE GRP=2
ORDER BY PROD,OP,STN,STN_TIMER";
        $arr[2][3] = "SELECT * FROM ADV_WIP_PROD_ROW_BY_GRP_SUM WHERE GRP = 2";

        $arr[3][0] = "SELECT PROD, ITEM_NAME,PC,to_char(sysdate,'yyyy-mm-dd hh24:mi:ss') 查询时间 FROM TLKP_HOT_PROD_ALL A, DEV_ITEM B WHERE A.PROD=B.ITEM AND A.GRP=3";
        $arr[3][1] = "SELECT TERM,TERM_DESC FROM TLKP_TERM WHERE CAT='zzz'";
        $arr[3][2] = "SELECT GRP,PROD, PROD_NAME,DEPT, DEPT_NAME,  OP, STN, STN_TIMER, STN_NAME, QTY1, QYT2, QTY3, QYT4
FROM ADV_WIP_PROD_ROW_BY_GRP WHERE GRP=3
ORDER BY PROD,OP,STN,STN_TIMER";
        $arr[3][3] = "SELECT * FROM ADV_WIP_PROD_ROW_BY_GRP_SUM WHERE GRP = 3";



//        $arr[1]="重点产品20个_PROD";
//        $arr[2]="美蓓亚_PROD";
//        $arr[3]="抽查三个_PROD";
//        echo "<h1>arr[$grp][$sheet]  ".$arr[$grp][$sheet]. "</h1>";
        echo "<h1>arr[$grp][$sheet]  </h1>";

        return $arr[$grp][$sheet];
    }

}
