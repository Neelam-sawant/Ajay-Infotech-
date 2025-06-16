<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<?php include 'linkcss.php'; ?>



  
    <style>
/*Plans Style Starts Here */

  /* Wrapper to center toggle */
/* Wrapper centers the toggle switch */
.toggle-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 30px auto;
}

/* Switch container */
.switch {
  position: relative;
  display: inline-block;
  width: 200px;
  height: 46px;
}

/* Hide checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* Slider styling */
.slider {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color:rgb(255, 255, 255);
  border: 2px solid #06a3da;
  border-radius: 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 15px;
  font-weight: 500;
  font-size: 14px;
  color: #333;
  cursor: pointer;
}

/* Toggle highlight */
.slider::before {
  content: "";
  position: absolute;
  height: 32px;
  width: 90px;
  left: 5px;
  top: 5px;
  background-color: #06a3da;
  border-radius: 20px;
  transition: transform 0.3s ease;
  z-index: 1;
}

/* Option text */
.option {
  width: 50%;
  text-align: center;
  z-index: 2;
  transition: color 0.3s;
}

/* Optional spacing tweak for 'Renew TSS' */
.option.renew {
  margin-left: 17px;
}

/* When checkbox is checked, move highlight */
input:checked + .slider::before {
  transform: translateX(95px);
}

/* Text color updates */
input:checked + .slider .license {
  color: #333;
}
input:checked + .slider .renew {
  color: #fff;
}
input:not(:checked) + .slider .license {
  color: #fff;
}
input:not(:checked) + .slider .renew {
  color: #333;
}


/*Plans Style Ends Here */


      /* Page Stlye Starts Here */
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

 /* Page Stlye Ends Here */

    </style>




</head>

<body>





<!-- NavbarStart -->
<?php include 'navbar.php'; ?>
<!--Navbar End-->   

     <div class="aiheaderimage">
  <img src="img/Tally Pime backgrornd image.png" class="header-image">
  <h1 class="title">Buy Tally Prime</h1>
</div>

<!-- Pricing Plan Start -->
  <div class="max-w-5xl mx-auto px-4 text-center">

    <!-- Buy Tally Header -->
<!-- ; -->
<div class="toggle-wrapper">
  <label class="switch" id="button-3">
    <input type="checkbox" class="checkbox">
    <span class="slider">
      <span class="option license">1 Year</span>
      <span class="option renew">2 Year</span>
            <span class="option license">1 Year</span>

                  <span class="option license">1 Year</span>

    </span>
  </label>
</div>


    <!-- Toggle Switch Code End -->

    <p class="text-xs text-gray-500 italic mb-10" style="margin-top: 5px;">IN Indian License</p>

    <!-- Pricing Cards Section -->
     <div id="licenseSection">
<div style="display: flex; justify-content: center; align-items: flex-start; gap: 42px; flex-wrap: wrap; ">

      <!-- Silver Plan -->
      <div style="width: 300px; background: #e6f7ff; border-radius: 15px; border: 1px solid #06a3da; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER</h2>
        <p class="text-gray-600 mt-2">For individual PC usage</p>
        <hr class="my-4">
      <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Free upgrades to all major release</li>
  <li>✔️ Connected Services for GST, Banking and WhatsApp Business</li>
  <li>✔️ Anytime, Anywhere Access to reports and TallyPrime</li>
  <li>✔️ Online Data Sync and consolidation</li>
</ul>

        <h3 style="margin-top: 20%;">INR <strong>4,500</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 810)</p><a href="maincontact.php">
      <button style="margin-top: 10px; background: #06a3da; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Renew Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>

      <!-- Gold Plan -->
      <div style="width: 300px; background: #e6f7ff; border-radius: 15px;border: 1px solid #06a3da; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">GOLD</h2>
        <p class="text-gray-600 mt-2">Multi-user version for LAN</p>
        <hr class="my-4">
       <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Free upgrades to all major release</li>
  <li>✔️ Connected Services for GST, Banking and WhatsApp Business</li>
  <li>✔️ Anytime, Anywhere Access to reports and TallyPrime</li>
  <li>✔️ Online Data Sync and consolidation</li>
