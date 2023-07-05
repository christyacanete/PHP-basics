<?php
    session_start();
    require('new-connection.php');

    if(isset($_POST['action']) && $_POST['action'] == 'register'){
        register_user($_POST);
    }
    elseif(isset($_POST['action']) && $_POST['action'] == 'login'){   
        login_user($_POST);
    }
    elseif(isset($_POST['action']) && $_POST['action'] == 'reset'){
        reset_user($_POST);
    }
    else {
        session_destroy();
        header('location: index.php');
        die();
    }

    function register_user($post){

//--------------------------- Begin of validation checks ---------------------------//
        $_SESSION['errors'] = array();

        // Check first name
        if(empty($post['first_name'])){
            $_SESSION['errors'][] = "First name can't be blank!";
        }
        elseif(!empty($post['first_name']) && strlen($post['first_name']) >= 2){
            if(isValidName($post['first_name'])){
                // Do nothing
            }
            else{
                $_SESSION['errors'][] = "First name must not contain numbers!";
            }
        }
        elseif(strlen($post['first_name']) < 2){
            $_SESSION['errors'][] = "First name must be at least two characters long!";
        }

        // Check last name
        if(empty($post['last_name'])){
            $_SESSION['errors'][] = "Last name can't be blank!";
        }
        elseif(!empty($post['last_name']) && strlen($post['first_name']) >= 2){
            if(isValidName($post['last_name'])){
                // Do nothing
            }
            else{
                $_SESSION['errors'][] = "Last name must not contain numbers!";
            }
        }
        elseif(strlen($post['last_name']) < 2){
            $_SESSION['errors'][] = "Last name must be at least two characters long!";
        }

        // Check email
        if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
            $_SESSION['errors'][] = "Please use a valid email address!";
        }

        // Check contact number
        if(empty($post['contact'])){
            $_SESSION['errors'][] = "Contact number is required!";
        }
        elseif(!empty($post['contact'])){
            if(isValidNum($post['contact'])){
                // Do nothing
            }
            else{
                $_SESSION['errors'][] = "Contact number must be valid!";
            }
        }

        // Check password
        if(empty($post['password'])){
            $_SESSION['errors'][] = "Password field is required!";
        }
        if(!empty($post['password']) && strlen($post['password']) < 8){
            $_SESSION['errors'][] = "Password must be at least 8 characters long!";
        }

        // Check if password matches
        if($post['password'] !== $post['confirm_password']){
            $_SESSION['errors'][] = "Password must match!";
        }

//--------------------------- End of validation checks ---------------------------//
        
        if(count($_SESSION['errors']) > 0){
            header('location: index.php');
            die();
        }
        else{
            // Insert data into the database
            $password = ($_POST['password']);
            $salt = bin2hex(openssl_random_pseudo_bytes(22));
            $encrypted_password = md5($password . '' . $salt);
            $query = "INSERT INTO users (first_name, last_name, email, contact_number, password, salt, created_at, updated_at)
                      VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['email']}', '{$post['contact']}', '{$encrypted_password}', '{$salt}', NOW(), NOW())";
            
            run_mysql_query($query);
            $_SESSION['success_message'] = 'User successfully created!';
            header('location: index.php');
            die();
        }
    }

    function isValidName($name){
        for($index=0; $index<strlen($name); $index++){
            if(is_numeric($name[$index])){
                return FALSE;
            }
        }
        return TRUE;
    }

    function isValidNum($num){
        for($index=0; $index<strlen($num); $index++){
            if(is_numeric($num[$index])){
                // Do nothing
            }
            else {
                return FALSE;
            }
        }
        return TRUE;
    }

    function login_user($post){
        $query = "SELECT * FROM users WHERE users.email = '{$post['email']}'";
        
        $user = fetch_all($query);

        if(!empty($user)){

            $encrypted_password = md5($post['password'] . '' . $user[0]['salt']);
            if($user[0]['password'] == $encrypted_password){
                $_SESSION['user_id'] = $user[0]['id'];
                $_SESSION['first_name'] = $user[0]['first_name'];
                header('location: success.php');
            }
            else {
                $_SESSION['errors'][] = "can't find a user with those credentials.";
                header('location: index.php');
                die();
            }
        }
        else {
            $_SESSION['errors'][] = "can't find a user with those credentials.";
            header('location: index.php');
            die();
        }
    }
    function reset_user($post){
        $query = "SELECT * FROM users WHERE users.contact_number = '{$post['contact']}'";

        $user = fetch_all($query);
        
        if(!empty($user)){

            if($user[0]['contact_number'] == $post['contact']){
                // change password
                $contact = escape_this_string($post['contact']);
                $new_pass = 'village88';
                $salt = bin2hex(openssl_random_pseudo_bytes(22));
                $encrypted_password = md5($new_pass . '' . $salt);
                
                $update = "UPDATE users 
                           SET password = '{$encrypted_password}', salt = '{$salt}'
                           WHERE contact_number = '{$contact}';";
                run_mysql_query($update);
                $_SESSION['reset_message'] = "Password reset successful!";

                header('location: index.php');
                die();
            }
        }
        else {
            $_SESSION['errors'][] = "Contact number does not exist.";
            header('location: index.php');
            die();
        }
    }
?>