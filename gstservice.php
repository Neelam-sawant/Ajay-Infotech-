
<!-- All things are start from here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php'; ?>


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
    <h1 class="title">GST Services</h1>
</div>
<!-- background name display end -->




<!-- Navbar & Carousel End -->






<!-- what is GST services start -->
<div
style="background-color:  rgb(253, 253, 253)"
class="container-fluid py-5 wow fadeInUp"
data-wow-delay="0.1s"
>
<div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-7" style="padding-right:20px;">
        <div class="section-title position-relative pb-3 mb-5">
          <h5 class="fw-bold text-primary text-uppercase">What Is</h5>
          <h1 class="mb-3">GST Services ?</h1>
        </div>
        <p class="mb-4">
            GST (Goods and Services Tax) services with Tally help businesses manage their GST-related tasks easily. Tally software allows you to create invoices, file returns, track payments, and ensure compliance with GST regulations. It automates tax calculations, generates necessary reports, and simplifies the overall GST management process, making it easier for businesses to stay compliant with tax laws.
        </p>
        <p class="mb-3">
          <b>Automated GST Calculations:</b> Tally automatically calculates GST on sales and purchases, minimizing errors.
        </p>
        <p class="mb-3">
          <b>GST-Compliant Invoicing:</b> Tally helps generate invoices that comply with GST requirements.
        </p>
        <p class="mb-3">
          <b>Simplified Return Filing:</b> Tally prepares and helps file GST returns (GSTR-1, GSTR-3B) with ease.
        </p>
        <p class="mb-3">
          <b>Input Tax Credit Management:</b> Automatic data backups will be taken on cloud
          enabling you to retrieve the backup data very easily.
        </p>
        <p class="mb-3">
          <b>GST Reporting:</b> Take printouts of invoices & reports from your
          local printer at anytime.
        </p>
        <p class="mb-3">
          <b>E-Filing Integration:</b> Not just Tally, you can also access your
          other desktop applications such as MS Word, MS Excel, Notepad on cloud
          at the same time & work efficiently.
        </p>
      </div>
      <div class="col-lg-5" style="min-height: 500px">
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
    <br />
    <br />
    </div>

<!-- what is GST services end -->

<!-- title for Types of GST services end -->
<h5 class="fw-bold text-primary text-uppercase text-center">GST Services</h5>
<!-- title for Types of GST services end -->



<!-- parts of GST services -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-0">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
          <div class="bg-light rounded">
            <div class="border-bottom py-4 px-5 mb-4">
              <a href="gstfilling.html"><h4 class="text-primary mb-0">GST FILLING</h4></a>
              <small class="text-uppercase">Accurate GST Filing</small>
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
              <a href="inrfilling.html"><h4 class="text-primary mb-0">INR FILLING</h4></a>
              <small class="text-uppercase">Simplify INR Filing</small>
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
              <a href="datafilling.html"><h4 class="text-primary mb-0">DATA FILLING</h4></a>
              <small class="text-uppercase">Accurate Data Filling</small>
            </div>
            <div class="p-5 pt-0">
              <div class="d-flex justify-content-between mb-0">
                <img src="img/tcloud8.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- parts of GST end -->
    </div>



<!-- contact start -->

<?php include './contact.php' ?>

  
  
  <!-- contact end -->




<!-- Vendor Start -->
<?php include './vendor.php' ?>
<!-- Vendor End -->









<!-- footer start -->
<?php include 'footer.php' ?>
  <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <?php include 'linkscript.php'; ?>
</body>

</html>




