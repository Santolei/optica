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
                                            <th class="hidden">DNI</th>
                                            <th>Recibido</th>
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
    <?php include 'modals/modal_edit_estado_index.php' ?>
<?php endforeach ?>
<!-- SCRIPTS DE INDEX.PHP -->
<?php include 'scripts/index.php' ?>

