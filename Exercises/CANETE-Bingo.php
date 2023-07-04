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
            th, 
            td {
                font-size: 1.65em;
                font-family: arial;
                border: 1px solid;
                width: 5%;
                height: 6%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>B</th>
                    <th>I</th>
                    <th>N</th>
                    <th>G</th>
                    <th>O</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($row=2; $row<=6; $row++){
                        echo "<tr>";
                        for($col=1; $col<=5; $col++){
                            if($row%2==0){
                                echo "<td><font color='red'>";
                            }
                            else{
                                echo "<td><font color='blue'>";
                            }
                            echo $row*$col;
                            echo "</font></td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>