<?php 
  $title = "My Profile";
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



		<!-- ============================ User Dashboard Menu ============================ -->
	      <?php require_once('./account_navbar.php') ?>
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
								<h4><i class="fa-solid fa-file-invoice me-2"></i>Personal Information</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-center justify-content-start">

									<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
										<div class="d-flex align-items-center">
											<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
												<!-- Avatar place holder -->
												<span class="avatar avatar-xl">
													<img id="uploadfile-1-preview"
														class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/img/team-1.jpg"
														alt="">
												</span>
											</label>
											<!-- Upload button -->
											<label class="btn btn-sm btn-light-primary px-4 fw-medium mb-0" for="uploadfile-1">Change</label>
											<input id="uploadfile-1" class="form-control d-none" type="file">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">First Name</label>
											<input type="text" class="form-control" value="Adam K">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Last Name</label>
											<input type="text" class="form-control" value="Divliars">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Email ID</label>
											<input type="text" class="form-control" value="adamkruck@gmail.com">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Mobile</label>
											<input type="text" class="form-control" value="9856542563">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Date of Birth</label>
											<input type="date" class="form-control" value="02/04/2000">
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Gender</label>
											<input type="text" class="form-control" value="Male">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label class="form-label">About Info</label>
											<textarea
												class="form-control ht-120">Lorem ipsum dolor sit amet, nec virtute nusquam ex. Ex sed diceret constituam inciderint, accusamus imperdiet has te. Id qui liber nemore semper, modus appareat philosophia ut eam. Assum tibique singulis at mel.</textarea>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card mb-4">
							<div class="card-header">
								<h4><i class="fa-solid fa-envelope-circle-check me-2"></i>Update Your Email</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-center justify-content-start">

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label class="form-label">Email Address</label>
											<input type="email" class="form-control" placeholder="update your new email">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="text-end">
											<a href="my-profile.php#" class="btn btn-md btn-primary mb-0">Update Email</a>
										</div>
									</div>

								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h4><i class="fa-solid fa-lock me-2"></i>Update Password</h4>
							</div>
							<div class="card-body">
								<div class="row align-items-center justify-content-start">

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label class="form-label">Old Password</label>
											<input type="password" class="form-control" placeholder="*********">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label class="form-label">New Password</label>
											<input type="password" class="form-control" placeholder="*********">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="form-group">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control" placeholder="*********">
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12">
										<div class="text-end">
											<a href="my-profile.php#" class="btn btn-md btn-primary mb-0">Change Password</a>
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
		  <?php
		    require_once('./home_footer.php') 
		  ?>
		<!-- ============================ Footer End ================================== -->

	

		<!-- Print Invoice -->
		<div class="modal modal-lg fade" id="invoice" tabindex="-1" role="dialog" aria-labelledby="invoicemodal"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered invoice-pop-form" role="document">
				<div class="modal-content" id="invoicemodal">
					<div class="modal-header">
						<h4 class="modal-title fs-6">Download your invoice</h4>
						<a href="my-profile.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
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
										<a href="my-profile.php#" class="btn btn-sm btn-light-success fw-medium me-2">Download Invoice</a>
										<a href="my-profile.php#" class="btn btn-sm btn-light-primary fw-medium me-2">Print Invoice</a>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Choose Currency Modal -->
		<div class="modal modal-lg fade" id="currencyModal" tabindex="-1" aria-labelledby="currenyModalLabel"
		  aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title fs-6" id="currenyModalLabel">Select Your Currency</h4>
				<a href="my-profile.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
			  </div>
			  <div class="modal-body">
				<div class="allCurrencylist">

				  <div class="suggestedCurrencylist-wrap mb-4">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">Suggested Currency For you</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">United State Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Pound Sterling</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency active" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Indian Rupees</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Euro</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Australian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Thai Baht</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				  <div class="suggestedCurrencylist-wrap">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">All Currencies</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">United State Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Property currency</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Argentine Peso</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Azerbaijani Manat</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Australian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Bahraini Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Brazilian Real</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Bulgarian Lev</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Canadian Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Chilean Peso</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Colombian Peso</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Danish Krone</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Egyptian Pound</div>
							<div class="text-muted-2 text-md text-uppercase">USD</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Hungarian Forint</div>
							<div class="text-muted-2 text-md text-uppercase">GBP</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Japanese Yen</div>
							<div class="text-muted-2 text-md text-uppercase">EUR</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Jordanian Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">Inr</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Kuwaiti Dinar</div>
							<div class="text-muted-2 text-md text-uppercase">aud</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Malaysian Ringgit</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCurrency" href="my-profile.php#">
							<div class="text-dark text-md fw-medium">Singapore Dollar</div>
							<div class="text-muted-2 text-md text-uppercase">thb</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				</div>
			  </div>
			</div>
		  </div>
		</div>


		<!-- Choose Countries Modal -->
		<div class="modal modal-lg fade" id="countryModal" tabindex="-1" aria-labelledby="countryModalLabel"
		  aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title fs-6" id="countryModalLabel">Select Your Country</h4>
				<a href="my-profile.php#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
					class="fa-solid fa-square-xmark"></i></a>
			  </div>
			  <div class="modal-body">
				<div class="allCountrieslist">

				  <div class="suggestedCurrencylist-wrap mb-4">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">Suggested Countries For you</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/united-kingdom.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Pound Sterling</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry active" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Indian Rupees</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Euro</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Thai Baht</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				  <div class="suggestedCurrencylist-wrap">
					<div class="d-inline-block mb-0 ps-3">
					  <h5 class="fs-6 fw-bold">All Countries</h5>
					</div>
					<div class="suggestedCurrencylists">
					  <ul
						class="row align-items-center justify-content-start row-cols-xl-4 row-cols-lg-3 row-cols-2 gy-2 gx-3 m-0 p-0">
						<li class="col">
							<a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/united-states.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">United State Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/vietnam.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Property currency</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Argentine Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Azerbaijani Manat</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/japan.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Australian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/flag.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Bahraini Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/portugal.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Brazilian Real</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/italy.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Bulgarian Lev</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Canadian Dollar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Chilean Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/european.png" class="img-fluid circle"
								width="35" alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Colombian Peso</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/china.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Danish Krone</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Egyptian Pound</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/belgium.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Hungarian Forint</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/turkey.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Japanese Yen</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/spain.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Jordanian Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/germany.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Kuwaiti Dinar</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/france.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Malaysian Ringgit</div>
						  </a>
						</li>
						<li class="col">
						  <a class="selectCountry" href="my-profile.php#">
							<div class="d-inline-block"><img src="assets/img/flag/brazil.png" class="img-fluid circle" width="35"
								alt=""></div>
							<div class="text-dark text-md fw-medium ps-2">Singapore Dollar</div>
						  </a>
						</li>
					  </ul>
					</div>
				  </div>

				</div>
			  </div>
			</div>
		  </div>
		</div>


		<a id="back2Top" class="top-scroll" title="Back to top" href="my-profile.php#"><i class="fa-solid fa-sort-up"></i></a>


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