<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel to HTML - Demo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
<?php
    ini_set("auto_detect_line_endings", true);
    $tenth_row = "";
    $counter = 0;
    if (($file = fopen("us-500.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($file))) {       
        if($counter%10 == 0 && $counter !== 0){
            $tenth_row = 'background-color:lightgray';
        }
        elseif($counter == 0){
            $tenth_row = 'font-weight:bold';
        }
        else {
            $tenth_row = 'background-color:white';
        }   $counter++;?>
        <tr>
<?php   for ($row = 0; $row < count($data); $row++) {   ; ?>
            <td style=<?=$tenth_row?>><?=$data[$row]?></td>
<?php       }       
        }   ?>
        </tr>
<?php   
        fclose($file);
    }   ?>
    </table>
</body>
</html>