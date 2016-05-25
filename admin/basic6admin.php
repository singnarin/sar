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

		$selb6 = mysql_query("SELECT SUM(6_1_1) AS total6_1_1,SUM(6_1_2) AS total6_1_2,SUM(6_1_3) AS total6_1_3,SUM(6_1_4) AS total6_1_4,SUM(6_1_5) AS total6_1_5,SUM(6_2_1) AS total6_2_1,SUM(6_2_2) AS total6_2_2,SUM(6_2_3) AS total6_2_3,SUM(6_2_4) AS total6_2_4,SUM(6_2_5) AS total6_2_5,SUM(6_3_1) AS total6_3_1,SUM(6_3_2) AS total6_3_2,SUM(6_3_3) AS total6_3_3,SUM(6_3_4) AS total6_3_4,SUM(6_3_5) AS total6_3_5,SUM(6_4_1) AS total6_4_1,SUM(6_4_2) AS total6_4_2,SUM(6_4_3) AS total6_4_3,SUM(6_4_4) AS total6_4_4,SUM(6_4_5) AS total6_4_5 FROM `b6` ");
		$b6num = mysql_num_rows($selb6);
		if ($b6num > 0) {
			$b6Result = mysql_fetch_array($selb6) or die  (mysql_error());
		}
include("include/sumstudentadmin.php");
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic6add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 6 ผู้เรียนมีทักษะในการทำงาน  รักการทำงาน  สามารถทำงานร่วมกับผู้อื่นได้ และมีเจตคติที่ดีต่ออาชีพสุจริต</h4></div></td>
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
  				<td>6.1  วางแผนการทำงานและดำเนินการจนสำเร็จ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt6_1_1" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_1_2" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_1_3" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_1_4" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_1_5" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b6num > 0) {
  					$up6_1 = array($b6Result['total6_1_3'],$b6Result['total6_1_4'],$b6Result['total6_1_5']);
					echo array_sum($up6_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				if ($b6num > 0 && $sumb != 0) {
  					$persen6_1 = array_sum($up6_1) * 100 / $sumb;
  					$score6_1 = round($persen6_1,2) * 2 / 100;
  					echo round($score6_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b6num > 0 && $sumb != 0) {
  					$score = round($persen6_1,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.2  ทำงานอย่างมีความสุข มุ่งมั่นพัฒนางาน และภูมิใจในผลงานของตนเอง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt6_2_1" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_2_2" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_2_3" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_2_4" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_2_5" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b6num > 0) {
  					$up6_2 = array($b6Result['total6_2_3'],$b6Result['total6_2_4'],$b6Result['total6_2_5']);
					echo array_sum($up6_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b6num > 0 && $sumb != 0) {
  					$persen6_2 = array_sum($up6_2) * 100 / $sumb;
  					$score6_2 = round($persen6_2,2) * 1 / 100;
  					echo round($score6_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b6num > 0 && $sumb != 0) {
  					$score = round($persen6_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.3  ทำงานร่วมกับผู้อื่นได้</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt6_3_1" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_3_2" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_3_3" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_3_4" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_3_5" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b6num > 0) {
  					$up6_3 = array($b6Result['total6_3_3'],$b6Result['total6_3_4'],$b6Result['total6_3_5']);
					echo array_sum($up6_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b6num > 0 && $sumb != 0) {
  					$persen6_3 = array_sum($up6_3) * 100 / $sumb;
  					$score6_3 = round($persen6_3,2) * 1 / 100;
  					echo round($score6_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b6num > 0 && $sumb != 0) {
  					$score = round($persen6_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.4  มีความรู้สึกที่ดีต่ออาชีพสุจริตและหาความรู้เกี่ยวกับอาชีพที่ตนเองสนใจ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt6_4_1" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_4_2" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_4_3" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_4_4" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt6_4_5" class="input-mini"
				<?php 
				if ($b6num > 0) {
						echo "value=\"".$b6Result['total6_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b6num > 0) {
  					$up6_4 = array($b6Result['total6_4_3'],$b6Result['total6_4_4'],$b6Result['total6_4_5']);
					echo array_sum($up6_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b6num > 0 && $sumb != 0) {
  					$persen6_4 = array_sum($up6_4) * 100 / $sumb;
  					$score6_4 = round($persen6_4,2) * 1.0 / 100;
  					echo round($score6_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b6num > 0 && $sumb != 0) {
  					$score = round($persen6_4,2) * 1.0 / 100;
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
					if ($b6num > 0 && $sumb != 0) {
					$score6 = array($score6_1,$score6_2,$score6_3,$score6_4);
					$score = number_format(array_sum($score6), 2, '.', '');
					$score6sum = number_format(array_sum($score6), 2, '.', ''); 
					echo $score6sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b6num > 0 && $sumb != 0) {
  					include("scoreb5.php");
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