<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 PHP</title>
</head>
<body>
    <?php
        $NombreAleatoire= rand(0,100); 
        if($NombreAleatoire%2==1){?>
            <p style="background-color:blue;color:cyan"><?php echo $NombreAleatoire?> est impair</p>
    <?php
        }
        else
        {
    ?>
        <p style="background-color: red;color:black"><?php echo $NombreAleatoire?> est pair</p>
    <?php
        }
    ?>
        
      
    
</body>
</html>
