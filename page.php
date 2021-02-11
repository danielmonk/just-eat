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
                    <div class="container">
                        <?php the_content(); ?>
                    </div>
                    </div>
                </div>
                
            <?php else : ?>

                <?php include('page-content.php'); ?>

            <?php endif; ?>
        </main>
    
        <?php else:
            echo '<section class="login-section"><div class="reg-wrapper"><div class="container"><div class="gf_browser_chrome gform_wrapper">' . do_shortcode("[wp_login_form]") . '</div></div></div></section>';
        endif;
    else: ?>

        <main class="main" role="main" id="main-content">

            <?php if($standard_content) : ?>

                <div class="section">
                    <div class="main-content">
                        <div class="container">
                        <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                
            <?php else : ?>

                <?php include('page-content.php'); ?>

            <?php endif; ?>
        </main>

    <?php endif; ?>
            


<?php endwhile; ?>

<?php get_footer(); ?>