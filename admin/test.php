<?php 
include("include/connect.php");
$selc3 = mysql_fetch_array(mysql_query("SELECT SUM(3_4_5) AS total3_4_5 FROM `c3` ")) or die  (mysql_error());
echo $selc3["total3_4_5"];
?>