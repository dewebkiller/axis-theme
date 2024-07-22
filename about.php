<?php
/* Template Name: About */
get_header('inner');
?>
<section class="section-padding section-methodology">
  <div class="container">
    <div class="row">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pull-left">
            <div class="simple-mage">
              <?php
              // Must be inside a loop.
              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo '<img src="' . get_bloginfo('stylesheet_directory')
                  . '/images/benifits.png" />';
              }
              ?> 
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 list-style pull-left">
            <h5 class="btn btn-sm color-primary px-3 hvr-fade bg-primary-shade-1"><?php the_title(); ?></h5>
        <?php
          the_content();
        } // end while
      } // end if
        ?>
          </div>
    </div>
  </div>
</section>
<?php get_template_part('includes/happy', 'students'); ?>
<section class="section-padding section-accordion">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h5 class="btn btn-sm color-primary px-3 hvr-fade bg-primary-shade-1">FAQ</h5>
        <h2>We want your career to be in a peak</h2>
        <div class="faq-wrapper">
          <div class="accordion" id="accordionExample">
            <?php
            $page_id = 88; // Get the current page ID\
            if (function_exists('have_rows')) {
              // Check if there are rows in the 'about_faq' field for the specific page
              if (have_rows('about_faq', $page_id)) :
                $counter = 1; // Initialize a counter variable
                echo '<!-- about_faq exists -->';
                while (have_rows('about_faq', $page_id)) : the_row();
                  $title = get_sub_field('about_faq_title', $page_id);
                  $description = get_sub_field('about_faq_description', $page_id);

                  if (!$title || !$description) {
                    echo '<!-- Missing title or description for FAQ item ' . $counter . ' -->';
                    continue;
                  }

                  // Determine the class for the collapse element
                  $collapse_class = ($counter == 1) ? 'accordion-collapse collapse show acollapse' : 'accordion-collapse collapse acollapse';
                  // Determine the class for the button
                  $button_class = ($counter == 1) ? 'accordion-button' : 'accordion-button collapsed';
                  // Debugging statement
                  echo '<!-- FAQ item ' . $counter . ' -->';
            ?>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                      <button class="<?php echo $button_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo ($counter == 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
                        <?php echo $title; ?>
                      </button>
                    </h2>
                    <div id="collapse<?php echo $counter; ?>" class="<?php echo $collapse_class; ?>" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <?php echo $description; ?>
                      </div>
                    </div>
                  </div>
            <?php
                  $counter++; // Increment the counter
                endwhile;
              else :
                echo '<!-- No FAQs found in about_faq -->';
                echo '<p>No FAQs found.</p>';
              endif;
            } else {
              echo '<!-- ACF function have_rows not found -->';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('includes/tools', 'marquee'); ?>
<?php get_footer();