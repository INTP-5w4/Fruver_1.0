<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/main_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Página de Inicio</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">FRUVER</p>
            <nav>
                <a href="#">Sobre nosotros</a>
                <a href="#">Productos</a>
                <a href="#">Contacto</a>
                <a href="<?= base_url('crea_producto') ?>">Añadir productos</a>

            </nav>       
        </div>
            
    </header>
    <hero>
        <h1>FRUVER</h1>
        <h2>Frutas y verduras de Veracruz</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi dolore ipsa repudiandae voluptatum reprehenderit saepe accusantium assumenda ratione incidunt esse! In nostrum ut inventore quis, molestias sequi consequuntur eos beatae.</p>
        <a href="#"><button>Ver productos</button></a>
        <div><i class="fa-solid fa-truck-arrow-right"></i> <p>Envio rapido</p></div>
        <div><i class="fa-regular fa-clock"></i><p>Gran disponibilidad</p></div>
        <div><i class="fa-solid fa-leaf"></i><p>100% Natural</p></div>
    </hero>
    <section>
        <h2>Nuestros Productos</h2>
        <h6>Los mejores precios en frutas, verduras y abarrotes</h6>
        <h4>Frutas</h4>
        <div class="ver_mas">
            <h6>Ver mas frutas</h6>
        </div>
        <hr>


        <div class="container carrusel">
        <div class="card" style="width:350px">
            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
            <h4 class="card-title">Manzana</h4>
            <p class="card-text">La manzana es buena para no ir al doctor</p>
            <a href="#" class="btn btn-primary">ver mas</a>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer_container">
            <div class="foot_contenido">
                <h4>Contacto</h4>
                <p>email: 123456789@gmail.com</p>
                <p>telefono: +52 12 34 56 78 90</p>
                <pre>Direccion: Calle Pancho Villa #5 colonia De Mayo,
                    Puebla de Zaragoza
                </pre>
            </div>
            
            <div class="foot_contenido"></div>
            <h4>Atajos</h4>
            <ul>
                <li><a href="#">Pagina de inicio</a></li>
                <li><a href="#">Sobre nosotros</a></li>
                <li><a href="#">Productos</a></li>
            </ul>
            
            <div class="foot_contenido">
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            </div>
        </div>
    </footer>
</body>
</html>