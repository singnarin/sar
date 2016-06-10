<!doctype html>
<?php
include("include/connect.php");
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>ระบบรายงานผลการติดตาม ตรวจสอบและประเมินคุณภาพ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<style type="text/css">
	@import url("webfonts/thsarabunnew_bold/stylesheet.css");
	@import url("webfonts/thaisansneue/stylesheet.css");
	body,td,th {
		font-family: 'thsarabunnew bold';
	}
	body{
	background: url('images/internet_bg06.jpg') no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;	
	}
	h1,h2,h3,h4,h5,h6 {
		font-family: 'thsarabunnew bold';
	}
	.font_thaisan{
        font-family: 'thaisans_neueultra_bold';
    }
	.panel-heading {
    padding: 5px 15px;
	}
	
	.panel-footer {
		padding: 1px 15px;
		color: #A0A0A0;
	}
	
	.profile-img {
		width: 96px;
		height: 96px;
		margin: 0 auto 10px;
		display: block;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
		border-radius: 50%;
	}
	a:link {
	text-decoration: none;
	}
	a:visited {
		text-decoration: none;
	}
	a:hover {
		text-decoration: none;
	}
	a:active {
		text-decoration: none;
	}
	.ha1{
		font-family: 'thaisans_neueultra_bold';
		font-size:40px;
		color: #FFFFFF; 
	}
	.ha2{
		font-family: 'thaisans_neueultra_bold';
		font-size: 32px;
		color: #FFFFFF; 
	}
	.foot{
		font-family: 'thsarabunnew bold';
		font-size:16px;	
	}
	.mastfoot {
	  color: #fff; /* IE8 proofing */
	}	
	.bg
	{
 		background-color: #FFFFFF;
	}
