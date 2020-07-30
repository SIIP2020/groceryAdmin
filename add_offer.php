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
	
	<!-- Tail Select Stylesheets -->
	<link href="vendor/tail.select/css/bootstrap4/tail.select-default.css" rel="stylesheet">
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
                        <h2 class="mt-30 page-title">Offers</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="offers.html">Offers</a></li>
                            <li class="breadcrumb-item active">Add Offer</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Add New Offer</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="form-group">
												<label class="form-label">Title*</label>
												<input type="text" class="form-control" placeholder="Offer Title">
											</div>
											<div class="form-group">
												<label class="form-label">Discount MRP*</label>
												<input type="text" class="form-control" placeholder="$0">
											</div>
											<div class="form-group">
												<label class="form-label">Add Products*</label>
												<select class="form-control select" multiple>
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
												<label class="form-label">Status*</label>
												<select id="status" name="status" class="form-control">
													<option selected>Active</option>
													<option value="1">Inactive</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Offer Image*</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
														<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
													</div>
												</div>
												<div class="offer-img mt-3">
													<img src="images/offers/img-1.jpg" alt="">
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
											<button class="save-btn hover-btn" type="submit">Add New Offer</button>
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
                            <div class="text-muted-1">© 2020 <b>In-Gro Supermarket</b>. by <a href="https://themeforest.net/user/In-Gro">In-Gro</a></div>
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
        <script src="vendor/tail.select/js/tail.select-full.min.js"></script>
        <script src="js/scripts.js"></script>
        <script>
			tail.select(".select");
		</script>

    </body>
</html>
