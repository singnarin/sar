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

		include("include/sumstudentadmin.php");

		$selc1 = mysql_query("SELECT *,SUM(1_1_1) AS total1_1_1,SUM(1_1_2) AS total1_1_2,SUM(1_1_3) AS total1_1_3,SUM(1_1_4) AS total1_1_4,SUM(1_1_5) AS total1_1_5,SUM(1_2_1) AS total1_2_1,SUM(1_2_2) AS total1_2_2,SUM(1_2_3) AS total1_2_3,SUM(1_2_4) AS total1_2_4,SUM(1_2_5) AS total1_2_5,SUM(1_3_1) AS total1_3_1,SUM(1_3_2) AS total1_3_2,SUM(1_3_3) AS total1_3_3,SUM(1_3_4) AS total1_3_4,SUM(1_3_5) AS total1_3_5,SUM(1_4_1) AS total1_4_1,SUM(1_4_2) AS total1_4_2,SUM(1_4_3) AS total1_4_3,SUM(1_4_4) AS total1_4_4,SUM(1_4_5) AS total1_4_5 FROM `c1` ");
		$c1num = mysql_num_rows($selc1);
		if ($c1num > 0) {
			$c1Result = mysql_fetch_array($selc1) or die  (mysql_error());
		}
		$selc2 = mysql_query("SELECT *,SUM(2_1_1) AS total2_1_1,SUM(2_1_2) AS total2_1_2,SUM(2_1_3) AS total2_1_3,SUM(2_1_4) AS total2_1_4,SUM(2_1_5) AS total2_1_5,SUM(2_2_1) AS total2_2_1,SUM(2_2_2) AS total2_2_2,SUM(2_2_3) AS total2_2_3,SUM(2_2_4) AS total2_2_4,SUM(2_2_5) AS total2_2_5,SUM(2_3_1) AS total2_3_1,SUM(2_3_2) AS total2_3_2,SUM(2_3_3) AS total2_3_3,SUM(2_3_4) AS total2_3_4,SUM(2_3_5) AS total2_3_5,SUM(2_4_1) AS total2_4_1,SUM(2_4_2) AS total2_4_2,SUM(2_4_3) AS total2_4_3,SUM(2_4_4) AS total2_4_4,SUM(2_4_5) AS total2_4_5 FROM `c2` ");
		$c2num = mysql_num_rows($selc2);
		if ($c2num > 0) {
			$c2Result = mysql_fetch_array($selc2) or die  (mysql_error());
		}
		$selc3 = mysql_query("SELECT *,SUM(3_1_1) AS total3_1_1,SUM(3_1_2) AS total3_1_2,SUM(3_1_3) AS total3_1_3,SUM(3_1_4) AS total3_1_4,SUM(3_1_5) AS total3_1_5,SUM(3_2_1) AS total3_2_1,SUM(3_2_2) AS total3_2_2,SUM(3_2_3) AS total3_2_3,SUM(3_2_4) AS total3_2_4,SUM(3_2_5) AS total3_2_5,SUM(3_3_1) AS total3_3_1,SUM(3_3_2) AS total3_3_2,SUM(3_3_3) AS total3_3_3,SUM(3_3_4) AS total3_3_4,SUM(3_3_5) AS total3_3_5,SUM(3_4_1) AS total3_4_1,SUM(3_4_2) AS total3_4_2,SUM(3_4_3) AS total3_4_3,SUM(3_4_4) AS total3_4_4,SUM(3_4_5) AS total3_4_5 FROM `c3` ");
		$c3num = mysql_num_rows($selc3);
		if ($c3num > 0) {
			$c3Result = mysql_fetch_array($selc3) or die  (mysql_error());
		}

		$selc4 = mysql_query("SELECT *,SUM(4_1_1) AS total4_1_1,SUM(4_1_2) AS total4_1_2,SUM(4_1_3) AS total4_1_3,SUM(4_1_4) AS total4_1_4,SUM(4_1_5) AS total4_1_5,SUM(4_2_1) AS total4_2_1,SUM(4_2_2) AS total4_2_2,SUM(4_2_3) AS total4_2_3,SUM(4_2_4) AS total4_2_4,SUM(4_2_5) AS total4_2_5,SUM(4_3_1) AS total4_3_1,SUM(4_3_2) AS total4_3_2,SUM(4_3_3) AS total4_3_3,SUM(4_3_4) AS total4_3_4,SUM(4_3_5) AS total4_3_5,SUM(4_4_1) AS total4_4_1,SUM(4_4_2) AS total4_4_2,SUM(4_4_3) AS total4_4_3,SUM(4_4_4) AS total4_4_4,SUM(4_4_5) AS total4_4_5,SUM(4_5_1) AS total4_5_1,SUM(4_5_2) AS total4_5_2,SUM(4_5_3) AS total4_5_3,SUM(4_5_4) AS total4_5_4,SUM(4_5_5) AS total4_5_5 FROM `c4` ");
		$c4num = mysql_num_rows($selc4);
		if ($c4num > 0) {
			$c4Result = mysql_fetch_array($selc4) or die  (mysql_error());
		}
		$selc5 = mysql_query("SELECT *,SUM(5_1_1) AS total5_1_1,SUM(5_1_2) AS total5_1_2,SUM(5_1_3) AS total5_1_3,SUM(5_1_4) AS total5_1_4,SUM(5_1_5) AS total5_1_5,SUM(5_2_1) AS total5_2_1,SUM(5_2_2) AS total5_2_2,SUM(5_2_3) AS total5_2_3,SUM(5_2_4) AS total5_2_4,SUM(5_2_5) AS total5_2_5,SUM(5_3_1) AS total5_3_1,SUM(5_3_2) AS total5_3_2,SUM(5_3_3) AS total5_3_3,SUM(5_3_4) AS total5_3_4,SUM(5_3_5) AS total5_3_5,SUM(5_4_1) AS total5_4_1,SUM(5_4_2) AS total5_4_2,SUM(5_4_3) AS total5_4_3,SUM(5_4_4) AS total5_4_4,SUM(5_4_5) AS total5_4_5,SUM(5_5_1) AS total5_5_1,SUM(5_5_2) AS total5_5_2,SUM(5_5_3) AS total5_5_3,SUM(5_5_4) AS total5_5_4,SUM(5_5_5) AS total5_5_5,SUM(5_6_1) AS total5_6_1,SUM(5_6_2) AS total5_6_2,SUM(5_6_3) AS total5_6_3,SUM(5_6_4) AS total5_6_4,SUM(5_6_5) AS total5_6_5,SUM(5_7_1) AS total5_7_1,SUM(5_7_2) AS total5_7_2,SUM(5_7_3) AS total5_7_3,SUM(5_7_4) AS total5_7_4,SUM(5_7_5) AS total5_7_5,SUM(5_8_1) AS total5_8_1,SUM(5_8_2) AS total5_8_2,SUM(5_8_3) AS total5_8_3,SUM(5_8_4) AS total5_8_4,SUM(5_8_5) AS total5_8_5,SUM(5_9_1) AS total5_9_1,SUM(5_9_2) AS total5_9_2,SUM(5_9_3) AS total5_9_3,SUM(5_9_4) AS total5_9_4,SUM(5_9_5) AS total5_9_5,SUM(5_10_1) AS total5_10_1,SUM(5_10_2) AS total5_10_2,SUM(5_10_3) AS total5_10_3,SUM(5_10_4) AS total5_10_4,SUM(5_10_5) AS total5_10_5 FROM `c5` ");
		$c5num = mysql_num_rows($selc5);
		if ($c5num > 0) {
			$c5Result = mysql_fetch_array($selc5) or die  (mysql_error());
		}
		$selc6 = mysql_query("SELECT *, SUM(6_1) AS total6_1, SUM(6_2) AS total6_2, SUM(6_3) AS total6_3, SUM(6_4) AS total6_4, SUM(6_5) AS total6_5, SUM(6_6) AS total6_6, SUM(6_7) AS total6_7 FROM `c6` ");
		$res6 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM c6"));
		$c6num = $res6[0];
		if ($c6num > 0) {
			$c6Result = mysql_fetch_array($selc6) or die  (mysql_error());
			$c6_1 = $c6Result['total6_1'] / $c6num;
			$c6_2 = $c6Result['total6_2'] / $c6num;
			$c6_3 = $c6Result['total6_3'] / $c6num;
			$c6_4 = $c6Result['total6_4'] / $c6num;
			$c6_5 = $c6Result['total6_5'] / $c6num;
			$c6_6 = $c6Result['total6_6'] / $c6num;
			$c6_7 = $c6Result['total6_7'] / $c6num;
		}
		$selc7 = mysql_query("SELECT *, SUM(7_1) AS total7_1,SUM(7_2) AS total7_2,SUM(7_3) AS total7_3,SUM(7_4) AS total7_4,SUM(7_5) AS total7_5 FROM `c7` ");
		$res7 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM c7"));
		$c7num = $res7[0];
		if ($c7num > 0) {
			$c7Result = mysql_fetch_array($selc7) or die  (mysql_error());
			$c7_1 = $c7Result['total7_1'] / $c7num;
			$c7_2 = $c7Result['total7_2'] / $c7num;
			$c7_3 = $c7Result['total7_3'] / $c7num;
			$c7_4 = $c7Result['total7_4'] / $c7num;
			$c7_5 = $c7Result['total7_5'] / $c7num;
		}
		$selc8 = mysql_query("SELECT *,SUM(8_1) AS total8_1,SUM(8_2) AS total8_2,SUM(8_3) AS total8_3,SUM(8_4) AS total8_4,SUM(8_5) AS total8_5,SUM(8_5) AS total8_6 FROM `c8` ");
		$res8 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM c8"));
		$c8num = $res8[0];
		if ($c8num > 0) {
			$c8Result = mysql_fetch_array($selc8) or die  (mysql_error());
			$c8_1 = $c8Result['total8_1'] / $c8num;
			$c8_2 = $c8Result['total8_2'] / $c8num;
			$c8_3 = $c8Result['total8_3'] / $c8num;
			$c8_4 = $c8Result['total8_4'] / $c8num;
			$c8_5 = $c8Result['total8_5'] / $c8num;
			$c8_6 = $c8Result['total8_6'] / $c8num;
		}
		$selc9 = mysql_query("SELECT *,SUM(9_1) AS total9_1, SUM(9_2) AS total9_2 FROM `c9` ");
		$res9 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM c9"));
		$c9num = $res9[0];
		if ($c9num > 0) {
			$c9Result = mysql_fetch_array($selc9) or die  (mysql_error());
			$c9_1 = $c9Result['total9_1'] / $c9num;
			$c9_2 = $c9Result['total9_2'] / $c9num;
		}
		$selc10 = mysql_query("SELECT *,SUM(10_1) AS total10_1, SUM(10_2) AS total10_2 FROM `c10` ");
		$res10 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM c10"));
		$c10num = $res10[0];
		if ($c10num > 0) {
			$c10Result = mysql_fetch_array($selc10) or die  (mysql_error());
			$c10_1 = $c10Result['total10_1'] / $c10num;
			$c10_2 = $c10Result['total10_2'] / $c10num;
		}
		$selc11 = mysql_query("SELECT * , SUM(11_1) AS total11_1, SUM(11_2) AS total11_2 FROM `c11` ");
		$res11 = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM c11"));
		$c11num = $res11[0];
		if ($c11num > 0) {
			$c11Result = mysql_fetch_array($selc11) or die  (mysql_error());
			$c11_1 = $c11Result['total11_1'] / $c11num;
			$c11_2 = $c11Result['total11_2'] / $c11num;
		}

		$selstudent = mysql_query("SELECT * FROM `student` ");
		$studentnum = mysql_num_rows($selstudent);
		if ($studentnum > 0) {
			$studentResult = mysql_fetch_array($selstudent) or die  (mysql_error());
		}

		$selteacher = mysql_query("SELECT SUM(childteacher) AS totalchildteacher FROM `teacher` ");
		$teachernum = mysql_num_rows($selteacher);
		if ($teachernum > 0) {
			$teacherResult = mysql_fetch_array($selteacher) or die  (mysql_error());
		}		

		$up1_1 = array($c1Result['total1_1_3'],$c1Result['total1_1_4'],$c1Result['total1_1_5']);
		$persen1_1 = number_format(array_sum($up1_1) * 100 / $sumo, 2, '.', '');
		$score1_1 = round($persen1_1,2) * 1.0 / 100;
		$up1_2 = array($c1Result['total1_2_3'],$c1Result['total1_2_4'],$c1Result['total1_2_5']);
		$persen1_2 = number_format(array_sum($up1_2) * 100 / $sumo, 2, '.', '');
		$score1_2 = round($persen1_2,2) * 1.5 / 100;
		$up1_3 = array($c1Result['total1_3_3'],$c1Result['total1_3_4'],$c1Result['total1_3_5']);
		$persen1_3 = number_format(array_sum($up1_3) * 100 / $sumo, 2, '.', '');
		$score1_3 = round($persen1_3,2) * 1.5 / 100;
		$up1_4 = array($c1Result['total1_4_3'],$c1Result['total1_4_4'],$c1Result['total1_4_5']);
		$persen1_4 = number_format(array_sum($up1_4) * 100 / $sumo, 2, '.', '');
		$score1_4 = round($persen1_4,2) * 1 / 100;
		$child1 = round(array_sum(array($score1_1,$score1_2,$score1_3,$score1_4)),2);

		$up2_1 = array($c2Result['total2_1_3'],$c2Result['total2_1_4'],$c2Result['total2_1_5']);
		$persen2_1 = number_format(array_sum($up2_1) * 100 / $sumo, 2, '.', '');
		$score2_1 = round($persen2_1,2) * 1 / 100;
		$up2_2 = array($c2Result['total2_2_3'],$c2Result['total2_2_4'],$c2Result['total2_2_5']);
		$persen2_2 = number_format(array_sum($up2_2) * 100 / $sumo, 2, '.', '');
		$score2_2 = round($persen2_2,2) * 1 / 100;
		$up2_3 = array($c2Result['total2_3_3'],$c2Result['total2_3_4'],$c2Result['total2_3_5']);
		$persen2_3 = number_format(array_sum($up2_3) * 100 / $sumo, 2, '.', '');
		$score2_3 = round($persen2_3,2) * 1 / 100;
		$up2_4 = array($c2Result['total2_4_3'],$c2Result['total2_4_4'],$c2Result['total2_4_5']);
		$persen2_4 = number_format(array_sum($up2_4) * 100 / $sumo, 2, '.', '');
		$score2_4 = round($persen2_4,2) * 2 / 100;
		$child2 = round(array_sum(array($score2_1,$score2_2,$score2_3,$score2_4)),2);

		$up3_1 = array($c3Result['total3_1_3'],$c3Result['total3_1_4'],$c3Result['total3_1_5']);
		$persen3_1 = number_format(array_sum($up3_1) * 100 / $sumo, 2, '.', '');
		$score3_1 = round($persen3_1,2) * 2 / 100;
		$up3_2 = array($c3Result['total3_2_3'],$c3Result['total3_2_4'],$c3Result['total3_2_5']);
		$persen3_2 = number_format(array_sum($up3_2) * 100 / $sumo, 2, '.', '');
		$score3_2 = round($persen3_2,2) * 1 / 100;
		$up3_3 = array($c3Result['total3_3_3'],$c3Result['total3_3_4'],$c3Result['total3_3_5']);
		$persen3_3 = number_format(array_sum($up3_3) * 100 / $sumo, 2, '.', '');
		$score3_3 = round($persen3_3,2) * 1 / 100;
		$up3_4 = array($c3Result['total3_4_3'],$c3Result['total3_4_4'],$c3Result['total3_4_5']);
		$persen3_4 = number_format(array_sum($up3_4) * 100 / $sumo, 2, '.', '');
		$score3_4 = round($persen3_4,2) * 1 / 100;
		$child3 = round(array_sum(array($score3_1,$score3_2,$score3_3,$score3_4)),2);

		$up4_1 = array($c4Result['total4_1_3'],$c4Result['total4_1_4'],$c4Result['total4_1_5']);
		$persen4_1 = number_format(array_sum($up4_1) * 100 / $sumo, 2, '.', '');
		$score4_1 = round($persen4_1,2) * 1 / 100;
		$up4_2 = array($c4Result['total4_2_3'],$c4Result['total4_2_4'],$c4Result['total4_2_5']);
		$persen4_2 = number_format(array_sum($up4_2) * 100 / $sumo, 2, '.', '');
		$score4_2 = round($persen4_2,2) * 1 / 100;
		$up4_3 = array($c4Result['total4_3_3'],$c4Result['total4_3_4'],$c4Result['total4_3_5']);
		$persen4_3 = number_format(array_sum($up4_3) * 100 / $sumo, 2, '.', '');
		$score4_3 = round($persen4_3,2) * 1 / 100;
		$up4_4 = array($c4Result['total4_4_3'],$c4Result['total4_4_4'],$c4Result['total4_4_5']);
		$persen4_4 = number_format(array_sum($up4_4) * 100 / $sumo, 2, '.', '');
		$score4_4 = round($persen4_4,2) * 1 / 100;
		$up4_5 = array($c4Result['total4_5_3'],$c4Result['total4_5_4'],$c4Result['total4_5_5']);
		$persen4_5 = number_format(array_sum($up4_5) * 100 / $sumo, 2, '.', '');
		$score4_5 = round($persen4_5,2) * 1 / 100;
		$child4 = round(array_sum(array($score4_1,$score4_2,$score4_3,$score4_4,$score4_5)),2);

		$side1 = round(array_sum(array($child1,$child2,$child3,$child4)),2);

		$up5_1 = array($c5Result['total5_1_3'],$c5Result['total5_1_4'],$c5Result['total5_1_5']);
		$persen5_1 = number_format(array_sum($up5_1) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_1 = round($persen5_1,2) * 2 / 100;
		$up5_2 = array($c5Result['total5_2_3'],$c5Result['total5_2_4'],$c5Result['total5_2_5']);
		$persen5_2 = number_format(array_sum($up5_2) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_2 = round($persen5_2,2) * 2 / 100;
		$up5_3 = array($c5Result['total5_3_3'],$c5Result['total5_3_4'],$c5Result['total5_3_5']);
		$persen5_3 = number_format(array_sum($up5_3) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_3 = round($persen5_3,2) * 2 / 100;
		$up5_4 = array($c5Result['total5_4_3'],$c5Result['total5_4_4'],$c5Result['total5_4_5']);
		$persen5_4 = number_format(array_sum($up5_4) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_4 = round($persen5_4,2) * 2 / 100;
		$up5_5 = array($c5Result['total5_5_3'],$c5Result['total5_5_4'],$c5Result['total5_5_5']);
		$persen5_5 = number_format(array_sum($up5_5) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_5 = round($persen5_5,2) * 2 / 100;
		$up5_6 = array($c5Result['total5_6_3'],$c5Result['total5_6_4'],$c5Result['total5_6_5']);
		$persen5_6 = number_format(array_sum($up5_6) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_6 = round($persen5_6,2) * 2 / 100;
		$up5_7 = array($c5Result['total5_7_3'],$c5Result['total5_7_4'],$c5Result['total5_7_5']);
		$persen5_7 = number_format(array_sum($up5_7) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_7 = round($persen5_7,2) * 2 / 100;
		$up5_8 = array($c5Result['total5_8_3'],$c5Result['total5_8_4'],$c5Result['total5_8_5']);
		$persen5_8 = number_format(array_sum($up5_8) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_8 = round($persen5_8,2) * 2 / 100;
		$up5_9 = array($c5Result['total5_9_3'],$c5Result['total5_9_4'],$c5Result['total5_9_5']);
		$persen5_9 = number_format(array_sum($up5_9) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_9 = round($persen5_9,2) * 2 / 100;
		$up5_10 = array($c5Result['total5_10_3'],$c5Result['total5_10_4'],$c5Result['total5_10_5']);
		$persen5_10 = number_format(array_sum($up5_10) * 100 / $teacherResult["totalchildteacher"], 2, '.', '');
		$score5_10 = round($persen5_10,2) * 2 / 100;
		$child5 = round(array_sum(array($score5_1,$score5_2,$score5_3,$score5_4,$score5_5,$score5_6,$score5_7,$score5_8,$score5_9,$score5_10)),2);

		$scorec6_1 = round($c6_1 * 3 / 5,2);
		$scorec6_2 = round($c6_2 * 3 / 5,2);
		$scorec6_3 = round($c6_3 * 3 / 5,2);
		$scorec6_4 = round($c6_4 * 3 / 5,2);
		$scorec6_5 = round($c6_5 * 3 / 5,2);
		$scorec6_6 = round($c6_6 * 3 / 5,2);
		$scorec6_7 = round($c6_7 * 2 / 5,2);
		$child6 = round(array_sum(array($scorec6_1,$scorec6_2,$scorec6_3,$scorec6_4,$scorec6_5,$scorec6_6,$scorec6_7)),2);

		$scorec7_1 = round($c7_1 * 4 / 5,2);
		$scorec7_2 = round($c7_2 * 4 / 5,2);
		$scorec7_3 = round($c7_3 * 4 / 5,2);
		$scorec7_4 = round($c7_4 * 4 / 5,2);
		$scorec7_5 = round($c7_5 * 4 / 5,2);
		$child7 = round(array_sum(array($scorec7_1,$scorec7_2,$scorec7_3,$scorec7_4,$scorec7_5)),2);

		$scorec8_1 = round($c8_1 * 1 / 5,2);
		$scorec8_2 = round($c8_2 * 1 / 5,2);
		$scorec8_3 = round($c8_3 * 1 / 5,2);
		$scorec8_4 = round($c8_4 * 0.5 / 5,2);
		$scorec8_5 = round($c8_5 * 0.5 / 5,2);
		$scorec8_6 = round($c8_6 * 1 / 5,2);
		$child8 = round(array_sum(array($scorec8_1,$scorec8_2,$scorec8_3,$scorec8_4,$scorec8_5,$scorec8_6)),2);

		$side2 = round(array_sum(array($child5,$child6,$child7,$child8)),2);

		$scorec9_1 =round($c9_1 * 2.5 / 5,2);
		$scorec9_2 =round($c9_2 * 2.5 / 5,2);
		$child9 = round(array_sum(array($scorec9_1,$scorec9_2)),2);

		$side3 = round(array_sum(array($child9)),2);

		$scorec10_1 = round($c10_1 * 3 / 5,2);
		$scorec10_2 = round($c10_2 * 2 / 5,2);
		$child10 = round(array_sum(array($scorec10_1,$scorec10_2)),2);

		$side4 = round(array_sum(array($child10)),2);

		$scorec11_1 = round($c11_1 * 3 / 5,2);
		$scorec11_2 = round($c11_2 * 2 / 5,2);
		$child11 = round(array_sum(array($scorec11_1,$scorec11_2)),2);

		$side5 = round(array_sum(array($child11)),2);

		$childhoodScore =  round(array_sum(array($child10,$child9,$child8,$child7,$child6,$child5,$child4,$child3,$child2,$child1)),2);

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
				<td><div align="center">20</div></td>
				<td><div align="center">
				<?php
				echo $side1;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side1;
				include("score20.php");
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
				<td><div align="center"><?php echo $child1; ?></div></td>
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
				<td>1.1 มีน้ำหนักส่วนสูงเป็นไปตามเกณฑ์มาตรฐาน</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_1);?></div></td>
				<td><div align="center"><?php echo $persen1_1;?></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_1,2) * 1.0 / 100;
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
				<td>1.2 มีทักษะการเคลื่อนไหวตามวัย</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_2); ?></div></td>
				<td><div align="center"><?php echo $persen1_2; ?></div></td>
				<td><div align="center">1.5</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_2,2) * 1.5 / 100;
				echo round($score,2);
				include("score15.php");
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
				<td>1.3 มีสุขนิสัยในการดูแลสุขภาพของตน</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_3); ?>
				</div></td>
				<td><div align="center"><?php echo $persen1_3; ?></div></td>
				<td><div align="center">1.5</div></td>
				<td><div align="center">
				<?php
				$score = round($persen1_3,2) * 1.5 / 100;
				echo round($score,2);
				include("score15.php");
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
				<td>1.4 หลีกเลี่ยงต่อสภาวะที่เสี่ยงต่อโรค อุบัติเหตุ ภัย และสิ่งเสพติด</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up1_4);?>
				</div></td>
				<td><div align="center"><?php echo $persen1_4;?></div></td>
				<td><div align="center">1.0</div></td>
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
				<td>มาตรฐานที่ 2 เด็กมีพัฒนาการด้านอารมณ์และจิตใจ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $child2; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score2_1,$score2_2,$score2_3,$score2_4));
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
				<td>2.1 ร่าเริงแจ่มใส มีความรู้สึกที่ดีต่อตนเอง</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_1);?></div></td>
				<td><div align="center"><?php echo $persen2_1;?></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen2_1,2) * 1.0 / 100;
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
				<td>2.2 มีความมั่นใจและกล้าแสดงออก</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_2); ?></div></td>
				<td><div align="center"><?php echo $persen2_2; ?></div></td>
				<td><div align="center">1.5</div></td>
				<td><div align="center">
				<?php
				$score = round($persen2_2,2) * 1 / 100;
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
				<td>2.3 ควบคุมอารมณ์ตนเองได้เหมาะสมกับวัย</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_3); ?>
				</div></td>
				<td><div align="center"><?php echo $persen2_3; ?></div></td>
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
				<td>2.4 ชื่นชมศิลปะ ดนตรี  การเคลื่อนไหว และรักธรรมชาติ</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up2_4);?>
				</div></td>
				<td><div align="center"><?php echo $persen2_4;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen2_4,2) * 2 / 100;
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
				<td>มาตรฐานที่ 3 เด็กมีพัฒนาการด้านสังคม</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $child3; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score3_1,$score3_2,$score3_3,$score3_4));
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
				<td>3.1 มีวินัย รับผิดชอบ เชื่อฟังคำสั่งสอนของพ่อแม่ ครูอาจารย์</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_1);?></div></td>
				<td><div align="center"><?php echo $persen3_1;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen3_1,2) * 2.0 / 100;
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
				<td>3.2 มีความซื่อสัตย์สุจริต ช่วยเหลือแบ่งปัน</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_2); ?></div></td>
				<td><div align="center"><?php echo $persen3_2; ?></div></td>
				<td><div align="center">1.5</div></td>
				<td><div align="center">
				<?php
				$score = round($persen3_2,2) * 1 / 100;
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
				<td>3.3 เล่นและทำงานร่วมกับผู้อื่นได้</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_3); ?>
				</div></td>
				<td><div align="center"><?php echo $persen3_3; ?></div></td>
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
				<td>3.4 ประพฤติตนตามวัฒนธรรมไทยและศาสนาที่ตนนับถือ</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up3_4);?>
				</div></td>
				<td><div align="center"><?php echo $persen3_4;?></div></td>
				<td><div align="center">1.0</div></td>
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
				<td>มาตรฐานที่ 4  เด็กมีพัฒนาการด้านสติปัญญา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $child4; ?></div></td>
				<td><div align="center">
				<?php
					$score = array_sum(array($score4_1,$score4_2,$score4_3,$score4_4,$score4_5));
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
				<td>4.1 สนใจเรียนรู้สิ่งรอบตัว ซักถามอย่างตั้งใจ และรักการเรียนรู้</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_1);?></div></td>
				<td><div align="center"><?php echo $persen4_1;?></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen4_1,2) * 1.0 / 100;
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
				<td>4.2 มีความคิดรวบยอดเกี่ยวกับสิ่งต่างๆ ที่เกิดจากประสบการณ์การเรียนรู้</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_2); ?></div></td>
				<td><div align="center"><?php echo $persen4_2; ?></div></td>
				<td><div align="center">1.5</div></td>
				<td><div align="center">
				<?php
				$score = round($persen4_2,2) * 1 / 100;
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
				<td>4.3 มีทักษะทางภาษาที่เหมาะสมกับวัย</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_3); ?>
				</div></td>
				<td><div align="center"><?php echo $persen4_3; ?></div></td>
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
				<td>4.4 มีทักษะกระบวนการทางวิทยาศาสตร์และคณิตศาสตร์</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_4);?>
				</div></td>
				<td><div align="center"><?php echo $persen4_4;?></div></td>
				<td><div align="center">1.0</div></td>
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
				<td>4.5 มีจินตนาการและความคิดสร้างสรรค์</td>
				<td><div align="center"><?php echo $sumo;?></div></td>
				<td><div align="center"><?php echo array_sum($up4_5);?>
				</div></td>
				<td><div align="center"><?php echo $persen4_5;?></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen4_5,2) * 1 / 100;
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
				<td><div align="center">65</div></td>
				<td><div align="center">
				<?php
				echo $side2;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side2;
				include("score65.php");
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
				<td>มาตรฐานที่ 5  ครูปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">20.0</div></td>
				<td><div align="center"><?php echo $child5; ?></div></td>
				<td><div align="center">
				<?php
					$score = $child5;
  					include("score20.php");
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
				<td>5.1 ครูเข้าใจปรัชญา หลักการ และธรรมชาติของการจัดการศึกษาปฐมวัย  และสามารถนำมาประยุกต์ใช้ในการจัดประสบการณ์</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_1);?></div></td>
				<td><div align="center"><?php echo $persen5_1;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_1,2) * 2.0 / 100;
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
				<td>5.2 ครูจัดทำแผนการจัดประสบการณ์ที่สอดคล้องกับหลักสูตรการศึกษาปฐมวัยและสามารถจัดประสบการณ์การเรียนรู้ที่หลากหลาย  สอดคล้องกับความแตกต่างระหว่างบุคคล</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_2);?></div></td>
				<td><div align="center"><?php echo $persen5_2;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_2,2) * 2.0 / 100;
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
				<td>5.3 ครูบริหารจัดการชั้นเรียนที่สร้างวินัยเชิงบวก</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_3);?></div></td>
				<td><div align="center"><?php echo $persen5_3;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_3,2) * 2.0 / 100;
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
				<td>5.4 ครูใช้สื่อและเทคโนโลยีที่เหมาะสม สอดคล้องกับพัฒนาการของเด็ก</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_4);?></div></td>
				<td><div align="center"><?php echo $persen5_4;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_4,2) * 2.0 / 100;
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
				<td>5.5 ครูใช้เครื่องมือการวัดและประเมินพัฒนาการของเด็กอย่างหลากหลาย และสรุปรายงานผลพัฒนาการของเด็กแก่ผู้ปกครอง</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_5);?></div></td>
				<td><div align="center"><?php echo $persen5_5;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_5,2) * 2.0 / 100;
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
				<td>5.6  ครูวิจัยและพัฒนาการจัดการเรียนรู้ที่ตนรับผิดชอบและใช้ผลในการปรับการจัดประสบการณ์</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_6);?></div></td>
				<td><div align="center"><?php echo $persen5_6;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_6,2) * 2.0 / 100;
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
				<td>5.7 ครูจัดสิ่งแวดล้อมให้เกิดการเรียนรู้ได้ตลอดเวลา</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_7);?></div></td>
				<td><div align="center"><?php echo $persen5_7;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_7,2) * 2.0 / 100;
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
				<td>5.8 ครูมีปฏิสัมพันธ์ที่ดีกับเด็ก และผู้ปกครอง</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_8);?></div></td>
				<td><div align="center"><?php echo $persen5_8;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_8,2) * 2.0 / 100;
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
				<td>5.9 ครูมีวุฒิและความรู้ความสามารถในด้านการศึกษาปฐมวัย</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_9);?></div></td>
				<td><div align="center"><?php echo $persen5_9;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_9,2) * 2.0 / 100;
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
				<td>5.10 ครูจัดทำสารนิทัศน์และนำมาไตร่ตรองเพื่อใช้ประโยชน์ในการพัฒนาเด็ก</td>
				<td><div align="center"><?php echo $teacherResult["totalchildteacher"];?></div></td>
				<td><div align="center"><?php echo array_sum($up5_10);?></div></td>
				<td><div align="center"><?php echo $persen5_10;?></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php
				$score = round($persen5_10,2) * 2.0 / 100;
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
				<td>มาตรฐานที่ 6 ผู้บริหารปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">20.0</div></td>
				<td><div align="center"><?php echo $child6; ?></div></td>
				<td><div align="center">
				<?php
					$score = $child6;
  					include("score20.php");
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
				<td>6.1  ผู้บริหารเข้าใจปรัชญาและหลักการจัดการศึกษาปฐมวัย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec6_1;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>6.2 ผู้บริหารมีวิสัยทัศน์ ภาวะผู้นำ และความคิดริเริ่มที่เน้นการพัฒนาเด็กปฐมวัย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec6_2;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>6.3 ผู้บริหารใช้หลักการบริหารแบบมีส่วนร่วมและใช้ข้อมูลการประเมินผลหรือการวิจัยเป็นฐานคิดทั้งด้านวิชาการและการจัดการ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec6_3;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>6.4  ผู้บริหารสามารถบริหารจัดการการศึกษาให้บรรลุเป้าหมายตามแผนพัฒนาคุณภาพสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec6_4;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>6.5 ผู้บริหารส่งเสริมและพัฒนาศักยภาพบุคลากรให้มีประสิทธิภาพ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec6_5;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>6.6 ผู้บริหารให้คำแนะนำ คำปรึกษาทางวิชาการและเอาใจใส่การจัดการศึกษา ปฐมวัยเต็มศักยภาพและเต็มเวลา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec6_6;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>6.7 เด็ก ผู้ปกครอง และชุมชนพึงพอใจผลการบริหารจัดการศึกษาปฐมวัย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec6_7;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score202.php");
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
				<td>มาตรฐานที่ 7 แนวการจัดการศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">20.0</div></td>
				<td><div align="center"><?php echo $child7; ?></div></td>
				<td><div align="center">
				<?php
					$score = $child7;
  					include("score20.php");
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
				<td>7.1 มีหลักสูตรการศึกษาปฐมวัยของสถานศึกษาและนำสู่การปฏิบัติได้อย่างมีประสิทธิภาพ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">4.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $score = $scorec7_1;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score4.php");
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
				<td>7.2 มีระบบและกลไกให้ผู้มีส่วนร่วมทุกฝ่ายตระหนักและเข้าใจการจัดการศึกษาปฐมวัย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">4.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $score = $scorec7_2;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score4.php");
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
				<td>7.3 จัดกิจกรรมเสริมสร้างความตระหนักรู้และความเข้าใจหลักการจัดการศึกษาปฐมวัย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">4.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $score = $scorec7_3;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score4.php");
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
				<td>7.4 สร้างการมีส่วนร่วมและแสวงหาความร่วมมือกับผู้ปกครอง  ชุมชน และท้องถิ่น</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">4.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $score = $scorec7_4;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score4.php");
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
				<td>7.5 จัดสิ่งอำนวยความสะดวกเพื่อพัฒนาเด็กอย่างรอบด้าน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">4.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec7_5;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score4.php");
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
				<td>มาตรฐานที่ 8 สถานศึกษามีการประกันคุณภาพภายในของสถานศึกษาตามที่กำหนดในกฎกระทรวง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5.0</div></td>
				<td><div align="center"><?php echo $child8; ?></div></td>
				<td><div align="center">
				<?php
					$score = $child8;
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
				<td>8.1 กำหนดมาตรฐานการศึกษาปฐมวัยของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec8_1;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score101.php");
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
				<td>8.2 จัดทำและดำเนินการตามแผนพัฒนาการจัดการศึกษาของสถานศึกษาที่มุ่งพัฒนาคุณภาพตามมาตรฐานการศึกษาของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec8_2;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score101.php");
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
				<td>8.3 จัดระบบข้อมูลสารสนเทศและใช้สารสนเทศในการบริหารจัดการ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec8_3;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score101.php");
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
				<td>8.4 ติดตามตรวจสอบ และประเมินผลการดำเนินงานคุณภาพภายในตามมาตรฐานการศึกษาของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">0.5</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec8_4;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score05.php");
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
				<td>8.5 นำผลการประเมินคุณภาพทั้งภายในและภายนอกไปใช้วางแผนพัฒนาคุณภาพการศึกษาอย่างต่อเนื่อง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">0.5</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec8_5;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score05.php");
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
				<td>8.6 จัดทำรายงานประจำปีที่เป็นรายงานการประเมินคุณภาพภายใน</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">1.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec8_6;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score101.php");
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
				<td><div align="center">5</div></td>
				<td><div align="center">
				<?php
				echo $side3;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side3;
				include("score5.php");
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
				<td>มาตรฐานที่ 9 คณะกรรมการสถานศึกษา และผู้ปกครอง ชุมชนปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5</div></td>
				<td><div align="center"><?php echo $child9; ?></div></td>
				<td><div align="center">
				<?php
					$score = $child9;
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
				<td>9.1 เป็นแหล่งเรียนรู้เพื่อพัฒนาการเรียนรู้ของเด็กและบุคลากรในสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2.5</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec9_1;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score25.php");
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
				<td>9.2 มีการแลกเปลี่ยนเรียนรู้ร่วมกันภายในสถานศึกษา  ระหว่างสถานศึกษากับครอบครัว ชุมชน และองค์กรที่เกี่ยวข้อง</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2.5</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec9_2;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score25.php");
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
				<td> มาตรฐานด้านอัตลักษณ์ของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5</div></td>
				<td><div align="center">
				<?php
				echo $side4;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side4;
				include("score5.php");
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
				<td>มาตรฐานที่ 10 การพัฒนาสถานศึกษาให้บรรลุเป้าหมายตามปรัชญา วิสัยทัศน์ และจุดเน้นของการศึกษาปฐมวัย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5</div></td>
				<td><div align="center"><?php echo $child10; ?></div></td>
				<td><div align="center">
				<?php
					$score = $child10;
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
				<td>10.1 หลักสูตรสถานศึกษาเหมาะสมและสอดคล้องกับท้องถิ่นจัดโครงการ กิจกรรมพัฒนาเด็กให้บรรลุตามเป้าหมาย ปรัชญา  วิสัยทัศน์ และจุดเน้นการจัดการศึกษาปฐมวัยของ</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec10_1;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>10.2  ผลการดำเนินงานบรรลุตามเป้าหมาย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec10_2;;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score202.php");
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
				<td><div align="center">5</div></td>
				<td><div align="center">
				<?php
				echo $side5;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $side5;
				include("score5.php");
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
				<td>มาตรฐานที่ 11  การพัฒนาสถานศึกษาตามนโยบายและแนวทางปฏิรูปการศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">5</div></td>
				<td><div align="center"><?php echo $child11; ?></div></td>
				<td><div align="center">
				<?php
					$score = $child11;
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
				<td>11.1  จัดโครงการ กิจกรรมส่งเสริมสนับสนุนตามนโยบายเกี่ยวกับการจัดการศึกษาปฐมวัย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">3.0</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec11_1;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score3.php");
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
				<td>11.2 ผลการดำเนินงานบรรลุตามเป้าหมาย</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">2</div></td>
				<td><div align="center">
				<?php 
  					$score = $scorec11_2;
					echo $score;
				?>
				</div></td>
				<td><div align="center">
				<?php
					include("score202.php");
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
				<td>สรุปผลภาพรวมการศึกษาปฐมวัยของสถานศึกษา</td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center">100</div></td>
				<td><div align="center">
				<?php
				echo $childhoodScore;
				?>
				</div></td>
				<td><div align="center">
				<?php
				$score = $childhoodScore;
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
				<input class="btn btn-primary" type="button" name="Button" value="นำออกข้อมูล" onClick="window.location.href='exportschildhoodadmin.php'">
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