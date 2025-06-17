
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
  <div class="bg-white">
    <div class="owl-carousel vendor-carousel text-center">
      <img class="vimg" src="img/v8.png" alt="Vendor Image 8">
      <img class="vimg" src="img/v5.png" alt="Vendor Image 5">
      <img class="vimg" src="img/v9.png" alt="Vendor Image 9">
      <img class="vimg" src="img/v1.png" alt="Vendor Image 1">
      <img class="vimg" src="img/v2.png" alt="Vendor Image 2">
      <img class="vimg" src="img/v3.png" alt="Vendor Image 3">
      <img class="vimg" src="img/v4.png" alt="Vendor Image 4">
      <img class="vimg" src="img/v6.png" alt="Vendor Image 6">
      <img class="vimg" src="img/v7.png" alt="Vendor Image 7">
    </div>
  </div>
</div>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owl.theme.default.min.css">

<!-- jQuery (required) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="assets/owl.carousel.min.js"></script>

<!-- Init Script -->
<script>
  $(document).ready(function(){
    $('.vendor-carousel').owlCarousel({
      loop:true,
      margin:30,
      autoplay:true,
      autoplayTimeout:2000,
      responsive:{
        0:{ items:2 },
        600:{ items:4 },
        1000:{ items:6 }
      }
    });
  });
</script>

