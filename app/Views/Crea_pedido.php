<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('Guarda_pedido') ?>" method="post">
        <label for="fecha">Fecha de inicio</label><br>
        <input type="date" name="fecha_i"><br>
        <label for="fecha_f">Fecha de entrega</label><br>
        <input type="date" name="fecha_f"><br>
        <label for="estatus">Estatus</label><br>
        <input type="text" name="estatus" placeholder="Ej: En proceso, finalizado"><br>
        
        <label for="estatus">Nota</label><br>
        <input type="text" name="nota" placeholder="Ej: Productos Frágiles"><br>
        <label for="estatus">Total</label></label><br>
        <input type="number" name="total"><br>

        <label for="producto">Producto</label><br>       
        <select name="producto"><br>
            <option value="">Seleccione una opción</option>
            <?php foreach($productos as $p): ?>
                <option value="<?= $p['id']; ?>">
                    <?= $p['nombre']; ?> </option>
                    <?php endforeach; ?>
        </select><br>

        <label for="cliente">Cliente</label><br>
        <select name="cliente"><br>
            <option value="">Seleccione una opción</option>
            <?php foreach($clientes as $c): ?>
                <option value="<?= $c['id']; ?>">
                    <?= $c['nombre']. ' ' . $c['apellido']; ?> </option>
                    <?php endforeach; ?>
        </select><br>
        <label for="repartidor">Repartidor</label><br>
        <select name="repartidor"><br>
            <option value="">Seleccione una opción</option>
            <?php foreach($repartidores as $r): ?>
                <option value="<?= $r['id']; ?>">
                    <?= $r['nombre']. ' ' . $r['apellido']; ?> </option>
                    <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>