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
					echo "<meta http-equiv='refresh' content='0;URL=generaladmin.php'>";
				}else{
		$schoolResult1 = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());

		$selgeneral = mysql_query("SELECT * FROM `general` WHERE `schoolid` = '".$_POST['txtschoolid']."'");
		$generalnum = mysql_num_rows($selgeneral);
		if ($generalnum > 0) {
			$generalResult = mysql_fetch_array($selgeneral) or die  (mysql_error());
		}

		$selstudent = mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_POST['txtschoolid']."'");
		$studentnum = mysql_num_rows($selstudent);
		if ($studentnum > 0) {
			$studentResult = mysql_fetch_array($selstudent) or die  (mysql_error());
		}

		$selteacher = mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_POST['txtschoolid']."'");
		$teachernum = mysql_num_rows($selteacher);
		if ($teachernum > 0) {
			$teacherResult = mysql_fetch_array($selteacher) or die  (mysql_error());
		}		

?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg">
<?php include("include/navbar.php");?>
  	  	<div class="container">
  	<form id="form1" name="form1" method="post" action="addgeneral.php">
		<table align="center" width="100%">
			<tr>
				<td colspan="6"><div align="center"><br><h4>ข้อมูลที่ตั้ง</h4></div></td>
			</tr>
			<tr>
				<td>รหัสโรงเรียน</td>
				<td><?php echo $_POST['txtschoolid'];?></td>
				<td>ชื่อโรงเรียน</td>
				<td><?php echo $schoolResult1['schoolname'];?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>เลขที่</td>
				<td><input type="text" name="txtNo" 
				<?php 
				if ($generalnum > 0) {
						echo "value=\"".$generalResult['No']."\"";
						}
				?>
				/></td>
				<td>หมู่ที่</td>
				<td><input type="text" name="txtMoo" 
				<?php 
					if ($generalnum > 0) {
						echo "value=\"".$generalResult['moo']."\"";
						}
				?>
				/></td>
				<td>ตำบล</td>
				<td><input type="text" name="txtTambol" 
					<?php 
					if ($generalnum > 0) {
						echo "value=\"".$generalResult['tambol']."\"";
						}
					?>
				/></td>
			</tr>
			<tr>
				<td>อำเภอ</td>
				<td><input type="text" name="txtDistrict"
					<?php 
					if ($generalnum > 0) {
						echo "value=\"".$generalResult['district']."\"";
						}
					?>
				/></td>
				<td>จังหวัด</td>
				<td><input type="text" name="txtProvince"
					<?php 
					if ($generalnum > 0) {
						echo "value=\"".$generalResult['province']."\"";
						}
					?>
				/></td>
				<td>โทร</td>
				<td><input type="text" name="txtTel" 
					<?php 
					if ($generalnum > 0) {
						echo "value=\"".$generalResult['tel']."\"";
						}
					?>
				/></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="txtEmail"
					<?php 
					if ($generalnum > 0) {
						echo "value=\"".$generalResult['email']."\"";
						}
					?>
				/></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		</div>
		<table  align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="16"><div align="center"><h4>ข้อมูลนักเรียน</h4></div></td>
			</tr>
			<tr>
				<td>เพศ</td>
				<td><div align="center">อ.1</div></td>
				<td><div align="center">อ.2</div></td>
				<td><div align="center">รวม</div></td>
				<td><div align="center">ป.1</div></td>
				<td><div align="center">ป.2</div></td>
				<td><div align="center">ป.3</div></td>
				<td><div align="center">ป.4</div></td>
				<td><div align="center">ป.5</div></td>
				<td><div align="center">ป.6</div></td>
				<td><div align="center">รวม</div></td>
				<td><div align="center">ม.1</div></td>
				<td><div align="center">ม.2</div></td>
				<td><div align="center">ม.3</div></td>
				<td><div align="center">รวม</div></td>
				<td><div align="center">รวมทุกระดับ</div></td>
			</tr>
			<tr>
				<td>ชาย</td>
				<td><input type="text" name="txtmo1" class="input-mini" 
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mo1']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmo2" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mo2']."\"";
						}
				?>
				/></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summo = array($studentResult['mo2'],$studentResult['mo1']);
						echo array_sum($summo);
						}
				?>
				</div></td>
				<td><input type="text" name="txtmp1" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mp1']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmp2" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mp2']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmp3" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mp3']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmp4" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mp4']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmp5" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mp5']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmp6" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mp6']."\"";
						}
				?>
				/></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summp = array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6']);
						echo array_sum($summp);
						}
				?>
				</div></td>
				<td><input type="text" name="txtmm1" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mm1']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmm2" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mm2']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtmm3" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['mm3']."\"";
						}
				?>
				/></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summm = array($studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3']);
						echo array_sum($summm);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ = array(array_sum($summo),array_sum($summp),array_sum($summm));
						echo array_sum($summ);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td>หญิง</td>
				<td><input type="text" name="txtfo1" class="input-mini" 
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fo1']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfo2" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fo2']."\"";
						}
				?>
				/></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumfo = array($studentResult['fo1'],$studentResult['fo2']);
						echo array_sum($sumfo);
						}
				?>
				</div></td>
				<td><input type="text" name="txtfp1" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fp1']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfp2" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fp2']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfp3" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fp3']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfp4" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fp4']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfp5" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fp5']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfp6" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fp6']."\"";
						}
				?>
				/></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumfp = array($studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6']);
						echo array_sum($sumfp);
						}
				?>
				</div></td>
				<td><input type="text" name="txtfm1" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fm1']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfm2" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fm2']."\"";
						}
				?>
				/></td>
				<td><input type="text" name="txtfm3" class="input-mini"
				<?php 
				if ($studentnum > 0) {
						echo "value=\"".$studentResult['fm3']."\"";
						}
				?>
				/></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumfm = array($studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']);
						echo array_sum($sumfm);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumf = array(array_sum($sumfo),array_sum($sumfp),array_sum($sumfm));
						echo array_sum($sumf);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td>รวม</td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumo1 = array($studentResult["mo1"],$studentResult["fo1"]);
						echo array_sum($sumo1);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumo2 = array($studentResult["mo2"],$studentResult["fo2"]);
						echo array_sum($sumo2);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumo = array(array_sum($sumo2),array_sum($sumo1));
						echo array_sum($sumo);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump1 = array($studentResult["mp1"],$studentResult["fp1"]);
						echo array_sum($sump1);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump2 = array($studentResult["mp2"],$studentResult["fp2"]);
						echo array_sum($sump2);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump3 = array($studentResult["mp3"],$studentResult["fp3"]);
						echo array_sum($sump3);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump4 = array($studentResult["mp4"],$studentResult["fp4"]);
						echo array_sum($sump4);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump5 = array($studentResult["mp5"],$studentResult["fp5"]);
						echo array_sum($sump5);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump6 = array($studentResult["mp6"],$studentResult["fp6"]);
						echo array_sum($sump6);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump = array(array_sum($sump1),array_sum($sump2),array_sum($sump3),array_sum($sump4),array_sum($sump5),array_sum($sump6));
						echo array_sum($sump);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ1 = array($studentResult["mm1"],$studentResult["fm1"]);
						echo array_sum($summ1);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ2 = array($studentResult["mm2"],$studentResult["fm2"]);
						echo array_sum($summ2);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ3 = array($studentResult["mm3"],$studentResult["fm3"]);
						echo array_sum($summ3);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ = array(array_sum($summ1),array_sum($summ2),array_sum($summ3));
						echo array_sum($summ);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumstudent = array(array_sum($sumo),array_sum($sump),array_sum($summ));
						echo array_sum($sumstudent);
						
						}
				?>
				</div></td>
			</tr>
		</table>
		<div class="container">
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="12"><div align="center"><h4>ข้อมูลจำนวนครูและบุคลากร</h4></div></td>
			</tr>
			<tr>
				<th><div align="center" >ประเภทบุคลากร</div></th>
				<th><div align="center" >ชาย</div></th>
				<th><div align="center" >หญิง</div></th>
				<th><div align="center" >รวม</div></th>
			</tr>
			<tr>
				<td><div align="left" >ผู้อำนวยการ</div></td>
				<td><div align="center" ><input type="text" name="txtmdirector" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['mDirector']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" ><input type="text" name="txtfdirector" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['fDirector']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumdirector = array($teacherResult['mDirector'],$teacherResult['fDirector']);
						echo array_sum($sumdirector);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >รองผู้อำนวยการ</div></td>
				<td><div align="center" ><input type="text" name="txtmdeputy" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['mDeputy']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" ><input type="text" name="txtfdeputy" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['fDeputy']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumDeputy = array($teacherResult['mDeputy'],$teacherResult['fDeputy']);
						echo array_sum($sumDeputy);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >ครูประจำการ</div></td>
				<td><div align="center" ><input type="text" name="txtmregular" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['mRegular']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" ><input type="text" name="txtfregular" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['fRegular']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" ><?php 
				if ($teachernum > 0) {
					$sumRegular = array($teacherResult['mRegular'],$teacherResult['fRegular']);
						echo array_sum($sumRegular);
						}
				?></div></td>
			</tr>
			<tr>
				<td><div align="left" >ครูอัตราจ้าง</div></td>
				<td><div align="center" ><input type="text" name="txtmrate" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['mRate']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" ><input type="text" name="txtfrate" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['fRate']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumRate = array($teacherResult['mRate'],$teacherResult['fRate']);
						echo array_sum($sumRate);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >นักการภารโรง</div></td>
				<td><div align="center" ><input type="text" name="txtmjanitor" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['mJanitor']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" ><input type="text" name="txtfjanitor" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['fJanitor']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumJanitor = array($teacherResult['mJanitor'],$teacherResult['fJanitor']);
						echo array_sum($sumJanitor);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >ครูโรงเรียนจ้าง</div></td>
				<td><div align="center" ><input type="text" name="txtmtemp" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['mTemp']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" ><input type="text" name="txtftemp" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['fTemp']."\"";
						}
				?>
				/></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumTemp = array($teacherResult['mTemp'],$teacherResult['fTemp']);
						echo array_sum($sumTemp);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >รวม</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$summteacher = array($teacherResult['mDirector'],$teacherResult['mDeputy'],$teacherResult['mRegular'],$teacherResult['mRate'],$teacherResult['mJanitor'],$teacherResult['mTemp']);
						echo array_sum($summteacher);
						}
				?>
				</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumfteacher = array($teacherResult['fDirector'],$teacherResult['fDeputy'],$teacherResult['fRegular'],$teacherResult['fRate'],$teacherResult['fJanitor'],$teacherResult['fTemp']);
						echo array_sum($sumfteacher);
						}
				?>
				</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumteacher = array(array_sum($summteacher),array_sum($sumfteacher));
						echo array_sum($sumteacher);
						echo "<input type=\"hidden\" name=\"txtsumteacher\" value=\"".array_sum($sumteacher)."\"";
						}else{
							echo "<input type=\"hidden\" name=\"txtsumteacher\" value=\"0\"";
						}
				?>
				</div></td>
			</tr>
		</table>
		<table align="center" width="100%" class="table table-bordered">
			<tr>
				<td colspan="12"><div align="center"><h4>การสอนของครูตามแผนการสอน(คน)</h4></div></td>
			</tr>
			<tr>
				<th><div align="center" >ระดับชั้น</div></th>
				<th><div align="center" >ครูผู้สอน</div></th>
			</tr>
			<tr>
				<td><div align="left" >ปฐมวัย</div></td>
				<td><div align="center" ><input type="text" name="txtchildteacher" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['childteacher']."\"";
						}
				?>
				/></div></td>
			</tr>
			<tr>
				<td><div align="left" >ประถม</div></td>
				<td><div align="center" ><input type="text" name="txtprimaryteacher" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['primaryteacher']."\"";
						}
				?>
				/></div></td>
			</tr>
			<tr>
				<td><div align="left" >มัธยมต้น</div></td>
				<td><div align="center" ><input type="text" name="txthighschoolteacher" class="input-mini" 
				<?php 
				if ($teachernum > 0) {
						echo "value=\"".$teacherResult['highschoolteacher']."\"";
						}
				?>
				/></div></td>
			</tr>
			<tr>
				<td><div align="left" >รวมประถม-มัธบม</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$primaryhigh = array($teacherResult['highschoolteacher'],$teacherResult['primaryteacher']);
						echo array_sum($primaryhigh);
						}
				?>
				</div>
				<input type="hidden" name="txtschoolid" value="<?php echo $_POST['txtschoolid'] ; ?>" >
				</td>
			</tr>
		</table>

			<div class="row">
				<div align="center"><input class="btn btn-primary" type="submit" value=" บันทึกข้อมูล " />
				<input class="btn btn-primary" type="button" name="Button" value="นำออกข้อมูล" onClick="window.location.href='exportgeneral.php'">
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
		echo "<meta http-equiv='refresh' content='0;URL=generalsel.php'>";
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