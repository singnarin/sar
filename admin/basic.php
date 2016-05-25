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
<body>
<?php
	if ($_SESSION['ses_username']=="56010000"){	
		$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_GET['txtschoolid']."'")) or die  (mysql_error());

		include("include/sumstudentget.php");
		$selb1 = mysql_query("SELECT * FROM `b1` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b1num = mysql_num_rows($selb1);
		if ($b1num > 0) {
			$b1Result = mysql_fetch_array($selb1) or die  (mysql_error());
		}
		$selb2 = mysql_query("SELECT * FROM `b2` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b2num = mysql_num_rows($selb2);
		if ($b2num > 0) {
			$b2Result = mysql_fetch_array($selb2) or die  (mysql_error());
		}
		$selb3 = mysql_query("SELECT * FROM `b3` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b3num = mysql_num_rows($selb3);
		if ($b3num > 0) {
			$b3Result = mysql_fetch_array($selb3) or die  (mysql_error());
		}
		$selb4 = mysql_query("SELECT * FROM `b4` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b4num = mysql_num_rows($selb4);
		if ($b4num > 0) {
			$b4Result = mysql_fetch_array($selb4) or die  (mysql_error());
		}
		$selb5 = mysql_query("SELECT * FROM `b5` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b5num = mysql_num_rows($selb5);
		if ($b5num > 0) {
			$b5Result = mysql_fetch_array($selb5) or die  (mysql_error());
		}
		$selb6 = mysql_query("SELECT * FROM `b6` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b6num = mysql_num_rows($selb6);
		if ($b6num > 0) {
			$b6Result = mysql_fetch_array($selb6) or die  (mysql_error());
		}
		$selb7 = mysql_query("SELECT * FROM `b7` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b7num = mysql_num_rows($selb7);
		if ($b7num > 0) {
			$b7Result = mysql_fetch_array($selb7) or die  (mysql_error());
		}
		$selb8 = mysql_query("SELECT * FROM `b8` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b8num = mysql_num_rows($selb8);
		if ($b8num > 0) {
			$b8Result = mysql_fetch_array($selb8) or die  (mysql_error());
		}
		$selb9 = mysql_query("SELECT * FROM `b9` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b9num = mysql_num_rows($selb9);
		if ($b9num > 0) {
			$b9Result = mysql_fetch_array($selb9) or die  (mysql_error());
		}
		$selb10 = mysql_query("SELECT * FROM `b10` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b10num = mysql_num_rows($selb10);
		if ($b10num > 0) {
			$b10Result = mysql_fetch_array($selb10) or die  (mysql_error());
		}
		$selb11 = mysql_query("SELECT * FROM `b11` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b11num = mysql_num_rows($selb11);
		if ($b11num > 0) {
			$b11Result = mysql_fetch_array($selb11) or die  (mysql_error());
		}
		$selb12 = mysql_query("SELECT * FROM `b12` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b12num = mysql_num_rows($selb12);
		if ($b12num > 0) {
			$b12Result = mysql_fetch_array($selb12) or die  (mysql_error());
		}
		$selb13 = mysql_query("SELECT * FROM `b13` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b13num = mysql_num_rows($selb13);
		if ($b13num > 0) {
			$b13Result = mysql_fetch_array($selb13) or die  (mysql_error());
		}
		$selb14 = mysql_query("SELECT * FROM `b14` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b14num = mysql_num_rows($selb14);
		if ($b14num > 0) {
			$b14Result = mysql_fetch_array($selb14) or die  (mysql_error());
		}
		$selb15 = mysql_query("SELECT * FROM `b15` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$b15num = mysql_num_rows($selb15);
		if ($b15num > 0) {
			$b15Result = mysql_fetch_array($selb15) or die  (mysql_error());
		}

		$selteacher = mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$teachernum = mysql_num_rows($selteacher);
		if ($teachernum > 0) {
			$teacherResult = mysql_fetch_array($selteacher) or die  (mysql_error());
		}

		$up1_1 = array($b1Result['1_1_3'],$b1Result['1_1_4'],$b1Result['1_1_5']);
		$persen1_1 = number_format(array_sum($up1_1) * 100 / $sumb, 2, '.', '');
		$score1_1 = round($persen1_1,2) * 0.5 / 100;
		$up1_2 = array($b1Result['1_2_3'],$b1Result['1_2_4'],$b1Result['1_2_5']);
		$persen1_2 = number_format(array_sum($up1_2) * 100 / $sumb, 2, '.', '');
		$score1_2 = round($persen1_2,2) * 0.5 / 100;
		$up1_3 = array($b1Result['1_3_3'],$b1Result['1_3_4'],$b1Result['1_3_5']);
		$persen1_3 = number_format(array_sum($up1_3) * 100 / $sumb, 2, '.', '');
		$score1_3 = round($persen1_3,2) * 1 / 100;
		$up1_4 = array($b1Result['1_4_3'],$b1Result['1_4_4'],$b1Result['1_4_5']);
		$persen1_4 = number_format(array_sum($up1_4) * 100 / $sumb, 2, '.', '');
		$score1_4 = round($persen1_4,2) * 1 / 100;
		$up1_5 = array($b1Result['1_5_3'],$b1Result['1_5_4'],$b1Result['1_5_5']);
		$persen1_5 = number_format(array_sum($up1_5) * 100 / $sumb, 2, '.', '');
		$score1_5 = round($persen1_5,2) * 1 / 100;
		$up1_6 = array($b1Result['1_6_3'],$b1Result['1_6_4'],$b1Result['1_6_5']);
		$persen1_6 = number_format(array_sum($up1_6) * 100 / $sumb, 2, '.', '');
		$score1_6 = round($persen1_6,2) * 1 / 100;
		$basic1 = round(array_sum(array($score1_1,$score1_2,$score1_3,$score1_4,$score1_5,$score1_6)),2);

		$up2_1 = array($b2Result['2_1_3'],$b2Result['2_1_4'],$b2Result['2_1_5']);
		$persen2_1 = number_format(array_sum($up2_1) * 100 / $sumb, 2, '.', '');
		$score2_1 = round($persen2_1,2) * 2 / 100;
		$up2_2 = array($b2Result['2_2_3'],$b2Result['2_2_4'],$b2Result['2_2_5']);
		$persen2_2 = number_format(array_sum($up2_2) * 100 / $sumb, 2, '.', '');
		$score2_2 = round($persen2_2,2) * 1 / 100;
		$up2_3 = array($b2Result['2_3_3'],$b2Result['2_3_4'],$b2Result['2_3_5']);
		$persen2_3 = number_format(array_sum($up2_3) * 100 / $sumb, 2, '.', '');
		$score2_3 = round($persen2_3,2) * 1 / 100;
		$up2_4 = array($b2Result['2_4_3'],$b2Result['2_4_4'],$b2Result['2_4_5']);
		$persen2_4 = number_format(array_sum($up2_4) * 100 / $sumb, 2, '.', '');
		$score2_4 = round($persen2_4,2) * 1 / 100;
		$basic2 = round(array_sum(array($score2_1,$score2_2,$score2_3,$score2_4)),2);

		$up3_1 = array($b3Result['3_1_3'],$b3Result['3_1_4'],$b3Result['3_1_5']);
		$persen3_1 = number_format(array_sum($up3_1) * 100 / $sumb, 2, '.', '');
		$score3_1 = round($persen3_1,2) * 2 / 100;
		$up3_2 = array($b3Result['3_2_3'],$b3Result['3_2_4'],$b3Result['3_2_5']);
		$persen3_2 = number_format(array_sum($up3_2) * 100 / $sumb, 2, '.', '');
		$score3_2 = round($persen3_2,2) * 1 / 100;
		$up3_3 = array($b3Result['3_3_3'],$b3Result['3_3_4'],$b3Result['3_3_5']);
		$persen3_3 = number_format(array_sum($up3_3) * 100 / $sumb, 2, '.', '');
		$score3_3 = round($persen3_3,2) * 1 / 100;
		$up3_4 = array($b3Result['3_4_3'],$b3Result['3_4_4'],$b3Result['3_4_5']);
		$persen3_4 = number_format(array_sum($up3_4) * 100 / $sumb, 2, '.', '');
		$score3_4 = round($persen3_4,2) * 1 / 100;
		$basic3 = round(array_sum(array($score3_1,$score3_2,$score3_3,$score3_4)),2);

		$up4_1 = array($b4Result['4_1_3'],$b4Result['4_1_4'],$b4Result['4_1_5']);
		$persen4_1 = number_format(array_sum($up4_1) * 100 / $sumb, 2, '.', '');
		$score4_1 = round($persen4_1,2) * 2 / 100;
		$up4_2 = array($b4Result['4_2_3'],$b4Result['4_2_4'],$b4Result['4_2_5']);
		$persen4_2 = number_format(array_sum($up4_2) * 100 / $sumb, 2, '.', '');
		$score4_2 = round($persen4_2,2) * 1 / 100;
		$up4_3 = array($b4Result['4_3_3'],$b4Result['4_3_4'],$b4Result['4_3_5']);
		$persen4_3 = number_format(array_sum($up4_3) * 100 / $sumb, 2, '.', '');
		$score4_3 = round($persen4_3,2) * 1 / 100;
		$up4_4 = array($b4Result['4_4_3'],$b4Result['4_4_4'],$b4Result['4_4_5']);
		$persen4_4 = number_format(array_sum($up4_4) * 100 / $sumb, 2, '.', '');
		$score4_4 = round($persen4_4,2) * 1 / 100;
		$basic4 = round(array_sum(array($score4_1,$score4_2,$score4_3,$score4_4)),2);

		$score5_1 = $b5Result['5_1'] * 1 / 5;
		$score5_2 = $b5Result['5_2'] * 1 / 5;
		$score5_3 = $b5Result['5_3'] * 2 / 5;
		$score5_4 = $b5Result['5_4'] * 1 / 5;
		$basic5 = round(array_sum(array($score5_1,$score5_2,$score5_3,$score5_4)),2);

		$up6_1 = array($b6Result['6_1_3'],$b6Result['6_1_4'],$b6Result['6_1_5']);
		$persen6_1 = number_format(array_sum($up6_1) * 100 / $sumb, 2, '.', '');
		$score6_1 = round($persen6_1,2) * 2 / 100;
		$up6_2 = array($b6Result['6_2_3'],$b6Result['6_2_4'],$b6Result['6_2_5']);
		$persen6_2 = number_format(array_sum($up6_2) * 100 / $sumb, 2, '.', '');
		$score6_2 = round($persen6_2,2) * 1 / 100;
		$up6_3 = array($b6Result['6_3_3'],$b6Result['6_3_4'],$b6Result['6_3_5']);
		$persen6_3 = number_format(array_sum($up6_3) * 100 / $sumb, 2, '.', '');
		$score6_3 = round($persen6_3,2) * 1 / 100;
		$up6_4 = array($b6Result['6_4_3'],$b6Result['6_4_4'],$b6Result['6_4_5']);
		$persen6_4 = number_format(array_sum($up6_4) * 100 / $sumb, 2, '.', '');
		$score6_4 = round($persen6_4,2) * 1 / 100;
		$basic6 = round(array_sum(array($score6_1,$score6_2,$score6_3,$score6_4)),2);

		$side1 = round(array_sum(array($basic1,$basic2,$basic3,$basic4,$basic5,$basic6)),2);;

		$up7_1 = array($b7Result['7_1_3'],$b7Result['7_1_4'],$b7Result['7_1_5']);
		$persen7_1 = number_format(array_sum($up7_1) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_1 = round($persen7_1,2) * 1 / 100;
		$up7_2 = array($b7Result['7_2_3'],$b7Result['7_2_4'],$b7Result['7_2_5']);
		$persen7_2 = number_format(array_sum($up7_2) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_2 = round($persen7_2,2) * 1 / 100;
		$up7_3 = array($b7Result['7_3_3'],$b7Result['7_3_4'],$b7Result['7_3_5']);
		$persen7_3 = number_format(array_sum($up7_3) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_3 = round($persen7_3,2) * 2 / 100;
		$up7_4 = array($b7Result['7_4_3'],$b7Result['7_4_4'],$b7Result['7_4_5']);
		$persen7_4 = number_format(array_sum($up7_4) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_4 = round($persen7_4,2) * 1 / 100;
		$up7_5 = array($b7Result['7_5_3'],$b7Result['7_5_4'],$b7Result['7_5_5']);
		$persen7_5 = number_format(array_sum($up7_5) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_5 = round($persen7_5,2) * 1 / 100;
		$up7_6 = array($b7Result['7_6_3'],$b7Result['7_6_4'],$b7Result['7_6_5']);
		$persen7_6 = number_format(array_sum($up7_6) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_6 = round($persen7_6,2) * 1 / 100;
		$up7_7 = array($b7Result['7_7_3'],$b7Result['7_7_4'],$b7Result['7_7_5']);
		$persen7_7 = number_format(array_sum($up7_7) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_7 = round($persen7_7,2) * 1 / 100;
		$up7_8 = array($b7Result['7_8_3'],$b7Result['7_8_4'],$b7Result['7_8_5']);
		$persen7_8 = number_format(array_sum($up7_8) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_8 = round($persen7_8,2) * 1 / 100;
		$up7_9 = array($b7Result['7_9_3'],$b7Result['7_9_4'],$b7Result['7_9_5']);
		$persen7_9 = number_format(array_sum($up7_9) * 100 / $teacherResult["primaryhigh"], 2, '.', '');
		$score7_9 = round($persen7_9,2) * 1 / 100;
		$basic7 = round(array_sum(array($score7_1,$score7_2,$score7_3,$score7_4,$score7_5,$score7_6,$score7_7,$score7_8,$score7_9)),2);

		$score8_1 = $b8Result['8_1'] * 1 / 5;
		$score8_2 = $b8Result['8_2'] * 2 / 5;
		$score8_3 = $b8Result['8_3'] * 2 / 5;
		$score8_4 = $b8Result['8_4'] * 2 / 5;
		$score8_5 = $b8Result['8_5'] * 1 / 5;
		$score8_6 = $b8Result['8_6'] * 2 / 5;
		$basic8 = round(array_sum(array($score8_1,$score8_2,$score8_3,$score8_4,$score8_5,$score8_6)),2);

		$score9_1 = $b9Result['9_1'] * 2 / 5;
		$score9_2 = $b9Result['9_2'] * 1 / 5;
		$score9_3 = $b9Result['9_3'] * 2 / 5;
		$basic9 = round(array_sum(array($score9_1,$score9_2,$score9_3)),2);

		$score10_1 = $b10Result['10_1'] * 2 / 5;
		$score10_2 = $b10Result['10_2'] * 2 / 5;
		$score10_3 = $b10Result['10_3'] * 1 / 5;
		$score10_4 = $b10Result['10_4'] * 1 / 5;
		$score10_5 = $b10Result['10_5'] * 2 / 5;
		$score10_6 = $b10Result['10_6'] * 2 / 5;
		$basic10 = round(array_sum(array($score10_1,$score10_2,$score10_3,$score10_4,$score10_5,$score10_6)),2);

		$score11_1 = $b11Result['11_1'] * 4 / 5;
		$score11_2 = $b11Result['11_2'] * 3 / 5;
		$score11_3 = $b11Result['11_3'] * 3 / 5;
		$basic11 = round(array_sum(array($score11_1,$score11_2,$score11_3)),2);

		$score12_1 = $b12Result['12_1'] * 1 / 5;
		$score12_2 = $b12Result['12_2'] * 1 / 5;
		$score12_3 = $b12Result['12_3'] * 1 / 5;
		$score12_4 = $b12Result['12_4'] * 0.5 / 5;
		$score12_5 = $b12Result['12_5'] * 0.5 / 5;
		$score12_6 = $b12Result['12_6'] * 1 / 5;
		$basic12 = round(array_sum(array($score12_1,$score12_2,$score12_3,$score12_4,$score12_5,$score12_6)),2);

		$side2 =  round(array_sum(array($basic7,$basic8,$basic9,$basic10,$basic11,$basic12)),2);

		$score13_1 = $b13Result['13_1'] * 5 / 5;
		$score13_2 = $b13Result['13_2'] * 5 / 5;
		$basic13 = round(array_sum(array($score13_1,$score13_2)),2);

		$side3 =  round(array_sum(array($basic13)),2);

		$score14_1 = $b14Result['14_1'] * 3 / 5;
		$score14_2 = $b14Result['14_2'] * 2 / 5;
		$basic14 = round(array_sum(array($score14_1,$score14_2)),2);

		$side4=  round(array_sum(array($basic14)),2);

		$score15_1 = $b15Result['15_1'] * 3 / 5;
		$score15_2 = $b15Result['15_2'] * 2 / 5;
		$basic15 = round(array_sum(array($score15_1,$score15_2)),2);

		$side5 =  round(array_sum(array($basic15)),2);

		$basicScore =  round(array_sum(array($basic1,$basic2,$basic3,$basic4,$basic5,$basic6,$basic7,$basic8,$basic9,$basic10,$basic11,$basic12,$basic13,$basic14,$basic15)),2);
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	<form id="form1" name="form1" method="post" action="">

		<table align="center" width="100%" class="table table-bordered">
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
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
			<div class="row">
				<div align="center">
				<input class="btn btn-primary" type="button" name="Button" value="นำออกข้อมูล" onClick="window.location.href='exportbasic.php?txtschoolid=<?php echo $_GET['txtschoolid'];?>'">
				<br>
				<br> 
				</div>
			</div>
	</form>

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