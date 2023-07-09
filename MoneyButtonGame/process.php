<?php
    session_start();

    $pcolor = '';
    
    if(isset($_POST['low']) && $_SESSION['chances']!=0){
        $_SESSION['bet'] = rand(-25, 100);
        $_SESSION['money'] = $_SESSION['money'] + $_SESSION['bet'];
        $_SESSION['chances'] --;
        $_SESSION['bet'] < 0 ? $pcolor = 'red': $pcolor = 'green';
        $_SESSION['host_message'] .= '<span class='.$pcolor.'>['.$_SESSION['date'].']'.' You pushed "Low Risk". Value is '.$_SESSION['bet'].'. Your current money now is '.$_SESSION['money'].' with '.$_SESSION['chances'].' chance(s) left.'.'</span><br>';
    }
    elseif(isset($_POST['moderate']) && $_SESSION['chances']!=0){
        $_SESSION['bet'] = rand(-100, 1000);
        $_SESSION['money'] = $_SESSION['money'] + $_SESSION['bet'];
        $_SESSION['chances'] --;
        $_SESSION['bet'] < 0 ? $pcolor = 'red': $pcolor = 'green';
        $_SESSION['host_message'] .= '<span class='.$pcolor.'>['.$_SESSION['date'].']'.' You pushed "Moderate Risk". Value is '.$_SESSION['bet'].'. Your current money now is '.$_SESSION['money'].' with '.$_SESSION['chances'].' chance(s) left.'.'</span><br>';
    }
    elseif(isset($_POST['high']) && $_SESSION['chances']!=0){
        $_SESSION['bet'] = rand(-500, 2500);
        $_SESSION['money'] = $_SESSION['money'] + $_SESSION['bet'];
        $_SESSION['chances'] --;
        $_SESSION['bet'] < 0 ? $pcolor = 'red': $pcolor = 'green';
        $_SESSION['host_message'] .= '<span class='.$pcolor.'>['.$_SESSION['date'].']'.' You pushed "High Risk". Value is '.$_SESSION['bet'].'. Your current money now is '.$_SESSION['money'].' with '.$_SESSION['chances'].' chance(s) left.'.'</span><br>';
    }
    elseif(isset($_POST['severe']) && $_SESSION['chances']!=0){
        $_SESSION['bet'] = rand(-3000, 5000);
        $_SESSION['money'] = $_SESSION['money'] + $_SESSION['bet'];
        $_SESSION['chances'] --;
        $_SESSION['bet'] < 0 ? $pcolor = 'red': $pcolor = 'green';
        $_SESSION['host_message'] .= '<span class='.$pcolor.'>['.$_SESSION['date'].']'.' You pushed "Severe Risk". Value is '.$_SESSION['bet'].'. Your current money now is '.$_SESSION['money'].' with '.$_SESSION['chances'].' chance(s) left.'.'</span><br>';
    }
    elseif(isset($_POST['reset'])){
        session_destroy();
    }
header('Location: index.php');
?>