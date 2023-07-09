<?php
    session_start();
    if(!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 10;
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Coupons</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome Customer!</h1>
        <p>We're giving away <span>free coupons </span></p>
        <p>as token of appreciation</p>
        <p>for first <?= $_SESSION['counter'] ?> customer(s).</p>
        <form action="process.php" method="POST">
            <label for="name">Kindly type your name:</label>
            <input type="text" name="name" id="name" />
            <input type="submit" value="Submit" />
        </form>    
<?php   //unset($_SESSION['counter']);
        if($_SESSION['counter']==0){
            header('Location: unavailable.php');
        }
        if($_SESSION['submit']==TRUE){
            header('Location: claim.php');
    }   ?>       
            
    </div>
</body>
</html>