<?php
    session_start();
    $_SESSION['code'] = rand(1000000, 1500000);
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
<?php   if($_SESSION['counter']>=0) { ?>            
            <p id="discount">50% Discount</p>
            <p id="coupon-num"><?= $_SESSION['code'] ?></p>
<?php   }   ?>
            <input type="submit" name="reset" id="reset" value="Reset count" />
            <input type="submit" name="claim" id="claim" value="Claim again" />   
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