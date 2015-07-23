<?php get_header(); ?>

<div id="middle">
<!-- Begin flexslider -->
<?php add_flexslider(); ?>
</div>
<?php while( have_posts() ): the_post(); //start loop 1?>
<?php the_content(''); //get the home page content?>
<?php endwhile; //end loop 1?>
<small>front-page.php</small>
<?php get_footer(); ?>