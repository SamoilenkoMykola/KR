<?php
/*
*
* Home intro section
*
*
*/



function car_expert_hbanner_section_output()
{
  $car_expert_hbanner_show = get_theme_mod('car_expert_hbanner_show');
  if (empty($car_expert_hbanner_show)) {
    return;
  }
  $car_expert_dfimgh = get_template_directory_uri() . '/assets/img/banner.jpg';
  $car_expert_hbanner_img = get_theme_mod('car_expert_hbanner_img', $car_expert_dfimgh);
  $car_expert_hbanner_subtitle = get_theme_mod('car_expert_hbanner_subtitle', __('WELLCOME TO CAR EXPERT', 'car-expert'));
  $car_expert_hbanner_title = get_theme_mod('car_expert_hbanner_title', __('The best car', 'car-expert'));
  $car_expert_color_title = get_theme_mod('car_expert_color_title', __('Engineering Company', 'car-expert'));
  $car_expert_hbanner_desc = get_theme_mod('car_expert_hbanner_desc');
  $car_expert_btn_text_one = get_theme_mod('car_expert_btn_text_one', __('Contact Us', 'car-expert'));
  $car_expert_btn_url_one = get_theme_mod('car_expert_btn_url_one', '#');

?>
  <!-- home -->
  <section class="aghome" id="home">
    <div id="ax-praticals"></div>
    <div class="ax-home-single-slide-all-content">
      <?php if ($car_expert_hbanner_img) : ?>
        <div class="ax-home-bg">
          <img src="<?php echo esc_url($car_expert_hbanner_img); ?>" alt="<?php esc_attr($car_expert_hbanner_title); ?>">
        </div>
      <?php endif; ?>
      <div class="ax-home-details">
        <div class="container">
          <?php if ($car_expert_hbanner_subtitle) : ?>
            <div class="ax-home-subtitle">
              <p><?php echo esc_html($car_expert_hbanner_subtitle); ?></p>
            </div>
          <?php endif; ?>
          <?php if ($car_expert_hbanner_title || $car_expert_color_title) : ?>
            <div class="ax-home-title">
              <?php if ($car_expert_hbanner_title) : ?>
                <h1><?php echo esc_html($car_expert_hbanner_title); ?>
                </h1>
              <?php endif; ?>
              <?php if ($car_expert_color_title) : ?>
                <h1 class="ax-section-title"><?php echo esc_html($car_expert_color_title); ?>
                <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($car_expert_hbanner_desc) : ?>
            <div class="ax-home-dres">
              <p><?php echo wp_kses_post($car_expert_hbanner_desc); ?></p>
            </div>
          <?php endif; ?>
          <?php if ($car_expert_btn_url_one) : ?>
            <div class="ax-home-btn">
              <a href="<?php echo esc_url($car_expert_btn_url_one); ?>" class="ax-home-first-btn"><?php echo esc_html($car_expert_btn_text_one); ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php
}
add_action('car_expert_hbanner', 'car_expert_hbanner_section_output');
