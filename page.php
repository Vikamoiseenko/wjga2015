<?php get_header(); ?>

<section class="content-item">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
<?php get_sidebar(""); ?>
<h2><?php the_title(); //get the page or posting title ?></h2>
<?php the_content(''); //get page or posting written content ?>
<?php endwhile; endif; //end the loop ?>
<small>page.php</small>
</section>
<?php get_footer(); ?>