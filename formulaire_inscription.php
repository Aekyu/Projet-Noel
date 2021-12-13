<?php
require_once "ressources.php";
require_once "fonctions.php";

entete("Inscription");

if ($_POST) {
    $pseudo = $_POST['pseudo'];

    $mysqli = new mysqli('localhost', 'root', '', 'projet_noel');

    $query  = "insert into inscriptions ( nom ) values ( '$pseudo' );";
    //print( $query );
    if ($mysqli->query($query))
        print('<p> Merci ' . $pseudo . ' pour ton inscription !
             Entres, et tu découvriras à qui tu peux offrir ton cadeau</p>');

    $mysqli->close();
}
?>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

<form class="styleFondPage" action="#" method="POST">
    <input class="user" type="text" name='pseudo' placeholder="Entrez votre pseudo">
    <br>
    <button class="styleBouton btn btn-secondary" type="submit">Valider</button>
    <a href="./index.php"><span type="submit" class="btn btn-secondary">Retour</span></a> 
</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>