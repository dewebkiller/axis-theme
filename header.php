<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="dewebkiller">
    <?php wp_head(); ?>
</head>

<body class="<?php body_class() ?>">
    <header>

        <section class="btm-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-6 d-none d-sm-block">
                        <div class="logo"><img src="<?php echo bloginfo('template_url' );?>/images/logo.png" alt="Axis Infosys"></div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand" href="#"><img src="<?php echo bloginfo('template_url' );?>/images/logo.png" alt="Axis Infosys"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav">
                                        <?php
                                        $url_pages = $_SERVER['REQUEST_URI'];
                                        $ex_pages = explode("/", $url_pages);
                                        $curr_page = $ex_pages[count($ex_pages) - 1];
                                        ?>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'index.php') || $curr_page == "") {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="./">Home </a>
                                        </li>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'about.php')) {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="about.php">About Us </a>

                                        </li>
                                        <li class="nav-item dropdown <?php
                                                                        if (($curr_page == 'courses.php')) {
                                                                            echo "active";
                                                                        }
                                                                        ?> ">
                                            <a class="nav-link dropdown-toggle" href="courses.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Courses
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item hvr-sweep-to-right" href="courses.php">Computer Basics</a></li>
                                                <li><a class="dropdown-item hvr-sweep-to-right" href="courses.php">graphic Design</a></li>
                                                <li><a class="dropdown-item hvr-sweep-to-right" href="courses.php">Vide Editing</a></li>
                                                <li><a class="dropdown-item hvr-sweep-to-right" href="courses.php">Motion Graphics</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'testimonials.php')) {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="testimonials.php">Success Stories </a>
                                        </li>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'coming-soon.php')) {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="coming-soon.php">Blog </a>
                                        </li>
                                        <li class="nav-item <?php
                                                            if (($curr_page == 'contact.php')) {
                                                                echo 'active';
                                                            }
                                                            ?>">
                                            <a class="nav-link" href="contact.php">Contact Us</a>
                                        </li>

                                    </ul>

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

                        <h5 class="btn btn-sm btn-white px-3 hvr-fade">Never stop learning</h5>

                        <h1>Grow up your <span class="color-white-textshadow">Skills</span> with our <span class="color-white-textshadow">courses </span> with <span class="color-white-textshadow">Pixel Infosys</span></h1>
                        <div class="banner-flex">
                            <a href="#" class="btn btn-orange px-3 hvr-fade">Explore Path</a>
                            <div class="students-list">
                                <ul class="std-faces">
                                    <li><img src="<?php echo bloginfo('template_url' );?>/images/students.png" alt=""></li>
                                    <li><img src="<?php echo bloginfo('template_url' );?>/images/students.png" alt=""></li>
                                    <li><img src="<?php echo bloginfo('template_url' );?>/images/students.png" alt=""></li>
                                </ul>

                            </div>
                            <div class="banner-ratings">
                                <ul class="star-ratings">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half"></i></li>
                                </ul>
                                <span>(100+ Reviews)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-12 banner-right pull-left">
                        <div class="btn-phone">
                            <a href="tel:079878979" class="btn btn-red btn-lg hvr-fade">1300 937 775</a>
                            <img src="<?php echo bloginfo('template_url' );?>/images/banner-image.png" alt="Axis Infosys" />
                            <em>We made sure <span class="color-red">99.99%</span> of our students are happy about our services.</em>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>