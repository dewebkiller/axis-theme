<section class="section-padding section-testimonial">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pull-left">
        <h5 class="btn btn-sm color-white px-3 hvr-fade btn-orange ">Happy Students</h5>
        <?php 
        $home_page_id = 9;
        ?>
        <h2><?php echo get_field('happy-students_title', $home_page_id); ?></h2>
        <blockquote><?php echo get_field('happy_students_description', $home_page_id); ?></blockquote>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12 list-style pull-left">

        <section class="slider testimonial-slider">
          <div class="slider__flex">

            <div class="slider__images">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php
                  $args1 = array(
                    'post_type' => 'dwk_success_stories',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                  );
                  $loop1 = new WP_Query($args1);
                  while ($loop1->have_posts()) : $loop1->the_post();
                    $svg = get_field('svg_code');
                  ?>
                    <div class="swiper-slide">
                      <div class="slider__image">
                        <p><?php the_content(); ?></p>
                        <div class="testimonial-author">
                          <?php the_post_thumbnail('dwk_banner', ['class' => 'img-responsive responsive--full', 'title' => 'the_title', 'alt' => 'the_title']); ?>
                          <div class="testimonial-author-details">
                            <h4><?php the_title(); ?></h4>
                            <h5><?php echo get_field('success_stories_tagline'); ?></h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <div class="slider__col">
              <div class="slider__prev"><i class="fa-solid fa-angle-up"></i></div>

              <div class="slider__next"><i class="fa-solid fa-angle-down"></i></div>
            </div>
          </div>
        </section>
      </div>

    </div>
  </div>
</section>