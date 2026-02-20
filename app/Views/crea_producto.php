<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Productos</title>
</head>
<body>
    <form action="<?= base_url('guardar_producto') ?>" method="post">
        <label for="nom">Nombre</label><br>
        <input type="text" name="nom" placeholder="Ej: Tomate Saladet"><br>

        <label for="u_med">Unidad de medida</label><br>
        <input type="text" name="u_med" placeholder="Ej: Tomate Saladet"><br>
        
        <label for="desc">Descripción</label><br>
        <textarea name="desc" cols="20" rows="6" placeholder="Ej: Tomate Saladet es..."></textarea> <br>
        
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>