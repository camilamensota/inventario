<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory - Management</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.material.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/material.min.js" ></script>
    <script src="js/sweetalert2.min.js" ></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
    <script src="js/main.js" ></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        .dataTables_wrapper { margin: 20px; padding: 10px; background: #fff; }
        .container-filters { padding: 20px; text-align: center; }
        .btn-filter { margin: 5px; }
        table.dataTable td, table.dataTable th { white-space: nowrap; text-align: center !important; }
        .top { margin-bottom: 15px; }
    </style>
</head>
<body>
    <section class="full-width container-notifications">
        <div class="full-width container-notifications-bg btn-Notification"></div>
        <section class="NotificationArea">
            <div class="full-width text-center NotificationArea-title tittles">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
        </section>
    </section>

    <section class="full-width navLateral" id="menu-lateral"></section>

    <section class="full-width pageContent">
        <div class="full-width navBar">
            <div class="full-width navBar-options">
                <i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>  
                <div class="mdl-tooltip" for="btn-menu">Hide / Show MENU</div>
                <nav class="navBar-options-list">
                    <ul class="list-unstyle">
                        <li class="btn-Notification" id="notifications"><i class="zmdi zmdi-notifications"></i></li>
                        <li class="btn-exit" id="btn-exit"><i class="zmdi zmdi-power"></i></li>
                        <li class="text-condensedLight noLink"><small>User Name</small></li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="full-width header-well">
            <div class="full-width header-well-icon"><i class="zmdi zmdi-store"></i></div>
            <div class="full-width header-well-text">
                <p class="text-condensedLight">Gestión de inventario de equipos tecnológicos. Utilice los filtros para segmentar por categorías.</p>
            </div>
        </section>

        <div class="full-width container-filters">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-filter" onclick="filtrarTabla('')">TODOS</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored btn-filter" onclick="filtrarTabla('Computadora')">COMPUTADORAS</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored btn-filter" onclick="filtrarTabla('Impresora')">IMPRESORAS</button>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored btn-filter" onclick="filtrarTabla('Dispositivo')">DISPOSITIVOS</button>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="table-responsive">
                    <table id="tablaInventario" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CATEGORÍA</th>
                                <th>ÁREA / DEP.</th>
                                <th>RESPONSABLE</th>
                                <th>MODELO</th>
                                <th>PROCESADOR</th>
                                <th>RAM</th>
                                <th>DISCO</th>
                                <th>SERIAL</th>
                                <th>IP</th>
                                <th>OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Computadora</td>
                                <td>Contabilidad</td>
                                <td>Juan Perez</td>
                                <td>Dell OptiPlex</td>
                                <td>Core i5</td>
                                <td>8GB</td>
                                <td>240GB SSD</td>
                                <td>SN-88291</td>
                                <td>192.168.1.50</td>
                                <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-edit"></i></button></td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Impresora</td>
                                <td>Recursos Humanos</td>
                                <td>Oficina 1</td>
                                <td>HP LaserJet</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>SN-11002</td>
                                <td>192.168.1.60</td>
                                <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-edit"></i></button></td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Dispositivo</td>
                                <td>Sistemas</td>
                                <td>Admin</td>
                                <td>Switch Cisco</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>SN-9900</td>
                                <td>192.168.1.1</td>
                                <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-edit"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            // Carga del menú lateral
            $("#menu-lateral").load("./layouts/navlateral.php", function(response, status, xhr) { 
                if (status == "success") {
                    if (typeof componentHandler !== 'undefined') {
                        componentHandler.upgradeAllRegistered();
                    }
                    if(typeof window.mdl_init === 'function') {
                        window.mdl_init();
                    }
                }
            });

            // Inicialización de DataTable
            var table = $('#tablaInventario').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                },
                "responsive": true,
                "columnDefs": [
                    { "orderable": false, "targets": 10 } 
                ],
                "dom": '<"top"f>rt<"bottom"lp><"clear">'
            });

            // Función global de filtrado
            window.filtrarTabla = function(categoria) {
                table.column(1).search(categoria).draw();
            };
        });
    </script>
</body>
</html>