<?php
    session_start();
    echo "Howdy, {$_SESSION['first_name']}!";
?>
<html>
    <head>
        <title>Login Registration Demo</title>
    </head>
    <body>
        <a href='process.php'>LOG OFF! </a>;
    </body>
</html>