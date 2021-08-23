<?php
    include 'php/conection.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
</head>
<body>
    <div class="container section">
        <form action="php/insertProducto.php" method="POST">
            <fieldset>
                <legend>Nuevo producto</legend>
                <!-- Proveedor -->
                <label for="proveedor">Proveedor</label>
                <select name="proveedor" id="proveedor">
                    <option value="" disabled selected>--Seleccione--</option>
                    <?php
                        $instrucction = "SELECT * FROM proveedor";
                        $query = mysqli_query($conection, $instrucction);
                        while($i = mysqli_fetch_assoc($query)){
                            echo "<option value='idProveedor'>".$i['proveedor']."</option>";
                        }
                    ?>
                </select>
                <!-- Tipo Producto -->
                <label for="tipoProducto">Tipo Producto</label>
                <select name="tipoProducto" id="tipoProducto">
                    <option value="" disabled selected>--Seleccione--</option>
                    <?php
                        $instrucction = "SELECT * FROM tipoProducto";
                        $query = mysqli_query($conection, $instrucction);
                        while($i = mysqli_fetch_assoc($query)){
                            echo "<option value='idTipoProducto'>".$i['tipoProducto']."</option>";
                        }
                    ?>
                </select>
                <!-- Marca -->
                <label for="marca">Marca</label>
                <select name="marca" id="marca">
                    <option value="" disabled selected>--Seleccione--</option>
                    <?php
                        $instrucction = "SELECT * FROM marca";
                        $query = mysqli_query($conection, $instrucction);
                        while($i = mysqli_fetch_assoc($query)){
                            echo "<option value='idMarca'>".$i['marca']."</option>";
                        }
                    ?>
                </select>
                <!-- Presentacion -->
                <label for="presentacion">Presentacion</label>
                <select name="presentacion">
                    <option value="" disable selected>--Seleccione--</option>
                    <?php
                        $instrucction = "SELECT * FROM presentacion";
                        $query = mysqli_query($conection, $instrucction);
                        while($i = mysqli_fetch_assoc($query)){
                            echo "<option value='idPresentacion'>".$i['presentacion']."</option>";
                        }
                    ?>
                </select>
                <!-- Cantidad -->
                <label for="cantidad">Cantidad</label>
                <input type="text" name="cantidad">
                <!-- Peso -->
                <label for="peso">Peso</label>
                <input type="text" name="peso">
                <!-- Fecha Caducidad -->
                <label for="fecha_caducidad">Fecha caducidad</label>
                <input type="date" name="fecha_caducidad">
            </fieldset>
        </form>
    </div>
</body>
</html>