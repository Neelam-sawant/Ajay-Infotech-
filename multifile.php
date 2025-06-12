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
    <h1 class="mb-0">Multi File Attachment</h1>
  </div>
</div>      <p class="mb-4">Attach multiple documents to vouchers, ledgers, and inventory masters in Tally to improve compliance and audit-readiness.</p>
    </div>
  </div>

  <!-- Section 2: Where You Can Use It -->
  <div class="row align-items-center my-5">
    <div class="col-md-6">
      <img src="img/attach-files-tally.png" alt="Attach Files in Tally" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h3 class="text-primary">Where You Can Use File Attachments</h3>
      <ul style="list-style: none; padding-left: 0;">
        <li>🧾 Attach bills, invoices, or e-way bills in <strong>Sales & Purchase Vouchers</strong></li>
        <li>📑 Store agreements or certificates in <strong>Ledger Masters</strong></li>
        <li>📦 Add product images or datasheets in <strong>Inventory Items</strong></li>
      </ul>
      <p>This keeps everything documented and easily accessible within Tally.</p>
    </div>
  </div>

  <!-- Section 3: Benefits & How It Works -->
  <div class="row align-items-center my-5 flex-md-row-reverse">
    <div class="col-md-6">
      <!-- <img src="img/file-benefits.png" alt="Benefits of File Attachment" class="img-fluid rounded shadow"> -->
    </div>
    <div class="col-md-6">
      <h3 class="text-primary">Benefits & How It Works</h3>
      <ul style="list-style: none; padding-left: 0;">
        <li>✅ Keep records audit-ready</li>
        <li>✅ Save time and avoid paperwork</li>
        <li>✅ Support for PDF, JPG, DOC, XLS, and more</li>
        <li>✅ Stored in your company folder or cloud location</li>
      </ul>
      <p><strong>How to Use:</strong> Enable it via <em>F12 > General Configuration > Enable Attachments</em>, then use <kbd>Ctrl + A</kbd> in any voucher.</p>
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










