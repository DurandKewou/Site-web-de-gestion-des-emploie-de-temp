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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?php 
if (isset($_POST['aller'])){
	$classe=$_POST['classe'];
	// Si vide
	if (empty($classe)){ die ("<center><h2 style='color:#F00'>VOUS DEVEZ CHOISIR UNE CLASSE ! </h2><a href='emploi_modifier.php'>Retour </a></center>");}
	// Execution
?>
<title>Création de l'emploi du temps pour la classe de <?php echo $classe; ?></title>
<center>CREATION DE L'EMPLOI DU TEMPS POUR LA CLASSE DE: <b><?php echo $classe; ?></b></center>
<form action="emploi_update.php" method="post">
<table width="800" border="1" align="center" bgcolor="#FFCC00">
  <tr bgcolor="#CCCCCC">
    <th scope="col" class="couleur_libelle">HEURES/JOURS</th>
    <th scope="col" class="couleur_haut">LUNDI</th>
    <th scope="col" class="couleur_haut">MARDI</th>
    <th scope="col" class="couleur_haut">MERCREDI</th>
    <th scope="col" class="couleur_haut">JEUDI</th>
    <th scope="col" class="couleur_haut">VENDREDI</th>
    <th scope="col" class="couleur_haut">SAMEDI</th>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure1">
    <option value="07h30-8h00">07h30-8h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_1_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_1_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_1_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_1_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_1_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_1_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
 <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure2">
    <option value="8h00-9h00">8h00-9h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_2_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_2_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_2_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_2_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_2_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_2_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure3">
    <option value="9h00-10h00">9h00-10h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_3_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_3_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_3_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_3_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_3_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_3_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure4">
    <option value="10h00-11h00">10h00-11h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_4_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_4_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_4_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_4_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_4_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_4_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure5">
    <option value="11h00-12h00">11h00-12h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_5_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_5_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_5_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_5_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_5_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_5_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure6">
    <option value="12h00-13h00">12h00-13h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_6_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_6_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_6_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_6_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_6_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_6_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure7">
    <option value="13h00-14h00">13h00-14h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_7_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_7_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_7_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_7_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_7_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_7_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure8">
    <option value="14h00-15h00">14h00-15h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_8_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_8_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_8_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_8_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_8_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_8_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure9">
    <option value="15h00-16h00">15h00-16h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_9_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_9_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_9_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_9_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_9_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_9_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure10">
    <option value="16h00-17h00">16h00-17h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_10_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_10_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_10_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_10_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_10_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_10_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure11">
    <option value="17h00-18h00">17h00-18h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_11_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_11_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_11_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_11_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_11_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_11_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <tr>
    <th scope="row" class="couleur_gauche">
	<select name="heure12">
    <option value="18h30-19h00">18h30-19h00</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_heure LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></th>
    <td><select name="matiere_12_lundi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_12_mardi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_12_mercredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_12_jeudi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_12_vendredi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
    <td><select name="matiere_12_samedi">
    <option value="">Matière</option>
<?php $data = mysql_query("SELECT * FROM $tbl_emploi_matiere LIMIT 0 , 100") or die(mysql_error());?>
<?php while($info = mysql_fetch_array( $data )) { ?>
<option value="<?php echo $info['e_matiere'] ;?>"><?php echo $info['e_matiere'] ;?></option>
<?php } ?>
    </select></td>
  </tr>
</table>
<center><br /><br />
<input type="hidden" value="<?php echo $classe; ?>" name="classe" />
<input type="submit" value="Mettre à jour" name="ajour" />
</form>
<br /><br />
<a href="emploi_modifier.php">Retour aux choix des classes</a></center>
<?php
exit;
// fin condition aller
}

?>
<title>Choisisser la classe (Emploi du temps)</title>
<center>
<h2>MODIFICATION D'UN EMPLOI DU TEMPS</h2>
<strong>Selectionner classe</strong><br />
<form action="emploi_modifier.php" method="post">
<select name="classe">
    <option value="">------ Choisissez une classe --------</option>
    <?php 
// DEBUT CLASSE
$data = mysql_query("SELECT * FROM $tbl_classes WHERE valeur=1 LIMIT 0 , 100") 
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
<input type="submit" value="Afficher l'emploi du temps" name="aller" />
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