
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<style>  /* Main-carousel section start here */
  .carousel-inner,
  .carousel-item {
    height: 70vh;
  }
  .carousel-item img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    display: block;
  }</style>

</head>

<body>
    <!-- Spinner Start -->
<div id="spinner" class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

<!-- NavbarStart -->
<?php include 'navbar.php'; ?>
<!--Navbar End-->

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img\Frame 3351.png" class="d-block w-100" alt="First Slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- Optional captions can go here -->
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/bgtally6.png" class="d-block w-100" alt="Second Slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- Optional captions can go here -->
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/bgtally6.png" class="d-block w-100" alt="Third Slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- Optional captions can go here -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Main Content Section -->
<div class="container-fluid wow fadeInUp pt-5 mt-4" data-wow-delay="0.1s">

    <div class="row g-3 px-3 px-md-5 mb-5">
        <!-- Text Content -->
        <div class="col-lg-7">
            <div class="section-title position-relative pb-3 mb-4">
                <h1 class="mb-0">Ajay Infotech</h1>
                <h5 class="fw-bold text-primary text-uppercase mt-3">Trusted Tally 3 Star Partner</h5>
            </div>
            <p class="mb-4 pe-md-5">
                Ajay Infotech Pvt Ltd is a proud Tally Three-Star Partner, specializing in delivering high-quality Tally solutions.
                We offer expert implementation, support, and consultation services to help businesses optimize their accounting and
                management processes. Our certification underscores our commitment to excellence and customer satisfaction in leveraging Tally software.
            </p>
        </div>

        <!-- Certificate Image -->
        <div class="col-lg-5">
            <div class="position-relative h-100">
                <img src="img\certificate.png" class="img-fluid rounded shadow wow zoomIn" data-wow-delay="0.9s" alt="Certificate">
            </div>
        </div>
    </div>
</div>


<!-- vendor start -->
<?php
    include "vendor.php";
?>
<!-- vendor end -->

<?php
    include "our-value.php";
?>


<?php
    include "testimonial.php";
?>



