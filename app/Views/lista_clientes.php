<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Lista de clientes</title>
    <style>
        :root {
            --primary: #10b981;
            --primary-dark: #059669;
            --slate-900: #0f172a;
            --slate-600: #475569;
            --slate-100: #f1f5f9;
            --bg-page: #f8fafc;
            --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        body {
            background-color: var(--bg-page);
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            padding: 30px;
        }

        .tableC {
            background: white;
            border-radius: 20px;
            padding: 0;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.05);
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
        }

        .custom-table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
        }
        .custom-table thead th {
            background-color: #f1f3f5 !important;
            color: #495057 !important;
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 15px !important;
            border-bottom: 2px solid #dee2e6 !important;
            white-space: nowrap;
        }

        .custom-table thead th i{
            margin-left:6px;
            vertical-align:middle;
        }
        .custom-table tbody td {
            padding: 12px 15px !important;
            vertical-align: middle !important;
            border-bottom: 1px solid #f2f2f2 !important;
        }
        .custom-table tbody tr{
            transition: all 0.25s ease;
        }

        .custom-table tbody tr:hover{
            background-color: #f0fdf4; /* verde muy claro */
            transform: scale(1.01);
            box-shadow: 0 3px 8px rgba(0,0,0,0.08);
            cursor: pointer;
        }
        .link-delete {
            color: #d32f2f;
            font-size: 1.1rem;
            transition: var(--transition);
            display: inline-block;
        }
        .link-delete:hover {
            transform: scale(1.2);
            color: #b71c1c;
        }

        .w3-modal {
            padding-top: 50px;
            backdrop-filter: blur(4px);
            background-color: rgba(0,0,0,0.4);
        }
        .w3-modal-content {
            border-radius: 15px !important;
            overflow: hidden;
            border: none;
        }
        
        iframe {
            background-color: #fff;
            border-radius: 0 0 15px 15px;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            
            <h2 style="font-weight: 700; color: #333;">
            <i class="bi bi-people-fill"></i> Directorio De Clientes</h2>
            
            <button onclick="abreModal('modalCliente', '<?= base_url('crea_cliente') ?>')" 
                    class="w3-button w3-green w3-round-xlarge btn-add">
                <i class="bi bi-person-fill-add"></i> Agregar Cliente
            </button>
        </div>
        <div class = "tableC">
            <table class="w3-table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre <i class="bi bi-person-bounding-box"></i></th>
                        <th>Apellido <i class="bi bi-person-bounding-box"></i></th>
                        <th>Calle <i class="bi bi-geo-alt"></i></th>
                        <th>Colonia <i class="bi bi-geo-alt"></i></th>
                        <th>Numero <i class="bi bi-house-door"></i></th>
                        <th>Rfc <i class="bi bi-person-vcard"></i></th>
                        <th>Tipo de cliente <i class="bi bi-person-square"></i></th>
                        <th>Telefono <i class="bi bi-telephone-fill"></i></th>
                        <th>Tipo de credito <i class="bi bi-credit-card-2-front-fill"></i></th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($clientes as $cliente): ?>
                        <tr>
                                <td><strong>#<?= $cliente['id'] ?></strong>
                            </td><td><i class="bi bi-person-circle"></i> <?= $cliente['nombre'] ?>
                            </td><td><?= $cliente['apellido'] ?>
                            </td><td><?= $cliente['calle'] ?>
                            </td><td><?= $cliente['colonia'] ?>
                            </td><td><?= $cliente['numero'] ?>
                            </td><td><?= $cliente['rfc'] ?>
                            </td><td><?= $cliente['tipo_cliente'] ?>
                            </td><td><?= $cliente['telefono'] ?>
                            </td><td><?= $cliente['tipo_credito'] ?>
                                </td>

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

<div id="modalCliente" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Añadir nuevo cliente</h2>
            <span onclick="cierraModal('modalCliente')" 
                  class="w3-button w3-display-topright w3-hover-red" 
                  style="font-size: 1rem; cursor: pointer;">&times;</span>
        </header>

        <div class="w3-container" style="padding: 15px;">
            <iframe id="iframeAdd" 
                    style="width:100%; height:480px; border:none; display:block;">
            </iframe>
        </div>

        <footer class="w3-container w3-light-grey" 
                style="padding: 10px 20px; text-align: right; border-top: 1px solid #ddd;">
            <button class="w3-button w3-white w3-border w3-round-large" 
                    onclick="cierraModal('modalCliente')">Cancelar</button>
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
<div id="EditCliente" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4" 
         style="width:70%; max-width:850px; border-radius:15px; overflow:hidden; background-color: #fff;">
        
        <header class="w3-container w3-green" style="padding: 8px 20px; display: flex; justify-content: space-between; align-items: center;"> 
            <h2 style="margin:0; font-size: 1.4rem; font-weight: 600;">Editar cliente</h2>
            <span onclick="cierraModal('EditCliente')"
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
                    onclick="cierraModal('EditCliente')">Cancelar</button>
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