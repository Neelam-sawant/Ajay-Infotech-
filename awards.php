<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<style>
.owl-carousel .item {
    display:flex;
    justify-content:center;
    align-items:center;
    padding:10px;
}

.award_img{
    height:200px;
    object-fit:cover;
    border-left:3px solid #0dcaf0;
    border-bottom:3px solid #0dcaf0;
    border-radius:10px;
    box-shadow:0 2px 6px #0dcaf0;
}
</style>
<!-- Our Value section start here -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.05s">
    <div class="container text-center py-5">
        <div class="container text-center">
            <div class="section-title section-title-sm text-center my-5">
                <h3 class="fw-bold text-primary text-uppercase">Awards</h3>
            </div>
            <div class="award-carousel owl-carousel">
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-1.png" alt="Award 1">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-2.png" alt="Award 2">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-3.png" alt="Award 3">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-4.png" alt="Award 4">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-5.png" alt="Award 5">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-6.png" alt="Award 6">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-7.png" alt="Award 7">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-8.png" alt="Award 8">
            </div>
            <div class="item">
                <img class="award_img" src="Awards and certificats/Awards and certificats/Remove background project-9.png" alt="Award 9">
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Value section end here -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    new WOW({
        // fires each time an element becomes visible
        callback: function (el) {
        if (el.classList.contains('award-carousel-wrapper')) {
            $(el).find('.award-carousel').owlCarousel({
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
            }).init();
</script>
<!-- award carousel section start here -->
<script>
  $(function () {                 // document-ready shorthand
    $('.award-carousel').owlCarousel({
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
    });
</script>
<!-- award carousel section end here -->