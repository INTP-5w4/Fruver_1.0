<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica repartidor</title>
<style>
body{
    font-family:'Segoe UI',Roboto,Arial,sans-serif;
    margin:0;
    padding:20px;
    background:#fff;
    color:#333;
}

#EditRepartidor{
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
     <form action="<?= base_url('modifica_repartidor') ?>" method="post" id="EditRepartidor">
        <input type="hidden" name="id" id="" value="<?=esc($repartidores['id'])?>"require>

        <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nom" id="" value="<?=esc($repartidores['nombre'])?>"require>
        </div>

        <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" name="ape" id="" value="<?=esc($repartidores['apellido'])?>"require>
        </div>

        <div class="form-group">
        <label for="nombre">CURP</label>
        <input type="text" name="curp" id="" value="<?=esc($repartidores['curp'])?>"require>
        </div>

        <div class="form-group">
        <label for="rfc">RFC</label>
        <input type="text" name="rfc" id="" value="<?=esc($repartidores['rfc'])?>"require>
        </div>

        <div class="form-group full-width">
        <label for="domicilio">Domicilio</label>
        <input type="text" name="dom" id=""  value="<?=esc($repartidores['domicilio'])?>"require>
        </div>

        <div class="form-group">
        <label for="correo">Email</label>
        <input type="email" name="correo" id="" value="<?=esc($repartidores['correo_electronico'])?>"require>
        </div>

        <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="tel" name="tel" id="" value="<?=esc($repartidores['telefono'])?>"require>
        </div>

        
        <input type="submit" value="Enviar">


    </form>
<script>
    const miForm = document.getElementById('EditRepartidor');
    miForm.addEventListener('submit', (e) => {
        e.preventDefault(); // Detenemos el envío normal

        // 1. Recolectamos los datos del formulario
        const formData = new FormData(miForm);

        // 2. Los enviamos al servidor
        fetch(miForm.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // 3. Si todo salió bien, cerramos el modal en la ventana principal
            window.parent.cierraModal('EditRepartidor'); // Llama a la función que tienes en la lista
            window.parent.location.reload(); // Recarga la lista para ver los cambios
        })
        .catch(error => console.error('Error:', error));
    });
</script>
</body>
</html>