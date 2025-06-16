<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<?php include 'linkcss.php'; ?>



  
 <style>
  body {
    font-family: Arial, sans-serif;
    background: #fff;
  }

  .switch-container {
    background: #e6f7ff;
    border-radius: 30px;
    border: 1px solid #0077b6;
    display: flex;
    justify-content: space-between;
    padding: 5px;
    width: 500px;
    margin: 40px auto 20px auto;
    position: relative;
    overflow: hidden;
  }

  .switch-button {
    flex: 1;
    text-align: center;
    padding: 10px 0;
    cursor: pointer;
    border-radius: 30px;
    color: #004b75;
    font-weight: 500;
    z-index: 2;
    position: relative;
    transition: color 0.3s;
  }

  .switch-button.active {
    color: #fff;
  }

  .switch-indicator {
    position: absolute;
    top: 5px;
    bottom: 5px;
    left: 5px;
    width: calc(100% / 4 - 10px); /* For 3 buttons */
    background: #0077b6;
    border-radius: 25px;
    transition: left 0.3s ease;
    z-index: 1;
  }

  .card-section {

    transform: translateY(20px);
    display: none;
    margin-top: 30px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.4s ease, transform 0.4s ease;
    
  }

  .card-section.active {
    display: flex;
    justify-content: center;
    gap: 20px;
    opacity: 1;
  }

  .card {
    width: 200px;
    padding: 20px;
    border-radius: 30px;
    border: 1px solid #0077b6;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  .card h3 {
    margin: 0 0 10px;
  }
</style>

</head>
<body>


<!-- NavbarStart -->
<?php include 'navbar.php'; ?>
<!--Navbar End-->   

    

<!-- Pricing Plan Start -->
  <div class="aiheaderimage">
  <img src="img/Tally Pime backgrornd image.png" class="header-image">
  <h1 class="title">Buy Tally Prime</h1>
</div>

  <div class="switch-container mt-5">
    <div class="switch-button active" data-target="section1">1 Month</div>
    <div class="switch-button" data-target="section2">3 Months</div>
    <div class="switch-button" data-target="section3">12 Months</div>
    <div class="switch-button" data-target="section4">Lifetime</div>
  </div>

  <div id="section1" class="card-section active">
   <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER</h2>
        <p class="text-gray-600 mt-2">For individual PC usage</p>
        <hr class="my-4">
     <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>

        <h3 style="margin-top: 20%;">INR <strong>750</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 135)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
   <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">GOLD</h2>
        <p class="text-gray-600 mt-2">Multi User using LAN</p>
        <hr class="my-4">
     <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>


        <h3 style="margin-top: 20%;">INR <strong>2,250</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 405)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
  </div>

  <div id="section2" class="card-section">
   <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER</h2>
        <p class="text-gray-600 mt-2">For individual PC usage</p>
        <hr class="my-4">
     <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>


        <h3 style="margin-top: 20%;">INR <strong>2,138</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 385)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
   <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">GOLD</h2>
        <p class="text-gray-600 mt-2">Multi User using LAN</p>
        <hr class="my-4">
     <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>

        <h3 style="margin-top: 20%;">INR <strong>6,413</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 1,154)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
  </div>

  <div id="section3" class="card-section">
   <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER</h2>
        <p class="text-gray-600 mt-2">For individual PC usage</p>
        <hr class="my-4">
      <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>


        <h3 style="margin-top: 20%;">INR <strong>8,100</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 1,458)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
   <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">GOLD</h2>
        <p class="text-gray-600 mt-2">Multi User using LAN</p>
        <hr class="my-4">
     <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>

        <h3 style="margin-top: 20%;">INR <strong>24,300</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 4,374)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
  </div>

  <div id="section4" class="card-section">
   <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">SILVER</h2>
        <p class="text-gray-600 mt-2">For individual PC usage</p>
        <hr class="my-4">
      <ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>


        <h3 style="margin-top: 20%;">INR <strong>22,500</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 4,050)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
    <div style="width: 300px; background: #e6f7ff; border: 1px solid #0077b6; border-radius:20px;; box-shadow: 0 0 15px rgba(0,0,0,0.1); padding: 30px; text-align: center;">
        <h2 class="text-xl font-semibold">GOLD</h2>
        <p class="text-gray-600 mt-2">Multi User using LAN</p>
        <hr class="my-4">
<ul style="list-style: none; padding: 0; text-align: left; margin-top: 20px;">
  <li>✔️ Fully loaded with all Features</li>
  <li>✔️ Free access to TSS Features</li>
  <li>✔️ Invoicing & Accounting</li>
  <li>✔️ Inventory Management</li>
  <li>✔️ GST and Compliance</li>
  <li>✔️ Banking and Cashflow</li>
  <li>✔️ e-Invoicing and e-way bills</li>
  <li>✔️ Connected Services</li>
  <li>✔️ Business Operation</li>
</ul>


        <h3 style="margin-top: 20%;">INR <strong>67,500</strong></h3>
      <p style="font-size: 14px;">+18% GST (INR 12,150)</p><a href="maincontact">
      <button style="margin-top: 10px; background: #2bb1e0; border: none; padding: 10px 25px; border-radius: 25px; font-weight: bold; color:white;">Buy Now</button></a>
        <p class="text-xs text-gray-400 mt-2">IN Indian License</p>
      </div>
  </div>
 <script>
  const buttons = document.querySelectorAll('.switch-button');
  const sections = document.querySelectorAll('.card-section');
  const indicator = document.createElement('div');
  indicator.classList.add('switch-indicator');
  document.querySelector('.switch-container').appendChild(indicator);

  buttons.forEach((button, index) => {
    button.addEventListener('click', () => {
      // Active button style
      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      // Move indicator
      const totalButtons = buttons.length;
      const containerWidth = document.querySelector('.switch-container').offsetWidth;
      const buttonWidth = containerWidth / totalButtons;
      indicator.style.width = `calc(100% / ${totalButtons} - 10px)`;
      indicator.style.left = `${index * buttonWidth + 5}px`;

      // Section switch with fade effect
      sections.forEach(section => {
        section.classList.remove('active');
        setTimeout(() => section.style.display = 'none', 400);
      });

      const target = document.getElementById(button.getAttribute('data-target'));
      setTimeout(() => {
        target.style.display = 'flex';
        setTimeout(() => target.classList.add('active'), 10);
      }, 400);
    });
  });

  // Initial state
  window.addEventListener('DOMContentLoaded', () => {
    const activeIndex = [...buttons].findIndex(btn => btn.classList.contains('active'));
    const containerWidth = document.querySelector('.switch-container').offsetWidth;
    const buttonWidth = containerWidth / buttons.length;
    indicator.style.left = `${activeIndex * buttonWidth + 5}px`;

    // Ensure only one section is shown
    const target = document.getElementById(buttons[activeIndex].getAttribute('data-target'));
    target.style.display = 'flex';
    setTimeout(() => target.classList.add('active'), 10);
  });
</script>



<!-- Vendor Start -->


<!-- Vendor End -->
<?php include 'maincontact.php' ?>


<!-- footer start -->
    <?php include 'footer.php' ?>
  <!-- Footer End -->








<!-- Back to Top -->

<?php include 'linkscript.php'; ?>

</body>

</html>





