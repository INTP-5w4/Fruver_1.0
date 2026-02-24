<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document Title</title>
</head>
<body>
     <a href="<?= base_url('crea_merma') ?>">crea merma</a>
    <table class="table table-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Entrada ID</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mermas as $merma){ ?>
                <tr>
                    <td><?= $merma['id'] ?></td>
                    <td><?= $merma['entradas_id'] ?></td>
                    <td><?= $merma['cantidad'] ?></td>
                    <td><?= $merma['fecha'] ?></td>
                    <td><?= $merma['descripcion'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>