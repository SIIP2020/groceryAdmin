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
                        <h2 class="mt-30 page-title">General Setting</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">General Setting</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="left-side-tabs">
									<div class="dashboard-left-links">
										<a href="general_setting.html" class="user-item"><i class="fas fa-cogs"></i>Site Setting</a>
										<a href="general_setting_logo.html" class="user-item"><i class="far fa-image"></i>Logo</a>
										<a href="general_setting_favicon.html" class="user-item"><i class="far fa-image"></i>Favicon</a>
										<a href="general_setting_analytics.html" class="user-item"><i class="fas fa-chart-line"></i>Google Analytics</a>
										<a href="general_setting_contact.html" class="user-item active"><i class="fas fa-briefcase"></i>Contact Setting</a>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Contact Setting</h4> 
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label class="form-label">Contact Email*</label>
														<input type="text" type="text" value="In-Grosupermarket@example.com" class="form-control" placeholder="Email">
													</div>
													<div class="form-group">
														<label class="form-label">Contact Phone*</label>
														<input type="text" type="text" value="+918437176189" class="form-control" placeholder="Phone Number">
													</div>
													<div class="form-group">
														<label class="form-label">Contact Location*</label>
														<input type="text" type="text" value="Ludhiana, India" class="form-control" placeholder="Location">
													</div>
													<button class="save-btn hover-btn" type="submit">Save Changes</button>
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
                                <a href="http://In-Grolthemes.net/html-items/In-Gro_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                                <a href="http://In-Grolthemes.net/html-items/In-Gro_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
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
