<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

$id = $_GET["id"];

$sql = "DELETE FROM teachers WHERE id = ".$id;

$result = mysqli_query($con, $sql);

if ($result) {
    echo "teacher deleted successfully.";
    header("Location: ?page=teachers/index");
} else {
    echo "Error: " . mysqli_error($con);
}

?>