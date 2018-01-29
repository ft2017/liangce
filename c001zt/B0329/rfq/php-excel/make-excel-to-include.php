<?php

// reviewed by Mark, 2017-03-30 08:10
// 這是由 B0329/rfq/php-excel/make-excel-helper.php 生成的檔案
// 應該存放到檔案 B0329/rfq/php-excel/make-excel-to-include.php
// B0329 啟用 $USD2RMB=6.65
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//FIX ROW 50， 栏位C起
//FIX 栏位C起，各小計的金額符號
//FIX 栏位C起，黄色格子下移一格
//FIX 栏位B 小計開始 下移一格
//FIX 栏位B 小計結束 下移一格
//FIX ROW 53=>54 公式
//FIX ROW 57=>58 公式
//FIX ROW 60=>61, 公式
//FIX ROW 64=>65, 65=>66, 公式
//FIX ROW 往下所有公式
//FIX 斜体 下拉
//FIX 几个大型加总
//FIX 美金符号

//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:473 function: makePercentFormat
//

// makePercentFormat 0.00% ok, FORMAT_PERCENTAGE_00 為什麼不行?
$objPHPExcel->getActiveSheet()->getStyle('C35:H35')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C48:H48')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C59:H59')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C70:H70')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C94:H94')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C111:H111')->getNumberFormat()->setFormatCode("0.00%");


//
// reviewed by WuNan and Mark 各工序小計沒出現, 是不是在這裡? 是!

//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:412 function: makeSum
//

$objPHPExcel->getActiveSheet()
->setCellValue('C24', '=C19+C20+C21+C22+C23')
->setCellValue('D24', '=D19+D20+D21+D22+D23')
->setCellValue('E24', '=E19+E20+E21+E22+E23')
->setCellValue('F24', '=F19+F20+F21+F22+F23')
->setCellValue('G24', '=G19+G20+G21+G22+G23')
->setCellValue('H24', '=H19+H20+H21+H22+H23')
->setCellValue('C116', '=C110+C112+C115')
->setCellValue('D116', '=D110+D112+D115')
->setCellValue('E116', '=E110+E112+E115')
->setCellValue('F116', '=F110+F112+F115')
->setCellValue('G116', '=G110+G112+G115')
->setCellValue('H116', '=H110+H112+H115')
->setCellValue('C115', '=C113+C114')
->setCellValue('D115', '=D113+D114')
->setCellValue('E115', '=E113+E114')
->setCellValue('F115', '=F113+F114')
->setCellValue('G115', '=G113+G114')
->setCellValue('H115', '=H113+H114')
->setCellValue('C110', '=C39+C50+C54+C61+C66+C71+C75+C79+C85+C96+C100+C104+C109')
->setCellValue('D110', '=D39+D50+D54+D61+D66+D71+D75+D79+D85+D96+D100+D104+D109')
->setCellValue('E110', '=E39+E50+E54+E61+E66+E71+E75+E79+E85+E96+E100+E104+E109')
->setCellValue('F110', '=F39+F50+F54+F61+F66+F71+F75+F79+F85+F96+F100+F104+F109')
->setCellValue('G110', '=G39+G50+G54+G61+G66+G71+G75+G79+G85+G96+G100+G104+G109')
->setCellValue('H110', '=H39+H50+H54+H61+H66+H71+H75+H79+H85+H96+H100+H104+H109')
;


// RMB


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:495 function: makeMoneyStyle
//
$objPHPExcel->getActiveSheet()->getStyle('C19:H19')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C20:H20')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C21:H21')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C22:H22')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C23:H23')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C24:H24')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C31:H31')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C33:H33')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C36:H36')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C37:H37')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C38:H38')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C39:H39')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C42:H42')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C45:H45')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C46:H46')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C47:H47')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C50:H50')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C53:H53')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C54:H54')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C57:H57')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C58:H58')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C61:H61')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C64:H64')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C65:H65')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C66:H66')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C69:H69')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C71:H71')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C74:H74')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C75:H75')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C78:H78')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C79:H79')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C83:H83')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C85:H85')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C89:H89')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C90:H90')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C91:H91')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C92:H92')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C93:H93')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C96:H96')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C99:H99')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C100:H100')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C103:H103')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C104:H104')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C107:H107')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C108:H108')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C109:H109')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C110:H110')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C112:H112')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C113:H113')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C114:H114')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C115:H115')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C116:H116')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C118:H118')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C119:H119')->getNumberFormat()->setFormatCode("¥#,##0.00");

