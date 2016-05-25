<?php
$selstudent = mysql_query("SELECT SUM(mo1) AS totalmo1, SUM(mo2) AS totalmo2 ,SUM(mp1) AS totalmp1,SUM(mp2) AS totalmp2,SUM(mp3) AS totalmp3,SUM(mp4) AS totalmp4,SUM(mp5) AS totalmp5,SUM(mp6) AS totalmp6,SUM(mm1) AS totalmm1,SUM(mm2) AS totalmm2,SUM(mm3) AS totalmm3, SUM(fo1) AS totalfo1, SUM(fo2) AS totalfo2 ,SUM(fp1) AS totalfp1,SUM(fp2) AS totalfp2,SUM(fp3) AS totalfp3,SUM(fp4) AS totalfp4,SUM(fp5) AS totalfp5,SUM(fp6) AS totalfp6,SUM(fm1) AS totalfm1,SUM(fm2) AS totalfm2,SUM(fm3) AS totalfm3 FROM `student`");
$studentnum = mysql_num_rows($selstudent);
$studentResult = mysql_fetch_array($selstudent) or die  (mysql_error());

$sumo = array_sum(array($studentResult["totalmo1"],$studentResult["totalfo1"],$studentResult["totalmo2"],$studentResult["totalfo2"]));

$sumb = array_sum(array($studentResult['totalmp1'],$studentResult['totalmp2'],$studentResult['totalmp3'],$studentResult['totalmp4'],$studentResult['totalmp5'],$studentResult['totalmp6'],$studentResult['totalmm1'],$studentResult['totalmm2'],$studentResult['totalmm3'],$studentResult['totalfp1'],$studentResult['totalfp2'],$studentResult['totalfp3'],$studentResult['totalfp4'],$studentResult['totalfp5'],$studentResult['totalfp6'],$studentResult['totalfm1'],$studentResult['totalfm2'],$studentResult['totalfm3']));

?>