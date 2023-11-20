
 <?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

if (isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $select = "SELECT * FROM user_db WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['user_type'] == 'sadmin') {
            $_SESSION['sadmin_name'] = $row['name'];
            header('location: ../index.php');
        } elseif ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location: ../admin2/index.php');
        }
    } else {
        $error[] = 'Incorrect email or password!';
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
   <p>don't have an account? <a href="register.php">register now</a></p>
</form>

</div>

</body>
</html>