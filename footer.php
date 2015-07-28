</div>
<div id="utilities">
<!-- Begin Social  Icon-->
<div id="social">
<i class="fa fa-facebook-square fa-2x"></i>
<i class="fa fa-twitter-square fa-2x"></i>
<i class="fa fa-youtube fa-2x"></i>
<i class="fa fa-instagram fa-2x"></i>
</div> <!-- end social icon -->
<!-- begin search form -->
<div id="search">
<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>/">
<i class="fa fa-search fa-2x"></i>
<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="submit" />
</form> <!-- end search form -->
</div>
</div> <!-- end utiliti menu -->

<div id="footer">
<!-- begin footer menu -->
<div id="menu-footer">
<div class="footer-menu">
<?php wp_nav_menu(array('theme_location' => 'Footer-menu' ) ); ?>
</div>
</div> <!-- end footer menu -->

<!-- Begin site inform -->
<div id="site-info">
<p>&copy; XXXX - <?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. All rights reserved. <span class="alignright">&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?></span></p>
</div>
    <!-- End site inform -->
</div>
<!-- Start WP footer -->
<?php wp_footer(); ?>
<!-- Start WP footer -->
</body>
</html>
