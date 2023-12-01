<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0">Shavkat Mirziyoyev:</h4>
            <h1 class="display-3 font-weight-bold text-white">"Maktabgacha ta'lim sohasida zamonaviy tizim yaratish muhim vazifamizdir"</h1>
            <!-- <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                    lorem dolore sed stet et est justo dolore.</p> -->
            <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Ko'proq ma'lumot olish</a> -->
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <img class="img-fluid mt-5" src="assets/img/header.png" alt="">
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Facilities Start -->
<?php include("sections/infos.php"); ?>
<!-- Facilities Start -->

<!-- About Start -->
<?php include("sections/about.php"); ?>
<!-- About End -->

<!-- Class Start -->
<?php include("sections/class.php"); ?>
<!-- Class End -->

<!-- Registration Start -->
<?php include("sections/register.php"); ?>
<!-- Registration End -->

<!-- Team Start -->
<div class="container-fluid pt-5" style="display: flex;">
    <div class="container" style="display: block;">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
            <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
        </div>
        <?php
        $con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occured (j1)");


        $sql = "SELECT * FROM teachers WHERE status =0";

        $result = mysqli_query($con, $sql);

        ?>
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="assets/img/team-1.jpg" alt="">
                        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h4><?= $row["name"] ?></h4>
                    <i><?= $row["occupation"] ?></i>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Blog Start -->
<?php include("sections/blogs.php"); ?>
<!-- Blog End -->