<html>
<head>
<title>Exo 1</title>
</head>
 
<h1> 
<?php
function afficher_titre ($nom_produit)
{echo "fiche produit : $nom_produit";}
?>
</h1>
 
<?php
function fiche_produit ($couleur, $prix)
{echo "couleur: $couleur, prix: $prix";
}
?>
</p>
 
<p>
<?php
function affichage($nom_produit, $couleur, $prix, $disponible)
{if ($disponible== true) echo $nom_produit,$couleur,$prix;
if ($disponible== false) echo "Le produit ".$nom_produit." n'est malheuresement plus disponible";}
?>
</p> 
</html>