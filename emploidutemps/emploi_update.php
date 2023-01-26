<?php include('../variable/config.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>
<?php 
if (isset($_POST['ajour'])){
	$classe=htmlentities(addslashes($_POST['classe']));
	$set="emploi_";
	$all="$set$classe";
	
	////////////////////////////////////////////////
	$heure1=$_POST['heure1'];
	$matiere_1_lundi=$_POST['matiere_1_lundi'];
	$matiere_1_mardi=$_POST['matiere_1_mardi'];
	$matiere_1_mercredi=$_POST['matiere_1_mercredi'];
	$matiere_1_jeudi=$_POST['matiere_1_jeudi'];
	$matiere_1_vendredi=$_POST['matiere_1_vendredi'];
	$matiere_1_samedi=$_POST['matiere_1_samedi'];
	//////////////////////////////////////////////////
	$heure2=$_POST['heure2'];
	$matiere_2_lundi=$_POST['matiere_2_lundi'];
	$matiere_2_mardi=$_POST['matiere_2_mardi'];
	$matiere_2_mercredi=$_POST['matiere_2_mercredi'];
	$matiere_2_jeudi=$_POST['matiere_2_jeudi'];
	$matiere_2_vendredi=$_POST['matiere_2_vendredi'];
	$matiere_2_samedi=$_POST['matiere_2_samedi'];
	///////////////////////////////////////////////////
	$heure3=$_POST['heure3'];
	$matiere_3_lundi=$_POST['matiere_3_lundi'];
	$matiere_3_mardi=$_POST['matiere_3_mardi'];
	$matiere_3_mercredi=$_POST['matiere_3_mercredi'];
	$matiere_3_jeudi=$_POST['matiere_3_jeudi'];
	$matiere_3_vendredi=$_POST['matiere_3_vendredi'];
	$matiere_3_samedi=$_POST['matiere_3_samedi'];
	////////////////////////////////////////////////////
	$heure4=$_POST['heure4'];
	$matiere_4_lundi=$_POST['matiere_4_lundi'];
	$matiere_4_mardi=$_POST['matiere_4_mardi'];
	$matiere_4_mercredi=$_POST['matiere_4_mercredi'];
	$matiere_4_jeudi=$_POST['matiere_4_jeudi'];
	$matiere_4_vendredi=$_POST['matiere_4_vendredi'];
	$matiere_4_samedi=$_POST['matiere_4_samedi'];
	//////////////////////////////////////////////////////
	$heure5=$_POST['heure5'];
	$matiere_5_lundi=$_POST['matiere_5_lundi'];
	$matiere_5_mardi=$_POST['matiere_5_mardi'];
	$matiere_5_mercredi=$_POST['matiere_5_mercredi'];
	$matiere_5_jeudi=$_POST['matiere_5_jeudi'];
	$matiere_5_vendredi=$_POST['matiere_5_vendredi'];
	$matiere_5_samedi=$_POST['matiere_5_samedi'];
	///////////////////////////////////////////////////
	$heure6=$_POST['heure6'];
	$matiere_6_lundi=$_POST['matiere_6_lundi'];
	$matiere_6_mardi=$_POST['matiere_6_mardi'];
	$matiere_6_mercredi=$_POST['matiere_6_mercredi'];
	$matiere_6_jeudi=$_POST['matiere_6_jeudi'];
	$matiere_6_vendredi=$_POST['matiere_6_vendredi'];
	$matiere_6_samedi=$_POST['matiere_6_samedi'];
	////////////////////////////////////////////////////
	$heure7=$_POST['heure7'];
	$matiere_7_lundi=$_POST['matiere_7_lundi'];
	$matiere_7_mardi=$_POST['matiere_7_mardi'];
	$matiere_7_mercredi=$_POST['matiere_7_mercredi'];
	$matiere_7_jeudi=$_POST['matiere_7_jeudi'];
	$matiere_7_vendredi=$_POST['matiere_7_vendredi'];
	$matiere_7_samedi=$_POST['matiere_7_samedi'];
	////////////////////////////////////////////////////
	$heure8=$_POST['heure8'];
	$matiere_8_lundi=$_POST['matiere_8_lundi'];
	$matiere_8_mardi=$_POST['matiere_8_mardi'];
	$matiere_8_mercredi=$_POST['matiere_8_mercredi'];
	$matiere_8_jeudi=$_POST['matiere_8_jeudi'];
	$matiere_8_vendredi=$_POST['matiere_8_vendredi'];
	$matiere_8_samedi=$_POST['matiere_8_samedi'];
	////////////////////////////////////////////////////
	$heure9=$_POST['heure9'];
	$matiere_9_lundi=$_POST['matiere_9_lundi'];
	$matiere_9_mardi=$_POST['matiere_9_mardi'];
	$matiere_9_mercredi=$_POST['matiere_9_mercredi'];
	$matiere_9_jeudi=$_POST['matiere_9_jeudi'];
	$matiere_9_vendredi=$_POST['matiere_9_vendredi'];
	$matiere_9_samedi=$_POST['matiere_9_samedi'];
	/////////////////////////////////////////////////////
	$heure10=$_POST['heure10'];
	$matiere_10_lundi=$_POST['matiere_10_lundi'];
	$matiere_10_mardi=$_POST['matiere_10_mardi'];
	$matiere_10_mercredi=$_POST['matiere_10_mercredi'];
	$matiere_10_jeudi=$_POST['matiere_10_jeudi'];
	$matiere_10_vendredi=$_POST['matiere_10_vendredi'];
	$matiere_10_samedi=$_POST['matiere_10_samedi'];
	/////////////////////////////////////////////////////
	$heure11=$_POST['heure11'];
	$matiere_11_lundi=$_POST['matiere_11_lundi'];
	$matiere_11_mardi=$_POST['matiere_11_mardi'];
	$matiere_11_mercredi=$_POST['matiere_11_mercredi'];
	$matiere_11_jeudi=$_POST['matiere_11_jeudi'];
	$matiere_11_vendredi=$_POST['matiere_11_vendredi'];
	$matiere_11_samedi=$_POST['matiere_11_samedi'];
/// SI VIDE
	if (empty($heure1) || empty($heure2) || empty($heure3) || empty($heure4) || empty($heure5) || empty($heure6) || empty($heure7) || empty($heure8) || empty($heure9) || empty($heure10) || empty($heure11)) { die ("<center><h2>VEUILLEZ CHOISIR LES HEURES</h2></center>");}
///// VIDAGE DE L'EMPLOI DU TEMPS
$sql="TRUNCATE $all";
$setover=mysql_query($sql);
if ($setover) { echo "<center> <h3 style='color:yellowgreen';>L'emploi du temps à été initialisé </h3></center>";} else { 
echo "<center> <h3>Impossible d'initialiser l'emploi du temps de la classe de $classe</h3></center>";}
///// INSERTION DANS L'EMPLOI DU TEMPS
//$sql="UPDATE $classe SET ";
}
// Insertion de l'empoi du temps
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure1."', '".$matiere_1_lundi."', '".$matiere_1_mardi."', '".$matiere_1_mercredi."', '".$matiere_1_jeudi."', '".$matiere_1_vendredi."', '".$matiere_1_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure2."', '".$matiere_2_lundi."', '".$matiere_2_mardi."', '".$matiere_2_mercredi."', '".$matiere_2_jeudi."', '".$matiere_2_vendredi."', '".$matiere_2_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure3."', '".$matiere_3_lundi."', '".$matiere_3_mardi."', '".$matiere_3_mercredi."', '".$matiere_3_jeudi."', '".$matiere_3_vendredi."', '".$matiere_3_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure4."', '".$matiere_4_lundi."', '".$matiere_4_mardi."', '".$matiere_4_mercredi."', '".$matiere_4_jeudi."', '".$matiere_4_vendredi."', '".$matiere_4_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure5."', '".$matiere_5_lundi."', '".$matiere_5_mardi."', '".$matiere_5_mercredi."', '".$matiere_5_jeudi."', '".$matiere_5_vendredi."', '".$matiere_5_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure6."', '".$matiere_6_lundi."', '".$matiere_6_mardi."', '".$matiere_6_mercredi."', '".$matiere_6_jeudi."', '".$matiere_6_vendredi."', '".$matiere_6_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure7."', '".$matiere_7_lundi."', '".$matiere_7_mardi."', '".$matiere_7_mercredi."', '".$matiere_7_jeudi."', '".$matiere_7_vendredi."', '".$matiere_7_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure8."', '".$matiere_8_lundi."', '".$matiere_8_mardi."', '".$matiere_8_mercredi."', '".$matiere_8_jeudi."', '".$matiere_8_vendredi."', '".$matiere_8_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure9."', '".$matiere_9_lundi."', '".$matiere_9_mardi."', '".$matiere_9_mercredi."', '".$matiere_9_jeudi."', '".$matiere_9_vendredi."', '".$matiere_9_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure10."', '".$matiere_10_lundi."', '".$matiere_10_mardi."', '".$matiere_10_mercredi."', '".$matiere_10_jeudi."', '".$matiere_10_vendredi."', '".$matiere_10_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}
////////////////////////////////////////////////////////////////
$sql="INSERT INTO $all (heure, lundi, mardi, mercredi, jeudi, vendredi, samedi) VALUES ('".$heure11."', '".$matiere_11_lundi."', '".$matiere_11_mardi."', '".$matiere_11_mercredi."', '".$matiere_11_jeudi."', '".$matiere_11_vendredi."', '".$matiere_11_samedi."')";
$result=mysql_query($sql);
if ($result){ echo"Modification effectuée<br>";} else { die ("Impossible de modifier l'empoi du temps");}

?>

<body>
</body>
</html>