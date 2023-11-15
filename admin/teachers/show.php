<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

$id = $_GET['id'];

$sql = "SELECT * FROM `teachers` WHERE id=" . $id;

$result = mysqli_query($con, $sql);

$row = (mysqli_fetch_assoc($result));


?>


<!-- MAIN -->


<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");


$sql = "SELECT * FROM `teachers`";

$result = mysqli_query($con, $sql);


?>
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>About</h3>
                <button><a href="?page=teachers/index">Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><?php echo $row['name'] ?></td>
                </tr>
                <tr>
                    <th>Profession:</th>
                    <td><?php echo $row['occupation'] ?></td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td><?php if($row['status']==1){
                        echo"Dean";
                    } elseif($row['status']==0){
                        echo"Teacher";
                    }?></td>
                </tr>
                <tr>
                    <th>Image:</th>
                    <td><?php echo $row['rasm'] ?></td>
                </tr>
                <tr>
                    <th>TLink:</th>
                    <td><?php echo $row['telegram'] ?></td>
                </tr>
                <tr>
                    <th>Flink:</th>
                    <td><?php echo $row['facebook'] ?></td>
                </tr>
                <tr>
                    <th>ILink:</th>
                    <td><?php echo $row['instagram'] ?></td>
                </tr>
                

            </table>
        </div>

    </div>
</main>

<!-- MAIN -->