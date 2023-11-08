<?php

require 'php/connection.php';

if (isset($_GET["deletevalue"])) {

    $sno = $_GET["deletevalue"];

    $sql = "delete from info where id = '$sno'";

    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "<script>alert('Value Deleted Successfully!'); window.location.href = 'home.php';</script>";
    } else {
        echo "<script>alert('Deleted is not working!'); window.location.href = 'home.php';</script>";
    }
} else if (isset($_POST['del'])) {

    $sql = "Delete from info";
    $result = mysqli_query($con, $sql);
    $delete = true;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="container">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="php/update.php" method="post">
                            <div class="container">
                                <input type="hidden" name="EditID" id="EdittID">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="nameEdit" id="Ename">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="2" name="DescriptionEdit"
                                        id="EDesc"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="DateEdit" id="EDate">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Time</label>
                                    <input type="time" class="form-control" name="TimeEdit" id="ETime">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contact</label>
                                    <input type="number" class="form-control" name="ContactEdit" id="EContact">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <input type="Location" class="form-control" name="LocationEdit" id="ELocation">
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Values</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">TodoApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="margin-top: 5px; margin-bottom: 5px;">
        <form action="php/Delete_All.php" method="POST">
            <input type="hidden" name="Delete_All" value="true">
            <div class="d-grid gap-2 ">
                <button class="btn btn-warning" type="submit">Delete All</button>
            </div>
        </form>
    </div>

    <div class="container">

        <h1>Task List</h1>
        <table id="myTable" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    require 'php/connection.php';
                    $showsql = "Select * from info ";

                    $result = mysqli_query($con, $showsql);

                    $totalcount = mysqli_num_rows($result);
                    $count = 1;
                    if ($totalcount > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["Description"] . "</td>";
                            echo "<td>" . $row["Date"] . "</td>";
                            echo "<td>" . $row["Time"] . "</td>";
                            echo "<td>" . $row["Contact"] . "</td>";
                            echo "<td>" . $row["Location"] . "</td>";
                            echo "<td>
                    <button type='button' class='btn btn-warning deletes' id=d" . $row["id"] . ">Delete</button>
                    <button type='button'  class='btn btn-primary edits' name='edits' data-bs-toggle='modal' data-bs-target='#exampleModal' id=" . $row["id"] . "  >Edit</button> </td>
                    
                    </tr>";

                        }
                    }

                    ?>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </script>
    <script>
            $(document).ready(function () {
                $('#myTable').DataTable();
        });
    </script>

    <script src="js/update.js"></script>
    <script src="Js/delete.js"></script>

</body>

</html>