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
		
		$selc4 = mysql_query("SELECT SUM(4_1_1) AS total4_1_1,SUM(4_1_2) AS total4_1_2,SUM(4_1_3) AS total4_1_3,SUM(4_1_4) AS total4_1_4,SUM(4_1_5) AS total4_1_5,SUM(4_2_1) AS total4_2_1,SUM(4_2_2) AS total4_2_2,SUM(4_2_3) AS total4_2_3,SUM(4_2_4) AS total4_2_4,SUM(4_2_5) AS total4_2_5,SUM(4_3_1) AS total4_3_1,SUM(4_3_2) AS total4_3_2,SUM(4_3_3) AS total4_3_3,SUM(4_3_4) AS total4_3_4,SUM(4_3_5) AS total4_3_5,SUM(4_4_1) AS total4_4_1,SUM(4_4_2) AS total4_4_2,SUM(4_4_3) AS total4_4_3,SUM(4_4_4) AS total4_4_4,SUM(4_4_5) AS total4_4_5,SUM(4_5_1) AS total4_5_1,SUM(4_5_2) AS total4_5_2,SUM(4_5_3) AS total4_5_3,SUM(4_5_4) AS total4_5_4,SUM(4_5_5) AS total4_5_5 FROM `c4` ");
		$c4num = mysql_num_rows($selc4);
		if ($c4num > 0) {
			$c4Result = mysql_fetch_array($selc4) or die  (mysql_error());
		}
		include("include/sumstudentadmin.php");
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="childhood4add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>ผลการพัฒนามาตรฐานที่ 4 เด็กมีพัฒนาการด้านสติปัญญา</h4></div></td>
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
  				<td>4.1 สนใจเรียนรู้สิ่งรอบตัว ซักถามอย่างตั้งใจ และรักการเรียนรู้</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt4_1_1" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_2" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_3" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_4" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_1_5" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c4num > 0) {
  					$up4_1 = array($c4Result['total4_1_3'],$c4Result['total4_1_4'],$c4Result['total4_1_5']);
					echo array_sum($up4_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$persen4_1 = array_sum($up4_1) * 100 / $sumo;
  					$score4_1 = round($persen4_1,2) * 1.0 / 100;
  					echo round($score4_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$score = round($persen4_1,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.2  มีความคิดรวบยอดเกี่ยวกับสิ่งต่างๆ ที่เกิดจากประสบการณ์การเรียนรู้</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt4_2_1" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_2" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_3" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_4" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_2_5" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c4num > 0) {
  					$up4_2 = array($c4Result['total4_2_3'],$c4Result['total4_2_4'],$c4Result['total4_2_5']);
					echo array_sum($up4_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$persen4_2 = array_sum($up4_2) * 100 / $sumo;
  					$score4_2 = round($persen4_2,2) * 1 / 100;
  					echo round($score4_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$score = round($persen4_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.3 มีทักษะทางภาษาที่เหมาะสมกับวัย</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt4_3_1" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_2" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_3" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_4" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_3_5" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c4num > 0) {
  					$up4_3 = array($c4Result['total4_3_3'],$c4Result['total4_3_4'],$c4Result['total4_3_5']);
					echo array_sum($up4_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$persen4_3 = array_sum($up4_3) * 100 / $sumo;
  					$score4_3 = round($persen4_3,2) * 1 / 100;
  					echo round($score4_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$score = round($persen4_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.4 มีทักษะกระบวนการทางวิทยาศาสตร์และคณิตศาสตร์</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt4_4_1" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_2" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_3" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_4" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_4_5" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c4num > 0) {
  					$up4_4 = array($c4Result['total4_4_3'],$c4Result['total4_4_4'],$c4Result['total4_4_5']);
					echo array_sum($up4_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$persen4_4 = array_sum($up4_4) * 100 / $sumo;
  					$score4_4 = round($persen4_4,2) * 1.0 / 100;
  					echo round($score4_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$score = round($persen4_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.5  มีจินตนาการและความคิดสร้างสรรค์</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt4_5_1" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_5_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_5_2" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_5_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_5_3" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_5_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_5_4" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_5_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt4_5_5" class="input-mini"
				<?php 
				if ($c4num > 0) {
						echo "value=\"".$c4Result['total4_5_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c4num > 0) {
  					$up4_5 = array($c4Result['total4_5_3'],$c4Result['total4_5_4'],$c4Result['total4_5_5']);
					echo array_sum($up4_5);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$persen4_5 = array_sum($up4_5) * 100 / $sumo;
  					$score4_5 = round($persen4_5,2) * 1.0 / 100;
  					echo round($score4_5,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c4num > 0 && $sumo != 0) {
  					$score = round($persen4_5,2) * 1.0 / 100;
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
					if ($c4num > 0 && $sumo != 0) {
					$score4 = array($score4_1,$score4_2,$score4_3,$score4_4,$score4_5);
					$score = number_format(array_sum($score4), 2, '.', '');
					$score4sum = number_format(array_sum($score4), 2, '.', '');
					echo $score4sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($c4num > 0 && $sumo != 0) {
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  				}
  					?>
  				</div></td>
			</tr>
</table>
			<div class="row">
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