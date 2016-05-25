<?php
include("include/connect.php");
session_start();
header("Content-Type: application/vnd.ms-excel");
$date = date("Y-m-d");
header('Content-Disposition: attachment; filename="สรุปผลภาพรวมการศึกษาขั้นพื้นฐานของสถานศึกษา'.$_GET['txtschoolid'].'.xls"');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	if ($_SESSION['ses_username']=="56010000"){	
		include("include/sumstudentadmin.php");
		$selb1 = mysql_query("SELECT SUM(1_1_1) AS total1_1_1,SUM(1_1_2) AS total1_1_2,SUM(1_1_3) AS total1_1_3,SUM(1_1_4) AS total1_1_4,SUM(1_1_5) AS total1_1_5,SUM(1_2_1) AS total1_2_1,SUM(1_2_2) AS total1_2_2,SUM(1_2_3) AS total1_2_3,SUM(1_2_4) AS total1_2_4,SUM(1_2_5) AS total1_2_5,SUM(1_3_1) AS total1_3_1,SUM(1_3_2) AS total1_3_2,SUM(1_3_3) AS total1_3_3,SUM(1_3_4) AS total1_3_4,SUM(1_3_5) AS total1_3_5,SUM(1_4_1) AS total1_4_1,SUM(1_4_2) AS total1_4_2,SUM(1_4_3) AS total1_4_3,SUM(1_4_4) AS total1_4_4,SUM(1_4_5) AS total1_4_5,SUM(1_5_1) AS total1_5_1,SUM(1_5_2) AS total1_5_2,SUM(1_5_3) AS total1_5_3,SUM(1_5_4) AS total1_5_4,SUM(1_5_5) AS total1_5_5,SUM(1_6_1) AS total1_6_1,SUM(1_6_2) AS total1_6_2,SUM(1_6_3) AS total1_6_3,SUM(1_6_4) AS total1_6_4,SUM(1_6_5) AS total1_6_5 FROM `b1` ");
		$b1num = mysql_num_rows($selb1);
		if ($b1num > 0) {
			$b1Result = mysql_fetch_array($selb1) or die  (mysql_error());
		}
		$selb2 = mysql_query("SELECT SUM(2_1_1) AS total2_1_1,SUM(2_1_2) AS total2_1_2,SUM(2_1_3) AS total2_1_3,SUM(2_1_4) AS total2_1_4,SUM(2_1_5) AS total2_1_5,SUM(2_2_1) AS total2_2_1,SUM(2_2_2) AS total2_2_2,SUM(2_2_3) AS total2_2_3,SUM(2_2_4) AS total2_2_4,SUM(2_2_5) AS total2_2_5,SUM(2_3_1) AS total2_3_1,SUM(2_3_2) AS total2_3_2,SUM(2_3_3) AS total2_3_3,SUM(2_3_4) AS total2_3_4,SUM(2_3_5) AS total2_3_5,SUM(2_4_1) AS total2_4_1,SUM(2_4_2) AS total2_4_2,SUM(2_4_3) AS total2_4_3,SUM(2_4_4) AS total2_4_4,SUM(2_4_5) AS total2_4_5 FROM `b2` ");
		$b2num = mysql_num_rows($selb2);
		if ($b2num > 0) {
			$b2Result = mysql_fetch_array($selb2) or die  (mysql_error());
		}
		$selb3 = mysql_query("SELECT SUM(3_1_1) AS total3_1_1,SUM(3_1_2) AS total3_1_2,SUM(3_1_3) AS total3_1_3,SUM(3_1_4) AS total3_1_4,SUM(3_1_5) AS total3_1_5,SUM(3_2_1) AS total3_2_1,SUM(3_2_2) AS total3_2_2,SUM(3_2_3) AS total3_2_3,SUM(3_2_4) AS total3_2_4,SUM(3_2_5) AS total3_2_5,SUM(3_3_1) AS total3_3_1,SUM(3_3_2) AS total3_3_2,SUM(3_3_3) AS total3_3_3,SUM(3_3_4) AS total3_3_4,SUM(3_3_5) AS total3_3_5,SUM(3_4_1) AS total3_4_1,SUM(3_4_2) AS total3_4_2,SUM(3_4_3) AS total3_4_3,SUM(3_4_4) AS total3_4_4,SUM(3_4_5) AS total3_4_5 FROM `b3` ");
		$b3num = mysql_num_rows($selb3);
		if ($b3num > 0) {
			$b3Result = mysql_fetch_array($selb3) or die  (mysql_error());
		}
		$selb4 = mysql_query("SELECT SUM(4_1_1) AS total4_1_1,SUM(4_1_2) AS total4_1_2,SUM(4_1_3) AS total4_1_3,SUM(4_1_4) AS total4_1_4,SUM(4_1_5) AS total4_1_5,SUM(4_2_1) AS total4_2_1,SUM(4_2_2) AS total4_2_2,SUM(4_2_3) AS total4_2_3,SUM(4_2_4) AS total4_2_4,SUM(4_2_5) AS total4_2_5,SUM(4_3_1) AS total4_3_1,SUM(4_3_2) AS total4_3_2,SUM(4_3_3) AS total4_3_3,SUM(4_3_4) AS total4_3_4,SUM(4_3_5) AS total4_3_5,SUM(4_4_1) AS total4_4_1,SUM(4_4_2) AS total4_4_2,SUM(4_4_3) AS total4_4_3,SUM(4_4_4) AS total4_4_4,SUM(4_4_5) AS total4_4_5 FROM `b4` ");
		$b4num = mysql_num_rows($selb4);
		if ($b4num > 0) {
			$b4Result = mysql_fetch_array($selb4) or die  (mysql_error());
		}
		$selb5 = mysql_query("SELECT  SUM(5_1) AS total5_1, SUM(5_2) AS total5_2, SUM(5_3) AS total5_3, SUM(5_4) AS total5_4 FROM `b5` ");
		$b5num = mysql_num_rows($selb5);
		if ($b5num > 0) {
			$b5Result = mysql_fetch_array($selb5) or die  (mysql_error());
			$b5_1 = round($b5Result['total5_1'] / $b5num);
			$b5_2 = round($b5Result['total5_2'] / $b5num);
			$b5_3 = round($b5Result['total5_3'] / $b5num);
			$b5_4 = round($b5Result['total5_4'] / $b5num);
		}
		$selb6 = mysql_query("SELECT SUM(6_1_1) AS total6_1_1,SUM(6_1_2) AS total6_1_2,SUM(6_1_3) AS total6_1_3,SUM(6_1_4) AS total6_1_4,SUM(6_1_5) AS total6_1_5,SUM(6_2_1) AS total6_2_1,SUM(6_2_2) AS total6_2_2,SUM(6_2_3) AS total6_2_3,SUM(6_2_4) AS total6_2_4,SUM(6_2_5) AS total6_2_5,SUM(6_3_1) AS total6_3_1,SUM(6_3_2) AS total6_3_2,SUM(6_3_3) AS total6_3_3,SUM(6_3_4) AS total6_3_4,SUM(6_3_5) AS total6_3_5,SUM(6_4_1) AS total6_4_1,SUM(6_4_2) AS total6_4_2,SUM(6_4_3) AS total6_4_3,SUM(6_4_4) AS total6_4_4,SUM(6_4_5) AS total6_4_5 FROM `b6` ");
		$b6num = mysql_num_rows($selb6);
		if ($b6num > 0) {
			$b6Result = mysql_fetch_array($selb6) or die  (mysql_error());
		}
		$selb7 = mysql_query("SELECT SUM(7_1_1) AS total7_1_1,SUM(7_1_2) AS total7_1_2,SUM(7_1_3) AS total7_1_3,SUM(7_1_4) AS total7_1_4,SUM(7_1_5) AS total7_1_5,SUM(7_2_1) AS total7_2_1,SUM(7_2_2) AS total7_2_2,SUM(7_2_3) AS total7_2_3,SUM(7_2_4) AS total7_2_4,SUM(7_2_5) AS total7_2_5,SUM(7_3_1) AS total7_3_1,SUM(7_3_2) AS total7_3_2,SUM(7_3_3) AS total7_3_3,SUM(7_3_4) AS total7_3_4,SUM(7_3_5) AS total7_3_5,SUM(7_4_1) AS total7_4_1,SUM(7_4_2) AS total7_4_2,SUM(7_4_3) AS total7_4_3,SUM(7_4_4) AS total7_4_4,SUM(7_4_5) AS total7_4_5,SUM(7_4_1) AS total7_4_1,SUM(7_4_2) AS total7_4_2,SUM(7_4_3) AS total7_4_3,SUM(7_4_4) AS total7_4_4,SUM(7_4_5) AS total7_4_5,SUM(7_5_1) AS total7_5_1,SUM(7_5_2) AS total7_5_2,SUM(7_5_3) AS total7_5_3,SUM(7_5_4) AS total7_5_4,SUM(7_5_5) AS total7_5_5,SUM(7_6_1) AS total7_6_1,SUM(7_6_2) AS total7_6_2,SUM(7_6_3) AS total7_6_3,SUM(7_6_4) AS total7_6_4,SUM(7_6_5) AS total7_6_5,SUM(7_7_1) AS total7_7_1,SUM(7_7_2) AS total7_7_2,SUM(7_7_3) AS total7_7_3,SUM(7_7_4) AS total7_7_4,SUM(7_7_5) AS total7_7_5,SUM(7_8_1) AS total7_8_1,SUM(7_8_2) AS total7_8_2,SUM(7_8_3) AS total7_8_3,SUM(7_8_4) AS total7_8_4,SUM(7_8_5) AS total7_8_5,SUM(7_9_1) AS total7_9_1,SUM(7_9_2) AS total7_9_2,SUM(7_9_3) AS total7_9_3,SUM(7_9_4) AS total7_9_4,SUM(7_9_5) AS total7_9_5 FROM `b7` ");
		$b7num = mysql_num_rows($selb7);
		if ($b7num > 0) {
			$b7Result = mysql_fetch_array($selb7) or die  (mysql_error());
		}
		$selb8 = mysql_query("SELECT  SUM(8_1) AS total8_1, SUM(8_2) AS total8_2, SUM(8_3) AS total8_3, SUM(8_4) AS total8_4, SUM(8_5) AS total8_5, SUM(8_6) AS total8_6 FROM `b8` ");
		$b8num = mysql_num_rows($selb8);
		if ($b8num > 0) {
			$b8Result = mysql_fetch_array($selb8) or die  (mysql_error());
			$b8_1 = round($b8Result['total8_1'] / $b8num);
			$b8_2 = round($b8Result['total8_2'] / $b8num);
			$b8_3 = round($b8Result['total8_3'] / $b8num);
			$b8_4 = round($b8Result['total8_4'] / $b8num);
			$b8_5 = round($b8Result['total8_5'] / $b8num);
			$b8_6 = round($b8Result['total8_6'] / $b8num);
		}
		$selb9 = mysql_query("SELECT  SUM(9_1) AS total9_1, SUM(9_2) AS total9_2, SUM(9_3) AS total9_3 FROM `b9` ");
		$b9num = mysql_num_rows($selb9);
		if ($b9num > 0) {
			$b9Result = mysql_fetch_array($selb9) or die  (mysql_error());
			$b9_1 = round($b9Result['total9_1'] / $b9num);
			$b9_2 = round($b9Result['total9_2'] / $b9num);
			$b9_3 = round($b9Result['total9_3'] / $b9num);
		}
		$selb10 = mysql_query("SELECT  SUM(10_1) AS total10_1, SUM(10_2) AS total10_2, SUM(10_3) AS total10_3, SUM(10_4) AS total10_4, SUM(10_5) AS total10_5, SUM(10_6) AS total10_6 FROM `b10` ");
		$b10num = mysql_num_rows($selb10);
		if ($b10num > 0) {
			$b10Result = mysql_fetch_array($selb10) or die  (mysql_error());
			$b10_1 = round($b10Result['total10_1'] / $b10num);
			$b10_2 = round($b10Result['total10_2'] / $b10num);
			$b10_3 = round($b10Result['total10_3'] / $b10num);
			$b10_4 = round($b10Result['total10_4'] / $b10num);
			$b10_5 = round($b10Result['total10_5'] / $b10num);
			$b10_6 = round($b10Result['total10_6'] / $b10num);
		}
		$selb11 = mysql_query("SELECT  SUM(11_1) AS total11_1,SUM(11_2) AS total11_2,SUM(11_3) AS total11_3 FROM `b11` ");
		$b11num = mysql_num_rows($selb11);
		if ($b11num > 0) {
			$b11Result = mysql_fetch_array($selb11) or die  (mysql_error());
			$b11_1 = round($b11Result['total11_1'] / $b11num);
			$b11_2 = round($b11Result['total11_2'] / $b11num);
			$b11_3 = round($b11Result['total11_3'] / $b11num);
		}
		$selb12 = mysql_query("SELECT  SUM(12_1) AS total12_1, SUM(12_2) AS total12_2, SUM(12_3) AS total12_3, SUM(12_4) AS total12_4, SUM(12_5) AS total12_5, SUM(12_6) AS total12_6 FROM `b12` ");
		$b12num = mysql_num_rows($selb12);
		if ($b12num > 0) {
			$b12Result = mysql_fetch_array($selb12) or die  (mysql_error());
			$b12_1 = round($b12Result['total12_1'] / $b12num);
			$b12_2 = round($b12Result['total12_2'] / $b12num);
			$b12_3 = round($b12Result['total12_3'] / $b12num);
			$b12_4 = round($b12Result['total12_4'] / $b12num);
			$b12_5 = round($b12Result['total12_5'] / $b12num);
			$b12_6 = round($b12Result['total12_6'] / $b12num);
		}
		$selb13 = mysql_query("SELECT  SUM(13_1) AS total13_1, SUM(13_2) AS total13_2 FROM `b13` ");
		$b13num = mysql_num_rows($selb13);
		if ($b13num > 0) {
			$b13Result = mysql_fetch_array($selb13) or die  (mysql_error());
			$b13_1 = round($b13Result['total13_1'] / $b13num);
			$b13_2 = round($b13Result['total13_2'] / $b13num);
		}
		$selb14 = mysql_query("SELECT  SUM(14_1) AS total14_1, SUM(14_2) AS total14_2 FROM `b14` ");
		$b14num = mysql_num_rows($selb14);
		if ($b14num > 0) {
			$b14Result = mysql_fetch_array($selb14) or die  (mysql_error());
			$b14_1 = round($b14Result['total14_1'] / $b14num);
			$b14_2 = round($b14Result['total14_2'] / $b14num);
		}
		$selb15 = mysql_query("SELECT  SUM(15_1) AS total15_1, SUM(15_2) AS total15_2 FROM `b15` ");
		$b15num = mysql_num_rows($selb15);
		if ($b15num > 0) {
			$b15Result = mysql_fetch_array($selb15) or die  (mysql_error());
			$b15_1 = round($b15Result['total15_1'] / $b15num);
			$b15_2 = round($b15Result['total15_2'] / $b15num);
		}

		$selteacher = mysql_query("SELECT SUM(primaryhigh) AS totalprimaryhigh FROM `teacher` ");
		$teachernum = mysql_num_rows($selteacher);
		if ($teachernum > 0) {
			$teacherResult = mysql_fetch_array($selteacher) or die  (mysql_error());
		}else{
			$teacherResult["totalprimaryhigh"] = 0;
		}

		$up1_1 = array($b1Result['total1_1_3'],$b1Result['total1_1_4'],$b1Result['total1_1_5']);
		$persen1_1 = number_format(array_sum($up1_1) * 100 / $sumb, 2, '.', '');
		$score1_1 = round($persen1_1,2) * 0.5 / 100;
		$up1_2 = array($b1Result['total1_2_3'],$b1Result['total1_2_4'],$b1Result['total1_2_5']);
		$persen1_2 = number_format(array_sum($up1_2) * 100 / $sumb, 2, '.', '');
		$score1_2 = round($persen1_2,2) * 0.5 / 100;
		$up1_3 = array($b1Result['total1_3_3'],$b1Result['total1_3_4'],$b1Result['total1_3_5']);
		$persen1_3 = number_format(array_sum($up1_3) * 100 / $sumb, 2, '.', '');
		$score1_3 = round($persen1_3,2) * 1 / 100;
		$up1_4 = array($b1Result['total1_4_3'],$b1Result['total1_4_4'],$b1Result['total1_4_5']);
		$persen1_4 = number_format(array_sum($up1_4) * 100 / $sumb, 2, '.', '');
		$score1_4 = round($persen1_4,2) * 1 / 100;
		$up1_5 = array($b1Result['total1_5_3'],$b1Result['total1_5_4'],$b1Result['total1_5_5']);
		$persen1_5 = number_format(array_sum($up1_5) * 100 / $sumb, 2, '.', '');
		$score1_5 = round($persen1_5,2) * 1 / 100;
		$up1_6 = array($b1Result['total1_6_3'],$b1Result['total1_6_4'],$b1Result['total1_6_5']);
		$persen1_6 = number_format(array_sum($up1_6) * 100 / $sumb, 2, '.', '');
		$score1_6 = round($persen1_6,2) * 1 / 100;
		$basic1 = round(array_sum(array($score1_1,$score1_2,$score1_3,$score1_4,$score1_5,$score1_6)),2);

		$up2_1 = array($b2Result['total2_1_3'],$b2Result['total2_1_4'],$b2Result['total2_1_5']);
		$persen2_1 = number_format(array_sum($up2_1) * 100 / $sumb, 2, '.', '');
		$score2_1 = round($persen2_1,2) * 2 / 100;
		$up2_2 = array($b2Result['total2_2_3'],$b2Result['total2_2_4'],$b2Result['total2_2_5']);
		$persen2_2 = number_format(array_sum($up2_2) * 100 / $sumb, 2, '.', '');
		$score2_2 = round($persen2_2,2) * 1 / 100;
		$up2_3 = array($b2Result['total2_3_3'],$b2Result['total2_3_4'],$b2Result['total2_3_5']);
		$persen2_3 = number_format(array_sum($up2_3) * 100 / $sumb, 2, '.', '');
		$score2_3 = round($persen2_3,2) * 1 / 100;
		$up2_4 = array($b2Result['total2_4_3'],$b2Result['total2_4_4'],$b2Result['total2_4_5']);
		$persen2_4 = number_format(array_sum($up2_4) * 100 / $sumb, 2, '.', '');
		$score2_4 = round($persen2_4,2) * 1 / 100;
		$basic2 = round(array_sum(array($score2_1,$score2_2,$score2_3,$score2_4)),2);

		$up3_1 = array($b3Result['total3_1_3'],$b3Result['total3_1_4'],$b3Result['total3_1_5']);
		$persen3_1 = number_format(array_sum($up3_1) * 100 / $sumb, 2, '.', '');
		$score3_1 = round($persen3_1,2) * 2 / 100;
		$up3_2 = array($b3Result['total3_2_3'],$b3Result['total3_2_4'],$b3Result['total3_2_5']);
		$persen3_2 = number_format(array_sum($up3_2) * 100 / $sumb, 2, '.', '');
		$score3_2 = round($persen3_2,2) * 1 / 100;
		$up3_3 = array($b3Result['total3_3_3'],$b3Result['total3_3_4'],$b3Result['total3_3_5']);
		$persen3_3 = number_format(array_sum($up3_3) * 100 / $sumb, 2, '.', '');
		$score3_3 = round($persen3_3,2) * 1 / 100;
		$up3_4 = array($b3Result['total3_4_3'],$b3Result['total3_4_4'],$b3Result['total3_4_5']);
		$persen3_4 = number_format(array_sum($up3_4) * 100 / $sumb, 2, '.', '');
		$score3_4 = round($persen3_4,2) * 1 / 100;
		$basic3 = round(array_sum(array($score3_1,$score3_2,$score3_3,$score3_4)),2);

		$up4_1 = array($b4Result['total4_1_3'],$b4Result['total4_1_4'],$b4Result['total4_1_5']);
		$persen4_1 = number_format(array_sum($up4_1) * 100 / $sumb, 2, '.', '');
		$score4_1 = round($persen4_1,2) * 2 / 100;
		$up4_2 = array($b4Result['total4_2_3'],$b4Result['total4_2_4'],$b4Result['total4_2_5']);
		$persen4_2 = number_format(array_sum($up4_2) * 100 / $sumb, 2, '.', '');
		$score4_2 = round($persen4_2,2) * 1 / 100;
		$up4_3 = array($b4Result['total4_3_3'],$b4Result['total4_3_4'],$b4Result['total4_3_5']);
		$persen4_3 = number_format(array_sum($up4_3) * 100 / $sumb, 2, '.', '');
		$score4_3 = round($persen4_3,2) * 1 / 100;
		$up4_4 = array($b4Result['total4_4_3'],$b4Result['total4_4_4'],$b4Result['total4_4_5']);
		$persen4_4 = number_format(array_sum($up4_4) * 100 / $sumb, 2, '.', '');
		$score4_4 = round($persen4_4,2) * 1 / 100;
		$basic4 = round(array_sum(array($score4_1,$score4_2,$score4_3,$score4_4)),2);

		$score5_1 = $b5_1 * 1 / 5;
		$score5_2 = $b5_2 * 1 / 5;
		$score5_3 = $b5_3 * 2 / 5;
		$score5_4 = $b5_4 * 1 / 5;
		$basic5 = round(array_sum(array($score5_1,$score5_2,$score5_3,$score5_4)),2);

		$up6_1 = array($b6Result['total6_1_3'],$b6Result['total6_1_4'],$b6Result['total6_1_5']);
		$persen6_1 = number_format(array_sum($up6_1) * 100 / $sumb, 2, '.', '');
		$score6_1 = round($persen6_1,2) * 2 / 100;
		$up6_2 = array($b6Result['total6_2_3'],$b6Result['total6_2_4'],$b6Result['total6_2_5']);
		$persen6_2 = number_format(array_sum($up6_2) * 100 / $sumb, 2, '.', '');
		$score6_2 = round($persen6_2,2) * 1 / 100;
		$up6_3 = array($b6Result['total6_3_3'],$b6Result['total6_3_4'],$b6Result['total6_3_5']);
		$persen6_3 = number_format(array_sum($up6_3) * 100 / $sumb, 2, '.', '');
		$score6_3 = round($persen6_3,2) * 1 / 100;
		$up6_4 = array($b6Result['total6_4_3'],$b6Result['total6_4_4'],$b6Result['total6_4_5']);
		$persen6_4 = number_format(array_sum($up6_4) * 100 / $sumb, 2, '.', '');
		$score6_4 = round($persen6_4,2) * 1 / 100;
		$basic6 = round(array_sum(array($score6_1,$score6_2,$score6_3,$score6_4)),2);

		$side1 = round(array_sum(array($basic1,$basic2,$basic3,$basic4,$basic5,$basic6)),2);;

		$up7_1 = array($b7Result['total7_1_3'],$b7Result['total7_1_4'],$b7Result['total7_1_5']);
		$persen7_1 = number_format(array_sum($up7_1) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_1 = round($persen7_1,2) * 1 / 100;
		$up7_2 = array($b7Result['total7_2_3'],$b7Result['total7_2_4'],$b7Result['total7_2_5']);
		$persen7_2 = number_format(array_sum($up7_2) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_2 = round($persen7_2,2) * 1 / 100;
		$up7_3 = array($b7Result['total7_3_3'],$b7Result['total7_3_4'],$b7Result['total7_3_5']);
		$persen7_3 = number_format(array_sum($up7_3) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_3 = round($persen7_3,2) * 2 / 100;
		$up7_4 = array($b7Result['total7_4_3'],$b7Result['total7_4_4'],$b7Result['total7_4_5']);
		$persen7_4 = number_format(array_sum($up7_4) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_4 = round($persen7_4,2) * 1 / 100;
		$up7_5 = array($b7Result['total7_5_3'],$b7Result['total7_5_4'],$b7Result['total7_5_5']);
		$persen7_5 = number_format(array_sum($up7_5) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_5 = round($persen7_5,2) * 1 / 100;
		$up7_6 = array($b7Result['total7_6_3'],$b7Result['total7_6_4'],$b7Result['total7_6_5']);
		$persen7_6 = number_format(array_sum($up7_6) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_6 = round($persen7_6,2) * 1 / 100;
		$up7_7 = array($b7Result['total7_7_3'],$b7Result['total7_7_4'],$b7Result['total7_7_5']);
		$persen7_7 = number_format(array_sum($up7_7) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_7 = round($persen7_7,2) * 1 / 100;
		$up7_8 = array($b7Result['total7_8_3'],$b7Result['total7_8_4'],$b7Result['total7_8_5']);
		$persen7_8 = number_format(array_sum($up7_8) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_8 = round($persen7_8,2) * 1 / 100;
		$up7_9 = array($b7Result['total7_9_3'],$b7Result['total7_9_4'],$b7Result['total7_9_5']);
		$persen7_9 = number_format(array_sum($up7_9) * 100 / $teacherResult["totalprimaryhigh"], 2, '.', '');
		$score7_9 = round($persen7_9,2) * 1 / 100;
		$basic7 = round(array_sum(array($score7_1,$score7_2,$score7_3,$score7_4,$score7_5,$score7_6,$score7_7,$score7_8,$score7_9)),2);

		$score8_1 = $b8_1 * 1 / 5;
		$score8_2 = $b8_2 * 2 / 5;
		$score8_3 = $b8_3 * 2 / 5;
		$score8_4 = $b8_4 * 2 / 5;
		$score8_5 = $b8_5 * 1 / 5;
		$score8_6 = $b8_6 * 2 / 5;
		$basic8 = round(array_sum(array($score8_1,$score8_2,$score8_3,$score8_4,$score8_5,$score8_6)),2);

		$score9_1 = $b9_1 * 2 / 5;
		$score9_2 = $b9_2 * 1 / 5;
		$score9_3 = $b9_3 * 2 / 5;
		$basic9 = round(array_sum(array($score9_1,$score9_2,$score9_3)),2);

		$score10_1 = $b10_1 * 2 / 5;
		$score10_2 = $b10_2 * 2 / 5;
		$score10_3 = $b10_3 * 1 / 5;
		$score10_4 = $b10_4 * 1 / 5;
		$score10_5 = $b10_5 * 2 / 5;
		$score10_6 = $b10_6 * 2 / 5;
		$basic10 = round(array_sum(array($score10_1,$score10_2,$score10_3,$score10_4,$score10_5,$score10_6)),2);

		$score11_1 = $b11_1 * 4 / 5;
		$score11_2 = $b11_2 * 3 / 5;
		$score11_3 = $b11_3 * 3 / 5;
		$basic11 = round(array_sum(array($score11_1,$score11_2,$score11_3)),2);

		$score12_1 = $b12_1 * 1 / 5;
		$score12_2 = $b12_2 * 1 / 5;
		$score12_3 = $b12_3 * 1 / 5;
		$score12_4 = $b12_4 * 0.5 / 5;
		$score12_5 = $b12_5 * 0.5 / 5;
		$score12_6 = $b12_6 * 1 / 5;
		$basic12 = round(array_sum(array($score12_1,$score12_2,$score12_3,$score12_4,$score12_5,$score12_6)),2);

		$side2 =  round(array_sum(array($basic7,$basic8,$basic9,$basic10,$basic11,$basic12)),2);

		$score13_1 = $b13_1 * 5 / 5;
		$score13_2 = $b13_2 * 5 / 5;
		$basic13 = round(array_sum(array($score13_1,$score13_2)),2);

		$side3 =  round(array_sum(array($basic13)),2);

		$score14_1 = $b14_1* 3 / 5;
		$score14_2 = $b14_2* 2 / 5;
		$basic14 = round(array_sum(array($score14_1,$score14_2)),2);

		$side4=  round(array_sum(array($basic14)),2);

		$score15_1 = $b15_1 * 3 / 5;
		$score15_2 = $b15_2 * 2 / 5;
		$basic15 = round(array_sum(array($score15_1,$score15_2)),2);

		$side5 =  round(array_sum(array($basic15)),2);

		$basicScore =  round(array_sum(array($basic1,$basic2,$basic3,$basic4,$basic5,$basic6,$basic7,$basic8,$basic9,$basic10,$basic11,$basic12,$basic13,$basic14,$basic15)),2);
?>
	<table align="center" width="100%" border="1" >
			<tr>
				<td><div align="center">ตัวบ่งชี้</div></td>
				<td><div align="center">จำนวนนักเรียน/<br>ครูทั้งหมด</div></td>
				<td><div align="center">ได้ระดับคุณภาพ 3 ขึ้นไป(คน)</div></td>
				<td><div align="center">ร้อยละ/ระดับที่ได้</div></td>
				<td><div align="center">น้ำหนัก</div></td>
				<td><div align="center">คะแนนที่ได้</div></td>
				<td><div align="center">เทียบระดับคุณภาพ</div></td>
				<td><div align="center">แปลคุณภาพ</div></td>
			</tr>
			<tr>
				<td>มาตรฐานด้านคุณภาพผู้เรียน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">30</div></td>
				<td><div align="center">
				<?php
				echo $side1;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side1;
				include("score30.php");
  					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>มาตรฐานที่ 1 เด็กมีพัฒนาการด้านร่างกาย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic1; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score1_1,$score1_2,$score1_3,$score1_4));
  					include("score5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>1.1 มีสุขนิสัยในการดูแลสุขภาพและออกกำลังกาย สม่ำเสมอ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_1);?></div></td>
				<td><div align="center"><?php echo $persen1_1;?></div></td>
				<td><div align="center">0.5</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_1,2) * 0.5 / 100;
				echo round($score,2);
				include("scoreb05.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>1.2 มีน้ำหนัก ส่วนสูง และมีสมรรถภาพทางกายตามเกณฑ์มาตรฐาน</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_2);?></div></td>
				<td><div align="center"><?php echo $persen1_2;?></div></td>
				<td><div align="center">0.5</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_2,2) * 0.5 / 100;
				echo round($score,2);
				include("scoreb05.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>1.3 ป้องกันตนเองจากสิ่งเสพติดให้โทษและหลีกเลี่ยงตนเองจากสภาวะที่เสี่ยงต่อความรุนแรง โรค ภัย อุบัติเหตุ และปัญหาทางเพศ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_3);?></div></td>
				<td><div align="center"><?php echo $persen1_3;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_3,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>1.4 เห็นคุณค่าในตนเอง มีความมั่นใจ กล้าแสดงออกอย่างเหมาะสม</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_4);?></div></td>
				<td><div align="center"><?php echo $persen1_4;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_4,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>1.5 มีมนุษยสัมพันธ์ที่ดีและให้เกียรติผู้อื่น  </td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_5);?></div></td>
				<td><div align="center"><?php echo $persen1_5;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_5,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>1.6 สร้างผลงานจากเข้าร่วมกิจกรรมด้านศิลปะ ดนตรี/นาฏศิลป์ กีฬา/นันทนาการ  ตามจินตนาการ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_6);?></div></td>
				<td><div align="center"><?php echo $persen1_6;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_6,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 2 ผู้เรียนมีคุณธรรม จริยธรรม และค่านิยมที่พึงประสงค์</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic2; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score2_1,$score2_2,$score2_3,$score2_4));
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>2.1 มีคุณลักษณะที่พึงประสงค์ตามหลักสูตร</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_1);?></div></td>
				<td><div align="center"><?php echo $persen2_1;?></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = round($persen2_1,2) * 2 / 100;
				echo round($score,2);
				include("score201.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>2.2 เอื้ออาทรผู้อื่นและกตัญญูกตเวทีต่อผู้มีพระคุณ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_2);?></div></td>
				<td><div align="center"><?php echo $persen2_2;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen2_2,2) * 1.0 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>2.3 ยอมรับความคิดและวัฒนธรรมที่แตกต่าง</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_3);?></div></td>
				<td><div align="center"><?php echo $persen2_3;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen2_3,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>2.4 ตระหนัก รู้คุณค่า ร่วมอนุรักษ์และพัฒนาสิ่งแวดล้อม</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_4);?></div></td>
				<td><div align="center"><?php echo $persen2_4;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen2_4,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 3  ผู้เรียนมีทักษะในการแสวงหาความรู้ด้วยตนเอง รักการเรียนรู้ และพัฒนาตนเองอย่างต่อเนื่อง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic3; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score3_1,$score3_2,$score3_3,$score3_4));
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>3.1 มีนิสัยรักการอ่านและแสวงหาความรู้ด้วยตนเองจากห้องสมุด แหล่งเรียนรู้ และสื่อต่างๆ รอบตัว</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_1);?></div></td>
				<td><div align="center"><?php echo $persen3_1;?></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = round($persen3_1,2) * 2 / 100;
				echo round($score,2);
				include("score201.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>3.2 มีทักษะในการอ่าน ฟัง ดู พูด เขียน และตั้งคำถามพื่อค้นคว้าหาความรู้เพิ่มเติม</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_2);?></div></td>
				<td><div align="center"><?php echo $persen3_2;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen3_2,2) * 1.0 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>3.3 เรียนรู้ร่วมกันเป็นกลุ่ม แลกเปลี่ยน</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_3);?></div></td>
				<td><div align="center"><?php echo $persen3_3;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen3_3,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>3.4 ใช้เทคโนโลยีในการเรียนรู้และนำเสนอผลงาน</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_4);?></div></td>
				<td><div align="center"><?php echo $persen3_4;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen3_4,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 4  ผู้เรียนมีความสามารถในการคิดอย่างเป็นระบบ คิดสร้างสรรค์ ตัดสินใจแก้ปัญหาได้อย่างมีสติสมเหตุผล</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic4; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score4_1,$score4_2,$score4_3,$score4_4));
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>4.1 สรุปความคิดจากเรื่องที่อ่าน ฟัง และดู และสื่อสารโดยการพูดหรือเขียนตามความคิดของตนเอง</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_1);?></div></td>
				<td><div align="center"><?php echo $persen4_1;?></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = round($persen4_1,2) * 2 / 100;
				echo round($score,2);
				include("score201.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>4.2 นำเสนอวิธีคิด วิธีแก้ปัญหาด้วยภาษาหรือวิธีการของตนเอง</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_2);?></div></td>
				<td><div align="center"><?php echo $persen4_2;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen4_2,2) * 1.0 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>4.3 กำหนดเป้าหมาย คาดการณ์ ตัดสินใจแก้ปัญหาโดยมีเหตุผลประกอบ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_3);?></div></td>
				<td><div align="center"><?php echo $persen4_3;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen4_3,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>4.4 ความคิดริเริ่ม และสร้างสรรค์ผลงานด้วยความภาคภูมิใจ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_4);?></div></td>
				<td><div align="center"><?php echo $persen4_4;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen4_4,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 5 ผู้เรียนมีความรู้และทักษะที่จำเป็นตามหลักสูตร</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic5; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic5;
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>5.1 ผลสัมฤทธิ์ทางการเรียนเฉลี่ยแต่ละกลุ่มสาระ เป็นไปตามเกณฑ์</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score5_1;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>5.2 ผลการประเมินสมรรถนะสำคัญตามหลักสูตร เป็นไปตามเกณฑ์ </td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score5_2;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>5.3 ผลการประเมินการอ่าน คิดวิเคราะห์ และเขียน เป็นไปตามเกณฑ์</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score5_3;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>5.4 ผลการทดสอบระดับชาติ เป็นไปตามเกณฑ์</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score5_4;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 6 ผู้เรียนมีทักษะในการทำงาน  รักการทำงาน  สามารถทำงานร่วมกับผู้อื่นได้ และมีเจตคติที่ดีต่ออาชีพสุจริต</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic6; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score6_1,$score6_2,$score6_3,$score6_4));
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>6.1  วางแผนการทำงานและดำเนินการจนสำเร็จ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up6_1);?></div></td>
				<td><div align="center"><?php echo $persen6_1;?></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = round($persen6_1,2) * 2 / 100;
				echo round($score,2);
				include("score201.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>6.2  ทำงานอย่างมีความสุข มุ่งมั่นพัฒนางาน และภูมิใจในผลงานของตนเอง</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up6_2);?></div></td>
				<td><div align="center"><?php echo $persen6_2;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen6_2,2) * 1.0 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>6.3  ทำงานร่วมกับผู้อื่นได้</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up6_3);?></div></td>
				<td><div align="center"><?php echo $persen6_3;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen6_3,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>6.4  มีความรู้สึกที่ดีต่ออาชีพสุจริตและหาความรู้เกี่ยวกับอาชีพที่ตนเองสนใจ</td>
				<td><div align="center"><?php echo $sumb;?></div></td>
				<td><div align="center"><?php echo array_sum($up6_4);?></div></td>
				<td><div align="center"><?php echo $persen6_4;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen6_4,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานด้านการจัดการศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">50</div></td>
				<td><div align="center">
				<?php
				echo $side2;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side2;
				include("score50.php");
  					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?>
				</div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 7 ครูปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">10.0</div></td>
				<td><div align="center"><?php echo $basic7; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic7;
  					include("score10.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>7.1 ครูมีการกำหนดเป้าหมายคุณภาพผู้เรียนทั้งด้านความรู้ ทักษะกระบวนการ สมรรถนะ และคุณลักษณะที่พึงประสงค์</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_1);?></div></td>
				<td><div align="center"><?php echo $persen7_1;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_1,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.2 ครูมีการวิเคราะห์ผู้เรียนเป็นรายบุคคล และใช้ข้อมูลในการวางแผนการจัดการเรียนรู้เพื่อพัฒนาศักยภาพของผู้เรียน</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_2);?></div></td>
				<td><div align="center"><?php echo $persen7_2;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_2,2) * 1.0 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.3 ครูออกแบบและการจัดการเรียนรู้ที่ตอบสนองความแตกต่างระหว่างบุคคลและพัฒนาการทางสติปัญญา</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_3);?></div></td>
				<td><div align="center"><?php echo $persen7_3;?></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_3,2) * 2 / 100;
				echo round($score,2);
				include("score201.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.4 ครูใช้สื่อและเทคโนโลยีที่เหมาะสมผนวกกับการนำบริบทและภูมิปัญญาของท้องถิ่นมาบูรณาการในการจัดการเรียนรู้</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_4);?></div></td>
				<td><div align="center"><?php echo $persen7_4;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_4,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.5 ครูมีการวัดและประเมินผลที่มุ่งเน้นการพัฒนาการเรียนรู้ของผู้เรียนด้วยวิธีการที่หลากหลาย</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_5);?></div></td>
				<td><div align="center"><?php echo $persen7_5;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_5,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.6 ครูให้คำแนะนำ คำปรึกษา และแก้ไขปัญหาให้แก่ผู้เรียนทั้งด้านการเรียนและคุณภาพชีวิตด้วยความเสมอภาค</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_6);?></div></td>
				<td><div align="center"><?php echo $persen7_6;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_6,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.7 ครูมีการศึกษา วิจัยและพัฒนาการจัดการเรียนรู้ในวิชาที่ตนรับผิดชอบ และใช้ผลในการปรับการสอน</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_7);?></div></td>
				<td><div align="center"><?php echo $persen7_7;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_7,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.8 ครูประพฤติปฏิบัติตนเป็นแบบอย่างที่ดี และเป็นสมาชิกที่ดีของสถานศึกษา</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_8);?></div></td>
				<td><div align="center"><?php echo $persen7_8;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_8,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>7.9 ครูจัดการเรียนการสอนตามวิชาที่ได้รับมอบหมายเต็มเวลา เต็มความสามารถ</td>
				<td><div align="center"><?php echo $teacherResult["totalprimaryhigh"];?></div></td>
				<td><div align="center"><?php echo array_sum($up7_9);?></div></td>
				<td><div align="center"><?php echo $persen7_9;?></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = round($persen7_9,2) * 1 / 100;
				echo round($score,2);
				include("score101.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 8 ผู้บริหารปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">10.0</div></td>
				<td><div align="center"><?php echo $basic8; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic8;
  					include("score10.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>8.1 ผู้บริหารมีวิสัยทัศน์ ภาวะผู้นำ และความคิดริเริ่มที่เน้นการพัฒนาผู้เรียน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score8_1;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>8.2 ผู้บริหารใช้หลักการบริหารแบบมีส่วนร่วมและใช้ข้อมูลผลการประเมินหรือผลการวิจัย เป็นฐานคิดทั้งด้านวิชาการและการจัดการ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score8_2;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>8.3 ผู้บริหารสามารถบริหารจัดการการศึกษาให้บรรลุเป้าหมายตามที่กำหนดไว้ในแผนปฏิบัติการ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score8_3;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>8.4 ผู้บริหารส่งเสริมและพัฒนาศักยภาพบุคลากรให้พร้อมรับการกระจายอำนาจ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score8_4;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>8.5 นักเรียน  ผู้ปกครอง และชุมชนพึงพอใจผลการบริหารการจัดการศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score8_5;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>8.6 ผู้บริหารให้คำแนะนำ คำปรึกษาทางวิชาการและเอาใจใส่การจัดการศึกษาเต็มศักยภาพและเต็มเวลา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score8_6;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 9 คณะกรรมการสถานศึกษา และผู้ปกครอง ชุมชน ปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic9; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic9;
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>9.1  คณะกรรมการสถานศึกษารู้และปฏิบัติหน้าที่ตามที่ระเบียบกำหนด</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score9_1;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>9.2  คณะกรรมการสถานศึกษากำกับติดตาม  ดูแล และขับเคลื่อนการดำเนินงานของสถานศึกษาให้บรรลุผลสำเร็จตามเป้าหมาย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score9_2;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>9.3  ผู้ปกครองและชุมชนเข้ามามีส่วนร่วมในการพัฒนาสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score9_3;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>มาตรฐานที่ 10 สถานศึกษามีการจัดหลักสูตร กระบวนการเรียนรู้ และกิจกรรมพัฒนาคุณภาพผู้เรียนอย่างรอบด้าน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">10.0</div></td>
				<td><div align="center"><?php echo $basic10; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic10;
  					include("score10.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>10.1  หลักสูตรสถานศึกษาเหมาะสมและสอดคล้องกับท้องถิ่น</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score10_1;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>10.2  จัดรายวิชาเพิ่มเติมที่หลากหลายให้ผู้เรียนเลือกเรียนตามความถนัดความสามารถ และความสนใจ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score10_2;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>10.3 จัดกิจกรรมพัฒนาผู้เรียนที่ส่งเสริมและตอบสนองความต้องการ ความสามารถ ความถนัด และความสนใจของผู้เรียน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score10_3;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>10.4 สนับสนุนให้ครูจัดกระบวนการเรียนรู้ที่ให้ผู้เรียนได้ลงมือปฏิบัติจริงจนสรุปความรู้ได้ด้วยตนเอง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score10_4;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>10.5 นิเทศภายใน กำกับ ติดตามตรวจสอบ และนำผลไปปรับปรุงการเรียนการสอนอย่างสม่ำเสมอ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score10_5;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>10.6 จัดระบบดูแลช่วยเหลือผู้เรียนที่มีประสิทธิภาพและครอบคลุมถึงผู้เรียนทุกคน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score10_6;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 11 สถานศึกษามีการจัดสภาพแวดล้อมและการบริการที่ส่งเสริมให้ผู้เรียนพัฒนาเต็มศักยภาพ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">10.0</div></td>
				<td><div align="center"><?php echo $basic11; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic11;
  					include("score10.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>11.1  ห้องเรียน ห้องปฏิบัติการ อาคารเรียนมั่นคง สะอาดและปลอดภัย มีสิ่ง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">4</div></td>
				<td><div align="center">
				<?php
				$score = $score11_1;
				echo round($score,2);
				include("score4.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>11.2 อำนวยความสะดวก พอเพียง อยู่ในสภาพใช้การได้ดีสภาพแวดล้อมร่มรื่น และมีแหล่งเรียนรู้สำหรับผู้เรียน </td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3</div></td>
				<td><div align="center">
				<?php
				$score = $score11_2;
				echo round($score,2);
				include("score3.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>11.3  จัดห้องสมุดที่ให้บริการสื่อและเทคโนโลยีสารสนเทศที่เอื้อให้ผู้เรียนเรียนรู้ด้วยตนเองและหรือเรียนรู้แบบมีส่วนร่วม</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score11_3;
				echo round($score,2);
				include("score3.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>มาตรฐานที่ 12 สถานศึกษามีการประกันคุณภาพภายในของสถานศึกษาตามที่กำหนดในกฎกระทรวง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic12; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic12;
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>12.1  กำหนดมาตรฐานการศึกษาของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score12_1;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>12.2  จัดทำและดำเนินการตามแผนพัฒนาการจัดการศึกษาของสถานศึกษาที่มุ่งพัฒนาคุณภาพตามมาตรฐานการศึกษาของสถานศึกษา </td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score12_2;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>12.3 จัดระบบข้อมูลสารสนเทศและใช้สารสนเทศในการบริหารจัดการเพื่อพัฒนาคุณภาพสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score12_3;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>12.4  ติดตามตรวจสอบ และประเมินคุณภาพภายในตามมาตรฐานการศึกษาของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">0.5</div></td>
				<td><div align="center">
				<?php
				$score = $score12_4;
				echo round($score,2);
				include("score05.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>12.5  นำผลการประเมินคุณภาพทั้งภายในและภายนอกไปใช้วางแผนพัฒนาคุณภาพการศึกษาอย่างต่อเนื่อง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">0.5</div></td>
				<td><div align="center">
				<?php
				$score = $score12_5;
				echo round($score,2);
				include("score05.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>12.6  จัดทำรายงานประจำปีที่เป็นรายงานการประเมินคุณภาพภายใน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1</div></td>
				<td><div align="center">
				<?php
				$score = $score12_6;
				echo round($score,2);
				include("score102.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานด้านการสร้างสังคมแห่งการเรียนรู้</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">10</div></td>
				<td><div align="center">
				<?php
				echo $side3;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side3;
				include("score10.php");
  					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?>
				</div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 13 สถานศึกษามีการสร้าง ส่งเสริม สนับสนุน ให้สถานศึกษาเป็นสังคมแห่งการเรียนรู้</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">10.0</div></td>
				<td><div align="center"><?php echo $basic13; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic13;
  					include("score10.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>13.1 มีการสร้างและพัฒนาแหล่งเรียนรู้ภายในสถานศึกษาและใช้ประโยชน์จากแหล่งเรียนรู้ ทั้งภายในและภายนอกสถานศึกษา เพื่อพัฒนา  การเรียนรู้ของผู้เรียนและบุคลากรของสถานศึกษา รวมทั้งผู้ที่เกี่ยวข้อง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5</div></td>
				<td><div align="center">
				<?php
				$score = $score13_1;
				echo round($score,2);
				include("scoreb52.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>13.2  มีการแลกเปลี่ยนเรียนรู้ระหว่างบุคลากรภายในสถานศึกษา ระหว่างสถานศึกษากับครอบครัว ชุมชนและองค์กรที่เกี่ยวข้อง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5</div></td>
				<td><div align="center">
				<?php
				$score = $score13_2;
				echo round($score,2);
				include("scoreb52.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานด้านอัตลักษณ์ของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center">
				<?php
				echo $side4;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side4;
				include("scoreb5.php");
  					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?>
				</div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 14  การพัฒนาสถานศึกษาให้บรรลุเป้าหมายตามวิสัยทัศน์ ปรัชญาและจุดเน้นที่กำหนดขึ้น</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic14; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic14;
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>14.1  จัดโครงการ กิจกรรมที่ส่งเสริมให้ผู้เรียนบรรลุตามเป้าหมายวิสัยทัศน์ ปรัชญา และจุดเน้นของสถานศึกษา </td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3</div></td>
				<td><div align="center">
				<?php
				$score = $score14_1;
				echo round($score,2);
				include("score3.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>14.2  ผลการดำเนินงานส่งเสริมให้ผู้เรียนบรรลุตามเป้าหมายวิสัยทัศน์ ปรัชญา และจุดเน้นของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score14_2;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>

			<tr>
				<td>มาตรฐานด้านมาตรการส่งเสริม</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center">
				<?php
				echo $side5;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side5;
				include("scoreb5.php");
  					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?>
				</div></td>
			</tr>

			<tr>
				<td>มาตรฐานที่ 15 การจัดกิจกรรมตามนโยบาย จุดเน้น แนวทางการปฏิรูปการศึกษาเพื่อพัฒนาและส่งเสริมสถานศึกษาให้ยกระดับคุณภาพสูงขึ้น</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $basic15; ?></div></td>
				<td><div align="center">
				<?php
					$score = $basic15;
  					include("scoreb5.php");
  					echo $grade;
  					unset($grade);
				?>
				</div></td>
				<td><div align="center">
				<?php 
					echo $degree;
  					unset($degree);
				?>
				</div></td>
			</tr>
			<tr>
				<td>15.1 จัดกิจกรรมพิเศษเพื่อตอบสนองนโยบาย จุดเน้นตามแนวทางการปฏิรูปการศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3</div></td>
				<td><div align="center">
				<?php
				$score = $score15_1;
				echo round($score,2);
				include("score3.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			<tr>
				<td>15.2 ผลการดำเนินงานบรรลุเป้าหมายและพัฒนาดีขึ้นกว่าที่ผ่านมา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php
				$score = $score15_2;
				echo round($score,2);
				include("score202.php");
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?></div></td>
			</tr>
			
			<tr>
				<td>สรุปผลภาพรวมการศึกษาขั้นพื้นฐานของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">100</div></td>
				<td><div align="center">
				<?php
				echo $basicScore;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $basicScore;
				include("schildhoodScore.php");
  					echo $grade;
				?>
				</div></td>
				<td><div align="center">
				<?php
					echo $degree;
					unset($grade,$degree);
				?>
				</div></td>
			</tr>

			

		</table>
<?php
	}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	} 
	mysql_close($Conn); 
?>
</body>
</html>