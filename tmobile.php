
<!-- All things are start from here -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php' ?>


    <!-- styling start -->
    <style>

      .custom-image-size {
          width: 60%; /* Adjust width as needed */
          height: auto; /* Maintain aspect ratio */
          max-width: 300px; /* Set a maximum width */
          object-fit: contain; /* Maintain aspect ratio */
      }
      .flex-container {
          display: flex;
          align-items: center; /* Vertically center the items */
          gap: 40px; /* Adjust spacing between image and text */
      }
      .flex-container img {
          border-radius: 18px;
      }
  
      .mac {
          margin-top: 200px;
      }
  </style>
  <!-- style end -->


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
  <h1 class="title">Tally On Mobile</h1>
</div>
<!-- background name display end -->








<!-- what is tally start -->
<div style="background-color:  rgb(253, 253, 253)" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
          <h1 class="mb-0">What is Tally On Mobile ?</h1>
      </div>
      
      <!-- image and description about tally on mobile start -->
      <div class="flex-container">
          <!-- Image Column -->
          <img
            class="custom-image-size wow zoomIn"
            data-wow-delay="0.9s"
            src="img/tmobile2.png"
            style="object-fit: cover;"
          />
          <!-- Text Column -->
          <div>
            <p class="mb-4">
              Multiple users will be able to simultaneously load companies, save
              transactions, export reports, print reports, import data, take
              backup, and perform other data-related activities without
              experiencing any downtime. This will directly result in optimal
              utilization of man-hours as the velocity at which a task gets
              completed will increase. Further, the users will be able to
              seamlessly work on the same data. Your Data will always be
              real-time, consistent, and accurate.
            </p>
          </div>
      </div>
    
      <!-- image and description about tally on mobile end -->



      
<!-- Accordion for Tally Information start -->



<div class="accordion accordion-flush mac" id="accordionFlushExample">
  <h1 class="mb-5 text-uppercase" style="text-align: center;">Features Of Tally On Mobile</h1>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          CONNECTIVITY
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Stay connected to your business. Always … No dependency on accountant Track your business anytime, anywhere It’s 2024. Make smart data driven decisions.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          REMINDERS
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Send Outstanding Reminders and Get Paid faster . Share payment reminders via email, WhatsApp SMS with few taps Unto 50% reduction in payment delays Avoid poor cashflow because of delays in payments.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          TEAM PRODUCTIVITY
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Increase sales team productivity outstanding followup with their customers. Create sales orders, receipts while visiting customer Easily Give/remove Restricted access to the sales team</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
          DATA ENTRY
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Data Entry from App … Create Sales/Purchase Orders, Receipts, Payments from the app Syncs automatically with Tally Share instantly via Whatsapp, Email, SMS and more Save time & reduce errors.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
          ANALYSE
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Analyse & Grow your Sales. Analyse your sales by location, stock item, month and more Follow up with inactive customers who have not ordered for a while Detailed Sales Analysis at the customer level Upsell stock items that you have not sold.</div>
    </div>
  </div>
</div>

<!-- Accordion for Tally Information end -->

<!-- Download Application for Android and IPHONE users start -->

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Download Mobile App Now!!!</h5>
        <p class="mb-0">Mobile app To get Your Tally On Your Mobile You need to Download Biz Analyst</p>
      </div>
      <div class="row justify-content-center">
        <!-- Android Users -->
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="margin-right: 30px;"> <!-- Added margin-right for larger screens -->
          <div class="bg-light rounded text-center">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">Android Users</h4>
            </div>
            <div class="p-5 pt-0">
              <a href="https://play.google.com/store/apps/details?id=in.bizanalyst&referrer=utm_source%3Dwebsite%26utm_medium%3Dhome%26utm_campaign%3Dwebsite-lead%26utm_content%3Dhero-image%26utm_term%3Dnone" class="btn btn-primary py-2 px-4 mt-4">Download</a>
            </div>
          </div>
        </div>
  
        <!-- iPhone Users -->
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
          <div class="bg-light rounded text-center">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">IPhone Users</h4>
            </div>
            <div class="p-5 pt-0">
              <a href="https://apps.apple.com/in/app/biz-analyst-app-for-tally-user/id1164789740" class="btn btn-primary py-2 px-4 mt-4">Download</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
                    
  





<!-- Download Application for Android and IPHONE users end -->
      

  </div>
  
</div>
<!-- what is tally end -->




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


    <?php include 'linkscript.php' ?>
</body>

</html>


