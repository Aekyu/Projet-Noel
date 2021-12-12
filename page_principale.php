<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
    <title>Page d'accueil</title>
</head>

<body class="container">
    <div>
        <img id="tree" src="tree.png" alt="">
    </div>
    <div>
        <img id="pannel" src="pannel1.png" alt="">
    </div>
    <div>
        <img id="fond" src="fond_auto_x2.png" alt="">
    </div>
    <div id="timer" class="container">
        <div>
            <h3 class="text-center mt-3 text-light">Temps restant avant l'ouverture</h3>
        </div>
        <div id="hiddenContent">
            <div class="d-flex justify-content-center text-light">
                <h1><span id="showTimer"></span></h1>
            </div>
        </div>
    </div>

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

    <div>
        <a id="retourInscription" href="index.php"><button class="btn btn-secondary mx-2 mt-2">
                S'inscrire</button></a>
    </div>

    <div>
        <a id="tas" href="page_tas.php">Tirage au sort</a>
    </div>
    <script>
        let dateTarget = new Date("Dec 17, 2021 10:00:00").getTime();
        let x = setInterval(function() {
            let actualDate = new Date().getTime();
            let distance = dateTarget - actualDate;
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