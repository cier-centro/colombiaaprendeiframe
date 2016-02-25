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

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="js/jquery/jquery.min.js"></script>

        <!--resise window-->
        <!--<script src="js/bootstrap.js"></script>-->
        <script src="js/bootstrap.js"></script>
        <script src="js/search.js"></script>

        <script type="text/javascript">
        </script>
        <title>Aprendo con Colombia aprende</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">F</a></li>
                        <li><a href="#about">T</a></li>
                        <li><a href="#contact">Y</a></li>
                        <li><a href="#contact">R</a></li>
                        <li><a href="#contact">Fl</a></li>
                        <li><a href="#contact">P</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron">
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" placeholder="ingrese la palabra">
                    </div>
                    <button type="button" class="btn btn-default" id="btnFind">buscar</button>
                </form>
            </div> 
        </div><!-- /.container -->


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