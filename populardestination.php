<html>
	<body>
		<!-- Start popular-destination Area -->
			<section class="other-issue-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-9">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Popular Destinations</h1>
		                        <p>Here are the top 6 all time favourite tourist destinations in India which are visited by millions of Indian and international visitors!</p>
		                    </div>
		                </div>
		            </div>					
					<div class="row">
					<?php
					include "connection.php";
					$sql = "SELECT * FROM `packages`";

					$res= mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($res))
					{
						//echo $row['id'];
						//echo "<img src='$row[photo]'>";
					?>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="<?php echo $row['photo'] ;?>" alt="" style="
    width: 500px;
    height: 200px;
">					
								</div>
								
									<h4><?php echo $row['name'];?></h4>
									
								<p>
									<?php echo $row['description'];?>
								</p>
							</div>
						</div>
					<?php
					}
					?>
						<!--<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/Jaipur.jpg" alt="">					
								</div>
						
									<h4>Jaipur- Rajasthan</h4>
								
								<p>
									Jaipur is the capital of India's Rajasthan State. It evokes the royal family that once ruled the region and the in 1727, founded what is now called the Old City or Pink City for the trade mark building color. 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/kashmir.jpg" alt="">					
								</div>
									<h4>kashmir</h4>
							
								<p>
									Jammu and Kashmir is a state in northern India, often denoted by its acronym. It is located mostle in the Himalayan mountains, and shares borders with the state of Himachal Pradesh.  
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/kanyakumari.jpg" alt="">					
								</div>
							
									<h4>kanyakumari- Chennai</h4>
								
								<p>
									Kanyakumari is especially popular in India for its spectacular and unique sunrise and sunset.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/Gangtok.jpg" alt="">					
								</div>
							
									<h4>Gangtok- Sikkim</h4>
								
								<p>
									The capital of the state of Sikkim, Gangtok is an attractive tourist destination, reflecting a unique ambience which derives from its happy blend of tradition and modernity.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/havelock_island.jpg" alt="">					
								</div>
							
									<h4>Havelock Island</h4>
								
								<p>
									Ecotourism is encouraged at Havelock Island, the largest island in Ritchie’s Archipelago in the Andaman Islands. 
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/dharamsala.jpg" alt="">					
								</div>
							
									<h4>Dharamsala</h4>
								
								<p>
									Dharamsala is the home away from home for the Dalai Lama who came here in 1959 after escaping from Tibet.  
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="img/Rohtang-Pass.jpg" alt="">					
								</div>
							
									<h4>Rohtang-Pass</h4>
								
								<p>
									First and foremost, Rohtang Pass is one of the very few places in India where you will find snow throughout the year – if you love skiing, you cannot miss this place.  
								</p>
							</div>
						</div>-->		
					</div>
				</div>	
			</section>
				<!-- End popular-destination Area -->
	</body>
</html>