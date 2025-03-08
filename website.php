<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- including css start -->
     <?php include 'linkcss.php' ?>
    <!-- including css end -->

    <style>
        /* feature styling start */
            /* Row alignment - center the items horizontally */
            .feature-row {
                display: flex;
                justify-content: center; /* Center the items horizontally */
                gap: 2rem; /* Adds space between feature items */
            }

            /* Styling for the feature items */
            .feature-item {
                background-color: #f8f9fa; /* Light background for feature boxes */
                border-radius: 0.5rem;
                padding: 2rem;
                text-align: center;
                transition: all 0.3s ease;
                max-width: 350px; /* Optional: limit the width of each feature box */
                margin: 0 auto; /* Center the feature boxes individually */
            }

            .feature-item:hover {
                background-color: #e9ecef; /* Slight background change on hover */
                transform: translateY(-5px); /* Lift effect on hover */
            }

            /* Icon styling */
            .feature-item i {
                color: #06A3DA; /* Primary color for icons */
                font-size: 3rem;
                margin-bottom: 1rem;
            }

            /* Heading styling */
            .feature-item h5 {
                font-size: 1.25rem;
                margin-bottom: 1rem;
                font-weight: 600;
                color: #333;
            }

            /* Paragraph styling */
            .feature-item p {
                font-size: 1rem;
                color: #666;
                margin: 0;
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .feature-row {
                    flex-direction: column; /* Stack items vertically on smaller screens */
                    align-items: center; /* Center items in the column layout */
                }

                .feature-item {
                    margin-bottom: 2rem; /* Add some margin between items in mobile view */
                }
            }
/* feature styling end */

/* about styling start */
            /* Container and section styling */
            .about-section {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .about-text {
                padding-right: 2rem;
            }



            /* Headings */
            h1 {
                font-size: 2.5rem;
                font-weight: 700;
                color: #333;
                margin-bottom: 2rem;
            }

            /* Paragraph styling */
            /* p {
                font-size: 1rem;
                color: #666;
                margin-bottom: 1rem;
                line-height: 1.8;
            } */

            /* Skill bars */
            .skill {
                margin-bottom: 1.5rem;
            }

            .progress {
                height: 1rem;
                background-color: #e9ecef;
                border-radius: 0.25rem;
                overflow: hidden;
            }

            .progress-bar {
                height: 100%;
                background-color: #06A3DA;
                transition: width 0.4s ease;
            }

            .bg-primary {
                background-color: #06A3DA;
            }

            .bg-secondary {
                background-color: #6c757d;
            }

            .bg-dark {
                background-color: #343a40;
            }

            /* Button styling */
            .btn-primary {
                background-color: #06A3DA;
                border-color: #06A3DA;
                color: #fff;
                padding: 0.75rem 2rem;
                font-size: 1rem;
                font-weight: 500;
                transition: background-color 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #06A3DA;
                border-color: #06A3DA;
            }

            /* Image styling */
            .about-img {
                max-width: 100%;
                height: auto;
                border-radius: 0.5rem;
            }

            /* WOW animations */
            .wow {
                visibility: hidden;
            }

            .wow.fadeInUp {
                animation-name: fadeInUp;
            }

            .wow.zoomIn {
                animation-name: zoomIn;
            }

            @keyframes fadeInUp {
                from {
                    transform: translate3d(0, 40px, 0);
                    opacity: 0;
                }
                to {
                    transform: translate3d(0, 0, 0);
                    opacity: 1;
                }
            }

            @keyframes zoomIn {
                from {
                    opacity: 0;
                    transform: scale3d(0.3, 0.3, 0.3);
                }
                to {
                    opacity: 1;
                }
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .about-section {
                    flex-direction: column;
                }

                .about-text {
                    padding-right: 0;
                    text-align: center;
                }

                .about-text {
                padding-right: 2rem;
            }



                h1 {
                    font-size: 2rem;
                }

                .about-img {
                    margin-top: 2rem;
                }
            }
/* about styling end */

/* service styling start */
            /* Container and section styling */
            .service-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }



            /* Section heading styling */
            h1 {
                font-size: 2.5rem;
                font-weight: 700;
                color: #333;
                margin-bottom: 2.5rem;
                text-align: center;
            }

            /* Service item box */
            .service-item {
                background-color: #fff;
                padding: 2rem;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
                border-radius: 0.5rem;
                transition: all 0.3s ease;
                position: relative;
            }

            .service-item:hover {
                transform: translateY(-10px);
                box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
            }

            /* Service icon */
            .service-icon {
                width: 70px;
                height: 70px;
                background-color: #06A3DA;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1.5rem;
                border-radius: 50%;
            }

            .service-icon i {
                font-size: 2rem;
            }

            /* Service title and description */
            h5 {
                font-size: 1.25rem;
                font-weight: 600;
                color: #333;
                margin-bottom: 1rem;
            }

            .hp {
                font-size: 1rem;
                color: #FFF;
                margin-bottom: 1.5rem;
                line-height: 1.6;
            }

            /* Button styling */
            .btn-square {
                background-color: #06A3DA;
                color: #fff;
                padding: 0.5rem;
                border-radius: 0.5rem;
                transition: background-color 0.3s ease;
                position: absolute;
                bottom: 20px;
                right: 20px;
            }

            .btn-square:hover {
                background-color: #06A3DA;
                color: #fff;
            }

            .btn-square i {
                font-size: 1rem;
            }

            /* WOW animations */
            .wow {
                visibility: hidden;
            }

            .wow.fadeInUp {
                animation-name: fadeInUp;
            }

            @keyframes fadeInUp {
                from {
                    transform: translate3d(0, 40px, 0);
                    opacity: 0;
                }
                to {
                    transform: translate3d(0, 0, 0);
                    opacity: 1;
                }
            }

            /* Responsive adjustments */
            @media (max-width: 768px) {
                .service-item {
                    margin-bottom: 2rem;
                }
            }
