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

		$selb4 = mysql_query("SELECT * FROM `b4` WHERE `schoolid` = '".$_SESSION['ses_username']."'");
		$b4num = mysql_num_rows($selb4);
		if ($b4num > 0) {
			$b4Result = mysql_fetch_array($selb4) or die  (mysql_error());
		}
include("include/sumstudent.php");
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic4add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 4  ผู้เรียนมีความสามารถในการคิดอย่างเป็นระบบ คิดสร้างสรรค์ ตัดสินใจแก้ปัญหาได้อย่างมีสติสมเหตุผล</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนนักเรียน</div></td>
				<td colspan="5"><div align="center">จำนวนนักเรียน(คน)</div></td>
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
  				<td>4.1 สรุปความคิดจากเรื่องที่อ่าน ฟัง และดู และสื่อสารโดยการพูดหรือเขียนตามความคิดของตนเอง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt4_1_1" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_2" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_3" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_4" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_5" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b4num > 0) {
  					$up4_1 = array($b4Result['4_1_3'],$b4Result['4_1_4'],$b4Result['4_1_5']);
					echo array_sum($up4_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				if ($b4num > 0 && $sumb != 0) {
  					$persen4_1 = array_sum($up4_1) * 100 / $sumb;
  					$score4_1 = round($persen4_1,2) * 2 / 100;
  					echo round($score4_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b4num > 0 && $sumb != 0) {
  					$score = round($persen4_1,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.2 นำเสนอวิธีคิด วิธีแก้ปัญหาด้วยภาษาหรือวิธีการของตนเอง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt4_2_1" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_2" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_3" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_4" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_5" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b4num > 0) {
  					$up4_2 = array($b4Result['4_2_3'],$b4Result['4_2_4'],$b4Result['4_2_5']);
					echo array_sum($up4_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b4num > 0 && $sumb != 0) {
  					$persen4_2 = array_sum($up4_2) * 100 / $sumb;
  					$score4_2 = round($persen4_2,2) * 1 / 100;
  					echo round($score4_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b4num > 0 && $sumb != 0) {
  					$score = round($persen4_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.3 กำหนดเป้าหมาย คาดการณ์ ตัดสินใจแก้ปัญหาโดยมีเหตุผลประกอบ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt4_3_1" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_2" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_3" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_4" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_5" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b4num > 0) {
  					$up4_3 = array($b4Result['4_3_3'],$b4Result['4_3_4'],$b4Result['4_3_5']);
					echo array_sum($up4_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b4num > 0 && $sumb != 0) {
  					$persen4_3 = array_sum($up4_3) * 100 / $sumb;
  					$score4_3 = round($persen4_3,2) * 1 / 100;
  					echo round($score4_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b4num > 0 && $sumb != 0) {
  					$score = round($persen4_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.4 ความคิดริเริ่ม และสร้างสรรค์ผลงานด้วยความภาคภูมิใจ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt4_4_1" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_2" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_3" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_4" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_5" class="input-mini"
				<?php 
				if ($b4num > 0) {
						echo "value=\"".$b4Result['4_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b4num > 0) {
  					$up4_4 = array($b4Result['4_4_3'],$b4Result['4_4_4'],$b4Result['4_4_5']);
					echo array_sum($up4_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b4num > 0 && $sumb != 0) {
  					$persen4_4 = array_sum($up4_4) * 100 / $sumb;
  					$score4_4 = round($persen4_4,2) * 1.0 / 100;
  					echo round($score4_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b4num > 0 && $sumb != 0) {
  					$score = round($persen4_4,2) * 1.0 / 100;
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
					if ($b4num > 0 && $sumb != 0) {
					$score4 = array($score4_1,$score4_2,$score4_3,$score4_4);
					$score = number_format(array_sum($score4), 2, '.', '');
					$score4sum = number_format(array_sum($score4), 2, '.', ''); 
					echo $score4sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b4num > 0 && $sumb != 0) {
  					include("scoreb5.php");
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