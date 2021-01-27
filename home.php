<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="banner">
    <div class="container">
        <div class="heading-container">
            <div class="heading-wrapper">
                <h1>JET SET<br>UK 2021</h1>
                <h2>Thursday 11th February 2021<br>10.00 - 16.00</h2>
            </div>
        </div>
    </div>
</div>

<div class="welcome-wrapper">
    <div class="container">
        <div class="flex">  
        <img src="<?php the_field('home_icon');?>" class="home-icon">

        <div class="home-content">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        </div>

       <a href="register" class="reg-cta">Register</a>
    </div>
</div>

<?php get_footer(); ?>