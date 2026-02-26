<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilos/main_page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="acciones">
                    <p>Acciones</p>
                        <ul>
                            <li><a href="<?= base_url('crea_producto') ?>">Añadir productos</a></li>
                            <li><a href="<?= base_url('lista')?>">Clientes</a></li>
                            <li><a href="<?= base_url('lista_merma')?>">Merma</a></li>
                            <li><a href="<?= base_url('Crea_entradas')?>">Entradas</a></li>
                            <li><a href="<?= base_url('Crea_Unidad')?>">Unidades</a></li>
                        </ul>
                </div>
                
                    
            </nav>       
        </div>
            
    </header>
    <section class="H_padre">
        <div class="hero2">
            <div class="container_h1">
                <h1>FRU</h1>
                <h1 class="ver">VER</h1>
            </div>
            <h2>Frutas y verduras de Veracruz</h2>
            <p>Somos una compañia mexicana con una historia damiliar detrás, ofrecemos productos de origen mexicano y alta calidad, los cuales esperamos que degustes y disfrutes.
             Más que una empresa, somos familia dando lo mejor desde México para México.            </p>
            <div class="container_button">
                <a href="<?= base_url('lista_producto')?>"><button>Ver productos</button></a>
            </div>
            
             <div class="iconos_hero">
                <div><i class="fa-solid fa-truck-arrow-right"></i> <p>Envio rapido</p></div>
                <div><i class="fa-regular fa-clock"></i><p>Gran disponibilidad</p></div>
                <div><i class="fa-solid fa-leaf"></i><p>100% Natural</p></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container_links">
        <a href="#"><button onclick="Abrir_lista_producto()">Productos</button></a>
        <a href="#"><button onclick="Abrir_lista_producto()">Pedidos</button></a>
        <a href="#"><button onclick="Abrir_lista_producto()">Merma</button></a>
        <a href="#"><button onclick="Abrir_lista_producto()">Entradas</button></a>
        <a href="#"><button onclick="Abrir_lista_producto()">Créditos</button></a>
        <a href="#"><button onclick="Abrir_lista_producto()">Clientes</button></a>
        <a href="#"><button onclick="Abrir_lista_producto()">Repartidores</button></a>
        </div>
    </section>
    <footer>
        <div class="footer_container">
            <div class="foot_contacto">
                <h4>Contacto</h4>
                <p>email: 123456789@gmail.com</p>
                <p>telefono: +52 12 34 56 78 90</p>
                <pre>Direccion: Calle Pancho Villa #5 colonia De Mayo,
                    Puebla de Zaragoza
                </pre>
            </div>
            
            <div class="foot_atajo">
                <h4>Atajos</h4>
                <ul>
                    <li><a href="#">Pagina de inicio</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Productos</a></li>
                </ul>
            </div>
            
            <div class="foot_redes">
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            </div>
        </div>
    </footer>
</body>
</html>