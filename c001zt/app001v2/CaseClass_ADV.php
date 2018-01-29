<?php

class ADV {
    /*
     * 010 => 10
     * 020 => 20
     * ....
     * 090 => 90
     * 100 => 100
     */

    static public function get工艺路线项次_去掉前綴0($x) {
        if (substr($x, 0, 1) == '0') {
            return substr($x, 1, 2);
        } else {
            return $x;
        }
    }

    static public function getLink单一部门指定日期良品转出($dept, $val2) {

        $str = "<a href='adv_dept_prod_wo_out_perday.php?dept=$dept&date=$val2'>$val2</a>";
        return $str;
    }

    static public function getSql产品的项次($prod) {
        $sql = " 
            SELECT DISTINCT OP FROM CASE_PROD_OUT
            WHERE PROD='$prod'
            ORDER BY OP
            ";
        return $sql;
    }

    static public function getSql产品的项次工序($prod) {
        $sql = " 
            SELECT DISTINCT  OP_STN FROM ADV_PROD_OUT
            WHERE PROD='$prod'
            ORDER BY OP_STN
            ";
        return $sql;
    }

    static public function getSql产品的项次工序_多显示批号($prod) {
        $sql = " 
            SELECT DISTINCT  OP_STN FROM ADV_PROD_OUT
            WHERE PROD='$prod'
            ORDER BY OP_STN
            ";
        return $sql;
    }

        static public function getSql产品的项次工序_多显示批号_实施RCARD($prod) {
        $sql = " 
            SELECT DISTINCT  OP_STN 
            FROM A04_PROD_OUT
            WHERE PROD='$prod'
            ORDER BY OP_STN
            ";
        return $sql;
    }

    static public function getSql工单的项次工序($wo) {
        $sql = " 
            SELECT DISTINCT  OP_STN FROM ADV_PROD_OUT
            WHERE WO='$wo'
            ORDER BY OP_STN
            ";
        return $sql;
    }
    static public function getSql工单的项次工序_实施RCARD($wo,$rcard) {
        $sql = " 
            SELECT DISTINCT  OP_STN FROM A04_PROD_WO_R_OUT
            WHERE WO='$wo' and RCARD = '$rcard'
            ORDER BY OP_STN
            ";
        return $sql;
    }

    static public function getSql工单的工艺路线_含上下工序($wo) {
        $sql = " 
             SELECT OP,STN,STN_NAME,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,PRE_STN,NEXT_STN FROM FT_ASFT301 WHERE WO = '$wo'
            ORDER BY OP";
        return $sql;
    }
    static public function getSql工单的工艺路线_含上下工序_开发格式($wo) {
        $sql = " 
             SELECT OP,STN,STN_NAME,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,PRE_STN,STN STN2,NEXT_STN FROM FT_ASFT301 WHERE WO = '$wo'
            ORDER BY OP";
        return $sql;
    }
    static public function getSql已发出的工单() {
        $sql = " SELECT WO,WO_STATUS FROM FT_SFAA_T_V2 WHERE WO_STATUS='F' ORDER BY WO";
        return $sql;
    }
    static public function getSql已审核的产品() {
        $sql = " select distinct prod,工艺编号 from FT_aecm200
where prod_status = 'Y' ORDER BY PROD,工艺编号";
        return $sql;
    }
    static public function getSql工单的工艺路线_含上下工序_正式版本($wo) {
        $sql = " 
             SELECT OP,STN,STN_NAME,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,PRE_STN,NEXT_STN FROM FT_ASFT301 WHERE WO = '$wo'
            ORDER BY OP";
        return $sql;
    }
    static public function getSql工单的工艺路线_含上下工序_正式版本_实施RCARD($wo,$rcard) {
        $sql = " 
             SELECT WO,RCARD,OP,STN,STN_NAME,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出,PRE_STN,NEXT_STN 
             FROM A01_ASFT301_ALL
             WHERE WO = '$wo' AND RCARD = '$rcard'
            ORDER BY OP";
        return $sql;
    }

    static public function getSql工单工序的项次不是十的倍数() {
        $sql = " 
             SELECT * FROM FT_ASFT301_OP_NOT_STD ORDER BY WO";
        return $sql;
    }

    static public function getSql工单的工艺路线($wo) {
        $sql = " 
            SELECT OP,STN,STN_NAME,要委外,要轉入,要開工,要報工,要PQC,要完工,要轉出 FROM FT_ASFT301 WHERE WO = '$wo'
            ORDER BY OP";
        return $sql;
    }

    static public function getSql工单的项次工序_工单批次($wo) {
        $sql = " 
            SELECT DISTINCT OP_STN FROM ADV_WO_OUT
            WHERE WO='$wo'
            ORDER BY OP_STN
            ";
        return $sql;
    }
    static public function getSql工单的项次工序_工单批次_实施RCARD($wo,$rcard) {
        $sql = " 
            SELECT DISTINCT OP_STN FROM ADV_WO_OUT
            WHERE WO='$wo' AND RCARD = '$rcard'
            ORDER BY OP_STN
            ";
        return $sql;
    }

    static public function getSql产品的工序($prod) {
        $sql = " 
SELECT DISTINCT STN FROM CASE_PROD_OUT
WHERE PROD='$prod'
ORDER BY STN
";
        return $sql;
    }

}
