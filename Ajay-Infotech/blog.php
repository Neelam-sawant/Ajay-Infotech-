
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
    <div style="display: flex;justify-content: center;" class="container mt-5">
        <div class="card fbg">
            <!-- <h3 class="card__title text-uppercase">Mastering The Dashboard Features In Tally
            </h3> -->
            <!-- <p class="card__content">Professional And Reliable </p> -->
            <div class="card__date">
                <!-- August 20, 2024 -->
            </div>
            <div class="card__arrow">
                <a href="blogdetails.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                    <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
                </svg></a>
            </div>
        </div>
        <div class="card sbg">
            <!-- <h3 class="card__title text-uppercase">working with reports in tallyprime
            </h3> -->
            <!-- <p class="card__content">Professional And Reliable </p> -->
            <div class="card__date">
                <!-- August 20, 2024 -->
            </div>
            <div class="card__arrow">
                <a href="blogdetails1.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                    <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
                </svg></a>
            </div>
        </div>
        <div class="card tbg">
            <h3 class="card__title text-uppercase">
            </h3>
            <p class="card__content"></p>
            <div class="card__date">
                <!-- August 20, 2024 -->
            </div>
            <div class="card__arrow">
                <a href="blogdetails2.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                    <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
                </svg></a>
            </div>
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