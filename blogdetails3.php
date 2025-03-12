
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
    <h1 class="title">E-Way Bill in Tally Prime</h1>
</div>
<!-- background name display end -->

<!-- Full Screen Search End -->

<!-- blog details page start -->
<div class="accordion-background">
  <div class="main-container">
    <!-- First Container: Image and Text -->
    <div class="image-text-container">
      <img src="img\e-way-bill.jpeg" alt="Image" class="image" />
      <h1 class="text-below-image">E-Way Bill TallyPrime</h1>
      <div class="eway-bill-info">
    <ul>
        <li>The e-Way Bill system, introduced by the government, simplifies GST compliance by ensuring seamless movement of goods. An e-Way Bill document must be carried while transporting goods between locations, containing essential details like the Bill number.</li>
        <li>Tally Prime streamlines the e-Way Bill process by integrating it with regular invoicing, eliminating the need for additional expertise.</li>
        <li>The system applies to GST-registered businesses and enrolled transporters, requiring an e-Way Bill for goods exceeding Rs. 50,000 in value, whether for supply, non-supply reasons, or inward supply from unregistered sellers.</li>
    </ul>
</div><div class="eway-bill-header">
    <h2>What Is E-Way Bill Report?</h2>
</div>
<div class="eway-bill-info">
    <p>
        The e-Way Bill report is a one-stop shop for your e-Way Bill needs in <strong>TallyPrime</strong>. You can view the e-Way Bill status of your transactions, and take the next steps accordingly. You can perform operations such as e-Way Bill generation and cancellation for one or many transactions. The e-Way Bill report also allows you to view the transactions where the details are incomplete or incorrect, and update the required information.
    </p>
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
        <a href="blogdetails4.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/shortcut.png"
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



