

 <?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

$id = $_GET["id"];

$sql = "DELETE FROM articles WHERE id = ".$id;

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Article deleted successfully.";
    header("Location: ?page=achievments/index");
} else {
    echo "Error: " . mysqli_error($con);
}

?>

