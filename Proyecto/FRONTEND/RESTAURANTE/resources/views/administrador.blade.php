<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- IMPORT -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    
    <style>

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .navbar {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }
        .navbar-toggler {
            border: none;
            outline: none;
            color: white;
        }
        .navbar-toggler:hover {
            background-color: transparent;
        }
        .navbar-toggler:focus {
            outline: none;
            box-shadow: none;
        }
        .navbar-toggler-icon {
            font-size: 24px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-dark mr-3">
                <i class="fas fa-bars"></i>
            </button>
            <div class="navbar-brand">Admin Dashboard</div>
        </div>
    </nav>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <a href="#"><i class="fas fa-box mr-2"></i>Inventario</a>
        <a href="#"><i class="fas fa-clipboard-list mr-2"></i>Órdenes</a>
        <a href="#"><i class="fas fa-file-invoice-dollar mr-2"></i>Facturación</a>
    </div>
    
    <!-- CONTENIDO -->
    <div class="content">
        <h2 class="mb-4">Admin Dashboard Contenido</h2>
        <p>INFORMACION PENDIENTE DE COLOCAR</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('.sidebar').toggleClass('active');
                $('.content').toggleClass('active');
            });
        });
    </script>
    
</body>
</html>
