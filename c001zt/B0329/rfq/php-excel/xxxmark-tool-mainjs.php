<?php

/** Error reporting */
error_reporting(E_ALL);




$tool = new MarkToolMainJs();
//echo '&lt;?php <br>';
$tool->makeDdl();

$tool->makeFormula23(23);
$tool->makeFormula24(24);
$tool->makeFormula29(29);
$tool->makeFormula30(30);
$tool->makeFormula31(31);
$tool->makeFormula32(32);
$tool->makeFormula34(34);
$tool->makeFormula35(35);
$tool->makeFormula36(36);
$tool->makeFormula37(37);
$tool->makeFormula38(38);
$tool->makeFormula41(41);
$tool->makeFormula43(43);
$tool->makeFormula44(44);
$tool->makeFormula45(45);
$tool->makeFormula46(46);
$tool->makeFormula48(48);
$tool->makeFormula51(51);
$tool->makeFormula52(52);
$tool->makeFormula55(55);
$tool->makeFormula56(56);
$tool->makeFormula57(57); // first %----
$tool->makeFormula57(47); // first %
$tool->makeFormula57(68); // first %
$tool->makeFormula57(89); // first %

$tool->makeFormula59(59);

$tool->makeFormula62(62);
$tool->makeFormula63(63);
$tool->makeFormula64(64);

$tool->makeFormula105(105);

$tool->makeFormula106(106);
$tool->makeInputNumber(11, [13, 14, 15, 16, 17, 18]);
$tool->makeInputNumber(16, [1, 2, 4, 8, 12, 12]);
$tool->makeInputNumber(33, [350, 340, 330, 320, 310, 300]);
$tool->makeInputNumber(42, [30, 35, 40, 42, 44, 46]);
$tool->makeInputNumber(50, [82, 80, 78, 76, 74, 72]);
$tool->makeInputNumber(54, [150, 140, 130, 120, 110, 99]);
$tool->makeInputNumber(61, [60, 63, 66, 69, 72, 75]);
$tool->makeInputNumber(66, [30, 31, 32, 33, 34, 35]);
$tool->makeInputNumber(71, [60, 56, 54, 52, 51, 49]);
$tool->makeInputNumber(75, [60, 56, 54, 52, 51, 49]);
$tool->makeInputNumber(80, [0.99, 0.98, 0.97, 0.96, 0.95, 0.94]);
$tool->makeInputNumber(82, [1.0, 1.1, 1.2, 0.9, 0.8, 0.85]);
$tool->makeInputNumber(86, [6, 5, 5.5, 7, 7.5, 9]);
$tool->makeInputNumber(90, [0.9, 1.0, 1.1, 1.2, 0.9, 0.8]);
$tool->makeInputNumber(93, [12, 13, 14, 15, 16, 17]);
$tool->makeInputNumber(97, [56, 57, 58, 59, 60, 61]);
$tool->makeInputNumber(101, [21, 22, 23, 24, 25, 26]);





$tool->makeInputRmb(19, [71500, 81500, 91500, 61500, 55500, 44400]);
$tool->makeInputRmb(20, [1200, 1300, 1400, 1500, 1600, 1700]);
$tool->makeInputRmb(21, [7600, 7700, 7800, 7900, 7100, 7200]);
$tool->makeInputRmb(22, [5600, 55700, 5800, 5900, 6000, 6100]);
$tool->makeInputRmb(81, [0.88, 0.89, 0.91, 0.92, 0.93, 0.94]);
$tool->makeInputRmb(87, [0.1, 0.15, 0.2, 0.22, 0.33, 0.44]);
$tool->makeInputRmb(88, [0.6, 0.7, 0.8, 0.9, 0.91, 0.94]);
$tool->makeInputRmb(94, [0.34, 0.35, 0.36, 0.37, 0.38, 0.39]);
$tool->makeInputRmb(103, [0.39, 0.34, 0.35, 0.36, 0.37, 0.38]);
$tool->makeInputRmb(108, [0.11, 0.22, 0.33, 0.44, 0.55, 0.66]);
$tool->makeInputRmb(109, [0.66, 0.11, 0.22, 0.33, 0.44, 0.55]);
















$tool->makeFormula85(85);

