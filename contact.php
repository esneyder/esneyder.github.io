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
                        <h1 class="page-header">Contáctenos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="main.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Contáctenos
                            </li>
                        </ol>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-pencil fa-fw"></i> Escríbenos</h3>
                            </div>
                            <div class="panel-body">
                                <p>Comunícate con nosotros tienes dudas, sugerencias u otro tipo de recomendaciones. También si deseas apoyar nuestra labor o saber como podemos ayudarte desde nuestro objeto social.</p>
                                <form>
                                    <div class="form-group">
                                        <label for="name" class="control-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" placeholder="Ingresar nombre completo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="mail" class="control-label">Correo</label>
                                        <input type="mail" class="form-control" id="mail" placeholder="Ingresar correo">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject" class="control-label">Asunto</label>
                                        <input type="text" class="form-control" id="subject" placeholder="Asunto del mensaje">
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="control-label">Mensaje</label>
                                        <textarea class="form-control" rows="6" id="message" placeholder="Ingresar mensaje"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
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
                    <div class="col-lg-6">
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-paste fa-fw"></i> Algunos contenidos</h3>
                            </div>
                            <div class="panel-body">
                                <p><strong>Desarrolo web:</strong> recursos para iniciar y afianzar conocimientos para enfrentar un desarrollo tipo web: Front-end.</p>
                                <p><strong>Framework: </strong>recursos sobre los framework más utilizados a nivel universal.</p>
                                <p><strong>Bases de datos: </strong>recursos sobre bases de datos relacionales y no relacionales.</p>
                                <p><strong>Programación: </strong>contenidos sobre todo el mundo del desarrollo de Software.</p>
                                <p><strong>Seguridad informática: </strong>Recursos sobre seguridad informática y Kali Linux.</p>
                                <p><strong>Ingeniería:</strong> todos los recursos que necesitas para afianzarse en el maravilloso mundo del Software.</p>
                                <p><strong>Certificaciones: </strong>Obtenga enlaces a cursos o exámenes certificados por IBM, Microsoft, Oracle, entre otros.</p>
                            </div>
                        </div>                        
                    </div>                                     
                </div><!-- /.row -->
    <!-- Footer -->
    <?php require_once("footer.php"); ?>
</body>
</html>