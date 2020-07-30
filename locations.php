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
                        <h2 class="mt-30 page-title">Locations</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Locations</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_location.html" class="add-btn hover-btn">Add New</a>
							</div>
							<div class="col-lg-3 col-md-4">
								<div class="bulk-section mt-30">
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
							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mt-30">
									<div class="search-by-name-input">
										<input type="text" class="form-control" placeholder="Search">
									</div>
									<div class="input-group">
										<select id="categeory" name="categeory" class="form-control">
											<option selected>Active</option>
											<option value="1">Inactive</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Search Location</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Locations</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox" class="check-all"></th>
														<th style="width:60px">ID</th>
														<th>Name</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="7"></td>
														<td>1</td>
														<td>Ludhiana</td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="6"></td>
														<td>2</td>
														<td>Chandigarh</td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="5"></td>
														<td>3</td>
														<td>New Delhi</td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="4"></td>
														<td>4</td>
														<td>Bangaluru</td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="3"></td>
														<td>5</td>
														<td>Mumbai</td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="2"></td>
														<td>6</td>
														<td>Hyderabad</td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
														</td>
													</tr>
													<tr>
														<td><input type="checkbox" class="check-item" name="ids[]" value="1"></td>
														<td>7</td>
														<td>Kolkata</td>
														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
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
                                <a href="http://In-Grolthemes.net/html-items/In-Gro_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                                <a href="http://In-Grolthemes.net/html-items/In-Gro_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
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
