<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <form action="<?= base_url('Guardar_credito') ?>" method="post">
        <label>Registrado el:</label>
        <?php
          date_default_timezone_set('America/Mexico_City');
          $fecha_mexico = date('Y-m-d H:i:s');
        ?>
        <input name="fecha_inicio" value="<?=$fecha_mexico; ?>" readonly><br>
        <input type="date" name="fecha_fin"><br>
        <input type="number" name="monto" placeholder="Inserte solo números"><br>
        <input type="text" name="estatus"><br>
        <input type="number" name="credito_disponible" placeholder="Inserte solo números"><br>

        <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($mcliente as $u): ?>
                <option value="<?= $u['id']; ?>">
                    <?= $u['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select><br>
        
    
</body>
</html>