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

		$selb2 = mysql_query("SELECT SUM(2_1_1) AS total2_1_1,SUM(2_1_2) AS total2_1_2,SUM(2_1_3) AS total2_1_3,SUM(2_1_4) AS total2_1_4,SUM(2_1_5) AS total2_1_5,SUM(2_2_1) AS total2_2_1,SUM(2_2_2) AS total2_2_2,SUM(2_2_3) AS total2_2_3,SUM(2_2_4) AS total2_2_4,SUM(2_2_5) AS total2_2_5,SUM(2_3_1) AS total2_3_1,SUM(2_3_2) AS total2_3_2,SUM(2_3_3) AS total2_3_3,SUM(2_3_4) AS total2_3_4,SUM(2_3_5) AS total2_3_5,SUM(2_4_1) AS total2_4_1,SUM(2_4_2) AS total2_4_2,SUM(2_4_3) AS total2_4_3,SUM(2_4_4) AS total2_4_4,SUM(2_4_5) AS total2_4_5 FROM `b2` ");
		$b2num = mysql_num_rows($selb2);
		if ($b2num > 0) {
			$b2Result = mysql_fetch_array($selb2) or die  (mysql_error());
		}
include("include/sumstudentadmin.php");
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic2add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 2 ผู้เรียนมีคุณธรรม จริยธรรม และค่านิยมที่พึงประสงค์</h4></div></td>
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
  				<td>2.1 มีคุณลักษณะที่พึงประสงค์ตามหลักสูตร</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt2_1_1" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_1_2" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_1_3" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_1_4" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_1_5" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b2num > 0) {
  					$up2_1 = array($b2Result['total2_1_3'],$b2Result['total2_1_4'],$b2Result['total2_1_5']);
					echo array_sum($up2_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				if ($b2num > 0 && $sumb != 0) {
  					$persen2_1 = array_sum($up2_1) * 100 / $sumb;
  					$score2_1 = round($persen2_1,2) * 2 / 100;
  					echo round($score2_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b2num > 0 && $sumb != 0) {
  					$score = round($persen2_1,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.2 เอื้ออาทรผู้อื่นและกตัญญูกตเวทีต่อผู้มีพระคุณ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt2_2_1" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_2_2" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_2_3" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_2_4" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_2_5" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b2num > 0) {
  					$up2_2 = array($b2Result['total2_2_3'],$b2Result['total2_2_4'],$b2Result['total2_2_5']);
					echo array_sum($up2_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b2num > 0 && $sumb != 0) {
  					$persen2_2 = array_sum($up2_2) * 100 / $sumb;
  					$score2_2 = round($persen2_2,2) * 1 / 100;
  					echo round($score2_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b2num > 0 && $sumb != 0) {
  					$score = round($persen2_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.3 ยอมรับความคิดและวัฒนธรรมที่แตกต่าง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt2_3_1" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_3_2" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_3_3" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_3_4" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_3_5" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b2num > 0) {
  					$up2_3 = array($b2Result['total2_3_3'],$b2Result['total2_3_4'],$b2Result['total2_3_5']);
					echo array_sum($up2_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b2num > 0 && $sumb != 0) {
  					$persen2_3 = array_sum($up2_3) * 100 / $sumb;
  					$score2_3 = round($persen2_3,2) * 1 / 100;
  					echo round($score2_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b2num > 0 && $sumb != 0) {
  					$score = round($persen2_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.4 ตระหนัก รู้คุณค่า ร่วมอนุรักษ์และพัฒนาสิ่งแวดล้อม</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt2_4_1" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_4_2" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_4_3" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_4_4" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt2_4_5" class="input-mini"
				<?php 
				if ($b2num > 0) {
						echo "value=\"".$b2Result['total2_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b2num > 0) {
  					$up2_4 = array($b2Result['total2_4_3'],$b2Result['total2_4_4'],$b2Result['total2_4_5']);
					echo array_sum($up2_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b2num > 0 && $sumb != 0) {
  					$persen2_4 = array_sum($up2_4) * 100 / $sumb;
  					$score2_4 = round($persen2_4,2) * 1.0 / 100;
  					echo round($score2_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b2num > 0 && $sumb != 0) {
  					$score = round($persen2_4,2) * 1.0 / 100;
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
					if ($b2num > 0 && $sumb != 0) {
					$score2 = array($score2_1,$score2_2,$score2_3,$score2_4);
					$score = number_format(array_sum($score2), 2, '.', '');
					$score2sum = number_format(array_sum($score2), 2, '.', ''); 
					echo $score2sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b2num > 0 && $sumb != 0) {
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