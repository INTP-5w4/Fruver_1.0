<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de producto</title>
        
</head>
<body>
    <form action="<?= base_url('nuevoform') ?>" method="post">
    <input type="hidden" name="id" value="<?=esc($productos['id'])?>" require><br>    
    <label>Nombre</label><br>
        <input type="text" name="nom" value="<?= esc($productos['nombre'])?>"require><br>

        <label>Unidad de medida</label><br>
        <input type="text" name="u_med" value="<?= esc($productos['unidad_medida'])?>"require><br>
        
        <label>Descripcion</label><br>
        <textarea cols='16' rows='6' name="desc" value="<?= esc( $productos['descripcion'])?>" require></textarea><br>
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>