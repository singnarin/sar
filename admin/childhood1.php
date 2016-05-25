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
					echo "<meta http-equiv='refresh' content='0;URL=childhood1admin.php'>";
				}else{
		$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());

		$selc1 = mysql_query("SELECT * FROM `c1` WHERE `schoolid` = '".$_POST['txtschoolid']."'");
		$c1num = mysql_num_rows($selc1);
		if ($c1num > 0) {
			$c1Result = mysql_fetch_array($selc1) or die  (mysql_error());
		}
include("include/sumstudent.php");
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="childhood1add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>ผลการพัฒนามาตรฐานที่ 1 เด็กมีพัฒนาการด้านร่างกาย</h4></div></td>
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
  				<td>1.1 มีน้ำหนักส่วนสูงเป็นไปตามเกณฑ์มาตรฐาน</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt1_1_1" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_1_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_2" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_1_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_3" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_1_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_4" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_1_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_1_5" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_1_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c1num > 0) {
  					$up1_1 = array($c1Result['1_1_3'],$c1Result['1_1_4'],$c1Result['1_1_5']);
					echo array_sum($up1_1);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				if ($c1num > 0 && $sumo != 0) {
  					$persen1_1 = array_sum($up1_1) * 100 / $sumo;
  					$score1_1 = round($persen1_1,2) * 1.0 / 100;
  					echo round($score1_1,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c1num > 0 && $sumo != 0) {
  					$score = round($persen1_1,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.2 มีทักษะการเคลื่อนไหวตามวัย</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt1_2_1" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_2_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_2" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_2_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_3" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_2_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_4" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_2_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_2_5" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_2_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c1num > 0) {
  					$up1_2 = array($c1Result['1_2_3'],$c1Result['1_2_4'],$c1Result['1_2_5']);
					echo array_sum($up1_2);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c1num > 0 && $sumo != 0) {
  					$persen1_2 = array_sum($up1_2) * 100 / $sumo;
  					$score1_2 = round($persen1_2,2) * 1.5 / 100;
  					echo round($score1_2,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c1num > 0 && $sumo != 0) {
  					$score = round($persen1_2,2) * 1.5 / 100;
  					include("score15.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.3 มีสุขนิสัยในการดูแลสุขภาพของตน</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt1_3_1" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_3_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_2" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_3_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_3" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_3_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_4" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_3_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_3_5" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_3_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c1num > 0) {
  					$up1_3 = array($c1Result['1_3_3'],$c1Result['1_3_4'],$c1Result['1_3_5']);
					echo array_sum($up1_3);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c1num > 0 && $sumo != 0) {
  					$persen1_3 = array_sum($up1_3) * 100 / $sumo;
  					$score1_3 = round($persen1_3,2) * 1.5 / 100;
  					echo round($score1_3,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c1num > 0 && $sumo != 0) {
  					$score = round($persen1_3,2) * 1.5 / 100;
  					include("score15.php");
  					echo $degree;
  					unset($degree);
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.4 หลีกเลี่ยงต่อสภาวะที่เสี่ยงต่อโรค อุบัติเหตุ ภัย และสิ่งเสพติด</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><input type="text" name="txt1_4_1" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_4_1']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_2" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_4_2']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_3" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_4_3']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_4" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_4_4']."\"";
						}
				?>
				/></td>
  				<td><input type="text" name="txt1_4_5" class="input-mini"
				<?php 
				if ($c1num > 0) {
						echo "value=\"".$c1Result['1_4_5']."\"";
						}
				?>
				/></td>
  				<td><div align="center">
  				<?php 
  				if ($c1num > 0) {
  					$up1_4 = array($c1Result['1_4_3'],$c1Result['1_4_4'],$c1Result['1_4_5']);
					echo array_sum($up1_4);
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c1num > 0 && $sumo != 0) {
  					$persen1_4 = array_sum($up1_4) * 100 / $sumo;
  					$score1_4 = round($persen1_4,2) * 1.0 / 100;
  					echo round($score1_4,2);
  				}
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				if ($c1num > 0 && $sumo != 0) {
  					$score = round($persen1_4,2) * 1.0 / 100;
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
					if ($c1num > 0 && $sumo != 0) {
					$score1 = array($score1_1,$score1_2,$score1_3,$score1_4);
					$score = number_format(array_sum($score1), 2, '.', '');
					$score1sum = number_format(array_sum($score1), 2, '.', ''); 
					echo $score1sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($c1num > 0 && $sumo != 0) {
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  				}
  					?>
  				</div>
  				<input type="hidden" name="txtschoolid" value="<?php echo $_POST['txtschoolid'] ; ?>" >
  				</td>
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
}
}else{
		$message = "คุณยังไม่ได้เลือกโรงเรียน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=childhood1sel.php'>";
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