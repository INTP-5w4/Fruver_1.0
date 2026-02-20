<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Productos</title>
</head>
<body>
    <form action="<?php base_url('guardar_producto') ?>" method='post'>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nom" placeholder="Ej: Tomate Saladet"><br>
        <label for="unidad_medida">Unidad de medida</label><br>
        <input type="text" name="u_med" placeholder="Ej: Tomate Saladet"><br>
        <label for="descripcion">Descripción</label><br>
        <textarea name="descripcion" cols="20" rows="6" placeholder="Ej: Tomate Saladet es..."></textarea> <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>