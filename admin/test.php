<?php 
include("include/connect.php");
echo "ปฐมวัยมาตรฐานที่ 1 <br>";
$selc1 = mysql_query("SELECT * FROM `c1` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc1)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj = $objResult['1_1_1'] + $objResult['1_1_2'] + $objResult['1_1_3'] + $objResult['1_1_4'] + $objResult['1_1_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "ปฐมวัยมาตรฐานที่ 2 <br>";
$selc1 = mysql_query("SELECT * FROM `c2` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc1)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj = $sumobj = $objResult['2_1_1'] + $objResult['2_1_2'] + $objResult['2_1_3'] + $objResult['2_1_4'] + $objResult['2_1_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "ปฐมวัยมาตรฐานที่ 3 <br>";
$selc1 = mysql_query("SELECT * FROM `c3` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc1)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj = $sumobj = $objResult['3_1_1'] + $objResult['3_1_2'] + $objResult['3_1_3'] + $objResult['3_1_4'] + $objResult['3_1_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "ปฐมวัยมาตรฐานที่ 4 <br>";
$selc1 = mysql_query("SELECT * FROM `c4` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc1)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj = $sumobj = $sumobj = $objResult['4_1_1'] + $objResult['4_1_2'] + $objResult['4_1_3'] + $objResult['4_1_4'] + $objResult['4_1_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "ปฐมวัยมาตรฐานที่ 5 <br>";
$selc1 = mysql_query("SELECT * FROM `c5` ") or die  (mysql_error());
while ($objResult = mysql_fetch_array($selc1)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj = $sumobj = $objResult['5_1_1'] + $objResult['5_1_2'] + $objResult['5_1_3'] + $objResult['5_1_4'] + $objResult['5_1_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if ($sumobj > $sumstudent) {
		echo $objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}

?>