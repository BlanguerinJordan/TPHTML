<header>
            <h1>
                <a class="police" href="accueil.php">Société Lafleur</a>
            </h1>
            <?php
            include_once("utils.php");
            $id= cnx();
            if($id){
                $requete ="select * from categorie";
                $resultat = mysqli_query($id,$requete);
                $ligne = mysqli_fetch_assoc($resultat);
                while($ligne) 
                {
                    echo "<a class=menu <a href='listePdt.php?categ=".$ligne["cat_code"]."'>".$ligne["cat_libelle"]."</a></a> </li>";
                    $ligne=mysqli_fetch_assoc($resultat);
                }
                mysqli_close($id);
            }
            ?>
            <hr>
        </header>