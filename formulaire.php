<?php
include ('header.php');
?>
  <form method="post" action="traitement.php" enctype="multipart/form-data">

           <div class="formulaire">

    <label for="nom">Votre plat:</label>
             <input type="text" name="nom" id="nom"><br />

    <label for="prix">prix:</label>
            <input type="text" name="prix" id="prix"><br />

    <label for="monfichier">photo:</label>
           <input type="file" name="monfichier"><br />

           <input  type="submit" value="Envoyer">
      </div>
    </form>
  </body>
</html>
