<?php
include ('header.php');
?>
    <div class="container list">
      <h1>Nos Menus</h1>
      <div class="resultat">
          <?php
          require_once 'config/connection.php';
          // Triple jointure, récupérant le nom + prix de la table + les noms des plats (concat)
          $reponse = $bdd->query('SELECT menu.ID as id_du_menu, menu.nom as nom_menu, menu.prix as prix_menu, GROUP_CONCAT( plats.nom SEPARATOR " </br> ") AS concat_nomPlat FROM relation_plats_menu
          LEFT JOIN plats ON id_plats = plats.ID
          LEFT JOIN menu ON id_menu = menu.ID
          GROUP BY menu.ID');
          // On affiche chaque entrée une à une avec une boucle
          while ($donnees = $reponse->fetch())
          {

if (isset($donnees['nom_menu']) && !empty($donnees['nom_menu'])) {
            ?>
            <div class="listePlat">
                <h3> Menu <?php echo $donnees['nom_menu']; ?> <span> <?php echo $donnees['prix_menu']; ?> € </span> </h3>
                <?php echo $donnees['concat_nomPlat']; ?>
                <!-- Liens pour modifier et pour supprimer le plat en insérant l'id du plat dans l'url pour pouvoir ensuite le récupérer en GET -->
                <a class="btnmodif" href="modifiermenu.php?id=<?php echo $donnees['id_du_menu']; ?>">Modifier</a>
                <a class="btnmodif supp" href="supprimerMenu.php?id=<?php echo $donnees['id_du_menu']; ?>">Supprimer</a>
            </div>
            <?php
          }
        }
          $reponse->closeCursor();
          ?>
        </div>
    </div>
  </body>
</html>
