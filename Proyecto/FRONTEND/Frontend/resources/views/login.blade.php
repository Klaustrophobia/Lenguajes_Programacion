<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--IMPORT-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
     *{
            padding: 0;
            margin: 0;
        }

        /*Estilos personalizados para el Header/Navbar*/
        .custom-navbar {
            background-color: #006994; /* Cambia el color de fondo de la barra de navegación */
        }

        .custom-navbar .navbar-nav .nav-link {
            color: #ffffff; /* Cambia el color del texto de los enlaces */
        }

    .custom-card {
            border: 1px solid #3b5998;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .custom-card img {
            border-radius: 10px 0 0 10px;
        }

        .custom-card-2 {
            border: 1px solid #3b5998;
            border-radius: 10px;
            margin-bottom: 20px;
            background-color: #3b5998;
        }

        .custom-card-2 img {
            border-radius: 10px 0 0 10px;
        }

        /* Cambiar el color del botón a azul marino */
        .btn-primary {
            background-color: #001f3f;
            border-color: #001f3f;
        }

        /* Cambiar el color del botón hover a azul oscuro */
        .btn-primary:hover {
            background-color: #001220 !important;
            border-color: #001220 !important;
        }

    </style>

    <title>Login</title>
</head>
<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <a class="navbar-brand" href="{{ route('landing') }}">Restaurante</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="./img/Welcome.jpeg" class="img-fluid" alt="Imagen de Bienvenida">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="card-title">CLIENTE</h5>
                                <p class="card-text">Iniciar sesión como cliente</p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#clienteLoginModal">Iniciar Sesion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card custom-card-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="./img/Welcome.jpeg" class="img-fluid" alt="Imagen de Bienvenida">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="card-title">ADMINISTRACION</h5>
                                <p class="card-text">Iniciar sesion como admnistrador</p>
                                <a  href="#" class="btn btn-primary" data-toggle="modal" data-target="#adminLoginModal">Iniciar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MODALS LOGIN-->
    <!--CLIENTE-->
    <div class="modal fade" id="clienteLoginModal" tabindex="-1" role="dialog" aria-labelledby="clienteLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="clienteLoginModalLabel">Iniciar Sesión como Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="clientePassword">Contraseña</label>
                            <input type="password" class="form-control" id="clientePassword" name="contrasenia" placeholder="Ingrese su contraseña" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="rememberClient">
                            <label class="form-check-label" for="rememberClient">Recordar usuario</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Administración Login -->
    <div class="modal fade" id="adminLoginModal" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adminLoginModalLabel">Iniciar Sesión como Admnistrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="adminUsername">Usuario</label>
                            <input type="text" class="form-control" id="adminUsername" placeholder="Ingrese su usuario">
                        </div>
                        <div class="form-group">
                            <label for="adminPassword">Contraseña</label>
                            <input type="password" class="form-control" id="adminPassword" placeholder="Ingrese su contraseña">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="rememberAdmin">
                            <label class="form-check-label" for="rememberAdmin">Recordar usuario</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>


    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
