<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    /* Top bar style */
    .top-bar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #343a40;
      z-index: 1050;
      height: 35px;
      line-height: 35px;
      font-size: 15px;
      padding: 0 10px;
      color: white;
    }

    /* Fixed navbar */
    .navbar {
      position: fixed;
      top: 35px;
      left: 0;
      width: 100%;
      z-index: 1040;
    }

    /* Push content down */
    body {
      padding-top: 100px;
    }

    /* Mega dropdown */
    .dropdown-menu {
      width: 100%;
      left: 0;
      right: 0;
    }

    .dropdown-menu .row {
      padding: 1rem;
    }

    .dropdown-title {
      font-weight: bold;
      color: #003B64;
      margin-bottom: 0.5rem;
    }

    .dropdown-item {
      font-size: 14px;
      white-space: nowrap;
    }

    @media (max-width: 767.98px) {
      .dropdown-menu {
        position: static !important;
      }
    }
  </style>
  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container-fluid">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <small><i class="fa fa-phone-alt me-2"></i>+91 9029005996</small>
          <small class="ms-3"><i class="fa fa-envelope-open me-2"></i>info@ajayinfotech.in</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003B64;">
    <div class="container-fluid px-4">
      <a class="navbar-brand d-flex align-items-center" href="index">
        <img src="img/AILOGO.png" alt="Logo" style="height: 50px; width: 50px; margin-right: 10px;">
        <h5 class="mb-0 text-white">Ajay Infotech</h5>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>

          <!-- Mega Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Product & Services</a>
            <div class="dropdown-menu">
              <div class="row">

                <!-- Tally -->
                <div class="col-md-4">
                  <h6 class="dropdown-title">Tally</h6>
                  <a class="dropdown-item" href="tallyprime">Tally Prime</a>
                  <a class="dropdown-item" href="tallyfeatures">Tally Features</a>
                  <a class="dropdown-item" href="pricing">Tally Prime Pricing</a>
                  <a class="dropdown-item" href="plans">Tally Software Services</a>
                  <a class="dropdown-item" href="tpserver">Tally Prime Server</a>
                  <a class="dropdown-item" href="tmobile">Tally On Mobile</a>
                  <a class="dropdown-item" href="tcloud">Tally On Cloud</a>
                </div>

                <!-- Tally Services -->
                <div class="col-md-4">
                  <h6 class="dropdown-title">Tally Services</h6>
                  <a class="dropdown-item" href="tamc">Tally AMC</a>
                  <a class="dropdown-item" href="tctraining">Tally Corporate Training</a>
                  <a class="dropdown-item" href="tcustomization">Tally Customization</a>
                  <a class="dropdown-item" href="tsynchronization">Tally Synchronization</a>
                </div>

                <!-- GST Services -->
                <div class="col-md-4">
                  <h6 class="dropdown-title">GST Services</h6>
                  <a class="dropdown-item" href="gstfilling">GST Filing</a>
                  <a class="dropdown-item" href="inrfilling">INR Filing</a>
                  <a class="dropdown-item" href="datafilling">Data Entry</a>
                </div>

              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Gem/index-5.1.html">Gemlyte</a>
          </li>

          <!-- About Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="about" data-bs-toggle="dropdown">About Us</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about">About Ajay Infotech</a></li>
              <li><a class="dropdown-item" href="gallery">Gallery</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="blog">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="maincontact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
