<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

$id = $_GET['id'];

$sql = "SELECT * FROM `group` WHERE id=".$id;

$result = mysqli_query($con,$sql);

$row = (mysqli_fetch_assoc($result));


?>



<link rel="stylesheet" href="stylef.css">

<div class="jStart">
    <div class="formcard">
        <button><a href="?page=groups/index">Back</a></button>
        <h1>Edit group</h1>
        <form action="" method="post">
            <div>
                <p>Image:</p>
                <input type="text" name="imgj4" value="<?php echo $row['img']?>"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titlej4" value="<?php echo $row['title']?>"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messagej4" value="<?php echo $row['message']?>"><br>
            </div>
            <div>
                <p>Age:</p>
                <input type="text" name="agej4" value="<?php echo $row['age']?>"><br>
            </div>
            <div>
                <p>Seat:</p>
                <input type="number" name="seat" value="<?php echo $row['orindiq']?>"><br>
            </div>
            <div>
                <p>Time:</p>
                <input type="text" name="time" value="<?php echo $row['darsTime']?>"><br>
            </div>
            <div>
                <p>Price:</p>
                <input type="number" name="pricej4" value="<?php echo $row['tutionFee']?>"><br>
            </div>
            <span><input type="submit" name="j4" value="SEND"></span>
        </form>
    </div>
</div>

<?php

if (isset($_POST["j4"])) {
    $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred (j4)");

    $imgJ4 = mysqli_real_escape_string($con, $_POST["imgj4"]);
    $titleJ4 = mysqli_real_escape_string($con, $_POST["titlej4"]);
    $messageJ4 = mysqli_real_escape_string($con, $_POST["messagej4"]);
    $ageJ4 = mysqli_real_escape_string($con, $_POST["agej4"]);
    $seatJ4 = mysqli_real_escape_string($con, $_POST["seat"]);
    $timeJ4 = mysqli_real_escape_string($con, $_POST["time"]);
    $priceJ4 = mysqli_real_escape_string($con, $_POST["pricej4"]);

    $sqlJ4 = "UPDATE `group` SET `img`='$imgJ4',`title`='$titleJ4',`message`='$messageJ4',`age`='$ageJ4',`orindiq`='$seatJ4',`darsTime`='$timeJ4',`tutionFee`='$priceJ4'  WHERE id=$id";

    $resultJ4 = mysqli_query($con, $sqlJ4);

    if ($resultJ4) {
        echo "Succesfully edited";
        header("location:?page=groups/index");
    } else {
        echo "Smth went wrong";
    }
}

?>