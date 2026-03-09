<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('lista_producto.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <title>Lista de productos</title>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background: #f4f9f5;
            padding: 28px;
        }

        #mas1 {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 40px;
            background-color: rgba(0, 122, 10, 0.822);
            color: white;
        }

        /* Tabla */
        .tabla-wrapper {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 100, 20, 0.10);
            margin-top: 20px;
            border: 1.5px solid #d6eedc;
        }

        .tabla-productos {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.93rem;
        }

        .tabla-productos thead tr {
            background: linear-gradient(135deg, #2d9e50, #1a7a38);
            color: #fff;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.8px;
        }

        .tabla-productos thead td {
            padding: 14px 18px;
            font-weight: 600;
        }

        .tabla-productos tbody tr {
            border-bottom: 1px solid #e8f5ec;
            transition: background 0.15s;
        }

        .tabla-productos tbody tr:last-child {
            border-bottom: none;
        }

        .tabla-productos tbody tr:hover {
            background: #f0faf3;
        }

        .tabla-productos tbody td {
            padding: 12px 18px;
            color: #2a4a32;
            vertical-align: middle;
        }

        .btn-editar {
            background: #e8f5ec;
            color: #2d9e50;
            border: 1.5px solid #b6dfc0;
            border-radius: 8px;
            padding: 6px 12px;
            cursor: pointer;
            transition: background 0.15s, transform 0.1s;
            font-size: 0.85rem;
        }

        .btn-editar:hover {
            background: #2d9e50;
            color: #fff;
            transform: translateY(-1px);
        }

        .btn-borrar {
            color: #c0392b;
            font-size: 1rem;
            transition: transform 0.1s, color 0.15s;
        }

        .btn-borrar:hover {
            color: #e74c3c;
            transform: scale(1.2);
        }

        /* Modal */
        #modalProducto .w3-modal-content {
            width: 90%;
            max-width: 540px;
            border-radius: 14px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.18);
            overflow: hidden;
        }

        #modalProducto .w3-container {
            padding: 0 !important;
        }

        #modalProducto header {
            background: #e8f5ec !important;
            border-bottom: 1.5px solid #c8e6ce;
            padding: 14px 20px !important;
        }

        #modalProducto header h2 {
            font-family: 'Figtree', sans-serif;
            font-size: 1.05rem;
            font-weight: 600;
            color: #1a4024;
            margin: 0;
        }

        #modalProducto header .w3-button {
            color: #2d6a3f;
        }

        #modalProducto footer {
            background: #e8f5ec !important;
            border-top: 1.5px solid #c8e6ce;
            padding: 10px 16px !important;
        }

        #modalProducto footer .w3-button {
            color: #2d6a3f;
            border: 1.5px solid #c8e6ce;
            border-radius: 8px;
            font-family: 'Figtree', sans-serif;
            font-size: 0.9rem;
        }

        #iframecontenido {
            width: 100%;
            height: calc(100vh - 220px);
            max-height: 560px;
            min-height: 400px;
            border: none;
            display: block;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <button onclick="abreIframe('modalProducto', '<?= base_url('crea_producto') ?>')" 
        class="w3-button w3-green w3-round-xlarge">
        Agregar producto
    </button>
    <a href="<?= base_url('crea_producto') ?>"><button class="mas" id="mas1">
        <i class="fa-solid fa-plus"></i>
    </button></a>

    <div class="tabla-wrapper">
        <table class="tabla-productos">
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
                        <button onclick=\"abreIframe('modalProducto', '".base_url('pasaid/'.$producto['id'])."')\" 
                        class=\"btn-editar\">
                        <i class=\"fa-solid fa-pencil\"></i>
                        </button>
                        </td>
                        <td><a class=\"btn-borrar\" href='".base_url('borraid/'.$producto['id'])."'><i class='fa-solid fa-trash-can'></i></a></td>
                        </tr>");
                }
                ?>
            </tbody>
        </table>
    </div>

    <div id="modalProducto" class="w3-modal">
        <div class="w3-modal-content w3-animate-top">
            <header class="w3-container w3-green" style="border-radius:10px 10px 0 0;">
                <span onclick="cierraModal('modalProducto')"
                    class="w3-button w3-display-topright">&times;</span>
                <h2 style="margin:0;">Agregar producto</h2>
            </header>

            <div class="w3-container">
                <iframe id="iframecontenido"></iframe>
            </div>

            <footer class="w3-container w3-green"
                style="border-radius:0 0 10px 10px; text-align:right; padding: 8px 16px;">
                <button class="w3-button w3-white" onclick="cierraModal('modalProducto')">Cerrar</button>
            </footer>
        </div>
    </div>

    <script>
        function abreIframe(idModal, url) {
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

        // Cerrar al hacer clic fuera del modal
        window.onclick = function(event) {
            if (event.target.className === 'w3-modal') {
                event.target.style.display = "none";
                const iframe = event.target.querySelector('iframe');
                if (iframe) iframe.src = "";
            }
        }
    </script>
</body>
</html>