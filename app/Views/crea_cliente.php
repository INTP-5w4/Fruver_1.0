<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir cliente</title>
</head>
<body>
    <form action="<?=base_url('guardar_cliente') ?>" method="post" id="crearCliente">
        <label for="nome">Nombre</label>
        <input type="text" name="nome" required><br>

        <label for="apel">Apellido</label>
        <input type="text" name="apel" required><br>

        <label for="calle">Calle</label>
        <input type="text" name="calle" required><br>

        <label for="col">Colonia</label>
        <input type="text" name="col" required><br>

        <label for="nume">Numero</label>
        <input type="text" name="nume"><br>

        <label for="rfc">RFC</label>
        <input type="text" name="rfc"><br>

        <label for="t_cliente">Tipo de cliente</label>
        <select name ="t_cliente">
            <option value="contado/menudeo">Contado/Menudeo</option>
            <option value="credito/mayoreo">Credito/Mayoreo</option>
        </select><br>

        <label for="tele">Telefono</label>
        <input type="tel" name="tele"><br>

        <label for="t_credito">Tipo de credito</label>
        <input type="text" name="t_credito"><br>

        <input type="submit" value="enviar">
    
    </form>
                <script>
const miForm = document.getElementById('crearCliente');
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
        window.parent.cierraModal('modalCliente'); // Llama a la función que tienes en la lista
        window.parent.location.reload(); // Recarga la lista para ver los cambios
    })
    .catch(error => console.error('Error:', error));
});
    </script>
</body>
</html>