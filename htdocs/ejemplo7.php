<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if($_POST){
            $botonValue= $_POST['envio'];
            switch($botonValue){
                case 1: echo "pulsate ". $botonValue;
                break;
                case 2: echo "pulsate ". $botonValue;
                break;
                case 3: echo "pulsate ". $botonValue;
                break;
                default: echo "Error ,boton no valido";
                break;


            }

        }else{
            echo "aun no se envio";
        }
    ?>
    <form action="ejemplo7.php" method="post">
        <input type="submit" name="envio" value="1">
        <input type="submit" name="envio" value="2">
        <input type="submit" name="envio" value="3">
    </form>

</body>

</html>