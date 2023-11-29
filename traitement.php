
<?php

try{
    $servername="localhost";
    $username="root";
    $mdepass="";

    $bd= new PDO("mysql:host=$servername;dbname=espace_utilisateurs",$username,$mdepass);
    $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo'ERROR'.$e->getMessage();
}

if(isset($_POST['ok'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $pseudo=$_POST['pseudo'];
    $email=$_POST['email'];
    $mdp=$_POST['pass'];
  
    $requete=$bd->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :pseudo, :email, :mdp)");
    $requete->execute(array(
        "nom"=>$nom,
        "prenom"=>$prenom,
        "pseudo"=>$pseudo,
        "email"=>$email,
        "mdp"=>$mdp
    ));

   echo'vous etes inscrit';
}


  
 



?>