class MarkToolMainJs {
    /*
      {sheet: 1, row: 12, col: 3, json: ddlSurface},

      {sheet: 1, row: 10, col: 3, json: ddlMaterial},

      {sheet: 1, row: 40, col: 3, json: ddlMachine},
      {sheet: 1, row: 65, col: 3, json: ddlMaching},
      {sheet: 1, row: 70, col: 3, json: ddlCold},
      {sheet: 1, row: 74, col: 3, json: ddlSand},
      {sheet: 1, row: 79, col: 3, json: ddlStep9},
     */

    public function makeDdl() {
        for ($i = 3; $i <= 8; $i++) {
            echo " {sheet: 1, row: 12, col: $i, json: ddlSurface},<br>";
            echo "   {sheet: 1, row: 10, col: $i, json: ddlMaterial},<br>";
            echo "  {sheet: 1, row: 40, col: $i, json: ddlMachine},<br>";
            echo " {sheet: 1, row: 65, col: $i, json: ddlMaching},<br>";
            echo "  {sheet: 1, row: 70, col: $i, json: ddlCold},<br>";
            echo "  {sheet: 1, row: 74, col: $i, json: ddlSand},<br>";
            echo "  {sheet: 1, row: 79, col: $i, json: ddl079},<br>"; // A0530
        }
    }

//  {sheet: 1, row: 29, col: 3, json: {ta: "center", dsd: "ed", data: "=C10", cal: true}},
    public function makeFormula29($row) {
//        $row=29;
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            echo "  {sheet: 1, row: $row, col: $i, json: {ta: 'center', dsd: 'ed', data: '=" . $COL . "10', cal: true}},<br>";
        }
    }

    public function makeFormula23($row) {
//        $row=23;
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
//{sheet: 1, row: 23, col: 3, json: styleSubTotal({data: "=(C19+C20+C21+C22)"})},
            echo "  {sheet: 1, row: $row, col: $i, json: styleSubTotal({data: '=(" . $COL . "19+" . $COL . "20+" . $COL . "21+" . $COL . "22)'})},<br>";
        }
    }

    //json: styleInput({fm: "number", data: "13"})},
    public function makeInputNumber($row, $init) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
// {fm: 'money|¥|2|none', dsd: 'ed', data: '=C30*C31/1000', cal: true}},
//            $COLROW = $COL . "11";
//            $key = $COL . "30*" . $COL . "31";
            $initVal = $init[$i - 3];
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "     styleInput({fm: 'number', data: '$initVal'})},";
            echo "     <br>";
        }
    }

    //json: styleInput({fm: "money|¥|2|none", data: "71500"})},
    public function makeInputRmb($row, $init) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
