<?php
include_once('config/connection.php');


if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)

{
  // Testons si le fichier n'est pas trop gros

  if ($_FILES['monfichier']['size'] <= 2000000)

  {
    // Testons si l'extension est autorisée

    $infosfichier = pathinfo($_FILES['monfichier']['name']);

    $extension_upload = $infosfichier['extension'];

    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','pdf');

    if (in_array($extension_upload, $extensions_autorisees))

    {

      // On peut valider le fichier et le stocker définitivement

      move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));

      echo "L'envoi a bien été effectué !";

    }

  }

}

$nom=$_POST['nom'];
$image='uploads/' . basename($_FILES['monfichier']['name']);
$prix=$_POST['prix'];

$req = $bdd->prepare('INSERT INTO plats(nom, prix, image) VALUES(:nom, :prix, :image)');
  $req->execute(array(
    'nom' => $nom,
    'prix' => $prix,
    'image' => $image,
    ));
  $req->closeCursor();










?>
