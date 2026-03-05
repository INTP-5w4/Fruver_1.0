<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <form action="<?= base_url('modifica_credito') ?>" method="post"></form>
    <input type="hidden" name="id" value="<?=esc($entradas['id'])?>" require><br>    
    <label>Nombre</label><br>
</body>
</html>