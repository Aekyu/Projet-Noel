<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete( "Inscription" );

    if ($_POST)
    {
        $pseudo            = $_POST[ 'pseudo' ];
        
        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "insert into inscriptions ( pseudo ) values ( '$pseudo' );";
  //print( $query );
        if ( $mysqli->query( $query ) )
            print( '<p> Merci '.$pseudo.' pour ton inscription !
             Entres, et tu découvriras à qui tu peux offrir ton cadeau</p>');
        
        $mysqli->close();
    }
?>

<form class="styleFondPage" action="#" method="POST">
    <input class="user" type="text" name='pseudo' placeholder="Entrez votre pseudo">
    <br>
       <button class="styleBouton" type="submit">Valider</button>
</form>



</body>
</html>