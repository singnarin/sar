<?php
include("include/connect.php");
session_start();
header("Content-Type: application/vnd.ms-excel");
$date = date("Y-m-d");
header('Content-Disposition: attachment; filename="จำนวนบุคลากร'.$date.'.xls"');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php
		$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_GET['txtschoolid']."'")) or die  (mysql_error());

		$selgeneral = mysql_query("SELECT * FROM `general` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$generalnum = mysql_num_rows($selgeneral);
		if ($generalnum > 0) {
			$generalResult = mysql_fetch_array($selgeneral) or die  (mysql_error());
		}

		$selstudent = mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$studentnum = mysql_num_rows($selstudent);
		if ($studentnum > 0) {
			$studentResult = mysql_fetch_array($selstudent) or die  (mysql_error());
		}

		$selteacher = mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_GET['txtschoolid']."'");
		$teachernum = mysql_num_rows($selteacher);
		if ($teachernum > 0) {
			$teacherResult = mysql_fetch_array($selteacher) or die  (mysql_error());
		}		

?>
<table align="center" width="100%"  border="1">
			<tr>
				<td colspan="6"><div align="center"><br><h4>ข้อมูลที่ตั้ง</h4></div></td>
			</tr>
			<tr>
				<td>รหัสโรงเรียน</td>
				<td><?php echo $_GET['txtschoolid'];?></td>
				<td>ชื่อโรงเรียน</td>
				<td><?php echo $schoolResult['schoolname'];?></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>เลขที่</td>
				<td><?php echo $generalResult['No'];?></td>
				<td>หมู่ที่</td>
				<td><?php echo $generalResult['moo'];?></td>
				<td>ตำบล</td>
				<td><?php echo $generalResult['tambol'];?></td>
			</tr>
			<tr>
				<td>อำเภอ</td>
				<td><?php echo $generalResult['district'];?></td>
				<td>จังหวัด</td>
				<td><?php echo $generalResult['province'];?></td>
				<td>โทร</td>
				<td><?php echo $generalResult['tel'];?></td>
			</tr>
			<tr>
				<td>email</td>
				<td><?php echo $generalResult['email'];?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
