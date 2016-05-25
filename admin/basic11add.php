<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b11num = mysql_num_rows(mysql_query("SELECT * FROM `b11` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($b11num > 0) {
		mysql_query("UPDATE `b11` SET `11_1` = '".$_POST["txt11_1"]."',`11_2` = '".$_POST["txt11_2"]."',`11_3` = '".$_POST["txt11_3"]."'") or die (mysql_error());
}else{
		mysql_query("insert into b11(schoolid, `11_1`,`11_2`,`11_3`) values ('".$_POST['txtschoolid']."','".$_POST["txt11_1"]."','".$_POST["txt11_2"]."','".$_POST["txt11_3"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic11sel.php'>";
mysql_close($Conn); 
}
?>