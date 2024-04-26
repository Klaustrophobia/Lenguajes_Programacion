<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IMPORT -->
    <link rel = "stylesheet" href = "{{ asset('css/styleOrdenes.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <title>Órdenes</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ asset('dashboard') }}">TARTARO</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('landing') }}">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profile Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perfil del Administrador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar los detalles del perfil del administrador -->
                    <p>Nombre: Administrador</p>
                    <p>Correo: admin@example.com</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="container mt-5">
        <h1>Órdenes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Productos</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se deben mostrar las órdenes en la tabla -->
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>Pizza</td>
                    <td>$25.00</td>
                    <td>
                        <button id="btn-accept" class="btn">Aceptar</button>
                        <button id="btn-reject" class="btn">Rechazar</button>
                    </td>
                </tr>
                <!-- Ejemplo de otra orden -->
                <tr>
                    <td>2</td>
                    <td>Maria Rodriguez</td>
                    <td>Sushi, Ensalada</td>
                    <td>$30.00</td>
                    <td>
                        <button id="btn-accept" class="btn">Aceptar</button>
                        <button id="btn-reject" class="btn">Rechazar</button>
                    </td>
                </tr>
                <!-- Más filas de órdenes -->
            </tbody>
        </table>
    </div>

    <!-- Agrega los scripts de Bootstrap si los necesitas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
