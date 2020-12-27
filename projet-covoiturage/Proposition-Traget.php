<?php
session_start();
$bdd=new PDO('mysql:host=127.0.0.1;dbname=covoiturage','root','Programmation99');
if(isset($_POST['deposition']))
{
$depart=$_POST['depart'];
$destination=$_POST['destination'];
$nb_places=$_POST['nb-places'];
$dateDepart=$_POST['date'];
$heure=$_POST['heure'];
$prix=$_POST['prix'];
$telephone=$_POST['telephone'];
    if(!empty($depart) AND !empty($destination) AND !empty($nb_places) AND !empty($dateDepart) AND !empty($heure) AND !empty($prix) AND !empty($telephone))
    {
        $insertDeposition=$bdd->prepare("INSERT INTO deposition(depart , destination, nbPlaces,dateDepart,heure,prix,tel) VALUES(?,?,?,?,?,?,?)");        
        $insertDeposition->execute(array($depart,$destination,$nb_places,$dateDepart,$heure,$prix,$telephone));
        $error="BIEN ENREGISTRE !!";
    
    }
    else{
        $error="Y'a une erreur qlq part !";
    }
}
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
            <img src="images/logo-covoiturage.png" id="logo-covoiturage">
            <ul>
                
            <li><img src="images/connexion-Icon.png" style="width: 20px; height: 20px; margin-top:31px; margin-left:-50px;"><b>PROFIL DE <?php echo $userInfo['pseudo']; ?></b></li>
                <li><a href="Page-Principale.html" ><img src="images/home-Icon.png" style="width: 20px; height: 20px;"> Home</a></li>
                <li><a href="deconnexion.php"><img src="images/connexion-Icon.png" style="width: 20px; height: 20px; margin-top:2px; margin-left:20px;"> Se déconnecter</a></li>
              </ul>
        </div>
 
        <div class="main2">
   
            <form class="formReservation1" action="" method="POST" >
                <h3 style="margin-left:210px;">Ou voulez-vous aller et à quel prix ?</h3>
                <select class="inputReservation" name="depart">
                    <option selected>---DEPART---</option>
                    <option value='01 - Adrar' >01 - Adrar</option>
                    <option value='02 - Chlef' >02 - Chlef</option>
                    <option value='03 - Laghouat' >03 - Laghouat</option>
                    <option value='04 - Oum El Bouaghi' >04 - Oum El Bouaghi</option>
                    <option value='05 - Batna' >05 - Batna</option>
                    <option value='06 - Bejaia' >06 - Bejaia</option>
                    <option value='07 - Biskra' >07 - Biskra</option>
                    <option value='08 - Bechar' >08 - Bechar</option>
                    <option value='09 - Blida' >09 - Blida</option>
                    <option value='10 - Bouira' >10 - Bouira</option>
                    <option value='11 - Tamanrasset' >11 - Tamanrasset</option>
                    <option value='12 - Tebessa' >12 - Tebessa</option>
                    <option value='13 - Tlemcen' >13 - Tlemcen</option>
                    <option value='14 - Tiaret' >14 - Tiaret</option>
                    <option value='15 - Tizi Ouzou' >15 - Tizi Ouzou</option>
                    <option value='16 - Alger'>16 - Alger</option>
                    <option value='17 - Djelfa' >17 - Djelfa</option>
                    <option value='18 - Jijel' >18 - Jijel</option>
                    <option value='19 - Setif' >19 - Setif</option>
                    <option value='20 - Saida' >20 - Saida</option>
                    <option value='21 - Skikda' >21 - Skikda</option>
                    <option value='22 - Sidi Bel Abbes' >22 - Sidi Bel Abbes</option>
                    <option value='23 - Annaba' >23 - Annaba</option>
                    <option value='24 - Guelma' >24 - Guelma</option>
                    <option value='25 - Constantine' >25 - Constantine</option>
                    <option value='26 - Medea' >26 - Medea</option>
                    <option value='27 - Mostaganem' >27 - Mostaganem</option>
                    <option value='28 - MSila' >28 - MSila</option>
                    <option value='29 - Mascara' >29 - Mascara</option>
                    <option value='30 - Ouargla' >30 - Ouargla</option>
                    <option value='31 - Oran' >31 - Oran</option>
                    <option value='32 - Bayadh' >32 - Bayadh</option>
                    <option value='33 - Illizi' >33 - Illizi</option>
                    <option value='34 - Bordj Bou Arreridj' >34 - Bordj Bou Arreridj</option>
                    <option value='35 - Boumerdes' >35 - Boumerdes</option>
                    <option value='36 - El Tarf' >36 - El Tarf</option>
                    <option value='37 - Tindouf' >37 - Tindouf</option>
                    <option value='38 - Tissemsilt' >38 - Tissemsilt</option>
                    <option value='39 - El Oued' >39 - El Oued</option>
                    <option value='40 - Khenchela' >40 - Khenchela</option>
                    <option value='41 - Souk Ahras' >41 - Souk Ahras</option>
                    <option value='42 - Tipaza' >42 - Tipaza</option>
                    <option value='43 - Mila' >43 - Mila</option>
                    <option value='44 - Ain Defla' >44 - Ain Defla</option>
                    <option value='45 - Naama' >45 - Naama</option>
                    <option value='46 - Ain Temouchent' >46 - Ain Temouchent</option>
                    <option value='47 - Ghardaia' >47 - Ghardaia</option>
                    <option value='48 - Relizane' >48 - Relizane</option>
            </select>
                <br>
                <select class="inputReservation" name="destination" >
                    <option selected>---DESTINATION---</option>
                    <option value='01 - Adrar' >01 - Adrar</option>
                    <option value='02 - Chlef' >02 - Chlef</option>
                    <option value='03 - Laghouat' >03 - Laghouat</option>
                    <option value='04 - Oum El Bouaghi' >04 - Oum El Bouaghi</option>
                    <option value='05 - Batna' >05 - Batna</option>
                    <option value='06 - Bejaia' >06 - Bejaia</option>
                    <option value='07 - Biskra' >07 - Biskra</option>
                    <option value='08 - Bechar' >08 - Bechar</option>
                    <option value='09 - Blida' >09 - Blida</option>
                    <option value='10 - Bouira' >10 - Bouira</option>
                    <option value='11 - Tamanrasset' >11 - Tamanrasset</option>
                    <option value='12 - Tebessa' >12 - Tebessa</option>
                    <option value='13 - Tlemcen' >13 - Tlemcen</option>
                    <option value='14 - Tiaret' >14 - Tiaret</option>
                    <option value='15 - Tizi Ouzou' >15 - Tizi Ouzou</option>
                    <option value='16 - Alger'>16 - Alger</option>
                    <option value='17 - Djelfa' >17 - Djelfa</option>
                    <option value='18 - Jijel' >18 - Jijel</option>
                    <option value='19 - Setif' >19 - Setif</option>
                    <option value='20 - Saida' >20 - Saida</option>
                    <option value='21 - Skikda' >21 - Skikda</option>
                    <option value='22 - Sidi Bel Abbes' >22 - Sidi Bel Abbes</option>
                    <option value='23 - Annaba' >23 - Annaba</option>
                    <option value='24 - Guelma' >24 - Guelma</option>
                    <option value='25 - Constantine' >25 - Constantine</option>
                    <option value='26 - Medea' >26 - Medea</option>
                    <option value='27 - Mostaganem' >27 - Mostaganem</option>
                    <option value='28 - MSila' >28 - MSila</option>
                    <option value='29 - Mascara' >29 - Mascara</option>
                    <option value='30 - Ouargla' >30 - Ouargla</option>
                    <option value='31 - Oran' >31 - Oran</option>
                    <option value='32 - Bayadh' >32 - Bayadh</option>
                    <option value='33 - Illizi' >33 - Illizi</option>
                    <option value='34 - Bordj Bou Arreridj' >34 - Bordj Bou Arreridj</option>
                    <option value='35 - Boumerdes' >35 - Boumerdes</option>
                    <option value='36 - El Tarf' >36 - El Tarf</option>
                    <option value='37 - Tindouf' >37 - Tindouf</option>
                    <option value='38 - Tissemsilt' >38 - Tissemsilt</option>
                    <option value='39 - El Oued' >39 - El Oued</option>
                    <option value='40 - Khenchela' >40 - Khenchela</option>
                    <option value='41 - Souk Ahras' >41 - Souk Ahras</option>
                    <option value='42 - Tipaza' >42 - Tipaza</option>
                    <option value='43 - Mila' >43 - Mila</option>
                    <option value='44 - Ain Defla' >44 - Ain Defla</option>
                    <option value='45 - Naama' >45 - Naama</option>
                    <option value='46 - Ain Temouchent' >46 - Ain Temouchent</option>
                    <option value='47 - Ghardaia' >47 - Ghardaia</option>
                    <option value='48 - Relizane' >48 - Relizane</option>
            </select>
                <br>
                 <select class="inputReservation" name="nb-places">
                    <option selected>---Nombre de places---</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select><br>
                <input type="date"  class="inputReservation" name="date"><br>
                <input type="time" value="Heure" class="inputReservation" name="heure"><br>
                <input type="number" placeholder="Votre Prix en Dinars !" name="prix"class="inputReservation">
                <input type="Tel" placeholder="Votre numéro de téléphone !" name="telephone"class="inputReservation">
                <button class="btn" type="submit" name="deposition">Deposer</button>
            </form>
            
            <script>
alert('<?php echo $error;?>');
</script>
                        
         
            

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
</HTML>