<?php
	if ($score < 0.2) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 0.3) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 0.4) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 0.5) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>