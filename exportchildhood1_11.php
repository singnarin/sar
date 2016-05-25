<?php
include("include/connect.php");
session_start();
header("Content-Type: application/vnd.ms-excel");
$date = date("Y-m-d");
header('Content-Disposition: attachment; filename="ผลการศึกษาปฐมวัยของสถานศึกษารายมาตรฐาน'.$date.'.xls"');
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
		$studentResult = mysql_fetch_array(mysql_query("SELECT * FROM `student` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$teacherResult = mysql_fetch_array(mysql_query("SELECT * FROM `teacher` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c1Result = mysql_fetch_array(mysql_query("SELECT * FROM `c1` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c2Result = mysql_fetch_array(mysql_query("SELECT * FROM `c2` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c3Result = mysql_fetch_array(mysql_query("SELECT * FROM `c3` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c4Result = mysql_fetch_array(mysql_query("SELECT * FROM `c4` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c5Result = mysql_fetch_array(mysql_query("SELECT * FROM `c5` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c6Result = mysql_fetch_array(mysql_query("SELECT * FROM `c6` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c7Result = mysql_fetch_array(mysql_query("SELECT * FROM `c7` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c8Result = mysql_fetch_array(mysql_query("SELECT * FROM `c8` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c9Result = mysql_fetch_array(mysql_query("SELECT * FROM `c9` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c10Result = mysql_fetch_array(mysql_query("SELECT * FROM `c10` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		$c11Result = mysql_fetch_array(mysql_query("SELECT * FROM `c11` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
		include("include/sumstudent.php");
?>

		<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 1<br> เด็กมีพัฒนาการด้านร่างกาย</h5></div></td>
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
  				<td>1.1 มีน้ำหนักส่วนสูงเป็นไปตามเกณฑ์มาตรฐาน</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_1_1'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_1_2'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_1_3'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_1_4'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_1 = array($c1Result['1_1_3'],$c1Result['1_1_4'],$c1Result['1_1_5']);
					echo array_sum($up1_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php 
  					$persen1_1 = array_sum($up1_1) * 100 / $sumo;
  					$score1_1 = round($persen1_1,2) * 1.0 / 100;
  					echo round($score1_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen1_1,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.2 มีทักษะการเคลื่อนไหวตามวัย</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_2_1'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_2_2'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_2_3'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_2_4'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_2 = array($c1Result['1_2_3'],$c1Result['1_2_4'],$c1Result['1_2_5']);
					echo array_sum($up1_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen1_2 = array_sum($up1_2) * 100 / $sumo;
  					$score1_2 = round($persen1_2,2) * 1.5 / 100;
  					echo round($score1_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen1_2,2) * 1.5 / 100;
  					include("score15.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.3 มีสุขนิสัยในการดูแลสุขภาพของตน</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_3_1'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_3_2'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_3_3'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_3_4'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_3 = array($c1Result['1_3_3'],$c1Result['1_3_4'],$c1Result['1_3_5']);
					echo array_sum($up1_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen1_3 = array_sum($up1_3) * 100 / $sumo;
  					$score1_3 = round($persen1_3,2) * 1.5 / 100;
  					echo round($score1_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen1_3,2) * 1.5 / 100;
  					include("score15.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>1.4 หลีกเลี่ยงต่อสภาวะที่เสี่ยงต่อโรค อุบัติเหตุ ภัย และสิ่งเสพติด</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_4_1'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_4_2'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_4_3'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_4_4'];?></div></td>
  				<td><div align="center"><?php echo $c1Result['1_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up1_4 = array($c1Result['1_4_3'],$c1Result['1_4_4'],$c1Result['1_4_5']);
					echo array_sum($up1_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen1_4 = array_sum($up1_4) * 100 / $sumo;
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
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score1 = array($score1_1,$score1_2,$score1_3,$score1_4);
					$score = number_format(array_sum($score1), 2, '.', '');
					$score1sum = number_format(array_sum($score1), 2, '.', ''); 
					echo $score1sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 2 <br> เด็กมีพัฒนาการด้านอารมณ์และจิตใจ</h5></div></td>
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
  				<td>2.1 ร่าเริงแจ่มใส มีความรู้สึกที่ดีต่อตนเอง</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><?php echo $c2Result['2_1_1'];?></td>
  				<td><?php echo $c2Result['2_1_2'];?></td>
  				<td><?php echo $c2Result['2_1_3'];?></td>
  				<td><?php echo $c2Result['2_1_4'];?></td>
  				<td><?php echo $c2Result['2_1_5'];?></td>
  				<td><div align="center">
  				<?php 
  					$up2_1 = array($c2Result['2_1_3'],$c2Result['2_1_4'],$c2Result['2_1_5']);
					echo array_sum($up2_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_1 = array_sum($up2_1) * 100 / $sumo;
  					$score2_1 = round($persen2_1,2) * 1.0 / 100;
  					echo round($score2_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen2_1,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.2 มีความมั่นใจและกล้าแสดงออก</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><?php echo $c2Result['2_2_1'];?></td>
  				<td><?php echo $c2Result['2_2_2'];?></td>
  				<td><?php echo $c2Result['2_2_3'];?></td>
  				<td><?php echo $c2Result['2_2_4'];?></td>
  				<td><?php echo $c2Result['2_2_5'];?></td>
  				<td><div align="center">
  				<?php 
  					$up2_2 = array($c2Result['2_2_3'],$c2Result['2_2_4'],$c2Result['2_2_5']);
					echo array_sum($up2_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_2 = array_sum($up2_2) * 100 / $sumo;
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
  				<td>2.3 ควบคุมอารมณ์ตนเองได้เหมาะสมกับวัย</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><?php echo $c2Result['2_3_1'];?></td>
  				<td><?php echo $c2Result['2_3_2'];?></td>
  				<td><?php echo $c2Result['2_3_3'];?></td>
  				<td><?php echo $c2Result['2_3_4'];?></td>
  				<td><?php echo $c2Result['2_3_5'];?></td>
  				<td><div align="center">
  				<?php 
  					$up2_3 = array($c2Result['2_3_3'],$c2Result['2_3_4'],$c2Result['2_3_5']);
					echo array_sum($up2_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_3 = array_sum($up2_3) * 100 / $sumo;
  					$score2_3 = round($persen2_3,2) * 1 / 100;
  					echo round($score2_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_3 = array_sum($up2_3) * 100 / $sumo;
  					$score2_3 = round($persen2_3,2) * 1 / 100;
  					$score = round($persen2_3,2) * 1 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>2.4 ชื่นชมศิลปะ ดนตรี  การเคลื่อนไหว และรักธรรมชาติ</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><?php echo $c2Result['2_4_1'];?></td>
  				<td><?php echo $c2Result['2_4_2'];?></td>
  				<td><?php echo $c2Result['2_4_3'];?></td>
  				<td><?php echo $c2Result['2_4_4'];?></td>
  				<td><?php echo $c2Result['2_4_5'];?></td>
  				<td><div align="center">
  				<?php 
  					$up2_4 = array($c2Result['2_4_3'],$c2Result['2_4_4'],$c2Result['2_4_5']);
					echo array_sum($up2_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_4 = array_sum($up2_4) * 100 / $sumo;
  					$score2_4 = round($persen2_4,2) * 2.0 / 100;
  					echo round($score2_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen2_4 = array_sum($up2_4) * 100 / $sumo;
  					$score2_4 = round($persen2_4,2) * 2.0 / 100;
  					$score = round($persen2_4,2) * 2.0 / 100;
  					include("score201.php");
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
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>

<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 3<br> เด็กมีพัฒนาการด้านสังคม</h5></div></td>
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
  				<td>3.1 มีวินัย รับผิดชอบ เชื่อฟังคำสั่งสอนของพ่อแม่ ครูอาจารย์</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_1'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_2'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_3'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_4'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_5'];?></div></td>
  				<td><div align="center">
  				<?php
  					$up3_1 = array($c3Result['3_1_3'],$c3Result['3_1_4'],$c3Result['3_1_5']);
					echo array_sum($up3_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen3_1 = array_sum($up3_1) * 100 / $sumo;
  					$score3_1 = round($persen3_1,2) * 2.0 / 100;
  					echo round($score3_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen3_1,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>3.2 มีความซื่อสัตย์สุจริต ช่วยเหลือแบ่งปัน</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_1'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_2_2'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_2_3'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_2_4'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up3_2 = array($c3Result['3_2_3'],$c3Result['3_2_4'],$c3Result['3_2_5']);
					echo array_sum($up3_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen3_2 = array_sum($up3_2) * 100 / $sumo;
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
  				<td>3.3 เล่นและทำงานร่วมกับผู้อื่นได้</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_1'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_3_2'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_3_3'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_3_4'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up3_3 = array($c3Result['3_3_3'],$c3Result['3_3_4'],$c3Result['3_3_5']);
					echo array_sum($up3_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen3_3 = array_sum($up3_3) * 100 / $sumo;
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
  				<td>3.4 ประพฤติตนตามวัฒนธรรมไทยและศาสนาที่ตนนับถือ</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_1_1'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_4_2'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_4_3'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_4_4'];?></div></td>
  				<td><div align="center"><?php echo $c3Result['3_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up3_4 = array($c3Result['3_4_3'],$c3Result['3_4_4'],$c3Result['3_4_5']);
					echo array_sum($up3_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen3_4 = array_sum($up3_4) * 100 / $sumo;
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
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 4<br> เด็กมีพัฒนาการด้านสติปัญญา</h5></div></td>
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
  				<td>4.1 สนใจเรียนรู้สิ่งรอบตัว ซักถามอย่างตั้งใจ และรักการเรียนรู้</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_1_1'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_1_2'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_1_3'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_1_4'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up4_1 = array($c4Result['4_1_3'],$c4Result['4_1_4'],$c4Result['4_1_5']);
					echo array_sum($up4_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen4_1 = array_sum($up4_1) * 100 / $sumo;
  					$score4_1 = round($persen4_1,2) * 1.0 / 100;
  					echo round($score4_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen4_1,2) * 1.0 / 100;
  					include("score101.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>4.2  มีความคิดรวบยอดเกี่ยวกับสิ่งต่างๆ ที่เกิดจากประสบการณ์การเรียนรู้</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_2_1'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_2_2'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_2_3'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_2_4'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up4_2 = array($c4Result['4_2_3'],$c4Result['4_2_4'],$c4Result['4_2_5']);
					echo array_sum($up4_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen4_2 = array_sum($up4_2) * 100 / $sumo;
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
  				<td>4.3 มีทักษะทางภาษาที่เหมาะสมกับวัย</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_3_1'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_3_2'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_3_3'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_3_4'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up4_3 = array($c4Result['4_3_3'],$c4Result['4_3_4'],$c4Result['4_3_5']);
					echo array_sum($up4_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen4_3 = array_sum($up4_3) * 100 / $sumo;
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
  				<td>4.4 มีทักษะกระบวนการทางวิทยาศาสตร์และคณิตศาสตร์</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_4_1'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_4_2'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_4_3'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_4_4'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up4_4 = array($c4Result['4_4_3'],$c4Result['4_4_4'],$c4Result['4_4_5']);
					echo array_sum($up4_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen4_4 = array_sum($up4_4) * 100 / $sumo;
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
  				<td>4.5  มีจินตนาการและความคิดสร้างสรรค์</td>
  				<td><div align="center"><?php echo $sumo;?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_5_1'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_5_2'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_5_3'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_5_4'];?></div></td>
  				<td><div align="center"><?php echo $c4Result['4_5_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up4_5 = array($c4Result['4_5_3'],$c4Result['4_5_4'],$c4Result['4_5_5']);
					echo array_sum($up4_5);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen4_5 = array_sum($up4_5) * 100 / $sumo;
  					$score4_5 = round($persen4_5,2) * 1.0 / 100;
  					echo round($score4_5,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen4_5,2) * 1.0 / 100;
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
					$score4 = array($score4_1,$score4_2,$score4_3,$score4_4,$score4_5);
					$score = number_format(array_sum($score4), 2, '.', '');
					$score4sum = number_format(array_sum($score4), 2, '.', '');
					echo $score4sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 5<br> ครูปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h5></div></td>
			</tr>
			<tr>
				<td rowspan="3"><div align="center">ตัวบ่งชี้</div></td>
				<td rowspan="3"><div align="center">จำนวนครู</div></td>
				<td colspan="5"><div align="center">จำนวนครู(คน)</div></td>
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
  				<td>5.1 ครูเข้าใจปรัชญา หลักการ และธรรมชาติของการจัดการศึกษาปฐมวัย  และสามารถนำมาประยุกต์ใช้ในการจัดประสบการณ์</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_1_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_1_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_1_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_1_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_1_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_1 = array($c5Result['5_1_3'],$c5Result['5_1_4'],$c5Result['5_1_5']);
					echo array_sum($up5_1);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_1 = array_sum($up5_1) * 100 / $teacherResult["childteacher"];
  					$score5_1 = round($persen5_1,2) * 2.0 / 100;
  					echo round($score5_1,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen5_1,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.2 ครูจัดทำแผนการจัดประสบการณ์ที่สอดคล้องกับหลักสูตรการศึกษาปฐมวัยและสามารถจัดประสบการณ์การเรียนรู้ที่หลากหลาย  สอดคล้องกับความแตกต่างระหว่างบุคคล</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_2_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_2_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_2_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_2_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_2_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_2 = array($c5Result['5_2_3'],$c5Result['5_2_4'],$c5Result['5_2_5']);
					echo array_sum($up5_2);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_2 = array_sum($up5_2) * 100 / $teacherResult["childteacher"];
  					$score5_2 = round($persen5_2,2) * 2 / 100;
  					echo round($score5_2,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen5_2,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.3 ครูบริหารจัดการชั้นเรียนที่สร้างวินัยเชิงบวก</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_3_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_3_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_3_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_3_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_3_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_3 = array($c5Result['5_3_3'],$c5Result['5_3_4'],$c5Result['5_3_5']);
					echo array_sum($up5_3);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_3 = array_sum($up5_3) * 100 / $teacherResult["childteacher"];
  					$score5_3 = round($persen5_3,2) * 2 / 100;
  					echo round($score5_3,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_3 = array_sum($up5_3) * 100 / $teacherResult["childteacher"];
  					$score5_3 = round($persen5_3,2) * 2 / 100;
  					$score = round($persen5_3,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.4 ครูใช้สื่อและเทคโนโลยีที่เหมาะสม สอดคล้องกับพัฒนาการของเด็ก</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_4_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_4_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_4_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_4_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_4_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_4 = array($c5Result['5_4_3'],$c5Result['5_4_4'],$c5Result['5_4_5']);
					echo array_sum($up5_4);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_4 = array_sum($up5_4) * 100 / $teacherResult["childteacher"];
  					$score5_4 = round($persen5_4,2) * 2.0 / 100;
  					echo round($score5_4,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$score = round($persen5_4,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.5 ครูใช้เครื่องมือการวัดและประเมินพัฒนาการของเด็กอย่างหลากหลาย และสรุปรายงานผลพัฒนาการของเด็กแก่ผู้ปกครอง</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_5_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_5_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_5_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_5_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_5_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_5 = array($c5Result['5_5_3'],$c5Result['5_5_4'],$c5Result['5_5_5']);
					echo array_sum($up5_5);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_5 = array_sum($up5_5) * 100 / $teacherResult["childteacher"];
  					$score5_5 = round($persen5_5,2) * 2.0 / 100;
  					echo round($score5_5,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_5 = array_sum($up5_5) * 100 / $teacherResult["childteacher"];
  					$score5_5 = round($persen5_5,2) * 2.0 / 100;
  					$score = round($persen5_5,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.6 ครูวิจัยและพัฒนาการจัดการเรียนรู้ที่ตนรับผิดชอบและใช้ผลในการปรับการจัดประสบการณ์</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_6_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_6_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_6_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_6_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_6_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_6 = array($c5Result['5_6_3'],$c5Result['5_6_4'],$c5Result['5_6_5']);
					echo array_sum($up5_6);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_6 = array_sum($up5_6) * 100 / $teacherResult["childteacher"];
  					$score5_6 = round($persen5_6,2) * 2.0 / 100;
  					echo round($score5_6,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_6 = array_sum($up5_6) * 100 / $teacherResult["childteacher"];
  					$score5_6 = round($persen5_6,2) * 2.0 / 100;
  					$score = round($persen5_6,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.7 ครูจัดสิ่งแวดล้อมให้เกิดการเรียนรู้ได้ตลอดเวลา</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_7_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_7_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_7_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_7_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_7_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_7 = array($c5Result['5_7_3'],$c5Result['5_7_4'],$c5Result['5_7_5']);
					echo array_sum($up5_7);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_7 = array_sum($up5_7) * 100 / $teacherResult["childteacher"];
  					$score5_7 = round($persen5_7,2) * 2 / 100;
  					echo round($score5_7);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_7 = array_sum($up5_7) * 100 / $teacherResult["childteacher"];
  					$score5_7 = round($persen5_7,2) * 2 / 100;
  					$score = round($persen5_7,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.8 ครูมีปฏิสัมพันธ์ที่ดีกับเด็ก และผู้ปกครอง</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_8_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_8_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_8_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_8_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_8_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_8 = array($c5Result['5_8_3'],$c5Result['5_8_4'],$c5Result['5_8_5']);
					echo array_sum($up5_8);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_8 = array_sum($up5_8) * 100 / $teacherResult["childteacher"];
  					$score5_8 = round($persen5_8,2) * 2 / 100;
  					echo round($score5_8,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_8 = array_sum($up5_8) * 100 / $teacherResult["childteacher"];
  					$score5_8 = round($persen5_8,2) * 2 / 100;
  					$score = round($persen5_8,2) * 2 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.9 ครูมีวุฒิและความรู้ความสามารถในด้านการศึกษาปฐมวัย</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_9_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_9_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_9_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_9_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_9_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_9 = array($c5Result['5_9_3'],$c5Result['5_9_4'],$c5Result['5_9_5']);
					echo array_sum($up5_9);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_9 = array_sum($up5_9) * 100 / $teacherResult["childteacher"];
  					$score5_9 = round($persen5_9,2) * 2.0 / 100;
  					echo round($score5_9,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_9 = array_sum($up5_9) * 100 / $teacherResult["childteacher"];
  					$score5_9 = round($persen5_9,2) * 2.0 / 100;
  					$score = round($persen5_9,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>5.10 ครูจัดทำสารนิทัศน์และนำมาไตร่ตรองเพื่อใช้ประโยชน์ในการพัฒนาเด็ก</td>
  				<td><div align="center"><?php echo $teacherResult["childteacher"];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_10_1'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_10_2'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_10_3'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_10_4'];?></div></td>
  				<td><div align="center"><?php echo $c5Result['5_10_5'];?></div></td>
  				<td><div align="center">
  				<?php 
  					$up5_10 = array($c5Result['5_10_3'],$c5Result['5_10_4'],$c5Result['5_10_5']);
					echo array_sum($up5_10);
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_10 = array_sum($up5_10) * 100 / $teacherResult["childteacher"];
  					$score5_10 = round($persen5_10,2) * 2.0 / 100;
  					echo round($score5_10,2);
  				?>
  				</div></td>
  				<td><div align="center">
  				<?php
  					$persen5_10 = array_sum($up5_10) * 100 / $teacherResult["childteacher"];
  					$score5_10 = round($persen5_10,2) * 2.0 / 100;
  					$score = round($persen5_10,2) * 2.0 / 100;
  					include("score201.php");
  					echo $degree;
  					unset($degree);
  				?>
  				</div></td>
  			</tr>
  			<tr>
				<td colspan="8"><div align="right">สรุปผลการประเมินมาตรฐาน มีคะแนนเฉลี่ย</div></td>
				<td><div align="center">
					<?php
					$score5 = array($score5_1,$score5_2,$score5_3,$score5_4,$score5_5,$score5_6,$score5_7,$score5_8,$score5_9,$score5_10);
					$score = number_format(array_sum($score5), 2, '.', '');
					$score5sum = number_format(array_sum($score5), 2, '.', '');
					$weight5 = 2; 
					echo $score5sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score20.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 6 <br>ผู้บริหารปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h5></div></td>
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
  				<td>6.1 ผู้บริหารเข้าใจปรัชญาและหลักการจัดการศึกษาปฐมวัย</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec6_1 = $c6Result['6_1'] * 3 / 5;
  					$score = $c6Result['6_1'] * 3 / 5;
  					if ($c6Result['6_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c6Result['6_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c6Result['6_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.2 ผู้บริหารมีวิสัยทัศน์ ภาวะผู้นำ และความคิดริเริ่มที่เน้นการพัฒนาเด็กปฐมวัย</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">  				
				<?php 
				if ($c6Result['6_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec6_2 = $c6Result['6_2'] * 3 / 5;
  					$score = $c6Result['6_2'] * 3 / 5;
  					if ($c6Result['6_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c6Result['6_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c6Result['6_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.3 ผู้บริหารใช้หลักการบริหารแบบมีส่วนร่วมและใช้ข้อมูลการประเมินผลหรือการวิจัยเป็นฐานคิดทั้งด้านวิชาการและการจัดการ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec6_3 = $c6Result['6_3'] * 3 / 5;
  					$score = $c6Result['6_3'] * 3 / 5;
  					if ($c6Result['6_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c6Result['6_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c6Result['6_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.4 ผู้บริหารสามารถบริหารจัดการการศึกษาให้บรรลุเป้าหมายตามแผนพัฒนาคุณภาพสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_4'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_4'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_4'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_4'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_4'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec6_4 = $c6Result['6_4'] * 3 / 5;
  					$score = $c6Result['6_4'] * 3 / 5;
  					if ($c6Result['6_4'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c6Result['6_4'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c6Result['6_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.5 ผู้บริหารส่งเสริมและพัฒนาศักยภาพบุคลากรให้มีประสิทธิภาพ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_5'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_5'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_5'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_5'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_5'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec6_5 = $c6Result['6_5'] * 3 / 5;
  					$score = $c6Result['6_5'] * 3 / 5;
  					if ($c6Result['6_5'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c6Result['6_5'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c6Result['6_5'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.6 ผู้บริหารให้คำแนะนำ คำปรึกษาทางวิชาการและเอาใจใส่การจัดการศึกษา ปฐมวัยเต็มศักยภาพและเต็มเวลา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_6'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_6'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_6'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_6'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_6'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec6_6 = $c6Result['6_6'] * 3 / 5;
  					$score = $c6Result['6_6'] * 3 / 5;
  					if ($c6Result['6_6'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c6Result['6_6'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c6Result['6_6'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>6.7 เด็ก ผู้ปกครอง และชุมชนพึงพอใจผลการบริหารจัดการศึกษาปฐมวัย</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_7'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_7'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_7'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_7'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c6Result['6_7'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec6_7 = $c6Result['6_7'] * 2 / 5;
  					$score = $c6Result['6_7'] * 2 / 5;
  					if ($c6Result['6_7'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score202.php");
  					if ($c6Result['6_7'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c6Result['6_7'] != 0) {
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
					$score6 = array($scorec6_1,$scorec6_2,$scorec6_3,$scorec6_4,$scorec6_5,$scorec6_6,$scorec6_7);
					$score = number_format(array_sum($score6), 2, '.', '');
					$score6sum = number_format(array_sum($score6), 2, '.', '');
					echo $score6sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score20.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 7 <br>แนวการจัดการศึกษา</h5></div></td>
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
  				<td>7.1 มีหลักสูตรการศึกษาปฐมวัยของสถานศึกษาและนำสู่การปฏิบัติได้อย่างมีประสิทธิภาพ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec7_1 = $c7Result['7_1'] * 4 / 5;
  					$score = $c7Result['7_1'] * 4 / 5;
  					if ($c7Result['7_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score4.php");
  					if ($c7Result['7_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c7Result['7_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.2 มีระบบและกลไกให้ผู้มีส่วนร่วมทุกฝ่ายตระหนักและเข้าใจการจัดการศึกษาปฐมวัย</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec7_2 = $c7Result['7_2'] * 4 / 5;
  					$score = $c7Result['7_2'] * 4 / 5;
  					if ($c7Result['7_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score4.php");
  					if ($c7Result['7_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c7Result['7_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.3 จัดกิจกรรมเสริมสร้างความตระหนักรู้และความเข้าใจหลักการจัดการศึกษาปฐมวัย</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec7_3 = $c7Result['7_3'] * 4 / 5;
  					$score = $c7Result['7_3'] * 4 / 5;
  					if ($c7Result['7_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score4.php");
  					if ($c7Result['7_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c7Result['7_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.4 สร้างการมีส่วนร่วมและแสวงหาความร่วมมือกับผู้ปกครอง  ชุมชน และท้องถิ่น</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_4'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_4'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_4'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_4'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_4'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec7_4 = $c7Result['7_4'] * 4 / 5;
  					$score = $c7Result['7_4'] * 4 / 5;
  					if ($c7Result['7_4'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score4.php");
  					if ($c7Result['7_4'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c7Result['7_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>7.5 จัดสิ่งอำนวยความสะดวกเพื่อพัฒนาเด็กอย่างรอบด้าน</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_5'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_5'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_5'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_5'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c7Result['7_5'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec7_5 = $c7Result['7_5'] * 4 / 5;
  					$score = $c7Result['7_5'] * 4 / 5;
  					if ($c7Result['7_5'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score4.php");
  					if ($c7Result['7_5'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c7Result['7_5'] != 0) {
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
					$score7 = array($scorec7_1,$scorec7_2,$scorec7_3,$scorec7_4,$scorec7_5);
					$score = number_format(array_sum($score7), 2, '.', '');
					$score7sum = number_format(array_sum($score7), 2, '.', '');
					echo $score7sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score20.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 8 <br> สถานศึกษามีการประกันคุณภาพภายในของสถานศึกษาตามที่กำหนดในกฎกระทรวง</h5></div></td>
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
  				<td>8.1 กำหนดมาตรฐานการศึกษาปฐมวัยของสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec8_1 = $c8Result['8_1'] * 1 / 5;
  					$score = $c8Result['8_1'] * 1 / 5;
  					if ($c8Result['8_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score102.php");
  					if ($c8Result['8_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c8Result['8_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.2 จัดทำและดำเนินการตามแผนพัฒนาการจัดการศึกษาของสถานศึกษาที่มุ่งพัฒนาคุณภาพตามมาตรฐานการศึกษาของสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec8_2 = $c8Result['8_2'] * 1 / 5;
  					$score = $c8Result['8_2'] * 1 / 5;
  					if ($c8Result['8_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score102.php");
  					if ($c8Result['8_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c8Result['8_2'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.3 จัดระบบข้อมูลสารสนเทศและใช้สารสนเทศในการบริหารจัดการ</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_3'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_3'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_3'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_3'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_3'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec8_3 = $c8Result['8_3'] * 1 / 5;
  					$score = $c8Result['8_3'] * 1 / 5;
  					if ($c8Result['8_3'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score102.php");
  					if ($c8Result['8_3'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c8Result['8_3'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.4 ติดตามตรวจสอบ และประเมินผลการดำเนินงานคุณภาพภายในตามมาตรฐานการศึกษาของสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_4'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_4'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_4'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_4'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_4'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec8_4 = $c8Result['8_4'] * 0.5 / 5;
  					$score = $c8Result['8_4'] * 0.5 / 5;
  					if ($c8Result['8_4'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score05.php");
  					if ($c8Result['8_4'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c8Result['8_4'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.5 นำผลการประเมินคุณภาพทั้งภายในและภายนอกไปใช้วางแผนพัฒนาคุณภาพการศึกษาอย่างต่อเนื่อง</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_5'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_5'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_5'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_5'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_5'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec8_5 = $c8Result['8_5'] * 0.5 / 5;
  					$score = $c8Result['8_5'] * 0.5 / 5;
  					if ($c8Result['8_5'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score05.php");
  					if ($c8Result['8_5'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c8Result['8_5'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>8.6 จัดทำรายงานประจำปีที่เป็นรายงานการประเมินคุณภาพภายใน</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_6'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_6'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_6'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_6'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c8Result['8_6'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec8_6 = $c8Result['8_6'] * 1 / 5;
  					$score = $c8Result['8_6'] * 1 / 5;
  					if ($c8Result['8_6'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score102.php");
  					if ($c8Result['8_6'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c8Result['8_6'] != 0) {
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
					$score8 = array($scorec8_1,$scorec8_2,$scorec8_3,$scorec8_4,$scorec8_5,$scorec8_6);
					$score = number_format(array_sum($score8), 2, '.', '');
					$score8sum = number_format(array_sum($score8), 2, '.', '');
					echo $score8sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 9 <br>คณะกรรมการสถานศึกษา และผู้ปกครอง ชุมชนปฏิบัติงานตามบทบาทหน้าที่อย่างมีประสิทธิภาพและเกิดประสิทธิผล</h5></div></td>
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
  				<td>9.1 เป็นแหล่งเรียนรู้เพื่อพัฒนาการเรียนรู้ของเด็กและบุคลากรในสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec9_1 = $c9Result['9_1'] * 2.5 / 5;
  					$score = $c9Result['9_1'] * 2.5 / 5;
  					if ($c9Result['9_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score25.php");
  					if ($c9Result['9_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c9Result['9_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>9.2 มีการแลกเปลี่ยนเรียนรู้ร่วมกันภายในสถานศึกษา  ระหว่างสถานศึกษากับครอบครัว ชุมชน และองค์กรที่เกี่ยวข้อง</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c9Result['9_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec9_2 = $c9Result['9_2'] * 2.5 / 5;
  					$score = $c9Result['9_2'] * 2.5 / 5;
  					if ($c9Result['9_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score25.php");
  					if ($c9Result['9_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c9Result['9_2'] != 0) {
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
					$score9 = array($scorec9_1,$scorec9_2);
					$score = number_format(array_sum($score9), 2, '.', '');
					$score9sum = number_format(array_sum($score9), 2, '.', '');
					echo $score9sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 10 <br>การพัฒนาสถานศึกษาให้บรรลุเป้าหมายตามปรัชญา วิสัยทัศน์ และจุดเน้นของการศึกษาปฐมวัย</h5></div></td>
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
  				<td>10.1 หลักสูตรสถานศึกษาเหมาะสมและสอดคล้องกับท้องถิ่นจัดโครงการ กิจกรรมพัฒนาเด็กให้บรรลุตามเป้าหมาย ปรัชญา  วิสัยทัศน์ และจุดเน้นการจัดการศึกษาปฐมวัยของสถานศึกษา</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec10_1 = $c10Result['10_1'] * 3 / 5;
  					$score = $c10Result['10_1'] * 3 / 5;
  					if ($c10Result['10_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c10Result['10_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c10Result['10_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>10.2 ผลการดำเนินงานบรรลุตามเป้าหมาย</td>
  				<td><div align="center"></div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c10Result['10_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec10_2 = $c10Result['10_2'] * 2 / 5;
  					$score = $c10Result['10_2'] * 2 / 5;
  					if ($c10Result['10_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score202.php");
  					if ($c10Result['10_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c10Result['10_2'] != 0) {
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
					$score10 = array($scorec10_1,$scorec10_2);
					$score = number_format(array_sum($score10), 2, '.', '');
					$score10sum = number_format(array_sum($score10), 2, '.', '');
					echo $score10sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score5.php");
  					echo $degree;
  					unset($degree);
  					?>
  				</div></td>
			</tr>
</table>
<table align="center" width="100%" border="1">
			<tr>
				<td colspan="10"><div align="center"><br><h5>ผลการพัฒนามาตรฐานที่ 11 <br>การพัฒนาสถานศึกษาตามนโยบายและแนวทางปฏิรูปการศึกษา</h5></div></td>
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
  				<td>11.1  จัดโครงการ กิจกรรมส่งเสริมสนับสนุนตามนโยบายเกี่ยวกับการจัดการศึกษาปฐมวัย</td>
  				<td></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_1'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_1'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_1'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_1'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_1'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec11_1 = $c11Result['11_1'] * 3 / 5;
  					$score = $c11Result['11_1'] * 3 / 5;
  					if ($c11Result['11_1'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score3.php");
  					if ($c11Result['11_1'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c11Result['11_1'] != 0) {
  						echo $degree;
  						unset($degree);
  					}
  				?>
  				</div></td>
  			</tr>
  			<tr>
  				<td>11.2 ผลการดำเนินงานบรรลุตามเป้าหมาย</td>
  				<td></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_2'] == 1) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_2'] == 2) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_2'] == 3) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_2'] == 4) {
						echo "/";
						}
				?>
				</div></td>
  				<td><div align="center">
				<?php 
				if ($c11Result['11_2'] == 5) {
						echo "/";
						}
				?>
				</div></td>
				<td><div align="center">
  				<?php 
  					$scorec11_2 = $c11Result['11_2'] * 2 / 5;
  					$score = $c11Result['11_2'] * 2 / 5;
  					if ($c11Result['11_2'] != 0) {
						echo $score;
					}
				?>
				</div></td>
  				<td><div align="center">
  				<?php
  					include("score202.php");
  					if ($c11Result['11_2'] != 0) {
  						echo $grade;
  					}
  				?></td>
  				<td><div align="center">
  				<?php
  					if ($c11Result['11_2'] != 0) {
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
					$score11 = array($scorec11_1,$scorec11_2);
					$score = number_format(array_sum($score11), 2, '.', '');
					$score11sum = number_format(array_sum($score11), 2, '.', '');
					echo $score11sum;
					?>
				</div></td>
  				<td><div align="center">
  					<?php
  					include("score5.php");
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