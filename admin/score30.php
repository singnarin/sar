<?php
	if ($score < 15) {
		$grade = 1;
		$degree = "ปรับปรุง";
	}else if ($score < 18) {
		$grade = 2;
		$degree = "พอใช้";
	}else if ($score < 22.5) {
		$grade = 3;
		$degree = "ดี";
	}else if ($score < 27) {
		$grade = 4;
		$degree = "ดีมาก";
	}else {
		$grade = 5;
		$degree = "ดีเยี่ยม";
	}
unset($score);
?>