<?php
session_start();
if(isset($_POST['submit'])){
	require 'dbh.inc.php';
   
    $name =$_POST['name'];
    $status=$_POST['status'];
    $fname = $_FILES['file']['name'];
    
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif","svg");

    	

//error handling
//empty fields check
    if(empty($name)||empty($status)) {
       header("Location: ../add_category.php?error=emptyfields&name=".$name."&status".$status);
       exit();
    }

    else 
    { 

         // Check extension
                if( in_array($imageFileType,$extensions_arr) ){                  
             
                // Upload file
                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$fname);

    			$sql = "INSERT INTO category(cat_name, status, image) VALUES(?, ?, ?)";
    			$stmt = mysqli_stmt_init($conn);
                 if (!mysqli_stmt_prepare($stmt,$sql)) {
    	         header("Location: ../register.php?error=sqlerror");
                 exit(); 	
    	        }
    	        else{
                  
    	        	mysqli_stmt_bind_param($stmt,"sss", $name, $status, $fname);
    		        mysqli_stmt_execute($stmt);
    		        header("Location: ../category.php?add_category=success");
                    exit();
    	        }
            }
    		
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
   
}
else
{
	header("Location: ../add_category.php?error");
    exit();
}

?>



