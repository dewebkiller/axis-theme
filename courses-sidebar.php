<div class="sidebar-widget">
  <h2>Our Courses</h2>
  <?php
                                    $defaults = array(
                                        'theme_location' => 'sidebar-menu',
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
                                        'items_wrap' => '<ul id="sidebar" class="%2$s">%3$s</ul>',
                                        'depth' => 0,
                                        'walker' => ''
                                    );
                                    wp_nav_menu($defaults);
                                    ?>
</div>