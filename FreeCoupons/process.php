<?php
    session_start();

    // Fetch data
    $_SESSION['user'] = $_POST['name'];
    if($_SESSION['user']!=''){
        $_SESSION['counter'] = $_SESSION['counter'] - 1;
        $_SESSION['submit'] = TRUE;
        header('Location: index.php');
    }
    else {  
        echo '<script type="text/javascript">alert("Name cannot be blank!");' ;
        echo 'window.location.href="index.php";';
        echo '</script>';
    }
?>