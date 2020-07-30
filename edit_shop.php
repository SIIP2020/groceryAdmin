<?php
ob_start();
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
                	<?php
                	
                	if (isset($_GET['shop_id'])) {
	                             $sid=base64_decode($_GET['shop_id']);
	                              
				                                    require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';

				                                    $sql = "SELECT shop.shop_name ,shop.shop_image, shop.open_time, shop.close_time, shop.status, shop.street_address, shop.city, shop.state, shop.pincode, shop.gst_no , shop.license_no, vendor.vname ,vendor.vemail,vendor.vphone,vendor.address FROM shop JOIN vendor on shop.vid=vendor.vid where shop.shop_id=$sid";
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
				                                       $image = $row['shop_image'];
				                                       $image_src = "uploads/".$image;?>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Shops</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="shops.php">Shops</a></li>
                            <li class="breadcrumb-item active">Shop view</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-4 col-md-5">
								<div class="card card-static-2 mb-30">
									<div class="card-body-table">
										<div class="shop-content-left pd-20">
											<div class="shop_img">
                                                   <img src="<?php echo $image_src;?>" >																
											</div>
											<div class="shop-dt-left">
												<h4><?php echo $row['shop_name'];?></h4>
												<span><?php echo $row['street_address']. ",". $row['city']. "," .$row['state'];?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="card card-static-2 mb-30">
									<div class="card-body-table">
										<div class="shopowner-content-left pd-20">
											<div class="shopowner-dt-left">
												<h4><?php echo $row['shop_name'];?></h4>
												<span><?php echo $row['vname'];?></span>
											</div>
											<div class="shopowner-dts">
												<div class="shopowner-dt-list">
													<span class="left-dt">Owner Name</span>
													<span class="right-dt"><?php echo $row['vname'];?></span>
												</div>
												<div class="shopowner-dt-list">
													<span class="left-dt">Phone</span>
													<span class="right-dt"><?php echo $row['vphone'];?></span>
												</div>
												<div class="shopowner-dt-list">
													<span class="left-dt">Email</span>
													<span class="right-dt"><?php echo $row['vemail'];?></span>
												</div>
												<div class="shopowner-dt-list">
													<span class="left-dt">Address</span>
													<span class="right-dt"><?php echo $row['address'];?></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-md-7">
								<div class="card card-static-2 mb-30">
									<div class="card-body-table">
										<div class="shopowner-content-left pd-20">
											<div class="card-body-table">
													<form action="includes/edit_shop.inc.php" method="Post" enctype="multipart/form-data">
													<div class="add-shop-content pd-20">
														<div class="form-group">
															<label class="form-label">Name*</label>
															<input type="text" class="form-control" placeholder="Shop Name" value="<?php echo $row["shop_name"]; ?>" name="sname">
														</div>
														<div class="form-group">
															<label class="form-label">GST Number*</label>
															<input type="text" class="form-control" placeholder="GST Number" value="<?php echo $row["gst_no"]; ?>" name="gstno" >
														</div>
														<div class="form-group">
															<label class="form-label">License Number*</label>
															<input type="text" class="form-control" placeholder="Liscence Number" value="<?php echo $row["license_no"]; ?>" name="license">
														</div>
														<div class="form-group">
															<label class="form-label">Address*</label>
															<input type="text" class="form-control" placeholder="Enter Address" value="<?php echo $row["street_address"]; ?>" name="address">
														</div>
														<div class="form-group">
															<label class="form-label">City*</label>
															<input type="text" class="form-control" placeholder="Location" value="<?php echo $row["city"]; ?>" name="city">
														</div>
														<div class="form-group">
															<label class="form-label">State*</label>
															<input type="text" class="form-control" placeholder="Location" value="<?php echo $row["state"]; ?>" name="state">
														</div>
														<div class="form-group">
															<label class="form-label">Pincode*</label>
															<input type="text" class="form-control" placeholder="Location" value="<?php echo $row["pincode"]; ?>" name="pincode">
														</div>
														<div class="form-group">
															<label class="form-label">Opening Time*</label>
															<input type="time" id="default-picker" class="form-control" placeholder="Select time" value="<?php echo $row["open_time"]; ?>" name="optime">
														</div>
														<div class="form-group">
															<label class="form-label">Close Time*</label>
															<input type="time" id="default-picker" class="form-control" placeholder="Select time" value="<?php echo $row["close_time"]; ?>" name="cltime">
														</div>
													
														<div class="form-group">
															<label class="form-label">Status*</label>
															<select id="status" name="status" class="form-control" value="<?php echo $row["status"]; ?>">
																<option selected value="Active">Active</option>
																<option value="Inactive">Inactive</option>
															</select>
														</div>
														<input type="hidden" name="shop_id" value="<?php echo $image_src;?>">
														
														<div class="form-group">
															<label class="form-label">Shop Image*</label>
															<div class="input-group">
																<div class="custom-file">
                                                   <img width="50" height="60" src="<?php echo $sid;?>" >																
					                           	<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="files">
																</div>
															</div>
														</div>
														<button class="save-btn hover-btn" type="submit" name="edit_shop">Save Changes</button>
													</div> 
													</form>
												</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <?php 
											      }
				                                   }
				                                }}
				                                
				                                ob_end_flush();
				                                    ?>
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
