<?php


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:424 function: makePercentFormat
//

// makePercentFormat 0.00% ok, FORMAT_PERCENTAGE_00 為什麼不行?
$objPHPExcel->getActiveSheet()->getStyle('C35:H35')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C48:H48')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C58:H58')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C69:H69')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C93:H93')->getNumberFormat()->setFormatCode("0.00%");
$objPHPExcel->getActiveSheet()->getStyle('C110:H110')->getNumberFormat()->setFormatCode("0.00%");


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:369 function: makeSum
//

$objPHPExcel->getActiveSheet()
->setCellValue('C24', '=C19+C20+C21+C22+C23')
->setCellValue('D24', '=D19+D20+D21+D22+D23')
->setCellValue('E24', '=E19+E20+E21+E22+E23')
->setCellValue('F24', '=F19+F20+F21+F22+F23')
->setCellValue('G24', '=G19+G20+G21+G22+G23')
->setCellValue('H24', '=H19+H20+H21+H22+H23')
->setCellValue('C115', '=C109+C111+C114')
->setCellValue('D115', '=D109+D111+D114')
->setCellValue('E115', '=E109+E111+E114')
->setCellValue('F115', '=F109+F111+F114')
->setCellValue('G115', '=G109+G111+G114')
->setCellValue('H115', '=H109+H111+H114')
->setCellValue('C114', '=C112+C113')
->setCellValue('D114', '=D112+D113')
->setCellValue('E114', '=E112+E113')
->setCellValue('F114', '=F112+F113')
->setCellValue('G114', '=G112+G113')
->setCellValue('H114', '=H112+H113')
->setCellValue('C109', '=C39+C49+C53+C60+C65+C70+C74+C78+C84+C95+C99+C103+C108')
->setCellValue('D109', '=D39+D49+D53+D60+D65+D70+D74+D78+D84+D95+D99+D103+D108')
->setCellValue('E109', '=E39+E49+E53+E60+E65+E70+E74+E78+E84+E95+E99+E103+E108')
->setCellValue('F109', '=F39+F49+F53+F60+F65+F70+F74+F78+F84+F95+F99+F103+F108')
->setCellValue('G109', '=G39+G49+G53+G60+G65+G70+G74+G78+G84+G95+G99+G103+G108')
->setCellValue('H109', '=H39+H49+H53+H60+H65+H70+H74+H78+H84+H95+H99+H103+H108')
;


