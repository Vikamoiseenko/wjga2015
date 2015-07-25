<!--START SIDEBAR SECONDARY-->
<aside id="secondary">

	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>

		<?php dynamic_sidebar( 'secondary' ); ?>

	<?php else : ?>
    
        <div class="widget">
            <h3>CONTACT US</h3>
            <p class="aligncenter">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>            	     
        </div>
        
        

	<?php endif; ?>
    
</aside><!--END SIDEBAR SECONDARY-->


