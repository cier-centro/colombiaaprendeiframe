<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">-->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

        <link href="css/base.css" rel="stylesheet" type="text/css">
        <link href="css/table.css" rel="stylesheet" type="text/css">
        <link href="css/style-popup.css" rel="stylesheet" type="text/css">
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/owl.carousel.js"></script>

        <!--resise window-->
        <!--<script src="js/bootstrap.js"></script>-->
        <script src="js/bootstrap.js"></script>
        <script src="js/search.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
                /*$('.owl-carousel').owlCarousel({
                 loop:true,
                 margin:10,
                 responsiveClass:true,
                 responsive:{
                 0:{
                 items:1,
                 nav:true
                 },
                 600:{
                 items:3,
                 nav:false
                 },
                 1000:{
                 items:5,
                 nav:true,
                 loop:false
                 }
                 }
                 });*/
            });
        </script>
        <title>Aprendo con Colombia aprende</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav social">
                        <li><a class="icon fa-facebook" target="_blank" href="#"><span>A</span></a></li>
                        <li><a class="icon fa-twitter" target="_blank" href="#"><span>T</span></a></li>
                        <li><a class="icon fa-youtube" target="_blank" href="#"><span>Y</span></a></li>
                        <li><a class="icon fa-rss" target="_blank" href="#"><span>R</span></a></li>
                        <li><a class="icon fa-flicker" target="_blank" href="#"><span>F</span></a></li>
                        <li><a class="icon fa-instagram" target="_blank" href="#"><span>I</span></a></li>
                    </ul>
                    <button type="submit" class="btn btn-danger"><span class="icon ico-register">a</span>Regístrate aquí</button>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="bs-docs-header menu-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 logo"><img src="img/logo.png"></img></div>
                    <div class="col-md-6 col-md-offset-3"><img src="img/img-slogan.png"></img></div>
                    <form class="form-inline">
                        <div class="search-conteiner col-md-5 col-md-offset-4">
                            <div class="form-group">
                                <input type="text" class="form-control input-search" id="search" placeholder="¿Qué quieres aprender?">
                                <button type="button" class="btn btn-search" id="btnFind">S</button>
                            </div>

                        </div>
                    </form>
                </div>  
            </div>  <!-- /.container -->	
        </div>
        <div class="bs-docs-header menu-important-cont"><!-- /. menu-->
            <div class="container">
                <div class="row">
                    <div class="col-md-2 link-menu"><a class="campus" target="_blank" href="#">Campus virtual</a></div>
                    <div class="col-md-2 link-menu"><a class="agenda" target="_blank" href="#">Agenda</a></div>
                    <div class="col-md-2 link-menu"><a class="comunidades" target="_blank" href="#">Comunidades_de_Pránctica</a></div>
                    <div class="col-md-2 link-menu"><a class="edusitios" target="_blank" href="#">Edusitios</a></div>
                    <div class="col-md-2 link-menu"><a class="catalogo" target="_blank" href="#">Catalogo_de_Contenidos</a></div>
                    <div class="col-md-2 link-menu"><a class="experiencias" target="_blank" href="#">Experiencias_TIC</a></div>
                </div>
            </div>
        </div><!-- /. fin del menu-->

        <div class="container "><!-- /. slide -->


            <div class="row">
                <div class="col-md-9 slide">
                    <h4><span>icon</span>Contenidos destacados</h4>
                    <div class="owl-carousel">
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld1.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld2.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld3.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld4.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld5.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld6.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld7.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld8.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld9.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld10.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld10.png"></img></a></div>
                        <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld10.png"></img></a></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-banco-tareas.png"></img></a>
                </div>
            </div>
        </div><!-- /. slide -->


        <div class="bs-docs-header menu-edusitios"><!-- /. menu-->
            <div class="container">
                <div class="row">
                    <div class="col-md-2 link-menu"><a class="estudiantes-b" target="_blank" href="#">Estudiantes_primaria</a></div>
                    <div class="col-md-2 link-menu"><a class="estudiantes-s" target="_blank" href="#">Estudiantes_secundaria</a></div>
                    <div class="col-md-2 link-menu"><a class="docentes-b" target="_blank" href="#">Docentes_primaria</a></div>
                    <div class="col-md-2 link-menu"><a class="docentes-s" target="_blank" href="#">Docentes_secundaria</a></div>
                    <div class="col-md-2 link-menu"><a class="investigadores" target="_blank" href="#">Investigadores</a></div>
                    <div class="col-md-2 link-menu"><a class="familia" target="_blank" href="#">Familia_Y_comunidades</a></div>
                </div>
            </div>

        </div>
        <div class="bs-docs-header caruosel-edusitios">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 slide-l">
                        <h4><span>icon</span>Edusitios destacados</h4>
                        <div class="owl-carousel">
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e1.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e2.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e3.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e4.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e5.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e1.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e2.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e3.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e4.png"></img></a></div>
                            <div class="item"><a href="#"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e5.png"></img></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- search -->
        <div id="popup" style="display: none;">
            <div class="content-popup datagrid">
                <div class="header-tbl-result">	
                    <span class="header-label">Resultados de la Busqueda</span>
                    <div class="close"><a href="#" id="close"><img src="img/close.png"/></a></div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nivel</th>
                            <th>Grado</th>
                            <th>Área</th>
                            <th>Nombre del Contenido de Aprendizaje</th>
                        </tr>
                    </thead>
                    <tbody id="lo"></tbody>
                </table>

            </div>
        </div>

        <div class="popup-overlay"></div>

    </body>

</html>