<?php
    $binary = array( 1, 1, 0, 1, 1, 0, 1); 
    function get_count($arr){
        $new_arr = array();
        $one = 0;
        $zero = 0;
        foreach($arr as $digit){
            if($digit==1){
                $new_arr['ones'] = ++$one;
            }
            elseif($digit==0){
                $new_arr['zeroes'] = ++$zero;
            }
        }
        return $new_arr;
    }
    $output = get_count($binary); 
    var_dump($output); 
?>