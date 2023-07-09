<?php
    session_start();
    if(!isset($_SESSION['money'])){
        $_SESSION['money'] = 500;
    }
    if(!isset($_SESSION['bet'])){
        $_SESSION['bet'] = 0;
    }
    if(!isset($_SESSION['chances'])){
        $_SESSION['chances'] = 10;
    }
    if(!isset($_SESSION['host_message'])){
        $_SESSION['host_message'] = " ";
    }
    if(!isset($_SESSION['date'])){
        date_default_timezone_set('Asia/Singapore');
        $_SESSION['date'] = date('m-d-y h:i A');
    }
?>
<html>
    <header>
        <title>Money Button Game</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </header>
    <body>
        <div class="container">
            <h1>Your money: <?= $_SESSION['money'] ?></h1>
            <form action="process.php" method="post" id="form-reset">
                <input id="reset" type="submit" name="reset" value="Reset Game" />
            </form>
            <h2>Chances left: <?= $_SESSION['chances'] ?></h2>
            <form action="process.php" method="post" class="bet">
                <p>Low Risk</p>
                <input type="hidden" name="money" />
                <input type="submit" name="low" value="Bet"/>
                <p>by -25 up to 100</p>
            </form>
            <form action="process.php" method="post" class="bet">
                <p>Moderate Risk</p>
                <input type="hidden" name="money" />
                <input type="submit" name="moderate" value="Bet"/>
                <p>by -100 up to 1000</p>
            </form>
            <form action="process.php" method="post" class="bet">
                <p>High Risk</p>
                <input type="hidden" name="money" />
                <input type="submit" name="high" value="Bet"/>
                <p>by -500 up to 2500</p>
            </form>
            <form action="process.php" method="post" class="bet">
                <p>Severe Risk</p>
                <input type="hidden" name="money" />
                <input type="submit" name="severe" value="Bet"/>
                <p>by -3000 up to 5000</p>
            </form>
            <h3>Game Host:</h3>
            <div id="message">
                <p>Welcome to Money Button Game, risk taker! All you need to do is push buttons to try your luck. You have free 10 chances with initial money 500. Choose wisely and good luck!</p>
                <p> <?= $_SESSION['host_message'] ?>
            </div>
        </div>
    </body>
</html>