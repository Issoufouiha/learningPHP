<!DOCTYPE html>
<html>
    <head>
        <title> Premiere en php</title>
    </head>
    <body>
        <?php
        $premon = "Alamine";
        $age = 45;
        $prix = 20.56;
        echo $premon ;
        echo gettype($premon);
        echo gettype($prix);
        echo "<br>";
        define("PRO","Dev");
        define("DATE","lundi");
        echo PRO; 
        echo "<br>";
        echo DATE; 
        echo "<br>";
        echo __FILE__;
        echo "<br>";
        echo __LINE__;
        echo "<br>";
        $x = 10;
        $x += 3;
        echo $x;
        ?>
    </body>
</html>