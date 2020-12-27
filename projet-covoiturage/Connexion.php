<?php
session_start();
$bdd=new PDO('mysql:host=127.0.0.1;dbname=covoiturage','root','Programmation99');
 if(isset($_POST['formInscription'])){
    header("Location: Inscription.php");
} 
if(isset($_POST['formConnexion']))
{
    $mailConnect=$_POST['mailConnect'];
    $mdpConnect=sha1($_POST['mdpConnect']);
    if(!empty($mailConnect) AND !empty($mdpConnect))
    {
        $reqUser=$bdd->prepare("SELECT * FROM membre WHERE mail=? AND mdp=?");
        $reqUser->execute(array($mailConnect,$mdpConnect));
        $userExist=$reqUser->rowCount();
        if($userExist==1)
        {
            $userInfo=$reqUser->fetch();
            $_SESSION['id']=$userInfo['id'];
            $_SESSION['pseudo']=$userInfo['pseudo'];
            $_SESSION['mail']=$userInfo['mail'];
            header("Location:Proposition-Traget.php?id=".$_SESSION['id']);
            

        }else{
            $error="mail ou mot de passe incorrect ";
        }
        
    }else{
        $error="Tous les champs doivent être remplis !";
    }
}
?>
<html>
    <head>
        <title>COVOITURAGE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<div id="main">
<script>
alert('<?php echo $error;?>');
</script>
<div class="mainForm">
<form action="" method="POST" >

         
Mail <input type="email" value="" id="inputMail" class="inputForm" name="mailConnect"><br><br>

Mot de passe <input type="password" value="" id="inputMdp" class="inputForm" name="mdpConnect"><br><br><br>
<input type="submit" class="btn" name="formConnexion" value="se connecter">
<input type="submit" name="formInscription" class="btn" value="s'inscrire">


</form>

</div>
</div>

 
</body>
</html>