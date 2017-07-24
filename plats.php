<?php
include ('header.php');
?>
<?php
include_once('config/connection.php');
     $reponse=$bdd->query('SELECT * FROM plats');
      echo'<h1>les plats</h1>';
     echo'<div class="plats">';
       while($donnees = $reponse->fetch())
       {
?>
<div class="listePlat">
                <h3> <?php echo $donnees['nom']; ?> <span> <?php echo $donnees['prix']; ?> € </span> </h3>
                <img src="<?php echo $donnees['image']; ?>" alt="image Plat">
                <a class="btnmodif" href="modifierplats.php?id=<?php echo $donnees['ID']; ?>">Modifier ce plat</a>
                <a class="btnmodif supp" href="supprimerplats.php?id=<?php echo $donnees['ID']; ?>">Supprimer ce plat</a>
              </div>
<?php
       }
       echo'</div>';
  $reponse->closeCursor();
?>


  </body>
</html>
