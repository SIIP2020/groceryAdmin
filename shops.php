
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/shops.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 15:38:58 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>In-Gro Supermarket Vendor</title>
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
                            <li class="breadcrumb-item active">Shops</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_shop.html" class="add-btn hover-btn">Add New</a>
							</div>
						
							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mt-30">
									<div class="search-by-name-input">
										<input class="form-control" placeholder="Search">
									</div>
									<div class="input-group">
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Search Product</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Shops</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px">ID</th>
														<th>Shop Name</th>
														<th>Owner Name</th>
														<th style="width: 200px;">Owner Email</th>
														<th style="width: 120px;">Address</th>
														<th style="width: 150px;">GST No.</th>
												        <th style="width: 150px;">License No.</th>
												         <th>Status</th>
														<th>Action</th>

													</tr>
												</thead>
												<?php
				                                    require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';



				                                    $sql = "SELECT shop.shop_id,shop.shop_name , shop.street_address,  shop.gst_no , shop.license_no, vendor.vname ,vendor.vemail FROM shop JOIN vendor on shop.vid=vendor.vid ";
				                                    $stmt = mysqli_stmt_init($conn);
				                                    if (!mysqli_stmt_prepare($stmt,$sql)) {
				    	                                 header("Location: ../index.php?error=sqlerror");
				                                         exit(); 	
				    	                               }
				    	                            else 
				    	                           {
				    	                           	 mysqli_stmt_execute($stmt);
				    	                           	 $result = mysqli_stmt_get_result($stmt);
				                                    if(mysqli_num_rows($result)>0)
				                                    { 
				                                       while ($row = mysqli_fetch_assoc($result)) { ?>
												<tbody>
													<tr>
														<td><?php echo $row['shop_id'];?></td>
														<td><?php echo $row['shop_name'];?></td>
														<td><?php echo $row['vname'];?></td>
														<td><?php echo $row['vemail'];?></td>

														<td><?php echo $row['street_address'];?></td>
														<td><?php echo $row['gst_no'];?></td>
														<td><?php echo $row['license_no'];?></td>


														<td><span class="badge-item badge-status">Active</span></td>
														<td class="action-btns">
															<a href="shop_view.php?shop_id=<?php echo base64_encode($row['shop_id']); ?>" class="view-shop-btn"><i class="fas fa-eye"></i></a>
															<a href="shop_products.php" class="list-btn"><i class="fas fa-list-alt"></i></a>
															<a href="edit_shop.php?shop_id=<?php echo base64_encode($row['shop_id']); ?>" class="edit-btn"><i class="fas fa-edit"></i></a>
														</td>
													</tr>
												</tbody>
												<?php 
											      }
				                                   }
				                                }
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
                            <div class="text-muted-1">© 2020 <b>In-Gro Supermarket</b>. by <a href="https://themeforest.net/user/In-Grolthemes">Siddharth-Raveena-Deeksha</a></div>
                            <div class="footer-links">
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

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/shops.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jun 2020 15:38:59 GMT -->
</html>
