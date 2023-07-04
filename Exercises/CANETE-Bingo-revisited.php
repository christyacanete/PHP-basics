<html>
    <head>
        <title>Bingo</title>
        <style>
            table {
                font-family: arial;
                font-weight: bold;
                width: 25%;
                height: 36%;
                border-collapse: collapse;
            }
            .red-font {
                color: red;
            }
            .blue-font {
                color: blue;
            }
            h1 {
                margin-left: 5%;
                font-size: 3em;
                font-family: arial;
            } 
            td {
                font-size: 1.65em;
                font-family: arial;
                border: 1px solid black;
                width: 5%;
                height: 6%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>B I N G O</h1>
        <table>
<?php   $flag=0;
            for($row=2; $row<=6; $row++){   ?>
            <tr>
<?php       for($col=1; $col<=5; $col++){    
                if($flag==0){   ?>
                    <td class='red-font'><?=$row*$col?></td>
<?php               $flag = 1;  
                }
                elseif($flag==1) {   ?>
                    <td class='blue-font'><p><?=$row*$col?></td>
<?php               $flag = 0;
                }   
                }   ?>
            </tr>   
<?php   }   ?>
        </table>
    </body>
</html>