<section class="section-padding-bottom section-methodology">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12 list-style pull-left">
        <h5 class="btn btn-sm color-primary px-3 hvr-fade bg-white-shade-1">Training</h5>
        <h2 class="color-primary">Our Teaching Methodology</h2>
        <div class="list-ul-content">
          <ul>

            <?php

            if (have_rows('teaching_methodology')) :
              while (have_rows('teaching_methodology')) : the_row();
            ?>
                <li>
                  <h4><?php echo get_sub_field('teachin_methodology_title'); ?></h4>
                  <p><?php echo get_sub_field('teaching_methodology_description'); ?></p>
                </li>
            <?php
              endwhile;
            else :
            endif;
            ?>

          </ul>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-12 pull-left">
        <div class="rect-image">
        <?php
          $image = get_field('teaching_methology_image');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
          if ($image) { ?>

            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php
          } else {
            echo '<img src="' . get_template_directory_uri() . '/images/teaching-bg.png" alt="Teaching Methodology">';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>