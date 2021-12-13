<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="/contacto.php" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contacto" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Contacto" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script&family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">

    <link
        href="_scripts/bootstrap/css/bootstrap.flat.min.css"
        rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="_frame/style.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="_scripts/colorbox/colorbox.css">
    <link rel="stylesheet" href="_scripts/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="_scripts/leaflet/leaflet.css" />
    <style>
        .alert a {
            color: #003399
        }

        .ta-left {
            text-align: left
        }

        .ta-center {
            text-align: center
        }

        .ta-justify {
            text-align: justify
        }

        .ta-right {
            text-align: right
        }

        .float-l {
            float: left
        }

        .float-r {
            float: right
        }

        .flexobj {
            flex-grow: 0;
            flex-shrink: 0;
            margin-right: 1em;
            margin-left: 1em
        }

        .flexrow {
            display: flex !important;
            align-items: center
        }

        @media (max-width:767px) {
            .flexrow {
                flex-direction: column
            }
        }

        .tw-para a.tw-lflnk:not(.btn) {
            color: #000
        }

        .tw-para a.tw-lflnk:not(.btn):hover {
            text-decoration: none
        }
    </style>
    <link href="_frame/print.css" rel="stylesheet" type="text/css" media="print">

</head>
<body style="background-color: #900C3F ">

<div id="site">
        <div id="page">
            <header>
                <div id="toolbar1" class="navbar">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <ul id="toolbar1_l" class="nav">
                                <li><a id="logo" href="index.html"><span id="logo-lt">SMALL'STAR'S</span><br><br><span
                                            id="logo-rt">RECORDS</span><br><span id="logo-sl"></span></a></li>
                            </ul><button type="button" class="btn btn-navbar" data-toggle="collapse"
                                data-target=".nav-collapse"><span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span></button>
                            <div class="nav-collapse collapse">
                                <ul id="toolbar1_r" class="nav pull-right">
                                    <li>
                                        <ul id="mainmenu" class="nav">
                                            <li><a href="admin.html">Inicio</a></li>
                                            <li><a href="sobre-nosotros.php">Productora</a></li>
                                            <li><a href="lbum.php">Album</a></li>
                                            <li><a href="beatshop.php">Tienda</a></li>
                                            <li><a href="contacto.php">Tienda</a></li>
                                            <li><a href="artista.php">Artista</a></li>
                                            <li><a href="usuario.php">Usuario</a></li>
                                            <li><a href="cancion.php">Canciones</a></li>
                                            <li class="active"><a href="musica.php">Escuchanos</a></li>
                                            <li><a href="index.php">Salir</a></li>
                                        </ul>
                                    </li>
                                    <li><a id="button-cart" data-container="body" href="_checkout.php"
                                            title="Carrito"><span id="sc_pcount"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                
            </header>

           
    <div class="app">
        
        <aside class="menu-aside">
        <br>
        <br>
        
        

            <div class="logo">
                <span class=""><i class=""></i> Musica</span>
            </div>
            <ul class="playlists" id="menuMusic">
                <li class="playlist"><a href="#" class="play playEstudiar" id="cargarEstudiar">Hunt3r-Jayo</a></li>
                <li class="playlist" ><a href="#" class="play playRock">Lumiere</a></li>
                <li class="playlist"><a href="#" class="play playDeporte">Slardex</a></li>
            </ul>
        </aside>
        
        <div class="album" id="album">
            <br>
            
            <div class="user">
                <a href="#" class="close" id="close"><i class="far fa-times-circle"></i></a>
                <span class="user-desc">  <i class="fas fa-user "></i>Autenticado </a></span>      
            </div>

            <div class="animate">      
            </div>
            
            
            <div class="album-description">
                    <div class="album-img">
                        <img id="imgAlbum" src="assets/img/f-princi.jpg" width="250" height="150">
                    </div>
                    
                    <div class="album-text">
                        <div class="title">
                            <span>Playlist:</span>
                            <h2 id="titlePlaylist">Seleccione su playlist</h2>
                        </div>
                        <div class="description">
                            <p id="playDescription">Reproduzca la playlist de su agrado !!!</p>
                        </div>
                        <div class="acciones">
                            <input type="file" id="files" name="files[]" multiple />
                            
                            <a href="#" class="btn reaccion-inactiva" id="reaccion"><i class="fas fa-heart"></i></a>
                        </div>
                        </div>
                </div>
            

            <div class="album-list-music">
                <ul class="list-music" id="lista-music">
                    
                    <li class="music">
                        <a href="#" class="btn play-music"><i class="far fa-play-circle"></i></a>
                        <h3>Nombre de artista</h3> 
                        <h3 class="name" id="name">Nombre de musica</h3> 
                        <h3 class="time">1.44 s</h3>
                    </li>
                    
                </ul>
            </div>
            

        </div>
        
        </div>

        <div class="reproducir">
            <div class="controles" id="controles">
                <a href="#" class="btn control atras"><i class="fas fa-backward"></i></a>
                <a href="#" class="btn control play-musica"><i class="far fa-play-circle"></i></a>
                <a href="#" class="btn control siguiente"><i class="fas fa-forward"></i></a>
                <a href="#" class="btn control pausa"><i class="far fa-pause-circle"></i></a>
                <div class="volumen">
                    <a href="#" class="subir"></a>
                    <a href="#" class="bajar"></a>
              
        </div>

        <script src="assets/js/app.js"></script>
</body>
</html>