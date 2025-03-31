
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
              data-wow-delay="0.5s"
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
          In a traditional multi-user setup, system slowdowns and data access conflicts are common when multiple users try to access and modify data simultaneously. TallyPrime Server eliminates these issues by ensuring seamless concurrency. Users can load companies, save transactions, generate reports, print data, export files, and even take backups without any downtime. This efficient handling of multiple operations at once results in optimal utilization of man-hours, as tasks are completed at a much faster pace.

Additionally, multiple users can work on the same data file simultaneously without any risk of discrepancies. Since the system ensures that data is always real-time and consistent, businesses can make decisions based on the latest available information. Whether it is accountants recording transactions while another team is generating financial statements, or a manager analyzing reports while entries are being made, TallyPrime Server ensures smooth and efficient business operations.
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
          One of the biggest concerns for businesses handling sensitive financial data is security. With TallyPrime Server, data access is controlled in a structured manner, ensuring that only authorized personnel can perform certain operations. Unlike traditional setups where users need direct access to data files stored on a shared server, TallyPrime Server allows users to work without knowing the exact location of the data. Instead, they can simply connect through the server name, reducing the risk of accidental deletions or modifications.

Furthermore, critical operations such as taking backups, restoring data, or modifying company settings require explicit authorization. This ensures that only those with the necessary permissions can make significant changes, safeguarding against unauthorized access. Businesses dealing with financial reports, taxation, and audits benefit greatly from such controlled access, ensuring compliance and preventing data breaches. 
          </p>
        </div>
        <div class="col-lg-5" style="min-height: 500px">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn"
              data-wow-delay="0.5s"
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
              data-wow-delay="0.5s"
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
          Downtime can severely impact business productivity, especially when it comes to financial transactions and reporting. TallyPrime Server enhances reliability by ensuring that business operations continue without interruption, even during critical processes such as data backup. Unlike traditional systems, where taking a backup might require users to pause their work, TallyPrime Server allows transactions to be recorded, reports to be generated, and data to be accessed without any slowdowns.

Another key advantage is that any errors or system failures on a client machine remain isolated to that system. This means that issues on one user’s computer will not affect the overall data integrity or disrupt other users working on the same data. By minimizing downtime and preventing data loss, TallyPrime Server ensures business continuity and smooth workflow execution.
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
          Optimizing business processes is crucial for maintaining efficiency and improving performance. TallyPrime Server provides a real-time monitoring capability that allows administrators to oversee user sessions and track system usage. Business owners or IT administrators can see which users are logged in, what operations they are performing, and how resources are being utilized. This visibility helps in making informed decisions about optimizing processes and managing system loads effectively.

Additionally, administrators can identify inactive users or sessions consuming unnecessary resources and disconnect them if required. This prevents system slowdowns and ensures that computing resources are allocated efficiently. By monitoring and optimizing usage patterns, businesses can maximize productivity, minimize bottlenecks, and improve overall performance.
          </p>
        </div>
        <div class="col-lg-5" style="min-height: 500px">
          <div class="position-relative h-100">
            <img
              class="position-absolute w-100 h-100 rounded custom-image-size wow zoomIn"
              data-wow-delay="0.5s"
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
          src="img\employee_912318.png"
          class="img-fluid"
          alt="Tally"
          style="display: block; margin-left:40%; height:35px; width:auto;"
        />
        <p class="para-text">
          You are a growing business with 10+ employees that perform various operations simultaneously
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="business">
        <img
          src="img\account_4132735.png"
          class="img-fluid"
          alt="Tally"
          style="display: block; margin-left:40%; height:35px; width:auto;"
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
          src="img\networking_1736397.png"
          class="img-fluid"
          alt="Tally"
          style="display: block; margin-left:40%; height:35px; width:auto;"
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


