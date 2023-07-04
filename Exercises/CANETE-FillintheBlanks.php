<?php
    /* Question 1 */
    // $list = array(6,1,3,5,7);
    // function convert_to_blanks($arr){
    //     for($index=0; $index<count($arr); $index++){
    //         for($count=0; $count<$arr[$index]; $count++){
    //             echo "_"." ";
    //         }
    //        echo "<br>";
    //     }
    // }
    // convert_to_blanks($list);

    /* Question 2 */
    $list = array(4,"Michael",3,"Karen",2,"Rogie");
    function convert_to_blanks($arr){
        for($n=0; $n<count($arr); $n++){
            if(is_numeric($arr[$n])){
                for($count=0; $count<$arr[$n]; $count++){
                    echo "_"." ";
                }
                echo "<br>";
            }
            else{
                echo $arr[$n][0];
                for($count=1; $count<strlen($arr[$n]); $count++){
                    echo "_"." ";
                }
                echo "<br>";
            }
        }
    }
    convert_to_blanks($list);
?>