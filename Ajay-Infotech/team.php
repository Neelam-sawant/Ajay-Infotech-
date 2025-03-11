
<!-- All things are start from here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php'; ?>


    <script>
        // Check if the URL contains "success=true" and show an alert
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success') && urlParams.get('success') === 'true') {
                alert('Thank you for your message!');
            }
        };
      </script>
      


</head>

<body>
   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->






<!-- Navbar & Carousel Start -->
<?php include 'navbar.php' ?>
  <!-- Navbar & Carousel end -->
  



<!-- background name display start -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Team</h1>
</div>
<!-- background name display end -->








<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
            <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Full Name</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->





<!-- contact start -->
<?php include 'contact.php' ?>
<!-- contact end -->




<!-- Vendor Start -->
<?php include 'vendor.php' ?>
<!-- Vendor End -->









<!-- footer start -->
<?php include 'footer.php' ?>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include 'linkscript.php' ?>
</body>

</html>




 


