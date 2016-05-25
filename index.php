<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ระบบรายงานผลการติดตาม ตรวจสอบและประเมินคุณภาพ</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
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
	<br>
	<div class="container">
		<table align="center" width="100%">
			<tr>
				<td width="10%" align="right" valign="top">
					<a href="index.php"><img src="images/logo.png" width="80" border="0" alt="หน้าแรก"></a>
				</td>
				<td width="3%"></td>
				<td width="87%">
					<span class="ha1">ระบบรายงานผลการติดตาม ตรวจสอบและประเมินคุณภาพ</span><br><br>
					<p class="ha2">ตามมาตรฐานการศึกษาของสถานศึกษา โดยหน่วยงานต้นสังกัด</p>
				</td>
			</tr>
		</table>
	</div>
	<br>
	<div class="container" style="margin-top:40px" >
	  <div class="bg">
		<div class="row" align="center">
			<div class="span3"></div>	
    		<div class="span6"><br><br>
    		  <form action="checklogin.php" method="post">
    			<table>
    				<tr>
          				<td width="103"></td>
          				<td width="200" align="center"><h4>เข้าสู่ระบบ</h4></td>
          				<td width="130"></td>
        			</tr>
    				<tr>
          				<td width="103"></td>
          				<td width="200">
            				<img class="profile-img" src="images/user.png" alt="">
            			</td>
          				<td width="130"></td>
        			</tr>
    				<tr>
          				<td width="103">รหัสโรงเรียน : </td>
          				<td width="200">
            				<input class="input-large" placeholder="เช่น 5601_ _ _ _" type="text" name="loginid" size="30" /></td>
          				<td width="130"></td>
        			</tr>
       				<tr>
          				<td>รหัสผ่าน : </td>
          				<td>
           					<input class="input-large"  type="password" name="password" size="30" /></td>
          				<td></td>
        			</tr>
       				 <tr>
          				<td>&nbsp;</td>
          				<td><div align="center"><input class="btn btn-primary" type="submit" value=" เข้าสู่ระบบ " /></div><br><br></td>
          				<td>&nbsp;</td>
       				</tr>
    			</table>
    		  </form>
    		</div>
    		<div class="span3"></div>
		</div>
	</div>
		<br>
		<br>
		<br>
		<br>
		<div class="mastfoot">
		    <div class="inner" align="center">
		      <p class="foot">กลุ่มนิเทศก์ติดตามและประเมินผลการจัดการศึกษา</p>          
		      <h5 class="foot">สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต ๑</h5>
		    </div>
    	</div>
	</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>