<link rel="stylesheet" href="stylef.css">

<div class="jStart" style="margin: 30px 600px;">
<div class="formcard">
            <h1>Achievments</h1>
            <form action="" method="post">
                <input type="text" name="imgj1" placeholder="Enter the name of image"><br>
                <input type="text" name="titlej1" placeholder="title"><br>
                <input type="text" name="messagej1" placeholder="You can write smth here..."><br>
                <input type="text" name="artown" placeholder="Article owner"><br>
                <input type="submit" name="j1" value="SEND">
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
    }else{
        echo "Smth went wrong";
    }
}

?>