// RMB


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:443 function: makeMoneyStyle
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
$objPHPExcel->getActiveSheet()->getStyle('C49:H49')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C52:H52')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C53:H53')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C56:H56')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C57:H57')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C60:H60')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C63:H63')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C64:H64')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C65:H65')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C68:H68')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C70:H70')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C73:H73')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C74:H74')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C77:H77')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C78:H78')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C82:H82')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C84:H84')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C88:H88')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C89:H89')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C90:H90')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C91:H91')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C92:H92')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C95:H95')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C98:H98')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C99:H99')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C102:H102')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C103:H103')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C106:H106')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C107:H107')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C108:H108')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C109:H109')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C111:H111')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C112:H112')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C113:H113')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C114:H114')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C115:H115')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C117:H117')->getNumberFormat()->setFormatCode("¥#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C118:H118')->getNumberFormat()->setFormatCode("¥#,##0.00");

// USD


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:443 function: makeMoneyStyle
//
$objPHPExcel->getActiveSheet()->getStyle('C25:H25')->getNumberFormat()->setFormatCode("$#,##0.00");
$objPHPExcel->getActiveSheet()->getStyle('C116:H116')->getNumberFormat()->setFormatCode("$#,##0.00");

// USD 公式計算


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(25,=C24/6.35) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C25', '=C24/6.35')
->setCellValue('D25', '=D24/6.35')
->setCellValue('E25', '=E24/6.35')
->setCellValue('F25', '=F24/6.35')
->setCellValue('G25', '=G24/6.35')
->setCellValue('H25', '=H24/6.35')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(116,=C115/6.35) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C116', '=C115/6.35')
->setCellValue('D116', '=D115/6.35')
->setCellValue('E116', '=E115/6.35')
->setCellValue('F116', '=F115/6.35')
->setCellValue('G116', '=G115/6.35')
->setCellValue('H116', '=H115/6.35')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(49,=IF(ISNA((C45+C46)*(1+(1-C48))/C16),0,((C45+C46)*(1+(1-C48))/C16))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C49', '=IF(ISNA((C45+C46)*(1+(1-C48))/C16),0,((C45+C46)*(1+(1-C48))/C16))')
->setCellValue('D49', '=IF(ISNA((D45+D46)*(1+(1-D48))/D16),0,((D45+D46)*(1+(1-D48))/D16))')
->setCellValue('E49', '=IF(ISNA((E45+E46)*(1+(1-E48))/E16),0,((E45+E46)*(1+(1-E48))/E16))')
->setCellValue('F49', '=IF(ISNA((F45+F46)*(1+(1-F48))/F16),0,((F45+F46)*(1+(1-F48))/F16))')
->setCellValue('G49', '=IF(ISNA((G45+G46)*(1+(1-G48))/G16),0,((G45+G46)*(1+(1-G48))/G16))')
->setCellValue('H49', '=IF(ISNA((H45+H46)*(1+(1-H48))/H16),0,((H45+H46)*(1+(1-H48))/H16))')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(53,=(C51/3600)*C52) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C53', '=(C51/3600)*C52')
->setCellValue('D53', '=(D51/3600)*D52')
->setCellValue('E53', '=(E51/3600)*E52')
->setCellValue('F53', '=(F51/3600)*F52')
->setCellValue('G53', '=(G51/3600)*G52')
->setCellValue('H53', '=(H51/3600)*H52')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(57,=(C55/3600)*C56) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C57', '=(C55/3600)*C56')
->setCellValue('D57', '=(D55/3600)*D56')
->setCellValue('E57', '=(E55/3600)*E56')
->setCellValue('F57', '=(F55/3600)*F56')
->setCellValue('G57', '=(G55/3600)*G56')
->setCellValue('H57', '=(H55/3600)*H56')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(60,=C57*(1+(1-C58))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C60', '=C57*(1+(1-C58))')
->setCellValue('D60', '=D57*(1+(1-D58))')
->setCellValue('E60', '=E57*(1+(1-E58))')
->setCellValue('F60', '=F57*(1+(1-F58))')
->setCellValue('G60', '=G57*(1+(1-G58))')
->setCellValue('H60', '=H57*(1+(1-H58))')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(64,=(C62/3600)*C63) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C64', '=(C62/3600)*C63')
->setCellValue('D64', '=(D62/3600)*D63')
->setCellValue('E64', '=(E62/3600)*E63')
->setCellValue('F64', '=(F62/3600)*F63')
->setCellValue('G64', '=(G62/3600)*G63')
->setCellValue('H64', '=(H62/3600)*H63')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(65,=(C62/3600)*C63) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C65', '=(C62/3600)*C63')
->setCellValue('D65', '=(D62/3600)*D63')
->setCellValue('E65', '=(E62/3600)*E63')
->setCellValue('F65', '=(F62/3600)*F63')
->setCellValue('G65', '=(G62/3600)*G63')
->setCellValue('H65', '=(H62/3600)*H63')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(70,=IF(ISNA((C67/3600)*C68 * (1 + (1 - C69 ))),0,((C67/3600)*C68 * (1 + (1 - C69 ))))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C70', '=IF(ISNA((C67/3600)*C68 * (1 + (1 - C69 ))),0,((C67/3600)*C68 * (1 + (1 - C69 ))))')
->setCellValue('D70', '=IF(ISNA((D67/3600)*D68 * (1 + (1 - D69 ))),0,((D67/3600)*D68 * (1 + (1 - D69 ))))')
->setCellValue('E70', '=IF(ISNA((E67/3600)*E68 * (1 + (1 - E69 ))),0,((E67/3600)*E68 * (1 + (1 - E69 ))))')
->setCellValue('F70', '=IF(ISNA((F67/3600)*F68 * (1 + (1 - F69 ))),0,((F67/3600)*F68 * (1 + (1 - F69 ))))')
->setCellValue('G70', '=IF(ISNA((G67/3600)*G68 * (1 + (1 - G69 ))),0,((G67/3600)*G68 * (1 + (1 - G69 ))))')
->setCellValue('H70', '=IF(ISNA((H67/3600)*H68 * (1 + (1 - H69 ))),0,((H67/3600)*H68 * (1 + (1 - H69 ))))')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(74,=IF(ISNA((C72/3600)*C73),0,((C72/3600)*C73))) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C74', '=IF(ISNA((C72/3600)*C73),0,((C72/3600)*C73))')
->setCellValue('D74', '=IF(ISNA((D72/3600)*D73),0,((D72/3600)*D73))')
->setCellValue('E74', '=IF(ISNA((E72/3600)*E73),0,((E72/3600)*E73))')
->setCellValue('F74', '=IF(ISNA((F72/3600)*F73),0,((F72/3600)*F73))')
->setCellValue('G74', '=IF(ISNA((G72/3600)*G73),0,((G72/3600)*G73))')
->setCellValue('H74', '=IF(ISNA((H72/3600)*H73),0,((H72/3600)*H73))')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(78,=IF(ISNA(C77),0,(C76/3600)*C77)) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C78', '=IF(ISNA(C77),0,(C76/3600)*C77)')
->setCellValue('D78', '=IF(ISNA(D77),0,(D76/3600)*D77)')
->setCellValue('E78', '=IF(ISNA(E77),0,(E76/3600)*E77)')
->setCellValue('F78', '=IF(ISNA(F77),0,(F76/3600)*F77)')
->setCellValue('G78', '=IF(ISNA(G77),0,(G76/3600)*G77)')
->setCellValue('H78', '=IF(ISNA(H77),0,(H76/3600)*H77)')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(84,=C81*C82*C83) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C84', '=C81*C82*C83')
->setCellValue('D84', '=D81*D82*D83')
->setCellValue('E84', '=E81*E82*E83')
->setCellValue('F84', '=F81*F82*F83')
->setCellValue('G84', '=G81*G82*G83')
->setCellValue('H84', '=H81*H82*H83')
;
//[[A0607]] 加入的 遮蔽費用等三項, 公式之前有誤

//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(95,=(C87*(SUM(C88:C89))+SUM(C90:C92))*(1+(1-C93))*C94) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C95', '=(C87*(SUM(C88:C89))+SUM(C90:C92))*(1+(1-C93))*C94')
->setCellValue('D95', '=(D87*(SUM(D88:D89))+SUM(D90:D92))*(1+(1-D93))*D94')
->setCellValue('E95', '=(E87*(SUM(E88:E89))+SUM(E90:E92))*(1+(1-E93))*E94')
->setCellValue('F95', '=(F87*(SUM(F88:F89))+SUM(F90:F92))*(1+(1-F93))*F94')
->setCellValue('G95', '=(G87*(SUM(G88:G89))+SUM(G90:G92))*(1+(1-G93))*G94')
->setCellValue('H95', '=(H87*(SUM(H88:H89))+SUM(H90:H92))*(1+(1-H93))*H94')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(99,=C98) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C99', '=C98')
->setCellValue('D99', '=D98')
->setCellValue('E99', '=E98')
->setCellValue('F99', '=F98')
->setCellValue('G99', '=G98')
->setCellValue('H99', '=H98')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(103,=C101/3600*C102) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C103', '=C101/3600*C102')
->setCellValue('D103', '=D101/3600*D102')
->setCellValue('E103', '=E101/3600*E102')
->setCellValue('F103', '=F101/3600*F102')
->setCellValue('G103', '=G101/3600*G102')
->setCellValue('H103', '=H101/3600*H102')
;
// [[A0607]] FIX 106, 108 FORMULA IN EXCEL

//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//



//[[A0613]] #106 BUG

//
// file:D:\xampp\htdocs\project-rfq\A0613\rfq\php-excel\make-excel-helper.php line:307 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(106,=C105*35/3600) ---

$objPHPExcel->getActiveSheet() 
->setCellValue('C106', '=C105*35/3600')
->setCellValue('D106', '=D105*35/3600')
->setCellValue('E106', '=E105*35/3600')
->setCellValue('F106', '=F105*35/3600')
->setCellValue('G106', '=G105*35/3600')
->setCellValue('H106', '=H105*35/3600')
;

//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(108,=C106+C107) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C108', '=C106+C107')
->setCellValue('D108', '=D106+D107')
->setCellValue('E108', '=E106+E107')
->setCellValue('F108', '=F106+F107')
->setCellValue('G108', '=G106+G107')
->setCellValue('H108', '=H106+H107')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(111,=C109*C110) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C111', '=C109*C110')
->setCellValue('D111', '=D109*D110')
->setCellValue('E111', '=E109*E110')
->setCellValue('F111', '=F109*F110')
->setCellValue('G111', '=G109*G110')
->setCellValue('H111', '=H109*H110')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:303 function: extendColToCDEFGH
//


// --- extendColToCDEFGH(117,=C115*1.17) ---

$objPHPExcel->getActiveSheet()
->setCellValue('C117', '=C115*1.17')
->setCellValue('D117', '=D115*1.17')
->setCellValue('E117', '=E115*1.17')
->setCellValue('F117', '=F115*1.17')
->setCellValue('G117', '=G115*1.17')
->setCellValue('H117', '=H115*1.17')
;


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(A, {"A9BCF5":[15,28,29,40,50,54,61,66,71,75,79,85,96,100,104,110,112,7]})---
$objPHPExcel->getActiveSheet()->getStyle('A15')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A28')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A29')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A40')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('A7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(B, {"A9BCF5":[15,28,29,40,50,54,61,66,71,75,79,85,96,100,104,110,112,7]})---
$objPHPExcel->getActiveSheet()->getStyle('B15')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B28')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B29')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B40')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B54')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B61')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B79')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B85')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B96')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B100')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B104')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');
$objPHPExcel->getActiveSheet()->getStyle('B7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('A9BCF5');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(B, {"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]})---
$objPHPExcel->getActiveSheet()->getStyle('B39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B49')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B60')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B65')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B74')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B103')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('B114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]})---
$objPHPExcel->getActiveSheet()->getStyle('C39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C49')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C60')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C65')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C74')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C103')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('C114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]})---
$objPHPExcel->getActiveSheet()->getStyle('D39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D49')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D60')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D65')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D74')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D103')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('D114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]})---
$objPHPExcel->getActiveSheet()->getStyle('E39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E49')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E60')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E65')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E74')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E103')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('E114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]})---
$objPHPExcel->getActiveSheet()->getStyle('F39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F49')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F60')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F65')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F74')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F103')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('F114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]})---
$objPHPExcel->getActiveSheet()->getStyle('G39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G49')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G60')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G65')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G74')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G103')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('G114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"BE6E6E6":[39,49,53,60,65,70,74,78,84,95,99,103,108,111,114]})---
$objPHPExcel->getActiveSheet()->getStyle('H39')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H49')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H60')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H65')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H70')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H74')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H78')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H84')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H95')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H99')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H103')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H108')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H111')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');
$objPHPExcel->getActiveSheet()->getStyle('H114')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('BE6E6E6');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"F9E79F":[10,12,30,41,66,71,75,80,86]})---
$objPHPExcel->getActiveSheet()->getStyle('C10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('C86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"F9E79F":[10,12,30,41,66,71,75,80,86]})---
$objPHPExcel->getActiveSheet()->getStyle('D10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('D86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"F9E79F":[10,12,30,41,66,71,75,80,86]})---
$objPHPExcel->getActiveSheet()->getStyle('E10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('E86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"F9E79F":[10,12,30,41,66,71,75,80,86]})---
$objPHPExcel->getActiveSheet()->getStyle('F10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('F86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"F9E79F":[10,12,30,41,66,71,75,80,86]})---
$objPHPExcel->getActiveSheet()->getStyle('G10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('G86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"F9E79F":[10,12,30,41,66,71,75,80,86]})---
$objPHPExcel->getActiveSheet()->getStyle('H10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H41')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H66')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H71')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H75')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H80')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');
$objPHPExcel->getActiveSheet()->getStyle('H86')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F9E79F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]})---
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
$objPHPExcel->getActiveSheet()->getStyle('C51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C58')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C69')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C83')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C107')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('C113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]})---
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
$objPHPExcel->getActiveSheet()->getStyle('D51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D58')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D69')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D83')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D107')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('D113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]})---
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
$objPHPExcel->getActiveSheet()->getStyle('E51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E58')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E69')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E83')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E107')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('E113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]})---
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
$objPHPExcel->getActiveSheet()->getStyle('F51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F58')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F69')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F83')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F107')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('F113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]})---
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
$objPHPExcel->getActiveSheet()->getStyle('G51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G58')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G69')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G83')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G107')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('G113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"F4D03F":[11,16,19,20,21,22,23,34,43,48,51,55,58,62,67,69,72,76,81,83,87,88,89,90,91,92,93,94,97,98,101,105,107,110,112,113]})---
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
$objPHPExcel->getActiveSheet()->getStyle('H51')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H55')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H58')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H62')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H67')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H69')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H72')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H76')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H81')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H83')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H87')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H88')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H89')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H90')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H91')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H92')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H93')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H94')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H97')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H98')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H101')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H105')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H107')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H110')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H112')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');
$objPHPExcel->getActiveSheet()->getStyle('H113')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('F4D03F');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(A, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('A24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('A117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(B, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('B24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('B117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(C, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('C24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('C117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(D, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('D24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('D117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(E, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('E24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('E117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(F, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('F24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('F117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(G, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('G24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('G117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(H, {"cccccc":[24,25,109,115,116,117]})---
$objPHPExcel->getActiveSheet()->getStyle('H24')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H25')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H109')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H115')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H116')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');
$objPHPExcel->getActiveSheet()->getStyle('H117')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('cccccc');


//[[A0601]] 顯示版本信息

//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:486 function: makeColorFillStyle
//


// --- makeColorFillStyle(A, {"98AFC7":[7,8,9]})---
$objPHPExcel->getActiveSheet()->getStyle('A7')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('98AFC7');
$objPHPExcel->getActiveSheet()->getStyle('A8')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('98AFC7');
$objPHPExcel->getActiveSheet()->getStyle('A9')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor()->setARGB('98AFC7');


//[[A0601]] 加方格線

//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:464 function: makeCellsBorderColRowFromTo
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
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:508 function: makeFontItalic
//


// --- makeFontItalic(C, {"0000A0":[31,36,42,46,47,52,56,63,68,73,77,82,102,106]})---
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
$objPHPExcel->getActiveSheet()->getStyle('C52')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C52')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C56')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C56')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C63')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C63')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C68')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C68')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C73')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C73')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C77')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C77')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C82')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C82')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C102')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C102')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('C106')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C106')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:508 function: makeFontItalic
//


// --- makeFontItalic(D, {"0000A0":[31,36,42,46,47,52,56,63,68,73,77,82,102,106]})---
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
$objPHPExcel->getActiveSheet()->getStyle('D52')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D52')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D56')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D56')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D63')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D63')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D68')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D68')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D73')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D73')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D77')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D77')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D82')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D82')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D102')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D102')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('D106')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D106')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:508 function: makeFontItalic
//


