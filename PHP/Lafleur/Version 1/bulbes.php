<html>
<head>
        <title>Lafleur</title>
        <link href="style.css" media="all" rel="stylesheet" type="text/css">
        <link rel="icon" href="giphy.gif"/>
    </head>
<body>
      <header>
        <?php
        include_once("menu.php");
        ?>
      </header>
<?php
$connexion = mysqli_connect("localhost","root","","lafleur1");
if ($connexion) 
{
  // connexion réussie
  mysqli_set_charset ($connexion,"utf8");
  $requete="select pdt_image,pdt_ref,pdt_designation,pdt_prix from produit";
  $nb=0;
  echo "<h1>Liste des bulbes</h1>";
  echo '<p /><table border="2" width="75%">';
  echo "<tr><th>Photos</th><th>Référence</th><th>Désignation</th><th>Prix</th></tr>";
  $resultat= mysqli_query($connexion, $requete);
  $ligne=mysqli_fetch_assoc($resultat);
  while($ligne) 
  {
    echo "<tr><td>".$ligne["pdt_image"]."</td><td>".$ligne["pdt_ref"]."</td><td>".$ligne["pdt_designation"]."</td><td>".$ligne["pdt_prix"]. "€</td></tr>";
    $nb++;
    $ligne=mysqli_fetch_assoc($resultat);
  }
  echo "</table><p />";
  echo "Il y a ".$nb." bulbes.";  
}
else
{
  echo "problème à la connexion <br />";
}
mysqli_close($connexion);
?>

<div id="fin">
<p>Appelez notre service commercial au 03.22.84.68.74 pour recevoir un bon de commande</p>
</div>
</body>
</html>
