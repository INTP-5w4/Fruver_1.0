<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Repartidor</title>
</head>
<body>
    <form action="<?= base_url('Crea_repartidor') ?>" method="post" id="crearRepartidor">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nom" id="" placeholder="Ingrese un nombre"><br>
        
        <label for="apellido">Apellido</label><br>
        <input type="text" name="ape" id="" placeholder="Ingrese un apellido"><br>

        <label for="nombre">CURP</label><br>
        <input type="text" name="curp" id="" placeholder="Ingrese un CURP"><br>
        
        <label for="rfc">RFC</label><br>
        <input type="text" name="rfc" id="" placeholder="Ingrese un CURP"><br>
        
        <label for="domicilio">Domicilio</label><br>
        <input type="text" name="dom" id="" placeholder="Ingrese un domicilio"><br>

        <label for="correo">Email</label><br>
        <input type="email" name="correo" id=""><br>
        
        <label for="telefono">Telefono</label><br>
        <input type="tel" name="tel" id=""><br>
        <input type="submit" value="Enviar">


    </form>
<script>
const miForm = document.getElementById('crearRepartidor');
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
        window.parent.cierraModal('modalRepartidor'); // Llama a la función que tienes en la lista
        window.parent.location.reload(); // Recarga la lista para ver los cambios
    })
    .catch(error => console.error('Error:', error));
});
    </script>
    
</body>
</html>