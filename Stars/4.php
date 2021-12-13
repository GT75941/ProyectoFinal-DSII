<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script&family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <meta property="og:url" content="/contacto.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contacto" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Contacto" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <body style="background-color: #57A6BF ">

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
                                            <li><a href="usuario.html">Inicio</a></li>
                                            <li><a href="1.php">Productora</a></li>
                                            <li><a href="2.php">Álbum</a></li>
                                            <li><a href="3.php">Tienda</a></li>
                                            <li class="active"><a href="4.php">Contacto</a></li>
                                            <li><a href="5.php">Escuchanos</a></li>
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
            </header>
            <div id="content" class="container-fluid">
                <h1>Contacto</h1>
                <div id="topic" class="row-fluid">
                    <div id="topic-inner">
                        <div id="top-content" class="span9">
                            <div class="twpara-row row-fluid">
                                <div id="FIKmQ7Jh" class="span12 tw-para ">
                                    <h2>Ubicanos</h2>

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62054.96674919592!2d-72.0074628899098!3d-13.5701885230741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd57456dcf813%3A0x10cdb9b5cdff1f92!2sSantiago!5e0!3m2!1ses!2spe!4v1638218533873!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 
                                </div>
                            </div>
                            <div class="twpara-row row-fluid">
                                <div id="4FV3e2TP" class="span12 tw-para ">
                                    <div class="pobj obj-after">
                                        <form class="form-horizontal" method="post" id="F4FV3e2TP"
                                            onsubmit="return validateForm_4FV3e2TP(this);" action="">
                                            <div class="control-group"><label class="control-label required"
                                                    for="nombre">Nombre</label>
                                                <div class="controls"><input type="text" name="nombre" id="nombre"
                                                        value="" maxlength="50" class="input-large" required></div>
                                            </div>
                                            <div class="control-group"><label class="control-label required"
                                                    for="email">Email</label>
                                                <div class="controls"><input type="email" name="email" id="email"
                                                        value="" class="input-large" required"
                                                        title="Información Email debe ser una dirección válida de correo electrónico">
                                                </div>
                                            </div>
                                            <div class="control-group"><label class="control-label" for="sitioweb">
                                                    telefono</label>
                                                <div class="controls"><input type="url" name="sitioweb" id="sitioweb"
                                                        value="" class="input-large"
                                                        pattern="(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?"
                                                        title="Información Sitio web debe contener una dirección web, comenzando con http:// o ftp:// !">
                                                </div>
                                            </div>
                                            <div class="control-group"><label class="control-label"
                                                    for="asunto">Asunto</label>
                                                <div class="controls"><select name="asunto" class="input-large">
                                                        <option value="lorem">Consulta</option>
                                                        <option value="ipsum">Compra</option>
                                                        <option value="dolor">Venta</option>
                                                        
                                                    </select></div>
                                            </div>
                                            <div class="control-group"><label class="control-label required"
                                                    for="mensaje">Mensaje</label>
                                                <div class="controls"><textarea name="mensaje" id="mensaje" rows="5"
                                                        class="input-large" required></textarea></div>
                                            </div>
                                            <div class="control-group" style="margin-bottom:4px"><label
                                                    class="control-label required" for="field"></label>
                                                <div class="controls"><label class="checkbox" style="padding-top:0"
                                                        for="field"><input type="checkbox" id="field" name="field"
                                                            required>Al enviar mi información, acepto su <a
                                                            href='_tos.html?twtheme=no' class='tos cboxElement'
                                                            rel='nofollow'>Política de privacidad</a></label></div>
                                            </div>
                                            <div class="form-actions"><button type="submit" class="btn btn-primary"
                                                    id="Fsb4FV3e2TP">Enviar</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="top-sb" class="span3">
                            <div id="8VE3UzP0" class="tw-para twps-panel">
                                <h2>Dirección</h2>
                                <div class="ptext">
                                    <p>Jr. Quillbamba C-19<br><br>Tél: +51 946899196<br><br><a
                                            onclick="javascript:return(decMail2(this));"
                                            href="znvygb?pbagnpg#lbhefvgr.pbz"
                                            id="lnk1-8VE3UzP0">Hunt3r1221@gmail.com</a><br><br><br>Lun. - Vie.:
                                        8:00&nbsp;- 16:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div id="toolbar3" class="navbar">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <ul id="toolbar3_l" class="nav">
                                <li>
                                    <div id="sharebox"><a target="_blank" href="https://www.facebook.com/JayoBaez"
                                            rel="noopener"><img style="width:32px;height:32px"
                                                src="_frame/tw-share-facebook@2x.png" alt="facebook"></a><a
                                            target="_blank" href="https://www.twitter.com/" rel="noopener"><img
                                                style="width:32px;height:32px" src="_frame/tw-share-twitter@2x.png"
                                                alt="twitter"></a><a target="_blank" href="https://www.linkedin.com/in/"
                                            rel="noopener"><img style="width:32px;height:32px"
                                                src="_frame/tw-share-linkedin@2x.png" alt="linkedin"></a><a
                                            target="_blank" href="https://pinterest.com/" rel="noopener"><img
                                                style="width:32px;height:32px" src="_frame/tw-share-pinterest@2x.png"
                                                alt="pinterest"></a><a target="_blank" href="https://www.youtube.com/channel/UCBjg23SIddU2P4F0b48O2Cg"
                                            rel="noopener"><img style="width:32px;height:32px"
                                                src="_frame/tw-share-youtube@2x.png" alt="youtube"></a><a
                                            target="_blank" onclick="javascript:return(decMail2(this));" href="znvygb?"
                                            rel="noopener"><img style="width:32px;height:32px"
                                                src="_frame/tw-share-mail@2x.png" alt="email"></a></div>
                                </li>
                            </ul>
                            <ul id="toolbar3_r" class="nav pull-right">
                                <li>
                                    <form id="searchbox" class="navbar-search" action="_search.html"><input type="text"
                                            name="req" id="searchbox-req" class="search-query" placeholder="Buscar">
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="footerfat" class="row-fluid">
                    <div class="row-fluid">
                        <div id="footerfat_s1" class="span4 tw-para">
                            <h2><strong>Contacto</strong></h2><br><br>Santiago-Cusco<br>Jiron Quillabamba<div>
                                C-19<br><br>Tél: +51 946899196<br><br><a onclick="javascript:return(decMail2(this));"
                                    href="znvygb?pbagnpg#lbhefvgr.pbz" id="lnkdff43647">Hunt3r1221@gmail.com</a></div>
                        </div>
                        <div id="footerfat_s2" class="span4 tw-para">
                            <h2><strong>Ayuda &amp; Apoyo</strong></h2>
                            <ul>
                                <li>Producciones Musicales</li>
                                <li>Producciones Visuales</li>
                                <li>Sesiones</li>
                            </ul>
                        </div>
                        <div id="footerfat_s3" class="span4 tw-para">
                            <h2><strong>Créditos</strong></h2>
                            <div><b>Jayo Baez creador de nuestra productora musical.</b></div>
                        </div>
                    </div>
                </div>
                <div id="footersmall" class="row-fluid">
                    <div id="foot-sec1" class="span6 "><a
                        href=""></a>  
                        © Copyright Small Star's Records.</div>
                    <div id="foot-sec2" class="span6 ">
                        <div style="text-align: right; "><a href="_tos.php" id="lnkdfc5e39d">Términos y Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="_scripts/jquery/jquery.min.js"></script>
    <script src="_scripts/bootstrap/js/bootstrap.min.js"></script>
    <script src="_scripts/colorbox/jquery.colorbox-min.js"></script>
    <script src="_scripts/leaflet/leaflet.js"></script>
    <script src="_scripts/cookie/jquery.ckie.min.js"></script>
    <script>function validateForm_4FV3e2TP(objForm) { if (objForm.nombre.value.length == 0) { alert("Información Nombre requerida"); objForm.nombre.focus(); return false; } if (objForm.nombre.value.length > 50) { alert("Información Nombre es demasiado largo. 50 caracteres máximo permitido"); objForm.nombre.focus(); return false; } if (objForm.email.value.length == 0) { alert("Información Email requerida"); objForm.email.focus(); return false; } if (objForm.email.value.length > 100) { alert("Información Email es demasiado largo. 100 caracteres máximo permitido"); objForm.email.focus(); return false; } var re1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,20})+$/; if (!re1.test(objForm.email.value)) { alert("Información Email debe ser una dirección válida de correo electrónico"); objForm.email.focus(); return false; } if (objForm.sitioweb.value.length > 200) { alert("Información Sitio web es demasiado largo. 200 caracteres máximo permitido"); objForm.sitioweb.focus(); return false; } var re2 = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/; if (objForm.sitioweb.value.length != 0) if (!re2.test(objForm.sitioweb.value)) { alert("Información Sitio web debe contener una dirección web, comenzando con http:// o ftp:// !"); objForm.sitioweb.focus(); return false; } if (objForm.mensaje.value.length == 0) { alert("Información Mensaje requerida"); objForm.mensaje.focus(); return false; } if (objForm.mensaje.value.length > 500) { alert("Información Mensaje es demasiado largo. 500 caracteres máximo permitido"); objForm.mensaje.focus(); return false; } if (!objForm.field.checked) { alert("Información  requerida"); objForm.field.focus(); return false; } alert("Los datos del formulario no se pueden enviar en modo de vista previa local. Para recibir este formulario por correo electrónico es necesario para publicar su primer sitio web."); return false; } function ucc() { var a; if (typeof window.sessionStorage != "undefined") a = sessionStorage.getItem("scNDh") || ""; else a = $.cookie("scNDh"); if (!a || a == "") b = 0; else { var b = 0; var c = 0; do { c = a.indexOf(")", c); if (c > 0) { e = c - 1; while (e >= 0 && a[e] != "=") e--; b += parseInt(a.substring(e + 1, c)); c++ } } while (c > 0) } $("#sc_pcount").text(b) } function decMail2(e) { var s = "" + e.href, n = s.lastIndexOf("/"), w; if (s.substr(0, 7) == "mailto:") return (true); if (n > 0) s = s.substr(n + 1); s = s.replace("?", ":").replace("#", "@").replace(/[a-z]/gi, function (t) { return String.fromCharCode(t.charCodeAt(0) + (t.toLowerCase() < "n" ? 13 : -13)); }); e.href = s; return (true); } function onChangeSiteLang(href) { var i = location.href.indexOf("?"); if (i > 0) href += location.href.substr(i); document.location.href = href; }</script>
    <script>$(document).ready(function () { var lfmap_FIKmQ7Jh = L.map("lfmap_FIKmQ7Jh").setView([37.1763575, -3.5895694], 16); L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", { attribution: "&copy; <a class='tw-lflnk' href='https://www.openstreetmap.org/' target='_blank'>OpenStreetMap</a> © <a class='tw-lflnk' href='https://www.mapbox.com/' target='_blank'>Mapbox</a>", id: "mapbox/streets-v11" }).addTo(lfmap_FIKmQ7Jh); lfmap_FIKmQ7Jh.scrollWheelZoom.disable(); var lfmkr_FIKmQ7Jh = L.marker([37.1763575, -3.5895694]).addTo(lfmap_FIKmQ7Jh); lfmkr_FIKmQ7Jh.bindPopup("Calle Real de la Alhambra, s/n, 18009 Granada, España").openPopup(); ucc(); if (typeof window.sessionStorage != "undefined") $("#button-cart").popover({ placement: "bottom", html: true, content: function () { return sessionStorage.getItem("scNDh-popover") || "<small>Su carrito está vacía</small>" }, trigger: "hover" }); $("#searchbox>input").click(function () { $(this).select(); }); $("#searchbox").click(function (e) { if (e.offsetX > e.target.width) { } else $("#searchbox").submit() }); if (location.href.indexOf("?") > 0 && location.href.indexOf("twtheme=no") > 0) { $("#toolbar1,#toolbar2,#toolbar3,#footersmall,#footerfat").hide(); var idbmk = location.href; idbmk = idbmk.substring(idbmk.lastIndexOf("#") + 1, idbmk.lastIndexOf("?")); if (idbmk != "") $("html,body").animate({ scrollTop: $("#" + idbmk).offset().top }, 0); } $(".tos").colorbox({ width: "80%", height: "80%", iframe: true, transition: "none" }); $(".lfmap").each(function () { $(this).find("a").each(function () { if ($(this).text() == "Leaflet") { $(this).attr("target", "_blank"); $(this).addClass("tw-lflnk"); $(this).attr("title", ""); } }); }); $("#site").prepend("<a href='javascript:void(0)' class='toTop' title='Arriba de la página'><i class='fa fa-angle-up fa-3x toTopLink'></i></a>"); var offset = 220; var duration = 500; $(window).scroll(function () { if ($(this).scrollTop() > offset) { $(".toTop").fadeIn(duration); } else { $(".toTop").fadeOut(duration); } }); $(".toTop").click(function (event) { event.preventDefault(); $("html, body").animate({ scrollTop: 0 }, duration); return (false); }); var s = document.location.href.toLowerCase(); if (typeof onTOWebPageLoaded == "function") onTOWebPageLoaded(); });</script>
</body>

</html>