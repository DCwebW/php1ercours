<?php
// echo phpversion();

// echo phpinfo();

 $nom = "Daryl";//décalration d'une variable 
 $age = 31;
// echo "Nom du formateur :".$nom."<br>"."Age du formateur: ".$age;
$jour=date("d/m/y");

?>
<h1>Nom du formateur:<?php echo $nom?></h1>;
 <!-- Ici on rappelle la variable $nom; -->

<h2>Date = <?php echo $jour?></h2>;
<p>Age =<?php echo $age?></p>;
<?php 
// define("PI",3.1415); définition d'une constante en PhP
// echo PI."<br>";//Pour rappeler une variable const en PHP, le $ n'est pas nécessaire 
// echo M_PI."<br>";
// echo pi();
define("TVA",0.2);
// définition d'une constante en PHP
$prix_ht=10;
$prix_ttc= $prix_ht+($prix_ht*TVA);

?>
<p>Prix HT = <?php echo $prix_ttc?>€</p>