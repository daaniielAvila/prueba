<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal</title>
    <style>
        body {
            background: rgb(0, 226, 255);
            background: radial-gradient(circle, rgba(0, 226, 255, 1) 0%, rgba(243, 255, 0, 1) 100%);
        }

        .info {
            text-align: center;
            font-size: 24px;
            color: #005900;
            text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;
            border: 2px solid #005900;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;
            background-color: #C9FFE5; 
        }

        .for {
            text-align: center;
            font-size: 24px;
            color: #005900;
            text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;
            border: 2px solid #005900;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;
            background-color: #5555; 
        }
        .while {
            text-align: center;
            font-size: 24px;
            color: #005900;
            text-shadow: #FFFCA8 2px 2px 0px, #9C9C9C 4px 4px 0px;
            border: 2px solid #005900;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;
            background-color: #5555; 
        }
    </style>
</head>
<body>
    <?php
    $nombre = "Daniel";
    $fecha_nac = 2003;
    define("PI", 3.1416);
    $radio = 3.5;
    $area = PI * ($radio * $radio);
    ?>

    <p class="info">¡Hola! Mi nombre es <?= $nombre ?> y nací en el año <?= $fecha_nac ?></p>
    <p class="info">El área de un círculo con radio <?= $radio ?> es <?= $area ?></p>
    <p class="for">
    <?php
    for ($i = 1; $i <= 100; $i++) { 
        if ($i % 2 == 0) {
            echo "<b>$i</b>";
        } else {
            echo $i;
        }
        if ($i < 100 )
        echo " ,";

    }
    ?>

    </p>
    <p class="while">
    <?php
    $i = 100;
    while ($i >= 0) {
        if ($i % 2 == 0) {
            echo "<b>$i</b>";
        } else {
            echo $i;
        }
        if ($i > 0) {
            echo "- ";
        }
        $i--;
    }
    ?>
    </p>
</body>
</html>
