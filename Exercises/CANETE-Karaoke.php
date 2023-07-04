<?php
    for($n=0; $n<50; $n++){
        $score = rand(1,100);
        echo "<h1>Your score: $score</h1>";
        if($score<50){
            echo "<h2>Never sing again, ever!</h2>";
        }
        elseif($score>=50 && $score<=79){
            echo "<h2>Practice more!</h2>";
        }
        elseif($score>=80 && $score<=94){
            echo "<h2>You're getting better!</h2>";
        }
        elseif($score>=95){
            echo "<h2>What an excellent singer!</h2>";
        }
    }
?>