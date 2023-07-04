<?php
    $languages = array('PHP', 'JS', 'Ruby');

    /* Question 1 */
    echo "<select name='language'>";
    for($n=0; $n<count($languages); $n++){
        echo "<option value=''>$languages[$n]</option>";
    }
    echo "</select>";
    echo " ";

    /* Question 2 */
    echo "<select name='language'>";
    foreach($languages as $language){
        echo "<option value=''>$language</option>";
    }
    echo "</select>";

    /* Question 3 */
    array_push($languages, "HTML", "CSS");
    echo " ";
    echo "<select name='language'>";
    foreach($languages as $language){
        echo "<option value=''>$language</option>";
    }
    echo "</select>";
?>