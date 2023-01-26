 <?php 
//  include ('../variable/variable.php');
 ?> 
 <?php 
//    session_start();  
//    if (!isset($_SESSION['login'])) { 
//       header ('Location: ../index.php#prof'); 
//       exit();  
//    } 
// $log=''.$_SESSION['login'].'';
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
<title>Création d'emploi du temps</title>
<style>
.couleur_gauche{background:#CCC;}
.couleur_haut{background:#CCC;}
.couleur_libelle{background:#FC0;}
</style>
</head>

<body>
<?php 
if (isset($_POST['choix'])){
	$classe=$_POST['classe'];
	
?>
<?php 
require('requette/requette_heure.php');
require('requette/requette_matiere.php');
?>
<strong>EMPLOIS DU TEMPS - Classe:</strong> <?php echo $classe; ?> | <a href="#" onclick="window.print();">Imprimer</a>
<table width="850" border="1">
  <tr>
    <th scope="col" class="couleur_libelle">HEURES/JOURS</th>
    <th scope="col" class="couleur_haut">LUNDI</th>
    <th scope="col" class="couleur_haut">MARDI</th>
    <th scope="col" class="couleur_haut">MERCREDI</th>
    <th scope="col" class="couleur_haut">JEUDI</th>
    <th scope="col" class="couleur_haut">VENDREDI</th>
    <th scope="col" class="couleur_haut">SAMEDI</th>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure1; ?></th>
    <td><?php echo $lundi1; ?></td>
    <td><?php echo $mardi1; ?></td>
    <td><?php echo $mercredi1; ?></td>
    <td><?php echo $jeudi1; ?></td>
    <td><?php echo $vendredi1; ?></td>
    <td><?php echo $samedi1; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure2; ?></th>
    <td><?php echo $lundi2; ?></td>
    <td><?php echo $mardi2; ?></td>
    <td><?php echo $mercredi2; ?></td>
    <td><?php echo $jeudi2; ?></td>
    <td><?php echo $vendredi2; ?></td>
    <td><?php echo $samedi2; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure3; ?></th>
    <td><?php echo $lundi3; ?></td>
    <td><?php echo $mardi3; ?></td>
    <td><?php echo $mercredi3; ?></td>
    <td><?php echo $jeudi3; ?></td>
    <td><?php echo $vendredi3; ?></td>
    <td><?php echo $samedi3; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure4; ?></th>
    <td><?php echo $lundi4; ?></td>
    <td><?php echo $mardi4; ?></td>
    <td><?php echo $mercredi4; ?></td>
    <td><?php echo $jeudi4; ?></td>
    <td><?php echo $vendredi4; ?></td>
    <td><?php echo $samedi4; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure5; ?></th>
    <td><?php echo $lundi5; ?></td>
    <td><?php echo $mardi5; ?></td>
    <td><?php echo $mercredi5; ?></td>
    <td><?php echo $jeudi5; ?></td>
    <td><?php echo $vendredi5; ?></td>
    <td><?php echo $samedi5; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure6; ?></th>
    <td><?php echo $lundi6; ?></td>
    <td><?php echo $mardi6; ?></td>
    <td><?php echo $mercredi6; ?></td>
    <td><?php echo $jeudi6; ?></td>
    <td><?php echo $vendredi6; ?></td>
    <td><?php echo $samedi6; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure7; ?></th>
    <td><?php echo $lundi7; ?></td>
    <td><?php echo $mardi7; ?></td>
    <td><?php echo $mercredi7; ?></td>
    <td><?php echo $jeudi7; ?></td>
    <td><?php echo $vendredi7; ?></td>
    <td><?php echo $samedi7; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure8; ?></th>
    <td><?php echo $lundi8; ?></td>
    <td><?php echo $mardi8; ?></td>
    <td><?php echo $mercredi8; ?></td>
    <td><?php echo $jeudi8; ?></td>
    <td><?php echo $vendredi8; ?></td>
    <td><?php echo $samedi8; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure9; ?></th>
    <td><?php echo $lundi9; ?></td>
    <td><?php echo $mardi9; ?></td>
    <td><?php echo $mercredi9; ?></td>
    <td><?php echo $jeudi9; ?></td>
    <td><?php echo $vendredi9; ?></td>
    <td><?php echo $samedi9; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure10; ?></th>
    <td><?php echo $lundi10; ?></td>
    <td><?php echo $mardi10; ?></td>
    <td><?php echo $mercredi10; ?></td>
    <td><?php echo $jeudi10; ?></td>
    <td><?php echo $vendredi10; ?></td>
    <td><?php echo $samedi10; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure11; ?></th>
    <td><?php echo $lundi11; ?></td>
    <td><?php echo $mardi11 ?></td>
    <td><?php echo $mercredi11; ?></td>
    <td><?php echo $jeudi11; ?></td>
    <td><?php echo $vendredi11; ?></td>
    <td><?php echo $samedi11; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure12; ?></th>
    <td><?php echo $lundi12; ?></td>
    <td><?php echo $mardi12; ?></td>
    <td><?php echo $mercredi12; ?></td>
    <td><?php echo $jeudi12; ?></td>
    <td><?php echo $vendredi12; ?></td>
    <td><?php echo $samedi12; ?></td>
  </tr>
</table>
---------------------------------------------------------------------------------------------------------------
<table width="850" border="1">
  <tr>
    <th scope="col" class="couleur_libelle">HEURES/JOURS</th>
    <th scope="col" class="couleur_haut">LUNDI</th>
    <th scope="col" class="couleur_haut">MARDI</th>
    <th scope="col" class="couleur_haut">MERCREDI</th>
    <th scope="col" class="couleur_haut">JEUDI</th>
    <th scope="col" class="couleur_haut">VENDREDI</th>
    <th scope="col" class="couleur_haut">SAMEDI</th>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure1; ?></th>
    <td><?php echo $lundi1; ?></td>
    <td><?php echo $mardi1; ?></td>
    <td><?php echo $mercredi1; ?></td>
    <td><?php echo $jeudi1; ?></td>
    <td><?php echo $vendredi1; ?></td>
    <td><?php echo $samedi1; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure2; ?></th>
    <td><?php echo $lundi2; ?></td>
    <td><?php echo $mardi2; ?></td>
    <td><?php echo $mercredi2; ?></td>
    <td><?php echo $jeudi2; ?></td>
    <td><?php echo $vendredi2; ?></td>
    <td><?php echo $samedi2; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure3; ?></th>
    <td><?php echo $lundi3; ?></td>
    <td><?php echo $mardi3; ?></td>
    <td><?php echo $mercredi3; ?></td>
    <td><?php echo $jeudi3; ?></td>
    <td><?php echo $vendredi3; ?></td>
    <td><?php echo $samedi3; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure4; ?></th>
    <td><?php echo $lundi4; ?></td>
    <td><?php echo $mardi4; ?></td>
    <td><?php echo $mercredi4; ?></td>
    <td><?php echo $jeudi4; ?></td>
    <td><?php echo $vendredi4; ?></td>
    <td><?php echo $samedi4; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure5; ?></th>
    <td><?php echo $lundi5; ?></td>
    <td><?php echo $mardi5; ?></td>
    <td><?php echo $mercredi5; ?></td>
    <td><?php echo $jeudi5; ?></td>
    <td><?php echo $vendredi5; ?></td>
    <td><?php echo $samedi5; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure6; ?></th>
    <td><?php echo $lundi6; ?></td>
    <td><?php echo $mardi6; ?></td>
    <td><?php echo $mercredi6; ?></td>
    <td><?php echo $jeudi6; ?></td>
    <td><?php echo $vendredi6; ?></td>
    <td><?php echo $samedi6; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure7; ?></th>
    <td><?php echo $lundi7; ?></td>
    <td><?php echo $mardi7; ?></td>
    <td><?php echo $mercredi7; ?></td>
    <td><?php echo $jeudi7; ?></td>
    <td><?php echo $vendredi7; ?></td>
    <td><?php echo $samedi7; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure8; ?></th>
    <td><?php echo $lundi8; ?></td>
    <td><?php echo $mardi8; ?></td>
    <td><?php echo $mercredi8; ?></td>
    <td><?php echo $jeudi8; ?></td>
    <td><?php echo $vendredi8; ?></td>
    <td><?php echo $samedi8; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure9; ?></th>
    <td><?php echo $lundi9; ?></td>
    <td><?php echo $mardi9; ?></td>
    <td><?php echo $mercredi9; ?></td>
    <td><?php echo $jeudi9; ?></td>
    <td><?php echo $vendredi9; ?></td>
    <td><?php echo $samedi9; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure10; ?></th>
    <td><?php echo $lundi10; ?></td>
    <td><?php echo $mardi10; ?></td>
    <td><?php echo $mercredi10; ?></td>
    <td><?php echo $jeudi10; ?></td>
    <td><?php echo $vendredi10; ?></td>
    <td><?php echo $samedi10; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure11; ?></th>
    <td><?php echo $lundi11; ?></td>
    <td><?php echo $mardi11 ?></td>
    <td><?php echo $mercredi11; ?></td>
    <td><?php echo $jeudi11; ?></td>
    <td><?php echo $vendredi11; ?></td>
    <td><?php echo $samedi11; ?></td>
  </tr>
  <tr>
    <th scope="row" class="couleur_gauche"><?php echo $heure12; ?></th>
    <td><?php echo $lundi12; ?></td>
    <td><?php echo $mardi12; ?></td>
    <td><?php echo $mercredi12; ?></td>
    <td><?php echo $jeudi12; ?></td>
    <td><?php echo $vendredi12; ?></td>
    <td><?php echo $samedi12; ?></td>
  </tr>
</table>

<?php
exit;
// FIN CONDITION 
} ?>

<h2>Selectionner une classe</h2>
<form action="creation.php" method="post">
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
<input type="submit" value="Afficher l'emploi du temps" name="choix" />
</form>

</body>
</html>
<?php 
}
// else
// {
// 	header ('Location: ../index.php#prof');
// }
?>