<?php
    $series=array(2,5,8,11,14);
    $ap_sum=0;
    // 
    for($n=0; $n<count($series); $n++){
        echo $series[$n]." ";
        $ap_sum=$ap_sum + $series[$n];
    }
    echo '<br>';
    echo $ap_sum;
?>