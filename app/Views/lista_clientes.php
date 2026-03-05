<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Lista de clientes</title>
</head>
<body>
    <div>
        <a href="javascript:void(0)" class="btn btn-success mb-3" onclick="document.getElementById('modalAgregar').style.display='block'">
<i class="fa-solid fa-user-plus"></i> Agregar cliente
</a>
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
    <div id="modalAgregar" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top" style="max-width:600px">
        
        <header class="w3-container w3-green"> 
            <span onclick="document.getElementById('modalAgregar').style.display='none'" 
            class="w3-button w3-display-topright">&times;</span>
            <h2>Nuevo Cliente</h2>
        </header>

        <div class="w3-container w3-padding">
            <form action="<?= base_url('guardar_cliente') ?>" method="post">
    <label>Nombre</label>
    <input class="w3-input w3-border" type="text" name="nome" required>

    <label>Apellido</label>
    <input class="w3-input w3-border" type="text" name="apel" required>

    <label>Calle</label>
    <input class="w3-input w3-border" type="text" name="calle" required>

    <label>Colonia</label>
    <input class="w3-input w3-border" type="text" name="col" required>

    <label>Número</label>
    <input class="w3-input w3-border" type="text" name="nume">

    <label>RFC</label>
    <input class="w3-input w3-border" type="text" name="rfc">

    <label>Tipo de cliente</label>
    <select class="w3-select w3-border" name="t_cliente">
        <option value="contado/menudeo">Contado/Menudeo</option>
        <option value="credito/mayoreo">Crédito/Mayoreo</option>
    </select>

    <label>Teléfono</label>
    <input class="w3-input w3-border" type="tel" name="tele">

    <label>Tipo de crédito</label>
    <input class="w3-input w3-border" type="text" name="t_credito">

    <br>
    <button type="submit" class="btn btn-success w-100 mb-3">Guardar Cliente</button>
</form>
    <form action="<?= base_url('guardar_cliente') ?>" method="post" class="w3-container">
        ...
        <button type="submit" class="btn btn-success w-100 mb-3">Guardar Cliente</button>
    </form>
</div>
        </div>

    </div>
</div>
</body>
</html>