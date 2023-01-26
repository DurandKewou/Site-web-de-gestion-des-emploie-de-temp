<?php include ('../variable/variable.php');?>

<?php 
if (isset($_POST['connexion'])){
	
	$choix=htmlentities(trim($_POST['choix']));
	$valeur=htmlentities(trim($_POST['valeur']));
	if (empty($choix) || empty($valeur)) { die ("<center><h2 style='color:#F00'>VOUS DEVEZ RENSEIGNER TOUTES LES INFORMATIONS ! </h2><br><a href='emploi_parametre.php'>Retour</a></center>");}
	// VERIFICATION SI SA N'EXISTE PAS DEJA
$res = mysql_query("SELECT COUNT(*) AS cnt FROM $choix WHERE e_matiere = '$valeur'"); 
if(mysql_result($res, 0, 'cnt') > 0) { die ('<center><h2 style="color:#F00">CE LIBELLE: "'.$valeur.'" EST DEJA PRESENT.</h2><br><a href="emploi_parametre.php">Retour</a></center>');}
// INSERTION
	$sql="INSERT INTO $choix (e_matiere) VALUES ('".$valeur."')";
	$result=mysql_query($sql);
	if ($result){ echo'<center><h2 style="color:green"> BIEN AJOUTE! ! </h2><br><a href="emploi_parametre.php">Retour</a></center>';} else { echo'<center><h2 style="color:#F00">IMPOSSIBLE D\'AJOUTER ! </h2><br><a href="emploi_parametre.php">Retour</a></center>';}

				 }
				 else
				 {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<h2 align="center">PARAMETRAGE DE L'EMPLOI DU TEMPS</h2>
<center>
<strong>Que voulez-vous faire ?</strong>
<form action="emploi_parametre.php" method="post">
<select name="choix">
<option value="">------------------------Choissiser ---------------------</option>
<option value="emploi_heure">Ajouter une Heure dans l'emploi du temps</option>
<option value="emploi_matiere">Ajouter une Matière dans l'emploi du temps</option>
</select>
<br /><strong>Entrez la valeur du libéllé ci-dessus:</strong><br />
<input type="text" placeholder="Valeur" name="valeur" />
<input type="submit" value="Ajouter" name="connexion" />
</form>

<br /><br />
<h4>AIDE:</h4>
Ajouter une Heure dans l'emploi du temps Exemple: <strong>08h00-09h00</strong><br />
Ajouter une Matière dans l'emploi du temps Exemple: <strong>Anglais</strong>
</center><br />
<?php } ?>
</body>
</html>