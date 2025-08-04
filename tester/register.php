<?php 
  $title = 'Register';
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
										<img src="assets/img/login.svg" class="img-fluid" alt="">
									</div>
									<!-- Divider -->
									<div class="vr opacity-1 d-none d-lg-block"></div>
								</div>

								<!-- Information -->
								<div class="col-lg-6 order-1">
									<div class="p-4 p-sm-7">
										<!-- Logo -->
										<a href="./">
											<img class="img-fluid mb-4" src="assets/img/logo-1.png" width="70" alt="logo">
										</a>
										<!-- Title -->
										<h1 class="mb-2 fs-2">Create New Account</h1>
										<p class="mb-0">Already a Member?<a href="./login" class="fw-medium text-primary"> Signin</a></p>

										<!-- Form START -->
										<form class="mt-4 text-start">
											<div class="form py-4">
												<div class="row">
													<div class="form-group col-lg-6">
														<label class="form-label">FirstName</label>
														<input type="text" class="form-control" placeholder="Enter firstname">
													</div>
													<div class="form-group col-lg-6">
														<label class="form-label">LastName</label>
														<input type="text" class="form-control" placeholder="Enter lastname">
													</div>

												</div>
												<div class="form-group">
													<label class="form-label">Enter email ID</label>
													<input type="email" class="form-control" placeholder="name@example.com">
												</div>
												<div class="form-group">
													<label class="form-label">Enter Password</label>
													<div class="position-relative">
														<input type="password" class="form-control" id="password-field" name="password"
															placeholder="Password">
														<span
															class="fa-solid fa-eye toggle-password position-absolute top-50 end-0 translate-middle-y me-3"></span>
													</div>
												</div>

												<div class="form-group">
													<label class="form-label">Confirm Password</label>
													<input type="password" class="form-control" placeholder="*********">
												</div>

												<div class="form-group">
													<button type="submit" class="btn bg-primary text-white text-uppercase full-width font--bold btn-lg">Create An
														Account</button>
												</div>

												<div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
													<div class="modal-flex-first">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
															<label class="form-check-label" for="savepassword">Keep me signed in</label>
														</div>
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


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>
    <script src="assets/js/flickity.pkgd.min.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/prism.js"></script>

	<script src="assets/js/custom.js"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>

</html>