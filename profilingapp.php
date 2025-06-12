<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<?php include 'linkcss.php'; ?>



  
    <style>
/* Center the form container */
.container-fluid {
    margin: 0 auto;
    padding: 0 15px; /* Adjust as needed */
}

/* Ensuring the container is within the width */
.container {
    max-width: 1200px; /* Adjust to your desired maximum width */
    margin: 0 auto; /* Center the container */
}

/* Ensure row takes full width */
.row.g-5 {
    width: 100%; /* Ensure the row stretches to the full width */
}

/* Flex container for input fields */
.row.g-3 {
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: stretch; /* Ensure children stretch to full width */
}

/* Style for the input fields and select box */
.form-control,
.form-select {
    width: 100%; /* Fill the wrapper */
    height: 55px; /* Set a consistent height for all fields */
    margin-bottom: 15px; /* Space below each field */
    padding: 2%; /* Ensure consistent padding */
    box-sizing: border-box; /* Include padding in height and width */
}


/* Additional styles to ensure everything is centered */
.bg-primary {
    display: flex; /* Ensure parent div uses flexbox */
    flex-direction: column; /* Align items vertically */
    align-items: stretch; /* Ensure items stretch to full width */
    width: 100%; /* Ensure this container is full width */
    padding: 20px; /* Optional padding for aesthetics */
}



    </style>




</head>

<body>





<!-- NavbarStart -->
<?php include 'navbar.php'; ?>
<!--Navbar End-->   

    


<!-- <div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Customer Profiling App</h1>
</div> -->

<section class="py-5 bg-white">
  <div class="container text-center">
    <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">What is it?</h5>
    <h1 class="mb-0">Customer Profiling app in Tally</h1>
  </div>
</div>
    <p class="mb-4">
      The Customer Profiling App is designed to analyze your customer data directly from TallyPrime. It helps you track customer buying behavior, payment patterns, and engagement to improve business decisions.
    </p>
    <p class="mb-0">
      With this tool, businesses can create detailed profiles for each customer, enabling targeted communication, timely follow-ups, and better service delivery.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container text-center">
    <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">App Features</h5>
    <h1 class="mb-0">Features of the Profiling App</h1>
  </div>
</div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="border rounded p-4 h-100 shadow-sm">
          <h5 class="text-primary">Customer Segmentation</h5>
          <p>Group customers based on purchase volume, frequency, and region.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border rounded p-4 h-100 shadow-sm">
          <h5 class="text-primary">Payment Trend Analysis</h5>
          <p>Track overdue payments, average payment days, and credit usage.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border rounded p-4 h-100 shadow-sm">
          <h5 class="text-primary">Loyalty Score</h5>
          <p>Assign loyalty scores based on purchase history and consistency.</p>
        </div>
      </div>
    </div>
  </div>
</section>


  <div class="text-center mt-4">
    <a href="maincontact.php" class="btn btn-primary px-4 py-2 rounded-pill">Contact Us for Demo</a>
  </div>
</div>


<!-- Vendor Start -->
<?php include 'vendor.php'; ?>



<!-- Vendor End -->






<!-- footer start -->
    <?php include 'footer.php' ?>
  <!-- Footer End -->








<!-- Back to Top -->
<?php include 'backtop.php' ?>

<?php include 'linkscript.php'; ?>

</body>
</body>

</html>





<!-- home page end here -->