</ul>

        <h3 style="margin-top: 20%;">INR <strong>13,500</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 2,430)</p><a href="maincontact.php">
      <button style="margin-top: 10px; background: #06a3da; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Renew Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>

      <!-- TallyPrime Server -->
      <div style="width: 300px; background: #e6f7ff; border-radius: 15px;border: 1px solid #06a3da; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">AUDITOR</h2>
        <p class="text-gray-600 mt-2">For CA only</p>
        <hr class="my-4">
        <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Free upgrades to all major release</li>
  <li>✔️ Connected Services for GST, Banking and WhatsApp Business</li>
  <li>✔️ Anytime, Anywhere Access to reports and TallyPrime</li>
  <li>✔️ Online Data Sync and consolidation</li>
</ul>

        <h3 style="margin-top: 20%;">INR <strong>6,750</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 1,215)</p><a href="maincontact.php">
      <button style="margin-top: 10px; background: #06a3da; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Renew Now</button></a>
              <p class="text-xs text-gray-400 mt-2">IN Indian License</p>

            </div>

    </div>
    </div>
    <div id="renewTssSection" style="display: none;">
<div style="display: flex; justify-content: center; align-items: flex-start; gap: 42px; flex-wrap: wrap;">
    
    <!-- SILVER Plan -->
    <div style="width: 300px; background: #e6f7ff; border-radius: 15px;border: 1px solid #06a3da; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER</h2>
      <p class="text-gray-600 mt-2">For individual PC usage</p>
      <hr class="my-4">
      <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Free upgrades to all major release</li>
  <li>✔️ Connected Services for GST, Banking and WhatsApp Business</li>
  <li>✔️ Anytime, Anywhere Access to reports and TallyPrime</li>
  <li>✔️ Online Data Sync and consolidation</li>
</ul>

      <h3 style="margin-top: 20%;">INR <strong>8,100</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 1,458)</p><a href="maincontact.php">
      <button style="margin-top: 10px; background: #06a3da; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Renew Now</button></a>
<p class="text-xs text-gray-400 mt-2">IN Indian License</p>    </div>

    <!-- GOLD Plan -->
    <div style="width: 300px; background: #e6f7ff; border-radius: 15px;border: 1px solid #06a3da; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">GOLD</h2>
      <p class="text-gray-600 mt-2">Multi-user version for LAN</p>
      <hr class="my-4">
    <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Free upgrades to all major release</li>
  <li>✔️ Connected Services for GST, Banking and WhatsApp Business</li>
  <li>✔️ Anytime, Anywhere Access to reports and TallyPrime</li>
  <li>✔️ Online Data Sync and consolidation</li>
</ul>

     <h3 style="margin-top: 20%;">INR <strong>24,300</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 4,374)</p><a href="maincontact.php">
      <button style="margin-top: 10px; background: #06a3da; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Renew Now</button></a>
<p class="text-xs text-gray-400 mt-2">IN Indian License</p>    </div>
    <!-- UPGRADE Plan -->
    <div style="width: 300px; background: #e6f7ff; border-radius: 15px;border: 1px solid #06a3da; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">AUDITOR</h2>
      <p class="text-gray-600 mt-1">For CA Only </p>
      <hr class="my-4">
       <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Free upgrades to all major release</li>
  <li>✔️ Connected Services for GST, Banking and WhatsApp Business</li>
  <li>✔️ Anytime, Anywhere Access to reports and TallyPrime</li>
  <li>✔️ Online Data Sync and consolidation</li>
</ul>

     <h3 style="margin-top: 20%;">INR <strong>12,150</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 2,187)</p><a href="maincontact.php">
      <button style="margin-top: 10px; background: #06a3da; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Renew Now</button></a>
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








<?php include 'features.php' ?>




<!-- Vendor Start -->
<?php include 'vendor.php'; ?>



<!-- Vendor End -->






<!-- footer start -->
    <?php include 'footer.php' ?>
  <!-- Footer End -->








<!-- Back to Top -->

<?php include 'linkscript.php'; ?>

</body>
</body>

</html>





<!-- home page end here -->










