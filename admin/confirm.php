<?php
include("include/connect.php");
session_start();

$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_GET['txtschoolid']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	mysql_query("UPDATE `tbschool` SET `status` = '0' WHERE `schoolid` = '".$_GET['txtschoolid']."'") or die(mysql_error());
}else{
	mysql_query("UPDATE `tbschool` SET `status` = '1' WHERE `schoolid` = '".$_GET['txtschoolid']."'") or die(mysql_error());
	}
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
?>