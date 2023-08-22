<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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

     <section class="home">
        <div class="home-slider">
            <div class="W">
                <div class="slide" style="background:url(imagen/rio.jpg)">
                    <div class="content">
                        <span>Explorar, Descubrir, Viajar</span>
                        <h3>Viaja alrededor del mundo</h3>
                        <a href="package.php" class="btn">Descubrir mas</a>
                    </div>
                </div>
                <div class="slide" style="background:url(imagen/anti.jpg)">
                    <div class="content">
                        <span>Explorar, Descubrir, Viajar</span>
                        <h3>Descubre nuevos Lugares</h3>
                        <a href="package.php" class="btn">Descubrir mas</a>
                    </div>
                </div>
                <div class="slide" style="background:url(imagen/barri.jpg)">
                    <div class="content">
                        <span>Explorar, Descubrir, Viajar</span>
                        <h3>Haz tu propio destino</h3>
                        <a href="package.php" class="btn">Descubrir mas</a>
                    </div>
                </div>
            </div>
        </div>
     </section>




     <section class="home-about">
        <div class="image">
            <img src="imagen/aboutus.jpg" alt="">
        </div>
        <div class="content">
            <h3>Acerca de Nosotros</h3>
            <p>Se entrega para el laboratorio de Teoria de Sistemas
                el lunes y un sistema que se vera para ver la 
                belleza de nuestra Guate
            </p>
            <a href="about.php" class="btn">Leer Mas</a>
        </div>
     </section>



    <section class="home-packages">
        <h1 class="heading-title">Nuestros paquetes</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="imagen/book.jpg" alt="">
                </div>  
                <div class="content">
                    <h3>Aventuras & tour</h3>
                    <p>Una vez que has viajado, la travesía nunca 
                        termina, sino que es recreada una y otra vez a 
                        partir de vitrinas con recuerdos. La mente nunca puede 
                        desprenderse del viaje (Pat Conroy)</p>
                    <a href="book.php" class="btn">Registrate ahora</a>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="imagen/book2.jpg" alt="">
                </div>  
                <div class="content">
                    <h3>Aventuras & tour</h3>
                    <p>Viajar es un ejercicio con consecuencias fatales 
                        para los prejuicios, la intolerancia y la 
                        estrechez de mente. (Mark Twain)</p>
                    <a href="book.php" class="btn">Registrate ahora</a>
                </div>
            </div>
        </div>
        <div class="loadmore"><a href="package.php" class="btn">Leer mas</a></div>
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