<?php
session_start();
include("include/connect.php");
include("include/sumstudent.php");
$checksumo3_1 = array_sum(array($_POST["txt3_1_1"],$_POST["txt3_1_2"],$_POST["txt3_1_3"],$_POST["txt3_1_4"],$_POST["txt3_1_5"]));
$checksumo3_2 = array_sum(array($_POST["txt3_2_1"],$_POST["txt3_2_2"],$_POST["txt3_2_3"],$_POST["txt3_2_4"],$_POST["txt3_2_5"]));
$checksumo3_3 = array_sum(array($_POST["txt3_3_1"],$_POST["txt3_3_2"],$_POST["txt3_3_3"],$_POST["txt3_3_4"],$_POST["txt3_3_5"]));
$checksumo3_4 = array_sum(array($_POST["txt3_4_1"],$_POST["txt3_4_2"],$_POST["txt3_4_3"],$_POST["txt3_4_4"],$_POST["txt3_4_5"]));
if ($checksumo3_1 <= $sumo && $checksumo3_2 <= $sumo && $checksumo3_3 <= $sumo && $checksumo3_4 <= $sumo){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c3num = mysql_num_rows(mysql_query("SELECT * FROM `c3` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($c3num > 0) {
		mysql_query("UPDATE `c3` SET `3_1_1` = '".$_POST["txt3_1_1"]."',`3_1_2` = '".$_POST["txt3_1_2"]."',`3_1_3` = '".$_POST["txt3_1_3"]."',`3_1_4` = '".$_POST["txt3_1_4"]."',`3_1_5` = '".$_POST["txt3_1_5"]."',`3_2_1` = '".$_POST["txt3_2_1"]."',`3_2_2` = '".$_POST["txt3_2_2"]."',`3_2_3` = '".$_POST["txt3_2_3"]."',`3_2_4` = '".$_POST["txt3_2_4"]."',`3_2_5` = '".$_POST["txt3_2_5"]."',`3_3_1` = '".$_POST["txt3_3_1"]."',`3_3_2` = '".$_POST["txt3_3_2"]."',`3_3_3` = '".$_POST["txt3_3_3"]."',`3_3_4` = '".$_POST["txt3_3_4"]."',`3_3_5` = '".$_POST["txt3_3_5"]."',`3_4_1` = '".$_POST["txt3_4_1"]."',`3_4_2` = '".$_POST["txt3_4_2"]."',`3_4_3` = '".$_POST["txt3_4_3"]."',`3_4_4` = '".$_POST["txt3_4_4"]."',`3_4_5` = '".$_POST["txt3_4_5"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into c3(schoolid, 3_1_1,3_1_2,3_1_3,3_1_4,3_1_5,3_2_1,3_2_2,3_2_3,3_2_4,3_2_5,3_3_1,3_3_2,3_3_3,3_3_4,3_3_5,3_4_1,3_4_2,3_4_3,3_4_4,3_4_5) values ('".$_SESSION['ses_username']."', '".$_POST["txt3_1_1"]."','".$_POST["txt3_1_2"]."','".$_POST["txt3_1_3"]."','".$_POST["txt3_1_4"]."','".$_POST["txt3_1_5"]."','".$_POST["txt3_2_1"]."','".$_POST["txt3_2_2"]."','".$_POST["txt3_2_3"]."','".$_POST["txt3_2_4"]."','".$_POST["txt3_2_5"]."','".$_POST["txt3_3_1"]."','".$_POST["txt3_3_2"]."','".$_POST["txt3_3_3"]."','".$_POST["txt3_3_4"]."','".$_POST["txt3_3_5"]."','".$_POST["txt3_4_1"]."','".$_POST["txt3_4_2"]."','".$_POST["txt3_4_3"]."','".$_POST["txt3_4_4"]."','".$_POST["txt3_4_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood3.php'>";
}
}else{
	$message = "ใส่จำนวนนักเรียนเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood3.php'>";
}
mysql_close($Conn); 
?>