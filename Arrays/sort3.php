<?php
    $personas = array('Jose'=>'Mi nombre es Jose, tengo 18 años', 'Joan'=>'Mi nombre es Joan, 19', 'Dylan'=>'Dylan, 19');

    function compLong($a, $b) {
        $longitudA = strlen($a);
        $longitudB = strlen($b);

        if($longitudA == $longitudB) {
            return 0;
        }
        return ($longitudA < $longitudB) ? -1 : 1;
    };

    uasort($personas, 'compLong');

    foreach ($personas as $nombre => $desc) {
        echo "$nombre => $desc </br>";
    };
?>