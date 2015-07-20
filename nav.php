   <? 
            include_once("config.php");
            if(!loggedIn()):
                header('Location: index.php');
            endif; 
        ?> 
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php">MblogMongo</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="https://ingedwinesneyder.wordpress.com/2015/06/29/php-pdo-mysql/" target="_blank">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="img/esneyder.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Esneyder Álvarez</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> 29 de Junio de 2015</p>
                                        <p>PDO, MYSLi y el php convencional.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="https://ingedwinesneyder.wordpress.com/2015/01/26/vulnerabilidades-mongodb/" target="_blank">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="img/esneyder.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Esneyder Álvarez</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> 26 de Enero de 2015</p>
                                        <p>Vulnerabilidades MongoDB</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="https://ingedwinesneyder.wordpress.com/2015/01/23/mongodb-php-foundation/" target="_blank">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="img/esneyder.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Esneyder Álvarez</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> 23 de Enero de 2015</p>
                                        <p>MongoDB + PHP + Foundation (CRUD)</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="https://ingedwinesneyder.wordpress.com/" target="_blank">Ver todas las publicaciones</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i><?php echo ("Hola! ".$_SESSION["login"]);?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Escríbenos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Contraseña</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                        <a href="logout.php" ><span class="fa fa-fw fa-power-off"></span>Cerrar sesión</a>
                             
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="main.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="statistics.php"><i class="fa fa-fw fa-bar-chart-o"></i> Estadísticas</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-star"></i> Favoritos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li><a href="detail.php">
                                <i class="fa fa-fw fa-list-ul"></i> Detalles
                            </a></li>
                            <li><a href="newFavorite.php">
                                <i class="fa fa-fw fa-file-text-o"></i> Nuevo elemento
                            </a></li>
                            <li><a href="favorite.php">
                                <i class="fa fa-fw fa-table"></i> Ver todos
                            </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.php"><i class="fa fa-fw fa-bookmark"></i> Categorías</a>
                    </li>
                    <li>
                        <a href="aboutUs.php"><i class="fa fa-fw fa-chain-broken"></i> Acerca de nosotros</a>
                    </li>                    
                    <li>
                        <a href="contact.php"><i class="fa fa-fw fa-edit"></i> Contáctenos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>