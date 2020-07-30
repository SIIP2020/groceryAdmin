<?php

 $dbhost = "localhost";
	$dbuser ="root";
 	$dbpass = "";
 	$db     = "grocery2";

 	 	$conn =  mysqli_connect($dbhost,$dbuser,$dbpass,$db);



    if($conn->connect_error) {
 		echo "connection was failed";
 	}



				          $sql = "SELECT product.Pname, product.quantity, product.image, categeory.cat_name where product.cat_id = categeory.cat_id";
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
				                                       while ($row = mysqli_fetch_assoc($result)) {
				                                       	$image = $row['image'];
				                                       	$image_src = "uploads/".$image;
				                                        echo $row['Pname']." ". $row['quantity']." ". $row['cat_name']." ". $image;          
													
				                                    	 }
				                                   }
				                                } 

				                                ?>
