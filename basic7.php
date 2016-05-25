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
	if ($_SESSION['ses_username']!=""){	
		$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());

		$selb7 = mysql_query("SELECT * FROM `b7` WHERE `schoolid` = '".$_SESSION['ses_username']."'");
		$b7num = mysql_num_rows($selb7);
		if ($b7num > 0) {
			$b7Result = mysql_fetch_array($selb7) or die  (mysql_error());
		}

		$selteacher = mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'");
		$teachernum = mysql_num_rows($selteacher);
		if ($teachernum > 0) {
			$teacherResult = mysql_fetch_array($selteacher) or die  (mysql_error());
		}else{
			$teacherResult["primaryhigh"] = 0;
		}	
include("include/sumstudent.php");
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic7add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 7 ครูปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนครู</div></td>
				<td colspan="5"><div align="center">จำนวนครู(คน)</div></td>
				<td rowspan="3"><div align="center">ได้ระดับคุณภาพ<br> 3 ขึ้นไป(คน)</div></td>
				<td rowspan="3"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="3">คุณภาพ</td>
			</tr>
			<tr>
			  <td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
  			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>7.1 ครูมีการกำหนดเป้าหมายคุณภาพผู้เรียนทั้งด้านความรู้ ทักษะกระบวนการ สมรรถนะ และคุณลักษณะที่พึงประสงค์</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_1_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_1_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_1_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_1_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_1_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_1 = array($b7Result['7_1_3'],$b7Result['7_1_4'],$b7Result['7_1_5']);
					echo array_sum($up7_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$persen7_1 = array_sum($up7_1) * 100 / $teacherResult["primaryhigh"];
  					$score7_1 = round($persen7_1,2) * 1 / 100;
  					echo round($score7_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_1,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.2 ครูมีการวิเคราะห์ผู้เรียนเป็นรายบุคคล และใช้ข้อมูลในการวางแผนการจัดการเรียนรู้เพื่อพัฒนาศักยภาพของผู้เรียน</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_2_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_2_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_2_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_2_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_2_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_2 = array($b7Result['7_2_3'],$b7Result['7_2_4'],$b7Result['7_2_5']);
					echo array_sum($up7_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_2 = array_sum($up7_2) * 100 / $teacherResult["primaryhigh"];
  					$score7_2 = round($persen7_2,2) * 1 / 100;
  					echo round($score7_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.3 ครูออกแบบและการจัดการเรียนรู้ที่ตอบสนองความแตกต่างระหว่างบุคคลและพัฒนาการทางสติปัญญา</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_3_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_3_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_3_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_3_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_3_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_3 = array($b7Result['7_3_3'],$b7Result['7_3_4'],$b7Result['7_3_5']);
					echo array_sum($up7_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_3 = array_sum($up7_3) * 100 / $teacherResult["primaryhigh"];
  					$score7_3 = round($persen7_3,2) * 2 / 100;
  					echo round($score7_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_3,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.4 ครูใช้สื่อและเทคโนโลยีที่เหมาะสมผนวกกับการนำบริบทและภูมิปัญญาของท้องถิ่นมาบูรณาการในการจัดการเรียนรู้</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_4_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_4_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_4_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_4_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_4_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_4 = array($b7Result['7_4_3'],$b7Result['7_4_4'],$b7Result['7_4_5']);
					echo array_sum($up7_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_4 = array_sum($up7_4) * 100 / $teacherResult["primaryhigh"];
  					$score7_4 = round($persen7_4,2) * 1.0 / 100;
  					echo round($score7_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.5 ครูมีการวัดและประเมินผลที่มุ่งเน้นการพัฒนาการเรียนรู้ของผู้เรียนด้วยวิธีการที่หลากหลาย</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_5_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_5_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_5_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_5_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_5_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_5_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_5_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_5_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_5_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_5_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_5 = array($b7Result['7_5_3'],$b7Result['7_5_4'],$b7Result['7_5_5']);
					echo array_sum($up7_5);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_5 = array_sum($up7_5) * 100 / $teacherResult["primaryhigh"];
  					$score7_5 = round($persen7_5,2) * 1.0 / 100;
  					echo round($score7_5,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_5,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.6 ครูให้คำแนะนำ คำปรึกษา และแก้ไขปัญหาให้แก่ผู้เรียนทั้งด้านการเรียนและคุณภาพชีวิตด้วยความเสมอภาค</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_6_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_6_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_6_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_6_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_6_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_6_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_6_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_6_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_6_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_6_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_6 = array($b7Result['7_6_3'],$b7Result['7_6_4'],$b7Result['7_6_5']);
					echo array_sum($up7_6);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_6 = array_sum($up7_6) * 100 / $teacherResult["primaryhigh"];
  					$score7_6 = round($persen7_6,2) * 1.0 / 100;
  					echo round($score7_6,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_6,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.7 ครูมีการศึกษา วิจัยและพัฒนาการจัดการเรียนรู้ในวิชาที่ตนรับผิดชอบ และใช้ผลในการปรับการสอน</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_7_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_7_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_7_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_7_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_7_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_7_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_7_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_7_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_7_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_7_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_7 = array($b7Result['7_7_3'],$b7Result['7_7_4'],$b7Result['7_7_5']);
					echo array_sum($up7_7);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_7 = array_sum($up7_7) * 100 / $teacherResult["primaryhigh"];
  					$score7_7 = round($persen7_7,2) * 1.0 / 100;
  					echo round($score7_7,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_7,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.8 ครูประพฤติปฏิบัติตนเป็นแบบอย่างที่ดี และเป็นสมาชิกที่ดีของสถานศึกษา</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_8_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_8_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_8_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_8_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_8_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_8_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_8_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_8_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_8_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_8_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_8 = array($b7Result['7_8_3'],$b7Result['7_8_4'],$b7Result['7_8_5']);
					echo array_sum($up7_8);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_8 = array_sum($up7_8) * 100 / $teacherResult["primaryhigh"];
  					$score7_8 = round($persen7_8,2) * 1.0 / 100;
  					echo round($score7_8,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_8,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.9 ครูจัดการเรียนการสอนตามวิชาที่ได้รับมอบหมายเต็มเวลา เต็มความสามารถ</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><input type="text" name="txt7_9_1" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_9_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_9_2" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_9_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_9_3" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_9_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_9_4" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_9_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt7_9_5" class="input-mini"
				<?php 
				if ($b7num > 0) {
						echo "value=\"".$b7Result['7_9_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b7num > 0) {
  					$up7_9 = array($b7Result['7_9_3'],$b7Result['7_9_4'],$b7Result['7_9_5']);
					echo array_sum($up7_9);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$persen7_9 = array_sum($up7_9) * 100 / $teacherResult["primaryhigh"];
  					$score7_9 = round($persen7_9,2) * 1.0 / 100;
  					echo round($score7_9,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b7num > 0) {
  					$score = round($persen7_9,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					if ($b7num > 0) {
					$score7 = array($score7_1,$score7_2,$score7_3,$score7_4,$score7_5,$score7_6,$score7_7,$score7_8,$score7_9);
					$score = number_format(array_sum($score7), 2, '.', '');
					$score7sum = number_format(array_sum($score7), 2, '.', ''); 
					echo $score7sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b7num > 0) {
  					include("score10.php");
  					echo $degree;
  					unset($degree);
  				}
  					?>
  				</div></td>
			</tr>
</table>
			<div class="row">
				<div align="center"><input class="btn btn-primary" type="submit" value=" บันทึกข้อมูล " />
				<br>
				<br> 
				</div>
			</div>
	</form>
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