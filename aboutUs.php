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
                        <h1 class="page-header">Acerca de Nosotros
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="main.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-chain-broken"></i> Acerca de nosotros
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
                            <?php /*
                                include_once("reporteuser.php");
                                $user=$usuarios->count();
                                echo "<label>Gracias, ya somos: <strong class=\"badge\">".$user."</strong> usuarios</label>";*/
                            ?>
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
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tags fa-fw"></i> Edwin Esneyder Alvarez</h3>
                            </div>
                            <div class="panel-body">
                                <div class="media-left">
                                    <img src="img/esneyder2.jpg" alt="esneyder" class="img-circle mg3">
                                </div>
                                <div class="media-body text-justify">
                                    <p>Estudiante de Ingeniería en Software, amante de la seguridad informática y desarrollador.</p>
                                    <p>Mis pasión por el desarrollo de Software hace que este constantemente investigando asuntos relacionados que me fortalezcan cada día en las diferentes áreas de esta hermosa profesión.</p>
                                    <a href="http://ingedwinesneyder.wordpress.com" target="_blank"  class="btn btn-primary"><span class="fa fa-wordpress fa-2x"></span></a>
                                    <a href="http://ingalvarez.tk" target="_blank" class="btn btn-warning"><span class="fa fa-clipboard fa-2x"></span></a>
                                    <a href="https://www.youtube.com/channel/UCCghAQHliodXURGl8d67UCw/videos" target="_blank" class="btn btn-danger"><span class="fa fa-youtube-play fa-2x"></span></a>
                                    <a href="https://twitter.com/EdwinEsneyder" target="_blank"  class="btn btn-info"><span class="fa fa-twitter fa-2x"></a>
                                </div>
                            </div>
                        </div>                        
                    </div>  
                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tags fa-fw"></i> Sebastián Mejía Serna</h3>
                            </div>
                            <div class="panel-body">
                                <div class="media-left">
                                    <img src="img/sebas.jpg" alt="esneyder" class="img-circle mg3">
                                </div>
                                <div class="media-body text-justify">
                                    <p>Apasionado por el desarrollo de Software y diseño Web, Tecnólogo en Sistemas, estudiante de Ingeniería en Sistemas.</p>
                                    <p>Tengo la necesidad de estar investigando y perfeccionarme como persona y profesional. Me gusta ayudar a las personas con el conocimiento que he adquirido a través del estudio y experiencia.</p>
                                    <a href="https://sofornetsm.wordpress.com/" target="_blank"  class="btn btn-primary"><span class="fa fa-wordpress fa-2x"></span></a>
                                    <a href="http://ingmejia.tk" target="_blank"  class="btn btn-warning"><span class="fa fa-clipboard fa-2x"></span></a>
                                    <a href="https://www.youtube.com/channel/UCHrnBoECO-YJ4Alxzx1hIUw" target="_blank" class="btn btn-danger"><span class="fa fa-youtube-play fa-2x"></span></a>
                                    <a href="https://twitter.com/MSebas_S" target="_blank" class="btn btn-info"><span class="fa fa-twitter fa-2x"></a>
                                </div>
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