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

    <?php elseif (get_row_layout() == 'hero_section') : ?>

      <?php
      load_module('hero-section', array(
        'hero_image' => get_sub_field('hero_image'),
        'hero_content' => get_sub_field('hero_content'),
      ));
      ?>

    <?php elseif (get_row_layout() == 'noonah_section') : ?>

      <?php
      load_module('noonah-section', array(
        'noonah_event_name' => get_sub_field('noonah_event_name'),
        'noonah_event_type' => get_sub_field('noonah_event_type'),
        'noonah_game_code' => get_sub_field('noonah_game_code'),
      ));
      ?>

	<?php endif; ?>

  <?php endwhile; ?>


<?php endif; ?>