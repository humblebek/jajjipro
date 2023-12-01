<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

$id = $_GET['id'];

$sql = "SELECT * FROM `facilities` WHERE id=" . $id;

$result = mysqli_query($con, $sql);

$row = (mysqli_fetch_assoc($result));


?>


<!-- MAIN -->


<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");


$sql = "SELECT * FROM `facilities`";

$result = mysqli_query($con, $sql);


?>
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About</h3>
                <button><a href="?page=achievments/index">Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Image:</th>
                    <td><?php echo $row['img'] ?></td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td><?php echo $row['title'] ?></td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td><?php echo $row['message'] ?></td>
                </tr>
                

            </table>
        </div>

    </div>
</main>

<!-- MAIN -->