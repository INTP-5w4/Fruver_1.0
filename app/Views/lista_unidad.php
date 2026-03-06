<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <title>Lista de Unidades</title>
</head>
<body>
    <button onclick="abreModal('modalUnidad', '<?= base_url('Crea_Unidad') ?>')" 
        class="w3-button w3-green w3-round-xlarge">
    Agregar unidad
    </button>
    <table class="w3-table w3-bordered w3-striped w3-hoverable w3-card">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Abreviacion</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>
             <?php
             foreach ($unidades as $unidad){
            echo ("<tr><td>".$unidad['id'].
                "</td><td>".$unidad['nombre'].
                "</td><td>".$unidad['abreviacion']."</td>
                <td>
                <button onclick=\"abreModal('EditUnidad','".base_url('pasaidunidad/'.$unidad['id'])."')\" 
                class=\"w3-button w3-green w3-border\">
                <i class=\"fa-solid fa-pencil\"></i>
                </button>
                
                </td>
                
                <td><a href='".base_url('borraidunidad/'.$unidad['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                 </tr>");

            } //"</td><td><a href='".base_url('pasaidunidad/'.$unidad['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
            ?>
        </tbody>
    </table>
<div id="modalUnidad" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Añadir unidad</h2>
            <span onclick="cierraModal('modalUnidad')" 
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1 rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:500px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('modalUnidad')">Cancelar</button>
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

  <div id="EditUnidad" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Editar Unidad</h2>
            <span onclick="cierraModal('EditUnidad')"
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1 rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:500px; border:none; display:block;">
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