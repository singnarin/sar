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
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<body>
<?php
	if ($_SESSION['ses_username']=="56010000"){	
		$selschool = mysql_query("SELECT * FROM `tbschool` ") or die  (mysql_error());
		$selschoolOK = mysql_query("SELECT * FROM `tbschool` WHERE `status` = 1") or die  (mysql_error());
		$selschoolNot = mysql_query("SELECT * FROM `tbschool` WHERE `status` = 0") or die  (mysql_error());
?>
	<br>
<?php include("include/header.php");?>
	<div class="row-fluid">
  	  <div class="bg"><?php include("include/navbar.php");?>
  	  	<div align="center">
  	  		<div class="container">

  	  		
  	  		  <div class="hero-widget well well-sm">
  	  		  <div class="row">
  	  			 <div class="span4">
                        <img src="img/glyphicons/png/glyphicons-21-home.png" class="img-rounded" width="40" height="40"><br>
                        <h4><?php echo mysql_num_rows($selschool) - 1;?></h4>
                        <label class="text-muted">โรงเรียนทั้งหมด</label>
                </div>
                <div class="span4">
                		<img src="img/glyphicons/png/glyphicons-207-ok.png" class="img-rounded" width="40" height="40"><br>
                        <h4><?php echo mysql_num_rows($selschoolOK);?></h4>
                        <label class="text-muted">ยืนยันข้อมูลแล้ว</label>
                </div>
                <div class="span4">
                		<img src="img/glyphicons/png/glyphicons-208-remove.png" class="img-rounded" width="40" height="40"><br>
                        <h4><?php echo mysql_num_rows($selschoolNot) - 1;?></h4>
                        <label class="text-muted">ยังไม่ได้ยืนยันข้อมูล</label>
                </div>
              </div>
            </div>

<table width="100%" class="table table-bordered">
  	<tr>
    	<th width="221"> <div align="center">รหัสโรงเรียน</div></th>
    	<th width="399"> <div align="center">ชื่อโรงเรียน</div></th>
		<th width="119"> <div align="center">สถานะการยืนยันข้อมูล</div></th>
  	</tr>
<?php
while($objResult = mysql_fetch_array($selschool))
{
?>
  	<tr>
    	<td><div align="center"><a href='status.php?txtschoolid=<?php echo $objResult["schoolid"]; ?>'><?php echo $objResult["schoolid"];?></a></div></td>
    	<td><?php echo $objResult["schoolname"] ; ?></td>
		<td>
		<?php
			$objQuerystatus = mysql_query("SELECT * FROM  tbschool where schoolid = '".$objResult["schoolid"]."'") or die ("Error Query [".$strSQLstatus."]");
			$objResultstatus = mysql_fetch_array($objQuerystatus);
			if($objResultstatus["status"] == 1) {   
			echo "<div align=\"center\"><a href='confirm.php?txtschoolid=".$objResult["schoolid"]."'><img src=\"images/ok.png\"/></a></div>";
			}else{
				echo "<div align=\"center\"><a href='confirm.php?txtschoolid=".$objResult["schoolid"]."'><img src=\"images/no.png\"/></a></div>" ;
			}
		?>
		</td>
  	</tr>
<?php
}
?>
</table>
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
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
	} 
?>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
mysql_close($Conn); 
?>