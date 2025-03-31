


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<?php include 'linkcss.php'; ?>



  
    <style>
/* Center the form container */
.container-fluid {
    margin: 0 auto;
    padding: 0 15px; /* Adjust as needed */
}

/* Ensuring the container is within the width */
.container {
    max-width: 1200px; /* Adjust to your desired maximum width */
    margin: 0 auto; /* Center the container */
}

/* Ensure row takes full width */
.row.g-5 {
    width: 100%; /* Ensure the row stretches to the full width */
}

/* Flex container for input fields */
.row.g-3 {
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: stretch; /* Ensure children stretch to full width */
}

/* Style for the input fields and select box */
.form-control,
.form-select {
    width: 400px; /* Fill the wrapper */
    height: 55px; /* Set a consistent height for all fields */
    margin-bottom: 15px; /* Space below each field */
    padding: 10px; /* Ensure consistent padding */
    box-sizing: border-box; /* Include padding in height and width */
}


/* Additional styles to ensure everything is centered */
.bg-primary {
    display: flex; /* Ensure parent div uses flexbox */
    flex-direction: column; /* Align items vertically */
    align-items: stretch; /* Ensure items stretch to full width */
    width: 100%; /* Ensure this container is full width */
    padding: 20px; /* Optional padding for aesthetics */
}



    </style>




</head>

<body>





<!-- NavbarStart -->
<?php include 'navbar.php'; ?>
<!--Navbar End-->   

    


<div class="aiheaderimage">
    <img src="img/Tally Pime backgrornd image.png"  class="header-image">
    <h1 class="title">Tally</h1>
</div>


<!-- Text and Description Start for Tally -->

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Tally</h5>
                    <h1 class="mb-0">The Best Products and Services</h1>
                </div>
                <p class="mb-4">Tally's fully connected e-way bill solution is simple, seamless and reliable with
                    zero manual work. Tally being one of the recognised ISO certified GSP (GST Suvidha Provider),
                    TallyPrime directly integrates with the e-way portal to seamlessly generate e-way bill for you
                    without the need to do it manually.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">+91 9029005996</h4>
                    </div>
                </div>
                <a href="contact.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact
                    Us</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Pricing Plan Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Product and Services Overview</h5>
            <h1 class="mb-0">We are Offering Best Products and Services</h1>
        </div>
        <div class="row g-4"> <!-- Adjusted spacing with g-4 -->
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s"> <!-- Adjusted column width to 6 for a 2-column layout -->
                <div class="bg-light rounded" style="margin-right: 20px;">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Tally Products</h4>
                        <small class="text-uppercase">Tally Product List</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <!-- <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small> -->
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Tally Prime</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Tally Prime Server</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Tally On Mobile</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Tally On Cloud</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <!-- <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a> -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.9s"> <!-- Adjusted column width to 6 for a 2-column layout -->
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Tally Services</h4>
                        <small class="text-uppercase">Tally Services List</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <!-- <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small> -->
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Tally AMC</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Tally Corporate Training</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Tally Customization</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Tally Synchronization</span><i
                                class="fa fa-check text-primary pt-1"></i></div>
                        <!-- <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Pricing Plan End -->


<!-- Two Texts With divider start here -->
 
<div class="container">
    <div class="unique-content">
        <div class="unique-left">
            <h1 class="unique-heading">Ajay Infotech <br> Three Star Tally Prime Master</h1>
            <!-- <button class="unique-button">KNOW MORE</button> -->
            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Know More</a>

        </div>
        <div class="unique-divider"></div>
        <div class="unique-right">
            <p class="unique-paragraph">Ajay Infotech was founded in 2010 with a single mission: to be the most
                successful, tally partner . We approach each of our clients with fresh eyes to develop together. We
                formed 500+ strong relations. We all are one whole big family. com on in join our family for smooth
                accounting and zero misunderstanding.

                We assure you that you won’t regret joining our family. We don’t believe in time-bonded work, we
                will try to help you at any time. We give online support on the spot, if still your problems at not
                solved then we personally visit your place to help you out. We make sure that you work smoothly.</p>
        </div>
    </div>
</div>

<!-- Two Texts With divider end here -->


<!-- Image field with hover shadow effect start -->

<div class="custom-image-container">
    <img src="img/certificate.png" alt="Custom Image" class="custom-hover-image">
</div>



<!-- Image field with hover shadow effect end -->


<!-- Trusted Worldwide Start -->

