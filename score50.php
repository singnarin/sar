<?php
	if ($score < 25) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 30) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 37.5) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 45) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>