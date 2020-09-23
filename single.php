<?php 

$content ="rien à afficher";


$site_title="Single";
require "template/header.php"; 

?>

<h2>Vous avez cliqué sur : </h2>

<?php 

if(isset($_GET["name"]) && !empty($_GET["name"])) {
    echo htmlspecialchars($_GET["name"]);
}

?>

<a href="info.php?param=Dutextetransmisparurl">Voir les infos</a>

<?php include "template/footer.php"; ?>
