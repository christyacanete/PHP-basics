<?php
    /* Question 1 */
    /*
    $digits=array(3,12,30);
    function exponential($arr){
        $new_array = array();
        for($n=0; $n<count($arr); $n++){
            $new_array[$n] = $arr[$n]**3;
        }
        return $new_array;
    }
    $result=exponential($digits);
    var_dump($result);
    */

    /* Question 1 */
    $digits=array(8,11,4);
    function exponential($arr, $exp){
        $new_array = array();
        for($n=0; $n<count($arr); $n++){
            $new_array[$n] = $arr[$n]**$exp;
        }
        return $new_array;
    }
    $result=exponential($digits, 4);
    var_dump($result);
?>