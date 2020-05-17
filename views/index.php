<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
    <script src="https://kit.fontawesome.com/e43617e4d2.js" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>

<body>
    <div class="contenedor" id="contenedor">

        <div class="form-contenedor ingresar-contenedor">
            <form action="<?= URL ?>index/login" method="POST">
                <h1>Ingresar</h1>
                <div class="social-contenedor">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>ó usa tu correo para ingresar</span>
                <input type="text" name="email" id="emailingreso" placeholder="Email" required>
                <input type="password" name="pass" id="contraseñaingreso" placeholder="Contraseña" required>
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button>Ingresar</button>
            </form>
        </div>
        <div class="overlay-contenedor">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido Otra Vez!</h1>
                    <p>mantente conectado con tus proyectos y equipo</p>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hola, Amigo!</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= URL ?>public/js/main.js"></script>
</body>

</html>