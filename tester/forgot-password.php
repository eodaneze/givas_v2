<?php 
   $title = "Forgot Password";
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

		<!-- ============================== Login Section ================== -->
		<section class="py-5">
			<div class="container">

				<div class="row justify-content-center align-items-center m-auto">
					<div class="col-12">
						<div class="bg-mode shadow rounded-3 overflow-hidden">
							<div class="row g-0">
								<!-- Vector Image -->
								<div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
									<div class="p-3 p-lg-5">
										<img src="assets/img/register.png" class="img-fluid" alt="">
									</div>
									<!-- Divider -->
									<div class="vr opacity-1 d-none d-lg-block"></div>
								</div>

								<!-- Information -->
								<div class="col-lg-6 order-1">
									<div class="p-4 p-sm-7">
										<!-- Logo -->
										<a href="./">
											<img class="img-fluid mb-4" src="assets/img/flight-logo.jpeg" width="70" alt="logo">
										</a>
										<!-- Title -->
										<h1 class="mb-2 fs-2">Forgot Password?</h1>
										<p class="mb-0">Enter the email address associated with an account.</p>

										<!-- Form START -->
										<form class="mt-4 text-start">
											<div class="form py-4">
												<div class="form-group">
													<label class="form-label">Enter your email ID</label>
													<input type="email" class="form-control" placeholder="name@example.com">
												</div>

												<div class="form-group text-center">
													<p class="mb-0">Back to <a href="login.php" class="fw-medium text-primary">Sign in</a></p>
												</div>

												<div class="form-group">
													<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Reset
														Password</button>
												</div>
											</div>

											

											<!-- Copyright -->
											<div class="text-primary-hover mt-3 text-center"> Copyrights <?=date('Y') . ' ' . $sitName?> </div>
										</form>
										<!-- Form END -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================== Login Section End ================== -->

	</div>
	<?php require_once('./script.php') ?>
</body>

</html>