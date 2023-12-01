
 <?php
 session_start();
if(isset($_SESSION['started'])){
    header("location: ../index.php");
}
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

if (isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $select = "SELECT * FROM user_db ";
     $result = mysqli_query($con, $select);
    while($row= mysqli_fetch_assoc($result)){
        if($email==$row['email'] && $password==$row['password']){
            $_SESSION['started'] = true;

            if($row['user_type']=='sadmin'){
                $_SESSION['admin_type'] = 1;
                 header('location: ../index.php');
            }elseif($row['user_type']=='admin'){
                $_SESSION['admin_type'] =0;
                 header('location: ../index.php');
            
            }
        }
    }


    }

?>   






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="stylel.css">
</head>
<body>
<div class="form-container">

<form action="" method="post">
   <h3>login now</h3>
   <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
   <input type="email" name="email" required placeholder="enter your email">
   <input type="password" name="password" required placeholder="enter your password">
   <input type="submit" name="submit" value="login now" class="form-btn">
</form>

</div>

</body>
</html>