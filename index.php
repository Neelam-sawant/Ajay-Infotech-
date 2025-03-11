
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





<!-- NavbarStart -->
<?php include 'navbar.php'; ?>
<!--Navbar End-->

<!--Carousel Start-->
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="left: 0%;top: 0%; right: 0%; width:100% ;"  src="img/Tally prime 5.0.png" alt="Image">
                <div class="carousel-caption ">
                    <div class="p-3" style="max-width: 900px;">
                        <a href="blogdetais.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">To Know More</a>
                        <a href="contact.php" class="btn btn-outline-primary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <!--
            <div class="carousel-item">
                    <img class="w-100" src="img/Tally prime 5.0.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-LEFT justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-uppercase mb-3 animated slideInDown">Stay Updated</h5>
                            <h1 class="animated zoomIn" >Tally Prime 5.0</h1>
                            <a href="blogdetails.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">To Know More</a>
                            <a href="contact.html" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>


            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                        <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                        <a href="contact.html" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <img src="img/Pre.png" alt="Previous" class="custom-prev-icon">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <img src="img/next.png" alt="Next" class="custom-next-icon">
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    

    

<!-- Carousel End -->



<!-- marquee start -->
  <div class="container marquee" style="margin: 100px;">
    <marquee behavior="" direction="" style="color: blue;"><a href="#"><img style="height: 20px;" src="img/marquee.png" alt=""> Get 10% off on a 2-Years TSS Subscription Save Upto 2700 INR</a></marquee>
</div> 
 <!-- marquee end -->



<!-- Text and Description Start for Tally -->

<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" >
    <div class style="margin: 100px;">
        <div class="row g-5" style="margin-bottom: -78px;margin-top: 20px;">
            <div class="col-lg-7">
            
                <div class="section-title position-relative pb-3 mb-5">
                    <h1 class="mb-0" >Ajay Infotech</h1>
                    <br>
                    <h5 class="fw-bold text-primary text-uppercase">Trusted Tally 3 Star Partner</h5>
                    
                </div>
                <p class="mb-4">Ajay Infotech Pvt Ltd is a proud Tally Three-Star Partner, specializing in delivering high-quality Tally solutions. We offer expert implementation, support, and consultation services to help businesses optimize their accounting and management processes. Our certification underscores our commitment to excellence and customer satisfaction in leveraging Tally software.</p>
                
                
                <a href="contact.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact
                    Us</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="img/certificate.png" style="object-fit: cover;height: 80% !important;border-radius: 18px !important;">
                </div>
            </div>
        </div>
    </div>
</div>








<!-- vendor start -->
<?php include 'vendor.php' ?>
<!-- vendor end -->


<!-- Our Value start -->
<div class="values-section-title text-center section-title position-relative pb-3 mb-5 mx-auto">
    <h5 class="fw-bold text-primary text-uppercase">Our Values</h5>
</div>

<!-- Our values start -->
<div class="custom-values-container">
    <div class="custom-value-item">
        <img src="img/trust.png" alt="Trust">
        <p>Trust</p>
    </div>
    <div class="custom-value-item">
        <img src="img/ov2.png" alt="Honesty">
        <p>Honesty</p>
    </div>
    <div class="custom-value-item">
        <img src="img/tp.png" alt="Integrity">
        <p>Transparency</p>
    </div>
    <div class="custom-value-item">
        <img src="img/auction.png" alt="Transparency">
        <p>Ethical Framework</p>
    </div>
    <div class="custom-value-item">
        <img src="img/rating.png" alt="Ethical Framework">
        <p>Customer Satisfaction</p>
    </div>
    <div class="custom-value-item">
        <img src="img/badge.png" alt="Team Work">
        <p>Team Work</p>
    </div>
</div>
<!-- Our values end -->



