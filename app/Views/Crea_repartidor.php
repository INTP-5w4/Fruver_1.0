<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea Repartidor</title>
<style>
body{
    font-family:'Segoe UI',Roboto,Arial,sans-serif;
    margin:0;
    padding:20px;
    background:#fff;
    color:#333;
}

#crearRepartidor{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px 20px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.full-width{
    grid-column:span 2;
}

label{
    font-size:.85rem;
    font-weight:600;
    color:#555;
    margin-bottom:5px;
}

input,select{
    padding:10px 12px;
    border:2px solid #e1e1e1;
    border-radius:8px;
    background:#f9f9f9;
    transition:.3s;
}

input:focus,select:focus{
    border-color:#4CAF50;
    background:#fff;
}

input[type="submit"]{
    grid-column:span 2;
    background:#5bb982;
    color:white;
    border:none;
    padding:14px;
    border-radius:8px;
    cursor:pointer;
}

input[type="submit"]:hover{
    transform:translateY(-2px);
}
    </style>
</head>
<body>
    <form action="<?= base_url('Crea_repartidor') ?>" method="post" id="crearRepartidor">
        <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nom" placeholder="Ingrese un nombre">
        </div>

        <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="ape" placeholder="Ingrese un apellido">
        </div>

        <div class="form-group">
        <label for="nombre">CURP</label>
        <input type="text" name="curp" placeholder="Ingrese un CURP">
        </div>

        <div class="form-group">
        <label for="rfc">RFC</label>
        <input type="text" name="rfc" placeholder="Ingrese un RFC">
        </div>

        <div class="form-group full-width">
        <label for="domicilio">Domicilio</label>
        <input type="text" name="dom" placeholder="Ingrese un domicilio">
        </div>

        <div class="form-group">
        <label for="correo">Email</label>
        <input type="email" name="correo">
        </div>

        <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="tel" name="tel">
        </div>

        <input type="submit" value="Enviar">
        
    </form>
    <script>
        const miForm = document.getElementById('crearRepartidor');
        miForm.addEventListener('submit', (e) => {
            e.preventDefault(); 

            const formData = new FormData(miForm);

            fetch(miForm.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {

                window.parent.cierraModal('modalRepartidor'); 
                window.parent.location.reload(); 
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
        
</body>
</html>