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
    <h1 class="title">Vertical Solutions</h1>
</div>

<section class="py-5 bg-white">
  <div class="container text-center">
    <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">What is it?</h5>
    <h1 class="mb-0">Vertical Solutions in Tally</h1>
  </div>
</div>    <p class="lead">
      Vertical Solutions in Tally are industry-specific customizations that extend TallyPrime's core capabilities. 
      These solutions are designed to meet the unique needs of businesses in various sectors such as Manufacturing, Retail, 
      Pharma, Education, Transport, and more. They enable automation, compliance, and operational efficiency within Tally.
    </p>
  </div>
</section>

<section class="py-5">
  <div class="container text-center">
    <div class="d-flex justify-content-center">
  <div class="section-title text-center position-relative pb-3 mb-5" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">Benefits of</h5>
    <h1 class="mb-0">Vertical Solutions in Tally</h1>
  </div>
</div>    <div class="row justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Manufacturing</h5>
          <p>Track production, raw materials, wastage, job work, and costing with Tally add-ons.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Pharmaceutical</h5>
          <p>Manage batch numbers, expiries, MRP billing, and distribution seamlessly.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-4 border rounded shadow-sm h-100">
          <h5 class="fw-bold">Transport & Logistics</h5>
          <p>Record trip sheets, fuel usage, vehicle maintenance, and freight calculations easily.</p>
        </div>
      </div>
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










