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
                                <h4 class="title"><strong>Editar paciente: <?php echo $paciente['nombre']; ?></strong></h4>
                                <a class="btn btn-danger d-block d-sm-flex align-items-center" data-toggle="modal" data-target="#modalConfirmDelete<?php echo $paciente['id_paciente']; ?>" style="cursor:pointer"><h6 class="mr-2">Eliminar</h6><i class="fa fa-trash fa-2x"></i></a>
                            </div>
                            <div class="content">
                                <form action="consultas/editar_paciente.php" method="POST">
                                 <!-- row -->
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="nombre">Nombre:</label>
                                      <input maxlength="100" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" value="<?php echo $paciente['nombre']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="celular">DNI:</label>
                                      <input maxlength="100" class="form-control" type="text" name="dni" id="dni" autocomplete="off" value="<?php echo $paciente['dni']; ?>" required>
                                    </div>
                                  </div>

                                  <!-- row -->
                                  <div class="row">
                                    <div class="form-group col-md-6">
                                      <label for="tel_cel">Teléfono/Celular:</label>
                                      <input maxlength="100" class="form-control" type="text" name="tel_cel" id="tel_cel" autocomplete="off" value="<?php echo $paciente['tel_cel']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="obra_social">Obra Social:</label>
                                      <input maxlength="100" class="form-control" type="text" name="obra_social" id="obra_social" autocomplete="off" value="<?php echo $paciente['obra_social']; ?>" required>
                                    </div>
                                  </div>
                                  <input type="hidden" name="id_paciente" value="<?php echo $paciente['id_paciente']; ?>">
                                      <!--Footer-->
                                    <div class="modal-footer justify-content-center">
                                      <button class="btn info-color-dark white-text" type="submit">Guardar</button>
                                      <a class="btn btn-outline-info waves-effect" href="pacientes">Salir</a>
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

<?php include 'modals/modal_borrar_cliente.php' ?>