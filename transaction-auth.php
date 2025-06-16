
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
    <h1 class="title">TallyPrime Transaction Authorisation
</h1>
</div>
<!-- background name display end -->

<!-- Full Screen Search End -->

<!-- blog details page start -->

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5 position-relative">
                        <img class="img-fluid w-100 rounded mb-5" src="img/trans-auth.png" alt="">
                        <a class="position-absolute bg-primary text-white rounded-end py-1 px-3" 
       style="top: 20px; left: 0; z-index: 10;" 
       href="transaction-auth.php">
        22 May 2025
    </a>
                        <h1 class="mb-4">TallyPrime Transaction Authorisation
</h1>
                      <p>
            TallyPrime has introduced a powerful feature called <strong>Transaction Authorisation</strong> that enhances the security and control over business operations. This feature allows businesses to implement a maker-checker mechanism, ensuring that every transaction passes through a defined approval workflow before being finalized.
        </p>

        <h2>What is Transaction Authorisation?</h2>
        <p>
            Transaction Authorisation in TallyPrime is a process where every transaction (like a Sales Invoice, Purchase Entry, Payment, etc.) created by one user (the maker) is sent for approval by another user (the checker or authoriser).
        </p>

        <h2>Why Is It Important?</h2>
        <ul>
            <li>Prevents unauthorized or incorrect entries</li>
            <li>Improves accuracy and auditability</li>
            <li>Ensures compliance with internal financial controls</li>
            <li>Helps in delegating responsibilities efficiently</li>
        </ul>

        <h2>How to Enable Transaction Authorisation in TallyPrime</h2>
        <ol>
            <li>Go to <strong>Gateway of Tally &gt; F11: Features &gt; Security Control</strong>.</li>
            <li>Enable <strong>Use TallyVault Password</strong> and <strong>Set Users and Passwords</strong>.</li>
            <li>Create roles for ‘Data Entry’ and ‘Authoriser’ with appropriate permissions.</li>
            <li>Enable the option <strong>Set rules for authorisation</strong> in security control.</li>
        </ol>

        <h2>Typical Workflow</h2>
        <ol>
            <li>User A (Data Entry Operator) creates a voucher.</li>
            <li>Voucher is marked as <strong>Pending for Authorisation</strong>.</li>
            <li>User B (Authoriser) logs in and views all pending vouchers.</li>
            <li>Authoriser approves or rejects the transaction.</li>
            <li>Once approved, the voucher becomes part of books.</li>
        </ol>

        <h2>Benefits of Using This Feature</h2>
        <ul>
            <li>Better internal control system</li>
            <li>Reduces errors and fraudulent entries</li>
            <li>Ensures management oversight on sensitive transactions</li>
        </ul>

        <h2>Conclusion</h2>
        <p>
            The Transaction Authorisation feature in TallyPrime is a game changer for businesses that want to enforce strict financial discipline and governance. It empowers management to review and approve transactions before they impact financial reports — ensuring better accountability and accuracy.
        </p>

        <p><strong>Start using Transaction Authorisation in TallyPrime today and strengthen your business controls.</strong></p>
                    </div>
                    <!-- Blog Detail End -->
    
                   
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <!-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group" style="margin-left:20px;">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div> -->
                    <!-- Search Form End -->
    
                  
    
                    <!-- Recent Post Start 
                    <div class="mb-4 wow slideInUp" data-wow-delay="0.1s" style="margin-left:30px;">
                    <h5 class="section-title-sm pb-2" >Recent Post</h5>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img/tally.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="blogdetails.php" class="small ms-2">What’s new in Tally Prime 5.0?</a>
                    </div>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img\bdetails1.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="blogdetails1.php" class="small ms-2">Working with reports in Tally Prime</a>
                    </div>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img\bdetails21.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="blogdetails2.php" class="small ms-2">Discover Tally Prime: Simplyfing Business</a>
                    </div>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img/e-way-bill.jpeg" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="blogdetails3.php" class="small ms-2">E-Way Bill in Tally Prime</a>
                    </div>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img/tally 6.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="blogdetails4.php" class="small ms-2">What's new in Tally Prime 6.0?</a>
                    </div>
                    
                </div>
                    Recent Post End -->
                          <div class="recent-blogs" style="padding-left:20px;">
                    <?php include 'recentblogs.php' ?>
                    </div>
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s" style="margin-left:20px;">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                           
                        </div>
                    </div>
                
                    </div>
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

<?php include 'backtop.php' ?>
<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>
  
</body>



