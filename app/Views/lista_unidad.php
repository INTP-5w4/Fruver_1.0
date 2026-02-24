<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Lista de Unidades</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Abreviacion</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
             <?php
             foreach ($unidades as $unidad){
            echo ("<tr><td>".$unidad['id'].
                "</td><td>".$unidad['nombre'].
                "</td><td>".$unidad['abreviacion'].
                "</td><td><a href='".base_url('pasaid/'.$unidad['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
                <td><a href='".base_url('borraid/'.$unidad['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>");
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>