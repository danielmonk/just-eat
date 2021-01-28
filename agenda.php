<?php /* Template Name: Agenda */ ?>

<?php get_header(); ?>

<div class="banner-two">
    <div class="container">
        <div class="heading-container">
            <div class="heading-wrapper">
                <h1>Agenda</h1>
                <h2>Thursday 11th February 2021<br>10.00 - 16.00</h2>
            </div>
        </div>
    </div>
</div>

<div class="agenda-wrapper">
    <div class="container">
        <div class="compere-wrapper">
            <img src="<?php the_field('compere_image');?>" class="icon">
            <h3><?php the_field('compere_text');?></h3>
        </div>

        
        <div class="agenda-repeater-wrapper">
            <?php if( have_rows('agenda_repeater') ): ?>
                <?php while(have_rows('agenda_repeater')): the_row(); ?>
                    
                    <div class="agenda-content-wrapper">
                        <div class="agenda-content">
                            <div class="flex">
                                <img src="<?php the_sub_field('icon');?>" class="icon">
                                <h3><?php the_sub_field('time');?></h3>
                            </div>
                            <h3><?php the_sub_field('title');?></h3>

                            <button class="accordion"><?php the_sub_field('speaker_drop');?></button>
                            <div class="panel">
                                <?php if( have_rows('speaker_repeater') ): ?>
                                    <?php while(have_rows('speaker_repeater')): the_row(); ?>
                                        <div class="speaker-details">
                                            <img src="<?php the_sub_field('image');?>">
                                            <h3><?php the_sub_field('name');?></h3>
                                            <?php the_sub_field('content');?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>