<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Lista de clientes</title>
</head>
<body>
    <div>
        <a href="<?= base_url('crea_cliente')?>">Agregar cliente</a>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Numero</th>
                    <th>Rfc</th>
                    <th>Tipo de cliente</th>
                    <th>Telefono</th>
                    <th>Tipo de credito</th>
                    <th>Borrar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $cliente){
                echo ("<tr><td>".$cliente['id'].
                "</td><td>".$cliente['nombre'].
                "</td><td>".$cliente['apellido'].
                "</td><td>".$cliente['calle'].
                "</td><td>".$cliente['colonia'].
                "</td><td>".$cliente['numero'].
                "</td><td>".$cliente['rfc'].
                "</td><td>".$cliente['tipo_cliente'].
                "</td><td>".$cliente['telefono'].
                "</td><td>".$cliente['tipo_credito']."</td>
                <td><a href='".base_url('pasoid/'.$cliente['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
                <td><a href='".base_url('borrarid/'.$cliente['id'])."'><i class='fa-solid fa-trash'></i></i></a></td>
                </tr>");
                }
                ?>
            </tbody>
        </table>

    </div>
    
</body>
</html>