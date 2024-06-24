<section class="banner-wrapper breadcrumb-wrapper" style="background: url(<?php echo bloginfo('template_url'); ?>/images/breadcrumb.jpeg) no-repeat center center;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 breadcrumb-content">
        <ul class="d-flex breadcrumb-ul">
          <li> <a href="<?php echo home_url();?>">Home</a></li>
          <li> <a href=""><?php the_title();?></a></li>
        </ul>
        <h1 class="color-white"><?php the_title();?></h1>
        <?php if (is_singular( 'dwk_courses' )) { ?>
          <p><?php echo get_field('courses_breadcrumb_description');?></p>
         <?php }  else { ?>
        <p><?php echo get_field('breadcrumb_description');?></p>
        <?php } ?>
        <?php if (is_singular( 'dwk_courses' )) { ?>
        <ul class="d-flex">
          <li>
          <a href="#" class="btn btn-orange px-3 hvr-fade"><i class="fa fa-clock"></i> Duration: <strong><?php echo get_field('courses_duration');?></strong></a>
          </li>
          <li>
          <a href="#" class="btn btn-orange px-3 hvr-fade"><i class="fa fa-user-tie"></i> Career: <strong><?php echo get_field('courses_career');?></strong></a>
          </li>
          <li>
          <a href="<?php echo get_field('courses_link');?>" class="btn btn-orange px-3 hvr-fade"><i class="fa fa-envelope"></i> <?php echo get_field('courses_button_text');?> </a>
          </li>
        </ul>
        <?php } ?>
      </div>
    </div>
  </div>
</section>