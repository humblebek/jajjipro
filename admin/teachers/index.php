<!-- MAIN -->


<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j5)");

$sql = "SELECT * FROM teachers";

$result = mysqli_query($con, $sql);



?>
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Teachers</h3>
                <button><a href="?page=teachers/form">Add</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th>Profession</th>
                        <th>Status</th>
                        <th> Image</th>
                        <th>TgLink</th>
                        <th>FbLink</th>
                        <th> InLink</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>


                            <td>
                                <p><?php echo  $row["id"] ?></p>
                            </td>
                            <td>
                                <p><?php echo  $row["name"] ?></p>
                            </td>
                            <td>
                                <p><?php echo  $row["occupation"] ?></p>
                            </td>
                            <td>
                                <p><?php echo  $row["status"] == 1 ? "Dean" : "Teacher" ?></p>
                            </td>
                            <td>
                                <p><?php echo  $row["rasm"] ?></p>
                            </td>
                            <td>
                                <p><?php echo  $row["telegram"] ?></p>
                            </td>
                            <td>
                                <p><?php echo  $row["facebook"] ?></p>
                            </td>
                            <td>
                                <p><?php echo  $row["instagram"] ?></p>
                            </td>


                            <td>
                                <button style="background-color: green;"><a class="btn btn-succes" href="?page=teachers/show&&id=<?=$row['id']?>;"> <ion-icon name="eye-outline"></ion-icon></a></button>
                                <button><a class="btn btn-primary" href="?page=teachers/edit&&id=<?=$row['id']?>;"> <ion-icon name="create-outline"></ion-icon></a></button>
                                <button style="background-color: #DA0C81;"><a class="btn btn-danger" href="?page=teachers/delete&&id=<?=$row['id']?>;"> <ion-icon name="trash-outline"></ion-icon></a></button>
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