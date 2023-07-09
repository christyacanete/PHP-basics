<?php
    session_start();
?>
<html lang="en">
<head>
    <title>Generate Coupon</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>Welcome Customer!</h1>
    <p>We're giving away <span>free coupons </span>as token of appreciation.</p>
    <form method="POST">
        <p id="sorry">Sorry!</p>
        <p id="coupon-num">Unavailable</p>
        <input type="submit" name="reset" value="Reset count" id="reset" />
        <input type="submit" name="claim" value="Claim again" id="claim"/>
    </form>
<?php
    if(isset($_POST['claim'])){  
        $_SESSION['submit'] = FALSE;
        header('Location: index.php');    
    }
    if(isset($_POST['reset'])){  
        unset($_SESSION['counter']);
        unset($_SESSION['submit']);
        header('Location: index.php');    
    }
?>
    </div>
</body>
</html>