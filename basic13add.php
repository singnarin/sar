<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b13num = mysql_num_rows(mysql_query("SELECT * FROM `b13` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($b13num > 0) {
		mysql_query("UPDATE `b13` SET `13_1` = '".$_POST["txt13_1"]."',`13_2` = '".$_POST["txt13_2"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into b13(schoolid, `13_1`,`13_2`) values ('".$_SESSION['ses_username']."','".$_POST["txt13_1"]."','".$_POST["txt13_2"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic13.php'>";
mysql_close($Conn); 
}
?>