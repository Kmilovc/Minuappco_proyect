<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style_login.css">
    <link rel="shortcut icon" href=".\img\icono.ico" type="image/x-icon">
</head>

<body>
    <div class="container-portada">
        <div class="capa-gradient"></div>
        <div class="container-details">
            <div class="details">
                <main>
                    <h1 style="color: white" class="form__title">INICIO DE SESIÓN</h1>
                    <form action="comprobar.php" class="form-register" method="post" enctype="multipart/form-data">
                        <!--"enctype"para permitir al formulario enviar archivos-->

                        <div class="container--flex">
                            <label for="" style="color:black" class="form__label">ID Usuario</label>
                            <input type="int" class="form__input" name="user" placeholder="Ingrese usuario" required>
                        </div>
                        <div class="container--flex">
                            <label for="" style="color:black" class="form__label">Contraseña</label>
                            <input type="password" name="pass" class="form__input" placeholder="Ingrese Contraseña " required>
                        </div>
                        <p> <a href="#">Estoy de acuerdo con Terminos y Condiciones</a></p>
                        <input class="botons" type="submit" value="Iniciar" name="btn_login">
                        <p></p>
                        <a href="#" target="_blank">¿No tengo cuenta ? </a>
                    </form>
                </main>
                </form>
            </div>
        </div>
    </div>

</body>

</html>