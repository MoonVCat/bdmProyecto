<?php
session_start();
require "connection.php";
include 'C:\xampp\htdocs\proyecto\templatess\headerPerfil.php';
include 'C:\xampp\htdocs\proyecto\templatess\navbar.php';
?>

<?php
$id = $_SESSION['USER_ID'];
$image = $_SESSION['image'];
?>

<!----->
<div class="content">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">

                <a href="crearCate.php" class="list-group-item list-group-item-action">Crear Secciones(Categorias)
                    <i class='far fa-save' style='font-size:18px;color: black'></i>
                </a>
                <a href="editarUser.php" class="list-group-item list-group-item-action">Crear/Eliminar Usuarios
                    <i class='far fa-address-card' style='font-size:18px;color: black'></i>
                </a>
                <a href="aprobarNew.php" class="list-group-item list-group-item-action">Aprobar Noticias
                    <i class='fas fa-pencil-alt' style='font-size:18px;color: black'></i>
                </a>
                <a href="conf.php" class="list-group-item list-group-item-action">Configuración
                    <i class='fas fa-tools' style='font-size:18px;color: black'></i>
                </a>
                <a href="cerrarsesion.php" class="list-group-item list-group-item-action">Cerrar Sesion
                    <i class='far fa-eye' style='font-size:18px;color: black'></i>
                </a>
            </div>
        </div>


        <div class="info_usuario">

            <div class="container text-center">
                <div class="content-profile-page">
                    <div class="profile-user-page card">

                        <div class="img-user-profile">
                            <img class="profile-bgHome" src="https://www.sbs.com.au/yourlanguage/sites/sbs.com.au.yourlanguage/files/podcast_images/sbs_04.jpg" />
                            <img class="avatar" src='<?php echo $image; ?>' alt="jofpin" />

                        </div>
                        <div class="user-profile-data">

                            <h1>
                                <?php echo '<a>' . $_SESSION['username'] . '</a>'; ?>
                            </h1>
                            <br>
                            <?php echo '<h4>' . $_SESSION['nombreCom'] . '</h4>'; ?>

                            <br>

                            <h6>-Telefono de contacto-</h6>

                            <p>
                                <?php echo '<a>' . $_SESSION['phone'] . '</a>'; ?>
                            </p>
                            <h6>-Correo-</h6>
                            <p>
                                <?php echo '<a>' . $_SESSION['user_login'] . '</a>'; ?>
                            </p>

                        </div>
                        <div class="description-profile">
                            <h6>-Acerca de mi-</h6>
                            <?php echo '<a>' . $_SESSION['infoU'] . '</a>'; ?>
                        </div>

                        <ul class="data-user">
                            
                            <li class="seccion1">
                                <a href="#favoritos" class="seccion1">Mis favoritos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--------------------------------------------------------- mis favoritos --------------------------------------------------------->
            <div class="container text-center">

                <hr>
                <h4 style="color: white">Mis favoritos</h4>
                </hr>

                <section id="favoritos" class="seccion1">

                    <div class="recent-news ">
                        <div class="card mb-3 body-card ">
                            <div class="row no-gutters ">

                                <div class="col-md-4">
                                    <img src="http://i.huffpost.com/gen/1385110/images/o-COLBERT-FOX-NEWS-facebook.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo de la Noticia</h5>
                                        <p class="card-text">Descripcion corta de la noticia Descripcion corta de la noticia
                                            Descripcion corta de la noticia Descripcion corta de la noticia Descripcion corta de la
                                            noticia.</p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>

                                            <i class='far fa-calendar' style='font-size:18px'></i>

                                        </p>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-primary me-md-2" type="button">Eliminar de favoritos</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="recent-news ">
                        <div class="card mb-3 body-card ">
                            <div class="row no-gutters ">

                                <div class="col-md-4">
                                    <img src="http://i.huffpost.com/gen/1385110/images/o-COLBERT-FOX-NEWS-facebook.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo de la Noticia</h5>
                                        <p class="card-text">Descripcion corta de la noticia Descripcion corta de la noticia
                                            Descripcion corta de la noticia Descripcion corta de la noticia Descripcion corta de la
                                            noticia.</p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>

                                            <i class='far fa-calendar' style='font-size:18px'></i>

                                        </p>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-primary me-md-2" type="button">Eliminar de favoritos</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="recent-news ">
                        <div class="card mb-3 body-card ">
                            <div class="row no-gutters ">

                                <div class="col-md-4">
                                    <img src="http://i.huffpost.com/gen/1385110/images/o-COLBERT-FOX-NEWS-facebook.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo de la Noticia</h5>
                                        <p class="card-text">Descripcion corta de la noticia Descripcion corta de la noticia
                                            Descripcion corta de la noticia Descripcion corta de la noticia Descripcion corta de la
                                            noticia.</p>

                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>

                                            <i class='far fa-calendar' style='font-size:18px'></i>

                                        </p>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-primary me-md-2" type="button">Eliminar de favoritos</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>

        </div>
    </div>
</div>


<script src="js/bootstrap.min.js"></script>
<script src="js/registro.js"></script>

</body>

<?php include 'C:\xampp\htdocs\proyecto\templatess\footer.php'; ?>

</html>