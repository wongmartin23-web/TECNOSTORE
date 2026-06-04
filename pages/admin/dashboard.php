<?php
$pagina_actual = 'dashboard';
require_once '../../middleware/AdminAuth.php';


?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Dashboard</title>

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">

</head>

<body>

    <div class="admin-layout">

        <?php
        include '../../components/admin_sidebar.php';
        ?>

        <div class="admin-content">

            <?php
            include '../../components/admin_topbar.php';
            ?>

            <div class="dashboard-cards">

                <div class="card">
                    <h3>Productos</h3>
                    <span>120</span>
                    <a href="#">Ver más</a>
                </div>

                <div class="card">
                    <h3>Pedidos</h3>
                    <span>80</span>
                    <a href="#">Ver más</a>
                </div>

                <div class="card">
                    <h3>Clientes</h3>
                    <span>54</span>
                    <a href="#">Ver más</a>
                </div>

                <div class="card">
                    <h3>Ingresos</h3>
                    <span>S/ 18,500</span>
                    <a href="#">Ver más</a>
                </div>

            </div>

            <div class="dashboard-grid">

                <div class="panel chart">

                    <h2>Ventas (últimos 6 meses)</h2>

                    <div class="chart-placeholder">

                        Gráfico aquí

                    </div>

                </div>

                <div class="panel">

                    <h2>Pedidos recientes</h2>

                    <ul>

                        <li>#00081 - Pendiente</li>
                        <li>#00080 - Confirmado</li>
                        <li>#00079 - Confirmado</li>
                        <li>#00078 - Pendiente</li>
                        <li>#00077 - Confirmado</li>

                    </ul>

                </div>

            </div>

            <div class="dashboard-grid">

                <div class="panel">

                    <h2>Productos más vendidos</h2>

                    <ol>

                        <li>Samsung S24 Ultra</li>
                        <li>iPhone 15 Pro Max</li>
                        <li>Xiaomi 14T Pro</li>

                    </ol>

                </div>

                <div class="panel">

                    <h2>Stock bajo</h2>

                    <ul>

                        <li>JBL Tune 510BT</li>
                        <li>Case Spigen iPhone</li>
                        <li>Redmi Buds 4</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</body>

</html>