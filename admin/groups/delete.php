<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

$id = $_GET["id"];

$sql = "DELETE FROM `group` WHERE id = ".$id;

$result = mysqli_query($con, $sql);

if ($result) {
    echo "group deleted successfully.";
    header("Location: ?page=groups/index");
} else {
    echo "Error: " . mysqli_error($con);
}

?>

