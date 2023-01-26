<?php
    session_start();
    include 'connect.php';    

    if(isset($_POST['connexion'])){
        $email=$_POST['email'];
        $mdp = $_POST['mdp'];

        if($email && $mdp){

            $email=htmlspecialchars($_POST['email']);
            $mdp=sha1($_POST['mdp']);

            $select=mysqli_query($db,"SELECT  `email`, `mdp` FROM `administrateur` WHERE email='$email' AND mdp='$mdp' ");
            if(mysqli_num_rows($select)==1){
                header("Location:donnee.php");
            }else{
                $erreur1="email ou mot de passe incorrect";
            }
        }else{
            $erreur1="veuillez remplir tous les champs svp";
        }
    }

    if(isset($_POST['inscrire'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
        $cmdp = sha1($_POST['cmdp']);

        if($nom && $prenom && $email && $mdp && $cmdp){
            if($mdp == $cmdp){
                 $select = mysqli_query($db,"INSERT INTO `administrateur`( `nom`, `prenom`, `email`, `mdp`) VALUES ('$nom','$prenom','$email','$mdp')");
                 $erreur2="votre compte a bien ete cree!!";
             }else{
                 $erreur2= "Les deux mots de passe doivent etre identiques";
              } 
         }else{
             $erreur2 =  "Veuillez saisir tous les champs";
         }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
    <link rel="stylesheet" href="page.css">
    <script>
        src="https://kit.fontawasome.com/64d58efce2.js" crossorigin="anonymous"
    </script>
    <title>inscription et connexion</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="page.php" method="post" class="sign-in-form">
                    <img style="width:50%" src="Images/UY1.png" alt="">
                    <h2 class="title">se connecter</h2>
                        <?php
                            if(isset($erreur1)){
                                    echo '<span class="error-msg">' .$erreur1. '</span>';
                            }
                        ?>
                    <div class="input-field">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" placeholder="adresse email">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="mdp" placeholder="mot de passe">
                    </div>
                    <div class="checkbox" >
                        <input class="check" type="checkbox" id="rememberme" name="rememberme" value="1">
                        <label class="remember" for="rememberme">Se souvenir de moi</label>
                    </div>
                    <input type="submit" name="connexion" value="connexion"  class="btn solid">
                    <div class="mot"><a href="#">mot de passe oublié?</a></div>
                </form>

                <form action="page.php" method="post" class="sign-up-form">
                    <h2 class="title">s'inscrire</h2>
                        <?php
                            if(isset($erreur2)){
                                    echo '<span class="error-msg">' .$erreur2. '</span>';
                            }
                        ?>

                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" name="nom" placeholder="Nom">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-user"></i>
                        <input type="text" name="prenom" placeholder="Prenom">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" placeholder="adresse email">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="mdp" placeholder="Mot de passe">
                    </div>
                    <div class="input-field">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="cmdp" placeholder="confirmer le mot de passe">
                    </div>
                    <div>
                        <p>En creant votre compte sur KR Chat, vous vous engagez <br>
                        a respecter les conditions generales d'utilisation liees a <br>
                        notre plateforme ainsi que notre politique de confidentialite</p>
                    </div>
                    <input type="submit" name="inscrire" value="S'inscrire"  class="btn solid">
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Bienvenue sur <strong> Planning Maker</strong></h3>
                    <p>Je n'ai pas de compte PM</p>
                    <button class="btn transparent" id="sign-up-btn">s'inscrire</button>
                </div>
                <img  src="Images/1.png" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Bienvenue sur <strong> Planning Maker</strong></h3>
                    <p>J'ai deja un compte  PM</p>
                    <button class="btn transparent" id="sign-in-btn">connexion</button>
                </div>
                <img  src="Images/1.png" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="page.js"></script>
</body>
</html>