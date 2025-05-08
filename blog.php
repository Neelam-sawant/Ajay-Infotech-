
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
      background-color:  rgb(253, 253, 253);
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
<div class="mb-5 wow slideInUp" data-wow-delay="0.1s" style="margin-left:50px; margin-top:50px;">
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
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
                    </div>
<!-- Blog and Sidebar Container -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
          

        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- Blog Item Start 
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/tally.png" alt="" style="width:100%; height:250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-3" href="blogdetails.php">17 March 2025</a>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">What’s new in Tally Prime 5.0?</h5>
                                <p class="small">Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                                <a class="text-uppercase small fw-bold" href="blogdetails.php">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
            
                   
                
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/bdetails21.png" alt="" style="width:100%; height:250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-3" href="blogdetails2.php">17 March 2025</a>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">Discover Tally Prime: Simplyfing Business</h5>
                                <p class="small">Learn how to optimize your website for search engines and rank higher.</p>
                                <a class="text-uppercase small fw-bold" href="blogdetails2.php">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                 
                     <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img\e-way-bill.jpeg" alt="" style="width:100%; height:250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-3" href="blogdetails3.php">17 March 2025</a>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">E-Way Bill in Tally Prime</h5>
                                <p class="small">Learn how to optimize your website for search engines and rank higher.</p>
                                <a class="text-uppercase small fw-bold" href="blogdetails3.php">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
               Blog Item End -->
               <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img\tallyoncloudblog.png" alt="" style="width:100%; height:250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-3" href="bankReconciliation.php">05 May 2025</a>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">How Tally on Cloud can support Business for Growht and Expansion
                                </h5>
                                <p class="small">Learn how to optimize your website for search engines and rank higher.</p>
                                <a class="text-uppercase small fw-bold" href="tallyoncloud.php">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
               <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img\banreconcilation.png" alt="" style="width:100%; height:250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-3" href="bankReconciliation.php">24 April 2025</a>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">Bank Reconciliation In TallyPrime 6.0
                                </h5>
                                <p class="small">Learn how to optimize your website for search engines and rank higher.</p>
                                <a class="text-uppercase small fw-bold" href="bankReconciliation.php">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
               <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img\bdetails1.png" alt="" style="width:100%; height:250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-3" href="reportsintallyprime.php">17 April 2025</a>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">Working with reports in Tally Prime</h5>
                                <p class="small">Learn how to optimize your website for search engines and rank higher.</p>
                                <a class="text-uppercase small fw-bold" href="reportsintallyprime.php">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/tally 6.png" alt="" style="width:100%; height:250px;">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-3" href="tallyprime6.php">10 April 2025</a>
                            </div>
                            <div class="p-3">
                                <h5 class="mb-2">What's new in Tally Prime 6.0?</h5>
                                <p class="small">Learn how to optimize your website for search engines and rank higher.</p>
                                <a class="text-uppercase small fw-bold" href="tallyprime6.php">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                              <ul class="pagination pagination-lg m-0">
                                <li class="page-item disabled">
                                  <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-2" placeholder="Keyword" style="margin-left:30px;">
                        <button class="btn btn-primary px-3"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Categories Start 
                <div class="mb-4 wow slideInUp" data-wow-delay="0.1s" style="margin-left:30px;">
                    <h5 class="section-title-sm pb-2">Categories</h5>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Web Design</a>
                        <a href="#" class="list-group-item list-group-item-action">Web Development</a>
                        <a href="#" class="list-group-item list-group-item-action">Keyword Research</a>
                        <a href="#" class="list-group-item list-group-item-action">Email Marketing</a>
                    </div>
                </div>
                Categories End -->
                <div class="recent-blogs" style="padding-left:20px;">
                    <h3>Recent Blogs</h3>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img\banreconcilation.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="bankReconciliation.php" class="small ms-2">Bank Reconciliation In TallyPrime 6.0</a>
                    </div>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img/bdetails1.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="reportsintallyprime.php" class="small ms-2">Working with reports in Tally Prime</a>
                    </div>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img/tally 6.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="tallyprime6.php" class="small ms-2">What's new in Tally Prime 6.0?</a>
                    </div>
                    </div>
                <!-- Recent Post Start -
                <div class="mb-4 wow slideInUp" data-wow-delay="0.1s" style="margin-left:30px;">
                    <h5 class="section-title-sm pb-2" >Recent Post</h5>
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img/tally.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
                        <a href="blogdetails.php" class="small ms-2">What’s new in Tally Prime 5.0?</a>
                    </div>
                  
                    <div class="d-flex mb-3 align-items-center bg-light p-2 rounded">
                        <img class="img-fluid" src="img/bdetails21.png" style="width: 120px; height: 60px; object-fit: cover;" alt="">
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
            </div>
            <!-- Sidebar End -->
    
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
 <style>
    footer {
    margin: 0;
    padding: 0;
    flex-shrink: 0;
}

 </style>
<?php include 'footer.php' ?>
  <!-- Footer End -->




<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>

</body>

</html>





<!-- home page end here -->