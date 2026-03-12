<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_lista.css') ?>">
    <title>Lista de productos</title>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="font-weight: 700; color: #333;">Control De Entradas</h2>
            <button onclick="abreModal('modalEntrada', '<?= base_url('Crea_entradas') ?>')" 
                    class="w3-button w3-green w3-round-xlarge btn-add">
                <i class="fa-solid fa-plus me-2"></i> Agregar Entrada
            </button>
        </div>
        <div class = "tableC">
            <table class="w3-table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Precio Compra</th>
                        <th>Precio Venta</th>
                        <th>Cantidad</th>
                        <th>Producto id</th>
                        <th>Unidad de medida id</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($entradas as $entrada): ?>
                    <tr>
                        <td><strong>#<?= $entrada['id'] ?></strong>
                        </td><td><?= $entrada['fecha'] ?>
                        </td><td><?= $entrada['precio_compra'] ?>
                        </td><td><?= $entrada['precio_venta'] ?>
                        </td><td><?= $entrada['cantidad'] ?>
                        </td><td><?= $entrada['producto_id'] ?>
                        </td><td><?= $entrada['unidad_medida_id'] ?> </td>

                        <td class="text-center">
                            <button onclick="abreModal('EditEntrada', '<?= base_url('pasaid_entrada/'.$entrada['id']) ?>')"
                                class="w3-button w3-white w3-border w3-border-green w3-round-large">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url('borraid_entrada/'.$entrada['id']) ?>"
                                class="link-delete"
                                onclick="return confirm('¿Estás seguro de eliminar esta entrada?')"
                            ><i class='fa-solid fa-trash-can'></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

<div id="modalEntrada" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Añadir Entrada</h2>
            <span onclick="cierraModal('modalEntrada')" 
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1 rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:410px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('modalEntrada')">Cancelar</button>
        </footer>
    </div>
</div>

<style>
    .w3-modal {
        padding-top: 30px; /* Acercamos la modal al borde superior */
        background-color: rgba(0,0,0,0.5); /* Fondo oscuro semitransparente */
        backdrop-filter: blur(3px); /* Desenfoque de fondo moderno */
    }
</style>
<div id="EditEntrada" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Editar Entrada</h2>
            <span onclick="cierraModal('EditEntrada')"
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1 rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:410px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('EditEntrada')">Cancelar</button>
        </footer>
    </div>
</div>

<style>
    .w3-modal {
        padding-top: 30px; /* Acercamos la modal al borde superior */
        background-color: rgba(0,0,0,0.5); /* Fondo oscuro semitransparente */
        backdrop-filter: blur(3px); /* Desenfoque de fondo moderno */
    }
</style>

<script>
    function abreModal(idModal, url) {
        const modal = document.getElementById(idModal);
        // Buscamos el iframe que está dentro de ESE modal específico
        const iframe = modal.querySelector('iframe');
        
        iframe.src = url;
        modal.style.display = "block";
    }

    function cierraModal(idModal) {
        const modal = document.getElementById(idModal);
        const iframe = modal.querySelector('iframe');
        
        modal.style.display = "none";
        iframe.src = "";
    }

    // Cerrar al hacer clic fuera
    window.onclick = function(event) {
        if (event.target.className === 'w3-modal') {
            event.target.style.display = "none";
            const iframe = event.target.querySelector('iframe');
            if(iframe) iframe.src = "";
        }
    }
</script>
    
</body>
</html>