<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c6num = mysql_num_rows(mysql_query("SELECT * FROM `c6` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($c6num > 0) {
		mysql_query("UPDATE `c6` SET `6_1` = '".$_POST["txt6_1"]."',`6_2` = '".$_POST["txt6_2"]."',`6_3` = '".$_POST["txt6_3"]."',`6_4` = '".$_POST["txt6_4"]."',`6_5` = '".$_POST["txt6_5"]."',`6_6` = '".$_POST["txt6_6"]."',`6_7` = '".$_POST["txt6_7"]."' WHERE `schoolid` = '".$_POST['txtschoolid']."'") or die (mysql_error());
}else{
		mysql_query("insert into c6(schoolid, `6_1`,`6_2`,`6_3`,`6_4`,`6_5`,`6_6`,`6_7`) values ('".$_POST['txtschoolid']."','".$_POST["txt6_1"]."','".$_POST["txt6_2"]."','".$_POST["txt6_3"]."','".$_POST["txt6_4"]."','".$_POST["txt6_5"]."','".$_POST["txt6_6"]."','".$_POST["txt6_7"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood6sel.php'>";
mysql_close($Conn); 
}
?>