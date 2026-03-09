<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <style>
    /* 1. Elimina la barra de desplazamiento y ajusta el fondo */
    html, body {
        overflow: hidden; 
        background-color: #ffffff;
        margin: 0;
        padding: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* 2. Estructura del Formulario */
    #EditCliente {
        display: flex;
        flex-direction: column;
        gap: 8px; /* Espaciado uniforme entre elementos */
        max-width: 100%;
    }

    /* 3. Filas de dos columnas */
    .form-row {
        display: flex;
        gap: 12px;
    }

    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    /* 4. Estilos de Etiquetas e Inputs */
    label {
        font-size: 13px;
        font-weight: 600;
        color: #555;
        margin-bottom: 3px;
    }

    input[type="text"], 
    input[type="tel"], 
    select {
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        transition: border-color 0.2s;
    }

    input:focus, select:focus {
        outline: none;
        border-color: #4CAF50;
        background-color: #f9fff9;
    }

    /* 6. Botón Enviar */
    input[type="submit"] {
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
        background-color: #388E3C;
    }
</style>
</head>
<body>
    <form action="<?= base_url('edita_cliente') ?>" method="post" id="EditCliente">
    <input type="hidden" name="id" value="<?=esc($clientes['id'])?>">

    <div class="form-row">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nome" value="<?= esc($clientes['nombre'])?>" required>
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="apel" value="<?= esc($clientes['apellido'])?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Calle</label>
        <input type="text" name="calle" value="<?= esc($clientes['calle'])?>" required>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label>Colonia</label>
            <input type="text" name="col" value="<?= esc($clientes['colonia'])?>" required>
        </div>
        <div class="form-group">
            <label>Número</label>
            <input type="text" name="nume" value="<?= esc($clientes['numero'])?>" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label>RFC</label>
            <input type="text" name="rfc" value="<?= esc($clientes['rfc'])?>" required>
        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <input type="tel" name="tele" value="<?= esc($clientes['telefono'])?>" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group">
            <label>Tipo de cliente</label>
            <select name="t_cliente">
                <option value="contado/menudeo" <?= $clientes['tipo_cliente'] == 'contado/menudeo' ? 'selected' : '' ?>>Contado/Menudeo</option>
                <option value="credito/mayoreo" <?= $clientes['tipo_cliente'] == 'credito/mayoreo' ? 'selected' : '' ?>>Crédito/Mayoreo</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tipo de crédito</label>
            <input type="text" name="t_credito" value="<?= esc($clientes['tipo_credito'])?>" required>
        </div>
    </div>

    <input type="submit" value="Guardar Cambios">
</form>
<script>
    const miForm = document.getElementById('EditCliente');
    miForm.addEventListener('submit', (e) => {
        e.preventDefault(); 

        
        const formData = new FormData(miForm);

        fetch(miForm.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
        
            window.parent.cierraModal('EditCliente'); 
            window.parent.location.reload(); 
        })
        .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>