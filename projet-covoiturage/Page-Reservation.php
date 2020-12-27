
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
                <li><a href="Page-Principale.html"><img src="images/home-Icon.png" style="width: 20px; height: 20px;"> Home</a></li>
                <li><a href="Connexion.php"><img src="images/connexion-Icon.png" style="width: 20px; height: 20px;"> Connexion</a></li>
                <li><a href="Inscription.php"><img src="images/inscription-Icon.png" style="width: 20px; height: 20px;"> Inscription</a></li>
               
              </ul>
        </div>

        <div class="main2">
<form class="formReservation" action="" method="POST" >
                <h3 style="margin-left:260px;">Ou voulez-vous aller ?</h3>
                <select class="inputReservation" name="depart" >
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
                <select class="inputReservation" name="destination">
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
                <input type="date" placeholder="Date" class="inputReservation" name="date"><br>
                
                <button class="btn" type="submit" name="recherche">Rechercher</button>
            </form>
            <?php
$bdd=new PDO('mysql:host=127.0.0.1;dbname=covoiturage','root','Programmation99');
if(isset($_POST['recherche']))
{
$depart=$_POST['depart'];
$destination=$_POST['destination'];
$nb_places=$_POST['nb-places'];
$dateDepart=$_POST['date'];


 if(!empty($depart) AND !empty($destination) AND !empty($nb_places) AND !empty($dateDepart))
    
    { 
        
        $req=$bdd->prepare("SELECT * FROM deposition WHERE depart=? AND destination=? AND dateDepart=?");
        $req->execute(array($depart,$destination,$dateDepart));
        $NbreData = $req->rowCount();	// nombre d'enregistrements (lignes)
	    $rowAll = $req->fetchAll();
?>   
 
        <?php
        if ($NbreData != 0) 
        {
        ?>
            <table border="4" id="tableauRecherche">        
            <thead>
		<tr>
			
			<th>Depart</th>
            <th>Destination</th>
            <th>Nb-places</th>
			<th>Date</th>
			<th>Heure</th>
			<th>Prix</th>
            <th>Téléphone</th>
            
		</tr>
	</thead>
	<tbody>
    <?php
	// pour chaque ligne (chaque enregistrement)
	foreach ( $rowAll as $row ) 
	{
		// DONNEES A AFFICHER dans chaque cellule de la ligne
?>
		<tr >
			<td class="elementTab"><?php echo $row['depart']; ?></td>
			<td class="elementTab"><?php echo $row['destination']; ?></td>
            <td ><?php echo $row['nbPlaces']; ?></td>
			<td><?php echo $row['dateDepart']; ?></td>
            <td><?php echo $row['heure']; ?></td>
            <td><?php echo $row['prix']; ?></td>
            <td><?php echo $row['tel']; ?></td>
            
		</tr>
        <?php
	} // fin foreach
?>
	</tbody>
	</table>
    <?php
} else { ?>
<?php	$error= "pas de données à afficher";?>
<script>
alert('<?php echo $error;?>');
</script>

<?php
}
    
?>
<?php 
    }
}
    ?>


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

</body>

</html>