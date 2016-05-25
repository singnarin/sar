<?php
include("include/connect.php");
session_start();
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
if($schoolResult["status"]==1){
	$message = "ยืนยันข้มูลแล้วไม่สามารถแก้ไขได้";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
}else{
$generalnum = mysql_num_rows(mysql_query("SELECT * FROM `general` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($generalnum > 0) {
		mysql_query("UPDATE `general` SET `No` = '".$_POST["txtNo"]."', `moo` = '".$_POST["txtMoo"]."', `tambol`='".$_POST["txtTambol"]."', `district`='".$_POST["txtDistrict"]."', `province`='".$_POST["txtProvince"]."', `tel`='".$_POST["txtTel"]."', `email`='".$_POST["txtEmail"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into general(schoolid, No, moo, tambol, district, province, tel, email) values ('".$_SESSION['ses_username']."', '".$_POST["txtNo"]."', '".$_POST["txtMoo"]."', '".$_POST["txtTambol"]."', '".$_POST["txtDistrict"]."','".$_POST["txtProvince"]."', '".$_POST["txtTel"]."', '".$_POST["txtEmail"]."')") or die(mysql_error());
}

$studentnum = mysql_num_rows(mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($studentnum > 0) {
		mysql_query("UPDATE `student` SET `mo1` = '".$_POST["txtmo1"]."', `mo2` = '".$_POST["txtmo2"]."', `fo1` = '".$_POST["txtfo1"]."', `fo2` = '".$_POST["txtfo2"]."', `mp1` = '".$_POST["txtmp1"]."',`mp2` = '".$_POST["txtmp2"]."',`mp3` = '".$_POST["txtmp3"]."',`mp4` = '".$_POST["txtmp4"]."',`mp5` = '".$_POST["txtmp5"]."',`mp6` = '".$_POST["txtmp6"]."',`fp1` = '".$_POST["txtfp1"]."',`fp2` = '".$_POST["txtfp2"]."',`fp3` = '".$_POST["txtfp3"]."',`fp4` = '".$_POST["txtfp4"]."',`fp5` = '".$_POST["txtfp5"]."',`fp6` = '".$_POST["txtfp6"]."',`mm1` = '".$_POST["txtmm1"]."',`mm2` = '".$_POST["txtmm2"]."',`mm3` = '".$_POST["txtmm3"]."',`fm1` = '".$_POST["txtfm1"]."',`fm2` = '".$_POST["txtfm2"]."',`fm3` = '".$_POST["txtfm3"]."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
		mysql_query("insert into student(schoolid,fo1,fo2,mo1,mo2,mp1,mp2,mp3,mp4,mp5,mp6,fp1,fp2,fp3,fp4,fp5,fp6,mm1,mm2,mm3,fm1,fm2,fm3) values ('".$_SESSION['ses_username']."', '".$_POST["txtfo1"]."','".$_POST["txtfo2"]."','".$_POST["txtmo1"]."','".$_POST["txtmo2"]."','".$_POST["txtmp1"]."','".$_POST["txtmp2"]."','".$_POST["txtmp3"]."','".$_POST["txtmp4"]."','".$_POST["txtmp5"]."','".$_POST["txtmp6"]."','".$_POST["txtfp1"]."','".$_POST["txtfp2"]."','".$_POST["txtfp3"]."','".$_POST["txtfp4"]."','".$_POST["txtfp5"]."','".$_POST["txtfp6"]."','".$_POST["txtmm1"]."','".$_POST["txtmm2"]."','".$_POST["txtmm3"]."','".$_POST["txtfm1"]."','".$_POST["txtfm2"]."','".$_POST["txtfm3"]."')") or die(mysql_error());
}

$teachernum = mysql_num_rows(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'"));
if ($teachernum > 0) {
	$txtprimaryhigh = $_POST["txthighschoolteacher"] + $_POST["txtprimaryteacher"];
		mysql_query("UPDATE `teacher` SET `mDirector` = '".$_POST["txtmdirector"]."',`fDirector` = '".$_POST["txtfdirector"]."',`mDeputy` = '".$_POST["txtmdeputy"]."',`fDeputy` = '".$_POST["txtfdeputy"]."',`mRegular` = '".$_POST["txtmregular"]."',`fRegular` = '".$_POST["txtfregular"]."',`mRate` = '".$_POST["txtmrate"]."',`fRate` = '".$_POST["txtfrate"]."',`fJanitor` = '".$_POST["txtfjanitor"]."',`mJanitor` = '".$_POST["txtmjanitor"]."',`mTemp` = '".$_POST["txtmtemp"]."',`fTemp` = '".$_POST["txtftemp"]."',`sumteacher` = '".$_POST["txtsumteacher"]."',`childteacher` = '".$_POST["txtchildteacher"]."',`primaryteacher` = '".$_POST["txtprimaryteacher"]."',`highschoolteacher` = '".$_POST["txthighschoolteacher"]."',`primaryhigh` = '".$txtprimaryhigh."' WHERE `schoolid` = '".$_SESSION['ses_username']."'") or die (mysql_error());
}else{
	$txtprimaryhigh = $_POST["txthighschoolteacher"] + $_POST["txtprimaryteacher"];
		mysql_query("insert into teacher(schoolid, mDirector,fDirector,mDeputy,fDeputy,mRegular,fRegular,mRate,fRate,fJanitor,mJanitor,mTemp,fTemp,sumteacher,childteacher,primaryteacher,highschoolteacher,primaryhigh) values ('".$_SESSION['ses_username']."','".$_POST["txtmdirector"]."','".$_POST["txtfdirector"]."','".$_POST["txtmdeputy"]."','".$_POST["txtfdeputy"]."','".$_POST["txtmregular"]."','".$_POST["txtfregular"]."','".$_POST["txtmrate"]."','".$_POST["txtfrate"]."','".$_POST["txtfjanitor"]."','".$_POST["txtmjanitor"]."','".$_POST["txtmtemp"]."','".$_POST["txtftemp"]."','".$_POST["txtsumteacher"]."','".$_POST["txtchildteacher"]."','".$_POST["txtprimaryteacher"]."','".$_POST["txthighschoolteacher"]."','".$txtprimaryhigh."')") or die(mysql_error());
}
$message = "บันทึกข้อมูลเรียบร้อย";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=general.php'>";
mysql_close($Conn); 
}
?>