<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('Estilos/main_page.css') ?>">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgb(225, 225, 225);
        }
        header {
            display: flex;
            justify-content: space-between;  /* ← space between aquí */
            align-items: center;
            padding: 0 30px;
            height: 40px;
            width: 100%;
            background-color: rgb(225, 225, 225);
        }
        nav a {
            margin-left: 20px;
            font-size: 0.85em;
        }
    </style>
    <title>Header</title>
</head>
<body>
    <header>
        <p class="logo">FRUVER</p>
        <nav>
            <a href="#">Sobre nosotros</a>
            <a href="#">Productos</a>
            <a href="#">Contacto</a>
        </nav>
    </header>
</body>
</html>