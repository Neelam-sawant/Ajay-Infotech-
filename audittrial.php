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
    <h1 class="title">Multi File Attachment</h1>
</div> -->
<section class="container py-5">
  <!-- Section 1: Introduction -->
  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
    <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h1 class="mb-0">Audit Trial with Voucher History</h1>
  </div>
</div>      
 <p class="mb-4">Stay audit-ready with full traceability of every change in your Tally vouchers. Know who changed what, when, and why — instantly.</p>
    </div>
  </div>

  <!-- Section 2: How It Works -->
  <div class="row align-items-center my-5">
    <div class="col-md-6">
      <img src="img/audit-trail-tally.png" alt="Tally Audit Trail" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h3 class="text-primary">How Audit Trail Works</h3>
      <ul style="list-style: none; padding-left: 0;">
        <li>🕒 Tracks every modification in vouchers — including date, time & user</li>
        <li>🔁 Records both old and new values after any update</li>
        <li>👥 Multi-user tracking supported with username & role</li>
        <li>📝 Captures reasons for edits (if enabled)</li>
      </ul>
      <p>This ensures complete transparency in financial records, which is essential for statutory audits.</p>
    </div>
  </div>

  <!-- Section 3: Benefits & Compliance -->
  <div class="row align-items-center my-5 flex-md-row-reverse">
    <div class="col-md-6">
      <!-- <img src="img/audit-benefits.png" alt="Audit Trail Benefits" class="img-fluid rounded shadow"> -->
    </div>
    <div class="col-md-6">
      <h3 class="text-primary">Why It Matters</h3>
      <ul style="list-style: none; padding-left: 0;">
        <li>✅ Ensures 100% transparency in your books</li>
        <li>✅ Helps meet MCA & GST audit requirements</li>
        <li>✅ Detects unauthorized edits or data tampering</li>
        <li>✅ Boosts internal control & accountability</li>
      </ul>
    </div>
  </div>
</section>


  <div class="text-center mt-4">
    <a href="maincontact" class="btn btn-primary px-4 py-2 rounded-pill">Contact Us for Demo</a>
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










 