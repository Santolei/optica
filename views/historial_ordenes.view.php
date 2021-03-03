<?php require 'views/header.php' ?>

<div class="wrapper">

    <?php include 'views/sidebar.php' ?>

    <?php include 'views/navbar.php' ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Historial de Órdenes</h4>
                            </div>
                            <div class="content">
                                <div class="table-responsive">
                                    <table style="width: 100%; border-radius: 6px" class="display table table-striped table-sm" id="tabla_ordenes">
                                        <thead class="tabla-thead white-text">
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Sucursal</th>
                                            <th>Fecha</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Imprimir</th>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>

                                <div class="row mb-4 d-flex">
                                    <a class="btn btn-primary m-2" data-toggle="modal" data-target="#modal_add_producto">Agregar producto</a>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Ultima actualización: <?php echo $last_update ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include 'views/footer.php' ?>

<!-- SCRIPTS DE HISTORIAL DE ORDENES -->
<?php include 'scripts/historial_ordenes.php' ?>