// {json: styleInput({fm: "money|¥|2|none", data: "71500"})},
//            $COLROW = $COL . "11";
//            $key = $COL . "30*" . $COL . "31";
            $initVal = $init[$i - 3];
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "    styleInput({fm: 'money|¥|2|none', data: '$initVal'})},";
            echo "     <br>";
        }
    }

    public function makeFormula24($row) {
//        $row=23;
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
//        {sheet: 1, row: 24, col: 3, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=(C23/6.35)'}},
            $COLROW = $COL . "23";
            echo "     {sheet: 1, row: $row, col: $i, json: {fm: 'money|$|2|none', dsd: 'ed', cal: true, data: '=($COLROW/6.35)'}},<br>";
        }
    }

    public function makeFormula30($row) {
//        $row=23;
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
//   {sheet: 1, row: 30, col: 3, json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(C10,LOOKUP!$A$3:$C$20,2,0)'}},
            $COLROW = $COL . "10";
            echo "     {sheet: 1, row: $row, col: $i,json: {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP($COLROW,LOOKUP!\$A\$3:\$C\$20,2,0)'}},<br>";
        }
    }

    public function makeFormula31($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
//{sheet: 1, row: 31, col: 3, json: {dsd: 'ed', data: '=C11', cal: true}},
            $COLROW = $COL . "11";
            echo "     {sheet: 1, row: $row, col: $i,json: {dsd: 'ed', data: '=$COLROW', cal: true}},<br>";
        }
    }

    public function makeFormula32($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
// {fm: 'money|¥|2|none', dsd: 'ed', data: '=C30*C31/1000', cal: true}},
//            $COLROW = $COL . "11";
            $key = $COL . "30*" . $COL . "31";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "      {fm: 'money|¥|2|none', dsd: 'ed', data: '=$key/1000', cal: true}},";
            echo "     <br>";
        }
    }

    public function makeFormula34($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
//{fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '=100*C31*C16/(C31*C16+C33)'}},
            $data = "=100*" . $COL . "31*" . $COL . "16/(" . $COL . "31*" . $COL . "16+" . $COL . "33)";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "      {fm: 'number', dfm: '0%', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    //{fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(C10,LOOKUP!$A$3:$C$20,3,0)'}},
    public function makeFormula35($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //{fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(C10,LOOKUP!$A$3:$C$20,3,0)'}},
            // replace C with ".$COL."

            $data = "=VLOOKUP(" . $COL . "10,LOOKUP!\$A\$3:\$C\$20,3,0)";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "     {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula36($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //{fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C30-C35)*C33/1000/C16'}},
            // replace C with ".$COL."

            $data = "=(" . $COL . "30-" . $COL . "35)*" . $COL . "33/1000/" . $COL . "16";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "    {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula37($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            // {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C31+C33)*C30*0.02/1000/C16'}},
            // replace C with ".$COL."

            $data = "=(" . $COL . "31+" . $COL . "33)*" . $COL . "30*0.02/1000/" . $COL . "16";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "    {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula38($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            // styleSubTotal({data: "=IF(ISNA(C32+C36+C37),0,(C32+C36+C37))"})},
            // replace C with ".$COL."

            $data = "=IF(ISNA(" . $COL . "32+" . $COL . "36+" . $COL . "37),0,(" . $COL . "32+" . $COL . "36+" . $COL . "37))";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "   styleSubTotal({data: '$data'})},";
            echo "     <br>";
        }
    }

    public function makeFormula41($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            // styleSubTotal({data: "=IF(ISNA(C32+C36+C37),0,(C32+C36+C37))"})},
            // replace C with ".$COL."

            $data = "=IF(ISNA(" . $COL . "32+" . $COL . "36+" . $COL . "37),0,(" . $COL . "32+" . $COL . "36+" . $COL . "37))";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "   styleSubTotal({data: '$data'})},";
            echo "     <br>";
        }
    }

    public function makeFormula43($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            // {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '=3600/C42'}},
            // replace C with ".$COL."

            $data = "=3600/" . $COL . "42";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {fm: 'number', dfm: '0', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula44($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            // {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=C41/C43'}},
            // replace C with ".$COL."

            $data = "=" . $COL . "41/" . $COL . "43";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula45($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            // {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)/C43'}},
            // replace C with ".$COL."

            $data = "=VLOOKUP(" . $COL . "40,LOOKUP2!\$A\$1:\$C\$100,3,0)/" . $COL . "43";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula46($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=VLOOKUP(C40,LOOKUP2!$A$1:$C$100,3,0)'}},
            // replace C with ".$COL."

            $data = "=VLOOKUP(" . $COL . "40,LOOKUP2!\$A\$1:\$C\$100,3,0)";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "   {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula48($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  styleSubTotal({data: setNaToZero('(C44+C45)*(1+(1-C47/100))/C16')})},
            // replace C with ".$COL."

            $data = "(" . $COL . "44+" . $COL . "45)*(1+(1-" . $COL . "47/100))/" . $COL . "16";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "   styleSubTotal({data: setNaToZero('$data')})},";
            echo "     <br>";
        }
    }

    public function makeFormula51($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  styleSubTotal({data: setNaToZero('(C44+C45)*(1+(1-C47/100))/C16')})},
            // replace C with ".$COL."
            //    $data = "(" . $COL . "44+" . $COL . "45)*(1+(1-" . $COL . "47/100))/" . $COL . "16";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {fm: 'money|¥|2|none', dsd: 'ed', data: '35'}},";
            echo "     <br>";
        }
    }

    public function makeFormula52($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  styleSubTotal({data: '=(C50/3600)*C51'})},
            // replace C with ".$COL."

            $data = "=(" . $COL . "50/3600)*" . $COL . "51";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "   styleSubTotal({data: '$data'})},";
            echo "     <br>";
        }
    }

    public function makeFormula55($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  styleSubTotal({data: setNaToZero('(C44+C45)*(1+(1-C47/100))/C16')})},
            // replace C with ".$COL."
            //    $data = "(" . $COL . "44+" . $COL . "45)*(1+(1-" . $COL . "47/100))/" . $COL . "16";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},";
            echo "     <br>";
        }
    }

    public function makeFormula56($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            // {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C54/3600)*C55'}},
            // replace C with ".$COL."
            $data = "=(" . $COL . "54/3600)*" . $COL . "55";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "   {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    //styleInput({fm: "number", dfm: "0%", data: "99"})},
    public function makeFormula57($row) {
        // $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            // $COL = $arrAtoH[$i];
            // styleInput({fm: 'number', dfm: '0%', data: '95'})},
            // replace C with ".$COL."
            //  $data = "=(" . $COL . "54/3600)*" . $COL . "55";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  styleInput({fm: 'number', dfm: '0%', data: '95'})},";
            echo "     <br>";
        }
    }

    public function makeFormula59($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  styleSubTotal({data: '=C56*(1+(1-C57/100))'})},
            // replace C with ".$COL."
            $data = "=" . $COL . "56*(1+(1-" . $COL . "57/100))";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "   styleSubTotal({data: '$data'})},";
            echo "     <br>";
        }
    }

    public function makeFormula62($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  styleSubTotal({data: setNaToZero('(C44+C45)*(1+(1-C47/100))/C16')})},
            // replace C with ".$COL."
            //    $data = "(" . $COL . "44+" . $COL . "45)*(1+(1-" . $COL . "47/100))/" . $COL . "16";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {fm: 'money|¥|2|none', dsd: 'ed', data: '45'}},";
            echo "     <br>";
        }
    }

    // {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C61/3600)*C62'}},
    public function makeFormula63($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=(C61/3600)*C62'}},
            // replace C with ".$COL."
            $data = "=(" . $COL . "61/3600)*" . $COL . "62";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},";
            echo "     <br>";
        }
    }

    public function makeFormula64($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  styleSubTotal({data: '=(C61/3600)*C62'})},
            // replace C with ".$COL."
            $data = "=(" . $COL . "61/3600)*" . $COL . "62";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  styleSubTotal({data: '$data'})},";
            echo "     <br>";
        }
    }

    public function makeFormula85($row) {
//        $row=23;
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
//  {sheet: 1, row: 85, col: 3, json: {dsd: "ed", ta: "center", cal: true, data: "=C12"}},
            $COLROW = $COL . "12";
            echo "     {sheet: 1, row: $row, col: $i, json: {dsd: 'ed', ta: 'center', cal: true, data: '=$COLROW'}},<br>";
        }
    }

    //
