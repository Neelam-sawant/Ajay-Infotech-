
<!-- All things are start from here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include '../linkcss.php'; ?>


    <!-- styling start -->
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
<?php include '../navbar.php' ?>
<!-- Navbar & Carousel end -->



<!-- background name display start -->
<div class="aiheaderimage">
    <img src="/img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">INR Filling</h1>
</div>
<!-- background name display end -->








<div
  style="background-color: #e7eaf6"
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
                class="position-absolute w-100 h-60 rounded custom-image-size wow zoomIn"
                data-wow-delay="0.9s"
                src="/img/inrf1.webp" 
                alt="Image"
            />
        </div>
    </div>

      <!-- Text Column on the Right -->
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h1 class="mb-0">INR Filling</h1>
        </div>
        <p class="mb-4">
            INR Filling with Tally is the process of managing and filing International Normalized Ratio (INR) data, typically related to financial transactions, using Tally software. Tally is a comprehensive business management software widely used for accounting, inventory management, and statutory compliance. In the context of INR filling, Tally helps businesses accurately record, manage, and report financial transactions that involve INR, ensuring compliance with relevant financial regulations and tax laws.

        </p>
        <p class="mb-0">
            The software simplifies the process by automating calculations, generating necessary reports, and filing returns, saving time and reducing errors. With Tally, businesses can streamline their financial operations, maintain accurate records, and ensure that their INR-related filings are completed efficiently and correctly.
        </p>
        <a
          href="contact.html"
          class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
          data-wow-delay="0.9s"
          >Contact Us</a
        >
      </div>
    </div>
    <br><br><br>


    <!-- text and description end -->


    <!-- key benefits start  -->
     <h1 class="mb-5 mt-5 text-uppercase" style="text-align: center">Key Benefits</h1>

    <!-- cards for key benefits start -->
    <div class="container">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card text-center p-4 rounded mb-4 custom-card-height">
            <div class="image-wrapper rounded mb-3">
              <img
                style="height: 50px; width: 50px"
                src="/img/tamc1.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Accuracy in Financial Reporting</h5>
              <p class="card-text mb-0">
                Tally ensures precise calculations and accurate data entry, reducing the risk of errors in INR filing.
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
                src="/img/tamc2.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Compliance Made Easy</h5>
              <p class="card-text mb-0">
                The software helps businesses stay compliant with financial regulations by automating the generation of necessary reports and filings.

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
                src="/img/tamc3.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title">Time Efficiency</h5>
              <p class="card-text">
                By automating repetitive tasks and streamlining processes, Tally saves significant time, allowing businesses to focus on more strategic activities.
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
                src="/img/tamc4.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">User-Friendly Interface</h5>
              <p class="card-text mb-0">
                Tally's intuitive interface makes it easy for users to navigate through INR-related tasks, even for those with minimal technical knowledge.
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
                src="/img/tamc5.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Real-Time Data Management</h5>
              <p class="card-text mb-0">
                Tally provides real-time updates and insights, enabling businesses to monitor and manage their financial status promptly.


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
                src="/img/tamc6.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Comprehensive Reporting</h5>
              <p class="card-text mb-0">
                The software offers detailed reports and analytics, helping businesses make informed decisions and maintain transparency in their financial activities.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
    <!-- key benefits end -->

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
        What is INR filing in Tally?
        </button>
      </h2>
      <div
        id="flush-collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            INR filing in Tally refers to the process of managing and reporting financial transactions involving International Normalized Ratio (INR) using Tally software. Tally automates the recording, calculation, and filing of INR-related data, ensuring accuracy and compliance with financial regulations.
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
        How does Tally help in INR filing?
        </button>
      </h2>
      <div
        id="flush-collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Tally streamlines INR filing by automating calculations, generating necessary financial reports, and providing tools to easily manage and file returns. It helps reduce errors and saves time in the process.
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
        Is Tally suitable for businesses of all sizes?
        </button>
      </h2>
      <div
        id="flush-collapseThree"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Yes, Tally is scalable and can handle financial transactions for businesses of all sizes, from small enterprises to large corporations. Its flexibility makes it suitable for a wide range of business needs.
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
        Can I generate reports related to INR filing in Tally?
        </button>
      </h2>
      <div
        id="flush-collapseFour"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFour"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Yes, Tally allows users to generate detailed financial reports, including those related to INR filing. These reports help in analyzing financial data and ensuring accurate filing.
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
        Is Tally user-friendly for INR filing?
        </button>
      </h2>
      <div
        id="flush-collapseFive"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFive"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Tally is designed with a user-friendly interface that simplifies the process of INR filing. Even users with minimal technical knowledge can navigate the software and complete filing tasks with ease.
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

<?php include './../contact.php' ?>



<!-- contact end -->




<!-- Vendor Start -->
<?php include './../vendor.php' ?>
<!-- Vendor End -->









<!-- footer start -->
<?php include '../footer.php' ?>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <?php include '../linkscript.php'; ?>
</body>

</html>






