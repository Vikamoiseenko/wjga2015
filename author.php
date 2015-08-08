<?php get_header(); ?>

<div id="main">
<div id="content" class="author">

    
<!-- Create variable for the Creator of Post -->
        <?php
          if(isset($_GET['author_name'])) : $postAuthor = get_userdatabylogin($author_name);
          else : $postAuthor = get_userdata(intval($author));
          endif;
        ?>
<?php

    if(isset($_GET['author_name'])) :
        $postAuthor = get_userdatabylogin($author_name);
    else :
        $postAuthor = get_userdata(intval($author));
    endif;
    ?>
    
<!-- LOOP FOR POSTS BY AUTHOR-->
<?php if (have_posts()) : ?>
    
		<h2>By: <?php the_author(); ?></h2>

    <?php while (have_posts()) : the_post(); ?>

    	<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	
		
        <p class="postmetadata">
			<span class="cat">Posted <?php the_time('F jS, Y') ?> </span>
            <span class="cat"> in <?php the_category(', ') ?></span>
            <span class="author">by <?php the_author_posts_link(); ?></span>
		</p>

		<?php the_content(); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>

    <?php endwhile; ?>

    
	<?php else : ?>
        <!--NO POST FOUND BY AUTHOR-->
        <p>Sorry, we were unable to find posts by <?php echo $postAuthor->display_name; ?></p>
    <?php endif; ?>
<!-- End Loop -->

</div><!-- END CONTENT -->


<!-- START SECONDARY SIDEBAR -->
<?php get_sidebar('secondary'); ?>
</div><!--END DIV MAIN-->

<!-- START BLOG SIDEBAR -->
<?php get_sidebar('blog'); ?>
    
    
<?php get_footer(); ?>