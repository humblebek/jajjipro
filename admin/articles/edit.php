
<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

$id = $_GET['id'];

$sql = "SELECT * FROM articles WHERE id=".$id;

$result = mysqli_query($con,$sql);

$row = (mysqli_fetch_assoc($result));


?>

<link rel="stylesheet" href="stylef.css">
<div class="jStart">
    <div class="formcard">
        <button><a href="?page=articles/index">Back</a></button>
        <h1>Edit achievments</h1>
        <form action="" method="post">
            <div>
                <p>Image:</p>
                <input type="text" name="imgj1" value="<?php echo $row['img']?>"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titlej1" value="<?php echo $row['title']?>" ><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messagej1" value="<?php echo $row['message']?>" ><br>
            </div>
            <div>
                <p>Article Owner:</p>
                <input type="text" name="artown" value="<?php echo $row['articleOwner']?>" ><br>
            </div>
            <span><input type="submit" name="j1" value="SEND"></span>
        </form>
    </div>
</div>


       <?php
if (isset($_POST["j1"])) {

    $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");

    $imgJ1 = $_POST["imgj1"];
    $titleJ1 = $_POST["titlej1"];
    $messageJ1 = $_POST["messagej1"];
    $artownJ1 = $_POST["artown"];

    $sqlJ1 = "UPDATE `articles` SET `img`='$imgJ1',`title`='$titleJ1',`message`='$messageJ1',`articleOwner`='$artownJ1'  WHERE id=$id";

    $resultJ1 = mysqli_query($con, $sqlJ1);

    if($resultJ1){
        echo "Succesfully edited";
        header("location:?page=articles/index");
    }else{
        echo "Smth went wrong";
    }
}

?>
