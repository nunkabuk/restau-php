<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Supprimer un plat</title>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>

    <div class="contain">

    <?php
    try{
        require_once('config/connection.php');
        $id= $_GET['id'];
        $req = $bdd->prepare('DELETE FROM plats WHERE ID = :id ');
        $req->execute(array(
        	'id' => $id,
        	));
        echo "Le plat a bien été supprimé !";
        $req->closeCursor();
    }
    catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
      echo "Le plat n'a pas été supprimé, merci de rééssayer :)";
    }
  ?>

        <a href="plats.php"> Voir les plats</a>

    </div>
  </body>
</html>
