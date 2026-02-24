<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añade entradas</title>
</head>
<body>
    <form action="<?= base_url('') ?>">
        <label>Registrado el:</label>
        <?php 
            date_default_timezone_set('America/Mexico_City'); 
            $fecha_mexico = date('Y-m-d H:i:s'); 
        ?>
        <input name="timestamp" value="<?=$fecha_mexico; ?>" readonly><br>
        <label for="precioc">Precio de compra:</label>
        <input type="number" name="precio_compra" placeholder="Inserte solo números"><br>
        
        <label for="preciov">Precio de venta:</label>
        <input type="number" name="precio_venta" placeholder="Inserte solo números"><br>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cant" placeholder="Inserte solo números"><br>
        
        <label for="u_medida">Unidad de medida:</label>
        <Select>
            <option value="Bulto_25">Bulto 25kg</option>
            <option value="Caja_20">Caja 20kg</option>
            <option value="Galon">Galón</option>
            <option value="Garrafon">Garrafón</option>
        </Select><br>
        






        <input type="submit" value="Enviar">
    </form>
</body>
</html>