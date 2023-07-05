<?php

session_start();

require("new-connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL Fetch Demo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

    $query = "SELECT * FROM contact;";
    $data = fetch_all($query);
    //var_dump($data);
?>
<table>
    <tr>
        <th>id</th>
        <th>mobile</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
<?php
    foreach($data as $getData){
?>
    <tr>
        <td><?php echo $getData['id']; ?></td>
        <td><?php echo '0'.$getData['mobile']; ?></td>
        <td><?php echo $getData['created_at']; ?></td>
        <td><?php echo $getData['updated_at']; ?></td>
     </tr>
<?php
    }
?>
<table>
</body>
</html>