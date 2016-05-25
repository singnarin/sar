<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$generalnum = mysql_num_rows(mysql_query("SELECT * FROM `general` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($generalnum > 0) {
		mysql_query("UPDATE `general` SET `No` = '".$_POST["txtNo"]."', `moo` = '".$_POST["txtMoo"]."', `tambol`='".$_POST["txtTambol"]."', `district`='".$_POST["txtDistrict"]."', `province`='".$_POST["txtProvince"]."', `tel`='".$_POST["txtTel"]."', `email`='".$_POST["txtEmail"]."' WHERE `schoolid` = '".$_POST['txtschoolid']."'") or die (mysql_error());
}else{
		mysql_query("insert into general(schoolid, No, moo, tambol, district, province, tel, email) values ('".$_POST['txtschoolid']."', '".$_POST["txtNo"]."', '".$_POST["txtMoo"]."', '".$_POST["txtTambol"]."', '".$_POST["txtDistrict"]."','".$_POST["txtProvince"]."', '".$_POST["txtTel"]."', '".$_POST["txtEmail"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=../admin/generalsel.php'>";
mysql_close($Conn); 
}
?>