// USD


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:495 function: makeMoneyStyle
//
$objPHPExcel->getActiveSheet()->getStyle('C25:H25')->getNumberFormat()->setFormatCode("$#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C117:H117')->getNumberFormat()->setFormatCode("$#,##0.00");

// USD 公式計算


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(25,=C24/6.65) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C25', '=C24/6.65')
->setCellValue('D25', '=D24/6.65')
->setCellValue('E25', '=E24/6.65')
->setCellValue('F25', '=F24/6.65')
->setCellValue('G25', '=G24/6.65')
->setCellValue('H25', '=H24/6.65')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(117,=C116/6.65) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C117', '=C116/6.65')
->setCellValue('D117', '=D116/6.65')
->setCellValue('E117', '=E116/6.65')
->setCellValue('F117', '=F116/6.65')
->setCellValue('G117', '=G116/6.65')
->setCellValue('H117', '=H116/6.65')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(32,=C11) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C32', '=C11')
->setCellValue('D32', '=D11')
->setCellValue('E32', '=E11')
->setCellValue('F32', '=F11')
->setCellValue('G32', '=G11')
->setCellValue('H32', '=H11')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(33,=C31*C32/1000) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C33', '=C31*C32/1000')
->setCellValue('D33', '=D31*D32/1000')
->setCellValue('E33', '=E31*E32/1000')
->setCellValue('F33', '=F31*F32/1000')
->setCellValue('G33', '=G31*G32/1000')
->setCellValue('H33', '=H31*H32/1000')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(35,=C32*C16/(C32*C16+C34)) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C35', '=C32*C16/(C32*C16+C34)')
->setCellValue('D35', '=D32*D16/(D32*D16+D34)')
->setCellValue('E35', '=E32*E16/(E32*E16+E34)')
->setCellValue('F35', '=F32*F16/(F32*F16+F34)')
->setCellValue('G35', '=G32*G16/(G32*G16+G34)')
->setCellValue('H35', '=H32*H16/(H32*H16+H34)')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(37,=(C31-C36)*C34/1000/C16) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C37', '=(C31-C36)*C34/1000/C16')
->setCellValue('D37', '=(D31-D36)*D34/1000/D16')
->setCellValue('E37', '=(E31-E36)*E34/1000/E16')
->setCellValue('F37', '=(F31-F36)*F34/1000/F16')
->setCellValue('G37', '=(G31-G36)*G34/1000/G16')
->setCellValue('H37', '=(H31-H36)*H34/1000/H16')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(38,=(C32+C34)*C31*0.02/1000/C16) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C38', '=(C32+C34)*C31*0.02/1000/C16')
->setCellValue('D38', '=(D32+D34)*D31*0.02/1000/D16')
->setCellValue('E38', '=(E32+E34)*E31*0.02/1000/E16')
->setCellValue('F38', '=(F32+F34)*F31*0.02/1000/F16')
->setCellValue('G38', '=(G32+G34)*G31*0.02/1000/G16')
->setCellValue('H38', '=(H32+H34)*H31*0.02/1000/H16')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(39,=IF(ISNA(C33+C37+C38),0,(C33+C37+C38))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C39', '=IF(ISNA(C33+C37+C38),0,(C33+C37+C38))')
->setCellValue('D39', '=IF(ISNA(D33+D37+D38),0,(D33+D37+D38))')
->setCellValue('E39', '=IF(ISNA(E33+E37+E38),0,(E33+E37+E38))')
->setCellValue('F39', '=IF(ISNA(F33+F37+F38),0,(F33+F37+F38))')
->setCellValue('G39', '=IF(ISNA(G33+G37+G38),0,(G33+G37+G38))')
->setCellValue('H39', '=IF(ISNA(H33+H37+H38),0,(H33+H37+H38))')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(44,=3600/C43) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C44', '=3600/C43')
->setCellValue('D44', '=3600/D43')
->setCellValue('E44', '=3600/E43')
->setCellValue('F44', '=3600/F43')
->setCellValue('G44', '=3600/G43')
->setCellValue('H44', '=3600/H43')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(45,=C42/C44) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C45', '=C42/C44')
->setCellValue('D45', '=D42/D44')
->setCellValue('E45', '=E42/E44')
->setCellValue('F45', '=F42/F44')
->setCellValue('G45', '=G42/G44')
->setCellValue('H45', '=H42/H44')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(50,=C49*IF(ISNA((C45+C46)*(1+(1-C48))/C16),0,((C45+C46)*(1+(1-C48))/C16))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C50', '=C49*IF(ISNA((C45+C46)*(1+(1-C48))/C16),0,((C45+C46)*(1+(1-C48))/C16))')
->setCellValue('D50', '=D49*IF(ISNA((D45+D46)*(1+(1-D48))/D16),0,((D45+D46)*(1+(1-D48))/D16))')
->setCellValue('E50', '=E49*IF(ISNA((E45+E46)*(1+(1-E48))/E16),0,((E45+E46)*(1+(1-E48))/E16))')
->setCellValue('F50', '=F49*IF(ISNA((F45+F46)*(1+(1-F48))/F16),0,((F45+F46)*(1+(1-F48))/F16))')
->setCellValue('G50', '=G49*IF(ISNA((G45+G46)*(1+(1-G48))/G16),0,((G45+G46)*(1+(1-G48))/G16))')
->setCellValue('H50', '=H49*IF(ISNA((H45+H46)*(1+(1-H48))/H16),0,((H45+H46)*(1+(1-H48))/H16))')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(54,=(C52/3600)*C53) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C54', '=(C52/3600)*C53')
->setCellValue('D54', '=(D52/3600)*D53')
->setCellValue('E54', '=(E52/3600)*E53')
->setCellValue('F54', '=(F52/3600)*F53')
->setCellValue('G54', '=(G52/3600)*G53')
->setCellValue('H54', '=(H52/3600)*H53')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(58,=(C56/3600)*C57) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C58', '=(C56/3600)*C57')
->setCellValue('D58', '=(D56/3600)*D57')
->setCellValue('E58', '=(E56/3600)*E57')
->setCellValue('F58', '=(F56/3600)*F57')
->setCellValue('G58', '=(G56/3600)*G57')
->setCellValue('H58', '=(H56/3600)*H57')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(61,=C58*(1+(1-C59))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C61', '=C58*(1+(1-C59))')
->setCellValue('D61', '=D58*(1+(1-D59))')
->setCellValue('E61', '=E58*(1+(1-E59))')
->setCellValue('F61', '=F58*(1+(1-F59))')
->setCellValue('G61', '=G58*(1+(1-G59))')
->setCellValue('H61', '=H58*(1+(1-H59))')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(65,=(C63/3600)*C64) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C65', '=(C63/3600)*C64')
->setCellValue('D65', '=(D63/3600)*D64')
->setCellValue('E65', '=(E63/3600)*E64')
->setCellValue('F65', '=(F63/3600)*F64')
->setCellValue('G65', '=(G63/3600)*G64')
->setCellValue('H65', '=(H63/3600)*H64')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(66,=(C63/3600)*C64) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C66', '=(C63/3600)*C64')
->setCellValue('D66', '=(D63/3600)*D64')
->setCellValue('E66', '=(E63/3600)*E64')
->setCellValue('F66', '=(F63/3600)*F64')
->setCellValue('G66', '=(G63/3600)*G64')
->setCellValue('H66', '=(H63/3600)*H64')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(71,=IF(ISNA((C68/3600)*C69 * (1 + (1 - C70 ))),0,((C68/3600)*C69 * (1 + (1 - C70 ))))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C71', '=IF(ISNA((C68/3600)*C69 * (1 + (1 - C70 ))),0,((C68/3600)*C69 * (1 + (1 - C70 ))))')
->setCellValue('D71', '=IF(ISNA((D68/3600)*D69 * (1 + (1 - D70 ))),0,((D68/3600)*D69 * (1 + (1 - D70 ))))')
->setCellValue('E71', '=IF(ISNA((E68/3600)*E69 * (1 + (1 - E70 ))),0,((E68/3600)*E69 * (1 + (1 - E70 ))))')
->setCellValue('F71', '=IF(ISNA((F68/3600)*F69 * (1 + (1 - F70 ))),0,((F68/3600)*F69 * (1 + (1 - F70 ))))')
->setCellValue('G71', '=IF(ISNA((G68/3600)*G69 * (1 + (1 - G70 ))),0,((G68/3600)*G69 * (1 + (1 - G70 ))))')
->setCellValue('H71', '=IF(ISNA((H68/3600)*H69 * (1 + (1 - H70 ))),0,((H68/3600)*H69 * (1 + (1 - H70 ))))')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(75,=IF(ISNA((C73/3600)*C74),0,((C73/3600)*C74))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C75', '=IF(ISNA((C73/3600)*C74),0,((C73/3600)*C74))')
->setCellValue('D75', '=IF(ISNA((D73/3600)*D74),0,((D73/3600)*D74))')
->setCellValue('E75', '=IF(ISNA((E73/3600)*E74),0,((E73/3600)*E74))')
->setCellValue('F75', '=IF(ISNA((F73/3600)*F74),0,((F73/3600)*F74))')
->setCellValue('G75', '=IF(ISNA((G73/3600)*G74),0,((G73/3600)*G74))')
->setCellValue('H75', '=IF(ISNA((H73/3600)*H74),0,((H73/3600)*H74))')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(79,=IF(ISNA(C78),0,(C77/3600)*C78)) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C79', '=IF(ISNA(C78),0,(C77/3600)*C78)')
->setCellValue('D79', '=IF(ISNA(D78),0,(D77/3600)*D78)')
->setCellValue('E79', '=IF(ISNA(E78),0,(E77/3600)*E78)')
->setCellValue('F79', '=IF(ISNA(F78),0,(F77/3600)*F78)')
->setCellValue('G79', '=IF(ISNA(G78),0,(G77/3600)*G78)')
->setCellValue('H79', '=IF(ISNA(H78),0,(H77/3600)*H78)')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(85,=C82*C83*C84) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C85', '=C82*C83*C84')
->setCellValue('D85', '=D82*D83*D84')
->setCellValue('E85', '=E82*E83*E84')
->setCellValue('F85', '=F82*F83*F84')
->setCellValue('G85', '=G82*G83*G84')
->setCellValue('H85', '=H82*H83*H84')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(96,=(C88*(SUM(C89:C90))+SUM(C91:C93))*(1+(1-C94))*C95) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C96', '=(C88*(SUM(C89:C90))+SUM(C91:C93))*(1+(1-C94))*C95')
->setCellValue('D96', '=(D88*(SUM(D89:D90))+SUM(D91:D93))*(1+(1-D94))*D95')
->setCellValue('E96', '=(E88*(SUM(E89:E90))+SUM(E91:E93))*(1+(1-E94))*E95')
->setCellValue('F96', '=(F88*(SUM(F89:F90))+SUM(F91:F93))*(1+(1-F94))*F95')
->setCellValue('G96', '=(G88*(SUM(G89:G90))+SUM(G91:G93))*(1+(1-G94))*G95')
->setCellValue('H96', '=(H88*(SUM(H89:H90))+SUM(H91:H93))*(1+(1-H94))*H95')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(100,=C99) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C100', '=C99')
->setCellValue('D100', '=D99')
->setCellValue('E100', '=E99')
->setCellValue('F100', '=F99')
->setCellValue('G100', '=G99')
->setCellValue('H100', '=H99')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(104,=C102/3600*C103) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C104', '=C102/3600*C103')
->setCellValue('D104', '=D102/3600*D103')
->setCellValue('E104', '=E102/3600*E103')
->setCellValue('F104', '=F102/3600*F103')
->setCellValue('G104', '=G102/3600*G103')
->setCellValue('H104', '=H102/3600*H103')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(107,=C106*35/3600) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C107', '=C106*35/3600')
->setCellValue('D107', '=D106*35/3600')
->setCellValue('E107', '=E106*35/3600')
->setCellValue('F107', '=F106*35/3600')
->setCellValue('G107', '=G106*35/3600')
->setCellValue('H107', '=H106*35/3600')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(109,=C107+C108) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C109', '=C107+C108')
->setCellValue('D109', '=D107+D108')
->setCellValue('E109', '=E107+E108')
->setCellValue('F109', '=F107+F108')
->setCellValue('G109', '=G107+G108')
->setCellValue('H109', '=H107+H108')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(112,=C110*C111) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C112', '=C110*C111')
->setCellValue('D112', '=D110*D111')
->setCellValue('E112', '=E110*E111')
->setCellValue('F112', '=F110*F111')
->setCellValue('G112', '=G110*G111')
->setCellValue('H112', '=H110*H111')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:345 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(118,=C116*1.17) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C118', '=C116*1.17')
->setCellValue('D118', '=D116*1.17')
->setCellValue('E118', '=E116*1.17')
->setCellValue('F118', '=F116*1.17')
->setCellValue('G118', '=G116*1.17')
->setCellValue('H118', '=H116*1.17')
;


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(A, {"A9BCF5":[15,28,29,40,51,55,62,67,72,76,80,86,97,101,105,111,113,8]})---
$objPHPExcel->getActiveSheet()->getStyle('A15')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A28')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A29')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A40')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(B, {"A9BCF5":[15,28,29,40,51,55,62,67,72,76,80,86,97,101,105,111,113,8]})---
$objPHPExcel->getActiveSheet()->getStyle('B15')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B28')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B29')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B40')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(B, {"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]})---
$objPHPExcel->getActiveSheet()->getStyle('B39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]})---
$objPHPExcel->getActiveSheet()->getStyle('C39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]})---
$objPHPExcel->getActiveSheet()->getStyle('D39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]})---
$objPHPExcel->getActiveSheet()->getStyle('E39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]})---
$objPHPExcel->getActiveSheet()->getStyle('F39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]})---
$objPHPExcel->getActiveSheet()->getStyle('G39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"BE6E6E6":[39,50,54,61,66,71,75,79,85,96,100,104,109,112,115]})---
$objPHPExcel->getActiveSheet()->getStyle('H39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"F9E79F":[10,12,30,41,67,72,76,81,87]})---
$objPHPExcel->getActiveSheet()->getStyle('C10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"F9E79F":[10,12,30,41,67,72,76,81,87]})---
$objPHPExcel->getActiveSheet()->getStyle('D10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"F9E79F":[10,12,30,41,67,72,76,81,87]})---
$objPHPExcel->getActiveSheet()->getStyle('E10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"F9E79F":[10,12,30,41,67,72,76,81,87]})---
$objPHPExcel->getActiveSheet()->getStyle('F10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"F9E79F":[10,12,30,41,67,72,76,81,87]})---
$objPHPExcel->getActiveSheet()->getStyle('G10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"F9E79F":[10,12,30,41,67,72,76,81,87]})---
$objPHPExcel->getActiveSheet()->getStyle('H10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,52,56,59,63,68,70,73,77,82,84,88,89,90,91,92,93,94,95,98,99,102,106,108,111,113,114]})---
$objPHPExcel->getActiveSheet()->getStyle('C11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C21')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C22')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C43')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C52')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C56')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C59')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C63')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C68')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C73')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C77')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C82')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C102')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C106')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,52,56,59,63,68,70,73,77,82,84,88,89,90,91,92,93,94,95,98,99,102,106,108,111,113,114]})---
$objPHPExcel->getActiveSheet()->getStyle('D11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D21')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D22')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D43')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D52')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D56')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D59')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D63')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D68')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D73')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D77')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D82')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D102')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D106')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,52,56,59,63,68,70,73,77,82,84,88,89,90,91,92,93,94,95,98,99,102,106,108,111,113,114]})---
$objPHPExcel->getActiveSheet()->getStyle('E11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E21')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E22')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E43')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E52')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E56')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E59')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E63')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E68')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E73')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E77')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E82')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E102')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E106')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,52,56,59,63,68,70,73,77,82,84,88,89,90,91,92,93,94,95,98,99,102,106,108,111,113,114]})---
$objPHPExcel->getActiveSheet()->getStyle('F11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F21')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F22')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F43')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F52')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F56')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F59')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F63')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F68')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F73')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F77')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F82')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F102')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F106')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,52,56,59,63,68,70,73,77,82,84,88,89,90,91,92,93,94,95,98,99,102,106,108,111,113,114]})---
$objPHPExcel->getActiveSheet()->getStyle('G11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G21')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G22')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G43')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G52')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G56')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G59')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G63')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G68')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G73')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G77')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G82')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G102')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G106')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,52,56,59,63,68,70,73,77,82,84,88,89,90,91,92,93,94,95,98,99,102,106,108,111,113,114]})---
$objPHPExcel->getActiveSheet()->getStyle('H11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H21')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H22')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H43')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H52')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H56')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H59')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H63')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H68')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H73')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H77')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H82')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H102')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H106')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(A, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('A24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(B, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('B24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('C24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('D24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('E24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('F24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('G24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"cccccc":[24,25,110,116,117,118]})---
$objPHPExcel->getActiveSheet()->getStyle('H24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H118')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//[[A0601]] 顯示版本信息

//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:538 function: makeColorFillStyle
//


// --- makeColorFillStyle(A, {"98AFC7":[7,8,9]})---
$objPHPExcel->getActiveSheet()->getStyle('A7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('98AFC7');
$objPHPExcel->getActiveSheet()->getStyle('A8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('98AFC7');
$objPHPExcel->getActiveSheet()->getStyle('A9')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('98AFC7');


//[[A0601]] 加方格線

//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:516 function: makeCellsBorderColRowFromTo
//


$styleArr = array( 'borders' => array( 'allborders' => array( 'style' => 'thin' )));
$objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('A119')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('B119')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('C119')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('E119')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('D119')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('F119')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('G119')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H3')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H4')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H5')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H6')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H7')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H8')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H9')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H10')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H11')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H12')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H13')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H14')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H15')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H16')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H17')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H18')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H19')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H20')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H21')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H22')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H23')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H24')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H25')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H26')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H27')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H28')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H29')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H30')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H31')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H32')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H33')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H34')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H35')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H36')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H37')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H38')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H39')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H40')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H41')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H42')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H43')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H44')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H45')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H46')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H47')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H48')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H49')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H50')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H51')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H52')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H53')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H54')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H55')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H56')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H57')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H58')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H59')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H60')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H61')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H62')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H63')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H64')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H65')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H66')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H67')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H68')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H69')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H70')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H71')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H72')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H73')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H74')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H75')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H76')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H77')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H78')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H79')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H80')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H81')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H82')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H83')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H84')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H85')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H86')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H87')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H88')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H89')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H90')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H91')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H92')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H93')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H94')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H95')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H96')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H97')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H98')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H99')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H100')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H101')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H102')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H103')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H104')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H105')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H106')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H107')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H108')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H109')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H110')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H111')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H112')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H113')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H114')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H115')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H116')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H117')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H118')->applyFromArray($styleArr);
$objPHPExcel->getActiveSheet()->getStyle('H119')->applyFromArray($styleArr);


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:560 function: makeFontItalic
//


