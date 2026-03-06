<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/lista_producto.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <title>Lista de productos</title>
</head>
<body>
    <button onclick="abreModal('modalEntrada', '<?= base_url('Crea_entradas') ?>')" 
        class="w3-button w3-green w3-round-xlarge">
    Agregar entrada
    </button>
    
    <table class="w3-table w3-bordered w3-striped w3-hoverable w3-card">
        <thead>
            <tr>
                <td>ID</td>
                <td>Fecha</td>
                <td>Precio Compra</td>
                <td>Precio Venta</td>
                <td>Cantidad</td>
                <td>Producto id</td>
                <td>Unidad de medida id</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>
        <tbody>
             <?php
             foreach ($entradas as $entrada){
            echo ("<tr><td>".$entrada['id'].
                "</td><td>".$entrada['fecha'].
                "</td><td>".$entrada['precio_compra'].
                "</td><td>".$entrada['precio_venta'].
                "</td><td>".$entrada['cantidad'].
                "</td><td>".$entrada['producto_id'].
                "</td><td>".$entrada['unidad_medida_id']."</td>
                <td><a href='".base_url('pasaid_entrada/'.$entrada['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
                <td><a href='".base_url('borraid_entrada/'.$entrada['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>");
            }
            ?>
        </tbody>
    </table>
        <div id="modalEntrada" class="w3-modal">
    <div class="w3-modal-content w3-animate-top"
        style="width:60%; max-width:800px; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,0.3);">
      <header class="w3-container w3-green"style="border-radius:10px 10px 0 0;"> 
        <span onclick="cierraModal('modalEntrada')"
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="margin:0;">Añadir entrada</h2>
      </header>
        <div class="w3-container" style="padding:20px;">
            <iframe id="iframecontenido"
            style="width:100%; height:450px; border:none;"></iframe>
        </div>
      <footer class="w3-container w3-green"
         style="border-radius:0 0 10px 10px; text-align:right;">
        <button class="w3-button w3-white" onclick="cierraIModel('modalEntrada')">Cerrar</button>
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