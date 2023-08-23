<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css">
    <title>Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>HELLOWORLD</p>
        </div>

        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Iniciar Sesion</button>
            <button class="btn" id="registerBtn" onclick="register()">Registrarse</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>


    <div class="form-box">
        


        <div class="login-container" id="login">
            <div class="top">
                <span>No tienes una cuenta? <a href="#" onclick="register()">Registrarse</a></span>
                <header>Login</header>
            </div>
            <form action="book_form.php" method="POST">
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email" name="email" required="true">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Contraseña" name="contrasenia" required="true">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Iniciar Sesion" name="sesion" >
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check" >
                    <label for="login-check"> Recordar</label>
                </div>
                <div class="two">
                    <label><a href="#">Olvidaste contraseña?</a></label>
                </div>
            </div>
            </form>
        </div>



        <div class="register-container" id="register">
            <div class="top">
                <span>Tienes una cuenta? <a href="#" onclick="login()">Login</a></span>
                <header>Registrarse</header>
            </div>
            <form action="book_form.php" method="post">
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Nombre" name="nombre" required="true">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Apellido" name="apellido" required="true">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="email" class="input-field" placeholder="Email" name="email" required="true">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Contraseña" name="contrasenia" required="true">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Registrar" name="regis">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Recordar</label>
                </div>
            </div>
            </form>
        </div>

    </div>

</div>   

<script src="/js/first.js"></script>
<script src="/js/second.js"></script>

</body>
</html>