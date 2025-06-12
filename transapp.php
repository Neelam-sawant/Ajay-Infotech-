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

    

<!-- 
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Trans Approval App</h1>
</div> -->

<section class="py-5 bg-white">
  <div class="container text-center">
     <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">What is it?</h5>
    <h1 class="mb-0">Transaction Approval app in Tally</h1>
  </div>
</div>
    <p class="mb-4">
      The Transaction Approval App adds a layer of control within Tally by enabling managers or admins to approve or reject financial entries before they are finalized.
    </p>
    <p class="mb-0">
      Ideal for businesses that require multi-level authorization for payments, purchases, sales, or journal entries — ensuring accuracy, compliance, and reduced fraud.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container text-center">
     <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">Key Features of</h5>
    <h1 class="mb-0">Highlights of Approval System</h1>
  </div>
</div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="border rounded p-4 h-100 shadow-sm">
          <h5 class="text-primary">Multi-Level Approval</h5>
          <p>Configure multiple levels of authorization for different transaction types.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border rounded p-4 h-100 shadow-sm">
          <h5 class="text-primary">Email & SMS Alerts</h5>
          <p>Send instant alerts to approvers when a transaction awaits their action.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border rounded p-4 h-100 shadow-sm">
          <h5 class="text-primary">Approval Logs</h5>
          <p>Maintain a detailed log of approvals, rejections, and user activity for audit purposes.</p>
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










