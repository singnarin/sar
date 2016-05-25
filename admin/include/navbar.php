<?php
include("include/connect.php");
$schoolResult = mysql_fetch_array(mysql_query("SELECT * FROM `tbschool` WHERE `schoolid` = '".$_SESSION['ses_username']."'")) or die  (mysql_error());
?>
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!--<a class="brand" href="#">หน้าแรก</a>-->
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active"><a href="index.php">หน้าแรก</a></li>
          <li class=""><a href="generalsel.php">ข้อมูลทั่วไป</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ระดับปฐมวัย<b class="caret"></b></a>
            <ul class="dropdown-menu">
            <li ><a href='childhood1sel.php'>มาตรฐานที่ 1</a></li>
      	 		<li ><a href='childhood2sel.php'>มาตรฐานที่ 2</a></li>
      	 		<li ><a href='childhood3sel.php'>มาตรฐานที่ 3</a></li>
      	 		<li ><a href='childhood4sel.php'>มาตรฐานที่ 4</a></li>
      	 		<li ><a href='childhood5sel.php'>มาตรฐานที่ 5</a></li>
      	 		<li ><a href='childhood6sel.php'>มาตรฐานที่ 6</a></li>
      	 		<li ><a href='childhood7sel.php'>มาตรฐานที่ 7</a></li>
      	 		<li ><a href='childhood8sel.php'>มาตรฐานที่ 8</a></li>
      	 		<li ><a href='childhood9sel.php'>มาตรฐานที่ 9</a></li>
      	 		<li ><a href='childhood10sel.php'>มาตรฐานที่ 10</a></li>
      	 		<li ><a href='childhood11sel.php'>มาตรฐานที่ 11</a></li>
            <li ><a href='exportchildhood1_11sel.php'>นำออกมาตรฐานที่1-11</a></li>
      	 		<li ><a href='childhoodsel.php'>สรุประดับปฐมวัย</a></li>
              <!--
              <li class="divider"></li>
              <li class="nav-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
              -->
            </ul>
          </li>                    
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ระดับพื้นฐาน<b class="caret"></b></a>
            <ul class="dropdown-menu">
            <li><a href='basic1sel.php'>มาตรฐานที่ 1</a></li>
            <li><a href='basic2sel.php'>มาตรฐานที่ 2</a></li>
            <li><a href='basic3sel.php'>มาตรฐานที่ 3</a></li>
            <li><a href='basic4sel.php'>มาตรฐานที่ 4</a></li>
            <li><a href='basic5sel.php'>มาตรฐานที่ 5</a></li>
            <li><a href='basic6sel.php'>มาตรฐานที่ 6</a></li>
            <li><a href='basic7sel.php'>มาตรฐานที่ 7</a></li>
            <li><a href='basic8sel.php'>มาตรฐานที่ 8</a></li>
            <li><a href='basic9sel.php'>มาตรฐานที่ 9</a></li>
            <li><a href='basic10sel.php'>มาตรฐานที่ 10</a></li>
            <li><a href='basic11sel.php'>มาตรฐานที่ 11</a></li>
            <li><a href='basic12sel.php'>มาตรฐานที่ 12</a></li>
            <li><a href='basic13sel.php'>มาตรฐานที่ 13</a></li>
            <li><a href='basic14sel.php'>มาตรฐานที่ 14</a></li>
            <li><a href='basic15sel.php'>มาตรฐานที่ 15</a></li>
            <li><a href='exportbasic1_15sel.php'>นำออกมาตรฐานที่1-15</a></li>
            <li><a href='basicsel.php'>สรุประดับพื้นฐาน</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav">
          	<li class=""><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
        <ul class="nav pull-right"> 
        	<ul class="nav">
          		<li class=""><a href="#"><?php echo $_SESSION['ses_username']." - ".$schoolResult["schoolname"];?></a></li>
          	</ul>
        </ul>   
<!--        <ul class="nav pull-right">
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>-->
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div>