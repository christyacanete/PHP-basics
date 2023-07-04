<?php
header('Content-type: text/css');

$textcolor = array(1 => 'red', 2 => 'blue', 3 => 'violet', 4 => 'green'); 

$random = rand(1,4);
$psize = ($random*15).'px';
$pcolor = $textcolor[$random];

$random = rand(1,4);
$emsize = ($random*15).'px';
$emcolor = $textcolor[$random];

?>
    p { 
        font-size: <?=$psize?>;
        color: <?=$pcolor?>;
    }
    em { 
        font-size: <?=$emsize?>; 
        color: <?=$emcolor?>;
    }
    img {
        margin-top: 30px;
        display: block;
    }
