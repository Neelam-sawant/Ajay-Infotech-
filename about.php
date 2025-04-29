
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php' ?>


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
    <h1 class="title">About</h1>
</div>
    <!-- background name display end -->
    
<!-- Full Screen Search End -->



      <!-- Text Column -->
      <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-left:25px; margin-right:25px;">
  <div class="container py-5">
    <div class="row align-items-center g-5">
      
      <!-- Text Column -->
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h5 class="fw-bold text-primary text-uppercase">What we do</h5>
          <h1 class="mb-0">At Ajay Infotech?</h1>
        </div>
        <p class="mb-4" style="margin-right:10px;">
          Ajay Infotech was founded in 2010 with a single mission: to be the most successful Tally Prime partner. We approach each of our clients with fresh eyes to develop together. We formed 500+ strong relations. We all are one whole big family. Come on in, join our family for smooth accounting and zero misunderstanding.
          <br><br>
          We assure you that you won’t regret joining our family. We don’t believe in time-bonded work; we will try to help you at any time. We give online support on the spot, and if your problems are still not solved, we personally visit your place to help you out. We make sure that you work smoothly.
          <br><br>
          Though we’ve grown since our founding, we’re still the same agency at heart. Let us help make your dreams a reality. Are you ready to get smooth with your accounting work? Give us a call today and see what we can do for you.
        </p>

        <div class="row g-0 mb-3">
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
          </div>
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
          </div>
        </div>

        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
          <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
            <i class="fa fa-phone-alt text-white"></i>
          </div>
          <div class="ps-4">
            <h5 class="mb-2">Call to ask any question</h5>
            <h4 class="text-primary mb-0">+91 7977801547</h4>
          </div>
        </div>

        <a href="contact.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact Us</a>
      </div>

      <!-- Image Column -->
      <div class="col-lg-5 text-center">
        <img src="img/about.jpg" alt="About Ajay Infotech"
             class="img-fluid rounded wow zoomIn"
             data-wow-delay="0.9s"
             style="max-height: 350px; object-fit: cover; margin-top: -30px;" />
      </div>

    </div>
  </div>
</div>


<!-- About End -->


<!-- Team Start 
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
                        <h4 class="text-primary">Nikhil Dada</h4>
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
                        <h4 class="text-primary">Neelam Mam</h4>
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
                        <h4 class="text-primary">shreenivas</h4>
                        <p class="text-uppercase m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
Team End -->

<!-- contact start -->

<?php include 'contact.php' ?>
  
  
  
  <!-- contact end -->




<!-- Vendor Start -->
<?php include 'vendor.php' ?>
<!-- Vendor End -->









<!-- footer start -->
<?php include 'footer.php'?>
  <!-- Footer End -->








<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>
</body>
</body>

</html>




