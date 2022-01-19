<?php
include "header.php";
?>
<body>

	<!-- start banner Area -->
			
			
			
			
			
			<div class="card">
					<div class="card-header bg-dark text-white text-center">Register Here</div>
					<div class="card-body">
					<form method="post" action="insert.php" style=" width: 500px; position: center;">

						<div class="form-group">

						<label for="inputname">User Name</label>
						<input type="text" id="inputname" class="form-control" placeholder="Enter Name" required="required" autofocus="autofocus" name="name">

						</div>
						<div class="form-group">

						<label for="inputname">Email Id</label>
						<input type="text" id="inputname" class="form-control" placeholder="Enter Email" required="required" autofocus="autofocus" name="email">

						</div>
						<div class="form-group">

						<label for="inputname">Contact Number</label>
						+91<input type="text" id="inputname" class="form-control" placeholder="Enter Contact Number" required="required" autofocus="autofocus" name="phn">

						</div>
						<div class="form-group">

						<label for="inputname">State</label>
						<input type="text" id="inputname" class="form-control" placeholder="Enter State" required="required" autofocus="autofocus" name="state">

						</div>
						<div class="form-group">

						<label for="inputname">Country</label>
						<input type="text" id="inputname" class="form-control" placeholder="Enter Country" required="required" autofocus="autofocus" name="country">

						</div>
						<div class="form-group">

						<label for="inputname">Adderss</label>
						<input type="text" id="inputname" class="form-control" placeholder="Enter Address" required="required" autofocus="autofocus" name="add">

						</div>

						<div class="form-group">

						<label for="inputpass">Password</label>
						<input type="password" id="inputpass" class="form-control" placeholder="Enter Password" required="required" name="pass">

						</div>

						<button type="submit" class="btn btn-primary btn-block" name="submit" value="alert" onclick="myFunction()">Register</button>

						Already an user<a href="index.php" class="aa"> login here</a>
						
					</form>
					</div>
					</div>
	
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>



<?php
include "footer.php";
?>

			
