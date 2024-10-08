<!DOCTYPE html>
<html>
    <head>
        <title> Premiere en php</title>
    </head>
    <body>
        <?php
        $nom = $_POST['user_nam'];
        $email = $_POST['user_mail'];
        $msg = $_POST['msg'];
        echo 'mon nom est'. $nom;
        echo 'mon email est'. $email;
        echo 'mon message est'. $msg;
        ?>
    </body>
</html>