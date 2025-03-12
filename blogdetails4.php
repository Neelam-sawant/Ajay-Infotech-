
<head>
  <meta charset="utf-8">
  <?php include 'linkcss.php' ?>




  <!-- styling start -->
<style>






  .main-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 20px;
    gap: 20px; /* Added gap for spacing between containers */
  }

  .image-text-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    flex: 1; /* Ensures it takes available space */
  }

  .image {
    width: 100%; /* Responsive width */
    height: auto; /* Maintain aspect ratio */
  }

  .text-below-image {
    margin-top: 10px;
    width: 100%; /* Match container width */
  }

  .search-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-left:40%;
    width: 100%; /* Make width flexible */
    max-width: 300px; /* Limit width for responsiveness */
    height: auto; /* Adjust based on content */
    background-color: #f0f0f0;
    box-sizing: border-box; /* Include padding and border in width and height */
    padding: 20px; /* Add padding */
  }

  .category-recent-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    gap: 20px; /* Add gap between columns */
    max-width: 1000px;
    width: 100%;
    margin: 0 auto; /* Center horizontally */
  }

  .blog-category,
  .recent-posts {
    flex: 1; /* Ensure columns take equal space */
    padding: 20px;
    box-sizing: border-box;
  }

  .blog-category {
    background-color: #e0e0e0;
  }

  .recent-posts {
    background-color: #d0d0d0;
  }

  .accordion-background {
    background-color: #e7eaf6;
    width: 100%; /* Full width */
    padding: 20px;
  }

  .something {
    display: flex;
    flex-direction: column; /* Align items vertically */
    align-items: center;
    gap: 10px; /* Spacing between image and text */
  }

  .something a {
    text-align: center; /* Center text in links */
  }


</style>
<!-- styling end -->




<script>
    // Check if the URL contains "success=true" and show an alert
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success') && urlParams.get('success') === 'true') {
            alert('Thank you for your message!');
        }
    };
  </script>
  

</head>


<body>
  

  
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->






<!-- Navbar & Carousel Start -->
<?php include 'navbar.php' ?>
<!-- Navbar & Carousel end -->


<!-- background name display start -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Shortcuts in Tally Prime</h1>
</div>
<!-- background name display end -->

<!-- Full Screen Search End -->

<!-- blog details page start -->
<div class="accordion-background">
  <div class="main-container">
    <!-- First Container: Image and Text -->
    <div class="shortcut-section">
    <h2 class="shortcut-title">Tally Prime Shortcuts</h2>
    <div style="display: flex; justify-content: center; gap: 50px; margin-top: 20px;">
    <!-- First Table -->
    <table style="width: 40%; border-collapse: collapse; text-align: left; font-family: Arial, sans-serif; background-color: #f8f9fa;">
        <thead>
            <tr style="background-color: #d3d3d3; color: #333; font-weight: bold;">
                <th style="padding: 12px; border-bottom: 2px solid #666;">Action</th>
                <th style="padding: 12px; border-bottom: 2px solid #666;">Key</th>
                <th style="padding: 12px; border-bottom: 2px solid #666;">Equivalent in Tally ERP 9</th>
            </tr>
        </thead>
        <tbody>
            <tr><td style="padding: 10px;">Open Company</td><td style="padding: 10px;">Ctrl + O</td><td style="padding: 10px;">Alt + F3</td></tr>
            <tr><td style="padding: 10px;">Change Company</td><td style="padding: 10px;">Ctrl + F3</td><td style="padding: 10px;">Alt + F3</td></tr>
            <tr><td style="padding: 10px;">Shut Company</td><td style="padding: 10px;">Alt + F1</td><td style="padding: 10px;">Alt + F1</td></tr>
            <tr><td style="padding: 10px;">Open Vouchers</td><td style="padding: 10px;">Ctrl + B</td><td style="padding: 10px;">F2</td></tr>
            <tr><td style="padding: 10px;">Display Daybook</td><td style="padding: 10px;">Alt + G</td><td style="padding: 10px;">D</td></tr>
            <tr><td style="padding: 10px;">Alter Masters</td><td style="padding: 10px;">Ctrl + H</td><td style="padding: 10px;">A</td></tr>
            <tr><td style="padding: 10px;">Quit Tally</td><td style="padding: 10px;">Ctrl + Q</td><td style="padding: 10px;">Esc</td></tr>
        </tbody>
    </table>

    <!-- Second Table -->
    <table style="width: 40%; border-collapse: collapse; text-align: left; font-family: Arial, sans-serif; background-color: #f8f9fa;">
        <thead>
            <tr style="background-color: #d3d3d3; color: #333; font-weight: bold;">
                <th style="padding: 12px; border-bottom: 2px solid #666;">Action</th>
                <th style="padding: 12px; border-bottom: 2px solid #666;">Key</th>
                <th style="padding: 12px; border-bottom: 2px solid #666;">Equivalent in Tally ERP 9</th>
            </tr>
        </thead>
        <tbody>
            <tr><td style="padding: 10px;">Create a Ledger</td><td style="padding: 10px;">Alt + C</td><td style="padding: 10px;">Alt + C</td></tr>
            <tr><td style="padding: 10px;">Create a Voucher</td><td style="padding: 10px;">Ctrl + V</td><td style="padding: 10px;">F7</td></tr>
            <tr><td style="padding: 10px;">Print Reports</td><td style="padding: 10px;">Ctrl + P</td><td style="padding: 10px;">Alt + P</td></tr>
            <tr><td style="padding: 10px;">Export Data</td><td style="padding: 10px;">Alt + E</td><td style="padding: 10px;">Alt + E</td></tr>
            <tr><td style="padding: 10px;">Change Date</td><td style="padding: 10px;">F2</td><td style="padding: 10px;">F2</td></tr>
            <tr><td style="padding: 10px;">Create a Stock Item</td><td style="padding: 10px;">Alt + I</td><td style="padding: 10px;">Alt + I</td></tr>
            <tr><td style="padding: 10px;">Delete Entry</td><td style="padding: 10px;">Alt + D</td><td style="padding: 10px;">Alt + D</td></tr>
        </tbody>
    </table>
</div>


</div>

    <!-- Second Container: Search Section -->
    <div class="search-section">
      <p style="text-align: center; margin: 10px">Recent Posts</p>
      <br />
      <div class="something">
        <a href="blogdetails.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/tally.png"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
      </div>
      <br>
      <div class="something">
        <a href="blogdetails1.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/bdetails1.png"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
      </div>
      <br />
      <div class="something">
        <a href="blogdetails2.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/bdetails2.png"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
      </div>
      <br />
      <div class="something">
        <a href="blogdetails3.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/e-way-bill.jpeg"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
      </div>
      <br>
     
    </div>
  </div>
</div>



<!-- contact start -->

<?php include 'contact.php' ?>

  
  
  <!-- contact end -->




<!-- Vendor Start -->
<?php include 'vendor.php' ?>
<!-- Vendor End -->









<!-- footer start -->
<?php include 'footer.php' ?>
  <!-- Footer End -->






<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>


</body>



