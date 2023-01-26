<?php include ('../variable/variable.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php 
$sql="CREATE TABLE `emploi_5e` (`id` int(11) NOT NULL auto_increment, `heure` varchar(29) NOT NULL, `lundi` varchar(29) NOT NULL, `mardi` varchar(29) NOT NULL, `mercredi` varchar(29) NOT NULL, `jeudi` varchar(29) NOT NULL, `vendredi` varchar(29) NOT NULL, `samedi` varchar(29) NOT NULL, PRIMARY KEY  (`id`)) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;";
$result=mysql_query($sql);
if ($result){ die ("OK BIEN");} else { die ("NON PAS BON");}

?>
</body>
</html>