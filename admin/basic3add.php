<?php
session_start();
include("include/connect.php");
include("include/sumstudent.php");
$checksumb3_1 = array_sum(array($_POST["txt3_1_1"],$_POST["txt3_1_2"],$_POST["txt3_1_3"],$_POST["txt3_1_4"],$_POST["txt3_1_5"]));
$checksumb3_2 = array_sum(array($_POST["txt3_2_1"],$_POST["txt3_2_2"],$_POST["txt3_2_3"],$_POST["txt3_2_4"],$_POST["txt3_2_5"]));
$checksumb3_3 = array_sum(array($_POST["txt3_3_1"],$_POST["txt3_3_2"],$_POST["txt3_3_3"],$_POST["txt3_3_4"],$_POST["txt3_3_5"]));
$checksumb3_4 = array_sum(array($_POST["txt3_4_1"],$_POST["txt3_4_2"],$_POST["txt3_4_3"],$_POST["txt3_4_4"],$_POST["txt3_4_5"]));
if ($checksumb3_1 <= $sumb && $checksumb3_2 <= $sumb && $checksumb3_3 <= $sumb && $checksumb3_4 <= $sumb){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b3num = mysql_num_rows(mysql_query("SELECT * FROM `b3` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($b3num > 0) {
		mysql_query("UPDATE `b3` SET `3_1_1` = '".$_POST["txt3_1_1"]."',`3_1_2` = '".$_POST["txt3_1_2"]."',`3_1_3` = '".$_POST["txt3_1_3"]."',`3_1_4` = '".$_POST["txt3_1_4"]."',`3_1_5` = '".$_POST["txt3_1_5"]."',`3_2_1` = '".$_POST["txt3_2_1"]."',`3_2_2` = '".$_POST["txt3_2_2"]."',`3_2_3` = '".$_POST["txt3_2_3"]."',`3_2_4` = '".$_POST["txt3_2_4"]."',`3_2_5` = '".$_POST["txt3_2_5"]."',`3_3_1` = '".$_POST["txt3_3_1"]."',`3_3_2` = '".$_POST["txt3_3_2"]."',`3_3_3` = '".$_POST["txt3_3_3"]."',`3_3_4` = '".$_POST["txt3_3_4"]."',`3_3_5` = '".$_POST["txt3_3_5"]."',`3_4_1` = '".$_POST["txt3_4_1"]."',`3_4_2` = '".$_POST["txt3_4_2"]."',`3_4_3` = '".$_POST["txt3_4_3"]."',`3_4_4` = '".$_POST["txt3_4_4"]."',`3_4_5` = '".$_POST["txt3_4_5"]."'") or die (mysql_error());
}else{
		mysql_query("insert into b3(schoolid, 3_1_1,3_1_2,3_1_3,3_1_4,3_1_5,3_2_1,3_2_2,3_2_3,3_2_4,3_2_5,3_3_1,3_3_2,3_3_3,3_3_4,3_3_5,3_4_1,3_4_2,3_4_3,3_4_4,3_4_5) values ('".$_POST['txtschoolid']."', '".$_POST["txt3_1_1"]."','".$_POST["txt3_1_2"]."','".$_POST["txt3_1_3"]."','".$_POST["txt3_1_4"]."','".$_POST["txt3_1_5"]."','".$_POST["txt3_2_1"]."','".$_POST["txt3_2_2"]."','".$_POST["txt3_2_3"]."','".$_POST["txt3_2_4"]."','".$_POST["txt3_2_5"]."','".$_POST["txt3_3_1"]."','".$_POST["txt3_3_2"]."','".$_POST["txt3_3_3"]."','".$_POST["txt3_3_4"]."','".$_POST["txt3_3_5"]."','".$_POST["txt3_4_1"]."','".$_POST["txt3_4_2"]."','".$_POST["txt3_4_3"]."','".$_POST["txt3_4_4"]."','".$_POST["txt3_4_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic3sel.php'>";
}
}else{
	$message = "ใส่จำนวนนักเรียนเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic3sel.php'>";
}
mysql_close($Conn); 
?>