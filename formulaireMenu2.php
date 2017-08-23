
<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" media="screen" type="text/css" title="page_web" href="formulairemenu.css"/>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
    <div class="contain">
  <h1>MES MENUS</h1>

  <?php
  include_once('config/connection.php');

  try {
  $nom=$_POST['nom'];
  $prix=$_POST['prix'];


  $req = $bdd->prepare('INSERT INTO menu(nom, prix) VALUES(:nom, :prix)');
    $req->execute(array(
      'nom' => $nom,
      'prix' => $prix,));
    $req->closeCursor();
    echo 'ok';

  } catch (Exception $e) {
      echo 'pb';  $e->getMessage();
  }

  $idDernierMenu=$bdd->lastInsertId();
  $idDernierMenu=intval($idDernierMenu);
  ?>
  <form method="post" class="formu" action="traitementmenu.php?id=<?php echo $idDernierMenu?>">;
    <?php
    $reponse=$bdd->query('SELECT * FROM plats');
      while($donnees = $reponse->fetch())
      {
  ?>
  <div class="choix">
        <input type="checkbox" name="checkbox[]" id="choixplats" value="<?php echo $donnees["ID"]?>"/>
        <label for="choixplats"><?php echo $donnees["nom"]?><img class="fotoplats"src="<?php echo $donnees["image"]?>"alt="image"></label>
    </div>

  <?php
}
    $reponse->closeCursor();
    ?>
<div class="button">
  <input type="submit" NAME="bouton" VALUE="envoyer">
  </div>
      </form>
    </div>
    </body>
  </html>
