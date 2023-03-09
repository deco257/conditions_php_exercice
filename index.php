<?php
/**
 * le fichier d exercices editer 
 */
if(isset($_POST['send'])){
    if(!empty($_POST['nom'] )AND !empty($_POST['username']  )  and !empty($_POST['email'])
    AND !empty($_POST['mdp']) AND !empty($_POST['pdm'])){

     $email_a=$_POST['email'];
     $mdp=$_POST['mdp'];
     $nom=$_POST['nom'];

if(strlen($_POST['nom'])<5){
    $erreur="desolle le nom doit avoir cinq caractere";
}elseif(strlen($_POST['username'])<6){
$erreur="votre username ne doit pas  depasse  6 carractere";
}//elseif(filter_var($email_a,FILTER_VALIDATE_EMAIL)){
   // $erreur="votre mail n'est pas valide.$email_a";
//}
elseif($_POST['mdp']!=$_POST['pdm']){
$erreur="les mot de passe ne correspondent pas $nom ";
}else{
    $erreur="felicitations mr/mme.$nom";
}
    }else{
        $erreur="completer tous les champs...";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <form action="" method="POST">
    <center id="title">FORM USER</center>
   <center id="error"> <?php if(isset($erreur)):?>
        <?php echo $erreur?>
        <?php endif?>
        </center><br>
        <input type="text" placeholder="nom" name="nom"><br>
        <input type="text" placeholder="username" name="username"><br>
        <input type="email" placeholder="email.." name="email"><br>
        <input type="password" placeholder="mot de passe" name="mdp"><br>
        <input type="password" placeholder="confirmation mot de passe" name="pdm"><br>
        <input type="submit" value="envoyer" name="send">
    </form> <br>
</body>
<style>
    #title{
        font-size: 25px;
        font-weight: bolder;
    }
    form{
        display: flex;
        flex-direction: column;
        width: 60%;
        margin-top: 10%;
        border: 1px  solid #ccc;
       box-shadow: 10px 20px 20px 0 #ddd;
        margin-left: 200px;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"]{
        height: 30px;
        width: 70%;
        margin-left: 9%;
        outline: none;
        padding:5px 0 5px 0;
        border: none;
        border-bottom: 1px solid black;
    }
    input[type="submit"]{
     width: 50%;
        height: 30px;
        background: green;
        bottom: 100px;
        margin-left: 22%;
    }
    #error{
        background:red;
        height: 40px;
        color: white;
        font-weight: bolder;
        font-size: 22px;
    }
</style>
</html>