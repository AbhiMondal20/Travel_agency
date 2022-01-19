
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
<body style="background-image: url(Beautiful_Mountain_Hill_Nature_HD_Wallpaper.jpg); background-repeat: ; background-position: center;">
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
							<!--<li class="divider"></li>
							<li><a href="privacysettings.php">
								<div><em class="glyphicon glyphicon-alert"></em>
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
			<li class="active"><a href="userdashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Special Tours</a></li>
			<li><a href="booking.php"><em class="	glyphicon glyphicon-map-marker">&nbsp;</em>Bookings</a></li>
			<li><a href="bookinglist.php"><em class="glyphicon glyphicon-search">&nbsp;</em> My Bookings</a></li>
			
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"> Packages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="color: whitesmoke; text-align: center;"><b>Special Tours </b></h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h2></h2>
			</div>
			<div class="col-md-6">
				<div class="panel panel-teal">
					<div class="panel-heading dark-overlay"><b>Vaishnodevi-Dalhousie-Dharamsala-Kangra Valley-</b> TOUR COST-15,605/- (12 Days) </div>
					<div class="panel-body">
					
						<p>Amritsar (1night),(Golden Temple, Jaliwanwalabagh, (Wagha Border)Dalhousie(2nights) (Chamba, Khaziar), Chamunda / Dharmasala/ Jwalamukhi (2nights) (Palampur, Mackloyedgung, Kangra), Katra 2nights (By foot VaishanadebiDarshan up & down 24km).</p>
					</div>
				</div>
			</div><!--/.col-->
			
			<div class="col-md-6">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay"><b>Bhutan & Cooachbehar- </b>TOUR COST-16,605/- (9 Days)</div>
					<div class="panel-body">
					
						<p>Jaigaon/Funtshiling(1 nights),Thimpu(2nights)Phunakha,Paroo( 2 Nights) Che-le-la-Pass, Coochbehar (1 Night) Shree ShreeMadhanmohanMandir, Rajbari, Sagardighi.Jaigaon/Funtshiling(1 nights),Thimpu(2nights)Phunakha,Paroo( 2 Nights) Che-le-la-Pass, Coochbehar (1 Night) Shree ShreeMadhanmohanMandir.</p>
					</div>
					
				</div>
			</div><!--/.col-->
			
			<div class="col-md-6">
				<div class="panel panel-orange">
					<div class="panel-heading dark-overlay"><b>Kashmir (Valley Of Haven)</b>-TOUR COST-30,000/- (12 Days)</div>
					<div class="panel-body">
					.
						<p>Srinagar(4 Night)Sonmarg,Gulmarg,Mogal Garden &Dallake,On The way Surya Mandir at AnantaNag, Pahelgaon(1 Night)Betabvelly,Aruvelly,Chandanbari, Jammu/Udhampur(1 Night)on the way Patnitop View, Amritsar (1 Night)Jalianwalabag,Goldan Temple(Wagha Border)..</p>
					</div>
				</div>
			</div><!--/.col-->
			
			<div class="col-md-6">
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><b>Leh Ladakh-Sumorire Lake With Kashmir & Himachal Pradesh -</b>TOUR COST-30,005/- (18 Days)</div>
					<div class="panel-body">
			.
						<p>Ambala/Chandigarh/Mandi (1 Night), Manali Via Monikaran(2 Nights) Kelong (1 Night) (Via Rothangpass, Sarchu),Leh (4Nights) (Pangong Lake) via Changla-la Pass, Nubra Valley (1Night), via Khardungla Pass(18,380 ft.), Kargil (1 Night), Srinagar (2 Nights) Via Sonamarg (Moghal Garden),Udhampur/ Jammu/(1 Night)t)Via Patnitop..</p>
					</div>
				</div>
			</div><!--/.col-->
			<div class="col-md-6">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay"><b>Kinnor-Kailash- </b>TOUR COST- 16,405/-(12 Days)</div>
					<div class="panel-body">
					
						<p>Simla(1Night),(GreenValley),Sarahan/Rampur(1Night),
Kalpa(2Nights) (Recong-Pio), Sangla Valley (2Nights)(Chittkul), Manali(3Nights)via Jaloripass(Rotangpass/Ice Point),Monikaran,Mandi/Kulu/Baluchowki/
Bhunter- (1Night)..</p>
					</div>
					
				</div>
			</div><!--/.col-->
			
			<div class="col-md-6">
				<div class="panel panel-teal">
					<div class="panel-heading dark-overlay"><b>RAJASTHAN-JAISALMER-BIKANER-</b> TOUR COST- 20,205/(15 Days) </div>
					<div class="panel-body">
					
						<p>Joypur(1 Night)AjmerPuskar(1Night)SabitriTirtha, Udaypur (2 Nights), Chitorgarh,Ek-Lingaji,Haldighati,Mount Abu(2 Nights)(Dilwara Temple), Jodhpur(1 Night), Jaisalmir(2 Days),(Sam), Bikaner(1Night).</p>
					</div>
				</div>
			</div><!--/.col-->
			
			
			
			
			
			
			
			
			<div class="col-sm-12">
				<p class="back-link">Created By  <a href="https://www.medialoot.com">TravelVilla</a></p>
			</div>
		</div><!--/.row-->
		
		
		
		
		
		
		
			
			
			
	
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