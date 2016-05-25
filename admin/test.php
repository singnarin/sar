<?php 
include("include/connect.php");
$selc6 = mysql_query("SELECT *, SUM(6_1) AS total6_1, SUM(6_2) AS total6_2, SUM(6_3) AS total6_3, SUM(6_4) AS total6_4, SUM(6_5) AS total6_5, SUM(6_6) AS total6_6, SUM(6_7) AS total6_7 FROM `c6` ");
$c6num = mysql_num_rows($selc6);
echo $c6num;
?>