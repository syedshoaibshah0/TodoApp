<?php
require 'connection.php';

if (isset($_POST["nameEdit"])) {
    $id = $_POST["EditID"];
    $name = $_POST["nameEdit"];
    $Description = $_POST["DescriptionEdit"];
    $Date = $_POST["DateEdit"];
    $Time = $_POST["TimeEdit"];
    $Contact = $_POST["ContactEdit"];
    $Location = $_POST["LocationEdit"];

    $sql = "update  info  set name='$name', Description='$Description', Date='$Date', Time='$Time', Contact='$Contact', Location='$Location'  where id ='$id'";

    $res =  mysqli_query($con, $sql);

    if ($res) {
        echo "<script>alert('Task Successfully Updated!'); window.location.href = '../home.php';</script>";
        // $insert = true;
        header("Location:../home.php");
    } else {
        echo "failed";
    }
}
?>