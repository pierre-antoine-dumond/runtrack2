<?php
        for($i = (int)0; $i <= 100; $i++) {
            if($i%3 == 0 && $i%5 == 0) {
                echo '<br>';
                echo 'FizzBuzz';
            } elseif($i%3 == 0) {
                echo '<br>';
                echo 'Fizz';
            } elseif($i%5 == 0) {
                echo '<br>';
                echo 'Buzz';
            } else {
                echo '<br>';
                echo $i;
            }}
?>
