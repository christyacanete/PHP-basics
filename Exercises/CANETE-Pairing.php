<?php
    $cards = array('King'=>13, 'Queen'=>12, 'Jack'=>11, 'Ace'=>1);
    function print_card($arr){
        echo "List of keys in the array:";
        echo "<ul>";
        foreach($arr as $key=>$card){
            echo "<li>$key</li>";
        }
        echo "</ul><br>";
        foreach($arr as $key=>$card){
            echo "The value of $key in Pyramid Solitaire is $card.<br>";
        }
    }
    print_card($cards);
?>