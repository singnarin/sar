<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_POST['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$c7num = mysql_num_rows(mysql_query("SELECT * FROM `c7` WHERE `schoolid` = '".$_POST['txtschoolid']."'"));
if ($c7num > 0) {
		mysql_query("UPDATE `c7` SET `7_1` = '".$_POST["txt7_1"]."',`7_2` = '".$_POST["txt7_2"]."',`7_3` = '".$_POST["txt7_3"]."',`7_4` = '".$_POST["txt7_4"]."',`7_5` = '".$_POST["txt7_5"]."' WHERE `schoolid` = '".$_POST['txtschoolid']."'") or die (mysql_error());
}else{
		mysql_query("insert into c7(schoolid, `7_1`,`7_2`,`7_3`,`7_4`,`7_5`) values ('".$_POST['txtschoolid']."','".$_POST["txt7_1"]."','".$_POST["txt7_2"]."','".$_POST["txt7_3"]."','".$_POST["txt7_4"]."','".$_POST["txt7_5"]."')") or die(mysql_error());
}

$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=childhood7sel.php'>";
mysql_close($Conn); 
}
?>