<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!-- begin meta -->
<meta name="viewport" content="user-scalablo=no, initial-scale=1.0, maximum-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- end meta -->

<!-- begin style -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" type="text/css" />
<!-- end style -->

<!-- Begin Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
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
<!-- Begin Utility Menu -->
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
<form method="get" id="searchform" class="searchform" action="<?php bloginfo('home'); ?>/">
<div class="search"><input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="submit" name="submit" id="searchsubmit" value="Search" />
</div>
</form> <!-- end search form -->
</div>
</div> <!-- end utiliti menu -->

<div id="header">
<!-- begin logo -->
<div id="logo">
<a href="<?php echo get_settings('home'); ?>" title="Link to Washinghton Junior Golf Association">
<img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" />
</a>
</div><!-- end logo -->

<!-- Begin new Navigation -->
<?php  wp_nav_menu( array(
    'theme_location' => 'main-menu', // Setting up the location for the main-menu, Main Navigation.
    'menu_class' => 'dropdown', //Adding the class for dropdowns
    'container_id' => 'cssmenu', //Add CSS ID to the containter that wraps the menu.
    'fallback_cb' => 'wp_page_menu', //if wp_nav_menu is unavailable, WordPress displays wp_page_menu function, which displays the pages of your blog.
    )
      );
?>
<!--</div>
<!-- end Navigation -->


</div> <!--end header -->
<!-- END MAIN NAVIGATION -->
			
 <div id="middle">
