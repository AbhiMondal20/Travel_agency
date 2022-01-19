<?php
session_start();
if(isset($_SESSION['name'])){

?>
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
	
	
	  <script src="https://code.jquery.com/jquery-3.3.1.js" </script>
	  <script type="text/javascript"> 
	  $(window).on('load',function(){
		$('.preloader').addclass('complete')  
	  })
	  </script>
		  
	 
	
</head>
<body style="background-image: url(); background-repeat: no-repeat ; background-position: fullscreen;">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Travel</span>Villa</a>
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
							<li class="divider"></li>
							<li><a href="privacysettings.php">
								<div><em class="glyphicon glyphicon-alert"></em>Privacy Settings
									<span class="pull-right text-muted small"></span></div>
							</a></li>
							<!--<li class="divider"></li>
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
			<li class="active"><a href="userdashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Special Tours</a></li>
			<li><a href="booking.php"><em class="fa fa-plane">&nbsp;</em>Bookings</a></li>
			<li><a href="bookinglist.php"><em class="fa fa-file">&nbsp;</em> My Bookings</a></li>
			
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Panels</li>
			</ol>
		</div><!--/.row-->
		
		
		
		<br><br><br><br>
			
			<div class="col-md-6" style="left: 300px; ">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-pills">
							<li class="active"><a href="#pilltab1" data-toggle="tab">Change Password</a></li>
							<li><a href="#pilltab2" data-toggle="tab"></a></li>
							<li><a href="#pilltab3" data-toggle="tab"></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">
								<h4></h4>
								<p>
		<?php
		include "connection.php";
        error_reporting(0);

        if(isset($_POST['next']))
        {
            $id = $_POST['email1'];
            $sql = "SELECT COUNT(*) AS `email` FROM `data` WHERE `email` = '$id'";
            $res = $conn->query($sql);
            $row = $res->fetch_assoc();

            if($row['email'] > 0)
            {
                header("location:resetpassword.php?email=$id");
                exit;
            }
            else
            {
                echo "<div class='alert alert-warning'>
                        This email doesn't exist! Please enter correct one!
                      </div>";
            }
        }
    ?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header bg-info text-white"></div>
        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email1" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>
            <button type="submit" name="next" class="btn btn-primary btn-block">Next</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="index.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>
 
								</p>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
		
		
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div><!--/.main-->
	
		<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php
}
else
{
	header ("location:index.php");
}
?>