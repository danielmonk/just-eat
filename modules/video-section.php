<!-- VIDEO SECTION FLEXI CONTENT --> 
	<?php

        // check value exists
        if( have_rows('video_section') ):


            echo '<section class="section video-section">
                    <div class="container-md">';

            // loop through rows
            while ( have_rows('video_section') ) : the_row();

                // Case: Video Content
                if( get_row_layout() == 'video_content' ):
                $video_content = get_sub_field('video_content');
                $videoID = get_sub_field('video_id');
                
                echo "<div id='" . $videoID . "' class='column'>" . $video_content . "</div>";


                
				// Case: Video Embed
                elseif( get_row_layout() == 'video_embed' ): 
                $video_embed = get_sub_field('video_embed');
                
                echo "<div class='column padding-top'><div style='position:relative;padding-top:56.25%;'>" . $video_embed . "</div></div>";


                endif;

            endwhile;

            echo '</div>
            </div>';

        endif;
    ?>
</div>