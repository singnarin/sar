<?php
include("include/connect.php");
session_start();

$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลไปแล้ว";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=school.php'>";
}else{
	mysql_query("UPDATE `tbschool` SET `status` = '1' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die(mysql_error());
	$message = "ยืนยันข้มูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=school.php'>";
	}
?>