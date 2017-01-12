<html>
    <head>        
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="kickstart.js"></script> <!-- KICKSTART -->
        <link rel="stylesheet" href="kickstart.css" media="all" /> <!-- KICKSTART -->
        <link rel="stylesheet" href="style.css" media="all" /> 
        <title>Complejo Industrial Estrada</title>
        <!--        <link rel="stylesheet" type="text/css" href="css/style.css">-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- bxSlider Javascript file -->
        <script src="jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="jquery.bxslider.css" rel="stylesheet" />
        <script type="text/javascript">
            $(document).ready(function() {
                $('.bxslider').bxSlider({
                    slideMargin: 10,
                    ticker: true,
                    tickerHover: true,
                    speed: 100000,
                    useCSS: false,
                    captions: true
                });
            });
        </script>
        <script type = "text/javascript">
            var numero = 0;

            // Funciones comunes
            c = function(tag) { // Crea un elemento
                return document.createElement(tag);
            }
            d = function(id) { // Retorna un elemento en base al id
                return document.getElementById(id);
            }
            e = function(evt) { // Retorna el evento
                return (!evt) ? event : evt;
            }
            f = function(evt) { // Retorna el objeto que genera el evento
                return evt.srcElement ? evt.srcElement : evt.target;
            }

            addField = function() {
                container = d('files');

                span = c('SPAN');
                span.className = 'file';
                span.id = 'file' + (++numero);

                field = c('INPUT');
                field.name = 'archivos[]';
                field.type = 'file';

                a = c('A');
                a.name = span.id;
                a.href = '#a';
                a.onclick = removeField;
                a.innerHTML = 'Quitar';

                span.appendChild(field);
                span.appendChild(a);
                container.appendChild(span);
            }
            removeField = function(evt) {
                lnk = f(e(evt));
                span = d(lnk.name);
                span.parentNode.removeChild(span);
            }
        </script>
    </head>
    <body><a id="top-of-page"></a> <div id="wrap" class="clearfix">
<ul class="bxslider">
                <li><img src="cabecera.jpg" alt="Css Template Preview" title="INSTALACIONES" height="100"  /></a></li>
               <li><a href="productos.html"><img src="sliderhome/image058.gif" alt="Css Template Preview" title="PRODUCTOS" height="100"/></a></li>
                <li><a href="http://www.protecva.com"><img src="LogoTECVA.png" alt="Css Template Preview" title="PROTECVA" height="100"/></a></li>
                <li><a href="mision.html"><img src="sloganCIE.png" alt="Css Template Preview" title="NOSOTROS" height="100"/></a></li>
</ul>
            <!-- NOMBREEMPRESA -->
            <div class="col_12">
                <div class="headline">
                    <h4 class='center'>
                        <img class="align-left" src="ISO.png" width="100" height="100" />
                        <img class="align-right" src="CIE.png" width="200" height="100" />
                        <br>
                        Complejo Industrial Estrada S.A. de C.V.
                    </h4>
                </div>
            </div>
            <!-- END NOMBREEMPRESA  --> 


            <!-- Menu Horizontal -->
            <ul class="menu center">
                <link rel="icon" href="favicon.ico" type="image/x-icon">
                <li><a href="index.php">Home</a></li>
                <li><a href="certificacion.html">Certificación</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                    <li><a href="productos.html">Productos</a></li>
                    <li><a href="ubicacion.html">Ubicación</a></li>
                    <li class="current"><a href="contacto.php">Contacto</a></li>
                    <li ><a href="bolsa.php">Bolsa de Trabajo</a></li>
            </ul>
            <!-- END Menu Horizontal -->

            <div class="col_12">

                <!-- END Menu Horizontal -->
                <div class="col_4">
                    <br>
                    <br>
                    <h5 class="center">
                        <i class="icon-phone"> (449) 971-12-33</i><br>
                        <i class="icon-phone"> (449) 971-19-59</i><br>
                        VENTAS Ext 107 y 104
                    </h5>
                    <br>
                    <h5 class="center">Nuestra Empresa</h5>
                    <ul class="menu vertical center">
                        <li><a href="mision.html">&nbsp;&nbsp;&nbsp;&nbsp; Misión</a></li>
                        <li><a href="vision.html">&nbsp;&nbsp;&nbsp;&nbsp;Visión</a></li>
                        <li><a href="politica.html">&nbsp;&nbsp;&nbsp;&nbsp;Política</a></li>
                        <li><a href="historia.html">&nbsp;&nbsp;&nbsp;&nbsp;Historia</a></li>
                    </ul>
                </div>
                <!-- END Menu Horizontal -->

                <div class="col_8 left">
                    <div class="col_1 left"></div>
                    <div class="col_7">
                    <h5 class="center">Contacto</h5>
                    <p>Si desea mayor información sobre nuestros productos no dude en contactarnos.</p>
                    <br>
                                <form name="frm" id="frm" action="contacto.php" method="post" enctype="multipart/form-data">
            <dl>
                <dt><label for="to" accesskey="1">Nombre y apellidos</label></dt>
                <dd><input type="text" name="FromName" id="FromName" size="60" /></dd>

                <dt><label for="from" accesskey="2">e-mail</label></dt>
                <dd><input type="text" name="from" id="from" size="60" /></dd>

                <dt><label for="sbj" accesskey="3">Asunto</label></dt>
                <dd><input type="text" name="sbj" id="sbj" size="60" /></dd>

                <dt><label for="msg" accesskey="4">Mensaje</label></dt>
                <dd><textarea id="msg" name="msg" rows="7" cols="45"></textarea></dd>
                <br>         
                <br>
                <br>

                <dt><label>Archivos Adjuntos:<span>Archivos válidos: PDF, DXF y DWG</span></label>&nbsp;&nbsp;&nbsp;<a href="contacto.php#a" onclick="addField()" accesskey="5">A&ntilde;adir Archivo</a></dt>
                <dd><div id="files"></div></dd>
                <br></br>
                <dt><label>Escriba el código: </label>&nbsp;&nbsp;&nbsp;<img src = "generate.php"/></dt>
                <dd><input type="text" name = "secure"/></dd>
                <br></br>
                <dd><input type="submit" value="Enviar" id="postback" name="postback" accesskey="6" /></dd>
            </dl>
        </form>
                </div>
            </div>

            <div class="clear"></div>

            <div id="footer">
                Callejón José Ma. Chávez 2552 Int. 202 Colonia Ciudad Industrial, 
                Aguascalientes, México. Código Postal: 20290 <i class=" icon-envelope"></i>
                <img src="email.jpg"/>
                <a id="link-top" href="contacto.php#top-of-page">Top</a>
                    <br/><a class='mekamatiks' href ='http://www.mekamatiks.com'>mekamatiks 2013</a>
            </div>

        </div><!-- END WRAP -->
    </body>
</html>