/* service styling end */


/* Projects Section Styling */
.container-fluid {
    padding-left: 15px;
    padding-right: 15px;
}


h1 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 1rem;
}

#portfolio-flters {
    padding: 0;
    margin: 0;
    list-style: none;
}

#portfolio-flters li {
    display: inline-block;
    padding: 10px 20px;
    border: 1px solid #ddd;
    cursor: pointer;
    font-weight: 600;
    color: #333;
    transition: all 0.3s ease;
}

#portfolio-flters li:hover, #portfolio-flters li.active {
    background-color: #06A3DA;
    color: #fff;
    border-color: #06A3DA;
}

.portfolio-item {
    position: relative;
    overflow: hidden;
}

.portfolio-item img {
    transition: all 0.3s ease;
    display: block;
}

.portfolio-item:hover img {
    transform: scale(1.1);
}

.portfolio-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    opacity: 0;
    transition: all 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
}

.portfolio-item:hover .portfolio-overlay {
    opacity: 1;
}

.portfolio-overlay a {
    font-size: 18px;
    color: #fff;
    border: 1px solid #fff;
    padding: 8px 12px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.portfolio-overlay a:hover {
    background-color: #06A3DA;
    border-color: #06A3DA;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.p-4 {
    padding: 1.5rem !important;
}

.text-primary {
    color: #06A3DA !important;
}

.fw-medium {
    font-weight: 500 !important;
}

.lh-base {
    line-height: 1.5;
}

/* Media Queries for responsiveness */
@media (max-width: 768px) {
    .section-title {
        font-size: 16px;
    }

    h1 {
        font-size: 28px;
    }

    .portfolio-item {
        margin-bottom: 30px;
    }
}

@media (max-width: 576px) {
    #portfolio-flters li {
        padding: 8px 12px;
        font-size: 14px;
    }
}

/* project section styling end */
    </style>


</head>
<body>
    <!-- include navbar start -->
     <?php include 'navbar.php' ?>
    <!-- include navbar end -->


    <!--Carousel Start-->
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="left: 0%;top: 0%; right: 0%; width:100%;height: 600px;"  src="./img/web-car-1.webp" alt="Image">
                <div class="carousel-caption ">
                    <div class="p-3" style="max-width: 900px;">
                        <a href="blogdetais.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">To Know More</a>
                        <a href="contact.php" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                    <img style="left: 0%;top: 0%; right: 0%; width:100%;height: 600px;"  class="w-100" src="./img/web-car.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-LEFT justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h5 class="text-uppercase mb-3 animated slideInDown">Stay Updated</h5> -->
                            <!-- <h1 class="animated zoomIn" >Tally Prime 5.0</h1> -->
                            <a href="blogdetails.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">To Know More</a>
                            <a href="contact.html" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
           </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <img src="./img/Pre.png" alt="Previous" class="custom-prev-icon">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <img src="./img/next.png" alt="Next" class="custom-next-icon">
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    

    

