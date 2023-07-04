<?php
//     $diff=4;
//     for($num=8; $num<1000; $num+=$diff){
//         echo $num;
//         echo '<br>';
//     }
        $first = 8;
        $diff = 8;
        $num = 0;
        $last = 1000;
        for($n=1; $n<=($last-$first)/$diff+1; $n++){
            $num = $first + ($n-1)*$diff;
            echo $num.'<br>';
        }
 ?>