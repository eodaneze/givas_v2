<?php 
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
		    <?php require_once('./home_navbar.php') ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ Booking Page ================================== -->
		<section class="pt-4 gray-simple position-relative">
			<div class="container">

				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div id="stepper" class="bs-stepper stepper-outline mb-5">
							<div class="bs-stepper-header">
								<!-- Step 1 -->
								<div class="step completed" data-target="#step-1">
									<div class="text-center">
										<button type="button" class="step-trigger mb-0" id="steppertrigger1">
											<span class="bs-stepper-circle"><i class="fa-solid fa-check"></i></span>
										</button>
										<h6 class="bs-stepper-label d-none d-md-block">Tour Review</h6>
									</div>
								</div>
								<div class="line"></div>

								<!-- Step 2 -->
								<div class="step active" data-target="#step-2">
									<div class="text-center">
										<button type="button" class="step-trigger mb-0" id="steppertrigger2">
											<span class="bs-stepper-circle">2</span>
										</button>
										<h6 class="bs-stepper-label d-none d-md-block">Traveler Info</h6>
									</div>
								</div>
								<div class="line"></div>

								<!-- Step 3 -->
								<div class="step" data-target="#step-3">
									<div class="text-center">
										<button type="button" class="step-trigger mb-0" id="steppertrigger3">
											<span class="bs-stepper-circle">3</span>
										</button>
										<h6 class="bs-stepper-label d-none d-md-block">Make Payment</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row align-items-start">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="div-title d-flex align-items-center mb-3">
							<h4>Guests Detail</h4>
						</div>
						<div class="row align-items-start">
							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="card mb-3">
									<div class="card-header">
										<h4>Guest 01</h4>
									</div>
									<div class="card-body">
										<div class="row">

											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Date of Birth</label>
													<input type="date" class="form-control">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Passport Number</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="card mb-3">
									<div class="card-header">
										<h4>Guest 02</h4>
									</div>
									<div class="card-body">
										<div class="row">

											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Date of Birth</label>
													<input type="date" class="form-control fw-semibold text-muted">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Passport Number</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="card mb-3">
									<div class="card-header">
										<h4>Guest 03</h4>
									</div>
									<div class="card-body">
										<div class="row">

											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Date of Birth</label>
													<input type="date" class="form-control">
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Passport Number</label>
													<input type="text" class="form-control" placeholder="Passport Number">
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>

							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="side-block card rounded-2 p-3">
									<h5 class="fw-semibold fs-6">Reservation Summary</h5>
									<div class="mid-block rounded-2 border br-dashed p-2 mb-3">
										<div class="row align-items-center justify-content-between g-2 mb-4">
											<div class="col-6">
												<div class="gray rounded-2 p-2">
													<span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Check-In</span>
													<p class="text-dark fw-semibold lh-base text-md mb-0">27 Aug 2023</p>
													<span class="text-dark text-md">From 14:40</span>
												</div>
											</div>
											<div class="col-6">
												<div class="gray rounded-2 p-2">
													<span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Check-Out</span>
													<p class="text-dark fw-semibold lh-base text-md mb-0">31 Aug 2023</p>
													<span class="text-dark text-md">By 11:50</span>
												</div>
											</div>
										</div>
										<div class="row align-items-center justify-content-between mb-4">
											<div class="col-12">
												<p class="text-muted-2 text-sm text-uppercase fw-medium mb-1">Total Length of Stay:</p>
												<div class="d-flex align-items-center">
													<div class="square--30 circle text-seegreen bg-light-seegreen"><i
															class="fa-regular fa-calendar"></i></div><span class="text-dark fw-semibold ms-2">3 Days \
														2 Night</span>
												</div>
											</div>
										</div>
										<div class="row align-items-center justify-content-between">
											<div class="col-12">
												<p class="text-muted-2 text-sm text-uppercase fw-medium mb-1">You Selected</p>
												<div class="d-flex align-items-center flex-column">
													<p class="mb-0">King Bed Appolo Resort with 3 Rooms. <a href="bookingpage-02.php#"
															class="fw-medum text-primary">Change your Selection</a></p>
												</div>
											</div>
										</div>
									</div>

									<div class="bott-block d-block mb-3">
										<h5 class="fw-semibold fs-6">Your Price Summary</h5>
										<ul class="list-group list-group-borderless">
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium mb-0">Rooms & Offers</span>
												<span class="fw-semibold">$750.52</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium mb-0">Total Discount<span
														class="badge rounded-1 text-bg-danger smaller mb-0 ms-2">10% off</span></span>
												<span class="fw-semibold">-$7.50</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium mb-0">8% Taxes % Fees</span>
												<span class="fw-semibold">$10.10</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-center">
												<span class="fw-medium text-success mb-0">Total Price</span>
												<span class="fw-semibold text-success">$772.40</span>
											</li>
										</ul>
									</div>
									<div class="bott-block">
										<button class="btn fw-medium btn-primary full-width" type="button">Request To Book</button>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="text-center d-flex align-items-center justify-content-center mt-4">
							<a href="booking-page.php" class="btn btn-md btn-dark fw-semibold mx-2"><i
									class="fa-solid fa-arrow-left me-2"></i>Previous</a>
							<a href="bookingpage-03.php" class="btn btn-md btn-primary fw-semibold mx-2">Make Your Payment<i
									class="fa-solid fa-arrow-right ms-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Booking Page End ================================== -->


		<!-- ============================ Footer Start ================================== -->
		<?php require_once('./home_footer.php') ?>
		<!-- ============================ Footer End ================================== -->

		


		<a id="back2Top" class="top-scroll" title="Back to top" href="bookingpage-02.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<?php require_once('./script.php') ?>

</body>

</html>