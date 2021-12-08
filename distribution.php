<?PHP
//require
require "ressources.php";
//connection
$mysqli = new mysqli($servername, $username, $password, $database);
//controle_connection
/*
if ($mysqli->connect_errno) print "Echec lors de la connexion à MySQL<br> \n";
else                        print "Base de données prête <br>\n"; 
*/
//

$query = "select * from donneur";
$result = $mysqli->query($query);
$total = mysqli_num_rows($result);
$tableau_non_melanger = [];
if ($total > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $nom_non_melanger = $row['nom'];
        $tableau_non_melanger[] = $nom_non_melanger;
    }
}
//

$query = "select * from donneur";
$result = $mysqli->query($query);
$total = mysqli_num_rows($result);
$tableau_melanger = [];
if ($total > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $nom_melanger = $row['nom'];
        $tableau_melanger[] = $nom_melanger;
    }
}

shuffle($tableau_melanger);
while ($tableau_non_melanger[0] === $tableau_melanger[0]) {
    shuffle($tableau_melanger);
    shuffle($tableau_non_melanger);
}

//$c = array_combine($tableau_non_melanger, $tableau_melanger);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="distibution.css" />
</head>

<body>

    <script>
        <?php
        print("let tab = {\n");
        while (count($tableau_melanger)) {

            while ($tableau_melanger[0] == $tableau_non_melanger[0]) {
                shuffle($tableau_melanger);
            }
            print("'$tableau_melanger[0]' : '$tableau_non_melanger[0]',\n");
            array_shift($tableau_non_melanger);
            array_shift($tableau_melanger);
        }
        print("};\n");


        ?>

        function change() {

            let donne = document.getElementById("donne");
            let recoit = document.getElementById("recoit");

            donne.innerHTML = "dddd";
            recoit.innerHTML = "dddd";

        }
    </script>
    <div class="container">
        <div class="row">
            <div class="mx-auto donne" id="donne"></div>
        </div>
        <div class="row">
            <div class="fleche mx-auto"></div>
        </div>
        <div class="row">
            <div class="mx-auto recois " id="recoit"></div>
        </div>
        <div class="row" onclick="change()">
            <button class="mx-auto">autre</button>
        </div>
        <div class="row">
            <div class="mx-auto text">distribution cadeaux</div>
        </div>

    </div>
</body>

</html>