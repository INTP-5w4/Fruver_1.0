<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('Estilos/style_lista.css') ?>">
    <title>Document Title</title>
</thead>
<body>
    <div class="container-fluid"> 
        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 style="font-weight: 700; color: #333;">
            <i class="bi bi-truck"></i> Directorio De Repartidores</h2>
            
            <button onclick="abreModal('modalRepartidor', '<?= base_url('alta_repartidor') ?>')" 
                    class="w3-button w3-green w3-round-xlarge btn-add">
                <i class="bi bi-person-plus"></i>  Agregar Repartidor
            </button>
        </div>
        <div class = "tableC">
            <table class="w3-table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th><i class="bi bi-person-bounding-box"></i> Nombre</th>
                        <th><i class="bi bi-person-bounding-box"></i> Apellido</th>
                        <th><i class="bi bi-person-vcard"></i> CURP</th>
                        <th><i class="bi bi-person-vcard"></i> RfC</th>
                        <th><i class="bi bi-geo-alt"></i> Domicilio</th>
                        <th><i class="bi bi-envelope"></i> E-mail</th>
                        <th><i class="bi bi-telephone-fill"></i> Telefono</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach($repartidores as $repartidor):?>
                        <tr>
                            <td><strong>#<?= $repartidor['id'] ?></strong>
                            </td><td><i class="bi bi-person-circle"></i> <?= $repartidor['nombre'] ?>
                            </td><td><?= $repartidor['apellido'] ?>
                            </td><td><?= $repartidor['curp'] ?>
                            </td><td><?= $repartidor['rfc'] ?>
                            </td><td><?= $repartidor['domicilio'] ?>
                            </td><td><?= $repartidor['correo_electronico'] ?>
                            </td><td><?= $repartidor['telefono'] ?></td>

                            <td class="text-center">
                                <button onclick="abreModal('EditRepartidor', '<?= base_url('pasa_id_repartidor/'.$repartidor['id']) ?>')"
                                    class="w3-button w3-white w3-border w3-border-green w3-round-large">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('borra_id_repartidor/'.$repartidor['id']) ?>"
                                    class="link-delete"
                                    onclick="return confirm('¿Estás seguro de eliminar este repartidor?')"
                                ><i class='fa-solid fa-trash-can'></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<div id="modalRepartidor" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Agregar Repartidor</h2>
            <span onclick="cierraModal('modalRepartidor')" 
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
                    onclick="cierraModal('modalRepartidor')">Cancelar</button>
        </footer>
    </div>
</div>

<style>
    .w3-modal {
        padding-top: 30px; 
        background-color: rgba(0,0,0,0.5); 
        backdrop-filter: blur(3px); 
    }
</style>
<div id="EditRepartidor" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Editar Repartidor</h2>
            <span onclick="cierraModal('EditRepartidor')"
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1 rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:400px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('EditRepartidor')">Cancelar</button>
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