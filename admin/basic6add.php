<?php
session_start();
include("include/connect.php");
include("include/sumstudent.php");
$checksumb6_1 = array_sum(array($_POST["txt6_1_1"],$_POST["txt6_1_2"],$_POST["txt6_1_3"],$_POST["txt6_1_4"],$_POST["txt6_1_5"]));
$checksumb6_2 = array_sum(array($_POST["txt6_2_1"],$_POST["txt6_2_2"],$_POST["txt6_2_3"],$_POST["txt6_2_4"],$_POST["txt6_2_5"]));
$checksumb6_3 = array_sum(array($_POST["txt6_3_1"],$_POST["txt6_3_2"],$_POST["txt6_3_3"],$_POST["txt6_3_4"],$_POST["txt6_3_5"]));
$checksumb6_4 = array_sum(array($_POST["txt6_4_1"],$_POST["txt6_4_2"],$_POST["txt6_4_3"],$_POST["txt6_4_4"],$_POST["txt6_4_5"]));
if ($checksumb6_1 <= $sumb && $checksumb6_2 <= $sumb && $checksumb6_3 <= $sumb && $checksumb6_4 <= $sumb){
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b6num = mysql_num_rows(mysql_query("SELECT * FROM `b6` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($b6num > 0) {
		mysql_query("UPDATE `b6` SET `6_1_1` = '".$_POST["txt6_1_1"]."',`6_1_2` = '".$_POST["txt6_1_2"]."',`6_1_3` = '".$_POST["txt6_1_3"]."',`6_1_4` = '".$_POST["txt6_1_4"]."',`6_1_5` = '".$_POST["txt6_1_5"]."',`6_2_1` = '".$_POST["txt6_2_1"]."',`6_2_2` = '".$_POST["txt6_2_2"]."',`6_2_3` = '".$_POST["txt6_2_3"]."',`6_2_4` = '".$_POST["txt6_2_4"]."',`6_2_5` = '".$_POST["txt6_2_5"]."',`6_3_1` = '".$_POST["txt6_3_1"]."',`6_3_2` = '".$_POST["txt6_3_2"]."',`6_3_3` = '".$_POST["txt6_3_3"]."',`6_3_4` = '".$_POST["txt6_3_4"]."',`6_3_5` = '".$_POST["txt6_3_5"]."',`6_4_1` = '".$_POST["txt6_4_1"]."',`6_4_2` = '".$_POST["txt6_4_2"]."',`6_4_3` = '".$_POST["txt6_4_3"]."',`6_4_4` = '".$_POST["txt6_4_4"]."',`6_4_5` = '".$_POST["txt6_4_5"]."'") or die (mysql_error());
}else{
		mysql_query("insert into b6(schoolid, 6_1_1,6_1_2,6_1_3,6_1_4,6_1_5,6_2_1,6_2_2,6_2_3,6_2_4,6_2_5,6_3_1,6_3_2,6_3_3,6_3_4,6_3_5,6_4_1,6_4_2,6_4_3,6_4_4,6_4_5) values ('".$_POST['txtschoolid']."', '".$_POST["txt6_1_1"]."','".$_POST["txt6_1_2"]."','".$_POST["txt6_1_3"]."','".$_POST["txt6_1_4"]."','".$_POST["txt6_1_5"]."','".$_POST["txt6_2_1"]."','".$_POST["txt6_2_2"]."','".$_POST["txt6_2_3"]."','".$_POST["txt6_2_4"]."','".$_POST["txt6_2_5"]."','".$_POST["txt6_3_1"]."','".$_POST["txt6_3_2"]."','".$_POST["txt6_3_3"]."','".$_POST["txt6_3_4"]."','".$_POST["txt6_3_5"]."','".$_POST["txt6_4_1"]."','".$_POST["txt6_4_2"]."','".$_POST["txt6_4_3"]."','".$_POST["txt6_4_4"]."','".$_POST["txt6_4_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic6sel.php'>";
}
}else{
	$message = "ใส่จำนวนนักเรียนเกิน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic6sel.php'>";
}
mysql_close($Conn); 
?>