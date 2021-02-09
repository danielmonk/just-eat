<?php
    $hero_image = (array_key_exists('hero_image', $data)) ? $data['hero_image'] : false;
    $hero_content = (array_key_exists('hero_content', $data)) ? $data['hero_content'] : false;
?>

<section class="hero-section" style="background-image:url(<?php echo $hero_image['url']; ?>)">
    <div class="container">
        <div class="heading-container">
            <div class="heading-wrapper">
                <?php echo $hero_content; ?>
            </div>
        </div>
    </div>
</section>