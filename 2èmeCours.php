<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP IF - ELSE</title>
</head>
<body>
    <h1>IF-ELSE</h1>
    <?php
    $nom=strtoupper("Daryl");
    // if($nom ==="DARYL"){
    //     echo "Bienvenue".$nom;
    // }
    // else{
    //     echo"Erreur nom : ".$nom;
    // }
    
    ?>
    <?php
    if($nom ==="DARYL"){
    ?>
    <h2>Bienvenue</h2>
    <?php
    }else{
    ?>
    <p>Erreurdenom</p>
    <?php } ?>
    <!-- Exemple de mix entre HTML et PHP -->
    
</body>
</html>