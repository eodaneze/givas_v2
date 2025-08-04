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
		<section class="py-4 gray-simple position-relative">
			<div class="container">

				<div class="row align-items-start">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="card mb-3">
							<div class="car-body px-xl-5 px-lg-4 py-lg-5 py-4 px-2">

								<div class="d-flex align-items-center justify-content-center mb-3">
									<div class="square--80 circle text-light bg-success"><i class="fa-solid fa-check-double fs-1"></i>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-center flex-column text-center mb-5">
									<h3 class="mb-0">Your order was confirmed successfully!</h3>
									<p class="text-md mb-0">Booking detail send to: <span
											class="text-primary">paythemezhub@gmail.com</span></p>
								</div>
								<div class="d-flex align-items-center justify-content-center flex-column mb-4">
									<div class="border br-dashed full-width rounded-2 p-3 pt-0">
										<ul class="row align-items-center justify-content-start g-3 m-0 p-0">
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">Order Invoice</p>
													<p class="text-muted mb-0 lh-2">#26545</p>
												</div>
											</li>
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">Date</p>
													<p class="text-muted mb-0 lh-2">24 Aug 2023</p>
												</div>
											</li>
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">Total Amount</p>
													<p class="text-muted mb-0 lh-2">$772.40</p>
												</div>
											</li>
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">Payment Mode</p>
													<p class="text-muted mb-0 lh-2">Visa Card</p>
												</div>
											</li>
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">First Name</p>
													<p class="text-muted mb-0 lh-2">Dhananjay</p>
												</div>
											</li>
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">Last Name</p>
													<p class="text-muted mb-0 lh-2">Verma</p>
												</div>
											</li>
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">Phone</p>
													<p class="text-muted mb-0 lh-2">9584563625</p>
												</div>
											</li>
											<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
												<div class="d-block">
													<p class="text-dark fw-medium lh-2 mb-0">Email</p>
													<p class="text-muted mb-0 lh-2">paythemezhub@gmail.com</p>
												</div>
											</li>
										</ul>
									</div>
								</div>

								<div class="text-center d-flex align-items-center justify-content-center">
									<a href="home-2.php" class="btn btn-md btn-light-seegreen fw-semibold mx-2">Book Next Tour</a>
									<a href="bookingpage-success.php#" data-bs-toggle="modal" data-bs-target="#invoice"
										class="btn btn-md btn-light-primary fw-semibold mx-2">View invoice Print</a>
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

		
		<!-- Print Invoice -->
		<div class="modal modal-lg fade" id="invoice" tabindex="-1" role="dialog" aria-labelledby="invoicemodal"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered invoice-pop-form" role="document">
				<div class="modal-content" id="invoicemodal">
					<div class="modal-header">
						<h4 class="modal-title fs-6">Download your invoice</h4>
						<a href="bookingpage-success.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
								class="fa-solid fa-square-xmark"></i></a>
					</div>
					<div class="modal-body">
						<div class="invoiceblock-wrap p-3">
							<!-- Header -->
							<div class="invoice-header d-flex align-items-center justify-content-between mb-4">
								<div class="inv-fliop01 d-flex align-items-center justify-content-start">
									<div class="inv-fliop01">
										<div class="square--60 circle bg-light-primary text-primary"><i
												class="fa-solid fa-file-invoice fs-2"></i></div>
									</div>
									<div class="inv-fliop01 ps-3">
										<span class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">Invoice #3256425</span>
										<span class="text-sm text-muted lh-2"><i class="fa-regular fa-calendar me-1"></i>Issued Date 12 Jul
											2023</span>
									</div>
								</div>
								<div class="inv-fliop02"><span class="label text-success bg-light-success">Paid</span></div>
							</div>

							<!-- Invoice Body -->
							<div class="invoice-body">

								<!-- Invoice Top Body -->
								<div class="invoice-bodytop">
									<div class="row align-items-start justify-content-between">
										<div class="col-xl-6 col-lg-6 col-md-6">
											<div class="invoice-desc mb-2">
												<h6>From</h6>
												<p class="text-md lh-2 mb-0">#782 Baghambari, Poudery Colony<br>Shivpuras Town,
													Canada<br>QBH230542 USA</p>
											</div>
										</div>
										<div class="col-xl-5 col-lg-5 col-md-6">
											<div class="invoice-desc mb-2">
												<h6>To</h6>
												<p class="text-md lh-2 mb-0">Dhananjay Verma/ Brijendra Mani<br>220 K.V Jail Road Hydel
													Colony<br>271001 Gonda, UP</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Invoice Mid Body -->
								<div class="invoice-bodymid py-2">
									<ul class="gray rounded-3 p-3 m-0">
										<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
											<span class="fw-medium text-sm text-muted-2 mb-0">Account No.:</span>
											<span class="fw-semibold text-muted-2 text-md">************4562</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
											<span class="fw-medium text-sm text-muted-2 mb-0">Reference ID:</span>
											<span class="fw-semibold text-muted-2 text-md">#2326524</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
											<span class="fw-medium text-sm text-muted-2 mb-0">Pay by:</span>
											<span class="fw-semibold text-muted-2 text-md">25 Aug 2023</span>
										</li>
									</ul>
								</div>

								<!-- Invoice bott Body -->
								<div class="invoice-bodybott py-2 mb-2">
									<div class="table-responsive border rounded-2">
										<table class="table mb-0">
											<thead>
												<tr>
													<th scope="col">Item</th>
													<th scope="col">Price</th>
													<th scope="col">Qut.</th>
													<th scope="col">Total Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">king Bed in Royal Resort</th>
													<td>$514</td>
													<td>03</td>
													<td>$514</td>
												</tr>
												<tr>
													<th scope="row">Breakfast for 3</th>
													<td>$214</td>
													<td>03</td>
													<td>$214</td>
												</tr>
												<tr>
													<th scope="row">Tax & VAT</th>
													<td>$78</td>
													<td>-</td>
													<td>$772.40</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="invoice-bodyaction">
									<div class="d-flex text-end justify-content-end align-items-center">
										<a href="bookingpage-success.php#" class="btn btn-sm btn-light-success fw-medium me-2">Download Invoice</a>
										<a href="bookingpage-success.php#" class="btn btn-sm btn-light-primary fw-medium me-2">Print Invoice</a>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		


		<a id="back2Top" class="top-scroll" title="Back to top" href="bookingpage-success.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<?php 
	   require_once('./script.php');
	?>

</body>

</html>