<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_modifica.css') ?>">
    <title>Modificar unidad</title>
</head>
<body>
    <form action="<?= base_url('modifica_unidad') ?>" method="post" id=EditUnidad class="form-grid">
    <input type="hidden" name="id" value="<?=esc($unidades['id'])?>" require> 
        
        <div class="form-group full-width">        
        <label>Nombre</label>
        <input type="text" name="nom" value="<?= esc($unidades['nombre'])?>"require>
        </div>

        <div class="form-group full-width">
        <label>Abreviación</label>
        <input type="text" name="abrev" value="<?= esc($unidades['abreviacion'])?>"require>
        </div>
        
        <input type="submit" value="Enviar">
    </form>
    
<script>
    const miForm = document.getElementById('EditRepartidor');
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
            window.parent.cierraModal('EditRepartidor'); // Llama a la función que tienes en la lista
            window.parent.location.reload(); // Recarga la lista para ver los cambios
        })
        .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>