<?php
include("include/connect.php");
session_start();
$teacherResult = mysql_fetch_array(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
$checksum5_1 = array_sum(array($_POST["txt5_1_1"],$_POST["txt5_1_2"],$_POST["txt5_1_3"],$_POST["txt5_1_4"],$_POST["txt5_1_5"]));
$checksum5_2 = array_sum(array($_POST["txt5_2_1"],$_POST["txt5_2_2"],$_POST["txt5_2_3"],$_POST["txt5_2_4"],$_POST["txt5_2_5"]));
$checksum5_3 = array_sum(array($_POST["txt5_3_1"],$_POST["txt5_3_2"],$_POST["txt5_3_3"],$_POST["txt5_3_4"],$_POST["txt5_3_5"]));
$checksum5_4 = array_sum(array($_POST["txt5_4_1"],$_POST["txt5_4_2"],$_POST["txt5_4_3"],$_POST["txt5_4_4"],$_POST["txt5_4_5"]));
$checksum5_5 = array_sum(array($_POST["txt5_5_1"],$_POST["txt5_5_2"],$_POST["txt5_5_3"],$_POST["txt5_5_4"],$_POST["txt5_5_5"]));
$checksum5_6 = array_sum(array($_POST["txt5_6_1"],$_POST["txt5_6_2"],$_POST["txt5_6_3"],$_POST["txt5_6_4"],$_POST["txt5_6_5"]));
$checksum5_7 = array_sum(array($_POST["txt5_7_1"],$_POST["txt5_7_2"],$_POST["txt5_7_3"],$_POST["txt5_7_4"],$_POST["txt5_7_5"]));
$checksum5_8 = array_sum(array($_POST["txt5_8_1"],$_POST["txt5_8_2"],$_POST["txt5_8_3"],$_POST["txt5_8_4"],$_POST["txt5_8_5"]));
$checksum5_9 = array_sum(array($_POST["txt5_9_1"],$_POST["txt5_9_2"],$_POST["txt5_9_3"],$_POST["txt5_9_4"],$_POST["txt5_9_5"]));
$checksum5_10 = array_sum(array($_POST["txt5_10_1"],$_POST["txt5_10_2"],$_POST["txt5_10_3"],$_POST["txt5_10_4"],$_POST["txt5_10_5"]));
if ($checksum5_1 <= $teacherResult['childteacher'] && $checksum5_2 <= $teacherResult['childteacher'] && $checksum5_3 <= $teacherResult['childteacher'] && $checksum5_4 <= $teacherResult['childteacher'] && $checksum5_5 <= $teacherResult['childteacher'] && $checksum5_6 <= $teacherResult['childteacher'] && $checksum5_7 <= $teacherResult['childteacher'] && $checksum5_8 <= $teacherResult['childteacher'] && $checksum5_9 <= $teacherResult['childteacher'] && $checksum5_10 <= $teacherResult['childteacher']){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c5num = mysql_num_rows(mysql_query("SELECT * FROM `c5` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($c5num > 0) {
		mysql_query("UPDATE `c5` SET `5_1_1` = '".$_POST["txt5_1_1"]."',`5_1_2` = '".$_POST["txt5_1_2"]."',`5_1_3` = '".$_POST["txt5_1_3"]."',`5_1_4` = '".$_POST["txt5_1_4"]."',`5_1_5` = '".$_POST["txt5_1_5"]."',`5_2_1` = '".$_POST["txt5_2_1"]."',`5_2_2` = '".$_POST["txt5_2_2"]."',`5_2_3` = '".$_POST["txt5_2_3"]."',`5_2_4` = '".$_POST["txt5_2_4"]."',`5_2_5` = '".$_POST["txt5_2_5"]."',`5_3_1` = '".$_POST["txt5_3_1"]."',`5_3_2` = '".$_POST["txt5_3_2"]."',`5_3_3` = '".$_POST["txt5_3_3"]."',`5_3_4` = '".$_POST["txt5_3_4"]."',`5_3_5` = '".$_POST["txt5_3_5"]."',`5_4_1` = '".$_POST["txt5_4_1"]."',`5_4_2` = '".$_POST["txt5_4_2"]."',`5_4_3` = '".$_POST["txt5_4_3"]."',`5_4_4` = '".$_POST["txt5_4_4"]."',`5_4_5` = '".$_POST["txt5_4_5"]."',`5_5_1` = '".$_POST["txt5_5_1"]."',`5_5_2` = '".$_POST["txt5_5_2"]."',`5_5_3` = '".$_POST["txt5_5_3"]."',`5_5_4` = '".$_POST["txt5_5_4"]."',`5_5_5` = '".$_POST["txt5_5_5"]."',`5_6_1` = '".$_POST["txt5_6_1"]."',`5_6_2` = '".$_POST["txt5_6_2"]."',`5_6_3` = '".$_POST["txt5_6_3"]."',`5_6_4` = '".$_POST["txt5_6_4"]."',`5_6_5` = '".$_POST["txt5_6_5"]."',`5_7_1` = '".$_POST["txt5_7_1"]."',`5_7_2` = '".$_POST["txt5_7_2"]."',`5_7_3` = '".$_POST["txt5_7_3"]."',`5_7_4` = '".$_POST["txt5_7_4"]."',`5_7_5` = '".$_POST["txt5_7_5"]."',`5_8_1` = '".$_POST["txt5_8_1"]."',`5_8_2` = '".$_POST["txt5_8_2"]."',`5_8_3` = '".$_POST["txt5_8_3"]."',`5_8_4` = '".$_POST["txt5_8_4"]."',`5_8_5` = '".$_POST["txt5_8_5"]."',`5_9_1` = '".$_POST["txt5_9_1"]."',`5_9_2` = '".$_POST["txt5_9_2"]."',`5_9_3` = '".$_POST["txt5_9_3"]."',`5_9_4` = '".$_POST["txt5_9_4"]."',`5_9_5` = '".$_POST["txt5_9_5"]."',`5_10_1` = '".$_POST["txt5_10_1"]."',`5_10_2` = '".$_POST["txt5_10_2"]."',`5_10_3` = '".$_POST["txt5_10_3"]."',`5_10_4` = '".$_POST["txt5_10_4"]."',`5_10_5` = '".$_POST["txt5_10_5"]."'") or die (mysql_error());
}else{
		mysql_query("insert into c5(schoolid,5_1_1,5_1_2,5_1_3,5_1_4,5_1_5,5_2_1,5_2_2,5_2_3,5_2_4,5_2_5,5_3_1,5_3_2,5_3_3,5_3_4,5_3_5,5_4_1,5_4_2,5_4_3,5_4_4,5_4_5,5_5_1,5_5_2,5_5_3,5_5_4,5_5_5,5_6_1,5_6_2,5_6_3,5_6_4,5_6_5,5_7_1,5_7_2,5_7_3,5_7_4,5_7_5,5_8_1,5_8_2,5_8_3,5_8_4,5_8_5,5_9_1,5_9_2,5_9_3,5_9_4,5_9_5,5_10_1,5_10_2,5_10_3,5_10_4,5_10_5) values ('".$_SESSION['ses_username']."','".$_POST["txt5_5_1"]."','".$_POST["txt5_5_2"]."','".$_POST["txt5_5_3"]."','".$_POST["txt5_5_4"]."','".$_POST["txt5_5_5"]."','".$_POST["txt5_2_1"]."','".$_POST["txt5_2_2"]."','".$_POST["txt5_2_3"]."','".$_POST["txt5_2_4"]."','".$_POST["txt5_2_5"]."','".$_POST["txt5_3_1"]."','".$_POST["txt5_3_2"]."','".$_POST["txt5_3_3"]."','".$_POST["txt5_3_4"]."','".$_POST["txt5_3_5"]."','".$_POST["txt5_4_1"]."','".$_POST["txt5_4_2"]."','".$_POST["txt5_4_3"]."','".$_POST["txt5_4_4"]."','".$_POST["txt5_4_5"]."','".$_POST["txt5_5_1"]."','".$_POST["txt5_5_2"]."','".$_POST["txt5_5_3"]."','".$_POST["txt5_5_4"]."','".$_POST["txt5_5_5"]."','".$_POST["txt5_6_1"]."','".$_POST["txt5_6_2"]."','".$_POST["txt5_6_3"]."','".$_POST["txt5_6_4"]."','".$_POST["txt5_6_5"]."','".$_POST["txt5_7_1"]."','".$_POST["txt5_7_2"]."','".$_POST["txt5_7_3"]."','".$_POST["txt5_7_4"]."','".$_POST["txt5_8_5"]."','".$_POST["txt5_8_1"]."','".$_POST["txt5_8_2"]."','".$_POST["txt5_8_3"]."','".$_POST["txt5_8_4"]."','".$_POST["txt5_8_5"]."','".$_POST["txt5_9_1"]."','".$_POST["txt5_9_2"]."','".$_POST["txt5_9_3"]."','".$_POST["txt5_9_4"]."','".$_POST["txt5_9_5"]."','".$_POST["txt5_10_1"]."','".$_POST["txt5_10_2"]."','".$_POST["txt5_10_3"]."','".$_POST["txt5_10_4"]."','".$_POST["txt5_10_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood5.php'>";
}
}else{
	$message = "ใส่จำนวนครูเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood5.php'>";
}
mysql_close($Conn); 
?>