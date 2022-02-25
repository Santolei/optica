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
                                            <th>Orden</th>
                                            <th>Nombre</th>
                                            <th class="hidden">DNI</th>
                                            <th>Sucursal</th>
                                            <th>Fecha</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Imprimir</th>
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

<!-- SCRIPTS DE HISTORIAL DE ORDENES -->
<?php include 'scripts/historial_ordenes.php' ?>
