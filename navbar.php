

<!-----Complete Navbar Start----->
<style>
.top-bar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #343a40; /* Dark background */
    z-index: 1050; /* Ensure it stays above other elements */
    height: 35px; /* Reduce height */
    line-height: 18px; /* Center text vertically */
    font-size: 15px; /* Adjust font size */
    padding: 0 10px;
}

/* Fixed Navbar */
.navbar {
    position: fixed;
    top: 35px; /* Adjust based on top bar height */
    left: 0;
    width: 100%;
    background-color: #333; /* Navbar background */
    z-index: 1000;
}

/* Push content below fixed elements */
body {
    padding-top: 60px; /* Adjust: 30px for top bar + ~50px for navbar */
}
</style>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-block top-bar">
    <div class="row gx-0"> 
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 9029005996</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@ajayinfotech.in</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="me-3 text-light" href="career.php">Career</a>
                <a class="me-3 text-light" href="downloadpage.php">Download</a>
            </div>
        </div>
    </div>
</div>
  <!-- Topbar End -->
  
  
  <!-- NavbarStart -->
  <div class="container-fluid position-relative p-0 ">
      <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background-color: #003B64;">
          <a href="index.php" class="navbar-brand p-0">
              <h1 style="margin-left:30px;"><i class="fa  me-2"><img style="height: 50px;width: 50px; margin: left 10px;" src="img\AILOGO.png" alt=""> </i>Ajay Infotech</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto py-0">
                  <a href="index.php" class="nav-item nav-link active">Home</a>
                  <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product & Services</a>
    <div class="dropdown-menu p-3" aria-labelledby="navbarDropdown" style="width: 500px;">

        <div class="row gx-2"> <!-- Added gx-2 for horizontal spacing -->
            <!-- Tally Section -->
            <div class="col-4">
                <a href="tally.php">
                    <h6 class="dropdown-title">Tally</h6>
                </a>
                <a href="./tallyprime.php" class="dropdown-item">Tally Prime</a>
                <a href="tpserver.php" class="dropdown-item">Tally Prime Server</a>
                <a href="tmobile.php" class="dropdown-item">Tally On Mobile</a>
                <a href="tcloud.php" class="dropdown-item">Tally On Cloud</a>
            </div>

           

            <!-- Tally Services Section -->
            <div class="col-4">
                <h6 class="dropdown-title" style="margin-left: 12px;">Tally Services</h6>
                <a href="tamc.php" class="dropdown-item">Tally AMC</a>
                <a href="tctraining.php" class="dropdown-item">Tally Corporate Training</a>
                <a href="tcustomization.php" class="dropdown-item">Tally Customization</a>
                <a href="tsynchronization.php" class="dropdown-item">Tally Synchronization</a>
            </div>

             <!-- GST Services Section -->
             <div class="col-4">
                <a href="gstservice.php">
                    <h6 class="dropdown-title">GST Services</h6>
                </a>
                <a href="gstfilling.php" class="dropdown-item">GST Filing</a>
                <a href="inrfilling.php" class="dropdown-item">INR Filing</a>
                <a href="datafilling.php" class="dropdown-item">Data Entry</a>
            </div>
        </div>
    </div>
</div>


<a href="Gem\index-5.1.html" class="nav-item nav-link">Gemlyte</a>



                  <div class="nav-item dropdown">
                      <a href="about.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                      <div class="dropdown-menu m-0">
                      <a href="about.php" class="dropdown-item">About Ajay Infotech</a>
                          <a href="gallery.php" class="dropdown-item">Gallery</a>
                      </div>
                  </div>
                  <a href="blog.php" class="nav-item nav-link">Blog</a>
                  
                  <a href="maincontact.php" class="nav-item nav-link">Contact</a>
              </div>
          </div>
      </nav>
  <!--Navbar End-->
<br>
<br>
  <!-----Complete Navbar End----->

