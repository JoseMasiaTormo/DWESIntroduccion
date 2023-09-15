<?php
    $meteors = array(
        'Hoba' => 6000000,
        'Cape York' => 58200000,
        'Campo del Cielo' => 50000000,
        'Canyon Diablo' => 30000000
    );
?>
<hr>
<?php foreach($meteors as $nombre => $peso):?>
    <?=$nombre?> pesa <?=$peso?> gramos <br>
<?php endforeach ?>