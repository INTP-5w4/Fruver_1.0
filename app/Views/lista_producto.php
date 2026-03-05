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
        <table class="w3-table w3-bordered w3-striped w3-hoverable w3-card">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Unidad de medida</td>
                <td>Descripción</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
        </thead>
        <tbody>
             <?php
             foreach ($productos as $producto){
            echo ("<tr><td>".$producto['id'].
                "</td><td>".$producto['nombre'].
                "</td><td>".$producto['id_unidad_medida'].
                "</td><td>".$producto['descripcion']."</td>
                <td>
                <button onclick=\"abreIframe('".base_url('pasaid/'.$producto['id'])."')\" 
                class=\"w3-button w3-green w3-border\">
                <i class=\"fa-solid fa-pencil\"></i>
                </button>
                </td>
                                
                <td><a href='".base_url('borraid/'.$producto['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                </tr>");
            } //<td><a href='".base_url('pasaid/'.$producto['id'])."'><i class='fa-solid fa-pencil'></i></a></td>
            ?>
        </tbody>
    </table>

    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top"
        style="width:60%; max-width:800px; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,0.3);">
      <header class="w3-container w3-green"style="border-radius:10px 10px 0 0;"> 
        <span onclick="cierraIframe()"
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="margin:0;">Editar producto</h2>
      </header>
        <div class="w3-container" style="padding:20px;">
            <iframe id="iframecontenido"
            style="width:100%; height:450px; border:none;"></iframe>
        </div>
      <footer class="w3-container w3-green"
         style="border-radius:0 0 10px 10px; text-align:right;">
        <button class="w3-button w3-white" onclick="cierraIframe()">Cerrar</button>
    </footer>
    </div>
  </div>
<script>
    const modal = document.getElementById('id01');
    const iframe= document.getElementById('iframecontenido');
    
        function abreIframe(url){
            iframe.src=url
            modal.style.display="block";
        }
        function cierraIframe(){
            modal.style.display="none";
            iframe.src="";
        }
        window.onclick = function(event){
            if(event.target == modal){
            cierraIframe();
            }
        }    
</script>
    
</body>
</html>