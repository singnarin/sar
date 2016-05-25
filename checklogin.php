<?php
session_start();
$loginid="null";
$password="null";
$_SESSION['ses_username']=null;
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
$loginid = $_POST['loginid'];
$password = $_POST['password'];
if($loginid == "") {
$message = "คุณยังไม่ได้ใส่ชื่อผู้ใช้";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	} else if($password == "") {
		$message = "คุณยังไม่ได้ใส่รหัสผ่าน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			} else {
				include("include/connect.php");
				$check_log = mysql_query("SELECT * FROM tbschool WHERE schoolid = '$loginid' AND password = '$password'");
				$num = mysql_num_rows($check_log);
if($num <=0) {
	$message = "ชื่อผู้ใช้หรือรหัสผ่านของคุณไม่ถูกต้อง";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	} else {
		while ($data = mysql_fetch_array($check_log) ) {
		$_SESSION['ses_userid'] = session_id();
		$_SESSION['ses_username'] = $loginid ;
		if($loginid == '56010000'){
			echo "<meta http-equiv='refresh' content='0;URL=admin/index.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;URL=school.php'>";
		}

}
}
}
mysql_close($Conn);
?>