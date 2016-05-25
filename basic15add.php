<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้อมูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=school.php'>";
}else{
$b15num = mysql_num_rows(mysql_query("SELECT * FROM `b15` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($b15num > 0) {
		mysql_query("UPDATE `b15` SET `15_1` = '".$_POST["txt15_1"]."',`15_2` = '".$_POST["txt15_2"]."'") or die (mysql_error());
}else{
		mysql_query("insert into b15(schoolid, `15_1`,`15_2`) values ('".$_SESSION['ses_username']."','".$_POST["txt15_1"]."','".$_POST["txt15_2"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic15.php'>";
mysql_close($Conn); 
}
?>