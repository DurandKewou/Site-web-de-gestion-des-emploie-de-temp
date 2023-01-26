<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emploie du temps</title>
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

                        <li class="nav-item"><a class="nav-link <?php if($PAGE == 'utilisateur'){ echo 'active';}?> " href="utilisateur.php">
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
                <?php
                        include 'connect.php';
                        
                        $query="SELECT  `nom_semestre`,`nom_filiere`,`nom_niveau` 
                        FROM `semestre`,`filiere`,`niveau`
                        WHERE semestre.id=filiere.semestre_id
                        AND filiere.id=niveau.filiere_id";
                        $result = $db->query($query);

                        if(!$result){
                            die("invalid query:" .$db->error);
                        }
                        while($row=$result->fetch_assoc()){
                            echo $row['nom_semestre'] ;
                            // echo $row['nom_filiere'] ;
                            // echo  $row['nom_niveau'] ; 
                        }

                        // $query2="SELECT  `nom_filiere` FROM `filiere`";
                        // $result2 = $db->query($query2);

                        // if(!$result2){
                        //     die("invalid query:" .$db->error);
                        // }
                        // while($row2=$result2->fetch_array()){
                        //     echo "<strong style='font-size:2rem;' >" .$row2['nom_filiere']. "-</strong>";
                        // }
                        
                        // $query3="SELECT  `nom_niveau` FROM `niveau`";
                        // $result3 = $db->query($query3);

                        // if(!$result3){
                        //     die("invalid query:" .$db->error);
                        // }
                        // while($row3=$result3->fetch_array()){
                        //     echo "<strong style='font-size:2rem;'>" .$row3['nom_niveau']. "</strong>"; 
                        // }
                    ?>
                
                <form action="" method="post" enctype="multipart/form-data">

            <div style="margin:10px;">
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
                            <?php
                                include 'connect.php';
                                
                                $sql="SELECT * FROM `emploi_du_temps`";
    
                                $result=$db->query($sql);

                                if(!$result){
                                    die("invalid query:" .$db->error);
                                }

                                
                                while($row=$result->fetch_array()){
                                    echo "
                                    <tr>
                                    <td>7h30-9h30</td>
                                    <td>
                                       $row[ue] <br>
                                       $row[enseign] <br>
                                        $row[salle]
                                    </td>
                                    <td>
                                       $row[ue1] <br>
                                       $row[enseign1] <br>
                                        $row[salle1]
                                    </td>
                                </tr>
                                    ";
                                }

                            ?>
                            

                            <tr>
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
                            </tr>
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