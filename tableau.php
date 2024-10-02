<!DOCTYPE html>
<html>
    <head>
        <title> Premiere en php</title>
    </head>
    <body>
        <?php
        $myPays = array('Niger', 'benin','Mali','Burkina');
        echo $myPays[0].'<br>';
        echo $myPays[1].'<br>';
        echo $myPays[2].'<br>';
        echo $myPays[3].'<br>';
        // methode 2
        $myPays = ['Niger', 'benin','Mali','Burkina'];
        echo $myPays[0].'<br>';
        echo $myPays[1].'<br>';
        echo $myPays[2].'<br>';
        echo $myPays[3].'<br>';
        // tableau associative
        $tableauAssociative = [
            'nom'=>'Ayouba',
            'Prenom'=>'Issoufou',
            'Pays'=>'Niger',
            'Captal'=>'Niamey',
        ];
     echo   $tableauAssociative['nom'].'<br>';
     echo   $tableauAssociative['Prenom'].'<br>';
     echo  $tableauAssociative['Pays'].'<br>';
     echo  $tableauAssociative['Captal'].'<br>';
        ?>

    </body>
</html>