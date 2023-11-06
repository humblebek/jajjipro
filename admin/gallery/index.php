<!-- MAIN -->

<?php
 $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j3)");

 $sql = "SELECT * FROM facilities";

$result = mysqli_query($con,$sql);



?>
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Gallery</h3>
                <button><a href="?page=gallery/form">Add</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Message</th>
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
                        
                        <td>
                        <button style="background-color: green;"><a class="btn btn-succes" href=""> <ion-icon name = "eye-outline"></ion-icon></a></button>
                        <button><a class="btn btn-primary" href=""> <ion-icon name = "create-outline"></ion-icon></a></button>
                        <button style="background-color: #DA0C81;"><a class="btn btn-danger" href=""> <ion-icon name = "trash-outline"></ion-icon></a></button>
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
