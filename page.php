<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php 
    $standard_content = get_the_content();
    $locked_page = get_field('locked_page');

    if($locked_page):
        if (is_user_logged_in()): ?>

        <main class="main" role="main" id="main-content">

            <?php if($standard_content) : ?>

                <div class="section">
                    <div class="main-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                
            <?php else : ?>

                <?php include('page-content.php'); ?>

            <?php endif; ?>
        </main>
    
        <?php else:
            echo do_shortcode("[wp_login_form]");
        endif;
    else: ?>

        <main class="main" role="main" id="main-content">

            <?php if($standard_content) : ?>

                <div class="section">
                    <div class="main-content">
                        <?php the_content(); ?>
                    </div>
                </div>
                
            <?php else : ?>

                <?php include('page-content.php'); ?>

            <?php endif; ?>
        </main>

    <?php endif; ?>
            


<?php endwhile; ?>

<?php get_footer(); ?>