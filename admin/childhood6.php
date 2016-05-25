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
					echo "<meta http-equiv='refresh' content='0;URL=childhood6admin.php'>";
				}else{
		$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());

		$selc6 = mysql_query("SELECT * FROM `c6` WHERE `schoolid` = '".$_POST['txtschoolid']."'");
		$c6num = mysql_num_rows($selc6);
		if ($c6num > 0) {
			$c6Result = mysql_fetch_array($selc6) or die  (mysql_error());
		}

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="childhood6add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>ผลการพัฒนามาตรฐานที่ 6 ผู้บริหารปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h4></div></td>
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
  				<td>6.1 ผู้บริหารเข้าใจปรัชญาและหลักการจัดการศึกษาปฐมวัย</td>
  				<td><div align="center">
  				<input type="radio" name="txt6_1" value="1"
				<?php 
				if ($c6num > 0 && $c6Result['6_1'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_1" value="2"
				<?php 
				if ($c6num > 0 && $c6Result['6_1'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_1" value="3"
				<?php 
				if ($c6num > 0 && $c6Result['6_1'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_1" value="4"
				<?php 
				if ($c6num > 0 && $c6Result['6_1'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_1" value="5"
				<?php 
				if ($c6num > 0 && $c6Result['6_1'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c6num > 0) {
  					$scorec6_1 = $c6Result['6_1'] * 3 / 5;
  					$score = $c6Result['6_1'] * 3 / 5;
  					if ($c6Result['6_1'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					include("score3.php");
  					if ($c6Result['6_1'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					if ($c6Result['6_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.2 ผู้บริหารมีวิสัยทัศน์ ภาวะผู้นำ และความคิดริเริ่มที่เน้นการพัฒนาเด็กปฐมวัย</td>
  				<td><div align="center">
  				<input type="radio" name="txt6_2" value="1"
				<?php 
				if ($c6num > 0 && $c6Result['6_2'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_2" value="2"
				<?php 
				if ($c6num > 0 && $c6Result['6_2'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_2" value="3"
				<?php 
				if ($c6num > 0 && $c6Result['6_2'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_2" value="4"
				<?php 
				if ($c6num > 0 && $c6Result['6_2'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_2" value="5"
				<?php 
				if ($c6num > 0 && $c6Result['6_2'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c6num > 0) {
  					$scorec6_2 = $c6Result['6_2'] * 3 / 5;
  					$score = $c6Result['6_2'] * 3 / 5;
  					if ($c6Result['6_2'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					include("score3.php");
  					if ($c6Result['6_2'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					if ($c6Result['6_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.3 ผู้บริหารใช้หลักการบริหารแบบมีส่วนร่วมและใช้ข้อมูลการประเมินผลหรือการวิจัยเป็นฐานคิดทั้งด้านวิชาการและการจัดการ</td>
  				<td><div align="center">
  				<input type="radio" name="txt6_3" value="1"
				<?php 
				if ($c6num > 0 && $c6Result['6_3'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_3" value="2"
				<?php 
				if ($c6num > 0 && $c6Result['6_3'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_3" value="3"
				<?php 
				if ($c6num > 0 && $c6Result['6_3'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_3" value="4"
				<?php 
				if ($c6num > 0 && $c6Result['6_3'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_3" value="5"
				<?php 
				if ($c6num > 0 && $c6Result['6_3'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c6num > 0) {
  					$scorec6_3 = $c6Result['6_3'] * 3 / 5;
  					$score = $c6Result['6_3'] * 3 / 5;
  					if ($c6Result['6_3'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					include("score3.php");
  					if ($c6Result['6_3'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					if ($c6Result['6_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.4 ผู้บริหารสามารถบริหารจัดการการศึกษาให้บรรลุเป้าหมายตามแผนพัฒนาคุณภาพสถานศึกษา</td>
  				<td><div align="center">
  				<input type="radio" name="txt6_4" value="1"
				<?php 
				if ($c6num > 0 && $c6Result['6_4'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_4" value="2"
				<?php 
				if ($c6num > 0 && $c6Result['6_4'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_4" value="3"
				<?php 
				if ($c6num > 0 && $c6Result['6_4'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_4" value="4"
				<?php 
				if ($c6num > 0 && $c6Result['6_4'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_4" value="5"
				<?php 
				if ($c6num > 0 && $c6Result['6_4'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c6num > 0) {
  					$scorec6_4 = $c6Result['6_4'] * 3 / 5;
  					$score = $c6Result['6_4'] * 3 / 5;
  					if ($c6Result['6_4'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					include("score3.php");
  					if ($c6Result['6_4'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					if ($c6Result['6_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.5 ผู้บริหารส่งเสริมและพัฒนาศักยภาพบุคลากรให้มีประสิทธิภาพ</td>
  				<td><div align="center">
  				<input type="radio" name="txt6_5" value="1"
				<?php 
				if ($c6num > 0 && $c6Result['6_5'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_5" value="2"
				<?php 
				if ($c6num > 0 && $c6Result['6_5'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_5" value="3"
				<?php 
				if ($c6num > 0 && $c6Result['6_5'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_5" value="4"
				<?php 
				if ($c6num > 0 && $c6Result['6_5'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_5" value="5"
				<?php 
				if ($c6num > 0 && $c6Result['6_5'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c6num > 0) {
  					$scorec6_5 = $c6Result['6_5'] * 3 / 5;
  					$score = $c6Result['6_5'] * 3 / 5;
  					if ($c6Result['6_5'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					include("score3.php");
  					if ($c6Result['6_5'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					if ($c6Result['6_5'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.6 ผู้บริหารให้คำแนะนำ คำปรึกษาทางวิชาการและเอาใจใส่การจัดการศึกษา ปฐมวัยเต็มศักยภาพและเต็มเวลา</td>
  				<td><div align="center">
  				<input type="radio" name="txt6_6" value="1"
				<?php 
				if ($c6num > 0 && $c6Result['6_6'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_6" value="2"
				<?php 
				if ($c6num > 0 && $c6Result['6_6'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_6" value="3"
				<?php 
				if ($c6num > 0 && $c6Result['6_6'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_6" value="4"
				<?php 
				if ($c6num > 0 && $c6Result['6_6'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_6" value="5"
				<?php 
				if ($c6num > 0 && $c6Result['6_6'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c6num > 0) {
  					$scorec6_6 = $c6Result['6_6'] * 3 / 5;
  					$score = $c6Result['6_6'] * 3 / 5;
  					if ($c6Result['6_6'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					include("score3.php");
  					if ($c6Result['6_6'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					if ($c6Result['6_6'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.7 เด็ก ผู้ปกครอง และชุมชนพึงพอใจผลการบริหารจัดการศึกษาปฐมวัย</td>
  				<td><div align="center">
  				<input type="radio" name="txt6_7" value="1"
				<?php 
				if ($c6num > 0 && $c6Result['6_7'] == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_7" value="2"
				<?php 
				if ($c6num > 0 && $c6Result['6_7'] == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_7" value="3"
				<?php 
				if ($c6num > 0 && $c6Result['6_7'] == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_7" value="4"
				<?php 
				if ($c6num > 0 && $c6Result['6_7'] == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt6_7" value="5"
				<?php 
				if ($c6num > 0 && $c6Result['6_7'] == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($c6num > 0) {
  					$scorec6_7 = $c6Result['6_7'] * 2 / 5;
  					$score = $c6Result['6_7'] * 2 / 5;
  					if ($c6Result['6_7'] != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					include("score202.php");
  					if ($c6Result['6_7'] != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($c6num > 0) {
  					if ($c6Result['6_7'] != 0) {
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
					if ($c6num > 0) {
					$score6 = array($scorec6_1,$scorec6_2,$scorec6_3,$scorec6_4,$scorec6_5,$scorec6_6,$scorec6_7);
					$score = number_format(array_sum($score6), 2, '.', '');
					$score6sum = number_format(array_sum($score6), 2, '.', '');
					echo $score6sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($c6num > 0) {
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
		echo "<meta http-equiv='refresh' content='0;URL=childhood6sel.php'>";
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