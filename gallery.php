
<!-- All things are start from here -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'linkcss.php' ?>

<!-- styling start -->
<style>






  .accordion-container {
    display: flex;
    justify-content: center;
    gap: 30px; /* Space between buttons */
    margin-top: 50px;
    flex-wrap: nowrap; /* Prevent wrapping */
    width: 100%; /* Ensure full width */
    box-sizing: border-box; /* Include padding and border in total width/height */
    overflow: auto; /* Add scroll if necessary */
  }
  .accordion-button {
    text-align: center;
    padding: 10px;
    font-size: 18px;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    cursor: pointer;
    transition: background-color 0.3s ease;
    max-width: 200px;
    min-width: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 18px !important; /* Ensure border radius is applied */
    position: relative; /* Ensure any pseudo-elements are positioned relative to button */
  }

  .accordion-button::after {
    content: ""; /* Remove any existing content */
    display: none; /* Hide any arrows */
  }

  .accordion-button.active {
    background-color: #5585b5 !important;
    color: white !important; 
    border-color: #0056b3 !important;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    border-radius: 18px; /* Ensure active button also has the same border radius */
  }

  .image-container {
    display: none;
    text-align: center;
    margin-top: 20px;
  }
  .image-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 images per row */
    gap: 10px;
  }
  .image-container img {
    width: 100%;
    height: auto;
    border: 1px solid #dee2e6;
    padding: 10px;
    background-color: #f8f9fa;
  }
  .accordion-background {
    background-color:  rgb(253, 253, 253);
    width: 100%; /* Ensure it takes full width */
    padding: 20px; /* Add padding to visualize background */
  }
</style>
<!-- styling end -->


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
    <h1 class="title">Gallery</h1>
</div>
<!-- background name display end -->




<!-- Navbar & Carousel End -->




<!-- Accordion start -->
<div class="accordion-background">
  <div class="container">
    <div class="accordion-container">
      <div class="accordion-button active" data-target="#image1">Events</div>
      <div class="accordion-button" data-target="#image2">Awards</div>
      <div class="accordion-button" data-target="#image3">All</div>
    </div>

    <div id="image1" class="image-container" style="display: block;"> <!-- Show Events images by default -->
      <div class="image-grid">
        <img src="img/wimg1.jfif" alt="Image 1" />
        <img src="img/wimg2.jfif" alt="Image 2" />
        <img src="img/wimg3.jfif" alt="Image 3" />
        <img src="img/wimg4.jfif" alt="Image 4" />
       
        <!-- This will go on the next row -->
      </div>
    </div>
    <div id="image2" class="image-container">
      <div class="image-grid">
      <img src="Awards and certificats\Awards and certificats\Remove background project (2).png" alt="Image 1" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (1).png" alt="Image 2" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (2).png" alt="Image 3" />
        <img src="Awards and certificats/Awards and certificats/Remove background project-1 (3).png" alt="Image 4" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (4).png" alt="Image 5" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (5).png" alt="Image 6" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (8).png" alt="Image 7" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (6).png" alt="Image 8" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (7).png" alt="Image 9" />
        <!-- This will go on the next row -->
      </div>
    </div>

    <div id="image3" class="image-container">
      <div class="image-grid">
      <img src="img/wimg1.jfif" alt="Image 1" />
        <img src="img/wimg2.jfif" alt="Image 2" />
        <img src="img/wimg3.jfif" alt="Image 3" />
        <img src="img/wimg4.jfif" alt="Image 4" />
      <img src="Awards and certificats\Awards and certificats\Remove background project (2).png" alt="Image 1" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (1).png" alt="Image 2" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (2).png" alt="Image 3" />
        <img src="Awards and certificats/Awards and certificats/Remove background project-1 (3).png" alt="Image 4" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (4).png" alt="Image 5" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (5).png" alt="Image 6" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (8).png" alt="Image 7" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (6).png" alt="Image 8" />
        <img src="Awards and certificats\Awards and certificats\Remove background project-1 (7).png" alt="Image 9" />
        <!-- This will go on the next row -->
      </div>
    </div>
  </div>
</div>
<!-- Accordion end -->



<br><br><br><br>


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



    <!-- scripting start -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Ensure default state is set correctly
    const defaultButton = document.querySelector(".accordion-button.active");
    if (defaultButton) {
      const target = defaultButton.getAttribute("data-target");
      document.querySelector(target).style.display = "block";
    }
  });

  document.querySelectorAll(".accordion-button").forEach((button) => {
    button.addEventListener("click", () => {
      // Check if the button is already active
      const isActive = button.classList.contains("active");
      console.log("Button clicked:", button.textContent);
      console.log("Is active:", isActive);

      // Remove active class from all buttons and hide all images
      document.querySelectorAll(".accordion-button").forEach((btn) => {
        btn.classList.remove("active");
        console.log("Removed active from:", btn.textContent);
      });
      document
        .querySelectorAll(".image-container")
        .forEach((img) => (img.style.display = "none"));

      // If the clicked button was not active, activate it and show the images
      if (!isActive) {
        button.classList.add("active");
        console.log("Added active to:", button.textContent);
        const target = button.getAttribute("data-target");
        document.querySelector(target).style.display = "block";
      }
    });
  });
</script>
<!-- scripting end -->


</body>

</html>



