<?php
session_start();
include("include/connect.php");
include("include/sumstudent.php");
$checksumo2_1 = array_sum(array($_POST["txt2_1_1"],$_POST["txt2_1_2"],$_POST["txt2_1_3"],$_POST["txt2_1_4"],$_POST["txt2_1_5"]));
$checksumo2_2 = array_sum(array($_POST["txt2_2_1"],$_POST["txt2_2_2"],$_POST["txt2_2_3"],$_POST["txt2_2_4"],$_POST["txt2_2_5"]));
$checksumo2_3 = array_sum(array($_POST["txt2_3_1"],$_POST["txt2_3_2"],$_POST["txt2_3_3"],$_POST["txt2_3_4"],$_POST["txt2_3_5"]));
$checksumo2_4 = array_sum(array($_POST["txt2_4_1"],$_POST["txt2_4_2"],$_POST["txt2_4_3"],$_POST["txt2_4_4"],$_POST["txt2_4_5"]));
if ($checksumo2_1 <= $sumo && $checksumo2_2 <= $sumo && $checksumo2_3 <= $sumo && $checksumo2_4 <= $sumo){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c2num = mysql_num_rows(mysql_query("SELECT * FROM `c2` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($c2num > 0) {
		mysql_query("UPDATE `c2` SET `2_1_1` = '".$_POST["txt2_1_1"]."',`2_1_2` = '".$_POST["txt2_1_2"]."',`2_1_3` = '".$_POST["txt2_1_3"]."',`2_1_4` = '".$_POST["txt2_1_4"]."',`2_1_5` = '".$_POST["txt2_1_5"]."',`2_2_1` = '".$_POST["txt2_2_1"]."',`2_2_2` = '".$_POST["txt2_2_2"]."',`2_2_3` = '".$_POST["txt2_2_3"]."',`2_2_4` = '".$_POST["txt2_2_4"]."',`2_2_5` = '".$_POST["txt2_2_5"]."',`2_3_1` = '".$_POST["txt2_3_1"]."',`2_3_2` = '".$_POST["txt2_3_2"]."',`2_3_3` = '".$_POST["txt2_3_3"]."',`2_3_4` = '".$_POST["txt2_3_4"]."',`2_3_5` = '".$_POST["txt2_3_5"]."',`2_4_1` = '".$_POST["txt2_4_1"]."',`2_4_2` = '".$_POST["txt2_4_2"]."',`2_4_3` = '".$_POST["txt2_4_3"]."',`2_4_4` = '".$_POST["txt2_4_4"]."',`2_4_5` = '".$_POST["txt2_4_5"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into c2(schoolid, 2_1_1,2_1_2,2_1_3,2_1_4,2_1_5,2_2_1,2_2_2,2_2_3,2_2_4,2_2_5,2_3_1,2_3_2,2_3_3,2_3_4,2_3_5,2_4_1,2_4_2,2_4_3,2_4_4,2_4_5) values ('".$_POST['txtschoolid']."', '".$_POST["txt2_1_1"]."','".$_POST["txt2_1_2"]."','".$_POST["txt2_1_3"]."','".$_POST["txt2_1_4"]."','".$_POST["txt2_1_5"]."','".$_POST["txt2_2_1"]."','".$_POST["txt2_2_2"]."','".$_POST["txt2_2_3"]."','".$_POST["txt2_2_4"]."','".$_POST["txt2_2_5"]."','".$_POST["txt2_3_1"]."','".$_POST["txt2_3_2"]."','".$_POST["txt2_3_3"]."','".$_POST["txt2_3_4"]."','".$_POST["txt2_3_5"]."','".$_POST["txt2_4_1"]."','".$_POST["txt2_4_2"]."','".$_POST["txt2_4_3"]."','".$_POST["txt2_4_4"]."','".$_POST["txt2_4_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood2sel.php'>";
}
}else{
	$message = "ใส่จำนวนนักเรียนเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood2sel.php'>";
}
mysql_close($Conn); 
?>