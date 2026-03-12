<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añade entradas</title>
<style>

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 20px;
            color: #1e293b;
        }

        #crearEntradas {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .full-width {
            grid-column: span 2;
        }

        label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="number"],
        select {
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.2s ease;
            outline: none;
            background-color: #f8fafc;
            color: #334155;
        }

        input:focus, select:focus {
            border-color: #10b981;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15);
        }

        input[readonly] {
            background-color: #e2e8f0;
            border-color: #cbd5e1;
            color: #64748b;
            cursor: not-allowed;
        }

        input[readonly]:focus {
            box-shadow: none;
            border-color: #cbd5e1;
        }

        input[type="submit"] {
            grid-column: span 2;
            background: #5bb982; 
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
            background: #059669;
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        @media (max-width: 500px) {
            #crearEntradas {
                grid-template-columns: 1fr;
            }
            .full-width, input[type="submit"] {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>
    <form action="<?= base_url('Guardar_Entrada') ?>" method="post" id="crearEntradas">

        <div class="form-group full-width">        
        <label>Registrado el:</label>
        <?php 
            date_default_timezone_set('America/Mexico_City'); 
            $fecha_mexico = date('Y-m-d H:i:s'); 
        ?>
        <input type="text" name="fecha" value="<?=$fecha_mexico; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="precioc">Precio de compra $:</label>
            <input type="number" name="precio_compra" step="0.01" min="0" placeholder="0.00" required>
        </div>

        <div class="form-group">
        <label for="preciov">Precio de venta $ :</label>
        <input type="number" name="precio_venta" step="0.01" min="0" placeholder="0.00" required>
        </div>

        <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cant" min="1" placeholder="Ej. 10" required>
        </div>

        <div class="form-group">
       <label for="u_med">Unidad de Medida:</label>
            <select name="u_med" required>
                 <option value="" disabled selected>Seleccione una opción</option>
                    <?php foreach($unidades as $u): ?>
                <option value="<?= $u['id']; ?>">
                    <?= $u['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group full-width">
            <label for="producto_asignado">Producto asignado:</label>
            <select name="prod_id" required>
                 <option value="" disabled selected>Seleccione una opción</option>
                    <?php foreach($productos as $p): ?>
                <option value="<?= $p['id']; ?>">
                    <?= $p['nombre']; ?> </option>
                    <?php endforeach; ?>
            </select>
        </div>
        
        <input type="submit" value="Enviar">
    </form>
    <script>
        const miForm = document.getElementById('crearEntradas');
        miForm.addEventListener('submit', (e) => {
            e.preventDefault(); 
        
            const formData = new FormData(miForm);

            fetch(miForm.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {
        
                window.parent.cierraModal('modalEntrada'); 
                window.parent.location.reload(); 
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>