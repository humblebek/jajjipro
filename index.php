
<?php

include("layouts/header.php");

if(isset($_GET["page"])){
    $page = $_GET["page"];
    include("pages/".$page.".php");
}
else
    include("pages/home.php");

include("layouts/footer.php");

?>


