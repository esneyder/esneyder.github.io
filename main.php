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
                        <h1 class="page-header">Bienvenido a MblogMongo</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Inicio
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <label>Si desea registrar algún <a href="favorite.php">favorito</a>, lo puedes hacer <a href="/newFavorite.php" class="alert-link">aquí</a> Este sitio web corre sobre una base de datos <a href="https://www.mongodb.org/" target="_blank" class="alert-link">MongoDB.</a></label>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-star fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php 

                                     require_once("connect_favoritos.php");

                                    $total=$c_favoritos->count();
                                     
                                     ?>
                                        <div class="huge"><?php echo $total; ?></div>
                                        <div>¡Nuevos favoritos!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="favorite.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bookmark fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                     <?php 

                                     require_once("connect_categoria.php");

                                    $total=$c_categoria->count();
                                     
                                     ?>
                                        <div class="huge"><?php echo($total); ?></div>
                                        <div>¡Nuevas categorías!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="category.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-clipboard fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">14</div>
                                        <div>Páginas sugeridas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <?php include_once("reporteuser.php");
                                              $user=$usuarios->count();
                                              ?>
                                        <div class="huge"><?php  echo $user;?></div>
                                        <div>Usuarios inscritos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalles</span>
                                    <span class="pull-right"><i class="fa fa-plus-circle"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-area-chart"></i> Moving Line Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-moving-line-chart"></div>
                                </div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Cursos</h3>
                            </div>
                            <div class="panel-body center">
                                <img src="img/courses.png" alt="cursos" class="img-circle mg3">
                                <p>Repositorio de cursos desde nivel básico hasta lo más avanzado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-file-code-o fa-fw"></i> Programación</h3>
                            </div>
                            <div class="panel-body center">
                                <img src="img/programming.png" alt="cursos" class="img-circle mg3">
                                <p>Contenidos de programación: Backend and Frontend.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-briefcase fa-fw"></i> Ingeniería</h3>
                            </div>
                            <div class="panel-body center">
                                <img src="img/engineering.png" alt="cursos" class="img-circle mg3">
                                <p>Recursos relacionados con la ingeniería: Programacion,bases de datos, seguridad, etc.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-paper-plane"></i> Subscribirse</h3>
                            </div>
                            <div class="panel-body">
                                <p>No hay que empezar siempre por la noción primera de las cosas que se estudian, sino por aquello que puede facilitar el aprendizaje. Por eso, si deseas obtener información sobre los nuevos cursos, manuales de programación, seguridad informática o algún otro tema, subscríbete.</p>
                                <form>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">Correo</span>
                                            <input type="mail" class="form-control">
                                            <span class="input-group-btn"><button class="btn btn-warning">Subscribir</button></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div><!-- /.row -->
    <!-- Footer -->
    <?php require_once("footer.php"); ?>
</body>
</html>