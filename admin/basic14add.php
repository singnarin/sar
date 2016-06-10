<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b14num = mysql_num_rows(mysql_query("SELECT * FROM `b14` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($b14num > 0) {
		mysql_query("UPDATE `b14` SET `14_1` = '".$_POST["txt14_1"]."',`14_2` = '".$_POST["txt14_2"]."' WHERE `schoolid` = '".$_POST['txtschoolid']."'") or die (mysql_error());
}else{
		mysql_query("insert into b14(schoolid, `14_1`,`14_2`) values ('".$_POST['txtschoolid']."','".$_POST["txt14_1"]."','".$_POST["txt14_2"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic14sel.php'>";
mysql_close($Conn); 
}
?>