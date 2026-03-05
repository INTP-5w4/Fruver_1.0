<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <title>Document Title</title>

</head>
<body>
<button onclick="abreIframe('<?= base_url('crea_merma') ?>')" 
        class="w3-button w3-green w3-round-xlarge">
  Añadir Merma
</button>
    <table class="table table-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Entrada ID</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mermas as $merma){ ?>
                <tr>
                    <td><?= $merma['id'] ?></td>
                    <td><?= $merma['entradas_id'] ?></td>
                    <td><?= $merma['cantidad'] ?></td>
                    <td><?= $merma['fecha'] ?></td>
                    <td><?= $merma['descripcion'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div id="modalMerma" class="w3-modal">
    <div class="w3-modal-content w3-animate-top"
        style="width:60%; max-width:800px; border-radius:10px; box-shadow:0 8px 25px rgba(0,0,0,0.3);">
      <header class="w3-container w3-green"style="border-radius:10px 10px 0 0;"> 
        <span onclick="cierraIframe()"
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="margin:0;">Añadir merma</h2>
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
    const modal = document.getElementById('modalMerma');
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
