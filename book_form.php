<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values
        ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

        $verificar_correo = $verificar_correo = mysqli_query($connection, "SELECT * FROM book_form WHERE email = '$email'");
        
        if(mysqli_num_rows($verificar_correo) > 0){
            echo '
                <script>
                alert("Este correo ya esta registrado");
                window.location = "/book.php";
                </script>
            ';
        } else {
        $ejecutar =  mysqli_query($connection, $request);
            if($ejecutar){
                echo'
                <script>
                alert("Usuario Registrado");
                window.location = "/home.php";
                </script>
            ';
            }
        }
        
    }else if(isset($_POST['regis'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $contrasenia = $_POST['contrasenia'];

        $request = "insert into usuarios(nombre, apellido, email, contrasenia) values
        ('$nombre','$apellido','$email','$contrasenia')";

        $verificar_correo = mysqli_query($connection, "SELECT * FROM usuarios WHERE email = '$email'");

        if(mysqli_num_rows($verificar_correo) > 0){
            echo '
                <script>
                alert("Este correo ya esta registrado");
                window.location = "/login.php";
                </script>
            ';
        } else {
            
             $ejecutar = mysqli_query($connection, $request);

            if($ejecutar){
            echo'
                <script>
                alert("Usuario Registrado");
                window.location = "/login.php";
                </script>
            ';
        }
        }


        
       
    }else if(isset($_POST['sesion'])){
        $email = $_POST['email'];
        $contrasenia = $_POST['contrasenia'];

        $verificar_correo = mysqli_query($connection, "SELECT * FROM usuarios WHERE email = '$email'");
        $verificar_contra = mysqli_query($connection, "SELECT * FROM usuarios WHERE contrasenia = '$contrasenia'");
        
        if(mysqli_num_rows($verificar_correo) > 0 && mysqli_num_rows($verificar_contra) > 0){
            echo '
            <script>
            alert("BIENVENIDO");
            window.location = "/home.php";
            </script>
        ';

        } else {
            echo '
            <script>
            alert("No existe este usuario");
            window.location = "/login.php";
            </script>
        ';
        }

    } else{
        echo 'Algo esta mal intentalo de nuevo';
    }
    


?>