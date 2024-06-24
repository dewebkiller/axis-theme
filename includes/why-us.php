<section class="section-padding section-methodology">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pull-left">
        <div class="simple-mage">
          <?php
          $image = get_field('why_choose_us_image');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if ($image) { ?>

            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php
          } else {
            echo '<img src="' . get_template_directory_uri() . '/images/benifits.png" alt="default image">';
          }
          ?>

        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 list-style pull-left">
        <h5 class="btn btn-sm color-primary px-3 hvr-fade bg-primary-shade-1">Benefits</h5>
        <h2 class="color-orange">Why Choose us</h2>
        <div class="list-ul-content">
          <ul>
            <?php

            if (have_rows('why_choose_us')) :
              while (have_rows('why_choose_us')) : the_row();
            ?>
                <li>
                  <p><?php echo get_sub_field('why_choose_us_description'); ?></p>
                </li>
            <?php
              endwhile;
            else :
            endif;
            ?>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>