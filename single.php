<?php get_header(); ?>
<!-- Begin Flex Slider -->
<div id="cont">
<div id="content">
</div>
</div>
<!-- End Flex Slider -->
<!-- Begin Text -->
<div id="wid">
<div id="widgets">
	<?php get_sidebar(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //start the loop ?>
<article id="post-<?php the_ID();?>" class="post">
<h1><?php the_title(); //get the page or posting title ?></h1>
<small>Posted on <?php the_time('F j, Y'); //get the time ?> by <?php the_author(); //get author name ?> in <?php the_category(','); //get the category?></small>
<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
<?php the_content(''); //get page or posting written content ?>
<?php endwhile; endif; //end the loop ?>
<small>single.php</small>
</article>
</div>
</div>
<!-- End Text -->
<!-- Begin Sidebar -->
<!-- End Sidebar -->
<!-- Begin Footer -->
<?php get_footer(); ?>