<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                	<div class="col-md-12 p-0">
                		<div class="card p-4 mb-4 d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <h3 class="m-0 mb-2"><strong>Orden N°: <?php echo $id_orden; ?></strong> </h3>
                                <h5 class="m-0"><strong>Atendido por:</strong> <?php echo $vendedor['nombre']; ?></h5>
                            </div>
                            
                            <div>
                                <a class=" btn btn-primary d-flex align-items-center" href="historial_ordenes.php">Volver <i class="pe-7s-back ml-1" style="font-size:20px; font-weight: bold;"></i></a>
                            </div>
                		</div>
                	</div>	
                </div>

                <div class="row">
                    <div class="content">
                        <form method="POST" action="consultas/new_order.php" id="new_order">
                            <div class="container-fluid">
                                <div class="row">

                                    <!-- Datos Paciente  -->

                                    <div class="col-md-6 grey-background pull-left form-interno">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos Paciente:</strong></h5> <a href="#" class="invisible boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_edit_new_order">Editar <i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="nombre">Nombre:</label>
                                                <input maxlength="100" class="form-control" type="text" name="nombre" id="nombre" autocomplete="off" required readonly="readonly" value="<?php echo $orden['nombre'] ?>">
                                                <input type="hidden" name="id_paciente" id="id_paciente" value="<?php echo $orden['id_paciente'] ?>">
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="telefono">Teléfono/Celular:</label>
                                                <input maxlength="100" class="form-control" type="text" name="telefono" id="telefono" autocomplete="off" required readonly="readonly" value="<?php echo $orden['telefono'] ?>">
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="dni">DNI:</label>
                                                <input maxlength="100" class="form-control" type="text" name="dni" id="dni" autocomplete="off" required readonly="readonly" value="<?php echo $orden['dni'] ?>">
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="obra_social">Obra Social:</label>
                                                <input maxlength="100" class="form-control" type="text" name="obra_social" id="obra_social" autocomplete="off" required readonly="readonly" value="<?php echo $orden['obra_social'] ?>">
                                            </div>
                                            <!-- Vendedor y sucursal estan ocultos -->

                                            <div class="form-group col-md-6 hidden">
                                                <input maxlength="100" class="form-control" type="hidden" name="vendedor" id="vendedor" autocomplete="off" required readonly="readonly" value="<?php echo $orden['vendedor'] ?>">
                                                <input maxlength="100" class="form-control" type="hidden" name="sucursal" id="sucursal" autocomplete="off" required readonly="readonly" value="<?php echo $orden['sucursal'] ?>">
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Fin datos Paciente -->

                                    <!-- Datos receta  -->

                                    <div class="col-md-6 grey-background pull-right form-interno">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos Receta:</strong></h5> <a href="#" class="invisible boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_edit_new_order2">Editar <i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="doctor">Doctor:</label>
                                                <input maxlength="100" class="form-control" type="text" name="doctor" id="doctor" required readonly="readonly" value="<?php echo $orden['doctor'] ?>">
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="fecha_receta">Fecha de receta:</label>
                                                <input maxlength="100" class="form-control" type="text" name="fecha_receta" id="fecha_receta" autocomplete="off" required readonly="readonly" value="<?php echo $orden['fecha_receta'] ?>">
                                            </div>
                                        </div>
                                
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="patologia">Patología:</label>
                                                <input maxlength="100" class="form-control" type="text" name="patologia" id="patologia" autocomplete="off" required readonly="readonly" value="<?php echo $orden['patologia'] ?>">
                                            </div>
                                
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="graduacion">Graduación OD:</label>
                                                <input maxlength="100" class="form-control" type="number" name="graduacion_od" id="graduacion_od" autocomplete="off" required readonly="readonly" value="<?php echo $orden['graduacion_od'] ?>">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="graduacion">Graduación OI:</label>
                                                <input maxlength="100" class="form-control" type="number" name="graduacion_oi" id="graduacion_oi" autocomplete="off" required readonly="readonly" value="<?php echo $orden['graduacion_oi'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fin datos receta  -->

                                    <!-- Datos cristales -->

                                    <div class="col-md-6 grey-background form-interno mt-4">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos Cristales:</strong></h5> <a href="#" class="invisible boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_edit_new_order3"><i class="fa fa-pencil"></i>Editar </a>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="tipo_lente">Tipo de lente:</label>
                                                <input maxlength="100" class="form-control" type="text" name="tipo_lente" id="tipo_lente" required readonly="readonly" value="<?php echo $orden['tipo_lente'] ?>">
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="material">Material:</label>
                                                <input maxlength="100" class="form-control" type="text" name="material" id="material" required readonly="readonly" value="<?php echo $orden['producto'] ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="producto">Producto:</label>
                                                <input maxlength="100" class="form-control" type="text" name="producto" id="producto" required readonly="readonly" value="<?php echo $orden['producto'] ?>">
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="tratamiento">Tratamiento:</label>
                                                <input maxlength="100" class="form-control" type="text" name="tratamiento" id="tratamiento" required readonly="readonly" value="<?php echo $orden['tratamiento'] ?>">
                                            </div>
                                        </div>

                                        <!-- // ---------------------------- -->
                                        <!-- // MONOFOCAL ------------------ -->
                                        <div class="row">
                                          <div class="d-flex justify-content-end align-items-center invisible">
                                            <div class="checkbox mt-0">
                                              <input type="checkbox" id="checkbox_lejos" name="checkbox_lejos" value="<?php echo $orden['checkbox_lejos'] ?>">
                                              <label for="checkbox_lejos" class="checkbox-label">Lejos</label>
                                            </div>
                                            <div class="checkbox mt-0 ml-2 mr-2">
                                              <input type="checkbox" id="checkbox_intermedia" name="checkbox_intermedia" value="<?php echo $orden['checkbox_intermedia'] ?>">
                                              <label for="checkbox_intermedia" class="checkbox-label">Intermedia</label>
                                            </div>
                                            <div class="checkbox mt-0">
                                              <input type="checkbox" id="checkbox_cerca" name="checkbox_cerca" value="<?php echo $orden['checkbox_cerca'] ?>">
                                              <label for="checkbox_cerca" class="checkbox-label">Cerca</label>
                                            </div>
                                          </div>
                                            
                                            <div class=" pl-0 pr-0 hidden" id="monofocal">
                                              <!-- Lejos -->
                                              <div class="hidden align-items-end col-md-12 monofocal_lejos mb-3">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5 class="mb-3"><strong>Lejos:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                  <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                                  <!-- ESF -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_lejos_der_esf">ESF</label>
                                                    <input class="form-control" type="text" name="monofocal_lejos_der_esf" id="monofocal_lejos_der_esf" readonly="readonly" value="<?php echo $orden['monofocal_lejos_der_esf'] ?>">
                                                  </div>
                                                  <!-- CIL -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_lejos_der_cil">CIL</label>
                                                    <input class="form-control" type="text" name="monofocal_lejos_der_cil" id="monofocal_lejos_der_cil" readonly="readonly" value="<?php echo $orden['monofocal_lejos_der_cil'] ?>">
                                                  </div>
                                                  <!-- EJE -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_lejos_der_eje">EJE</label>
                                                    <input class="form-control" type="text" name="monofocal_lejos_der_eje" id="monofocal_lejos_der_eje" readonly="readonly" value="<?php echo $orden['monofocal_lejos_der_eje'] ?>">
                                                  </div>
                                                  <!-- ADICION -->
                                                  <div class="text-center">
                                                    <label for="monofocal_lejos_der_add">ADD</label>
                                                    <input class="form-control" type="text" name="monofocal_lejos_der_add" id="monofocal_lejos_der_add" readonly="readonly" value="<?php echo $orden['monofocal_lejos_der_add'] ?>">
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="hidden align-items-end col-md-12 monofocal_lejos mb-3">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5 class="mb-3 hidden"><strong>Lejos:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                  <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                                  <!-- ESF -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_lejos_izq_esf" id="monofocal_lejos_izq_esf" readonly="readonly" value="<?php echo $orden['monofocal_lejos_izq_esf'] ?>">
                                                  </div>
                                                  <!-- CIL -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_lejos_izq_cil" id="monofocal_lejos_izq_cil" readonly="readonly" value="<?php echo $orden['monofocal_lejos_izq_cil'] ?>">
                                                  </div>
                                                  <!-- EJE -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_lejos_izq_eje" id="monofocal_lejos_izq_eje" readonly="readonly"  value="<?php echo $orden['monofocal_lejos_izq_eje'] ?>">
                                                  </div>
                                                  <!-- ADICION -->
                                                  <div class="text-center">
                                                    <input class="form-control" type="text" name="monofocal_lejos_izq_add" id="monofocal_lejos_izq_add" readonly="readonly"  value="<?php echo $orden['monofocal_lejos_izq_add'] ?>">
                                                  </div>
                                                </div>
                                              </div>

                                              <hr>

                                              <!-- Media -->
                                              <div class="hidden align-items-end col-md-12 monofocal_intermedia mb-3">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5 class="mb-3"><strong>Intermedia:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                  <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                                  <!-- ESF -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_intermedia_der_esf">ESF</label>
                                                    <input class="form-control" type="text" name="monofocal_intermedia_der_esf" id="monofocal_intermedia_der_esf" readonly="readonly" value="<?php echo $orden['monofocal_intermedia_der_esf'] ?>">
                                                  </div>
                                                  <!-- CIL -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_intermedia_der_cil">CIL</label>
                                                    <input class="form-control" type="text" name="monofocal_intermedia_der_cil" id="monofocal_intermedia_der_cil" readonly="readonly" value="<?php echo $orden['monofocal_intermedia_der_cil'] ?>">
                                                  </div>
                                                  <!-- EJE -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_intermedia_der_eje">EJE</label>
                                                    <input class="form-control" type="text" name="monofocal_intermedia_der_eje" id="monofocal_intermedia_der_eje" readonly="readonly" value="<?php echo $orden['monofocal_intermedia_der_eje'] ?>">
                                                  </div>
                                                  <!-- ADICION -->
                                                  <div class="text-center">
                                                    <label for="monofocal_intermedia_der_add">ADD</label>
                                                    <input class="form-control" type="text" name="monofocal_intermedia_der_add" id="monofocal_intermedia_der_add" readonly="readonly" value="<?php echo $orden['monofocal_intermedia_der_add'] ?>">
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="hidden align-items-end col-md-12 monofocal_intermedia mb-3">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5 class="mb-3 hidden"><strong>Intermedia:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                  <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                                  <!-- ESF -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_intermedia_izq_esf" id="monofocal_intermedia_izq_esf" readonly="readonly"  value="<?php echo $orden['monofocal_intermedia_izq_esf'] ?>">
                                                  </div>
                                                  <!-- CIL -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_intermedia_izq_cil" id="monofocal_intermedia_izq_cil" readonly="readonly"  value="<?php echo $orden['monofocal_intermedia_izq_cil'] ?>">
                                                  </div>
                                                  <!-- EJE -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_intermedia_izq_eje" id="monofocal_intermedia_izq_eje" readonly="readonly"  value="<?php echo $orden['monofocal_intermedia_izq_eje'] ?>">
                                                  </div>
                                                  <!-- ADICION -->
                                                  <div class="text-center">
                                                    <input class="form-control" type="text" name="monofocal_intermedia_izq_add" id="monofocal_intermedia_izq_add" readonly="readonly"  value="<?php echo $orden['monofocal_intermedia_izq_add'] ?>">
                                                  </div>
                                                </div>
                                              </div>
                                              
                                              <!-- Cerca -->
                                              <div class="hidden align-items-end col-md-12 monofocal_cerca mb-3">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5 class="mb-3"><strong>Cerca:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                  <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                                  <!-- ESF -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_cerca_der_esf">ESF</label>
                                                    <input class="form-control" type="text" name="monofocal_cerca_der_esf" id="monofocal_cerca_der_esf" readonly="readonly" value="<?php echo $orden['monofocal_cerca_der_esf'] ?>">
                                                  </div>
                                                  <!-- CIL -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_cerca_der_cil">CIL</label>
                                                    <input class="form-control" type="text" name="monofocal_cerca_der_cil" id="monofocal_cerca_der_cil" readonly="readonly" value="<?php echo $orden['monofocal_cerca_der_cil'] ?>">
                                                  </div>
                                                  <!-- EJE -->
                                                  <div class="text-center mr-3">
                                                    <label for="monofocal_cerca_der_eje">EJE</label>
                                                    <input class="form-control" type="text" name="monofocal_cerca_der_eje" id="monofocal_cerca_der_eje" readonly="readonly" value="<?php echo $orden['monofocal_cerca_der_eje'] ?>">
                                                  </div>
                                                  <!-- ADICION -->
                                                  <div class="text-center">
                                                    <label for="monofocal_cerca_der_add">ADD</label>
                                                    <input class="form-control" type="text" name="monofocal_cerca_der_add" id="monofocal_cerca_der_add" readonly="readonly" value="<?php echo $orden['monofocal_cerca_der_add'] ?>">
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="hidden align-items-end col-md-12 monofocal_cerca mb-3">
                                                <div class="form-group col-md-2 mb-0">
                                                  <h5 class="mb-3 hidden"><strong>Cerca:</strong></h5>
                                                </div>
                                                <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                  <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                                  <!-- ESF -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_cerca_izq_esf" id="monofocal_cerca_izq_esf" readonly="readonly" value="<?php echo $orden['monofocal_cerca_izq_esf'] ?>">
                                                  </div>
                                                  <!-- CIL -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_cerca_izq_cil" id="monofocal_cerca_izq_cil" readonly="readonly" value="<?php echo $orden['monofocal_cerca_izq_cil'] ?>">
                                                  </div>
                                                  <!-- EJE -->
                                                  <div class="text-center mr-3">
                                                    <input class="form-control" type="text" name="monofocal_cerca_izq_eje" id="monofocal_cerca_izq_eje" readonly="readonly" value="<?php echo $orden['monofocal_cerca_izq_eje'] ?>">
                                                  </div>
                                                  <!-- ADICION -->
                                                  <div class="text-center">
                                                    <input class="form-control" type="text" name="monofocal_cerca_izq_add" id="monofocal_cerca_izq_add" readonly="readonly" value="<?php echo $orden['monofocal_cerca_izq_add'] ?>">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- // ---------------------------- -->
                                            <!-- // BIFOCAL ------------------ -->
                                            <div class=" pl-0 pr-0 hidden" id="bifocal">
                                              <div class="align-items-end col-md-12 mb-3">
                                                  <div class="form-group col-md-2 mb-0">
                                                    <h5 class="mb-3"><strong>Bifocal:</strong></h5>
                                                  </div>
                                                  <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                                    <!-- ESF -->
                                                    <div class="text-center mr-3">
                                                      <label for="bifocal_der_esf">ESF</label>
                                                      <input class="form-control" type="text" name="bifocal_der_esf" id="bifocal_der_esf" readonly="readonly" value="<?php echo $orden['bifocal_der_esf'] ?>">
                                                    </div>
                                                    <!-- CIL -->
                                                    <div class="text-center mr-3">
                                                      <label for="bifocal_der_cil">CIL</label>
                                                      <input class="form-control" type="text" name="bifocal_der_cil" id="bifocal_der_cil" readonly="readonly" value="<?php echo $orden['bifocal_der_cil'] ?>">
                                                    </div>
                                                    <!-- EJE -->
                                                    <div class="text-center mr-3">
                                                      <label for="bifocal_der_eje">EJE</label>
                                                      <input class="form-control" type="text" name="bifocal_der_eje" id="bifocal_der_eje" readonly="readonly" value="<?php echo $orden['bifocal_der_eje'] ?>">
                                                    </div>
                                                    <!-- ADICION -->
                                                    <div class="text-center">
                                                      <label for="bifocal_der_add">ADD</label>
                                                      <input class="form-control" type="text" name="bifocal_der_add" id="bifocal_der_add" readonly="readonly" value="<?php echo $orden['bifocal_der_add'] ?>">
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="align-items-end col-md-12 mb-3">
                                                  <div class="form-group col-md-2 mb-0">
                                                    <h5 class="mb-3 hidden"><strong>Ojo izquierdo:</strong></h5>
                                                  </div>
                                                  <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                                    <!-- ESF -->
                                                    <div class="text-center mr-3">
                                                      <input class="form-control" type="text" name="bifocal_izq_esf" id="bifocal_izq_esf" readonly="readonly" value="<?php echo $orden['bifocal_izq_esf'] ?>">
                                                    </div>
                                                    <!-- CIL -->
                                                    <div class="text-center mr-3">
                                                      <input class="form-control" type="text" name="bifocal_izq_cil" id="bifocal_izq_cil" readonly="readonly" value="<?php echo $orden['bifocal_izq_cil'] ?>">
                                                    </div>
                                                    <!-- EJE -->
                                                    <div class="text-center mr-3">
                                                      <input class="form-control" type="text" name="bifocal_izq_eje" id="bifocal_izq_eje" readonly="readonly" value="<?php echo $orden['bifocal_izq_eje'] ?>">
                                                    </div>
                                                    <!-- ADICION -->
                                                    <div class="text-center">
                                                      <input class="form-control" type="text" name="bifocal_izq_add" id="bifocal_izq_add" readonly="readonly" value="<?php echo $orden['bifocal_izq_add'] ?>">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                            <!-- // ---------------------------- -->
                                            <!-- // MULTIFOCAL ----------------- -->
                                            <div class=" pl-0 pr-0 hidden" id="multifocal">
                                              <div class="align-items-end col-md-12 mb-3">
                                                  <div class="form-group col-md-2 mb-0">
                                                    <h5 class="mb-3"><strong>Multifocal:</strong></h5>
                                                  </div>
                                                  <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                                    <!-- ESF -->
                                                    <div class="text-center mr-3">
                                                      <label for="multifocal_der_esf">ESF</label>
                                                      <input class="form-control" type="text" name="multifocal_der_esf" id="multifocal_der_esf" readonly="readonly" value="<?php echo $orden['multifocal_der_esf'] ?>">
                                                    </div>
                                                    <!-- CIL -->
                                                    <div class="text-center mr-3">
                                                      <label for="multifocal_der_cil">CIL</label>
                                                      <input class="form-control" type="text" name="multifocal_der_cil" id="multifocal_der_cil" readonly="readonly" value="<?php echo $orden['multifocal_der_cil'] ?>">
                                                    </div>
                                                    <!-- EJE -->
                                                    <div class="text-center mr-3">
                                                      <label for="multifocal_der_eje">EJE</label>
                                                      <input class="form-control" type="text" name="multifocal_der_eje" id="multifocal_der_eje" readonly="readonly" value="<?php echo $orden['multifocal_der_eje'] ?>">
                                                    </div>
                                                    <!-- ADICION -->
                                                    <div class="text-center">
                                                      <label for="multifocal_der_add">ADD</label>
                                                      <input class="form-control" type="text" name="multifocal_der_add" id="multifocal_der_add" readonly="readonly" value="<?php echo $orden['multifocal_der_add'] ?>">
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="align-items-end col-md-12 mb-3">
                                                  <div class="form-group col-md-2 mb-0">
                                                    <h5 class="mb-3 hidden"><strong>Ojo izquierdo:</strong></h5>
                                                  </div>
                                                  <div class="form-group col-md-7 d-flex align-items-end mb-0">
                                                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                                    <!-- ESF -->
                                                    <div class="text-center mr-3">
                                                      <input class="form-control" type="text" name="multifocal_izq_esf" id="multifocal_izq_esf" readonly="readonly" value="<?php echo $orden['multifocal_izq_esf'] ?>">
                                                    </div>
                                                    <!-- CIL -->
                                                    <div class="text-center mr-3">
                                                      <input class="form-control" type="text" name="multifocal_izq_cil" id="multifocal_izq_cil" readonly="readonly" value="<?php echo $orden['multifocal_izq_cil'] ?>">
                                                    </div>
                                                    <!-- EJE -->
                                                    <div class="text-center mr-3">
                                                      <input class="form-control" type="text" name="multifocal_izq_eje" id="multifocal_izq_eje" readonly="readonly" value="<?php echo $orden['multifocal_izq_eje'] ?>">
                                                    </div>
                                                    <!-- ADICION -->
                                                    <div class="text-center">
                                                      <input class="form-control" type="text" name="multifocal_izq_add" id="multifocal_izq_add" readonly="readonly" value="<?php echo $orden['multifocal_izq_add'] ?>">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Datos de Armazon -->

                                    <div class="col-md-6 grey-background form-interno pull-right mt-4">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Datos de armazón:</strong></h5> <a href="#" class="invisible boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_edit_new_order4"><i class="fa fa-pencil"></i>Editar </a>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="marca_armazon">Marca:</label>
                                                <input maxlength="100" class="form-control" type="text" name="marca_armazon" id="marca_armazon"  readonly="readonly" value="<?php echo $orden['marca_armazon'] ?>">
                                            </div>
                                
                                            <div class="form-group col-md-6">
                                                <label for="material_armazon">Material:</label>
                                                <input maxlength="100" class="form-control" type="text" name="material_armazon" id="material_armazon" readonly="readonly" value="<?php echo $orden['material_armazon'] ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6">
                                                <label for="tipo_armazon">Tipo de armazón:</label>
                                                <input maxlength="100" class="form-control" type="text" name="tipo_armazon" id="tipo_armazon"  readonly="readonly" value="<?php echo $orden['tipo_armazon'] ?>">
                                            </div>
                                
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="distancia">Dist. interpupilar:</label>
                                                <input maxlength="100" class="form-control" type="text" name="distancia" id="distancia"  readonly="readonly" value="<?php echo $orden['dist_interpupilar'] ?>">
                                            </div>
                                            <div class="form-group col-sm-12 col-md-3">
                                                <label for="altura">Altura:</label>
                                                <input maxlength="100" class="form-control" type="text" name="altura" id="altura"  readonly="readonly" value="<?php echo $orden['altura'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 grey-background form-interno float-right mt-4">
                                        
                                        <input maxlength="100" class="form-control" type="hidden" name="trabajo" id="trabajo"  readonly="readonly" value="<?php echo $orden['trabajo'] ?>">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Observaciones:</strong></h5> <a href="#" class="invisible boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_edit_new_order4"><i class="fa fa-pencil"></i>Editar </a>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-4" style="width: 100% !important">
                                                <textarea maxlength="200" rows="6" style="min-width: 100% !important" class="form-control" autocomplete="off" name="observaciones" id="observaciones" readonly="readonly"> <?php echo $orden['observaciones'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 grey-background form-interno float-rigth mt-4">
                                        <div class="d-flex justify-content-between align-items-center"><h5><strong>Total, seña y saldo:</strong></h5> <a href="#" class="invisible boton-editar-orden btn btn-primary d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modal_edit_new_order5"><i class="fa fa-pencil"></i>Editar </a>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <label for="cristales_precio">Cristales:</label>
                                                <input maxlength="100" class="form-control" type="number" autocomplete="off" id="cristales_precio" name="cristales_precio" readonly="readonly" value="<?php echo $orden['cristales_precio'] ?>">
                                            </div>

                                            <div class="form-group col-sm-12 col-md-4">
                                                <label for="armazon_precio">Armazón:</label>
                                                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="armazon_precio" name="armazon_precio" readonly="readonly" value="<?php echo $orden['armazon_precio'] ?>">
                                            </div>

                                            <div class="form-group col-sm-12 col-md-4">
                                                <label for="otros_precio">Otros:</label>
                                                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="otros_precio" name="otros_precio" readonly="readonly" value="<?php echo $orden['otros_precio'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-4">
                                                <label for="total">Total:</label>
                                                <input maxlength="100" class="form-control" type="number" autocomplete="off" id="total" name="total" readonly="readonly" value="<?php echo $orden['total'] ?>">
                                            </div>

                                            <div class="form-group col-sm-12 col-md-4">
                                                <label for="senia">Seña:</label>
                                                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="senia" name="senia" readonly="readonly" value="<?php echo $orden['senia'] ?>">
                                            </div>

                                            <div class="form-group col-sm-12 col-md-4">
                                                <label for="saldo">Saldo:</label>
                                                <input maxlength="100" class="form-control" type="text" autocomplete="off" id="saldo" name="saldo" readonly="readonly" value="<?php echo $orden['saldo'] ?>">
                                            </div>

                                            <div class="form-group col-sm-12 col-md-4 hidden">
                                                <input maxlength="100" class="form-control" type="hidden" autocomplete="off" id="metodo_pago" name="metodo_pago" value="<?php echo $orden['metodo_pago'] ?>">
                                            </div>

                                            <div class="form-group col-sm-12 col-md-4 hidden">
                                                <input maxlength="100" class="form-control" type="hidden" autocomplete="off" id="fecha_entrega" name="fecha_entrega" value="<?php echo $orden['fecha_entrega'] ?>">
                                            </div>

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
<?php include 'modals/modal_edit_new_order.php' ?>
<?php include 'modals/modal_edit_new_order2.php' ?>
<?php include 'modals/modal_edit_new_order3.php' ?>
<?php include 'modals/modal_edit_new_order4.php' ?>
<?php include 'modals/modal_edit_new_order5.php' ?>
<?php include 'modals/modal_add_paciente_ajax.php' ?>
<?php include 'modals/modal_post_orden.php' ?>
<?php include 'modals/modal_error.php' ?>

<!-- Scripts Ordenes -->
<?php include 'scripts/editar_orden.php' ?>


