<?php
    include 'php/conection.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand());?>">
    <script src="https://kit.fontawesome.com/1085598771.js" crossorigin="anonymous"></script>
    <title>Inventario Casa</title>
</head>
<body>
    <div class="container section">
        <div class="navbar">
            <nav class="navbar">
                <ul>
                    <li><a href="nuevoProducto.php">Insertar Producto</a></li>
                    <li><a href="#">Modificar Producto</a></li>
                    <li><a href="#">Eliminar Producto</a></li>
                </ul>
            </nav>
            <h1>Inventario Casa</h1>
        </div>
        <div class="container-lastone">
            <h2>Ultimos agregados</h2>
            <?php
                $instrucction = "SELECT * From producto
                INNER JOIN tipoProducto ON producto.tipoProductoFK = tipoProducto.idTipoProducto";
                $query = mysqli_query($conection, $instrucction);
                while($i = mysqli_fetch_assoc($query)){
                    echo "<span>".$i['tipoProducto']."</span>";
                    echo "<span>".$i['cantidad']."</span>";
                    echo "<span>".$i['peso']."</span>";
                    echo "<span>".$i['fechaVencimiento']."</span>";
                }
            ?>
        </div>
    </div>
</body>
</html>