<?php
 session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-In-Grolthemes" content="">
	<meta name="author-In-Grolthemes" content="">
	<title>In-Gro Supermarket Admin</title>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	
</head>

    <body class="sb-nav-fixed">
      <?php 
        	require "header.php";
        ?>
        <div id="layoutSidenav">
           
           <?php 
        	require "sidebar.php";
        	?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Orders</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-3 col-md-4">
								<div class="bulk-section mb-30">
									<div class="input-group">
										<select id="action" name="action" class="form-control">
											<option selected>Bulk Actions</option>
											<option value="1">Pending</option>
											<option value="2">Cancel</option>
											<option value="3">Process</option>
											<option value="4">Complete</option>
											<option value="5">Delete</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Apply</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mb-30">
									<div class="search-by-name-input">
										<input type="text" class="form-control" placeholder="Search">
									</div>
									<div class="input-group">
										<select id="categeory" name="categeory" class="form-control">
											<option value="1">Pending</option>
											<option value="2">Cancel</option>
											<option value="3">Process</option>
											<option value="4">Complete</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Search Order</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>All Orders</h4> 
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox" class="check-all"></th>
														<th style="width:130px">Order ID</th>
														<th>Item</th>
														<th style="width:200px">Date</th>
														<th style="width:300px">Address</th>
														<th style="width:130px">Status</th>
														<th style="width:130px">Total</th>
														<th style="width:100px">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
														<td>ORDER12345</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">15/06/2020</span>
															<span class="delivery-time">4:00PM - 6.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$90</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
														<td>ORDER12346</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">13/06/2020</span>
															<span class="delivery-time">2:00PM - 4.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														 <td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$105</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
														<td>ORDER12347</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">13/6/2020</span>
															<span class="delivery-time">5:00PM - 7.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$60</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
														<td>ORDER12348</td>
														<td>
															<a href="#" target="_blank">Product Title Here</a>
														</td>
														<td>
															<span class="delivery-time">12/06/2020</span>
															<span class="delivery-time">01:00PM - 3.00PM</span>
														</td>
														<td>#0000, St No. 8, Shahid Karnail Singh Nagar, MBD Mall, Frozpur road, Ludhiana, 141001</td>
														<td>
															<span class="badge-item badge-status">Pending</span>
														</td>
														<td>$120</td>
														<td class="action-btns">
															<a href="order_view.php" class="views-btn"><i class="fas fa-eye"></i></a>
															<a href="order_edit.php" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-footer mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
  <div class="text-muted-1">© 2020 <b>In-Gro Supermarket</b>. by <a href="https://themeforest.net/user/In-Grolthemes">Siddharth-Raveena-Deeksha</a></div>                            <div class="footer-links">
                                <a href="http://In-Grolthemes.net/html-items/In-Gro_supermarket_demo/privacy_policy.php">Privacy Policy</a>
                                <a href="http://In-Grolthemes.net/html-items/In-Gro_supermarket_demo/term_and_conditions.php">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
       
    </body>

</html>
