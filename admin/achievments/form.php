<link rel="stylesheet" href="stylef.css">

<div class="jStart">
    <div class="formcard">
        <button><a href="?page=achievments/index">Back</a></button>
        <h1>Add a new achievments</h1>
        <form action="" method="post">
            <div>
                <p>Image:</p>
                <input type="text" name="imgj1" placeholder="Enter the name of image"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titlej1" placeholder="title"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messagej1" placeholder="You can write smth here..."><br>
            </div>
            <div>
                <p>Article Owner:</p>
                <input type="text" name="artown" placeholder="Article owner"><br>
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

    $sqlJ1 = "insert into articles(img,title,message,articleOwner) values('$imgJ1','$titleJ1','$messageJ1','$artownJ1')";

    $resultJ1 = mysqli_query($con, $sqlJ1);

    if($resultJ1){
        echo "Succesfully added";
        header("location:?page=achievments/index");
    }else{
        echo "Smth went wrong";
    }
}

?>
