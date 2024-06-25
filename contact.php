<?php
/* Template Name: Contact */
get_header('inner');
$business_address = get_field('business_address', 'option');
$business_phone = get_field('business_phone', 'option');
$business_google_map = get_field('business_google_map', 'option');
$business_email = get_field('business_email', 'option');
$business_facebook = get_field('business_facebook', 'option');
$business_instagram = get_field('business_instagram', 'option');
$business_linkedin = get_field('business_linkedin', 'option');
$business_youtube = get_field('business_youtube', 'option');

$business_gmap = get_field('business_google_map', 'option');
?>

<section class="section-padding section-methodology">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 pull-left">
                <div class="simple-form">
                    <h5 class="btn btn-sm color-primary px-3 hvr-fade bg-primary-shade-1">Lets Talk</h5>
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_content();
                        } // end while
                    } // end if
                    ?>
                    <?php echo do_shortcode( '[contact-form-7 id="45aeb50" title="Contact form 1"]');?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 offset-md-1 offset-lg-1 list-style pull-left">
                <div class="contact-right">
                    <div class="contact-thumbnail">
                    <?php
              // Must be inside a loop.

              if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                echo '<img src="' . get_bloginfo('stylesheet_directory')
                  . '/images/contact-image.png" />';
              }
              ?>
                        <ul>
                            <li>
                                <div class="icon-image"><i class="fa fa-envelope"></i></div>
                                <div class="contact-details">
                                    <h4>Quick contact</h4>
                                    <p>Email: <?php echo $business_email; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-image"><i class="fa fa-phone"></i></div>
                                <div class="contact-details">
                                    <h4>Call us</h4>
                                    <p>Phone: <?php echo $business_phone; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-image"><i class="fa fa-map"></i></div>
                                <div class="contact-details">
                                    <h4>Our Location</h4>
                                    <p>Address: <?php echo $business_address; ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding section-accordion">
    <div class="container-fluid no-padding">
        <?php echo $business_gmap; ?>
    </div>
</section>

<?php get_footer();
