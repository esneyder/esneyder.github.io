<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
        require_once("head.php");
    ?>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php require_once("nav.php"); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Estadísticas</h1>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i>  <a href="index.html">Inicio</a></li>
                            <li class="active"><i class="fa fa-bar-chart-o"></i> Estadísticas</li>
                        </ol>
                    </div>
                </div><!-- /.row -->
                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Gráficos Flot</h2>
                        <p class="lead">Flot es una  biblioteca JavaScript que conspira para jQuery, con un enfoque en el uso simple, atractiva apariencia y características interactivas. Para obtener instrucciones de uso completos y documentación para Gráficas Flot, visite <a href="http://www.flotcharts.org/">http://www.flotcharts.org/</a>.</p>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Diagrama de línea, ejemplo con información sobre herramientas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-line-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gráfico de sectores sobre herramientas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-pie-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gráfico de múltiples ejes, ejemplo con información sobre herramientas y datos brutos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-multiple-axes-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gráfico de líneas en movimiento</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-moving-line-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Gráfico de barras con información sobre herramientas</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-bar-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <!-- Morris Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Gráficos Morris</h2>
                        <p class="lead">Morris.js es un muy simple API para dibujar la línea, barras, zona de donuts y gráficos. Para obtener instrucciones de uso completos y documentación para Morris.js gráficos, visita <a href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Gráfico de líneas de área, con información sobre herramientas</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Ejemplo gráfico de anillos</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Diagrama de línea, sobre herramientas</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Ejemplo gráfico de barras</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                                <div class="text-right">
                                    <a href="#">Ver detalles <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <hr>
                        <p class="center"><small>Copyright ©2015 <a href="http://ingalvarez.tk">Esneyder Alvarez</a> - <a href="http://ingmejia.tk">Sebastián Mejía</a></small></p>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- Footer -->
    <?php require_once("footer.php"); ?>
</body>
</html>