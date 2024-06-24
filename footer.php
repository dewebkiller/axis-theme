<?php
$business_tagline = get_field('business_tagline', 'option');
$business_address= get_field('business_address', 'option');
$business_phone = get_field('business_phone', 'option');
$business_google_map= get_field('business_google_map', 'option');
$business_email = get_field('business_email', 'option');
$business_facebook = get_field('business_facebook', 'option');
$business_instagram = get_field('business_instagram', 'option');
$business_linkedin = get_field('business_linkedin', 'option');
$business_youtube = get_field('business_youtube', 'option');

?>
<footer class="section-padding">
    <div class="container">
        <!-- Three column Footer -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
                <div class="footer-widget">
                    <img src="<?php echo bloginfo('template_url' );?>/images/logo.png" alt="Axis Infosys" class="footer-logo" />
                    <ul>
                        <li><i class="fa fa-home"></i> <?php echo $business_address;?></li>
                        <li><i class="fa fa-phone"></i> <?php echo $business_phone;?></li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $business_email;?>"><?php echo $business_email;?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
                <div class="footer-widget">
                    <h3>Courses</h3>
                    <ul>
                        <li><a href="#">Computer Basic</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Video Editin</a></li>
                        <li><a href="#">Motion graphics</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
                <div class="footer-widget">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#"> About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
            <div class="footer-widget">
            <h3>Get Connected</h3>
                <ul class="footer-social d-flex mb-3">
                    <?php if($business_facebook) { ?> <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li> <? } ?>
                    <?php if ($business_instagram) { ?><li><a href="#"><i class="fa-brands fa-instagram"></i></a></li><? } ?>
                    <?php if ($business_linkedin) { ?> <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li><? } ?>
                </ul>
                    <h3>We accept</h3>
                    <ul class="footer-payment d-flex">
                        <li><img src="<?php echo bloginfo('template_url' );?>/images/fonepay.png" alt="Fonepay" /></li>
                        <li><img src="<?php echo bloginfo('template_url' );?>/images/esewa.png" alt="Esewa" /></li>
                        <li><img src="<?php echo bloginfo('template_url' );?>/images/khalti.png" alt="Khalti" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="btm-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                <div class="copyright">
                    <p class="color-white">&copy; <?php echo date('Y');?>. <span>Axis Infosys.</span> All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 text-end author-credit">
                <div class="text-right">
                <a href="https://www.dewebkiller.com" class="color-white" target="_blank" title="<dewebkiller/>">&lt;dewebkiller /&gt;</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer-button">
    <div class="container">
        <div class="row d-block">
            <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                <ul class="footer-bar">
                    <li><a href="./"><i class="fa fa-home"></i><br />Home</a></li>
                    <li><a href="tel:0435 596 481"><i class="fa fa-phone"></i><br />Phone</a></li>
                    <li><a href="sms:0435 596 481"><i class="fa fa-comment"></i><br />SMS</a></li>
                    <li><a href="mailto:vkabconstruction@gmail.com"><i class="fa fa-envelope"></i><br />Email</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php wp_footer();?>
</body>
</html>
