<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-11">
                        <div class="card">
      
                            <div class="header d-flex justify-content-between">
                                <h4 class="title"><strong>Editar Vendedor: <?php echo $vendedor_editar['nombre']; ?></strong></h4>

                                <a class="btn btn-danger d-block d-sm-flex align-items-center" data-toggle="modal" data-target="#modalConfirmDelete<?php echo $vendedor_editar['id_vendedor']; ?>" style="cursor:pointer"><h6 class="mr-2">Eliminar</h6><i class="fa fa-trash fa-2x"></i></a>
                            </div>
                            <div class="content">
                                <form action="consultas/edit_vendedor.php" id="form-edit-user<?php echo $vendedor_editar['id_vendedor']; ?>" method="POST">
                                  <input type="hidden" name="id_vendedor" value="<?php echo $vendedor_editar['id_vendedor']; ?>">
                                  <div class="form-group">
                                    <label for="nombre">Nombre del vendedor:</label>
                                    <input class="form-control" type="text" name="nombre" value="<?php echo $vendedor_editar['nombre']; ?>" autocomplete="off" required>
                                  </div>
                                  
                                  <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                  <button class="btn info-color-dark white-text" type="submit">Guardar</button>
                                  <a class="btn btn-outline-info waves-effect" href="usuarios">Salir</a>
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

<!-- Modal borrar vendedor -->

<?php include 'modals/modal_borrar_vendedor.php' ?>