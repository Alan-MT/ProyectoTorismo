<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    
    <link rel="stylesheet" href="/css/estilos.css"/>
</head>
<body>
     <section class="header">
        <a href="home.php" class="logo">HelloWorld</a>

        <nav class="navega">
            <a href="home.php">Principio</a>
            <a href="about.php">Acerca de</a>
            <a href="package.php">Paquete</a>
            <a href="book.php">Registro</a>
            <a href="check.php">Verificar</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
     </section>

     <div class="heading" Style="background: url(imagen/Guatemala_Antigua.jpg) no-repeat">
        <h1>Registrarse</h1>    
    </div>

        <section class="booking">

            <h1 class="heading-title">Registra tu viaje</h1>

            <form action="book_form.php" method="post" class="book-form">

                <div class="flex">
                    <div class="inputBox">
                        <span>Nombre:</span>
                        <input type="text" placeholder="Ingresa tu nombre" name="name">
                    </div>
                    <div class="inputBox">
                        <span>Correo Electronico:</span>
                        <input type="email" placeholder="Ingresa tu correo" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Telefono:</span>
                        <input type="number" placeholder="Ingresa tu numero" name="pho  ne">
                    </div>
                    <div class="inputBox">
                        <span>Direccion:</span>
                        <input type="text" placeholder="Ingresa tu direccion" name="address">
                    </div>
                    <div class="inputBox">
                        <span>Hacia donde:</span>
                        <input type="text" placeholder="Lugar a visitar" name="location">
                    </div>
                    <div class="inputBox">
                        <span>Cuanto:</span>
                        <input type="number" placeholder="Acompañantes" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>LLegada:</span>
                        <input type="date" name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>Salida:</span>
                        <input type="date" name="leaving">
                    </div>
                </div>

                <input type="submit" value="registrar" class="btn" name="send">

            </form>
        </section>





     <section class="pie">
        <div class="principal-cotenedor">
            <div class="caja">
                <h3>Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Principio</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>Acerca de</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Paquete</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="caja">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Pregutas?</a>
                <a href="#"><i class="fas fa-angle-right"></i>Acerca de nosostros</a>
                <a href="#"><i class="fas fa-angle-right"></i>Politicas</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terminos</a>
            </div>
            <div class="caja">
                <h3>Informacion</h3>
                <a href="#"><i class="fas fa-phone"></i>+50245625889</a>
                <a href="#"><i class="fas fa-phone"></i>+50241342459</a>               
                <a href="#"><i class="fas fa-envelope"></i>moralesalan235@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Guatema, Guatemala</a>
            </div>
            <div class="caja">
                <h3>Redes Sociales</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebok </a>
                <a href="#"><i class="fab fa-twitter"></i> twitter </a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>

            </div>
        </div>

        <div class="creditos">Created by <snap>AGMT</snap> | Derechos Reservados</div>
     </section>

















    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="/js/script.js></script>
</body>
</html>