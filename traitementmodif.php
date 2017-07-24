
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modification</title>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>

    <div class="contain">

    <?php
    try{
        require_once('config/connection.php');
        $id= $_GET['id'];
        if (isset($_POST['nomPlat'])){
          $nomPlat = htmlspecialchars($_POST['nomPlat']);
          $prixPlat = htmlspecialchars($_POST['prixPlat']);
            $req = $bdd->prepare('UPDATE plats SET nom = :newnom, prix = :newprix WHERE ID = :id');
            $req->execute(array(
            	'newprix' => $prixPlat,
            	'newnom' => $nomPlat,
              'id' => $id,
            	));
            echo "modif ok !";
            $req->closeCursor();
        } if (isset($_POST['nomMenu'])){
          $nomMenu = htmlspecialchars($_POST['nomMenu']);
          $prixMenu = htmlspecialchars($_POST['prixMenu']);
          $req = $bdd->prepare('UPDATE menu SET nom = :newnom, prix = :newprix WHERE ID = :id');
          $req->execute(array(
            'newprix' => $prixMenu,
            'newnom' => $nomMenu,
            'id' => $id,
            ));
          echo "modif ok !";
          $req->closeCursor();
        }
    }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
    echo "La modification n'a pas été envoyée, merci de recommencer";
  }
  ?>
        </p>
        <a href="formulaire.php"> Retour à l'accueil</a>
      </div>
    </div>
  </body>
</html>
