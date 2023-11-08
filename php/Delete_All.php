<?php

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
