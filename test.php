<?php
include("include/connect.php");
session_start();
		$b1num = mysql_num_rows(mysql_query("SELECT * FROM `b1` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b2num = mysql_num_rows(mysql_query("SELECT * FROM `b2` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b3num = mysql_num_rows(mysql_query("SELECT * FROM `b3` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b4num = mysql_num_rows(mysql_query("SELECT * FROM `b4` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b5num = mysql_num_rows(mysql_query("SELECT * FROM `b5` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b6num = mysql_num_rows(mysql_query("SELECT * FROM `b6` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b7num = mysql_num_rows(mysql_query("SELECT * FROM `b7` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b8num = mysql_num_rows(mysql_query("SELECT * FROM `b8` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b9num = mysql_num_rows(mysql_query("SELECT * FROM `b9` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b10num = mysql_num_rows(mysql_query("SELECT * FROM `b10` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b11num = mysql_num_rows(mysql_query("SELECT * FROM `b11` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b12num = mysql_num_rows(mysql_query("SELECT * FROM `b12` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b13num = mysql_num_rows(mysql_query("SELECT * FROM `b13` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b14num = mysql_num_rows(mysql_query("SELECT * FROM `b14` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$b15num = mysql_num_rows(mysql_query("SELECT * FROM `b15` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
		$teachernum = mysql_num_rows(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));

	if ($b1num<1) {
		if ($b1num<1) {
			$b1echo = "ระดับพื้นฐาน มาตรฐานที่ 1 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b1echo = "";
		}
		if ($b2num<1) {
			$b2echo = "ระดับพื้นฐาน มาตรฐานที่ 2 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b2echo = "";
		}
		if ($b3num<1) {
			$b3echo = "ระดับพื้นฐาน มาตรฐานที่ 3 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b3echo = "";
		}
		if ($b4num<1) {
			$b4echo = "ระดับพื้นฐาน มาตรฐานที่ 4 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b4echo = "";
		}
		if ($b5num<1) {
			$b5echo = "ระดับพื้นฐาน มาตรฐานที่ 5 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b5echo = "";
		}
		if ($b6num<1) {
			$b6echo = "ระดับพื้นฐาน มาตรฐานที่ 6 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b6echo = "";
		}
		if ($b7num<1) {
			$b7echo = "ระดับพื้นฐาน มาตรฐานที่ 7 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b7echo = "";
		}
		if ($b8num<1) {
			$b8echo = "ระดับพื้นฐาน มาตรฐานที่ 8 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b8echo = "";
		}
		if ($b9num<1) {
			$b9echo = "ระดับพื้นฐาน มาตรฐานที่ 9 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b9echo = "";
		}
		if ($b10num<1) {
			$b10echo = "ระดับพื้นฐาน มาตรฐานที่ 10 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b10echo = "";
		}
		if ($b11num<1) {
			$b11echo = "ระดับพื้นฐาน มาตรฐานที่ 11 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b11echo = "";
		}
		if ($b12num<1) {
			$b12echo = "ระดับพื้นฐาน มาตรฐานที่ 12 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b12echo = "";
		}
		if ($b13num<1) {
			$b13echo = "ระดับพื้นฐาน มาตรฐานที่ 13 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b13echo = "";
		}
		if ($b14num<1) {
			$b14echo = "ระดับพื้นฐาน มาตรฐานที่ 14 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b14echo = "";
		}
		if ($b15num<1) {
			$b15echo = "ระดับพื้นฐาน มาตรฐานที่ 15 ยังไม่ได้บันทึกข้อมูล<br>";
		}else {
			$b15echo = "";
		}			
		echo $b1echo.$b2echo.$b3echo.$b4echo.$b5echo.$b6echo.$b7echo.$b8echo.$b9echo.$b10echo.$b11echo.$b12echo.$b13echo.$b14echo.$b15echo;
	}else{
		echo "<meta http-equiv='refresh' content='0;URL=basic.php'>";
	}
?>