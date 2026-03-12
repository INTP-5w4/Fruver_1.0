<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_crea.css') ?>">
    <title>Añadir merma</title>
</head>
<body>
   <form action="<?= base_url('guardar_merma') ?>" method="post" id="creaMerma" class="form-grid">

        <div class="form-group">
        <label>Entrada</label>
        <select name="entrada" required>
            <option value="" Placeholder="Selecciona una entrada"></option>
            <?php foreach($entradas as $entrada){ ?>
                <option value="<?= $entrada['id'] ?>">
          ID: <?= $entrada['id'] ?> - Producto ID: <?= $entrada['producto_id'] ?> (<?= $entrada['fecha'] ?>)
                </option>
            <?php } ?>
        </select><br>
        </div>

        <div class="form-group">
        <label>Cantidad</label>
        <input type="number" name="cantidad" required><br>
        </div>

        <div class="form-group">
        <label>Fecha</label>
        <input type="date" name="fecha" required><br>
        </div>

        <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="descripcion" required><br>
        </div>


         <input type="submit" value="Enviar">
    </form>
</body>
</html>