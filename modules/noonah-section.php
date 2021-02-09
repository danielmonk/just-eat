<?php
    $noonah_event_name = (array_key_exists('noonah_event_name', $data)) ? $data['noonah_event_name'] : false;
    $noonah_event_type = (array_key_exists('noonah_event_type', $data)) ? $data['noonah_event_type'] : false;
?>

<section class="noonah-section">
    <div class="container">
        <?php if($noonah_event_type === 'photobooth'):
            echo '<iframe src="https://photos.virtualeventsbooth.com/'. $noonah_event_name .'" width="100%" height="700" allow="microphone; camera"></iframe>';
        elseif($noonah_event_type === 'live-mosaic'):
            echo '<iframe src="https://photos.virtualeventsbooth.com/mosaic/'. $noonah_event_name .'" width="100%" height="700" allow="microphone; camera"></iframe>';
        endif; ?>
    </div>
    </section>