<?php
    $users = array( 
        array('cardholder_name' => 'Michael Choi', 'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
        array('cardholder_name' => 'John Supsupin', 'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
        array('cardholder_name' => 'KB Tonel', 'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
        array('cardholder_name' => 'Mark Guillen', 'cvc' => 345, 'acc_num' => '123 123 123 123'), 
        array('cardholder_name' => 'Mike Tan', 'cvc' => 321, 'acc_num' => '1234 5678 9876 5432'),
        array('cardholder_name' => 'Jeremy Cruz', 'cvc' => 987, 'acc_num' => '0001 1200 1500 1510'),
        array('cardholder_name' => 'John Troyo', 'cvc' => 765, 'acc_num' => '4568 456 123 5214'),
        array('cardholder_name' => 'Kevin Santos', 'cvc' => 543, 'acc_num' => '123 123 123 123'),
        array('cardholder_name' => 'David Gonzaga', 'cvc' => 577, 'acc_num' => '123 123 123 123')
    );
?>
<html>
    <head>
        <title>Credit Card</title>
        <style>
            table {
                font-family: arial;
                width: 100%;
                border-collapse: collapse;
            }
            th,
            td {
                font-size: 0.8em;
                font-family: arial;
                border: 1px solid;
                width: 5%;
                text-align: center;
            }
            .shaded {
                background-color: lightgray;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Name in uppercase</th>
                <th>Account Num</th>
                <th>CVC Num</th>
                <th>Full account</th>
                <th>Length of full account</th>
                <th>Is valid</th>
            </tr>
    <?php   for($id=0; $id<count($users); $id++){   ?>
            <tr>
    <?php   if($id<4){    ?>
                <td><?=$id+1?></td>
                <td><?=$users[$id]['cardholder_name']?></td>
                <td><?=strtoupper($users[$id]['cardholder_name'])?></td>
                <td><?=$users[$id]['acc_num']?></td>
                <td><?=$users[$id]['cvc']?></td>
                <td><?=$users[$id]['acc_num'].' '.$users[$id]['cvc']?></td>
                <td><?=trim($users[$id]['acc_num'],' ').$users[$id]['cvc']?></td>
                <td><?=strlen(trim($users[$id]['acc_num'],' ').$users[$id]['cvc'])?></td> 
    <?php   }    
           else {    ?>
                <td class='shaded'><?=$id+1?></td>
                <td class='shaded'><?=$users[$id]['cardholder_name']?></td>
                <td class='shaded'><?=strtoupper($users[$id]['cardholder_name'])?></td>
                <td class='shaded'><?=$users[$id]['acc_num']?></td>
                <td class='shaded'><?=$users[$id]['cvc']?></td>
                <td class='shaded'><?=$users[$id]['acc_num'].' '.$users[$id]['cvc']?></td>
                <td class='shaded'><?=trim($users[$id]['acc_num'],' ').$users[$id]['cvc']?></td>
                <td class='shaded'><?=strlen(trim($users[$id]['acc_num'],' ').$users[$id]['cvc'])?></td>
    <?php   }    ?>
            </tr>
    <?php   }    ?>
    </body>
</html>