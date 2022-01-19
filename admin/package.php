<?php
session_start();
include "connection.php";
include "header.php";
if(isset($_SESSION['name'])){
?>




		<div class="main-grid">
			<div class="agile-grids">		
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
					<?php
					$cid= $_GET['cid'];
					$sql = "select * from `allpackage`,`category_package` where 
					`category_package`.`category_id`=`allpackage`.`category_id` and `category_package`.`category_id`='$cid'";
					//echo $sql;
					$res = mysqli_query($conn,$sql);
					$row= mysqli_fetch_array($res);
					
					?>
					
						<h2><b><?php echo $row['category_name']?></b></h2>
					</div>
					<div class="panel panel-widget forms-panel" style="width: 720px; border-left-width: 10px; height: 370px; margin-left: 350px; margin-right: 200px;">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Package Details </h4>
								</div>
								<div class="form-body" style="padding-top: 2px;">
									<form action="" method="post"> 
									<div class="form-group"> 
											<label for="exampleInputEmail1"><b></b></label> 
											<input type="hidden" name="cid" class="form-control" id="exampleInputEmail1" value="<?php echo $cid; ?>" style="width: 600px;"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputEmail1"><b>Place Name</b></label> 
											<input type="text" name="sname" class="form-control" id="exampleInputEmail1" placeholder="write name" style="width: 600px;"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputPassword1"><b>Number of Days</label> 
											<input type="text" name="sdays" class="form-control" id="exampleInputPassword1" placeholder="" style="width: 126px;"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputPassword1"><b>Price</label> 
											<input type="text" name="sprice" class="form-control" id="exampleInputPassword1" placeholder="" style="width: 126px;"> 
										</div> 
										<div class="checkbox"> 
											<!--<label> <input type="checkbox"> Check me out </label>-->
										</div> 
										<button type="submit" name="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div> 
					
		
<?php

if(isset($_POST['submit'])){
error_reporting(0);
$mysqli = "INSERT INTO `allpackage`(`id`,`category_id`,`place`,`days`, `price`) VALUES ('','$_POST[cid]','$_POST[sname]','$_POST[sdays]','$_POST[sprice]')";

//echo "$mysqli";
	
	if(mysqli_query($conn,$mysqli)==true)
	{
		//echo "Insert_Succesfully";

		header("location:package.php");
	}

	else
	{
		echo "Insert Again";
	}
}	

?>

	<br><br>
					
		<!-- footer -->
		<div class="footer">
			<p>© 2016 Colored . All Rights Reserved . Design by <a href="#">TravelVilla</a></p>
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
