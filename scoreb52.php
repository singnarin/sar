<?php
	if ($score < 2) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 3) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 4) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 5) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>