// --- makeFontItalic(C, {"0000A0":[31,36,42,46,47,53,57,64,69,74,78,83,103,107]})---
$objPHPExcel->getActiveSheet()->getStyle('C31')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C31')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C36')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C36')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C42')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C42')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C46')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C46')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C47')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C47')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C53')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C53')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C57')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C57')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C64')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C64')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C69')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C69')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C74')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C74')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C78')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C78')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C83')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C83')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C103')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C103')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C107')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C107')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:560 function: makeFontItalic
//


// --- makeFontItalic(D, {"0000A0":[31,36,42,46,47,53,57,64,69,74,78,83,103,107]})---
$objPHPExcel->getActiveSheet()->getStyle('D31')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D31')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D36')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D36')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D42')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D42')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D46')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D46')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D47')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D47')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D53')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D53')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D57')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D57')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D64')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D64')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D69')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D69')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D74')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D74')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D78')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D78')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D83')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D83')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D103')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D103')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D107')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D107')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:560 function: makeFontItalic
//


// --- makeFontItalic(E, {"0000A0":[31,36,42,46,47,53,57,64,69,74,78,83,103,107]})---
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E31')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E36')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E36')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E42')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E42')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E46')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E47')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E47')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E53')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E53')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E57')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E57')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E64')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E64')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E69')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E69')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E74')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E74')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E78')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E78')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E83')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E83')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E103')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E103')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E107')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E107')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:560 function: makeFontItalic
//


