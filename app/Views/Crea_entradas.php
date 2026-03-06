<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añade entradas</title>
</head>
<body>
    <form action="<?= base_url('Guardar_Entrada') ?>" method="post" id="crearEntradas">
        <label>Registrado el:</label>
        <?php 
            date_default_timezone_set('America/Mexico_City'); 
            $fecha_mexico = date('Y-m-d H:i:s'); 
        ?>
        <input name="fecha" value="<?=$fecha_mexico; ?>" readonly><br>
        <label for="precioc">Precio de compra:</label>
        <input type="number" name="precio_compra" placeholder="Inserte solo números"><br>
        
        <label for="preciov">Precio de venta:</label>
        <input type="number" name="precio_venta" placeholder="Inserte solo números"><br>
        
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cant" placeholder="Inserte solo números"><br>
        
       <label for="u_med">Unidad de Medida:</label>
            <select name="u_med" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($unidades as $u): ?>
                <option value="<?= $u['id']; ?>">
                    <?= $u['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select><br>

            <label for="producto_asignado">Producto asignado:</label>
            <select name="prod_id" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($productos as $p): ?>
                <option value="<?= $p['id']; ?>">
                    <?= $p['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select><br>
        






        <input type="submit" value="Enviar">
    </form>
    <script>
const miForm = document.getElementById('crearEntradas');
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