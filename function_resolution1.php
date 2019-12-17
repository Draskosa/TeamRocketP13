<?php

function selectionExo(){


$Resolution=array(1 => "Resolution1.php", 2=>"Resolution2.php");
$val=random_int(1,2);
include("../ressources/BanqueCorrigéResolution/$Resolution[$val]");

}
?>