<!-- testimonials start -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.05s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h1 class="mb-3">What Our Clients Say About Our Digital Services</h1>
            <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Working with Ajay Infotech has transformed our business. Their expertise in Tally implementation streamlined our accounting processes significantly. The team’s support was exceptional, making the transition smooth and efficient. I highly recommend their services to others!                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    The training provided by Ajay Infotech was absolutely exceptional! Our team felt confident and empowered using Tally from the very start. Their hands-on, engaging approach truly made a significant difference in our overall learning experience and performance.               </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    I can’t thank the support team at Ajay Infotech enough for their exceptional service and invaluable assistance. They were incredibly quick to respond to our queries and resolved all issues efficiently, allowing us to focus entirely on our core business needs and goals.               </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Thanks to Ajay Infotech, we now have a customized Tally solution that perfectly fits our specific needs. Their remarkable attention to detail and willingness to adapt made our transition incredibly smooth and effective, enhancing our overall efficiency significantly.               </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    The implementation process with Ajay Infotech was seamless, and the follow-up support has been absolutely exceptional. They genuinely care about their customers' success, and it clearly shows in the level of service and attention provided throughout our journey!               </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    The professionalism and expertise displayed by Ajay Infotech were truly remarkable. They guided us through every single step of the Tally setup process with remarkable patience and clarity, ensuring we fully understood everything along the way to our ultimate success together.           </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    I was genuinely impressed by how Ajay Infotech made Tally so incredibly user-friendly for our entire team. Their training sessions were highly engaging and practical, leading to a significantly quick learning curve that enhanced our overall productivity and operational efficiency remarkably well.            </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Choosing Ajay Infotech as our Tally partner was undoubtedly one of the best decisions we made for our business. The immense value they provided far exceeded our expectations, and we’ve seen incredible improvements in our overall financial management practices and efficiency.               </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    The team at Ajay Infotech is genuinely dedicated to ensuring their clients succeed. Their proactive follow-up after each training session clearly demonstrated their commitment to our ongoing success with Tally, making the entire experience truly valuable and impactful for us.             </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Profession</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    I wholeheartedly endorse Ajay Infotech for anyone looking to implement Tally in their business. Their knowledgeable staff and exceptional service made our experience smooth, enjoyable, and stress-free, significantly enhancing our understanding of the software along the way.              </div>
            </div>
        </div>
    </div>
</div>

<!-- testimonials end -->



