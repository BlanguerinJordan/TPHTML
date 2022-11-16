<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 2 PHP</title>
    </head>
    <body>
        <?php
            $array =[
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5
            ];
            echo '<table border="1"><tr>';
            for ($i=1; $i <= 5; $i++)
            {
                echo "<th>".$array[$i]."</th>";
            }
            echo "</tr></table>";
        ?>
        
    </body>
</html>
