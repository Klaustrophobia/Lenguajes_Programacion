<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas</title>
    <!-- IMPORTS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Facturas</h2>

        <!-- Sección de Facturas Pendientes -->
        <h3 class="mt-4">Facturas Pendientes</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id Factura</th>
                    <th>Nombre del Cliente</th>
                    <th>Fecha Emitida</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán las facturas pendientes -->
                <tr>
                    <td>1</td>
                    <td>Juan Pérez</td>
                    <td>2024-04-12</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Facturación Finalizada</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Sección de Historial de Facturas -->
        <h3 class="mt-4">Historial de Facturas</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id Factura</th>
                    <th>Nombre del Cliente</th>
                    <th>Fecha Emitida</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán el historial de facturas -->
            </tbody>
        </table>

        <!-- Botón para generar factura -->
        <button class="btn btn-success mb-4">Generar Factura</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
