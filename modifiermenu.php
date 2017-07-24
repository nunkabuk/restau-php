<?php
include ('header.php');
?>
    <div class="formulaire">
      <h2>Modifiez votre menu</h2>
          <form class="ajoutPlat" action="traitementmodif.php?id=<?php echo $_GET['id']; ?>" method="post">

            <label for="nomMenu">Nouveau nom du menu :</label>
            <input type="text" name="nomMenu" value=""> </br>

            <label for="prixMenu">Prix du plat :</label>
            <input type="text" name="prixMenu" value=""> <span> € </span>

            <input type="submit" name="envoiModif" value="Envoyer">
          </form>


          </div>
  </body>
</html>
