<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <title>Lista de clientes</title>
</head>
<body>
    <button onclick="abreModal('modalCliente', '<?= base_url('crea_cliente') ?>')" 
        class="w3-button w3-green w3-round-xlarge">
    Agregar cliente
    </button>
    <table class="w3-table w3-bordered w3-striped w3-hoverable w3-card">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Calle</th>
                <th>Colonia</th>
                <th>Numero</th>
                <th>Rfc</th>
                <th>Tipo de cliente</th>
                <th>Telefono</th>
                <th>Tipo de credito</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente){
            echo ("<tr><td>".$cliente['id'].
            "</td><td>".$cliente['nombre'].
            "</td><td>".$cliente['apellido'].
            "</td><td>".$cliente['calle'].
            "</td><td>".$cliente['colonia'].
            "</td><td>".$cliente['numero'].
            "</td><td>".$cliente['rfc'].
            "</td><td>".$cliente['tipo_cliente'].
            "</td><td>".$cliente['telefono'].
            "</td><td>".$cliente['tipo_credito']."</td>
            <td>
            <button onclick=\"abreModal('EditCliente', '".base_url('pasoid/'.$cliente['id'])."')\" 
            class=\"w3-button w3-green w3-border\">
            <i class=\"fa-solid fa-pencil\"></i>
            </button>
            </td>
            
            <td><a href='".base_url('borrarid/'.$cliente['id'])."'><i class='fa-solid fa-trash'></i></i></a></td>
            </tr>");
            } //<td><a href='".base_url('pasoid/'.$cliente['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
            ?>
        </tbody>
    </table>

    <div id="modalCliente" class="w3-modal">
    <div class="w3-modal-content w3-animate-top"
        style="width:60%; max-width:800px; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,0.3);">
      <header class="w3-container w3-green"style="border-radius:10px 10px 0 0;"> 
        <span onclick="cierraModal('modalCliente')"
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="margin:0;">Añadir cliente</h2>
      </header>
        <div class="w3-container" style="padding:20px;">
            <iframe id="iframeAdd"
            style="width:100%; height:450px; border:none;"></iframe>
        </div>
      <footer class="w3-container w3-green"
         style="border-radius:0 0 10px 10px; text-align:right;">
        <button class="w3-button w3-white" onclick="cierraModal('modalCliente')">Cerrar</button>
    </footer>
    </div>
  </div>
    <div id="EditCliente" class="w3-modal">
    <div class="w3-modal-content w3-animate-top"
        style="width:60%; max-width:800px; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,0.3);">
      <header class="w3-container w3-green"style="border-radius:10px 10px 0 0;"> 
        <span onclick="cierraModal('EditCliente')"
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="margin:0;">Editar cliente</h2>
      </header>
        <div class="w3-container" style="padding:20px;">
            <iframe id="iframeEdit"
            style="width:100%; height:450px; border:none;"></iframe>
        </div>
      <footer class="w3-container w3-green"
         style="border-radius:0 0 10px 10px; text-align:right;">
        <button class="w3-button w3-white" onclick="cierraModal('EditCliente')">Cerrar</button>
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