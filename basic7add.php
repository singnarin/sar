<?php
session_start();
include("include/connect.php");
$teacherResult = mysql_fetch_array(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
$checksumb7_1 = array_sum(array($_POST["txt7_1_1"],$_POST["txt7_1_2"],$_POST["txt7_1_3"],$_POST["txt7_1_4"],$_POST["txt7_1_5"]));
$checksumb7_2 = array_sum(array($_POST["txt7_2_1"],$_POST["txt7_2_2"],$_POST["txt7_2_3"],$_POST["txt7_2_4"],$_POST["txt7_2_5"]));
$checksumb7_3 = array_sum(array($_POST["txt7_3_1"],$_POST["txt7_3_2"],$_POST["txt7_3_3"],$_POST["txt7_3_4"],$_POST["txt7_3_5"]));
$checksumb7_4 = array_sum(array($_POST["txt7_4_1"],$_POST["txt7_4_2"],$_POST["txt7_4_3"],$_POST["txt7_4_4"],$_POST["txt7_4_5"]));
$checksumb7_5 = array_sum(array($_POST["txt7_5_1"],$_POST["txt7_5_2"],$_POST["txt7_5_3"],$_POST["txt7_5_4"],$_POST["txt7_5_5"]));
$checksumb7_6 = array_sum(array($_POST["txt7_6_1"],$_POST["txt7_6_2"],$_POST["txt7_6_3"],$_POST["txt7_6_4"],$_POST["txt7_6_5"]));
$checksumb7_7 = array_sum(array($_POST["txt7_7_1"],$_POST["txt7_7_2"],$_POST["txt7_7_3"],$_POST["txt7_7_4"],$_POST["txt7_7_5"]));
$checksumb7_8 = array_sum(array($_POST["txt7_8_1"],$_POST["txt7_8_2"],$_POST["txt7_8_3"],$_POST["txt7_8_4"],$_POST["txt7_8_5"]));
$checksumb7_9 = array_sum(array($_POST["txt7_9_1"],$_POST["txt7_9_2"],$_POST["txt7_9_3"],$_POST["txt7_9_4"],$_POST["txt7_9_5"]));
if ($checksumb7_1 <= $teacherResult["primaryhigh"] && $checksumb7_2 <= $teacherResult["primaryhigh"] && $checksumb7_3 <= $teacherResult["primaryhigh"] && $checksumb7_4 <= $teacherResult["primaryhigh"] && $checksumb7_5 <= $teacherResult["primaryhigh"] && $checksumb7_6 <= $teacherResult["primaryhigh"] && $checksumb7_7 <= $teacherResult["primaryhigh"] && $checksumb7_8 <= $teacherResult["primaryhigh"] && $checksumb7_9 <= $teacherResult["primaryhigh"]){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b7num = mysql_num_rows(mysql_query("SELECT * FROM `b7` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($b7num > 0) {
		mysql_query("UPDATE `b7` SET `7_1_1` = '".$_POST["txt7_1_1"]."',`7_1_2` = '".$_POST["txt7_1_2"]."',`7_1_3` = '".$_POST["txt7_1_3"]."',`7_1_4` = '".$_POST["txt7_1_4"]."',`7_1_5` = '".$_POST["txt7_1_5"]."',`7_2_1` = '".$_POST["txt7_2_1"]."',`7_2_2` = '".$_POST["txt7_2_2"]."',`7_2_3` = '".$_POST["txt7_2_3"]."',`7_2_4` = '".$_POST["txt7_2_4"]."',`7_2_5` = '".$_POST["txt7_2_5"]."',`7_3_1` = '".$_POST["txt7_3_1"]."',`7_3_2` = '".$_POST["txt7_3_2"]."',`7_3_3` = '".$_POST["txt7_3_3"]."',`7_3_4` = '".$_POST["txt7_3_4"]."',`7_3_5` = '".$_POST["txt7_3_5"]."',`7_4_1` = '".$_POST["txt7_4_1"]."',`7_4_2` = '".$_POST["txt7_4_2"]."',`7_4_3` = '".$_POST["txt7_4_3"]."',`7_4_4` = '".$_POST["txt7_4_4"]."',`7_4_5` = '".$_POST["txt7_4_5"]."',`7_5_1` = '".$_POST["txt7_5_1"]."',`7_5_2` = '".$_POST["txt7_5_2"]."',`7_5_3` = '".$_POST["txt7_5_3"]."',`7_5_4` = '".$_POST["txt7_5_4"]."',`7_5_5` = '".$_POST["txt7_5_5"]."',`7_6_1` = '".$_POST["txt7_6_1"]."',`7_6_2` = '".$_POST["txt7_6_2"]."',`7_6_3` = '".$_POST["txt7_6_3"]."',`7_6_4` = '".$_POST["txt7_6_4"]."',`7_6_5` = '".$_POST["txt7_6_5"]."',`7_7_1` = '".$_POST["txt7_7_1"]."',`7_7_2` = '".$_POST["txt7_7_2"]."',`7_7_3` = '".$_POST["txt7_7_3"]."',`7_7_4` = '".$_POST["txt7_7_4"]."',`7_7_5` = '".$_POST["txt7_7_5"]."',`7_8_1` = '".$_POST["txt7_8_1"]."',`7_8_2` = '".$_POST["txt7_8_2"]."',`7_8_3` = '".$_POST["txt7_8_3"]."',`7_8_4` = '".$_POST["txt7_8_4"]."',`7_8_5` = '".$_POST["txt7_8_5"]."',`7_9_1` = '".$_POST["txt7_9_1"]."',`7_9_2` = '".$_POST["txt7_9_2"]."',`7_9_3` = '".$_POST["txt7_9_3"]."',`7_9_4` = '".$_POST["txt7_9_4"]."',`7_9_5` = '".$_POST["txt7_9_5"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into b7(schoolid, 7_1_1,7_1_2,7_1_3,7_1_4,7_1_5,7_2_1,7_2_2,7_2_3,7_2_4,7_2_5,7_3_1,7_3_2,7_3_3,7_3_4,7_3_5,7_4_1,7_4_2,7_4_3,7_4_4,7_4_5,7_5_1,7_5_2,7_5_3,7_5_4,7_5_5,7_6_1,7_6_2,7_6_3,7_6_4,7_6_5,7_7_1,7_7_2,7_7_3,7_7_4,7_7_5,7_8_1,7_8_2,7_8_3,7_8_4,7_8_5,7_9_1,7_9_2,7_9_3,7_9_4,7_9_5) values ('".$_SESSION['ses_username']."', '".$_POST["txt7_1_1"]."','".$_POST["txt7_1_2"]."','".$_POST["txt7_1_3"]."','".$_POST["txt7_1_4"]."','".$_POST["txt7_1_5"]."','".$_POST["txt7_2_1"]."','".$_POST["txt7_2_2"]."','".$_POST["txt7_2_3"]."','".$_POST["txt7_2_4"]."','".$_POST["txt7_2_5"]."','".$_POST["txt7_3_1"]."','".$_POST["txt7_3_2"]."','".$_POST["txt7_3_3"]."','".$_POST["txt7_3_4"]."','".$_POST["txt7_3_5"]."','".$_POST["txt7_4_1"]."','".$_POST["txt7_4_2"]."','".$_POST["txt7_4_3"]."','".$_POST["txt7_4_4"]."','".$_POST["txt7_4_5"]."','".$_POST["txt7_5_1"]."','".$_POST["txt7_5_2"]."','".$_POST["txt7_5_3"]."','".$_POST["txt7_5_4"]."','".$_POST["txt7_5_5"]."','".$_POST["txt7_6_1"]."','".$_POST["txt7_6_2"]."','".$_POST["txt7_6_3"]."','".$_POST["txt7_6_4"]."','".$_POST["txt7_6_5"]."','".$_POST["txt7_7_1"]."','".$_POST["txt7_7_2"]."','".$_POST["txt7_7_3"]."','".$_POST["txt7_7_4"]."','".$_POST["txt7_7_5"]."','".$_POST["txt7_8_1"]."','".$_POST["txt7_8_2"]."','".$_POST["txt7_8_3"]."','".$_POST["txt7_8_4"]."','".$_POST["txt7_8_5"]."','".$_POST["txt7_9_1"]."','".$_POST["txt7_9_2"]."','".$_POST["txt7_9_3"]."','".$_POST["txt7_9_4"]."','".$_POST["txt7_9_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic7.php'>";
}
}else{
	$message = "ไม่สามารถบันทึกข้อมูลได้ เนื่องจากใส่จำนวนครูเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic7.php'>";
}
mysql_close($Conn); 
?>