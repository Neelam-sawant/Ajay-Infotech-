
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
    <h1 class="title">Blog Details</h1>
</div>
<!-- background name display end -->

<!-- Full Screen Search End -->


  
<!-- blog details page start -->
<div class="accordion-background">
  <div class="main-container">
    <!-- First Container: Image and Text -->
    <div class="image-text-container">
      <img src="img/bdetails-1.png" alt="Image" class="image" />
      <h1 class="text-below-image">
        TallyPrime Release 5.0: What’s New!
      </h1>
      <h5 class="text-below-image">Overview</h5>
      <p class="text-below-image">
        Stay ahead with TallyPrime Release 5.0, packed with new features and enhancements designed to streamline your accounting, GST compliance, and overall business management. Whether you're in India, the Middle East, or Bangladesh, there’s something here for you!
      </p>
      <h3 class="text-below-image">
        Master Your Accounting and Compliance Needs With Connected GST
      </h3>
      <p class="text-below-image">
        Welcome to an effortless GST compliance experience. Balancing your books with GST requirements is
        now easier than ever, all within the existing flow of TallyPrime.

      </p>
      <h3 class="text-below-image">
        Key Features:
      </h3>
      <p class="text-below-image">
        <li><b>Simpler Uploads & Downloads:</b> Upload GSTR-1, GSTR-3B, and CMP-08 directly from TallyPrime to the
          GST portal. Download GSTR-1, GSTR-3B, GSTR-2A, and GSTR-2B in just a couple of clicks.
          </li>
          <br>
          <li><b>Effortless Filing:</b> File your GSTR-1 directly from TallyPrime without even opening the portal. Choose
            your filing method such as DSC or EVC.</li>
            <br>
          <li><b>Real-Time Party Information:</b> Swiftly create and validate party ledgers using real-time details from
              the portal. No more manual entry of party information. Just fill the GSTIN/UIN of the party</li>
          <br>
          <li><b>Key Insights on ITC:</b> Track your ITC at risk with great accuracy for one or even hundreds of suppliers
            using Bills Payable. Similarly, with Bills Receivable, track the status of invoice uploads against the
            pending bills of a party. Gain further clarity with detailed reports such as Ledger Vouchers – GST
            and Ledger Outstandings – GST, and other predefined saved views.</li>
            
      </p>

      <h3 class="text-below-image">Benefits</h3>
      <p class="text-image-below">
        <li>Resolve mismatches and rejections effortlessly to ensure smooth filing and upload or download.</li>
        <li>Save time with automated processes, such as upload, download, and party validation, which are
          securely connected to the GST portal.
          </li>
        <li>Stay informed with real-time clarity in your compliance and financial transactions directly within
          TallyPrime.</li>
        <li>Ensure compliance with minimal effort, leaving you with more time to focus on your business
          growth</li>
          <br>
          The best part is that you can choose from the best of both worlds, that is, Connected GST as well as the
          existing offline features, as per your convenien
      </p>
      <h3 class="text-below-image">Automated Tax Calculation To Comply With TDS Section 194Q</h3>
        <p class="text-below-image">
          Experience a hassle-free deduction of tax to comply with the Finance Bill’s Section 194Q for TDS
          purchases of goods. This includes:
          <br>
          <li>Automated computation of TDS on purchases exceeding Rs. 50 lakhs annually, based on the Nature
            of Payment.
          </li>
          <li>Handling TDS exemptions on purchases from Government entities eligible for exemptions under
            Section 194Q.
            </li>
          <li>Updating TDS Nature of Payment for one or more parties from a common report within Form 26Q.
          </li>
          <li>Recording advance payments from parties with TDS-integrated Stat Adjustment option for better
            reporting in Form 26Q.
            </li>
        </p>
        <h3 class="text-below-image">
          Tally Plug In Management Within Tally Prime
        </h3>
        <p class="text-below-image">
          Tally Plug-ins developed by Tally Solutions come with additional capabilities for specific business needs
          that extend beyond the existing features of TallyPrime. Get easy access to Tally Plug-ins, such as
          TallyCapital that comes deployed by default, without the hassle of any manual deployment process. Know
          about the plug-ins, check plug-in statuses, and more from the new Tally Plug-In Management report.
          Use the TallyCapital plug-in to check your credit score, check your loan eligibility, and apply for a
          business loan, whenever you need one. Get in touch with your Tally Partner to know more.
        </p>
        <h3 class="text-below-image"> Improved Payment Management</h3>
        <p class="text-below-image">
          <b>Sort Pending Bills:</b> Organize pending bills by due dates, bill dates, or balances to avoid late fees.
          <br>
          <b>Stripe View for Better Readability:</b> Use Stripe View to highlight alternating rows in large reports and vouchers for easier reading.
        </p>
        <h3 class="text-below-image">Instant Notifications</h3>
        <p class="text-below-image">
          <b>New Bell Icon:</b> Stay updated with critical tasks like GST uploads, TSS renewals, and license management through a centralized Notifications report.
          <br>
          <b>Configurable Alerts:</b> Customize the Bell icon to receive notifications your way.
        </p>
        <br>


        <!-- prodcut improvment start -->
        <h1 class="text-below-image">Product Improvements</h1>
        <h3 class="text-below-image"><li>Data Migration</li></h3>
        <p class="text-below-image">
          <b>Seamless Upgrade: </b>Easily move from TallyPrime Release 3.0 or later to Release 5.0 without the need for data migration.
        </p>

        <h3 class="text-below-image"><li>Enhanced Performance</li></h3>
        <p class="text-below-image">
          <b>Faster Bulk Processing:</b>  Enjoy improved speed and reliability during data import, synchronization, bank reconciliation, and more.
        </p>

        <h3 class="text-below-image"><li>Optimized Edit Logs</li></h3>
        <p class="text-below-image">
          <b>Efficient Data Management:</b> Updates in Price Level and Bank Reconciliation now create fewer unnecessary logs, reducing data volume.
        </p>

        <h3 class="text-below-image"><li>WhatsApp Integration</li></h3>
        <p class="text-below-image">
          <b>Auto-filled Contact:</b> Default WhatsApp numbers are now automatically filled when sending Payment or Receipt vouchers.
        </p>
        <!-- prodcut improvment end -->
         <br>
        
        <!-- GST updates start -->
         <h1 class="text-below-image">GST Updates</h1>
         <h3 class="text-below-image"><li>Improved GST Transaction Management</li></h3>
         <p class="text-below-image">
          <b>Non-GST Transactions:</b> Automatically mark non-GST transactions as Not Relevant in GST reports.
          <br>
          <b>Bulk Resolution:</b> Resolve multiple Uncertain Transactions together, saving time.
         </p>
         <h3 class="text-below-image"><li>Enhanced GST Report Classification</li></h3>
         <p class="text-below-image">
          <b>Supplier Invoice Management:</b> Transactions without Supplier Invoice No. or Date are now better categorized in GSTR-3B and GSTR-2A/B Reconciliation reports.</p>


         <h3 class="text-below-image"><li>Export Options</li></h3>
         <p class="text-below-image">
          <b>Old Format Availability:</b> Export GSTR-2A and GSTR-2B Reconciliation reports to Excel using the old format.

         </p>
        <!-- GST updates end -->
         <br>
        <!-- Regional Feature start -->
         <h1 class="text-below-image">Regional Features</h1>
          <p class="text-below-image">
            <b>Indian Users: </b>Access Connected GST and TDS Section 194Q features.
            <br>
            <b>Middle East & Bangladesh Users:</b> Use TallyPrime in your native language on different networked computers.

          </p>
 
        <!-- Regional Feature end -->

    </div>

    <!-- Second Container: Search Section -->
    <div class="search-section">
      <p style="text-align: center;margin: 10px;">Recent Posts</p>
      <br>
      <div class="something">
        <a href="blogdetails.php"><img style="width: 200px;height: 100px;" src="img/bdetails-1.png" alt=""><p style="text-align: center;">click here</p></a>
      </div>
      <br>
      <div class="something">
        <a href="blogdetails1.php"><img style="width: 200px;height: 100px;" src="img/bdetails-2.png" alt=""><p style="text-align: center;">click here</p></a>
      </div>
      <br>
      <div class="something">
        <a href="blogdetails2.php"><img style="width: 200px;height: 100px;" src="img/bdetails-3.png" alt=""><p style="text-align: center;">click here</p></a>
      </div>
      <br>
      <div class="something">
        <a href=""><img style="width: 200px;height: 100px;" src="img/bdetails-1.png" alt=""><p style="text-align: center;">click here</p></a>
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







<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>

</body>


