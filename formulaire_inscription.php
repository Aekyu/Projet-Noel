<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete( "Inscription" );

    if ($_POST=="toto") //=="toto" -> à supprimer après la fin du CSS
    {
        $pseudo            = $_POST[ 'pseudo' ];
        $mail             = $_POST[ 'mail' ];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "insert into inscriptions ( pseudo, email ) values ( '$pseudo', '$mail' );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>Merci $pseudo pour ton inscription !</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
        $mysqli->close();
    }
?>

<form action="#" method="POST">
    <input type="text" name='pseudo' placeholder="Entrez votre pseudo">
    <br>
    <input type="text" name='mail' placeholder="Entrez votre mail">
    <br>
    <button class="styleBouton" type="submit">Valider</button>
</form>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/lutinsDeNoel.PNG">
      <img src="images/lutinsDeNoel.PNG" width="600" height="400">
    </a>
    <div class="desc"> Ton cadeau est-il prêt à être offert ? </div>
  </div>
</div>
</body>
</html>