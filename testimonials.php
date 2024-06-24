<?php 
/* Template Name: Testimonials */
get_header('inner');
?>

<section class="content-wrapper section-padding testimonial-section-inner">
    <div class="container">
        <div class="row">
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pull-left wow  fadeInLeft  animated">
                <div class="slider__images">
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
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php get_template_part('includes/tools', 'marquee'); ?>
<?php get_footer();