// --- makeFontItalic(E, {"0000A0":[31,36,42,46,47,52,56,63,68,73,77,82,102,106]})---
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
$objPHPExcel->getActiveSheet()->getStyle('E52')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E52')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E56')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E56')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E63')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E63')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E68')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E68')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E73')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E73')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E77')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E77')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E82')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E82')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E102')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E102')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('E106')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E106')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:508 function: makeFontItalic
//


// --- makeFontItalic(F, {"0000A0":[31,36,42,46,47,52,56,63,68,73,77,82,102,106]})---
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
$objPHPExcel->getActiveSheet()->getStyle('F52')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F52')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F56')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F56')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F63')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F63')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F68')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F68')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F73')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F73')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F77')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F77')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F82')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F82')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F102')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F102')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('F106')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F106')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:508 function: makeFontItalic
//


// --- makeFontItalic(G, {"0000A0":[31,36,42,46,47,52,56,63,68,73,77,82,102,106]})---
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
$objPHPExcel->getActiveSheet()->getStyle('G52')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G52')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G56')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G56')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G63')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G63')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G68')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G68')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G73')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G73')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G77')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G77')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G82')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G82')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G102')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G102')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('G106')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G106')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));


//
// file:D:\xampp\htdocs\project-rfq\A0607\rfq\php-excel\make-excel-helper.php line:508 function: makeFontItalic
//


// --- makeFontItalic(H, {"0000A0":[31,36,42,46,47,52,56,63,68,73,77,82,102,106]})---
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
$objPHPExcel->getActiveSheet()->getStyle('H52')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H52')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H56')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H56')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H63')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H63')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H68')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H68')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H73')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H73')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H77')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H77')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H82')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H82')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H102')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H102')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
$objPHPExcel->getActiveSheet()->getStyle('H106')->getFont()->setItalic(true)->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H106')->getFont()->setColor( new PHPExcel_Style_Color('0000A0'));
