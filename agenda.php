<?php /* Template Name: Agenda */ ?>

<?php get_header(); ?>

<div class="banner">
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
            <div class="flex">

                <div class="agenda-section">
                    <div class="flex">
                        <img src="<?php the_field('1030_icon');?>" class="icon">
                        <h3><?php the_field('1030_time');?></h3> 
                    </div>
                    <h3><?php the_field('1030_intro');?></h3>

                    <button class="accordion">Find out more about speakers</button>
                    <div class="panel">
                        <?php if( have_rows('1030_speakers')): ?>
                            <?php while(have_rows('1030_speakers')): the_row(); ?>

                                <div class="speaker-details">
                                    <div class="flex">
                                        <img src="<?php the_sub_field('speaker_image');?>" class="speaker-img">
                                        <h3><?php the_sub_field('speaker_name_position');?></h3> 
                                    </div>
                                        <?php the_sub_field('speaker_info');?>
                                    
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>