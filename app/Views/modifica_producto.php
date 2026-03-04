<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de producto</title>
        
</head>
<body>
    <form action="<?= base_url('nuevoform') ?>" method="post" id= "actProducto">
    <input type="hidden" name="id" value="<?=esc($productos['id'])?>" require><br>    
    <label>Nombre</label><br>
        <input type="text" name="nom" value="<?= esc($productos['nombre'])?>"require><br>

        <label>Unidad de medida</label><br>
        <input type="text" name="u_med" value="<?= esc($productos['id_unidad_medida'])?>"require><br>
        
        <label>Descripcion</label><br>
        <textarea cols='16' rows='6' name="desc" value="<?= esc( $productos['descripcion'])?>" require></textarea><br>
        <input type="submit" value="Enviar"><br>
    </form>
        <script>
const miForm = document.getElementById('actProducto');
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
        window.parent.cierraIframe(); // Llama a la función que tienes en la lista
        window.parent.location.reload(); // Recarga la lista para ver los cambios
    })
    .catch(error => console.error('Error:', error));
});
    </script>
</body>
</html>