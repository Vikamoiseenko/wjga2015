<?php get_header(); ?>
                
<!-- START CONTENT -->
<div id="content" class="index">
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
            <span class="cat"><?php the_category(', ') ?></span>
            <span class="author">by <?php the_author_posts_link(); ?></span>
		</p>
        <?php the_excerpt(); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
    

    <?php endwhile; ?>
<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>
<?php endif; ?>
    
<!-- END CONTENT -->
<?php get_sidebar( 'secondary' ); ?>
</div><!-- END CONTENT -->

<!-- PRIMARY SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->


<small>index.php</small>
<?php get_footer(); ?>

