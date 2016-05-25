<?php
	if ($score < 50) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 60) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 75) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 90) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>