<div class="container">
    <div class="unique-content">
        <div class="unique-left">
            <p class="text-primary mb-1">Trusted Worldwide</p>
            <h1 class="unique-heading">Trusted by 1,000 Users for Reliable Solutions.</h1>
            <p class="unique-paragraphh">Choose Ajay Infotech as your preferred Tally Partner in Mumbai for
                unparalleled expertise, exceptional service, and unwavering commitment to your success. As the best
                Tally Partner in Mumbai, we bring a wealth of experience and knowledge, ensuring you receive
                top-notch support and guidance at every step.</p>
            <br><br>
            <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Ajay Infotech
                Team <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div class="unique-right">
            <!-- First Row of Cards -->
            <div class="custom-card">
                <img src="img/t1.png" class="custom-card-img" alt="...">
                <div class="custom-card-body">
                    <h5 class="custom-card-title">13 + Years</h5>
                    <p class="custom-card-text">13 Years of Excellence in Tally Service</p>
                </div>
            </div>
            <div class="custom-card">
                <img src="img/t2.png" class="custom-card-img" alt="...">
                <div class="custom-card-body">
                    <h5 class="custom-card-title">1000 + Users</h5>
                    <p class="custom-card-text">Trusted by Over 1000 + Users Worldwide</p>
                </div>
            </div>

            <!-- Second Row of Cards -->
            <div class="custom-card">
                <img src="img/t3.jfif" class="custom-card-img" alt="...">
                <div class="custom-card-body">
                    <h5 class="custom-card-title">70k + Support Ticket Resolved</h5>
                    <p class="custom-card-text">Support System is our First Priority</p>
                </div>
            </div>
            <div class="custom-card">
                <img src="img/t4.png" class="custom-card-img" alt="...">
                <div class="custom-card-body">
                    <h5 class="custom-card-title">20 + Customized Products</h5>
                    <p class="custom-card-text">20 + Customized For Business Sucess</p>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Trusted Worldwide End -->


<!-- Help me decide start -->
<div class="">
    <div class="container">
        <div class="center-content">
            <h1 class="center-heading text-primary mb-1">Help Me Decide</h1>
            <p class="center-paragraph">Got questions? We’ll answer them for you!.</p>
        </div>
        <div class="text-line">
            <span class="left-text">
                <b>
                    <p class="phh">Why Tally Prime is Best Business Management Software ? </p>
                </b>
                <p class="ph">TallyPrime is a one-stop business management software that caters to all your business
                    requirements – from accounting and invoicing to inventory management, insightful business
                    reports, and cash flow management, thereby improving business efficiency.</p>
                <br>
                <b>
                    <p class="phh">What is the process for setting up TallyPrime? How much time does it take? </p>
                </b>
                <p class="ph">You can be up and running within a few minutes. All you need is 3 quick Steps:
                    1) Download <br>
                    2) Install <br>
                    3) Start transacting in a few minutes.</p>
                <br>
                <b>
                    <p class="phh">Can you help me find an accountant to operate TallyPrime?</p>
                </b>
                <p class="ph">TallyPrime is so easy to operate that anyone can learn and operate in no time at all.
                    If you still need an accountant, we have more than 1 lakhs Tally Certified Candidates to full
                    fill your requirement. You can search, shortlist, assess and select the right candidate from
                    Tally Job Portal.</p>
                <br>
                <b>
                    <p class="phh">Is Tally only to be used by an accountant?</p>
                </b>
                <p class="ph">No. Business owners need to use accounting software to keep track of business
                    performance. Accounts department captures and maintains data in a more organized way, which
                    should be used by decision-makers to make informed decisions.</p>
                <br>
                <b>
                    <p class="phh">What kind of reports can I get from TallyPrime?</p>
                </b>
                <p class="ph">You get 3600 view of your business through a host of business reports related to
                    Accounting, Inventory, Financial, Management control reports (MIS) and Statutory reports to help
                    you make confident business decisions.</p>
                <br>
                <b>
                    <p class="phh">Can I access business reports on my mobile?</p>
                </b>
                <p class="ph">TallyPrime, supports real-time and secure access to important business report from a
                    web browser, on any device, anywhere.</p>
            </span>
            <span class="right-text">
                <b>
                    <p class="phh">What is the first time and ongoing costs of running TallyPrime?</p>
                </b>
                <p class="ph">One-time cost of 18,000 + GST 18% for Single user and 54,000 + GST 18% for a
                    Multi-User License. From the second year onwards, you need to renew TSS to avail a host of
                    value-added services.</p>
                <br>
                <b>
                    <p class="phh">Can someone guide me on using TallyPrime?</p>
                </b>
                <p class="ph">No worries! TallyPrime is so simple that you will comfortably use it. With simple and
                    consistent navigation, by just learning once to create a ledger, voucher or navigating to a
                    report, you will be able to use it completely by applying the same steps.</p>
                <br>
                <b>
                    <p class="phh">What business processes can I handle with TallyPrime?</p>
                </b>
                <p class="ph">TallyPrime is an integrated business management software. You can manage Accounting,
                    Inventory, Statutory and compliance, Banking, Payroll and various other processes.</p>
                <br>
                <b>
                    <p class="phh">How many users and transactions can TallyPrime support?</p>
                </b>
                <p class="ph">Using Multi-user License, you can have unlimited users on the same LAN environment
                    with the capabilities to handle a larger volume of transactions.</p>
                <br>
                <b>
                    <p class="phh">Is my business data safe with TallyPrime?</p>
                </b>
                <p class="ph">Countless hours have been put in to make our product truly trustworthy and reliable.
                    Even in situations where you encounter any issue with the software due to factors out of your
                    control, like network disruption, power failure or a system reboot, your data remains safe from
                    any corruption.</p>
            </span>
        </div>
    </div>
</div>

<!-- Help me decide end -->



<!-- Quote Start -->
<!-- Request A Quote Start -->
<?php include 'quote.php' ?>

<!-- Request A Quote End -->

<!-- Quote End -->

<!-- Vendor Start -->
<?php include 'vendor.php'; ?>



<!-- Vendor End -->






<!-- footer start -->
    <?php include 'footer.php' ?>
  <!-- Footer End -->








<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<?php include 'linkscript.php'; ?>

</body>
</body>

</html>





<!-- home page end here -->










