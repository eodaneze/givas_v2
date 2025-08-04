<?php 
    $title = "My Bookings";
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
		 <?php 
		    require_once('./home_navbar.php');
		 ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->



		<!-- ============================ User Dashboard Menu ============================ -->
		  <?php require_once('./account_navbar.php') ?>
		<!-- ============================ End user Dashboard Menu ============================ -->


		<!-- ============================ Booking Page ================================== -->
		<section class="pt-5 gray-simple position-relative">
			<div class="container">

				<?php
				  require_once('./mobile_account_navbar.php')
				?>

				<div class="row align-items-start justify-content-between gx-xl-4">

					<?php require_once('./sidebar.php') ?>

					<div class="col-xl-8 col-lg-8 col-md-12">

						<!-- Personal Information -->
						<div class="card">
							<div class="card-header">
								<h4><i class="fa-solid fa-ticket me-2"></i>My Bookings</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-center justify-content-start">
									<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
										<ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
											<li class="col-md-3 col-6">
												<input type="checkbox" class="btn-check" id="allbkk" checked>
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="allbkk">All
													Booking (24)</label>
											</li>
											<li class="col-md-3 col-6">
												<input type="checkbox" class="btn-check" id="processing">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
													for="processing">Processing (02)</label>
											</li>
											<li class="col-md-3 col-6">
												<input type="checkbox" class="btn-check" id="cancelled">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
													for="cancelled">Cancelled (04)</label>
											</li>
											<li class="col-md-3 col-6">
												<input type="checkbox" class="btn-check" id="completed">
												<label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width"
													for="completed">Completed (10)</label>
											</li>
										</ul>
									</div>
								</div>

								<div class="row align-items-center justify-content-start">
									<div class="col-xl-12 col-lg-12 col-md-12">

										<!-- Single Item -->
										<div class="card border br-dashed mb-4">
											<!-- Card header -->
											<div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
												<!-- Icon and Title -->
												<div class="d-flex align-items-center">
													<div class="square--50 circle bg-light-purple text-purple flex-shrink-0"><i
															class="fa-solid fa-plane"></i></div>
													<!-- Title -->
													<div class="ms-2">
														<h6 class="card-title text-dark fs-5 mb-1">Chicago To San Francisco</h6>
														<ul class="nav nav-divider small">
															<li class="nav-item text-muted">Booking ID: BKR24530</li>
															<li class="nav-item ms-2"><span class="label bg-light-success text-success">Business
																	class</span></li>
														</ul>
													</div>
												</div>

												<!-- Button -->
												<div class="mt-2 mt-md-0">
													<a href="my-booking.php#" class="btn btn-md btn-light-seegreen fw-medium mb-0">Manage Booking</a>
												</div>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<div class="row g-3">
													<div class="col-sm-6 col-md-4">
														<span>Departure time</span>
														<h6 class="mb-0">Fri 12 Aug 14:00 PM</h6>
													</div>

													<div class="col-sm-6 col-md-4">
														<span>Arrival time</span>
														<h6 class="mb-0">Fri 12 Aug 18:00 PM</h6>
													</div>

													<div class="col-md-4">
														<span>Booked by</span>
														<h6 class="mb-0">Daniel Duekaza</h6>
													</div>
												</div>
											</div>
										</div>

										<!-- Single Item -->
										<div class="card border br-dashed mb-4">
											<!-- Card header -->
											<div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
												<!-- Icon and Title -->
												<div class="d-flex align-items-center">
													<div class="square--50 circle bg-light-danger text-danger flex-shrink-0"><i
															class="fa-solid fa-hotel"></i></div>
													<!-- Title -->
													<div class="ms-2">
														<h6 class="card-title text-dark fs-5 mb-1">Dorsett Singapore</h6>
														<ul class="nav nav-divider small">
															<li class="nav-item text-muted">Booking ID: BKR24532</li>
															<li class="nav-item ms-2"><span class="text-dark fw-medium">3Day/4N</span></li>
														</ul>
													</div>
												</div>

												<!-- Button -->
												<div class="mt-2 mt-md-0">
													<a href="my-booking.php#" class="btn btn-md btn-light-seegreen fw-medium mb-0">Manage Booking</a>
												</div>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<div class="row g-3">
													<div class="col-sm-6 col-md-4">
														<span>Check-In</span>
														<h6 class="mb-0">Tue 10 Sep 10:00 AM</h6>
													</div>

													<div class="col-sm-6 col-md-4">
														<span>Check-Out</span>
														<h6 class="mb-0">Tue 14 Sep 18:00 PM</h6>
													</div>

													<div class="col-md-4">
														<span>Total Guest</span>
														<h6 class="mb-0">3 Adult . 2 Child</h6>
													</div>
												</div>
											</div>
										</div>

										<!-- Single Item -->
										<div class="card border br-dashed mb-4">
											<!-- Card header -->
											<div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
												<!-- Icon and Title -->
												<div class="d-flex align-items-center">
													<div class="square--50 circle bg-light-success text-success flex-shrink-0"><i
															class="fa-solid fa-car"></i></div>
													<!-- Title -->
													<div class="ms-2">
														<h6 class="card-title text-dark fs-5 mb-1">Dallas To San Denver</h6>
														<ul class="nav nav-divider small">
															<li class="nav-item text-muted">Booking ID: BKR24534</li>
															<li class="nav-item ms-2"><span class="text-dark fw-medium">Accord, BMW</span></li>
														</ul>
													</div>
												</div>

												<!-- Button -->
												<div class="mt-2 mt-md-0">
													<a href="my-booking.php#" class="btn btn-md btn-light-seegreen fw-medium mb-0">Manage Booking</a>
												</div>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<div class="row g-3">
													<div class="col-sm-6 col-md-4">
														<span>Pickup address</span>
														<h6 class="mb-0">220K.V Jail Road</h6>
													</div>

													<div class="col-sm-6 col-md-4">
														<span>Drop address</span>
														<h6 class="mb-0">11185 Mary Ball Rd</h6>
													</div>

													<div class="col-md-4">
														<span>Booked by</span>
														<h6 class="mb-0">Daniel Duekaza</h6>
													</div>
												</div>
											</div>
										</div>

										<!-- Single Item -->
										<div class="card border br-dashed mb-4">
											<!-- Card header -->
											<div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
												<!-- Icon and Title -->
												<div class="d-flex align-items-center">
													<div class="square--50 circle bg-light-purple text-purple flex-shrink-0"><i
															class="fa-solid fa-plane"></i></div>
													<!-- Title -->
													<div class="ms-2">
														<h6 class="card-title text-dark fs-5 mb-1">Chicago To Houston<label
																class="badge text-danger bg-light-danger fw-medium text-md ms-2">Cancelled</label></h6>
														<ul class="nav nav-divider small">
															<li class="nav-item text-muted">Booking ID: BKR24530</li>
															<li class="nav-item ms-2"><span class="label bg-light-success text-success">Business
																	class</span></li>
														</ul>
													</div>
												</div>

												<!-- Button -->
												<div class="mt-2 mt-md-0">
													<a href="my-booking.php#" class="btn btn-md btn-light-seegreen fw-medium mb-0">ReBooking</a>
												</div>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<div class="row g-3">
													<div class="col-sm-6 col-md-4">
														<span>Departure time</span>
														<h6 class="mb-0">Fri 12 Aug 14:00 PM</h6>
													</div>

													<div class="col-sm-6 col-md-4">
														<span>Arrival time</span>
														<h6 class="mb-0">Fri 12 Aug 18:00 PM</h6>
													</div>

													<div class="col-md-4">
														<span>Booked by</span>
														<h6 class="mb-0">Daniel Duekaza</h6>
													</div>
												</div>
											</div>
										</div>

										<!-- Single Item -->
										<div class="card border br-dashed mb-4">
											<!-- Card header -->
											<div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
												<!-- Icon and Title -->
												<div class="d-flex align-items-center">
													<div class="square--50 circle bg-light-purple text-purple flex-shrink-0"><i
															class="fa-solid fa-plane"></i></div>
													<!-- Title -->
													<div class="ms-2">
														<h6 class="card-title text-dark fs-5 mb-1">Chicago To Houston<label
																class="badge text-info bg-light-info fw-medium text-md ms-2">Processing</label></h6>
														<ul class="nav nav-divider small">
															<li class="nav-item text-muted">Booking ID: BKR24528</li>
															<li class="nav-item ms-2"><span class="label bg-light-success text-success">Business
																	class</span></li>
														</ul>
													</div>
												</div>

												<!-- Button -->
												<div class="mt-2 mt-md-0">
													<a href="my-booking.php#" class="btn btn-md btn-light-seegreen fw-medium mb-0">Edit Booking</a>
												</div>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<div class="row g-3">
													<div class="col-sm-6 col-md-4">
														<span>Departure time</span>
														<h6 class="mb-0">Fri 12 Aug 14:00 PM</h6>
													</div>

													<div class="col-sm-6 col-md-4">
														<span>Arrival time</span>
														<h6 class="mb-0">Fri 12 Aug 18:00 PM</h6>
													</div>

													<div class="col-md-4">
														<span>Booked by</span>
														<h6 class="mb-0">Daniel Duekaza</h6>
													</div>
												</div>
											</div>
										</div>

										<!-- Single Item -->
										<div class="card border br-dashed">
											<!-- Card header -->
											<div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
												<!-- Icon and Title -->
												<div class="d-flex align-items-center">
													<div class="square--50 circle bg-light-purple text-purple flex-shrink-0"><i
															class="fa-solid fa-plane"></i></div>
													<!-- Title -->
													<div class="ms-2">
														<h6 class="card-title text-dark fs-5 mb-1">Chicago To Houston<label
																class="badge text-success bg-light-success fw-medium text-md ms-2">Completed</label>
														</h6>
														<ul class="nav nav-divider small">
															<li class="nav-item text-muted">Booking ID: BKR24530</li>
															<li class="nav-item ms-2"><span class="label bg-light-success text-success">Business
																	class</span></li>
														</ul>
													</div>
												</div>

												<!-- Button -->
												<div class="mt-2 mt-md-0">
													<a href="my-booking.php#" class="btn btn-md btn-light-seegreen fw-medium mb-0">Give Feedback</a>
												</div>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<div class="row g-3">
													<div class="col-sm-6 col-md-4">
														<span>Departure time</span>
														<h6 class="mb-0">Fri 12 Aug 14:00 PM</h6>
													</div>

													<div class="col-sm-6 col-md-4">
														<span>Arrival time</span>
														<h6 class="mb-0">Fri 12 Aug 18:00 PM</h6>
													</div>

													<div class="col-md-4">
														<span>Booked by</span>
														<h6 class="mb-0">Daniel Duekaza</h6>
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
		</section>
		<!-- ============================ Booking Page End ================================== -->


		<!-- ============================ Footer Start ================================== -->
		<?php require_once('./home_footer.php') ?>
		<!-- ============================ Footer End ================================== -->



		


		<a id="back2Top" class="top-scroll" title="Back to top" href="my-booking.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->

	<?php 
	   require_once('./script.php');
	?>

</body>

</html>