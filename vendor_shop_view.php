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
                            <li class="breadcrumb-item"><a href="vendors.php">Vendors</a></li>
                            <li class="breadcrumb-item active">Vendor Details</li>
                        </ol>
                        <div class="row">
                        	<?php
                	
                	           if (isset($_GET['vid'])) {
	                             $vid=base64_decode($_GET['vid']);
	                              
				                                    require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';

				                                    $sql = "SELECT shop.shop_name ,shop.street_address, shop.city, shop.state, shop.pincode, shop.gst_no , shop.license_no FROM vendor JOIN shop on shop.vid=vendor.vid where vendor.vid=$vid";
				                                    $stmt = mysqli_stmt_init($conn);
				                                    if (!mysqli_stmt_prepare($stmt,$sql)) {
				    	                                 header("Location: ../vendor_shop_view.php?error=sqlerror");
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
							<div class="col-lg-4 col-md-5">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Shop Details</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
											<div class="form-group">
												<label class="form-label">Shop Name*</label>
									          <input type="number" class="form-control" placeholder="<?php echo $row['shop_name'];?>"readonly>

											</div>
											<div class="form-group">
												<label class="form-label">Gst No*</label>
												<input type="number" class="form-control" placeholder="<?php echo $row['gst_no'];?>" readonly>
											</div>
											<div class="form-group">
												<label class="form-label">License No.*</label>
									          <input type="number" class="form-control" placeholder="<?php echo $row['license_no'];?>"readonly>

											</div>
											<div class="form-group">
												<label class="form-label">Address*</label>
									          <input type="number" class="form-control" placeholder="<?php echo $row['street_address']. ",". $row['city']. "," .$row['state'];?>" readonly>

											</div>
										</div>
									</div>
								</div>
							</div>

										 <?php 
											      }
				                                   }
				                                }}
				                                
				                                    ?>
							<div class="col-lg-8 col-md-7">
								<div class="all-cate-tags">
									<div class="row justify-content-between">
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
																	
																	<th>Name</th>
																	<th>Image</th>
																	<th>Quantity</th>
																	<th>Price</th>
																	<th>Category</th>
																</tr>
															</thead>
															<?php
                	
                	                                     if (isset($_GET['vid'])) {
	                                                     $vid=base64_decode($_GET['vid']);
	                              
				                                    require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';

				                                    $sql = "SELECT product.Pid ,product.Pname, product.MRP, product.quantity, product.image,category.cat_name FROM product JOIN category on product.cat_id=category.cat_id where product.vid=$vid";
				                                    $stmt = mysqli_stmt_init($conn);
				                                    if (!mysqli_stmt_prepare($stmt,$sql)) {
				    	                                 header("Location: ../shops.php?error=sqlerror");
				                                         exit(); 	
				    	                               }
				    	                            else 
				    	                           {
				    	                           	 mysqli_stmt_execute($stmt);
				    	                           	 $result = mysqli_stmt_get_result($stmt);
				                                    if(mysqli_num_rows($result)>0)
				                                    { 
				                                       while ($row = mysqli_fetch_assoc($result)) {
				                                       $image = $row['image'];
				                                       	$image_src = "uploads/".$image; ?>
															<tbody>
																<tr>
																	
																	<td><?php echo $row['Pname'];?></td>
																	<td><div class="cate-img">
																				<img src="uploads/'.$image.'" alt="">
																			</div>
																		</td>
																	<td><?php echo $row['quantity'];?></td>
																	
																	<td><?php echo $row['MRP'];?></td>								
																	<td><?php echo $row['cat_name'];?></td>						
																</tr>
															
														
																
																
															</tbody>
														 <?php 
											      }
				                                   }
				                                }}
				                                
				                                    ?>
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
