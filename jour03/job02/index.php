<?php
    $str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
    for($i = 1; isset($str[$i]); $i+=2) {
        var_dump($str[$i]);
        echo '<br>';
    }
?>
