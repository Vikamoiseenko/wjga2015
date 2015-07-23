<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!-- begin meta -->
<meta name="viewport" content="user-scalablo=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- end meta -->

<!-- begin style -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" type="text/css" />
<!-- end style -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
</script>
<!-- End Flex Slider -->
<!-- Start WP head -->
<?php wp_head(); ?>
<!-- End wp head -->
</head>
<body <?php body_class(); ?>>

<!-- Begin HEADER -->
<div id="header">
<!-- Begin Utility Menu -->
<div id="utilities">
<!-- Begin Social  Icon-->
<div id="social">
<i class="fa fa-facebook-square fa-2x"></i>
<i class="fa fa-instagram fa-2x"></i>
<i class="fa fa-youtube fa-2x"></i>
<i class="fa fa-twitter-square fa-2x"></i>
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

<!-- begin logo -->
<div id="logo">
<a href="" title="">
<img src="images.jpg" />
</a>
<!-- Begin new Navigation -->
<?php  wp_nav_menu( array(
    'theme_location' => 'main-menu', // Setting up the location for the main-menu, Main Navigation.
    'menu_class' => 'dropdown', //Adding the class for dropdowns
    'container_id' => 'navwrap', //Add CSS ID to the containter that wraps the menu.
    'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
    )
      );
?>
<!--</div>
<!-- end Navigation -->

</div>
<!-- end logo -->



</div> <!--end header -->