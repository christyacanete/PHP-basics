<?php
    $even_array = array();
    $i=0;
    for($n=0; $n<=10000; $n+=2){
        $even_array[]=$n;
        // echo $even_array[$i++].'<br>';
    }
    var_dump($even_array);
?>