<?php
$business_phone = get_field('business_phone', 'option');
$banner_section_title = get_field('banner_section_title');
$banner_section_text = get_field('banner_section_text');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="dewebkiller">
    <?php wp_head(); ?>
</head>

<body class="<?php body_class() ?>">
    <header>
        <section class="btm-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 d-sm-block d-none">
                        <div class="logo"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt="Axis Infosys"></div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" alt="Axis Infosys"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <?php
                                    $defaults = array(
                                        'theme_location' => 'primary',
                                        'menu' => '',
                                        'container' => 'ul',
                                        'container_class' => '',
                                        'container_id' => 'offcanvasExample',
                                        'menu_class' => 'nav navbar-nav',
                                        'menu_id' => '',
                                        'echo' => true,
                                        'fallback_cb' => 'wp_page_menu',
                                        'before' => '',
                                        'after' => '',
                                        'link_before' => '',
                                        'link_after' => '',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth' => 0,
                                        'walker' => ''
                                    );
                                    wp_nav_menu($defaults);
                                    ?>

                                </div>
                            </nav>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 d-none d-sm-block">
                        <div class="btn btn-primary px-3 hvr-fade"><a href="#" class="color-white">Enquiry</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner-wrapper">
            <div class="container">
                <div class="row">


                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12 banner-left pull-left">
                        <?php $my_postid = 9; ?>
                        <h5 class="btn btn-sm btn-white px-3 hvr-fade">Never stop learning</h5>

                            <?php
                            $content_post = get_post($my_postid);
                            $content = $content_post->post_content;
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                            ?>
                   
                        <div class="banner-flex">
                            <a href="#" class="btn btn-orange px-3 hvr-fade">Explore Path</a>
                            <div class="students-list">
                                <img src="<?php echo bloginfo('template_url');?>/images/students-group-icon.png" />

                            </div>
                            <div class="banner-ratings">
                                <ul class="star-ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half"></i></li>
                                </ul>
                                <span><?php echo $banner_section_text; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-12 banner-right pull-left">
                        <div class="btn-phone">
                            <a href="tel:<?php echo $business_phone; ?>" class="btn btn-red btn-lg hvr-fade"><?php echo $business_phone; ?></a>
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail($my_postid); ?>
                            <?php } else {  ?>
                                <img src="<?php echo bloginfo('template_url'); ?>/images/banner-image.png" alt="Axis Infosys" />
                            <?php } ?>
                            <em><?php echo $banner_section_title; ?></em>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>