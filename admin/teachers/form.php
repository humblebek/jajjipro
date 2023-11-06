<link rel="stylesheet" href="stylef.css">

<div class="jStart">
    <div class="formcard">
        <button><a href="?page=teachers/index">Back</a></button>
        <h1>Add a new teacher</h1>
        <form action="" method="post">
            <div>
                <p>Name:</p>
                <input type="text" name="namej5" placeholder="John Doe"><br>
            </div>
            <div>
                <p>Profession:</p>
                <input type="text" name="jobj5" placeholder="Job"><br>
            </div>
            <div>
                <p>Status:</p>
                <select name="statusj5" >
                    <option value="0">Teacher</option>
                    <option value="1">Dean</option>
                </select>
            </div>
            <div>
                <p>Image:</p>
                <input type="text" name="imgj5" placeholder="Enter the name of image"><br>
            </div>
            <div>
                <p>TgLink:</p>
                <input type="text" name="telegram" placeholder="telegram"><br>
            </div>
            <div>
                <p>FbLink:</p>
                <input type="text" name="facebook" placeholder="facebook"><br>
            </div>
            <div>
                <p>InLink:</p>
                <input type="text" name="instagram" placeholder="instagram"><br>
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
            $facebookJ5 = $_POST["facebook"];
            $instagramJ5 = $_POST["instagram"];
           


            $sqlJ5 = "INSERT INTO teachers(name,occupation,status,rasm,telegram,facebook,instagram) VALUES('$nameJ5','$jobJ5','$statusJ5','$imgJ5','$telegramJ5','$facebookJ5','$instagramJ5')";

             $resultJ5 = mysqli_query($con,$sqlJ5);

             if($resultJ5){
                echo "Succesfully added";
                header("location:?page=teachers/index");
            }else{
                echo "Smth went wrong";
            }
         }
             ?>
