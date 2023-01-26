<?php include ('../variable/variable.php');?>
<?php 
   session_start();  
   if (!isset($_SESSION['login'])) { 
      header ('Location: ../index.php#prof'); 
      exit();  
   } 
$log=''.$_SESSION['login'].'';
?>
 <?php 
// CONDITION ADMIN
if (isset($_SESSION['login']) AND $_SESSION['login'] == $admin)
{
?>
<?php 
if (isset($_POST['creer'])){
	$classe=$_POST['classe'];
	$e_classe='emploi_'.$classe.'';
	// Verification si vide
	if (empty($classe)){ die ("<center><h2 style='color:#F00'>VOUS DEVEZ CHOISIR UNE CLASSE VALIDE </h2><a href='emploi_creer.php'>Retour</a></center>");}
// création de la table	
	$sql="CREATE TABLE `$e_classe` (`id` int(11) NOT NULL auto_increment, `heure` varchar(29) NOT NULL, `lundi` varchar(29) NOT NULL, `mardi` varchar(29) NOT NULL, `mercredi` varchar(29) NOT NULL, `jeudi` varchar(29) NOT NULL, `vendredi` varchar(29) NOT NULL, `samedi` varchar(29) NOT NULL, PRIMARY KEY  (`id`)) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;";
	
	$bien=mysql_query($sql);
	if ($bien){ echo "<center><h2 style='color:green'>L'EMPLOI DU TEMPS A BIEN ETE CREEE </h2></center>";}
	else { die ("<center><h2 style='color:#F00'>IMPOSSIBLE DE CREER L'EMPLOI DU TEMPS. </h2><a href='emploi_creer.php'>Retour</a></center>");}
		// Mise a jour pour le desactiver du choix
	$up="UPDATE $tbl_classes SET valeur=1 WHERE id_classe='$classe'";
	$result=mysql_query($up);
	if ($result){ echo "<center><h2 style='color:yellowgreen'>LA CLASSE A BIEN ETE MISE A JOUR! ! </h2></center>"; }
	else { echo "<center><h2 style='color:#F00'>La classe n'a pas été mise à jour. Elle sera toujours disponible dans le choix <br> N'oublier de signifier cela à votre Administrateur.</h2></center>";}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Création d'emploi du temps</title>
<style>
.couleur_gauche{background:#CCC;}
.couleur_haut{background:#CCC;}
.couleur_libelle{background:#FC0;}
</style>
</head>

<body>
<center>
<strong>Avant de créer un emploi du temps, vous devez choisir la classe. <br />Si la classe n'existe pas dans la liste ci-dessous,<br /> cela signifie que l'emploi du temps de la classe en question a deja été créé.<br /> Si cela est cas <a href="emploi_modifier.php">cliquez ici</a> pour le modifier, sinon continuer</strong><br />
<form action="emploi_creer.php" method="post">
<select name="classe">
    <option value="">------ Choisissez une classe --------</option>
    <?php 
// DEBUT CLASSE
$data = mysql_query("SELECT * FROM $tbl_classes WHERE valeur=0 LIMIT 0 , 100") 
or die(mysql_error());
?>
<?php
 //Puts it into an array 
 while($info = mysql_fetch_array( $data )) 
 { 
?>
                <option value="<?php echo $info['id_classe'] ;?>"><?php echo $info['id_classe'] ;?></option>
<?php
 }
 ?>
    </select>
<input type="submit" value="Créer l'emploi du temps" name="creer" />
</form>
</center>
</body>
</html>
<?php 
}
else
{
	header ('Location: ../index.php#prof');
}
?>