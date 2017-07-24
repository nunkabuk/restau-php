
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Supprimer un plat</title>
    <link rel="stylesheet" href="assets/formulairemenu.css">
  </head>
  <body>

    <div class="contain">

    <?php
    try{
        require_once('config/connection.php');
        $id= $_GET['id'];  // On récupère l'id du menu
        $req = $bdd->prepare('DELETE FROM menu WHERE ID = :id');
        $req->execute(array(
        	'id' => $id,
        	));
        echo "Le menu a bien été supprimé !";
        $req->closeCursor();
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
      echo "Le menu n'a pas été supprimé, merci de rééssayer :)";
    }
  ?>
        </p>
        <a href="formulairemenu.php"> Retour à l'accueil</a>
      </div>
    </div>
  </body>
</html>
