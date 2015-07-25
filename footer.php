<footer>
<!-- begin footer menu -->
<div id="footer">
<nav class="footer-menu">
<?php wp_nav_menu(array('theme_location' => 'footer-menu' ) ); ?>
</nav>
</div> <!-- end footer menu -->

<!-- Begin site inform -->
<div id="site-info">
<p>&copy; XXXX - <?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. All rights reserved. <span class="alignright">&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?></span></p>
</div>
    <!-- End site inform -->
</footer>
<!-- Start WP footer -->
<?php wp_footer(); ?>
<!-- Start WP footer -->
</body>
</html>
