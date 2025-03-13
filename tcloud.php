
<!-- All things are start from here -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php' ?>



    <style>

      .img-fluid {
        max-width: 100%;
        height: auto;
        object-fit: cover;
      }
    
      .position-relative {
        position: relative;
      }
    
      .d-flex {
        display: flex;
      }
    
      .align-items-center {
        align-items: center;
      }
    
      .justify-content-center {
        justify-content: center;
      }
    
      .rounded {
        border-radius: 8px; /* Adjust as needed */
      }
    </style>


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
  <h1 class="title">Tally Cloud</h1>
</div>
<!-- background name display end -->










<!-- text and image start -->
<div
  style="background-color: #e7eaf6"
  class="container-fluid py-5 wow fadeInUp"
  data-wow-delay="0.1s"
>
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h5 class="fw-bold text-primary text-uppercase">Tally on Cloud</h5>
          <h1 class="mb-0">for seamless Accounting</h1>
        </div>
        <p class="mb-4">T24*7 Access to Tally and Business Data</p>
        <p class="mb-4">Inbuilt Firewall, Anti-virus and auto Data backup</p>
        <p class="mb-4">Trusted by 4500+ Happy users</p>

        <div
          class="d-flex align-items-center mb-4 wow fadeIn"
          data-wow-delay="0.6s"
        >
          <div
            class="bg-primary d-flex align-items-center justify-content-center rounded"
            style="width: 60px; height: 60px"
          >
            <i class="fa fa-phone-alt text-white"></i>
          </div>
          <div class="ps-4">
            <h5 class="mb-2">Call to ask any question</h5>
            <h4 class="text-primary mb-0">+91 9029005996</h4>
          </div>
        </div>
        <a
          href="contact.php"
          class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
          data-wow-delay="0.9s"
          >Contact Us</a
        >
      </div>
      <div
        class="col-lg-5 d-flex align-items-center justify-content-center"
        style="min-height: 500px"
      >
        <img
          class="img-fluid  wow zoomIn"
          data-wow-delay="0.9s"
          src="img/tcloud.png"
          alt="Tally on Cloud" style="border-radius: 15px;height: 300px;object-fit: contain;"
        />
      </div>
    </div>
  </div>
  <!-- text and image end -->

  <!-- Why Tally On Cloud start -->
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h5 class="fw-bold text-primary text-uppercase">Why Tally on</h5>
          <h1 class="mb-0">Cloud?</h1>
        </div>
        <p class="mb-4">
          Tally on Cloud is a robust option for businesses that enables the
          migration of your offline Tally software to the cloud, allowing
          convenient access to your Tally data from any location and device,
          24/7
        </p>
        <p class="mb-0">
          <b>Work Remotely:</b> Use full functionality of Tally.ERP 9 on any
          device through a web browser over a completely secure connection. No
          need to install any software or application on desktop.
        </p>
        <p class="mb-0">
          <b>Complete Data Security and Control:</b> Ensure complete data
          security with accessibility only to the authorised users.
        </p>
        <p class="mb-0">
          <b>Centralize:</b> Centralize all your data at head office and let
          users access Tally from various geographical locations in real time
          over the internet.
        </p>
        <p class="mb-0">
          <b>Data Backup:</b> Automatic data backups will be taken on cloud
          enabling you to retrieve the backup data very easily.
        </p>
        <p>
          <b>Easy Printouts:</b> Take printouts of invoices & reports from your
          local printer at anytime.
        </p>
        <p class="mb-0">
          <b>Access Other Apps:</b> Not just Tally, you can also access your
          other desktop applications such as MS Word, MS Excel, Notepad on cloud
          at the same time & work efficiently.
        </p>
      </div>
      <div class="col-lg-5" style="min-height: 500px;margin-top: 110px;">
        <div class="position-relative h-100">
          <img
            class="position-absolute w-100 h-100 rounded wow zoomIn"
            data-wow-delay="0.9s"
            src="img/tcloud1.jpeg"
            style="object-fit: contain"
          />
        </div>
      </div>
    </div>
    <br />


    <!-- why tally on cloud end -->

    <!-- cloud hosting start -->
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">Cloud Hosting</h1>
          </div>
          <p class="mb-0">
            <b>Scalable Cloud Server:</b> Highly protected cloud with
            next-generation firewall, hence no risk of data corruption, data
            breach, or data rewrite.
          </p>
          <p class="mb-0">
            <b>Speed & Reliability:</b> Hosted on Best Tier Data Centers,
            running specialized Servers optimized to run Tally Service at high
            speed redundant connectivity.
          </p>
          <p class="mb-0">
            <b>Fully Managed Services:</b> Proper maintenance of cloud
            infrastructure with regular backup of data.
          </p>
        </div>
        <div class="col-lg-5" style="min-height: 500px;margin-top: 100px;">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tcloud2.jpg"
              style="object-fit: contain"
            />
          </div>
        </div>
      </div>
      <!-- cloud hosting end -->
    </div>
  </div>

  <!-- Why Tally On Cloud end -->

  <!-- Tally On Cloud With Ajay Infotech Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div
        class="section-title text-center position-relative pb-3 mb-5 mx-auto"
        style="max-width: 600px"
      >
        <h1 class="mb-0">Tally On Clouds</h1>
        <h5 class="fw-bold text-primary text-uppercase">
          Why Ajay Infotech for Tally on Cloud
        </h5>
        <p class="mb-0">
          Ajay Infotech PVT LTD is a Tally Certified 3-Star Partner since
          13-years and has helped hundreds of businesses ensure a smooth
          transition to the Cloud.
        </p>
        <b><p class="mb-0">Our cloud solution ensures:</p></b>
      </div>

      <!-- Tally on cloud image and description start -->

      <!-- first component start -->
      <div class="row g-5 mt-5">
        <!-- Image Column Now on the Left -->
        <div class="col-lg-5" style="height: 250px;">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tcloud3.png"
              style="object-fit: contain"
            />
          </div>
        </div>
        <!-- Text Column Now on the Right -->
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">Speed And Reliability</h1>
          </div>
          <h5 class="mb-4">
            Hosted on best tier datacenters, Get high speeds with redundant
            connectivity
          </h5>
        </div>
      </div>
      <!-- first component end -->
      <br>
      <!-- second component start -->
      <div class="row g-5 mt-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">Complete security</h1>
          </div>
          <h5 class="mb-4">
            Get in-built Firewall, anti-virus & automatic data backup facilities
          </h5>
        </div>
        <div class="col-lg-5" style="height: 250px;">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tcloud4.png"
              style="object-fit: contain"
            />
          </div>
        </div>
      </div>
      <!-- second component end -->
      <br>
      <!-- third component start -->

      <div class="row g-5 mt-5">
        <!-- Image Column Now on the Left -->
        <div class="col-lg-5" style="height: 250px;">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tcloud5.png"
              style="object-fit: contain"
            />
          </div>
        </div>
        <!-- Text Column Now on the Right -->
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">Most Economical</h1>
          </div>
          <h5 class="mb-4">
            Affordable, pay-as-you-go pricing with no hidden costs
          </h5>
        </div>
      </div>

      <!-- third component end -->
      <br>
      <!-- Tally on cloud image and description end -->
    </div>
  </div>

  <!-- Cards of self achivements start -->

  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-0">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="bg-light rounded">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">13 +</h4>
              <small class="text-uppercase">Years of experience</small>
            </div>
            <div class="p-5 pt-0">
              <div class="d-flex justify-content-between mb-3">
                <img src="img/tcloud6.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
          <div
            class="bg-white rounded shadow position-relative"
            style="z-index: 1"
          >
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">1000 +</h4>
              <small class="text-uppercase">Customer Satisfied</small>
            </div>
            <div class="p-5 pt-0">
              <div class="d-flex justify-content-between mb-3">
                <img src="img/tcloud7.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
          <div class="bg-light rounded">
            <div class="border-bottom py-4 px-5 mb-4">
              <h4 class="text-primary mb-1">20 +</h4>
              <small class="text-uppercase">Modules Available</small>
            </div>
            <div class="p-5 pt-0">
              <div class="d-flex justify-content-between mb-3">
                <img src="img/tcloud8.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Cards of self achivements end -->
  <br />
  <br />
  <br /><br /><br /><br />

  <div class="container" style="margin-bottom: 80px">
    <h1 class="headings text-center">
      How Tally on Cloud will help you reduce costs
    </h1>
  </div>

  <!-- cards for reduce costs start  -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div
          class="card"
          style="width: 18rem; text-align: center; padding: 20px;border-radius: 18px;margin: 20px;"
        >
          <div
            class="container"
            style="
              border-radius: 20px;
              border: 1px solid black;
              width: 20px;
              height: 50px;
            "
          >
            <img src="" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title mb-0">Hardware Cost Savings</h5>
            <p class="card-text mb-0">
              Savings on hardware since no Server is required
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div
          class="card"
          style="width: 18rem; text-align: center; padding: 20px;border-radius: 18px;margin: 20px;"
        >
          <div
            class="container"
            style="
              border-radius: 20px;
              border: 1px solid black;
              width: 20px;
              height: 50px;
            "
          >
            <img src="" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title mb-0">Manpower Savings</h5>
            <p class="card-text mb-0">
              Save manpower with managed servers & software
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div
          class="card"
          style="width: 18rem; text-align: center; padding: 20px;border-radius: 18px;margin: 20px;"
        >
          <div
            class="container"
            style="
              border-radius: 20px;
              border: 1px solid black;
              width: 20px;
              height: 50px;
            "
          >
            <img src="" class="card-img-top" alt="" />
          </div>
          <div class="card-body">
            <h5 class="card-title">Overhead Cost Savings</h5>
            <p class="card-text">
              Save on overheads: no extra cost for server utilities </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- cards for reduce costs end  -->

  <!-- Tally On Cloud With Ajay Infotech End -->
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


    <?php include 'linkscript.php' ?>
</body>

</html>



