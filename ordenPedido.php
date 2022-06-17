<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>form-login | colours JVLP</title>
    <link rel= "stylesheet" href = "registro.css">
</head>
<body>
    <div class = "login-box">
        <img class = "avatar" src = "./imagenes/logo.jpg" alt = "logo de colours JVLP">
        <h1>Ingrese aquì</h1>
        <form action = "./htdocs/crudjlvp/BD/save.php" method = "post">    

            <!-- NAME -->
            <Label for = "Nombre">Nombre</Label>
            <p name = "nombre_cliente" placeholder = "Ingrese su nombre"> </p>

             <!-- LASTS NAMES -->
             <Label for= "Apellidos">Apellidos</Label>
             <p name = "apellidos_cliente" placeholder = "Ingrese sus apellidos"> </p>

              <!--TELEPHONE-->
              <Label for = "Telefono">Teléfono</Label>
              <p name = "tel" placeholder = "Ingrese su número de teléfono"> </p>

              <!-- DOCUMENT -->
              <Label for = "Documento">Documento</Label>
              <p name = "ID_cliente" placeholder = "Ingrese su numero de documento"> </p>

              <!-- E-MAIL -->
             <Label for = "E-mail">E-mail</Label>
             <p name = "email" placeholder = "Ingrese su e-mail"> </p>

              <!-- ADRESS -->
              <Label for = "Direccion">Dirección</Label>
             <p name = "direcc_cliente"  placeholder = "Ingrese su dirección"> </p>


              


             <input class = "clic" type = "submit" name = "save" value = "REGISTRAR">
             <input type = "reset" class = "clic" type = "reset" value = "LIMPIAR">
    
             <li><a href = "colour.html">Regresar</a></li><br>
            </form>
    </div>

</section> 
</form>

<div class="footer">        
        <img src="./imagenes/placeholder.png" alt="10" width="10%" style="float: center; margin:2px"> <br>
        <i> <b> Nos puedes ubicar aquí </i> </b> <br>  
         <a href="https://goo.gl/maps/AJ7AU86ECDCFtGzh9" target="maps"> google maps </a><br>
         <address> Avenida 33 #75C-56 Laureles, Medellín </address>
         <a href="info@coloursfv.com"> info@coloursfv.com</a><br>
</div>
</section>
</body>
</html>