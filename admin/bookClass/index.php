<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");


$sql = "SELECT * FROM bookClass";

$result = mysqli_query($con,$sql);


?>
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Book a class</h3>
                <!-- <button><a href="?page=articles/form">Add</a></button> -->
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th>Tel number</th>
                        <th> Class</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php while($row = mysqli_fetch_assoc($result)){?>
                        <td><p><?= $row["id"] ?></p></td>
                        <td><p><?= $row["name"] ?></p></td>
                        <td><p><?= $row["phoneNum"] ?></p></td>
                        <td><p><?= $row["class"] ?></p></td>
                        <td>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
       
    </div>
</main>

<!-- MAIN -->
