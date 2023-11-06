<?php


$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred (j4)");

$sql = "SELECT * FROM `group`";

$result = mysqli_query($con, $sql);

// while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["img"]. "Image" . $row["title"]. "<br>";
//   }

?>



<!-- MAIN -->
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Groups</h3>
                <button><a href="?page=groups/form">Add</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <div class="button">

            </div>
            <table>
                <thead>
                    <tr>

                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Age</th>
                        <th>Seat</th>
                        <th>Time</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td>
                                <p><?php echo $row["img"] ?></p>
                            </td>
                            <td>
                                <p><?php echo $row["title"] ?></p>
                            </td>
                            <td>
                                <p><?php echo $row["message"] ?></p>
                            </td>
                            <td>
                                <p><?php echo $row["age"] ?></p>
                            </td>
                            <td>
                                <p><?php echo $row["orindiq"] ?></p>
                            </td>
                            <td>
                                <p><?php echo $row["darsTime"] ?></p>
                            </td>
                            <td>
                                <p><?php echo $row["tutionFee"] ?></p>
                            </td>
                            <td class="action">
                                <button style="background-color: green;"><a class="btn btn-succes" href=""> <ion-icon name="eye-outline"></ion-icon></a></button>
                                <button><a class="btn btn-primary" href=""> <ion-icon name="create-outline"></ion-icon></a></button>
                                <button style="background-color: #DA0C81;"><a class="btn btn-danger" href=""> <ion-icon name="trash-outline"></ion-icon></a></button>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->