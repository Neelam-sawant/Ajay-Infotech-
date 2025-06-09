<!-- ── ❶  CSS & libraries (include each only once) ─────────────────────────── -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> <!-- for WOW.js -->

<style>
  /* Carousel item wrapper */
  .owl-carousel .item{
    display:flex;
    justify-content:center;
    align-items:center;
    padding:10px;
  }
  /* event image */
  .event_img{
    height:200px;
    object-fit:cover;
    border-left:3px solid #0dcaf0;
    border-bottom:3px solid #0dcaf0;
    border-radius:10px;
    box-shadow:0 2px 6px #0dcaf0;
  }
</style>

<!-- ── ❷  Mark-up ─────────────────────────────────────────────────────────── -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.05s">
  <div class="container text-center py-5 event-carousel-wrapper"><!-- give WOW a target -->
    <div class="section-title section-title-sm text-center my-5">
      <h3 class="fw-bold text-primary text-uppercase">Events</h3>
    </div>

    <div class="event-carousel owl-carousel">
      <!-- TIP: encode spaces in file paths or serve from a path without spaces -->
      <div class="item"><img class="event_img" src="./img/wimg1.jfif" alt="event 1"></div>
      <div class="item"><img class="event_img" src="./img/wimg2.jfif" alt="event 2"></div>
      <div class="item"><img class="event_img" src="./img/wimg3.jfif" alt="event 3"></div>
      <div class="item"><img class="event_img" src="./img/wimg4.jfif" alt="event 4"></div>
    </div>
  </div>
</div>

<!-- ── ❸  Scripts (include each only once, jQuery first) ──────────────────── -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
  /* Initialise WOW.js */
  new WOW({
    callback: function (el) {               // fires when element becomes visible
      if (el.classList.contains('event-carousel-wrapper')) {
        $(el).find('.event-carousel').owlCarousel({
          loop:true,
          margin:20,
          nav:false,
          dots:true,
          autoplay:true,
          autoplayTimeout:2000,
          smartSpeed:800,
          autoplayHoverPause:true,
          responsive:{
            0:{items:1},
            576:{items:2},
            768:{items:3},
            992:{items:4}
          }
        });
      }
    }
  }).init();

  /* Fallback: if WOW.js is disabled or user loads page at top already scrolled */
  $(function () {
    if (!$('.event-carousel').hasClass('owl-loaded')) {
      $('.event-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:2000,
        smartSpeed:800,
        autoplayHoverPause:true,
        responsive:{
          0:{items:1},
          576:{items:2},
          768:{items:3},
          992:{items:4}
        }
      });
    }
  });
</script>