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

    


<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Tally Integration</h1>
</div>

<section class="container py-5">
  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
    <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h1 class="mb-0">Tally Integration Solutions</h1>
  </div>
</div>      <p class="mb-4">Seamlessly connect your business systems with TallyPrime for real-time data syncing and automated workflows.</p>
    </div>
  </div>

  <!-- Section 1: What is Tally Integration -->
  <div class="row align-items-center my-5">
    <div class="col-md-6" style="padding-left:15%;">
      <img src="img/tally-integration-1.png" alt="Tally Integration" class="img-fluid rounded shadow"  style="height:350px; width:350px; ">
    </div>
    <div class="col-md-6">
      <h3 class="text-primary">What is Tally Integration?</h3>
      <p>It enables businesses to link their ERP, CRM, or online stores directly with Tally. This reduces manual entry and ensures accuracy in accounting, sales, inventory, and reporting.</p>
      <ul style="list-style: none; padding-left: 0;">
        <li>🔗 Real-time Data Sync</li>
        <li>📦 Inventory Updates</li>
        <li>🧾 Automated Invoice Import</li>
        <li>📊 Better Decision Making</li>
      </ul>
    </div>
  </div>

  <!-- Section 2: Benefits of Tally Integration -->
  <div class="row align-items-center my-5 flex-md-row-reverse">
    <div class="col-md-6" style="padding-right:15%;">
      <img src="img/tally-benefits.png" alt="Benefits of Tally Integration" class="img-fluid rounded shadow" style="height:350px; width:350px;">
    </div>
    <div class="col-md-6">
      <h3 class="text-primary">Key Benefits</h3>
      <p>Automate routine tasks and enhance productivity with secure and reliable integration between Tally and your business tools.</p>
      <ul style="list-style: none; padding-left: 0;">
        <li>✅ Save Time & Effort</li>
        <li>✅ Eliminate Data Duplication</li>
        <li>✅ Improve Accuracy</li>
        <li>✅ Increase Financial Visibility</li>
      </ul>
      <a href="maincontact.php" class="btn btn-primary mt-3">Contact Us</a>
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










