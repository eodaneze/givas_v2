<?php 
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
			require_once('./home_header.php');
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
								<li class="breadcrumb-item"><a href="rental-detail.php#" class="text-primary">Home</a></li>
								<li class="breadcrumb-item"><a href="rental-detail.php#" class="text-primary">Rental</a></li>
								<li class="breadcrumb-item active" aria-current="page">Vashundhara Real Estate</li>
							</ol>
						</nav>
					</div>

					<!-- Gallery & Info -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card border-0 p-3 mb-4">

							<div class="crd-heaader d-md-flex align-items-center justify-content-between mb-3">
								<div class="crd-heaader-first">
									<div class="d-inline-flex align-items-center mb-1">
										<span class="label fw-medium bg-light-success text-success">Apartment</span>
									</div>
									<div class="d-block">
										<h4 class="mb-0">Vashundhara Real Estate</h4>
										<div class="explotter">
											<p class="detail ellipsis-container fw-semibold">
												<span class="ellipsis-item__normal">3 Beds</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">2 Baths</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">2200 SqFt</span>
												<span class="separate ellipsis-item__normal"></span>
												<span class="ellipsis-item">2022</span>
											</p>
										</div>
									</div>
								</div>
								<div class="crd-heaader-last my-md-0 my-2">
									<div class="drix-wrap d-flex flex-column align-items-md-end align-items-start text-end">
										<div class="drix-first d-flex align-items-center text-end mb-2">
											<a href="rental-detail.php#" class="bg-light-info text-info rounded-1 fw-medium text-sm px-3 py-2 lh-base"><i
													class="fa-solid fa-bookmark me-2"></i>Bookmark</a>
											<a href="rental-detail.php#"
												class="bg-light-danger text-danger rounded-1 fw-medium text-sm px-3 py-2 lh-base ms-2"><i
													class="fa-solid fa-share-nodes me-2"></i>Share</a>
										</div>
										<div class="drix-last">
											<span class="label bg-light-success text-success">Free Cancellation within a week</span>
										</div>
									</div>
								</div>
							</div>

							<div class="crd-body">
								<div class="row align-items-center justify-content-between">
									<div class="col-xl-8 col-lg-7 col-md-12">
										<div class="galleryGrid typeGrid_2 mb-lg-0 mb-3">
											<div class="galleryGrid__item relative d-flex">
												<a href="assets/img/property/img-2.jpg" data-lightbox="roadtrip"><img src="assets/img/property/img-2.jpg"
														alt="image" class="rounded-2 img-fluid"></a>
											</div>

											<div class="galleryGrid__item position-relative">
												<a href="assets/img/property/img-3.jpg" data-lightbox="roadtrip"><img src="assets/img/property/img-3.jpg"
														alt="image" class="rounded-2 img-fluid"></a>
												<div class="position-absolute end-0 bottom-0 mb-3 me-3">
													<a href="assets/img/property/img-4.jpg" data-lightbox="roadtrip"
														class="btn btn-md btn-whites fw-medium text-dark"><i
															class="fa-solid fa-caret-right me-1"></i>16 More Photos</a>
												</div>
											</div>
											<div class="galleryGrid__item">
												<a href="assets/img/property/img-4.jpg" data-lightbox="roadtrip"><img src="assets/img/property/img-4.jpg"
														alt="image" class="rounded-2 img-fluid"></a>
											</div>
											<div class="galleryGrid__item">
												<a href="assets/img/property/img-5.jpg" data-lightbox="roadtrip"><img src="assets/img/property/img-5.jpg"
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
													<a href="rental-detail.php#" class="btn btn-primary btn-sm px-4 fw-semibold text-uppercase">Login</a>
												</div>
											</div>
											<div class="card-body">
												<div class="d-block mb-3">
													<div class="d-flex align-items-center justify-content-start">
														<div class="text-dark fw-bold fs-3 me-2">$3000</div>
														<div class="text-muted-2 fw-medium text-decoration-line-through me-2">US$4500</div>
														<div class="text-warning fw-semibold">40% Off</div>
													</div>
													<div class="d-flex align-items-start justify-content-start">
														<div class="text-muted-2 text-md">inclusive of all taxes</div>
													</div>
												</div>
												<div class="d-block">

													<div class="form-group">
														<label class="form-label">Your name</label>
														<input type="text" class="form-control" value="Enter Your Name">
													</div>

													<div class="form-group mb-4">
														<label class="form-label">Mobile number</label>
														<input type="text" class="form-control" value="Contact Number">
													</div>

													<div class="form-group mb-3">
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
														<button type="button" class="btn btn-primary full-width fw-medium">Contact Agents</button>
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

					<!-- Login Alert -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="d-flex align-items-center justify-content-start py-3 px-3 rounded-2 bg-success mb-4">
							<p class="text-light fw-semibold m-0"><i class="fa-solid fa-gift text-warning me-2"></i><a href="rental-detail.php#"
									class="text-white text-decoration-underline">Login</a> or <a href="rental-detail.php#"
									class="text-white text-decoration-underline">Register</a> to earn upto 100 coins (approx 1.72 US$)
								after check-out.
							<p>
						</div>
					</div>

					<!-- Cab Details -->
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

					<!-- Cab Information -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card mb-4">
							<div class="card-header">
								<h4 class="fs-5 mb-0">Cab Information</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-start">

									<div class="col-xl-12 col-lg-12 col-md-12">
										<ul class="row align-items-center p-0 mb-0 gx-4 gx-lg-5">
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">User</span>
													<span class="fw-medium text-muted">4 Guest</span>
												</div>
											</li>
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">Modal</span>
													<span class="fw-medium text-muted">Maruti</span>
												</div>
											</li>
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">Make</span>
													<span class="fw-medium text-muted">2020</span>
												</div>
											</li>
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">Fuel</span>
													<span class="fw-medium text-muted">Diesel</span>
												</div>
											</li>
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">Mileage</span>
													<span class="fw-medium text-muted">16Km/L</span>
												</div>
											</li>
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">Version</span>
													<span class="fw-medium text-muted">2nd Top</span>
												</div>
											</li>
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">Condition</span>
													<span class="fw-medium text-muted">Full AC</span>
												</div>
											</li>
											<li class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<span class="fw-medium text-dark">luggage</span>
													<span class="fw-medium text-muted">2 luggage bags</span>
												</div>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>

					</div>

					<!-- Inclusions & Exclusions -->
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card mb-4">
							<div class="card-header">
								<h4 class="fs-5 mb-0">Inclusions & Exclusions</h4>
							</div>
							<div class="card-body">
								<div class="expott-info mb-4">
									<h5>Inclusions</h5>
									<ul class="row align-items-center p-0 g-3">
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-success me-2"></i>State tax
										</li>
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-success me-2"></i> Toll charge
										</li>
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-success me-2"></i>Driver Allowance
										</li>
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-success me-2"></i>Only one pickup and drop
										</li>
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-success me-2"></i>Inter-city Transfers
										</li>
									</ul>
								</div>
								<div class="expott-info">
									<h5>Exclusions</h5>
									<ul class="row align-items-center p-0 g-3">
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-danger me-2"></i>Fare beyond 600kms
										</li>
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-danger me-2"></i>Airport entry charge
										</li>
										<li class="col-md-6">
											<i class="fa-regular fa-circle-dot text-danger me-2"></i>Dinner
										</li>
									</ul>
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
													<a href="rental-detail.php#" class="fw-medium text-primary">Load More Guest Reviews<i
															class="fa-solid fa-caret-down ms-2"></i></a>
												</div>
											</div>

											<!-- submit Reviews -->
											<div class="sbms-rewsbox">
												<div class="alert alert-success text-center" role="alert">
													Login your account to submit reviews <a href="rental-detail.php#" class="text-dark">Login</a>
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
		<section class="py-5">
			<div class="container">

				<div class="row align-items-center justify-content-between mb-3">
					<div class="col-8">
						<div class="upside-heading">
							<h5 class="fw-bold fs-6 m-0">Similar Hotels & Resorts</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="text-end grpx-btn">
							<a href="rental-detail.php#" class="btn btn-light-primary btn-md fw-medium">More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></a>
						</div>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12 p-0">
						<div class="main-carousel cols-3 arrow-hide">

							<!-- Single Item -->
							<div class="carousel-cell">
								<div class="pop-touritem">
									<a href="rental-detail.php#" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/property/img-1.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<div class="d-flex align-items-start justify-content-start flex-column">
													<span class="city-destination label text-success bg-light-success mb-1">House</span>
													<h4 class="city fs-title m-0 fw-bold">
														<span>Equitable Property Group</span>
													</h4>
												</div>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">3 Beds</span>
													<span class="ellipsis">2 Baths</span>
													<span class="ellipsis">2100 sqft</span>
													<span class="ellipsis">1 Store</span>
												</div>
											</div>
											<div class="flight-footer">
												<div class="epocsic">
													<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
													<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
															class="price">US$492</span></h5>
												</div>
												<div class="rates">
													<div class="star-rates">
														<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i>
													</div>
													<div class="rat-reviews">
														<strong>4.6</strong><span>(142 Reviews)</span>
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
									<a href="rental-detail.php#" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/property/img-2.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<div class="d-flex align-items-start justify-content-start flex-column">
													<span class="city-destination label text-success bg-light-success mb-1">Villa</span>
													<h4 class="city fs-title m-0 fw-bold">
														<span>Apogee Property Advisors</span>
													</h4>
												</div>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">3 Beds</span>
													<span class="ellipsis">2 Baths</span>
													<span class="ellipsis">2100 sqft</span>
													<span class="ellipsis">1 Store</span>
												</div>
											</div>
											<div class="flight-footer">
												<div class="epocsic">
													<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
													<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
															class="price">US$492</span></h5>
												</div>
												<div class="rates">
													<div class="star-rates">
														<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i>
													</div>
													<div class="rat-reviews">
														<strong>4.6</strong><span>(142 Reviews)</span>
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
									<a href="rental-detail.php#" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/property/img-3.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<div class="d-flex align-items-start justify-content-start flex-column">
													<span class="city-destination label text-success bg-light-success mb-1">Apartment</span>
													<h4 class="city fs-title m-0 fw-bold">
														<span>Landmark Realty Group</span>
													</h4>
												</div>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">3 Beds</span>
													<span class="ellipsis">2 Baths</span>
													<span class="ellipsis">2100 sqft</span>
													<span class="ellipsis">1 Store</span>
												</div>
											</div>
											<div class="flight-footer">
												<div class="epocsic">
													<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
													<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
															class="price">US$492</span></h5>
												</div>
												<div class="rates">
													<div class="star-rates">
														<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i>
													</div>
													<div class="rat-reviews">
														<strong>4.6</strong><span>(142 Reviews)</span>
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
									<a href="rental-detail.php#" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/property/img-4.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<div class="d-flex align-items-start justify-content-start flex-column">
													<span class="city-destination label text-success bg-light-success mb-1">Condos</span>
													<h4 class="city fs-title m-0 fw-bold">
														<span>Cobblestone Realty Partners</span>
													</h4>
												</div>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">3 Beds</span>
													<span class="ellipsis">2 Baths</span>
													<span class="ellipsis">2100 sqft</span>
													<span class="ellipsis">1 Store</span>
												</div>
											</div>
											<div class="flight-footer">
												<div class="epocsic">
													<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
													<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
															class="price">US$492</span></h5>
												</div>
												<div class="rates">
													<div class="star-rates">
														<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i>
													</div>
													<div class="rat-reviews">
														<strong>4.6</strong><span>(142 Reviews)</span>
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
									<a href="rental-detail.php#" class="card rounded-3 border m-0">
										<div class="flight-thumb-wrapper">
											<div class="popFlights-item-overHidden">
												<img src="assets/img/property/img-5.jpg" class="img-fluid" alt="">
											</div>
										</div>
										<div class="touritem-middle position-relative p-3">
											<div class="touritem-flexxer">
												<div class="d-flex align-items-start justify-content-start flex-column">
													<span class="city-destination label text-success bg-light-success mb-1">Building</span>
													<h4 class="city fs-title m-0 fw-bold">
														<span>Magnolia Group Real Estate</span>
													</h4>
												</div>
												<div class="detail ellipsis-container mt-3">
													<span class="ellipsis">3 Beds</span>
													<span class="ellipsis">2 Baths</span>
													<span class="ellipsis">2100 sqft</span>
													<span class="ellipsis">1 Store</span>
												</div>
											</div>
											<div class="flight-footer">
												<div class="epocsic">
													<span class="label d-inline-flex bg-light-danger text-danger mb-1">15% Off</span>
													<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span
															class="price">US$492</span></h5>
												</div>
												<div class="rates">
													<div class="star-rates">
														<i class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i><i class="fa-solid fa-star active"></i><i
															class="fa-solid fa-star active"></i>
													</div>
													<div class="rat-reviews">
														<strong>4.6</strong><span>(142 Reviews)</span>
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
		 <?php 
		   require_once('./home_footer.php')
		 ?>
		<!-- ============================ Footer End ================================== -->

		


		<a id="back2Top" class="top-scroll" title="Back to top" href="rental-detail.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<?php 
	   require_once('./script.php')
	?>
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