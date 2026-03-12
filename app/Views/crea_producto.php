<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilos/crea_producto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_crea.css') ?>">
    <title>Añadir Productos</title>
</head>
<body>
    <form action="<?= base_url('crea_producto') ?>" method="post" id="creaProducto"class="form-grid">

        <div class="form-group">
        <label for="nom">Nombre</label>
        <input type="text" name="nom" placeholder="Ej: Tomate Saladet">
        </div>

        <div class="form-group">
        <label for="u_med">Unidad de Medida:</label>
            <select name="u_med" id="u_med" required>
                 <option value="" Placeholder="Seleccione una opcion"></option>
                    <?php foreach($unidades as $u): ?>
                <option value="<?= $u['id']; ?>">
                    <?= $u['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group full-width">
        <label for="desc">Descripción</label>
        <textarea name="desc" cols="20" rows="6" placeholder="Ej: Tomate Saladet es..."></textarea> 
        </div>
        
        <input type="submit" value="Enviar">
    </form>
    <script>
        const miForm = document.getElementById('creaProducto');
        miForm.addEventListener('submit', (e) => {
            e.preventDefault(); 

            const formData = new FormData(miForm);

            fetch(miForm.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {

                window.parent.cierraModal('modalProducto'); 
                window.parent.location.reload(); 
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
    
</body>
</html>