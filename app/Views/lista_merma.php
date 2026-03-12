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
    <title>Document Title</title>

</head> 
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <h2 style="font-weight: 700; color: #333;">
             Control De Merma</h2>
            
            <button onclick="abreModal('modalMerma', '<?= base_url('crea_merma') ?>')" 
                    class="w3-button w3-green w3-round-xlarge btn-add">
                <i class="fa-solid fa-plus me-2"></i></i> Agregar merma
            </button>
        </div>
        <div class = "tableC">
            <table class="w3-table custom-table">
                <thead>
                    <tr>
                        <th><i class="bi bi-key"></i> ID</th>
                        <th><i class="bi bi-box-arrow-in-right"></i> Entrada ID</th>
                        <th><i class="bi bi-box-arrow-down-left"> Cantidad</i></th>
                        <th><i class="bi bi-calendar"></i> Fecha</th>
                        <th><i class="bi bi-text-paragraph"></i> Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($mermas as $merma):?>
                        <tr>
                            <td><strong>#<?= $merma['id'] ?></strong></td>
                            <td><?= $merma['entradas_id'] ?></td>
                            <td><?= $merma['cantidad'] ?></td>
                            <td><?= $merma['fecha'] ?></td>
                            <td><?= $merma['descripcion'] ?></td>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Borrar</th>

                            <td class="text-center">
                                <button onclick="abreModal('EditCliente', '<?= base_url('pasoid/'.$cliente['id']) ?>')"
                                    class="w3-button w3-white w3-border w3-border-green w3-round-large">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </td>
                            
                            <td class="text-center">
                                <a href="<?=base_url('borrarid/'.$cliente['id']) ?>"
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

<div id="modalMerma" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Añadir Merma</h2>
            <span onclick="cierraModal('modalMerma')" 
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:350px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('modalMerma')">Cancelar</button>
        </footer>
    </div>
</div>

<div id="EditMerma" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Editar Merma</h2>
            <span onclick="cierraModal('EditMerma')"
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:400px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('EditMerma')">Cancelar</button>
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