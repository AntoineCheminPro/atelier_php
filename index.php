<?php 

$content ="rien à afficher";

if(isset($_POST["content"]) && !empty($_POST["content"])) {
    $content = htmlspecialchars($_POST["content"]);
}

$site_title="index";
require "template/header.php"; 

?>

<h2>Bienvenue sur mon site</h2>

<section>
<div class="">
<form action="" method="post">
<p>Votre contenu : </p>
<input type="text" name="content">
<div>
<input type="submit" name="my_form" value="Envoyer">
</div>
</form>
</div>
<div class="">
<h4>Vous avez écrit :</h4>
<?php
echo $content;

?>
</div>

</section>
<a href="info.php?param=Dutextetransmisparurl">Voir les infos</a>

<?php include "template/footer.php"; ?>
