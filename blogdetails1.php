
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
      <img src="img/bdetails-2.png" alt="Image" class="image" />
      <h1 class="text-below-image">Working with Reports in TallyPrime</h1>
      <p class="text-below-image">
        In every business journey, insights are the guiding stars, and reports
        serve as the map to navigate the vast terrain of performance. Through
        reports, you gain a panoramic view of your daily sales, purchase
        dynamics, profit margins, and inventory status, among other critical
        aspects. These reports aren’t just snapshots of your business; they’re
        invaluable tools for reporting, auditing, and regulatory compliance.
      </p>
      <p class="text-below-image">
        Enter TallyPrime, your trusted companion in decoding the language of
        your business transactions. With TallyPrime, accessing these vital
        reports is a breeze, offering real-time insights precisely when you need
        them. Delve deeper with features like the Dashboard, where data
        transforms into visually compelling graphs, empowering you to make
        informed, data-driven decisions across various business verticals.
        Working with reports in TallyPrime isn’t just efficient; it’s downright
        flexible. Discovering your reports is a seamless experience, thanks to
        TallyPrime’s intuitive organization. Navigate effortlessly through the
        Gateway of Tally screen, or swiftly locate specific reports using the Go
        To feature. But that’s not all. TallyPrime simplifies your journey
        further with a plethora of keyboard shortcuts designed for effortless
        report viewing. Whether you’re drilling down into details or
        manipulating transactions, TallyPrime’s shortcuts make every task a
        breeze. With the latest release of TallyPrime, accessing shortcuts and
        related actions is easier than ever. The bottom bar provides quick
        access to relevant shortcuts, ensuring a smooth workflow without
        interruptions. Customize your reports effortlessly with TallyPrime’s
        right buttons. Tailor your reports to fit your specific needs, whether
        it’s adjusting dates, currency formats, or including specific details
        for a more comprehensive analysis. Sharing your insights with
        stakeholders is as simple as a click of a button. TallyPrime enables you
        to export, email, WhatsApp, or print your reports seamlessly. Whether
        it’s sharing financial reports with your CA or mailing reminders to your
        clients, TallyPrime simplifies the process, ensuring efficient
        communication. And let’s not forget the time-saving one-time
        configurations offered by TallyPrime. Say goodbye to repetitive setups;
        TallyPrime streamlines the process, allowing you to focus on what truly
        matters: your business. In conclusion, TallyPrime isn’t just software;
        it’s your trusted ally in the journey of business success. Empower
        yourself with insights, simplify your workflows, and elevate your
        business with TallyPrime’s intuitive features and seamless
        functionality.
      </p>
    </div>

    <!-- Second Container: Search Section -->
    <div class="search-section">
      <p style="text-align: center; margin: 10px">Recent Posts</p>
      <br />
      <div class="something">
        <a href="blogdetails.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/bdetails-1.png"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
      </div>
      <br />
      <div class="something">
        <a href="blogdetails1.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/bdetails-2.png"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
      </div>
      <br />
      <div class="something">
        <a href="blogdetails.php"
          ><img
            style="width: 200px; height: 100px"
            src="img/bdetails-3.png"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
      </div>
      <br />
      <div class="something">
        <a href=""
          ><img
            style="width: 200px; height: 100px"
            src="img/bdetails-1.png"
            alt=""
          />
          <p style="text-align: center">click here</p></a
        >
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






<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>


</body>



