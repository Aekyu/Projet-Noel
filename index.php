<?php
// require_once "ressources.php";
// require_once "fonctions.php";

// entete("Inscription");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="./mediaIndex.css" />
  <link rel="stylesheet" href="./buttonTheme.css">
  <title>Page d'accueil</title>
</head>



<div class="wrapper">
  <input id="chk" type="checkbox" name="checkbox" class="switch">
</div>

<div id="timer" class="container">
  <div>
    <h3 class="text-center mt-3 text-light">Temps restant avant l'ouverture</h3>
  </div>
  <div id="timer3" class="d-flex justify-content-center">
    <div class="d-flex text-light " id="showTimer"></div>
  </div>
</div>
<form class="styleFondPage" action="#" method="POST">
  <div class="d-flex justify-content-center mt-5" id="fly">
    <div id="flyWindow" class="d-flex align-items-center justify-content-center">
      <div class="blocForm w-100">
        <h1 id=" loginContent" class="text-center mb-4">Inscrivez-vous</h1>
        <div class="d-flex justify-content-center">
          <input class="user form-control w-75 mb-3" type="text" name='pseudo' placeholder="Entrez votre pseudo">
        </div>
        <div class="d-flex justify-content-center">
          <div class="d-flex justify-content-end w-75 mt-2">
            <!-- <a href="./index.php"><span type="submit" class="btn btn-secondary">Retour</span></a> -->
            <button class="styleBouton btn btn-secondary mb-3" type="submit">Valider</button>
          </div>
        </div>


        <?php
        if ($_POST) {

require_once "ressources.php";
          $pseudo = $_POST['pseudo'];

          $mysqli = new mysqli($servername, $username, $password, $database);
          $query  = "insert into donneur ( nom ) values ( '$pseudo' );";
          if ($mysqli->query($query)) {
            print('<div class="d-flex justify-content-center text-center"><p class="pt-4 w-75"> Merci ' . $pseudo . ' pour ton inscription !
                Entres, et tu découvriras à qui tu peux offrir ton cadeau</p></div>');
          }
          $mysqli->close();
        }
        ?>
        <div class="d-flex justify-content-center pt-2">
          <div class=" w-75">
            <div class="d-flex align-items-end justify-content-end ">
              <p class="mb-0 mx-2">Déjà inscrit ? <a href="page_principale.html">Cliquez ici</a> </p>
              <!-- <button class="styleBouton btn btn-secondary" type="submit">Connexion</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
</form>
</div>

<!-- <div class="d-flex justify-content-center">
      <button class="btn btn-success mt-5" onclick="hiddenFunction()">
        Temps restant
      </button>
    </div> -->
</div>
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">❅</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❄</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❄</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❄</div>
</div>
<script>
  fetch("./liste_personne.php")
    .then(function(result) {
      if (result.status === 200) {
        return result.json();
      }
    })
    .then(function(value) {
      console.log(value);
    })
    .catch(function(error) {
      console.log(error);
    });

  // function hiddenFunction() {
  //   let hiddenContent = document.getElementById("hiddenContent");
  //   if (hiddenContent.style.visibility === "hidden") {
  //     hiddenContent.style.visibility = "visible";
  //   } else {
  //     hiddenContent.style.visibility = "hidden";
  //   }
  // }

  let dateTarget = new Date("Dec 15, 2021 16:00:00").getTime();
  let x = setInterval(function() {
    let actualDate = new Date().getTime();
    let distance = dateTarget - actualDate;
    // console.log(dateTarget);
    // console.log(actualDate);
    // console.log(distance);
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("showTimer").innerHTML = `<div class="timer2">${days}<br> jours</div><div class="timer2">${hours}<br> heures</div><div class="timer2">${minutes}<br> minutes</div><div class="timer2">${seconds}<br> secondes</div>`;

    if (distance < 0) {
      clearInterval(x);
      document.getElementById("showTimer").innerHTML =
        "Ouvrez vos cadeaux !!!";
    }
  }, 1000);

  // onclick.switchBackground() {

  // }
</script>
<script src="./theme1.js" <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>