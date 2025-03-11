

<head>
  <meta charset="utf-8">
  <?php include 'linkcss.php' ?>


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
    <h1 class="title">Download</h1>
</div>

<!-- background name end -->
  
  


<!-- Tally Products List Start here -->
<div class="container-fluid " style="background-color: #e7eaf6" data-wow-delay="0.1s">
  <br><br><br>
  <div class="container ">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
      <h5 class="fw-bold text-primary text-uppercase">Tally 5.Ov</h5>
    </div>
    <div class=" text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
      <p class="mb-0">
        Experience a new-age business management software for new-age businesses. Now, with simplified MSME payments, e-commerce report in GSTR-1, intuitive report dashboards, and more.
      </p>
    </div>

    <!-- Download Sections in a row -->
    <div class="row justify-content-center">
      <!-- First Download Section -->
      <div class="col-md-4 mb-4 text-center">
        <div class="bg-light rounded py-4 px-5">
          <h4 class="text-primary mb-1">Tally Prime 5.O</h4>
          <a href="downloads/tallyprime5.exe" id="downloadtp5" class="btn btn-primary py-2 px-4 mt-4">Download</a>
        </div>
      </div>

      <!-- Second Download Section -->
      <div class="col-md-4 mb-4 text-center">
        <div class="bg-light rounded py-4 px-5">
          <h4 class="text-primary mb-1">Tally Prime 5.O (Edit Log)</h4>
          <a href="downloads/tallyprimeditlog5.exe" id="downloadtpel5" class="btn btn-primary py-2 px-4 mt-4">Download</a>
        </div>
      </div>
    </div>

    <br /><br /><br /><br /><br /><br />

    <!-- Tally Products List Start here -->

    <!-- tally prime, tally prime edit log and ERP-9 start -->
    <div class="container">
      <div class="row">
          <!-- First Accordion Component -->
          <div class="col-md-6">
              <h2 class="text-center text-primary mb-4">Tally Prime</h2> <!-- Title Added -->
              <div class="accordion" id="accordionOne">


                <!-- section for new versions -->

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading41">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="true" aria-controls="collapse41">
                            Version 4.1
                        </button>
                    </h2>
                    <div id="collapse41" class="accordion-collapse collapse show" aria-labelledby="heading">
                        <div class="accordion-body">
                            <p class="mb-0">
                                1.	TallyPrime with WhatsApp for Business
                            </p>
                            <p class="mb-0">
                                2.	Import Data from MS Excel
                            </p>
                            <p class="mb-0">
                                    3.	Graphical Dashboard
                                </p>
                                <p class="mb-0"><b>Date - </b> 12 March 2024</p>
                                <div class="btn-style">
                                    <a
                                    href="downloads/setup (2).exe" id="downloadtp"
                                    class="btn btn-primary py-2 px-4 mt-4"
                                    >Tally Prime Download </a
                                    >
                                    <a
                                    href="downloads/setup (4).exe" id="downloadtpel"
                                    class="btn btn-primary py-2 px-4 mt-4"
                                    >Tally Edit Log Download</a
                                    >
                                </div>
                        </div>
                    </div>
                </div>

                <!-- section for new end -->


                  <!-- Section 1 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Version 4.0
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <p class="mb-0">
                                1.	Missing or invalid State for Consignee (Ship To) & Dispatch From
                            </p>
                            <p class="mb-0">
                                2.	Mismatch between State and Pincode
                            </p>
                            <p class="mb-0">
                                3.	Mismatch between HSN and Type of supply
                            </p>
                            <p class="mb-0">
                                4.	Invoice numbers starting with zero
                            </p>
                            <p class="mb-0"><b>Date - </b> 12 December 2023</p>
                            <div class="btn-style">
                                <a
                                href="downloads/tallyprime4.exe" id="downloadtp301"
                                class="btn btn-primary py-2 px-4 mt-4"
                                >Tally Prime Download </a
                                >
                                <a
                                href="downloads/tallyprimeelg4.exe" id="downloadtpel301"
                                class="btn btn-primary py-2 px-4 mt-4"
                                >Tally Edit Log Download</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                  <!-- Section 2 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Version 3.0.1
                          </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                          <div class="accordion-body">
                              <p class="mb-0">
                                  1.	Missing or invalid State for Consignee (Ship To) & Dispatch From
                              </p>
                              <p class="mb-0">
                                  2.	Mismatch between State and Pincode
                              </p>
                              <p class="mb-0">
                                  3.	Mismatch between HSN and Type of supply
                              </p>
                              <p class="mb-0">
                                  4.	Invoice numbers starting with zero
                              </p>
                              <p class="mb-0"><b>Date - </b> 12 December 2023</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime301.exe" id="downloadtp301"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                                  <a
                                  href="downloads/tallyprimeeditlog301.exe" id="downloadtpel301"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Edit Log Download</a
                                  >
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 3 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Version 3.0
                          </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                          <div class="accordion-body">
                              <p class="mb-0">
                                  1.	Multiple GST Registrations in a Single Company
                              </p>
                              <p class="mb-0">
                                  2.	e-Invoice and e-Way Bill applicability
                              </p>
                              <p class="mb-0">
                                  3.	Transactions: All vouchers.
                              </p>
                              <p class="mb-0">
                                  4.	Masters: Stock items, ledgers, and accounting groups.
                              </p>
                              <p class="mb-0">
                                  5.	Company data: Migration, repair, import, split, and so on.
                              </p>
                              <p class="mb-0">
                                  6.	Add Digital Signature in PDF Documents
                              </p>
                              <p class="mb-0"><b>Date - </b> 12 June 2023</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime3.exe" id="downloadtp3"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                                  <a href="downloads/tallyprimeeditlog3.exe" id="downloadtpel3"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Edit Log Download</a
                                  >
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 4 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Version 2.1
                          </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                          <div class="accordion-body">
                              <p class="mb-0">
                                  1.	Latest TallyPrime releases
                              </p>
                              <p class="mb-0">
                                  2.	TSS validity and renewal
                              </p>
                              <p class="mb-0">
                                  3.	Rental license expiry and renewal
                              </p>
                              <p class="mb-0"><b>Date - </b> 21 March 2022</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime21.exe" id="downloadtp21"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                                  <a
                                  href="downloads/tallyprimeeditlog21.exe" id="downloadtpel21"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Edit Log Download</a
                                  >
                            </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 5 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Version 2.0.1
                          </button>
                      </h2>
                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                          <div class="accordion-body">
                              <p class="mb-0">1. Refined UI for smoother navigation and better user experience.</p>
                              <p class="mb-0">2.  Enhanced reliability in syncing data between multiple locations, making remote work more seamless.</p>
                              <p class="mb-0">3.  Adaptations to the latest GST regulations, ensuring easier filing and compliance.</p>
                              <p class="mb-0">4. Minor improvements in the bank reconciliation process for more accurate and faster matching.</p>
                              <p class="mb-0">5. Introduction of more options to tailor financial and business reports according to user needs.</p>
                              <p class="mb-0"><b>Date - </b> 9 December 2021</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime201.exe" id="downloadtp201"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 6 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Version 2.0
                          </button>
                      </h2>
                      <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                          <div class="accordion-body">
                              <p class="mb-0">
                                  1.	Generate e-Way Bill online at the time of voucher creation.
                              </p>
                              <p class="mb-0">
                                  2.	Generate multiple e-Way Bills online at one shot.
                              </p>
                              <p class="mb-0">
                                  3.	Cancel e-Way Bill, update Part B & Transporter ID, and extend validity for transactions in bulk.
                              </p>
                              <p class="mb-0">
                                  4.	Print e-Way Bill for invoices with e-Way Bill number and QR Code as per the government’s requirements.
                              </p>
                              <p class="mb-0">
                                  5.	Track the status of e-Way Bills using the e-Way Bill report and e-Way Bill Register.
                              </p>
                              <p class="mb-0">
                                  6.	Get the latest e-Way Bill information and status from the e-Way Bill system to a transaction using e-Way Bill report and e-Way Bill Register.
                              </p>
                              <p class="mb-0"><b>Date - </b>23 July 2021</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime2.exe" id="downloadtp2"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 7 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Version 1.1.4
                          </button>
                      </h2>
                      <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven">
                          <div class="accordion-body">
                              <p class="mb-0">
                                  1.	 Integrated support for e-invoicing as per government regulations, allowing businesses to generate IRNs (Invoice Reference Numbers) directly from Tally.
                              </p>
                              <p class="mb-0">
                                  2.	Enhanced GST compliance tools, including auto-population of GSTR-1, GSTR-3B, and other GST-related forms for easier filing.
                              </p>
                              <p class="mb-0">
                                  3.	 Better tracking of inventory with more detailed reporting and streamlined stock management processes.
                              </p>
                              <p class="mb-0">
                                  4.	New features to handle bank reconciliation more efficiently, including automatic reconciliation for supported banks.
                              </p>
                              <p class="mb-0">
                                  5.	Strengthened user access controls and data encryption to protect sensitive business information.
                              </p>
                              <p class="mb-0">
                                  6.	General performance improvements, making Tally Prime faster and more responsive in day-to-day operations.
                              </p>
                              <p class="mb-0"><b>Date - </b>04 May 2021</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime114.exe" id="downloadtp114"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                          </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 8 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingEight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              Version 1.1.3
                          </button>
                      </h2>
                      <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight">
                          <div class="accordion-body">
                              <p class="mb-0">
                                  1.	 Enhanced support for generating e-invoices with seamless integration, making it easier to comply with government regulations.
                              </p>
                              <p class="mb-0">
                                  2.	Improvements in data import and export functionalities, enabling smoother and more accurate data sharing between different systems and stakeholders.
                              </p>
                              <p class="mb-0">
                                  3.	  Additional features for handling bank reconciliations, including support for more banks and automatic reconciliation processes.
                              </p>
                              <p class="mb-0">
                                  4.	Refinements to GST-related features, including better handling of HSN/SAC codes and improved accuracy in GST reports.
                              </p>
                              <p class="mb-0">
                                  5.	UI/UX enhancements for a more intuitive and user-friendly experience, with better navigation and easier access to frequently used features.
                              </p>
                              <p class="mb-0">
                                  6.	Strengthened security measures, including better control over user access and improved data protection mechanisms.
                              </p>
                              <p class="mb-0"><b>Date - </b>10 March 2021</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime113.exe" id="downloadtp113"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                                  </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 9 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingNine">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              Version 1.1.2
                          </button>
                      </h2>
                      <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine">
                          <div class="accordion-body">
                              <p class="mb-0">
                                  1.	 Added support for e-invoicing, including the ability to generate Invoice Reference Numbers (IRNs) and print QR codes directly on invoices.
                              </p>
                              <p class="mb-0">
                                  2.	Updates to ensure smoother filing of GST returns, with enhanced reporting for GSTR-1, GSTR-3B, and other GST forms.
                              </p>
                              <p class="mb-0">
                                  3.	  Better handling of bank reconciliation with more banks supported and easier reconciliation processes.
                              </p>
                              <p class="mb-0">
                                  4.	Optimizations to improve the speed and efficiency of Tally Prime, especially in handling large volumes of data.
                              </p>
                              <p class="mb-0">
                                  5.	Minor tweaks to the user interface to make navigation easier and more intuitive, with quicker access to key features.
                              </p>
                              <p class="mb-0">
                                  6.	Implementation of additional security measures to protect sensitive business data and enhance user access controls.
                              </p>
                              <p class="mb-0"><b>Date - </b>15 February 2021</p>
                              <div class="btn-style">
                                  <a
                                  href="downloads/tallyprime112.exe" id="downloadtp112"
                                  class="btn btn-primary py-2 px-4 mt-4"
                                  >Tally Prime Download </a
                                  >
                          </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 10 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              Version 1.1.1
                          </button>
                      </h2>
                      <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen">
                          <div class="accordion-body">
                              <p class="mb-0">1. AI-Powered Analytics</p>
                              <p class="mb-0">2. Enhanced Workflow Automation</p>
                              <p class="mb-0">3. Real-time Notifications</p>
                              <p class="mb-0"><b>Date - </b> 15 September 2024</p>
                              <div class="btn-style">
                                  <a href="downloads/tallyprime111.exe" id="downloadtp111" class="btn btn-primary py-2 px-4 mt-4">Tally Prime Download</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 11 -->
                  
              </div>
          </div>
  
          <!-- Second Accordion Component -->
          <div class="col-md-6">
              <h2 class="text-center text-primary mb-4">Tally Prime Edit Log</h2> <!-- Title Added -->
              <div class="accordion" id="accordionTwo">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThirteen">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                              Release 6.5.1
                          </button>
                      </h2>
                      <div id="collapseThirteen" class="accordion-collapse collapse show" aria-labelledby="headingThirteen">
                          <div class="accordion-body">
                              <p class="mb-0">1. E-Way Bill: Added support for transporter's CEN and latest template.</p>
                              <p class="mb-0">2. Income Tax: Incorporated Budget changes and generated returns.</p>
                              <p class="mb-0">3. Other Changes: Separate columns for journals, payments, and debit; GSTR-3B export support.
                              </p>
                              <p class="mb-0"><b>Date - </b> 25 March 2019</p>
                              <div class="btn-style">
                                  <a href="downloads/ERP651.exe" id="downloaderp651" class="btn btn-primary py-2 px-4 mt-4">Tally Prime Download</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 2 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFourteen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                              Release 6.5.3
                          </button>
                      </h2>
                      <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen">
                          <div class="accordion-body">
                              <p class="mb-0">1. Bug Fixes: Resolved various issues.</p>
                              <p class="mb-0">2. Enhanced UX: Improved user experience.</p>
                              <p class="mb-0">3. GST Returns: Supported GSTR-9 and GSTR-9C export.</p>
                              <p class="mb-0"><b>Date - </b> 30 July 2019</p>
                              <div class="btn-style">
                                  <a href="downloads/ERP653.exe" id="downloaderp653" class="btn btn-primary py-2 px-4 mt-4">Tally Prime Download</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 3 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFifteen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                              Release 6.5.5
                          </button>
                      </h2>
                      <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen">
                          <div class="accordion-body">
                              <p class="mb-0">1. Bug Fixes: Resolved various issues.</p>
                              <p class="mb-0">2. Enhanced UX: Improved user experience.</p>
                              <p class="mb-0">3. GST Returns: Supported GSTR-1 and GSTR-3B export.</p>
                              <p class="mb-0"><b>Date - </b> 20 February 2024</p>
                              <div class="btn-style">
                                  <a href="downloads/ERP655.exe" id="downloaderp655" class="btn btn-primary py-2 px-4 mt-4">Tally Prime Download</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 4 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSixteen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                              Release 6.6.1
                          </button>
                      </h2>
                      <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen">
                          <div class="accordion-body">
                              <p class="mb-0">1. New Features: Each release introduces new functionalities like enhanced inventory management, improved payroll, and advanced reporting options.</p>
                              <p class="mb-0">2. Performance Improvements: Faster loading times, optimized database performance, and better system stability.</p>
                              <p class="mb-0">3. Compliance Updates: Regular updates to support the latest GST, income tax, and other statutory regulations.</p>
                              <p class="mb-0"><b>Date - </b> 4 May 2020</p>
                              <div class="btn-style">
                                  <a href="downloads/ERP661.exe" id="downloaderp661" class="btn btn-primary py-2 px-4 mt-4">Tally Prime Download</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 5 -->
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSeventeen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                              Release 6.6.3
                          </button>
                      </h2>
                      <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen">
                          <div class="accordion-body">
                              <p class="mb-0">1. Bug Fixes: Resolved various issues to improve stability and performance.</p>
                              <p class="mb-0">2. Enhanced User Experience: Improved navigation and loading times.</p>
                              <p class="mb-0">3. GST Return Filing: Updated support for GSTR-1 and GSTR-3B export.</p>
                              <p class="mb-0"><b>Date - </b> 13 July 2020</p>
                              <div class="btn-style">
                                  <a href="downloads/ERP663.exe" id="downloaderp663" class="btn btn-primary py-2 px-4 mt-4">Tally Prime Download</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Section 6 -->
                  
              </div>
          </div>
      </div>
  </div>
    </div>
    </div>
  
  
    <!-- tally prime, tally prime edit log and ERP-9 end -->

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
  


</body>













