<?php /* Template Name: Live Stream */ ?>

<?php get_header(); ?>

<div class="banner-two">
    <div class="container">
        <div class="heading-container">
            <div class="heading-wrapper">
                <h1>Live Stream</h1>
                <h2>Thursday 11th February 2021<br>10.00 - 16.00</h2>
            </div>
        </div>
    </div>
</div>

<div class="live-stream-wrapper">
    <div class="container-lg">
        <div class="flex">
            <div class="live-stream">
                <?php the_field('live_stream');?>
            </div>

            <div class="chat">
                <?php the_field('chat');?>
            </div>
        </div>

        <button class="accordion">Submit a question</button>
                <div class="panel">
                    <?php the_field('question');?>
                </div>
    </div>
</div>

<?php get_footer(); ?>