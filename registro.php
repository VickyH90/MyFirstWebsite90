<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>
<body>
    <fieldset class="imgs">
    <img class="avatar" src="./imagenes/logo.jpg" alt="logo de colours JVLP">
    </fieldset>
    <form action="./htdocs/crudjlvp/BD/save.php" method="post">
        <aside >
   <section class="form_login">
       <h5> Registro</h5>
       <input class="controls" type="text" name="nombre_cliente" value="" placeholder="Ingrese su nombre">
       <input class="controls" type="text" name="apellidos_cliente" value="" placeholder="Ingrese sus apellidos">
       <input class="controls" type="text" name="tel" value="" placeholder="Ingrese su número telefónico">
       <input class="controls" type="Nuip" name="ID_cliente" value="" placeholder="Ingrese su número de Documento">
       <input class="controls" type="email" name="email" value="" placeholder="Ingrese su email">
       <input class="controls" type="text" name="direcc_cliente" value="" placeholder="Ingrese su dirección">
       <input class="controls" type="date" name="fn" value="" placeholder="Ingrese su Fecha de Nacimiento"> <br>

       <br>

    <fieldset class="entrar">
        <br>
        
        <div>
    <input type ="submit" class = "clic" name = "save">
    <input type ="button" class="clic" type="reset" value="Limpiar">  
        </div>

        <p> <a href="#">¿Olvidaste tu Contraseña?</a>
        <p><a href="#"> ¿No tiene una cuenta?</a> <br>
        <p><a class="botton" href="inicio.php">Inicio</a>
        </aside>
        </fieldset>
      
   </section> 
    </form>
    <section class="footer">
    <footer class="pie">
        <div>
        <i> <b> puedes ubicar aquí </i> </b> <br>
        <img src="./imagenes/ubicacion.png" alt="ubicacion" width="10%" height="10%"> <br>
        <a href="https://goo.gl/maps/AJ7AU86ECDCFtGzh9" target="google maps"> maps </a>
    </div>
        <address> Avenida 33 #75C-56 Laureles, Medellín </address>
        <a href="info@coloursfv.com">info@coloursfv.com</a>

    </footer>
</section>
</body>
</html>