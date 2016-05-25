<?php
	if ($score < 32.5) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 39) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 48.8) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 58.5) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>