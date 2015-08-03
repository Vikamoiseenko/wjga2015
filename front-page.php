<?php get_header(); ?>
<!-- Begin flexslider -->
<?php add_flexslider(); ?>
<div id="widgets">
<section class="widgets-item">
<a href="" title="">
<i class="fa fa-user fa-5x"></i>
</a>
<h3>Become a Member</h3>
<?php
$page_id = 183;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
echo apply_filters( 'the_content', $page_data->post_excerpt );
echo '<button id="button"><a href="'.$page_link.'">Join Now&nbsp;&raquo;</a></button>'
?>
</section>

<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Find a Tournament</h3>
<?php
$page_id = 186;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
echo apply_filters( 'the_content', $page_data->post_excerpt );
echo '<button id="button"><a href="'.$page_link.'">Schedule&nbsp;&raquo;</a></button>'
?>
</section>

<section class="widgets-item">
<a href="" title="">
<i class="fa fa-trophy fa-5x"></i>
</a>
<h3>Become a Member</h3>
<?php
$page_id = 186;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
echo apply_filters( 'the_content', $page_data->post_excerpt );
echo '<button id="button"><a href="'.$page_link.'">Points&nbsp;&raquo;</a></button>'
?>
</section>
</div>
<!-- news section -->
<div id="news">
<div class="news-widgets">
<div id="latest">
<h3>Latest News</h3>
</div>
<?php rewind_posts(); //stop loop 1?> 
<?php query_posts('showposts=4'); // show 4 latest posts ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="news-item" id="news-item-<?php the_ID(); ?>">
<div class="info">
<div class="date">
<div class="month"><?php the_time('M') ?></div>
<div class="data"><?php the_time('j') ?></div>
</div><!-- end date div -->
<div class="headline">
<div class="head-title"><?php the_title(); ?></div>
<div class="author">Authored by <?php the_author(); //get author name ?>| <?php the_category(', ') ?></div>
</div><!-- end headline div -->
</div><!-- end info div -->
<?php if ( has_post_thumbnail() ) {// check if the post has a Post Thumbnail assigned to it.
the_post_thumbnail();
 } ?>
<?php the_content(); ?>
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_child_pages(); ?>
</div>

<div id="calendar">
	<?php get_sidebar('tertiary'); ?>
</div>
<p class="read-more"><a href="<?php the_permalink() ?>" class="read-more" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">More News &raquo;</a></p>
</div>
</div> <!-- end middle -->

<!-- end news section -->
<?php get_footer(); ?>