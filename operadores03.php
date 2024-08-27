<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        
        echo "AREA DE UN RECTANGULO";
        $ancho = 20;
        $largo = 25;

        $area = $ancho * $largo;
        ?>
    </h1>

    <p> El Area Del Rectangulo Es:
        <?php echo $area; ?>
    </p>
</body>
</html>