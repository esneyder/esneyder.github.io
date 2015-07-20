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
                        <h1 class="page-header">Categorías
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="main.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bookmark"></i> Categorías
                            </li>
                        </ol>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>
                            <label>Alguna duda, sugerencia o recomendación, escríbenos <a href="contact.php">aquí.</a></label>
                            <div class="fb-like" data-href="http://mblogmongo.herokuapp.com/" data-width="20px" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=747238572031215&version=v2.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">  
                    <div class="col-lg-6">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-pencil fa-fw"></i> Mantenimiento Categorías</h3>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">Categoría</span>
                                            <input type="mail" class="form-control">
                                            <span class="input-group-btn"><button class="btn btn-primary">Agregar</button></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-paper-plane fa-fw"></i> Subscribirse</h3>
                            </div>
                            <div class="panel-body">
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bookmark fa-fw"></i> Lista de Categorías</h3>
                            </div>
                            <div class="panel-body">
                                <?php
                                    error_reporting(0);
                                    $mensaje = $_GET["mensaje"];
                                    if ($mensaje == 1) {
                                        echo "<p class='alert alert-danger' role='alert><i class='icon-trash icon-white'></i> La categoría fue eliminado con éxito.</p><br><br>";
                                    }
                                    if ($mensaje == 2) {
                                        echo "<p class='alert alert-success' role='alert><i class='icon-ok icon-white'></i> La categoria fue guardado con éxito.</p><br><br>";
                                    }
                                    if ($mensaje == 3) {
                                        echo "<p class='alert alert-warning' role='alert><i class='icon-refresh icon-white'></i> La categoría fue modificado con éxito.</p><br><br>";
                                    }
                                    if ($mensaje == 4) {
                                        echo "<p class='alert alert-danger' role='alert><i class='icon-refresh icon-white'></i> Texto dañino, ingrese un valor valído para categotería </p><br><br>";
                                    }
                                ?>
                                    <div id="contenidoc">
                                        
                                        
                                    </div>
                            </div>
                        </div>                        
                    </div>
                </div><!-- /.row -->
    <!-- Footer -->
    <?php require_once("footer.php"); ?>
</body>
</html>