<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="../website-main/css/estilos.css">
</head>
<body>
    <header>
        <h1>Listado de Productos</h1>
    </header>
    <div id="divNuevo"><button class="btnNuevo" id="btnNuevo">Ingresar Nuevo Producto</button></div>
    <main>
    </main>
    <footer>
        Derechos Reservados &copy; - 2022
    </footer> 
    <div class="modal_bg">
        <div class="modal">
            <div class="cabecera_modal">
                <h2>Editar Producto</h2>
            </div>
            <div class="forma_modal">
                <form id="fm_modal">
                <label for="name">Nombre: </label>
                <input type="hidden" name="idp" id="modal_idp" value="">
                <input type="text" name="nombre" id="modal_nombre"><br>
                <label for="edad">Edad: </label>
                <input type="number" name="edad" id="modal_edad"><br>
                <br>
                <label for="ocupacion">Ocupación: </label>
                <textarea name="ocupacion" id="modal_ocupacion" cols="30" rows="10"></textarea>
                <div class="botones">
                    <button class="btnEditar" id="btnEditar" onclick="Editar(event)">Editar</button><button class="btnCancelar" id="btnCancelar">Cancelar</button>
                </div>    
                </form>
                
            </div>            
        </div>        
    </div>    
    <script src="../website-main/js/crud.js"></script>
</body>
</html>