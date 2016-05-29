<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$b5num = mysql_num_rows(mysql_query("SELECT * FROM `b5` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($b5num > 0) {
		mysql_query("UPDATE `b5` SET `5_1` = '".$_POST["txt5_1"]."',`5_2` = '".$_POST["txt5_2"]."',`5_3` = '".$_POST["txt5_3"]."',`5_4` = '".$_POST["txt5_4"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into b5(schoolid, `5_1`,`5_2`,`5_3`,`5_4`) values ('".$_POST['txtschoolid']."','".$_POST["txt5_1"]."','".$_POST["txt5_2"]."','".$_POST["txt5_3"]."','".$_POST["txt5_4"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=basic5sel.php'>";
mysql_close($Conn); 
}
?>