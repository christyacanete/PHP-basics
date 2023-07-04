<?php
    $number = array(13,143,88,65,120);
    $mean=0;
    for($n=0; $n<count($number); $n++){
        $mean = $mean + $number[$n];
    }
    echo $mean/count($number);
?>