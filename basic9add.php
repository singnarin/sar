<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b9num = mysql_num_rows(mysql_query("SELECT * FROM `b9` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($b9num > 0) {
		mysql_query("UPDATE `b9` SET `9_1` = '".$_POST["txt9_1"]."',`9_2` = '".$_POST["txt9_2"]."',`9_3` = '".$_POST["txt9_3"]."'") or die (mysql_error());
}else{
		mysql_query("insert into b9(schoolid, `9_1`,`9_2`,`9_3`) values ('".$_SESSION['ses_username']."','".$_POST["txt9_1"]."','".$_POST["txt9_2"]."','".$_POST["txt9_3"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic9.php'>";
mysql_close($Conn); 
}
?>