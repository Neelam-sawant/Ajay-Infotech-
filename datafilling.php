
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
  



  <!-- Navbar & Carousel Start -->
<?php include 'navbar.php' ?>
<!-- Navbar & Carousel end -->



<!-- background name start -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Data Entry</h1>
</div>
<!-- background name end -->

  







  <div
  style="background-color:  rgb(253, 253, 253)"
  class="container-fluid custom-description-image py-5 wow fadeInUp"
  data-wow-delay="0.1s"
>
  <div class="container py-5">
    <!-- First Component -->
    <div class="row g-5 mt-5 d-flex align-items-center" style="gap: 30px; flex-wrap: nowrap;">
    <!-- Image Column on the Left -->
    <div class="col-lg-5">
        <div class="h-100">
            <img 
                class="w-100 rounded custom-image-size wow zoomIn"
                style="object-fit: cover; border-radius: 18px; height: auto;"
                data-wow-delay="0.9s"
                src="img/de1.webp" 
                alt="Image"
                style="height:80%; width:30%; height: 30%; object-fit: contain; margin-right: 10px;"
            />
        </div>
    </div>

    <!-- Text Column on the Right -->
    <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5" style="margin-left:30px;">
            <h1 class="mb-0">Data Entry</h1>
        </div>
        <p class="mb-4" style="margin-left:30px;">
            "Data Entry with Tally" involves entering, managing, and processing financial transactions and other business data using Tally, a popular accounting software. This service typically includes recording daily transactions, managing ledgers, creating invoices, handling GST calculations, generating reports, and maintaining accurate financial records. Tally's user-friendly interface allows businesses to streamline their accounting tasks, ensuring accuracy and compliance with legal requirements. Data entry operators skilled in Tally can help organizations manage their finances efficiently, save time, and focus on their core operations.
        </p>
        <a href="maincontact.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="margin-left:30px;">
            Contact Us
        </a>
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
                src="img/tamc1.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Accuracy</h5>
              <p class="card-text mb-0">
                Automated calculations reduce errors, ensuring precise data entry.
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
              <h5 class="card-title mb-0">Efficiency</h5>
              <p class="card-text mb-0">
                Streamlined processes speed up data entry and management.

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
              <h5 class="card-title">Real-time Updates</h5>
              <p class="card-text">
                Instant updates to financial records as data is entered.
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
              <h5 class="card-title mb-0">Integrated Reporting</h5>
              <p class="card-text mb-0">
                Seamless generation of reports for financial analysis.
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
              <h5 class="card-title mb-0">User-Friendly Interface</h5>
              <p class="card-text mb-0">
                Intuitive design makes it easy for users to navigate.


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
              <h5 class="card-title mb-0">Scalability</h5>
              <p class="card-text mb-0">
                Handles large volumes of data as your business grows.
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
        How does data entry work in Tally?
        </button>
      </h2>
      <div
        id="flush-collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Data entry in Tally involves inputting financial transactions, such as sales, purchases, receipts, and payments, into the software. Tally automates calculations and updates financial records in real-time.
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
        What types of data can be entered into Tally?
        </button>
      </h2>
      <div
        id="flush-collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            You can enter various types of data, including invoices, receipts, payments, journal entries, and inventory details. Tally also supports payroll and tax-related data.
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
        Is Tally user-friendly for beginners?
        </button>
      </h2>
      <div
        id="flush-collapseThree"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Yes, Tally is designed with a user-friendly interface that simplifies data entry for beginners. It includes features like templates and guided prompts to assist new users.
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
        Can I import data into Tally from other software?
        </button>
      </h2>
      <div
        id="flush-collapseFour"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFour"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Yes, Tally supports data import from various sources, including Excel spreadsheets and other accounting systems, making it easier to transition or consolidate data.
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
        How does Tally ensure the accuracy of entered data?
        </button>
      </h2>
      <div
        id="flush-collapseFive"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFive"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Tally includes built-in validation checks and automated calculations to minimize errors. It also offers features like data reconciliation and audit trails for accuracy verification.
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


   <?php include 'linkscript.php'; ?>
</body>















