<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/material.min.js" ></script>
    <script src="js/sweetalert2.min.js" ></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
    <script src="js/main.js" ></script>
</head>
<body>
    <section class="full-width container-notifications">
        <div class="full-width container-notifications-bg btn-Notification"></div>
        <section class="NotificationArea">
            <div class="full-width text-center NotificationArea-title tittles">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
            <a href="#" class="Notification" id="notifation-unread-1">
                <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle"></i>
                        <strong>New User Registration</strong> 
                        <br>
                        <small>Just Now</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div> 
            </a>
            <a href="#" class="Notification" id="notifation-read-1">
                <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o"></i>
                        <strong>New Updates</strong> 
                        <br>
                        <small>30 Mins Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notification as Read</div>
            </a>
            <a href="#" class="Notification" id="notifation-unread-2">
                <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle"></i>
                        <strong>Archive uploaded</strong> 
                        <br>
                        <small>31 Mins Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notification as UnRead</div>
            </a> 
            <a href="#" class="Notification" id="notifation-read-2">
                <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o"></i>
                        <strong>New Mail</strong> 
                        <br>
                        <small>37 Mins Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notification as Read</div>
            </a>
            <a href="#" class="Notification" id="notifation-read-3">
                <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
                <div class="Notification-text">
                    <p>
                        <i class="zmdi zmdi-circle-o"></i>
                        <strong>Folder delete</strong> 
                        <br>
                        <small>1 hours Ago</small>
                    </p>
                </div>
                <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notification as Read</div>
            </a>   
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
                        <li class="btn-Notification" id="notifications">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="mdl-tooltip" for="notifications">Notifications</div>
                        </li>
                        <li class="btn-exit" id="btn-exit">
                            <i class="zmdi zmdi-power"></i>
                            <div class="mdl-tooltip" for="btn-exit">LogOut</div>
                        </li>
                        <li class="text-condensedLight noLink" ><small>User Name</small></li>
                        <li class="noLink">
                            <figure>
                                <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
                            </figure>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <section class="full-width text-center" style="padding: 40px 0;">
            <h3 class="text-center tittles">INICIO</h3>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        2<br>
                        <small>Administradores</small>
                    </span>
                </div>
                <i class="zmdi zmdi-account tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        71<br>
                        <small>Empleados</small>
                    </span>
                </div>
                <i class="zmdi zmdi-accounts tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        7<br>
                        <small>Inventario</small>
                    </span>
                </div>
                <i class="zmdi zmdi-view-list tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        9<br>
                        <small>Areas</small>
                    </span>
                </div>
                <i class="zmdi zmdi-label tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        121<br>
                        <small>Bitacora</small>
                    </span>
                </div>
                <i class="zmdi zmdi-assignment tile-icon"></i>
            </article>
            <article class="full-width tile">
                <div class="tile-text">
                    <span class="text-condensedLight">
                        47<br>
                        <small>Agregar a inventario</small>
                    </span>
                </div>
                <i class="zmdi zmdi-plus-circle tile-icon"></i>
            </article>
        </section>
    </section>

    <script>
        $(document).ready(function(){
            $("#menu-lateral").load("./layouts/navlateral.php", function(response, status, xhr) { 
                if (status == "success") {
                    if (typeof componentHandler !== 'undefined') {
                        componentHandler.upgradeAllRegistered();
                    }
                    if(typeof window.mdl_init === 'function') {
                        window.mdl_init();
                    }
                    console.log("Menú cargado correctamente.");
                } else {
                    console.error("Error al cargar navlateral.php: " + xhr.status + " " + xhr.statusText);
                }
            });
        });
    </script>
</body>
</html>