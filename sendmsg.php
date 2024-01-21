<?php

session_start();

include 'admin/include.php';

$mysqli = new mysqli($SERVER,$USER,$PASS,$DB);

if($mysqli -> connect_errno){

  echo "Failed to connect: ".$mysqli -> connect_error;
  exit();

} else {
  
  if($_SERVER['REQUEST_METHOD'] != 'POST'){

    header('location: index.php');

  } else {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];
    
    $SQL = "INSERT INTO `messages` (`id`,`name`,`email`,`project`,`message`,`created_at`) VALUES (NULL , '$name' , '$email' , '$project' , '$message' , current_timestamp())";
    
    if ($mysqli->query($SQL) === TRUE) {
      header('location: msgresponse.php');
      $_SESSION['msg'] = "Your message has been sent successfully.";
    } else {
      header('location: msgresponse.php');
      $_SESSION['msg'] = "Error: " . $SQL . "<br>" . $mysqli->error;
    
    }
    
    $mysqli->close();
  
  }

}