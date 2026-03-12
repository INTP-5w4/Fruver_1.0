<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilos/crea_producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Productos</title>
</head>
<body>
    <form action="<?= base_url('guardar_producto') ?>" method="post">
        <label for="nom">Nombre</label><br>
        <input type="text" name="nom" placeholder="Ej: Tomate Saladet"><br>

        <label for="u_med">Unidad de Medida:</label>
            <select name="u_med" id="u_med" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($unidades as $u): ?>
                <option value="<?= $u['id']; ?>">
                    <?= $u['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select><br>
        
        <label for="desc">Descripción</label><br>
        <textarea name="desc" cols="20" rows="6" placeholder="Ej: Tomate Saladet es..."></textarea> <br>
        
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>