<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-In-Gro" content="">
	<meta name="author-In-Gro" content="">
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
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="shops.html">Shops</a></li>
                            <li class="breadcrumb-item active">Add Shop</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-12">
								<div class="add-new-shop">
									<div class="card card-static-2 mb-30">
										<div class="row no-gutters">
											<div class="col-lg-6 col-md-6">
												<div class="card-title-2">
													<h4>Add New Shop</h4>
												</div>
												<div class="card-body-table">
													<div class="add-shop-content pd-20">
														<div class="form-group">
															<label class="form-label">Name*</label>
															<input type="text" class="form-control" placeholder="Category Name">
														</div>
														<div class="form-group">
															<label class="form-label">Location*</label>
															<select id="location" name="location" class="form-control">
																<option selected>--Select Location--</option>
																<option value="1">Ludhiana</option>
																<option value="2">Chandigarh</option>
																<option value="3">New Delhi</option>
																<option value="4">Bangaluru</option>
																<option value="5">Mumbai</option>
																<option value="6">Hyderabad</option>
																<option value="7">Kolkata</option>
															</select>
														</div>
														<div class="form-group">
															<label class="form-label">Area*</label>
															<select id="location" name="location" class="form-control">
																<option selected>--Select Area--</option>
																<option value="1">Area Name</option>
																<option value="2">Area Name</option>
																<option value="3">Area Name</option>
																<option value="4">Area Name</option>
																<option value="5">Area Name</option>
																<option value="6">Area Name</option>
																<option value="7">Area Name</option>
															</select>
														</div>
														<div class="form-group">
															<label class="form-label">Category*</label>
															<select id="categtory" name="categtory" class="form-control">
																<option selected>--Select Category--</option>
																<option value="1">Fruits & Vegetables</option>
																<option value="2">Grocery & Staples</option>
																<option value="3">Dairy & Eggs</option>
																<option value="4">Beverages</option>
																<option value="5">Snacks</option>
																<option value="6">Home Care</option>
																<option value="7">Noodles & Sauces</option>
																<option value="8">Personal Care</option>
																<option value="9">Pet Care</option>
																<option value="10">Meat & Seafood</option>
																<option value="11">Electronics</option>
															</select>
														</div>
														<div class="form-group">
															<label class="form-label">Delivery Charge*</label>
															<input class="form-control" placeholder="$0">
														</div>
														<div class="form-group">
															<label class="form-label">Latitude*</label>
															<input class="form-control" placeholder="0">
														</div>
														<div class="form-group">
															<label class="form-label">Longitude*</label>
															<input class="form-control" placeholder="0">
														</div>
														<div class="form-group">
															<label class="form-label">Current Status*</label>
															<select id="status" name="status" class="form-control">
																<option selected>Yes</option>
																<option value="1">No</option>
															</select>
														</div>
														<div class="form-group">
															<label class="form-label">Status*</label>
															<select id="status" name="status" class="form-control">
																<option selected>Active</option>
																<option value="1">Inactive</option>
															</select>
														</div>
														<div class="form-group">
															<label class="form-label">Address*</label>
															<div class="card card-editor">
																<div class="content-editor">
																	 <textarea class="text-control" placeholder="Enter Address"></textarea>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="form-label">Description*</label>
															<div class="card card-editor">
																<div class="content-editor">
																	 <textarea class="text-control" placeholder="Enter Description"></textarea>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="form-label">Shop Image*</label>
															<div class="input-group">
																<div class="custom-file">
																	<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
																	<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
																</div>
															</div>
															<div class="add-cate-img-1">
																<img src="images/shop.svg" alt="">
															</div>
														</div>	
														<button class="save-btn hover-btn" type="submit">Add New Shop</button>
													</div> 
												</div>
											</div>
											<div class="col-lg-6 col-md-6">
												<div class="card-title-2">
													<h4>Add New Shop</h4>
												</div>
												<div class="card-body-table">
													<div class="add-shop-content pd-20">
														<div class="form-group">
															<label class="form-label">Opening Time*</label>
															<input type="time" id="default-picker" class="form-control" placeholder="Select time">
														</div>
														<div class="form-group">
															<label class="form-label">Close Time*</label>
															<input type="time" id="default-picker" class="form-control" placeholder="Select time">
														</div>
													</div>
												</div>
												
												<div class="card-title-2">
													<h4>Shop Owner</h4>
												</div>
												<div class="card-body-table">
													<div class="add-shop-content pd-20">
														<div class="form-group">
															<label class="form-label">Full Name*</label>
															<input class="form-control" type="text" placeholder="Enter Full Name">
														</div>
														<div class="form-group">
															<label class="form-label">Username*</label>
															<input class="form-control" type="text" placeholder="Enter Username">
														</div>
														<div class="form-group">
															<label class="form-label">Email Address*</label>
															<input class="form-control" type="email" placeholder="Enter Email Address">
														</div>
														<div class="form-group">
															<label class="form-label">Phone Number*</label>
															<input class="form-control" type="text" placeholder="Enter Phone Number">
														</div>
														<div class="form-group">
															<label class="form-label">Owner Address*</label>
															<div class="card card-editor">
																<div class="content-editor">
																	 <textarea class="text-control" placeholder="Enter Address"></textarea>
																</div>
															</div>
														</div>
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
                              <div class="text-muted-1">© 2020 <b>In-Gro Supermarket</b>. by <a href="https://themeforest.net/user/In-Gro">Siddharth-Raveena-Deeksha</a></div>
                            <div class="footer-links">
                                <a href="http://In-Gro.net/html-items/In-Gro_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                                <a href="http://In-Gro.net/html-items/In-Gro_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
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
