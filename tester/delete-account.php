<?php 
  $title = "Delete Account";
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
			require_once('./home_navbar.php');	
		?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->



		<!-- ============================ User Dashboard Menu ============================ -->
		<?php
			require_once('./account_navbar.php')
		?>
		<!-- ============================ End user Dashboard Menu ============================ -->


		<!-- ============================ Booking Page ================================== -->
		<section class="pt-5 gray-simple position-relative">
			<div class="container">

				<?php require_once('./mobile_account_navbar.php') ?>

				<div class="row align-items-start justify-content-between gx-xl-4">

					<?php require_once('./sidebar.php') ?>

					<div class="col-xl-8 col-lg-8 col-md-12">

						<!-- Personal Information -->
						<div class="card mb-4">
							<div class="card-header">
								<h4><i class="fa-solid fa-trash-can me-2"></i>Delete Your Account</h4>
							</div>
							<div class="card-body">
								<div class="eportledd mb-4">
									<h6>Save Your Data<span class="text-danger">*</span></h6>
									<div class="form-check ps-0">
										Take a backup of your data <a href="delete-account.php#" class="text-primary">Here</a>
									</div>
								</div>
								<form class="mb-3">
									<h6>Enter Your Password</h6>
									<input type="password" class="form-control mb-2" placeholder="*********">
									<button class="btn btn-md btn-success fw-medium">Confirm</button>
								</form>
								<div class="d-sm-flex justify-content-start">
									<button type="button" class="btn btn-md btn-primary fw-medium me-2 mb-0">Keep My Account</button>
									<a href="delete-account.php#" class="btn btn-md btn-light-primary fw-medium mb-0">Delete Account</a>
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

		


		<a id="back2Top" class="top-scroll" title="Back to top" href="delete-account.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<?php 
	   require_once('./script.php');	
	?>

</body>

</html>