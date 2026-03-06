<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Unidad</title>
    <style>
        html, body {
            overflow: hidden; 
            margin: 0;
            padding: 15px;
            font-family: sans-serif;
            background-color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            font-size: 14px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Crucial para evitar scroll horizontal */
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        /* Ocultamos el botón de lista si el formulario está en un modal */
        .btn-lista {
            display: none; 
        }
    </style>
</head>
<body>

    <form action="<?= base_url('Guarda_Unidad')?>" method="Post" id='crearUnidad'>
        <label for="nom">Nombre</label>
        <input type="text" name="nom" placeholder="Ej: Kilogramo" required>

        <label for="abrev">Abreviación</label>
        <input type="text" name="abrev" placeholder="Ej: kg" required>

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
                // Cambia 'modalUnidad' por el ID real que usas en tu lista principal
                window.parent.cierraModal('modalUnidad'); 
                window.parent.location.reload(); 
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>