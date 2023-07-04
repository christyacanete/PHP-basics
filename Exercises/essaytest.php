<?php
    $nations = array( array("PH"=>"Philippines", "KR"=>"South Korea"), array("PHP"=>"Philippine peso", "KRW"=>"South Korean won"), array("Manila"=>"Maynilad", "Seoul"=>"Seorabeol") );
    foreach($nations as $nation)
    {
         foreach($nation as $key=>$value)
         {
                 echo $key ." - " . $value."<br />";
         }
    }
?>