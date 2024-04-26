<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--IMPORTS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" href="{{ asset('css/styleDashboard.css') }}">

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

    <!-- Container -->
    <div class="container mt-5">
        <h1>Bienvenido Administrador</h1>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Acción</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Crear Comida</td>
                    <td>
                        <button class="btn btn-dashboard" data-bs-toggle="modal" data-bs-target="#crearComidaModal">Crear</button>
                    </td>
                </tr>
                <tr>
                    <td>Comprar Inventario</td>
                    <td>
                        <button class="btn btn-dashboard" onclick="window.location.href='{{ route('inventario') }}'">Comprar</button>
                    </td>
                </tr>
                <tr>
                    <td>Órdenes</td>
                    <td>
                        <button class="btn btn-dashboard" onclick="window.location.href='{{ route('ordenes') }}'">Ver</button>
                    </td>
                </tr>
                <tr>
                    <td>Facturas</td>
                    <td>
                        <button class="btn btn-dashboard" onclick="window.location.href='{{ route('facturas') }}'">Ver</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modales -->
    <!-- Modal Crear Comida -->
    <div class="modal fade" id="crearComidaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Comida</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('dashboard') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:</label>
                            <input type="text" class="form-control" id="precio" name="precio" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Crear Comida</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