<!-- Carousel End -->

    <!-- hero section start -->

    <div style="background-color:#3069B1;" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5" style="background-color:dark-blue;">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="position-relative pb-3 mb-3">
                    <h5 class="fw-bold text-primary text-uppercase">A Digital Agency Of Intelligents & Creative People</h5>
                </div>
                <p class="mb-4 hp">"Ajay Infotech is a top-tier web app development firm, crafting transformative digital experiences tailored to clients' unique needs. With a seasoned team and a commitment to quality, we deliver innovative solutions and ongoing support, shaping the future of digital innovation."</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Web Solutions</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Responsive Design</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Custom Websites</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Online Presence</h5>
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
                <a href="about.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More</a>
                <a href="maincontact.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Contact
                    Us</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                        src="img/Webhero.png" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- hero section end -->
    

    







<!-- Newsletter Start -->
<!-- <div class="container overflow-hidden">
    <video src="img/aivideo.mp4" autoplay muted loop class="w-100 d-block mx-auto"></video>    
</div> -->

<!-- Newsletter End -->



<!-- Projects Section Start -->
<div class="container-fluid py-5" style="padding-left: 15px; padding-right: 15px;">
    <!-- Inner container with padding and larger padding for large screens -->
    <div class="container py-5 px-lg-5">
        
        <!-- Section Title Start -->
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <!-- Subtitle with custom styling -->
            <p class="sec-title text-secondary justify-content-center" style="font-size: 18px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; display: inline-block; position: relative; padding-bottom: 15px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Projects</h5>
                <span></span>
            </p>
            <!-- Main section title -->
            <h1 class="text-center mb-5" style="font-size: 36px; font-weight: 700; margin-bottom: 1rem;">Sample Projects</h1>
        </div>
        <!-- Section Title End -->
        
        <!-- Portfolio Filters Start -->
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <!-- Portfolio filter buttons (All, Web Design, Graphic Design) -->
                <ul class="list-inline mb-5" id="portfolio-flters" style="padding: 0; margin: 0; list-style: none;">
                    <li class="mx-2 active" data-filter="*" style="display: inline-block; padding: 10px 20px; border: 1px solid #ddd; cursor: pointer; font-weight: 600; color: #333; transition: all 0.3s ease;">All</li>
                    <!-- <li class="mx-2" data-filter=".first" style="display: inline-block; padding: 10px 20px; border: 1px solid #ddd; cursor: pointer; font-weight: 600; color: #333; transition: all 0.3s ease;">Web Design</li>
                    <li class="mx-2" data-filter=".second" style="display: inline-block; padding: 10px 20px; border: 1px solid #ddd; cursor: pointer; font-weight: 600; color: #333; transition: all 0.3s ease;">Graphic Design</li> -->
                </ul>
            </div>
        </div>
        <!-- Portfolio Filters End -->
        
        <!-- Portfolio Items Start -->
        <div class="row g-4 portfolio-container">
            
            <!-- Portfolio Item 1: Chocolate Web -->
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <!-- Image Wrapper -->
                    <div class="position-relative overflow-hidden">
                        <!-- Project Image -->
                        <img class="img-fluid w-100" src="img/chocolate.png" alt="" style="transition: all 0.3s ease;">
                        <!-- Image Overlay (optional for future content) -->
                        <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); opacity: 0; transition: all 0.3s ease; display: flex; justify-content: center; align-items: center;">
                        </div>
                    </div>
                    <!-- Project Description -->
                    <div class="bg-light p-4" style="background-color: #f8f9fa !important; padding: 1.5rem !important;">
                        <p class="text-primary fw-medium mb-2" style="color: #007bff !important; font-weight: 500;">UI / UX Design</p>
                        <h5 class="lh-base mb-0" style="line-height: 1.5;">Chocolate Web</h5>
                        <!-- Link to project -->
                        <a class="btn btn-square btn-outline-light mx-1" href="https://ajayinfotech.in/food/food2/" style="font-size: 18px; color: #fff; border: 1px solid #fff; padding: 8px 12px; text-decoration: none; display: inline-block; transition: all 0.3s ease;"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 1 End -->
            
            <!-- Portfolio Item 2: Cake Web -->
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <!-- Image Wrapper -->
                    <div class="position-relative overflow-hidden">
                        <!-- Project Image -->
                        <img class="img-fluid w-100" src="img/project1.png" alt="" style="transition: all 0.3s ease;">
                        <!-- Image Overlay (optional for future content) -->
                        <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); opacity: 0; transition: all 0.3s ease; display: flex; justify-content: center; align-items: center;">
                        </div>
                    </div>
                    <!-- Project Description -->
                    <div class="bg-light p-4" style="background-color: #f8f9fa !important; padding: 1.5rem !important;">
                        <p class="text-primary fw-medium mb-2" style="color: #007bff !important; font-weight: 500;">UI / UX Design</p>
                        <h5 class="lh-base mb-0" style="line-height: 1.5;">Cake Web</h5>
                        <!-- Link to project -->
                        <a class="btn btn-square btn-outline-light mx-1" href="https://ajayinfotech.in/food/food1/" style="font-size: 18px; color: #fff; border: 1px solid #fff; padding: 8px 12px; text-decoration: none; display: inline-block; transition: all 0.3s ease;"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 2 End -->
            
            <!-- Portfolio Item 3: Amazing Cake Web -->
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <!-- Image Wrapper -->
                    <div class="position-relative overflow-hidden">
                        <!-- Project Image -->
                        <img class="img-fluid w-100" src="img/project3.png" alt="" style="transition: all 0.3s ease;">
                        <!-- Image Overlay (optional for future content) -->
                        <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); opacity: 0; transition: all 0.3s ease; display: flex; justify-content: center; align-items: center;">
                        </div>
                    </div>
                    <!-- Project Description -->
                    <div class="bg-light p-4" style="background-color: #f8f9fa !important; padding: 1.5rem !important;">
                        <p class="text-primary fw-medium mb-2" style="color: #007bff !important; font-weight: 500;">UI / UX Design</p>
                        <h5 class="lh-base mb-0" style="line-height: 1.5;">Amazing Cake Web</h5>
                        <!-- Link to project -->
                        <a class="btn btn-square btn-outline-light mx-1" href="https://ajayinfotech.in/food/food3/" style="font-size: 18px; color: #fff; border: 1px solid #fff; padding: 8px 12px; text-decoration: none; display: inline-block; transition: all 0.3s ease;"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 3 End -->

            <!-- Portfolio Item 4: Honey Web -->
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded overflow-hidden">
                    <!-- Image Wrapper -->
                    <div class="position-relative overflow-hidden">
                        <!-- Project Image -->
                        <img class="img-fluid w-100" src="img/project4.png" alt="" style="transition: all 0.3s ease;">
                        <!-- Image Overlay (optional for future content) -->
                        <div class="portfolio-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7); opacity: 0; transition: all 0.3s ease; display: flex; justify-content: center; align-items: center;">
                        </div>
                    </div>
                    <!-- Project Description -->
                    <div class="bg-light p-4" style="background-color: #f8f9fa !important; padding: 1.5rem !important;">
                        <p class="text-primary fw-medium mb-2" style="color: #007bff !important; font-weight: 500;">UI / UX Design</p>
                        <h5 class="lh-base mb-0" style="line-height: 1.5;">Honey Web</h5>
                        <!-- Link to project -->
                        <a class="btn btn-square btn-outline-light mx-1" href="https://ajayinfotech.in/food/food4/" style="font-size: 18px; color: #fff; border: 1px solid #fff; padding: 8px 12px; text-decoration: none; display: inline-block; transition: all 0.3s ease;"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 3 End -->
            <!-- Additional portfolio items would follow the same structure -->
            
        </div>
        <!-- Portfolio Items End -->
        
    </div>
</div>
<!-- Projects Section End -->


<!-- testimonials start -->
<?php include 'testimo.php' ?> 
<!-- testimonials end -->


<!-- footer start -->
 <?php include 'footer.php' ?>
<!-- footer end -->




<!-- including javascript start -->
 <?php include 'linkscript.php' ?>
<!-- including javascript end -->

</body>
</html>