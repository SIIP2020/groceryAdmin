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
                        <h2 class="mt-30 page-title">Shops</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="shops.php">Shops</a></li>
                            <li class="breadcrumb-item active">Shop Products</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-4 col-md-5">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Add New Product</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="form-group">
												<label class="form-label">Product*</label>
												<select id="categeory" name="categeory" class="form-control">
													<option selected>--Please Product--</option>
													<option value="1">Product Name 1</option>
													<option value="2">Product Name 2</option>
													<option value="3">Product Name 3</option>
													<option value="4">Product Name 4</option>
													<option value="5">Product Name 5</option>
													<option value="6">Product Name 6</option>
													<option value="7">Product Name 7</option>
													<option value="8">Product Name 8</option>
													<option value="9">Product Name 9</option>
													<option value="10">Product Name 10</option>
													<option value="11">Product Name 11</option>
													<option value="12">Product Name 12</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Price*</label>
												<input type="text" class="form-control" placeholder="₹0">
											</div>
											<div class="form-group">
												<label class="form-label">Quantity*</label>
												<input type="number" class="form-control" placeholder="0">
											</div>
											<div class="form-group mb-0">
												<label class="form-label">Status*</label>
												<select id="status" name="status" class="form-control">
													<option selected>Active</option>
													<option value="1">Inactive</option>
												</select>
											</div>
											<button class="save-btn hover-btn" type="submit">Add New Product</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-7">
								<div class="all-cate-tags">
									<div class="row justify-content-between">
										<div class="col-lg-4 col-md-5">
											<div class="bulk-section mb-30">
												<div class="input-group">
													<select id="action" name="action" class="form-control">
														<option selected>Bulk Actions</option>
														<option value="1">Active</option>
														<option value="2">Inactive</option>
														<option value="3">Delete</option>
													</select>
													<div class="input-group-append">
														<button class="status-btn hover-btn" type="submit">Apply</button>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-5 col-md-7">
											<div class="bulk-section text-left mb-30">
												<div class="search-by-name-input mr-0">
													<input type="text" class="form-control" placeholder="Search">
												</div>
												<button class="status-btn hover-btn" type="submit">Search Product</button>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="card card-static-2 mb-30">
												<div class="card-title-2">
													<h4>All Shop Products</h4>
												</div>
												<div class="card-body-table">
													<div class="table-responsive">
														<table class="table ucp-table table-hover">
															<thead>
																<tr>
																	<th style="width:60px"><input type="checkbox" class="check-all"></th>
																	<th style="width:60px">ID</th>
																	<th>Name</th>
																	<th>Quantity</th>
																	<th>Status</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
																	<td>1</td>
																	<td>Product Name Here</td>
																	<td>250</td>
																	<td><span class="badge-item badge-status">Active</span></td>
																	<td class="action-btns">
																		<a href="#" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
																	</td>
																</tr>
																<tr>
																	<td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
																	<td>2</td>
																	<td>Product Name Here</td>
																	<td>100</td>
																	<td><span class="badge-item badge-status">Active</span></td>
																	<td class="action-btns">
																		<a href="#" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
																	</td>
																</tr>
																<tr>
																	<td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
																	<td>3</td>
																	<td>Product Name Here</td>
																	<td>300</td>
																	<td><span class="badge-item badge-status">Active</span></td>
																	<td class="action-btns">
																		<a href="#" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
																	</td>
																</tr>
																<tr>
																	<td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
																	<td>4</td>
																	<td>Product Name Here</td>
																	<td>500</td>
																	<td><span class="badge-item badge-status">Active</span></td>
																	<td class="action-btns">
																		<a href="#" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
																	</td>
																</tr>
																<tr>
																	<td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
																	<td>5</td>
																	<td>Product Name Here</td>
																	<td>200</td>
																	<td><span class="badge-item badge-status">Active</span></td>
																	<td class="action-btns">
																		<a href="#" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
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
		
		<!-- Javascripts -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
		
    </body>

</html>