<!-- accordion start -->
  

    <section class="product-services services" style="background:#fff;padding:60px 0">
        <div class="col-xl-10 offset-xl-1">
            <div class="col-sm-12 section-header section-title text-center position-relative pb-3 mb-4 mx-auto">
                <h2 class="text-primary fw-bold text-primary text-uppercase">We Cater Your Need</h2>
            </div>
            <div class="mt-3">
                <ul class="nav nav-tabs p-0 tab-navn">
                    <li class="nav-item">
                        <a class="nav-link tab-ND active" data-toggle="tab" href="#tab-products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-ND" data-toggle="tab" href="#tab-services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-ND" data-toggle="tab" href="#tab-apps">Mobile Apps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-ND" data-toggle="tab" href="#tab-solutions">Solutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-ND" data-toggle="tab" href="#tab-addons">Add-Ons</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-products" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Software</h5>
                                    <p class="item-description">This business software is ideally suited for SMEs, effectively supporting trading, distribution, manufacturing, and service industries. Key modules include Financial Accounting and Management, Banking, Inventory Management, Payroll, and Statutory compliance for streamlined operations.</p>
                                    <a href="tally.html" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Server 9 Or Tally Prime Server</h5>
                                    <p class="item-description">For medium and large organizations aiming for operational efficiency, Tally Server 9 or TallyPrime is essential. These robust solutions provide secure, concurrent data access for multiple users, enabling your team to work without disruptions.</p>
                                    <a href="tpserver.html" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally For CA</h5>
                                    <p class="item-description">Tally is an essential software for Chartered Accountants, streamlining financial management and compliance. It simplifies accounting, auditing, and taxation tasks, enabling efficient reporting and client management. With Tally, CAs can ensure regulatory adherence while enhancing their service delivery.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally .Net Subscription</h5>
                                    <p class="item-description">Tally .NET Subscription provides businesses with convenient access to Tally's features from any location. This subscription enhances collaboration and efficiency, offering real-time data access and multi-user capabilities, empowering organizations to manage their accounting and financial processes seamlessly.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div id="tab-services" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally AMC / Annual Support Cover</h5>
                                    <p class="item-description">A business continuity program for your organisation from a team who knows Tally Best. You do your business peacefully while we take care of your software. Select a plan suitable to you.</p>
                                    <a href="tamc.html" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Data Synchronization</h5>
                                    <p>
                                        Decide on architecture Type : Centralized / Decentralized / Hybrid, we will set it up for your Multi Location Organization. Sync Data periodically or directly enter data into Central Tally Server.</p>
                                        <a href="tsynchronization.html" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally ERP 9 and TallyPrime Training</h5>
                                    <p class="item-description">Corporate training programs for your staff to ensure use of Tally.ERP 9 and TallyPrime to the fullest. A basket of training modules to choose from depending on your need & profile of the team.</p>
                                    <a href="tctraining.html" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Support – Onsite & Remote</h5>
                                    <p class="item-description">We offer Tally installation, data synchronization, migration, and ongoing support. Our engineers provide training and assistance, available onsite or remotely for your complete convenience.</p>
                                    <a href="tamc.html" class="read-more" >Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div id="tab-apps" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Business Dashboard App</h5>
                                    <p class="item-description">This business software is ideally designed for SMEs, covering trading, distribution, manufacturing, and service industries. Key modules include Financial Accounting, Banking, Inventory Management, Payroll, and Statutory compliance, ensuring streamlined operations and efficient management.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Customer Profiling App</h5>
                                    <p class="item-description">The Tally Mobile application is invaluable for field personnel—salespersons, sales managers, and business owners. It features a business directory, contact management, and real-time access to financial data, empowering users to manage sales, track performance, and streamline operations on the go.
                                    </p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Trans Approval App</h5>
                                    <p class="item-description">A business owner must approve critical transactions while on the move to ensure business continuity. With the right tools, they can manage approvals in real-time, mitigating risks and enhancing operational efficiency, ensuring that essential decisions are made promptly and effectively for success.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Sales Order Booking App</h5>
                                    <p class="item-description">Sales orders can be easily entered and managed through smartphones using the Sales Order Booking Tally App for Android and iPhone. This app facilitates faster order booking, allowing sales teams to efficiently capture and track orders on the go, streamlining the sales process for improved productivity.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div id="tab-solutions" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Vertical Solutions</h5>
                                    <p class="item-description">Businesses, regardless of size, have unique processes and challenges that can be effectively addressed with solutions built on Tally ERP 9. This versatile software adapts to various requirements, offering customizable features that enhance operational efficiency and support informed decision-making for all industries.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Integration</h5>
                                    <p class="item-description">Integrate Tally.ERP 9 with virtually everything—Excel, SQL, Java, .NET, eCommerce websites, mobile devices, and even hardware like digital weighing scales. This seamless integration enhances data flow, streamlines operations, and enables businesses to leverage Tally's powerful capabilities across various platforms and devices.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Customization</h5>
                                    <p class="item-description">Customize your Tally.ERP 9 to align with your business needs through tailored invoice and voucher formats, specialized reports, and the addition of new fields. Strengthen controls and security while developing new functionalities to optimize processes, ensuring Tally integrates into your operational framework for enhanced efficiency.</p>
                                    <a href="tcustomization.html" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally GST</h5>
                                <p class="item-description">Business dynamics in India are poised for change with the introduction of the Goods and Services Tax (GST). Effective from July 1st, GST simplifies the taxation process and creates a unified market across the country. Tally GST equips businesses with essential tools to ensure compliance and streamline financial operations in this evolving landscape.
                                </p>
                                <a href="gstfilling.html" class="read-more" >Read More</a>
                            </div>
                            </div>
                        </div>
                    </div>
    
                    <div id="tab-addons" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Smart Backup++</h5>
                                    <p class="item-description">Smart Backup++ is an intelligent system designed to resolve your Tally backup issues effortlessly. It eliminates the need for human intervention, ensuring that backups are taken consistently without the risk of forgetting. This automated solution safeguards your important data while enhancing overall operational efficiency for your business.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Multi File Attachment</h5>
                                    <p class="item-description">With the Multi File Attachment feature, you can easily attach multiple files such as DOC, XLS, PDF, JPG, and more to your financial transactions in Tally. Retrieve these files directly from the Tally application without leaving your desk, streamlining your workflow and enhancing document management for improved efficiency.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Sheet Magic</h5>
                                    <p class="item-description">Tally Sheet Magic allows you to create custom reports in Excel using data from Tally, all without needing programming knowledge. Effortlessly convert your existing Excel report formats into Sheet Magic reports, enabling you to streamline your reporting process and gain valuable insights from your financial data with ease.</p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Audit Trail with Voucher History</h5>
                                    <p class="item-description">The Audit Trail feature allows you to track the history of a transaction from its creation through multiple alterations. It maintains a log of inventory and ledger entries, including details on rates and amounts. This transparency enhances accountability and ensures compliance in your financial processes for better oversight.
                                    </p>
                                    <a href="#" class="read-more" >Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- accordion end -->


