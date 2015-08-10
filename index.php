<?php get_header(); ?>
  
<div id="main">
<!-- START CONTENT -->
<div id="content" class="index">
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	
		<p class="postmetadata">Posted <?php the_time('F jS, Y') ?> </p>
	
	
        <p class="postmetadata">
			<span class="cat">Posted <?php the_time('F jS, Y') ?> </span>
            <span class="cat"> in <?php the_category(', ') ?></span>
            <span class="author">by <?php the_author_posts_link(); ?></span>
		</p>

		<?php the_content(); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>

    <?php endwhile; ?>
<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>
<?php endif; ?>
<?php wp_pagenavi( array( 'type' => 'multipart' ) ); ?>
</div><!-- END CONTENT -->


<!-- START SECONDARY SIDEBAR -->
<?php get_sidebar('secondary'); ?>
</div><!--END DIV MAIN-->

<!-- START BLOG SIDEBAR -->
<?php get_sidebar('blog'); ?>

<?php get_footer(); ?>