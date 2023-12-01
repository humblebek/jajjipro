<!-- MAIN -->


<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");


$sql = "SELECT * FROM articles";

$result = mysqli_query($con,$sql);


?>
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Articles</h3>
                <button><a href="?page=articles/form">Add</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Image</th>
                        <th>Title</th>
                        <th> Message</th>
                        <th>Article Owner</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php while($row = mysqli_fetch_assoc($result)){?>
    

                        <td><p><?= $row["id"] ?></p></td>
                        <td><p><?= $row["img"] ?></p></td>
                        <td><p><?= $row["title"] ?></p></td>
                        <td><p><?= $row["message"] ?></p></td>
                        <td><p><?= $row["articleOwner"] ?></p></td>
                       
                        <td>
                        <button style="background-color: green;"><a class="btn btn-succes" href="?page=achievments/show&&id=<?php echo $row['id']?>"> <ion-icon name = "eye-outline"></ion-icon></a></button>
                        <button><a class="btn btn-primary" href="?page=achievments/edit&&id=<?php echo $row['id']?>"> <ion-icon name = "create-outline"></ion-icon></a></button>
                        <button style="background-color: #DA0C81;"><a class="btn btn-danger" href="?page=achievments/delete&&id=<?=$row['id'];?>"> <ion-icon name = "trash-outline"></ion-icon></a></button>
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
