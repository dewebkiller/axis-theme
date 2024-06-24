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
<div class="circular-text">
    <a href="https://www.youtube.com" target="_blank">
        <svg viewBox="0 0 100 100" width="100" height="100">
            <defs>
                <path id="circle" d="
        M 50, 50
        m -37, 0
        a 37,37 0 1,1 74,0
        a 37,37 0 1,1 -74,0" />
            </defs>
            <text font-size="17">
                <textPath xlink:href="#circle">
                    - <?php echo $circular_text;?> - <?php echo $circular_text;?>
                </textPath>

            </text>
        </svg>
        <span><i class="fa fa-play"></i></span>
    </a>
</div>
<?php get_template_part('includes/courses', 'tab'); ?>
<?php get_template_part('includes/teaching', 'methodology'); ?>
<?php get_template_part('includes/why', 'us'); ?>
<?php get_template_part('includes/happy', 'students'); ?>
<?php get_template_part('includes/tools', 'marquee'); ?>

<?php get_footer();?>
