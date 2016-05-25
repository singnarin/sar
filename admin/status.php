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
		$schoolResult1 = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_GET['txtschoolid']."'")) or die  (mysql_error());
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg"><?php include("include/navbar.php");?>
  	  		    <div class="container">
  	  		    <div class="row">
  	  				<div class="span12"><div align="center"><h4><?php echo $schoolResult1["schoolname"];?></h4></div></div>
  	  			  </div>
  	  		      <div class="row">
      				<div class="span6"><div align="right"><h5>สถานะการยืนยันข้อมูล  :</h5></div></div>
      				<div class="span6">
      				<?php 
  	  					if($schoolResult1["status"] == 0){
  	  						echo "<span style=\"background-color:red\">ยังไม่ได้ยืนยันข้อมูล</span>";
  	  					}else{
  	  						echo "<span style=\"background-color:green\">ยืนยันข้อมูลแล้ว</span>";
  	  				}
  	  				?>
  	  			  </div>
  	  			  <div class="row">
  	  				<div class="span12">คำชี้แจง :</div>
  	  			  </div>
  	  			  <div class="row">
  	  				<div class="span12">1.ก่อนทำการยืนยันข้อมูลให้ตรวจสอบการกรอกข้อมูลตามมาตรฐาน ตัวชี้วัดให้ถูกต้อง และครบถ้วนทุกตัวชี้วัด</div>
  	  			  </div>
  	  			  <div class="row">
  	  				<div class="span12">2.เมื่อทำการยืนยันข้อมุลไปแล้วจะไม่สามารถแก้ไขข้อมุลได้</div>
  	  			  </div>
  	  			  <div class="row">
  	  				<div class="span12"><div align="center"><h5>สถานะการบันทึกข้อมูลตามมาตรฐาน</h5></div></div>
  	  			  </div>
  	  			  <div class="row">
  	  				<div class="span6">
<?php 
  	  	$c1num = mysql_num_rows(mysql_query("SELECT * FROM `c1` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c2num = mysql_num_rows(mysql_query("SELECT * FROM `c2` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c3num = mysql_num_rows(mysql_query("SELECT * FROM `c3` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c4num = mysql_num_rows(mysql_query("SELECT * FROM `c4` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c5num = mysql_num_rows(mysql_query("SELECT * FROM `c5` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c6num = mysql_num_rows(mysql_query("SELECT * FROM `c6` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c7num = mysql_num_rows(mysql_query("SELECT * FROM `c7` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c8num = mysql_num_rows(mysql_query("SELECT * FROM `c8` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c9num = mysql_num_rows(mysql_query("SELECT * FROM `c9` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c10num = mysql_num_rows(mysql_query("SELECT * FROM `c10` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$c11num = mysql_num_rows(mysql_query("SELECT * FROM `c11` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$teachernum = mysql_num_rows(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$studentnum = mysql_num_rows(mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));

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
		echo $teachernum.$studentnum.$c1echo.$c2echo.$c3echo.$c4echo.$c5echo.$c6echo.$c7echo.$c8echo.$c9echo.$c10echo.$c11echo."<br><br><br><br><br>";
		}
?>
					</div>
  	  				<div class="span6">
<?php 
  	  	$b1num = mysql_num_rows(mysql_query("SELECT * FROM `b1` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b2num = mysql_num_rows(mysql_query("SELECT * FROM `b2` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b3num = mysql_num_rows(mysql_query("SELECT * FROM `b3` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b4num = mysql_num_rows(mysql_query("SELECT * FROM `b4` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b5num = mysql_num_rows(mysql_query("SELECT * FROM `b5` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b6num = mysql_num_rows(mysql_query("SELECT * FROM `b6` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b7num = mysql_num_rows(mysql_query("SELECT * FROM `b7` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b8num = mysql_num_rows(mysql_query("SELECT * FROM `b8` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b9num = mysql_num_rows(mysql_query("SELECT * FROM `b9` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b10num = mysql_num_rows(mysql_query("SELECT * FROM `b10` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b11num = mysql_num_rows(mysql_query("SELECT * FROM `b11` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b12num = mysql_num_rows(mysql_query("SELECT * FROM `b12` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b13num = mysql_num_rows(mysql_query("SELECT * FROM `b13` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b14num = mysql_num_rows(mysql_query("SELECT * FROM `b14` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$b15num = mysql_num_rows(mysql_query("SELECT * FROM `b15` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$teachernum = mysql_num_rows(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));
		$studentnum = mysql_num_rows(mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_GET['txtschoolid']."'"));

	if ($b1num<1 OR $b2num<1 OR $b3num<1 OR $b4num<1 OR $b5num<1 OR $b6num<1 OR $b7num<1 OR $b8num<1 OR $b9num<1 OR $b10num<1 OR $b11num<1 OR $b12num<1 OR $b13num<1 OR $b14num<1 OR $b15num<1 OR $teachernum<1 OR $studentnum<1 ) {
		if ($b1num<1) {
			$b1echo = "ระดับพื้นฐาน มาตรฐานที่ 1 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b1echo = "";
		}
		if ($b2num<1) {
			$b2echo = "ระดับพื้นฐาน มาตรฐานที่ 2 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b2echo = "";
		}
		if ($b3num<1) {
			$b3echo = "ระดับพื้นฐาน มาตรฐานที่ 3 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b3echo = "";
		}
		if ($b4num<1) {
			$b4echo = "ระดับพื้นฐาน มาตรฐานที่ 4 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b4echo = "";
		}
		if ($b5num<1) {
			$b5echo = "ระดับพื้นฐาน มาตรฐานที่ 5 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b5echo = "";
		}
		if ($b6num<1) {
			$b6echo = "ระดับพื้นฐาน มาตรฐานที่ 6 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b6echo = "";
		}
		if ($b7num<1) {
			$b7echo = "ระดับพื้นฐาน มาตรฐานที่ 7 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b7echo = "";
		}
		if ($b8num<1) {
			$b8echo = "ระดับพื้นฐาน มาตรฐานที่ 8 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b8echo = "";
		}
		if ($b9num<1) {
			$b9echo = "ระดับพื้นฐาน มาตรฐานที่ 9 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b9echo = "";
		}
		if ($b10num<1) {
			$b10echo = "ระดับพื้นฐาน มาตรฐานที่ 10 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b10echo = "";
		}
		if ($b11num<1) {
			$b11echo = "ระดับพื้นฐาน มาตรฐานที่ 11 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b11echo = "";
		}
		if ($b12num<1) {
			$b12echo = "ระดับพื้นฐาน มาตรฐานที่ 12 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b12echo = "";
		}
		if ($b13num<1) {
			$b13echo = "ระดับพื้นฐาน มาตรฐานที่ 13 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b13echo = "";
		}
		if ($b14num<1) {
			$b14echo = "ระดับพื้นฐาน มาตรฐานที่ 14 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b14echo = "";
		}
		if ($b15num<1) {
			$b15echo = "ระดับพื้นฐาน มาตรฐานที่ 15 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b15echo = "";
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
		echo $teachernum.$studentnum.$b1echo.$b2echo.$b3echo.$b4echo.$b5echo.$b6echo.$b7echo.$b8echo.$b9echo.$b10echo.$b11echo.$b12echo.$b13echo.$b14echo.$b15echo."<br><br><br><br><br>";
	}
?>
  	  				</div>
  	  			  </div>
  	  			</div>

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