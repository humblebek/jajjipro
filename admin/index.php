




<?php 
 include "layouts/header.php"; 


if(isset($_GET["page"])){

    $page  = $_GET["page"];
    include($page.".php");
}else
    include "main.php";
    

 include "layouts/footer.php"; ?>

 
 ?>

 