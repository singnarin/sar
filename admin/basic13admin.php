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

		$selb13 = mysql_query("SELECT  SUM(13_1) AS total13_1, SUM(13_2) AS total13_2 FROM `b13` ");
		$b13num = mysql_num_rows($selb13);
		if ($b13num > 0) {
			$b13Result = mysql_fetch_array($selb13) or die  (mysql_error());
			$b13_1 = round($b13Result['total13_1'] / $b13num);
			$b13_2 = round($b13Result['total13_2'] / $b13num);
		}

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="basic13add.php">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 13 สถานศึกษามีการสร้าง ส่งเสริม สนับสนุน ให้สถานศึกษาเป็นสังคมแห่งการเรียนรู้</h4></div></td>
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
  				<td>13.1 มีการสร้างและพัฒนาแหล่งเรียนรู้ภายในสถานศึกษาและใช้ประโยชน์จากแหล่งเรียนรู้ ทั้งภายในและภายนอกสถานศึกษา เพื่อพัฒนา  การเรียนรู้ของผู้เรียนและบุคลากรของสถานศึกษา รวมทั้งผู้ที่เกี่ยวข้อง</td>
  				<td><div align="center">
  				<input type="radio" name="txt13_1" value="1"
				<?php 
				if ($b13num > 0 && $b13_1 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_1" value="2"
				<?php 
				if ($b13num > 0 && $b13_1 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_1" value="3"
				<?php 
				if ($b13num > 0 && $b13_1 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_1" value="4"
				<?php 
				if ($b13num > 0 && $b13_1 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_1" value="5"
				<?php 
				if ($b13num > 0 && $b13_1 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b13num > 0) {
  					$scoreb13_1 = $b13_1 * 5 / 5;
  					$score = $b13_1 * 5 / 5;
  					if ($b13_1 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b13num > 0) {
  					include("scoreb52.php");
  					if ($b13_1 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b13num > 0) {
  					if ($b13_1 != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>13.2  มีการแลกเปลี่ยนเรียนรู้ระหว่างบุคลากรภายในสถานศึกษา ระหว่างสถานศึกษากับครอบครัว ชุมชนและองค์กรที่เกี่ยวข้อง</td>
  				<td><div align="center">
  				<input type="radio" name="txt13_2" value="1"
				<?php 
				if ($b13num > 0 && $b13_2 == 1) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_2" value="2"
				<?php 
				if ($b13num > 0 && $b13_2 == 2) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_2" value="3"
				<?php 
				if ($b13num > 0 && $b13_2 == 3) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_2" value="4"
				<?php 
				if ($b13num > 0 && $b13_2 == 4) {
						echo "checked";
						}
				?>
				/></div></td>
  				<td><div align="center">
  				<input type="radio" name="txt13_2" value="5"
				<?php 
				if ($b13num > 0 && $b13_2 == 5) {
						echo "checked";
						}
				?>
				/></div></td>
				<td><div align="center">
  				<?php 
  				if ($b13num > 0) {
  					$scoreb13_2 = $b13_2 * 5 / 5;
  					$score = $b13_2 * 5 / 5;
  					if ($b13_2 != 0) {
						echo $score;
					}
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				if ($b13num > 0) {
  					include("scoreb52.php");
  					if ($b13_2 != 0) {
  						echo $grade;
  					}
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b13num > 0) {
  					if ($b13_2 != 0) {
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
					if ($b13num > 0) {
					$score13 = array($scoreb13_1,$scoreb13_2);
					$score = number_format(array_sum($score13), 2, '.', '');
					$score13sum = number_format(array_sum($score13), 2, '.', '');
					echo $score13sum;
				}
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					if ($b13num > 0) {
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