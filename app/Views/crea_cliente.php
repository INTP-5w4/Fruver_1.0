<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir cliente</title>
<style>
        /* 1. Configuración Base */
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        /* 2. Contenedor Principal (Grid) */
        #crearCliente {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Crea 2 columnas iguales */
            gap: 15px 20px; /* Espacio entre campos (vertical y horizontal) */
            max-width: 100%;
        }

        /* 3. Estilo de los Grupos de Input */
        .form-group {
            display: flex;
            flex-direction: column;
        }

        /* Campos que deben ocupar todo el ancho (como Calle o el Botón) */
        .full-width {
            grid-column: span 2;
        }

        /* 4. Etiquetas (Labels) */
        label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #555;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* 5. Inputs y Selects */
        input[type="text"],
        input[type="tel"],
        select {
            padding: 10px 12px;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
            background-color: #f9f9f9;
        }

        input:focus, select:focus {
            border-color: #4CAF50;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.2);
        }

        /* 6. Botón Enviar */
        input[type="submit"] {
            grid-column: span 2;
            background: #5bb982; /* Color principal unificado */
            color: white;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.2s, transform 0.1s;
        }

        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(46, 125, 50, 0.4);
        }

        input[type="submit"]:active {
            transform: translateY(0);
        }

        /* 7. Responsive (Si la modal es muy pequeña, usa 1 columna) */
        @media (max-width: 500px) {
            #crearCliente {
                grid-template-columns: 1fr;
            }
            .full-width, input[type="submit"] {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>

    <form action="<?=base_url('guardar_cliente') ?>" method="post" id="crearCliente">
        
        <div class="form-group">
            <label for="nome">Nombre</label>
            <input type="text" name="nome" id="nome" required placeholder="Ej. Juan">
        </div>

        <div class="form-group">
            <label for="apel">Apellido</label>
            <input type="text" name="apel" id="apel" required placeholder="Ej. Pérez">
        </div>

        <div class="form-group full-width">
            <label for="calle">Calle</label>
            <input type="text" name="calle" id="calle" required placeholder="Nombre de la vialidad">
        </div>

        <div class="form-group">
            <label for="col">Colonia</label>
            <input type="text" name="col" id="col" required>
        </div>

        <div class="form-group">
            <label for="nume">Número</label>
            <input type="text" name="nume" id="nume" placeholder="Ext e Int">
        </div>

        <div class="form-group">
            <label for="rfc">RFC</label>
            <input type="text" name="rfc" id="rfc" placeholder="ABCD123456XYZ">
        </div>

        <div class="form-group">
            <label for="t_cliente">Tipo de cliente</label>
            <select name="t_cliente" id="t_cliente">
                <option value="contado/menudeo">Contado / Menudeo</option>
                <option value="credito/mayoreo">Crédito / Mayoreo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tele">Teléfono</label>
            <input type="tel" name="tele" id="tele" placeholder="10 dígitos">
        </div>

        <div class="form-group">
            <label for="t_credito">Tipo de crédito</label>
            <input type="text" name="t_credito" id="t_credito" placeholder="Ej. 15 días">
        </div>

        <input type="submit" value="Guardar Cliente">
    
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