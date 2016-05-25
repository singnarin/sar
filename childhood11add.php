<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c11num = mysql_num_rows(mysql_query("SELECT * FROM `c11` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($c11num > 0) {
		mysql_query("UPDATE `c11` SET `11_1` = '".$_POST["txt11_1"]."',`11_2` = '".$_POST["txt11_2"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into c11(schoolid, `11_1`,`11_2`) values ('".$_SESSION['ses_username']."','".$_POST["txt11_1"]."','".$_POST["txt11_2"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood11.php'>";
mysql_close($Conn); 
}
?>