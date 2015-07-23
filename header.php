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

<div id="header">
<h1>First Test Theme</h1>
</div>

<!-- Begin Navigation -->
<!--<div id="nav"> -->
<!--
<ul id="nav-items">
<li><a href="home.php">Home Page</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
-->
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

