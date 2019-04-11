<?php include '../views/partials/header.php' ?>

<?php 
$urlNatif = URL.'club?';

$adresse = "http://".$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER["REQUEST_URI"];
$_SESSION['adresse'] = $adresse;
$newAdress = $_SESSION['adresse'];

$nbLeagueChara = strlen($newAdress) - strlen($urlNatif);

$leagueName = substr($newAdress, strlen($urlNatif), $nbLeagueChara);  

echo '<pre>';
print_r($leagueName);
echo '</pre>';
?>


<?php include '../views/partials/footer.php' ?>
