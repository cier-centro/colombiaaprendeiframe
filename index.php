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
                 $('#modalInicial').modal('show');
                $("#btnTeacher").click(function() {
                    window.location.href = "http://aprende.colombiaaprende.edu.co/es/docentes";
                   // window.location = http://aprende.colombiaaprende.edu.co/es/docentes;
                });
                $("#btnStudent").click(function() {
                    $('#modalInicial').modal('hide')
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
                    <a target="_blank" href="https://cas.colombiaaprende.edu.co/cas/login?service=http%3A%2F%2Faprende.colombiaaprende.edu.co%2Fen%2Fcas%3Fdestination%3Dnode%2F2970" class="btn btn-danger"><span class="icon ico-register">a</span>Regístrate aquí</a>
                </div><!--/.nav-collapse -->
                <div class"navbar-icons">
                    <div class="col-md-8 logo"><img class="img-responsive" alt="Responsive image" src="img/logo.png"></img></div>
                    <div class="col-md-2 logo"><img class="img-responsive" alt="Responsive image" src="img/logo-minedu.png"></img></div>
                    <div class="col-md-2 logo"><img class="img-responsive" alt="Responsive image" src="img/logo-todo-pais.png"></img></div>
                </div>
            </div>
        </nav>

        <div class="bs-docs-header menu-header">
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-12 logo"><img src="img/logo.png"></img></div>-->
                    <div class="col-md-8 col-md-offset-2"><img src="img/img-slogan.png"></img></div>
                    <form class="form-inline">
                        <div class="search-conteiner  "><!--col-md-5 col-md-offset-3-->
                            <div class="form-group">
                                <input type="text" class="form-control input-search" id="search" placeholder="¿Qué quieres aprender?">
                                <button type="button" class="btn btn-search" id="btnFind">S</button>
                            </div>

                        </div>
                    </form>
                    <div class="col-md-12 label-search"><label>Más  de 100.000 contenidos educativos virtuales para aprender y enseñar.</label> </div>  
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
                        <div class="item"><a target="_blank" href="http://contenidosparaaprender.mineducacion.gov.co/MenuPrimaria/index.html"><img class="" alt="" src="img/img-sld1.png"></img></a></div>
                        <div class="item"><a target="_blank" href="http://contenidosparaaprender.mineducacion.gov.co/MenuSecundaria/index.html"><img class="" alt="" src="img/img-sld2.png"></img></a></div>
                        <div class="item"><a target="_blank" href="http://ciersur.univalle.edu.co/index.php/media-main/results-content"><img class="" alt="" src="img/img-sld3.png"></img></a></div>
                        <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/node/88205"><img class="" alt="" src="img/img-sld4.png"></img></a></div>
                        <div class="item"><a target="_blank" href="http://superate.edu.co/gimnasio-del-saber-2/"><img class="" alt="" src="img/img-sld5.png"></img></a></div>
                        <div class="item"><a target="_blank" href="http://www.colombiaaprende.edu.co/html/micrositios/1752/w3-article-344590.html"><img class="" alt="" src="img/img-sld6.png"></img></a></div>
                        <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/aulassinfronteras"><img class="" alt="" src="img/img-sld7.png"></img></a></div>
                        <div class="item"><a target="_blank" href="https://es.khanacademy.org/math"><img class="" alt="" src="img/img-sld9.png"></img></a></div>
						<div class="item"><a target="_blank" href="https://phet.colorado.edu/es/"><img class="" alt="" src="img/img-sld11.png"></img></a></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <a target="_blank" href="http://aprende.colombiaaprende.edu.co/en/students/bankofhomestudentwork"><img class="img-responsive" alt="Responsive image" src="img/img-banco-tareas.png"></img></a>
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
                        <h4><span>icon</span>Programas Especiales</h4>
                        <div class="owl-carousel">
                            <div class="item"><a target="_blank" href="http://superate.edu.co/"><img class="img-responsive" alt="Responsive image" src="img/superateconsaber.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://www.colombiaaprende.edu.co/html/micrositios/1752/w3-propertyname-3203.html"><img class="img-responsive" alt="Responsive image" src="img/jornadaunica.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/pta"><img class="img-responsive" alt="Responsive image" src="img/todosaaprender_360.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://www.colombiaaprende.edu.co/html/micrositios/1752/w3-propertyname-3009.html"><img class="img-responsive" alt="Responsive image" src="img/colombiabilingue.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://maestros.colombiaaprende.edu.co/"><img class="img-responsive" alt="Responsive image" src="img/Red-Maestros.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/node/86638"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e4.png"></img></a></div>
                            <div class="item"><a target="_blank" href="http://contenidosparaaprender.mineducacion.gov.co/"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e1.png"></img></a></div>
                            <div class="item"><a target="_blank" href="http://www.colombiaaprende.edu.co/html/micrositios/1752/w3-article-351072.html"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e2.png"></img></a></div>
                            <div class="item"><a target="_blank" href="http://www.colombiaaprende.edu.co/html/micrositios/1752/w3-article-349446.html"><img class="img-responsive" alt="Responsive image" src="img/img-sld-e3.png"></img></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bs-docs-header content-agenda">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 slide-tabs ">
                        <h4><span>icon</span>Comunidades de práctica</h4>
                        <div class="owl-carousel carousel-container">
                            <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/comunidades-de-pr%C3%A1ctica/lista-de-comunidades/red-voces-y-saberes-de-la-educaci%C3%B3n-inicial"><img class="img-responsive" alt="Responsive image" src="img/redvocessaberes.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/comunidades-de-pr%C3%A1ctica/lista-de-comunidades/recreo-tic"><img class="img-responsive" alt="Responsive image" src="img/recreotic.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/comunidades-de-pr%C3%A1ctica/lista-de-comunidades/vestigium"><img class="img-responsive" alt="Responsive image" src="img/vestigium.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/comunidades-de-pr%C3%A1ctica/lista-de-comunidades/red-colombiana-de-formadores-de-profesores-de"><img class="img-responsive" alt="Responsive image" src="img/redforma.jpg"></img></a></div>
                            <div class="item"><a target="_blank" href="http://aprende.colombiaaprende.edu.co/es/comunidades-de-pr%C3%A1ctica/lista-de-comunidades/cerrando-brechas-en-la-atencion-educativa-estudiantes"><img class="img-responsive" alt="Responsive image" src="img/cerrandobrechas.jpg"></img></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bs-docs-header content-actividades">
            <div class="container ">
                <div class="row">
                    <div class="col-md-9 slide-actividades">
                        <h4><span>icon</span>Actividades para la comunidad</h4>
                        <div class="row">
                            <div class="col-md-12 tabs-container clearfix">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Recientes" aria-controls="Recientes" role="tab" data-toggle="tab">Recientes</a></li>
                                    <li role="presentation"><a href="#Populares" aria-controls="Populares" role="tab" data-toggle="tab">Populares</a></li>
                                    <li role="presentation"><a href="#Destacados" aria-controls="Destacados" role="tab" data-toggle="tab">Destacados</a><li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Recientes"><img class="img-responsive" alt="Responsive image" src="img/img-tabs.png"></img></div>
                                    <div role="tabpanel" class="tab-pane" id="Populares"><img class="img-responsive" alt="Responsive image" src="img/img-tabs2.png"></img></div>
                                    <div role="tabpanel" class="tab-pane" id="Destacados"><img class="img-responsive" alt="Responsive image" src="img/img-tabs.png"></img></div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 slide-twiter">
                        <h4><span>icon</span>twitter</h4>
                        <a href="#"><img class="" alt="Responsive image" src="img/img-twitter.png"></img></a>
                    </div>


                </div>
            </div>
        </div>
        <footer class="blog-footer">
            <div class="container ">
                <img class="img-responsive" alt="Responsive image" src="img/img-footer.png"></img>
            </div>
        </footer>
        <!-- Small modal -->
        <div id="modalInicial" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
          <div class="modal-dialog bs-example-modal-sm">
            <div class="modal-content modal-dialog modal-sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">¿Qué rol desempeñas?</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <button id="btnStudent" type="button" class="btn btn-primary btn-lg btn-block" data-toggle="alumno" data-target="#student" data-whatever="">Soy estudiante </button>
                        <button id="btnTeacher" type="button" class="btn btn-primary btn-lg btn-block" data-toggle="profesor" data-target="#teacher" data-whatever="">Soy Docente  </button>
                      </div>
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