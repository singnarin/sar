<?php
	if ($score < 0.25) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 0.30) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 0.38) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 0.45) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>