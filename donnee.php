<?php
    session_start();
    
    if(isset($_POST['submit'])){

        if(!empty($_POST['semestre']) || !empty($_POST['filiere']) || !empty($_POST['niveau']) ){
            $sem=$_POST['semestre'];
            $fil=$_POST['filiere'];
            $niv=$_POST['niveau'];

            include 'connect.php';
            $select1="INSERT INTO `semestre`( `nom_semestre`) VALUES ('$sem') ";
            $result1=mysqli_query($db,$select1);

            $select2="INSERT INTO `filiere`( `nom_filiere`) VALUES ('$fil')";
            $result2=mysqli_query($db,$select2);

            $select3="INSERT INTO `niveau`( `nom_niveau`) VALUES ('$niv')";
            $result3=mysqli_query($db,$select3);  
        }else{
            $erreur1='<div class="alert alert-danger col-sm-6 ml-5 mt-2">veuillez faire votre choix</div>';
        }

        if(!empty($_POST['ue']) || !empty($_POST['enseign']) || !empty($_POST['salle']) ||
        !empty($_POST['ue1']) || !empty($_POST['enseign1']) || !empty($_POST['salle1'])){

            $ue=$_POST['ue'];
            $enseign=$_POST['enseign'];
            $salle=$_POST['salle'];

            $ue1=$_POST['ue1'];
            $enseign1=$_POST['enseign1'];
            $salle1=$_POST['salle1'];

           
            include 'connect.php';

            $select="INSERT INTO `emploi_du_temps`( `ue`, `enseign`, `salle`, `ue1`, `enseign1`, `salle1`) VALUES ('$ue','$enseign','$salle','$ue1','$enseign1','$salle1')";
        
            $result=mysqli_query($db,$select);

            if($db->query($select) == TRUE){
                $erreur = '<div class="alert alert-success col-sm-6 ml-5 mt-2">emploi du temps cree avec success</div>';
            }else{
                $erreur = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">impossible de creer cette emploi du temps</div>';
            }   
        }else{
            $erreur = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">veuillez remplir tous les champs</div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emploi du temps</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- font awesome css -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custome css -->
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
    <!-- top navbar -->
    <!-- <nav class="navbar navbar-dark fixed-top
     bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" 
    href="dashboard.php"></a>SHIDOSHI CLUB</nav> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">PLANNING MAKER</a>
    </nav>
    
    <!-- start container -->
    <div class="container-fluid" style="margin-top:0;">
        <!-- start row -->
         <div class="row"> 
            <!-- start sidebar 1st column   -->
            <nav class="col-sm-2 bg-light sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link <?php if($PAGE == 'dashboard'){ echo 'active';}?> " href="dashboard.php">
                            <i class="fa fa-dashboard"></i>dashboard</a>
                        </li>

                        <li class="nav-item"><a class="nav-link active <?php if($PAGE == 'administrateur'){ echo 'active';}?>" href="administrateur.php">
                            <i class="fa fa-user"></i>administrateur</a>
                        </li>

                        <li class="nav-item"><a class="nav-link <?php if($PAGE == 'utilisateur'){ echo 'active';}?> " href="emploi.php">
                        <i class="fa fa-calendar" aria-hidden="true"></i>emploi du temps</a>
                        </li>

                        <li class="nav-item"><a class="nav-link " href="logout.php">
                            <i class="fa fa-sign-out"></i>deconnexion</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-sm-6 mt-5 mx-3">
                <h1 class="text-center">EMPLOI DU TEMPS</h1>
                <hr>
                <p>Nouveau emploie de temps</p>
                <?php if(isset($erreur1)){echo $erreur1; } ?>
                <form action="" method="post" enctype="multipart/form-data">
              <div class="d-flex justify-content-between">
                <div>
                    <select name="semestre" id="semestre">
                    <option value="" disabled selected>Choisissez un semestre</option>
                    <option  value="semestre1">semestre1</option>
                    <option  value="semestre2">semestre2</option>
                    </select>
                </div>
                    
                <div>
                    <select name="filiere" id="filiere">
                    <option value="" disabled selected>Choisissez une filiere</option>
                    <option value="ICT4D">ICT4D</option>
                    <option value="INFO">INFO</option>
                    </select>
                </div>

                <div>
                    <select name="niveau" id="niveau">
                        <option value="" disabled selected>Choisissez un niveau</option>
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                    </select>
                </div>
            </div>

            <div style="margin:10px;">
            <?php if(isset($erreur)){echo $erreur; } ?>
                    <table class="table table-striped table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Heures/Jours</th>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>7h30-9h30</td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue1" placeholder="code UE">
                                    <input type="text" name="enseign1" placeholder="nom enseignant">
                                    <input type="text" name="salle1" placeholder="salle">
                                </td>
                                <!-- <td>
                                    <input type="text" name="ue2" placeholder="code UE">
                                    <input type="text" name="enseign2" placeholder="nom enseignant">
                                    <input type="text" name="salle2" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue3" placeholder="code UE">
                                    <input type="text" name="enseign3" placeholder="nom enseignant">
                                    <input type="text" name="salle3" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue4" placeholder="code UE">
                                    <input type="text" name="enseign4" placeholder="nom enseignant">
                                    <input type="text" name="salle4" placeholder="salle">
                                </td> -->
                            </tr>

                            <!-- <tr>
                                <td>9h30-11h30</td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                            </tr>

                            <tr>
                                <td>11h30-13h30</td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                            </tr>

                            <tr>
                                <td>13h30-15h30</td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                                <td>
                                    <input type="text" name="ue" placeholder="code UE">
                                    <input type="text" name="enseign" placeholder="nom enseignant">
                                    <input type="text" name="salle" placeholder="salle">
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
                <input type="submit" name="submit" value="enregistrer" class="btn btn-primary btn-lg btn-block">
            </form>
            </div>   
           
            <!-- end sidebar 1st column -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->


    <!-- javascript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>