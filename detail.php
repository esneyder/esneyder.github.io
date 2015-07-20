<?php 
    /*require_once("connect_favoritos.php");
    $total=$c_favoritos->count();
    $reg=$c_favoritos->find();*/

/*
    foreach ($reg as $obj) { 
        echo "<strong>ID:</strong> " . $obj['_id'] ."<br/>";
        echo "<strong>Titulo:</strong> " . $obj['titulo'] . "<br/>"; 
        echo "<strong>Categoría:</strong> " . $obj['categoria'] . "<br/>";
        echo "<strong>Descripcion:</strong> " . $obj['descripcion'] . "<br/>";
        echo "<strong>Link:</strong> " . $obj['url'] . "<br/>";
        echo "<br/>"; 
    }
*/
?>
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
                        <h1 class="page-header">Detalles
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i><a href="main.php"> Inicio</a>
                            </li>
                            <li>
                                <i class="fa fa-star"></i><a href="main.php"> Favoritos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list-ul"></i> Detalles
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
                    <p>Total registros <span class="badge"><? // echo  $total;?></span></p>
                    <hr>
                    <<?php  //foreach ($reg as $obj) {  ?>
                    <div class="col-lg-4">
                        <div class="panel panel-blue">
                            <div class="panel-heading"><? //echo $obj['titulo'] . "<br/>"; ?></div>
                            <div class="panel-body">
                                <?// echo "<strong>Descripcion:</strong> " . $obj['descripcion'] . "<br/>"; ?>
                            </div>     
                            <nav>
                                <ul class="pager">    
                                    <li ><a href="<?php //echo $obj['url']?>" target="_blank">Visitar <span aria-hidden="true">&rarr;</span></a></li>
                                </ul>
                            </nav>
                            <div class="panel-footer">
                                <span class="label label-primary">Categoria</span>
                                <? //echo $obj['categoria']; ?>
                            </div>
                        </div>
                </div><!-- /.row -->
    <!-- Footer -->
    <?php require_once("footer.php"); ?>
</body>
</html>