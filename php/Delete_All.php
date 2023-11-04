<?php

// if {
//     $name = $_POST["name"];
//     $Description = $_POST["Description"];
//     $Date = $_POST["Date"];
//     $Time = $_POST["Time"];
//     $Contact = $_POST["Contact"];
//     $Location = $_POST["Location"];
    
//     $sql = "Insert into info(name, Description, Date, Time, Contact, Location)values('$name', '$Description', '$Date', '$Time', '$Contact', '$Location')";
//     $res = mysqli_query($con, $sql);

//     if ($res) {
//         // echo "  succuessfuly inserted <br>";
//         $insert = true;
//     } else {

//         echo "  not inserted <br>";
//     }
// }


require 'connection.php';

if (isset($_POST["Delete_All"])) {
    $Delete_All= "DELETE FROM info";
    $res= mysqli_query($con, $Delete_All);

    if ($res) {
        echo "<script>if (confirm('Are you sure you want to delete all?')){
        alert('All values are deleted Successfully!'); window.location.href = '../home.php';
        }</script>";
    }
}
?>
