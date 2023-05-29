<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo POST</title>
</head>

<body>
    
    <?php
    /**
     * Crea una página web que posea formulario
     * El formulario tendrá los campos (input): 
     * - Nombre
     * - precio 
     * - y descuento
     * Cuando el usuario envie el formulario (por POST),
     * recuperar esos valores y mostrar por pantalla el coste del producto aplicandole el descuento
     */
    if($_POST){
        $name = $_POST["nombre"];
        $price = $_POST["precio"];
        $discount = $_POST["descuento"];
        echo "Nombre: ".$name."<br>";
        echo "Precio con descuento: ".$price*$discount;
    }
     
    ?>
    
    <form action="sol_ejer11.php" method="post">
        Inserta el nombre
        <br>
        <input name="nombre" type="text">
        <br>
        <input name="precio" type="number">
        <br>
        <input name="descuento" type="float">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>


