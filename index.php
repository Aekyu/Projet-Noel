<?php
require_once "ressources.php";
// require_once "fonctions.php";

// entete("Inscription");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css" />
  <title>Page d'accueil</title>
</head>

<body class="container">
  <div class="container">
    <div id="hiddenContent">
      <div class="d-flex justify-content-center mt-5">
        <h1><span id="showTimer"></span></h1>
      </div>
      <div>
        <h3 class="text-center mt-3">Temps restant avant l'ouverture</h3>
      </div>
    </div>
    <div class="d-flex justify-content-center" id="fly">
      <div id="flyWindow" class="d-flex align-items-center">
        <div>
          <h1 id=" loginContent" class="text-center pb-3">Inscrivez-vous</h1>
          <form class="styleFondPage" action="#" method="POST">
            <div class="d-flex justify-content-center">
              <input class="user form-control w-75" type="text" name='pseudo' placeholder="Entrez votre pseudo">
            </div>
            <div class="d-flex justify-content-around mt-4">
              <a href="./index.php"><span type="submit" class="btn btn-secondary">Retour</span></a>
              <button class="styleBouton btn btn-secondary" type="submit">Valider</button>
            </div>
            <?php
            if ($_POST) {
              $pseudo = $_POST['pseudo'];

              $mysqli = new mysqli('localhost', 'root', '', 'projet_noel');

              $query  = "insert into donneur ( nom ) values ( '$pseudo' );";
              if ($mysqli->query($query)) {
                print('<div class="d-flex justify-content-center text-center"><p class="pt-4 w-75"> Merci ' . $pseudo . ' pour ton inscription !
                Entres, et tu découvriras à qui tu peux offrir ton cadeau</p></div>');
              }
              $mysqli->close();
            }
            ?>
          </form>
        </div>
      </div>
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

    let dateTarget = new Date("Dec 17, 2021 10:00:00").getTime();
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

      document.getElementById("showTimer").innerHTML =
        days + "j " + hours + "h " + minutes + "m " + seconds + "s ";

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("showTimer").innerHTML =
          "Ouvrez vos cadeaux !!!";
      }
    }, 1000);

    //
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>