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
    <iframe src="<?= base_url('header') ?>" class="header_frame"></iframe>
    <section class="H_padre">
        <div class="hero2">
            <div class="container_h1">
                <h1 class="fru">FRU</h1>
                <h1 class="ver">VER</h1>
            </div>
            <h2>Frutas y verduras de Veracruz</h2>
            <p>Somos una compañia mexicana con una historia damiliar detrás, ofrecemos productos de origen mexicano y alta calidad, los cuales esperamos que degustes y disfrutes.
             Más que una empresa, somos familia dando lo mejor desde México para México.            </p>
            <div class="container_button">
            </div>
            
             <div class="iconos_hero">
                <div><i class="fa-solid fa-truck-arrow-right"></i> <p>Envio rapido</p></div>
                <div><i class="fa-regular fa-clock"></i><p>Gran disponibilidad</p></div>
                <div><i class="fa-solid fa-leaf"></i><p>100% Natural</p></div>
            </div>
        </div>
    </section>
    <section class="Buttons">

        <div class="container_links">
            <a href="<?= base_url('lista_producto') ?>"><button>
                <i class="fa-solid fa-apple-whole"></i>
                <p>Productos</p>
            </button></a>
            <a href="<?= base_url('alta_pedido') ?>"><button>
                <i class="fa-solid fa-boxes-packing"></i>
                <P>Pedidos</P>
            </button></a>
            <a href="<?= base_url('lista_merma')?>"><button>
                <i class="fa-solid fa-drumstick-bite"></i>
                <p>Merma</p>
            </button></a>
        </div>

        <div class="container_links_2">
            <a href="<?= base_url('lista_entrada')?>"><button>
                <i class="fa-solid fa-people-carry-box"></i>
                <p>Entradas</p></button></a>


            <a href="#"><button>
                <i class="fa-solid fa-credit-card"></i>
                <p>Créditos</p>
            </button></a>
            
            
            <a href="<?= base_url('lista')?>"><button>
                <i class="fa-solid fa-users"></i>
                <p>Clientes</p>
            </button>
            </a>
        </div>
        
        <div class="container_links_3">
            <a href="<?= base_url('lista_repartidor') ?>"><button>
                <i class="fa-solid fa-truck-fast"></i>
                <p>Repartidores</p>
        </button></a>
            <a href="<?= base_url('Mostrar_Unidades')?>"><button>
                <i class="fa-solid fa-scale-balanced"></i>
                <p>Unidades de M.</p>
        </button></a>
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