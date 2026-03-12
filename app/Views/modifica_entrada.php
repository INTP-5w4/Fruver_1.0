<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_modifica.css') ?>">
    <title>Document Title</title>
</head>
<body>
    <form action="<?= base_url('modifica_Entrada') ?>" method="post" id=EditEntrada class="form-grid">
    <input type="hidden" name="id" value="<?=esc($entradas['id'])?>" require>  

    <div class="form-group full-width"> 
    <label>Fecha de modificacion</label>
       <?php 
            date_default_timezone_set('America/Mexico_City'); 
            $fecha_mexico = date('Y-m-d H:i:s'); 
        ?>
        
        <input name="fecha" value="<?=$fecha_mexico; ?>" readonly>
    </div>  

    <div class="form-group">
        <label>Precio de venta:</label>
        <input type="number" name="precio_venta" value="<?= esc($entradas['precio_venta'])?>"require>
    </div>

    <div class="form-group">
        <label>Precio de compra:</label>
        <input type="number" name="precio_compra" value="<?= esc($entradas['precio_compra'])?>"require>
    </div>

    <div class="form-group">
        <label>Cantidad:</label>
        <input type="number" name="cant" value="<?= esc($entradas['cantidad'])?>"require>
    </div>

    <div class="form-group">
        <label>Unidad de medida:</label>
        <select name="u_med" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($unidades as $uni): ?>
                <option value="<?= $uni['id']; ?>">
                    <?= $uni['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select>
    </div>

    <div class="form-group full-width"> 
        <label for="producto_asignado">Producto asignado:</label>
            <select name="prod_id" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($productos as $p): ?>
                <option value="<?= $p['id']; ?>">
                    <?= $p['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select>
    </div>
        
        <input type="submit" value="Enviar Cambios">
    </form>
<script>
    const miForm = document.getElementById('EditEntrada');
    miForm.addEventListener('submit', (e) => {
        e.preventDefault(); 

        
        const formData = new FormData(miForm);

        fetch(miForm.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
        
            window.parent.cierraModal('EditEntrada'); 
            window.parent.location.reload(); 
        })
        .catch(error => console.error('Error:', error));
    });
</script>

</body>
</html>