//    {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '=C38+C48+C52+C59+C64+C69+C73+C77+C83+C91+C95+C99+C104'}},

    public function makeFormula105($row) {
        $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            $COL = $arrAtoH[$i];
            //  {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data:
            //   '=C38+C48+C52+C59+C64+C69+C73+C77+C83+C91+C95+C99+C104'}},
            // replace C with ".$COL."
            $data = "=" . $COL . "38+" . $COL . "48+" . $COL . "52+" . $COL . "59+" . $COL . "64+" . $COL . "69+" . $COL . "73+" . $COL . "77+" . $COL . "83+" . $COL . "91+" . $COL . "95+" . $COL . "99+" . $COL . "104";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  {bgc: colorSect, fm: 'money|¥|2|none', dsd: 'ed', cal: true, data: '$data'}},
    ";
            echo "     <br>";
        }
    }

    public function makeFormula106($row) {
        // $arrAtoH = [".", "A", "B", "C", "D", "E", "F", "G", "H"];
        for ($i = 3; $i <= 8; $i++) {
            // $COL = $arrAtoH[$i];
            // styleInput({fm: 'number', dfm: '0%', data: '95'})},
            // replace C with ".$COL."
            //  $data = "=(" . $COL . "54/3600)*" . $COL . "55";
            echo "     {sheet: 1, row: $row, col: $i,json:";
            echo "  styleInput({fm: 'number', dfm: '0%', data: '20'})},";
            echo "     <br>";
        }
    }

}
