<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c10num = mysql_num_rows(mysql_query("SELECT * FROM `c10` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($c10num > 0) {
		mysql_query("UPDATE `c10` SET `10_1` = '".$_POST["txt10_1"]."',`10_2` = '".$_POST["txt10_2"]."'") or die (mysql_error());
}else{
		mysql_query("insert into c10(schoolid, `10_1`,`10_2`) values ('".$_SESSION['ses_username']."','".$_POST["txt10_1"]."','".$_POST["txt10_2"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood10.php'>";
mysql_close($Conn); 
}
?>