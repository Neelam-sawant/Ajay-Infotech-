
<!-- All things are start from here -->

<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'linkcss.php' ?>


    <!-- Internal Styles -->
<style>
  /* Tally Prime server start */

  .tpsimg {
    display: flex;
    justify-content: center;
  }

  .custom-image-size {
    width: 80%; /* Adjust width as needed */
    height: auto; /* Maintain aspect ratio */
    max-width: 400px; /* Set a maximum width */
    object-fit: contain; /* Maintain aspect ratio */
  }

  /* Tally Prime server end */

  .headings {
    text-align: center; /* Force center alignment */
    width: 100%; /* Ensure the element spans the full width */
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



<!-- background name display Start -->
<div class="aiheaderimage">
  <img src="img/Tally Pime backgrornd image.png"  class="header-image">
  <h1 class="title">Tally Prime Server</h1>
</div>
<!-- background name display end -->


















  <!-- Tally Prime Server Section Start -->
<div
style="background-color:rgb(255, 255, 255)"
class="container-fluid py-5 wow fadeInUp"
data-wow-delay="0.1s"
>
<div class="container py-5">
  <!-- Title and Paragraph about Tally Prime Server -->
  <div
    class="section-title text-center position-relative pb-3 mb-5 mx-auto"
    
  >
    <h5 class="fw-bold text-primary text-uppercase">Tally Prime Server</h5>
    <p class="mb-0">
      Unleash the power of TallyPrime with a Client-Server Architecture
    </p>
    <br />
    <p class="mb-0">
      TallyPrime Server offers powerful data server capabilities over the Gold
      license. This server-based Data Architecture unleashes greater
      concurrency, secured data access, and advanced monitoring capabilities.
      TallyPrime Server is truly an Enterprise Class product that helps
      fast-growing medium and large businesses improve their business
      efficiencies.
    </p>
  </div>

  <!-- Tally Prime Server Image -->
  <div class="tpsimg">
    <img style="max-width: 100%;" src="img/tpserver1.png" alt="Tally Prime Server" />
  </div>
  <br /><br />


  

  <!-- Description and Image Section start -->
  <div
    class="container-fluid custom-description-image py-5 wow fadeInUp"
    data-wow-delay="0.1s"
  >
  
    <div class="container py-5">
      <strong><h3 style="text-align: center;" class="mb-0 text-uppercase  ">Key Benefits</h3></strong>
      <!-- first Component -->
      <div class="row g-5 mt-5">
        <!-- Image Column Now on the Left -->
        <div class="col-lg-5" style="min-height: 500px">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tpserver2.png"
            />
          </div>
        </div>
        <!-- Text Column Now on the Right -->
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">High Concurrency</h1>
            <strong
              ><p class="mb-0">
                Performing operations in a frictionless environment
              </p></strong
            >
          </div>
          <p class="mb-4">
            Multiple users will be able to simultaneously load companies, save
            transactions, export reports, print reports, import data, take
            backup, and perform other data-related activities without
            experiencing any downtime. This will directly result in optimal
            utilization of man-hours as the velocity at which a task gets
            completed will increase. Further, the users will be able to
            seamlessly work on the same data. Your Data will always be
            real-time, consistent, and accurate.
          </p>
        </div>
      </div>

      <!-- second Component -->
      <div class="row g-5 mt-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">Secured by Design</h1>
            <strong
              ><p class="mb-0">
                Providing controlled access to data files
              </p></strong
            >
          </div>
          <p class="mb-4">
            When data files are managed through TallyPrime Server, the
            location of the data on the server is not required. The name of
            the data server is sufficient to access and operate TallyPrime.
            Operations over the company data like backup and restore are
            controlled with server-level permissions available with
            authorization only. This ensures better control over user access
            to data.
          </p>
        </div>
        <div class="col-lg-5" style="min-height: 500px">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tpserver3.png"
            />
          </div>
        </div>
      </div>

      <!-- Third Component -->
      <div class="row g-5 mt-5">
        <!-- Image Column Now on the Left -->
        <div class="col-lg-5" style="min-height: 500px">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tpserver4.png"
            />
          </div>
        </div>
        <!-- Text Column Now on the Right -->
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">High Reliability</h1>
            <p class="mb-0">Minimizing instances of system unavailability</p>
          </div>
          <p class="mb-4">
            Continue recording transactions or viewing reports while taking
            backup with no compromise on speed or access or accuracy. It also
            limits discrepancies at the client end to the client systems and
            ensures that neither data on the server nor the operations of
            other users get impacted. Thus, it improves work productivity and
            business performance by avoiding disruption of work and ensuring
            zero downtime.
          </p>
        </div>
      </div>

      <!-- Fourth Component -->
      <div class="row g-5 mt-5">
        <div class="col-lg-7">
          <div class="section-title position-relative pb-3 mb-5">
            <h1 class="mb-0">Business Process Optimization</h1>
            <strong
              ><p class="mb-0">
                Increased Productivity & Business Performance
              </p></strong
            >
          </div>
          <p class="mb-4">
            A comprehensive monitoring capability allows authorized users to
            manage user sessions, such as who is logged in and activities in
            progress. Also, with the ability to track, monitor user
            activities/sessions and even disconnect users, if required, it
            helps to optimize processes or system usage for enhanced
            productivity.
          </p>
        </div>
        <div class="col-lg-5" style="min-height: 500px">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn"
              data-wow-delay="0.9s"
              src="img/tpserver5.png"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Description and Image Section end -->

  <!-- tally is right start -->
  <div class="container">
  <div class="row">
    <div class="col-12">
      <h3 class="headings" style="text-align:left">
        Find out if TallyPrime Server is right for your business
      </h3>
      <p class="para-text text-center">
        <b>
          Below are some of the indicative scenarios to help you decide the
          fitment of TallyPrime Server for your business.
        </b>
      </p>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="business">
        <img
          src="https://tallysolutions.com/wp-content/uploads/2019/08/Icon-4-Blue.svg"
          class="img-fluid"
          alt="Tally"
          style="display: block; margin: auto;"
        />
        <p class="para-text">
          You are a growing business with 10+ employees that perform various operations simultaneously
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="business">
        <img
          src="https://tallysolutions.com/wp-content/uploads/2019/08/Icon-4-Blue.svg"
          class="img-fluid"
          alt="Tally"
          style="display: block; margin: auto;"
        />
        <p class="para-text">
          A business where multiple users are connected to the same data and
          there is a need for an administrator to manage the data access and
          also monitor the user’s activities
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="business">
        <img
          src="https://tallysolutions.com/wp-content/uploads/2019/08/Icon-4-Blue.svg"
          class="img-fluid"
          alt="Tally"
          style="display: block; margin: auto;"
        />
        <p class="para-text">
          A business with multiple branches and head office. All the
          transactions of Branch office are consolidated to Head office
          while the local users are still operating smoothly
        </p>
      </div>
    </div>
  </div>
</div>


  <!-- tally is right end -->
</div>
</div>





<!-- contact start -->

<div class="container wow fadeInUp mt-5" data-wow-delay="0.1s">
  <div class="container">
      <div class="section-title text-center position-relative pb-3 mb-5 py-5 mx-auto" style="max-width: 600px;">
          <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
          <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
      </div>

      <div class="row g-5 mt-5">
          <!-- Contact Information -->
          <div class="col-lg-6">
              <div class="row g-5">
                  <div class="col-lg-12 mb-5 mt-5">
                      <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                          <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                              <i class="fa fa-phone-alt text-white"></i>
                          </div>
                          <div class="ps-4">
                              <h5 class="mb-2">Call to ask any question</h5>
                              <h4 class="text-primary mb-0">+91 9029005996</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                          <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                              <i class="fa fa-envelope-open text-white"></i>
                          </div>
                          <div class="ps-4">
                              <h5 class="mb-2">Email to get free quote</h5>
                              <h4 class="text-primary mb-0">ajayinfotech20@gmail.com</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Contact Form -->
          <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
              <form action="submit.php" method="post">
                  <!-- Name and Email on same row -->
                  <div class="row">
                      <div class="col-md-6">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="col-md-6">
                          <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                      </div>
                  </div>
                  <!-- Subject on its own row -->
                  <div class="form-group mt-3">
                      <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                  </div>
                  <!-- Message textarea on its own row -->
                  <div class="form-group mt-3">
                      <textarea id="message" name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                  </div>
                  <!-- Submit button -->
                  <div class="form-group mt-3">
                      <button class="btn btn-primary w-100 py-3" type="submit" value="Submit">Send Message</button>
                  </div>
              </form>
          </div>
      </div>

      <!-- Row containing address and maps side by side -->
      <div class="row g-5 mt-5">
          <!-- Address -->
          <div class="col-lg-4">
              <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                  <div class="ps-4">
                      <h5 class="mb-2" style="font-size: 50px;">Headquarter</h5>
                      <h4 class="text-primary mb-0">A-220, Redbricks Business Plaza, Above Chroma, Virar West.</h4>
                  </div>
              </div>
              <br>
              <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                  <div class="ps-4">
                      <h5 class="mb-2" style="font-size: 50px;">Branches</h5>
                      <h4 class="text-primary mb-0">Mira Road</h4>
                      <h4 class="text-primary mb-0">Palghar</h4>
                  </div>
              </div>
          </div>

          <!-- Maps -->
          <div class="col-lg-8 d-flex">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60193.09223434135!2d72.75972299533613!3d19.4526233819601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7aa1feb01b015%3A0xf167c2b381a55ccc!2sRedbricks%20Business%20Plaza!5e0!3m2!1sen!2sin!4v1724390195086!5m2!1sen!2sin" frameborder="0" style="width: 100%; min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
      </div>
  </div>
</div>



<!-- contact end -->




<!-- Vendor Start -->
<?php include 'vendor.php' ?>
<!-- Vendor End -->









<!-- footer start -->
<?php include 'footer.php' ?>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <?php include 'linkscript.php' ?>
</body>

</html>