<script>
    document.addEventListener('DOMContentLoaded', function () {
        let currentIndex = 0; // Start with the first tab
        const tabLinks = document.querySelectorAll('.tab-ND');
        const tabPanes = document.querySelectorAll('.tab-pane');
        const totalTabs = tabLinks.length;

        function switchTab(index) {
            tabLinks.forEach(link => link.classList.remove('active'));  // Remove active class from all links
            tabPanes.forEach(pane => {
                pane.classList.remove('active', 'show'); // Hide all panes
                pane.style.opacity = '0'; // Hide pane
                pane.style.visibility = 'hidden'; // Hide pane
            });

            // Activate the current tab and pane
            tabLinks[index].classList.add('active');
            tabPanes[index].classList.add('active', 'show');

            // Use a timeout for smooth transition
            setTimeout(() => {
                tabPanes[index].style.opacity = '1'; // Show pane
                tabPanes[index].style.visibility = 'visible'; // Show pane
            }, 0);
        }

        // Add click event listeners to tabs
        tabLinks.forEach((link, index) => {
            link.addEventListener('click', function (e) {
                e.preventDefault(); // Prevent default anchor behavior
                currentIndex = index; // Update current index
                switchTab(currentIndex); // Switch to the clicked tab
            });
        });

        
    });

    // scripting for read more integretation
    document.addEventListener("DOMContentLoaded", function() {
    const descriptionItems = document.querySelectorAll('.item-description');
    const wordLimit = 20;

    descriptionItems.forEach((desc, index) => {
        const fullText = desc.innerText;
        const words = fullText.split(' ');

        if (words.length > wordLimit) {
            const truncatedText = words.slice(0, wordLimit).join(' ') + '...';
            desc.innerText = truncatedText;

            const readMoreLink = desc.nextElementSibling;
            readMoreLink.style.display = 'inline';

        }
    });
});


</script>

<!-- awards carousel start -->

<style>
    .carousel-container {
        overflow: hidden;
        position: relative;
        width: 80%;
        margin: auto;
    }
    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .carousel-item {
        flex: 0 0 33.33%; /* Show 3 images at a time */
        text-align: center;
    }
</style>

