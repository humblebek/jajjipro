<link rel="stylesheet" href="stylef.css">

<div class="jStart" style="margin: 30px 600px;">
<div class="formcard">
            <h1>Teachers</h1>
            <form action="" method="post">
                <input type="text" name="namej5" placeholder="title"><br>
                <input type="text" name="jobj5" placeholder="teacher"><br>
                <input type="text" name="imgj5" placeholder="Enter the name of image"><br>
                <input type="text" name="telegram" placeholder="telegram"><br>
                <input type="text" name="facebook" placeholder="facebook"><br>
                <input type="text" name="instagram" placeholder="instagram"><br>
                <input type="submit" name="j5" value="SEND">
            </form>
        </div>
       </div>


       <?php

        if(isset($_POST["j5"]))
         {
             $con = mysqli_connect("localhost","root","root","jajji") or die("Error occured (j5)");

            $nameJ5 = $_POST["namej5"];
            $jobJ5 = $_POST["jobj5"];
            $imgJ5 = $_POST["imgj5"];
            $telegramJ5 = $_POST["telegram"];
            $facebookJ5 = $_POST["facebook"];
            $instagramJ5 = $_POST["instagram"];
           


            $sqlJ5 = "INSERT INTO teachers(name,occupation,rasm,telegram,facebook,instagram) VALUES('$nameJ5','$jobJ5','$imgJ5','$telegramJ5','$facebookJ5','$instagramJ5')";

             $resultJ5 = mysqli_query($con,$sqlJ5);

             if($resultJ5){
                echo "Succesfully added";
            }else{
                echo "Smth went wrong";
            }
         }
             ?>
