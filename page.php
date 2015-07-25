
<?php get_header(); ?>
                
<!-- START CONTENT -->
<div id="main">  
    <div id="content" class="page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <br />
		<?php the_content(); ?>
        
        <nav class="post-nav">            
			<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
		</nav>
        
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
	</div>
   
	<?php endwhile; endif; ?>  
    
</div>
    
<!-- END CONTENT -->
<?php get_sidebar( 'secondary' ); ?>
</div><!-- END MAIN -->

<!-- PRIMARY SIDEBAR -->
<?php get_sidebar('primary'); ?>
<!-- END SIDEBAR -->

<?php get_footer(); ?>