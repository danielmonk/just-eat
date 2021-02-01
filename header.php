<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <meta name="description" content="Exciting times ahead. One day, you'll discover the vision for the UK business over the year ahead. And your role in helping make it happen. This is that day.">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-77382555-26"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-77382555-26');
    </script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#f36d00">

    <title>Just Eat |  WELCOME TO JET SET UK, 2021</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/css.css?v=01022021" />
    <script>(function(H){H.className=H.className+="js"})(document.documentElement)</script>
  </head>
<body>

<header>
    <div class="container">
        <div class="flex">

        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/justeat-logo.svg" class="nav-logo" alt=""></a>

            <nav class="nav">
            <a class="skip" href="#menu"><img src="<?php bloginfo( 'template_directory' ); ?>/images/bar.svg" class="btn" alt="menu bar"></a>
                 <?php wp_nav_menu(array(
                'container' => false,
                'menu' => __( 'Main Menu', 'textdomain' ),
                'menu_class' => 'dropdown menu',
                'theme_location' => 'topbar-menu',
                )); ?>
            </nav>
        </div>
    </div>
</header>