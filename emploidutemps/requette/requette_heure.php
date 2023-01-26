<?php 
// 1ere heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=1";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure1=$rows['e_matiere'];
// 2e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=2";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure2=$rows['e_matiere'];
// 3e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=3";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure3=$rows['e_matiere'];
// 4e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=4";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure4=$rows['e_matiere'];
// 5e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=5";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure5=$rows['e_matiere'];
// 6e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=6";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure6=$rows['e_matiere'];
// 7e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=7";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure7=$rows['e_matiere'];
// 8e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=8";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure8=$rows['e_matiere'];
// 9e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=9";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure9=$rows['e_matiere'];
// 10e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=10";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure10=$rows['e_matiere'];
// 11e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=11";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure11=$rows['e_matiere'];
// 12e heure
$requette="SELECT * FROM $tbl_emploi_heure WHERE id=12";
$result=mysql_query($requette);
$rows=mysql_fetch_array($result);
$heure12=$rows['e_matiere'];
?>