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
                        <h2 class="mt-30 page-title">Products</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="add_product.php" class="add-btn hover-btn">Add New</a>
							</div>
							
							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mt-30">
									<div class="search-by-name-input">
										<input type="text" class="form-control" placeholder="Search">
									</div>
									<div class="input-group">
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Search Products</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Areas</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px">ID</th>
														<th style="width:100px">Image</th>
														<th>Name</th>
														<th>Category</th>
													    <th>Status</th>
														<th>Action</th>
													</tr>
												</thead>

												<?php
				                                    require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';

				                                    $sql = "SELECT product.Pid, product.Pname, product.cat_id, product.quantity, product.image, category.cat_name from product JOIN category on product.cat_id = category.cat_id";
				                                    $stmt = mysqli_stmt_init($conn);
				                                    if (!mysqli_stmt_prepare($stmt,$sql)) {
				    	                                 echo"errorrrr";
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
				                                       	$image_src = "uploads/".$image;
				                                       	if($row['quantity']<5)
				                                       		$st="Not in Stock";
				                                       	else
				                                       		$st="In Stock";
				                                        echo '
				                                        <tbody>
														<tr>
														<td>'.$row["Pid"].'</td>
														<td>
															<div class="cate-img-5">
																<img src="uploads/'.$image.'" alt="">
															</div>
														</td>
														<td>'.$row["Pname"].'</td>
														<td>'.$row["cat_name"].'</td>
														<td><span class="badge-item badge-status">'.$st.'</span></td>
														<td class="action-btns">
															<a href="product_view.php?pid='.base64_encode($row["Pid"]).'" class="view-shop-btn" title="View"><i class="fas fa-eye"></i></a>
															<a href="#" class="edit-btn" title="Edit"><i class="fas fa-edit"></i></a>
														<a href="includes/delete_pro.php?pid='.base64_encode($row["Pid"]).'&action=delete " class="delete-btn" title="delete"><i class="fas fa-trash-alt"></i></a>

														</td>
														</tr>						
																									
													</tbody>

				                                        ';
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
