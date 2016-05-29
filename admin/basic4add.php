<?php
session_start();
include("include/connect.php");
include("include/sumstudent.php");
$checksumb4_1 = array_sum(array($_POST["txt4_1_1"],$_POST["txt4_1_2"],$_POST["txt4_1_3"],$_POST["txt4_1_4"],$_POST["txt4_1_5"]));
$checksumb4_2 = array_sum(array($_POST["txt4_2_1"],$_POST["txt4_2_2"],$_POST["txt4_2_3"],$_POST["txt4_2_4"],$_POST["txt4_2_5"]));
$checksumb4_3 = array_sum(array($_POST["txt4_3_1"],$_POST["txt4_3_2"],$_POST["txt4_3_3"],$_POST["txt4_3_4"],$_POST["txt4_3_5"]));
$checksumb4_4 = array_sum(array($_POST["txt4_4_1"],$_POST["txt4_4_2"],$_POST["txt4_4_3"],$_POST["txt4_4_4"],$_POST["txt4_4_5"]));
if ($checksumb4_1 <= $sumb && $checksumb4_2 <= $sumb && $checksumb4_3 <= $sumb && $checksumb4_4 <= $sumb){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b4num = mysql_num_rows(mysql_query("SELECT * FROM `b4` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($b4num > 0) {
		mysql_query("UPDATE `b4` SET `4_1_1` = '".$_POST["txt4_1_1"]."',`4_1_2` = '".$_POST["txt4_1_2"]."',`4_1_3` = '".$_POST["txt4_1_3"]."',`4_1_4` = '".$_POST["txt4_1_4"]."',`4_1_5` = '".$_POST["txt4_1_5"]."',`4_2_1` = '".$_POST["txt4_2_1"]."',`4_2_2` = '".$_POST["txt4_2_2"]."',`4_2_3` = '".$_POST["txt4_2_3"]."',`4_2_4` = '".$_POST["txt4_2_4"]."',`4_2_5` = '".$_POST["txt4_2_5"]."',`4_3_1` = '".$_POST["txt4_3_1"]."',`4_3_2` = '".$_POST["txt4_3_2"]."',`4_3_3` = '".$_POST["txt4_3_3"]."',`4_3_4` = '".$_POST["txt4_3_4"]."',`4_3_5` = '".$_POST["txt4_3_5"]."',`4_4_1` = '".$_POST["txt4_4_1"]."',`4_4_2` = '".$_POST["txt4_4_2"]."',`4_4_3` = '".$_POST["txt4_4_3"]."',`4_4_4` = '".$_POST["txt4_4_4"]."',`4_4_5` = '".$_POST["txt4_4_5"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into b4(schoolid, 4_1_1,4_1_2,4_1_3,4_1_4,4_1_5,4_2_1,4_2_2,4_2_3,4_2_4,4_2_5,4_3_1,4_3_2,4_3_3,4_3_4,4_3_5,4_4_1,4_4_2,4_4_3,4_4_4,4_4_5) values ('".$_POST['txtschoolid']."', '".$_POST["txt4_1_1"]."','".$_POST["txt4_1_2"]."','".$_POST["txt4_1_3"]."','".$_POST["txt4_1_4"]."','".$_POST["txt4_1_5"]."','".$_POST["txt4_2_1"]."','".$_POST["txt4_2_2"]."','".$_POST["txt4_2_3"]."','".$_POST["txt4_2_4"]."','".$_POST["txt4_2_5"]."','".$_POST["txt4_3_1"]."','".$_POST["txt4_3_2"]."','".$_POST["txt4_3_3"]."','".$_POST["txt4_3_4"]."','".$_POST["txt4_3_5"]."','".$_POST["txt4_4_1"]."','".$_POST["txt4_4_2"]."','".$_POST["txt4_4_3"]."','".$_POST["txt4_4_4"]."','".$_POST["txt4_4_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic4sel.php'>";
}
}else{
	$message = "ใส่จำนวนนักเรียนเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic4sel.php'>";
}
mysql_close($Conn); 
?>