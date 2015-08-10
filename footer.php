</div>
<div id="utilities-footer">
<!-- Begin Social  Icon-->
<div id="util-footer">
<div id="social-footer">
<i class="fa fa-facebook-square fa-2x"></i>
<i class="fa fa-twitter-square fa-2x"></i>
<i class="fa fa-youtube fa-2x"></i>
<i class="fa fa-instagram fa-2x"></i>
</div> <!-- end social icon -->
<div id="wjga"><p>Washington Junior Association</p></div>
<!-- begin search form -->
<div id="link">
<ul>
<li><a href="#">Contact | </a></li>
<li><a href="#">Donate | </a></li>
<li><a href="#">Disclaimer</a></li>
</ul>
</div>
</div> <!--end util-footer -->
</div> <!-- end utiliti menu -->

<div id="footer">
<!-- begin footer menu -->
<div id="menu-footer">
    <nav class="footer-main">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </nav>
    </div> <!-- end footer menu -->

<!-- Begin site inform -->
<div id="site-info">
<p>&copy;<?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. Washington Junior Golf Association.  Built for the WJGA  by Benjamin A Clement, Brianna R Karle,Victoria Moiseenko, Michael J Murphy, and Christina E Petrie <span class="alignright">&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?></span></p>
</div>
    <!-- End site inform -->
</div>
<!-- Start WP footer -->
<?php wp_footer(); ?>
<!-- Start WP footer -->
</body>
</html>
