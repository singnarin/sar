<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c8num = mysql_num_rows(mysql_query("SELECT * FROM `c8` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($c8num > 0) {
		mysql_query("UPDATE `c8` SET `8_1` = '".$_POST["txt8_1"]."',`8_2` = '".$_POST["txt8_2"]."',`8_3` = '".$_POST["txt8_3"]."',`8_4` = '".$_POST["txt8_4"]."',`8_5` = '".$_POST["txt8_5"]."',`8_6` = '".$_POST["txt8_6"]."'") or die (mysql_error());
}else{
		mysql_query("insert into c8(schoolid, `8_1`,`8_2`,`8_3`,`8_4`,`8_5`,`8_6`) values ('".$_POST['txtschoolid']."','".$_POST["txt8_1"]."','".$_POST["txt8_2"]."','".$_POST["txt8_3"]."','".$_POST["txt8_4"]."','".$_POST["txt8_5"]."','".$_POST["txt8_6"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood8sel.php'>";
mysql_close($Conn); 
}
?>