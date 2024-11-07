<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numRand = rand(0, 20);
        $numeroUtente = $_GET['numero'];
        if(!isset($_SESSION['tentativi'])) {
            $_SESSION['tentativi'] = 1;
        } else {
            $_SESSION['tentativi'] = $_SESSION['tentativi'] + 1;
        }

        if($numRand == $numeroUtente) {
            echo "<h1 style='color:green'>Hai indovinato!</h1>";
            $_SESSION['tentativi'] = 0;
            if (!isset($_SESSION['vittorie'])) {
                $_SESSION['vittorie'] = 1;
            } else {
                $_SESSION['vittorie'] = $_SESSION['vittorie'] + 1;
            }
        } else {
            echo "<h1 style='color:red'>Hai sbagliato!</h1>";
        }
        echo "<h3>Tentativi:" . $_SESSION['tentativi'] . "</h3>";
        echo "<h3>Vittorie: " . $_SESSION['vittorie'] . "</h3>";
        echo "<h3>Numero:" . $numRand . "</h3>";
        echo "<h3>Numero inserito: " . $numeroUtente . "</h3>";
    ?>

    <a href="scelta.html">Torna a scegliere</a>
</body>
</html>