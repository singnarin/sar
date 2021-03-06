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

		$selb9 = mysql_query("SELECT * FROM `b9` WHERE `schoolid` = '".$_SESSION['ses_username']."'");
		$b9num = mysql_num_rows($selb9);
		if ($b9num > 0) {
			$b9Result = mysql_fetch_array($selb9) or die  (mysql_error());
		}

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic9add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 9 คณะกรรมการสถานศึกษา และผู้ปกครอง ชุมชน ปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>9.1  คณะกรรมการสถานศึกษารู้และปฏิบัติหน้าที่ตามที่ระเบียบกำหนด</td>
  				<td><div align="center">
  				<input type="radio" name="txt9_1" value="1"
				<?php 
				if ($b9num > 0 && $b9Result['9_1'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_1" value="2"
				<?php 
				if ($b9num > 0 && $b9Result['9_1'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_1" value="3"
				<?php 
				if ($b9num > 0 && $b9Result['9_1'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_1" value="4"
				<?php 
				if ($b9num > 0 && $b9Result['9_1'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_1" value="5"
				<?php 
				if ($b9num > 0 && $b9Result['9_1'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b9num > 0) {
  					$scoreb9_1 = $b9Result['9_1'] * 2 / 5;
  					$score = $b9Result['9_1'] * 2 / 5;
  					if ($b9Result['9_1'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b9num > 0) {
  					include("score202.php");
  					if ($b9Result['9_1'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b9num > 0) {
  					if ($b9Result['9_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>9.2  คณะกรรมการสถานศึกษากำกับติดตาม  ดูแล และขับเคลื่อนการดำเนินงานของสถานศึกษาให้บรรลุผลสำเร็จตามเป้าหมาย</td>
  				<td><div align="center">
  				<input type="radio" name="txt9_2" value="1"
				<?php 
				if ($b9num > 0 && $b9Result['9_2'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_2" value="2"
				<?php 
				if ($b9num > 0 && $b9Result['9_2'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_2" value="3"
				<?php 
				if ($b9num > 0 && $b9Result['9_2'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_2" value="4"
				<?php 
				if ($b9num > 0 && $b9Result['9_2'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_2" value="5"
				<?php 
				if ($b9num > 0 && $b9Result['9_2'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b9num > 0) {
  					$scoreb9_2 = $b9Result['9_2'] * 1 / 5;
  					$score = $b9Result['9_2'] * 1 / 5;
  					if ($b9Result['9_2'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b9num > 0) {
  					include("score102.php");
  					if ($b9Result['9_2'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b9num > 0) {
  					if ($b9Result['9_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>9.3  ผู้ปกครองและชุมชนเข้ามามีส่วนร่วมในการพัฒนาสถานศึกษา</td>
  				<td><div align="center">
  				<input type="radio" name="txt9_3" value="1"
				<?php 
				if ($b9num > 0 && $b9Result['9_3'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_3" value="2"
				<?php 
				if ($b9num > 0 && $b9Result['9_3'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_3" value="3"
				<?php 
				if ($b9num > 0 && $b9Result['9_3'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_3" value="4"
				<?php 
				if ($b9num > 0 && $b9Result['9_3'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt9_3" value="5"
				<?php 
				if ($b9num > 0 && $b9Result['9_3'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b9num > 0) {
  					$scoreb9_3 = $b9Result['9_3'] * 2 / 5;
  					$score = $b9Result['9_3'] * 2 / 5;
  					if ($b9Result['9_3'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b9num > 0) {
  					include("score202.php");
  					if ($b9Result['9_3'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b9num > 0) {
  					if ($b9Result['9_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="7"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					if ($b9num > 0) {
					$score9 = array($scoreb9_1,$scoreb9_2,$scoreb9_3);
					$score = number_format(array_sum($score9), 2, '.', '');
					$score9sum = number_format(array_sum($score9), 2, '.', '');
					echo $score9sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b9num > 0) {
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