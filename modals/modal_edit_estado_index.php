
<!-- Modal de orden <?php echo $orden['id'] ?> -->
<div class="modal fade" id="modal_edit_estado<?php echo $orden['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="p-4 info-color d-flex justify-content-between align-items-center" style="background: #f2f2f2;">
        
        <p class="heading lead mb-0"><strong>Orden N°: <span id="nroorden"><?php echo $orden['id'] ?></span></strong></p>
             
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="m-0"><strong>Nombre:</strong> <strong style="color: #ff4a55"><?php echo $orden['nombre'] ?></strong> </h4>
            <button type="button" class="close ml-4" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>
      </div>

      <hr class="mt-0 mb-0">

      <!--Body-->
  <div class="modal-body mt-0" >

        <form action="consultas/editar_estado.php" id="form-add-producto<?php echo $orden['id'] ?>" method="POST">
          <div class="form-group p-0">
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex justify-content-between">
                  <p class="mb-0 mt-1"><strong>Cristales:</strong></p> <p class="mb-0"><strong>$<?php echo $orden['cristales_precio'] ?></strong></p> 
                </div>

                <div class="d-flex justify-content-between">
                  <p class="mb-1"><strong>Armazón:</strong></p> <p class="mb-1"><strong>$<?php echo $orden['armazon_precio'] ?></strong></p>
                </div> 

                <div class="d-flex justify-content-between mt-0">
                  <p class="mb-2"><strong>Otros:</strong></p> <p><strong>$<?php echo $orden['otros_precio'] ?></strong></p>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="d-flex justify-content-between">
                  <p class="mb-0"><strong>Total:</strong></p> <p class="mb-0"><strong>$<?php echo $orden['total'] ?></strong></p> 
                </div>

                <div class="d-flex justify-content-between" style="border-bottom: 2px solid #444">
                  <p class="mb-1"><strong>Seña:</strong></p> <p class="mb-1"><strong>$<?php echo $orden['senia'] ?></strong></p>
                </div> 

                <div class="d-flex justify-content-between mt-2">
                  <p class="mb-2"><strong>Saldo:</strong></p> <p><strong style="color: #00a598">$<?php echo $orden['saldo'] ?></strong></p>
                </div> 
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-md-6">
                <div class="d-flex mt-0">
                  <p class="mb-2 mr-1"><strong>Cliente:</strong></p> <p><?php echo $orden['nombre'] ?></p>
                </div> 
                <div class="d-flex mt-0">
                  <p class="mb-2 mr-1"><strong>Fecha de entrega:</strong></p> <p><?php echo date('d/m/Y', strtotime($orden['fecha_entrega'])) ?></p>
                </div>
                <div class="d-flex mt-0">
                  <p class="mb-2 mr-1"><strong>Sucursal:</strong></p> <p><?php echo $orden['sucursal'] ?></p>
                </div>
                <div class="d-flex mt-0">
                  <p class="mb-2 mr-1"><strong>Artículo:</strong></p> <p><?php echo $orden['producto'] ?></p>
                </div>
                <div class="d-flex mt-0">
                  <p class="mb-2 mr-1"><strong>Tratamiento:</strong></p> <p><?php echo $orden['tratamiento'] ?></p>
                </div>
              </div>

              <!-- Gradiaciones-->

              <div class="col-sm-6">
                        <!-- datos del lente, aca hay que poner un if por cada tipo de lente -->
                        <div class="d-flex flex-column">
                        <?php if ($orden['tipo_lente'] === "Monofocal"): ?>
                            <?php if ($orden['checkbox_lejos'] === "1"): ?>
                                <p class="mt-0">Monofocal Lejos</p>
                                <!-- Si tiene el checkbox de Lejos: -->  
                                <!-- OJO DERECHO -->
                                <div class="form-group d-flex align-items-end mb-2">
                                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_esf">ESF</label>
                                      <input class="form-control" type="text" id="monofocal_lejos_der_esf" value="<?php echo $orden['monofocal_lejos_der_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_cil">CIL</label>
                                      <input class="form-control" type="text" id="monofocal_lejos_der_cil" value="<?php echo $orden['monofocal_lejos_der_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_eje">EJE</label>
                                      <input class="form-control" type="text" id="monofocal_lejos_der_eje" value="<?php echo $orden['monofocal_lejos_der_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <label for="monofocal_lejos_der_add">ADD</label>
                                      <input class="form-control" type="text" id="monofocal_lejos_der_add" value="<?php echo $orden['monofocal_lejos_der_add'] ?>">
                                    </div>
                                </div> 

                                <!-- OJO IZQUIERDO -->
                                 <div class="form-group d-flex align-items-end mb-3">
                                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_lejos_izq_esf" value="<?php echo $orden['monofocal_lejos_izq_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_lejos_izq_cil" value="<?php echo $orden['monofocal_lejos_izq_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_lejos_izq_eje" value="<?php echo $orden['monofocal_lejos_izq_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <input class="form-control" type="text" id="monofocal_lejos_izq_add" value="<?php echo $orden['monofocal_lejos_izq_add'] ?>">
                                    </div>
                                </div> 
                            <?php endif ?>
                            

                            <!-- Si tiene el checkbox de Intermedia: -->

                            <?php if ($orden['checkbox_intermedia'] === "1" ): ?>
                                <p class="mt-0">Monofocal intermedia</p>
                                <!-- OJO DERECHO -->
                                <div class="form-group d-flex align-items-end mb-2">
                                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_esf">ESF</label>
                                      <input class="form-control" type="text" id="monofocal_intermedia_der_esf" value="<?php echo $orden['monofocal_intermedia_der_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_cil">CIL</label>
                                      <input class="form-control" type="text" id="monofocal_intermedia_der_cil" value="<?php echo $orden['monofocal_intermedia_der_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_eje">EJE</label>
                                      <input class="form-control" type="text" id="monofocal_intermedia_der_eje" value="<?php echo $orden['monofocal_intermedia_der_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <label for="monofocal_lejos_der_add">ADD</label>
                                      <input class="form-control" type="text" id="monofocal_intermedia_der_add" value="<?php echo $orden['monofocal_intermedia_der_add'] ?>">
                                    </div>
                                </div> 

                                <!-- OJO IZQUIERDO -->
                                 <div class="form-group d-flex align-items-end mb-3">
                                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_intermedia_izq_esf" value="<?php echo $orden['monofocal_intermedia_izq_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_intermedia_izq_cil" value="<?php echo $orden['monofocal_intermedia_izq_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_intermedia_izq_eje" value="<?php echo $orden['monofocal_intermedia_izq_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <input class="form-control" type="text" id="monofocal_intermedia_izq_add" value="<?php echo $orden['monofocal_intermedia_izq_add'] ?>">
                                    </div>
                                </div>
                            <?php endif ?>
                            <!-- Si tiene el checkbox de cerca: -->
                            <?php if ($orden['checkbox_cerca'] === "1" ): ?>
                                <p class="mt-0">Monofocal cerca</p>
                                <!-- OJO DERECHO -->
                                <div class="form-group d-flex align-items-end mb-2">
                                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_esf">ESF</label>
                                      <input class="form-control" type="text" id="monofocal_cerca_der_esf" value="<?php echo $orden['monofocal_cerca_der_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_cil">CIL</label>
                                      <input class="form-control" type="text" id="monofocal_cerca_der_cil" value="<?php echo $orden['monofocal_cerca_der_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_eje">EJE</label>
                                      <input class="form-control" type="text" id="monofocal_cerca_der_eje" value="<?php echo $orden['monofocal_cerca_der_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <label for="monofocal_lejos_der_add">ADD</label>
                                      <input class="form-control" type="text" id="monofocal_cerca_der_add" value="<?php echo $orden['monofocal_cerca_der_add'] ?>">
                                    </div>
                                </div> 

                                <!-- OJO IZQUIERDO -->
                                 <div class="form-group d-flex align-items-end mb-3">
                                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_cerca_izq_esf" value="<?php echo $orden['monofocal_cerca_izq_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_cerca_izq_cil" value="<?php echo $orden['monofocal_cerca_izq_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="monofocal_cerca_izq_eje" value="<?php echo $orden['monofocal_cerca_izq_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <input class="form-control" type="text" id="monofocal_cerca_izq_add" value="<?php echo $orden['monofocal_cerca_izq_add'] ?>">
                                    </div>
                                </div>
                            <?php endif ?>  
                        <?php endif ?> <!-- FIN IF MONOFOCAL  -->
                            
                            <?php if ($orden['tipo_lente'] === "Bifocal"): ?>
                                <p>Bifocal</p>
                                <!-- OJO DERECHO -->
                                <div class="form-group d-flex align-items-end mb-2">
                                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_esf">ESF</label>
                                      <input class="form-control" type="text" id="bifocal_der_esf" value="<?php echo $orden['bifocal_der_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_cil">CIL</label>
                                      <input class="form-control" type="text" id="bifocal_der_cil" value="<?php echo $orden['bifocal_der_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_eje">EJE</label>
                                      <input class="form-control" type="text" id="bifocal_der_eje" value="<?php echo $orden['bifocal_der_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <label for="monofocal_lejos_der_add">ADD</label>
                                      <input class="form-control" type="text" id="bifocal_add" value="<?php echo $orden['bifocal_der_add'] ?>">
                                    </div>
                                </div> 

                                <!-- OJO IZQUIERDO -->
                                 <div class="form-group d-flex align-items-end mb-3">
                                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="bifocal_izq_esf" value="<?php echo $orden['bifocal_izq_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="bifocal_izq_cil" value="<?php echo $orden['bifocal_izq_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="bifocal_izq_eje" value="<?php echo $orden['bifocal_izq_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <input class="form-control" type="text" id="bifocal_izq_add" value="<?php echo $orden['bifocal_izq_add'] ?>">
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if ($orden['tipo_lente'] === "Multifocal"): ?>
                                <p>Multifocal</p>
                                <!-- OJO DERECHO -->
                                <div class="form-group d-flex align-items-end mb-2">
                                    <label class=""><span class="mr-2 mb-4 pb-4">OD</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_esf">ESF</label>
                                      <input class="form-control" type="text" id="multifocal_der_esf" value="<?php echo $orden['multifocal_der_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_cil">CIL</label>
                                      <input class="form-control" type="text" id="multifocal_der_cil" value="<?php echo $orden['multifocal_der_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <label for="monofocal_lejos_der_eje">EJE</label>
                                      <input class="form-control" type="text" id="multifocal_der_eje" value="<?php echo $orden['multifocal_der_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <label for="monofocal_lejos_der_add">ADD</label>
                                      <input class="form-control" type="text" id="multifocal_add" value="<?php echo $orden['multifocal_der_add'] ?>">
                                    </div>
                                </div> 

                                <!-- OJO IZQUIERDO -->
                                 <div class="form-group d-flex align-items-end mb-3">
                                    <label class=""><span class="mr-3 mb-4 pb-4">OI</span></label>
                                    <!-- ESF -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="multifocal_izq_esf" value="<?php echo $orden['multifocal_izq_esf'] ?>">
                                    </div>
                                    <!-- CIL -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="multifocal_izq_cil" value="<?php echo $orden['multifocal_izq_cil'] ?>">
                                    </div>
                                    <!-- EJE -->
                                    <div class="text-center mr-3">
                                      <input class="form-control" type="text" id="multifocal_izq_eje" value="<?php echo $orden['multifocal_izq_eje'] ?>">
                                    </div>
                                    <!-- ADICION -->
                                    <div class="text-center">
                                      <input class="form-control" type="text" id="multifocal_izq_add" value="<?php echo $orden['multifocal_izq_add'] ?>">
                                    </div>
                                </div>
                            <?php endif ?> 
                        </div> 
                        
                    </div>

              <!-- Fin Gradiaciones-->
            </div>
              

            <label for="estado">Estado:</label>
            <div class="row">
              <div class="col-md-6">
                <select name="estado" onchange="checkEstado()" class="form-control mb-4" id="estado<?php echo $orden['id'] ?>">
                  <option value="Reservado">Reservado</option>
                  <option value="Esperando seña">Esperando seña</option>
                  <option value="Esperando cristales">Esperando cristales</option>
                  <option value="Esperando armazón">Esperando armazón</option>
                  <option value="En taller">En taller</option>
                  <option value="Para entregar (Avisar)">Para entregar (Avisar)</option>
                  <option value="Para entregar (Avisado)">Para entregar (Avisado)</option>
                  <option value="Entregado">Entregado</option>
                </select>
              </div>
              <div class="hidden entregar_container">
                <select name="entregar" class="form-control" id="entregar">
                  <option value="Avisar">Avisar</option>
                  <option value="Avisado">Avisado</option>
                </select>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-end">
                  <a class="btn btn-primary waves-effect" target="_blank" href="comprobante.php?id_orden=<?php echo $orden['id'] ?>">Re-imprimir comprobante <i class="fa fa-print"></i></a>
              </div>

            
            </div>
            <input type="hidden" name="id_orden" id="id_orden">
          </div>
          <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn info-color white-text">Guardar</button>
          <a class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancelar</a>
        </div>
        </form>
      </div>

      
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Fin modal de edit estado-->