<?php 

if(isset($_GET["param"]) && !empty($_GET["param"])){
    $content = htmlspecialchars($_GET["param"]);
}

$site_title="à propos";

require_once "data/people.php";
include "template/header.php"; 

?>

<h2>A propos de nous</h2>
<?php 
if(isset($content)) {
    echo "<p>" . $content . "</p>";
}

?>

<h3> l'équipe </h3>

<?php 

foreach ($people as $key => $value):
?>
    <p> Nom : <?php echo $value['name'] ?> " || Poste : " <?php echo $value['status'] ?></p>
    <a href='single.php?name=<?php echo$value["name"]?>'>voir</a>

<?php

endforeach 

?>

<?php include "template/footer.php"; ?>