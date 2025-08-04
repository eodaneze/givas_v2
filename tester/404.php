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
		   <?php
		      require_once('./home_navbar.php')  
		   ?>
		<!-- End Navigation -->
		<div class="clearfix"></div>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


		<!-- ============================ 404 Start ================================== -->
		<section class="position-relative">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-12">

						<div class="404-capstion text-center my-4">
							<div class="404-captions">
								<img src="assets/img/404.png" class="img-fluid mb-3" alt="">
								<h1 class="display-1 fw-bold mb-0">404</h1>
								<h2>Ohhh ho, something went wrong!</h2>
								<p class="fs-6">Cicero famously orated against his political opponent.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ 404 End ================================== -->


		<!-- ============================ Footer Start ================================== -->
		  <?php 
		    require_once('./home_footer.php') 
		  ?>
		<!-- ============================ Footer End ================================== -->


		<a id="back2Top" class="top-scroll" title="Back to top" href="404.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<?php 
	   require_once('./script.php')
	?>


</html>