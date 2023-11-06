<link rel="stylesheet" href="stylef.css">

<div class="jStart">
    <div class="formcard">
        <button><a href="?page=groups/index">Back</a></button>
        <h1>Add a new group</h1>
        <form action="" method="post">
            <div>
                <p>Image:</p>
                <input type="text" name="imgj4" placeholder="Enter the name of image"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titlej4" placeholder="title"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messagej4" placeholder="You can write smth here..."><br>
            </div>
            <div>
                <p>Age:</p>
                <input type="text" name="agej4" placeholder="4-5"><br>
            </div>
            <div>
                <p>Seat:</p>
                <input type="number" name="seat" placeholder="40"><br>
            </div>
            <div>
                <p>Time:</p>
                <input type="text" name="time" placeholder="14:00-15:00"><br>
            </div>
            <div>
                <p>Price:</p>
                <input type="number" name="pricej4" placeholder="200$"><br>
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

    $sqlJ4 = "INSERT INTO `group` (img, title, message, age, orindiq, darsTime, tutionFee) VALUES ('$imgJ4', '$titleJ4', '$messageJ4', '$ageJ4', '$seatJ4', '$timeJ4', '$priceJ4')";

    $resultJ4 = mysqli_query($con, $sqlJ4);

    if ($resultJ4) {
        echo "Succesfully added";
        header("location:?page=groups/index");
    } else {
        echo "Smth went wrong";
    }
}

?>