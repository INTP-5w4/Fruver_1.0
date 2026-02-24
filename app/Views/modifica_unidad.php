<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar unidad</title>
</head>
<body>
    <form action="<?= base_url('modifica_unidad') ?>" method="post">
    <input type="hidden" name="id" value="<?=esc($unidades['id'])?>" require><br>    
    <label>Nombre</label><br>
        <input type="text" name="nom" value="<?= esc($unidades['nombre'])?>"require><br>

        <label>Abreviación</label><br>
        <input type="text" name="abrev" value="<?= esc($unidades['abreviacion'])?>"require><br>
        
        <input type="submit" value="Enviar"><br>
    </form>
    
</body>
</html>