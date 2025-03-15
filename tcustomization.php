
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





<!-- Navbar & Carousel Start -->
<?php include 'navbar.php' ?>
  <!-- Navbar & Carousel End -->


<!-- background name display start -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Tally Customization</h1>
</div>
<!-- background name display end -->







 <!-- image + description start -->
 <div style="background-color: #e7eaf6" class="container-fluid custom-description-image py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">

    <!-- First Component -->
    <div class="row g-5 mt-5">
      <!-- Image Column on the Left -->
      <div class="col-lg-5" style="min-height: 500px">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn" data-wow-delay="0.9s" src="img/TAMC.png" alt="Image" />
        </div>
      </div>

      <!-- Text Column on the Right -->
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h1 class="mb-0"> Tally Customization</h1>
        </div>
        <p class="mb-4">
           At Synergy Technologies, we offer customized Tally solutions tailored to your business needs. Our dedicated team specializes in creating seamless integrations with TallyPrime to meet your specific requirements. Whether you run a small shop or a large corporation, trust us for personalized Tally customization services.
        </p>
        <a href="maincontact.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact Us</a>
      </div>
    </div>
    <!-- image + description end -->

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
              <h5 class="card-title mb-0">Process Automation</h5>
              <p class="card-text mb-0">Tally TDL customization automates tasks, enhancing efficiency and reducing errors.</p>
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
              <h5 class="card-title mb-0">Tailored User Interface</h5>
              <p class="card-text mb-0">Customize menus and screens to match specific business needs for intuitive navigation.</p>
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
              <h5 class="card-title">Integration Flexibility</h5>
              <p class="card-text">Seamlessly integrate TallyPrime with other applications for real-time data exchange.</p>
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
              <h5 class="card-title mb-0">Feature Optimization</h5>
              <p class="card-text mb-0">Make efficient use of TallyPrime's features by customizing its functionalities..</p>
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
              <h5 class="card-title mb-0">Adaptation to Workflow</h5>
              <p class="card-text mb-0">Align TallyPrime with unique business workflows to enhance effectiveness.</p>
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
              <h5 class="card-title mb-0">Operational Cost Reduction</h5>
              <p class="card-text mb-0">Streamline operations with Tally customization, reducing redundancy and costs.
              </p>
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



<div class="accordion accordion-flush mac" id="accordionFlushExample">
    <h1 class="mb-5 text-uppercase" style="text-align: center;">FAQ</h1>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
           Why do I need Tally Customization?
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Tally Customization is crucial for tailoring Tally software to fit your specific business needs. It allows you to align Tally with your industry requirements, streamline workflows, adhere to regulations, and enhance overall efficiency. By customizing Tally, you can optimize processes, reports, and features to precisely match your business operations.

        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
           What types of customization are available?
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Tally offers a range of customization options, including modifying reports to display specific data, creating new modules or functionalities tailored to your business processes, integrating third-party applications for seamless operations, and designing user interfaces for enhanced usability.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
           What are the benefits of Tally Customization?
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Customizing Tally can lead to numerous advantages such as improved productivity through automated processes, better decision-making with tailored reports, enhanced accuracy with data validation checks, streamlined workflows matching your business processes, and increased efficiency by eliminating redundant tasks.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
           How do I upgrade my customized Tally software?
        </button>
      </h2>
      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">When it comes to upgrading your customized Tally software, it's essential to work with experienced Tally service providers or developers. They will ensure that your customizations are compatible with the latest Tally versions, migrate your custom features seamlessly, and provide necessary updates to maintain optimal performance. Regularly updating your customized Tally software ensures you have access to the latest features, security patches, and improvements without compromising your tailored functionalities.</div>
      </div>
    </div>
</div>

<!-- Accordion for Tally Information end -->


    <!-- accordion for FAQ end -->
    <!-- FAQ end -->

  </div>
</div>
<!-- tally Cuwstomization page end -->






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





