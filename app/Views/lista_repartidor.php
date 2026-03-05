<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <title>Document Title</title>
</head>
<body>
    <button onclick="abreModal('modalRepartidor', '<?= base_url('alta_repartidor') ?>')" 
    class="w3-button w3-green w3-round-xlarge">
    Añadir Repartidor
    </button>

    <table class="w3-table w3-bordered w3-striped w3-hoverable w3-card">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>CURP</td>
                <td>RFC</td>
                <td>Domicilio</td>
                <td>E-mail</td>
                <td>Telefono</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach($repartidores as $repartidor){
                echo (  "<tr><td>".$repartidor['id']. 
                "</td><td>".$repartidor['nombre'].
                "</td><td>".$repartidor['apellido'].
                "</td><td>".$repartidor['curp'].
                "</td><td>".$repartidor['rfc'].
                "</td><td>".$repartidor['domicilio'].
                "</td><td>".$repartidor['correo_electronico'].
                "</td><td>".$repartidor['telefono']."</td>
                <td>
                <button onclick=\"abreModal('EditRepartidor', '".base_url('pasa_id_repartidor/'.$repartidor['id'])."')\" 
                class=\"w3-button w3-green w3-border\">
                <i class=\"fa-solid fa-pencil\"></i>
                </button>
                </td>
                
                <td><a href='".base_url('borra_id_repartidor/'.$repartidor['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>");
                }//"</td><td><a href='".base_url('pasa_id_repartidor/'.$repartidor['id'])."'><i class='fa-solid fa-pencil'></i></a>".
                ?>
        </tbody>
    </table>
        <div id="modalRepartidor" class="w3-modal">
    <div class="w3-modal-content w3-animate-top"
        style="width:60%; max-width:800px; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,0.3);">
      <header class="w3-container w3-green"style="border-radius:10px 10px 0 0;"> 
        <span onclick="cierraModal('modalRepartidor')"
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="margin:0;">Añadir Repartidor</h2>
      </header>
        <div class="w3-container" style="padding:20px;">
            <iframe id="iframeAdd"
            style="width:100%; height:450px; border:none;"></iframe>
        </div>
      <footer class="w3-container w3-green"
         style="border-radius:0 0 10px 10px; text-align:right;">
        <button class="w3-button w3-white" onclick="cierraModal('modalRepartidor')">Cerrar</button>
    </footer>
    </div>
  </div>
    <div id="EditRepartidor" class="w3-modal">
    <div class="w3-modal-content w3-animate-top"
        style="width:60%; max-width:800px; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,0.3);">
      <header class="w3-container w3-green"style="border-radius:10px 10px 0 0;"> 
        <span onclick="cierraModal('EditRepartidor')"
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="margin:0;">Editar Repartidor</h2>
      </header>
        <div class="w3-container" style="padding:20px;">
            <iframe id="iframeEdit"
            style="width:100%; height:450px; border:none;"></iframe>
        </div>
      <footer class="w3-container w3-green"
         style="border-radius:0 0 10px 10px; text-align:right;">
        <button class="w3-button w3-white" onclick="cierraModal('EditRepartidor')">Cerrar</button>
    </footer>
    </div>
  </div>
  
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