<?php
session_start();
$conn = mysqli_connect("localhost","root","","todoapp");

    if(!$conn){
        echo "Connection Faild".mysqli_connect_error($conn);
    }


if($_SERVER['REQUEST_METHOD'] == "POST"){

    $title = trim(htmlentities(htmlspecialchars($_POST['title'])));
    
    $sql = "INSERT INTO `tasks`(`title`) values('$title')";
    $result = mysqli_query($conn,$sql); 
  if(mysqli_affected_rows($conn)  == 1 ){
    $_SESSION['success'] = "Data Inserted Successfully";
  }
    
  //redirection

  header("location:../index.php");
}