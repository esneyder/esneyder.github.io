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
                        <h1 class="page-header">Nuevo Elemento
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i><a href="main.php"> Inicio</a>
                            </li>
                            <li>
                                <i class="fa fa-star"></i><a href="favorite.php"> Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file-text-o"></i> Nuevo Elemento
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
                    <div class="col-lg-12">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-file-text-o fa-fw"></i> Escríbenos</h3>
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Nombre publicación</label>
                                        <input type="text" class="form-control" id="name" placeholder="Favorito" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category" class="control-label">Categoría</label>
                                        <select name="category" id="category" class="form-control">
                                           <!-- <?php
                                                /*require_once("connect_categoria.php");
                                                if ($c_categoria->count()>0)
                                                {
                                                    $categorias = $c_categoria->find();
                                                    foreach ($categorias as $categoria) {
                                            ?>
                                            <option value="<?php echo $categoria['categoria'] ?>">
                                                <?php echo $categoria['categoria'] ?>
                                            </option>
                                            <?php 
                                                    }
                                                }else{
                                            ?>
                                            <option value="Sin Categoría">Sin categoría</option>
                                            <?php } */?> -->                                          
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="control-label">Descripción favorito</label>
                                        <textarea class="form-control" rows="6" id="description" placeholder="Breve descripción"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="url" class="control-label">Enlace web</label>
                                        <input type="text" class="form-control" id="url" placeholder="Url enlace">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Guardar Datos</button>
                                        <button type="submit" class="btn btn-info">Listar Favorito</button>
                                    </div>
                                </form>
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