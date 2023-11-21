<?php
//  for($num=1;$num<=50;$num=$num+2){
//      echo $num."<br>";
// }
// ;
for ($num=0;$num<10;$num++){
         for($num2=0;$num2<=$num;$num2++){
       echo"*";    
     }   
    echo"<br>";
}
for ($num3=0;$num3<11;$num3++){
    for($num4=10;$num4>=$num3;$num4--){
   echo"*";
}
 echo "<br>";
}

 for ($num5=0;$num5<21;$num5++){
    if($num5<10){
    for($num6=0;$num6<=$num5;$num6++){
            echo"*";      
        } }
    elseif ($num5>=10){
    for($num7=21;$num7>$num5;$num7=$num7-1){
        echo"*";
    }  }
    else break
    ;        
echo "<br>";
    }
   
// for($mul=1; $mul<=10;$mul++){
//     echo "Table".$mul.":"."<br>";
//     for($mul2=1;$mul2<=10;$mul2++ ){
       
//         echo $mul."x".$mul2."=".$mul*$mul2."\n";
//         echo"<br>";
//     }
// echo "<br>";
// }

?>