
<?php

function test_swiper($atts)
{
  $params = shortcode_atts(array(
    'id' => '',
    'slides_per_view' => 1,
    'pagination' => false
  ), $atts);

  ob_start();
  ?>
  <div class="swiper mySwiper<?php echo '-'.$params['id'] ?>">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
      <div class="swiper-slide"><img src="https://via.placeholder.com/300" alt=""></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <?php if ($params['pagination'] == 'true'): ?>
    <div class="swiper-pagination"></div>
    <?php endif; ?>
  </div>

  <script>
    new Swiper(".mySwiper<?php echo '-'.$params['id'] ?>", {
      slidesPerView: <?php echo $params['slides_per_view']; ?>,
      <?php if ($params['pagination'] == 'true'): ?>
      pagination: {
        el: ".swiper-pagination",
      },
      <?php endif; ?>
      spaceBetween: 30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

  <?php
  $html = ob_get_clean();

  return $html;

}

add_shortcode('custom_swiper', 'test_swiper');

