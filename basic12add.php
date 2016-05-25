<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b12num = mysql_num_rows(mysql_query("SELECT * FROM `b12` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($b12num > 0) {
		mysql_query("UPDATE `b12` SET `12_1` = '".$_POST["txt12_1"]."',`12_2` = '".$_POST["txt12_2"]."',`12_3` = '".$_POST["txt12_3"]."',`12_4` = '".$_POST["txt12_4"]."',`12_5` = '".$_POST["txt12_5"]."',`12_6` = '".$_POST["txt12_6"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into b12(schoolid, `12_1`,`12_2`,`12_3`,`12_4`,`12_5`,`12_6`) values ('".$_SESSION['ses_username']."','".$_POST["txt12_1"]."','".$_POST["txt12_2"]."','".$_POST["txt12_3"]."','".$_POST["txt12_4"]."','".$_POST["txt12_5"]."','".$_POST["txt12_6"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic12.php'>";
mysql_close($Conn); 
}
?>