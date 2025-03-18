
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
<!-- Navbar & Carousel end -->



<!-- background name display start -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Tally Corporate Training</h1>
</div>
<!-- background name display end -->












<!-- image + description start -->
<div
  style="background-color:  rgb(253, 253, 253)"
  class="container-fluid custom-description-image py-5 wow fadeInUp"
  data-wow-delay="0.1s"
>
  <div class="container py-5">
    <!-- First Component -->
    <div class="row g-5 mt-5">
      <!-- Image Column on the Left -->
      <div class="col-lg-5" style="min-height: 500px">
        <div class="position-relative h-100">
          <img
            class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn"
            data-wow-delay="0.9s"
            src="img/ttraining1.png"
            alt="Image"
          />
        </div>
      </div>

      <!-- Text Column on the Right -->
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h1 class="mb-0">Tally Training</h1>
        </div>
        <p class="mb-4">
          At Ajay Infotech, we recognize that Tally offers extensive
          capabilities often underutilized by businesses. That's why our
          training programs unlock its full potential. Boost staff productivity
          with Tally training covering basic accounting, document printing,
          inventory management, and compliance. Invest in training for improved
          staff retention, satisfaction, customer service, and increased
          profitability.
        </p>
        <a
          href="maincontact.php"
          class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
          data-wow-delay="0.9s"
          >Contact Us</a
        >
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
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img
                style="height: 50px; width: 50px"
                src="img/tamc1.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Document Printing</h5>
              <p class="card-text mb-0">
                Discover how to efficiently print invoices, purchase orders, and
                various documents through Tally.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img
                style="height: 50px; width: 50px"
                src="img/tamc2.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Inventory Tracking</h5>
              <p class="card-text mb-0">
                Efficiently manage and monitor your inventory using Tally's
                powerful features.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img
                style="height: 50px; width: 50px"
                src="img/tamc3.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title">Compliance Guidance</h5>
              <p class="card-text">
                Ensure seamless compliance with GST, E-Way, and E-invoice
                regulations with Tally's comprehensive tools.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img
                style="height: 50px; width: 50px"
                src="img/tamc4.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Manufacturing Solutions</h5>
              <p class="card-text mb-0">
                Optimize your production processes with Tally's tailored
                manufacturing functionalities.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img
                style="height: 50px; width: 50px"
                src="img/tamc5.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Streamlined Payroll</h5>
              <p class="card-text mb-0">
                Simplify salary, tax, and benefits calculations with Tally's
                integrated payroll system.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img
                style="height: 50px; width: 50px"
                src="img/tamc6.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Financial Reporting</h5>
              <p class="card-text mb-0">
                Generate insightful financial reports effortlessly with Tally,
                aiding in strategic decision-making.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- cards for key benefits end -->
    <!-- Key benefits end here -->
    <br /><br /><br />
    <!-- FAQ start -->

    <!-- accordion for FAQ start -->

    <!-- Accordion for Tally Information start -->

    <div class="accordion accordion-flush mac" id="accordionFlushExample">
      <h1 class="mb-5 text-uppercase" style="text-align: center">FAQ</h1>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button
            class="accordion-button collapsed text-uppercase"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne"
            aria-expanded="false"
            aria-controls="flush-collapseOne"
          >
            Who can enroll in Tally Training?
          </button>
        </h2>
        <div
          id="flush-collapseOne"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Tally Training is open to anyone seeking to learn how to utilize
            Tally for their business or personal requirements. Whether you're a
            novice or an expert, we offer modules tailored to your level of
            expertise. Enrollment is available for individuals or groups from
            your organization.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button
            class="accordion-button collapsed text-uppercase"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo"
            aria-expanded="false"
            aria-controls="flush-collapseTwo"
          >
            What are the benefits of Tally Training?
          </button>
        </h2>
        <div
          id="flush-collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Tally Training offers a range of advantages, including enhanced
            efficiency in Tally usage, improved accuracy in financial
            operations, streamlined inventory management, better compliance with
            tax regulations, and increased productivity for your business.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button
            class="accordion-button collapsed text-uppercase"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree"
            aria-expanded="false"
            aria-controls="flush-collapseThree"
          >
            How is the Tally Training conducted?
          </button>
        </h2>
        <div
          id="flush-collapseThree"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Our Tally Training sessions are conducted through interactive online
            modules led by experienced instructors. We also provide hands-on
            practical exercises and case studies to reinforce learning.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button
            class="accordion-button collapsed text-uppercase"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFour"
            aria-expanded="false"
            aria-controls="flush-collapseFour"
          >
            What are the prerequisites for Tally Training?
          </button>
        </h2>
        <div
          id="flush-collapseFour"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            There are no specific prerequisites for our Tally Training. Whether
            you are new to Tally or have some experience, our courses are
            designed to accommodate all skill levels.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
          <button
            class="accordion-button collapsed text-uppercase"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseFive"
            aria-expanded="false"
            aria-controls="flush-collapseFive"
          >
            How can I get more information about Tally Training?
          </button>
        </h2>
        <div
          id="flush-collapseFive"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            For more information about our Tally Training programs, you can
            reach out to us via phone or email. Our team will be happy to
            provide detailed course outlines, schedules, and any other
            information you may need.
          </div>
        </div>
      </div>
    </div>

    <!-- Accordion for Tally Information end -->

    <!-- accordion for FAQ end -->
    <!-- FAQ end -->
  </div>
</div>
<!-- tally AMC page end -->



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



