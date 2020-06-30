<?php
$nom= "str1";
//$nom La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.
?>
<p> La chaîne <?php echo $nom ?> contient 
<?php
$str = 'La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.';
echo strlen($str); // sortie: 21
?> caractère</p>
 
<p> La chaîne <?php echo $nom ?> contient <?php 
$str="La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.";
echo str_word_count($str);
?>
 
<p> <?php 
$texteminuscule= strtolower($str);
echo $texteminuscule
?>
 
<p> <?php 
$textemajuscule= strtoupper($str);
echo $textemajuscule
?>
 
<p> <?php
$textmelange=str_shuffle($str);
echo $textmelange
?></p>
 
<p> <?php echo str_replace("la","LA");
?></p>
 
<p> <?php
echo substr("La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication");
?></p>