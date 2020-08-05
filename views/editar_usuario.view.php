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
                                <h4 class="title"><strong>Editar Usuario: <?php echo $usuario_editar['nombre']; ?></strong></h4>

                                <a class="btn btn-danger d-block d-sm-flex align-items-center" data-toggle="modal" data-target="#modalConfirmDelete<?php echo $usuario_editar['id_usuario']; ?>" style="cursor:pointer"><h6 class="mr-2">Eliminar</h6><i class="fa fa-trash fa-2x"></i></a>
                            </div>
                            <div class="content">
                                <form action="consultas/edit_user.php" id="form-edit-user<?php echo $usuario_editar['id_usuario']; ?>" method="POST">
                                  <input type="hidden" name="id_usuario" value="<?php echo $usuario_editar['id_usuario']; ?>">
                                  <div class="form-group">
                                    <label for="nombre">Nombre del usuario:</label>
                                    <input class="form-control" type="text" name="nombre" value="<?php echo $usuario_editar['nombre']; ?>" autocomplete="off" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="rol">Rol:</label>
                                    <select class="form-control" name="rol" selected="Seleccionar Rol" required>
                                      <option value="">Seleccionar rol</option>
                                      <?php foreach ($roles as $rol): ?>
                                        <option value="<?php echo $rol['id'] ?>"><?php echo $rol['rol'] ?></option>
                                      <?php endforeach ?>
                                    </select>
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

<!-- Modal borrar cliente -->

<?php include 'modals/modal_borrar_usuario.php' ?>