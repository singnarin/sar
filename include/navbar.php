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
          <li class="active"><a href="school.php">หน้าแรก</a></li>
          <li class=""><a href="general.php">ข้อมูลทั่วไป</a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ระดับปฐมวัย<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li ><a href='childhood1.php'>มาตรฐานที่ 1</a></li>
      	 		  <li ><a href='childhood2.php'>มาตรฐานที่ 2</a></li>
      	 		  <li ><a href='childhood3.php'>มาตรฐานที่ 3</a></li>
      	 		  <li ><a href='childhood4.php'>มาตรฐานที่ 4</a></li>
      	 		  <li ><a href='childhood5.php'>มาตรฐานที่ 5</a></li>
      	 		  <li ><a href='childhood6.php'>มาตรฐานที่ 6</a></li>
      	 		  <li ><a href='childhood7.php'>มาตรฐานที่ 7</a></li>
      	 		  <li ><a href='childhood8.php'>มาตรฐานที่ 8</a></li>
      	 		  <li ><a href='childhood9.php'>มาตรฐานที่ 9</a></li>
      	 		  <li ><a href='childhood10.php'>มาตรฐานที่ 10</a></li>
      	 		  <li ><a href='childhood11.php'>มาตรฐานที่ 11</a></li>
      	 		  <li ><a href='checkexportchildhood1_11.php'>นำออกมาตรฐานที่1-11</a></li>
      	 		  <li ><a href='checkchildhood.php'>สรุประดับปฐมวัย</a></li>
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
              	<li><a href='basic1.php'>มาตรฐานที่ 1</a></li>
      	 		<li><a href='basic2.php'>มาตรฐานที่ 2</a></li>
      	 		<li><a href='basic3.php'>มาตรฐานที่ 3</a></li>
      	 		<li><a href='basic4.php'>มาตรฐานที่ 4</a></li>
      	 		<li><a href='basic5.php'>มาตรฐานที่ 5</a></li>
      	 		<li><a href='basic6.php'>มาตรฐานที่ 6</a></li>
      	 		<li><a href='basic7.php'>มาตรฐานที่ 7</a></li>
      	 		<li><a href='basic8.php'>มาตรฐานที่ 8</a></li>
      	 		<li><a href='basic9.php'>มาตรฐานที่ 9</a></li>
      	 		<li><a href='basic10.php'>มาตรฐานที่ 10</a></li>
      	 		<li><a href='basic11.php'>มาตรฐานที่ 11</a></li>
      	 		<li><a href='basic12.php'>มาตรฐานที่ 12</a></li>
      	 		<li><a href='basic13.php'>มาตรฐานที่ 13</a></li>
      	 		<li><a href='basic14.php'>มาตรฐานที่ 14</a></li>
      	 		<li><a href='basic15.php'>มาตรฐานที่ 15</a></li>
      	 		<li><a href='checkexportbasic1_15.php'>นำออกมาตรฐานที่1-15</a></li>
      	 		<li><a href='checkbasic.php'>สรุประดับพื้นฐาน</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav">
          	<li class=""><a href="checkconfirm.php">ยืนยันข้อมูล</a></li>
            <li class=""><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
        <ul class="nav pull-right">
        	<ul class="nav">
          		<li class=""><a href="changpass.php">เปลี่ยนรหัสผ่าน</a></li>
          	</ul> 
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