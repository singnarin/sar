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

		$selc7 = mysql_query("SELECT *, SUM(7_1) AS total7_1,SUM(7_2) AS total7_2,SUM(7_3) AS total7_3,SUM(7_4) AS total7_4,SUM(7_5) AS total7_5  FROM `c7` ");
		$c7num = mysql_num_rows($selc7);
		if ($c7num > 0) {
			$c7Result = mysql_fetch_array($selc7) or die  (mysql_error());
			$c7_1 = round($c7Result['total7_1'] / $c7num);
			$c7_2 = round($c7Result['total7_2'] / $c7num);
			$c7_3 = round($c7Result['total7_3'] / $c7num);
			$c7_4 = round($c7Result['total7_4'] / $c7num);
			$c7_5 = round($c7Result['total7_5'] / $c7num);
		}

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="childhood7add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>ผลการพัฒนามาตรฐานที่ 7 แนวการจัดการศึกษา</h4></div></td>
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
  				<td>7.1 มีหลักสูตรการศึกษาปฐมวัยของสถานศึกษาและนำสู่การปฏิบัติได้อย่างมีประสิทธิภาพ</td>
  				<td><div align="center">
  				<input type="radio" name="txt7_1" value="1"
				<?php 
				if ($c7num > 0 && $c7_1 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_1" value="2"
				<?php 
				if ($c7num > 0 && $c7_1 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_1" value="3"
				<?php 
				if ($c7num > 0 && $c7_1 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_1" value="4"
				<?php 
				if ($c7num > 0 && $c7_1 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_1" value="5"
				<?php 
				if ($c7num > 0 && $c7_1 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c7num > 0) {
  					$scorec7_1 = $c7_1 * 4 / 5;
  					$score = $c7_1 * 4 / 5;
  					if ($c7_1 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					include("score4.php");
  					if ($c7_1 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					if ($c7_1 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.2 มีระบบและกลไกให้ผู้มีส่วนร่วมทุกฝ่ายตระหนักและเข้าใจการจัดการศึกษาปฐมวัย</td>
  				<td><div align="center">
  				<input type="radio" name="txt7_2" value="1"
				<?php 
				if ($c7num > 0 && $c7_2 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_2" value="2"
				<?php 
				if ($c7num > 0 && $c7_2 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_2" value="3"
				<?php 
				if ($c7num > 0 && $c7_2 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_2" value="4"
				<?php 
				if ($c7num > 0 && $c7_2 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_2" value="5"
				<?php 
				if ($c7num > 0 && $c7_2 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c7num > 0) {
  					$scorec7_2 = $c7_2 * 4 / 5;
  					$score = $c7_2 * 4 / 5;
  					if ($c7_2 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					include("score4.php");
  					if ($c7_2 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					if ($c7_2 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.3 จัดกิจกรรมเสริมสร้างความตระหนักรู้และความเข้าใจหลักการจัดการศึกษาปฐมวัย</td>
  				<td><div align="center">
  				<input type="radio" name="txt7_3" value="1"
				<?php 
				if ($c7num > 0 && $c7_3 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_3" value="2"
				<?php 
				if ($c7num > 0 && $c7_3 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_3" value="3"
				<?php 
				if ($c7num > 0 && $c7_3 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_3" value="4"
				<?php 
				if ($c7num > 0 && $c7_3 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_3" value="5"
				<?php 
				if ($c7num > 0 && $c7_3 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c7num > 0) {
  					$scorec7_3 = $c7_3 * 4 / 5;
  					$score = $c7_3 * 4 / 5;
  					if ($c7_3 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					include("score4.php");
  					if ($c7_3 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					if ($c7_3 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.4 สร้างการมีส่วนร่วมและแสวงหาความร่วมมือกับผู้ปกครอง  ชุมชน และท้องถิ่น</td>
  				<td><div align="center">
  				<input type="radio" name="txt7_4" value="1"
				<?php 
				if ($c7num > 0 && $c7_4 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_4" value="2"
				<?php 
				if ($c7num > 0 && $c7_4 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_4" value="3"
				<?php 
				if ($c7num > 0 && $c7_4 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_4" value="4"
				<?php 
				if ($c7num > 0 && $c7_4 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_4" value="5"
				<?php 
				if ($c7num > 0 && $c7_4 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c7num > 0) {
  					$scorec7_4 = $c7_4 * 4 / 5;
  					$score = $c7_4 * 4 / 5;
  					if ($c7_4 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					include("score4.php");
  					if ($c7_4 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					if ($c7_4 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.5 จัดสิ่งอำนวยความสะดวกเพื่อพัฒนาเด็กอย่างรอบด้าน</td>
  				<td><div align="center">
  				<input type="radio" name="txt7_5" value="1"
				<?php 
				if ($c7num > 0 && $c7_5 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_5" value="2"
				<?php 
				if ($c7num > 0 && $c7_5 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_5" value="3"
				<?php 
				if ($c7num > 0 && $c7_5 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_5" value="4"
				<?php 
				if ($c7num > 0 && $c7_5 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt7_5" value="5"
				<?php 
				if ($c7num > 0 && $c7_5 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c7num > 0) {
  					$scorec7_5 = $c7_5 * 4 / 5;
  					$score = $c7_5 * 4 / 5;
  					if ($c7_5 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					include("score4.php");
  					if ($c7_5 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c7num > 0) {
  					if ($c7_5 != 0) {
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
					if ($c7num > 0) {
					$score7 = array($scorec7_1,$scorec7_2,$scorec7_3,$scorec7_4,$scorec7_5);
					$score = number_format(array_sum($score7), 2, '.', '');
					$score7sum = number_format(array_sum($score7), 2, '.', '');
					echo $score7sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($c7num > 0) {
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