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
                        <h2 class="mt-30 page-title">Customers</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                            <li class="breadcrumb-item active">Customer Edit</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Edit Customer</h4>
									</div>
									<div class="card-body-table">
										<?php
										if (isset($_GET['uid'])) {
	                                         $uid=base64_decode($_GET['uid']);
	                              
					                            require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';

				                                    $sql = "SELECT * FROM users WHERE uid=$uid";
				                                    $stmt = mysqli_stmt_init($conn);
				                                    if (!mysqli_stmt_prepare($stmt,$sql)) {
				    	                                 header("Location: ../customer_edit.php?error=sqlerror");
				                                         exit(); 	
				    	                               }
				    	                            else 
				    	                           {
				    	                           	 mysqli_stmt_execute($stmt);
				    	                           	 $result = mysqli_stmt_get_result($stmt);
				                                    if(mysqli_num_rows($result)>0)
				                                    { 
				                                       while ($row = mysqli_fetch_assoc($result)) {
				                                       
				?>
										<div class="news-content-right pd-20">
											<form>
											<div class="form-group">
												<label class="form-label">Name*</label>
												<input type="text" class="form-control" value="<?php echo $row["uidUsers"]; ?>" placeholder="Enter Full Name" >
											</div>
											
											<div class="form-group">
												<label class="form-label">Email*</label>
												<input type="email" class="form-control" value="<?php echo $row["uemail"]; ?>" placeholder="Enter Email Address">
											</div>
											<div class="form-group">
												<label class="form-label">Phone*</label>
												<input type="text" class="form-control" value="<?php echo $row["uphone"]; ?>" placeholder="Enter Phone Number">
											</div>
										
											<div class="form-group">
												<label class="form-label">Address*</label>
												<div class="card card-editor">
													<div class="content-editor">
													<input type="text" class="form-control" value="need to add" placeholder="Enter Address">

													</div>
												</div>
											</div>
											<button class="save-btn hover-btn" type="submit">Save Changes</button>
											</form>
										</div> 
								
									  <?php 
											      }
				                                   }
				                                }}
				                                
				                                    ?>
				                                    	</div>
								</div>
							</div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-footer mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                              <div class="text-muted-1">© 2020 <b>In-Gro Supermarket</b>. by <a href="https://themeforest.net/user/In-Grolthemes">Siddharth-Raveena-Deeksha</a></div>
                            <div class="footer-links">
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
