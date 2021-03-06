<?php
 session_start();
 require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';

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
                        <h2 class="mt-30 page-title">Shop Request</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Shop Request</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>All Requests</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px">ID</th>
														
														<th>Name</th>
														<th>Email</th>
														<th>Shop Name</th>
														<th>Shop GST No</th>
														<th>Phone</th>
														<th>Address</th>
														<th>Approve Shop Request</th>
														<th>Delete Shop Request</th>
													</tr>
												</thead>
												<?php	$sql = "SELECT * FROM shopreq Where verified='not verified'";
                                                 $stmt = mysqli_stmt_init($conn);
                                                  if (!mysqli_stmt_prepare($stmt,$sql)) {
												       header("Location: ../Shop_request.php?error=sqlerror");
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
												<tbody>
													<tr>
														<td><?php echo $row['req_id'] ?></td>
														
														<td><?php echo $row['owner_nm'] ?></td>
														<td><?php echo $row['email'] ?></td>
														<td><?php echo $row['shop_nm'] ?></td>
														<td><?php echo $row['gst_no'] ?></td>
														<td><?php echo $row['phone'] ?></td>
														<td><?php echo $row['address'] ?></td>
														<?php echo '<td class="action-btns1">
															<div class="col-lg-12">
																<a href="includes/approve_req.php?reqid='.base64_encode($row['req_id']).'&action=approve" class="add-btn hover-btn">Approve </a>
															</div>
														</td>
														<td class="action-btns1">
															<div class="col-lg-12">
																<a href="includes/approve_req.php?reqid='.base64_encode($row['req_id']).'&action=delete" class="add-btn hover-btn">Delete </a>
															</div>
														</td>
													</tr>							
												</tbody>'
												?>
												 <?php 
														  }
														 } }
																		                                
														?>
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
