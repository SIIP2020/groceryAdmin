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
	<title>Gambo Supermarket Admin</title>
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
                        <h2 class="mt-30 page-title">Areas</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="areas.php">Areas</a></li>
                            <li class="breadcrumb-item active">Add Area</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-5 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Add New Area</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="form-group">
												<label class="form-label">Name*</label>
												<input type="text" type="text" class="form-control" placeholder="Area Name">
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
												<label class="form-label">Status*</label>
												<select id="status" name="status" class="form-control">
													<option selected>Active</option>
													<option value="1">Inactive</option>
												</select>
											</div>
											<button class="save-btn hover-btn" type="submit">Add New</button>
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
                            <i class="uil uil-copyright"></i>Copyright 2020 <b>Siddharth-Raveena-Deeksha</b> . All rights reserved
                            <div class="footer-links">
                                <a href="http://In-Gro.net/html-items/gambo_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                                <a href="http://In-Gro.net/html-items/gambo_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
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
