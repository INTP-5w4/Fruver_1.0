<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <form action="<?= base_url('Guarda_Unidad')?>" method="Post">
        <label for="Nombre">Nombre</label><br>
        <input type="text" name="nom" placeholder="Ej: Kilogramo"><br>
        <label for="Abreviacion">Abreviación</label><br>
        <input type="text" name="abrev" placeholder="Ej: kg"><br>
        <input type="submit" value="Enviar">
    </form>
    <a href="<?= base_url('Mostrar_Unidades')?>"><button>Lista de unidades</button></a>
    
</body>
</html>