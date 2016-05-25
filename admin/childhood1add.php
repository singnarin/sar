<?php
session_start();
include("include/connect.php");
include("include/sumstudent.php");
$checksumo1_1 = array_sum(array($_POST["txt1_1_1"],$_POST["txt1_1_2"],$_POST["txt1_1_3"],$_POST["txt1_1_4"],$_POST["txt1_1_5"]));
$checksumo1_2 = array_sum(array($_POST["txt1_2_1"],$_POST["txt1_2_2"],$_POST["txt1_2_3"],$_POST["txt1_2_4"],$_POST["txt1_2_5"]));
$checksumo1_3 = array_sum(array($_POST["txt1_3_1"],$_POST["txt1_3_2"],$_POST["txt1_3_3"],$_POST["txt1_3_4"],$_POST["txt1_3_5"]));
$checksumo1_4 = array_sum(array($_POST["txt1_4_1"],$_POST["txt1_4_2"],$_POST["txt1_4_3"],$_POST["txt1_4_4"],$_POST["txt1_4_5"]));
if ($checksumo1_1 <= $sumo && $checksumo1_2 <= $sumo && $checksumo1_3 <= $sumo && $checksumo1_4 <= $sumo){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c1num = mysql_num_rows(mysql_query("SELECT * FROM `c1` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($c1num > 0) {
		mysql_query("UPDATE `c1` SET `1_1_1` = '".$_POST["txt1_1_1"]."',`1_1_2` = '".$_POST["txt1_1_2"]."',`1_1_3` = '".$_POST["txt1_1_3"]."',`1_1_4` = '".$_POST["txt1_1_4"]."',`1_1_5` = '".$_POST["txt1_1_5"]."',`1_2_1` = '".$_POST["txt1_2_1"]."',`1_2_2` = '".$_POST["txt1_2_2"]."',`1_2_3` = '".$_POST["txt1_2_3"]."',`1_2_4` = '".$_POST["txt1_2_4"]."',`1_2_5` = '".$_POST["txt1_2_5"]."',`1_3_1` = '".$_POST["txt1_3_1"]."',`1_3_2` = '".$_POST["txt1_3_2"]."',`1_3_3` = '".$_POST["txt1_3_3"]."',`1_3_4` = '".$_POST["txt1_3_4"]."',`1_3_5` = '".$_POST["txt1_3_5"]."',`1_4_1` = '".$_POST["txt1_4_1"]."',`1_4_2` = '".$_POST["txt1_4_2"]."',`1_4_3` = '".$_POST["txt1_4_3"]."',`1_4_4` = '".$_POST["txt1_4_4"]."',`1_4_5` = '".$_POST["txt1_4_5"]."'") or die (mysql_error());
}else{
		mysql_query("insert into c1(schoolid, 1_1_1,1_1_2,1_1_3,1_1_4,1_1_5,1_2_1,1_2_2,1_2_3,1_2_4,1_2_5,1_3_1,1_3_2,1_3_3,1_3_4,1_3_5,1_4_1,1_4_2,1_4_3,1_4_4,1_4_5) values ('".$_POST['txtschoolid']."', '".$_POST["txt1_1_1"]."','".$_POST["txt1_1_2"]."','".$_POST["txt1_1_3"]."','".$_POST["txt1_1_4"]."','".$_POST["txt1_1_5"]."','".$_POST["txt1_2_1"]."','".$_POST["txt1_2_2"]."','".$_POST["txt1_2_3"]."','".$_POST["txt1_2_4"]."','".$_POST["txt1_2_5"]."','".$_POST["txt1_3_1"]."','".$_POST["txt1_3_2"]."','".$_POST["txt1_3_3"]."','".$_POST["txt1_3_4"]."','".$_POST["txt1_3_5"]."','".$_POST["txt1_4_1"]."','".$_POST["txt1_4_2"]."','".$_POST["txt1_4_3"]."','".$_POST["txt1_4_4"]."','".$_POST["txt1_4_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood1sel.php'>";
}
}else{
	$message = "ใส่จำนวนนักเรียนเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood1sel.php'>";
}
mysql_close($Conn); 
?>