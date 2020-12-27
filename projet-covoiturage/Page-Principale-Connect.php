<?php
session_start();
$bdd=new PDO('mysql:host=127.0.0.1;dbname=covoiturage','root','Programmation99');
if(isset($_GET['id']) AND $_GET['id']>0)
{
$getid=intval($_GET['id']);
$reqUser=$bdd->prepare("SELECT * FROM membre WHERE id=?");
$reqUser->execute(array($getid));
$userInfo=$reqUser->fetch();
?>
<html>
    <head>
    <title > Covoiturons !!</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="test.css">
    </head>
    <body>
        <div class="header">
<img src="../logo-covoiturage2.png" id="logo-covoiturage">
            <ul>
                <li><a href="Page-Principale-Connect.php"><img src="images/home-Icon.png" style="width: 20px; height: 20px;"> Home</a></li>
                <li><img src="images/connexion-Icon.png" style="width: 20px; height: 20px; margin-top:31px; margin-left:20px;"><b>PROFIL DE <?php echo $userInfo['pseudo']; ?></b></li>
              </ul>
        </div>

        <div class="main">
            <pre>
                <p id="presentation" style="color:rgb(0, 0, 0);">   
                    




                    
            Vous aimez vous deplacez, vous aimez voyager par route mais les moyens de transport vous compliquent la tâche? Prix élevé? Plus de places? Grèves?
                     


                      Alors c'est le moment pour vous lancer dans le covoiturage qui est plus simple, plus convivial et surtout plus ECONOMIQUE! 
                        


            Soyez-sûrs que vous ne regreteriez jamais ce choix car notre site est là pour vous aider, et pour vous proposer les meilleurs services de covoiturage.</p>
                    </pre>
            
                        
          <a href="Page-Reservation.html">  <button class="btn" type="submit">Rechercher un trajet</button></a>
          <a href="Proposition-Traget.php"><button class="btn" type="submit">Proposer un trajet</button></a>
           
            

        </div>

        <div class="footer">
            <div class="footerLeft">
                <pre>          
        <b>Contact us :</b><br>
             <b>Tel :</b> +213 558794256 <br>
             <b>Email :</b> raouianybel@gmail.com
          
        </pre>
            </div>
    <div class="footerRight">  
        <a href="http://facebook.com" target="_blank"><img src="images/fb-Icon.png"  style="width: 30px; height: 30px;" class="socialMedia"></a><br>
        <a href="http://instagram.com" target="_blank"><img src="images/insta-Icon.png" style="width: 30px; height: 30px;" class="socialMedia"></a><br>
        <a href="http://linkedin.com" target="_blank"><img src="images/linkedIn-Icon.png" style="width: 30px; height: 30px;" class="socialMedia"></a>
        
</div>
</div>
</div>
<?php 
}
?>
</body>

</html>
