<?php if (have_rows('page_content')) : ?>
  <?php
  $block_count = 0;
  while (have_rows('page_content')) : $block_count++; the_row();
  ?>

    <?php if (get_row_layout() == 'svg_event_map') : ?>

		<?php
		load_module('event-map', array(
		));
        ?>

    <?php elseif (get_row_layout() == 'video_section') : ?>

        <?php
        load_module('video-section', array(
        ));
        ?>

	<?php endif; ?>

  <?php endwhile; ?>


<?php endif; ?>