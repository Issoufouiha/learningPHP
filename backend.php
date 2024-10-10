<!DOCTYPE html>
<html>
    <head>
        <title> BackEnd</title>
    </head>
    <body>
        <?php
        $nom = $_POST['name'];
        $email = $_POST['mail'];
        $msg = $_POST['msg'];
        echo 'mon nom est'. $nom .'<br>';
        echo 'mon email est'. $email .'<br>';
        echo 'mon message est'. $msg .'<br>';
        ?>
    </body>
</html>