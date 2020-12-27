<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=covoiturage','root','Programmation99');

if(isset($_POST['inscription']))
{
    $pseudo=$_POST['inputLogin'];
$mail=$_POST['inputMail'];
$mdp=sha1($_POST['inputMdp']);
$mdp2=sha1($_POST['inputMdp2']);
   if(!empty($pseudo) AND !empty($mail) AND !empty($mdp))
   {
       $reqMail=$bdd->prepare("SELECT * FROM membre WHERE mail=?");
       $reqMail->execute(array($mail));
       $mailExist=$reqMail->rowCount();
       if($mailExist==0){
           
    if($mdp==$mdp2)
    {
      $insertMembre=$bdd->prepare("INSERT INTO membre(pseudo , mail, mdp) VALUES(?,?,?)");
      $insertMembre->execute(array($pseudo,$mail,$mdp));  
      $_SESSION['compteCree']="votre compte a bien été crée";
      header('Location: Connexion.php');
    }else
    {
    $error="Les 2 mdp ne correspondent pas !";
    }
}else
{
$error="@ mail déja utilisée";
}
   }else
   {
       $error="TOUS LES CHAMPS DOIVENT ETRE REMPLIS !";
       
   }
}
  ?>
<html>
    <head>
        <title>COVOITURAGE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styleForm.css">
    </head>
    <body>
<div id="main">
<script>
alert('<?php echo $error;?>');
</script>
<div class="mainForm">

<form action="" method="POST" >

Email <input type="email" value="" id="inputMail" class="inputForm" placeholder="exp.vous@gmail.com" name="inputMail"><br><br>      
Pseudo <input type="text" value="" id="inputLogin" class="inputForm" placeholder="Votre pseudo" name="inputLogin"><br><br><br>
Mot de passe <input type="password" placeholder="Votre mdp" id="inputMdp" class="inputForm" name="inputMdp"><br><br><br><br>
Confirmez votre MDP <input type="password" placeholder="Confirmez votre mdp" id="inputMdp2" class="inputForm" name="inputMdp2"><br><br>

<input type="submit" class="btn"  name="inscription" value="s'inscrire">
              


</form>

</div>

</div>