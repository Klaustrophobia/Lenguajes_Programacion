<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Inventario</h2>
        <!-- Tabla de inventario -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Categoría</th>
                    <th>Cantidad Disponible</th>
                    <th>Unidad de Medida</th>
                    <th>Fecha de Caducidad</th>
                    <th>Precio por Unidad</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se cargarán los productos del inventario -->
                <tr>
                    <td>Ejemplo Producto</td>
                    <td>Ejemplo Categoría</td>
                    <td>100</td>
                    <td>Unidad</td>
                    <td>2024-12-31</td>
                    <td>$10.00</td>
                </tr>
            </tbody>
        </table>
        <!-- Botón para agregar nuevo producto -->
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#agregarProductoModal">Agregar Producto</button>
    </div>

    <!-- Modal para agregar nuevo producto -->
    <div class="modal fade" id="agregarProductoModal" tabindex="-1" role="dialog" aria-labelledby="agregarProductoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarProductoModalLabel">Agregar Nuevo Producto al Inventario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario para agregar nuevo producto -->
                    <form>
                        <div class="form-group">
                            <label for="nombreProducto">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombreProducto" placeholder="Nombre del Producto">
                        </div>
                        <div class="form-group">
                            <label for="categoriaProducto">Categoría</label>
                            <input type="text" class="form-control" id="categoriaProducto" placeholder="Categoría">
                        </div>
                        <div class="form-group">
                            <label for="cantidadProducto">Cantidad Disponible</label>
                            <input type="number" class="form-control" id="cantidadProducto" placeholder="Cantidad Disponible">
                        </div>
                        <div class="form-group">
                            <label for="unidadMedida">Unidad de Medida</label>
                            <input type="text" class="form-control" id="unidadMedida" placeholder="Unidad de Medida">
                        </div>
                        <div class="form-group">
                            <label for="fechaCaducidad">Fecha de Caducidad</label>
                            <input type="date" class="form-control" id="fechaCaducidad">
                        </div>
                        <div class="form-group">
                            <label for="precioProducto">Precio por Unidad</label>
                            <input type="text" class="form-control" id="precioProducto" placeholder="Precio por Unidad">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Agregar Producto</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
