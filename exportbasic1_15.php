<?php
include("include/connect.php");
session_start();
header("Content-Type: application/vnd.ms-excel");
$date = date("Y-m-d");
header('Content-Disposition: attachment; filename="ผลการศึกษาระดับพื้นฐษนของสถานศึกษารายมาตรฐาน'.$date.'.xls"');
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
	if ($_SESSION['ses_username']!=""){	
		$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$teacherResult = mysql_fetch_array(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b1Result = mysql_fetch_array(mysql_query("SELECT * FROM `b1` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b2Result = mysql_fetch_array(mysql_query("SELECT * FROM `b2` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b3Result = mysql_fetch_array(mysql_query("SELECT * FROM `b3` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b4Result = mysql_fetch_array(mysql_query("SELECT * FROM `b4` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b5Result = mysql_fetch_array(mysql_query("SELECT * FROM `b5` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b6Result = mysql_fetch_array(mysql_query("SELECT * FROM `b6` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b7Result = mysql_fetch_array(mysql_query("SELECT * FROM `b7` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b8Result = mysql_fetch_array(mysql_query("SELECT * FROM `b8` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b9Result = mysql_fetch_array(mysql_query("SELECT * FROM `b9` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b10Result = mysql_fetch_array(mysql_query("SELECT * FROM `b10` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b11Result = mysql_fetch_array(mysql_query("SELECT * FROM `b11` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b12Result = mysql_fetch_array(mysql_query("SELECT * FROM `b12` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b13Result = mysql_fetch_array(mysql_query("SELECT * FROM `b13` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b14Result = mysql_fetch_array(mysql_query("SELECT * FROM `b14` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$b15Result = mysql_fetch_array(mysql_query("SELECT * FROM `b15` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
include("include/sumstudent.php");
?>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 1 ผู้เรียนมีสุขภาวะที่ดีและมีสุนทรียภาพ</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนนักเรียน</div></td>
				<td colspan="5"><div align="center">จำนวนนักเรียน(คน)</div></td>
				<td rowspan="3"><div align="center">ได้ระดับคุณภาพ<br> 3 ขึ้นไป(คน)</div></td>
				<td rowspan="3"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="3">คุณภาพ</td>
			</tr>
			<tr>
			  <td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
  			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>1.1 มีสุขนิสัยในการดูแลสุขภาพและออกกำลังกาย สม่ำเสมอ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_1_1'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_1_2'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_1_3'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_1_4'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_1 = array($b1Result['1_1_3'],$b1Result['1_1_4'],$b1Result['1_1_5']);
					echo array_sum($up1_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  					$persen1_1 = array_sum($up1_1) * 100 / $sumb;
  					$score1_1 = round($persen1_1,2) * 0.5 / 100;
  					echo round($score1_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen1_1,2) * 0.5 / 100;
  					include("scoreb05.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.2 มีน้ำหนัก ส่วนสูง และมีสมรรถภาพทางกายตามเกณฑ์มาตรฐาน</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_2_1'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_2_2'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_2_3'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_2_4'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_2 = array($b1Result['1_2_3'],$b1Result['1_2_4'],$b1Result['1_2_5']);
					echo array_sum($up1_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen1_2 = array_sum($up1_2) * 100 / $sumb;
  					$score1_2 = round($persen1_2,2) * 0.5 / 100;
  					echo round($score1_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen1_2,2) * 0.5 / 100;
  					include("scoreb05.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.3 ป้องกันตนเองจากสิ่งเสพติดให้โทษและหลีกเลี่ยงตนเองจากสภาวะที่เสี่ยงต่อความรุนแรง โรค ภัย อุบัติเหตุ และปัญหาทางเพศ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_3_1'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_3_2'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_3_3'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_3_4'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_3 = array($b1Result['1_3_3'],$b1Result['1_3_4'],$b1Result['1_3_5']);
					echo array_sum($up1_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen1_3 = array_sum($up1_3) * 100 / $sumb;
  					$score1_3 = round($persen1_3,2) * 1 / 100;
  					echo round($score1_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen1_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.4 เห็นคุณค่าในตนเอง มีความมั่นใจ กล้าแสดงออกอย่างเหมาะสม</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_4_1'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_4_2'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_4_3'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_4_4'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_4 = array($b1Result['1_4_3'],$b1Result['1_4_4'],$b1Result['1_4_5']);
					echo array_sum($up1_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen1_4 = array_sum($up1_4) * 100 / $sumb;
  					$score1_4 = round($persen1_4,2) * 1.0 / 100;
  					echo round($score1_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen1_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.5 มีมนุษยสัมพันธ์ที่ดีและให้เกียรติผู้อื่น</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_5_1'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_5_2'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_5_3'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_5_4'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_5_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_5 = array($b1Result['1_5_3'],$b1Result['1_5_4'],$b1Result['1_5_5']);
					echo array_sum($up1_5);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen1_5 = array_sum($up1_5) * 100 / $sumb;
  					$score1_5 = round($persen1_5,2) * 1.0 / 100;
  					echo round($score1_5,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen1_5,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.6 สร้างผลงานจากเข้าร่วมกิจกรรมด้านศิลปะ ดนตรี/นาฏศิลป์ กีฬา/นันทนาการ  ตามจินตนาการ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_6_1'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_6_2'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_6_3'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_6_4'];?></div></td>
  				<td><div align="center"><?php echo $b1Result['1_6_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up1_6 = array($b1Result['1_6_3'],$b1Result['1_6_4'],$b1Result['1_6_5']);
					echo array_sum($up1_6);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen1_6 = array_sum($up1_6) * 100 / $sumb;
  					$score1_6 = round($persen1_6,2) * 1.0 / 100;
  					echo round($score1_6,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen1_6,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score1 = array($score1_1,$score1_2,$score1_3,$score1_4,$score1_5,$score1_6);
					$score = number_format(array_sum($score1), 2, '.', '');
					$score1sum = number_format(array_sum($score1), 2, '.', ''); 
					echo $score1sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 2 ผู้เรียนมีคุณธรรม จริยธรรม และค่านิยมที่พึงประสงค์</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนนักเรียน</div></td>
				<td colspan="5"><div align="center">จำนวนนักเรียน(คน)</div></td>
				<td rowspan="3"><div align="center">ได้ระดับคุณภาพ<br> 3 ขึ้นไป(คน)</div></td>
				<td rowspan="3"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="3">คุณภาพ</td>
			</tr>
			<tr>
			  <td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
  			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>2.1 มีคุณลักษณะที่พึงประสงค์ตามหลักสูตร</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_1_1'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_1_2'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_1_3'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_1_4'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up2_1 = array($b2Result['2_1_3'],$b2Result['2_1_4'],$b2Result['2_1_5']);
					echo array_sum($up2_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				$persen2_1 = array_sum($up2_1) * 100 / $sumb;
  					$score2_1 = round($persen2_1,2) * 2 / 100;
  					echo round($score2_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen2_1,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.2 เอื้ออาทรผู้อื่นและกตัญญูกตเวทีต่อผู้มีพระคุณ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_2_1'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_2_2'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_2_3'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_2_4'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up2_2 = array($b2Result['2_2_3'],$b2Result['2_2_4'],$b2Result['2_2_5']);
					echo array_sum($up2_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_2 = array_sum($up2_2) * 100 / $sumb;
  					$score2_2 = round($persen2_2,2) * 1 / 100;
  					echo round($score2_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen2_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.3 ยอมรับความคิดและวัฒนธรรมที่แตกต่าง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_3_1'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_3_2'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_3_3'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_3_4'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up2_3 = array($b2Result['2_3_3'],$b2Result['2_3_4'],$b2Result['2_3_5']);
					echo array_sum($up2_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_3 = array_sum($up2_3) * 100 / $sumb;
  					$score2_3 = round($persen2_3,2) * 1 / 100;
  					echo round($score2_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen2_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.4 ตระหนัก รู้คุณค่า ร่วมอนุรักษ์และพัฒนาสิ่งแวดล้อม</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_4_1'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_4_2'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_4_3'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_4_4'];?></div></td>
  				<td><div align="center"><?php echo $b2Result['2_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up2_4 = array($b2Result['2_4_3'],$b2Result['2_4_4'],$b2Result['2_4_5']);
					echo array_sum($up2_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen2_4 = array_sum($up2_4) * 100 / $sumb;
  					$score2_4 = round($persen2_4,2) * 1.0 / 100;
  					echo round($score2_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen2_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score2 = array($score2_1,$score2_2,$score2_3,$score2_4);
					$score = number_format(array_sum($score2), 2, '.', '');
					$score2sum = number_format(array_sum($score2), 2, '.', ''); 
					echo $score2sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 3  ผู้เรียนมีทักษะในการแสวงหาความรู้ด้วยตนเอง รักการเรียนรู้ และพัฒนาตนเองอย่างต่อเนื่อง</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนนักเรียน</div></td>
				<td colspan="5"><div align="center">จำนวนนักเรียน(คน)</div></td>
				<td rowspan="3"><div align="center">ได้ระดับคุณภาพ<br> 3 ขึ้นไป(คน)</div></td>
				<td rowspan="3"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="3">คุณภาพ</td>
			</tr>
			<tr>
			  <td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
  			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>3.1 มีนิสัยรักการอ่านและแสวงหาความรู้ด้วยตนเองจากห้องสมุด แหล่งเรียนรู้ และสื่อต่างๆ รอบตัว</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_1_1'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_1_2'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_1_3'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_1_4'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up3_1 = array($b3Result['3_1_3'],$b3Result['3_1_4'],$b3Result['3_1_5']);
					echo array_sum($up3_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				$persen3_1 = array_sum($up3_1) * 100 / $sumb;
  					$score3_1 = round($persen3_1,2) * 2 / 100;
  					echo round($score3_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen3_1,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>3.2 มีทักษะในการอ่าน ฟัง ดู พูด เขียน และตั้งคำถามพื่อค้นคว้าหาความรู้เพิ่มเติม</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_2_1'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_2_2'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_2_3'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_2_4'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_2_5'];?></div></td><td><div align="center">
  				<?php 
  				$up3_2 = array($b3Result['3_2_3'],$b3Result['3_2_4'],$b3Result['3_2_5']);
					echo array_sum($up3_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen3_2 = array_sum($up3_2) * 100 / $sumb;
  					$score3_2 = round($persen3_2,2) * 1 / 100;
  					echo round($score3_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen3_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>3.3 เรียนรู้ร่วมกันเป็นกลุ่ม แลกเปลี่ยน</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_3_1'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_3_2'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_3_3'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_3_4'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_3_5'];?></div></td><td><div align="center">
  				<?php 
  				$up3_3 = array($b3Result['3_3_3'],$b3Result['3_3_4'],$b3Result['3_3_5']);
					echo array_sum($up3_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen3_3 = array_sum($up3_3) * 100 / $sumb;
  					$score3_3 = round($persen3_3,2) * 1 / 100;
  					echo round($score3_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen3_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>3.4 ใช้เทคโนโลยีในการเรียนรู้และนำเสนอผลงาน</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_4_1'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_4_2'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_4_3'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_4_4'];?></div></td>
  				<td><div align="center"><?php echo $b3Result['3_4_5'];?></div></td><td><div align="center">
  				<?php 
  				$up3_4 = array($b3Result['3_4_3'],$b3Result['3_4_4'],$b3Result['3_4_5']);
					echo array_sum($up3_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen3_4 = array_sum($up3_4) * 100 / $sumb;
  					$score3_4 = round($persen3_4,2) * 1.0 / 100;
  					echo round($score3_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen3_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score3 = array($score3_1,$score3_2,$score3_3,$score3_4);
					$score = number_format(array_sum($score3), 2, '.', '');
					$score3sum = number_format(array_sum($score3), 2, '.', ''); 
					echo $score3sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 4  ผู้เรียนมีความสามารถในการคิดอย่างเป็นระบบ คิดสร้างสรรค์ ตัดสินใจแก้ปัญหาได้อย่างมีสติสมเหตุผล</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนนักเรียน</div></td>
				<td colspan="5"><div align="center">จำนวนนักเรียน(คน)</div></td>
				<td rowspan="3"><div align="center">ได้ระดับคุณภาพ<br> 3 ขึ้นไป(คน)</div></td>
				<td rowspan="3"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="3">คุณภาพ</td>
			</tr>
			<tr>
			  <td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
  			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>4.1 สรุปความคิดจากเรื่องที่อ่าน ฟัง และดู และสื่อสารโดยการพูดหรือเขียนตามความคิดของตนเอง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_1_1'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_1_2'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_1_3'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_1_4'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up4_1 = array($b4Result['4_1_3'],$b4Result['4_1_4'],$b4Result['4_1_5']);
					echo array_sum($up4_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				$persen4_1 = array_sum($up4_1) * 100 / $sumb;
  					$score4_1 = round($persen4_1,2) * 2 / 100;
  					echo round($score4_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen4_1,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.2 นำเสนอวิธีคิด วิธีแก้ปัญหาด้วยภาษาหรือวิธีการของตนเอง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_2_1'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_2_2'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_2_3'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_2_4'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_2_5'];?></div></td><td><div align="center">
  				<?php 
  				$up4_2 = array($b4Result['4_2_3'],$b4Result['4_2_4'],$b4Result['4_2_5']);
					echo array_sum($up4_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen4_2 = array_sum($up4_2) * 100 / $sumb;
  					$score4_2 = round($persen4_2,2) * 1 / 100;
  					echo round($score4_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen4_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.3 กำหนดเป้าหมาย คาดการณ์ ตัดสินใจแก้ปัญหาโดยมีเหตุผลประกอบ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_3_1'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_3_2'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_3_3'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_3_4'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_3_5'];?></div></td><td><div align="center">
  				<?php 
  				$up4_3 = array($b4Result['4_3_3'],$b4Result['4_3_4'],$b4Result['4_3_5']);
					echo array_sum($up4_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen4_3 = array_sum($up4_3) * 100 / $sumb;
  					$score4_3 = round($persen4_3,2) * 1 / 100;
  					echo round($score4_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen4_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.4 ความคิดริเริ่ม และสร้างสรรค์ผลงานด้วยความภาคภูมิใจ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_4_1'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_4_2'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_4_3'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_4_4'];?></div></td>
  				<td><div align="center"><?php echo $b4Result['4_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up4_4 = array($b4Result['4_4_3'],$b4Result['4_4_4'],$b4Result['4_4_5']);
					echo array_sum($up4_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen4_4 = array_sum($up4_4) * 100 / $sumb;
  					$score4_4 = round($persen4_4,2) * 1.0 / 100;
  					echo round($score4_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen4_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score4 = array($score4_1,$score4_2,$score4_3,$score4_4);
					$score = number_format(array_sum($score4), 2, '.', '');
					$score4sum = number_format(array_sum($score4), 2, '.', ''); 
					echo $score4sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 5 ผู้เรียนมีความรู้และทักษะที่จำเป็นตามหลักสูตร</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>5.1 ผลสัมฤทธิ์ทางการเรียนเฉลี่ยแต่ละกลุ่มสาระ เป็นไปตามเกณฑ์ </td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb5_1 = $b5Result['5_1'] * 1 / 5;
  					$score = $b5Result['5_1'] * 1 / 5;
  					if ($b5Result['5_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b5Result['5_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5Result['5_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.2 ผลการประเมินสมรรถนะสำคัญตามหลักสูตร เป็นไปตามเกณฑ์</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb5_2 = $b5Result['5_2'] * 1 / 5;
  					$score = $b5Result['5_2'] * 1 / 5;
  					if ($b5Result['5_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b5Result['5_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5Result['5_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.3 ผลการประเมินการอ่าน คิดวิเคราะห์ และเขียน เป็นไปตามเกณฑ์</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb5_3 = $b5Result['5_3'] * 2 / 5;
  					$score = $b5Result['5_3'] * 2 / 5;
  					if ($b5Result['5_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b5Result['5_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5Result['5_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.4 ผลการทดสอบระดับชาติ เป็นไปตามเกณฑ์</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_4'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_4'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_4'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_4'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b5Result['5_4'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb5_4 = $b5Result['5_4'] * 1 / 5;
  					$score = $b5Result['5_4'] * 1 / 5;
  					if ($b5Result['5_4'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score101.php");
  					if ($b5Result['5_4'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b5Result['5_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score5 = array($scoreb5_1,$scoreb5_2,$scoreb5_3,$scoreb5_4);
					$score = number_format(array_sum($score5), 2, '.', '');
					$score5sum = number_format(array_sum($score5), 2, '.', '');
					echo $score5sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 6 ผู้เรียนมีทักษะในการทำงาน  รักการทำงาน  สามารถทำงานร่วมกับผู้อื่นได้ และมีเจตคติที่ดีต่ออาชีพสุจริต</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนนักเรียน</div></td>
				<td colspan="5"><div align="center">จำนวนนักเรียน(คน)</div></td>
				<td rowspan="3"><div align="center">ได้ระดับคุณภาพ<br> 3 ขึ้นไป(คน)</div></td>
				<td rowspan="3"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="3">คุณภาพ</td>
			</tr>
			<tr>
			  <td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
  			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>6.1  วางแผนการทำงานและดำเนินการจนสำเร็จ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_1_1'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_1_2'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_1_3'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_1_4'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up6_1 = array($b6Result['6_1_3'],$b6Result['6_1_4'],$b6Result['6_1_5']);
					echo array_sum($up6_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				$persen6_1 = array_sum($up6_1) * 100 / $sumb;
  					$score6_1 = round($persen6_1,2) * 2 / 100;
  					echo round($score6_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen6_1,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.2  ทำงานอย่างมีความสุข มุ่งมั่นพัฒนางาน และภูมิใจในผลงานของตนเอง</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_2_1'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_2_2'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_2_3'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_2_4'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up6_2 = array($b6Result['6_2_3'],$b6Result['6_2_4'],$b6Result['6_2_5']);
					echo array_sum($up6_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen6_2 = array_sum($up6_2) * 100 / $sumb;
  					$score6_2 = round($persen6_2,2) * 1 / 100;
  					echo round($score6_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen6_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.3  ทำงานร่วมกับผู้อื่นได้</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_3_1'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_3_2'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_3_3'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_3_4'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up6_3 = array($b6Result['6_3_3'],$b6Result['6_3_4'],$b6Result['6_3_5']);
					echo array_sum($up6_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen6_3 = array_sum($up6_3) * 100 / $sumb;
  					$score6_3 = round($persen6_3,2) * 1 / 100;
  					echo round($score6_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen6_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.4  มีความรู้สึกที่ดีต่ออาชีพสุจริตและหาความรู้เกี่ยวกับอาชีพที่ตนเองสนใจ</td>
  				<td><div align="center"><?php echo $sumb;?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_4_1'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_4_2'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_4_3'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_4_4'];?></div></td>
  				<td><div align="center"><?php echo $b6Result['6_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up6_4 = array($b6Result['6_4_3'],$b6Result['6_4_4'],$b6Result['6_4_5']);
					echo array_sum($up6_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen6_4 = array_sum($up6_4) * 100 / $sumb;
  					$score6_4 = round($persen6_4,2) * 1.0 / 100;
  					echo round($score6_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen6_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score6 = array($score6_1,$score6_2,$score6_3,$score6_4);
					$score = number_format(array_sum($score6), 2, '.', '');
					$score6sum = number_format(array_sum($score6), 2, '.', ''); 
					echo $score6sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 7 ครูปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h4></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนครู</div></td>
				<td colspan="5"><div align="center">จำนวนนักเรียน(คน)</div></td>
				<td rowspan="3"><div align="center">ได้ระดับคุณภาพ<br> 3 ขึ้นไป(คน)</div></td>
				<td rowspan="3"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="3">คุณภาพ</td>
			</tr>
			<tr>
			  <td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
  			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>7.1 ครูมีการกำหนดเป้าหมายคุณภาพผู้เรียนทั้งด้านความรู้ ทักษะกระบวนการ สมรรถนะ และคุณลักษณะที่พึงประสงค์</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_1_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_1_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_1_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_1_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_1 = array($b7Result['7_1_3'],$b7Result['7_1_4'],$b7Result['7_1_5']);
					echo array_sum($up7_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  				$persen7_1 = array_sum($up7_1) * 100 / $teacherResult["primaryhigh"];
  					$score7_1 = round($persen7_1,2) * 1 / 100;
  					echo round($score7_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_1,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.2 ครูมีการวิเคราะห์ผู้เรียนเป็นรายบุคคล และใช้ข้อมูลในการวางแผนการจัดการเรียนรู้เพื่อพัฒนาศักยภาพของผู้เรียน</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_2_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_2_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_2_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_2_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_2 = array($b7Result['7_2_3'],$b7Result['7_2_4'],$b7Result['7_2_5']);
					echo array_sum($up7_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_2 = array_sum($up7_2) * 100 / $teacherResult["primaryhigh"];
  					$score7_2 = round($persen7_2,2) * 1 / 100;
  					echo round($score7_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_2,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.3 ครูออกแบบและการจัดการเรียนรู้ที่ตอบสนองความแตกต่างระหว่างบุคคลและพัฒนาการทางสติปัญญา</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_3_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_3_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_3_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_3_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_3 = array($b7Result['7_3_3'],$b7Result['7_3_4'],$b7Result['7_3_5']);
					echo array_sum($up7_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_3 = array_sum($up7_3) * 100 / $teacherResult["primaryhigh"];
  					$score7_3 = round($persen7_3,2) * 2 / 100;
  					echo round($score7_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_3,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.4 ครูใช้สื่อและเทคโนโลยีที่เหมาะสมผนวกกับการนำบริบทและภูมิปัญญาของท้องถิ่นมาบูรณาการในการจัดการเรียนรู้</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_4_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_4_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_4_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_4_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_4 = array($b7Result['7_4_3'],$b7Result['7_4_4'],$b7Result['7_4_5']);
					echo array_sum($up7_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_4 = array_sum($up7_4) * 100 / $teacherResult["primaryhigh"];
  					$score7_4 = round($persen7_4,2) * 1.0 / 100;
  					echo round($score7_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_4,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.5 ครูมีการวัดและประเมินผลที่มุ่งเน้นการพัฒนาการเรียนรู้ของผู้เรียนด้วยวิธีการที่หลากหลาย</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_5_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_5_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_5_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_5_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_5_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_5 = array($b7Result['7_5_3'],$b7Result['7_5_4'],$b7Result['7_5_5']);
					echo array_sum($up7_5);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_5 = array_sum($up7_5) * 100 / $teacherResult["primaryhigh"];
  					$score7_5 = round($persen7_5,2) * 1.0 / 100;
  					echo round($score7_5,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_5,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.6 ครูให้คำแนะนำ คำปรึกษา และแก้ไขปัญหาให้แก่ผู้เรียนทั้งด้านการเรียนและคุณภาพชีวิตด้วยความเสมอภาค</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_6_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_6_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_6_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_6_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_6_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_6 = array($b7Result['7_6_3'],$b7Result['7_6_4'],$b7Result['7_6_5']);
					echo array_sum($up7_6);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_6 = array_sum($up7_6) * 100 / $teacherResult["primaryhigh"];
  					$score7_6 = round($persen7_6,2) * 1.0 / 100;
  					echo round($score7_6,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_6,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.7 ครูมีการศึกษา วิจัยและพัฒนาการจัดการเรียนรู้ในวิชาที่ตนรับผิดชอบ และใช้ผลในการปรับการสอน</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_7_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_7_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_7_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_7_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_7_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_7 = array($b7Result['7_7_3'],$b7Result['7_7_4'],$b7Result['7_7_5']);
					echo array_sum($up7_7);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_7 = array_sum($up7_7) * 100 / $teacherResult["primaryhigh"];
  					$score7_7 = round($persen7_7,2) * 1.0 / 100;
  					echo round($score7_7,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_7,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.8 ครูประพฤติปฏิบัติตนเป็นแบบอย่างที่ดี และเป็นสมาชิกที่ดีของสถานศึกษา</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_8_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_8_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_8_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_8_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_8_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_8 = array($b7Result['7_8_3'],$b7Result['7_8_4'],$b7Result['7_8_5']);
					echo array_sum($up7_8);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_8 = array_sum($up7_8) * 100 / $teacherResult["primaryhigh"];
  					$score7_8 = round($persen7_8,2) * 1.0 / 100;
  					echo round($score7_8,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_8,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.9 ครูจัดการเรียนการสอนตามวิชาที่ได้รับมอบหมายเต็มเวลา เต็มความสามารถ</td>
  				<td><div align="center"><?php echo $teacherResult["primaryhigh"];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_9_1'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_9_2'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_9_3'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_9_4'];?></div></td>
  				<td><div align="center"><?php echo $b7Result['7_9_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  				$up7_9 = array($b7Result['7_9_3'],$b7Result['7_9_4'],$b7Result['7_9_5']);
					echo array_sum($up7_9);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				$persen7_9 = array_sum($up7_9) * 100 / $teacherResult["primaryhigh"];
  					$score7_9 = round($persen7_9,2) * 1.0 / 100;
  					echo round($score7_9,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  				$score = round($persen7_9,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score7 = array($score7_1,$score7_2,$score7_3,$score7_4,$score7_5,$score7_6,$score7_7,$score7_8,$score7_9);
					$score = number_format(array_sum($score7), 2, '.', '');
					$score7sum = number_format(array_sum($score7), 2, '.', ''); 
					echo $score7sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score10.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 8 ผู้บริหารปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>8.1 ผู้บริหารมีวิสัยทัศน์ ภาวะผู้นำ และความคิดริเริ่มที่เน้นการพัฒนาผู้เรียน</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb8_1 = $b8Result['8_1'] * 1 / 5;
  					$score = $b8Result['8_1'] * 1 / 5;
  					if ($b8Result['8_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b8Result['8_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b8Result['8_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.2 ผู้บริหารใช้หลักการบริหารแบบมีส่วนร่วมและใช้ข้อมูลผลการประเมินหรือผลการวิจัย เป็นฐานคิดทั้งด้านวิชาการและการจัดการ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb8_2 = $b8Result['8_2'] * 2 / 5;
  					$score = $b8Result['8_2'] * 2 / 5;
  					if ($b8Result['8_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b8Result['8_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b8Result['8_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.3 ผู้บริหารสามารถบริหารจัดการการศึกษาให้บรรลุเป้าหมายตามที่กำหนดไว้ในแผนปฏิบัติการ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb8_3 = $b8Result['8_3'] * 2 / 5;
  					$score = $b8Result['8_3'] * 2 / 5;
  					if ($b8Result['8_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b8Result['8_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b8Result['8_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.4 ผู้บริหารส่งเสริมและพัฒนาศักยภาพบุคลากรให้พร้อมรับการกระจายอำนาจ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_4'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_4'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_4'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_4'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_4'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb8_4 = $b8Result['8_4'] * 2 / 5;
  					$score = $b8Result['8_4'] * 2 / 5;
  					if ($b8Result['8_4'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b8Result['8_4'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b8Result['8_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.5 นักเรียน  ผู้ปกครอง และชุมชนพึงพอใจผลการบริหารการจัดการศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_5'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_5'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_5'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_5'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_5'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb8_5 = $b8Result['8_5'] * 1 / 5;
  					$score = $b8Result['8_5'] * 1 / 5;
  					if ($b8Result['8_5'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b8Result['8_5'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b8Result['8_5'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.6 ผู้บริหารให้คำแนะนำ คำปรึกษาทางวิชาการและเอาใจใส่การจัดการศึกษาเต็มศักยภาพและเต็มเวลา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_6'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_6'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_6'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_6'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b8Result['8_6'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb8_6 = $b8Result['8_6'] * 2 / 5;
  					$score = $b8Result['8_6'] * 2 / 5;
  					if ($b8Result['8_6'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b8Result['8_6'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b8Result['8_6'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score8 = array($scoreb8_1,$scoreb8_2,$scoreb8_3,$scoreb8_4,$scoreb8_6,$scoreb8_5);
					$score = number_format(array_sum($score8), 2, '.', '');
					$score8sum = number_format(array_sum($score8), 2, '.', '');
					echo $score8sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score10.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 9 คณะกรรมการสถานศึกษา และผู้ปกครอง ชุมชน ปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>9.1  คณะกรรมการสถานศึกษารู้และปฏิบัติหน้าที่ตามที่ระเบียบกำหนด</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb9_1 = $b9Result['9_1'] * 2 / 5;
  					$score = $b9Result['9_1'] * 2 / 5;
  					if ($b9Result['9_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b9Result['9_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b9Result['9_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>9.2  คณะกรรมการสถานศึกษากำกับติดตาม  ดูแล และขับเคลื่อนการดำเนินงานของสถานศึกษาให้บรรลุผลสำเร็จตามเป้าหมาย</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb9_2 = $b9Result['9_2'] * 1 / 5;
  					$score = $b9Result['9_2'] * 1 / 5;
  					if ($b9Result['9_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b9Result['9_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b9Result['9_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>9.3  ผู้ปกครองและชุมชนเข้ามามีส่วนร่วมในการพัฒนาสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b9Result['9_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb9_3 = $b9Result['9_3'] * 2 / 5;
  					$score = $b9Result['9_3'] * 2 / 5;
  					if ($b9Result['9_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b9Result['9_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b9Result['9_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score9 = array($scoreb9_1,$scoreb9_2,$scoreb9_3);
					$score = number_format(array_sum($score9), 2, '.', '');
					$score9sum = number_format(array_sum($score9), 2, '.', '');
					echo $score9sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 10 สถานศึกษามีการจัดหลักสูตร กระบวนการเรียนรู้ และกิจกรรมพัฒนาคุณภาพผู้เรียนอย่างรอบด้าน</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>10.1  หลักสูตรสถานศึกษาเหมาะสมและสอดคล้องกับท้องถิ่น</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb10_1 = $b10Result['10_1'] * 2 / 5;
  					$score = $b10Result['10_1'] * 2 / 5;
  					if ($b10Result['10_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b10Result['10_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10Result['10_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.2  จัดรายวิชาเพิ่มเติมที่หลากหลายให้ผู้เรียนเลือกเรียนตามความถนัดความสามารถ และความสนใจ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb10_2 = $b10Result['10_2'] * 2 / 5;
  					$score = $b10Result['10_2'] * 2 / 5;
  					if ($b10Result['10_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b10Result['10_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10Result['10_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.3 จัดกิจกรรมพัฒนาผู้เรียนที่ส่งเสริมและตอบสนองความต้องการ ความสามารถ ความถนัด และความสนใจของผู้เรียน</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb10_3 = $b10Result['10_3'] * 1 / 5;
  					$score = $b10Result['10_3'] * 1 / 5;
  					if ($b10Result['10_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b10Result['10_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10Result['10_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.4 สนับสนุนให้ครูจัดกระบวนการเรียนรู้ที่ให้ผู้เรียนได้ลงมือปฏิบัติจริงจนสรุปความรู้ได้ด้วยตนเอง</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_4'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_4'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_4'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_4'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_4'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb10_4 = $b10Result['10_4'] * 1 / 5;
  					$score = $b10Result['10_4'] * 1 / 5;
  					if ($b10Result['10_4'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b10Result['10_4'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10Result['10_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.5 นิเทศภายใน กำกับ ติดตามตรวจสอบ และนำผลไปปรับปรุงการเรียนการสอนอย่างสม่ำเสมอ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_5'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_5'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_5'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_5'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_5'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb10_5 = $b10Result['10_5'] * 2 / 5;
  					$score = $b10Result['10_5'] * 2 / 5;
  					if ($b10Result['10_5'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b10Result['10_5'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10Result['10_5'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.6 จัดระบบดูแลช่วยเหลือผู้เรียนที่มีประสิทธิภาพและครอบคลุมถึงผู้เรียนทุกคน</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_6'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_6'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_6'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_6'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b10Result['10_6'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb10_6 = $b10Result['10_6'] * 2 / 5;
  					$score = $b10Result['10_6'] * 2 / 5;
  					if ($b10Result['10_6'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b10Result['10_6'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b10Result['10_6'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score10 = array($scoreb10_1,$scoreb10_2,$scoreb10_3,$scoreb10_4,$scoreb10_6,$scoreb10_5);
					$score = number_format(array_sum($score10), 2, '.', '');
					$score10sum = number_format(array_sum($score10), 2, '.', '');
					echo $score10sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score10.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 11 สถานศึกษามีการจัดสภาพแวดล้อมและการบริการที่ส่งเสริมให้ผู้เรียนพัฒนาเต็มศักยภาพ</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>11.1  ห้องเรียน ห้องปฏิบัติการ อาคารเรียนมั่นคง สะอาดและปลอดภัย มีสิ่ง</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb11_1 = $b11Result['11_1'] * 4 / 5;
  					$score = $b11Result['11_1'] * 4 / 5;
  					if ($b11Result['11_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score4.php");
  					if ($b11Result['11_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b11Result['11_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>11.2  อำนวยความสะดวก พอเพียง อยู่ในสภาพใช้การได้ดีสภาพแวดล้อมร่มรื่น และมีแหล่งเรียนรู้สำหรับผู้เรียน </td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb11_2 = $b11Result['11_2'] * 3 / 5;
  					$score = $b11Result['11_2'] * 3 / 5;
  					if ($b11Result['11_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score3.php");
  					if ($b11Result['11_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b11Result['11_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>11.3  จัดห้องสมุดที่ให้บริการสื่อและเทคโนโลยีสารสนเทศที่เอื้อให้ผู้เรียนเรียนรู้ด้วยตนเองและหรือเรียนรู้แบบมีส่วนร่วม</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b11Result['11_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb11_3 = $b11Result['11_3'] * 3 / 5;
  					$score = $b11Result['11_3'] * 3 / 5;
  					if ($b11Result['11_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score3.php");
  					if ($b11Result['11_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b11Result['11_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score11 = array($scoreb11_1,$scoreb11_2,$scoreb11_3);
					$score = number_format(array_sum($score11), 2, '.', '');
					$score11sum = number_format(array_sum($score11), 2, '.', '');
					echo $score11sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score10.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 12 สถานศึกษามีการประกันคุณภาพภายในของสถานศึกษาตามที่กำหนดในกฎกระทรวง</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>12.1  กำหนดมาตรฐานการศึกษาของสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb12_1 = $b12Result['12_1'] * 1 / 5;
  					$score = $b12Result['12_1'] * 1 / 5;
  					if ($b12Result['12_1'] != 0) {
						echo $score;
				}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b12Result['12_1'] != 0) {
  						echo $grade;
  				}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b12Result['12_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>12.2  จัดทำและดำเนินการตามแผนพัฒนาการจัดการศึกษาของสถานศึกษาที่มุ่งพัฒนาคุณภาพตามมาตรฐานการศึกษาของสถานศึกษา   </td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb12_2 = $b12Result['12_2'] * 1 / 5;
  					$score = $b12Result['12_2'] * 1 / 5;
  					if ($b12Result['12_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b12Result['12_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b12Result['12_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>12.3 จัดระบบข้อมูลสารสนเทศและใช้สารสนเทศในการบริหารจัดการเพื่อพัฒนาคุณภาพสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb12_3 = $b12Result['12_3'] * 1 / 5;
  					$score = $b12Result['12_3'] * 1 / 5;
  					if ($b12Result['12_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b12Result['12_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b12Result['12_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>12.4  ติดตามตรวจสอบ และประเมินคุณภาพภายในตามมาตรฐานการศึกษาของสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_4'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_4'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_4'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_4'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_4'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb12_4 = $b12Result['12_4'] * 0.5 / 5;
  					$score = $b12Result['12_4'] * 0.5 / 5;
  					if ($b12Result['12_4'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score05.php");
  					if ($b12Result['12_4'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b12Result['12_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>12.5  นำผลการประเมินคุณภาพทั้งภายในและภายนอกไปใช้วางแผนพัฒนาคุณภาพการศึกษาอย่างต่อเนื่อง</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_5'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_5'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_5'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_5'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_5'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb12_5 = $b12Result['12_5'] * 0.5 / 5;
  					$score = $b12Result['12_5'] * 0.5 / 5;
  					if ($b12Result['12_5'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score05.php");
  					if ($b12Result['12_5'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b12Result['12_5'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>12.6  จัดทำรายงานประจำปีที่เป็นรายงานการประเมินคุณภาพภายใน</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_6'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_6'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_6'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_6'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b12Result['12_6'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb12_6 = $b12Result['12_6'] * 1 / 5;
  					$score = $b12Result['12_6'] * 1 / 5;
  					if ($b12Result['12_6'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score102.php");
  					if ($b12Result['12_6'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b12Result['12_6'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score12 = array($scoreb12_1,$scoreb12_2,$scoreb12_3,$scoreb12_4,$scoreb12_6,$scoreb12_5);
					$score = number_format(array_sum($score12), 2, '.', '');
					$score12sum = number_format(array_sum($score12), 2, '.', '');
					echo $score12sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 13 สถานศึกษามีการสร้าง ส่งเสริม สนับสนุน ให้สถานศึกษาเป็นสังคมแห่งการเรียนรู้</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>13.1 มีการสร้างและพัฒนาแหล่งเรียนรู้ภายในสถานศึกษาและใช้ประโยชน์จากแหล่งเรียนรู้ ทั้งภายในและภายนอกสถานศึกษา เพื่อพัฒนา  การเรียนรู้ของผู้เรียนและบุคลากรของสถานศึกษา รวมทั้งผู้ที่เกี่ยวข้อง</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb13_1 = $b13Result['13_1'] * 5 / 5;
  					$score = $b13Result['13_1'] * 5 / 5;
  					if ($b13Result['13_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("scoreb52.php");
  					if ($b13Result['13_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b13Result['13_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>13.2  มีการแลกเปลี่ยนเรียนรู้ระหว่างบุคลากรภายในสถานศึกษา ระหว่างสถานศึกษากับครอบครัว ชุมชนและองค์กรที่เกี่ยวข้อง</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b13Result['13_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb13_2 = $b13Result['13_2'] * 5 / 5;
  					$score = $b13Result['13_2'] * 5 / 5;
  					if ($b13Result['13_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("scoreb52.php");
  					if ($b13Result['13_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b13Result['13_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score13 = array($scoreb13_1,$scoreb13_2);
					$score = number_format(array_sum($score13), 2, '.', '');
					$score13sum = number_format(array_sum($score13), 2, '.', '');
					echo $score13sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score10.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 14  การพัฒนาสถานศึกษาให้บรรลุเป้าหมายตามวิสัยทัศน์ ปรัชญาและจุดเน้นที่กำหนดขึ้น</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>14.1 จัดโครงการ กิจกรรมที่ส่งเสริมให้ผู้เรียนซึ่งเป็นอัตลักษณ์ของสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center"><?php 
				if ($b14Result['14_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center"><?php 
  				$scoreb14_1 = $b14Result['14_1'] * 3 / 5;
  					$score = $b14Result['14_1'] * 3 / 5;
  					if ($b14Result['14_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center"><?php
  				include("score3.php");
  					if ($b14Result['14_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center"><?php
  				if ($b14Result['14_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>14.2  ผลการดำเนินงานส่งเสริมให้ผู้เรียนมีความสำเร็จ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center"><?php 
				if ($b14Result['14_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($b14Result['14_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center"><?php 
  				$scoreb14_2 = $b14Result['14_2'] * 2 / 5;
  					$score = $b14Result['14_2'] * 2 / 5;
  					if ($b14Result['14_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center"><?php
  				include("score202.php");
  					if ($b14Result['14_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center"><?php
  				if ($b14Result['14_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score14 = array($scoreb14_1,$scoreb14_2);
					$score = number_format(array_sum($score14), 2, '.', '');
					$score14sum = number_format(array_sum($score14), 2, '.', '');
					echo $score14sum;
					?>
				</div></td>
  				<td><div align="center">	<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h4>มาตรฐานที่ 15 การจัดกิจกรรมตามนโยบาย จุดเน้น แนวทางการปฏิรูปการศึกษาเพื่อพัฒนาและส่งเสริมสถานศึกษาให้ยกระดับคุณภาพสูงขึ้น</h4></div></td>
			</tr>
			<tr>
				<td rowspan="2"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center"></div></td>
				<td colspan="5"><div align="center">ได้ระดับคุณภาพ<br>ตามประเด็นการพัฒนา</div></td>
				<td rowspan="2"><div align="center">คะแนนตัวบ่งชี้</div></td>
				<td rowspan="2"><div align="center">ระดับคุณภาพ</div></td>
				<td rowspan="2">คุณภาพ</td>
			</tr>
			<tr>
			  <td><div align="center">1</div></td>
			  <td><div align="center">2</div></td>
			  <td><div align="center">3</div></td>
			  <td><div align="center">4</div></td>
			  <td><div align="center">5</div></td>
  			</tr>
  			<tr>
  				<td>15.1 จัดกิจกรรมพิเศษเพื่อตอบสนองนโยบาย จุดเน้นตามแนวทางการปฏิรูปการศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb15_1 = $b15Result['15_1'] * 3 / 5;
  					$score = $b15Result['15_1'] * 3 / 5;
  					if ($b15Result['15_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score3.php");
  					if ($b15Result['15_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b15Result['15_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>15.2 ผลการดำเนินงานบรรลุเป้าหมายและพัฒนาดีขึ้นกว่าที่ผ่านมา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
				if ($b15Result['15_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  				$scoreb15_2 = $b15Result['15_2'] * 2 / 5;
  					$score = $b15Result['15_2'] * 2 / 5;
  					if ($b15Result['15_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  				include("score202.php");
  					if ($b15Result['15_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  				if ($b15Result['15_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score14 = array($scoreb15_1,$scoreb15_2);
					$score = number_format(array_sum($score14), 2, '.', '');
					$score14sum = number_format(array_sum($score14), 2, '.', '');
					echo $score14sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("scoreb5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<?php
	}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	} 
	mysql_close($Conn); 
?>
</body>
</html>