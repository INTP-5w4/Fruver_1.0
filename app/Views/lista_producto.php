<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('lista_producto.css') ?>">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Lista de productos</title>
    <style>#mas1{
width: 40px;
height: 40px;
border: none;
border-radius: 40px;
background-color: rgba(0, 122, 10, 0.822);
color: white;
}</style>
</head>
<body>
    <a href="<?= base_url('crea_producto') ?>"><button class="mas" id="mas1">
        <i class="fa-solid fa-plus"></i>
    </button></a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Unidad de medida</td>
                <td>Descripción</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>
        <tbody>
             <?php
             foreach ($productos as $producto){
            echo ("<tr><td>".$producto['id'].
                "</td><td>".$producto['nombre'].
                "</td><td>".$producto['id_unidad_medida'].
                "</td><td>".$producto['descripcion']."</td>
                <td><a href='".base_url('pasaid/'.$producto['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
                <td><a href='".base_url('borraid/'.$producto['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>");
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>