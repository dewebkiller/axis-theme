<section class="section-padding section-tools-marquee">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="swiper-container swiper--bottom">
          <div class="swiper-wrapper">
            <?php
            if (have_rows('tools_and_softwares_we_use', 'option')) :
              while (have_rows('tools_and_softwares_we_use', 'option')) : the_row();
                $image = get_sub_field('tools_softwares_used');
                $title = get_sub_field('tools_softwares_title'); // Assuming there's a field for title 
            ?>
                <div class="swiper-slide">
                  <div class="tools-marquee">
                    <?php  if ($image) { ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="" />
                    <?php } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/aftereffects.jpg" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php  } ?>
                    <h3><?php echo esc_attr($image['title']); ?></h3>
                  </div>
                </div>
            <?php
              endwhile;
            else :
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>