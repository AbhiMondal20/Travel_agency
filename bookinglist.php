<?php
session_start();
if(isset($_SESSION['id'])){
	
?>

<style>
h2 {
  text-align: center;
}

table caption {
	padding: .5em 0;
}

@media screen and (max-width: 767px) {
  table caption {
    border-bottom: 1px solid #ddd;
  }
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TravelVilla - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-image: url(Beautiful_Mountain_Hill_Nature_HD_Wallpaper.jpg); background-repeat: ; background-position: center;">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<<a class="navbar-brand" href="#"><span>Travel</span>Villa</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
<?php
include "connection.php";
$id=$_SESSION['id'];
$sql = "SELECT COUNT(*) AS `id`FROM `userprofile` WHERE `userprofile`.`cid`= '$id'";		
$res= mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res)){
?>
						<em class="glyphicon glyphicon-bell"></em><span class="label label-danger">
						<?php echo $row['id']; ?>
						</span>
						
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right"></small>
										<a href="bookinglist.php"><strong><?php echo $_SESSION['name']?></strong> has  <strong>&nbsp;<?php echo $row['id']; ?></strong> &nbsp; new bookings</a>
									<br />
								</div>
							</li>
<?php
}
?>							
							
								<div class="all-button"><a href="bookinglist.php">
									<em class="fa fa-inbox"></em> <strong>See all bookingss</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="settings.php">
						<em class="	glyphicon glyphicon-cog"></em><span class="label label-info"></span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="settings.php">
								<div><em class="	glyphicon glyphicon-wrench	"></em> General Settings
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<!--<li class="divider"></li>
							<li><a href="privacysettings.php">
								<div><em class="glyphicon glyphicon-alert"></em>Privacy Settings
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="settings.php">
								<div><em class="fa fa-edit"></em>Edit Profile
									<span class="pull-right text-muted small"></span></div>
							</a></li>-->
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['name']?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="userdashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Special Tours</a></li>
			<li><a href="booking.php"><em class="fa fa-plane">&nbsp;</em>Bookings</a></li>
			<li class="active"><a href="bookinglist.php"><em class="fa fa-file">&nbsp;</em> My Bookings</a></li>
			
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	
	
	<!--/.body-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"> Home</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="color: whitesmoke; text-align: center;"><b>My Bookings</b></h1>
			</div>
		</div>
	

		<!--/.body-->
		
		<h2>My Last Bookings</h2>
		

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
          
          <thead>
            <tr>
			  <th>Booking Id</th>
			  <th>Customer Id</th>				  
              <th>Departure Date</th>
              <th>Arrival Date</th>
              <th>Contact Number</th>
              <th>Your Selected Trips</th>
			  <th>Adult</th>
			   <th>Child</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
			

				include "connection.php";	
				
				$id=$_SESSION['id'];
				echo " Customer ID: $id";
				$sql="select * from `userprofile` where `userprofile`.`cid`= '$id' ";
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res))
				{
			      print "<tr>
							<td>$row[id]</td>
							<td>$row[cid]</td>
							<td>$row[departure]</td>
							<td>$row[arrival]</td>
							<td>$row[phone]</td>
							<td>$row[trip]</td>
							<td>$row[adult]</td>
							<td>$row[child]</td>
						</tr>";
				}
			?>			
							
          </tfoot>
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>

<?php
}
else
{
	header ("location:index.php");
}
?>





