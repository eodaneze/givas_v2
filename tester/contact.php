<?php 
  $title = "Contact";
  require_once('./home_navbar.php');
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


		<!-- ============================ Booking Title ================================== -->
		<section class="bg-cover position-relative" style="background:url(assets/img/bg-title.jpg)no-repeat;" data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-12">

						<div class="fpc-capstion text-center my-4">
							<div class="fpc-captions">
								<h1 class="xl-heading text-light">Get-in Touch</h1>
								<!-- <p class="text-light">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline is taken for type specimens</p> -->
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Booking Title ================================== -->


		<!-- ============================ Form Section ================================== -->
		<section class="gray-simple">
			<div class="container">

				<div class="row align-items-center justify-content-between g-4">

					<div class="col-xl-7 col-lg-7 col-md-12">
						<div class="contactForm">
							<form>
								<div class="row align-items-center">

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="touch-block d-flex flex-column mb-4">
											<h2>Drop Us a Line</h2>
											<p>Get in touch via form below and we will reply as soos as we can. </p>
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Your Name</label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">eMail ID</label>
											<input type="email" class="form-control">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Phone No.</label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Subject</label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label class="form-label">Your Query</label>
											<textarea class="form-control ht-120"></textarea>
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group mb-0">
											<button type="button" class="btn fw-medium btn-primary">Send Message<i
													class="fa-solid fa-paper-plane ms-2"></i></button>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card p-4 rounded-4 border br-dashed text-center mb-4">
							<div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-briefcase"></i>
							</div>
							<div class="crds-desc">
								<h5>Drop a Mail</h5>
								<p class="text-md lh-2 mb-0">support@eaglewaystt.com<br>info@eaglewaystt.com</p>
							</div>
						</div>

						<div class="card p-4 rounded-4 border br-dashed text-center">
							<div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-headset"></i>
							</div>
							<div class="crds-desc">
								<h5>Call Us</h5>
								<p class="text-md lh-2 mb-0">07011759800<br>08130777543</p>
							</div>
						</div>
					</div>

				</div>

				<div class="row mt-5">
					<div class="col-12">
						<!-- <iframe class="full-width ht-400 grayscale rounded"
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin"
							height="500" style="border:0;" aria-hidden="false" tabindex="0"></iframe> -->

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.633888358651!2d8.097562673502665!3d6.311733225591091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105ca1a5548cee2f%3A0xbb9a2459427bcd39!2sTYCOON%20PLAZA!5e0!3m2!1sen!2sng!4v1741680632297!5m2!1sen!2sng" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							
					</div>
				</div>

			</div>
		</section>
		<!-- ============================ Form Section End ================================== -->


		<!-- ============================ Footer Start ================================== -->
		   <?php 
		      require_once('./home_footer.php')  
		   ?>
		<!-- ============================ Footer End ================================== -->

		


		<a id="back2Top" class="top-scroll" title="Back to top" href="contact-v1.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<?php require_once('./script.php') ?>
</body>

</html>