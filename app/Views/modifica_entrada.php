<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <form action="<?= base_url('modifica_Entrada') ?>" method="post">
    <input type="hidden" name="id" value="<?=esc($entradas['id'])?>" require><br>    
    <label>Nombre</label><br>
       <?php 
            date_default_timezone_set('America/Mexico_City'); 
            $fecha_mexico = date('Y-m-d H:i:s'); 
        ?>
        <input name="fecha" value="<?=$fecha_mexico; ?>" readonly><br>

        <label>Precio de venta:</label><br>
        <input type="number" name="precio_venta" value="<?= esc($entradas['precio_venta'])?>"require><br>
        <label>Precio de compra:</label><br>
        <input type="number" name="precio_compra" value="<?= esc($entradas['precio_compra'])?>"require><br>
        <label>Cantidad:</label><br>
        <input type="number" name="cant" value="<?= esc($entradas['cantidad'])?>"require><br>
        <label>Unidad de medida:</label><br>
        <select name="u_med" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($unidades as $uni): ?>
                <option value="<?= $uni['id']; ?>">
                    <?= $uni['nombre']; ?> </option>
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
        
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>