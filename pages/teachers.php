<?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured");


$sql = "SELECT * FROM teachers WHERE status=1 ";

$result = mysqli_query($con, $sql);

?>

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Bizning o'qituvchilarimiz</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="index.html">Bosh sahifa</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">O'qituvchilar</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


     <!-- Team Start -->
     <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Rahbariyat</span></p>
            </div>
            <div class="row">
                <?php while($row= mysqli_fetch_assoc($result)){?>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="assets/img/team-2.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h4><?= $row["name"]?></h4>
                    <i><?= $row["occupation"]?></i>
                </div>
                    <?php } ?>
            </div>


            <?php
$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured");


$sql = "SELECT * FROM teachers WHERE status=0 ";

$result = mysqli_query($con, $sql);

?>
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
            </div>
            <div class="row">
            <?php while($row= mysqli_fetch_assoc($result)){?>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="assets/img/team-3.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h4><?= $row["name"]?></h4>
                    <i><?= $row["occupation"]?></i>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
