

<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

$id = $_GET['id'];

$sql = "SELECT * FROM `facilities` WHERE id=".$id;

$result = mysqli_query($con,$sql);

$row = (mysqli_fetch_assoc($result));


?>


<link rel="stylesheet" href="stylef.css">

<div class="jStart">
    <div class="formcard">
        <button><a href="?page=gallery/index">Back</a></button>
        <h1>Edit gallery</h1>
        <form action="" method="post">
            <div>
                <p>Image:</p>
                <input type="text" name="imgj3" value="<?php echo $row['img']?>"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titlej3" value="<?php echo $row['title']?>"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messagej3" value="<?php echo $row['message']?>"><br>
            </div>
            <span><input type="submit" name="j3" value="SEND"></span>
        </form>
    </div>
</div>



       <?php
        if (isset($_POST["j3"])) {
            $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j3)");

            $imgJ3 = $_POST["imgj3"];
            $titleJ3 = $_POST["titlej3"];
            $messageJ3 = $_POST["messagej3"];

            $sqlJ3 = "UPDATE `facilities` SET `img`='$imgJ3',`title`='$titleJ3',`message`='$messageJ3'  WHERE id=$id";
            $resultJ3 = mysqli_query($con, $sqlJ3);

            if($resultJ3){
                echo "Succesfully edited";
                header("location:?page=gallery/index");
            }else{
                echo "Smth went wrong";
            }
        }
        ?>
