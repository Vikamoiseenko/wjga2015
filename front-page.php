<?php get_header(); ?>

<!-- Begin flexslider -->
<?php add_flexslider(); ?>
</div>
<div id="widgets">
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Become a Member</h3>
<!--<p>Lorem ipsum dolor sit amet, error mundi te duo. Ad justo </p> -->
<?php while( have_posts() ): the_post(); //start loop1?>
<?php the_content(''); //get the home page content ?>
<?php endwhile; //end loop1 ?>
<button id="button"><a href="#">Join Now</a></button>
</section>
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Become a Member</h3>
<?php while( have_posts() ): the_post(); //start loop1?>
<?php the_content(''); //get the home page content ?>
<?php endwhile; //end loop1 ?>
<button id="button"><a href="#">Join Now</a></button>
</section>
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Become a Member</h3>
<?php while( have_posts() ): the_post(); //start loop1?>
<?php the_content(''); //get the home page content ?>
<?php endwhile; //end loop1 ?>
<button id="button"><a href="#">Join Now</a></button>
</section>


<small>front-page.php</small>
<?php get_footer(); ?>