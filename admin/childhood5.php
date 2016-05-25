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
			if ($_POST['txtschoolid']!=""){
				if ($_POST['txtschoolid']=="56010000") {
					echo "<meta http-equiv='refresh' content='0;URL=childhood5admin.php'>";
				}else{	
		$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());

		$selc5 = mysql_query("SELECT * FROM `c5` WHERE `schoolid` = '".$_POST['txtschoolid']."'");
		$c5num = mysql_num_rows($selc5);
		if ($c5num > 0) {
			$c5Result = mysql_fetch_array($selc5) or die  (mysql_error());
		}

		$selteacher = mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_POST['txtschoolid']."'");
		$teachernum = mysql_num_rows($selteacher);
		if ($teachernum > 0) {
			$teacherResult = mysql_fetch_array($selteacher) or die  (mysql_error());
		}else{
			$teacherResult["childteacher"] = 0 ;
		}	

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="childhood5add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>ผลการพัฒนามาตรฐานที่ 5 ครูปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h4></div></td>
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
  				<td>5.1 ครูเข้าใจปรัชญา หลักการ และธรรมชาติของการจัดการศึกษาปฐมวัย  และสามารถนำมาประยุกต์ใช้ในการจัดประสบการณ์</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_1_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_1_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_1_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_1_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_1_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_1 = array($c5Result['5_1_3'],$c5Result['5_1_4'],$c5Result['5_1_5']);
					echo array_sum($up5_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_1 = array_sum($up5_1) * 100 / $teacherResult["childteacher"];
  					$score5_1 = round($persen5_1,2) * 2.0 / 100;
  					echo round($score5_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$score = round($persen5_1,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.2 ครูจัดทำแผนการจัดประสบการณ์ที่สอดคล้องกับหลักสูตรการศึกษาปฐมวัยและสามารถจัดประสบการณ์การเรียนรู้ที่หลากหลาย  สอดคล้องกับความแตกต่างระหว่างบุคคล</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_2_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_2_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_2_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_2_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_2_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_2 = array($c5Result['5_2_3'],$c5Result['5_2_4'],$c5Result['5_2_5']);
					echo array_sum($up5_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_2 = array_sum($up5_2) * 100 / $teacherResult["childteacher"];
  					$score5_2 = round($persen5_2,2) * 2 / 100;
  					echo round($score5_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$score = round($persen5_2,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.3 ครูบริหารจัดการชั้นเรียนที่สร้างวินัยเชิงบวก</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_3_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_3_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_3_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_3_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_3_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_3 = array($c5Result['5_3_3'],$c5Result['5_3_4'],$c5Result['5_3_5']);
					echo array_sum($up5_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_3 = array_sum($up5_3) * 100 / $teacherResult["childteacher"];
  					$score5_3 = round($persen5_3,2) * 2 / 100;
  					echo round($score5_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_3 = array_sum($up5_3) * 100 / $teacherResult["childteacher"];
  					$score5_3 = round($persen5_3,2) * 2 / 100;
  					$score = round($persen5_3,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.4 ครูใช้สื่อและเทคโนโลยีที่เหมาะสม สอดคล้องกับพัฒนาการของเด็ก</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_4_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_4_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_4_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_4_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_4_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_4 = array($c5Result['5_4_3'],$c5Result['5_4_4'],$c5Result['5_4_5']);
					echo array_sum($up5_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_4 = array_sum($up5_4) * 100 / $teacherResult["childteacher"];
  					$score5_4 = round($persen5_4,2) * 2.0 / 100;
  					echo round($score5_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$score = round($persen5_4,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.5 ครูใช้เครื่องมือการวัดและประเมินพัฒนาการของเด็กอย่างหลากหลาย และสรุปรายงานผลพัฒนาการของเด็กแก่ผู้ปกครอง</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_5_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_5_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_5_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_5_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_5_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_5_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_5_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_5_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_5_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_5_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_5 = array($c5Result['5_5_3'],$c5Result['5_5_4'],$c5Result['5_5_5']);
					echo array_sum($up5_5);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_5 = array_sum($up5_5) * 100 / $teacherResult["childteacher"];
  					$score5_5 = round($persen5_5,2) * 2.0 / 100;
  					echo round($score5_5,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_5 = array_sum($up5_5) * 100 / $teacherResult["childteacher"];
  					$score5_5 = round($persen5_5,2) * 2.0 / 100;
  					$score = round($persen5_5,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.6 ครูวิจัยและพัฒนาการจัดการเรียนรู้ที่ตนรับผิดชอบและใช้ผลในการปรับการจัดประสบการณ์</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_6_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_6_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_6_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_6_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_6_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_6_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_6_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_6_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_6_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_6_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_6 = array($c5Result['5_6_3'],$c5Result['5_6_4'],$c5Result['5_6_5']);
					echo array_sum($up5_6);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_6 = array_sum($up5_6) * 100 / $teacherResult["childteacher"];
  					$score5_6 = round($persen5_6,2) * 2.0 / 100;
  					echo round($score5_6,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_6 = array_sum($up5_6) * 100 / $teacherResult["childteacher"];
  					$score5_6 = round($persen5_6,2) * 2.0 / 100;
  					$score = round($persen5_6,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.7 ครูจัดสิ่งแวดล้อมให้เกิดการเรียนรู้ได้ตลอดเวลา</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_7_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_7_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_7_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_7_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_7_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_7_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_7_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_7_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_7_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_7_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_7 = array($c5Result['5_7_3'],$c5Result['5_7_4'],$c5Result['5_7_5']);
					echo array_sum($up5_7);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_7 = array_sum($up5_7) * 100 / $teacherResult["childteacher"];
  					$score5_7 = round($persen5_7,2) * 2 / 100;
  					echo round($score5_7);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_7 = array_sum($up5_7) * 100 / $teacherResult["childteacher"];
  					$score5_7 = round($persen5_7,2) * 2 / 100;
  					$score = round($persen5_7,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.8 ครูมีปฏิสัมพันธ์ที่ดีกับเด็ก และผู้ปกครอง</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_8_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_8_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_8_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_8_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_8_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_8_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_8_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_8_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_8_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_8_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_8 = array($c5Result['5_8_3'],$c5Result['5_8_4'],$c5Result['5_8_5']);
					echo array_sum($up5_8);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_8 = array_sum($up5_8) * 100 / $teacherResult["childteacher"];
  					$score5_8 = round($persen5_8,2) * 2 / 100;
  					echo round($score5_8,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_8 = array_sum($up5_8) * 100 / $teacherResult["childteacher"];
  					$score5_8 = round($persen5_8,2) * 2 / 100;
  					$score = round($persen5_8,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.9 ครูมีวุฒิและความรู้ความสามารถในด้านการศึกษาปฐมวัย</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_9_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_9_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_9_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_9_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_9_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_9_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_9_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_9_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_9_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_9_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_9 = array($c5Result['5_9_3'],$c5Result['5_9_4'],$c5Result['5_9_5']);
					echo array_sum($up5_9);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_9 = array_sum($up5_9) * 100 / $teacherResult["childteacher"];
  					$score5_9 = round($persen5_9,2) * 2.0 / 100;
  					echo round($score5_9,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_9 = array_sum($up5_9) * 100 / $teacherResult["childteacher"];
  					$score5_9 = round($persen5_9,2) * 2.0 / 100;
  					$score = round($persen5_9,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.10 ครูจัดทำสารนิทัศน์และนำมาไตร่ตรองเพื่อใช้ประโยชน์ในการพัฒนาเด็ก</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><input type="text" name="txt5_10_1" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_10_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_10_2" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_10_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_10_3" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_10_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_10_4" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_10_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt5_10_5" class="input-mini"
				<?php 
				if ($c5num > 0) {
						echo "value=\"".$c5Result['5_10_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c5num > 0) {
  					$up5_10 = array($c5Result['5_10_3'],$c5Result['5_10_4'],$c5Result['5_10_5']);
					echo array_sum($up5_10);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_10 = array_sum($up5_10) * 100 / $teacherResult["childteacher"];
  					$score5_10 = round($persen5_10,2) * 2.0 / 100;
  					echo round($score5_10,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					$persen5_10 = array_sum($up5_10) * 100 / $teacherResult["childteacher"];
  					$score5_10 = round($persen5_10,2) * 2.0 / 100;
  					$score = round($persen5_10,2) * 2.0 / 100;
  					include("score201.php");
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
					if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
					$score5 = array($score5_1,$score5_2,$score5_3,$score5_4,$score5_5,$score5_6,$score5_7,$score5_8,$score5_9,$score5_10);
					$score = number_format(array_sum($score5), 2, '.', '');
					$score5sum = number_format(array_sum($score5), 2, '.', '');
					$weight5 = 2; 
					echo $score5sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($c5num > 0 && $teacherResult["childteacher"] != 0) {
  					include("score20.php");
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
	<input type="hidden" name="txtschoolid" value="<?php echo $_POST['txtschoolid'] ; ?>" >
	</form>
		</div>

	  </div>
	</div>
		<br>
		<br>
<?php include("include/footer.php");?>
	</div>
<?php
}}else{
		$message = "คุณยังไม่ได้เลือกโรงเรียน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=childhood1sel.php'>";
	}
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