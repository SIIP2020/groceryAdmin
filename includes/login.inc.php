<?php

session_start();
if(isset($_POST['login'])){

  require 'dbh.inc.php';
  $mailuid = $_POST['email'];
  $password1 = $_POST['password'];


  if(empty($mailuid) || empty($password1)) {
     header("Location: ../login.php?error=emptyfields");
     exit();
  }
  else {
    $sql = "SELECT * FROM admin WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
       header("Location: ../login.php?error=sqlerror");
     exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt,"s", $mailuid);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row =mysqli_fetch_assoc($result)){
           $pwdCheck = $row['password'];
           if($password1 != $pwdCheck){
             header(
               "Location: ../login.php?error=wrongpassword");
            exit();
           }
           elseif ($password1 == $pwdCheck) {
               session_start();
               $_SESSION['AId'] = $row['A_id'];
               $_SESSION['Auser'] = $row['username'];
//echo $_SESSION['AId']." ".$_SESSION['Auser'];
                header("Location: ../index.php?login=success");
                exit();
           }
           else{
            header("Location: ../login.php?error=wrongpassword");
            exit();
           }

        }
        else{           
            header("Location: ../login.php?error=nouser");
            exit();
        }
    }
  }

}

else
{
    header("Location: ../index.php");
    exit();
}