<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b10num = mysql_num_rows(mysql_query("SELECT * FROM `b10` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($b10num > 0) {
		mysql_query("UPDATE `b10` SET `10_1` = '".$_POST["txt10_1"]."',`10_2` = '".$_POST["txt10_2"]."',`10_3` = '".$_POST["txt10_3"]."',`10_4` = '".$_POST["txt10_4"]."',`10_5` = '".$_POST["txt10_5"]."',`10_6` = '".$_POST["txt10_6"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into b10(schoolid, `10_1`,`10_2`,`10_3`,`10_4`,`10_5`,`10_6`) values ('".$_SESSION['ses_username']."','".$_POST["txt10_1"]."','".$_POST["txt10_2"]."','".$_POST["txt10_3"]."','".$_POST["txt10_4"]."','".$_POST["txt10_5"]."','".$_POST["txt10_6"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic10.php'>";
mysql_close($Conn); 
}
?>