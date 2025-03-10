

<head>


    <meta charset="utf-8">
    <?php include 'linkcss.php' ?>

    


  <!-- styling start -->
<style>

  
    .left-section {
        /* Sticky positioning for the left section */
        position: sticky;
        top: 0; /* Keeps the element at the top of the viewport when scrolling */
        background-color: #f0f4f8; /* Background color to differentiate */
        z-index: 10; /* Ensure it is above other content */
    }

    .right-section {
        /* Make sure the right section takes full height and is scrollable */
        overflow-y: auto;
        height: 100vh; /* Full viewport height */
    }

    @media (max-width: 768px) {
        .left-section {
            position: static;
            width: 100%;
        }

        .right-section {
            width: 100%;
        }
    }
</style>
<!-- styling end -->

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
    <h1 class="title">Career</h1>
</div>
<!-- background name display end -->








<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->




<!-- career get in touch start -->
<div class="">
    <div class="container">
        <div class="center-content">
            <h1 class="center-heading text-primary mb-1">Career</h1>
            <p class="center-paragraph">Get In Touch</p>
            <p class="center-paragraph">Our People are Our Strength & Our Inspiration</p>
        </div>
        <div class="text-line">
            <span class="left-text">
                <b>
                    <p class="phh">Why Tally Prime is Best Business Management Software ? </p>
                </b>
                <p class="ph">TallyPrime is a one-stop business management software that caters to all your business
                    requirements – from accounting and invoicing to inventory management, insightful business
                    reports, and cash flow management, thereby improving business efficiency.</p>
                <br>            
                
            </span>
            <span class="right-text">
                <b>
                    <p class="phh">What is the first time and ongoing costs of running TallyPrime?</p>
                </b>
                <p class="ph">One-time cost of 18,000 + GST 18% for Single user and 54,000 + GST 18% for a
                    Multi-User License. From the second year onwards, you need to renew TSS to avail a host of
                    value-added services.</p>
                <br>             
            </span>
        </div>

        <!-- image and description start -->
        <div class="row g-5 mt-5">
            <div class="col-lg-5" >
                <div class="position-relative h-100">
                    <img style="border-radius: 8px;height: 200px;width: 450px;margin-left: 50px;margin-top: 10px;" class="  wow zoomIn" 
                           autoplay 
                           muted 
                           playsinline 
                           data-wow-delay="0.9s" 
                           src="img/career.avif" 
                           style="object-fit: cover"><img>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h1 class="mb-0">Your Quest to find a Right Career Ends Here</h1>
                  </div>
                  <p class="mb-4">
                    Embarking on a career journey can be both exciting and challenging, but with the right guidance and resources, finding your ideal career path becomes a fulfilling experience. At Ajay Infotech, we are dedicated to helping you navigate the complexities of career choices and opportunities.
                  </p>
                  <a href="maincontact.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- image and description end -->


    </div>
</div>







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

    
</body>




<!-- career get in touch end -->
