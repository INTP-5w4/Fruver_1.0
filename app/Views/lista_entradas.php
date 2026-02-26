<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/lista_producto.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Lista de productos</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Fecha</td>
                <td>Precio Compra</td>
                <td>Precio Venta</td>
                <td>Cantidad</td>
                <td>Producto id</td>
                <td>Unidad de medida id</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>
        <tbody>
             <?php
             foreach ($entradas as $entrada){
            echo ("<tr><td>".$entrada['id'].
                "</td><td>".$entrada['fecha'].
                "</td><td>".$entrada['precio_compra'].
                "</td><td>".$entrada['precio_venta'].
                "</td><td>".$entrada['cantidad'].
                "</td><td>".$entrada['producto_id'].
                "</td><td>".$entrada['unidad_medida_id']."</td>
                <td><a href='".base_url('pasaid_entrada/'.$entrada['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
                <td><a href='".base_url('borraid_entrada/'.$entrada['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>");
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>