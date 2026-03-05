<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <form action="<?= base_url('edita_cliente') ?>" method="post" id="EditCliente">
        <input type="hidden" name="id" value="<?=esc($clientes['id'])?>" required><br>    
        <label>Nombre</label>
        <input type="text" name="nome" value="<?= esc($clientes['nombre'])?>"required><br>

        <label>Apellido</label>
        <input type="text" name="apel" value="<?= esc($clientes['apellido'])?>"required><br>
        
        <label >Calle</label>
        <input type="text" name="calle" value="<?= esc($clientes['calle'])?>"required><br>

        <label >Colonia</label>
        <input type="text" name="col" value="<?= esc($clientes['colonia'])?>"required><br>

        <label >Numero</label>
        <input type="text" name="nume" value="<?= esc($clientes['numero'])?>"required><br>

        <label >RFC</label>
        <input type="text" name="rfc" value="<?= esc($clientes['rfc'])?>"required><br>

        <label>Tipo de cliente</label>
        <select name ="t_cliente">
            <option value="contado/menudeo"<?= $clientes['tipo_cliente'] == 'contado/menudeo' ? 'selected' : '' ?>>Contado/Menudeo</option>
            <option value="credito/mayoreo"<?= $clientes['tipo_cliente'] == 'contado/menudeo' ? 'selected' : '' ?>>Credito/Mayoreo</option>
        </select><br>

        <label>Telefono</label>
        <input type="tel" name="tele" value="<?= esc($clientes['telefono'])?>"required><br>

        <label >Tipo de credito</label>
        <input type="text" name="t_credito" value="<?= esc($clientes['tipo_credito'])?>"required><br>

        <input type="submit" value="Editar">

    </form>
    <script>
const miForm = document.getElementById('EditCliente');
miForm.addEventListener('submit', (e) => {
    e.preventDefault(); // Detenemos el envío normal

    // 1. Recolectamos los datos del formulario
    const formData = new FormData(miForm);

    // 2. Los enviamos al servidor
    fetch(miForm.action, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        // 3. Si todo salió bien, cerramos el modal en la ventana principal
        window.parent.cierraModal('EditCliente'); // Llama a la función que tienes en la lista
        window.parent.location.reload(); // Recarga la lista para ver los cambios
    })
    .catch(error => console.error('Error:', error));
});
    </script>
</body>
</html>