</style>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<body>
<?php
	if ($_SESSION['ses_username']=="56010000"){	
		$selschool = mysql_query("SELECT * FROM `tbschool` ") or die  (mysql_error());
		$selschoolOK = mysql_query("SELECT * FROM `tbschool` WHERE `status` = 1") or die  (mysql_error());
		$selschoolNot = mysql_query("SELECT * FROM `tbschool` WHERE `status` = 0") or die  (mysql_error());
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg"><?php include("include/navbar.php");?>
  	  	<div align="center">
  	  		<div class="container">

<table width="100%" class="table table-bordered">
	<tr>
    	<th width="221" colspan="2"> <div align="center">รายชื่อโรงเรียนที่ยืนยันข้อมูลแล้วแต่ข้อมูลไม่ถูกต้อง</div></th>
  	</tr>
  	<tr>
    	<th width="221"> <div align="center">ระดับปฐมวัย</div></th>
    	<th width="399"> <div align="center">ระดับขั้นพื้นฐาน</div></th>
  	</tr>
  	<tr>
    	<td>
<?php
echo "ปฐมวัยมาตรฐานที่ 1 <br>";
$selc1 = mysql_query("SELECT * FROM `c1` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selc1)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj1_1 = $objResult['1_1_1'] + $objResult['1_1_2'] + $objResult['1_1_3'] + $objResult['1_1_4'] + $objResult['1_1_5'];
	$sumobj1_2 = $objResult['1_2_1'] + $objResult['1_2_2'] + $objResult['1_2_3'] + $objResult['1_2_4'] + $objResult['1_2_5'];
	$sumobj1_3 = $objResult['1_3_1'] + $objResult['1_3_2'] + $objResult['1_3_3'] + $objResult['1_3_4'] + $objResult['1_3_5'];
	$sumobj1_4 = $objResult['1_4_1'] + $objResult['1_4_2'] + $objResult['1_4_3'] + $objResult['1_4_4'] + $objResult['1_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj1_1 > $sumstudent or $sumobj1_2 > $sumstudent or $sumobj1_3 > $sumstudent or $sumobj1_4 > $sumstudent) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 2 <br>";
$selc2 = mysql_query("SELECT * FROM `c2` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selc2)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj2_1 = $objResult['2_1_1'] + $objResult['2_1_2'] + $objResult['2_1_3'] + $objResult['2_1_4'] + $objResult['2_1_5'];
	$sumobj2_2 = $objResult['2_2_1'] + $objResult['2_2_2'] + $objResult['2_2_3'] + $objResult['2_2_4'] + $objResult['2_2_5'];
	$sumobj2_3 = $objResult['2_3_1'] + $objResult['2_3_2'] + $objResult['2_3_3'] + $objResult['2_3_4'] + $objResult['2_3_5'];
	$sumobj2_4 = $objResult['2_4_1'] + $objResult['2_4_2'] + $objResult['2_4_3'] + $objResult['2_4_4'] + $objResult['2_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj2_1 > $sumstudent or $sumobj2_2 > $sumstudent or $sumobj2_3 > $sumstudent or $sumobj2_4 > $sumstudent) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 3 <br>";
$selc3 = mysql_query("SELECT * FROM `c3` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selc3)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj3_1 = $objResult['3_1_1'] + $objResult['3_1_2'] + $objResult['3_1_3'] + $objResult['3_1_4'] + $objResult['3_1_5'];
	$sumobj3_2 = $objResult['3_2_1'] + $objResult['3_2_2'] + $objResult['3_2_3'] + $objResult['3_2_4'] + $objResult['3_2_5'];
	$sumobj3_3 = $objResult['3_3_1'] + $objResult['3_3_2'] + $objResult['3_3_3'] + $objResult['3_3_4'] + $objResult['3_3_5'];
	$sumobj3_4 = $objResult['3_4_1'] + $objResult['3_4_2'] + $objResult['3_4_3'] + $objResult['3_4_4'] + $objResult['3_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj3_1 > $sumstudent or $sumobj3_2 > $sumstudent or $sumobj3_3 > $sumstudent or $sumobj3_4 > $sumstudent) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 4 <br>";
$selc4 = mysql_query("SELECT * FROM `c4` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selc4)){
	$selstd = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = $selstd['mo1'] + $selstd['mo2'] + $selstd['fo1'] + $selstd['fo2'];
	$sumobj4_1 = $objResult['4_1_1'] + $objResult['4_1_2'] + $objResult['4_1_3'] + $objResult['4_1_4'] + $objResult['4_1_5'];
	$sumobj4_2 = $objResult['4_2_1'] + $objResult['4_2_2'] + $objResult['4_2_3'] + $objResult['4_2_4'] + $objResult['4_2_5'];
	$sumobj4_3 = $objResult['4_3_1'] + $objResult['4_3_2'] + $objResult['4_3_3'] + $objResult['4_3_4'] + $objResult['4_3_5'];
	$sumobj4_4 = $objResult['4_4_1'] + $objResult['4_4_2'] + $objResult['4_4_3'] + $objResult['4_4_4'] + $objResult['4_4_5'];
	$sumobj4_5 = $objResult['4_5_1'] + $objResult['4_5_2'] + $objResult['4_5_3'] + $objResult['4_5_4'] + $objResult['4_5_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj4_1 > $sumstudent or $sumobj4_2 > $sumstudent or $sumobj4_3 > $sumstudent or $sumobj4_4 > $sumstudent or $sumobj4_5 > $sumstudent) && $selschool['status']=="1") {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ปฐมวัยมาตรฐานที่ 5 <br>";
$selc5 = mysql_query("SELECT * FROM `c5` ") or die  (mysql_error());
$i = 0;
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
	if (($sumobj5_1 > $selteacher["childteacher"] or $sumobj5_2 > $selteacher["childteacher"] or $sumobj5_3 > $selteacher["childteacher"] or $sumobj5_4 > $selteacher["childteacher"] or $sumobj5_5 > $selteacher["childteacher"] or $sumobj5_6 > $selteacher["childteacher"] or $sumobj5_7 > $selteacher["childteacher"] or $sumobj5_8 > $selteacher["childteacher"] or $sumobj5_9 > $selteacher["childteacher"] or $sumobj5_10 > $selteacher["childteacher"]) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>";
?>
    	</td>
    	<td>
<?php
echo "ขั้นพื้นฐานมาตรฐานที่ 1 <br>";
$selb1 = mysql_query("SELECT * FROM `b1` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selb1)){
	$studentResult = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = array_sum(array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6'],$studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3'],$studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6'],$studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']));
	$sumobj1_1 = $objResult['1_1_1'] + $objResult['1_1_2'] + $objResult['1_1_3'] + $objResult['1_1_4'] + $objResult['1_1_5'];
	$sumobj1_2 = $objResult['1_2_1'] + $objResult['1_2_2'] + $objResult['1_2_3'] + $objResult['1_2_4'] + $objResult['1_2_5'];
	$sumobj1_3 = $objResult['1_3_1'] + $objResult['1_3_2'] + $objResult['1_3_3'] + $objResult['1_3_4'] + $objResult['1_3_5'];
	$sumobj1_4 = $objResult['1_4_1'] + $objResult['1_4_2'] + $objResult['1_4_3'] + $objResult['1_4_4'] + $objResult['1_4_5'];
	$sumobj1_5 = $objResult['1_5_1'] + $objResult['1_5_2'] + $objResult['1_5_3'] + $objResult['1_5_4'] + $objResult['1_5_5'];
	$sumobj1_6 = $objResult['1_6_1'] + $objResult['1_6_2'] + $objResult['1_6_3'] + $objResult['1_6_4'] + $objResult['1_6_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj1_1 > $sumstudent or $sumobj1_2 > $sumstudent or $sumobj1_3 > $sumstudent or $sumobj1_4 > $sumstudent or $sumobj1_5 > $sumstudent or $sumobj1_6 > $sumstudent) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ขั้นพื้นฐานมาตรฐานที่ 2 <br>";
$selb2 = mysql_query("SELECT * FROM `b2` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selb2)){
	$studentResult = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = array_sum(array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6'],$studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3'],$studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6'],$studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']));
	$sumobj2_1 = $objResult['2_1_1'] + $objResult['2_1_2'] + $objResult['2_1_3'] + $objResult['2_1_4'] + $objResult['2_1_5'];
	$sumobj2_2 = $objResult['2_2_1'] + $objResult['2_2_2'] + $objResult['2_2_3'] + $objResult['2_2_4'] + $objResult['2_2_5'];
	$sumobj2_3 = $objResult['2_3_1'] + $objResult['2_3_2'] + $objResult['2_3_3'] + $objResult['2_3_4'] + $objResult['2_3_5'];
	$sumobj2_4 = $objResult['2_4_1'] + $objResult['2_4_2'] + $objResult['2_4_3'] + $objResult['2_4_4'] + $objResult['2_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj2_1 > $sumstudent or $sumobj2_2 > $sumstudent or $sumobj2_3 > $sumstudent or $sumobj2_4 > $sumstudent) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ขั้นพื้นฐานมาตรฐานที่ 3 <br>";
$selb3 = mysql_query("SELECT * FROM `b3` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selb3)){
	$studentResult = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = array_sum(array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6'],$studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3'],$studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6'],$studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']));
	$sumobj3_1 = $objResult['3_1_1'] + $objResult['3_1_2'] + $objResult['3_1_3'] + $objResult['3_1_4'] + $objResult['3_1_5'];
	$sumobj3_2 = $objResult['3_2_1'] + $objResult['3_2_2'] + $objResult['3_2_3'] + $objResult['3_2_4'] + $objResult['3_2_5'];
	$sumobj3_3 = $objResult['3_3_1'] + $objResult['3_3_2'] + $objResult['3_3_3'] + $objResult['3_3_4'] + $objResult['3_3_5'];
	$sumobj3_4 = $objResult['3_4_1'] + $objResult['3_4_2'] + $objResult['3_4_3'] + $objResult['3_4_4'] + $objResult['3_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj3_1 > $sumstudent or $sumobj3_2 > $sumstudent or $sumobj3_3 > $sumstudent or $sumobj3_4 > $sumstudent) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ขั้นพื้นฐานมาตรฐานที่ 4 <br>";
$selb4 = mysql_query("SELECT * FROM `b4` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selb4)){
	$studentResult = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = array_sum(array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6'],$studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3'],$studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6'],$studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']));
	$sumobj4_1 = $objResult['4_1_1'] + $objResult['4_1_2'] + $objResult['4_1_3'] + $objResult['4_1_4'] + $objResult['4_1_5'];
	$sumobj4_2 = $objResult['4_2_1'] + $objResult['4_2_2'] + $objResult['4_2_3'] + $objResult['4_2_4'] + $objResult['4_2_5'];
	$sumobj4_3 = $objResult['4_3_1'] + $objResult['4_3_2'] + $objResult['4_3_3'] + $objResult['4_3_4'] + $objResult['4_3_5'];
	$sumobj4_4 = $objResult['4_4_1'] + $objResult['4_4_2'] + $objResult['4_4_3'] + $objResult['4_4_4'] + $objResult['4_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj4_1 > $sumstudent or $sumobj4_2 > $sumstudent or $sumobj4_3 > $sumstudent or $sumobj4_4 > $sumstudent) && $selschool['status']=="1") {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}

echo "<br>****************************************<br>ขั้นพื้นฐานมาตรฐานที่ 6 <br>";
$selb6 = mysql_query("SELECT * FROM `b6` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selb6)){
	$studentResult = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumstudent = array_sum(array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6'],$studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3'],$studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6'],$studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']));
	$sumobj6_1 = $objResult['6_1_1'] + $objResult['6_1_2'] + $objResult['6_1_3'] + $objResult['6_1_4'] + $objResult['6_1_5'];
	$sumobj6_2 = $objResult['6_2_1'] + $objResult['6_2_2'] + $objResult['6_2_3'] + $objResult['6_2_4'] + $objResult['6_2_5'];
	$sumobj6_3 = $objResult['6_3_1'] + $objResult['6_3_2'] + $objResult['6_3_3'] + $objResult['6_3_4'] + $objResult['6_3_5'];
	$sumobj6_4 = $objResult['6_4_1'] + $objResult['6_4_2'] + $objResult['6_4_3'] + $objResult['6_4_4'] + $objResult['6_4_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj6_1 > $sumstudent or $sumobj6_2 > $sumstudent or $sumobj6_3 > $sumstudent or $sumobj6_4 > $sumstudent) && $selschool['status']=="1") {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>ขั้นพื้นฐานมาตรฐานที่ 7 <br>";
$selb7 = mysql_query("SELECT * FROM `b7` ") or die  (mysql_error());
$i = 0;
while ($objResult = mysql_fetch_array($selb7)){
	$selteacher = mysql_fetch_array(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$objResult['schoolid']."'")) or die  (mysql_error());
	$sumobj7_1 = $objResult['7_1_1'] + $objResult['7_1_2'] + $objResult['7_1_3'] + $objResult['7_1_4'] + $objResult['7_1_5'];
	$sumobj7_2 = $objResult['7_2_1'] + $objResult['7_2_2'] + $objResult['7_2_3'] + $objResult['7_2_4'] + $objResult['7_2_5'];
	$sumobj7_3 = $objResult['7_3_1'] + $objResult['7_3_2'] + $objResult['7_3_3'] + $objResult['7_3_4'] + $objResult['7_3_5'];
	$sumobj7_4 = $objResult['7_4_1'] + $objResult['7_4_2'] + $objResult['7_4_3'] + $objResult['7_4_4'] + $objResult['7_4_5'];
	$sumobj7_5 = $objResult['7_5_1'] + $objResult['7_5_2'] + $objResult['7_5_3'] + $objResult['7_5_4'] + $objResult['7_5_5'];
	$sumobj7_6 = $objResult['7_6_1'] + $objResult['7_6_2'] + $objResult['7_6_3'] + $objResult['7_6_4'] + $objResult['7_6_5'];
	$sumobj7_7 = $objResult['7_7_1'] + $objResult['7_7_2'] + $objResult['7_7_3'] + $objResult['7_7_4'] + $objResult['7_7_5'];
	$sumobj7_8 = $objResult['7_8_1'] + $objResult['7_8_2'] + $objResult['7_8_3'] + $objResult['7_8_4'] + $objResult['7_8_5'];
	$sumobj7_9 = $objResult['7_9_1'] + $objResult['7_9_2'] + $objResult['7_9_3'] + $objResult['7_9_4'] + $objResult['7_9_5'];
	$selschool = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE schoolid = '".$objResult['schoolid']."'")) or die  (mysql_error());
	if (($sumobj7_1 > $selteacher["primaryhigh"] or $sumobj7_2 > $selteacher["primaryhigh"] or $sumobj7_3 > $selteacher["primaryhigh"] or $sumobj7_4 > $selteacher["primaryhigh"] or $sumobj7_5 > $selteacher["primaryhigh"] or $sumobj7_6 > $selteacher["primaryhigh"] or $sumobj7_7 > $selteacher["primaryhigh"] or $sumobj7_8 > $selteacher["primaryhigh"] or $sumobj7_9 > $selteacher["primaryhigh"]) AND $selschool['status']=='1') {
		$i++;
		echo $i.". ".$objResult['schoolid']."-->".$selschool['schoolname']."<br>";
	}
}
echo "<br>****************************************<br>";

?>
    	</td>
  	</tr>
</table>
			</div>
  	  	</div>
  	  </div>
  	</div>
		<br>
		<br>
<?php include("include/footer.php");?>
	</div>
<?php
	}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	} 
?>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
mysql_close($Conn); 
?>