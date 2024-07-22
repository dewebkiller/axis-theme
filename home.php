<?php 
/* Template Name: Home */
get_header();
$circular_text = get_field('circular_text');
$business_tagline = get_field('business_tagline', 'option');
$business_time = get_field('business_time', 'option');
$address_line_1 = get_field('address_line_1', 'option');
$address_line_2 = get_field('address_line_2', 'option');
$address_line_3 = get_field('address_line_3', 'option');
$google_map = get_field('google_map', 'option');
$business_phone = get_field('business_phone', 'option');
?>
<?php get_template_part('includes/courses', 'tab'); ?>
<?php get_template_part('includes/teaching', 'methodology'); ?>
<?php get_template_part('includes/why', 'us'); ?>
<?php get_template_part('includes/happy', 'students'); ?>
<?php get_template_part('includes/tools', 'marquee'); ?>

<?php get_footer();?>
