<?php get_header('inner'); ?>

<section class="section-padding-top section-methodology">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12 list-style pull-left">
                <h5 class="btn btn-sm color-primary px-3 hvr-fade bg-primary-shade-1">Description</h5>

                <div class="simnple-content">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_content();
                        } // end while
                    } // end if
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 pull-left">
                <?php get_template_part('courses-sidebar'); ?>
            </div>


        </div>
    </div>
</section>

<section class="section-padding section-accordion">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="btn btn-sm color-primary px-3 hvr-fade bg-primary-shade-1">FAQ</h5>
                <h2>We want your career to be in a peak</h2>
                <div class="faq-wrapper">
                    <div class="accordion" id="accordionExample">
                        <?php
                        if (have_rows('courses_faq')) :
                            $counter = 1; // Initialize a counter variable
                            while (have_rows('courses_faq')) : the_row();
                                // Determine the class for the collapse element
                                $collapse_class = ($counter == 1) ? 'accordion-collapse collapse show acollapse' : 'accordion-collapse collapse acollapse';
                                // Determine the class for the button
                                $button_class = ($counter == 1) ? 'accordion-button' : 'accordion-button collapsed';
                        ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                        <button class="<?php echo $button_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo ($counter == 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
                                            <?php echo get_sub_field('faq_title'); ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $counter; ?>" class="<?php echo $collapse_class; ?>" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo get_sub_field('faq_description'); ?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                $counter++; // Increment the counter
                            endwhile;
                        else :
                            echo '<p>No FAQs found.</p>';
                        endif;
                        ?>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('includes/tools', 'marquee'); ?>
<?php get_footer();