// --- makeFontItalic(F, {"0000A0":[31,36,42,46,47,53,57,64,69,74,78,83,103,107]})---
$objPHPExcel->getActiveSheet()->getStyle('F31')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F31')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F36')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F36')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F42')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F42')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F46')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F46')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F47')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F47')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F53')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F53')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F57')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F57')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F64')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F64')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F69')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F69')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F74')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F74')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F78')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F78')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F83')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F83')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F103')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F103')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F107')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F107')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:560 function: makeFontItalic
//


// --- makeFontItalic(G, {"0000A0":[31,36,42,46,47,53,57,64,69,74,78,83,103,107]})---
$objPHPExcel->getActiveSheet()->getStyle('G31')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G31')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G36')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G36')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G42')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G42')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G46')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G46')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G47')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G47')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G53')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G53')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G57')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G57')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G64')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G64')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G69')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G69')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G74')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G74')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G78')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G78')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G83')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G83')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G103')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G103')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G107')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G107')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\B0329\rfq\project-rfq003\B0329\rfq\php-excel\make-excel-helper.php line:560 function: makeFontItalic
//


// --- makeFontItalic(H, {"0000A0":[31,36,42,46,47,53,57,64,69,74,78,83,103,107]})---
$objPHPExcel->getActiveSheet()->getStyle('H31')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H31')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H36')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H36')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H42')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H42')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H46')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H46')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H47')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H47')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H53')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H53')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H57')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H57')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H64')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H64')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H69')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H69')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H74')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H74')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H78')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H78')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H83')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H83')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H103')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H103')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H107')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H107')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
