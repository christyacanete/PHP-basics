<?php
    session_start();
?>
<html>
    <head>
        <title>Authentication</title>
        <style type="text/css">
            *
            {
                font_family: sans-serif;
            }
            .error {
                color: red;
            }
            .success {
                color: green;
            }
        </style>
    </head>
    <body>
<?php
        if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $error){
                echo "<p class='error'>{$error} </p>";
            }
            unset($_SESSION['errors']);
        }
        if(isset($_SESSION['success_message'])){
            echo "<p class='success'>{$_SESSION['success_message']} </p>";
            unset($_SESSION['success_message']);
        }
        if(isset($_SESSION['reset_message'])){
            echo "<p class='success'>{$_SESSION['reset_message']} </p>";
            unset($_SESSION['reset_message']);
        }
?>
        <h2>Register</h2>
        <form action='process.php' method='post'>
            <input type='hidden' name='action' value='register'>
            First name: <input type='text' name='first_name'><br>
            Last name: <input type='text' name='last_name'><br>
            Email address: <input type='text' name='email'><br>
            Contact number: <input type='text' name='contact'><br>
            Password: <input type='password' name='password'><br>
            Confirm Password: <input type='passsword' name='confirm_password'><br>
            <input type='submit' name='register'>
        </form>
        <h2>Login</h2>
        <form action='process.php' method='post'>
            <input type='hidden' name='action' value='login'>
            Email address: <input type='text' name='email'><br>
            Password: <input type='password' name='password'><br>
            <input type='submit' name='login'>
        </form>
        <h2>Forgot Password</h2>
        <form action='process.php' method='post'>
            <input type='hidden' name='action' value='reset'>
            Enter contact number: <input type='text' name='contact'><br>
            <input type='submit' name='reset'>
        </form>
    </body>
</html>