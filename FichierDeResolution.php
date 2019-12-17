<?php
	$title="Création de fichier de Zone";
	include("../ressources/header.php");
	//include_once('../ressources/connectBDD.php');
	include_once('../ressources/function/fonction_utilisateur.php');
	require("../ressources/function/function_resolution1.php");
?>
<div class="container">
    <?php selectionExo(); ?>
</div>
<?php
	include("../ressources/footer.php");
?>
