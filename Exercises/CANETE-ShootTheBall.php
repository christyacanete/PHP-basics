<?php
$success = 0;
$fail = 0;
    for($n=1; $n<=1000; $n++){
        echo "Attempt #$n: Shooting the ball...";
        $shoot = rand(0,1);
        if($shoot==0){
            $fail++;
            echo "Epic Fail! ... Got $success x success  and $fail x epic fail(s) so far<br>";
        }
        else {
            $success++;
            echo "Success! ... Got $success x success  and $fail x epic fail(s) so far<br>";
        }
    }
    echo "Practice ended";
?>