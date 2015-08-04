<?php /*Template Name: page-gallery.php*/ ?>
<?php get_header(); ?>


<div id="gallery">                    
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
        
		<?php if ( has_post_thumbnail() ) {// check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        } ?>
		<?php the_content(); ?>
 
	<?php endwhile; ?>
	<?php endif; ?>   
</div>
<div id="calendar">
<?php get_sidebar( 'gallery' ); ?>
</div>
</div>



<!-- END SIDEBAR -->

<?php get_footer(); ?>