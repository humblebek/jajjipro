<link rel="stylesheet" href="stylef.css">

<div class="jStart" style="margin: 30px 600px;">
<div class="formcard">
            <h1>Gallery</h1>
            <form action="" method="post">
                <input type="text" name="imgj3" placeholder="Enter the name of image"><br>
                <input type="text" name="titlej3" placeholder="title"><br>
                <input type="text" name="messagej3" placeholder="You can write smth here..."><br>
                <input type="submit" name="j3" value="SEND">
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
            }else{
                echo "Smth went wrong";
            }
        }
        ?>
