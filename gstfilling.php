
<!-- All things are start from here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php'; ?>



    <!-- styling start here -->
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
  
    <!-- styling end here -->

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
    <h1 class="title">GST Filling</h1>
</div>
<!-- background name display end -->







<div
  style="background-color:  rgb(253, 253, 253)"
  class="container-fluid custom-description-image py-5 wow fadeInUp"
  data-wow-delay="0.1s"
>
  <div class="container py-5">
    <!-- First Component -->
    <div class="row g-5 mt-5">
      <!-- Image Column on the Left -->
      <div class="col-lg-5">
    <div class="position-relative">
        <img
            class="rounded wow zoomIn"
            data-wow-delay="0.9s"
            src="img/gfilling.png"
            alt="Image"
            style="margin-left:30px;width: 80%; height: 30%; object-fit: contain; margin-right: 10px;"
        />
    </div>
</div>

      <!-- Text Column on the Right -->
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5" style="margin-left : 10px;">
          <h1 class="mb-0">GST Filling</h1>
        </div>
        <p class="mb-4"  style="margin-left : 10px;">
            <b>GST Filing with Tally</b> involves using Tally's integrated GST features to manage and automate the filing process, ensuring accuracy and compliance. TallyPrime, the latest version of Tally, provides a comprehensive solution for GST accounting, making it easier for businesses to file GST returns directly from their accounting software.
        </p>
        <p class="mb-0"  style="margin-left : 10px;">
            <b>GST-Compliant Invoicing:</b>Tally allows you to create GST-compliant invoices with HSN/SAC codes, tax rates, and other necessary details automatically populated.
            It supports different types of GST, including CGST, SGST, IGST, and UTGST, depending on the nature of the transaction.
        </p>
        <p class="mb-0"  style="margin-left : 10px;">
            <b>Automated Tax Calculations:</b>
            Tally automates the calculation of GST for each transaction, reducing the chances of errors.
            It supports different tax scenarios like reverse charge, exempted goods/services, and zero-rated supplies.
        </p>
        <p class="mb-0"  style="margin-left : 10px;">
            <b>Input Tax Credit (ITC) Management:</b>
            Tally helps you manage and track your Input Tax Credit by maintaining a detailed record of GST paid on purchases.
            It automatically matches the ITC with GSTR-2A data, making reconciliation straightforward.
        </p>
        <p class="mb-0"  style="margin-left : 10px;">
            <b>GST Return Preparation:</b>
            Tally prepares all the necessary GST returns (e.g., GSTR-1, GSTR-3B) by consolidating the transaction data entered.
            The software categorizes transactions based on their GST applicability, simplifying the return preparation process.
        </p>
        <a
          href="maincontact.php"
          class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
           style="margin-left : 10px;"
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
                src="img/tamc1.svg"
                class="card-img-top"
                alt="Image"
              />
            </div>
            <div class="card-body">
              <h5 class="card-title mb-0">Automated Calculations</h5>
              <p class="card-text mb-0">
                Reduces errors by automating GST calculations for transactions.
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
              <h5 class="card-title mb-0">Simplified Return Preparation</h5>
              <p class="card-text mb-0">
                Easily prepares GST returns like GSTR-1 and GSTR-3B from transaction data.

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
              <h5 class="card-title">Seamless Reconciliation</h5>
              <p class="card-text">
                Matches purchase data with GSTR-2A, ensuring accurate Input Tax Credit claims.
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
              <h5 class="card-title mb-0">Error Detection</h5>
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
              <h5 class="card-title mb-0">E-Filing Support</h5>
              <p class="card-text mb-0">
                Facilitates easy export of GST returns in the required format for filing.
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
              <h5 class="card-title mb-0">Comprehensive Reports</h5>
              <p class="card-text mb-0">
                Provides detailed GST reports for review before filing.
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
        How does Tally handle GST invoicing?
        </button>
      </h2>
      <div
        id="flush-collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Tally automates the creation of GST-compliant invoices by applying the correct tax rates based on the HSN/SAC codes. It supports all types of GST (CGST, SGST, IGST) and handles special cases like reverse charge and export transactions.
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
        Can I reconcile my Input Tax Credit (ITC) with GSTR-2A using Tally?
        </button>
      </h2>
      <div
        id="flush-collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Yes, Tally provides a reconciliation feature that allows you to compare your purchase data with GSTR-2A. This helps ensure that your Input Tax Credit claims are accurate and match the data reported by your suppliers.
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
        Does Tally help in identifying errors in GST returns before filing?
        </button>
      </h2>
      <div
        id="flush-collapseThree"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Tally automatically checks for errors or inconsistencies in your GST data, such as mismatches between invoices and returns. It provides suggestions for correcting these errors to ensure accurate and compliant GST filings.
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
        Can I file GST returns directly from Tally?
        </button>
      </h2>
      <div
        id="flush-collapseFour"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFour"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            While Tally cannot directly file returns on the GST portal, it allows you to prepare and export GST returns in the required format (like JSON files). These files can then be uploaded to the GST portal for e-filing.
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
        Is Tally suitable for multi-company GST management?
        </button>
      </h2>
      <div
        id="flush-collapseFive"
        class="accordion-collapse collapse"
        aria-labelledby="flush-headingFive"
        data-bs-parent="#accordionFlushExample"
      >
        <div class="accordion-body">
            Yes, Tally supports multi-company setups, allowing you to manage GST compliance for multiple companies or branches within a single environment. It also supports multi-user access, enabling collaboration across teams.
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

</html>




