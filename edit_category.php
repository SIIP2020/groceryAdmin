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
                        <h2 class="mt-30 page-title">Categories</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="category.php">Categories</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Edit Category</h4>
									</div>
									<div class="card-body-table">
										<?php 
										if (isset($_GET['cat_id'])) {
	                                       $cid=base64_decode($_GET['cat_id']);
                							require '/xampp/htdocs/groceryAdmin/includes/dbh.inc.php';
                                           

				                              $sql = "SELECT * from category where cat_id=$cid";
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
				?>
										
										<div class="news-content-right pd-20">	

										<form action="includes/edit_category.php" method="post" enctype="multipart/form-data">										
											<div class="form-group">
												<label class="form-label">Name*</label>
												<input type="text" class="form-control" name="name" value="<?php echo $row['cat_name'];?>" placeholder="Category Name">
											</div>
											<div class="form-group">
												<label class="form-label">Status*</label>
												<select id="status" name="status" class="form-control" value="<?php echo $row['status'];?>">
													<option value="Active">Active</option>
													<option value="Inactive">Inactive</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Category Image*</label>
								                <img width="100" height="100" src="<?php echo $image_src;?>" >																

												<div class="input-group">

													<div class="custom-file">

														<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="file">
														<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
													</div>
												</div>
											</div>
											<input type="hidden" name="cat_id" value="<?php echo $cid;?>"  >
											<button class="save-btn hover-btn" type="submit" name="submit">Save Changes</button>
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
                           <i class="uil uil-copyright"></i>Copyright 2020 <b>Siddharth-Raveena-Deeksha</b> . All rights reserved  <div class="footer-links">
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