<!-- accordion start -->
  

     <section class="product-services services" style="background:#fff;">
        <div class="col-xl-10 offset-xl-1" style="margin: 0 10% 0 10%;">
            <div class="col-sm-12 section-header section-title text-center position-relative pb-3 mb-4 mx-auto">
                <h2 class="text-primary fw-bold text-primary text-uppercase">We Cater Your Needs</h2>
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
                                    <a href="tally" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Server 9 Or Tally Prime Server</h5>
                                    <p class="item-description">For medium and large organizations aiming for operational efficiency, Tally Server 9 or TallyPrime is essential. These robust solutions provide secure, concurrent data access for multiple users, enabling your team to work without disruptions.</p>
                                    <a href="tpserver" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally For CA</h5>
                                    <p class="item-description">Tally is an essential software for Chartered Accountants, streamlining financial management and compliance. It simplifies accounting, auditing, and taxation tasks, enabling efficient reporting and client management. With Tally, CAs can ensure regulatory adherence while enhancing their service delivery.</p>
                                    <a href="tallyca" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally .Net Subscription</h5>
                                    <p class="item-description">Tally .NET Subscription provides businesses with convenient access to Tally's features from any location. This subscription enhances collaboration and efficiency, offering real-time data access and multi-user capabilities, empowering organizations to manage their accounting and financial processes seamlessly.</p>
                                    <a href="tallynet" class="read-more" >Read More</a>
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
                                    <a href="tamc" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Data Synchronization</h5>
                                    <p>
                                        Decide on architecture Type : Centralized / Decentralized / Hybrid, we will set it up for your Multi Location Organization. Sync Data periodically or directly enter data into Central Tally Server.</p>
                                        <a href="tsynchronization" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally ERP 9 and TallyPrime Training</h5>
                                    <p class="item-description">Corporate training programs for your staff to ensure use of Tally.ERP 9 and TallyPrime to the fullest. A basket of training modules to choose from depending on your need & profile of the team.</p>
                                    <a href="tctraining" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Support – Onsite & Remote</h5>
                                    <p class="item-description">We offer Tally installation, data synchronization, migration, and ongoing support. Our engineers provide training and assistance, available onsite or remotely for your complete convenience.</p>
                                    <a href="tamc" class="read-more" >Read More</a>
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
                                    <a href="businessdashboard" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Customer Profiling App</h5>
                                    <p class="item-description">The Tally Mobile application is invaluable for field personnel—salespersons, sales managers, and business owners. It features a business directory, contact management, and real-time access to financial data, empowering users to manage sales, track performance, and streamline operations on the go.
                                    </p>
                                    <a href="profilingapp" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Trans Approval App</h5>
                                    <p class="item-description">A business owner must approve critical transactions while on the move to ensure business continuity. With the right tools, they can manage approvals in real-time, mitigating risks and enhancing operational efficiency, ensuring that essential decisions are made promptly and effectively for success.</p>
                                    <a href="transapp" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Sales Order Booking App</h5>
                                    <p class="item-description">Sales orders can be easily entered and managed through smartphones using the Sales Order Booking Tally App for Android and iPhone. This app facilitates faster order booking, allowing sales teams to efficiently capture and track orders on the go, streamlining the sales process for improved productivity.</p>
                                    <a href="salesorder" class="read-more" >Read More</a>
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
                                    <a href="verticalsolutions" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Integration</h5>
                                    <p class="item-description">Integrate Tally.ERP 9 with virtually everything—Excel, SQL, Java, .NET, eCommerce websites, mobile devices, and even hardware like digital weighing scales. This seamless integration enhances data flow, streamlines operations, and enables businesses to leverage Tally's powerful capabilities across various platforms and devices.</p>
                                    <a href="tallyint" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Customization</h5>
                                    <p class="item-description">Customize your Tally.ERP 9 to align with your business needs through tailored invoice and voucher formats, specialized reports, and the addition of new fields. Strengthen controls and security while developing new functionalities to optimize processes, ensuring Tally integrates into your operational framework for enhanced efficiency.</p>
                                    <a href="tcustomization" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally GST</h5>
                                <p class="item-description">Business dynamics in India are poised for change with the introduction of the Goods and Services Tax (GST). Effective from July 1st, GST simplifies the taxation process and creates a unified market across the country. Tally GST equips businesses with essential tools to ensure compliance and streamline financial operations in this evolving landscape.
                                </p>
                                <a href="gstfilling" class="read-more" >Read More</a>
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
                                    <a href="smartbackup" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Multi File Attachment</h5>
                                    <p class="item-description">With the Multi File Attachment feature, you can easily attach multiple files such as DOC, XLS, PDF, JPG, and more to your financial transactions in Tally. Retrieve these files directly from the Tally application without leaving your desk, streamlining your workflow and enhancing document management for improved efficiency.</p>
                                    <a href="multifile" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Tally Sheet Magic</h5>
                                    <p class="item-description">Tally Sheet Magic allows you to create custom reports in Excel using data from Tally, all without needing programming knowledge. Effortlessly convert your existing Excel report formats into Sheet Magic reports, enabling you to streamline your reporting process and gain valuable insights from your financial data with ease.</p>
                                    <a href="magicsheet" class="read-more" >Read More</a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <h5>Audit Trail with Voucher History</h5>
                                    <p class="item-description">The Audit Trail feature allows you to track the history of a transaction from its creation through multiple alterations. It maintains a log of inventory and ledger entries, including details on rates and amounts. This transparency enhances accountability and ensures compliance in your financial processes for better oversight.
                                    </p>
                                    <a href="audittrial" class="read-more" >Read More</a>
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
<?php
    include "awards.php";
?>
<!-- Awards carousel end -->
<!-- Events carousel start -->
<?php
    include "event.php";
?>
<!-- Events carousel end -->
<br><br><br><br>
<!-- footer start -->
<?php include './footer.php' ?>
  <!-- Footer End -->








<!-- Back to Top 
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i style="width: 100px;" class="bi bi-arrow-up"></i></a>
-->
<!-- Back to Top -->
<a href="#" class="button btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
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