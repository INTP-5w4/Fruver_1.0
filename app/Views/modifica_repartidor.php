<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica repartidor</title>
</head>
<body>
     <form action="<?= base_url('modifica_repartidor') ?>" method="post">
        <input type="hidden" name="id" id="" value="<?=esc($repartidores['id'])?>" placeholder="Ingrese un nombre"><br>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nom" id="" value="<?=esc($repartidores['nombre'])?>" placeholder="Ingrese un nombre"><br>
        
        <label for="apellido">Apellido</label><br>
        <input type="text" name="ape" id="" value="<?=esc($repartidores['apellido'])?>" placeholder="Ingrese un apellido"><br>

        <label for="nombre">CURP</label><br>
        <input type="text" name="curp" id="" value="<?=esc($repartidores['curp'])?>" placeholder="Ingrese un CURP"><br>
        
        <label for="rfc">RFC</label><br>
        <input type="text" name="rfc" id="" value="<?=esc($repartidores['rfc'])?>"placeholder="Ingrese un CURP"><br>
        
        <label for="domicilio">Domicilio</label><br>
        <input type="text" name="dom" id=""  value="<?=esc($repartidores['domicilio'])?>" placeholder="Ingrese un domicilio"><br>

        <label for="correo">Email</label><br>
        <input type="email" name="correo" id="" value="<?=esc($repartidores['correo_electronico'])?>" placeholder="Ej:ajolote.virtual@gmail.com"><br>
        
        <label for="telefono">Telefono</label><br>
        <input type="tel" name="tel" id="" value="<?=esc($repartidores['telefono'])?>" placeholder="123457890"><br>
        <input type="submit" value="Enviar">


    </form>
</body>
</html>