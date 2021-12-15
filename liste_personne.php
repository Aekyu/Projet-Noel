<?PHP
//require
require "ressources.php";
//connection
$mysqli = new mysqli($servername, $username, $password, $database);
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
print(json_encode($tableau_non_melanger));
    while($row = mysqli_fetch_assoc($result)){
        $nom_non_melanger = $row;
        $tableau_non_melanger[] = $nom_non_melanger;
    }
echo json_encode($tableau_non_melanger);
?>
