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

		$selc8 = mysql_query("SELECT *,SUM(8_1) AS total8_1,SUM(8_2) AS total8_2,SUM(8_3) AS total8_3,SUM(8_4) AS total8_4,SUM(8_5) AS total8_5,SUM(8_5) AS total8_6 FROM `c8` ");
		$c8num = mysql_num_rows($selc8);
		if ($c8num > 0) {
			$c8Result = mysql_fetch_array($selc8) or die  (mysql_error());
			$c8_1 = round($c8Result['total8_1'] / $c8num);
			$c8_2 = round($c8Result['total8_2'] / $c8num);
			$c8_3 = round($c8Result['total8_3'] / $c8num);
			$c8_4 = round($c8Result['total8_4'] / $c8num);
			$c8_5 = round($c8Result['total8_5'] / $c8num);
			$c8_6 = round($c8Result['total8_6'] / $c8num);
		}

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="childhood8add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>ผลการพัฒนามาตรฐานที่ 8 สถานศึกษามีการประกันคุณภาพภายในของสถานศึกษาตามที่กำหนดในกฎกระทรวง</h4></div></td>
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
  				<td>8.1 กำหนดมาตรฐานการศึกษาปฐมวัยของสถานศึกษา</td>
  				<td><div align="center">
  				<input type="radio" name="txt8_1" value="1"
				<?php 
				if ($c8num > 0 && $c8_1 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_1" value="2"
				<?php 
				if ($c8num > 0 && $c8_1 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_1" value="3"
				<?php 
				if ($c8num > 0 && $c8_1 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_1" value="4"
				<?php 
				if ($c8num > 0 && $c8_1 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_1" value="5"
				<?php 
				if ($c8num > 0 && $c8_1 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c8num > 0) {
  					$scorec8_1 = $c8_1 * 1 / 5;
  					$score = $c8_1 * 1 / 5;
  					if ($c8_1 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					include("score102.php");
  					if ($c8_1 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					if ($c8_1 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.2 จัดทำและดำเนินการตามแผนพัฒนาการจัดการศึกษาของสถานศึกษาที่มุ่งพัฒนาคุณภาพตามมาตรฐานการศึกษาของสถานศึกษา</td>
  				<td><div align="center">
  				<input type="radio" name="txt8_2" value="1"
				<?php 
				if ($c8num > 0 && $c8_2 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_2" value="2"
				<?php 
				if ($c8num > 0 && $c8_2 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_2" value="3"
				<?php 
				if ($c8num > 0 && $c8_2 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_2" value="4"
				<?php 
				if ($c8num > 0 && $c8_2 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_2" value="5"
				<?php 
				if ($c8num > 0 && $c8_2 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c8num > 0) {
  					$scorec8_2 = $c8_2 * 1 / 5;
  					$score = $c8_2 * 1 / 5;
  					if ($c8_2 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					include("score102.php");
  					if ($c8_2 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					if ($c8_2 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.3 จัดระบบข้อมูลสารสนเทศและใช้สารสนเทศในการบริหารจัดการ</td>
  				<td><div align="center">
  				<input type="radio" name="txt8_3" value="1"
				<?php 
				if ($c8num > 0 && $c8_3 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_3" value="2"
				<?php 
				if ($c8num > 0 && $c8_3 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_3" value="3"
				<?php 
				if ($c8num > 0 && $c8_3 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_3" value="4"
				<?php 
				if ($c8num > 0 && $c8_3 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_3" value="5"
				<?php 
				if ($c8num > 0 && $c8_3 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c8num > 0) {
  					$scorec8_3 = $c8_3 * 1 / 5;
  					$score = $c8_3 * 1 / 5;
  					if ($c8_3 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					include("score102.php");
  					if ($c8_3 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					if ($c8_3 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.4 ติดตามตรวจสอบ และประเมินผลการดำเนินงานคุณภาพภายในตามมาตรฐานการศึกษาของสถานศึกษา</td>
  				<td><div align="center">
  				<input type="radio" name="txt8_4" value="1"
				<?php 
				if ($c8num > 0 && $c8_4 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_4" value="2"
				<?php 
				if ($c8num > 0 && $c8_4 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_4" value="3"
				<?php 
				if ($c8num > 0 && $c8_4 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_4" value="4"
				<?php 
				if ($c8num > 0 && $c8_4 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_4" value="5"
				<?php 
				if ($c8num > 0 && $c8_4 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c8num > 0) {
  					$scorec8_4 = $c8_4 * 0.5 / 5;
  					$score = $c8_4 * 0.5 / 5;
  					if ($c8_4 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					include("score05.php");
  					if ($c8_4 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					if ($c8_4 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.5 นำผลการประเมินคุณภาพทั้งภายในและภายนอกไปใช้วางแผนพัฒนาคุณภาพการศึกษาอย่างต่อเนื่อง</td>
  				<td><div align="center">
  				<input type="radio" name="txt8_5" value="1"
				<?php 
				if ($c8num > 0 && $c8_5 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_5" value="2"
				<?php 
				if ($c8num > 0 && $c8_5 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_5" value="3"
				<?php 
				if ($c8num > 0 && $c8_5 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_5" value="4"
				<?php 
				if ($c8num > 0 && $c8_5 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_5" value="5"
				<?php 
				if ($c8num > 0 && $c8_5 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c8num > 0) {
  					$scorec8_5 = $c8_5 * 0.5 / 5;
  					$score = $c8_5 * 0.5 / 5;
  					if ($c8_5 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					include("score05.php");
  					if ($c8_5 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					if ($c8_5 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.6 จัดทำรายงานประจำปีที่เป็นรายงานการประเมินคุณภาพภายใน</td>
  				<td><div align="center">
  				<input type="radio" name="txt8_6" value="1"
				<?php 
				if ($c8num > 0 && $c8_6 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_6" value="2"
				<?php 
				if ($c8num > 0 && $c8_6 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_6" value="3"
				<?php 
				if ($c8num > 0 && $c8_6 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_6" value="4"
				<?php 
				if ($c8num > 0 && $c8_6 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt8_6" value="5"
				<?php 
				if ($c8num > 0 && $c8_6 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c8num > 0) {
  					$scorec8_6 = $c8_6 * 1 / 5;
  					$score = $c8_6 * 1 / 5;
  					if ($c8_6 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					include("score102.php");
  					if ($c8_6 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c8num > 0) {
  					if ($c8_6 != 0) {
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
					if ($c8num > 0) {
					$score8 = array($scorec8_1,$scorec8_2,$scorec8_3,$scorec8_4,$scorec8_5,$scorec8_6);
					$score = number_format(array_sum($score8), 2, '.', '');
					$score8sum = number_format(array_sum($score8), 2, '.', '');
					echo $score8sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($c8num > 0) {
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