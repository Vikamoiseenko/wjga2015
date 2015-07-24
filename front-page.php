<?php get_header(); ?>

<div id="middle">
<!-- Begin flexslider -->
<?php add_flexslider(); ?>
</div>
<div id="widgets">
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<?php while( have_posts() ): the_post(); //start loop1?>
<?php the_content(''); //get the home page content ?>
<?php endwhile; //end loop1 ?>
</section>
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<?php while( have_posts() ): the_post(); //start loop1?>
<?php the_content(''); //get the home page content ?>
<?php endwhile; //end loop1 ?>
</section>
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<?php while( have_posts() ): the_post(); //start loop1?>
<?php the_content(''); //get the home page content ?>
<?php endwhile; //end loop1 ?>
</section>
</div>

<small>front-page.php</small>
<?php get_footer(); ?>