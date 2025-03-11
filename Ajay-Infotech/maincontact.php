
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<?php include 'linkcss.php' ?>


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

<!-- background name display end -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Contact</h1>
</div>
<!-- background name display end -->





<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->



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