<section class="content-wrapper section-padding section-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center bg-curved-line color-orange pb-3">Our Courses</h2>
                <ul class="dwk_tabs">
                    <?php
                    $terms = get_terms('dwk_courses_cat');
                    $i = 1;
                    if (!empty($terms) && !is_wp_error($terms)) {
                        echo "<ul>";
                        foreach ($terms as $index => $term) {
                            $activeClass = ($index === 0) ? " class='active'" : "";
                            echo "<li rel='dwk_tab" . $i++ . "'" . $activeClass . ">" . $term->name . "</li>";
                        }
                        echo "</ul>";
                    }
                    ?>
                </ul>
                <div class="dwk_tab_container">
                    <?php
                    // Function to trim excerpts to 50 words
                    function custom_trim_excerpt($text, $word_limit = 15) {
                        $words = explode(' ', $text, $word_limit + 1);
                        if (count($words) > $word_limit) {
                            array_pop($words);
                            $text = implode(' ', $words) . '...';
                        }
                        return $text;
                    }

                    $i = 1;
                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $index => $term) {
                            $activeClass = ($index === 0) ? " class='d_active'" : "";
                            $term_id = $term->term_id;
                            $term_name = $term->name;

                            // Query posts for the current term
                            $args = array(
                                'post_type' => 'dwk_courses',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'dwk_courses_cat',
                                        'field'    => 'term_id',
                                        'terms'    => $term_id,
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);
                            ?>

                            <h3 class="dwk_tab_drawer_heading" rel="dwk_tab<?php echo $i; ?>"><?php echo $term_name; ?></h3>
                            <div id="dwk_tab<?php echo $i; ?>" class="dwk_tab_content<?php echo $activeClass; ?>">
                                <div class="swiper mySwiper swiper-popular-courses">
                                    <div class="swiper-wrapper">
                                        <?php
                                        if ($query->have_posts()) {
                                            while ($query->have_posts()) {
                                                $query->the_post();
                                                ?>
                                                <div class="swiper-slide">
                                                    <div class="card">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                                                        <?php else : ?>
                                                            <img src="<?php echo bloginfo('template_url'); ?>/images/course-thumbnail.png" class="card-img-top" alt="...">
                                                        <?php endif; ?>
                                                        <div class="card-body">
                                                            <div class="card-subheading">
                                                                <img src="<?php echo bloginfo('template_url'); ?>/images/students-group-icon.png" alt="">
                                                                <span><?php echo get_field('no_of_students');?> + Students</span>
                                                            </div>
                                                            <span class="date">
                                                                <?php
                                                            echo get_field('course_starting_date')
                                                             ?></span>
                                                            <h5 class="card-title"><?php the_title(); ?></h5>
                                                            <p class="card-text"><?php echo custom_trim_excerpt(get_the_excerpt(), 15); ?></p>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="color-orange">Duration: 2 Months</h6>
                                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary hvr-bob">Learn More</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            wp_reset_postdata();
                                        } else {
                                            echo '<p>No courses found.</p>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- #dwk_tab<?php echo $i; ?> -->
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </div>
                <!-- .dwk_tab_container -->
            </div>
        </div>
    </div>
</section>
