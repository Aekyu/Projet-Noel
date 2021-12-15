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
if($total > 0) {
    while($row = mysqli_fetch_array($result)){
        $nom_non_melanger = $row['nom'];
        $tableau_non_melanger[] = $nom_non_melanger;
    }
}
//

$query = "select * from donneur";
$result = $mysqli->query($query);
$total = mysqli_num_rows($result);
$tableau_melanger= [];
if($total > 0) {
    while($row = mysqli_fetch_array($result)){
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
$melanger = [];
$non_melanger = [];
while ( count( $tableau_melanger ) )
{

    while ($tableau_melanger[0] == $tableau_non_melanger[0] ) 
    {
        shuffle($tableau_melanger);
    }
    $melanger[] = $tableau_melanger[0];
    $non_melanger[] = $tableau_non_melanger[0];
    //print("$tableau_melanger[0] donne a $tableau_non_melanger[0]<br>");
    array_shift($tableau_non_melanger);
    array_shift($tableau_melanger);
}
$dict[ 'melanger' ] = $melanger;
$dict[ 'non_melanger' ] = $non_melanger;
print( json_encode( $dict ) );
?>
