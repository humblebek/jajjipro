
<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");


$sql = "SELECT * FROM articles";

$result = mysqli_query($con, $sql);

?>

<div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">BOG'CHA HAYOTI</span></p>
                <h1 class="mb-4">So'nggi maqolalar</h1>
            </div>
            <div class="row pb-3">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="assets/img/blog-1.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class=""><?=$row["title"] ?></h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> <?=$row["articleOwner"] ?></small>
                            </div>
                            <p><?=$row["message"] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>