
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Órdenes</title>
    <!-- IMPORT -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Órdenes</h2>

        <!-- Sección de Órdenes en Espera -->
        <h3 class="mt-4">Órdenes en Espera</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Número de Orden</th>
                    <th>Nombre del Cliente</th>
                    <th>Detalles de la Orden</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán las órdenes en espera -->
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>Hamburguesa</td>
                    <td>
                        <button type="button" class="btn btn-success">Aceptar</button>
                        <button type="button" class="btn btn-danger">Rechazar</button>
                    </td>
                </tr>
                <!-- Puedes agregar más filas con órdenes en espera -->
            </tbody>
        </table>

        <!-- Sección de Órdenes Aceptadas -->
        <h3 class="mt-4">Órdenes Aceptadas</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Número de Orden</th>
                    <th>Nombre del Cliente</th>
                    <th>Detalles de la Orden</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán las órdenes aceptadas -->
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
