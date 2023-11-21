<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$qte= 25;
// if($qte<50){
//     echo "Prix = 5e/pc ";
// }else{
//     if($qte>100){
//         echo "Prix = 3€/pc";
//     }else{
//         echo "Prix = 4€/pc";
//     }
// }
switch(true){
    case $qte<50 :
        echo"Prix=5€/Pc";
        break;
    case $qte>100 :
        echo"Prix=3€/Pc";
        break;
    default: 
    echo "Prix= 4€/Pc";
}?>
 

</body>
</html>