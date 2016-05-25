<?php
$selstudent = mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
$studentnum = mysql_num_rows($selstudent);
	if ($studentnum > 0) {
		$studentResult = mysql_fetch_array($selstudent) or die  (mysql_error());
		$sumo1 = array($studentResult["mo1"],$studentResult["fo1"]);
		$sumo2 = array($studentResult["mo2"],$studentResult["fo2"]);

		$sumo = array_sum(array(array_sum($sumo2),array_sum($sumo1)));

		$sumb = array_sum(array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6'],$studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3'],$studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6'],$studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']));
	}else{
		$sumo = 0;
		$sumb = 0;
	}
?>