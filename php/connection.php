<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "TodoApp";


$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


// $meraSql = "Create database TodoApp";
// $res = mysqli_query($con, $meraSql);

// if ($res) {
//     echo "database is created ";
// }


// $table = "
//  create table info 
//  ( id int primary key  not null auto_increment , 
//  name varchar(250), 
//  Description varchar(250),
//  Date varchar(250),
//  Time varchar(250), 
//  Contact varchar(250),
//  Location varchar(250)
//  )
// ";

// $res = mysqli_query($con, $table);

// if ($res) {
//     echo "table is created";
// }
?>
