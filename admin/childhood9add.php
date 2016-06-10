<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c9num = mysql_num_rows(mysql_query("SELECT * FROM `c9` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($c9num > 0) {
		mysql_query("UPDATE `c9` SET `9_1` = '".$_POST["txt9_1"]."',`9_2` = '".$_POST["txt9_2"]."' WHERE `schoolid` = '".$_POST['txtschoolid']."'") or die (mysql_error());
}else{
		mysql_query("insert into c9(schoolid, `9_1`,`9_2`) values ('".$_POST['txtschoolid']."','".$_POST["txt9_1"]."','".$_POST["txt9_2"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood9sel.php'>";
mysql_close($Conn); 
}
?>