<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_crea.css') ?>">
    <title>Crear Unidad</title>
</head>

<body>
    <form action="<?= base_url('Guarda_Unidad')?>" method="post" id='crearUnidad' class="form-grid">

        <div class="form-group full-width">
        <label for="nom">Nombre</label>
        <input type="text" id="nom" name="nom" placeholder="Ej: Kilogramo" required>
        </div>
        
        <div class="form-group full-width">
        <label for="abrev">Abreviación</label>
        <input type="text" id="abrev" name="abrev" placeholder="Ej: kg" required>
        </div>

        <input type="submit" value="Guardar Unidad">

    </form>

    <script>
        const miForm = document.getElementById('crearUnidad');
        miForm.addEventListener('submit', (e) => {
            e.preventDefault(); 

            const formData = new FormData(miForm);

            fetch(miForm.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {

                window.parent.cierraModal('crearUnidad'); 
                window.parent.location.reload(); 
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>