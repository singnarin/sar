<?php
	if ($score < 5) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 6) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 7.5) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 9) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>