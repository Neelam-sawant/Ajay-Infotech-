
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
    background-color:  rgb(253, 253, 253);
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
  <div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->






<!-- Navbar & Carousel Start -->
<?php include 'navbar.php' ?>
<!-- Navbar & Carousel end -->


<!-- background name display start -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Blog Details</h1>
</div>
<!-- background name display end -->

<!-- Full Screen Search End -->

<!-- blog details page start -->

<div class="container-fluid py-5 wow mx-md-1 fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5 position-relative">
    <img class="img-fluid w-100 rounded mb-5" src="img/tally-6.1.png" alt="">

    <a class="position-absolute bg-primary text-white rounded-end py-1 px-3" 
       style="top: 20px; left: 0; z-index: 10;" 
       href="tally-6.1">
        20 June 2025
    </a>

   <h1>What’s New in Tally Prime 6.1?</h1>
    <p class="lead">Explore the top features of the latest Tally release and how it improves over older versions</p>
  </div>

  <div class="blog-section">
    <h3>🚀 Key Features of TallyPrime 6.1</h3>
    <ul>
      <li><strong>Invoice Management System (IMS):</strong> View, track and act on mismatched, missing, or accepted GST invoices.</li>
      <li><strong>Enhanced GSTR-2B Reconciliation:</strong> Recompute GSTR-2B with user-defined actions and remarks.</li>
      <li><strong>Improved Edit Log Summary:</strong> Easily trace every change with time-stamped version history filters.</li>
      <li><strong>MSME Form 1 Annexure:</strong> Generate supplier-wise details for payments beyond 45 days, compliant with MCA guidelines.</li>
      <li><strong>Smarter Bank Reconciliation:</strong> Match entries with “Potential Match” suggestions and track bank dates for clarity.</li>
      <li><strong>Offline GSTR Filing:</strong> Export GSTR-1 in Excel/CSV for offline upload and seamless filing.</li>
    </ul>
  </div>

  <div class="blog-section">
    <h3>🔥 Why TallyPrime 6.1 is Better than Older Versions</h3>
    <ul>
      <li><strong>Better GST Compliance:</strong> IMS makes it easier to claim accurate ITC and reduce mismatches.</li>
      <li><strong>Advanced Audit Trails:</strong> Track who did what with full clarity, boosting data integrity and accountability.</li>
      <li><strong>MSME Readiness:</strong> Supports MSME Act compliance out of the box.</li>
      <li><strong>Ease of Filing:</strong> Save time by using offline GSTR tools and avoid portal-related delays.</li>
      <li><strong>User Experience:</strong> Cleaner navigation, faster reconciliation, and better data export options.</li>
    </ul>
  </div>



                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form End -->
                    <div class="recent-blogs" style="padding-left:20px;">
                   <?php include 'recentblogs.php' ?>
                    </div>
                 
    <!-- Second Container: Search Section -->
    </div>
</div>
</div>
</div>

  <div class="blog-section text-center">
    <h4 class="text-success">✅ Ready to Upgrade?</h4>
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






<?php include 'backtop.php' ?>

<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>


</body>



