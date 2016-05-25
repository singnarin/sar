<?php
session_start();
unset ( $_SESSION['ses_userid'] );
unset ( $_SESSION['ses_username'] );
session_destroy();
echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
?>