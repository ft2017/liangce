<?php

class E011 {

//            $zip['header'] = EXCEL008_HOT_PROD_GRP2::getArrByStr逗號分隔("组别,產品,    產品名稱,部门,部门名称,项次,工序,次,工序名称,在制良品数,报废数,在制返工数,瑕疵品待判定数");
//            $zip['align'] = EXCEL008_HOT_PROD_GRP2::getArrByStr沒任何分隔("CCLCLCCCLNNNN");
//            $zip['width'] = EXCEL008_HOT_PROD_GRP2::getArrByStr逗號分隔_欄位寬(12, "0.5,1.5,1.5,1,1,0.5,1,0.5,1,1,1,1");
    public static $SHEET_0_表头 = '在制数不平, 报废数不平, 有待转入, 查询时间';
    public static $SHEET_1_表头 = '组别,项次,栏位,说明,备注';
    public static $SHEET_2_表头 = 'WO,R, STN, 在制數, CHK_在制数, 良品轉入, 良品轉出, 當站報廢, 委外加工數, 委外完成數, 待轉入, 待開工, 待完工, 待轉出, 分割转出, 待PQC數';
    public static $SHEET_3_表头 = '部门, 部门名称, 工序, 工序名称, 工单, 工单状态, R, 當站報廢, 准报废数';
//    DEPT, DEPT_NAME, STN, STN_TIMER, STN_NAME, WO, RCARD, PRE_STN, PRE_STN_TIMER, PRE_STN_NAME, 待轉入 
//    public static $SHEET_4_表头 = '部门, 部门名称, 工序, 工序名称, 工单, 待转入数';
       public static $SHEET_4_表头 = '部门, 部门名称,项次, 工序,次, 工序名称, 工单, R, 上站工序, 次, 上站工序名称, 待轉入,上站是否委外 ';
//    ",报工单类型,类型名称,笔数,查询时间 ", false,"CCN"
        public static $SHEET_5_表头 = '报工单类型,类型名称,笔数,查询时间 ';
       public static $SHEET_0_左中右 = 'CCCC';
    public static $SHEET_1_左中右 = 'CCLLL';
    public static $SHEET_2_左中右 = 'CCCNNNNNNNNNNNNNNNN';
    public static $SHEET_3_左中右 = 'CLCLCLCNN';
    public static $SHEET_4_左中右 = 'CLCCCLCCCCLNC';
    public static $SHEET_5_左中右 = 'CCNC';
    public static $SHEET_0_栏宽 = '1,1,1,2';
    public static $SHEET_1_栏宽 = '0.5,0.5,1.5,4,5';
    public static $SHEET_2_栏宽 = '2,0.5,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1';
    public static $SHEET_3_栏宽 = '1,1,1,1.5,2,1,0.5,1,1';
    public static $SHEET_4_栏宽 = '1,1,0.5,1,0.5,1.5,2,0.5,1,0.5,1.5,1,1';
    public static $SHEET_5_栏宽 = '1,1,1,2';

    static public function getGroupSubject($grp) {
        $arr[1] = "（组别1） 重点产品20个";
        $arr[2] = "（组别2） 美蓓亚";
        $arr[3] = "（组别3） 抽查三个重点产品";
        $arr[11] = "（组别11） WIP ERR ADV";
        $arr[12] = "（组别12） HOT-PROD-WIP";
        return $arr[$grp];
    }

    static public function getGroupFileNameCore($num) {
        $arr[1] = "重点产品20个";
        $arr[2] = "美蓓亚部分";
        $arr[3] = "抽查三个重点产品";
        $arr[11] = "WIP-ERR-ADV";
$arr[12] = "HOT-PROD-WIP";
        return $arr[$num];
    }

    static public function getGroupSheetSQL($grp, $sheet) {

        if ($sheet == 0) { //主題
            return "SELECT * FROM ADV_CHECKING008 ";
        }
        if ($sheet == 1) { //說明 TODO
            return "SELECT GRP,SEQ,TERM,TERM_DESC,REMARKS FROM TLKP_TERM WHERE GRP=$grp ORDER BY SEQ";
//            return $sql;
        }
        if ($sheet == 2) { //WIP
            $sql = "SELECT 
WO,RCARD,STN,在制數,良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數  CHK_在制数,良品轉入, 良品轉出, 當站報廢, 委外加工數, 委外完成數, 待轉入, 待開工, 待完工, 待轉出,分割转出, 待PQC數 
FROM FT_SFCB_T_MORE
WHERE 在制數<>良品轉入-良品轉出-當站報廢-待轉入-待轉出-分割转出-待完工-待PQC數
ORDER BY WO,RCARD
";
            return $sql;
        }
        if ($sheet == 3) { //group by 部門
               $sql = "select B.DEPT,B.DEPT_NAME, A.STN,B.STN_NAME,A.WO, WO_STATUS||':'||C.NAME WO_STATUS_NAME, RCARD, 當站報廢, 准报废数 from RAW_ASFT301_验算当站报废 A
LEFT JOIN DEV_STN_DEPT B
ON A.STN = B.STN
LEFT JOIN TLKP_DECODE C
ON A.WO_STATUS = C.CODE
where 
C.CAT = 'WO_STATUS' AND
當站報廢!=准报废数 
";
        return $sql;
        }
        if ($sheet == 4) { //group by 部門
     
           return "  SELECT DEPT, DEPT_NAME,A.OP, A.STN, A.STN_TIMER, STN_NAME, A.WO,A.RCARD, A.PRE_STN, A.PRE_STN_TIMER, PRE_STN_NAME, 待轉入 ,B.PRE_STN_要委外
FROM ADV_ASFT301_TO_MOVEIN_PRE_STN A 
LEFT JOIN DEV_WO_PRE_STN B ON A.WO=B.WO
AND A.RCARD=B.RCARD
AND A.PRE_STN=B.PRE_STN 
AND A.PRE_STN_TIMER = B.PRE_STN_TIMER
where a.wo_status='F' ";
        }
              if ($sheet == 5) { //group by 部門
     
           $sql = "SELECT OUT_TYPE,B.NAME ,COUNT(*) CNT
,to_char(sysdate,'yyyy-mm-dd hh24:mi:ss') 查询时间 
FROM ADV_ASFT335 A,TLKP_DECODE B
WHERE A.OUT_TYPE=B.CODE AND CAT='OUT_TYPE'
GROUP BY OUT_TYPE ,B.NAME
ORDER BY OUT_TYPE ,B.NAME";
           return $sql;
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
