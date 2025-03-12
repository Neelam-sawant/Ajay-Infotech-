
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php' ?>
    <style>
        .card {
    --border-radius: 0.75rem;
    --primary-color: #7257fa;
    --secondary-color: #3c3852;
    width: 300px;
    font-family: "Arial";
    padding: 1rem;
    cursor: pointer;
    border-radius: var(--border-radius);
    background: #f1f1f3;
    box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 3%);
    position: relative;
    margin: 20px;
    height: 150px;
  }
  
  .card > * + * {
    margin-top: 1.1em;
  }
  
  .card .card__content {
    color: var(--secondary-color);
    font-size: 0.86rem;
  }
  
  .card .card__title {
    padding: 0;
    font-size: 1.3rem;
    font-weight: bold;
  }
  
  .card .card__date {
    color: #6e6b80;
    font-size: 0.8rem;
  }
  
  .card .card__arrow {
    position: absolute;
    background: var(--primary-color);
    padding: 0.4rem;
    border-top-left-radius: var(--border-radius);
    border-bottom-right-radius: var(--border-radius);
    bottom: 0;
    right: 0;
    transition: 0.2s;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .card svg {
    transition: 0.2s;
  }
  
  /* hover */
  .card:hover .card__title {
    color: var(--primary-color);
    text-decoration: underline;
  }
  
  .card:hover .card__arrow {
    background: #111;
  }
  
  .card:hover .card__arrow svg {
    transform: translateX(3px);
  }
  
  
  .accordion-background {
      background-color: #e7eaf6;
      width: 100%; /* Ensure it takes full width */
      padding: 20px; /* Add padding to visualize background */
    }
  
    .fbg {
      background-image: url("img/bdetails-1.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
  
    .sbg {
      background-image: url("img/bdetails-2.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    }
  
    .tbg {
      background-image: url("img/bdetails-3.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
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


<!-- background name start -->
<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Blog</h1>
</div>
<!-- background name end -->

    

    

<!-- Navbar & Carousel End -->


<!-- blog cards start -->
<div class="accordion-background">
    <div style="display: flex; justify-content: center; gap: 20px;" class="container mt-5">
        <div>
            <a href="blogdetails.php">
                <img src="img/tally.png" alt="Mastering The Dashboard Features In Tally" style="width: 250px; height: 140px; border-radius: 10px;">
            </a>
        </div>
        
        <div>
            <a href="blogdetails1.php">
                <img src="img/bdetails1.png" alt="Working with Reports in TallyPrime" style="width: 250px; height: auto; border-radius: 10px;">
            </a>
        </div>
        
        <div>
            <a href="blogdetails2.php">
                <img src="img/bdetails2.png" alt="Third Blog Topic" style="width: 250px; height: auto; border-radius: 10px;">
            </a>
        </div>
        <div>
            <a href="blogdetails3.php">
                <img src="img\e-way-bill.jpeg" alt="Third Blog Topic" style="width: 250px; height: 140px; border-radius: 10px;">
            </a>
        </div>
        <div>
            <a href="blogdetails4.php">
                <img src="img/shortcut.png" alt="Working with Reports in TallyPrime" style="width: 250px; height: 140px; border-radius: 10px;">
            </a>
        </div>
    </div>
</div>



<!-- blog cards end -->



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
</body>

</html>





<!-- home page end here -->