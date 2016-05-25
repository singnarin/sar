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

		$selb10 = mysql_query("SELECT  SUM(10_1) AS total10_1, SUM(10_2) AS total10_2, SUM(10_3) AS total10_3, SUM(10_4) AS total10_4, SUM(10_5) AS total10_5, SUM(10_6) AS total10_6 FROM `b10` ");
		$b10num = mysql_num_rows($selb10);
		if ($b10num > 0) {
			$b10Result = mysql_fetch_array($selb10) or die  (mysql_error());
			$b10_1 = round($b10Result['total10_1'] / $b10num);
			$b10_2 = round($b10Result['total10_2'] / $b10num);
			$b10_3 = round($b10Result['total10_3'] / $b10num);
			$b10_4 = round($b10Result['total10_4'] / $b10num);
			$b10_5 = round($b10Result['total10_5'] / $b10num);
			$b10_6 = round($b10Result['total10_6'] / $b10num);
		}

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic10add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 10 สถานศึกษามีการจัดหลักสูตร กระบวนการเรียนรู้ และกิจกรรมพัฒนาคุณภาพผู้เรียนอย่างรอบด้าน</h4></div></td>
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
  				<td>10.1  หลักสูตรสถานศึกษาเหมาะสมและสอดคล้องกับท้องถิ่น</td>
  				<td><div align="center">
  				<input type="radio" name="txt10_1" value="1"
				<?php 
				if ($b10num > 0 && $b10_1 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_1" value="2"
				<?php 
				if ($b10num > 0 && $b10_1 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_1" value="3"
				<?php 
				if ($b10num > 0 && $b10_1 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_1" value="4"
				<?php 
				if ($b10num > 0 && $b10_1 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_1" value="5"
				<?php 
				if ($b10num > 0 && $b10_1 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b10num > 0) {
  					$scoreb10_1 = $b10_1 * 2 / 5;
  					$score = $b10_1 * 2 / 5;
  					if ($b10_1 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					include("score202.php");
  					if ($b10_1 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					if ($b10_1 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.2  จัดรายวิชาเพิ่มเติมที่หลากหลายให้ผู้เรียนเลือกเรียนตามความถนัดความสามารถ และความสนใจ</td>
  				<td><div align="center">
  				<input type="radio" name="txt10_2" value="1"
				<?php 
				if ($b10num > 0 && $b10_2 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_2" value="2"
				<?php 
				if ($b10num > 0 && $b10_2 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_2" value="3"
				<?php 
				if ($b10num > 0 && $b10_2 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_2" value="4"
				<?php 
				if ($b10num > 0 && $b10_2 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_2" value="5"
				<?php 
				if ($b10num > 0 && $b10_2 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b10num > 0) {
  					$scoreb10_2 = $b10_2 * 2 / 5;
  					$score = $b10_2 * 2 / 5;
  					if ($b10_2 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					include("score202.php");
  					if ($b10_2 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					if ($b10_2 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.3 จัดกิจกรรมพัฒนาผู้เรียนที่ส่งเสริมและตอบสนองความต้องการ ความสามารถ ความถนัด และความสนใจของผู้เรียน</td>
  				<td><div align="center">
  				<input type="radio" name="txt10_3" value="1"
				<?php 
				if ($b10num > 0 && $b10_3 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_3" value="2"
				<?php 
				if ($b10num > 0 && $b10_3 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_3" value="3"
				<?php 
				if ($b10num > 0 && $b10_3 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_3" value="4"
				<?php 
				if ($b10num > 0 && $b10_3 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_3" value="5"
				<?php 
				if ($b10num > 0 && $b10_3 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b10num > 0) {
  					$scoreb10_3 = $b10_3 * 1 / 5;
  					$score = $b10_3 * 1 / 5;
  					if ($b10_3 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					include("score102.php");
  					if ($b10_3 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					if ($b10_3 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.4 สนับสนุนให้ครูจัดกระบวนการเรียนรู้ที่ให้ผู้เรียนได้ลงมือปฏิบัติจริงจนสรุปความรู้ได้ด้วยตนเอง</td>
  				<td><div align="center">
  				<input type="radio" name="txt10_4" value="1"
				<?php 
				if ($b10num > 0 && $b10_4 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_4" value="2"
				<?php 
				if ($b10num > 0 && $b10_4 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_4" value="3"
				<?php 
				if ($b10num > 0 && $b10_4 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_4" value="4"
				<?php 
				if ($b10num > 0 && $b10_4 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_4" value="5"
				<?php 
				if ($b10num > 0 && $b10_4 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b10num > 0) {
  					$scoreb10_4 = $b10_4 * 1 / 5;
  					$score = $b10_4 * 1 / 5;
  					if ($b10_4 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					include("score102.php");
  					if ($b10_4 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					if ($b10_4 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.5 นิเทศภายใน กำกับ ติดตามตรวจสอบ และนำผลไปปรับปรุงการเรียนการสอนอย่างสม่ำเสมอ</td>
  				<td><div align="center">
  				<input type="radio" name="txt10_5" value="1"
				<?php 
				if ($b10num > 0 && $b10_5 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_5" value="2"
				<?php 
				if ($b10num > 0 && $b10_5 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_5" value="3"
				<?php 
				if ($b10num > 0 && $b10_5 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_5" value="4"
				<?php 
				if ($b10num > 0 && $b10_5 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_5" value="5"
				<?php 
				if ($b10num > 0 && $b10_5 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b10num > 0) {
  					$scoreb10_5 = $b10_5 * 2 / 5;
  					$score = $b10_5 * 2 / 5;
  					if ($b10_5 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					include("score202.php");
  					if ($b10_5 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					if ($b10_5 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.6 จัดระบบดูแลช่วยเหลือผู้เรียนที่มีประสิทธิภาพและครอบคลุมถึงผู้เรียนทุกคน</td>
  				<td><div align="center">
  				<input type="radio" name="txt10_6" value="1"
				<?php 
				if ($b10num > 0 && $b10_6 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_6" value="2"
				<?php 
				if ($b10num > 0 && $b10_6 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_6" value="3"
				<?php 
				if ($b10num > 0 && $b10_6 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_6" value="4"
				<?php 
				if ($b10num > 0 && $b10_6 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt10_6" value="5"
				<?php 
				if ($b10num > 0 && $b10_6 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b10num > 0) {
  					$scoreb10_6 = $b10_6 * 2 / 5;
  					$score = $b10_6 * 2 / 5;
  					if ($b10_6 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					include("score202.php");
  					if ($b10_6 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10num > 0) {
  					if ($b10_6 != 0) {
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
					if ($b10num > 0) {
					$score10 = array($scoreb10_1,$scoreb10_2,$scoreb10_3,$scoreb10_4,$scoreb10_6,$scoreb10_5);
					$score = number_format(array_sum($score10), 2, '.', '');
					$score10sum = number_format(array_sum($score10), 2, '.', '');
					echo $score10sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b10num > 0) {
  					include("score10.php");
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