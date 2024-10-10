<!DOCTYPE html>
<html>
    <head>
        <title> BackEnd</title>
    </head>
    <body>
        <?php
        $utlisateur = "Ayouba";
        $pwd = "passe1234";
        if ($_POST['name']==$utlisateur && $_POST['password']==$pwd) {
            session_start();
            $_SESSION['name']=$_POST['name'];
            $_SESSION['password']=$_POST['password'];
            echo 'Bienvenu'. $utlisateur;
            $_SESSION['name']
        }else{
            echo "Utlisateur non reconnu" ;
        }
        ?>
    </body>
</html>