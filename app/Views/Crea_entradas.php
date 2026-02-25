<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añade entradas</title>
</head>
<body>
    <form action="<?= base_url('Guardar_Entrada') ?>" method="post">
        <label>Registrado el:</label>
        <?php 
            date_default_timezone_set('America/Mexico_City'); 
            $fecha_mexico = date('Y-m-d H:i:s'); 
        ?>
        <input name="fecha" value="<?=$fecha_mexico; ?>" readonly><br>
        <label for="precioc">Precio de compra:</label>
        <input type="number" name="precio_compra" placeholder="Inserte solo números"><br>
        
        <label for="preciov">Precio de venta:</label>
        <input type="number" name="precio_venta" placeholder="Inserte solo números"><br>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cant" placeholder="Inserte solo números"><br>
        
       <label for="u_med">Unidad de Medida:</label>
            <select name="u_med" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($unidades as $u): ?>
                <option value="<?= $u['id']; ?>">
                    <?= $u['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select><br>

            <label for="producto_asignado">Producto asignado:</label>
            <select name="prod_id" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($productos as $p): ?>
                <option value="<?= $p['id']; ?>">
                    <?= $p['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select><br>
        






        <input type="submit" value="Enviar">
    </form>
</body>
</html>