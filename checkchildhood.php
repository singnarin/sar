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
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg"><?php include("include/navbar.php");?>
  	  	<div align="center">
  	  		<?php 
  	  		$c1num = mysql_num_rows(mysql_query("SELECT * FROM `c1` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c2num = mysql_num_rows(mysql_query("SELECT * FROM `c2` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c3num = mysql_num_rows(mysql_query("SELECT * FROM `c3` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c4num = mysql_num_rows(mysql_query("SELECT * FROM `c4` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c5num = mysql_num_rows(mysql_query("SELECT * FROM `c5` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c6num = mysql_num_rows(mysql_query("SELECT * FROM `c6` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c7num = mysql_num_rows(mysql_query("SELECT * FROM `c7` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c8num = mysql_num_rows(mysql_query("SELECT * FROM `c8` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c9num = mysql_num_rows(mysql_query("SELECT * FROM `c9` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c10num = mysql_num_rows(mysql_query("SELECT * FROM `c10` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$c11num = mysql_num_rows(mysql_query("SELECT * FROM `c11` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$teachernum = mysql_num_rows(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$studentnum = mysql_num_rows(mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));

	if ($c1num<1 OR $c2num<1 OR $c3num<1 OR $c4num<1 OR $c5num<1 OR $c6num<1 OR $c7num<1 OR $c8num<1 OR $c9num<1 OR $c10num<1 OR $c11num<1 OR $teachernum<1 OR $studentnum<1 ) {
		if ($c1num<1) {
			$c1echo = "ระดับปฐมวัย มาตรฐานที่ 1 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c1echo = "";
		}
		if ($c2num<1) {
			$c2echo = "ระดับปฐมวัย มาตรฐานที่ 2 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c2echo = "";
		}
		if ($c3num<1) {
			$c3echo = "ระดับปฐมวัย มาตรฐานที่ 3 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c3echo = "";
		}
		if ($c4num<1) {
			$c4echo = "ระดับปฐมวัย มาตรฐานที่ 4 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c4echo = "";
		}
		if ($c5num<1) {
			$c5echo = "ระดับปฐมวัย มาตรฐานที่ 5 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c5echo = "";
		}
		if ($c6num<1) {
			$c6echo = "ระดับปฐมวัย มาตรฐานที่ 6 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c6echo = "";
		}
		if ($c7num<1) {
			$c7echo = "ระดับปฐมวัย มาตรฐานที่ 7 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c7echo = "";
		}
		if ($c8num<1) {
			$c8echo = "ระดับปฐมวัย มาตรฐานที่ 8 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c8echo = "";
		}
		if ($c9num<1) {
			$c9echo = "ระดับปฐมวัย มาตรฐานที่ 9 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c9echo = "";
		}
		if ($c10num<1) {
			$c10echo = "ระดับปฐมวัย มาตรฐานที่ 10 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c10echo = "";
		}
		if ($c11num<1) {
			$c11echo = "ระดับปฐมวัย มาตรฐานที่ 11 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$c11echo = "";
		}
		if ($teachernum<1) {
			$teachernum = "ยังไม่ได้บันทึกข้อมูลครูผู้สอน<br>";
		}else {
			$teachernum = "";
		}
		if ($studentnum<1) {
			$studentnum = "ยังไม่ได้บันทึกข้อมูลจำนวนนักเรียน<br>";
		}else {
			$studentnum = "";
		}			
		echo "ไม่สามารถดำเนินการได้เนื่องจาก<br>".$c1echo.$c2echo.$c3echo.$c4echo.$c5echo.$c6echo.$c7echo.$c8echo.$c9echo.$c10echo.$c11echo.$teachernum.$studentnum."<br><br><br><br><br>";
		}else{
		echo "<meta http-equiv='refresh' content='0;URL=childhood.php'>";
	}
  	  		?></div>
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