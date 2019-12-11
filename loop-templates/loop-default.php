<?php
    if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			get_template_part( 'loop-templates/content', get_post_format() );
	    endwhile; 
    else :
		get_template_part( 'loop-templates/content', 'page' ); 
    endif; 