<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete( "Inscription" );

    if ($_POST)
    {
        $pseudo            = $_POST[ 'pseudo' ];
        $mail             = $_POST[ 'mail' ];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "insert into inscriptions ( pseudo, email ) values ( '$pseudo', '$mail' );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>Merci $pseudo pour ton inscription !</h3>");
        
        $mysqli->close();
    }
?>
<img src="./images/wepik-2021118-113829.png" class="responsive" width="600" height="400">
<form class="styleFondPage" action="#" method="POST">
    <input class="user" type="text" name='pseudo' placeholder="Entrez votre pseudo">
    <br>
    <input class="motDePasse" type="text" name='mail' placeholder="Entrez votre mail">
    <br>
    <button class="styleBouton" type="submit">Valider</button>
</form>



</body>
</html>