<div class="container">
    <div class="col-sm-12 section-header section-title text-center position-relative pb-3 mb-4 mx-auto">
        <h2 class="text-primary text-center">Awards</h2>
    </div>
    <div class="carousel-container">
        <div class="carousel-controls">
            <button class="carousel-control-prev custom-btn btn-pink btn-floating" id="prevAwards" type="button">
                <i class="fas fa-angle-left fa-lg"></i>
            </button>
            <button class="carousel-control-next custom-btn btn-pink btn-floating" id="nextAwards" type="button">
                <i class="fas fa-angle-right fa-lg"></i>
            </button>
        </div>
        <div class="carousel-inner" id="awardsCarousel">
            <div class="carousel-item"><img src="img1.png" alt="Award 1" /></div>
            <div class="carousel-item"><img src="img2.png" alt="Award 2" /></div>
            <div class="carousel-item"><img src="img3.png" alt="Award 3" /></div>
            <div class="carousel-item"><img src="img4.png" alt="Award 4" /></div>
            <div class="carousel-item"><img src="img5.png" alt="Award 5" /></div>
            <div class="carousel-item"><img src="img6.png" alt="Award 6" /></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-sm-12 section-header section-title text-center position-relative pb-3 mb-4 mx-auto">
        <h2 class="text-primary text-center">Events</h2>
    </div>
    <div class="carousel-container">
        <div class="carousel-controls">
            <button class="carousel-control-prev custom-btn btn-pink btn-floating" id="prevEvents" type="button">
                <i class="fas fa-angle-left fa-lg"></i>
            </button>
            <button class="carousel-control-next custom-btn btn-pink btn-floating" id="nextEvents" type="button">
                <i class="fas fa-angle-right fa-lg"></i>
            </button>
        </div>
        <div class="carousel-inner" id="eventsCarousel">
            <div class="carousel-item"><img src="event1.png" alt="Event 1" /></div>
            <div class="carousel-item"><img src="event2.png" alt="Event 2" /></div>
            <div class="carousel-item"><img src="event3.png" alt="Event 3" /></div>
            <div class="carousel-item"><img src="event4.png" alt="Event 4" /></div>
            <div class="carousel-item"><img src="event5.png" alt="Event 5" /></div>
            <div class="carousel-item"><img src="event6.png" alt="Event 6" /></div>
        </div>
    </div>
</div>

<script>
    function setupCarousel(carouselId) {
        let carousel = document.getElementById(carouselId);
        let items = carousel.querySelectorAll(".carousel-item");
        let index = 0;

        function slideCarousel() {
            index++;
            if (index > items.length - 3) {
                index = 0;
            }
            carousel.style.transform = `translateX(-${index * (100 / 3)}%)`;
        }

        setInterval(slideCarousel, 2000);
    }

    document.addEventListener("DOMContentLoaded", function () {
        setupCarousel("awardsCarousel");
        setupCarousel("eventsCarousel");
    });
</script>


<!-- Events carousel end -->

<br><br><br><br>
<!-- footer start -->
<?php include './footer.php' ?>
  <!-- Footer End -->








<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i style="width: 100px;" class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<?php include 'linkscript.php' ?>

<script>
    $(document).ready(function() {
        // Activate the first tab by default
        $('.tab-pane').removeClass('active fade'); 
        $('.tab-pane:first').addClass('active fade');
    
        // Tab click event
        $('.nav-tabs .nav-link').on('click', function() {
            // Remove 'active' class from all tabs
            $('.nav-tabs .nav-link').removeClass('active');
            
            // Add 'active' class to clicked tab
            $(this).addClass('active');
    
            // Hide all tab content
            $('.tab-pane').removeClass('active');
    
            // Show the clicked tab content
            const target = $(this).attr('href');
            $(target).addClass('active');
        });
    });


    // second carousel scripting start
    let currentIndex = 0;
        const items = document.querySelectorAll('.custom-carousel-item');
        const totalItems = items.length;
        const carouselInner = document.getElementById('carousel');

        function updateCarousel() {
            const translateX = -(currentIndex * 100) / totalItems;
            carouselInner.style.transform = `translateX(${translateX}%)`;
        }

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        });

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        });

        // Auto-slide functionality
        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        }, 3000); // Adjust time interval (in ms) for auto sliding
    // second carousel scripting end


    // third carousel scripting start

    let currentAwardsIndex = 0;
const awardsItems = document.querySelectorAll('.awards-carousel-item');
const totalAwardsItems = awardsItems.length;
const awardsCarouselInner = document.getElementById('awardsCarousel');

function updateAwardsCarousel() {
    const translateX = -(currentAwardsIndex * 100) / totalAwardsItems;
    awardsCarouselInner.style.transform = `translateX(${translateX}%)`;
}

// Auto-slide functionality
setInterval(() => {
    currentAwardsIndex = (currentAwardsIndex + 1) % totalAwardsItems;
    updateAwardsCarousel();
}, 3000); // Adjust time interval (in ms) for auto sliding

    // third carousel scripting end
    </script>
</body>
</body>

</html>





<!-- home page end here -->





