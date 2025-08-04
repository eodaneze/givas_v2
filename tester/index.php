<?php 
   require_once('./home_header.php');
   require_once('./settings.php');
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
		      require_once('./home_navbar.php'); 
		  ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Hero Banner  Start================================== -->
		<div id="myCarousel" class="carousel slide carousel-fade mb-6">
			<div class="carousel-inner">

				<div class="carousel-item active bg-cover" style="background:url(assets/img/banner-2.jpg)no-repeat;" data-overlay="6">
					<div class="container">
						<div class="carousel-caption">
							<h1>Starts Your Trip with <span class="position-relative z-4"><?=$sitName?><span
										class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
										<svg width="185px" height="23px" viewBox="0 0 445.5 23">
											<path class="fill-white opacity-7"
												d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
											</path>
										</svg>
									</span></span></h1>
							<p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
								explore beautiful destinations.</p>
							<p class="mt-5"><a class="btn btn-primary px-5" href="slider-home.php#">Explore More<i
										class="fa-solid fa-arrow-trend-up ms-2"></i></a></p>
						</div>
					</div>
				</div>

				<div class="carousel-item bg-cover" style="background:url(assets/img/banner-3.jpg)no-repeat;" data-overlay="6">
					<div class="container">
						<div class="carousel-caption">
							<h1>Explore The World <span class="position-relative z-4">Around<span
										class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
										<svg width="185px" height="23px" viewBox="0 0 445.5 23">
											<path class="fill-white opacity-7"
												d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
											</path>
										</svg>
									</span></span> You</h1>
							<p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
								explore beautiful destinations.</p>
							<p class="mt-5"><a class="btn btn-primary px-5" href="slider-home.php#">Explore More<i
										class="fa-solid fa-arrow-trend-up ms-2"></i></a></p>
						</div>
					</div>
				</div>

				<div class="carousel-item bg-cover" style="background:url(assets/img/banner-4.jpg)no-repeat;" data-overlay="6">
					<div class="container">
						<div class="carousel-caption">
							<h1>Discover Beautiful Place with <span class="position-relative z-4"><?=$sitName?><span
										class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
										<svg width="185px" height="23px" viewBox="0 0 445.5 23">
											<path class="fill-white opacity-7"
												d="M409.9,2.6c-9.7-0.6-19.5-1-29.2-1.5c-3.2-0.2-6.4-0.2-9.7-0.3c-7-0.2-14-0.4-20.9-0.5 c-3.9-0.1-7.8-0.2-11.7-0.3c-1.1,0-2.3,0-3.4,0c-2.5,0-5.1,0-7.6,0c-11.5,0-23,0-34.5,0c-2.7,0-5.5,0.1-8.2,0.1 c-6.8,0.1-13.6,0.2-20.3,0.3c-7.7,0.1-15.3,0.1-23,0.3c-12.4,0.3-24.8,0.6-37.1,0.9c-7.2,0.2-14.3,0.3-21.5,0.6 c-12.3,0.5-24.7,1-37,1.5c-6.7,0.3-13.5,0.5-20.2,0.9C112.7,5.3,99.9,6,87.1,6.7C80.3,7.1,73.5,7.4,66.7,8 C54,9.1,41.3,10.1,28.5,11.2c-2.7,0.2-5.5,0.5-8.2,0.7c-5.5,0.5-11,1.2-16.4,1.8c-0.3,0-0.7,0.1-1,0.1c-0.7,0.2-1.2,0.5-1.7,1 C0.4,15.6,0,16.6,0,17.6c0,1,0.4,2,1.1,2.7c0.7,0.7,1.8,1.2,2.7,1.1c6.6-0.7,13.2-1.5,19.8-2.1c6.1-0.5,12.3-1,18.4-1.6 c6.7-0.6,13.4-1.1,20.1-1.7c2.7-0.2,5.4-0.5,8.1-0.7c10.4-0.6,20.9-1.1,31.3-1.7c6.5-0.4,13-0.7,19.5-1.1c2.7-0.1,5.4-0.3,8.1-0.4 c10.3-0.4,20.7-0.8,31-1.2c6.3-0.2,12.5-0.5,18.8-0.7c2.1-0.1,4.2-0.2,6.3-0.2c11.2-0.3,22.3-0.5,33.5-0.8 c6.2-0.1,12.5-0.3,18.7-0.4c2.2-0.1,4.4-0.1,6.7-0.1c11.5-0.1,23-0.2,34.6-0.4c7.2-0.1,14.4-0.1,21.6-0.1c12.2,0,24.5,0.1,36.7,0.1 c2.4,0,4.8,0.1,7.2,0.2c6.8,0.2,13.5,0.4,20.3,0.6c5.1,0.2,10.1,0.3,15.2,0.4c3.6,0.1,7.2,0.4,10.8,0.6c10.6,0.6,21.1,1.2,31.7,1.8 c2.7,0.2,5.4,0.4,8,0.6c2.9,0.2,5.8,0.4,8.6,0.7c0.4,0.1,0.9,0.2,1.3,0.3c1.1,0.2,2.2,0.2,3.2-0.4c0.9-0.5,1.6-1.5,1.9-2.5 c0.6-2.2-0.7-4.5-2.9-5.2c-1.9-0.5-3.9-0.7-5.9-0.9c-1.4-0.1-2.7-0.3-4.1-0.4c-2.6-0.3-5.2-0.4-7.9-0.6 C419.7,3.1,414.8,2.9,409.9,2.6z">
											</path>
										</svg>
									</span></span></h1>
							<p class="fs-5 fw-light">Take a little break from the work strss of everyday. Discover plan trip and
								explore beautiful destinations.</p>
							<p class="mt-5"><a class="btn btn-primary px-5" href="slider-home.php#">Explore More<i
										class="fa-solid fa-arrow-trend-up ms-2"></i></a></p>
						</div>
					</div>
				</div>

			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<!-- ============================ Hero Banner End ================================== -->

		<!-- ============================ Hero Search Start ================================== -->
		<div class="search-explore-wrap">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">

						<div class="search-wrap with-label overio">
							<div class="row">

								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="fliore">
										<div class="rounded-top-3 d-inline-flex overflow-hidden">
											<ul class="nav nav-tabs simple-tabs medium border-0 justify-content-center" id="tour-pills-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="slider-home.php#hotels"><i class="fa-solid fa-hotel me-2"></i>Hotels</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="slider-home.php#flights"><i class="fa-solid fa-jet-fighter me-2"></i>Flights</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="slider-home.php#tours"><i class="fa-solid fa-globe me-2"></i>Tour</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="slider-home.php#cabs"><i class="fa-solid fa-car me-2"></i>Cab</a>
												</li>
											</ul>
										</div>

										<div class="tab-content bg-white rounded-bottom-3 shadow-wrap p-3">
											<div class="tab-pane show active" id="hotels">
												<div class="row gy-3 gx-md-3 gx-sm-2">

													<div class="col-xl-8 col-lg-7 col-md-12">
														<div class="row gy-3 gx-md-3 gx-sm-2">
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
																<div class="form-group hdd-arrow mb-0">
																	<select class="goingto form-control fw-bold hdd-arrow">
																		<option value="">Select</option>
																		<option value="ny">New York</option>
																		<option value="sd">San Diego</option>
																		<option value="sj">San Jose</option>
																		<option value="ph">Philadelphia</option>
																		<option value="nl">Nashville</option>
																		<option value="sf">San Francisco</option>
																		<option value="hu">Houston</option>
																		<option value="sa">San Antonio</option>
																	</select>
																</div>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
																<div class="form-group mb-0">
																	<input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
																		id="checkinout" readonly="readonly">
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-5 col-md-12">
														<div class="row gy-3 gx-md-3 gx-sm-2">
															<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
																<div class="form-group mb-0">
																	<div class="booking-form__input guests-input mixer-auto">
																		<button name="guests-btn" id="guests-input-btn">1 Guest</button>
																		<div class="guests-input__options" id="guests-input-options">
																			<div>
																				<span class="guests-input__ctrl minus" id="adults-subs-btn"><i
																						class="fa-solid fa-minus"></i></span>
																				<span class="guests-input__value"><span id="guests-count-adults">1</span>Adults</span>
																				<span class="guests-input__ctrl plus" id="adults-add-btn"><i
																						class="fa-solid fa-plus"></i></span>
																			</div>
																			<div>
																				<span class="guests-input__ctrl minus" id="children-subs-btn"><i
																						class="fa-solid fa-minus"></i></span>
																				<span class="guests-input__value"><span id="guests-count-children">0</span>Children</span>
																				<span class="guests-input__ctrl plus" id="children-add-btn"><i
																						class="fa-solid fa-plus"></i></span>
																			</div>
																			<div>
																				<span class="guests-input__ctrl minus" id="room-subs-btn"><i
																						class="fa-solid fa-minus"></i></span>
																				<span class="guests-input__value"><span id="guests-count-room">0</span>Rooms</span>
																				<span class="guests-input__ctrl plus" id="room-add-btn"><i
																						class="fa-solid fa-plus"></i></span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
																<div class="form-group mb-0">
																	<button type="button" class="btn btn-primary full-width fw-medium"><i
																			class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
																</div>
															</div>
														</div>
													</div>

												</div>	
											</div>
											<div class="tab-pane" id="flights">
												<div class="row gx-lg-2 g-3">

													<div class="col-xl-5 col-lg-5 col-md-12">
													  <div class="row gy-3 gx-lg-2 gx-3">
														<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
														  <div class="form-group hdd-arrow mb-0">
															<select class="leaving form-control fw-bold">
															  <option value="">Select</option>
															  <option value="ny">New York</option>
															  <option value="sd">San Diego</option>
															  <option value="sj">San Jose</option>
															  <option value="ph">Philadelphia</option>
															  <option value="nl">Nashville</option>
															  <option value="sf">San Francisco</option>
															  <option value="hu">Houston</option>
															  <option value="sa">San Antonio</option>
															</select>
														  </div>
														  <div class="btn-flip-icon mt-md-0">
															<button class="p-0 m-0 text-primary"><i class="fa-solid fa-right-left"></i></button>
														  </div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
														  <div class="form-groupp hdd-arrow mb-0">
															<select class="goingto form-control fw-bold">
															  <option value="">Select</option>
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
													  </div>
													</div>
													<div class="col-xl-4 col-lg-4 col-md-12">
													  <div class="row gy-3 gx-lg-2 gx-3">
														<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
														  <div class="form-group mb-0">
															<input class="form-control fw-bold choosedate" type="text" placeholder="Departure.." readonly="readonly">
														  </div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
														  <div class="form-group mb-0">
															<input class="form-control fw-bold choosedate" type="text" placeholder="Return.." readonly="readonly">
														  </div>
														</div>
													  </div>
													</div>
													<div class="col-xl-2 col-lg-2 col-md-12">
													  <div class="form-groupp hdd-arrow mb-0">
														<select class="occupant form-control fw-bold">
														  <option value="">Select</option>
														  <option value="lv">01 Adult</option>
														  <option value="la">02 Adult</option>
														  <option value="kc">03 Adult</option>
														  <option value="no">04 Adult</option>
														  <option value="kc">05 Adult</option>
														  <option value="lb">06 Adult</option>
														  <option value="cl">07 Adult</option>
														  <option value="cn">08 Adult</option>
														</select>
													  </div>
													</div>
													<div class="col-xl-1 col-lg-1 col-md-12">
													  <div class="form-group mb-0">
														<button type="button" class="btn btn-primary full-width fw-medium"><i
															class="fa-solid fa-magnifying-glass fs-5"></i></button>
													  </div>
													</div>

												  </div>
											</div>
											<div class="tab-pane" id="tours">
												<div class="row gy-3 gx-md-3 gx-sm-2">

													<div class="col-xl-8 col-lg-7 col-md-12">
														<div class="row gy-3 gx-md-3 gx-sm-2">
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
																<div class="form-group hdd-arrow mb-0">
																	<select class="goingto form-control fw-bold">
																		<option value="">Select</option>
																		<option value="ny">New York</option>
																		<option value="sd">San Diego</option>
																		<option value="sj">San Jose</option>
																		<option value="ph">Philadelphia</option>
																		<option value="nl">Nashville</option>
																		<option value="sf">San Francisco</option>
																		<option value="hu">Houston</option>
																		<option value="sa">San Antonio</option>
																	</select>
																</div>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
																<div class="form-group mb-0">
																	<input type="text" class="form-control choosedate fw-bold" placeholder="Choose Date" readonly="readonly">
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-5 col-md-12">
														<div class="row gy-3 gx-md-3 gx-sm-2">
															<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
																<div class="form-group hdd-arrow mb-0">
																	<select class="tour form-control fw-bold">
																		<option value="">Select</option>
																		<option value="ny">Family Package</option>
																		<option value="sd">Honymoon Package</option>
																		<option value="sj">Group Package</option>
																		<option value="ph">Desert</option>
																		<option value="nl">History</option>
																	</select>
																</div>
															</div>
															<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
																<div class="form-group mb-0">
																	<button type="button" class="btn btn-primary full-width fw-medium"><i
																			class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="tab-pane" id="cabs">
												<div class="row gy-3 gx-md-3 gx-sm-2">

													<div class="col-xl-8 col-lg-7 col-md-12">
														<div class="row gy-3 gx-md-3 gx-sm-2">
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
																<div class="form-group hdd-arrow mb-0">
																	<select class="pickup form-control fw-bold">
																		<option value="">Select</option>
																		<option value="ny">New York</option>
																		<option value="sd">San Diego</option>
																		<option value="sj">San Jose</option>
																		<option value="ph">Philadelphia</option>
																		<option value="nl">Nashville</option>
																		<option value="sf">San Francisco</option>
																		<option value="hu">Houston</option>
																		<option value="sa">San Antonio</option>
																	</select>
																</div>
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
																<div class="form-group hdd-arrow mb-0">
																	<select class="drop form-control fw-bold">
																		<option value="">Select</option>
																		<option value="ny">New York</option>
																		<option value="sd">San Diego</option>
																		<option value="sj">San Jose</option>
																		<option value="ph">Philadelphia</option>
																		<option value="nl">Nashville</option>
																		<option value="sf">San Francisco</option>
																		<option value="hu">Houston</option>
																		<option value="sa">San Antonio</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-5 col-md-12">
														<div class="row gy-3 gx-md-3 gx-sm-2">
															<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
																<div class="form-group mb-0">
																	<input type="text" class="form-control choosedate fw-bold" placeholder="Choose Pickup Date" readonly="readonly">
																</div>
															</div>
															<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
																<div class="form-group mb-0">
																	<button type="button" class="btn btn-primary full-width fw-medium"><i
																			class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Hero Search End ================================== -->


		<!-- =========================== Tours Offers Start ====================================== -->
		<section class="pt-5 pb-0">
			<div class="container">
				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-3 g-4">

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">20% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-6.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Canada Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">6 Months</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<h5 class="fs-5 low-price m-0"><span class="tag-span"></span> <span class="price"><i class="fa fa-naira-sign"> 2.6 M</i></span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">15% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-5.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>New Zealand Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">6 Weeks</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<h5 class="fs-5 low-price m-0"><span class="tag-span"></span> <span class="price"><i class="fa fa-naira-sign"></i>2.4 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Luxembourg Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">6 Weeks</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<h5 class="fs-5 low-price m-0"><span class="price"><i class="fa fa-naira-sign"></i>2.2 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>South Korea Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">2 Weeks</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
										   <h5 class="fs-5 low-price m-0"><span class="price"><i class="fa fa-naira-sign"></i>1.3 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Japan Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">4 Weeks</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
										  <h5 class="fs-5 low-price m-0"><span class="price"><i class="fa fa-naira-sign"></i>1.4 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Brazil Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">4 Weeks</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
										  <h5 class="fs-5 low-price m-0"><span class="price"><i class="fa fa-naira-sign"></i>1.1 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>France Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">4 Weeks</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
										  <h5 class="fs-5 low-price m-0"><span class="price"><i class="fa fa-naira-sign"></i>2 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Quatar Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Days</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
										  <h5 class="fs-5 low-price m-0"><span class="price"><i class="fa fa-naira-sign"></i>1.6 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
						<div class="pop-touritems">
							<a href="slider-home.php#" class="card rounded-3 border br-dashed border-2 m-0">
								<div class="offers-container d-flex align-items-center justify-content-start p-2">
									<div class="offers-flex position-relative">
										<div class="offer-tags position-absolute start-0 top-0 mt-2 ms-2"><span
												class="label text-light bg-danger fw-medium">30% Off</span></div>
										<div class="offers-pic"><img src="assets/img/city/ct-1.png" class="img-fluid rounded" width="110" alt="">
										</div>
									</div>
									<div class="offers-captions ps-3">
										<h4 class="city fs-6 m-0 fw-bold">
											<span>Kuwait Visit Visa</span>
										</h4>
										<p class="detail ellipsis-container">
											<span class="ellipsis-item__normal">Round-trip</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">3D/4N</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">2 Weeks</span>
										</p>
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
										  <h5 class="fs-5 low-price m-0"><span class="price"><i class="fa fa-naira-sign"></i>6.3 M</span></h5>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- =========================== Tours Offers End ====================================== -->

         <!-- summary of cost -->
		 <section class="gray-simple">
			  <div class="container">
				   <h4 class="text-center">Summary Of Cost</h4>
				   <div class="row">
					  <div class="col-lg-12">
						   <div class="table-responsive">
							  <table class="table table-bordered">
								  <thead>
									   <tr>
										   <th>S/N</th>
										   <th>Location</th>
										   <th>Price</th>
										   <th>Processing Time</th>
									   </tr>
								  </thead>
								  <tbody>
									   <tr>
										   <td>1</td>
										   <td>Malaysia</td>
										   <td><i class="fa fa-naira-sign"></i> <?=number_format(800000, 2)?></td>
										   <td>10 Working days</td>
									   </tr>
									   <tr>
										   <td>2</td>
										   <td>Indonesia</td>
										   <td><i class="fa fa-naira-sign"></i> <?=number_format(900000, 2)?></td>
										   <td>10 Working days</td>
									   </tr>
									   <tr>
										   <td>3</td>
										   <td>Maldives</td>
										   <td><i class="fa fa-naira-sign"></i> <?=number_format(1700000, 2)?></td>
										   <td>Immediately</td>
									   </tr>
								  </tbody>
							  </table>
						   </div>
					  </div>
				   </div>
			  </div>
		 </section>
		


		<!-- ============================ Locations Design Start ================================== -->
		<section class="gray-simple">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Popular Location To Stay</h2>
							<!-- <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p> -->
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-3">

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-7.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Canada</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">10 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-2.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">France</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">12 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">4 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-3.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Japan</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">08 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">6 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-4.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Kuwait</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">32 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">12 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-5.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Quatar</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">22 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">16 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-6.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">South Korea</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">25 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">15 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-1.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Brazil</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">29 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">14 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="slider-home.php#"><img src="assets/img/city/ct-10.png" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">New Zealand</h3>
										<p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">22 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">12 Rental</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Locations Design Start ================================== -->


		
		

		
    <!-- ============================ Features Start ================================== -->
    <section class="border-bottom">
      <div class="container">
        <div class="row align-items-center justify-content-between g-4">

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-sack-dollar fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Easy Booking</h4>
                <p class="m-0">Booking flights has never been easier! Our platform is designed for a seamless experience, allowing you to search, compare, and book flights in just a few clicks. With a user-friendly interface, secure payment options, and instant confirmation, you can plan your trip effortlessly</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-umbrella-beach fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Best Destinations</h4>
                <p class="m-0">Explore the world’s top travel destinations with ease! Whether you’re looking for tropical beaches, vibrant cities, or hidden gems, we help you find the perfect getaway. Discover exciting places, compare flight options, and book your trip effortlessly. Your next adventure starts here!.</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-person-walking-luggage fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Travel Guides</h4>
                <p class="m-0">Make the most of your journey with our expert travel guides! From must-visit attractions to local tips, we provide all the information you need for a smooth and memorable trip. Whether you're exploring a new city or planning a dream vacation, our guides have you covered</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-5">
            <div class="featuresBox-wrap">
              <div class="featuresBox-icons mb-3">
                <i class="fa-solid fa-headset fs-1 text-primary"></i>
              </div>
              <div class="featuresBox-captions">
                <h4 class="fw-bold fs-5 lh-base mb-0">Friendly Support</h4>
                <p class="m-0">We’re here to help every step of the way! Our dedicated support team is available to assist you with bookings, travel inquiries, and any issues you may encounter.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ============================ Features End ================================== -->


		<!-- ============================ Our Reviews Start ================================== -->
		<!-- <section class="gray-simple bg-cover" style="background:url(assets/img/reviewbg.png)no-repeat;">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Loving Reviews By Our Customers</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-4 g-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-1.jpg" class="img-fluid rounded-2" width="80" alt=""></div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Aman Diwakar</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-2.jpg" class="img-fluid rounded-2" width="80" alt=""></div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Kunal M. Thakur</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-3.jpg" class="img-fluid rounded-2" width="80" alt=""></div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Divya Talwar</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-4.jpg" class="img-fluid rounded-2" width="80" alt=""></div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Karan Maheshwari</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-5.jpg" class="img-fluid rounded-2" width="80" alt=""></div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Ritika Mathur</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section> -->
		<!-- ============================ Our Reviews End ================================== -->


		<!-- ============================ Our Experience End ================================== -->
		<section>
			<div class="container">
				<div class="row align-items-center justify-content-between">

					<div class="col-xl-5 col-lg-5 col-md-6">
						<div class="position-relative">
							<img src="assets/img/img-2.png" class="img-fluid rounded-3 position-relative z-1" alt="">
							<div class="position-absolute bottom-0 start-0 z-index-1 mb-4 ms-2">
								<div class="bg-body d-flex d-inline-block rounded-3 position-relative p-3 z-2 shadow-wrap">

									<!-- Avatar group -->
									<div class="me-4">
										<h6 class="fw-normal">Client</h6>
										<!-- Avatar group -->
										<ul class="avatar-group mb-0">
											<li class="avatar avatar-md">
												<img class="avatar-img circle" src="assets/img/team-1.jpg" alt="avatar">
											</li>
											<li class="avatar avatar-md">
												<img class="avatar-img circle" src="assets/img/team-2.jpg" alt="avatar">
											</li>
											<li class="avatar avatar-md">
												<img class="avatar-img circle" src="assets/img/team-3.jpg" alt="avatar">
											</li>
											<li class="avatar avatar-md">
												<img class="avatar-img circle" src="assets/img/team-4.jpg" alt="avatar">
											</li>
											<li class="avatar avatar-md">
												<div class="avatar-img circle bg-primary">
													<span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
												</div>
											</li>
										</ul>
									</div>

									<!-- Rating -->
									<div>
										<h6 class="fw-normal mb-3">Rating</h6>
										<h6 class="m-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-5 col-lg-6 col-md-6">
						<div class="bestExperience-block">
							<p class="fw-medium text-primary text-md text-uppercase mb-0">About Us</p>
							<h2 class="fw-bold lh-base">Our Attractive Experience And Services For you!</h2>
							<p class="fw-light fs-6">Eagleways Travel & Tours Ltd is a reputable travel agency dedicated to providing exceptional travel experiences. With a team of experienced professionals, we offer personalized services tailored to meet the unique needs of our clients. From flight bookings and visa assistance to hotel reservations and tour packages, we take care of every detail to ensure a seamless and unforgettable journey. Let us be your wings to the world </p>
							<div class="d-inline-flex mt-4">
								<div
									class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple me-3">
									<h6 class="fw-bold fs-3 m-0">33</h6>
									<p class="m-0 text-sm text-muted-2">Year Esperience</p>
								</div>
								<div
									class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple me-3">
									<h6 class="fw-bold fs-3 m-0">78</h6>
									<p class="m-0 text-sm text-muted-2">Destination Collaboration</p>
								</div>
								<div
									class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple">
									<h6 class="fw-bold fs-3 m-0">25K</h6>
									<p class="m-0 text-sm text-muted-2">Happy Customers</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Our Experience End ================================== -->


		<!-- ================================ Article Section Start ======================================= -->
		<section class="pt-0">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Trending & Popular Articles</h2>
							
						</div>
					</div>
				</div>


				<div class="row justify-content-center g-4">

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="slider-home.php#" class="d-block"><img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Destination</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="slider-home.php#" class="text-dark">Fly Smarter: How to Book Flights Easily and Securely</a></h4>
								<p class="mb-3">Finding the perfect flight shouldn’t be a struggle. Our platform simplifies the process, offering real-time flight availability</p>
								<a class="text-primary fw-medium" href="slider-home.php#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="slider-home.php#" class="d-block"><img src="assets/img/blog-2.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Journey</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="slider-home.php#" class="text-dark">The Ultimate Guide to Hassle-Free Flight Bookings</a></h4>
								<p class="mb-3">Tired of complicated flight bookings? Our user-friendly system helps you search, compare, and book flights effortlessly.</p>
								<a class="text-primary fw-medium" href="slider-home.php#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="slider-home.php#" class="d-block"><img src="assets/img/blog-3.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Business</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="slider-home.php#" class="text-dark">Travel Made Simple: Book Your Next Flight in Minutes</a></h4>
								<p class="mb-3">Say goodbye to long booking processes and hidden fees! Our flight booking system allows you to search, book, and confirm your flights in just a few clicks.</p>
								<a class="text-primary fw-medium" href="slider-home.php#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- ================================ Article Section Start ======================================= -->


		<!-- ============================ Call To Action Start ================================== -->
		<div class="position-relative bg-cover py-5 bg-primary" style="background:url(assets/img/bg.jpg)no-repeat;"
			data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="calltoAction-wraps position-relative py-5 px-4">
							<div class="ht-40"></div>
							<div class="row align-items-center justify-content-center">
								<div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 text-center">

									<div class="calltoAction-title mb-5">
										<h4 class="text-light fs-2 fw-bold lh-base m-0">Subscribe & Get<br>Special Discount with <?=$sitName?>.com
										</h4>
									</div>
									<div class="newsletter-forms mt-md-0 mt-4">
										<form>
											<div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

												<div class="col-xl-9 col-lg-8 col-md-8">
													<div class="form-group m-0">
														<input type="text" class="form-control bold ps-1 border-0" placeholder="Enter Your Mail!">
													</div>
												</div>
												<div class="col-xl-3 col-lg-4 col-md-4">
													<div class="form-group m-0">
														<button type="button" class="btn btn-dark fw-medium full-width">Submit<i
																class="fa-solid fa-arrow-trend-up ms-2"></i></button>
													</div>
												</div>

											</div>
										</form>
									</div>

								</div>
							</div>
							<div class="ht-40"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================ Call To Action Start ================================== -->


		<!-- ============================ Footer Start ================================== -->
		 <?php 
		    require_once('./home_footer.php')
		 ?>
		<!-- ============================ Footer End ================================== -->

		

		<!-- Video Modal -->
		<div class="modal fade" id="popup-video" tabindex="-1" role="dialog" aria-labelledby="popupvideo" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content" id="popupvideo">
					<iframe class="embed-responsive-item full-width" height="480" src="https://www.youtube.com/embed/qN3OueBm9F4?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<!-- End Video Modal -->

		<a id="back2Top" class="top-scroll" title="Back to top" href="slider-home.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<?php 
	   require_once('./script.php')
	?>

</body>

</html>