<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>CURP</td>
                <td>RFC</td>
                <td>Domicilio</td>
                <td>E-mail</td>
                <td>Telefono</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach($repartidores as $repartidor){
                echo (  "<tr><td>".$repartidor['id']. 
                "</td><td>".$repartidor['nombre'].
                "</td><td>".$repartidor['apellido'].
                "</td><td>".$repartidor['curp'].
                "</td><td>".$repartidor['rfc'].
                "</td><td>".$repartidor['domicilio'].
                "</td><td>".$repartidor['correo_electronico'].
                "</td><td>".$repartidor['telefono'].
                "</td><td><a href='".base_url('pasa_id_repartidor/'.$repartidor['id'])."'><i class='fa-solid fa-pencil'></i></a>".
                "</td><td><a href='".base_url('borra_id_repartidor/'.$repartidor['id'])."'><i class='fa-solid fa-trash'></i></a></tr>");
                }?>
        </tbody>
    </table>
    <a href="<?= base_url('alta_repartidor') ?>"><button>Añade Repartidor</button></a>
</body>
</html>