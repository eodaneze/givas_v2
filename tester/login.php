<?php 
   $title = "Login";
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
										<img src="assets/img/login.png" class="img-fluid" alt="">
									</div>
									<!-- Divider -->
									<div class="vr opacity-1 d-none d-lg-block"></div>
								</div>

								<!-- Information -->
								<div class="col-lg-6 order-1">
									<div class="p-3 p-sm-4 p-md-5">
										<!-- Logo -->
										<a href="index.php">
											<img class="img-fluid mb-4" src="assets/img/logo-1.png" width="70" alt="logo">
										</a>
										<!-- Title -->
										<h1 class="mb-2 fs-2">Welcome Back!</h1>
										<p class="mb-0">Are you new here?<a href="./register" class="fw-medium text-primary"> Create an
												account</a></p>

										<!-- Form START -->
										<form class="mt-4 text-start">
											<div class="form py-4">
												<div class="form-floating mb-4">
													<input type="email" class="form-control" placeholder="name@example.com" required="">
													<label>User Name</label>
												</div>
												<div class="form-floating mb-4">
													<input type="password" class="form-control" id="password-field" name="password" placeholder="Password"  required="">
													<label>Password</label>
													<span
														class="toggle-password position-absolute top-50 end-0 translate-middle-y me-3 fa-regular fa-eye"></span>
												</div>

												<div class="form-group">
													<button type="submit" class="bg-primary text-white text-uppercase full-width font--bold btn-lg">Log In</button>
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
											</div>

											

											<!-- Copyright -->
											<div class="text-primary-hover mt-3 text-center"> Copyrights ©<?=date('Y') . ' ' . $sitName?></div>
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
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<?php 
	  require_once('./script.php')
	?>

</body>

</html>