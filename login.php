<?php

if(isset($_POST['mail'] && isset($_POST['mdp']))){

}else{
    header("Location: page.php?error");
    exit();
}