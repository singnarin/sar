<?php
session_start();
include("include/connect.php");
include("include/sumstudent.php");
$checksumb1_1 = array_sum(array($_POST["txt1_1_1"],$_POST["txt1_1_2"],$_POST["txt1_1_3"],$_POST["txt1_1_4"],$_POST["txt1_1_5"]));
$checksumb1_2 = array_sum(array($_POST["txt1_2_1"],$_POST["txt1_2_2"],$_POST["txt1_2_3"],$_POST["txt1_2_4"],$_POST["txt1_2_5"]));
$checksumb1_3 = array_sum(array($_POST["txt1_3_1"],$_POST["txt1_3_2"],$_POST["txt1_3_3"],$_POST["txt1_3_4"],$_POST["txt1_3_5"]));
$checksumb1_4 = array_sum(array($_POST["txt1_4_1"],$_POST["txt1_4_2"],$_POST["txt1_4_3"],$_POST["txt1_4_4"],$_POST["txt1_4_5"]));
$checksumb1_5 = array_sum(array($_POST["txt1_5_1"],$_POST["txt1_5_2"],$_POST["txt1_5_3"],$_POST["txt1_5_4"],$_POST["txt1_5_5"]));
$checksumb1_6 = array_sum(array($_POST["txt1_6_1"],$_POST["txt1_6_2"],$_POST["txt1_6_3"],$_POST["txt1_6_4"],$_POST["txt1_6_5"]));
if ($checksumb1_1 <= $sumb && $checksumb1_2 <= $sumb && $checksumb1_3 <= $sumb && $checksumb1_4 <= $sumb && $checksumb1_5 <= $sumb && $checksumb1_6 <= $sumb){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b1num = mysql_num_rows(mysql_query("SELECT * FROM `b1` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($b1num > 0) {
		mysql_query("UPDATE `b1` SET `1_1_1` = '".$_POST["txt1_1_1"]."',`1_1_2` = '".$_POST["txt1_1_2"]."',`1_1_3` = '".$_POST["txt1_1_3"]."',`1_1_4` = '".$_POST["txt1_1_4"]."',`1_1_5` = '".$_POST["txt1_1_5"]."',`1_2_1` = '".$_POST["txt1_2_1"]."',`1_2_2` = '".$_POST["txt1_2_2"]."',`1_2_3` = '".$_POST["txt1_2_3"]."',`1_2_4` = '".$_POST["txt1_2_4"]."',`1_2_5` = '".$_POST["txt1_2_5"]."',`1_3_1` = '".$_POST["txt1_3_1"]."',`1_3_2` = '".$_POST["txt1_3_2"]."',`1_3_3` = '".$_POST["txt1_3_3"]."',`1_3_4` = '".$_POST["txt1_3_4"]."',`1_3_5` = '".$_POST["txt1_3_5"]."',`1_4_1` = '".$_POST["txt1_4_1"]."',`1_4_2` = '".$_POST["txt1_4_2"]."',`1_4_3` = '".$_POST["txt1_4_3"]."',`1_4_4` = '".$_POST["txt1_4_4"]."',`1_4_5` = '".$_POST["txt1_4_5"]."',`1_5_1` = '".$_POST["txt1_5_1"]."',`1_5_2` = '".$_POST["txt1_5_2"]."',`1_5_3` = '".$_POST["txt1_5_3"]."',`1_5_4` = '".$_POST["txt1_5_4"]."',`1_5_5` = '".$_POST["txt1_5_5"]."',`1_6_1` = '".$_POST["txt1_6_1"]."',`1_6_2` = '".$_POST["txt1_6_2"]."',`1_6_3` = '".$_POST["txt1_6_3"]."',`1_6_4` = '".$_POST["txt1_6_4"]."',`1_6_5` = '".$_POST["txt1_6_5"]."'") or die (mysql_error());
}else{
		mysql_query("insert into b1(schoolid, 1_1_1,1_1_2,1_1_3,1_1_4,1_1_5,1_2_1,1_2_2,1_2_3,1_2_4,1_2_5,1_3_1,1_3_2,1_3_3,1_3_4,1_3_5,1_4_1,1_4_2,1_4_3,1_4_4,1_4_5,1_5_1,1_5_2,1_5_3,1_5_4,1_5_5,1_6_1,1_6_2,1_6_3,1_6_4,1_6_5) values ('".$_SESSION['ses_username']."', '".$_POST["txt1_1_1"]."','".$_POST["txt1_1_2"]."','".$_POST["txt1_1_3"]."','".$_POST["txt1_1_4"]."','".$_POST["txt1_1_5"]."','".$_POST["txt1_2_1"]."','".$_POST["txt1_2_2"]."','".$_POST["txt1_2_3"]."','".$_POST["txt1_2_4"]."','".$_POST["txt1_2_5"]."','".$_POST["txt1_3_1"]."','".$_POST["txt1_3_2"]."','".$_POST["txt1_3_3"]."','".$_POST["txt1_3_4"]."','".$_POST["txt1_3_5"]."','".$_POST["txt1_4_1"]."','".$_POST["txt1_4_2"]."','".$_POST["txt1_4_3"]."','".$_POST["txt1_4_4"]."','".$_POST["txt1_4_5"]."','".$_POST["txt1_5_1"]."','".$_POST["txt1_5_2"]."','".$_POST["txt1_5_3"]."','".$_POST["txt1_5_4"]."','".$_POST["txt1_5_5"]."','".$_POST["txt1_6_1"]."','".$_POST["txt1_6_2"]."','".$_POST["txt1_6_3"]."','".$_POST["txt1_6_4"]."','".$_POST["txt1_6_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic1.php'>";
}
}else{
	$message = "ใส่จำนวนนักเรียนเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic1.php'>";
}
mysql_close($Conn); 
?>