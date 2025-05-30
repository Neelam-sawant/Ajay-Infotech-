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
    <h1 class="title">Tally</h1>
</div>


<!-- Text and Description Start for Tally -->

<div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h5 class="fw-bold text-primary text-uppercase">About Tally</h5>
            <h1 class="mb-0">The Best Products and Services</h1>
          </div>
          <p class="mb-4">Tally's fully connected e-way bill solution is simple, seamless and reliable with
                    zero manual work. Tally being one of the recognised ISO certified GSP (GST Suvidha Provider),
                    TallyPrime directly integrates with the e-way portal to seamlessly generate e-way bill for you
                    without the need to do it manually.</p>
                    <div class="row g-0 mb-3">
            <div class="col-sm-6">
              <h5><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
              <h5><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
            </div>
            <div class="col-sm-6">
              <h5><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
              <h5><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
              <i class="fa fa-phone-alt text-white"></i>
            </div>
            <div class="ps-4">
              <h5 class="mb-2">Call to ask any question</h5>
              <h4 class="text-primary mb-0">+91 9029005996</h4>
            </div>
          </div>
          <a href="contact.php" class="btn btn-primary py-3 px-5">Contact Us</a>
        </div>
        <div class="col-lg-5">
          <img src="img/about.jpg"  style="border-radius: 20%;" alt="About Image" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Pricing Plan Start -->
  <div class="max-w-5xl mx-auto px-4 text-center">

    <!-- Buy Tally Header -->
    <h1 class="text-3xl font-semibold mb-4" style="margin:5%">Buy Tally</h1>

<div class="toggle-button-cover">
        <div id="button-3" class="button r">
          <input class="checkbox" type="checkbox">
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    <p class="text-xs text-gray-500 italic mb-10" style="margin-top: 5px;">IN Indian License</p>

    <!-- Pricing Cards Section -->
     <div id="licenseSection">
    <div class="grid md:grid-cols-3 gap-8">

      <!-- Silver Plan -->
      <div style="width: 300px; background: #fff; border-radius: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER (Single User)</h2>
        <p class="text-gray-600 mt-2">For individual PC usage</p>
        <hr class="my-4">
        <ul class="space-y-2 text-left text-sm text-gray-700">
          <li>✔️ Free Installation</li>
          <li>✔️ 3 Months of Complimentary Support</li>
        </ul>
        <p class="text-2xl font-bold mt-6">INR 22,500</p>
        <p class="text-sm text-gray-500">+18% GST (INR 4,050)</p>
        <button class="mt-4 px-6 py-2 bg-yellow-400 rounded-full hover:bg-yellow-500 font-semibold">
          Buy Now
        </button>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>

      <!-- Gold Plan -->
      <div style="width: 300px; background: #fff; border-radius: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">GOLD (Multi User)</h2>
        <p class="text-gray-600 mt-2">Multi-user version for LAN environments</p>
        <hr class="my-4">
        <ul class="space-y-2 text-left text-sm text-gray-700">
          <li>✔️ Free Installation</li>
          <li>✔️ 3 Months of Complimentary Support</li>
        </ul>
        <p class="text-2xl font-bold mt-6">INR 67,500</p>
        <p class="text-sm text-gray-500">+18% GST (INR 12,150)</p>
        <button class="mt-4 px-6 py-2 bg-yellow-400 rounded-full hover:bg-yellow-500 font-semibold">
          Buy Now
        </button>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>

      <!-- TallyPrime Server -->
      <div style="width: 300px; background: #fff; border-radius: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">TALLYPRIME SERVER</h2>
        <p class="text-gray-600 mt-2">For medium and large businesses</p>
        <hr class="my-4">
        <ul class="space-y-2 text-left text-sm text-gray-700">
          <li>✔️ Free Expert Consultation</li>
          <li>✔️ Free Installation</li>
          <li>✔️ 3 Months of Complimentary Support</li>
        </ul>
        <p class="text-2xl font-bold mt-6">INR 2,70,000</p>
        <p class="text-sm text-gray-500">+18% GST (INR 48,600)</p>
        <button class="mt-4 px-6 py-2 bg-yellow-400 rounded-full hover:bg-yellow-500 font-semibold">
          Talk to Expert
        </button>
            </div>

    </div>
    </div>
    <div id="renewTssSection" style="display: none;">
<div style="display: flex; justify-content: center; align-items: flex-start; gap: 42px; flex-wrap: wrap;">
    
    <!-- SILVER Plan -->
    <div style="width: 300px; background: #fff; border-radius: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER (Single User)</h2>
      <p class="text-gray-600 mt-2">For individual PC usage</p>
      <hr class="my-4">
      <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
        <li>✔ Connected GST Services</li>
        <li>✔ Powerful Upgrades</li>
        <li>✔ Seamless Data Synchronization</li>
        <li>✔ Secure & Remote Access to Reports</li>
        <li>✔ Smart Banking & Payments</li>
      </ul>
      <h3 style="margin-top: 40%;">INR <strong>4,500</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 810)</p>
      <button style="margin-top: 10px; background: #ffc107; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold;">Buy Now</button>
<p class="text-xs text-gray-400 mt-2">IN Indian License</p>    </div>

    <!-- GOLD Plan -->
    <div style="width: 300px; background: #fff; border-radius: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">Gold (Multi User)</h2>
      <p class="text-gray-600 mt-2">Unlimited multi-user version for LAN environments with multiple PCs</p>
      <hr class="my-4">
      <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
        <li>✔ Connected GST Services</li>
        <li>✔ Powerful Upgrades</li>
        <li>✔ Seamless Data Synchronization</li>
        <li>✔ Secure & Remote Access to Reports</li>
        <li>✔ Smart Banking & Payments</li>
      </ul>
      <h3 style="margin-top: 20%;">INR <strong>13,500</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 2,430)</p>
      <button style="margin-top: 10px; background: #ffc107; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold;">Buy Now</button>
<p class="text-xs text-gray-400 mt-2">IN Indian License</p>    </div>

    <!-- UPGRADE Plan -->
    <div style="width: 300px; background: #fff; border-radius: 15px; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">Upgrade</h2>
      <p class="text-gray-600 mt-2">Specifically designed for use in medium and large businesses, TallyPrime Server works seamlessly with TallyPrime Gold license</p>
      <hr class="my-4">
      <h3 style="margin-top: 85%;">Contact Us</h3>
      <button style="margin-top: 10px; background: #ffc107; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold;">Get Quote</button>
<p class="text-xs text-gray-400 mt-2">IN Indian License</p>    </div>

  </div>
</div>

<script>
  const checkbox = document.querySelector('#button-3 .checkbox');
  const licenseSection = document.getElementById('licenseSection');
  const renewTssSection = document.getElementById('renewTssSection');

  checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
      licenseSection.style.display = 'none';
      renewTssSection.style.display = 'block';
    } else {
      licenseSection.style.display = 'block';
      renewTssSection.style.display = 'none';
    }
  });
</script>

  </div>
<!-- Pricing Plan End -->







<!-- Quote Start -->
<!-- Request A Quote Start -->
<?php include 'quote.php' ?>

<!-- Request A Quote End -->

<!-- Quote End -->

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










