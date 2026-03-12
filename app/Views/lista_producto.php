<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_lista.css') ?>">
    <title>Lista de productos</title>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <h2 style="font-weight: 700; color: #333;">
            <i class="bi bi-box-seam"></i> Registro De Productos</h2>
            
            <button onclick="abreModal('modalProducto', '<?= base_url('crea_producto') ?>')" 
                    class="w3-button w3-green w3-round-xlarge btn-add">
                <i class="bi bi-plus-square"></i> Agregar Producto
            </button>
        </div>
        <div class = "tableC">
            <table class="w3-table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th><i class="bi bi-person-bounding-box"></i> Nombre</th>
                        <th>Unidad de medida</th>
                        <th><i class="bi bi-text-paragraph"></i> Descripción</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($productos as $producto):?>
                        <tr>
                            <td><?= $producto['id']?></td>
                            <td><?= $producto['nombre']?></td>
                            <td><?= $producto['id_unidad_medida']?></td>
                            <td><?= $producto['descripcion']?></td>
                            
                            <td class="text-center">
                                <button onclick="abreModal('EditProducto', '<?= base_url('pasaid/'.$producto['id']) ?>')"
                                    class="w3-button w3-white w3-border w3-border-green w3-round-large">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </td>
                            
                            <td class="text-center">
                                <a href="<?=base_url('borrarid/'.$producto['id']) ?>"
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

<div id="modalProducto" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Añadir Producto</h2>
            <span onclick="cierraModal('modalProducto')" 
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:410px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('modalProducto')">Cancelar</button>
        </footer>
    </div>
</div>

<div id="EditProducto" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Editar Producto</h2>
            <span onclick="cierraModal('EditProducto')" 
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:410px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('EditProducto')">Cancelar</button>
        </footer>
    </div>
</div>


    <script>
        function abreModal(idModal, url) {
            const modal = document.getElementById(idModal);
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

        // Cerrar al hacer clic fuera del modal
        window.onclick = function(event) {
            if (event.target.className === 'w3-modal') {
                event.target.style.display = "none";
                const iframe = event.target.querySelector('iframe');
                if (iframe) iframe.src = "";
            }
        }
    </script>
</body>
</html>