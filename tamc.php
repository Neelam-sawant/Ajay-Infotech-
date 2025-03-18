
<!-- All things are start from here -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php' ?>


    <!-- Add this CSS style block to your template or a linked CSS file -->
<style>


  .custom-card-height {
    height: 350px; /* Adjust the height as needed */
  }
  .card-text {
    overflow: hidden; /* Ensures that text doesn't overflow */
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
  }


</style>

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

<!-----Complete Navbar Start----->


  
  
  <!-- NavbarStart -->
<?php include 'navbar.php' ?>
  <!--Navbar End-->

  <!-----Complete Navbar End----->


<!-- background name display Start -->
  <div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Tally AMC</h1>
</div>


<!-- background name display end -->

      <!-- Text Column on the Right -->
      <div class="col-lg-7 m-5">
        <div class="section-title position-relative pb-3 mb-5">
          <h1 class="mb-0">Tally AMC (Tally Support)</h1>
        </div>
        <p class="mb-4">
          Continue recording transactions or viewing reports while taking backup with no compromise on speed, access, or accuracy. It also limits discrepancies at the client end to the client systems and ensures that neither data on the server nor the operations of other users get impacted. Thus, improves work productivity and business performance by avoiding disruption of work and ensuring zero downtime.
        </p>
        <a href="maincontact.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact Us</a>
      </div>
    </div>
    <!-- image + description end -->
    <div style="background-color:  rgb(253, 253, 253);">
    <!-- Key benefits start here -->
    <h1 class="mb-5 text-uppercase" style="text-align: center">Key Benefits</h1>

    <!-- cards for key benefits start -->
    <div class="container">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height" >
            <div class="image-wrapper rounded mb-3">
              <img style="height: 50px;width: 50px;" src="img/tamc1.svg" class="card-img-top" alt="Image">
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Comprehensive Tech Support</h5>
              <p class="card-text mb-0">Get help from our experts through remote desktop sharing software, telephone, and email during office hours from 09:30 AM to 06:00 PM.</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img style="height: 50px;width: 50px;" src="img/tamc2.svg" class="card-img-top" alt="Image">
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Tailored Invoicing Solutions</h5>
              <p class="card-text mb-0">Create invoices that suit your business needs with our customization service.</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img style="height: 50px;width: 50px;" src="img/tamc3.svg" class="card-img-top" alt="Image">
            </div>
            <div class="card-body">
              <h5 class="card-title">Scheduled Maintenance Visits</h5>
              <p class="card-text">Receive quarterly visits from our technicians to check the performance of your Tally software.</p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img style="height: 50px;width: 50px;" src="img/tamc4.svg" class="card-img-top" alt="Image">
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Free Synergy Add-on Modules</h5>
              <p class="card-text mb-0">Enjoy two additional features that enhance the functionality of your Tally software.</p>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img style="height: 50px;width: 50px;" src="img/tamc5.svg" class="card-img-top" alt="Image">
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Basic Tally Training</h5>
              <p class="card-text mb-0">Learn how to use the software effectively with our training service.</p>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img style="height: 50px;width: 50px;" src="img/tamc6.svg" class="card-img-top" alt="Image">
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Tally Installation</h5>
              <p class="card-text mb-0">Ensure that the software is set up correctly for your business with our installation and implementation service.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- cards for key benefits end -->
    <!-- Key benefits end here -->
    <br><br><br>
    <!-- FAQ start -->


    <!-- accordion for FAQ start -->



            
<!-- Accordion for Tally Information start -->



<div class="accordion accordion-flush mac container" id="accordionFlushExample">
    <h1 class="mb-5 text-uppercase" style="text-align: center;">FAQ</h1>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            HOW CAN I AVAIL TALLY AMC ?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">You can avail Tally AMC by contacting us at our phone number or email address. We will provide you with the details and the payment options.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            WHAT ARE THE TIMING OF ONLINE SUPPORT ?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Our online support is available during office hours from 09:30 AM to 06:00 PM, where you can reach out to our experts through remote desktop sharing software, telephone, and email.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            HOW CAN I GET BASIC TALLY TRAINING ?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">To get basic Tally training, you can enroll in our training service where you'll learn how to effectively use the software to its fullest potential.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            WHY DO I NEED TALLY AMC ?
        </button>
      </h2>
      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Tally AMC ensures that you have continuous technical support, regular software updates, and maintenance visits to keep your Tally software running smoothly and efficiently.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            HOW MUCH DOES TALLY AMC COST ?
        </button>
      </h2>
      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">The cost of Tally AMC varies based on your specific requirements and the services included. Please contact us directly for pricing details tailored to your needs.</div>
      </div>
    </div>
</div>

<!-- Accordion for Tally Information end -->


    <!-- accordion for FAQ end -->
    <!-- FAQ end -->

  </div>
</div>
<!-- tally AMC page end -->
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


    <?php include 'linkscript.php' ?>
</body>

</html>

<!-- tally AMC page start -->



