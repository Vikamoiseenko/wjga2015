<?php get_header(); ?>
<!-- Begin flexslider -->
<?php add_flexslider(); ?>
</div>
<div id="widgets">
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-user fa-5x"></i>
</a>
<h3>Become a Member</h3>
<?php
$page_id = 183;
$page_data = get_page ( $page_id );
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
echo apply_filters( 'the_content', $page_data->post_excerpt );
?>
<button id="button"><a href="#">Join Now</a></button>
</section>

<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Find a Tournament</h3>
<?php
$page_id = 186;
$page_data = get_page ( $page_id );
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
echo apply_filters( 'the_content', $page_data->post_excerpt );
?>
<button id="button"><a href="#">Join Now</a></button>
</section>

<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Become a Member</h3>
<?php
$page_id = 186;
$page_data = get_page ( $page_id );
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
echo apply_filters( 'the_content', $page_data->post_excerpt );
?>
<button id="button"><a href="#">Join Now</a></button>
</section>
</div>
<!-- new section -->
<div id="news">
<div class="news-widgets">
<?php rewind_posts(); //stop loop one ?>
<?php query_posts('showposts=4'); // show 4 latest posts ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="news-item" id="news-item-<?php the_ID(); ?>">
<p class="date">Authored by <?php the_author(); //get author name ?> <?php the_time('M j') ?> in <?php the_category(', ') ?></p>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h2>
<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail(array(130,130)); ?></a>
<?php the_excerpt(); ?>
</article>
<?php endwhile; ?>
<?php endif; ?>
</div>
<div id="calendar">
	<?php get_sidebar('tertiary'); ?>
</div>
<p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">More News &raquo;</a></p>
</div>

<!-- end news section -->
<small>front-page.php</small>
<?php get_footer(); ?>