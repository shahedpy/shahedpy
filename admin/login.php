<?php
session_start();

include 'include.php';

if($mysqli -> connect_errno){

  echo "Failed to connect: ".$mysqli -> connect_error;
  exit();

} else {
  
  if($_SERVER['REQUEST_METHOD'] != 'POST'){

    header('location: index.php');

  } else {

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $SQL = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
    
    if ($result = $mysqli -> query($SQL)) {
        
        if($result->num_rows==1){

            $row = $result->fetch_assoc();
            
            if($row['active']==1){
                
                //Login Success
                $_SESSION['username'] = $username;
                header("location: messages.php");
            
            } else {
                $_SESSION['error_message'] = "Your account is inactive";
                header("location: index.php");
            }

        } else {
            $_SESSION['error_message'] = "Invalid username or password.";
            header('location: index.php');
        }
        
      } else {
          $_SESSION['error_message'] = $mysqli -> error;
          header('location: index.php');
      }





    
    $mysqli->close();
  
  }

}