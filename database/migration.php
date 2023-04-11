 <?php
// Create Connection With PHP myadmin
// $servername = "localhost";
// $username = "root";
// $password = "";


// $conn = mysqli_connect($servername, $username, $password);

// if(!$conn) {
//     die("There's an error during connection " . mysqli_connect_error());
// }

// //Create DataBase 
// $sql = "CREATE DATABASE IF NOT EXISTS todoapp" ;
// $result = mysqli_query($conn,$sql);

// mysqli_close($conn);



// Create Conn With DataBase

$conn = mysqli_connect("localhost", "root", "" , "todoapp");

if(!$conn) {
    die("There's an error during connection " . mysqli_connect_error($conn));
}



$sql = "CREATE TABLE if not exists `users` ( 
    `id` INT PRIMARY KEY AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE
) ";

mysqli_query($conn,$sql);

$create_tasks = "CREATE TABLE if not exists `tasks` ( 
    `id` INT PRIMARY KEY AUTO_INCREMENT , 
    `title` VARCHAR(100) NOT NULL

) ";

mysqli_query($conn,$create_tasks);

echo "<pre>";
print_r($conn);
echo "</pre>";


// View Tasks in Table
// $view_task_data = "SELECT * FROM `tasks`";

// $result = mysqli_query($conn,$view_task_data);












