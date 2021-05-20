<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                	<div class="col-md-12">
                		<div class="card">

                            <div class="header">
                                <div class="d-flex justify-content-between">
                                	<h4 class="title">Órdenes pendientes</h4>
                                	<a href="historial_ordenes.php" class="mr-2 text-white boton-historial" style="font-size: 15px;">Historial de órdenes</a>
                                    
                                </div>
                            </div>
                            <div class="content">
                                <div class="table-responsive">
                                    <table style="width: 100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_ordenes">
                                        <thead class="tabla-thead white-text">
                                            <th>Orden</th>
                                            <th>Nombre</th>
                                            <th>Entrega</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center">Ver</th>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                	</div>
                </div>

            </div>

                
        </div>


<?php include 'views/footer.php' ?>

<?php foreach ($ordenes as $orden): ?>

    <!-- Modal de orden <?php echo $orden['id'] ?> -->
<div class="modal fade" id="modal_edit_estado<?php echo $orden['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify" role="document">
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
              <div class="w-50 d-flex justify-content-between">
                <p class="mb-0"><strong>Total a pagar:</strong></p> <p class="mb-0"><strong>$<?php echo $orden['total'] ?></strong></p> 
              </div>

              <div class="w-50 d-flex justify-content-between" style="border-bottom: 2px solid #444">
                <p class="mb-1"><strong>Seña:</strong></p> <p class="mb-1"><strong>$<?php echo $orden['senia'] ?></strong></p>
              </div> 

              <div class="w-50 d-flex justify-content-between mt-2">
                <p class="mb-2"><strong>Saldo:</strong></p> <p><strong style="color: #00a598">$<?php echo $orden['saldo'] ?></strong></p>
              </div> 

            <label for="estado">Estado:</label>
            <div class="row">
              <div class="col-md-12">
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
              <div class="col-md-6 hidden entregar_container">
                <select name="entregar" class="form-control" id="entregar">
                  <option value="Avisar">Avisar</option>
                  <option value="Avisado">Avisado</option>
                </select>
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
<!-- Fin modal de orden-->
    
<?php endforeach ?>
<!-- SCRIPTS DE INDEX.PHP -->
<?php include 'scripts/index.php' ?>
<!-- include 'modals/modal_edit_estado.php' ?>-->
