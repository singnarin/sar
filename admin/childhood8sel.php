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
<form id="form1" name="form1" method="post" action="../admin/childhood8.php">
<?php
	if ($_SESSION['ses_username']=="56010000"){	
		$selschool = mysql_query("SELECT * FROM `tbschool` ") or die  (mysql_error());
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg"><?php include("include/navbar.php");?>
  	  	<div align="center">
  	  		<div class="container">
				<div class="row">
  	  			<h4>สถานศึกษามีการประกันคุณภาพภายในของสถานศึกษาตามที่กำหนดในกฎกระทรวง</h4>
  	  			</div>
				<div class="row">
					<br>
					<select id="txtschoolid" name="txtschoolid" >
					<option value="">-- เลือกโรงเรียน --</option>
						<?php
							$schoolresult=mysql_query("select * from tbschool") or die (mysql_error());
							while ($row=mysql_fetch_array($schoolresult)) {
							echo "<option value='".$row["schoolid"]."'>".$row["schoolname"]."</option>";
							}
						?>
					</select>
					
				</div>
				<div class="row">
					<input class="btn btn-primary" type="submit" value=" ตกลง " />
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
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
</from>
</body>
</html>
<?php
mysql_close($Conn); 
?>