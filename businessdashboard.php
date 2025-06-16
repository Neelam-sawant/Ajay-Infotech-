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
    <h1 class="title">Business Dashboard App</h1>
</div> -->

<!-- Section: What is Business Dashboard -->
<div class="container py-5">
 <div class="container d-flex justify-content-center mb-5">
  <div class="section-title text-center position-relative pb-3 mb-4" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">What is</h5>
    <h1 class="mb-0">Business Dashboard App?</h1>
  </div>
</div>
  <p class="text-center mb-4" style="font-size: 1.1rem;">
    The Business Dashboard in TallyPrime provides a visual and real-time overview of your key business metrics. 
    It enables business owners, accountants, and managers to take quick, informed decisions by presenting data like 
    sales, purchases, cash flow, and inventory in an easy-to-understand format.
  </p>
</div>

<!-- Section: Features -->
<div class="container py-5">
  <div class="container d-flex justify-content-center mb-5">
  <div class="section-title text-center position-relative pb-3 mb-4" style="max-width: 700px; width: 100%;">
    <h5 class="fw-bold text-primary text-uppercase">Key Features</h5>
  </div>
</div>
  <ul style="list-style: none; padding-left: 0; font-size: 1.1rem;" class="text-center">
    <li>📊 Graphical representation of financial KPIs</li>
    <li>🧩 Customizable dashboard tiles</li>
    <li>🔍 Drill-down to detailed reports</li>
    <li>📱 Mobile-friendly access via browser or Tally App</li>
    <li>🔄 Real-time, up-to-date data insights</li>
  </ul>

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










