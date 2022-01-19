<?php
include "header.php";
?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- grids -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>All Messages</h2>
					</div>
					
					<!-- typography -->
					
					
							<p class="wow fadeInUp animated" data-wow-delay=".5s">You have a new message</p>
							<div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
								<table class="table table-hover">
									<thead>
										<tr>
										  
										  <th>Name</th>
										  <th>Email Id</th>
										  <th>Subject</th>
										  <th>Message</th>
										  <th>Ratings</th>
										</tr>
									</thead>
									<tbody>
				<?php
				$sql = "SELECT * FROM `contact`";		
				$res= mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($res))
			
				{
			      print "<tr>
							
							<td>$row[name]</td>
							<td>$row[email]</td>
							<td>$row[subject]</td>
							<td>$row[message]</td>
							<td>$row[rate]</td>
						</tr>";
				}
			?>	
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!--//typography-->
				</div>
				<!-- //grids -->
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
