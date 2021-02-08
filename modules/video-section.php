<div class="section video-section">
    <!-- VIDEO SECTION FLEXI CONTENT --> 
	<?php

        // check value exists
        if( have_rows('video_section') ):

            // loop through rows
            while ( have_rows('video_section') ) : the_row();


                // Case: Video Content
                if( get_row_layout() == 'video_content' ):
                $video_content = get_sub_field('video_content');
                
                echo "<div class='column'>" . $video_content . "</div>";


                
				// Case: Video Embed
                elseif( get_row_layout() == 'video_embed' ): 
                $video_embed = get_sub_field('video_embed');
                
                echo "<div class='column padding-top'>" . $video_embed . "</div>";


                endif;

            endwhile;

        endif;
    ?>
</div>