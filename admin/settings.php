<?php
session_start();
include "connection.php";

if(isset($_SESSION['name'])){
?>
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
<body class="dashboard-page" style="background-image: url(London-Landmarks-Architecture-Big-Ben-Skyline-1366x768-Wallpaper.jpg); background-repeat: ; background-position: center;">
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
								<a href="package.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge"><?php echo $row['id']; ?></span></a>
			    <?php
				}
				?>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have new notifications</h3>
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
								<a href="package.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge"><?php echo $row['id']; ?></span></a>
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
		<div class="main-grid">
			<div class="agile-grids">	
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- grids -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Manage Account</h2>
					</div>
					
					
							<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
								<h3 class="hdg">Change your settings</h3>
								<br>
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">  Manage Profile </a></li>
										
										
										<li role="presentation" class="dropdown">
											<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Manage Account<span class="caret"></span></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
												<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Admin Account</a></li>
												<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Customer Account</a></li>
												<li><a href="#dropdown3" tabindex="-3" role="tab" id="dropdown3-tab" data-toggle="tab" aria-controls="dropdown3">Manage Reviews</a></li>
											</ul>
										</li>

									</ul>
				
									<div id="myTabContent" class="tab-content">
									<br>
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				<?php
				include "connection.php";

				$sql = "SELECT * FROM `settings`";
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res)){
				?>	
										<form method = "post" action = "update.php">

											<table>
												<tr>
													<th>Address line 1</th>
													<td><textarea name = "add1"><?php echo $row[add1];?></textarea></td>
												</tr>
												<tr>
													<th>Address line 2</th>
													<td><textarea name = "add2"><?php echo $row[add2];?></textarea></td>
												</tr>
												<tr>
													<th>Contact Number</th>
													<td><input type = "text" name = "phn" value = "<?php echo $row[phn];?>"></td>
												</tr>
												<tr>
													<th>Week days</th>
													<td><input type = "text" name = "week" value = "<?php echo $row[week];?>"></td>
												</tr>
												<tr>
													<th>Support</th>
													<td><input type = "text" name = "support" value = "<?php echo $row[support];?>"></td>
												</tr>
												<tr>
													<th>Message</th>
													<td><textarea name = "message"><?php echo $row[message];?></textarea></td>
												</tr>
												<tr>
													<th>About Company</th>
													<td><textarea name = "about"><?php echo $row[about];?></textarea></td>
												</tr>
												
												<tr>
													<td><input type = "submit" name="submit" value = "Update"></td>
												</tr>
													
											</table>
										</form>
				<?php
				}
				?>
					
										</div>
										
											<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
											<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
											<p>
											<h3 class="hdg">Change Admin Account settings</h3>
<?php
if($_GET['del_id'])
{
include "connection.php";
$sqldelete="DELETE FROM `adminreg` WHERE `id`='$_GET[del_id]'";
//echo $sqldelete;
mysqli_query($conn,$sqldelete);
header ("location:settings.php");
}										
?>											
												
				<table border="2">
				<tr>				
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PASSWORD</th>
				<th>Action</th>
				</tr>
				<?php
				$sql = "SELECT * FROM `adminreg`";
				$res= mysqli_query($conn,$sql);
				while($row= mysqli_fetch_array($res)){
					print "<tr>
								<td>$row[name]</td>
								<td>$row[email]</td>
								<td>$row[password]</td>
								<td>
								<a href='settings.php?del_id=$row[id]'>Drop</a>
								</td>";
				}
								?>							
				</table>

							
										</p>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
											<p>
										<h3 class="hdg">Change Customer Account settings</h3>	
<?php
if($_GET['del_id'])
{
include "connection.php";
$sqldelete="DELETE FROM `data` WHERE `id`='$_GET[del_id]'";
//echo $sqldelete;
mysqli_query($conn,$sqldelete);
header ("location:settings.php");
}										
?>											
												
				<table border="2">
				<tr>				
				<th>NAME</th>
				<th>EMAIL</th>
				<th>Contact Number</th>
				<th>Action</th>
				</tr>
				<?php
				$sql = "SELECT * FROM `data`";
				$res= mysqli_query($conn,$sql);
				while($row= mysqli_fetch_array($res)){
					print "<tr>
								<td>$row[name]</td>
								<td>$row[email]</td>
								<td>$row[phone]</td>
								<td>
								<a href='settings.php?del_id=$row[id]'>Drop</a>
								</td>";
				}
				?>							
				</table></p>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="dropdown3" aria-labelledby="dropdown3-tab">
											<p>
										<h3 class="hdg">Reviews</h3>
										<p>	
<?php
if($_GET['del_id'])
{
include "connection.php";
$sqldelete="DELETE FROM `contact` WHERE `id`='$_GET[del_id]'";
//echo $sqldelete;
mysqli_query($conn,$sqldelete);
header ("location:settings.php");
}										
?>											
												
				<table border="">
				<tr>				
				<th>NAME</th>
				<th>EMAIL</th>
				<th>Subject</th>
				<th>Message</th>
				<th>Action</th>
				</tr>
				<?php
				$sql = "SELECT * FROM `contact`";
				$res= mysqli_query($conn,$sql);
				while($row= mysqli_fetch_array($res)){
					print "<tr>
								<td>$row[name]</td>
								<td>$row[email]</td>
								<td>$row[subject]</td>
								<td>$row[message]</td>
								<td>
								<a href='settings.php?del_id=$row[id]'>Drop</a>
								</td>";
				}
				?>							
				</table>
				</p>
										</div>										
									</div>
																
				
								
								</div>
							</div>
							
							
		<!-- footer -->
		<div class="footer">
			<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html>
<?php
}
else
{
	header ("location:adminlogin.php");
}
?>
