<?php
session_start();
 
if (isset($_POST['submit']))
{    
    require 'dbh.inc.php';   
    $catn =$_POST['name'];
    $status=$_POST['status'];  
    $cid=$_POST['cat_id'];


    $fname = $_FILES['file']['name'];
    echo $catn.", ".$status.",".$cid.",".$fname;
    
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
      $extensions_arr = array("jpg","jpeg","png","gif","svg");

 // Check extension
       if( in_array($imageFileType,$extensions_arr) ){                  
             move_uploaded_file($_FILES['files']['tmp_name'],$target_dir.$fname);
         $sql = "UPDATE category SET cat_name=? , status=? , image=? where cat_id=$cid ";
                                     
         $stmt = mysqli_stmt_init($conn);
                    
            if (!mysqli_stmt_prepare($stmt, $sql))
             {
                header("Location: ../edit_category.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "sss", $catn , $status , $fname );
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
 
                header("Location: ../edit_category.php?cat_id=".base64_encode($cid));
                exit();
            }
        
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    }   
}
else
{
    header("Location: ../edit_category.php");
    exit();
}
?>
