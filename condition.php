<?php
$nombre=1;
$text="deco";
$j=5;
 //l\'utulisation de la boucle while
while($nombre<5 AND $text=="nombre"){

echo $text."_".$nombre++."<br>"."";
}
//utilisatiom]n de la boucle for  + la condition
for($nombre=1;$nombre<5;$nombre++){

if($nombre<1 and $text=="deco"){
   
    echo"erreur";
}
else{
   echo $text.$nombre."<br>";  
}

}



//la condition if//
$nom='deco';
$prenom='eloge';
$age=26;
$nationalite="burundinta";
if($age>25){
    echo'vous etes majeure'.'<br>';
    if($nationalite!="burundi") {
        echo'vous etes de l\'etranger'.'<br>';
    } else {
        echo'vous etes de l\'orgine burundaise'.'<br>';
    }
   if($prenom!="kazimushahara") {
       
        echo'vous vous es trompées de l\'adresse';

   } else {
    echo'vous reeelement derick'.'<br>';
        
   }
    
}


//utilisation de la boucle switch
$jrs=5;
switch($jrs){
    case 1: echo'lundi';break;
    case 2: echo'mardi';break;
    case 3: echo'mercredi';break;
    case 4: echo'jeudi';break;
    case 5: echo'vendredi';break;
    case 6: echo'samdei';break;
    case 7: echo'dimanche';break;
    default:echo'aucun jour correspondant a ce numero';break;
}

//utilsation des operation arithimetique
$n1=10;
$n2=20;
$n3="";
//premiere affichage
//echo 'voici les deux valeur:'."($n1,$n2)";
//dexieume affichage
echo'n1='.$n1.'<br>';
echo'n2='.$n2.'<br>';

//premiere opertaion
$n3=$n1+$n2;
echo 'somme='.$n1 .'+'. $n2.'='.$n3;
//deuxieme operation

$n3=$n1*$n2;
echo'la multipliocation de ces deux nombre est='.$n3;






?>