<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Abrir menú</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Cuenta</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#">
                                <p>Cerrar Sesión</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">

                            <div class="header d-flex justify-content-between">
                                <h4 class="title"><strong>Editar categoría: <?php echo $categoria['nombre']; ?></strong></h4>
                            </div>
                            <div class="content">
                                <form action="consultas/editar_categoria.php" method="POST">
                                <div class="form-group">
                                  <label for="nombre">Nombre de la categoría:</label>
                                  <input autofocus class="form-control" type="text" name="nombre_categoria" id="nombre_categoria" autocomplete="off" required value="<?php echo $categoria['nombre']; ?>">
                                  <input type="hidden" name="id_categoria" value="<?php echo $id_categoria ?>">
                                </div>
                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <button class="btn info-color-dark white-text" type="submit">Guardar</button>
                                  <a href="categorias" class="btn btn-outline-info waves-effect">Volver</a>
                                </div>
                              </form>
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                
        </div>


<?php include 'views/footer.php' ?>

<!-- Modal borrar producto -->

<?php include 'modals/modal_borrar_categoria.php' ?>