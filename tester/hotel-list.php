<?php 
  $title = 'Hotel List';
  require_once('./home_header.php')
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
		<div class="py-5 bg-primary position-relative">
			<div class="container">

				<!-- Search Form -->
				<div class="row justify-content-center align-items-center">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="search-wrap position-relative">
							<div class="row align-items-end gy-3 gx-md-3 gx-sm-2">

								<div class="col-xl-8 col-lg-7 col-md-12">
									<div class="row gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
											<div class="form-group mb-0">
												<label class="text-light text-uppercase opacity-75">Where</label>
												<select class="goingto form-control fw-bold" name="leaving[]" multiple="multiple">
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
												<label class="text-light text-uppercase opacity-75">Checkin & Checkout</label>
												<input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
													id="checkinout" readonly="readonly">
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5 col-md-12">
									<div class="row align-items-end gy-3 gx-md-3 gx-sm-2">
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
											<div class="form-group mb-0">
												<label class="text-light text-uppercase opacity-75">Guests & Rooms</label>
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
												<button type="button" class="btn btn-whites text-primary full-width fw-medium"><i
														class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- </row> -->

			</div>
		</div>
		<!-- ============================ Hero Banner End ================================== -->


		<!-- ============================ Searches List Start ================================== -->
		<section class="gray-simple">
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

					<!-- Sidebar -->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="filter-searchBar bg-white rounded-3">
							<div class="filter-searchBar-head border-bottom">
								<div class="searchBar-headerBody d-flex align-items-start justify-content-between px-3 py-3">
									<div class="searchBar-headerfirst">
										<h6 class="fw-bold fs-5 m-0">Filters</h6>
										<p class="text-md text-muted m-0">Showing 180 Hotels</p>
									</div>
									<div class="searchBar-headerlast text-end">
										<a href="hotel-list-01.php#" class="text-md fw-medium text-primary active">Clear All</a>
									</div>
								</div>
							</div>

							<div class="filter-searchBar-body">


								<!-- Bed types -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Bed Type</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="doublebed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="doublebed">1 Double
													Bed</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="2bed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="2bed">2 Beds</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="singlebed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="singlebed">1 Single
													Bed</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="3beds">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="3beds">3
													Beds</label>
											</li>
											<li class="col-6">
												<input type="checkbox" class="btn-check" id="kingbed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium full-width" for="kingbed">King
													Bed</label>
											</li>
										</ul>
									</div>

								</div>

								<!-- Popular Filters -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Popular Filters</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="fsq">
													<label class="form-check-label" for="fsq">Free Cancellation Available</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="bk1">
													<label class="form-check-label" for="bk1">Book @ ₹1</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="payh">
													<label class="form-check-label" for="payh">Pay At Hotel Available</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="brks">
													<label class="form-check-label" for="brks">Free Breakfast Included</label>
												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Pricing -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Pricing Range in US$</h6>
									</div>
									<div class="searchBar-single-wrap">
										<input type="text" class="js-range-slider" name="my_range" value="" data-skin="round"
											data-type="double" data-min="0" data-max="1000" data-grid="false">
									</div>
								</div>

								<!-- Customer Ratings -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Customer Ratings</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="fourfive">
															<label class="form-check-label" for="fourfive"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">4.5+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">16</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="fourplus">
															<label class="form-check-label" for="fourplus"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">4+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">10</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="threefive">
															<label class="form-check-label" for="threefive"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">3.5+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">08</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="threeplus">
															<label class="form-check-label" for="threeplus"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																</div>
																<div class="frm-slicing-title ps-1"><span class="text-dark fw-bold">3+</span></div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">26</span></div>
														</div>
													</div>

												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Star Ratings -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Star Ratings</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="fivestar">
															<label class="form-check-label" for="fivestar"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																</div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">16</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="fourstar">
															<label class="form-check-label" for="fourstar"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																</div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">16</span></div>
														</div>
													</div>

												</div>
											</li>
											<li class="col-12">
												<div class="form-check lg">
													<div class="frm-slicing d-flex align-items-center">
														<div class="frm-slicing-first">
															<input class="form-check-input" type="checkbox" id="threestar">
															<label class="form-check-label" for="threestar"></label>
														</div>
														<div
															class="frm-slicing-end d-flex align-items-center justify-content-between full-width ps-1">
															<div class="frms-flex d-flex align-items-center">
																<div class="frm-slicing-ico text-md">
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																	<i class="fa fa-star text-warning"></i>
																</div>
															</div>
															<div class="text-end"><span class="text-md text-muted-2 opacity-75">16</span></div>
														</div>
													</div>

												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Amenities -->
								<div class="searchBar-single px-3 py-3 border-bottom">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Amenities</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="wififree">
													<label class="form-check-label" for="wififree">Free Wifi</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="bkrsdt">
													<label class="form-check-label" for="bkrsdt">4 Breakfast included</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="pool">
													<label class="form-check-label" for="pool">Pool</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="parking">
													<label class="form-check-label" for="parking">Free Parking</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="acrion">
													<label class="form-check-label" for="acrion">Air Conditioning</label>
												</div>
											</li>
										</ul>
									</div>

								</div>

								<!-- Popular Filters -->
								<div class="searchBar-single px-3 py-3">
									<div class="searchBar-single-title d-flex mb-3">
										<h6 class="sidebar-subTitle fs-6 fw-medium m-0">Fun things To Do</h6>
									</div>
									<div class="searchBar-single-wrap">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2 mb-0">
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="beach">
													<label class="form-check-label" for="beach">Beach</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="ftns">
													<label class="form-check-label" for="ftns">Fitness center</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="cylc">
													<label class="form-check-label" for="cylc">Cycling</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="anms">
													<label class="form-check-label" for="anms">Animation Show</label>
												</div>
											</li>
											<li class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="shpc">
													<label class="form-check-label" for="shpc">Shopping center</label>
												</div>
											</li>
										</ul>
									</div>

								</div>

							</div>
						</div>
					</div>

					<!-- All List -->
					<div class="col-xl-9 col-lg-8 col-md-12">
						<div class="row align-items-center justify-content-between">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing 280 Search Results</h5>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="d-flex align-items-center justify-content-start justify-content-lg-end flex-wrap">
									<div class="flsx-first me-2">
										<div class="bg-white rounded py-2 px-3">
											<div class="form-check form-switch">
												<input class="form-check-input" type="checkbox" role="switch" id="mapoption">
												<label class="form-check-label ms-1" for="mapoption">Map</label>
											</div>
										</div>
									</div>
									<div class="flsx-first mt-sm-0 mt-2">
										<ul class="nav nav-pills nav-fill p-1 small lights blukker bg-primary rounded-3 shadow-sm"
											id="filtersblocks" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active rounded-3" id="trending" data-bs-toggle="tab" type="button"
													role="tab" aria-selected="true">Our Trending</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link rounded-3" id="mostpopular" data-bs-toggle="tab" type="button"
													role="tab" aria-selected="false">Most Popular</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link rounded-3" id="lowprice" data-bs-toggle="tab" type="button" role="tab"
													aria-selected="false">Lowest Price</button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row align-items-center g-4 mt-2">

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel-1.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<div class="d-flex align-items-center justify-content-start">
													<div class="d-inline-block">
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
													</div>
												</div>
												<h4 class="fs-5 fw-bold mb-1">Hotel Chancellor@Orchard</h4>
												<ul class="row gx-2 p-0 excortio">
													<li class="col-auto">
														<p class="text-muted-2 text-md">Waterloo and Southwark</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">9.8 km from Delhi Airport</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md"><a href="hotel-list-01.php#" class="text-primary">Show on Map</a></p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Parking</span>
													<span class="ellipsis">WiFi</span>
													<span class="ellipsis">Eating</span>
													<span class="ellipsis">Cooling</span>
													<span class="ellipsis">Pet</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Last booed 25min ago</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="hotel-list-01.php#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
													<div class="text-muted-2 text-sm">For 2 Nights</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="hotel-list-01.php#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<div class="position-relative h-100">
													<div class="main-carousel list-layouts arrow-hide">
														<div class="carousel-cell none"><img class="img-fluid h-100 object-fit"
																src="assets/img/hotel/hotel-2.jpg" alt="image"></div>
														<div class="carousel-cell none"><img class="img-fluid h-100 object-fit"
																src="assets/img/hotel/hotel-2.jpg" alt="image"></div>
														<div class="carousel-cell none"><img class="img-fluid h-100 object-fit"
																src="assets/img/hotel/hotel-2.jpg" alt="image"></div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<div class="d-flex align-items-center justify-content-start">
													<div class="d-inline-block">
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
													</div>
												</div>
												<h4 class="fs-5 fw-bold mb-1">Dorsett Singapore</h4>
												<ul class="row gx-2 p-0 excortio">
													<li class="col-auto">
														<p class="text-muted-2 text-md">Waterloo and Southwark</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">9.8 km from Delhi Airport</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md"><a href="hotel-list-01.php#" class="text-primary">Show on Map</a></p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Parking</span>
													<span class="ellipsis">WiFi</span>
													<span class="ellipsis">Eating</span>
													<span class="ellipsis">Cooling</span>
													<span class="ellipsis">Pet</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Last booed 25min ago</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="hotel-list-01.php#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
													<div class="text-muted-2 text-sm">For 2 Nights</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="hotel-list-01.php#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Offer Coupon Box -->
							<div class="col-xl-12 col-lg12 col-md-12">
								<div class="d-md-flex bg-success rounded-2 align-items-center justify-content-between px-3 py-3">
									<div class="d-md-flex align-items-center justify-content-start">
										<div class="flx-icon-first mb-md-0 mb-3">
											<div class="square--60 circle bg-white"><i class="fa-solid fa-gift fs-3 text-success"></i></div>
										</div>
										<div class="flx-caps-first ps-2">
											<h6 class="fs-5 fw-medium text-light mb-0">Start Exploring The World</h6>
											<p class="text-light mb-0">Book FlightsEffortless and Earn $50+ for each booking with Booking.com
											</p>
										</div>
									</div>
									<div class="flx-last text-md-end mt-md-0 mt-4"><button type="button" class="btn btn-whites fw-medium full-width text-dark px-xl-4">Get Started</button></div>
								</div>
							</div>

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel-3.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<div class="d-flex align-items-center justify-content-start">
													<div class="d-inline-block">
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
													</div>
												</div>
												<h4 class="fs-5 fw-bold mb-1">Royal Plaza on Scotts</h4>
												<ul class="row gx-2 p-0 excortio">
													<li class="col-auto">
														<p class="text-muted-2 text-md">Waterloo and Southwark</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">9.8 km from Delhi Airport</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md"><a href="hotel-list-01.php#" class="text-primary">Show on Map</a></p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Parking</span>
													<span class="ellipsis">WiFi</span>
													<span class="ellipsis">Eating</span>
													<span class="ellipsis">Cooling</span>
													<span class="ellipsis">Pet</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Last booed 25min ago</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="hotel-list-01.php#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
													<div class="text-muted-2 text-sm">For 2 Nights</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="hotel-list-01.php#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel-4.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<div class="d-flex align-items-center justify-content-start">
													<div class="d-inline-block">
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
													</div>
												</div>
												<h4 class="fs-5 fw-bold mb-1">Siloso Beach Resort - Sentosa</h4>
												<ul class="row gx-2 p-0 excortio">
													<li class="col-auto">
														<p class="text-muted-2 text-md">Waterloo and Southwark</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">9.8 km from Delhi Airport</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md"><a href="hotel-list-01.php#" class="text-primary">Show on Map</a></p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Parking</span>
													<span class="ellipsis">WiFi</span>
													<span class="ellipsis">Eating</span>
													<span class="ellipsis">Cooling</span>
													<span class="ellipsis">Pet</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Last booed 25min ago</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="hotel-list-01.php#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
													<div class="text-muted-2 text-sm">For 2 Nights</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="hotel-list-01.php#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel-5.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<div class="d-flex align-items-center justify-content-start">
													<div class="d-inline-block">
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
													</div>
												</div>
												<h4 class="fs-5 fw-bold mb-1">Mercure Singapore Tyrwhitt</h4>
												<ul class="row gx-2 p-0 excortio">
													<li class="col-auto">
														<p class="text-muted-2 text-md">Waterloo and Southwark</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">9.8 km from Delhi Airport</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md"><a href="hotel-list-01.php#" class="text-primary">Show on Map</a></p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Parking</span>
													<span class="ellipsis">WiFi</span>
													<span class="ellipsis">Eating</span>
													<span class="ellipsis">Cooling</span>
													<span class="ellipsis">Pet</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Last booed 25min ago</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="hotel-list-01.php#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
													<div class="text-muted-2 text-sm">For 2 Nights</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="hotel-list-01.php#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel-6.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<div class="d-flex align-items-center justify-content-start">
													<div class="d-inline-block">
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
													</div>
												</div>
												<h4 class="fs-5 fw-bold mb-1">Value Hotel Balestier</h4>
												<ul class="row gx-2 p-0 excortio">
													<li class="col-auto">
														<p class="text-muted-2 text-md">Waterloo and Southwark</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">9.8 km from Delhi Airport</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md"><a href="hotel-list-01.php#" class="text-primary">Show on Map</a></p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Parking</span>
													<span class="ellipsis">WiFi</span>
													<span class="ellipsis">Eating</span>
													<span class="ellipsis">Cooling</span>
													<span class="ellipsis">Pet</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Last booed 25min ago</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="hotel-list-01.php#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
													<div class="text-muted-2 text-sm">For 2 Nights</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="hotel-list-01.php#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<!-- Single List -->
							<div class="col-xl-12 col-lg-12 col-12">
								<div class="card list-layout-block rounded-3 p-3">
									<div class="row">

										<div class="col-xl-4 col-lg-3 col-md">
											<div class="cardImage__caps rounded-2 overflow-hidden h-100">
												<img class="img-fluid h-100 object-fit" src="assets/img/hotel/hotel-7.jpg" alt="image">
											</div>
										</div>

										<div class="col-xl col-lg col-md">
											<div class="listLayout_midCaps mt-md-0 mt-3 mb-md-0 mb-3">
												<div class="d-flex align-items-center justify-content-start">
													<div class="d-inline-block">
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
														<i class="fa fa-star text-warning text-xs"></i>
													</div>
												</div>
												<h4 class="fs-5 fw-bold mb-1">Vigara Hotel Lavender</h4>
												<ul class="row gx-2 p-0 excortio">
													<li class="col-auto">
														<p class="text-muted-2 text-md">Waterloo and Southwark</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md">9.8 km from Delhi Airport</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md fw-bold">.</p>
													</li>
													<li class="col-auto">
														<p class="text-muted-2 text-md"><a href="hotel-list-01.php#" class="text-primary">Show on Map</a></p>
													</li>
												</ul>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">Parking</span>
													<span class="ellipsis">WiFi</span>
													<span class="ellipsis">Eating</span>
													<span class="ellipsis">Cooling</span>
													<span class="ellipsis">Pet</span>
												</div>
												<div class="position-relative mt-3">
													<div class="fw-medium text-dark">Standard Twin Double Room</div>
													<div class="text-md text-muted">Last booed 25min ago</div>
												</div>
												<div class="position-relative mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation, till 1 hour of Pick up</span></div>
													<div class="text-md">
														<p class="m-0"><a href="hotel-list-01.php#" class="text-primary">Login</a> & get additional $15 Off Using
															<span class="text-primary">Visa card</span>
														</p>
													</div>
												</div>
											</div>
										</div>

										<div
											class="col-xl-auto col-lg-auto col-md-auto text-right text-md-left d-flex align-items-start align-items-md-end flex-column">
											<div class="row align-items-center justify-content-start justify-content-md-end gx-2 mb-3">
												<div class="col-auto text-start text-md-end">
													<div class="text-md text-dark fw-medium">Exceptional</div>
													<div class="text-md text-muted-2">3,014 reviews</div>
												</div>
												<div class="col-auto">
													<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
												</div>
											</div>

											<div class="position-relative mt-auto full-width">
												<div class="d-flex align-items-center justify-content-start justify-content-md-end mb-1">
													<span class="label bg-success text-light">15% Off</span>
												</div>
												<div class="d-flex align-items-center justify-content-start justify-content-md-end">
													<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$79</div>
													<div class="text-dark fw-bold fs-3">$59</div>
												</div>
												<div
													class="d-flex align-items-start align-items-md-end justify-content-start justify-content-md-end flex-column mb-2">
													<div class="text-muted-2 text-sm">+$22 taxes & Fees</div>
													<div class="text-muted-2 text-sm">For 2 Nights</div>
												</div>
												<div class="d-flex align-items-start align-items-md-end text-start text-md-end flex-column">
													<a href="hotel-list-01.php#" class="btn btn-md btn-primary full-width fw-medium px-lg-4">See Availability<i
															class="fa-solid fa-arrow-trend-up ms-2"></i></a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- /Single List -->

							<div class="col-xl-12 col-lg-12 col-12">
								<div class="pags card py-2 px-5">
									<nav aria-label="Page navigation example">
										<ul class="pagination m-0 p-0">
											<li class="page-item">
												<a class="page-link" href="hotel-list-01.php#" aria-label="Previous">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-left-long"></i></span>
												</a>
											</li>
											<li class="page-item active"><a class="page-link" href="hotel-list-01.php#">1</a></li>
											<li class="page-item"><a class="page-link" href="hotel-list-01.php#">2</a></li>
											<li class="page-item"><a class="page-link" href="hotel-list-01.php#">3</a></li>
											<li class="page-item">
												<a class="page-link" href="hotel-list-01.php#" aria-label="Next">
													<span aria-hidden="true"><i class="fa-solid fa-arrow-right-long"></i></span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- ============================ Searches List End ================================== -->


		<!-- ============================ Footer Start ================================== -->
		   <?php 
		     require_once('./home_footer.php');  
		   ?>
		<!-- ============================ Footer End ================================== -->

		


		<a id="back2Top" class="top-scroll" title="Back to top" href="hotel-list-01.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<?php 
	  require_once('./script.php')
	?>
	
</body>

</html>