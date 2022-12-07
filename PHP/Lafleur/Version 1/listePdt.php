<html>
  <head>
      <meta charset="utf-8">
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
      include_once("utils.php");
      $connexion = cnx();
      if ($connexion) 
      {
        // connexion réussie
        $requete="select pdt_image,pdt_ref,pdt_designation,pdt_prix,cat_libelle from produit,categorie where pdt_categorie='".$_GET["categ"]."' and categorie.cat_code=produit.pdt_categorie";
        $nb=0;
      
        $resultat= mysqli_query($connexion, $requete);
        $ligne=mysqli_fetch_assoc($resultat);
        $lignecat=$ligne;
    ?>
    <h1>Liste des <?php echo $ligne["cat_libelle"];?>.</h1>
    
    <p />
    <table border="2" width="75%">
      <tr>
        <th>Photos</th>
        <th>Référence</th>
        <th>Désignation</th>
        <th>Prix</th>
      </tr>
      <?php while($ligne) 
        {
      ?>
      <tr>
        <td><img style="width: 10vw;height:8vw" src="../Images/<?php echo $ligne["pdt_image"];?>.jpg"></td>
        <td><?php echo $ligne["pdt_ref"];?></td><td><?php echo $ligne["pdt_designation"];?></td>
        <td><?php echo $ligne["pdt_prix"];?> €</td>
      </tr>
      <?php
        $nb++;
        $ligne=mysqli_fetch_assoc($resultat);
        }
      ?>
    </table>
    <p />
    <p style='text-align:center'>Il y a <?php echo $nb." ".$lignecat["cat_libelle"];?></p>  
    <?php
    }
    mysqli_close($connexion);
    ?>
    <div id="fin">
    <p>Appelez notre service commercial au<a href="tel:+33322846874">03.22.84.68.74</a>pour recevoir un bon de commande</p>
    </div>
  </body>
</html>
