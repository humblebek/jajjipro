<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

$id = $_GET["id"];

$sql = "DELETE FROM facilities WHERE id = ".$id;

$result = mysqli_query($con, $sql);

if ($result) {
    echo " Delete successfully.";
    header("Location: ?page=achievments/index");
} else {
    echo "Error: " . mysqli_error($con);
}

?>