<?php 
   $title = "Transaction History";
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
								<h4><i class="fa-solid fa-wallet me-2"></i>Transaction History</h4>
							</div>
							
						</div>

						<!-- Personal Information -->
						<div class="card mb-4">
							<div class="card-header">
								<h4><i class="fa-solid fa-file-invoice-dollar me-2"></i>Billing History</h4>
							</div>
							<div class="card-body">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Transaction ID</th>
											<th scope="col">Date</th>
											<th scope="col">Status</th>
											<th scope="col">Amout</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th>01</th>
											<td>BK32154</td>
											<td>10 Sep 2023</td>
											<td><span class="badge bg-light-success text-success fw-medium text-uppercase">Paid</span></td>
											<td><span class="text-md fw-medium text-dark">$240</span></td>
										</tr>
										<tr>
											<th>02</th>
											<td>BK32155</td>
											<td>08 Aug 2023</td>
											<td><span class="badge bg-light-warning text-warning fw-medium text-uppercase">UnPaid</span></td>
											<td><span class="text-md fw-medium text-dark">$240</span></td>
										</tr>
										<tr>
											<th>03</th>
											<td>BK32156</td>
											<td>10 Aug 2023</td>
											<td><span class="badge bg-light-info text-info fw-medium text-uppercase">Hold</span></td>
											<td><span class="text-md fw-medium text-dark">$240</span></td>
										</tr>
										<tr>
											<th>04</th>
											<td>BK32157</td>
											<td>22 Jul 2023</td>
											<td><span class="badge bg-light-seegreen text-seegreen fw-medium text-uppercase">completed</span>
											</td>
											<td><span class="text-md fw-medium text-dark">$240</span></td>
										</tr>
										<tr>
											<th>05</th>
											<td>BK32158</td>
											<td>16 Jun 2023</td>
											<td><span class="badge bg-light-danger text-danger fw-medium text-uppercase">cancel</span></td>
											<td><span class="text-md fw-medium text-dark">$240</span></td>
										</tr>
										<tr>
											<th>06</th>
											<td>BK32159</td>
											<td>20 May 2023</td>
											<td><span class="badge bg-light-info text-info fw-medium text-uppercase">hold</span></td>
											<td><span class="text-md fw-medium text-dark">$240</span></td>
										</tr>
										<tr>
											<th>07</th>
											<td>BK32160</td>
											<td>18 Apr 2023</td>
											<td><span class="badge bg-light-seegreen text-seegreen fw-medium text-uppercase">completed</span>
											</td>
											<td><span class="text-md fw-medium text-dark">$240</span></td>
										</tr>
									</tbody>
								</table>
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
						<a href="payment-detail.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
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
										<table class="table">
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
										<a href="payment-detail.php#" class="btn btn-sm btn-light-success fw-medium me-2">Download Invoice</a>
										<a href="payment-detail.php#" class="btn btn-sm btn-light-primary fw-medium me-2">Print Invoice</a>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		


		<a id="back2Top" class="top-scroll" title="Back to top" href="payment-detail.php#"><i class="fa-solid fa-sort-up"></i></a>


	</div>
	<?php require_once('./script.php') ?>

</body>

</html>