<?php
        for($i = (int)0; $i <= 100; $i++) {
            if($i <= 20) {
                echo '<i>';
                echo '<br>';
                echo $i;
                echo '</i>';
            } elseif($i == 21) {
                echo '<br>';
                echo $i;
            } elseif($i > 21 && $i <= 24) {
                echo '<br>';
                echo $i;
            } elseif($i >= 25 && $i <= 41) {
                echo '<u>';
                echo '<br>';
                echo $i;
                echo '</u>';
            } elseif($i == 42) {
                echo '<br>';
                echo 'La Plateforme_';
            } elseif($i >= 43 && $i <= 50) {
                echo '<u>';
                echo '<br>';
                echo $i;
                echo '</u>';
            } else {
                echo '<br>';
                echo $i;
            }}
?>
