<link rel="stylesheet" href="stylef.css">

<div class="jStart">
    <div class="formcard">
        <button><a href="?page=gallery/index">Back</a></button>
        <h1>Add a new gallery</h1>
        <form action="" method="post">
            <div>
                <p>Image:</p>
                <input type="text" name="imgj3" placeholder="Enter the name of image"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="titlej3" placeholder="title"><br>
            </div>
            <div>
                <p>Message:</p>
                <input type="text" name="messagej3" placeholder="You can write smth here..."><br>
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

            $sqlJ3 = "insert into facilities(img,title,message) values('$imgJ3','$titleJ3','$messageJ3')";

            $resultJ3 = mysqli_query($con, $sqlJ3);

            if($resultJ3){
                echo "Succesfully added";
                header("location:?page=gallery/index");
            }else{
                echo "Smth went wrong";
            }
        }
        ?>
