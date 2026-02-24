<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir merma</title>
</head>
<body>
   <form action="<?= base_url('guardar_merma') ?>" method="post">
        <label>Entrada</label>
        <select name="entrada" required>
            <option value="">Selecciona una entrada</option>
            <?php foreach($entradas as $entrada){ ?>
                <option value="<?= $entrada['id'] ?>">
                    ID: <?= $entrada['id'] ?> - <?= $entrada['unidad_medida'] ?> (<?= $entrada['fecha'] ?>)
                </option>
            <?php } ?>
        </select><br>

        <label>Cantidad</label>
        <input type="number" name="cantidad" required><br>

        <label>Fecha</label>
        <input type="date" name="fecha" required><br>

        <label>Descripción</label>
        <input type="text" name="descripcion" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>