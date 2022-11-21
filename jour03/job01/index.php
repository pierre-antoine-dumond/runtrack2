<?php
    foreach([200, 204, 173, 98, 171, 404, 459] as $valeur) {
        if($valeur%2 == 0) {
            echo '<br>';
            echo $valeur . ' est paire';
        } elseif($valeur%2 != 0) {
            echo '<br>';
            echo $valeur . ' est impaire';
    }}
?>
