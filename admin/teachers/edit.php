




<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

$id = $_GET['id'];

$sql = "SELECT * FROM `teachers` WHERE id=".$id;

$result = mysqli_query($con,$sql);

$row = (mysqli_fetch_assoc($result));


?>




<link rel="stylesheet" href="stylef.css">

<div class="jStart">
    <div class="formcard">
        <button><a href="?page=teachers/index">Back</a></button>
        <h1>Edit teacher</h1>
        <form action="" method="post">
            <div>
                <p>Name:</p>
                <input type="text" name="namej5" value="<?php echo $row['name']?>"><br>
            </div>
            <div>
                <p>Profession:</p>
                <input type="text" name="jobj5" value="<?php echo $row['occupation']?>"><br>
            </div>
            <div>
                <p>Status:</p>
                <select name="statusj5" >
                    <option value="<?php echo $row['status']?>">Teacher</option>
                    <option value="<?php echo $row['status']?>">Dean</option>
                </select>
            </div>
            <div>
                <p>Image:</p>
                <input type="text" name="imgj5" value="<?php echo $row['rasm']?>"><br>
            </div>
            <div>
                <p>TgLink:</p>
                <input type="text" name="telegram" value="<?php echo $row['telegram']?>"><br>
            </div>
            <div>
                <p>FbLink:</p>
                <input type="text" name="facebook" value="<?php echo $row['facebook']?>"><br>
            </div>
            <div>
                <p>InLink:</p>
                <input type="text" name="instagram" value="<?php echo $row['instagram']?>"><br>
            </div>
            <span><input type="submit" name="j5" value="SEND"></span>
        </form>
    </div>
</div>

<?php

        if(isset($_POST["j5"]))
         {
             $con = mysqli_connect("localhost","root","root","jajji") or die("Error occured (j5)");

            $nameJ5 = $_POST["namej5"];
            $jobJ5 = $_POST["jobj5"];
            $statusJ5 = $_POST["statusj5"];
            $imgJ5 = $_POST["imgj5"];
            $telegramJ5 = $_POST["telegram"];
            $telegramJ5 = $_POST["facebook"];
            $instagramJ5 = $_POST["instagram"];
           


            $sqlJ5 = "UPDATE `teachers` SET `name`='$nameJ5',`occupation`='$jobJ5',`status`='$statusJ5',`rasm`='$imgJ5',`telegram`='$telegramJ5',`facebook`='$telegramJ5',`instagram`='$instagramJ5' WHERE id=$id";

             $resultJ5 = mysqli_query($con,$sqlJ5);

             if($resultJ5){
                echo "Succesfully edited";
                header("location:?page=teachers/index");
            }else{
                echo "Smth went wrong";
            }
         }
             ?>


       