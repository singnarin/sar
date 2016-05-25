<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["password"]!=$_POST['password']){
	$message = "คุณใส่รหัสผ่านไม่ถูกต้อง";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=changpass.php'>";
}else{
		if($_POST['password1']!=$_POST['password2']){
			$message = "คุณใส่รหัสผ่านไม่ตรงกัน";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=changpass.php'>";
		}else{
				if (empty($_POST['password1'])) {
					$message = "คุณยังไม่ได้ใส่รหัสผ่าน";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo "<meta http-equiv='refresh' content='0;URL=changpass.php'>";
				}else{
					mysql_query("UPDATE `tbschool` SET `password` = '".$_POST["password1"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
					$message = "บันทึกข้อมูลเรียบร้อย";
					echo "<script type='text/javascript'>alert('$message');</script>";
					echo "<meta http-equiv='refresh' content='0;URL=school.php'>";
				}
		}
	}
mysql_close($Conn); 
?>