<?php 
   $title = "Flight Details";
   require_once('./home_header.php');
   require_once('./settings.php')
?>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->
		<!-- Start Navigation -->
		  <?php 
		   require_once('./home_navbar.php') 
		  ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Hotel Details Start ================================== -->
		<section class="pt-3 gray-simple">
			<div class="container">
				<div class="row">

					<!-- Breadcrumb -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="Flight-detail.php#" class="text-primary">Home</a></li>
								<li class="breadcrumb-item"><a href="Flight-detail.php#" class="text-primary">Flight</a></li>
								<li class="breadcrumb-item active" aria-current="page">Delhi To Los Angeles</li>
							</ol>
						</nav>
					</div>

					<!-- Flight Info -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row">
							<div class="col-xl-9 col-lg-8 col-md-12">
								<div class="card border-0 mb-4">
									<div class="card-body">
										<div class="crd-block d-md-flex align-items-start justify-content-start">
											<div class="crd-heaader-0 flex-shrink-0 mb-3 mb-md-0">
												<div class="square--70 rounded-2 bg-light-primary text-primary fs-3"><i class="fa-solid fa-plane"></i></div>
											</div>
											<div class="crd-heaader-first ps-md-3">
												<div class="d-inline-flex align-items-center mb-1">
													<span class="label fw-medium bg-light-success text-success">Business Class</span>
												</div>
												<div class="d-block">
													<h4 class="mb-0">Delhi(DLH)<span class="text-muted-2 mx-3"><i class="fa-solid fa-arrow-right-arrow-left"></i></span>Los Angeles(LOS)</h4>
													<div class="explotter-info">
														<p class="detail ellipsis-container fw-semibold">
															<span class="ellipsis-item__normal">17 Sep</span>
															<span class="separate ellipsis-item__normal"></span>
															<span class="ellipsis-item">2 Stop</span>
															<span class="separate ellipsis-item__normal"></span>
															<span class="ellipsis-item">06H 10Min</span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Flight Info -->
								<div class="card border-0 mb-4">
									<div class="card-body">
										<div class="flights-accordion">
											<div class="flights-list-item">
												<div class="row gy-4 align-items-center justify-content-between">

													<div class="col">
														<div class="row">
															<div class="col-xl-12 col-lg-12 col-md-12">
																<div class="d-flex align-items-center mb-2">
																	<span class="label bg-light-primary text-primary me-2">Departure</span>
																	<span class="text-muted text-sm">26 Jun 2023</span>
																</div>
															</div>
															<div class="col-xl-12 col-lg-12 col-md-12">
																<div class="row gx-lg-5 gx-3 gy-4 align-items-center">

																	<div class="col-sm-auto">
																		<div class="d-flex align-items-center justify-content-start">
																			<div class="d-start fl-pic">
																				<img class="img-fluid" src="assets/img/air-4.png" width="45" alt="image">
																			</div>
																			<div class="d-end fl-title ps-2">
																				<div class="text-dark fw-medium">Qutar Airways</div>
																				<div class="text-sm text-muted">First Class</div>
																			</div>
																		</div>
																	</div>

																	<div class="col">
																		<div class="row gx-3 align-items-center">
																			<div class="col-auto">
																				<div class="text-dark fw-bold">07:40</div>
																				<div class="text-muted text-sm fw-medium">DLH</div>
																			</div>

																			<div class="col text-center">
																				<div class="flightLine departure">
																					<div></div>
																					<div></div>
																				</div>
																				<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																			</div>

																			<div class="col-auto">
																				<div class="text-dark fw-bold">12:20</div>
																				<div class="text-muted text-sm fw-medium">LOS</div>
																			</div>
																		</div>
																	</div>

																	<div class="col-md-auto">
																		<div class="text-dark fw-medium">4H 40M</div>
																		<div class="text-muted text-sm fw-medium">2 Stop</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="row mt-4">
															<div class="col-xl-12 col-lg-12 col-md-12">
																<div class="d-flex align-items-center mb-2">
																	<span class="label bg-light-success text-success me-2">Return</span>
																	<span class="text-muted text-sm">26 Jun 2023</span>
																</div>
															</div>

															<div class="col-xl-12 col-lg-12 col-md-12">
																<div class="row gx-lg-5 gx-3 gy-4 align-items-center">
																	<div class="col-sm-auto">
																		<div class="d-flex align-items-center justify-content-start">
																			<div class="d-start fl-pic">
																				<img class="img-fluid" src="assets/img/air-1.png" width="45" alt="image">
																			</div>
																			<div class="d-end fl-title ps-2">
																				<div class="text-dark fw-medium">Qutar Airways</div>
																				<div class="text-sm text-muted">Business</div>
																			</div>
																		</div>
																	</div>

																	<div class="col">
																		<div class="row gx-3 align-items-center">
																			<div class="col-auto">
																				<div class="text-dark fw-bold">14:10</div>
																				<div class="text-muted text-sm fw-medium">LOS</div>
																			</div>

																			<div class="col text-center">
																				<div class="flightLine return">
																					<div></div>
																					<div></div>
																				</div>
																				<div class="text-muted text-sm fw-medium mt-3">Direct</div>
																			</div>

																			<div class="col-auto">
																				<div class="text-dark fw-bold">19:30</div>
																				<div class="text-muted text-sm fw-medium">DLH</div>
																			</div>
																		</div>
																	</div>

																	<div class="col-md-auto">
																		<div class="text-dark fw-medium">5H 30M</div>
																		<div class="text-muted text-sm fw-medium">2 Stop</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Login Alert -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="d-flex align-items-center justify-content-start py-3 px-3 rounded-2 bg-success mb-4">
										<p class="text-light fw-semibold m-0"><i class="fa-solid fa-gift text-warning me-2"></i><a href="Flight-detail.php#"
												class="text-white text-decoration-underline">Login</a> or <a href="Flight-detail.php#"
												class="text-white text-decoration-underline">Register</a> to earn upto 100 coins (approx 1.72 US$)
											after check-out.
										<p>
									</div>
								</div>
								
								<!-- Flight Details -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<!-- Overview -->
									<div class="card mb-4">
										<div class="card-header">
											<h6 class="fw-semibold mb-0">Overview</h6>
										</div>

										<div class="card-body">
											<p class="mb-0">However, reviewers tend to be distracted by comprehensible content, say, a random text copied from a newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments. Lorem ipsum and its many variants have been employed since the early 1960ies, and quite likely since the sixteenth century.</p>
										</div>
									</div>
								</div>
								
								<!-- Highlights -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card mb-4">
										<div class="card-header">
											<h6 class="fw-semibold mb-0">Highlights</h6>
										</div>

										<div class="card-body">
											<ul class="row align-items-center p-0 g-3">
												<li class="col-md-6">
													<i class="fa-solid fa-check text-success me-2"></i>A fantastic experience at the Niagara
													Falls
												</li>
												<li class="col-md-6">
													<i class="fa-solid fa-check text-success me-2"></i>Wonderful experience at the Harborfront
												</li>
												<li class="col-md-6">
													<i class="fa-solid fa-check text-success me-2"></i>Breathtaking views at the Night at
													Niagara Falls
												</li>
												<li class="col-md-6">
													<i class="fa-solid fa-check text-success me-2"></i>Splendid experiences with the City
													tours.
												</li>
												<li class="col-md-6">
													<i class="fa-solid fa-check text-success me-2"></i>All led out world this music while
													asked.
												</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Traveler Details -->
								<div class="col-xl-12 col-lg-12 col-md-12">
									<!-- Overview -->
									<div class="card">
										<div class="card-header">
											<h6 class="fw-semibold mb-0">Traveler Details</h6>
										</div>

										<div class="card-body">
											
											<div class="bg-success bg-opacity-10 rounded-2 p-3 mb-3">
												<p class="h6 text-md mb-0"><span class="badge bg-success me-2">New</span>Please enter your name as per your passport ID</p>
											</div>
										
											<div class="gray rounded-3 position-relative p-4 mb-3">
												<div class="position-absolute top-50 end-0 translate-middle-y me-2">
													<a href="Flight-detail.php#" class="text-primary fs-5"><i class="fa-solid fa-circle-xmark"></i></a>
												</div>
												<div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-md-3 col-cols-2">
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Name</p>
														<p class="text-muted-2 fw-medium lh-1">Daniel Puran</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Passport</p>
														<p class="text-muted-2 fw-medium lh-1">BKP1256GH</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Gender</p>
														<p class="text-muted-2 fw-medium lh-1">Male</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Age</p>
														<p class="text-muted-2 fw-medium lh-1">42+</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Nationality</p>
														<p class="text-muted-2 fw-medium lh-1">Indian</p>
													</div>
												</div>
											</div>
											
											<div class="gray rounded-3 position-relative p-4 mb-4">
												<div class="position-absolute top-50 end-0 translate-middle-y me-2">
													<a href="Flight-detail.php#" class="text-primary fs-5"><i class="fa-solid fa-circle-xmark"></i></a>
												</div>
												<div class="row align-items-center row-cols-xl-5 row-cols-lg-3 row-cols-md-3 col-cols-2">
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Name</p>
														<p class="text-muted-2 fw-medium lh-1">Smrithi Puran</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Passport</p>
														<p class="text-muted-2 fw-medium lh-1">SPK6524GY</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Gender</p>
														<p class="text-muted-2 fw-medium lh-1">Female</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Age</p>
														<p class="text-muted-2 fw-medium lh-1">38+</p>
													</div>
													<div class="col">
														<p class="text-dark fw-semibold lh-base">Nationality</p>
														<p class="text-muted-2 fw-medium lh-1">Indian</p>
													</div>
												</div>
											</div>
											
											<div class="full-width d-flex flex-column mb-4 position-relative">
						
												<div class="row align-items-stat">
													<div class="col-xl-12 col-lg-12 col-md-12 mb-2">
														<h5>Add More Passengers</h5>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">First Name</label>
															<input type="text" class="form-control" placeholder="Your First Name">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Last Name</label>
															<input type="text" class="form-control" placeholder="Your Last Name">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Passport Number</label>
															<input type="text" class="form-control" placeholder="Passport Number Here">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Passport Expire</label>
															<input type="text" class="form-control" placeholder="Passport Expire Date">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Date of birth</label>
															<input class="form-control fw-bold" type="text" placeholder="Select Date.." id="basicDate" readonly="readonly">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Nationality</label>
															<select class="select form-control">
																<option value="lv">Las Vegas</option>
																<option value="la">Los Angeles</option>
																<option value="kc">Kansas City</option>
																<option value="no">New Orleans</option>
																<option value="kc">Jacksonville</option>
																<option value="lb">Long Beach</option>
																<option value="cl">Columbus</option>
																<option value="cn">Canada</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Gender</label>
															<div class="form-group">
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="radio" name="gender" id="male" value="option1">
																	<label class="form-check-label" for="male">Male</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="radio" name="gender" id="female" value="option2">
																	<label class="form-check-label" for="female">Female</label>
																</div>
															</div>
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<button class="btn btn-md px-5 btn-light-primary fw-medium" type="button">Add Passengers</button>
													</div>
													
												</div>
											</div>
											
											<div class="full-width d-flex flex-column mb-2 position-relative">
						
												<div class="row align-items-stat">
													<div class="col-xl-12 col-lg-12 col-md-12 mb-2">
														<h5>Personal Information</h5>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Email Address</label>
															<input type="text" class="form-control" placeholder="Email Here">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Mobile number</label>
															<input type="text" class="form-control" placeholder="Contact Number">
														</div>
													</div>

													<div class="col-xl-12 col-lg-12 col-md-12">
														<button class="btn btn-md full-width px-5 btn-primary fw-medium" type="button">Submit & Proceed for Payment</button>
													</div>
													
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- Sidebar -->
							<div class="col-xl-3 col-lg-4 col-md-12">
								<div class="card mb-4 mt-lg-0 mt-4">
									<div class="card-header"><h4>Price Summary</h4></div>
									<div class="card-body py-2">
										<div class="price-summary">
											<ul class="list-group">
												<li class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
													Base Fare 
													<span class="fw-semibold text-dark">1470</span>
												</li>
												<li class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
													Discount
													<span class="fw-semibold text-success">-$45</span>
												</li>
												<li class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
													Other Services
													<span class="fw-semibold text-dark">$25</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-footer bg-white border-top py-3">
										<div class="d-flex align-items-center justify-content-between">
											<p class="fw-semibold text-muted-2 mb-0">Total Price</p>
											<p class="fw-semibold text-primary mb-0">$1430</p>
										</div>
									</div>
								</div>
								
								<div class="card border rounded-3">
									<div class="card-header">
										<h4>Coupons & Offers</h4>
									</div>
									<div class="card-body">
										<div class="form-group position-relative">
											<input type="text" class="form-control" placeholder="Have a Coupon Code?" value="">
											<a href="Flight-detail.php#" class="position-absolute top-50 end-0 fw-semibold translate-middle text-primary disable">Apply</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Hotel Details End ================================== -->


		<!-- ============================ Similar Flight Start ================================== -->
		<section class="py-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Similar Flights</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="Flight-detail.php#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12 p-0">
						<div class="main-carousel cols-3 arrow-hide">

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem mb-4">
									<a href="https://shreethemes.net/EagleWays Travel & Tours-live/EagleWays Travel & Tours/flight-search.php" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/destination/tr-1.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>New York</span>
													<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
																fill="currentColor" />
															<path opacity="0.3"
																d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
																fill="currentColor" />
														</svg>
													</span>
													<span>Los Angeles</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Round-trip</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3 days</span>
												</p>
											</div>
											<div class="flight-foots">
												<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
														class="price">US$492</span></h5>
											</div>
										</div>
									</a>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem mb-4">
									<a href="https://shreethemes.net/EagleWays Travel & Tours-live/EagleWays Travel & Tours/flight-search.php" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/destination/tr-2.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>San Diego</span>
													<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
																fill="currentColor" />
															<path opacity="0.3"
																d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
																fill="currentColor" />
														</svg>
													</span>
													<span>San Jose</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Round-trip</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3 days</span>
												</p>
											</div>
											<div class="flight-foots">
												<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
														class="price">US$492</span></h5>
											</div>
										</div>
									</a>
								</div>
							</div>
							
							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem mb-4">
									<a href="https://shreethemes.net/EagleWays Travel & Tours-live/EagleWays Travel & Tours/flight-search.php" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/destination/tr-3.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Dallas</span>
													<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
																fill="currentColor" />
															<path opacity="0.3"
																d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
																fill="currentColor" />
														</svg>
													</span>
													<span>Philadelphia</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Round-trip</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3 days</span>
												</p>
											</div>
											<div class="flight-foots">
												<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
														class="price">US$492</span></h5>
											</div>
										</div>
									</a>
								</div>
							</div>
							
							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem mb-4">
									<a href="https://shreethemes.net/EagleWays Travel & Tours-live/EagleWays Travel & Tours/flight-search.php" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/destination/tr-4.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Nashville</span>
													<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
																fill="currentColor" />
															<path opacity="0.3"
																d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
																fill="currentColor" />
														</svg>
													</span>
													<span>Denver</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Round-trip</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3 days</span>
												</p>
											</div>
											<div class="flight-foots">
												<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
														class="price">US$492</span></h5>
											</div>
										</div>
									</a>
								</div>
							</div>
							
							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem">
									<a href="https://shreethemes.net/EagleWays Travel & Tours-live/EagleWays Travel & Tours/flight-search.php" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/destination/tr-5.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Chicago</span>
													<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
																fill="currentColor" />
															<path opacity="0.3"
																d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
																fill="currentColor" />
														</svg>
													</span>
													<span>San Francisco</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Round-trip</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3 days</span>
												</p>
											</div>
											<div class="flight-foots">
												<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
														class="price">US$492</span></h5>
											</div>
										</div>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Similar Hotels End ================================== -->

		<!-- ============================ Footer Start ================================== -->
		 <?php 
		    require_once('./home_footer.php')
		 ?>
		<!-- ============================ Footer End ================================== -->

		<!-- Log In Modal -->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
				<div class="modal-content" id="loginmodal">
					<div class="modal-header">
						<h4 class="modal-title fs-6">Sign In / Register</h4>
						<a href="Flight-detail.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
								class="fa-solid fa-square-xmark"></i></a>
					</div>
					<div class="modal-body">
						<div class="modal-login-form py-4 px-md-3 px-0">
							<form>

								<div class="form-floating mb-4">
									<input type="email" class="form-control" placeholder="name@example.com">
									<label>User Name</label>
								</div>
								<div class="form-floating mb-4">
									<input type="password" class="form-control" placeholder="Password">
									<label>Password</label>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
								</div>

								<div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
									<div class="modal-flex-first">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
											<label class="form-check-label" for="savepassword">Save Password</label>
										</div>
									</div>
									<div class="modal-flex-last">
										<a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget Password?</a>
									</div>
								</div>
							</form>
						</div>

						<div class="prixer px-3">
							<div class="devider-wraps position-relative">
								<div class="devider-text text-muted-2 text-md">Sign In with More Methods</div>
							</div>
						</div>

						<div class="social-login py-4 px-2">
							<ul class="row align-items-center justify-content-between g-3 p-0 m-0">
								<li class="col"><a href="Flight-detail.php#" class="square--60 border br-dashed rounded-2 full-width"><i
											class="fa-brands fa-facebook color--facebook fs-2"></i></a></li>
								<li class="col"><a href="Flight-detail.php#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-whatsapp color--whatsapp fs-2"></i></a></li>
								<li class="col"><a href="Flight-detail.php#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-linkedin color--linkedin fs-2"></i></a></li>
								<li class="col"><a href="Flight-detail.php#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-dribbble color--dribbble fs-2"></i></a></li>
								<li class="col"><a href="Flight-detail.php#" class="square--60 border br-dashed rounded-2"><i
											class="fa-brands fa-twitter color--twitter fs-2"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="modal-footer align-items-center justify-content-center">
						<p>Don't have an account yet?<a href="https://shreethemes.net/EagleWays Travel & Tours-live/EagleWays Travel & Tours/signup.php" class="text-primary fw-medium ms-1">Sign Up</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Choose Currency Modal -->
		<div class="modal modal-lg fade" id="currencyModal" tabindex="-1" aria-labelledby="currenyModalLabel"
		  aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title fs-6" id="currenyModalLabel">Select Your Currency</h4>
				<a href="Flight-detail.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
			  </div>
			  <div class="modal-body">
				<div class="allCurrencylist">

				  <div class="suggestedCurrencylist-wrap mb-4">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">Suggested Currency For you</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">United State Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Pound Sterling</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency active" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Indian Rupees</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Euro</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Australian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Thai Baht</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				  <div class="suggestedCurrencylist-wrap">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">All Currencies</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">United State Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Property currency</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Argentine Peso</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Azerbaijani Manat</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Australian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Bahraini Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Brazilian Real</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Bulgarian Lev</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Canadian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Chilean Peso</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Colombian Peso</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Danish Krone</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Egyptian Pound</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Hungarian Forint</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Japanese Yen</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Jordanian Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Kuwaiti Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Malaysian Ringgit</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="Flight-detail.php#">
							<div class="text-dark text-md fw-medium">Singapore Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				</div>
			  </div>
			</div>
		  </div>
		</div>


		<!-- Choose Countries Modal -->
		<div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel"
		  aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
				<a href="Flight-detail.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
			  </div>
			  <div class="modal-body">
				<div class="allCountrieslist">

				  <div class="suggestedCurrencylist-wrap mb-4">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry active" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Euro</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Thai Baht</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				  <div class="suggestedCurrencylist-wrap">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">All Countries</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
							<a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/vietnam.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Property currency</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/japan.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/portugal.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/italy.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/european.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="Flight-detail.php#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Singapore Dollar</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				</div>
			  </div>
			</div>
		  </div>
		</div>


		<a id="back2Top" class="top-scroll" title="Back to top" href="Flight-detail.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>
    <script src="assets/js/flickity.pkgd.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/prism.js"></script>

	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->
	<script>
		(function () {

			// Add Adult & childElementCount
			const guestBtn = document.querySelector("#guests-input-btn"),
				guestOptions = document.querySelector("#guests-input-options"),
				adultsSubsBtn = document.querySelector("#adults-subs-btn"),
				adultsAddBtn = document.querySelector("#adults-add-btn"),
				childrenSubsBtn = document.querySelector("#children-subs-btn"),
				childrenAddBtn = document.querySelector("#children-add-btn"),
				roomSubsBtn = document.querySelector("#room-subs-btn"),
				roomAddBtn = document.querySelector("#room-add-btn"),
				adultsCountEl = document.querySelector("#guests-count-adults"),
				childrenCountEl = document.querySelector("#guests-count-children"),
				roomCountEl = document.querySelector("#guests-count-room");
			let maxNumGuests = 15,
				isGuestInputOpen = false,
				adultsCount = 1,
				childrenCount = 0,
				roomCount = 0;
			updateValues();
			guestBtn.addEventListener('click', function (e) {
				if (isGuestInputOpen) {
					guestBtn.classList.remove("open");
					guestOptions.classList.remove("open");
				} else {
					guestBtn.classList.add("open");
					guestOptions.classList.add("open");
				}
				isGuestInputOpen = isGuestInputOpen ? false : true;
				e.preventDefault();
			});
			adultsAddBtn.addEventListener('click', function () {
				adultsCount = addValues(adultsCount);
				updateValues();
			});
			adultsSubsBtn.addEventListener('click', function () {
				adultsCount = substractValues(adultsCount, 1);
				updateValues();
			});
			childrenAddBtn.addEventListener('click', function () {
				childrenCount = addValues(childrenCount);
				updateValues();
			});
			childrenSubsBtn.addEventListener('click', function () {
				childrenCount = substractValues(childrenCount, 0);
				updateValues();
			});
			roomAddBtn.addEventListener('click', function () {
				roomCount = addValues(roomCount);
				updateValues();
			});
			roomSubsBtn.addEventListener('click', function () {
				roomCount = substractValues(roomCount, 0);
				updateValues();
			});

			function calcTotalGuests() {
				return adultsCount + childrenCount + roomCount;
			}

			function addValues(count) {
				return (calcTotalGuests() < maxNumGuests) ? count + 1 : count;
			}

			function substractValues(count, min) {
				return (count > min) ? count - 1 : count;
			}

			function updateValues() {
				let btnText = `${adultsCount} Adults`;
				btnText += (childrenCount > 0) ? `, ${childrenCount} Childs` : '';
				btnText += (roomCount > 0) ? `, ${roomCount} Rooms` : '';
				guestBtn.innerHTML = btnText;
				adultsCountEl.innerHTML = adultsCount;
				childrenCountEl.innerHTML = childrenCount;
				roomCountEl.innerHTML = roomCount;
				if (adultsCount == 1) {
					adultsSubsBtn.classList.add("disabled");
				} else {
					adultsSubsBtn.classList.remove("disabled");
				} if (childrenCount == 0) {
					childrenSubsBtn.classList.add("disabled");
				} else {
					childrenSubsBtn.classList.remove("disabled");
				} if (roomCount == 0) {
					roomSubsBtn.classList.add("disabled");
				} else {
					roomSubsBtn.classList.remove("disabled");
				} if (calcTotalGuests() == maxNumGuests) {
					adultsAddBtn.classList.add("disabled");
					childrenAddBtn.classList.add("disabled");
					roomAddBtn.classList.add("disabled");
				} else {
					adultsAddBtn.classList.remove("disabled");
					childrenAddBtn.classList.remove("disabled");
					roomAddBtn.classList.remove("disabled");
				}
			}

		})();

	</script>
	<script>
		lightbox.option({
			'resizeDuration': 200,
			'wrapAround': true
		})
	</script>
</body>

</html>