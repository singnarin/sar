<?php 
include("include/connect.php");
echo "ปฐมวัยมาตรฐานที่ 1 <br>";
$selc1 = mysql_query("SELECT * FROM `c1` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc1)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj1_1 = $objResult['1_1_1'] + $objResult['1_1_2'] + $objResult['1_1_3'] + $objResult['1_1_4'] + $objResult['1_1_5'];
	$sumobj1_2 = $objResult['1_2_1'] + $objResult['1_2_2'] + $objResult['1_2_3'] + $objResult['1_2_4'] + $objResult['1_2_5'];
	$sumobj1_3 = $objResult['1_3_1'] + $objResult['1_3_2'] + $objResult['1_3_3'] + $objResult['1_3_4'] + $objResult['1_3_5'];
	$sumobj1_4 = $objResult['1_4_1'] + $objResult['1_4_2'] + $objResult['1_4_3'] + $objResult['1_4_4'] + $objResult['1_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj1_1 > $sumstudent or $sumobj1_2 > $sumstudent or $sumobj1_3 > $sumstudent or $sumobj1_4 > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 2 <br>";
$selc2 = mysql_query("SELECT * FROM `c2` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc2)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj2_1 = $objResult['2_1_1'] + $objResult['2_1_2'] + $objResult['2_1_3'] + $objResult['2_1_4'] + $objResult['2_1_5'];
	$sumobj2_2 = $objResult['2_2_1'] + $objResult['2_2_2'] + $objResult['2_2_3'] + $objResult['2_2_4'] + $objResult['2_2_5'];
	$sumobj2_3 = $objResult['2_3_1'] + $objResult['2_3_2'] + $objResult['2_3_3'] + $objResult['2_3_4'] + $objResult['2_3_5'];
	$sumobj2_4 = $objResult['2_4_1'] + $objResult['2_4_2'] + $objResult['2_4_3'] + $objResult['2_4_4'] + $objResult['2_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj2_1 > $sumstudent or $sumobj2_2 > $sumstudent or $sumobj2_3 > $sumstudent or $sumobj2_4 > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 3 <br>";
$selc3 = mysql_query("SELECT * FROM `c3` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc3)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj3_1 = $objResult['3_1_1'] + $objResult['3_1_2'] + $objResult['3_1_3'] + $objResult['3_1_4'] + $objResult['3_1_5'];
	$sumobj3_2 = $objResult['3_2_1'] + $objResult['3_2_2'] + $objResult['3_2_3'] + $objResult['3_2_4'] + $objResult['3_2_5'];
	$sumobj3_3 = $objResult['3_3_1'] + $objResult['3_3_2'] + $objResult['3_3_3'] + $objResult['3_3_4'] + $objResult['3_3_5'];
	$sumobj3_4 = $objResult['3_4_1'] + $objResult['3_4_2'] + $objResult['3_4_3'] + $objResult['3_4_4'] + $objResult['3_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj3_1 > $sumstudent or $sumobj3_2 > $sumstudent or $sumobj3_3 > $sumstudent or $sumobj3_4 > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 4 <br>";
$selc4 = mysql_query("SELECT * FROM `c4` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc4)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj4_1 = $objResult['4_1_1'] + $objResult['4_1_2'] + $objResult['4_1_3'] + $objResult['4_1_4'] + $objResult['4_1_5'];
	$sumobj4_2 = $objResult['4_2_1'] + $objResult['4_2_2'] + $objResult['4_2_3'] + $objResult['4_2_4'] + $objResult['4_2_5'];
	$sumobj4_3 = $objResult['4_3_1'] + $objResult['4_3_2'] + $objResult['4_3_3'] + $objResult['4_3_4'] + $objResult['4_3_5'];
	$sumobj4_4 = $objResult['4_4_1'] + $objResult['4_4_2'] + $objResult['4_4_3'] + $objResult['4_4_4'] + $objResult['4_4_5'];
	$sumobj4_5 = $objResult['4_5_1'] + $objResult['4_5_2'] + $objResult['4_5_3'] + $objResult['4_5_4'] + $objResult['4_5_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj4_1 > $sumstudent or $sumobj4_2 > $sumstudent or $sumobj4_3 > $sumstudent or $sumobj4_4 > $sumstudent or $sumobj4_5 > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 5 <br>";
$selc5 = mysql_query("SELECT * FROM `c5` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc5)){
	$selteacher = mysql_fetch_array(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumobj5_1 = $objResult['5_1_1'] + $objResult['5_1_2'] + $objResult['5_1_3'] + $objResult['5_1_4'] + $objResult['5_1_5'];
	$sumobj5_2 = $objResult['5_2_1'] + $objResult['5_2_2'] + $objResult['5_2_3'] + $objResult['5_2_4'] + $objResult['5_2_5'];
	$sumobj5_3 = $objResult['5_3_1'] + $objResult['5_3_2'] + $objResult['5_3_3'] + $objResult['5_3_4'] + $objResult['5_3_5'];
	$sumobj5_4 = $objResult['5_4_1'] + $objResult['5_4_2'] + $objResult['5_4_3'] + $objResult['5_4_4'] + $objResult['5_4_5'];
	$sumobj5_5 = $objResult['5_5_1'] + $objResult['5_5_2'] + $objResult['5_5_3'] + $objResult['5_5_4'] + $objResult['5_5_5'];
	$sumobj5_6 = $objResult['5_6_1'] + $objResult['5_6_2'] + $objResult['5_6_3'] + $objResult['5_6_4'] + $objResult['5_6_5'];
	$sumobj5_7 = $objResult['5_7_1'] + $objResult['5_7_2'] + $objResult['5_7_3'] + $objResult['5_7_4'] + $objResult['5_7_5'];
	$sumobj5_8 = $objResult['5_8_1'] + $objResult['5_8_2'] + $objResult['5_8_3'] + $objResult['5_8_4'] + $objResult['5_8_5'];
	$sumobj5_9 = $objResult['5_9_1'] + $objResult['5_9_2'] + $objResult['5_9_3'] + $objResult['5_9_4'] + $objResult['5_9_5'];
	$sumobj5_10 = $objResult['5_10_1'] + $objResult['5_10_2'] + $objResult['5_10_3'] + $objResult['5_10_4'] + $objResult['5_10_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj5_1 > $selteacher["childteacher"] or $sumobj5_2 > $selteacher["childteacher"] or $sumobj5_3 > $selteacher["childteacher"] or $sumobj5_4 > $selteacher["childteacher"] or $sumobj5_5 > $selteacher["childteacher"] or $sumobj5_6 > $selteacher["childteacher"] or $sumobj5_7 > $selteacher["childteacher"] or $sumobj5_8 > $selteacher["childteacher"] or $sumobj5_9 > $selteacher["childteacher"] or $sumobj5_10 > $selteacher["childteacher"]) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>";

?>