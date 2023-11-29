
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incription en php</title>
</head>
<body>

<form action="traitement.php" method="post">
    <label for="nom">votre nom*</label>
    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required> 
    <br/> <br>
    <label for="prenom">votre prenom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prenom" required> 
    <br/> <br>
    <label for="pseudo">votre pseudo</label>
    <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre nom" required> 
    <br/> <br>
    <label for="email">votre email</label>
    <input type="email" name="email" id="email" placeholder="Entrez votre email" required> 
    <br/> <br>
    <label for="pass">votre mot de pass</label>
    <input type="password" name="pass" id="pass" placeholder="Entrez votre mot de pass" required> 
    <br/> <br>
    <input type="submit" value="m'inscrire" name="ok">



</form>
    


</body>
</html>