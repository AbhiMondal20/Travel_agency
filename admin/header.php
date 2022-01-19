
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>TravelVilla an Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="loader.css" type='text/css'>
<!-- font CSS --> 
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
		
		setTimeout(function(){
			$('#overlay').fadeOut('slow');
	    }, 1500);
	});
</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
</head>
<body class="dashboard-page" style="background-image: url(4497979-white-backgrounds.jpg); background-repeat: ; background-position: center;">
	<div id="overlay">
		<img src="project-loader-colors.gif" class="spinner">
	</div>

	<nav class="main-menu">
		<ul>
			<li>
				<a href="table.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				 Packages
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
				<?php
				error_reporting(0);
				 include "connection.php";
				 $sql = "SELECT * FROM `category_package`";
				 $res = mysqli_query($conn,$sql);
				 while($row=mysqli_fetch_array($res)){
					 ?>
					<li>
						<a class="subnav-text" href="package.php?cid=<?php echo $row[category_id] ?>"><?php echo $row[category_name]; ?></a>
					</li>
					<?php
				 }
				 ?>
				</ul> 
			</li>
			<li>
				<a href="form.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Add Destinations
					</span>
				</a>
			</li>
		<ul class="logout">
			<li>
			<a href="logout.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.html"><img src="images/logo.png" alt="" />TravelVilla</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<?php
				include "connection.php";
				$sql = "SELECT COUNT(*) AS `id`FROM `contact`";		
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res)){
				?>
								<a href="package.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge"><?php echo $row['id']; ?></span></a>
			    <?php
				}
				?>
								<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
									
									<li>
										<div class="notification_header">
											<h3>You have messages</h3>
										</div>
									</li>
				<?php
				include "connection.php";
				$sql = "SELECT * FROM `contact`";		
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res)){
				?>
									<li><a href="#">
										
									   <div class="notification_desc">
										
										<p><b><span><?php echo $row['name']; ?> </b><?php echo $row['']; ?> </span></p>
										</div>
										
									  <div class="clearfix"></div>	
									 </a>
									 </li>
				 <?php
				}
				?>	
									<li>
										<div class="notification_bottom">
											<a href="message.php">See all messages</a>
										</div> 
									</li>
								</ul>
											</li>
							<li class="dropdown head-dpdn">
				<?php			
				include "connection.php";
				$sql = "SELECT COUNT(*) AS `id`FROM `contact`";		
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res)){
				?>
								<a href="package.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge"><?php echo $row['id']; ?></span></a>
			    <?php
				}
				?>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have new Ratings</h3>
										</div>
									</li>
				<?php
				include "connection.php";
				$sql = "SELECT * FROM `contact`";		
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res)){
				?>
									<li><a href="#">
										<div class="user_img"></div>
									   <div class="notification_desc">
										<p><?php echo $row['name']; ?> &nbsp; &nbsp; &nbsp;  <?php echo $row['rate']; ?> &nbsp; &nbsp;ratings</p>
										
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 
				<?php
				}
				?> 
									 <li>
										<div class="notification_bottom">
											<a href="message.php">See Ratings</a>
										</div> 
									</li>
								</ul>
							</li>	
							<li class="dropdown head-dpdn">
				<?php			
				include "connection.php";
				$sql = "SELECT COUNT(*) AS `id`FROM `contact`";		
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res)){
				?>
								<a href="package.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-thumbs-up"></i><span class="badge"><?php echo $row['id']; ?></span></a>
			    <?php
				}
				?>
								<ul class="dropdown-menu anti-dropdown-menu agile-task">
									<li>
										<div class="notification_header">
											<h3>You have new followers</h3>
										</div>
									</li>
				<?php
				include "connection.php";
				$sql = "SELECT COUNT(*) AS `follow`FROM `contact`";		
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res)){
				?>
									<li><a href="#">
										<div class="task-info">
											<span><?php echo $row['follow']; ?> Followers</span>
										</div>
									</a></li>
				<?php
				}
				?>					
									
									<li>
										<div class="notification_bottom">
											<a href="#"></a>
										</div> 
									</li>
								</ul>
							</li>	
							<div class="clearfix"> </div>
						</ul>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="settings.php"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="adminreg.php"><i class="fa fa-user"></i> Create Account</a> </li> 
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>