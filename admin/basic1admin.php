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

		$selb1 = mysql_query("SELECT SUM(1_1_1) AS total1_1_1,SUM(1_1_2) AS total1_1_2,SUM(1_1_3) AS total1_1_3,SUM(1_1_4) AS total1_1_4,SUM(1_1_5) AS total1_1_5,SUM(1_2_1) AS total1_2_1,SUM(1_2_2) AS total1_2_2,SUM(1_2_3) AS total1_2_3,SUM(1_2_4) AS total1_2_4,SUM(1_2_5) AS total1_2_5,SUM(1_3_1) AS total1_3_1,SUM(1_3_2) AS total1_3_2,SUM(1_3_3) AS total1_3_3,SUM(1_3_4) AS total1_3_4,SUM(1_3_5) AS total1_3_5,SUM(1_4_1) AS total1_4_1,SUM(1_4_2) AS total1_4_2,SUM(1_4_3) AS total1_4_3,SUM(1_4_4) AS total1_4_4,SUM(1_4_5) AS total1_4_5,SUM(1_5_1) AS total1_5_1,SUM(1_5_2) AS total1_5_2,SUM(1_5_3) AS total1_5_3,SUM(1_5_4) AS total1_5_4,SUM(1_5_5) AS total1_5_5,SUM(1_6_1) AS total1_6_1,SUM(1_6_2) AS total1_6_2,SUM(1_6_3) AS total1_6_3,SUM(1_6_4) AS total1_6_4,SUM(1_6_5) AS total1_6_5 FROM `b1`");
		$b1num = mysql_num_rows($selb1);
		if ($b1num > 0) {
			$b1Result = mysql_fetch_array($selb1) or die  (mysql_error());
		}
include("include/sumstudentadmin.php");
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic1add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 1 ผู้เรียนมีสุขภาวะที่ดีและมีสุนทรียภาพ</h4></div></td>
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
  				<td>1.1 มีสุขนิสัยในการดูแลสุขภาพและออกกำลังกาย สม่ำเสมอ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt1_1_1" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_2" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_3" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_4" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_5" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b1num > 0) {
  					$up1_1 = array($b1Result['total1_1_3'],$b1Result['total1_1_4'],$b1Result['total1_1_5']);
					echo array_sum($up1_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				if ($b1num > 0 && $sumb != 0) {
  					$persen1_1 = array_sum($up1_1) * 100 / $sumb;
  					$score1_1 = round($persen1_1,2) * 0.5 / 100;
  					echo round($score1_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$score = round($persen1_1,2) * 0.5 / 100;
  					include("scoreb05.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.2 มีน้ำหนัก ส่วนสูง และมีสมรรถภาพทางกายตามเกณฑ์มาตรฐาน</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt1_2_1" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_2" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_3" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_4" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_5" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b1num > 0) {
  					$up1_2 = array($b1Result['total1_2_3'],$b1Result['total1_2_4'],$b1Result['total1_2_5']);
					echo array_sum($up1_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$persen1_2 = array_sum($up1_2) * 100 / $sumb;
  					$score1_2 = round($persen1_2,2) * 0.5 / 100;
  					echo round($score1_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$score = round($persen1_2,2) * 0.5 / 100;
  					include("scoreb05.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.3 ป้องกันตนเองจากสิ่งเสพติดให้โทษและหลีกเลี่ยงตนเองจากสภาวะที่เสี่ยงต่อความรุนแรง โรค ภัย อุบัติเหตุ และปัญหาทางเพศ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt1_3_1" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_2" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_3" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_4" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_5" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b1num > 0) {
  					$up1_3 = array($b1Result['total1_3_3'],$b1Result['total1_3_4'],$b1Result['total1_3_5']);
					echo array_sum($up1_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$persen1_3 = array_sum($up1_3) * 100 / $sumb;
  					$score1_3 = round($persen1_3,2) * 1 / 100;
  					echo round($score1_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$score = round($persen1_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.4 เห็นคุณค่าในตนเอง มีความมั่นใจ กล้าแสดงออกอย่างเหมาะสม</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt1_4_1" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_2" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_3" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_4" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_5" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b1num > 0) {
  					$up1_4 = array($b1Result['total1_4_3'],$b1Result['total1_4_4'],$b1Result['total1_4_5']);
					echo array_sum($up1_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$persen1_4 = array_sum($up1_4) * 100 / $sumb;
  					$score1_4 = round($persen1_4,2) * 1.0 / 100;
  					echo round($score1_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$score = round($persen1_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.5 มีมนุษยสัมพันธ์ที่ดีและให้เกียรติผู้อื่น</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt1_5_1" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_5_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_5_2" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_5_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_5_3" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_5_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_5_4" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_5_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_5_5" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_5_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b1num > 0) {
  					$up1_5 = array($b1Result['total1_5_3'],$b1Result['total1_5_4'],$b1Result['total1_5_5']);
					echo array_sum($up1_5);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$persen1_5 = array_sum($up1_5) * 100 / $sumb;
  					$score1_5 = round($persen1_5,2) * 1.0 / 100;
  					echo round($score1_5,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$score = round($persen1_5,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.6 สร้างผลงานจากเข้าร่วมกิจกรรมด้านศิลปะ ดนตรี/นาฏศิลป์ กีฬา/นันทนาการ  ตามจินตนาการ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><input type="text" name="txt1_6_1" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_6_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_6_2" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_6_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_6_3" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_6_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_6_4" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_6_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_6_5" class="input-mini"
				<?php 
				if ($b1num > 0) {
						echo "value=\"".$b1Result['total1_6_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($b1num > 0) {
  					$up1_6 = array($b1Result['total1_6_3'],$b1Result['total1_6_4'],$b1Result['total1_6_5']);
					echo array_sum($up1_6);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$persen1_6 = array_sum($up1_6) * 100 / $sumb;
  					$score1_6 = round($persen1_6,2) * 1.0 / 100;
  					echo round($score1_6,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b1num > 0 && $sumb != 0) {
  					$score = round($persen1_6,2) * 1.0 / 100;
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
					if ($b1num > 0 && $sumb != 0) {
					$score1 = array($score1_1,$score1_2,$score1_3,$score1_4,$score1_5,$score1_6);
					$score = number_format(array_sum($score1), 2, '.', '');
					$score1sum = number_format(array_sum($score1), 2, '.', ''); 
					echo $score1sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b1num > 0 && $sumb != 0) {
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