<?php
/*
Theme Name: Team #5's WordPress Demo
Author: 
KARLE, BRIANNA R
CLEMENT, BENJAMIN A
MOISEENKO, VICTORIA
PETRIE, CHRISTINA E
MURPHY, MICHAEL J
 
Author URI: http://www.wjga.christinapetrie.com/
Description: This is our demo theme for the WEB210  class.
Version: 1.0
*/

//Register my menu
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//

//i am using Mike's Sinkula flexslider
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
        foreach ($attachments as $attachment_id => $attachment) {            
	     echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');
            echo '<span class="flex-caption">';
            echo get_post_field('post_excerpt', $attachment->ID);
            echo '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
add_shortcode( 'flexslider', 'add_flexslider' );

//Enable Feauture images and post thumbnails
add_theme_support('post-thumbnails');
//

?>