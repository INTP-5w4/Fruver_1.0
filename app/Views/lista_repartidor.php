<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
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
                "</td><td><a href='".base_url('borra_id_repartidor/'.$repartidor['id'])."'><i class='fa-solid fa-trash-can'></i></a></td></tr>");
                }?>
        </tbody>
    </table>
    <a href="<?= base_url('alta_repartidor') ?>"><button>Añade Repartidor</button></a>
</body>
</html>