</table>
<table  align="center"  width="100%"  border="1">
			<tr>
				<td colspan="16"><div align="center"><h4>ข้อมูลนักเรียน</h4></div></td>
			</tr>
			<tr>
				<td>เพศ</td>
				<td><div align="center">อ.1</div></td>
				<td><div align="center">อ.2</div></td>
				<td><div align="center">รวม</div></td>
				<td><div align="center">ป.1</div></td>
				<td><div align="center">ป.2</div></td>
				<td><div align="center">ป.3</div></td>
				<td><div align="center">ป.4</div></td>
				<td><div align="center">ป.5</div></td>
				<td><div align="center">ป.6</div></td>
				<td><div align="center">รวม</div></td>
				<td><div align="center">ม.1</div></td>
				<td><div align="center">ม.2</div></td>
				<td><div align="center">ม.3</div></td>
				<td><div align="center">รวม</div></td>
				<td><div align="center">รวมทุกระดับ</div></td>
			</tr>
			<tr>
				<td>ชาย</td>
				<td><?php echo $studentResult['mo1'];?></td>
				<td><?php echo $studentResult['mo2'];?></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summo = array($studentResult['mo2'],$studentResult['mo1']);
						echo array_sum($summo);
						}
				?>
				</div></td>
				<td><?php echo $studentResult['mp1'];?></td>
				<td><?php echo $studentResult['mp2'];?></td>
				<td><?php echo $studentResult['mp3'];?></td>
				<td><?php echo $studentResult['mp4'];?></td>
				<td><?php echo $studentResult['mp5'];?></td>
				<td><?php echo $studentResult['mp6'];?></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summp = array($studentResult['mp1'],$studentResult['mp2'],$studentResult['mp3'],$studentResult['mp4'],$studentResult['mp5'],$studentResult['mp6']);
						echo array_sum($summp);
						}
				?>
				</div></td>
				<td><?php echo $studentResult['mm1'];?></td>
				<td><?php echo $studentResult['mm2'];?></td>
				<td><?php echo $studentResult['mm3'];?></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summm = array($studentResult['mm1'],$studentResult['mm2'],$studentResult['mm3']);
						echo array_sum($summm);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ = array(array_sum($summo),array_sum($summp),array_sum($summm));
						echo array_sum($summ);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td>หญิง</td>
				<td><?php echo $studentResult['fo1'];?></td>
				<td><?php echo $studentResult['fo2'];?></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumfo = array($studentResult['fo1'],$studentResult['fo2']);
						echo array_sum($sumfo);
						}
				?>
				</div></td>
				<td><?php echo $studentResult['fp1'];?></td>
				<td><?php echo $studentResult['fp2'];?></td>
				<td><?php echo $studentResult['fp3'];?></td>
				<td><?php echo $studentResult['fp4'];?></td>
				<td><?php echo $studentResult['fp5'];?></td>
				<td><?php echo $studentResult['fp6'];?></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumfp = array($studentResult['fp1'],$studentResult['fp2'],$studentResult['fp3'],$studentResult['fp4'],$studentResult['fp5'],$studentResult['fp6']);
						echo array_sum($sumfp);
						}
				?>
				</div></td>
				<td><?php echo $studentResult['fm1'];?></td>
				<td><?php echo $studentResult['fm2'];?></td>
				<td><?php echo $studentResult['fm3'];?></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumfm = array($studentResult['fm1'],$studentResult['fm2'],$studentResult['fm3']);
						echo array_sum($sumfm);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumf = array(array_sum($sumfo),array_sum($sumfp),array_sum($sumfm));
						echo array_sum($sumf);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td>รวม</td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumo1 = array($studentResult["mo1"],$studentResult["fo1"]);
						echo array_sum($sumo1);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumo2 = array($studentResult["mo2"],$studentResult["fo2"]);
						echo array_sum($sumo2);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumo = array(array_sum($sumo2),array_sum($sumo1));
						echo array_sum($sumo);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump1 = array($studentResult["mp1"],$studentResult["fp1"]);
						echo array_sum($sump1);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump2 = array($studentResult["mp2"],$studentResult["fp2"]);
						echo array_sum($sump2);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump3 = array($studentResult["mp3"],$studentResult["fp3"]);
						echo array_sum($sump3);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump4 = array($studentResult["mp4"],$studentResult["fp4"]);
						echo array_sum($sump4);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump5 = array($studentResult["mp5"],$studentResult["fp5"]);
						echo array_sum($sump5);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump6 = array($studentResult["mp6"],$studentResult["fp6"]);
						echo array_sum($sump6);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sump = array(array_sum($sump1),array_sum($sump2),array_sum($sump3),array_sum($sump4),array_sum($sump5),array_sum($sump6));
						echo array_sum($sump);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ1 = array($studentResult["mm1"],$studentResult["fm1"]);
						echo array_sum($summ1);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ2 = array($studentResult["mm2"],$studentResult["fm2"]);
						echo array_sum($summ2);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ3 = array($studentResult["mm3"],$studentResult["fm3"]);
						echo array_sum($summ3);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$summ = array(array_sum($summ1),array_sum($summ2),array_sum($summ3));
						echo array_sum($summ);
						}
				?>
				</div></td>
				<td><div align="center">
				<?php 
				if ($studentnum > 0) {
					$sumstudent = array(array_sum($sumo),array_sum($sump),array_sum($summ));
						echo array_sum($sumstudent);
						}
				?>
				</div></td>
			</tr>
		</table>
		<table align="center"  width="100%"  border="1">
			<tr>
				<td colspan="12"><div align="center"><h4>ข้อมูลจำนวนครูและบุคลากร</h4></div></td>
			</tr>
			<tr>
				<th><div align="center" >ประเภทบุคลากร</div></th>
				<th><div align="center" >ชาย</div></th>
				<th><div align="center" >หญิง</div></th>
				<th><div align="center" >รวม</div></th>
			</tr>
			<tr>
				<td><div align="left" >ผู้อำนวยการ</div></td>
				<td><div align="center" ><?php echo $teacherResult['mDirector'];?></div></td>
				<td><div align="center" ><?php echo $teacherResult['fDirector'];?></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumdirector = array($teacherResult['mDirector'],$teacherResult['fDirector']);
						echo array_sum($sumdirector);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >รองผู้อำนวยการ</div></td>
				<td><div align="center" ><?php echo $teacherResult['mDeputy'];?></div></td>
				<td><div align="center" ><?php echo $teacherResult['fDeputy'];?></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumDeputy = array($teacherResult['mDeputy'],$teacherResult['fDeputy']);
						echo array_sum($sumDeputy);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >ครูประจำการ</div></td>
				<td><div align="center" ><?php echo $teacherResult['mRegular'];?></div></td>
				<td><div align="center" ><?php echo $teacherResult['fRegular'];?></div></td>
				<td><div align="center" ><?php 
				if ($teachernum > 0) {
					$sumRegular = array($teacherResult['mRegular'],$teacherResult['fRegular']);
						echo array_sum($sumRegular);
						}
				?></div></td>
			</tr>
			<tr>
				<td><div align="left" >ครูอัตราจ้าง</div></td>
				<td><div align="center" ><?php echo $teacherResult['mRate'];?></div></td>
				<td><div align="center" ><?php echo $teacherResult['fRate'];?></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumRate = array($teacherResult['mRate'],$teacherResult['fRate']);
						echo array_sum($sumRate);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >นักการภารโรง</div></td>
				<td><div align="center" ><?php echo $teacherResult['mJanitor'];?></div></td>
				<td><div align="center" ><?php echo $teacherResult['fJanitor'];?></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumJanitor = array($teacherResult['mJanitor'],$teacherResult['fJanitor']);
						echo array_sum($sumJanitor);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >ครูโรงเรียนจ้าง</div></td>
				<td><div align="center" ><?php echo $teacherResult['mTemp'];?></div></td>
				<td><div align="center" ><?php echo $teacherResult['fTemp'];?></div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumTemp = array($teacherResult['mTemp'],$teacherResult['fTemp']);
						echo array_sum($sumTemp);
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >รวม</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$summteacher = array($teacherResult['mDirector'],$teacherResult['mDeputy'],$teacherResult['mRegular'],$teacherResult['mRate'],$teacherResult['mJanitor'],$teacherResult['mTemp']);
						echo array_sum($summteacher);
						}
				?>
				</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumfteacher = array($teacherResult['fDirector'],$teacherResult['fDeputy'],$teacherResult['fRegular'],$teacherResult['fRate'],$teacherResult['fJanitor'],$teacherResult['fTemp']);
						echo array_sum($sumfteacher);
						}
				?>
				</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$sumteacher = array(array_sum($summteacher),array_sum($sumfteacher));
						echo array_sum($sumteacher);
						}
				?>
				</div></td>
			</tr>
		</table>
		<table align="center" width="100%" border="1">
			<tr>
				<td colspan="12"><div align="center"><h4>การสอนของครูตามแผนการสอน(คน)</h4></div></td>
			</tr>
			<tr>
				<th><div align="center" >ระดับชั้น</div></th>
				<th><div align="center" >ครูผู้สอน</div></th>
			</tr>
			<tr>
				<td><div align="left" >ปฐมวัย</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
						echo $teacherResult['childteacher'];
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >ประถม</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
						echo $teacherResult['primaryteacher'];
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >มัธยมต้น</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
						echo $teacherResult['highschoolteacher'];
						}
				?>
				</div></td>
			</tr>
			<tr>
				<td><div align="left" >รวมประถม-มัธบม</div></td>
				<td><div align="center" >
				<?php 
				if ($teachernum > 0) {
					$primaryhigh = array($teacherResult['highschoolteacher'],$teacherResult['primaryteacher']);
						echo array_sum($primaryhigh);
						}
				?>
				</div></td>
			</tr>
		</table>

</body>
</html>
