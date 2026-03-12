<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="<?= base_url('Estilos/style_lista.css') ?>">
    <title>Lista de Unidades</title>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <h2 style="font-weight: 700; color: #333;">
            <i class="bi bi-scale"></i> Unidades de medida</h2>

            <button onclick="abreModal('modalUnidad', '<?= base_url('Crea_Unidad') ?>')" 
                    class="w3-button w3-green w3-round-xlarge btn-add">
                <i class="bi bi-plus-circle"></i> Agregar Unidad
            </button>
        </div>
        <div class= "tableC">
            <table class="w3-table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Abreviacion</th>
                        <th class= "text-center">Editar</th>
                        <th class= "text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($unidades as $unidad):?>
                        <tr>
                            <td><?= $unidad['id'] ?>
                            </td><td><?=$unidad['nombre'] ?>
                            </td><td><?=$unidad['abreviacion'] ?></td>
                            <td class="text-center">
                                <button onclick="abreModal('EditUnidad', '<?= base_url('pasaidunidad/'.$unidad['id']) ?>')"
                                    class="w3-button w3-white w3-border w3-border-green w3-round-large">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </td>
                            
                            <td class="text-center">
                                <a href="<?=base_url('borraridunidad/'.$unidad['id']) ?>"
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

<div id="modalUnidad" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
        style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Añadir nueva unidad de medida</h2>
            <span onclick="cierraModal('modalUnidad')" 
                class="w3-button w3-display-topright w3-hover-red" 
                style="font-size: 1rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:260px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('modalUnidad')">Cancelar</button>
        </footer>
    </div>
</div>

<div id="EditUnidad" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
        style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Editar Unidad</h2>
            <span onclick="cierraModal('EditUnidad')"
                class="w3-button w3-display-topright w3-hover-red" 
                style="font-size: 1rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:260px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('EditUnidad')">Cancelar</button>
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