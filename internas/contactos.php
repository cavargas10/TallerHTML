<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>

<body>
    <header class="cabeceraPrincipal">
        <section>
            <img src="img/logo.png" alt="LOGO" style="width:50px">
        </section>

        <section class="menuRegistro">
            <a href="">REGISTRO</a>
            <a href="">|LOGIN</a>
            <input type="text" placeholder="Search..">
        </section>
    </header>

    <nav class="menuPrincipal">
        <a href="">Inicio</a>
        <a href="prueba.php">Quienes Somos</a>
        <a href="">|Empresa</a>
        <a href="">|Reservas</a>
        <a href="contactos.php">|Contactos</a>

    </nav>
    
    <main>
        <h2 class="h2Home">Contactos</h2>
        <form method="post" action="procesar.php">
            <div class = "grupoInput">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
            </div>
            <div class = "grupoInput">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
            </div>
            <div class = "grupoInput">
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo" placeholder="Ingrese su correo" required>
                
            </div>
            <div class = "grupoInput">
                <label for="rol">Tipo de Usuario</label>
                <select id="tipoUser" name="tipoUser">
                    <option value="1">Administrador</option>
                    <option value="2">Visitante</option>
                </select>
            </div>
            <div class = "grupoInput">
                <button type = "submit" value="Procesar">PROCESAR</button>
            </div>
        </form>
    </main>

    <aside class="menuPatrocinador">
        <h4>SPONSORS</h4>
        <div>Sponsors 1</div>
        <div>Sponsors 2</div>
        <div>Sponsors 3</div>
        <div>Sponsors 4</div>
    </aside>

    <footer class="piePagina">
        <h6>Derechos Reservados 2022</h6>
    </footer>
</body>

</html>