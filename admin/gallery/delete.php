<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

$id = $_GET["id"];

$sql = "DELETE FROM facilities WHERE id = ".$id;

$result = mysqli_query($con, $sql);

if ($result) {
    echo "gallery deleted successfully.";
    header("Location: ?page=gallery/index");
} else {
    echo "Error: " . mysqli_error($con);
}

?>