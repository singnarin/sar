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

		$selb5 = mysql_query("SELECT  SUM(5_1) AS total5_1, SUM(5_2) AS total5_2, SUM(5_3) AS total5_3, SUM(5_4) AS total5_4 FROM `b5` ");
		$b5num = mysql_num_rows($selb5);
		if ($b5num > 0) {
			$b5Result = mysql_fetch_array($selb5) or die  (mysql_error());
			$b5_1 = round($b5Result['total5_1'] / $b5num);
			$b5_2 = round($b5Result['total5_2'] / $b5num);
			$b5_3 = round($b5Result['total5_3'] / $b5num);
			$b5_4 = round($b5Result['total5_4'] / $b5num);
		}

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic5add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 5 ผู้เรียนมีความรู้และทักษะที่จำเป็นตามหลักสูตร</h4></div></td>
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
  				<td>5.1 ผลสัมฤทธิ์ทางการเรียนเฉลี่ยแต่ละกลุ่มสาระ เป็นไปตามเกณฑ์ </td>
  				<td><div align="center">
  				<input type="radio" name="txt5_1" value="1"
				<?php 
				if ($b5num > 0 && $b5_1 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_1" value="2"
				<?php 
				if ($b5num > 0 && $b5_1 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_1" value="3"
				<?php 
				if ($b5num > 0 && $b5_1 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_1" value="4"
				<?php 
				if ($b5num > 0 && $b5_1 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_1" value="5"
				<?php 
				if ($b5num > 0 && $b5_1 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b5num > 0) {
  					$scoreb5_1 = $b5_1 * 1 / 5;
  					$score = $b5_1 * 1 / 5;
  					if ($b5_1 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					include("score102.php");
  					if ($b5_1 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					if ($b5_1 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.2 ผลการประเมินสมรรถนะสำคัญตามหลักสูตร เป็นไปตามเกณฑ์</td>
  				<td><div align="center">
  				<input type="radio" name="txt5_2" value="1"
				<?php 
				if ($b5num > 0 && $b5_2 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_2" value="2"
				<?php 
				if ($b5num > 0 && $b5_2 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_2" value="3"
				<?php 
				if ($b5num > 0 && $b5_2 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_2" value="4"
				<?php 
				if ($b5num > 0 && $b5_2 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_2" value="5"
				<?php 
				if ($b5num > 0 && $b5_2 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b5num > 0) {
  					$scoreb5_2 = $b5_2 * 1 / 5;
  					$score = $b5_2 * 1 / 5;
  					if ($b5_2 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					include("score102.php");
  					if ($b5_2 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					if ($b5_2 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.3 ผลการประเมินการอ่าน คิดวิเคราะห์ และเขียน เป็นไปตามเกณฑ์</td>
  				<td><div align="center">
  				<input type="radio" name="txt5_3" value="1"
				<?php 
				if ($b5num > 0 && $b5_3 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_3" value="2"
				<?php 
				if ($b5num > 0 && $b5_3 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_3" value="3"
				<?php 
				if ($b5num > 0 && $b5_3 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_3" value="4"
				<?php 
				if ($b5num > 0 && $b5_3 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_3" value="5"
				<?php 
				if ($b5num > 0 && $b5_3 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b5num > 0) {
  					$scoreb5_3 = $b5_3 * 2 / 5;
  					$score = $b5_3 * 2 / 5;
  					if ($b5_3 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					include("score202.php");
  					if ($b5_3 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					if ($b5_3 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.4 ผลการทดสอบระดับชาติ เป็นไปตามเกณฑ์</td>
  				<td><div align="center">
  				<input type="radio" name="txt5_4" value="1"
				<?php 
				if ($b5num > 0 && $b5_4 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_4" value="2"
				<?php 
				if ($b5num > 0 && $b5_4 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_4" value="3"
				<?php 
				if ($b5num > 0 && $b5_4 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_4" value="4"
				<?php 
				if ($b5num > 0 && $b5_4 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt5_4" value="5"
				<?php 
				if ($b5num > 0 && $b5_4 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b5num > 0) {
  					$scoreb5_4 = $b5_4 * 1 / 5;
  					$score = $b5_4 * 1 / 5;
  					if ($b5_4 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					include("score101.php");
  					if ($b5_4 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5num > 0) {
  					if ($b5_4 != 0) {
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
					if ($b5num > 0) {
					$score5 = array($scoreb5_1,$scoreb5_2,$scoreb5_3,$scoreb5_4);
					$score = number_format(array_sum($score5), 2, '.', '');
					$score5sum = number_format(array_sum($score5), 2, '.', '');
					echo $score5sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b5num > 0) {
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