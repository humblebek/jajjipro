<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

$id = $_GET['id'];

$sql = "SELECT * FROM articles WHERE id=" . $id;

$result = mysqli_query($con, $sql);

$row = (mysqli_fetch_assoc($result));


?>


<!-- MAIN -->


<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");


$sql = "SELECT * FROM articles";

$result = mysqli_query($con, $sql);


?>
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About</h3>
                <button><a href="?page=articles/index">Back</a></button>
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
                <tr>
                    <th>Article Owner:</th>
                    <td><?php echo $row['articleOwner'] ?></td>
                </tr>

            </table>
        </div>

    </div>
</main>

<!-- MAIN -->