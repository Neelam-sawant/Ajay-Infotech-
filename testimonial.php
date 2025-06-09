<style>
/* Testimonial carousel section start here */
/* Dots */
.testimonial-carousel .owl-dots {
  margin-top: 15px;
  display: flex;
  justify-content: center;
}

.testimonial-carousel .owl-dot {
  width: 15px;
  height: 15px;
  margin: 0 5px;
  background: #ddd;
  border-radius: 2px;
  transition: width 0.4s, background 0.4s;
}

.testimonial-carousel .owl-dot.active {
  width: 30px;
  background: #06a3da;
}

/* Carousel Items */
.testimonial-carousel .testimonial-item {
  border-radius: 10px;
  transition: all 0.3s ease;
  height: 100%;
}

/* Spotlight on centered slide */
.testimonial-carousel .owl-item.center .testimonial-item {
  background: #fff !important;
  box-shadow: 0 0 30px #ddd;
}

/* Item Layout */
.testimonial-item {
  transition: box-shadow 0.4s, background 0.4s;
  border-radius: 6px;
  display: flex;
  flex-direction: column;
  height: 100%;
}

/* Avatar Image */
.testimonial-avatar {
  width: 60px;
  height: 181px;
  object-fit: cover;
  border-left: 3px solid #06A3DA;
  border-bottom: 3px solid #06A3DA;
  border-radius: 10px;
  box-shadow: 0 2px 6px #06A3DA;
}

/* Quote Area */
.quote {
  flex: 1;
  display: flex;
  align-items: center;
  text-align: left;
  min-height: 120px;
  font-size: 1rem;
}

/* Testimonial carousel section end here */  
  
/* Testimonial carousel section start here */
@media (max-width: 768px) {
  .testimonial-avatar {
    width: 60px;
  height: 181px;
  }
}

@media (max-width: 576px) {
    .testimonial-avatar {
    width: 30px;
    height: 151px;
  }
  .quote {
      font-size: 0.95rem;
      padding: 0 1rem;
      min-height: 140px;
  }
}
  /* Testimonial carousel section end here */    

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.05s">
  <div class="container text-center py-5">
    <div class="section-title text-center pb-3 mb-4 mx-auto" style="max-width:80%;">
      <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
    </div>

    <div class="owl-carousel testimonial-carousel">

      <!-- 1 -->
      <div class="testimonial-item bg-light my-4">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
          <img src="./img/testimonial-1.jpg" class="testimonial-avatar" alt="Client 1">
          <div class="ps-4">
            <h4 class="text-primary mb-1">Client Name</h4>
            <small class="text-uppercase">Profession</small>
          </div>
        </div>
        <div class="quote pt-4 pb-5 px-5">
          Working with Ajay Infotech has transformed our business. Their expertise
          in Tally implementation streamlined our accounting processes
          significantly. I highly recommend their services!
        </div>
      </div>

      <!-- 2 -->
      <div class="testimonial-item bg-light my-4">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
          <img src="./img/testimonial-2.jpg" class="testimonial-avatar" alt="Client 2">
          <div class="ps-4">
            <h4 class="text-primary mb-1">Client Name</h4>
            <small class="text-uppercase">Profession</small>
          </div>
        </div>
        <div class="quote pt-4 pb-5 px-5">
          The training provided by Ajay Infotech was exceptional! Our team felt
          confident and empowered using Tally from day one.
        </div>
      </div>

      <!-- 3 -->
      <div class="testimonial-item bg-light my-4">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
          <img src="./img/testimonial-3.jpg" class="testimonial-avatar" alt="Client 3">
          <div class="ps-4">
            <h4 class="text-primary mb-1">Client Name</h4>
            <small class="text-uppercase">Profession</small>
          </div>
        </div>
        <div class="quote pt-4 pb-5 px-5">
          I can’t thank the support team at Ajay Infotech enough for their
          quick responses and efficient resolutions.
        </div>
      </div>

      <!-- 4 -->
      <div class="testimonial-item bg-light my-4">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
          <img src="./img/testimonial-4.jpg" class="testimonial-avatar" alt="Client 4">
          <div class="ps-4">
            <h4 class="text-primary mb-1">Client Name</h4>
            <small class="text-uppercase">Profession</small>
          </div>
        </div>
        <div class="quote pt-4 pb-5 px-5">
          Thanks to Ajay Infotech, we now have a customised Tally solution that
          perfectly fits our needs.
        </div>
      </div>

    </div><!-- /.testimonial-carousel -->
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
// Testimonial carousel section start here 
function equalizeTestimonialHeights() {
  var maxHeight = 0;
  $('.testimonial-item').css('height', 'auto').each(function () {
    maxHeight = Math.max(maxHeight, $(this).outerHeight());
  }).height(maxHeight);
}

$(function () {
  $('.testimonial-carousel').on('initialized.owl.carousel resized.owl.carousel refreshed.owl.carousel', function () {
    setTimeout(equalizeTestimonialHeights, 100);
  });

  $('.testimonial-carousel').owlCarousel({
    loop:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:3000,
    autoplaySpeed:800,
    smartSpeed:800,
    dots:true,
    responsive:{
        0:   {items:1,center:false},
        576: {items:1,center:true},
        768: {items:2,center:true},
        992: {items:3,center:true}
    }
  });
});
// Testimonial carousel section end here
</script>

