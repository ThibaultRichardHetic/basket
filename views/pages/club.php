<?php include '../views/partials/header.php' ?>

<?php 






$myStr = URL.'club?';

echo '<pre>';
print_r($myStr);
echo '</pre>';






$adresse = "http://".$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER["REQUEST_URI"];
$_SESSION['adresse'] = $adresse;
$newAdress = $_SESSION['adresse'];

echo '<pre>';
print_r($newAdress);
echo '</pre>';

$nbChara = strlen($myStr) - strlen($newAdress);

$rest = substr("abcdef", 2, -1);  // retourne "cde"

echo($rest);

echo '<pre>';
print_r($nbChara);
echo '</pre>';

$rip = substr($newAdress, $nbChara, -1);  

echo($rip);

echo '<pre>';
print_r($rip);
echo '</pre>';


?>


<?php include '../views/partials/footer.php' ?>
