<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                	<div class="col-md-12 p-0">
                		<div class="card p-4 mb-4 d-flex justify-content-between align-items-center">
                			<a class="btn btn-primary pull-left m-2" data-toggle="modal" data-target="#modal_new_order">Nueva Orden</a>

                			<div>
                				<!-- <a href="devolucion" class="mr-2 text-white pt-1 pb-1 pr-2 pl-2" style="background: #ef5350; border-radius: 6px; font-size: 12px; font-weight: bold;">Devolución de producto</a> -->
                				<a href="historialventas" class="mr-2 text-white pt-1 pb-1 pr-2 pl-2" style="background: #3F729B; border-radius: 6px; font-size: 12px; font-weight: bold;">Historial de órdenes</a>
                			</div>

                		</div>
                	</div>	
                </div>

                <div class="row">
                    <div class="content">
                        <form action="consultas/new_order.php" id="new_order">
                            <div class="container-fluid">
                                <div class="row">

                                    <!-- Datos Paciente  -->

                                    <div class="col-md-6 grey-background pull-left form-interno">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos Paciente:</strong></h5> <a href="#" class=" boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_new_order">Editar <i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="nombre">Nombre:</label>
                                                <input type="hidden" name="id_paciente" id="id_paciente">
                                                <input maxlength="100" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" required disabled>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="telefono">Teléfono/Celular:</label>
                                                <input maxlength="100" class="form-control" type="text" name="telefono" id="telefono" autocomplete="off" required disabled>
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="dni">DNI:</label>
                                                <input maxlength="100" class="form-control" type="text" name="dni" id="dni" autocomplete="off" required disabled>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="obra_social">Obra Social:</label>
                                                <input maxlength="100" class="form-control" type="text" name="obra_social" id="obra_social" autocomplete="off" required disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fin datos Paciente -->

                                    <!-- Datos receta  -->

                                    <div class="col-md-6 grey-background pull-right form-interno">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos Receta:</strong></h5> <a href="#" class=" boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_new_order2">Editar <i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="doctor">Doctor:</label>
                                                <input maxlength="100" class="form-control" type="text" name="doctor" id="doctor" required disabled>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="fecha_receta">Fecha de receta:</label>
                                                <input maxlength="100" class="form-control" type="text" name="fecha_receta" id="fecha_receta" autocomplete="off" required disabled>
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="patologia">Patología:</label>
                                                <input maxlength="100" class="form-control" type="text" name="patologia" id="patologia" autocomplete="off" required disabled>
                                            </div>
                                
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="graduacion">Graduación OD:</label>
                                                <input maxlength="100" class="form-control" type="number" name="graduacion_od" id="graduacion_od" autocomplete="off" required disabled>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="graduacion">Graduación OI:</label>
                                                <input maxlength="100" class="form-control" type="number" name="graduacion_oi" id="graduacion_oi" autocomplete="off" required disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fin datos receta  -->

                                    <!-- Datos cristales -->

                                    <div class="col-md-6 grey-background form-interno mt-4">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos Cristales:</strong></h5> <a href="#" class=" boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_new_order3"><i class="fa fa-pencil"></i>Editar </a>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="tipo_lente">Tipo de lente:</label>
                                                <input maxlength="100" class="form-control" type="text" name="tipo_lente" id="tipo_lente" required disabled>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="material">Material:</label>
                                                <input maxlength="100" class="form-control" type="text" name="material" id="material" required disabled>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="producto">Producto:</label>
                                                <input maxlength="100" class="form-control" type="text" name="producto" id="producto" required disabled>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="tratamiento">Tratamiento:</label>
                                                <input maxlength="100" class="form-control" type="text" name="tratamiento" id="tratamiento" required disabled>
                                            </div>
                                        </div>

                                        <!-- // ---------------------------- -->
                                        <!-- // MONOFOCAL ------------------ -->
                                        <div class="row">
                                            
                                            <div class="col-md-12 pl-0 pr-0 hidden" id="monofocal">
                                              <!-- Lejos -->
                                              <div class="d-flex align-items-center">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5><strong>Lejos:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                                                  <label for="monofocal_lejos_der" class="mb-0"><span class="mr-2">OD</span></label>
                                                  <input class="form-control" type="text" name="monofocal_lejos_der" id="monofocal_lejos_der" disabled>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                                                  <label for="monofocal_lejos_izq" class="mb-0"><span class="mr-2">OI</span></label>
                                                  <input class="form-control" type="text" name="monofocal_lejos_izq" id="monofocal_lejos_izq" disabled>
                                                </div>
                                              </div>
                                              <!-- Media -->
                                              <div class="d-flex align-items-center">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5 style="margin-left: 0px"><strong>Intermedia:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                                                  <label for="monofocal_media_der" class="mb-0"><span class="mr-2">OD</span></label>
                                                  <input class="form-control" type="text" name="monofocal_media_der" id="monofocal_media_der" disabled>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                                                  <label for="monofocal_media_izq" class="mb-0"><span class="mr-2">OI</span></label>
                                                  <input class="form-control" type="text" name="monofocal_media_izq" id="monofocal_media_izq" disabled>
                                                </div>
                                                
                                              </div>
                                              <!-- Cerca -->
                                              <div class="d-flex align-items-center">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5><strong>Cerca:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                                                  <label for="monofocal_cerca_der" class="mb-0"><span class="mr-2">OD</span></label>
                                                  <input class="form-control" type="text" name="monofocal_cerca_der" id="monofocal_cerca_der" disabled>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center mb-0">
                                                  <label for="monofocal_cerca_izq" class="mb-0"><span class="mr-2">OI</span></label>
                                                  <input class="form-control" type="text" name="monofocal_cerca_izq" id="monofocal_cerca_izq" disabled>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- // ---------------------------- -->
                                            <!-- // BIFOCAL ------------------ -->
                                            <div class="col-md-12 pl-0 pr-0 hidden" id="bifocal">
                                              <!-- Lejos -->
                                              <div class="d-flex align-items-center">
                                                <div class="form-group col-md-2">
                                                  <h5><strong>Lejos:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="bifocal_lejos_der" class="mb-0"><span class="mr-2">OD</span></label>
                                                  <input class="form-control" type="text" name="bifocal_lejos_der" id="bifocal_lejos_der" disabled>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="bifocal_lejos_izq" class="mb-0"><span class="mr-2">OI</span></label>
                                                  <input class="form-control" type="text" name="bifocal_lejos_izq" id="bifocal_lejos_izq" disabled>
                                                </div>
                                              </div>
                                              <!-- Adicion -->
                                              <div class="d-flex align-items-center">
                                                <div class="form-group col-md-2">
                                                  <h5><strong>Adición:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="bifocal_adicion_der" class="mb-0"><span class="mr-2">OD</span></label>
                                                  <input class="form-control" type="text" name="bifocal_adicion_der" id="bifocal_adicion_der" disabled>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="bifocal_adicion_izq" class="mb-0"><span class="mr-2">OI</span></label>
                                                  <input class="form-control adicion-izq" type="text" name="bifocal_adicion_izq" id="bifocal_adicion_izq" disabled>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- // ---------------------------- -->
                                            <!-- // MULTIFOCAL ----------------- -->
                                            <div class="col-md-12 pl-0 pr-0 hidden" id="multifocal">
                                              <!-- Lejos -->
                                              <div class="d-flex align-items-center">
                                                <div class="form-group col-md-2">
                                                  <h5><strong>Lejos:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="multifocal_lejos_der" class="mb-0"><span class="mr-2">OD</span></label>
                                                  <input class="form-control" type="text" name="multifocal_lejos_der" id="multifocal_lejos_der" disabled>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="multifocal_lejos_izq" class="mb-0"><span class="mr-2">OI</span></label>
                                                  <input class="form-control" type="text" name="multifocal_lejos_izq" id="multifocal_lejos_izq" disabled>
                                                </div>
                                              </div>
                                              <!-- Adicion -->
                                              <div class="d-flex align-items-center">
                                                <div class="form-group col-md-2">
                                                  <h5><strong>Adición:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="multifocal_adicion_der" class="mb-0"><span class="mr-2">OD</span></label>
                                                  <input class="form-control" type="text" name="multifocal_adicion_der" id="multifocal_adicion_der" disabled>
                                                </div>
                                                <div class="form-group col-md-5 d-flex align-items-center">
                                                  <label for="multifocal_adicion_izq" class="mb-0"><span class="mr-2">OI</span></label>
                                                  <input class="form-control" type="text" name="multifocal_adicion_izq" id="multifocal_adicion_izq" disabled>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Datos de Armazon -->

                                    <div class="col-md-6 grey-background form-interno pull-right mt-4">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos de armazón:</strong></h5> <a href="#" class=" boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_new_order4"><i class="fa fa-pencil"></i>Editar </a>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="marca_armazon">Marca:</label>
                                                <input maxlength="100" class="form-control" type="text" name="marca_armazon" id="marca_armazon"  disabled>
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="material_armazon">Material:</label>
                                                <input maxlength="100" class="form-control" type="text" name="material_armazon" id="material_armazon" disabled>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="tipo_armazon">Tipo de armazón:</label>
                                                <input maxlength="100" class="form-control" type="text" name="tipo_armazon" id="tipo_armazon"  disabled>
                                            </div>
                                
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="distancia">Dist. interpupilar:</label>
                                                <input maxlength="100" class="form-control" type="text" name="distancia" id="distancia"  disabled>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="altura">Altura:</label>
                                                <input maxlength="100" class="form-control" type="text" name="altura" id="altura"  disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="mt-4 col-12 d-flex justify-content-center">
                                            <!-- <input value="Guardar" type="submit" class="btn btn-primary btn-2x" id="#btn-submit"> -->
                                            <a href="#" class="btn btn-primary btn-2x" id="btn-submit">Guardar</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </form>
                        <div class="output_message"></div>
                        <div class="footer">
                            <div class="stats">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

<?php include 'views/footer.php' ?>

<!-- Modales -->
<?php include 'modals/modal_new_order.php' ?>
<?php include 'modals/modal_new_order2.php' ?>
<?php include 'modals/modal_new_order3.php' ?>
<?php include 'modals/modal_new_order4.php' ?>
<?php include 'modals/modal_add_paciente_ajax.php' ?>
<?php include 'modals/modal_post_orden.php' ?>

<!-- Scripts Ordenes -->
<?php include 'scripts/ordenes.php' ?>


