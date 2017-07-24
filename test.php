<?php
if (isset($_FILES['imgPlat']) AND $_FILES['imgPlat']['error'] == 0)
{
  // Testons si le fichier n'est pas trop gros
  if ($_FILES['imgPlat']['size'] <= 1000000)
  {
    // Testons si l'extension est autorisée
    $infosfichier = pathinfo($_FILES['imgPlat']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($extension_upload, $extensions_autorisees))
    {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['imgPlat']['tmp_name'], 'uploads/' . basename($_FILES['imgPlat']['name']));
      echo '<div class="envoiOk">L\'envoi a bien été effectué !</div>';
    }
  }
}
