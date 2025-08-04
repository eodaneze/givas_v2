<?php 
  $title = "Hotel details";
  require_once('./home_header.php');
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
		  <?php require_once('./home_navbar.php') ?>
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
								<li class="breadcrumb-item"><a href="hotel-detail-2.php#" class="text-primary">Home</a></li>
								<li class="breadcrumb-item"><a href="hotel-detail-2.php#" class="text-primary">Hotel in Denver, USA</a></li>
								<li class="breadcrumb-item active" aria-current="page">Royal Plaza on Scotts</li>
							</ol>
						</nav>
					</div>

					<!-- Gallery & Info -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card border-0 p-3 mb-4">

							<div class="crd-heaader d-md-flex align-items-center justify-content-between mb-3">
								<div class="crd-heaader-first">
									<div class="d-inline-flex align-items-center mb-1">
										<span class="label bg-light-success text-success">Health Protected</span>
										<div class="d-inline-block ms-2">
											<i class="fa fa-star text-warning text-xs"></i>
											<i class="fa fa-star text-warning text-xs"></i>
											<i class="fa fa-star text-warning text-xs"></i>
											<i class="fa fa-star text-warning text-xs"></i>
											<i class="fa fa-star text-warning text-xs"></i>
										</div>
									</div>
									<div class="d-block">
										<h4 class="mb-0">Royal Plaza on Scotts</h4>
										<div class="">
											<p class="text-md m-0"><i class="fa-solid fa-location-dot me-2"></i>577 Jalan Sultan Road
												Singapore, 245652 Singapore. <a href="hotel-detail-2.php#" class="text-primary fw-medium ms-2">Show on Map</a></p>
										</div>
									</div>
								</div>
								<div class="crd-heaader-last my-md-0 my-2">
									<div class="drix-wrap d-flex flex-column align-items-md-end align-items-start text-end">
										<div class="drix-first d-flex align-items-center text-end mb-2">
											<a href="hotel-detail-2.php#" class="bg-light-info text-info rounded-1 fw-medium text-sm px-3 py-2 lh-base"><i
													class="fa-solid fa-bookmark me-2"></i>Bookmark</a>
											<a href="hotel-detail-2.php#"
												class="bg-light-danger text-danger rounded-1 fw-medium text-sm px-3 py-2 lh-base ms-2"><i
													class="fa-solid fa-share-nodes me-2"></i>Share</a>
										</div>
										<div class="drix-last">
											<span class="label bg-light-success text-success">Free Cancellation Till 10 Aug 23
												12:10AM</label>
										</div>
									</div>
								</div>
							</div>

							<div class="crd-body">
								<div class="row align-items-center justify-content-between">
									<div class="col-xl-8 col-lg-7 col-md-12">
										<div class="galleryGrid typeGrid_2 mb-lg-0 mb-3">
											<div class="galleryGrid__item relative d-flex">
												<a href="assets/img/hotel/hotel-3.jpg" data-lightbox="roadtrip"><img src="assets/img/hotel/hotel-3.jpg"
														alt="image" class="rounded-2 img-fluid"></a>
											</div>

											<div class="galleryGrid__item position-relative">
												<a href="assets/img/hotel/hotel-7.jpg" data-lightbox="roadtrip"><img src="assets/img/hotel/hotel-7.jpg"
														alt="image" class="rounded-2 img-fluid"></a>
												<div class="position-absolute end-0 bottom-0 mb-3 me-3">
													<a href="assets/img/hotel/hotel-1.jpg" data-lightbox="roadtrip"
														class="btn btn-md btn-whites fw-medium text-dark"><i
															class="fa-solid fa-caret-right me-1"></i>16 More Photos</a>
												</div>
											</div>
											<div class="galleryGrid__item">
												<a href="assets/img/hotel/hotel-6.jpg" data-lightbox="roadtrip"><img src="assets/img/hotel/hotel-6.jpg"
														alt="image" class="rounded-2 img-fluid"></a>
											</div>
											<div class="galleryGrid__item">
												<a href="assets/img/hotel/hotel-8.jpg" data-lightbox="roadtrip"><img src="assets/img/hotel/hotel-8.jpg"
														alt="image" class="rounded-2 img-fluid"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-4 col-lg-5 col-md-12">
										<div class="card border br-dashed">
											<div class="card-header">
												<div class="crd-heady102 d-flex align-items-center justify-content-start">
													<div class="square--30 circle bg-light-primary text-primary flex-shrink-0"><i
															class="fa-solid fa-percent"></i></div>
													<div class="crd-heady102Title lh-1 ps-2"><span
															class="text-sm fw-semibold text-dark text-uppercase lh-1 mb-0">Login not to get upto 20%
															lower price</span></div>
												</div>
												<div class="crd-heady103">
													<a href="hotel-detail-2.php#" class="btn btn-primary btn-sm px-4 fw-semibold text-uppercase">Login</a>
												</div>
											</div>
											<div class="card-body">
												<div class="d-block mb-3">
													<div class="d-flex align-items-center justify-content-start">
														<div class="text-dark fw-bold fs-3 me-2">$2999</div>
														<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$5000</div>
														<div class="text-warning fw-semibold">40% Off</div>
													</div>
													<div class="d-flex align-items-start justify-content-start">
														<div class="text-muted-2 text-md">inclusive of all taxes</div>
													</div>
												</div>
												<div class="d-block">

													<div class="form-group mb-4">
														<input type="text" class="form-control fw-bold" placeholder="Check-In & Check-Out"
															id="checkinout" readonly="readonly">
													</div>

													<div class="form-group mb-4">
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
																	<span class="guests-input__value"><span
																			id="guests-count-children">0</span>Children</span>
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

													<div class="form-group mb-4">
														<div class="d-flex align-items-center justify-content-between">
															<div class="crd-heady102 d-flex align-items-center justify-content-start">
																<div class="square--30 circle bg-light-success text-success"><i
																		class="fa-solid fa-percent"></i></div>
																<div class="crd-heady102Title lh-1 ps-2"><span
																		class="text-sm fw-semibold text-dark text-uppercase lh-1 mb-0">oyofestive40 coupon
																		applied</span></div>
															</div>
															<div class="crd-heady103">
																<span class="text-dark fw-semibold text-uppercase">-$1780</span>
															</div>
														</div>
													</div>

													<div class="form-group mb-2">
														<button type="button" class="btn btn-primary full-width fw-medium">Check
															Availabilty</button>
													</div>
												</div>
											</div>

											<div class="card-footer bg-white">
												<div class="row align-items-center justify-content-start gx-2">
													<div class="col-auto">
														<div class="square--40 rounded-2 bg-seegreen text-light">4.8</div>
													</div>
													<div class="col-auto text-start">
														<div class="text-md text-dark fw-medium">Exceptional</div>
														<div class="text-md text-muted-2">3,014 reviews</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Top Attractions -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row align-items-center justify-content-between gx-4">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="card p-3 mb-4">
									<div class="nearestServ-wrap">
										<div class="nearestServ-head d-flex mb-1">
											<h6 class="fs-6 fw-semibold text-primary mb-1"><i class="fa-brands fa-servicestack me-2"></i>Top
												Attractions</h6>
										</div>
										<div class="nearestServ-caps">
											<ul class="row align-items-start g-2 p-0 m-0">
												<li class="col-12 text-muted-2">Hong Kong Disneyland (170m)</li>
												<li class="col-12 text-muted-2">Hong Kong Museum (250m)</li>
												<li class="col-12 text-muted-2">The Peak Tram (80m)</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="card p-3 mb-4">
									<div class="nearestServ-wrap">
										<div class="nearestServ-head d-flex mb-1">
											<h6 class="fs-6 fw-semibold text-primary mb-1"><i class="fa-solid fa-jet-fighter me-2"></i>Nearest
												Airport & Metro</h6>
										</div>
										<div class="nearestServ-caps">
											<ul class="row align-items-start g-2 p-0 m-0">
												<li class="col-12 text-muted-2">Airport: Janghai Airport (370m)</li>
												<li class="col-12 text-muted-2">Airport: Shivalay Airport (2.4km)</li>
												<li class="col-12 text-muted-2">Metro: Mandpam (500m)</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="card p-3 mb-4">
									<div class="nearestServ-wrap">
										<div class="nearestServ-head d-flex mb-1">
											<h6 class="fs-6 fw-semibold text-primary mb-1"><i
													class="fa-solid fa-martini-glass-empty me-2"></i>Cafe & Bars</h6>
										</div>
										<div class="nearestServ-caps">
											<ul class="row align-items-start g-2 p-0 m-0">
												<li class="col-12 text-muted-2">Cafe: Bekker Cofee Cafe (60m)</li>
												<li class="col-12 text-muted-2">Cafe: Levendaram restaurants (120m)</li>
												<li class="col-12 text-muted-2">Bar: The Blue Bar (90m)</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Login Alert -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="d-flex align-items-center justify-content-start py-3 px-3 rounded-2 bg-success mb-4">
							<p class="text-light fw-semibold m-0"><i class="fa-solid fa-gift text-warning me-2"></i><a href="hotel-detail-2.php#"
									class="text-white text-decoration-underline">Login</a> or <a href="hotel-detail-2.php#"
									class="text-white text-decoration-underline">Register</a> to earn upto 100 coins (approx 1.72 US$)
								after check-out.
							<p>
						</div>
					</div>

					<!-- Rooms Details -->
					<div class="col-xl-12 col-lg-12 col-md-12">

						<!-- Single Room Option -->
						<div class="card mb-4">
							<div class="card-header">
								<h6 class="fw-semibold mb-0">Superior Double Room</h6>
							</div>

							<div class="card-body">
								<div class="row align-items-start">
									<div class="col-xl-3 col-lg-4 col-md-4">
										<div class="roomavls-groups">
											<div class="roomavls-thumb mb-2">
												<img src="assets/img/hotel/hotel-10.jpg" class="img-fluid rounded-2" alt="">
											</div>
											<div class="roomavls-caps">
												<div class="roomavls-escols d-flex align-items-start mb-2">
													<span class="label bg-light-purple text-purple me-2">King Bed</span><span
														class="label bg-light-purple text-purple">3 Sleeps</span>
												</div>
												<div class="roomavls-lists">
													<ul class="row align-items-center gx-2 gy-1 mb-0 p-0">
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-brands fa-bity me-2"></i>City View</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-ban-smoking me-2"></i>Non-Smoking</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-vector-square me-2"></i>1800sqft | 6 Floor</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-wifi me-2"></i>Free Wi-Fi</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-bath me-2"></i>Private Bathroom</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-snowflake me-2"></i>Air Conditioning</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-cash-register me-2"></i>Refrigerator</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-tty me-2"></i>Telephone</span></li>
														<li class="col-12"><a href="hotel-detail-2.php#" class="text-primary fw-medium text-md">Show More Room
																Amenties</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-9 col-lg-8 col-md-8">

										<!-- Single Item -->
										<div class="d-block border br-dashed rounded-2 px-3 py-3 mb-3">
											<div class="d-flex align-items-sm-end justify-content-between flex-sm-row flex-column">
												<div class="typsofrooms-wrap">
													<div class="d-flex align-items-center">
														<h6 class="fs-6 fw-semibold mb-1 me-2">Your Choice</h6><a href="hotel-detail-2.php#"
															class="text-muted fs-6"><i class="fa-solid fa-circle-question"></i></a>
													</div>
													<div class="typsofrooms-groups d-flex align-items-start">
														<div class="typsofrooms-brk1 mb-4">
															<ul class="row align-items-center g-1 mb-0 p-0">
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-mug-saucer me-2"></i>Breackfast for US$10 (Optional)</span>
																</li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-ban-smoking me-2"></i>Non-Refundable</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-meteor me-2"></i>Instant Confirmation</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-brands fa-cc-visa me-2"></i>Prepay Online</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-circle-check me-2"></i>Booking of Maximum 5 Rooms</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="typsofrooms-action col-auto">
													<div class="prcrounce-groups">
														<div class="d-flex align-items-center justify-content-start justify-content-sm-end">
															<div class="text-dark fw-semibold fs-4">US$ 99</div>
														</div>
														<div
															class="d-flex align-items-start align-items-sm-end justify-content-start justify-content-md-end flex-column mb-2">
															<div class="text-muted-2 text-sm">After tax US$ 102</div>
														</div>
													</div>
													<div
														class="prcrounce-groups-button d-flex flex-column align-items-start align-items-md-end mt-3">
														<div class="prcrounce-sngbuttons d-flex mb-2"><button
																class="btn btn-sm btn-light-primary rounded-1 fw-medium px-4">Book at This
																Price</button></div>
														<div class="prcrounce-sngbuttons d-flex"><button
																class="btn btn-sm btn-primary rounded-1 fw-medium px-4">Access Lower Price</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- / Single Item -->

										<!-- Single Item -->
										<div class="d-block border br-dashed rounded-2 px-3 py-3">
											<div class="d-flex align-items-sm-end justify-content-between flex-sm-row flex-column">
												<div class="typsofrooms-wrap">
													<div class="d-flex align-items-center">
														<h6 class="fs-6 fw-semibold mb-1 me-2">Your Choice</h6><a href="hotel-detail-2.php#"
															class="text-muted fs-6"><i class="fa-solid fa-circle-question"></i></a>
													</div>
													<div class="typsofrooms-groups d-flex align-items-start">
														<div class="typsofrooms-brk1 mb-4">
															<ul class="row align-items-center g-1 mb-0 p-0">
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-mug-saucer me-2"></i>Breackfast Included</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-ban-smoking me-2"></i>Non-Refundable</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-meteor me-2"></i>Instant Confirmation</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-brands fa-cc-visa me-2"></i>Prepay Online</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-circle-check me-2"></i>Booking of Maximum 5 Rooms</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="typsofrooms-action col-auto">
													<div class="prcrounce-groups">
														<div class="d-flex align-items-center justify-content-start justify-content-sm-end">
															<div class="text-dark fw-semibold fs-4">US$ 107</div>
														</div>
														<div
															class="d-flex align-items-start align-items-sm-end justify-content-start justify-content-md-end flex-column mb-2">
															<div class="text-muted-2 text-sm">After tax US$ 110</div>
														</div>
													</div>
													<div
														class="prcrounce-groups-button d-flex flex-column align-items-start align-items-md-end mt-3">
														<div class="prcrounce-sngbuttons d-flex mb-2"><button
																class="btn btn-sm btn-light-primary rounded-1 fw-medium px-4">Book at This
																Price</button></div>
														<div class="prcrounce-sngbuttons d-flex"><button
																class="btn btn-sm btn-primary rounded-1 fw-medium px-4">Access Lower Price</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- / Single Item -->

									</div>
								</div>
							</div>
						</div>

						<!-- Single Room Option -->
						<div class="card mb-4">
							<div class="card-header">
								<h6 class="fw-semibold mb-0">Superior Twin Room with City View</h6>
							</div>

							<div class="card-body">
								<div class="row align-items-start">
									<div class="col-xl-3 col-lg-4 col-md-4">
										<div class="roomavls-groups">
											<div class="roomavls-thumb mb-2">
												<img src="assets/img/hotel/hotel-4.jpg" class="img-fluid rounded-2" alt="">
											</div>
											<div class="roomavls-caps">
												<div class="roomavls-escols d-flex align-items-start mb-2">
													<span class="label bg-light-purple text-purple me-2">Twin Double Bed</span><span
														class="label bg-light-purple text-purple">3 Sleeps</span>
												</div>
												<div class="roomavls-lists">
													<ul class="row align-items-center gx-2 gy-1 mb-0 p-0">
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-brands fa-bity me-2"></i>City View</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-ban-smoking me-2"></i>Non-Smoking</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-vector-square me-2"></i>1800sqft | 6 Floor</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-wifi me-2"></i>Free Wi-Fi</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-bath me-2"></i>Private Bathroom</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-snowflake me-2"></i>Air Conditioning</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-cash-register me-2"></i>Refrigerator</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-tty me-2"></i>Telephone</span></li>
														<li class="col-12"><a href="hotel-detail-2.php#" class="text-primary fw-medium text-md">Show More Room
																Amenties</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-9 col-lg-8 col-md-8">

										<!-- Single Item -->
										<div class="d-block border br-dashed rounded-2 px-3 py-3 mb-3">
											<div class="d-flex align-items-sm-end justify-content-between flex-sm-row flex-column">
												<div class="typsofrooms-wrap">
													<div class="d-flex align-items-center">
														<h6 class="fs-6 fw-semibold mb-1 me-2">Your Choice</h6><a href="hotel-detail-2.php#"
															class="text-muted fs-6"><i class="fa-solid fa-circle-question"></i></a>
													</div>
													<div class="typsofrooms-groups d-flex align-items-start">
														<div class="typsofrooms-brk1 mb-4">
															<ul class="row align-items-center g-1 mb-0 p-0">
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-mug-saucer me-2"></i>Breackfast for US$10 (Optional)</span>
																</li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-ban-smoking me-2"></i>Non-Refundable</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-meteor me-2"></i>Instant Confirmation</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-brands fa-cc-visa me-2"></i>Prepay Online</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-circle-check me-2"></i>Booking of Maximum 5 Rooms</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="typsofrooms-action col-auto">
													<div class="prcrounce-groups">
														<div class="d-flex align-items-center justify-content-start justify-content-sm-end">
															<div class="text-dark fw-semibold fs-4">US$ 130</div>
														</div>
														<div
															class="d-flex align-items-start align-items-sm-end justify-content-start justify-content-md-end flex-column mb-2">
															<div class="text-muted-2 text-sm">After tax US$ 142</div>
														</div>
													</div>
													<div
														class="prcrounce-groups-button d-flex flex-column align-items-start align-items-md-end mt-3">
														<div class="prcrounce-sngbuttons d-flex mb-2"><button
																class="btn btn-sm btn-light-primary rounded-1 fw-medium px-4">Book at This
																Price</button></div>
														<div class="prcrounce-sngbuttons d-flex"><button
																class="btn btn-sm btn-primary rounded-1 fw-medium px-4">Access Lower Price</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- / Single Item -->

										<!-- Single Item -->
										<div class="d-block border br-dashed rounded-2 px-3 py-3">
											<div class="d-flex align-items-sm-end justify-content-between flex-sm-row flex-column">
												<div class="typsofrooms-wrap">
													<div class="d-flex align-items-center">
														<h6 class="fs-6 fw-semibold mb-1 me-2">Your Choice</h6><a href="hotel-detail-2.php#"
															class="text-muted fs-6"><i class="fa-solid fa-circle-question"></i></a>
													</div>
													<div class="typsofrooms-groups d-flex align-items-start">
														<div class="typsofrooms-brk1 mb-4">
															<ul class="row align-items-center g-1 mb-0 p-0">
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-mug-saucer me-2"></i>Breackfast Included</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-ban-smoking me-2"></i>Non-Refundable</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-meteor me-2"></i>Instant Confirmation</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-brands fa-cc-visa me-2"></i>Prepay Online</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-circle-check me-2"></i>Booking of Maximum 5 Rooms</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="typsofrooms-action col-auto">
													<div class="prcrounce-groups">
														<div class="d-flex align-items-center justify-content-start justify-content-sm-end">
															<div class="text-dark fw-semibold fs-4">US$ 107</div>
														</div>
														<div
															class="d-flex align-items-start align-items-sm-end justify-content-start justify-content-md-end flex-column mb-2">
															<div class="text-muted-2 text-sm">After tax US$ 110</div>
														</div>
													</div>
													<div
														class="prcrounce-groups-button d-flex flex-column align-items-start align-items-md-end mt-3">
														<div class="prcrounce-sngbuttons d-flex mb-2"><button
																class="btn btn-sm btn-light-primary rounded-1 fw-medium px-4">Book at This
																Price</button></div>
														<div class="prcrounce-sngbuttons d-flex"><button
																class="btn btn-sm btn-primary rounded-1 fw-medium px-4">Access Lower Price</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- / Single Item -->

									</div>
								</div>
							</div>
						</div>

						<!-- Single Room Option -->
						<div class="card mb-4">
							<div class="card-header">
								<h6 class="fw-semibold mb-0">Superior Double King Room</h6>
							</div>

							<div class="card-body">
								<div class="row align-items-start">
									<div class="col-xl-3 col-lg-4 col-md-4">
										<div class="roomavls-groups">
											<div class="roomavls-thumb mb-2">
												<img src="assets/img/hotel/hotel-7.jpg" class="img-fluid rounded-2" alt="">
											</div>
											<div class="roomavls-caps">
												<div class="roomavls-escols d-flex align-items-start mb-2">
													<span class="label bg-light-purple text-purple me-2">Double King Bed</span><span
														class="label bg-light-purple text-purple">3 Sleeps</span>
												</div>
												<div class="roomavls-lists">
													<ul class="row align-items-center gx-2 gy-1 mb-0 p-0">
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-brands fa-bity me-2"></i>City View</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-ban-smoking me-2"></i>Non-Smoking</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-vector-square me-2"></i>1800sqft | 6 Floor</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-wifi me-2"></i>Free Wi-Fi</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-bath me-2"></i>Private Bathroom</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-snowflake me-2"></i>Air Conditioning</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-cash-register me-2"></i>Refrigerator</span></li>
														<li class="col-6"><span class="text-muted-2 text-md"><i
																	class="fa-solid fa-tty me-2"></i>Telephone</span></li>
														<li class="col-12"><a href="hotel-detail-2.php#" class="text-primary fw-medium text-md">Show More Room
																Amenties</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-9 col-lg-8 col-md-8">

										<!-- Single Item -->
										<div class="d-block border br-dashed rounded-2 px-3 py-3 mb-3">
											<div class="d-flex align-items-sm-end justify-content-between flex-sm-row flex-column">
												<div class="typsofrooms-wrap">
													<div class="d-flex align-items-center">
														<h6 class="fs-6 fw-semibold mb-1 me-2">Your Choice</h6><a href="hotel-detail-2.php#"
															class="text-muted fs-6"><i class="fa-solid fa-circle-question"></i></a>
													</div>
													<div class="typsofrooms-groups d-flex align-items-start">
														<div class="typsofrooms-brk1 mb-4">
															<ul class="row align-items-center g-1 mb-0 p-0">
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-mug-saucer me-2"></i>Breackfast for US$10 (Optional)</span>
																</li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-ban-smoking me-2"></i>Non-Refundable</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-meteor me-2"></i>Instant Confirmation</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-brands fa-cc-visa me-2"></i>Prepay Online</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-circle-check me-2"></i>Booking of Maximum 5 Rooms</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="typsofrooms-action col-auto">
													<div class="prcrounce-groups">
														<div class="d-flex align-items-center justify-content-start justify-content-sm-end">
															<div class="text-dark fw-semibold fs-4">US$ 150</div>
														</div>
														<div
															class="d-flex align-items-start align-items-sm-end justify-content-start justify-content-md-end flex-column mb-2">
															<div class="text-muted-2 text-sm">After tax US$ 163</div>
														</div>
													</div>
													<div
														class="prcrounce-groups-button d-flex flex-column align-items-start align-items-md-end mt-3">
														<div class="prcrounce-sngbuttons d-flex mb-2"><button
																class="btn btn-sm btn-light-primary rounded-1 fw-medium px-4">Book at This
																Price</button></div>
														<div class="prcrounce-sngbuttons d-flex"><button
																class="btn btn-sm btn-primary rounded-1 fw-medium px-4">Access Lower Price</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- / Single Item -->

										<!-- Single Item -->
										<div class="d-block border br-dashed rounded-2 px-3 py-3">
											<div class="d-flex align-items-sm-end justify-content-between flex-sm-row flex-column">
												<div class="typsofrooms-wrap">
													<div class="d-flex align-items-center">
														<h6 class="fs-6 fw-semibold mb-1 me-2">Your Choice</h6><a href="hotel-detail-2.php#"
															class="text-muted fs-6"><i class="fa-solid fa-circle-question"></i></a>
													</div>
													<div class="typsofrooms-groups d-flex align-items-start">
														<div class="typsofrooms-brk1 mb-4">
															<ul class="row align-items-center g-1 mb-0 p-0">
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-mug-saucer me-2"></i>Breackfast Included</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-solid fa-ban-smoking me-2"></i>Non-Refundable</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-meteor me-2"></i>Instant Confirmation</span></li>
																<li class="col-12"><span class="text-muted-2 text-md"><i
																			class="fa-brands fa-cc-visa me-2"></i>Prepay Online</span></li>
																<li class="col-12"><span class="text-success text-md"><i
																			class="fa-solid fa-circle-check me-2"></i>Booking of Maximum 5 Rooms</span></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="typsofrooms-action col-auto">
													<div class="prcrounce-groups">
														<div class="d-flex align-items-center justify-content-start justify-content-sm-end">
															<div class="text-dark fw-semibold fs-4">US$ 107</div>
														</div>
														<div
															class="d-flex align-items-start align-items-sm-end justify-content-start justify-content-md-end flex-column mb-2">
															<div class="text-muted-2 text-sm">After tax US$ 110</div>
														</div>
													</div>
													<div
														class="prcrounce-groups-button d-flex flex-column align-items-start align-items-md-end mt-3">
														<div class="prcrounce-sngbuttons d-flex mb-2"><button
																class="btn btn-sm btn-light-primary rounded-1 fw-medium px-4">Book at This
																Price</button></div>
														<div class="prcrounce-sngbuttons d-flex"><button
																class="btn btn-sm btn-primary rounded-1 fw-medium px-4">Access Lower Price</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- / Single Item -->

									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- Service & Amenties -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card mb-4">
							<div class="card-header">
								<h4 class="fs-5 mb-0">Service & Amenties</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-start">
									<div class="col-xl-2 col-lg-3 col-md-4">
										<h5 class="fs-6 fw-semibold mb-0">Most Popular Amenities</h5>
									</div>
									<div class="col-xl-10 col-lg-9 col-md-8">
										<div class="row align-items-start">

											<div class="col-xl-12 col-lg-12 col-md-12">
												<ul class="row align-items-center p-0 mb-0">
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Parking<span
																class="text-success fw-medium ms-3">Free</span></div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Outdoor Swimming Pool</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Meeting Room</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Children's Playground</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Multi-Function Room</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Smoking Area</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Fitness Room</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Wi-Fi in Public Areas<span
																class="text-success fw-medium ms-3">Free</span></div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Languages Spoken at Front Desk</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">Luggage Storage</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center mb-3">24-Hour Front Desk</div>
													</li>
												</ul>
											</div>

											<div class="col-xl-12 col-lg-12 col-md-12">
												<ul class="row align-items-center g-3 p-0 mb-0">
													<li class="col-xl-3 col-lg-3 col-md-6 col-6">
														<div class="d-flex flex-column align-items-center rounded border br-dashed p-2">
															<div class="room-alsyruk mb-2"><img src="assets/img/hotel/hotel-5.jpg" class="img-fluid rounded"
																	alt=""></div>
															<div class="tedfr-caps text-center "><span class="text-muted-2">Meeting Room</span></div>
														</div>
													</li>
													<li class="col-xl-3 col-lg-3 col-md-6 col-6">
														<div class="d-flex flex-column align-items-center rounded border br-dashed p-2">
															<div class="room-alsyruk mb-2"><img src="assets/img/hotel/hotel-5.jpg" class="img-fluid rounded"
																	alt=""></div>
															<div class="tedfr-caps text-center "><span class="text-muted-2">Restaurant</span></div>
														</div>
													</li>
													<li class="col-xl-3 col-lg-3 col-md-6 col-6">
														<div class="d-flex flex-column align-items-center rounded border br-dashed p-2">
															<div class="room-alsyruk mb-2"><img src="assets/img/hotel/hotel-5.jpg" class="img-fluid rounded"
																	alt=""></div>
															<div class="tedfr-caps text-center "><span class="text-muted-2">Playground</span></div>
														</div>
													</li>
													<li class="col-xl-3 col-lg-3 col-md-6 col-6">
														<div class="d-flex flex-column align-items-center rounded border br-dashed p-2">
															<div class="room-alsyruk mb-2"><img src="assets/img/hotel/hotel-5.jpg" class="img-fluid rounded"
																	alt=""></div>
															<div class="tedfr-caps text-center "><span class="text-muted-2">Night Bars</span></div>
														</div>
													</li>
												</ul>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- Nearest Services -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card mb-4">
							<div class="card-header">
								<h4 class="fs-5 mb-0">Nearest Services</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-start mb-4">
									<div class="col-xl-2 col-lg-3 col-md-4">
										<h5 class="fs-6 fw-semibold mb-0">Transport</h5>
									</div>
									<div class="col-xl-10 col-lg-9 col-md-8">
										<div class="row align-items-start">

											<div class="col-xl-12 col-lg-12 col-md-12">
												<ul class="row align-items-center p-0 mb-0">
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first">Metro:<span class="text-dark ms-2">Lavender</span></div>
															<div class="explot-distance"><span class="text-muted">360m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first">Metro:<span class="text-dark ms-2">Jalan Besar MRT</span>
															</div>
															<div class="explot-distance"><span class="text-muted">80m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first">Airport:<span class="text-dark ms-2">Singapore Changi
																	Airport</span></div>
															<div class="explot-distance"><span class="text-muted">160m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first">Train:<span class="text-dark ms-2">Woodlands Train
																	Checkpoint</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row align-items-start mb-4">
									<div class="col-xl-2 col-lg-3 col-md-4">
										<h5 class="fs-6 fw-semibold mb-0">Landmarks</h5>
									</div>
									<div class="col-xl-10 col-lg-9 col-md-8">
										<div class="row align-items-start">

											<div class="col-xl-12 col-lg-12 col-md-12">
												<ul class="row align-items-center p-0 mb-0">
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Sentosa</span></div>
															<div class="explot-distance"><span class="text-muted">360m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Gardens by the Bay</span></div>
															<div class="explot-distance"><span class="text-muted">80m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">S.E.A. Aquarium</span></div>
															<div class="explot-distance"><span class="text-muted">160m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Singapore Flyer</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Wings Of Time</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Sands SkyPark</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row align-items-start mb-4">
									<div class="col-xl-2 col-lg-3 col-md-4">
										<h5 class="fs-6 fw-semibold mb-0">Dining</h5>
									</div>
									<div class="col-xl-10 col-lg-9 col-md-8">
										<div class="row align-items-start">

											<div class="col-xl-12 col-lg-12 col-md-12">
												<ul class="row align-items-center p-0 mb-0">
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">SYMMETRY</span></div>
															<div class="explot-distance"><span class="text-muted">360m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Tai Hwa Pork Noodle</span>
															</div>
															<div class="explot-distance"><span class="text-muted">80m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Sungei Road Laksa</span></div>
															<div class="explot-distance"><span class="text-muted">160m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">The Dim Sum Place</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">The Ramen Stall</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Taliwang Restaurant</span>
															</div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row align-items-start mb-4">
									<div class="col-xl-2 col-lg-3 col-md-4">
										<h5 class="fs-6 fw-semibold mb-0">Shopping</h5>
									</div>
									<div class="col-xl-10 col-lg-9 col-md-8">
										<div class="row align-items-start">

											<div class="col-xl-12 col-lg-12 col-md-12">
												<ul class="row align-items-center p-0 mb-0">
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Bugis Street</span></div>
															<div class="explot-distance"><span class="text-muted">360m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Mustafa Centre</span></div>
															<div class="explot-distance"><span class="text-muted">80m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Bugis Junction</span></div>
															<div class="explot-distance"><span class="text-muted">160m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Tekka Centre</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Orchard Central</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">Ngee Ann City</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
													<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="explot-first"><span class="text-dark ms-2">ION Orchard</span></div>
															<div class="explot-distance"><span class="text-muted">200m</span></div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Guests Reviews -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card mb-4">
							<div class="card-header">
								<h4 class="fs-5 mb-0">Guests Reviews</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-center mb-4">
									<div class="col-xl-2 col-lg-3 col-md-4">
										<div class="rounded-3 bg-primary full-width">
											<div class="py-4 px-3 text-center">
												<h3 class="text-light display-2 fw-semibold mb-0">92</h3>
												<p class="text-light lh-base m-0">Extraordinary 786 Reviews</p>
											</div>
										</div>
									</div>
									<div class="col-xl-10 col-lg-9 col-md-8">
										<div class="row align-items-start">

											<div class="col-xl-12 col-lg-12 col-md-12">
												<ul class="row align-items-center p-0 mb-0 gy-3 gx-4">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
														<div class="revs-wraps">
															<div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
																<span class="text-dark fw-semibold text-md">Dishes</span>
																<span class="text-dark fw-semibold text-md">8.7</span>
															</div>
															<div class="progress " role="progressbar" aria-label="Example" aria-valuenow="87"
																aria-valuemin="0" aria-valuemax="100" style="height: 7px">
																<div class="progress-bar bg-primary" style="width: 87%"></div>
															</div>
														</div>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
														<div class="revs-wraps">
															<div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
																<span class="text-dark fw-semibold text-md">Swimming</span>
																<span class="text-dark fw-semibold text-md">9.2</span>
															</div>
															<div class="progress " role="progressbar" aria-label="Example" aria-valuenow="92"
																aria-valuemin="0" aria-valuemax="100" style="height: 7px">
																<div class="progress-bar bg-primary" style="width: 92%"></div>
															</div>
														</div>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
														<div class="revs-wraps">
															<div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
																<span class="text-dark fw-semibold text-md">Rooms</span>
																<span class="text-dark fw-semibold text-md">8.8</span>
															</div>
															<div class="progress " role="progressbar" aria-label="Example" aria-valuenow="88"
																aria-valuemin="0" aria-valuemax="100" style="height: 7px">
																<div class="progress-bar bg-primary" style="width: 88%"></div>
															</div>
														</div>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
														<div class="revs-wraps">
															<div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
																<span class="text-dark fw-semibold text-md">Location</span>
																<span class="text-dark fw-semibold text-md">8.9</span>
															</div>
															<div class="progress " role="progressbar" aria-label="Example" aria-valuenow="89"
																aria-valuemin="0" aria-valuemax="100" style="height: 7px">
																<div class="progress-bar bg-primary" style="width: 89%"></div>
															</div>
														</div>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
														<div class="revs-wraps">
															<div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
																<span class="text-dark fw-semibold text-md">Services</span>
																<span class="text-dark fw-semibold text-md">9.2</span>
															</div>
															<div class="progress " role="progressbar" aria-label="Example" aria-valuenow="92"
																aria-valuemin="0" aria-valuemax="100" style="height: 7px">
																<div class="progress-bar bg-primary" style="width: 92%"></div>
															</div>
														</div>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
														<div class="revs-wraps">
															<div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
																<span class="text-dark fw-semibold text-md">Cleanliness</span>
																<span class="text-dark fw-semibold text-md">8.6</span>
															</div>
															<div class="progress " role="progressbar" aria-label="Example" aria-valuenow="86"
																aria-valuemin="0" aria-valuemax="100" style="height: 7px">
																<div class="progress-bar bg-primary" style="width: 86%"></div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="row align-items-center">
									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="gstRevws-groups">

											<!-- Single Reviwws -->
											<div class="single-gstRevws rounded-2 border p-2 d-flex align-items-start mb-3">
												<div class="single-gstRevws-thumb">
													<div class="rounded-2 overflow-hidden w-25 h-25">
														<img src="assets/img/team-1.jpg" class="img-fluid" alt="">
													</div>
												</div>
												<div class="single-gstRevws-caps ps-3">
													<div class="gstRevws-head d-flex align-items-start justify-content-between">
														<div class="dfls-headers">
															<h5 class="h6 text-dark fw-semibold mb-0">Adam Bluecart</h5>
															<p class="text-md mb-0">Canada</p>
														</div>
														<div class="dfls-arrios"><span class="text-muted text-md">10 July 2023</span></div>
													</div>
													<div class="dfls-secription">
														<p class="mb-0">In a free hour, But in certain circumstances and owing to the claims of
															duty or the obligations of business when our power of choice is untrammelled and when
															nothing prevents our being able to do what we like best, every pleasure is to be
															welcomed and every pain avoided.</p>
													</div>
												</div>
											</div>

											<!-- Single Reviwws -->
											<div class="single-gstRevws rounded-2 border p-2 d-flex align-items-start mb-3">
												<div class="single-gstRevws-thumb">
													<div
														class="rounded-2 bg-light-purple d-flex align-items-center justify-content-center overflow-hidden w-25 h-25">
														<h3 class="m-0 fs-1 fw-semibold text-purple">K</h3>
													</div>
												</div>
												<div class="single-gstRevws-caps ps-3">
													<div class="gstRevws-head d-flex align-items-start justify-content-between">
														<div class="dfls-headers">
															<h5 class="h6 text-dark fw-semibold mb-0">Adam Bluecart</h5>
															<p class="text-md mb-0">Canada</p>
														</div>
														<div class="dfls-arrios"><span class="text-muted text-md">10 July 2023</span></div>
													</div>
													<div class="dfls-secription">
														<p class="mb-0">In a free hour, But in certain circumstances and owing to the claims of
															duty or the obligations of business when our power of choice is untrammelled and when
															nothing prevents our being able to do what we like best, every pleasure is to be
															welcomed and every pain avoided.</p>
													</div>
												</div>
											</div>

											<!-- Single Reviwws -->
											<div class="single-gstRevws rounded-2 border p-2 d-flex align-items-start mb-3">
												<div class="single-gstRevws-thumb">
													<div class="rounded-2 overflow-hidden w-25 h-25">
														<img src="assets/img/team-3.jpg" class="img-fluid" alt="">
													</div>
												</div>
												<div class="single-gstRevws-caps ps-3">
													<div class="gstRevws-head d-flex align-items-start justify-content-between">
														<div class="dfls-headers">
															<h5 class="h6 text-dark fw-semibold mb-0">Adam Bluecart</h5>
															<p class="text-md mb-0">Canada</p>
														</div>
														<div class="dfls-arrios"><span class="text-muted text-md">10 July 2023</span></div>
													</div>
													<div class="dfls-secription">
														<p class="mb-0">In a free hour, But in certain circumstances and owing to the claims of
															duty or the obligations of business when our power of choice is untrammelled and when
															nothing prevents our being able to do what we like best, every pleasure is to be
															welcomed and every pain avoided.</p>
													</div>
												</div>
											</div>


											<!-- Single Reviwws -->
											<div class="show-morerewsbox mb-3">
												<div class="text-center" role="alert">
													<a href="hotel-detail-2.php#" class="fw-medium text-primary">Load More Guest Reviews<i
															class="fa-solid fa-caret-down ms-2"></i></a>
												</div>
											</div>

											<!-- submit Reviews -->
											<div class="sbms-rewsbox">
												<div class="alert alert-success text-center" role="alert">
													Login your account to submit reviews <a href="hotel-detail-2.php#" class="text-dark">Login</a>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- FAQ -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="row align-items-start justify-content-between gx-3">
							<div class="col-xl-3 col-lg-4 col-md-4">
								<div class="position-relative mb-4">
									<h4 class="lh-base">FAQ Regarding The Royal Plaza Scout</h4>
								</div>
								<div class="position-relative mb-4">
									<button class="btn btn-md btn-primary fw-medium" type="button">Submit Request</button>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8 col-md-8">
								<div class="accordion accordion-flush" id="accordionFlushExample">
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
												How To Book A resort with Booer.com?
											</button>
										</h2>
										<div id="flush-collapseOne" class="accordion-collapse collapse"
											data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">In a professional context it often happens that private or corporate
												clients corder a publication to be made and presented with the actual content still not being
												ready. Think of a news blog that's filled with content hourly on the day of going live. However,
												reviewers tend to be distracted by comprehensible content, say, a random text copied from a
												newspaper or the internet. The are likely to focus on the text, disregarding the layout and its
												elements.</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
												Can We Pay After Check-out?
											</button>
										</h2>
										<div id="flush-collapseTwo" class="accordion-collapse collapse"
											data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">In a professional context it often happens that private or corporate
												clients corder a publication to be made and presented with the actual content still not being
												ready. Think of a news blog that's filled with content hourly on the day of going live. However,
												reviewers tend to be distracted by comprehensible content, say, a random text copied from a
												newspaper or the internet. The are likely to focus on the text, disregarding the layout and its
												elements.</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
												Is This Collaborate with Oyo?
											</button>
										</h2>
										<div id="flush-collapseThree" class="accordion-collapse collapse"
											data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">In a professional context it often happens that private or corporate
												clients corder a publication to be made and presented with the actual content still not being
												ready. Think of a news blog that's filled with content hourly on the day of going live. However,
												reviewers tend to be distracted by comprehensible content, say, a random text copied from a
												newspaper or the internet. The are likely to focus on the text, disregarding the layout and its
												elements.</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
												Can We get Any Transport For Walk?
											</button>
										</h2>
										<div id="flush-collapseFour" class="accordion-collapse collapse"
											data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">In a professional context it often happens that private or corporate
												clients corder a publication to be made and presented with the actual content still not being
												ready. Think of a news blog that's filled with content hourly on the day of going live. However,
												reviewers tend to be distracted by comprehensible content, say, a random text copied from a
												newspaper or the internet. The are likely to focus on the text, disregarding the layout and its
												elements.</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
												data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
												Can We Get Any Extra Services?
											</button>
										</h2>
										<div id="flush-collapseFive" class="accordion-collapse collapse"
											data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">In a professional context it often happens that private or corporate
												clients corder a publication to be made and presented with the actual content still not being
												ready. Think of a news blog that's filled with content hourly on the day of going live. However,
												reviewers tend to be distracted by comprehensible content, say, a random text copied from a
												newspaper or the internet. The are likely to focus on the text, disregarding the layout and its
												elements.</div>
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


		<!-- ============================ Similar Hotels Start ================================== -->
		<section>
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Similar Hotels & Resorts</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="hotel-detail-2.php#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12 p-0">
						<div class="main-carousel cols-3 dots-full">

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem">
									<a href="hotel-detail-2.php#" class="card rounded-3 border br-dashed m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/hotel/hotel-8.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Value Hotel Balestier</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Delhi</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3.5 Km From Delhi</span>
												</p>

												<div class="touritem-centrio mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation Till 10 Aug 23</span></div>
													<div class="aments-lists mt-2">
														<ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Cooling</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Pet Allow</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Free WiFi</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Food</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Parking</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Spa & Massage</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="trsms-foots mt-4">
												<div class="flts-flex d-flex align-items-end justify-content-between">
													<div class="flts-flex-strat">
														<div class="d-flex align-items-center justify-content-start">
															<span class="label bg-seegreen text-light">15% Off</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="text-dark fw-bold fs-4">US$59</div>
															<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
														</div>
														<div class="d-flex align-items-start flex-column">
															<div class="text-muted-2 text-sm">Per Night</div>
														</div>
													</div>

													<div class="flts-flex-end">
														<div class="row align-items-center justify-content-end gx-2">
															<div class="col-auto text-start text-md-end">
																<div class="text-md text-dark fw-medium">Exceptional</div>
																<div class="text-md text-muted-2">3,014 reviews</div>
															</div>
															<div class="col-auto">
																<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem">
									<a href="hotel-detail-2.php#" class="card rounded-3 border br-dashed m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/hotel/hotel-5.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Mercure Singapore Tyrwhitt</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Delhi</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3.5 Km From Delhi</span>
												</p>

												<div class="touritem-centrio mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation Till 10 Aug 23</span></div>
													<div class="aments-lists mt-2">
														<ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Cooling</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Pet Allow</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Free WiFi</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Food</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Parking</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Spa & Massage</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="trsms-foots mt-4">
												<div class="flts-flex d-flex align-items-end justify-content-between">
													<div class="flts-flex-strat">
														<div class="d-flex align-items-center justify-content-start">
															<span class="label bg-seegreen text-light">15% Off</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="text-dark fw-bold fs-4">US$59</div>
															<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
														</div>
														<div class="d-flex align-items-start flex-column">
															<div class="text-muted-2 text-sm">Per Night</div>
														</div>
													</div>

													<div class="flts-flex-end">
														<div class="row align-items-center justify-content-end gx-2">
															<div class="col-auto text-start text-md-end">
																<div class="text-md text-dark fw-medium">Exceptional</div>
																<div class="text-md text-muted-2">3,014 reviews</div>
															</div>
															<div class="col-auto">
																<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem">
									<a href="hotel-detail-2.php#" class="card rounded-3 border br-dashed m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/hotel/hotel-4.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Hotel Calmo Chinatown</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Delhi</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3.5 Km From Delhi</span>
												</p>

												<div class="touritem-centrio mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation Till 10 Aug 23</span></div>
													<div class="aments-lists mt-2">
														<ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Cooling</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Pet Allow</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Free WiFi</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Food</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Parking</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Spa & Massage</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="trsms-foots mt-4">
												<div class="flts-flex d-flex align-items-end justify-content-between">
													<div class="flts-flex-strat">
														<div class="d-flex align-items-center justify-content-start">
															<span class="label bg-seegreen text-light">15% Off</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="text-dark fw-bold fs-4">US$59</div>
															<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
														</div>
														<div class="d-flex align-items-start flex-column">
															<div class="text-muted-2 text-sm">Per Night</div>
														</div>
													</div>

													<div class="flts-flex-end">
														<div class="row align-items-center justify-content-end gx-2">
															<div class="col-auto text-start text-md-end">
																<div class="text-md text-dark fw-medium">Exceptional</div>
																<div class="text-md text-muted-2">3,014 reviews</div>
															</div>
															<div class="col-auto">
																<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem">
									<a href="hotel-detail-2.php#" class="card rounded-3 border br-dashed m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/hotel/hotel-3.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Royal Plaza on Scotts</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Delhi</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3.5 Km From Delhi</span>
												</p>

												<div class="touritem-centrio mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation Till 10 Aug 23</span></div>
													<div class="aments-lists mt-2">
														<ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Cooling</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Pet Allow</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Free WiFi</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Food</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Parking</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Spa & Massage</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="trsms-foots mt-4">
												<div class="flts-flex d-flex align-items-end justify-content-between">
													<div class="flts-flex-strat">
														<div class="d-flex align-items-center justify-content-start">
															<span class="label bg-seegreen text-light">15% Off</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="text-dark fw-bold fs-4">US$59</div>
															<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
														</div>
														<div class="d-flex align-items-start flex-column">
															<div class="text-muted-2 text-sm">Per Night</div>
														</div>
													</div>

													<div class="flts-flex-end">
														<div class="row align-items-center justify-content-end gx-2">
															<div class="col-auto text-start text-md-end">
																<div class="text-md text-dark fw-medium">Exceptional</div>
																<div class="text-md text-muted-2">3,014 reviews</div>
															</div>
															<div class="col-auto">
																<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem">
									<a href="hotel-detail-2.php#" class="card rounded-3 border br-dashed m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/hotel/hotel-2.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<h4 class="city fs-6 m-0 fw-bold">
													<span>Dorsett Singapore</span>
												</h4>
												<p class="detail ellipsis-container">
													<span class="ellipsis-item__normal">Delhi</span>
													<span class="separate ellipsis-item__normal"></span>
													<span class="ellipsis-item">3.5 Km From Delhi</span>
												</p>

												<div class="touritem-centrio mt-4">
													<div class="d-block position-relative"><span class="label bg-light-success text-success">Free
															Cancellation Till 10 Aug 23</span></div>
													<div class="aments-lists mt-2">
														<ul class="p-0 row gx-3 gy-2 align-items-start flex-wrap">
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Cooling</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Pet Allow</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Free WiFi</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Food</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Parking</li>
															<li class="col-auto text-dark text-md text-muted-2 d-inline-flex align-items-center"><i
																	class="fa-solid fa-check text-success me-1"></i>Spa & Massage</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="trsms-foots mt-4">
												<div class="flts-flex d-flex align-items-end justify-content-between">
													<div class="flts-flex-strat">
														<div class="d-flex align-items-center justify-content-start">
															<span class="label bg-p text-light">15% Off</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="text-dark fw-bold fs-4">US$59</div>
															<div class="text-muted-2 fw-medium text-decoration-line-through ms-2">US$79</div>
														</div>
														<div class="d-flex align-items-start flex-column">
															<div class="text-muted-2 text-sm">Per Night</div>
														</div>
													</div>

													<div class="flts-flex-end">
														<div class="row align-items-center justify-content-end gx-2">
															<div class="col-auto text-start text-md-end">
																<div class="text-md text-dark fw-medium">Exceptional</div>
																<div class="text-md text-muted-2">3,014 reviews</div>
															</div>
															<div class="col-auto">
																<div class="square--40 rounded-2 bg-primary text-light">4.8</div>
															</div>
														</div>
													</div>
												</div>
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
		    <?php require_once('./home_footer.php') ?>
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

		<a id="back2Top" class="top-scroll" title="Back to top" href="hotel-detail-2.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<?php require_once('./script.php') ?>

	<script>
		lightbox.option({
			'resizeDuration': 200,
			'wrapAround': true
		})
	</script>
</body>

</html>