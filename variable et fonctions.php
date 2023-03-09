<?php
/**
 * fichier exercice pour les variables php fonctions
 */


//l ulisation de la var_export va nous aidez a retournez se trouvant dans la variables donnees
//l utilisation de la var_dump va nous aidez a affichez les informations des la variable
//en dessous voyez comment declarez les tableaux
// le mot count il va nous aidez a compte les valeurs se trouvant dans la variables puis afficher le resultat en int
$a[1]=2;
$a[2]=12;
$a[3]=5;
var_dump(count($a));

//autre facon de declarez les tableaux en php
//$a=array("derrick","kazimushahara","burundi",25,5,20);
//var_dump($a);
//var_export($a);
//l'utilisation de isset donc ce mot va retounez la valeur true si la variable est definie ,au contaire il va retournez la valeur false
$var= "12";
if(empty($var)){
    echo"vous ne pouvez pas continuez"; 
    
}
else{
    echo"bienvenues sur notre chaine televiseur";
}
//voyez si la variable contient des valeurs il  va retournez la valeur boolenne true
//var_dump(isset($var))


//la fonction strlen nous aidez a calculez la taille de la variable 
//donc ces deux manieres d'utilisez strlen son simulaire
$nom="derick";
$longeur=strlen($nom);
if($longeur>3){
    echo'nom invalide';
}
var_dump($nom);
var_export($nom);
if(strlen($nom)>4){
echo'vous avez perdu votre chemin';
}


?>