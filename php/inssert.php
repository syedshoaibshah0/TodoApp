<?php

require'connection.php';

if (isset($_POST["name"])) {

    $name = $_POST["name"];
    $Description = $_POST["Description"];
    $Date = $_POST["Date"];
    $Time = $_POST["Time"];
    $Contact = $_POST["Contact"];
    $Location = $_POST["Location"];

    if (empty($name) || empty($Description) || empty($Date) || empty($Time)  || empty($Contact) || empty($Location)) {
        echo "<script>alert('All fields are required!'); window.location.href = '../index.php';</script>";
    } else {
        $insert = "INSERT INTO info (name, Description  , Date, Time, Contact, Location) VALUES ('$name','$Description','$Date','$Time','$Contact','$Location')";
        $res = mysqli_query($con, $insert);

        if ($res) {
            echo "<script>alert('Values inssert successfully!'); window.location.href = '../index.php';</script>";
        }
    }

}
?>

