<?php
include ('header.php');
?>
    <div class="formulaire">
      <h2>Modifiez votre plat :</h2>
          <form class="ajoutPlat" action="traitementmodif.php?id=<?php echo $_GET['id']; ?>" method="post">

            <label for="nomPlats">Nouveau nom du plat :</label>
            <input type="text" name="nomPlat" value=""> </br>

            <label for="prixPlat">Prix du plat :</label>
            <input type="text" name="prixPlat" value=""> <span></span>

            <input type="submit" name="envoiModif" value="Envoyer">
          </form>
          </div>
  </body>
</html>
